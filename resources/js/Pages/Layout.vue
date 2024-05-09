<script setup>
import { Head, Link } from '@inertiajs/vue3';
</script>

<script>
export default{
    data:() =>({
        drawer:null,
    }),
}
</script>

<template>
    <v-app>
        <v-navigation-drawer expand-on-hover rail permanent color="#171B24">
            <v-list density="compact" nav>
                <v-list-item disabled prepend-icon="mdi-folder" title="Happiness Index"></v-list-item>
                <v-divider></v-divider>
                <v-list-item prepend-icon="mdi-view-dashboard" title="Dashboard" href="/"></v-list-item>
                <v-list-item prepend-icon="mdi-help" title="Questions" href="/questions"></v-list-item>
                <v-divider></v-divider>
                <v-list-item disabled prepend-icon="mdi-folder" title="Reports" value="myfiles"></v-list-item>
                <v-divider></v-divider>
                <v-list-item prepend-icon="mdi-emoticon-happy" title="Well being" href="/well_being_report"></v-list-item>
                <v-list-item prepend-icon="mdi-chart-arc" title="Event" href="/survey_report"></v-list-item>
                <v-list-item prepend-icon="mdi-bug" title="Bug" href="/bug_report"></v-list-item>

            </v-list>
        </v-navigation-drawer>
        <v-main>
            <v-card height=100% color="#262938" class="pa-5 rounded-0">
            <slot/>
            </v-card>
        </v-main>
    </v-app>
</template>

<style>
</style>

