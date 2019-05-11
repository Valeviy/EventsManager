<template>
<div>
    <div class="col-md-6 mb-3"><label for="number_participants">Name*</label>
        <input type="text" class="form-control" placeholder="" required="required" name="number_participants"
               id="number_participants">
        <div class="invalid-feedback"></div>
    </div>
    <div class="col-md-6 mb-3"><label for="type">Type*</label>
        <select class="custom-select d-block w-100" id="type" required="required" name="type">
            @if($oranizerTypes)
            @foreach($oranizerTypes as $type)
            <option value="{{$type}}">{{$type}}</option>
            @endforeach
            @endif
        </select>
        <div class="invalid-feedback"></div>
    </div>
    <div class="col-md-6">
        <a class="btn btn-secondary m-2" href="#">Add organizer</a>
    </div>
</div>
</template>

<script>
    export default {
        name: "Organizers

        methods:{
            count: function () {
                let result = []
                for (let i = 0; i < this.count; i++){
                    result[i] = ['titl']
                }
            }
        }
    }
</script>

<style scoped>

</style>