<script setup>
import { Link } from "@inertiajs/vue3";
import BlogCard from "@/Components/BlogCard.vue";
</script>

<template>
    <div>
        <div class="px-5 py-10 mx-auto space-y-5">
            <h1 class="!mb-8 text-2xl font-extrabold text-gray-800">
                Getting Started In Data Science
            </h1>

            <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3">
                <BlogCard v-for="index in 6" :key="index" />
            </div>

            <div class="!mt-10">
                <Link
                    href="#"
                    as="button"
                    class="px-3.5 py-2.5 border-yellow-500 text-xs font-bold text-yellow-500 border hover:border-gray-300 rounded-full hover:text-gray-600 group"
                >
                    See the full stories
                    <span class="transition-all duration-150 group-hover:ml-3">
                        <i class="fa-solid fa-arrow-right"></i>
                    </span>
                </Link>
            </div>
        </div>
    </div>
</template>
