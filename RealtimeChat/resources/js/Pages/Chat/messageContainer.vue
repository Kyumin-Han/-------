<template>
    <div>
        <p v-for="msg in messages" :key="msg.id">
            {{ msg.message }}
        </p>
    </div>
</template>

<script>

export default {
    props:['messages'],
    
}
</script>
