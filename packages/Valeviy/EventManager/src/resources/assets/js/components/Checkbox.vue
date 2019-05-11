<template>
    <div>
    <label class="mr-2" :for="name">{{title}}</label>
    <label class="switch">
        <input type="checkbox" :id="name" :checked="value"
               @change="$emit('input', $event.target.checked)">
        <span class="slider round"></span>

    </label>
    </div>
</template>

<script>
    export default {
        props:['title','name','value']
    }
</script>

<style scoped>

</style>