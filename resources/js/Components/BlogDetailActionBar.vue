<script setup lang="ts">
import ShareDropdown from "@/Components/ShareDropdown.vue";
import LikeTooltipButton from "@/Components/LikeTooltipButton.vue";
import CommentTooltipButton from "@/Components/CommentTooltipButton.vue";
import AddToListTooltipButton from "@/Components/AddToListTooltipButton.vue";
import BlogActionDropdown from "@/Components/BlogActionDropdown.vue";
import ShowLessTooltipButton from "@/Components/ShowLessTooltipButton.vue";
</script>

<template>
    <div
        class="flex items-center justify-between px-3 py-4 border-t border-b border-gray-200"
    >
        <div class="flex items-center space-x-8">
            <div class="flex items-center space-x-1.5">
                <LikeTooltipButton />

                <p class="text-xs font-semibold text-gray-700">3K</p>
            </div>
            <div class="flex items-center space-x-1.5">
                <CommentTooltipButton />

                <p class="text-xs font-semibold text-gray-700">120</p>
            </div>
        </div>

        <div class="flex items-center space-x-8">
            <AddToListTooltipButton />

            <ShowLessTooltipButton />

            <ShareDropdown />

            <BlogActionDropdown />
        </div>
    </div>
</template>
