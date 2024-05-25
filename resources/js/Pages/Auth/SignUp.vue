<script setup lang="ts">
import Label from "@/Components/Form/Fields/Label.vue";
import InputField from "@/Components/Form/Fields/InputField.vue";
import ValidationError from "@/Components/Form/Fields/ValidationError.vue";
import GoogleAuthButton from "@/Components/GoogleAuthButton.vue";
import FacebookAuthButton from "@/Components/FacebookAuthButton.vue";
import { Link } from "@inertiajs/vue3";
import { reactive } from "vue";

const form = reactive({
    display_name: "",
    email: "",
    password: "",
    password_confirmation: "",
});
</script>

<template>
    <div>
        <div
            class="container flex items-center justify-center h-screen p-6 mx-auto"
        >
            <div
                class="w-full p-10 border border-gray-300 rounded-md shadow-sm max-w-[600px]"
            >
                <h1
                    class="mb-10 text-2xl font-extrabold text-center text-gray-800"
                >
                    Join Blog Platform
                </h1>

                <div>
                    <div>
                        <!-- Form -->
                        <form @submit.prevent="">
                            <div class="space-y-5">
                                <!-- Username / Name -->
                                <div>
                                    <Label
                                        html-for="display-name"
                                        label="Display Name"
                                        required
                                    />

                                    <InputField
                                        v-model="form.display_name"
                                        name="display-name"
                                        type="text"
                                        placeholder="Enter Your Display Name"
                                        required
                                    />

                                    <ValidationError message="" />
                                </div>

                                <!-- Email Input -->
                                <div>
                                    <Label
                                        html-for="email-address"
                                        label="Email address"
                                        required
                                    />

                                    <InputField
                                        v-model="form.email"
                                        name="email-address"
                                        type="email"
                                        placeholder="Enter Your Email Address"
                                        required
                                    />

                                    <ValidationError message="" />
                                </div>

                                <!-- Password Input -->
                                <div>
                                    <Label
                                        html-for="password"
                                        label="Password"
                                        required
                                    />

                                    <InputField
                                        v-model="form.password"
                                        name="password"
                                        type="text"
                                        placeholder="Enter Password"
                                        required
                                    />

                                    <ValidationError message="" />
                                </div>

                                <!-- Confirm Password Input -->
                                <div>
                                    <Label
                                        html-for="confirm-password"
                                        label="Confirm Password"
                                        required
                                    />

                                    <InputField
                                        v-model="form.password_confirmation"
                                        name="confirm-password"
                                        type="password"
                                        placeholder="Re-type Password"
                                        required
                                    />

                                    <ValidationError message="" />
                                </div>

                                <div class="w-full">
                                    <button
                                        type="submit"
                                        class="ml-auto block w-auto px-8 py-3.5 text-sm font-bold text-white transition-all duration-150 bg-gray-800 rounded-md hover:bg-gray-700"
                                    >
                                        Create Account
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                    <div class="">
                        <div
                            class="py-6 flex items-center text-xs uppercase before:flex-[1_1_0%] before:border-t before:me-6 after:flex-[1_1_0%] after:border-t after:ms-6 text-gray-500 before:border-gray-600 after:border-gray-600"
                        >
                            Or
                        </div>

                        <div
                            class="flex items-center justify-between space-x-5"
                        >
                            <GoogleAuthButton />
                            <FacebookAuthButton />
                        </div>

                        <p
                            class="mt-6 text-sm font-medium text-center text-gray-700"
                        >
                            Already have an account?
                            <Link
                                href="#"
                                class="font-medium text-emerald-600 decoration-2 hover:underline"
                            >
                                Sign in here
                            </Link>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
