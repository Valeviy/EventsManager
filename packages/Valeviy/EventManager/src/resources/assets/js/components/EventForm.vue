<template>

    <form method="POST" action="" @submit.prevent="onSubmit">

        <h3 class="mb-5 mt-5">{{step_name}} 1: {{step1.name}}</h3>

        <div class="row">
            <div class="col-md-12 mb-3">
                <label for="name">{{step1.title}} *</label>
                <input type="text" class="form-control" :placeholder='step1.title_placeholder' id="name"
                       required="required" name="name" v-model="form.name">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3"><label for="type">{{step1.type}} *</label>
                <select class="custom-select d-block w-100" id="type" required="required" name="type"
                        v-model="form.type">
                    <option disabled value="">{{step1.type_placeholder}}</option>
                    <option v-for="type in event_types" :value="type">{{type}}</option>
                </select>
            </div>
            <div class="col-md-6 mb-3"><label for="number_participants">{{step1.number_of_participants}} </label>
                <input type="text" class="form-control" :placeholder='step1.number_of_participants_placeholder'
                       name="numberParticipants"
                       id="number_participants" v-model="form.numberParticipants">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-3"><label for="logo">{{step1.logo}}</label>
                <logo v-model="form.logo" name="logo" :title='step1.logo_placeholder'></logo>
            </div>
        </div>
        <hr>

        <h3 class="mb-5 mt-5">{{step_name}} 2: {{step2.name}} </h3>
        <div class="row">
            <div class="col-md-12 mb-3"><label for="short-description"> {{step2.short_description}} *</label>
                <input type="text" class="form-control" id="shortDescription"
                       :placeholder='step2.short_description_placeholder' v-model="form.shortDescription"
                       required="required" name="short-description">
                <div class="invalid-feedback"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-3">
                <text-area type="text" :title='step2.full_description' id="full-description" name="full-description"
                           v-model="form.editorDataEvent" :editor="editor" :config="helps.editorConfig"></text-area>
                <div class="invalid-feedback"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-3">
                <text-area type="text" :title='step2.program' v-model="form.editorDataProgram" name="editorDataProgram"
                           :editor="editor" :config="helps.editorConfig"></text-area>
                <div class="invalid-feedback"></div>
            </div>
        </div>
        <hr>

        <h3 class="mb-5 mt-5">{{step_name}} 3: {{step3.name}} </h3>

        <div class="row">
            <div class="col-md-6 mb-3">
                <checkbox :title='step3.oneday' name="one-day" v-model="helps.oneday"></checkbox>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <date-time :title='step3.beginning' type="datetime" v-model="form.beginDate" name="beginning"
                           :placeholder='step3.beginning_placeholder'></date-time>

            </div>
            <div class="col-md-6 mb-3">
                <date-time :title='step3.ending' name="ending" type="datetime" v-model="form.endDate"
                           :dis="helps.oneday" :placeholder='step3.ending_placeholder'></date-time>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <date-time :title='step3.reg_day' type="datetime" name="reg_end" v-model="form.regEndDate"
                           :placeholder='step3.reg_day_placeholder'></date-time>
            </div>
        </div>
        <hr>


        <h3 class="mb-5 mt-5">{{step_name}} 4: {{step4.name}} </h3>
        <div class="row">
            <div class="col-md-6 mb-3"><label for="city">{{step4.city}} *</label>
                <input type="text" class="form-control" id="city" :placeholder='step4.city_placeholder'
                       v-model="form.city" required="required" name="city">
            </div>
            <div class="col-md-6 mb-3"><label for="address">{{step4.address}} *</label>
                <input type="text" class="form-control" id="address" :placeholder='step4.address_placeholder'
                       v-model="form.address" required="required" name="address">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-3"><label for="website">{{step4.website}}</label>
                <input type="text" class="form-control" :placeholder='step4.website_placeholder' v-model="form.website"
                       id="website" name="website">
            </div>
            <div class="col-md-4 mb-3"><label for="phone">{{step4.phone}} *</label>
                <input type="text" class="form-control" :placeholder='step4.phone_placeholder' required="required"
                       v-model="form.phone" name="phone" id="phone">
            </div>
            <div class="col-md-4 mb-3"><label for="email">{{step4.email}} *</label>
                <input type="email" class="form-control" :placeholder='step4.email_placeholder' required="required"
                       v-model="form.email" name="email" id="email">
            </div>
        </div>
        <hr>

        <h3 class="mb-5 mt-5"> {{step_name}} 5 : {{step5.name}} </h3>
        <organizer :input_title='step5.input_title' :select_placeholder='step5.select_placeholder'
                   :select_title='step5.select_title' :input_placeholder='step5.input_placeholder' :types='organizer_types'
                   v-model="form.organizers"></organizer>
        <hr>


        <h3 class="mb-5 mt-5">{{step_name}} 6: {{step6.name}}</h3>
        <div class="row">
            <files v-model="form.files" :button_title="step6.button"></files>
        </div>
        <hr>


        <h3 class="mb-5 mt-5">{{step_name}} 7: {{step7.name}}</h3>
        <checkbox :title='step7.checkbox_name' v-model="helps.custom_fields"></checkbox>
        <input-fields :title='step7.input_title' :title_placeholder='step7.input_placeholder' :type='step7.select_title'
                      :type_placeholder='step7.select_placeholder' :types='field_types' v-model="form.fields"
                      :dis="helps.custom_fields"></input-fields>
        <hr>


        <div class="row">
            <div class="col-md-12 text-left">
                <button class="btn btn-primary btn-lg btn-block mt-5">{{submit_title}}</button>
            </div>
        </div>

    </form>
