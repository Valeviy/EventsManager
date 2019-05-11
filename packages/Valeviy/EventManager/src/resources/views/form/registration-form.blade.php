<h3>Step 6</h3>

<div class="row">
    <div class="col-md-6 mb-3"><label class="mr-2" for="">Custom registration form</label>
        <label class="switch">
            <input type="checkbox">
            <span class="slider round "></span>
        </label>
    </div>
</div>
<div class="row">
    <a class="btn btn-secondary m-2" href="#">Add field</a>
</div>
<div class="row">
    <div class="col-md-6 mb-3"><label for="number_participants">Title*</label>
        <input type="text" class="form-control" placeholder="" required="required" name="number_participants"
               id="number_participants">
        <div class="invalid-feedback"></div>
    </div>
    <div class="col-md-6 mb-3"><label for="type">Type*</label>
        <select class="custom-select d-block w-100" id="type" required="required" name="type">
            @if($customTypes)
                @foreach($customTypes as $type)
                    <option value="{{$type}}">{{$type}}</option>
                @endforeach
            @endif
        </select>
        <div class="invalid-feedback"></div>
    </div>
</div>
