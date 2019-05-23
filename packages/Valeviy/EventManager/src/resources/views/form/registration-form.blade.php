<h3 class="mb-5 mt-5" >Step 7: Participant registration form</h3>


<checkbox title="Custom registration form"  v-model="custom_fields"></checkbox>

<input-fields :types='{!! json_encode($customTypes)!!}' v-model="fields" :dis="custom_fields"></input-fields>
<hr>
