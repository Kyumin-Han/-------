<template>
    <div class="h-100 w-full">
        <div class="p-2 flex flex-col-reverse overflow-scroll">
            <p v-for="msg in messages" :key="msg.id">
                <styled-message-item :message="msg"/>
            </p>
        </div>
    </div>
</template>

<script>
import StyledMessageItem from './styledMessageItem.vue';
export default {
    props:['messages'],
    components : {StyledMessageItem},
    
}
</script>
