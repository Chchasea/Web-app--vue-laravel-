<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Layout from '@/Pages/Layout.vue';
</script>

<script>
    export default{
        data:() =>({
            location_filter: ['one', 'two', 'three', 'Manila'],
            location_filter_default: ['Manila'],
            region_filter: ['one', 'two', 'three', 'Manila'],
            region_filter_default: ['APAC'],
            dialog: false,
        }),
    }
</script>

<template>
    <Layout>
        <div class="text-h6 mb-0">Questions</div>
        <!-- Dropdown filters -->
        <div>
            <v-row class="ms-5 d-flex flex-row-reverse">
                <div class="me-5" width=20%>
                    <v-select rounded
                    bg-color="white"
                    variant="solo"
                    density="compact"
                    v-model="region_filter_default"
                    :items="region_filter"
                    ></v-select>
                </div>
                <div class="mt-2 me-2">
                    Region:
                </div>
                <div class="me-8" width=20%>
                    <v-select rounded
                    bg-color="white"
                    variant="solo"
                    density="compact"
                    v-model="location_filter_default"
                    :items="location_filter"
                    ></v-select>
                </div>
                <div class="mt-2 me-2">
                    Location:
                </div>
            </v-row>
        </div>
        <!-- Main Content -->
        <v-card height=80%>
            <v-container class="spacing-playground pa-3" fluid>
                <!-- Well Being Section -->
                <div>
                    <!-- Edit Button-->
                    <v-container class="spacing-playground pa-2 mb-2" fluid>
                        <div class="text-h6 font-weight-black">Well Being Check Up</div>
                        <v-btn href="/edit_daily_questions" class="float-right" 
                            width=20% 
                            density="compact" 
                            color="warning" 
                            rounded="xl"
                        >
                            Edit Questions 
                            <v-icon
                            icon="mdi-pencil"
                            end
                            ></v-icon>
                        </v-btn>
                    </v-container>
                    <!-- List of Questions -->
                    <v-container class="spacing-playground pa-2" fluid>
                        <div>
                            <v-list>
                                <v-list-item class="mb-2" rounded="lg" variant="outlined">
                                    <v-row>
                                        <v-col cols="10">
                                            Question: How are you feeling today?
                                        </v-col>
                                        <v-col cols="2">
                                            Answer Type: Emoji
                                        </v-col>
                                    </v-row>
                                </v-list-item>
                                <v-list-item class="mb-2" rounded="lg" variant="outlined">
                                    <v-row>
                                        <v-col cols="10">
                                            Question: How are you feeling today?
                                        </v-col>
                                        <v-col cols="2">
                                            Answer Type: Text
                                        </v-col>
                                    </v-row>
                                </v-list-item>
                            </v-list>
                        </div>
                    </v-container>
                </div>

                <!-- Events Section -->
                <div height=40%>
                    <!-- Add Event -->
                    <v-container class="spacing-playground pa-2 mb-2" fluid>
                        <div class="text-h6 font-weight-black">Events</div>
                        <v-btn href="/add_event" class="float-right" 
                            width=20% 
                            density="compact" 
                            color="success" 
                            rounded="xl"
                        >
                            Add Event 
                            <v-icon
                            icon="mdi-plus"
                            end
                            ></v-icon>
                        </v-btn>
                    </v-container>
                    <!-- List of Events -->
                    <v-container class="spacing-playground pa-2" fluid>
                        <div>
                            <v-list>
                                <v-list-item href="/" class="mb-2" rounded="lg" variant="outlined">
                                    <v-row>
                                        <v-col cols="10">
                                            Wellness Wednesday
                                        </v-col>
                                        <v-col cols="2" class="d-flex justify-center">
                                            <v-btn class="float-right" 
                                                width="auto"
                                                density="compact" 
                                                color="error" 
                                                rounded="xl"
                                            >
                                                <v-icon
                                                icon="mdi-delete"
                                                ></v-icon>
                                            </v-btn>
                                        </v-col>
                                    </v-row>
                                </v-list-item>
                                <v-list-item href="/" class="mb-2" rounded="lg" variant="outlined">
                                    <v-row>
                                        <v-col cols="10">
                                            Wellness Wednesday
                                        </v-col>
                                        <v-col cols="2" class="d-flex justify-center">
                                            <v-btn class="float-right" 
                                                width="auto"
                                                density="compact" 
                                                color="error" 
                                                rounded="xl"
                                            >
                                                <v-icon
                                                icon="mdi-delete"
                                                ></v-icon>
                                            </v-btn>
                                        </v-col>
                                    </v-row>
                                </v-list-item>
                            </v-list>
                        </div>
                    </v-container>
                </div>
            </v-container>
        </v-card>
    </Layout>
</template>

<style>

</style>

