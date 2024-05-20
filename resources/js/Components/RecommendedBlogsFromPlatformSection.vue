<script setup>
import { Link } from "@inertiajs/vue3";
import BlogCard from "@/Components/BlogCard.vue";
import ListCard from "@/Components/ListCard.vue";
</script>

<template>
    <section>
        <div>
            <div class="max-w-[900px] px-5 py-10 mx-auto space-y-5">
                <h1 class="!mb-8 text-2xl font-extrabold text-gray-800">
                    Recommendation From Blog Platform
                </h1>

                <div class="grid grid-cols-1 gap-10 lg:grid-cols-2">
                    <BlogCard v-for="index in 2" :key="index" />
                </div>

                <div class="!my-10 border-t border-b py-5">
                    <h1 class="font-semibold text-gray-700 text-md">Lists</h1>
                    <div class="grid grid-cols-1 gap-10 my-5 lg:grid-cols-2">
                        <ListCard />
                        <ListCard />
                        <ListCard />
                        <ListCard />
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-10 lg:grid-cols-2">
                    <BlogCard v-for="index in 4" :key="index" />
                </div>

                <div class="!mt-10">
                    <Link
                        href="#"
                        as="button"
                        class="px-3.5 py-2.5 border-yellow-500 text-xs font-bold text-yellow-500 border hover:border-gray-300 rounded-full hover:text-gray-600 group"
                    >
                        See more recommendations
                        <span
                            class="transition-all duration-150 group-hover:ml-3"
                        >
                            <i class="fa-solid fa-arrow-right"></i>
                        </span>
                    </Link>
                </div>
            </div>
        </div>
    </section>
</template>
