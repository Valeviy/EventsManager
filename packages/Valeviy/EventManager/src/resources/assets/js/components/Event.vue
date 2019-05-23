<template>
    <div class="card box-shadow">
        <img class="card-img-top" :src="logo">
        <div class="card-body">
            <p class="card-text">{{shortDescription}}</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Registration</button>
                </div> <small class="text-muted">{{date}}</small> </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['logo','shortDescription','date'],
        name: "event"

    }
</script>

<style scoped>

</style>