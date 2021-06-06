<template>
    <app-layout>
        <template #navSide>
            <div id="navSide">
                <nav-side />
            </div>
            <div style="width: 80.5px; heigth: auto;"></div>
        </template>
        <template #content>

        <header-nav :pag="'Comandas'" :classe="'w-full flex-none flex h-16 bg-gray-100 border-t px-4 items-center justify-between'"/>

        <main class=" flex min-h-0 border-t w-full  bg-gray-100">
            <section aria-label="main content" class="flex min-h-0 w-2/3 bg-white ">
                <table-comanda  @addTable="mesa = $event" @addItem="item = $event" @increments="incremento = $event" />
            </section>

            <!-- section Tickets-->
            <div class="w-auto bg-gray-100 ">
                <tickets :items="item" :table="mesa" :increments="incremento" @incremento="incremento = $event" />
            </div>
        </main>
        </template>
    </app-layout>
</template>

<script>

    import AppLayout from '@/Layouts/AppLayout'
    import NavSide from '@/Components/NavSide'
    import TableComanda from '@/Components/TableComanda'
    import Tickets from '@/Components/Tickets'
    import HeaderNav from '@/Components/HeaderNav'

    export default {
        components: {
            AppLayout,
            NavSide,
            TableComanda,
            Tickets,
            HeaderNav
        },

        data(){
            return {

                item: [],
                mesa: '',
                incremento: false,

            }

        },

    }
</script>
