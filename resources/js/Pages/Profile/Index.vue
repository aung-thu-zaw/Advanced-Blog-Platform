<script setup lang="ts">
import { Head, usePage } from "@inertiajs/vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import UserFollowingListsOverview from "@/Components/UserFollowingListsOverview.vue";
import UserStoryLists from "@/Components/UserStoryLists.vue";
import ProfileForUserProfilePage from "@/Components/ProfileForUserProfilePage.vue";
import UserProfileNavigationBar from "@/Components/UserProfileNavigationBar.vue";
import Home from "./Partials/Home.vue";
import About from "./Partials/About.vue";
import Stories from "./Partials/Stories.vue";
import Lists from "./Partials/Lists.vue";

const tab = usePage().props.ziggy.query.tab;
</script>

<template>
    <Head title="Profile" />

    <AppLayout>
        <section class="min-h-full">
            <div class="container flex items-start justify-between mx-auto">
                <div class="w-full h-full px-5 py-10 space-y-5 lg:w-9/12">
                    <UserProfileNavigationBar />

                    <div class="py-5">
                        <div v-if="tab === 'home'">
                            <Home />
                        </div>

                        <div v-else-if="tab === 'about'">
                            <About />
                        </div>

                        <div v-else-if="tab === 'stories'">
                            <Stories />
                        </div>

                        <div v-else-if="tab === 'lists'">
                            <Lists />
                        </div>
                    </div>
                </div>

                <div
                    class="hidden w-full h-full px-5 py-10 space-y-12 border-l lg:block lg:w-3/12"
                >
                    <ProfileForUserProfilePage />

                    <UserFollowingListsOverview />

                    <UserStoryLists />

                    <!-- <RecommendedTopics />

                    <WhoToFollowSuggestions />

                    <RecentlySaved />

                    <ReadingList /> -->
                </div>
            </div>
        </section>
    </AppLayout>
</template>
