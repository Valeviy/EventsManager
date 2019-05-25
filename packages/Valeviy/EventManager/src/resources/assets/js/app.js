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
        fields:[],
        beginDate:"",
    },
    methods: {}
});

