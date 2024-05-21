<script setup lang="ts">
import BlogCard from "@/Components/BlogCard.vue";
</script>

<template>
    <div class="space-y-5">
        <h1 class="text-xl font-extrabold text-gray-700">
            Latest Blogs From Aung Thu Zaw
        </h1>
        <div class="grid grid-cols-1 gap-10 lg:grid-cols-2">
            <BlogCard v-for="index in 10" :key="index" />
        </div>
    </div>
</template>
