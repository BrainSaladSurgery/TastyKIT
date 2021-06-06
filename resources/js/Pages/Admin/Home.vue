<template>
  <app-layout>
    <template #navSide>
      <nav-side />
    </template>
    <template #content>

      <header-nav :pag="'Inicio'" :classe="'w-full flex-none flex h-16 bg-gray-100 border-t px-4 items-center justify-between'"/>

      <!-- main content -->
      <main class="flex-grow flex min-h-0 border-t">
        <!-- section Tickets-->
        <tickets-resume />

        <!-- section content -->
        <section aria-label="main content" class="flex min-h-0 flex-col flex-auto border-l">
            <!-- content navigation -->
            <stats />

            <!-- content caption -->
            <head-tab />

            <table-yelx />

            <!-- content footer, currently hidden -->
            <!-- <footer aria-label="content footer" class="flex p-3 bg-white border-t hidden">
              footer
            </footer> -->
        </section>
      </main>
    </template>
  </app-layout>
</template>

<script>

    import AppLayout from '@/Layouts/AppLayout'
    import NavSide from '@/Components/NavSide'
    import Stats from '@/Components/Stats'
    import TicketsResume from '@/Components/TicketsResume'
    import HeadTab from '@/Components/HeadTab'
    import HeaderNav from '@/Components/HeaderNav'
    import TableYelx from '@/Components/TableYelx'

    export default {
        components: {
            AppLayout,
            NavSide,
            TicketsResume,
            Stats,
            HeadTab,
            TableYelx,
            HeaderNav
        },

    }
</script>

