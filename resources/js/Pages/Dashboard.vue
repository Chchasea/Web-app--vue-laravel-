<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Layout from '@/Pages/Layout.vue';
import '@mdi/font/css/materialdesignicons.css';

</script>

<script>
export default{
    data:() =>({
        dashboard_filter: ['one', 'two', 'three', 'Past 3 months'],
        dashboard_filter_default: ['Past 3 months'],
        answers_per_week: 999,
        answers_per_week_percentage: 999,
        top_region_responder: 'Manila',
        top_region_responder_percentage:999,
        recent_event_rate: 3,
        current_mood:'Happy',
        emoticon:'https://i.pinimg.com/originals/9d/cb/e6/9dcbe69e4a216e2d69f8aedaba89bc60.jpg'
    }),
}
</script>

<template>
    <Layout>
        <div class="text-h6 mb-3">Dashboard</div>
        <v-card height=93% >
            <v-select class="mx-5 mt-3" rounded
                width=20%
                bg-color="#171B24"
                variant="solo"
                density="compact"
                v-model="dashboard_filter_default"
                :items="dashboard_filter"
            ></v-select>   
            <div class="mx-5">
                <v-row>
                    <v-col cols="8">
                        <v-row>
                            <v-col>
                                <v-card elevation="5">
                                    <div class="ma-3">Answers per week</div>
                                    <div class="text-center text-h4 font-weight-bold">
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
                                    <div class="text-center text-h4 font-weight-bold">
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
                                <v-card elevation="5" >
                                <div class="ma-3">Mood Chart</div>
                                <div class="d-flex justify-center">PIE YAN, EDIT KO MAMAYA</div>
                                <div class="d-flex justify-center">PIE YAN, EDIT KO MAMAYA</div>
                                <div class="d-flex justify-center">PIE YAN, EDIT KO MAMAYA</div>
                                <div class="d-flex justify-center">PIE YAN, EDIT KO MAMAYA</div>

                            </v-card>
                            </v-col>
                        </v-row>
                    </v-col>
                    <v-col>
                        <v-card elevation="5" height=100%>
                            <div class="text-center text-h6 font-weight-black my-5">Employees Current</div>
                            
                            <div>
                                <v-img class="mx-auto"
                                :width="180"
                                :src="emoticon"
                                ></v-img>
                            </div>
                            <div class="text-center mt-3">{{current_mood}}</div>
                        </v-card>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col>
                        <v-card elevation="5" class="mb-2">    
                            <div class="text-center text-h6 font-weight-black my-2">Recent Event Rate</div>
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
            
        </v-card>   
    </Layout>
    
</template>

<style>

</style>

