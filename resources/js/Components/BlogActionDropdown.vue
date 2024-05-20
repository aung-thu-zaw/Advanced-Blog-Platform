<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div class="relative inline-flex hs-dropdown">
        <button
            id="hs-dropdown-custom-icon-trigger"
            type="button"
            class="flex items-center justify-center text-sm font-semibold text-gray-800 hs-dropdown-toggle"
        >
            <svg
                class="flex-none text-gray-600 size-4"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
            >
                <circle cx="12" cy="12" r="1" />
                <circle cx="12" cy="5" r="1" />
                <circle cx="12" cy="19" r="1" />
            </svg>
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
                    <i class="fa-solid fa-user-plus"></i>
                    Follow Author
                </Link>
                <Link
                    as="button"
                    class="w-full flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                    href="#"
                >
                    <i class="fa-solid fa-newspaper"></i>
                    Follow Publication
                </Link>
            </div>

            <div class="py-2 border-b">
                <Link
                    as="button"
                    class="w-full flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                    href="#"
                >
                    <i class="fa-solid fa-user-slash"></i>
                    Mute Author
                </Link>
                <Link
                    as="button"
                    class="w-full flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                    href="#"
                >
                    <i class="fa-solid fa-bell-slash"></i>
                    Mute Publication
                </Link>
            </div>

            <div class="pt-2">
                <Link
                    as="button"
                    class="w-full flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-red-600 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                    href="#"
                >
                    <i class="fa-solid fa-flag"></i>
                    Report Story
                </Link>
            </div>
        </div>
    </div>
</template>
