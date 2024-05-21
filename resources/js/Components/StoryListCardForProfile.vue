<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
import SaveListTooltipButton from "@/Components/SaveListTooltipButton.vue";
import ListActionDropdown from "@/Components/ListActionDropdown.vue";
</script>

<template>
    <div class="flex space-x-3 border rounded-md">
        <div
            class="flex -space-x-20 overflow-hidden border border-gray-200 rounded-md rtl:space-x-reverse min-w-40"
        >
            <img
                class="object-cover w-32 border border-gray-200 rounded-sm h-42"
                src="https://www.hostinger.com/tutorials/wp-content/uploads/sites/2/2022/03/what-is-a-blog-1.webp"
                alt=""
            />
            <img
                class="object-cover w-32 border border-gray-200 rounded-sm h-42"
                src="https://i.ytimg.com/vi/crzR4JucSBM/maxresdefault.jpg"
                alt=""
            />
            <img
                class="object-cover w-32 border border-gray-200 rounded-sm h-42"
                src="https://i.ytimg.com/vi/hiFgOhzxBqI/maxresdefault.jpg"
                alt=""
            />
            <img
                class="object-cover w-32 border border-gray-200 rounded-sm h-42"
                src="https://sunfunnels.com/wp-content/uploads/2023/07/Why-You-Should-Start-A-Blog-The-Benefits-Of-Blogging-In-2023-1.png"
                alt=""
            />
            <img
                class="object-cover w-32 border border-gray-200 rounded-sm h-42"
                src="https://www.hostinger.com/tutorials/wp-content/uploads/sites/2/2022/03/what-is-a-blog-1.webp"
                alt=""
            />
        </div>

        <div class="w-full p-5 space-y-3">
            <div class="flex items-center space-x-2">
                <div class="w-6 h-6 overflow-hidden rounded-full">
                    <img
                        src="https://wac-cdn.atlassian.com/dam/jcr:ba03a215-2f45-40f5-8540-b2015223c918/Max-R_Headshot%20(1).jpg?cdnVersion=1732"
                        alt=""
                        class="object-cover w-full h-full"
                    />
                </div>
                <h1 class="text-xs font-extrabold text-gray-800">
                    Aung Thu Zaw
                </h1>
            </div>
            <Link
                href="#"
                class="text-xl font-extrabold text-gray-800 transition-all line-clamp-2 hover:text-gray-600"
            >
                React Explained Simply For Beginner
            </Link>

            <div class="flex items-center justify-between w-full">
                <div class="flex items-center space-x-3 text-xs">
                    <p class="font-semibold text-gray-600">5 Stories</p>
                    <span class="mx-1 text-lg font-extrabold"> · </span>
                    <p class="font-semibold text-gray-600">72 Saved</p>
                </div>

                <div class="flex items-center justify-center space-x-8">
                    <SaveListTooltipButton />

                    <ListActionDropdown />
                </div>
            </div>
        </div>
    </div>
</template>
