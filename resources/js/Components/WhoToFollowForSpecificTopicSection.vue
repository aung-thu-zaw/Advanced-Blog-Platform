<script setup>
import { Link } from "@inertiajs/vue3";
import UserFollowProfileCard from "@/Components/UserFollowProfileCard.vue";
</script>

<template>
    <div>
        <div class="px-5 py-10 mx-auto space-y-5">
            <h1 class="!mb-8 text-2xl font-extrabold text-gray-800">
                Who To Follow
            </h1>

            <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-4">
                <UserFollowProfileCard v-for="index in 8" :key="index" />
            </div>

            <div class="!mt-10">
                <Link
                    href="#"
                    as="button"
                    class="px-3.5 py-2.5 border-yellow-500 text-xs font-bold text-yellow-500 border hover:border-gray-300 rounded-full hover:text-gray-600 group"
                >
                    See more
                    <span class="transition-all duration-150 group-hover:ml-3">
                        <i class="fa-solid fa-arrow-right"></i>
                    </span>
                </Link>
            </div>
        </div>
    </div>
</template>
