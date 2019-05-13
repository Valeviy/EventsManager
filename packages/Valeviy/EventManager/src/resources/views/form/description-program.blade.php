<div class="row">
    <div class="col-md-12 mb-3"><label for="short-description">Short description*</label>
        <input type="text" class="form-control" id="shortDescription" v-model="short-description" required="required" name="short-description">
        <div class="invalid-feedback"></div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mb-3">
        <text-area title="Full description" v-model="editorDataEvent" name="full-description" :editor="editor" :config="editorConfig" ></text-area>
        <div class="invalid-feedback"></div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mb-3">
        <text-area title="Program" v-model="editorDataProgram" name="Program" :editor="editor" :config="editorConfig" ></text-area>
        <div class="invalid-feedback"></div>
    </div>
</div>
