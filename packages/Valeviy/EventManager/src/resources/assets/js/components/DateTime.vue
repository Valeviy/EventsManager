<template>
    <div>
        <label :for="name">{{title}}</label>
        <datetime  :placeholder="placeholder" :type="type" :input-id="name" input-class="form-control" @input="onInput"
                  :disabled="isDisabled" v-model="date"></datetime>
        <input type="hidden" :id="name" :name="name" v-model="date">
    </div>
</template>

<script>
    export default {
        props: ['title', 'name', 'type', 'placeholder', "value", 'dis'],
        computed: {
            isDisabled: function () {
                return this.dis;
            }

        },
        data() {
            return {
                date: this.value,
            };
        },

        methods: {
            onInput() {
                this.$emit('input', this.date);
            }
        }

    }
</script>

<style scoped>

</style>