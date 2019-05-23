
<h3>Step 1</h3>


 <organizer :types='{!! json_encode($oranizerTypes) !!}' v-model="fields"></organizer>
    {{--<div class="col-md-6 mb-3"><label for="organizer">Name*</label>--}}
        {{--<input v-model="newOrganizerName" type="text" class="form-control" placeholder="" required="required" name="organizer"--}}
               {{--id="organizer">--}}
        {{--<div class="invalid-feedback"></div>--}}
    {{--</div>--}}
    {{--<div class="col-md-6 mb-3"><label for="organizer-type">Type*</label>--}}
        {{--<select class="custom-select d-block w-100" id="organizer-type" required="required" v-model="newOrganizerType" name="organizer-type">--}}
            {{--@if($oranizerTypes)--}}
                {{--@foreach($oranizerTypes as $type)--}}
                    {{--<option value="{{$type}}">{{$type}}</option>--}}
                {{--@endforeach--}}
            {{--@endif--}}
        {{--</select>--}}
        {{--<div class="invalid-feedback"></div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
        {{--<button v-on:click="addOrganizer()">Add organizer</button>--}}
    {{--</div>--}}


