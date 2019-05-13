<template>
    <div>
        <label :for="name">{{title}}*</label>
        <ckeditor  :id="name" :name="name" :config="config" :editor='editor' v-model="text" @input="onInput"></ckeditor>
    </div>
</template>

<script>
    export default {

        props:['title', 'name', 'editor', 'config', 'value'],

        data() {
            return {
                text: this.value,
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

