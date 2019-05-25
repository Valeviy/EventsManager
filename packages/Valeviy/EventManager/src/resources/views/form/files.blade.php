<h3 class="mb-5 mt-5" >{{trans('eventmanager.step')}}  6: {{trans('eventmanager.files_and_material')}} </h3>
<div class="row">
    {{--<div class="col-md-12 mb-3">--}}
        {{--<label for="files">{{trans('eventmanager.add_files')}}</label>--}}
        <files v-model="files" button_title="{{trans('eventmanager.add_files')}}"></files>
    </div>
{{--</div>--}}
<hr>