<script setup lang="ts">
import Label from "@/Components/Form/Fields/Label.vue";
import InputField from "@/Components/Form/Fields/InputField.vue";
import ValidationError from "@/Components/Form/Fields/ValidationError.vue";
import GoogleAuthButton from "@/Components/GoogleAuthButton.vue";
import FacebookAuthButton from "@/Components/FacebookAuthButton.vue";
import { Link } from "@inertiajs/vue3";
import { reactive } from "vue";
import Checkbox from "@/Components/Form/Fields/Checkbox.vue";

const form = reactive({
    email: "",
    password: "",
    remember: "",
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
                    Welcome Back
                </h1>

                <div>
                    <div>
                        <!-- Form -->
                        <form @submit.prevent="">
                            <div class="space-y-5">
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
                                    <div
                                        class="flex items-center justify-between"
                                    >
                                        <Label
                                            html-for="password"
                                            label="Password"
                                            required
                                        />

                                        <Link
                                            href="#"
                                            class="text-sm min-w-[300px] font-semibold text-right text-gray-600 rounded-md hover:text-emerald-600"
                                        >
                                            Forgot Password ?
                                        </Link>
                                    </div>

                                    <InputField
                                        v-model="form.password"
                                        name="password"
                                        type="text"
                                        placeholder="Enter Your Email Address"
                                        required
                                    />

                                    <ValidationError message="" />
                                </div>

                                <!-- Remember me and Forgot Password -->
                                <div
                                    class="flex items-center justify-between mb-5"
                                >
                                    <div>
                                        <label class="flex items-center">
                                            <Checkbox v-model="form.remember" />
                                            <span
                                                class="text-sm text-slate-600"
                                            >
                                                Remember Me
                                            </span>
                                        </label>
                                    </div>

                                    <div></div>
                                </div>

                                <div class="w-full">
                                    <button
                                        type="submit"
                                        class="ml-auto block w-auto px-8 py-3.5 text-sm font-bold text-white transition-all duration-150 bg-gray-800 rounded-md hover:bg-gray-700"
                                    >
                                        Sign In
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
                            Don't have an account yet?
                            <Link
                                href="#"
                                class="font-medium text-emerald-600 decoration-2 hover:underline"
                            >
                                Create One
                            </Link>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
