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
        <div class="text-h6 mb-3">Events | Survey Reports</div>
        <v-card height="93%" class="pa-15">

            <!-- Event Survey Report -->
            <v-card
                class="mx-auto mb-2"
                max-width="950"
                elevation="5"
                href="/Answer"
            >
                <v-row>
                    <v-col cols="3" class="mt-3">
                        <span class="d-flex justify-center">January 25, 2024</span>
                    </v-col>
                    <v-col cols="3" class="mt-3">
                        <span class="d-flex justify-center">Amdocs Coachella</span>
                    </v-col>
                    <v-col cols="6">
                        <!-- Star Ratings -->
                        <span class="d-flex justify-center">
                            <v-rating
                                v-model="rating"
                                color="orange-lighten-1"
                                readonly
                            ></v-rating>
                        </span>
                    </v-col>
                </v-row>
            </v-card>

            <!-- Event Survey Report -->
            <v-card
                class="mx-auto mb-2"
                max-width="950"
                elevation="5"
                href="/Answer"
            >
                <v-row>
                    <v-col cols="3" class="mt-3">
                        <span class="d-flex justify-center">February 14, 2024</span>
                    </v-col>
                    <v-col cols="3" class="mt-3">
                        <span class="d-flex justify-center">Valentines Day</span>
                    </v-col>
                    <v-col cols="6">
                        <!-- Star Ratings -->
                        <span class="d-flex justify-center">
                            <v-rating
                                v-model="rating"
                                color="orange-lighten-1"
                                readonly
                            ></v-rating>
                        </span>
                    </v-col>
                </v-row>
            </v-card>
            
        </v-card>
    </Layout>
</template>

<style>
    .date {
        padding-left: 90px;
    }
    .event {
        padding-left: 150px;
    }
    .stars {
        padding-left: 90px;
    }
</style>
