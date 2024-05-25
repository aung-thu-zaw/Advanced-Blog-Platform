<script setup lang="ts">
import { ref } from "vue";

interface RadioFieldProps {
    id?: string;
    name: string;
    value: string;
    modelValue: string;
    disabled?: boolean;
}

const props = defineProps<RadioFieldProps>();

const emit = defineEmits(["update:modelValue"]);

const isChecked = ref<boolean>(false);

const handleChange = () => {
    emit("update:modelValue", props.value);

    isChecked.value = true;
};
</script>

<template>
    <label
        class="flex items-center cursor-pointer select-none text-light-text dark:text-dark-text"
    >
        <div class="relative">
            <input
                :id="id"
                :name="name"
                type="radio"
                :value="value"
                :checked="modelValue === value"
                :disabled="disabled"
                class="sr-only"
                @change="handleChange"
            />
            <div
                :class="{ '!bg-light-accent !dark:bg-dark-accent': isChecked }"
                class="flex items-center justify-center w-4 h-4 border border-gray-500 rounded-full box dark:border-neutral-500"
            >
                <span
                    class="h-[7px] w-[7px] rounded-full"
                    :class="{
                        'bg-light-secondary dark:bg-neutral-500': !isChecked,
                        ' dark:bg-neutral-100': isChecked,
                    }"
                ></span>
            </div>
        </div>
    </label>
</template>
