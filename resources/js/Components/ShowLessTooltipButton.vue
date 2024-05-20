<script setup lang="ts">
// Your Code
</script>

<template>
    <div class="hs-tooltip inline-block [--placement:bottom]">
        <button type="button" class="text-gray-600 hs-tooltip-toggle">
            <i class="fa-regular fa-square-minus"></i>
            <span
                class="absolute z-10 invisible inline-block px-2 py-1 text-xs font-medium text-white transition-opacity bg-gray-900 rounded shadow-sm opacity-0 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible"
                role="tooltip"
            >
                Show less like this blog
            </span>
        </button>
    </div>
</template>
