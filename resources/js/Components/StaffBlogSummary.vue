<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div class="space-y-2">
        <div class="flex items-center space-x-2">
            <div class="w-6 h-6 overflow-hidden rounded-full min-w-6 min-h-6">
                <img
                    src="https://images.unsplash.com/photo-1619895862022-09114b41f16f?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHVzZXJ8ZW58MHx8MHx8fDA%3D"
                    alt="user-avatar"
                    class="object-cover w-full h-full"
                />
            </div>

            <h3 class="text-xs font-bold text-gray-600">Aung Thu Zaw</h3>
        </div>

        <Link
            href="#"
            class="font-extrabold text-gray-800 transition-all text-md line-clamp-2 hover:text-gray-600"
        >
            My Experience With an Arrogant Junior Programmer
        </Link>
    </div>
</template>
