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
        <v-app-bar>
            <v-icon icon="mdi-plus"></v-icon>
            <v-btn @click = "drawer = !drawer">
                toggle icon 
            </v-btn>
        </v-app-bar>
        <v-navigation-drawer v-model="drawer">
            <v-list>
                <Link href="/">
                    <v-list-item> Dashboard </v-list-item>
                </Link>
            </v-list>
            <v-list>
                <Link href="/questions">
                    <v-list-item>Questions</v-list-item>
                </Link>
            </v-list>
            <v-list>
                <Link href="/well_being_report">
                    <v-list-item>Well being Reports</v-list-item>
                </Link>
            </v-list>
            <v-list>
                <Link href="/survey_report">
                    <v-list-item>Survey Reports</v-list-item>
                </Link>
            </v-list>
            <v-list>
                <Link href="bug_report">
                    <v-list-item>Bug Reports</v-list-item>
                </Link>
            </v-list>
        </v-navigation-drawer>
        <v-main>
            <slot/>
        </v-main>
    </v-app>
</template>

<style>

</style>

