<script setup lang="ts">
import StoryListCardForProfile from "@/Components/StoryListCardForProfile.vue";
</script>

<template>
    <div class="space-y-10">
        <StoryListCardForProfile v-for="index in 10" :key="index" />
    </div>
</template>
