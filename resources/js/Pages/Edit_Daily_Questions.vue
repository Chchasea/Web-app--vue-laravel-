<script setup>
import { Head, Link } from "@inertiajs/vue3";
import Layout from "@/Pages/Layout.vue";
</script>

<script>
export default {
    data: () => ({
        location_filter: ["one", "two", "three", "Manila"],
        location_filter_default: ["Manila"],
        region_filter: ["one", "two", "three", "Manila"],
        region_filter_default: ["APAC"],
        answertype_filter: ["Emoji", "Text"],
        answertype_filter_default: ["Emoji"],
    }),
};
</script>

<template>
    <Layout>
        <div class="text-h6 mb-0">Questions</div>
        <!-- Dropdown filters -->
        <div>
            <v-row class="ms-5 d-flex flex-row-reverse">
                <div class="me-5" width="20%">
                    <v-select
                        rounded
                        bg-color="white"
                        variant="solo"
                        density="compact"
                        v-model="region_filter_default"
                        :items="region_filter"
                    ></v-select>
                </div>
                <div class="mt-2 me-2">Region:</div>
                <div class="me-8" width="20%">
                    <v-select
                        rounded
                        bg-color="white"
                        variant="solo"
                        density="compact"
                        v-model="location_filter_default"
                        :items="location_filter"
                    ></v-select>
                </div>
                <div class="mt-2 me-2">Location:</div>
            </v-row>
        </div>

        <!-- Main Content -->
        <v-card height="90%">
            <v-sheet class="d-flex">
                <!-- Back Button -->
                <v-sheet class="ma-2 pa-2 me-auto">
                    <div class="text-h6 font-weight-black">
                        <v-btn
                            href="/questions"
                            class="font-weight-black"
                            variant="text"
                        >
                            <v-icon
                                icon="mdi-chevron-left"
                                start
                                size="x-large"
                            ></v-icon>
                            Back
                        </v-btn>
                    </div>
                </v-sheet>
                
                <v-sheet class="ma-2 pa-2">
                    <div class="text-h6 font-weight-black">
                        Well Being Check Up | Editing Questions
                    </div>
                </v-sheet>
            </v-sheet>

            <v-container class="spacing-playground pa-3" fluid>
                <v-card class="mb-5" color="#E3E5E3" height="360px">
                    <v-container class="spacing-playground pa-2" fluid>
                        <div class="font-weight-black">Question:</div>
                        <!-- Admin edit question -->
                        <v-textarea
                            rounded="lg"
                            bg-color="#ffffff"
                            row-height="25"
                            rows="1"
                            variant="outlined"
                            auto-grow
                            shaped
                            model-value="Why did you choose this emoticon?"
                        >
                        </v-textarea>
                        <v-sheet color="#E3E5E3" class="d-flex">
                            <v-sheet color="#E3E5E3">
                                <div class="mb-2">Answer Type:</div>
                            </v-sheet>
                            <v-row color="#E3E5E3" class="me-auto">
                                <div class="ml-3 pl-2">
                                    <v-select
                                        rounded
                                        bg-color="white"
                                        variant="solo"
                                        density="compact"
                                        v-model="answertype_filter_default"
                                        :items="answertype_filter"
                                    ></v-select>
                                </div>
                            </v-row>
                        </v-sheet>

                        <div class="font-weight-black">Question:</div>
                        <!-- Admin edit question -->
                        <v-textarea
                            rounded="lg"
                            bg-color="#ffffff"
                            row-height="25"
                            rows="1"
                            variant="outlined"
                            auto-grow
                            shaped
                            model-value="Why did you choose this emoticon?"
                        >
                        </v-textarea>
                        <v-sheet color="#E3E5E3" class="d-flex">
                            <v-sheet color="#E3E5E3">
                                <div class="mb-2">Answer Type:</div>
                            </v-sheet>
                            <v-row color="#E3E5E3" class="me-auto">
                                <div class="ml-3 pl-2">
                                    <v-select
                                        rounded
                                        bg-color="white"
                                        variant="solo"
                                        density="compact"
                                        v-model="answertype_filter_default"
                                        :items="answertype_filter"
                                    ></v-select>
                                </div>
                            </v-row>
                            <!-- Save Button -->
                            <v-sheet color="#E3E5E3" class="ma-2 pa-2 mt-13">
                                <v-btn
                                    class="float-right mt-2"
                                    width="100%"
                                    density="compact"
                                    color="success"
                                    rounded="lg"
                                >
                                    Save
                                </v-btn>
                            </v-sheet>
                            <!-- Cancel -->
                            <v-sheet color="#E3E5E3" class="ma-2 pa-2 mt-13">
                                <v-btn
                                    href="/questions"
                                    class="float-right mt-2"
                                    width="100%"
                                    density="compact"
                                    color="grey-darken-1"
                                    rounded="lg"
                                >
                                    Cancel
                                </v-btn>
                            </v-sheet>
                        </v-sheet>
                    </v-container>
                </v-card>
            </v-container>
        </v-card>
    </Layout>
</template>

<style>
.dp {
    padding-bottom: 50px;
}
</style>
