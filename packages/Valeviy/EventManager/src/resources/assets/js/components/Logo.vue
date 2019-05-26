<template>
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFile" ref="file" accept="image/*" v-on:change="handleFileUpload()" aria-describedby="fileHelp">
        <label class="custom-file-label"  for="customFile">
            {{title}}
        </label>
    </div>
</template>

<script>
    export default {
        props:['name', 'title'],
        data(){
            return {
                file: ''
            }
        },

        methods: {

            handleFileUpload(){
                this.file = this.$refs.file.files[0];
                this.$emit('input', this.file);
            }
        },


    }

</script>
