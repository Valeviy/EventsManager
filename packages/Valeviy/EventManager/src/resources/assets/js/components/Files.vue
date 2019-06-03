<template>


<div>
    <div class="col-md-12 mb-5">
        <div class="btn btn-primary" v-on:click="addFiles()"><i class="fa file-uploads"></i>{{button_title}} +</div>
        <label for="files">
            <span class="fa file-uploads" aria-hidden="true"></span>
            <input type="file"  id="files" ref="files" multiple v-on:change="handleFilesUpload()" style="display:none">
        </label>
    </div>

        <div class="col-md-12 mb-5 mt-5">
            <div v-for="(file, key) in files" class="file form-control"><i class="fas fa-file mr-5"></i> {{ file.name }} <span class="remove-file ml-5" v-on:click="removeFile( key )">  <i class="fas fa-minus-circle"></i></span></div>
        </div>
</div>
</template>

<style>
.file{
    margin: 10px;
}
.fa-file{
    font-size: 20px;
    color: dodgerblue;
}
    span.remove-file{
        color: red;
        cursor: pointer;
        float: right;
    }
</style>

<script>
    export default {
props:['button_title'],
        data(){
            return {
                files: []
            }
        },


        methods: {

            addFiles(){
                this.$refs.files.click();
            },



            handleFilesUpload(){
                let uploadedFiles = this.$refs.files.files;

                for( var i = 0; i < uploadedFiles.length; i++ ){
                    this.files.push( uploadedFiles[i] );
                }
                this.$emit('input', this.files);
            },

            removeFile( key ){
                this.files.splice( key, 1 );
            }
        }
    }
</script>

