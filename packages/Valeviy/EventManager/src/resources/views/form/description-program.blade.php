
<h3 class="mb-5 mt-5" >{{trans('eventmanager.step')}}  2: {{trans('eventmanager.description_and_program')}} </h3>
<div class="row">
    <div class="col-md-12 mb-3"><label for="short-description">{{trans('eventmanager.short_description')}} *</label>
        <input type="text" class="form-control" id="shortDescription" placeholder="{!! trans('eventmanager.add_short_description') !!}" v-model="shortDescription" required="required" name="short-description">
        <div class="invalid-feedback"></div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mb-3">
        <text-area  type="text" title='{!! trans('eventmanager.full_description') !!}' id="full-description" name ="full-description" v-model="editorDataEvent"  :editor="editor" :config="editorConfig"  ></text-area>
        <div class="invalid-feedback"></div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mb-3">
        <text-area type="text" title='{!! trans('eventmanager.program') !!}' v-model="editorDataProgram" name ="editorDataProgram"  :editor="editor" :config="editorConfig" ></text-area>
        <div class="invalid-feedback"></div>
    </div>
</div>
<hr>