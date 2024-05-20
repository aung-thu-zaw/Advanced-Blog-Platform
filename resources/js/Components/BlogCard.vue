<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
import LikeTooltipButton from "@/Components/LikeTooltipButton.vue";
import CommentTooltipButton from "@/Components/CommentTooltipButton.vue";
import AddToListTooltipButton from "@/Components/AddToListTooltipButton.vue";
import BlogActionDropdown from "@/Components/BlogActionDropdown.vue";
import ShowLessTooltipButton from "@/Components/ShowLessTooltipButton.vue";
</script>

<template>
    <div>
        <a class="block group" href="#">
            <div
                class="relative overflow-hidden bg-gray-100 aspect-w-16 aspect-h-12 rounded-2xl"
            >
                <img
                    class="object-cover transition-transform duration-500 ease-in-out group-hover:scale-105 rounded-2xl"
                    src="https://images.unsplash.com/photo-1575052814086-f385e2e2ad1b?q=80&w=3540&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Image Description"
                />

                <span
                    class="absolute top-0 end-0 rounded-se-xl rounded-es-xl text-xs font-medium bg-gray-900 text-white py-1.5 px-3"
                >
                    <div class="flex items-center space-x-1">
                        <i class="text-yellow-500 fa-solid fa-star"></i>

                        <p>Member Only</p>
                    </div>
                </span>
            </div>

            <div class="mt-5 space-y-3">
                <div class="flex items-center space-x-2 text-xs font-medium">
                    <div class="size-[25px] rounded-full overflow-hidden">
                        <img
                            src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                            alt=""
                            class="object-cover w-full h-full"
                        />
                    </div>

                    <Link
                        href="#"
                        class="font-semibold text-gray-800 transition-all hover:text-gray-600 hover:underline"
                    >
                        By Aaron Larsson
                    </Link>

                    <span> - </span>

                    <p class="text-gray-600">
                        <i class="mr-1 fa-regular fa-calendar"></i>
                        Feb 15, 2021
                    </p>

                    <span> - </span>

                    <p class="text-gray-600">
                        <i class="mr-1 fa-regular fa-clock"></i>
                        5 min read
                    </p>
                </div>
                <h3
                    class="mb-2 text-lg font-extrabold text-gray-800 transition-all line-clamp-2 hover:text-gray-600"
                >
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </h3>

                <p
                    class="text-sm font-medium text-gray-600 line-clamp-3 font-merriweather"
                >
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Quos accusantium id quisquam rerum incidunt cumque
                    temporibus praesentium, nemo veniam, unde eligendi illo
                    asperiores consectetur mollitia, ratione laborum qui neque
                    cum.
                </p>

                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-8">
                        <div class="flex items-center space-x-1.5">
                            <LikeTooltipButton />

                            <p class="text-xs font-semibold text-gray-700">
                                3K
                            </p>
                        </div>
                        <div class="flex items-center space-x-1.5">
                            <CommentTooltipButton />

                            <p class="text-xs font-semibold text-gray-700">
                                120
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-8">
                        <AddToListTooltipButton />

                        <ShowLessTooltipButton />

                        <BlogActionDropdown />
                    </div>
                </div>
            </div>
        </a>
    </div>
</template>
