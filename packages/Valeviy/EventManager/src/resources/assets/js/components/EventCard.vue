<template>
    <div class="py-4 ">
        <div class="container">
            <h2>{{title}}</h2>
            <div class="row">
                <div  v-for="event in events" class="col-md-4 p-3">
                <div class="card box-shadow">
                    <img class="card-img-top" :src="event.logo" :onclick="link + event.id" >
                    <div class="card-body">
                        <h4 class="card-title" >{{ event.name }}</h4>
                        <small class="text-muted">{{event.type}}</small>
                        <p class="card-text mt-1"  >{{event.short_description }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a  :href="link + event.id" class="btn btn-outline-primary">{{button_title}}</a>
                                </div>
                            <small class="text-muted">{{ dateFormat(event.beginning)}}</small>
                            <small class="text-muted">{{ event.city}}</small> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { DateTime } from "luxon";
    export default {
        props:{
            title: String,
            events: Array,
            link: String,
            button_title: String,
            locale: String
        },
        data(){
            return{

            }
        },

        methods:{
            dateFormat(dateTime){
                return DateTime.fromISO(dateTime).setLocale(this.locale).toFormat('ff');
            }
        }
    }
</script>

<style scoped>
    .card-img-top{
        width: 100%;
        height: 15vw;
        object-fit: cover;
    }
    .card-title{
        text-overflow: ellipsis;
        width: inherit;
        white-space:pre;
        overflow:hidden;
    }
    .card-text{
        text-overflow: ellipsis;
        width: inherit;
        white-space:pre;
        overflow:hidden;
    }

</style>