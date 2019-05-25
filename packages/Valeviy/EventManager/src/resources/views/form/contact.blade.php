<h3 class="mb-5 mt-5" >{{trans('eventmanager.step')}}  4: {{trans('eventmanager.contact_information')}} </h3>
<div class="row">
    <div class="col-md-6 mb-3"><label for="city"> {{trans('eventmanager.city')}} *</label>
        <input type="text" class="form-control" id="city" placeholder='{!! trans('eventmanager.add_city') !!}' v-model="city" required="required" name="city">
    </div>
    <div class="col-md-6 mb-3"><label for="address">{{trans('eventmanager.address')}} *</label>
        <input type="text" class="form-control" id="address" placeholder='{!! trans('eventmanager.add_address') !!}' v-model="address" required="required" name="address">
    </div>
</div>
<div class="row">
    <div class="col-md-4 mb-3"><label for="website">{{trans('eventmanager.website')}} </label>
        <input type="text" class="form-control" placeholder='{!! trans('eventmanager.add_website') !!}' v-model="website" id="website" name="website">
    </div>
    <div class="col-md-4 mb-3"><label for="phone">{{trans('eventmanager.phone')}} *</label>
        <input type="text" class="form-control" placeholder='{!! trans('eventmanager.add_phone') !!}' required="required" v-model="phone" name="phone" id="phone">
    </div>
    <div class="col-md-4 mb-3"><label for="email">{{trans('eventmanager.email')}} *</label>
        <input type="email" class="form-control" placeholder='{!! trans('eventmanager.add_email') !!}' required="required" v-model="email" name="email" id="email">
    </div>
</div>
<hr>