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
        <!-- Dynamic yung event title e.g. Amdocs Coachella -->
        <div class="text-h6 mb-3">Amdocs Coachella | Survey Reports</div>
        <v-card height="90%">
            <v-container class="pa-3" fluid>
                <!-- Back Button -->
                <v-sheet>
                    <div class="text-h6 font-weight-black">
                        <v-btn href="/survey_report" class="font-weight-black" variant="text">
                            <v-icon
                            icon="mdi-chevron-left"
                            start
                            size="x-large"
                            ></v-icon>
                                Back
                        </v-btn>
                    </div>
                </v-sheet>
                <v-card class="mb-5" color="#E3E5E3" height="460px" >
                    <v-container class="pa-9" fluid>
                        <!-- Event Info -->
                        <v-row>
                            <v-col cols="6">
                                <v-row>
                                    <div class="font-weight-black">
                                        Event Name: Amdocs Coachella
                                    </div>
                                </v-row>
                                <v-row>
                                    <div class="font-weight-black">
                                        Date of Even: January 25, 2024
                                    </div>
                                </v-row>
                            </v-col>
                            <v-col cols="6">
                                
                            </v-col>
                        </v-row>
                        
                    </v-container>
                </v-card>
            </v-container>
            <template> </template>
        </v-card>
    </Layout>
</template>
<style>
.text {
    padding-left: 500px;
}
</style>
