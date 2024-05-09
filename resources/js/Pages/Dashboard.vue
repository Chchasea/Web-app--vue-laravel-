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
        recent_event: 'Amdocs Coachella'
    }),
}
</script>

<template>
    <Layout>
        <div class="text-h6 mb-5 ms-5">Dashboard</div>
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
                    <v-col cols="6">
                        <v-card elevation="5" height=100%>
                            <div class="mx-3 mt-2">Mood Chart</div>
                            <div class="d-flex justify-center">
                                <apexchart width="270" type="donut" :options="options" :series="series"></apexchart>
                            </div>
                        </v-card>
                    </v-col>
                    <v-col cols="6">
                        <v-card elevation="5" height=100%>
                            <div class="mx-3 mt-2">
                                <span>Employees Current Mood: </span><span class="font-weight-black">{{current_mood}}</span> 
                            </div>
                            <div>
                                <v-img class="mx-auto mt-3"
                                :width="120"
                                :src="emoticon"
                                ></v-img>
                            </div>
                        </v-card>
                    </v-col>
                </v-row>
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
                            <div class="ma-3"> 
                                <span>Recent Event</span> <span>{{ location }}</span> 
                            </div>
                            <div class="text-center text-h5 font-weight-bold">
                                {{recent_event}}
                            </div>
                            <div class="text-center my-3">
                                <span class="text-green">+{{top_region_responder_percentage}}%</span>
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
                        <v-card elevation="5" class="mb-2">    
                            <div class="text-center my-2">Recent Event Rate</div>
                            <div class="text-center">
                                <v-rating
                                v-model="recent_event_rate"
                                color="orange-lighten-1"
                                readonly
                                ></v-rating>
                            </div>
                        </v-card>
                    </v-col> 
                </v-row>
            </div>
    </Layout>
</template>

<style>

</style>

