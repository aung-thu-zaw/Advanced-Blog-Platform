<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <nav
        class="flex items-center px-5 space-x-10 text-gray-600 border-b border-b-gray-300"
    >
        <ul class="flex items-center space-x-6 text-sm font-medium">
            <li
                class="py-3.5 font-bold text-gray-800 border-b-2 border-b-gray-600"
            >
                <Link href="#" as="button"> Home </Link>
            </li>
            <li class="py-3.5 hover:text-gray-700">
                <Link href="#" as="button"> About </Link>
            </li>
            <li class="py-3.5 hover:text-gray-700">
                <Link href="#" as="button"> Lists </Link>
            </li>
            <li class="py-3.5 hover:text-gray-700">
                <Link href="#" as="button"> Stories </Link>
            </li>
        </ul>
    </nav>
</template>
