<script setup lang="ts">
import { Head } from "@inertiajs/vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import RecommendedBlogsForSpecificTopicSection from "@/Components/RecommendedBlogsForSpecificTopicSection.vue";
import RecommendedListsForSpecificTopicSection from "@/Components/RecommendedListsForSpecificTopicSection.vue";
import WhoToFollowForSpecificTopicSection from "@/Components/WhoToFollowForSpecificTopicSection.vue";
import GettingStartedInSpecificTopicSection from "@/Components/GettingStartedInSpecificTopicSection.vue";
</script>

<template>
    <Head title="Explore Topics" />

    <AppLayout>
        <section class="min-h-full">
            <div class="container px-5 py-10 mx-auto space-y-6">
                <div class="space-y-5">
                    <h1
                        class="text-2xl font-extrabold text-center text-gray-800 md:text-4xl"
                    >
                        Data Science
                    </h1>

                    <div
                        class="flex items-center justify-center space-x-3 text-sm font-medium text-gray-700"
                    >
                        <span> Topic </span>
                        <span class="mx-1 text-lg font-extrabold"> · </span>
                        <span>
                            <i class="fa-regular fa-user"></i>
                            5.9M Followers
                        </span>
                        <span class="mx-1 text-lg font-extrabold"> · </span>
                        <span>
                            <i class="fa-regular fa-file-lines"></i>
                            332K Stories
                        </span>
                    </div>

                    <div class="flex items-center justify-center">
                        <button
                            type="button"
                            class="px-5 py-2 text-xs font-bold text-white transition-all bg-gray-800 rounded-full hover:bg-gray-700"
                        >
                            <i class="mr-1 fa-solid fa-plus"></i>
                            Follow
                        </button>
                    </div>

                    <p
                        class="font-semibold text-sm text-center text-gray-700 mx-auto max-w-[900px] font-merriweather"
                    >
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Non voluptates assumenda perspiciatis nulla nesciunt.
                        Vitae eos maiores ad ab illo corrupti at aliquid.
                        Voluptas consequuntur labore, reiciendis hic alias
                        facilis.
                    </p>
                </div>

                <RecommendedBlogsForSpecificTopicSection />

                <hr />

                <GettingStartedInSpecificTopicSection />

                <hr />

                <RecommendedListsForSpecificTopicSection />

                <hr />

                <WhoToFollowForSpecificTopicSection />
            </div>
        </section>
    </AppLayout>
</template>
