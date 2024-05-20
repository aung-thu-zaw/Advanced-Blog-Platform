<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
import BlogCard from "@/Components/BlogCard.vue";
import FollowButton from "@/Components/FollowButton.vue";
import GiveATipTooltipButton from "@/Components/GiveATipTooltipButton.vue";
import SubscribeNewsletterTooltipButton from "@/Components/SubscribeNewsletterTooltipButton.vue";
</script>

<template>
    <section>
        <div class="bg-gray-100">
            <div class="max-w-[900px] px-5 py-10 mx-auto space-y-5">
                <div class="w-16 h-16 overflow-hidden rounded-full">
                    <img
                        src="https://www.e-spincorp.com/wp-content/uploads/2020/06/laravel-php-framework.jpg"
                        alt=""
                        class="object-cover w-full h-full"
                    />
                </div>

                <div class="flex items-start justify-between">
                    <div class="space-y-3">
                        <Link
                            href="#"
                            class="block text-xl font-bold text-gray-800"
                        >
                            Written by Laravel Pro Tips
                        </Link>

                        <Link
                            href="#"
                            class="text-sm font-medium text-gray-800 transition-all hover:underline hover:text-yellow-500"
                        >
                            122 Followers
                        </Link>

                        <p class="text-sm text-gray-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Rerum voluptas animi tempora laboriosam eius
                            quisquam veritatis delectus iste voluptate fugiat
                            quaerat ipsa, quidem cupiditate totam impedit ad
                            deleniti aperiam repellat?
                        </p>
                    </div>

                    <div class="flex items-center space-x-3">
                        <FollowButton />

                        <SubscribeNewsletterTooltipButton />

                        <GiveATipTooltipButton />
                    </div>
                </div>

                <hr />

                <div class="space-y-5">
                    <h3 class="text-sm font-medium text-gray-700">
                        More from
                        <Link
                            href="#"
                            class="font-extrabold text-gray-800 duration-150 text-md hover:text-yellow-500"
                        >
                            Aung Thu Zaw
                        </Link>
                    </h3>

                    <div class="grid grid-cols-1 gap-10 lg:grid-cols-2">
                        <BlogCard v-for="index in 4" :key="index" />
                    </div>

                    <div class="!mt-10">
                        <Link
                            href="#"
                            as="button"
                            class="px-3.5 py-2.5 border-yellow-500 text-xs font-bold text-yellow-500 border hover:border-gray-300 rounded-full hover:text-gray-600 group"
                        >
                            See all from Aung Thu Zaw
                            <span
                                class="transition-all duration-150 group-hover:ml-3"
                            >
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
