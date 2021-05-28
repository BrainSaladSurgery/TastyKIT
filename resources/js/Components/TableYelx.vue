<template>
  <table aria-describedby="info-popup" aria-label="open tickets" class="border-t w-full min-h-0 h-full flex flex-col">
    <thead class="flex w-full flex-col px-4">
        <tr class="border-b flex">
        <!-- <th class="font-semibold text-left py-3 pl-3 pr-1 w-24">
            <input type="checkbox" name="" id="" />
        </th> -->
        <th id="Mesa" class="font-semibold text-left py-3 px-1 w-24 truncate">
            Mesa
        </th>
        <th id="Comanda" class="font-semibold text-left py-3 px-1 w-24 truncate">
            Comanda
        </th>
        <th id="Ticket" class="font-semibold text-left py-3 px-1 w-60 truncate">
            Ticket
        </th>
        <th id="Camarero" class="font-semibold text-left py-3 px-1 w-32 truncate">
            Camarero
        </th>
        <th id="Precio" class="font-semibold text-left py-3 px-1 w-32 truncate">
            Precio
        </th>

        </tr>
    </thead>
    <tbody class="flex w-full flex-col flex-1 min-h-0 overflow-hidden px-4">
        <!-- low -->
        <!-- <tr class="border-b flex">
        <th class="bg-gray-100 text-left px-3 py-2 flex-1" colspan="7">
            <h2 class="text-sm">
            <span class="font-normal mr-1">Priority</span><span>Low</span>
            </h2>
        </th>
        </tr> -->
        <tr role="row" class="hover:bg-blue-100 border-b flex cursor-pointer">
        <td role="cell" headers="Mesa" class="py-3 pl-3 pr-1 w-24 flex items-start">
            <span>21</span>

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
        <td  headers="Comanda" class="py-3 px-1 w-24">
            <!-- <div class="ml-auto relative group"> -->
            <span style="
                    padding: 2px 5px;
                    font-size: 0.7rem;
                    position: relative;
                    bottom: 2px;
                    " class="font-mono rounded-sm bg-red-600 text-white leading-none">O</span>
                <!-- </div> -->
            #12534
        </td>
        <td headers="Ticket" class="py-3 px-1 w-60 max-w-xs xl:max-w-lg">
            <div class="relative group w-full truncate">
                Quo laudantium error corporis accusamus unde, labore
                quidem non officiis.

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
        <td headers="Camarero" class="py-3 px-1 w-32 truncate">
            Marla Darsuz
        </td>
        <td  headers="Precio" class="py-3 px-1 w-32 truncate">
            Tuesday 09:56
        </td>
        </tr>
        <!-- END ROW -->

        <!-- high -->
        <tr class="border-b flex hidden">
        <th class="bg-gray-100 text-left px-3 py-2 flex-1" colspan="7">
            <h2 class="text-sm">
            <span class="font-normal mr-1">Priority</span>
            <span>High</span>
            </h2>
        </th>
        </tr>
    </tbody>
  </table>
</template>

<script>
  export default {

  }
</script>

<style lang="scss" scoped></style>
