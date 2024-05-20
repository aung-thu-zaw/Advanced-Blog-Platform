<script setup lang="ts">
import { Head } from "@inertiajs/vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import StaffPicks from "@/Components/StaffPicks.vue";
import WhoToFollowSuggestions from "@/Components/WhoToFollowSuggestions.vue";
import RecommendedTopics from "@/Components/RecommendedTopics.vue";
import BlogCard from "@/Components/BlogCard.vue";
import RecentlySaved from "@/Components/RecentlySaved.vue";
import ReadingList from "@/Components/ReadingList.vue";
import TopicNavigationBar from "@/Components/TopicNavigationBar.vue";
</script>

<template>
    <Head title="Home" />

    <AppLayout>
        <section class="min-h-full">
            <div class="container flex items-start justify-between mx-auto">
                <div class="w-full h-full px-5 py-10 space-y-5 lg:w-9/12">
                    <div class="sticky z-50 mb-10 top-[73px]">
                        <TopicNavigationBar />
                    </div>

                    <div class="grid grid-cols-1 gap-10 lg:grid-cols-2">
                        <BlogCard v-for="index in 10" :key="index" />
                    </div>
                </div>

                <div
                    class="hidden w-full h-full px-5 py-10 space-y-12 border-l lg:block lg:w-3/12"
                >
                    <StaffPicks />

                    <RecommendedTopics />

                    <WhoToFollowSuggestions />

                    <RecentlySaved />

                    <ReadingList />
                </div>
            </div>
        </section>
    </AppLayout>
</template>
