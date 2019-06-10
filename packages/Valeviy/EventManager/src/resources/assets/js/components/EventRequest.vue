<template>
    <div class="container">
        <div class="row">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col" v-for="title in table_titles">{{title}}</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="event in events">
                    <th scope="row">{{event.id}}</th>
                    <td><a :href='"/moderate/"+event.id'> {{event.name}}</a></td>
                    <td>{{event.status}}</td>
                    <td><button v-on:click="acc(event.id)" class="btn btn-outline-success">Принять</button></td>
                    <td><a href="" class="btn btn-outline-danger">Отклонить</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        name: "EventRequest",
        props:{
            table_titles: Array,
            events:Array,
            message_title: String

        },
        methods:{
            acc(event_id){

                let formData = new FormData();
                formData.append("event_id", event_id);
                axios.post('/moderate',
                    formData
                ).then(function (response) {

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