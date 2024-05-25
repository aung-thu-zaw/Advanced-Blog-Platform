<script setup lang="ts">
defineProps<{ forHtml?: string; label: string; required?: boolean }>();
</script>

<template>
    <label
        :for="forHtml"
        class="block w-full mb-2 text-sm font-semibold text-left text-gray-700"
    >
        {{ label }}

        <span v-if="required" class="text-red-600">*</span>
    </label>
</template>
