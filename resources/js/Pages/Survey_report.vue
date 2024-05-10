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
                href="/Answer"
            >
                <span class="date">January 25, 2024</span>
                <span class="event"> Amdocs Coachella</span>
                <span class="text-center pa-16">
                    <v-rating
                        v-model="rating"
                        color="orange-lighten-1"
                        readonly
                    ></v-rating></span
            ></v-card>

            <v-card
                class="mx-auto ma-3"
                max-width="950"
                elevation="5"
                href="/Answer"
            >
                <Span class="date"> February 14, 2024</Span>
                <Span class="event">Valentines Day</Span>
                <Span class="stars">
                    <v-rating
                        v-model="rating"
                        color="orange-lighten-1"
                        readonly
                    ></v-rating></Span
            ></v-card>
            <v-card
                class="mx-auto ma-3"
                max-width="950"
                elevation="5"
                href="/Answer"
            >
                <Span class="date">January 25, 2024</Span>
                <Span class="event"> Amdocs Coachella</Span>
                <Span class="pa-16">
                    <v-rating
                        v-model="rating"
                        color="orange-lighten-1"
                        readonly
                    ></v-rating></Span
            ></v-card>
            <v-card
                class="mx-auto ma-3"
                max-width="950"
                elevation="5"
                href="/Answer"
            >
                <Span class="date">February 14, 2024</Span>
                <Span class="event">Valentines Day</Span>
                <Span class="stars">
                    <v-rating
                        v-model="rating"
                        color="orange-lighten-1"
                        readonly
                    ></v-rating></Span
            ></v-card>
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
