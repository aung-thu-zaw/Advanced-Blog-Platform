<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div class="relative inline-flex hs-dropdown">
        <button
            id="hs-dropdown-custom-icon-trigger"
            type="button"
            class="flex items-center justify-center text-sm font-semibold text-gray-600 bg-white hs-dropdown-toggle"
        >
            <i class="fa-solid fa-share"></i>
        </button>

        <div
            class="hs-dropdown-menu z-30 transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-40 bg-white shadow-md rounded-sm p-2 mt-2 border border-gray-100 font-medium"
            aria-labelledby="hs-dropdown-custom-icon-trigger"
        >
            <div class="pb-2 border-b">
                <Link
                    as="button"
                    class="w-full flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                    href="#"
                >
                    <i class="fa-solid fa-link"></i>
                    Copy Link
                </Link>
            </div>

            <div class="pt-2">
                <a
                    class="w-full flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                    href="#"
                >
                    <i class="fa-brands fa-facebook"></i>
                    Share on Facebook
                </a>
                <a
                    class="w-full flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                    href="#"
                >
                    <i class="fa-brands fa-twitter"></i>
                    Share on Twitter
                </a>
                <a
                    class="w-full flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                    href="#"
                >
                    <i class="fa-brands fa-linkedin"></i>
                    Share on LinkedIn
                </a>
            </div>
        </div>
    </div>
</template>
