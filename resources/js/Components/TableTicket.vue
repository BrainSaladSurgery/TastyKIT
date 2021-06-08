<template>
  <table aria-describedby="info-popup" aria-label="open tickets" class="border-t w-full min-h-0 h-full flex flex-col">
    <thead class="flex w-full flex-col px-4">
        <tr class="border-b flex w-full justify-start">
        <th id="Mesa" class="font-semibold text-left py-3 px-1 w-1/12 truncate">
            Mesa
        </th>
        <th id="Comanda" class="font-semibold text-left py-3 px-1 w-1/12 truncate">
            Nº Ticket
        </th>
        <th id="Ticket" class="font-semibold text-left py-3 px-1 w-1/2 truncate">
            Comanda
        </th>
        <th id="Camarero" class="font-semibold text-left py-3 px-4 mr-8 w-1/12 truncate">
            Camarero
        </th>
        <th id="Precio" class="font-semibold text-left py-3 px-1 w-1/12 truncate">
            Precio
        </th>

        </tr>
    </thead>
    <tbody class="flex w-full flex-col  min-h-0 overflow-hidden px-4 ">
        <tr v-for="(ticket,index) in data" @key="index" role="row" class="border-b flex w-full justify-start hover:bg-blue-100 cursor-pointer">
        <td role="cell" headers="Mesa" class="text-left py-3 px-1 w-1/12 ">
            <span>{{ ticket.tableName }}</span>

            <!-- dropdown -->
            <!-- <span class="hidden group-hover:block ml-4 mt-10 w-screen max-w-lg absolute top-0 border shadow-lg p-6 bg-white rounded-md z-50 text-gray-900">
                <article>
                <header>
                    <div>
                    <span class="px-3 py-1 uppercase text-xs leading-none rounded-sm bg-red-600 text-white">Open</span>
                    <span class="ml-2 text-gray-700">Incident #12534</span>
                    <span class="ml-1">(Low)</span>
                    </div>
                </header>
                <section class="mt-5">
                    <h1 class="text-sm font-semibold mt-3">
                    Quo laudantium error corporis accusamus unde,
                    labore quidem non officiis.
                    </h1>
                    <p class="mt-3">
                    Hi Team,
                    <br />
                    Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Error accusantium molestias fugit commodi
                    doloremque. <br /><br />
                    Lorem ipsum dolor sit amet consectetur,
                    adipisicing elit? ...
                    </p>
                </section>
                <footer class="mt-4">
                    <p class="text-gray-600">Latest Comments</p>
                    <hr class="mt-1" />
                    <div class="flex mt-3">
                    <p class="font-semibold">Nico Braun</p>
                    <p class="ml-auto text-gray-700 text-sm">
                        Yesterday 10:33
                    </p>
                    </div>
                    <p class="mt-2">
                    Dolore odio error inventore sint et dolorum
                    asperiores exercitationem, quisquam esse.
                    </p>
                </footer>
                </article>
            </span> -->
            <!-- end dropdown -->

        </td>
        <td  headers="Comanda" class="text-left py-3 px-1 w-1/12">
            <!-- <div class="ml-auto relative group"> -->
            <span style="
                    padding: 2px 5px;
                    font-size: 0.7rem;
                    position: relative;
                    bottom: 2px;
                    " class="font-mono rounded-sm bg-red-600 text-white leading-none">O</span>
                <!-- </div> -->
            #{{ ticket.ticket }}
        </td>
        <td headers="Ticket" class="text-left py-3 px-1 w-1/2  ">
            <div class="relative group w-full truncate">
                {{ ticket.item }}

            <!-- dropdown -->
            <!-- <span class="hidden group-hover:block ml-4 mt-10 w-screen max-w-lg absolute top-0 border shadow-lg p-6 bg-white rounded-md z-50 text-gray-900">
                <article>
                <header>
                    <div>
                    <span class="px-3 py-1 uppercase text-xs leading-none rounded-sm bg-red-600 text-white">Open</span>
                    <span class="ml-2 text-gray-700">Incident #12534</span>
                    <span class="ml-1">(Low)</span>
                    </div>
                </header>
                <section class="mt-5">
                    <h1 class="text-sm font-semibold mt-3">
                    Quo laudantium error corporis accusamus unde,
                    labore quidem non officiis.
                    </h1>
                    <p class="mt-3">
                    Hi Team,
                    <br />
                    Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Error accusantium molestias fugit commodi
                    doloremque. <br /><br />
                    Lorem ipsum dolor sit amet consectetur,
                    adipisicing elit? ...
                    </p>
                </section>
                <footer class="mt-4">
                    <p class="text-gray-600">Latest Comments</p>
                    <hr class="mt-1" />
                    <div class="flex mt-3">
                    <p class="font-semibold">Nico Braun</p>
                    <p class="ml-auto text-gray-700 text-sm">
                        Yesterday 10:33
                    </p>
                    </div>
                    <p class="mt-2">
                    Dolore odio error inventore sint et dolorum
                    asperiores exercitationem, quisquam esse.
                    </p>
                </footer>
                </article>
            </span> -->
            <!-- end dropdown -->
            </div>
        </td>
        <td headers="Camarero" class="text-left py-3 px-1 mr-8 w-1/12 truncate">
            {{ ticket.userName }}
        </td>
        <td  headers="Precio" class="text-left py-3 px-1 w-1/12 truncate">
            {{ ticket.total }}
        </td>
        </tr>
        <!-- END ROW -->

    </tbody>
  </table>
</template>

<script>
    export default {

        data(){
            return{

            }
        },
        props:['data'],
        methods:{



        },

    }
</script>

