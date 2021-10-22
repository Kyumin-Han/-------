<template>
    <app-layout>
        <template #header>
            <chat-room-selection :rooms="chatRooms" :currentRoom="currentRoom" v-on:roomChanged="setRoom($event)"/>
        </template>
        <!-- <message-container :messages="messages"/> -->
        <!-- <styled-message-container :messages="messages"/> -->
        <div class="flex flex-col justify-between flex-1 h-screen p:2 sm:p-6">
            <div v-if="messages" class="p-2 flex flex-col-reverse overflow-scroll">
                <div v-for="(msg, index) in messages.data" :key="index">
                    <styled-message-item :message="msg"/>
                </div>
            </div>
        </div>
        <input-message :room="currentRoom" v-on:messagesent="getMessages"/>
    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import InputMessage from './inputMessage.vue';
import ChatRoomSelection from './chatRoomSelection.vue'
import StyledMessageItem from './styledMessageItem.vue';

export default {
    components : {
        AppLayout,
        InputMessage,
        ChatRoomSelection,
        StyledMessageItem,
    },

    data() {
        return {
            chatRooms : [],
            currentRoom : {},
            messages : null,
        }
    },
    watch: {
        currentRoom(val, oldVal) {
            // alert('watch:currentRoom');
            if(oldVal.id) {
                this.disconnect(oldVal);
            }
            this.connect()
        }
    },

    methods : {
        connect() {
            // alert('connect')
            // 방이 변경 되었을 때, 이 메소드가 호출
            // 이 방의 메세지를 불러와 출력한다.
            // 변경 된 방 정보는 currentRoom이다
            this.getMessages();
            const vm = this;
            window.Echo.private('chat.' + this.currentRoom.id).listen('.message.new', e=>{
                // vm.getMessages();
                this.messages.data = [e.msg, ...this.messages.data];
            })
            // 채널에 구독신청을 하기 위해서 설정한 이벤트 채널 이름의 앞에 .을 붙여준다.
            // 이벤트 listen할 때의 람다 안에서 뷰 인스턴스의 메소드를 불러 주어야 한다.
            // 따라서 그 뷰 인스턴스를 나타내는 변수를 만들고 메소드 안에서는 그 변수를 this 대신 사용한다.
        },
        disconnect(room) {
            window.Echo.leave('chat.' + room.id)
        },
        getRooms() {
            axios.get('/chat/rooms')
            .then(response=>{
                this.chatRooms = response.data;
                this.setRoom(response.data[0]);
            })
            .catch(error=>{
                console.log(error);
            })
        },
        setRoom(room) {
            // alert('setRoom')
            this.currentRoom = room;
            // this.getMessages();
        },
        getMessages() {
            axios.get('/chat/room/' + this.currentRoom.id + '/messages').then(response=>{
                this.messages = response.data;
            })
            .catch(error=>{
                console.log(error);
            })

            // let response = await axios.get('/chat/room/' + this.currentRoom.id + '/messages');
            // this.messages = response.data;
        },
        getMoreMessages() {
            if(this.messages == null) return;
            if(this.messages.current_page == this.messages.last_page) {
                return;
            }
            axios.get(this.messages.next_page_url).then(response=>{
                // this.messages = response.data;
                // this.messages.data = [...this.messages.data, ...response.data.data]
                this.messages = {...response.data, 'data':[...this.messages.data, ...response.data.data]};
            }).catch(error=>{
                console.log(error);
            });
        }
    },
    mounted() {
        window.addEventListener('scroll', debounce((e) => {
            // console.log('scrolled')
            // console.log(document.documentElement.offsetHeight)
            // console.log(document.documentElement.scrollTop)
            // console.log(window.innerHeight)

            if(document.documentElement.scrollTop < 10) {
                this.getMoreMessages();
            }
        }, 100));
    },
    created() {
        // alert('created container')
        this.getRooms();
    }
}
</script>