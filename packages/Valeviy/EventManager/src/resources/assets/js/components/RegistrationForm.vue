<template>
    <div>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        {{modal_title}}
    </button>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"> {{modal_title}} </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row" v-for="(event_field, n) in event_fields" :key="n">
                        <div class="col-md-12 mb-3">
                            <label >{{event_field['title']}} *</label>
                            <input type="phone" class="form-control" :placeholder="event_field['title']" :id="event_field['title']"
                                   required="required"  v-model="form[n]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{closebutton_title}}</button>
                    <button type="button" v-on:click="registartion()" class="btn btn-primary">{{regbutton_title}}</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</template>

<script>
    export default {
        name: "RegistrationForm",
        props:{
            modal_title: String,
            regbutton_title: String,
            closebutton_title: String,
            event_fields: Array,
            user_id: String,
            event_id: String
        },
        data(){return{
            form:[

            ]
        }},
        methods:{
            registartion(){

                let formData = new FormData();
                formData.append("user_id", Number(this.user_id));
                formData.append("event_id", Number(this.event_id));
                let filled_form = {}

                for (let i = 0; i < this.form.length; i++){
                    filled_form [this.event_fields[i]['title']] = this.form[i];
                }


                formData.append("filled_fields", JSON.stringify(filled_form));
                axios.post('/events/'+ this.event_id,
                    formData
                ).then(function (response) {
                   alert("Регистрация прошла успешно!")

                })
                    .catch(function () {
                        console.log("kjhgfg")
                    });
            }
        }
    }
</script>

<style scoped>

</style>