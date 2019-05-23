{{--<h3 class="mb-5 mt-5" >Step 1: Main Information</h3>--}}

<div class="row">
    <div class="col-md-12 mb-3">
        <label for="name">Title*</label>
        <input type="text" class="form-control" placeholder="Event title" id="name" name="name" v-model="name">
    </div>
</div>
<div class="row">
    <div class="col-md-6 mb-3"><label for="type">Type*</label>
        <select class="custom-select d-block w-100" id="type" required="required" name="type" v-model="type">
            @if($eventTypes)
                @foreach($eventTypes as $type)
                    <option value="{{$type}}">{{$type}}</option>
                @endforeach
            @endif
        </select>
        <div class="invalid-feedback"></div>
    </div>
    <div class="col-md-6 mb-3"><label for="number_participants">Number of participants*</label>
        <input type="text" class="form-control" placeholder="" required="required" name="numberParticipants"
               id="number_participants" v-model="numberParticipants">
        <div class="invalid-feedback"></div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mb-3"><label for="logo">Logo*</label>
        <file v-model="logo" type="file"></file>
        {{--<input type="file" class="form-control-file"  placeholder="" required="required" id="logo" name="logo" v-model="logo" >--}}
    </div>
</div>

