<template>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</template>

        <script>
export default {
        data(){
            return{
                id:this.id,
                mnsj:this.message                
            }
        },
        mounted() {
            Echo.channel('message-pushs')
            .listen('EventMessage', (message) => {
                var m = JSON.stringify(message, null, "    ");
       
            console.log('Message Recived: '+m)
        });
}
}

</script>
