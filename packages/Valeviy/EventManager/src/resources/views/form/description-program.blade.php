<div class="row">
    <div class="col-md-12 mb-3"><label for="short-description">Short description*</label>
        <input type="text" class="form-control" id="shortDescription" v-model="shortDescription" required="required" name="short-description">
        <div class="invalid-feedback"></div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mb-3">
        <text-area  type="text" title="Full description" id="full-description" name ="full-description" v-model="editorDataEvent"  :editor="editor"  ></text-area>
        <div class="invalid-feedback"></div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mb-3">
        <text-area type="text" title="Program" v-model="editorDataProgram" name ="editorDataProgram"  :editor="editor" :config="editorConfig" ></text-area>
        <div class="invalid-feedback"></div>
    </div>
</div>
<hr>