<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div class="flex space-x-3">
        <div
            class="flex -space-x-10 overflow-hidden border border-gray-200 rounded-md rtl:space-x-reverse min-w-28"
        >
            <img
                class="object-cover w-16 h-full border border-gray-200 rounded-sm"
                src="https://www.hostinger.com/tutorials/wp-content/uploads/sites/2/2022/03/what-is-a-blog-1.webp"
                alt=""
            />
            <img
                class="object-cover w-16 h-full border border-gray-200 rounded-sm"
                src="https://i.ytimg.com/vi/crzR4JucSBM/maxresdefault.jpg"
                alt=""
            />
            <img
                class="object-cover w-16 h-full border border-gray-200 rounded-sm"
                src="https://i.ytimg.com/vi/hiFgOhzxBqI/maxresdefault.jpg"
                alt=""
            />
            <img
                class="object-cover w-16 h-full border border-gray-200 rounded-sm"
                src="https://sunfunnels.com/wp-content/uploads/2023/07/Why-You-Should-Start-A-Blog-The-Benefits-Of-Blogging-In-2023-1.png"
                alt=""
            />
            <img
                class="object-cover w-16 h-full border border-gray-200 rounded-sm"
                src="https://www.hostinger.com/tutorials/wp-content/uploads/sites/2/2022/03/what-is-a-blog-1.webp"
                alt=""
            />
        </div>

        <div class="space-y-1.5">
            <Link
                href="#"
                class="text-sm font-extrabold text-gray-800 transition-all line-clamp-2 hover:text-gray-600"
            >
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Distinctio, facilis. Ipsam iusto, est error magni dolores,
                eveniet placeat nulla consectetur amet recusandae, dolor
                architecto eum ipsa veritatis nihil ut doloremque.
            </Link>

            <div class="flex items-center space-x-3 text-xs">
                <p class="font-semibold text-gray-600">10 Stories</p>
                <span class="mx-1 text-lg font-extrabold"> · </span>
                <p class="font-semibold text-gray-600">72 Saved</p>
            </div>
        </div>
    </div>
</template>
