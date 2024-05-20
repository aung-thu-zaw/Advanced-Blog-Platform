<script setup lang="ts">
// Your Code
</script>

<template>
    <div>
        <div class="mt-5 sm:mt-auto">
            <!-- Avatar -->
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img
                        class="size-[46px] rounded-full"
                        src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                        alt="Image Description"
                    />
                </div>
                <div class="ms-2.5 sm:ms-4">
                    <div class="flex items-center space-x-3">
                        <h4 class="font-semibold text-gray-800">
                            Aaron Larsson
                        </h4>

                        <span class="h-3 border border-yellow-500"> </span>

                        <button
                            type="button"
                            class="text-sm font-bold text-gray-700 duration-150 hover:text-yellow-500"
                        >
                            <span class="mr-1 text-xs">
                                <i class="fa-solid fa-user-plus"></i>
                            </span>
                            Follow
                        </button>
                    </div>

                    <div
                        class="flex items-center justify-start text-xs font-semibold text-gray-600"
                    >
                        <span> 10 min read </span>
                        <span class="mx-1 text-lg font-extrabold"> · </span>
                        <span> Feb 15, 2021 </span>
                    </div>
                </div>
            </div>
            <!-- End Avatar -->
        </div>
    </div>
</template>
