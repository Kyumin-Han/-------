<template>
    <!-- component -->

   
<div id="messages" class="flex flex-col space-y-4 p-3 overflow-y-auto scrollbar-thumb-blue scrollbar-thumb-rounded scrollbar-track-blue-lighter scrollbar-w-2 scrolling-touch">
   <div class="chat-message" v-if="message.user.id != $page.props.user.id">
      <div class="flex items-end">
         <div class="flex flex-col space-y-2 text-xs max-w-xs mx-2 order-2 items-start">
            <div><span class="px-4 py-2 rounded-lg inline-block rounded-bl-none bg-gray-300 text-gray-600">{{ message.user.name }} : {{ message.message }}</span></div>
         </div>
         <button @click="delmsg">삭제</button>
         <img src="https://images.unsplash.com/photo-1549078642-b2ba4bda0cdb?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=144&amp;h=144" alt="My profile" class="w-6 h-6 rounded-full order-1">
      </div>
   </div>
   <div class="chat-message" v-if="message.user.id == $page.props.user.id">
      <div class="flex items-end justify-end">
         <div class="flex flex-col space-y-2 text-xs max-w-xs mx-2 order-1 items-end">
            <div><span class="px-4 py-2 rounded-lg inline-block rounded-br-none bg-blue-600 text-white ">{{ message.user.name }} : {{ message.message }}</span></div>
         </div>
         <button @click="delmsg">삭제</button>
         <img src="https://images.unsplash.com/photo-1590031905470-a1a1feacbb0b?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=144&amp;h=144" alt="My profile" class="w-6 h-6 rounded-full order-2">
      </div>
   </div>
</div>




</template>

<script>

export default {
   props: ['message'],
   methods: {
        delmsg() {
            axios.post(`/chat/ + ${this.message.id}`)
            .then(response=>{
                
            })
            .catch(error=>{
                console.log(error)
            })

        }
    }
}
</script>

<style>
.scrollbar-w-2::-webkit-scrollbar {
  width: 0.25rem;
  height: 0.25rem;
}

.scrollbar-track-blue-lighter::-webkit-scrollbar-track {
  --bg-opacity: 1;
  background-color: #f7fafc;
  background-color: rgba(247, 250, 252, var(--bg-opacity));
}

.scrollbar-thumb-blue::-webkit-scrollbar-thumb {
  --bg-opacity: 1;
  background-color: #edf2f7;
  background-color: rgba(237, 242, 247, var(--bg-opacity));
}

.scrollbar-thumb-rounded::-webkit-scrollbar-thumb {
  border-radius: 0.25rem;
}
</style>
