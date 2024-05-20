<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div class="relative inline-flex hs-dropdown">
        <button
            id="hs-dropdown-with-icons"
            type="button"
            class="inline-flex items-center hs-dropdown-toggle"
        >
            <div class="flex items-center">
                <div
                    class="inline-flex items-center justify-center w-10 h-10 text-xs text-white rounded-full"
                >
                    <img
                        alt="user-photo"
                        class="object-cover w-full h-full rounded-full"
                        src="https://t3.ftcdn.net/jpg/02/00/90/24/360_F_200902415_G4eZ9Ok3Ypd4SZZKjc8nqJyFVp1eOD6V.jpg"
                    />
                </div>
            </div>
        </button>

        <div
            class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-[15rem] bg-white shadow-md rounded-lg p-2 mt-2 divide-y divide-gray-200 border border-gray-300"
            aria-labelledby="hs-dropdown-with-icons"
        >
            <div class="py-2 first:pt-0 last:pb-0">
                <div
                    class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                >
                    <Link
                        as="button"
                        href="#"
                        class="block w-full text-sm font-semibold text-left bg-transparent whitespace-nowrap text-slate-700"
                    >
                        <i class="fa-regular fa-id-card mr-1.5"></i>
                        My Account
                    </Link>
                </div>

                <div
                    class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                >
                    <Link
                        as="button"
                        href="#"
                        class="block w-full text-sm font-semibold text-left bg-transparent whitespace-nowrap text-slate-700"
                    >
                        <i class="fa-solid fa-boxes-packing mr-1.5"></i>
                        My Orders
                    </Link>
                </div>

                <div
                    class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                >
                    <Link
                        as="button"
                        href="#"
                        class="block w-full text-sm font-semibold text-left bg-transparent whitespace-nowrap text-slate-700"
                    >
                        <i class="fa-solid fa-heart mr-1.5"></i>
                        My Wishlists
                    </Link>
                </div>

                <div
                    class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                >
                    <Link
                        as="button"
                        href="#"
                        class="block w-full text-sm font-semibold text-left bg-transparent whitespace-nowrap text-slate-700"
                    >
                        <i class="fa-solid fa-star mr-1.5"></i>
                        My Reviews
                    </Link>
                </div>

                <div
                    class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                >
                    <Link
                        as="button"
                        href="#"
                        class="block w-full text-sm font-semibold text-left bg-transparent whitespace-nowrap text-slate-700"
                    >
                        <i class="fa-solid fa-rotate-left mr-1.5"></i>
                        My Returns & Cancellations
                    </Link>
                </div>
            </div>

            <div class="py-2 first:pt-0 last:pb-0">
                <div
                    class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                >
                    <Link
                        as="button"
                        method="post"
                        href="#"
                        class="block w-full text-sm font-semibold text-left bg-transparent whitespace-nowrap text-slate-700"
                    >
                        <i class="fa-solid fa-right-from-bracket mr-1.5"></i>

                        Logout
                    </Link>
                </div>
            </div>
        </div>
    </div>
</template>
