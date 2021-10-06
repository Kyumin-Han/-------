<template>
    <app-layout>
        <template #header>
            <chat-room-selection :rooms="chatRooms" :currentRoom="currentRoom" v-on:roomChanged="setRoom($event)"/>
        </template>
        <message-container :messages="messages"/>
        <input-message :room="currentRoom" v-on:messagesent="getMessages"/>
    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import MessageContainer from './messageContainer.vue';
import InputMessage from './inputMessage.vue';
import ChatRoomSelection from './chatRoomSelection.vue'

export default {
    components : {
        AppLayout,
        MessageContainer,
        InputMessage,
        ChatRoomSelection,
    },

    data() {
        return {
            chatRooms : [],
            currentRoom : {},
            messages : [],
        }
    },

    methods : {
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
            this.getMessages();
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
        }
    },

    created() {
        // alert('created container')
        this.getRooms();
    }
}
</script>