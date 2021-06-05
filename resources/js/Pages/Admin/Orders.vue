<template>
    <app-layout>
        <template #navSide>
            <div id="navSide">
                <nav-side />
            </div>
            <div style="width: 80.5px; heigth: auto;"></div>
        </template>
        <template #content>

        <header aria-label="page caption" class="flex-none flex h-16 bg-gray-100 border-t px-4 items-center ">
            <h1 id="page-caption" class="font-bold text-lg text-gray-500">Comandas</h1>
        </header>

        <main class=" flex min-h-0 border-t w-full  bg-gray-100">
            <section aria-label="main content" class="flex min-h-0 w-2/3 bg-white ">
                <table-comanda  @addTable="mesa = $event" @addItem="item = $event" @increments="incremento = $event" />
            </section>

            <!-- section Tickets-->
            <div class="w-auto bg-gray-100 ">
                <tickets :items="item" :table="mesa" :increments="incremento" @incremento="incremento = $event" />
            </div>
        </main>

            <modal-alert :data="dato" @changeStatusDelete="borrado = $event" :showDele="showDele" @changeModalStatus="showDele = $event" />
        </template>
    </app-layout>
</template>

<script>

    import AppLayout from '@/Layouts/AppLayout'
    import NavSide from '@/Components/NavSide'
    import TableComanda from '@/Components/TableComanda'
    import ModalAlert from '@/Components/ModalAlert'
    import Tickets from '@/Components/Tickets'

    export default {
        components: {
            AppLayout,
            NavSide,
            TableComanda,
            ModalAlert,
            Tickets
        },

        data(){
            return {

                item: [],
                mesa: '',
                incremento: false,
            }

        },
        methods: {

            changeStateModal(){

                this.showModalDish = !this.showModalDish
            },

            changeStateModalMod(){

                this.showModalDishMod = !this.showModalDishMod
            },

        },

    }
</script>

<style>
    #navSide{
        position: fixed;
    }
</style>
