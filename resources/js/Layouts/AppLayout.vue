<script setup lang="ts">
import AppNavbar from "@/Components/AppNavbar.vue";
import { onMounted } from "vue";
import { type IStaticMethods } from "preline/preline";

declare global {
    interface Window {
        HSStaticMethods: IStaticMethods;
    }
}

onMounted(() => {
    setTimeout(() => {
        window.HSStaticMethods.autoInit();
    }, 100);
});
</script>

<template>
    <div>
        <AppNavbar />

        <slot />
    </div>
</template>
