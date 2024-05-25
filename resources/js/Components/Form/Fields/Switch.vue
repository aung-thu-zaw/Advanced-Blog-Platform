<script setup lang="ts">
import { ref } from "vue";

defineProps<{ label?: string }>();

const isChecked = ref(false);

const handleCheckboxChange = () => {
    isChecked.value = !isChecked.value;
};
</script>

<template>
    <label
        class="relative inline-flex items-center cursor-pointer select-none themeSwitcherTwo"
    >
        <input type="checkbox" class="sr-only" @change="handleCheckboxChange" />
        <span
            class="slider mr-4 flex h-[25px] w-[53px] items-center rounded-full bg-[#CCCCCE] dark:bg-dark-background border dark:border-neutral-500 p-1 duration-200"
        >
            <span
                class="w-4 h-4 duration-200 bg-white rounded-full dot dark:bg-neutral-300"
            ></span>
        </span>
        <span
            v-if="label"
            class="flex items-center text-sm font-medium label text-light-text dark:text-dark-text"
        >
            {{ label }}
        </span>
    </label>
</template>
