<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <nav
        class="flex items-center px-5 space-x-10 text-gray-600 bg-gray-100 border-b border-b-gray-300"
    >
        <div class="hs-tooltip inline-block [--placement:top]">
            <button
                type="button"
                class="text-lg text-gray-800 hs-tooltip-toggle"
            >
                <i class="fa-regular fa-square-plus"></i>
                <span
                    class="absolute z-10 invisible inline-block px-2 py-1 text-xs font-medium text-white transition-opacity bg-gray-900 rounded shadow-sm opacity-0 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible"
                    role="tooltip"
                >
                    Add new topics
                </span>
            </button>
        </div>

        <ul class="flex items-center space-x-6 text-sm font-medium">
            <li
                class="py-3.5 font-bold text-gray-800 border-b-2 border-b-gray-600"
            >
                <Link href="#" as="button"> For You </Link>
            </li>
            <li class="py-3.5 hover:text-gray-700">
                <Link href="#" as="button"> Following </Link>
            </li>
            <li class="py-3.5 hover:text-gray-700">
                <Link href="#" as="button"> Technology </Link>
            </li>
            <li class="py-3.5 hover:text-gray-700">
                <Link href="#" as="button"> Web Development </Link>
            </li>
            <li class="py-3.5 hover:text-gray-700">
                <Link href="#" as="button"> Programming </Link>
            </li>
            <li class="py-3.5 hover:text-gray-700">
                <Link href="#" as="button"> Life </Link>
            </li>
            <li class="py-3.5 hover:text-gray-700">
                <Link href="#" as="button"> Crypto </Link>
            </li>
            <li class="py-3.5 hover:text-gray-700">
                <Link href="#" as="button"> AI </Link>
            </li>
        </ul>
    </nav>
</template>
