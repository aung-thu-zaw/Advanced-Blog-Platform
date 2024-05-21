<script setup>
import UserProfile from "@/Components/UserProfile.vue";
</script>

<template>
    <div class="space-y-5">
        <h3 class="font-bold text-gray-700 text-md font-poppins">
            <i class="mr-1 fa-solid fa-user-check"></i>
            Following
        </h3>

        <div class="space-y-5">
            <UserProfile />
            <UserProfile />
            <UserProfile />
            <UserProfile />
            <UserProfile />
            <UserProfile />
        </div>

        <Link
            href="#"
            class="block text-xs font-bold text-yellow-500 hover:text-gray-600 group"
        >
            See all following
            <span class="transition-all duration-150 group-hover:ml-3">
                <i class="fa-solid fa-arrow-right"></i>
            </span>
        </Link>
    </div>
</template>
