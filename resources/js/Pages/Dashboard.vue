<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>
        <div class="h-full w-full">
            <content-main />
        </div>


    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Welcome from '@/Jetstream/Welcome'
    import ContentMain from '@/Components/ContentMain'

    export default {
        components: {
            AppLayout,
            Welcome,
            ContentMain
        },
    }
</script>
