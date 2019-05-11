<h3>Step 1</h3>

<div class="row">
    <div class="col-md-12 mb-3">
        <label for="name">Title*</label>
        <input type="text" class="form-control" placeholder="" required="required" id="name" name="name">
        <div class="invalid-feedback"></div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 mb-3"><label for="type">Type*</label>
        <select class="custom-select d-block w-100" id="type" required="required" name="type">
            @if($eventTypes)
                @foreach($eventTypes as $type)
                    <option value="{{$type}}">{{$type}}</option>
                @endforeach
            @endif
        </select>
        <div class="invalid-feedback"></div>
    </div>
    <div class="col-md-6 mb-3"><label for="number_participants">Number of participants*</label>
        <input type="text" class="form-control" placeholder="" required="required" name="number_participants"
               id="number_participants">
        <div class="invalid-feedback"></div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mb-3"><label for="logo">Logo*</label>
        <input type="file" class="form-control-file" placeholder="" required="required" id="logo" name="logo">
    </div>
</div>
