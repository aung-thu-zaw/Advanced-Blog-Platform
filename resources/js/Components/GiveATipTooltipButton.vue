<script setup lang="ts">
// Your Code
</script>

<template>
    <div class="hs-tooltip inline-block [--placement:top]">
        <button
            type="button"
            class="w-8 h-8 text-sm text-gray-600 bg-gray-100 border border-gray-400 rounded-full hs-tooltip-toggle"
        >
            <i class="fa-solid fa-hand-holding-dollar"></i>
            <span
                class="absolute z-10 invisible inline-block px-2 py-1 text-xs font-medium text-white transition-opacity bg-gray-900 rounded shadow-sm opacity-0 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible"
                role="tooltip"
            >
                Give a tip
            </span>
        </button>
    </div>
</template>
