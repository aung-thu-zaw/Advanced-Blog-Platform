<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div class="p-5 space-y-3 border border-gray-200 rounded-md">
        <div class="w-12 h-12 mx-auto overflow-hidden rounded-full">
            <img
                src="https://wac-cdn.atlassian.com/dam/jcr:ba03a215-2f45-40f5-8540-b2015223c918/Max-R_Headshot%20(1).jpg?cdnVersion=1732"
                alt=""
                class="object-cover w-full h-full"
            />
        </div>

        <div>
            <Link
                href="#"
                class="block text-lg font-bold text-center text-gray-800"
            >
                Aung Thu Zaw
            </Link>
            <Link
                href="#"
                class="block text-xs font-medium text-center text-gray-600 hover:underline"
            >
                2.4K Followers
            </Link>
        </div>

        <p
            class="text-xs font-medium text-gray-600 line-clamp-3 font-merriweather"
        >
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni a
            laudantium maxime necessitatibus, iusto et dicta quidem, officiis
            est odit libero. Ab ex quae nisi reprehenderit accusantium est
            provident quasi?
        </p>

        <div class="flex items-center justify-center !mt-6">
            <button
                type="button"
                class="w-full px-5 py-2 text-xs font-bold text-white transition-all bg-gray-800 rounded-full hover:bg-gray-700"
            >
                <i class="mr-1 fa-solid fa-user-plus"></i>
                Follow
            </button>
        </div>
    </div>
</template>
