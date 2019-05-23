window.Vue = require('vue');
require('bootstrap');
window.axios = require('axios');
window.$ = window.jQuery = require('jquery');
require('jquery-validation');
window.Popper = require('popper.js');
import CKEditor from '@ckeditor/ckeditor5-vue';
import {Datetime} from 'vue-datetime';
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
import VueUploadComponent from 'vue-upload-component';
Vue.use(CKEditor);
Vue.component("step-navigation-step", require('./components/StepNavigationStep.vue').default);
Vue.component("step-navigation",require('./components/StepNavigation.vue').default);
Vue.component("step", require('./components/Step.vue').default);
Vue.component("date-time", require('./components/DateTime.vue').default);
Vue.component("checkbox", require('./components/Checkbox.vue').default);
Vue.component("text-area",require('./components/TextArea.vue').default);
Vue.component("datetime", Datetime);
Vue.component('file-upload', VueUploadComponent);
Vue.component('file', require('./components/Files.vue').default);
Vue.component('organizer', require('./components/Organizer.vue').default);
Vue.component('file-upload', VueUploadComponent);
Vue.component('input-fields', require('./components/InputFields.vue').default);

new Vue({
    el: "#app",

    data: {
        custom_fields: false,
        name:"",
        type:"",
        logo:[],
        numberParticipants:0,
        oneday:false,
        shortDescription:"",
        regEndDate:"",
        endDate:"",
        city:"",
        address:"",
        phone:"",
        website:"",
        email:"",
        currentstep: 1,

        steps: [
            {
                id: 1,
                title: "Main information",
                icon_class: "fa fa-user-circle"
            },
            {
                id: 2,
                title: "Description and program",
                icon_class: "fa fa-th-list"
            },
            {
                id: 3,
                title: "Date and Time",
                icon_class: "fa fa-th-list"
            },
            {
                id: 4,
                title: "Contact information",
                icon_class: "fa fa-paper-plane"
            },
            {   id: 5,
                title: "Organizers",
                icon_class: "fa fa-paper-plane"
            }
            ,
            {   id: 6,
                title: "Files and additional material",
                icon_class: "fa fa-paper-plane"
            },
            {   id: 7,
                title: "Participant registration form",
                icon_class: "fa fa-paper-plane"
            }
        ],
        editorDataEvent:"<p> Some text about event",
        editorDataProgram:"<p> Some text about event program",
        editor: ClassicEditor,
        editorConfig: {
            removePlugins: [ 'ImageToolbar', 'ImageCaption', 'ImageStyle', 'ImageUpload' ],
        },
        organizers: [
        ],
        files:[
            {
             name:""
            }
        ],
        fields:[],
        beginDate:"",
    },

    methods: {
        stepChanged(step) {
            this.currentstep = step;
        },

    }
});

