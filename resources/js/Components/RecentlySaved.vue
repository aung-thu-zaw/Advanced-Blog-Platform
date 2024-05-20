<script setup>
import SavedBlogSummary from "@/Components/SavedBlogSummary.vue";
</script>

<template>
    <div class="space-y-5">
        <h3 class="font-bold text-gray-700 text-md font-poppins">
            <i class="mr-1 fa-solid fa-bookmark"></i>
            Recently Saved
        </h3>

        <div class="space-y-6">
            <SavedBlogSummary />

            <hr />

            <SavedBlogSummary />

            <hr />

            <SavedBlogSummary />

            <hr />

            <SavedBlogSummary />
        </div>

        <Link
            href="#"
            class="block text-xs font-bold text-yellow-500 hover:text-gray-600 group"
        >
            View all save lists
            <span class="transition-all duration-150 group-hover:ml-3">
                <i class="fa-solid fa-arrow-right"></i>
            </span>
        </Link>
    </div>
</template>
