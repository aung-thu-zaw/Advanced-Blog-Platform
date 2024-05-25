<script setup lang="ts">
import { defineProps } from "vue";

defineProps<{ message: string }>();
</script>

<template>
    <p
        v-if="message"
        class="w-full mt-3 text-xs font-semibold text-left text-red-600"
    >
        {{ message }}
    </p>
</template>
