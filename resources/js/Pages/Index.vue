<script setup lang="ts">
import LandingPageNavbar from "@/Components/LandingPageNavbar.vue";
</script>

<template>
    <header class="h-screen min-w-full bg-[#f6f6f8]">
        <LandingPageNavbar />

        <div
            class="container flex flex-col-reverse items-center justify-between w-full p-6 mx-auto text-center md:text-left md:my-12 md:py-20 md:px-10 md:flex-row md:space-y-0 md:space-x-10"
        >
            <div class="w-full mt-10 space-y-14 md:w-7/12 md:mt-0">
                <h1
                    class="text-4xl font-extrabold md:text-6xl lg:text-8xl font-merriweather"
                >
                    Stay curious.
                </h1>

                <p class="text-sm font-medium text-gray-700 md:text-lg">
                    Discover stories, thinking, and expertise from writers on
                    any topic.
                </p>

                <button
                    type="button"
                    class="px-5 py-3 text-sm font-bold text-white transition-all bg-gray-800 rounded-full hover:bg-gray-700"
                >
                    <i class="mr-1 fa-solid fa-book-open-reader"></i>
                    Start Reading
                </button>
            </div>

            <div class="w-full md:w-5/12">
                <img
                    src="https://us.123rf.com/450wm/yupiramos/yupiramos1506/yupiramos150607597/41363201-blog-de-dise%C3%B1o-sobre-fondo-blanco-ilustraci%C3%B3n-vectorial.jpg?ver=6"
                    alt=""
                    class="mx-auto"
                />
            </div>
        </div>
    </header>
</template>
