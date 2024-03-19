<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="w-full min-h-screen bg-[#F5F7FD] ">
        <div class="container mx-auto  min-h-screen flex flex-col justify-between">
            <slot />
        </div>
    </div>
</template>
