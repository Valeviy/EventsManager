<template>
    <div >
        <div class="row" v-for="(input,k) in inputs" :key="k" @input="onInput">
            <div class="col-md-6 mb-3"><label>{{title}} *</label>
                <input type="text" class="form-control" name = "field-title" required="required" :placeholder="title_placeholder" v-model="input.title" :disabled="isDisabled">
            </div>

            <div class="col-md-5 mb-3"><label>{{type}} *</label>
                <select class="custom-select" name = "field-type" required="required" v-model="input.type" :disabled="isDisabled">
                    <option disabled value="">{{type_placeholder}}</option>
                    <option v-for="type in types" :value="type">{{type}}</option>
                </select>
            </div>
            <div class="col-md-1 mb-3" :disabled="isDisabled">
                <i class="fas fa-minus-circle mt-4" @click="remove(k)" v-show="k || ( !k && inputs.length > 1)" ></i>
                <i class="fas fa-plus-circle mt-4" @click="add(k)" v-show="k == inputs.length-1" ></i>
            </div>
        </div>

    </div>

</template>

<script>
    export default {
        props: ['types', 'dis', 'title', 'title_placeholder', 'type', 'type_placeholder'],

        data() { return {
            inputs: [
                {
                    title: '',
                    type: '',
                }
            ]
        }
        },
        methods: {
            add(index) {
                if(this.dis === true){
                this.inputs.push({ title: '', type: ''});
                }
            },
            remove(index) {
                if(this.dis === true){
                    this.inputs.splice(index, 1);
                }
            },
            onInput(){
                this.$emit('input', this.inputs);
            }

        },
        computed: {
            isDisabled: function () {
                if(this.dis === false && this.inputs.length >= 1){
                    this.inputs = [];
                    this.inputs.push({ title: '', type: ''});
                }
                return !this.dis;
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