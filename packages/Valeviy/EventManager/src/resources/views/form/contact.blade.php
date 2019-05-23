<h3 class="mb-5 mt-5" >Step 4: Contact Information</h3>
<div class="row">
    <div class="col-md-6 mb-3"><label for="city">City*</label>
        <input type="text" class="form-control" id="city" placeholder="" v-model="city" required="required" name="city">
        <div class="invalid-feedback"></div>
    </div>
    <div class="col-md-6 mb-3"><label for="address">Address*</label>
        <input type="text" class="form-control" id="address" placeholder="" v-model="address" required="required" name="address">
        <div class="invalid-feedback"></div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 mb-3"><label for="website">Website*</label>
        <input type="text" class="form-control" placeholder="" required="required" v-model="website" id="website" name="website">
        <div class="invalid-feedback"></div>
    </div>
    <div class="col-md-4 mb-3"><label for="phone">Phone*</label>
        <input type="text" class="form-control" placeholder="" required="required" v-model="phone" name="phone" id="phone">
        <div class="invalid-feedback"></div>
    </div>
    <div class="col-md-4 mb-3"><label for="email">Email*</label>
        <input type="email" class="form-control" placeholder="" required="" v-model="email" name="email" id="email">
        <div class="invalid-feedback"></div>
    </div>
</div>
<hr>