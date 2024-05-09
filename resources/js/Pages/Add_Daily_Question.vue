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
            region_filter_default: ['APAC']
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
            <!-- Back Button Here -->
            <div class="text-h6 font-weight-black d-flex justify-end">Well Being Check Up | Adding a question</div>
            
            <v-container class="spacing-playground pa-3" fluid>
                <!-- Well Being Check Up -->
                <v-card class="mb-5" color="#E3E5E3" height=40%>
                    <!-- Add Well Being Questions -->
                    <v-container class="spacing-playground pa-2 mb-2" fluid>
                        <v-btn href="/add_daily_question" class="float-right" 
                            width=20% 
                            density="compact" 
                            color="success" 
                            rounded="xl"
                        >
                            Add Questions +
                        </v-btn>
                    </v-container>
                    <v-container class="spacing-playground pa-2" fluid>
                        <!-- List of Questions -->
                        <div>
                            <v-list bg-color="#E3E5E3">
                                <v-list-item class="mb-2" rounded="lg" variant="outlined">
                                    <v-row>
                                        <v-col cols="6">
                                            Question: How are you feeling today?
                                        </v-col>
                                        <v-col cols="3">
                                            Answer Type: Emoji
                                        </v-col>
                                        <v-col cols="3">
                                            <v-row>
                                                <v-col cols="6">
                                                    <v-btn class="float-right" 
                                                        width=100% 
                                                        density="compact" 
                                                        color="warning" 
                                                        rounded="xl"
                                                    >
                                                        Edit
                                                    </v-btn>
                                                </v-col>
                                                <v-col cols="6">
                                                    <v-btn class="float-right" 
                                                        width=100% 
                                                        density="compact" 
                                                        color="error" 
                                                        rounded="xl"
                                                    >
                                                        Delete
                                                    </v-btn>
                                                </v-col>
                                            </v-row>
                                        </v-col>
                                    </v-row>
                                </v-list-item>
                                <v-list-item class="mb-2" rounded="lg" variant="outlined">
                                    <v-row>
                                        <v-col cols="6">
                                            Question: How are you feeling today?
                                        </v-col>
                                        <v-col cols="3">
                                            Answer Type: Emoji
                                        </v-col>
                                        <v-col cols="3">
                                            <v-row>
                                                <v-col cols="6">
                                                    <v-btn class="float-right" 
                                                        width=100% 
                                                        density="compact" 
                                                        color="warning" 
                                                        rounded="xl"
                                                    >
                                                        Edit
                                                    </v-btn>
                                                </v-col>
                                                <v-col cols="6">
                                                    <v-btn class="float-right" 
                                                        width=100% 
                                                        density="compact" 
                                                        color="error" 
                                                        rounded="xl"
                                                    >
                                                        Delete
                                                    </v-btn>
                                                </v-col>
                                            </v-row>
                                        </v-col>
                                    </v-row>
                                </v-list-item>
                            </v-list>
                        </div>
                    </v-container>
                </v-card>

                <!-- Survey Questions -->
                <div height=40%>
                    <!-- Add Survey Questions -->
                    <v-container class="spacing-playground pa-2 mb-2" fluid>
                        <div class="text-h6 font-weight-black">Survey</div>
                        <v-btn class="float-right" 
                            width=20% 
                            density="compact" 
                            color="success" 
                            rounded="xl"
                        >
                            Add Questions +
                        </v-btn>
                    </v-container>
                    <v-container class="spacing-playground pa-2" fluid>
                        <!-- List of Questions -->
                        <div>
                            <v-list>
                                <v-list-item class="mb-2" rounded="lg" variant="outlined">
                                    <v-row>
                                        <v-col cols="6">
                                            Question: How are you feeling today?
                                        </v-col>
                                        <v-col cols="3">
                                            Answer Type: Emoji
                                        </v-col>
                                        <v-col cols="3">
                                            <v-row>
                                                <!-- Edit Button -->
                                                <v-col cols="6">
                                                    <v-btn class="float-right" 
                                                        width=100% 
                                                        density="compact" 
                                                        color="warning" 
                                                        rounded="xl"
                                                    >
                                                        Edit
                                                    </v-btn>
                                                </v-col>
                                                <!-- Delete Button -->
                                                <v-col cols="6">
                                                    <v-btn class="float-right" 
                                                        width=100% 
                                                        density="compact" 
                                                        color="error" 
                                                        rounded="xl"
                                                    >
                                                        Delete
                                                    </v-btn>
                                                </v-col>
                                            </v-row>
                                        </v-col>
                                    </v-row>
                                </v-list-item>
                                <v-list-item class="mb-2" rounded="lg" variant="outlined">
                                    <v-row>
                                        <v-col cols="6">
                                            Question: How are you feeling today?
                                        </v-col>
                                        <v-col cols="3">
                                            Answer Type: Emoji
                                        </v-col>
                                        <v-col cols="3">
                                            <v-row>
                                                <v-col cols="6">
                                                    <v-btn class="float-right" 
                                                        width=100% 
                                                        density="compact" 
                                                        color="warning" 
                                                        rounded="xl"
                                                    >
                                                        Edit
                                                    </v-btn>
                                                </v-col>
                                                <v-col cols="6">
                                                    <v-btn class="float-right" 
                                                        width=100% 
                                                        density="compact" 
                                                        color="error" 
                                                        rounded="xl"
                                                    >
                                                        Delete
                                                    </v-btn>
                                                </v-col>
                                            </v-row>
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