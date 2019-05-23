<template>
    <div>
        <label :for="name">{{title}}*</label>
        <ckeditor   :config="config" :editor='editor' v-model="text" @input="onInput"></ckeditor>
        <input type="hidden" :id="name" :name="name" v-model="text" >
    </div>
</template>

<script>
    export default {

        props:['title', 'name', 'editor', 'config'],

        data() {
            return {
                text: "",
            };
        },

        methods: {
            onInput() {
                this.$emit('input', this.text);
            }
        }
    }
</script>

<style scoped>

</style>

