<template>
    <app-layout>
        <message-container :messages="messages"/>
        <input-message/>
    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import MessageContainer from './messageContainer.vue';
import InputMessage from './inputMessage.vue';

export default {
    components : {
        AppLayout,
        MessageContainer,
        InputMessage,
    },

    data() {
        return {
            chatRooms : [],
            currentRoom : '',
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
        setRooms(room) {
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
        }
    },

    created() {
        this.getRooms();
    }
}
</script>