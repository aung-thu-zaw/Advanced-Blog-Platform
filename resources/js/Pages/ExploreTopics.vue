<script setup lang="ts">
import { Head, Link } from "@inertiajs/vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import TopicSearchBox from "@/Components/TopicSearchBox.vue";
import TopicBadge from "@/Components/TopicBadge.vue";
</script>

<template>
    <Head title="Explore Topics" />

    <AppLayout>
        <section class="min-h-full">
            <div class="container px-5 py-10 mx-auto space-y-10">
                <h1
                    class="text-2xl font-extrabold text-center text-gray-800 md:text-4xl"
                >
                    <i class="fa-regular fa-compass"></i>
                    Explore Topics
                </h1>

                <TopicSearchBox />

                <div class="flex items-center justify-center space-x-3">
                    <p class="mb-2 font-bold text-gray-700">
                        Recommended Topics :
                    </p>

                    <div class="flex flex-wrap items-start space-x-2">
                        <TopicBadge text="Self Improvement" />
                        <TopicBadge text="Data Science" />
                        <TopicBadge text="Writing" />
                        <TopicBadge text="Relationships" />
                    </div>
                </div>

                <div
                    class="grid grid-cols-1 gap-10 place-items-center md:grid-cols-2 lg:grid-cols-3"
                >
                    <div v-for="index in 6" :key="index" class="">
                        <div class="mb-5">
                            <Link
                                href="#"
                                class="text-xl font-bold text-gray-800 transition-all hover:underline"
                            >
                                Self Improvement
                            </Link>
                        </div>

                        <div class="space-y-8">
                            <div class="pl-6 space-y-3">
                                <div>
                                    <Link
                                        href="#"
                                        class="font-bold text-gray-800 transition-all text-md hover:underline"
                                    >
                                        Mental Health
                                    </Link>
                                </div>

                                <ul
                                    class="space-y-1 text-sm font-medium text-gray-700 list-disc list-inside"
                                >
                                    <li>
                                        <Link
                                            href="#"
                                            class="transition-all hover:underline"
                                        >
                                            Adoption
                                        </Link>
                                    </li>
                                    <li>
                                        <Link
                                            href="#"
                                            class="transition-all hover:underline"
                                        >
                                            Children
                                        </Link>
                                    </li>
                                    <li>
                                        <Link
                                            href="#"
                                            class="transition-all hover:underline"
                                        >
                                            Elder Care
                                        </Link>
                                    </li>
                                    <li>
                                        <Link
                                            href="#"
                                            class="transition-all hover:underline"
                                        >
                                            Fatherhood
                                        </Link>
                                    </li>
                                    <li>
                                        <Link
                                            href="#"
                                            class="transition-all hover:underline"
                                        >
                                            Motherhood
                                        </Link>
                                    </li>
                                    <li>
                                        <Link
                                            href="#"
                                            class="transition-all hover:underline"
                                        >
                                            More
                                        </Link>
                                    </li>
                                </ul>
                            </div>

                            <div class="pl-6 space-y-3">
                                <div>
                                    <Link
                                        href="#"
                                        class="font-bold text-gray-800 transition-all text-md hover:underline"
                                    >
                                        Mental Health
                                    </Link>
                                </div>

                                <ul
                                    class="space-y-1 text-sm font-medium text-gray-700 list-disc list-inside"
                                >
                                    <li>
                                        <Link
                                            href="#"
                                            class="transition-all hover:underline"
                                        >
                                            Adoption
                                        </Link>
                                    </li>
                                    <li>
                                        <Link
                                            href="#"
                                            class="transition-all hover:underline"
                                        >
                                            Children
                                        </Link>
                                    </li>
                                    <li>
                                        <Link
                                            href="#"
                                            class="transition-all hover:underline"
                                        >
                                            Elder Care
                                        </Link>
                                    </li>
                                    <li>
                                        <Link
                                            href="#"
                                            class="transition-all hover:underline"
                                        >
                                            Fatherhood
                                        </Link>
                                    </li>
                                    <li>
                                        <Link
                                            href="#"
                                            class="transition-all hover:underline"
                                        >
                                            Motherhood
                                        </Link>
                                    </li>
                                    <li>
                                        <Link
                                            href="#"
                                            class="transition-all hover:underline"
                                        >
                                            More
                                        </Link>
                                    </li>
                                </ul>
                            </div>

                            <div class="pl-6 space-y-3">
                                <div>
                                    <Link
                                        href="#"
                                        class="font-bold text-gray-800 transition-all text-md hover:underline"
                                    >
                                        Mental Health
                                    </Link>
                                </div>

                                <ul
                                    class="space-y-1 text-sm font-medium text-gray-700 list-disc list-inside"
                                >
                                    <li>
                                        <Link
                                            href="#"
                                            class="transition-all hover:underline"
                                        >
                                            Adoption
                                        </Link>
                                    </li>
                                    <li>
                                        <Link
                                            href="#"
                                            class="transition-all hover:underline"
                                        >
                                            Children
                                        </Link>
                                    </li>
                                    <li>
                                        <Link
                                            href="#"
                                            class="transition-all hover:underline"
                                        >
                                            Elder Care
                                        </Link>
                                    </li>
                                    <li>
                                        <Link
                                            href="#"
                                            class="transition-all hover:underline"
                                        >
                                            Fatherhood
                                        </Link>
                                    </li>
                                    <li>
                                        <Link
                                            href="#"
                                            class="transition-all hover:underline"
                                        >
                                            Motherhood
                                        </Link>
                                    </li>
                                    <li>
                                        <Link
                                            href="#"
                                            class="transition-all hover:underline"
                                        >
                                            More
                                        </Link>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </AppLayout>
</template>
