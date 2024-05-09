<!-- <script setup>
import { Head, Link } from '@inertiajs/vue3';
import Layout from '@/Pages/Layout.vue';
import '@mdi/font/css/materialdesignicons.css';
import VueApexCharts from "vue3-apexcharts";
</script>

<script>
export default{
    components:{
        apexchart:VueApexCharts
    },
    data:() =>({
        bug: [
            {
                id: 1,
                description: 'Something Something Something Something Something'
            },
            {
                id: 2,
                description: 'Something Something Something Something Something'
            },
            {
                id: 3,
                description: 'Something Something Something Something Something'
            },
        ],
    }),
}
</script>

<template>
    <Layout>
        <div class="text-h6 mb-5 ms-5">Bug Report</div>
            <v-list class="mx-n4" bg-color="#262938">
                <v-list-item 
                    v-for="n in bug.length"
                    :key="n"
                >
                    <v-card class="pa-3">
                        <span class="ms-3">{{bug[n-1].id}} | {{bug[n-1].description}}</span> 
                    </v-card>
                </v-list-item>
            </v-list>
    </Layout>
</template>

<style>

</style> -->

<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Layout from '@/Pages/Layout.vue';
</script>

<script>
export default{
    data:() =>({
        first_name: null,
        alert: null,
    }),
    methods: {
        submit(first_name){
            this.alert = "First name: " + this.first_name + " successfully submitted";

        }
    },
}
</script>

<template>
    <Layout>
        Event Report
        <div>
            <v-form class="mt-5">
                <v-text-field
                    v-model="first_name"
                    label="First name"
                ></v-text-field>
                <v-btn class="mt-2" type="submit" block @click="submit(first_name)">Submit</v-btn>
            </v-form>
            <div>
                {{this.alert}}
            </div>
        </div>
    </Layout>
</template>

<style>

</style>

