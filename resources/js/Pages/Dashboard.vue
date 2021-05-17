<template>
    <app-layout>
        <template #navSide>
            <nav-side />
        </template>
        
        <template #content>
            <home />
        </template>
    </app-layout>
    
</template>

<script>

    import Home from '@/Pages/Admin/Home'
    import AppLayout from '@/Layouts/AppLayout'

    export default {
        components: {
            AppLayout,
            Home,
            
        },
    }
</script>