</template>

<script>
    import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

    export default {
        props: {
            step_name: String,
            button_name: String,
            submit_title: String,
            event_types: Array,
            organizer_types: Array,
            field_types: Array,
            step1: Object,
            step2: Object,
            step3: Object,
            step4: Object,
            step5: Object,
            step6: Object,
            step7: Object,
        },
        data() {
            return {
                editor: ClassicEditor,
                form: {
                    name: "",
                    type: "",
                    logo: [],
                    numberParticipants: null,
                    shortDescription: "",
                    regEndDate: "",
                    endDate: null,
                    city: "",
                    address: "",
                    phone: "",
                    website: "",
                    email: "",
                    editorDataEvent: "",
                    editorDataProgram: "",
                    organizers: [],
                    files: [],
                    fields: [],
                    beginDate: "",
                },
                helps: {
                    editorConfig: {
                        removePlugins: ['ImageToolbar', 'ImageCaption', 'ImageStyle', 'ImageUpload'],
                        placeholder: 'Type some text about event...',
                    },
                    custom_fields: false,
                    oneday: false,
                }
            }
        },
        methods: {

            onSubmit() {

                let formData = new FormData();
                formData.append("name", this.form.name);
                formData.append("type", this.form.type);
                formData.append("logo", this.form.logo);
                formData.append("number_participants", this.form.numberParticipants);
                formData.append("short_description", this.form.shortDescription);
                formData.append("full_description", this.form.editorDataEvent);
                formData.append("program", this.form.editorDataProgram);
                formData.append("reg_end", this.form.regEndDate);
                formData.append("beginning", this.form.beginDate);
                formData.append("ending", this.form.endDate);
                formData.append("city", this.form.city);
                formData.append("address", this.form.address);
                formData.append("phone", this.form.phone);
                formData.append("website", this.form.website);
                formData.append("email", this.form.email);

                for (var i = 0; i < this.form.files.length; i++) {
                    let file = this.form.files[i];
                    formData.append('files[' + i + ']', file);
                }
                formData.append('custom_fields', JSON.stringify(this.form.fields));
                formData.append('organizers', JSON.stringify(this.form.organizers));

                axios.post('/event',
                    formData,
                    {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }
                    }
                ).then(function (response) {
                    document.location = response.data.redirect

                })
                    .catch(function () {

                    });
            },
        }
    }
</script>

<style scoped>

</style>