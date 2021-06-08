<template>
    <app-layout>
        <template #navSide>
            <nav-side />
        </template>
        <template #content>
            <header-nav :pag="'Facturas'" :classe="'w-full flex-none flex h-16 bg-gray-100 border-t px-4 items-center justify-between'"/>
            <!-- main content -->
            <main class="flex-grow flex min-h-0 border-t">
            <!-- section content -->
                <section aria-label="main content" class="flex min-h-0 flex-col flex-auto border-l">
                    <stats />
                    <head-tab />
                    <table-ticket  :data="ticket" @updateTicket="TicketId = $event" @updateList="upda = $event" @resetID="TicketId = $event"/>
                </section>
            </main>
        </template>
    </app-layout>
</template>

<script>

    import AppLayout from '@/Layouts/AppLayout'
    import NavSide from '@/Components/NavSide'
    import Stats from '@/Components/Stats'
    import HeadTab from '@/Components/HeadTab'
    import HeaderNav from '@/Components/HeaderNav'
    import TableTicket from '@/Components/TableTicket'

    export default {
        components: {
            AppLayout,
            NavSide,
            Stats,
            HeadTab,
            TableTicket,
            HeaderNav
        },
        data(){
            return {
                ticket: []
            }
        },
        methods: {

            async getInvoices(){

                await axios.get('/invoices-list')
                    .then((response) =>{

                        this.ticket = response.data

                    }).catch(err => {
                        console.log(err)
                    })
            }
        },

        mounted(){

            this.getInvoices()
        }

    }
</script>
