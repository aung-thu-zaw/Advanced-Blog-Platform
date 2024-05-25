<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div
        class="sticky top-0 z-50 flex flex-wrap w-full py-4 text-sm bg-transparent sm:justify-start sm:flex-nowrap"
    >
        <nav
            class="max-w-[85rem] w-full mx-auto px-4 md:flex md:items-center md:justify-between"
            aria-label="Global"
        >
            <div
                class="flex items-center justify-between md:w-auto min-w-[200px] w-full"
            >
                <Link
                    href="#"
                    class="flex-none text-xl font-extrabold text-gray-800"
                >
                    Blog Platform
                </Link>
                <div class="flex items-center space-x-3 md:hidden">
                    <button
                        type="button"
                        class="inline-flex items-center justify-center p-2 text-sm font-semibold text-gray-700 bg-transparent border border-gray-200 rounded-lg shadow-sm hs-collapse-toggle gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                        data-hs-collapse="#navbar-collapse-with-animation"
                        aria-controls="navbar-collapse-with-animation"
                        aria-label="Toggle navigation"
                    >
                        <div class="hs-collapse-open:hidden">
                            <div class="flex items-center space-x-1">
                                <span> Menu </span>
                                <svg
                                    class="flex-shrink-0 w-4 h-4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <line x1="3" x2="21" y1="6" y2="6" />
                                    <line x1="3" x2="21" y1="12" y2="12" />
                                    <line x1="3" x2="21" y1="18" y2="18" />
                                </svg>
                            </div>
                        </div>
                        <div class="hidden hs-collapse-open:block">
                            <div class="flex items-center space-x-1">
                                <span> Close</span>
                                <svg
                                    class="flex-shrink-0 w-4 h-4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path d="M18 6 6 18" />
                                    <path d="m6 6 12 12" />
                                </svg>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
            <div
                id="navbar-collapse-with-animation"
                class="hidden overflow-hidden transition-all duration-300 hs-collapse basis-full grow md:block"
            >
                <div
                    class="flex flex-col w-auto gap-5 mt-5 md:flex-row md:items-center md:justify-end md:mt-0 md:ps-5 text-md md:space-x-4"
                >
                    <Link
                        class="font-semibold text-gray-800 duration-200 hover:text-gray-600"
                        href="#"
                    >
                        Our Story
                    </Link>

                    <Link
                        class="font-semibold text-gray-800 duration-200 hover:text-gray-600"
                        href="#"
                    >
                        Membership
                    </Link>

                    <Link
                        class="font-semibold text-gray-800 duration-200 hover:text-gray-600"
                        href="#"
                    >
                        Write
                    </Link>

                    <Link
                        class="font-semibold text-gray-800 duration-200 hover:text-gray-600"
                        href="#"
                    >
                        SignIn
                    </Link>

                    <button
                        class="px-3 py-2.5 text-xs font-bold text-white transition-all bg-gray-800 rounded-full hover:bg-gray-700"
                    >
                        Get Started
                    </button>
                </div>
            </div>
        </nav>
    </div>
</template>
