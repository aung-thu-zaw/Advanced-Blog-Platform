<script setup lang="ts">
import { ref, onMounted } from "vue";

interface InputFieldProps {
    id?: string;
    name: string;
    type: "text" | "password" | "number" | "email";
    placeholder?: string;
    class?: string;
    autofocus?: boolean;
    autocomplete?: "on" | "off";
    readOnly?: boolean;
    disabled?: boolean;
    required?: boolean;
    maxLength?: string;
    minLength?: string;
    pattern?: string;
    modelValue: string;
}

const props = defineProps<InputFieldProps>();

const emit = defineEmits(["update:modelValue"]);

const input = ref<HTMLInputElement | null>(null);

const inputClasses = ref<string[]>([
    "px-5",
    "py-3.5",
    "rounded-md",
    "font-medium",
    "border",
    "w-full",
    "text-sm",
    "outline-none",
    "bg-gray-50",
    "border-gray-300",
    "focus:ring-gray-300",
    "focus:border-gray-400",
    "duration-200",
    props.class ?? "",
]);

onMounted(() => {
    if (input.value && input.value.hasAttribute("autofocus"))
        input.value.focus();
});

const handleInput = (event: Event) => {
    const target = event.target as HTMLInputElement;

    if (target && target.value !== undefined)
        emit("update:modelValue", target.value);
};
</script>

<template>
    <input
        :id="id"
        ref="input"
        :name="name"
        :type="type"
        :placeholder="placeholder"
        :class="inputClasses"
        :value="modelValue"
        :readonly="readOnly"
        :disabled="disabled"
        :required="required"
        :pattern="pattern"
        :maxlength="maxLength"
        :minlength="minLength"
        :autofocus="autofocus"
        :autocomplete="autocomplete"
        @input="handleInput"
    />
</template>
