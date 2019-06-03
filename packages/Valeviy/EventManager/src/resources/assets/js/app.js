window.Vue = require('vue');
require('bootstrap');

window.axios = require('axios');
window.$ = window.jQuery = require('jquery');
require('jquery-validation');
require('./eventmanager');
window.Popper = require('popper.js');
import CKEditor from '@ckeditor/ckeditor5-vue';
import {Datetime} from 'vue-datetime';
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
import VueUploadComponent from 'vue-upload-component';
Vue.use(CKEditor);

Vue.component("date-time", require('./components/DateTime.vue').default);
Vue.component("checkbox", require('./components/Checkbox.vue').default);
Vue.component("text-area",require('./components/TextArea.vue').default);
Vue.component("datetime", Datetime);
Vue.component('file-upload', VueUploadComponent);
Vue.component('logo', require('./components/Logo.vue').default);
Vue.component('organizer', require('./components/Organizer.vue').default);
Vue.component('file-upload', VueUploadComponent);
Vue.component('input-fields', require('./components/InputFields.vue').default);
Vue.component('files', require('./components/Files.vue').default);

new Vue({
    el: "#app",

    data: {
        custom_fields: false,
        name:"",
        type:"",
        logo:[],
        numberParticipants:null,
        oneday:false,
        shortDescription:"",
        regEndDate:"",
        endDate:null,
        city:"",
        address:"",
        phone:"",
        website:"",
        email:"",
        currentstep: 1,
        editorDataEvent:"",
        editorDataProgram:"",
        editor: ClassicEditor,
        editorConfig: {
            removePlugins: [ 'ImageToolbar', 'ImageCaption', 'ImageStyle', 'ImageUpload' ],
            placeholder: 'Type some text about event...',
        },
        organizers: [
        ],
        files:[
        ],
        fields:[

        ],
        beginDate:"",
    },
        methods: {

            onSubmit() {

                let formData = new FormData();
                formData.append("name", this.name);
                formData.append("type",this.type);
                formData.append("logo", this.logo);
                formData.append("number_participants", this.numberParticipants);
                formData.append("short_description", this.shortDescription);
                formData.append("full_description", this.editorDataEvent);
                formData.append("program", this.editorDataProgram);
                formData.append("reg_end", this.regEndDate);
                formData.append("beginning", this.beginDate);
                formData.append("ending", this.endDate);
                formData.append("city",this.city);
                formData.append("address", this.address);
                formData.append("phone", this.phone);
                formData.append("website", this.website);
                formData.append("email", this.email);

                for (var i = 0; i < this.files.length; i++) {
                    let file = this.files[i];
                    formData.append('files[' + i + ']', file);
                }

                //formData.append('files', this.files);
                formData.append('custom_fields', JSON.stringify(this.fields));
                formData.append('organizers', JSON.stringify(this.organizers));



                axios.post('/event',
                    formData,
                    {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }
                    }
                ).then(function (response) {
                    console.log('SUCCESS!!');
                    document.location = response.data.redirect

                })
                    .catch(function () {
                        console.log('FAILURE!!');
                    });
            },
        }

});

