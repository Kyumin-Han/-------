<template>
    <div class="h-96 w-full">
        <div class="p-2 flex flex-col-reverse overflow-scroll">
            <p v-for="msg in messages" :key="msg.id">
                <message-item :message="msg"/>
            </p>
        </div>
    </div>
</template>

<script>
import MessageItem from './messageItem.vue';
export default {
    props:['messages'],
    components : {MessageItem}
}
</script>
