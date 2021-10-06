<template>
    <div>
        <input type="text" @keyup.enter="sendMessage" v-model="message">
        <button @click="sendMessage">Send</button>
    </div>
</template>

<script>
export default {
    props:['room'],
    data() {
        return {
            message:''
        }
    },
    methods : {
        sendMessage() {
            if(this.message=='') {
                return;
            }

            axios.post('/chat/' + this.room.id +'/message', {message: this.message})
            .then(response=>{
                console.log(response.status);
                this.message = '';
                this.$emit('messagesent');
            })
            .catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>