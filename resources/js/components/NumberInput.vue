<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Input number between 0-100</div>
                    <input type="number" class="form-control" v-model="numberInput" required min="0" max="100">
                    <button type="button" class="btn btn-primary" v-on:click="submitNumber()">Primary</button>
                </div>
                <div class="alert alert-primary" role="alert" v-if="numberToDisplay">{{numberToDisplay}}</div>
            </div>
        </div>
    </div>
</template>

<script>

import axios from 'axios';

    export default {

        data() {
            return {
                numberInput: null,
                numberToDisplay: null
            };
        },

        methods: {

            /**
             * Submits the number to the numberSubmission API
             * Assigns the reponse data to the numberToDisplay variable
             */
            submitNumber() {
                let self = this;
                var data = {
                    number: this.numberInput
                };
                axios.post('/api/numberSubmission', data)
                    .then(function (response) {
                        self.numberToDisplay = response.data;
                    })
                    .catch(function (error) {
                        // handle error
                        console.log(error);
                    })
            },
        }
    }
</script>