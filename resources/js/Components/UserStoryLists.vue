<script setup>
import ListCard from "@/Components/ListCard.vue";
</script>

<template>
    <div class="space-y-5">
        <h3 class="font-bold text-gray-700 text-md font-poppins">
            <i class="mr-1 fa-solid fa-list"></i>
            Story Lists
        </h3>

        <div class="space-y-5">
            <ListCard />
            <ListCard />
            <ListCard />
            <ListCard />
        </div>

        <Link
            href="#"
            class="block text-xs font-bold text-yellow-500 hover:text-gray-600 group"
        >
            See all lists
            <span class="transition-all duration-150 group-hover:ml-3">
                <i class="fa-solid fa-arrow-right"></i>
            </span>
        </Link>
    </div>
</template>
