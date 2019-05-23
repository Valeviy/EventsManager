<template>
    <div >

        <div class="row" v-for="(input,k) in inputs" :key="k" @input="onInput">
            <div class="col-md-5 mb-3"><label>Title*</label>
                <input type="text" class="form-control" name = "field-title" required v-model="input.title" :disabled="isDisabled">
            </div>

            <div class="col-md-5 mb-3"><label>Type*</label>
                <select class="custom-select d-block w-100" name = "field-type" required="required" v-model="input.type" :disabled="isDisabled">
                    <option v-for="type in types" :value="type">{{type}}</option>
                </select>
            </div>
            <div class="col-md-1 mb-3">
                <i class="fas fa-minus-circle mt-4" @click="remove(k)" v-show="k || ( !k && inputs.length > 1)" :disabled="isDisabled"></i>
                <i class="fas fa-plus-circle mt-4" @click="add(k)" v-show="k == inputs.length-1" :disabled="isDisabled"></i>
            </div>
        </div>

    </div>

</template>

<script>
    export default {
        props: ['types', 'dis'],

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
                this.inputs.push({ title: '', type: ''});
            },
            remove(index) {
                this.inputs.splice(index, 1);
            },
            onInput(){
                this.$emit('input', this.inputs);
            }

        },
        computed: {
            isDisabled: function () {
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