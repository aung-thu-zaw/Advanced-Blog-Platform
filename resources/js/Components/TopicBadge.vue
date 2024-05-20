<script setup lang="ts">
defineProps<{ text: string }>();
</script>

<template>
    <div
        class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs border border-gray-300 bg-gray-100 text-gray-700 font-semibold mb-2"
    >
        {{ text }}
    </div>
</template>
