<template>
<div>
        <label :for="name">{{title}}*</label>
        <ckeditor  :id="name" :name="name" :config="config" v-model="value" :editor='editor'  ></ckeditor>
</div>
</template>

<script>
    export default {

        props:['title', 'name', 'editor', 'config', 'value']


    }
</script>

<style scoped>

</style>

