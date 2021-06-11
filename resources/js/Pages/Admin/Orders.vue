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

        <main class=" flex-grow flex min-h-0 border-t">
            <section aria-label="main content" class="flex min-h-0 flex-col  flex-auto border-l container ">
                <table-comanda  @addTable="mesa = $event" @addItem="item = $event" @increments="incremento = $event" />
            </section>

            <!-- section Tickets-->
            <div class="w-1/2 bg-gray-100 ">
                <tickets :items="item" :table="mesa" :increments="incremento" @incremento="incremento = $event" @resetProps="resetProp = $event" />
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
                resetProp: false
            }

        },

        watch:{

            resetProp: function(val){

                this.item = []
                this.resetProp = false
                this.mesa = ''
            }
        }

    }
</script>
