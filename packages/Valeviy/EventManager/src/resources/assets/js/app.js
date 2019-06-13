


        window.Vue = require('vue');
        require('bootstrap');

        window.axios = require('axios');
        window.$ = window.jQuery = require('jquery');
        require('jquery-validation');
        require('./eventmanager');
        window.Popper = require('popper.js');
        import CKEditor from '@ckeditor/ckeditor5-vue';
        import {Datetime} from 'vue-datetime';
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
        Vue.component('event-form', require('./components/EventForm.vue').default);
        Vue.component('event-card', require('./components/EventCard.vue').default);
        Vue.component('event-request',require('./components/EventRequest.vue').default);
        Vue.component('registration-form',require('./components/RegistrationForm.vue').default);
        new Vue({
            el: "#app",
        });


