<template>
    <div >
        <label :for="name" >{{title}}*</label>
        <datetime :placeholder="placeholder"  :type="type" :input-id="name" input-class="form-control" :disabled="isDisabled" ></datetime>
    </div>
</template>

<script>
    export default {
        props: ['title', 'name', 'type' ,'placeholder','value'],
        computed:{
            isDisabled: function () {
                return  this.value;
            }

        }
    }
</script>

<style scoped>

</style>