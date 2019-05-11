window.Vue = require('vue');
require('bootstrap');
window.$ = window.jQuery = require('jquery');
window.Popper = require('popper.js');
import CKEditor from '@ckeditor/ckeditor5-vue';
import {Datetime} from 'vue-datetime';
import VueUploadComponent from 'vue-upload-component';
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';


Vue.component("step-navigation-step", require('./components/StepNavigationStep.vue').default);
Vue.component("step-navigation",require('./components/StepNavigation.vue').default);
Vue.component("step", require('./components/Step.vue').default);
Vue.component("date-time", require('./components/DateTime.vue').default);
Vue.component("checkbox", require('./components/Checkbox.vue').default);
Vue.component("text-area",require('./components/TextArea.vue').default);
Vue.component("datetime", Datetime);
Vue.component('file-upload', VueUploadComponent);
Vue.component('file', require('./components/Files.vue').default);
Vue.use(CKEditor);

new Vue({
    el: "#app",

    data: {

        oneday:false,

        currentstep: 1,

        steps: [
            {
                id: 1,
                title: "Main information",
                icon_class: "fa fa-user-circle-o"
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
        editorDataEvent:'<p> Some text about event',
        editorDataProgram:'<p> Some text about event program',
        editor: ClassicEditor,
        editorConfig: {
            removePlugins: [ 'ImageToolbar', 'ImageCaption', 'ImageStyle', 'ImageUpload' ],
        },
        newOrganizerName:"",
        newOrganizerType:"",
        organizers: [
            {
                name:"",
                type:""
            }
        ],
    },

    methods: {
        stepChanged(step) {
            this.currentstep = step;
        },
        addOrganizer(){
            this.organizers.push({
                name:this.newOrganizerName,
                type: this.newOrganizerType
            });
            this.newOrganizerName = '';
            this.newOrganizerType = '';
        }
    }
});

