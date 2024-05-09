<script setup>
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
        filter: ['one', 'two', 'three', 'Past 3 months'],
        filter_default: ['Past 3 months'],
        answers_per_week: 999,
        answers_per_week_percentage: 999,
        top_region_responder: 'Manila',
        top_region_responder_percentage:999,
        recent_event_rate: 3,
        current_mood:'Happy',
        emoticon:'https://i.pinimg.com/originals/9d/cb/e6/9dcbe69e4a216e2d69f8aedaba89bc60.jpg',
        options: {
            labels:['happy','neutral','sad'],
        },
        series: [44, 55, 41],
        location: 'Manila',
        recent_event: 'Amdocs Coachella',
        top_answers: [
            {
                id: 1,
                region: 'Manila',
                mood:'Happy',
                reason:'Something Something Something Something Something'
            },
            {
                id: 2,
                region: 'Manila',
                mood:'Happy',
                reason:'Something Something Something Something Something'
            },
            {
                id: 3,
                region: 'Manila',
                mood:'Happy',
                reason:'Something Something Something Something Something'
            },
        ],
    }),
}
</script>

<template>
    <Layout>
        <div class="text-h6 mb-5 ms-5">Well Being Report</div>
        <v-row class="ms-5">
            <div class="me-auto" width=20%>
                <v-select rounded
                bg-color="white"
                variant="solo"
                density="compact"
                v-model="filter_default"
                :items="filter"
                ></v-select>
            </div>
            <div class="mt-2 me-2">
                Location:
            </div>
            <div class="me-5" width=20%>
                <v-select rounded
                bg-color="white"
                variant="solo"
                density="compact"
                v-model="filter_default"
                :items="filter"
                ></v-select>
            </div>
            <div class="mt-2 me-2">
                Region:
            </div>
            <div class="me-8" width=20%>
                <v-select rounded
                bg-color="white"
                variant="solo"
                density="compact"
                v-model="filter_default"
                :items="filter"
                ></v-select>
            </div>
        </v-row>
        
        <div class="mx-5">
            <v-row>
                <v-col cols="8">
                    <v-row>
                        <v-col>
                            <v-card elevation="5">
                                <div class="ma-3">Answers per week</div>
                                <div class="text-center text-h5 font-weight-bold">
                                    {{answers_per_week}}
                                </div>
                                <div class="text-center my-3">
                                    <span class="text-green">+{{answers_per_week_percentage}}%</span>
                                    <span> from Last Week</span>
                                </div>
                            </v-card>
                        </v-col>
                        <v-col>
                            <v-card elevation="5">
                                <div class="ma-3">Top Region Responder</div>
                                <div class="text-center text-h5 font-weight-bold">
                                    {{top_region_responder}}
                                </div>
                                <div class="text-center my-3">
                                    <span class="text-green">+{{top_region_responder_percentage}}%</span>
                                    <span> from Last Week</span>
                                </div>
                            </v-card>
                        </v-col>
                    </v-row>
                    <v-row>
                        <v-col>
                            <v-card elevation="5" height=100%>
                                <div class="mx-3 mt-2">Mood Chart</div>
                                <div class="d-flex justify-center">
                                    <apexchart width="270" type="donut" :options="options" :series="series"></apexchart>
                                </div>
                            </v-card>
                        </v-col>
                    </v-row>
                </v-col>
                <v-col cols="4">
                    <v-card elevation="5" height=100%>
                        <div class="mx-3 mt-2">
                            <span>Employees Current Mood: </span><span class="font-weight-black">{{current_mood}}</span> 
                        </div>
                        <div>
                            <v-img class="mx-auto mt-5"
                            :width="250"
                            :src="emoticon"
                            ></v-img>
                        </div>
                    </v-card>
                </v-col>
            </v-row>
            <div class="text-center text-5 hfont-weight-bold mt-4">
                Top Recent Well Being Answers
            </div>
            <v-list class="mx-n4" bg-color="#262938">
                <v-list-item 
                    v-for="n in top_answers.length"
                    :key="n"
                >
                    <v-card class="pa-3">
                        <span>{{top_answers[n-1].id}} | Region: {{top_answers[n-1].region}}</span> 
                        <span class="ms-16">Mood: {{top_answers[n-1].mood}}</span>
                        <span class="ms-16">Reason: {{top_answers[n-1].reason}}</span>
                    </v-card>
                </v-list-item>
            </v-list>
        </div>
    </Layout>
</template>

<style>

</style>

