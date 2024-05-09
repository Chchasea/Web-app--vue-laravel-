<script setup>
import { Head, Link } from "@inertiajs/vue3";
import Layout from "@/Pages/Layout.vue";
import "@mdi/font/css/materialdesignicons.css";
</script>

<script>
export default {
    data: () => ({
        rating: 4.5,
    }),
};
</script>
<template>
    <Layout>
        <div class="text-h6 mb-3">Survey Reports</div>
        <v-card height="93%" class="pa-15">
            <v-card
                class="mx-auto"
                max-width="950"
                elevation="5"
                href="#/answer"
            >
                <div class="flex-row">
                    <div class="flex-row">
                        <div>
                            <span class="date font-weight-black">Event Name: </span>
                            <span class=" "> Amdocs Coachella</span>
                        </div> 
                        <div>
                            <span class="date font-weight-black">Date of Event: </span>
                            <span class="font-weight-bold">January 25, 2024</span>
                        </div>
                    </div>
                
                
                    <div class="">
                        
                            <div class="">Recent Event Rate</div>
                            <div class="">
                                <v-rating
                                v-model="recent_event_rate"
                                color="orange-lighten-1"
                                readonly
                                ></v-rating>
                            </div>
                        
                        </div>
                </div> 

                </v-card>

            <template>
  
</template>
            
            
        </v-card>
    </Layout>
</template>