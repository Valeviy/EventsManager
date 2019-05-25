<template>
<div>

    <div class="row" v-for="(input,k) in inputs" :key="k" @input="onInput">
        <div class="col-md-6 mb-3"><label>{{input_title}} *</label>
            <input type="text" class="form-control" name ="organizer-name" required="required" v-model="input.name" :placeholder="input_placeholder">
        </div>

        <div class="col-md-5 mb-3"><label>{{select_title}} *</label>
            <select class="custom-select" name = "organizer-type" required="required" v-model="input.type">
                <option disabled value="">{{select_placeholder}}</option>
                <option v-for="type in types" :value="type">{{type}}</option>
                </select>

        </div>
        <div class="col-md-1 mb-3">
        <i class="fas fa-minus-circle mt-4" @click="remove(k)" v-show="k || ( !k && inputs.length > 1)"></i>
        <i class="fas fa-plus-circle mt-4" @click="add(k)" v-show="k == inputs.length-1"></i>
        </div>
    </div>

</div>

</template>

<script>
    export default {
        props: ['types','input_title','select_title','input_placeholder','select_placeholder'],
        data() { return {
            inputs: [
                {
                    name: '',
                    type: '',
                }
            ]
        }
        },
        methods: {
            add(index) {
                this.inputs.push({ name: '', type: ''});
            },
            remove(index) {
                this.inputs.splice(index, 1);
            },
            onInput(){
                this.$emit('input', this.inputs);
            }

        },

    }
</script>

<style scoped>
i {
    font-size: 18px;
    margin-top: 2.3rem !important;
}
    .fa-minus-circle{
        color: red;
    }

.fa-plus-circle{
    color: green;
}

</style>