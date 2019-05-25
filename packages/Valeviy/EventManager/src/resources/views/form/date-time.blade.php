<h3 class="mb-5 mt-5" >{{trans('eventmanager.step')}}  3: {{trans('eventmanager.date_time')}} </h3>

<div class="row">
    <div class="col-md-6 mb-3">
<checkbox title='{!! trans('eventmanager.oneday_event') !!}' name="one-day" v-model="oneday" ></checkbox>
    </div>
</div>
<div class="row">
    <div class="col-md-6 mb-3">
        <date-time title='{!! trans('eventmanager.beginning_date') !!} *' type="datetime" v-model="beginDate" name="beginning" placeholder='{!! trans('eventmanager.select_beg_day') !!}'></date-time>

    </div>
    <div class="col-md-6 mb-3">
        <date-time title='{!! trans('eventmanager.ending_date') !!}' name="ending" type="datetime" v-model="endDate" :dis="oneday" placeholder='{!! trans('eventmanager.select_end_day') !!}' ></date-time>
    </div>
</div>
<div class="row">
    <div class="col-md-6 mb-3">
        <date-time title='{!! trans('eventmanager.registration_ending') !!}' type="datetime" name="reg_end" v-model="regEndDate" placeholder='{!! trans('eventmanager.select_reg_day') !!}'></date-time>
    </div>
</div>
<hr>