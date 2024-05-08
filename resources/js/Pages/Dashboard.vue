<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Layout from '@/Pages/Layout.vue';

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
        current_mood:'Happy',
    }),
}
</script>

<template>
    <Layout>
        <div class="text-h6 mb-3">Dashboard</div>
        <v-card height=93%>
            <v-select class="ma-5" rounded
                width=20%
                bg-color="#171B24"
                variant="solo"
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
                                <v-card elevation="5">
                                <div class="ma-3">Mood Chart</div>
                                <div class="d-flex justify-center">PIE YAN, EDIT KO MAMAYA</div>
                                <div class="d-flex justify-center">PIE YAN, EDIT KO MAMAYA</div>
                                <div class="d-flex justify-center">PIE YAN, EDIT KO MAMAYA</div>
                                <div class="d-flex justify-center">PIE YAN, EDIT KO MAMAYA</div>
                                <div class="d-flex justify-center">PIE YAN, EDIT KO MAMAYA</div>
                                <div class="d-flex justify-center">PIE YAN, EDIT KO MAMAYA</div>
                            </v-card>
                            </v-col>
                        </v-row>
                    </v-col>
                    <v-col>
                        <v-card elevation="5">
                            <div class="text-center text-h6 font-weight-black my-5">Top Region Responder</div>
                            <div class="d-flex justify-center">
                                <v-img
                                :width="300"
                                aspect-ratio="1/1"
                                cover
                                src="https://cdn.vuetifyjs.com/images/parallax/material.jpg"
                                ></v-img>
                            </div>
                            <div class="text-center text-h6 ">{{current_mood}}</div>
                        </v-card>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col>
                        <
                        Recent Event Rate
                    </v-col> 
                </v-row>
            </div>
            
        </v-card>   
    </Layout>
    
</template>

<style>

</style>

