<script setup>
import TopicBadge from "@/Components/TopicBadge.vue";
</script>

<template>
    <div class="space-y-5">
        <h3 class="font-bold text-gray-700 text-md font-poppins">
            <i class="mr-1 fa-solid fa-thumbs-up"></i>
            Recommended Topics
        </h3>

        <div class="flex flex-wrap items-start space-x-2">
            <TopicBadge text="Self Improvement" />
            <TopicBadge text="Data Science" />
            <TopicBadge text="Writing" />
            <TopicBadge text="Relationships" />
            <TopicBadge text="Politics" />
            <TopicBadge text="Machine Learning" />
            <TopicBadge text="Productivity" />
            <TopicBadge text="Mindset" />
            <TopicBadge text="Technology" />
        </div>

        <Link
            href="#"
            class="block text-xs font-bold text-yellow-500 hover:text-gray-600 group"
        >
            See more topics
            <span class="transition-all duration-150 group-hover:ml-3">
                <i class="fa-solid fa-arrow-right"></i>
            </span>
        </Link>
    </div>
</template>
