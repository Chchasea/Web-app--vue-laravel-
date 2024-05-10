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
            <v-btn
                variant="text"
                prepend-icon="mdi-chevron-left"
                href="/survey_report"
                >Back</v-btn
            >
            <v-card class="mx-auto" max-width="950" elevation="5">
                <div class="flex-column">
                    <div class="flex-row">
                        <div>
                            <span class="date font-weight-black"
                                >Event Name:
                            </span>
                            <span class=" "> Amdocs Coachella</span>
                        </div>
                        <div>
                            <span class="date font-weight-bold"
                                >Date of Event:
                            </span>
                            <span class="">January 25, 2024</span>
                        </div>
                    </div>

                    <div class="flex-row">
                        <span class="date font-weight-black text"
                            >Recent Event Rate:
                        </span>
                        <span class="">
                            <v-rating
                                v-model="rating"
                                class=""
                                color="orange-lighten-1"
                                readonly
                            ></v-rating>
                        </span>
                    </div>
                </div>
                <div class="date font-weight-black">
                    Overall Experience Comments:
                </div>
                <v-card class="mx-auto" max-width="950" elevation="5">
                    <v-card
                        class="mx-auto"
                        max-width="950"
                        elevation="5"
                        text="HI"
                    ></v-card>
                </v-card>
                <div class="date font-weight-black">Rooms for Improvement:</div>
            </v-card>

            <template> </template>
        </v-card>
    </Layout>
</template>
<style>
.text {
    padding-left: 500px;
}
</style>
