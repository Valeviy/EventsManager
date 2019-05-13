<h3>Step 2</h3>

<div class="row">
    <div class="col-md-6 mb-3">
<checkbox title="Oneday event" name="one-day" v-model="oneday" ></checkbox>
    </div>
</div>
<div class="row">
    <div class="col-md-6 mb-3">
        <date-time title="Beginning date" type="datetime" v-model="beginDate" name="beginning" placeholder="Select beginning date"></date-time>

    </div>
    <div class="col-md-6 mb-3">
        <date-time title="Ending date" name="ending" type="datetime" v-model="endDate" :dis="oneday" placeholder="Select ending date" ></date-time>
    </div>
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <date-time title="Registration ending" type="datetime" name="reg_end" v-model="regEndDate" placeholder="Select date"></date-time>
    </div>
</div>