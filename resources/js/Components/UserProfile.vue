<script setup lang="ts">
import FollowButton from "@/Components/FollowButton.vue";
</script>

<template>
    <div class="flex items-center space-x-2">
        <div class="flex items-start space-x-3">
            <div
                class="w-10 h-10 overflow-hidden rounded-full min-w-10 min-h-10"
            >
                <img
                    src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8dXNlcnxlbnwwfHwwfHx8MA%3D%3D"
                    alt="user-avatar"
                    class="object-cover w-full h-full"
                />
            </div>

            <div class="space-y-1">
                <h1 class="text-sm font-bold text-gray-800">Aung Thu Zaw</h1>

                <p class="text-xs font-medium text-gray-600 line-clamp-2">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Placeat cupiditate tempore reiciendis incidunt repudiandae
                    pariatur reprehenderit dolor asperiores hic eius, commodi
                    esse culpa, nostrum nesciunt ratione facere rem voluptas
                    exercitationem?
                </p>
            </div>
        </div>

        <FollowButton />
    </div>
</template>
