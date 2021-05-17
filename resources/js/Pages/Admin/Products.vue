<template>
  <app-layout>
    <template #navSide>
      <nav-side />
    </template>
    <template #content>
    <header aria-label="page caption" class="flex-none flex h-16 bg-gray-100 border-t px-4 items-center ">
        <h1 id="page-caption" class="font-semibold text-lg ">Products</h1>
    </header>

      <nav-top />

      <main class="flex-grow flex min-h-0 border-t">

        <section aria-label="main content" class="flex  flex-col flex-auto border-l">

            <div id="grid" >
                    <!-- Column -->
                    <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3 ">

                        <!-- Article -->
                       <card-product />
                <!-- END Article -->
                    </div>


                                        <!-- Column -->
                    <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                        <!-- Article -->
                        <article class="overflow-hidden rounded-lg shadow-lg w-80 ">

                            <a href="#">
                                <img alt="Placeholder" class="block h-auto w-full" src="https://picsum.photos/600/400/?random">
                            </a>
                            <div class="flex-wrap mr-3">
                                <header class="flex items-center justify-center p-2 ml-4 ">
                                    <div class="text-gray-600 font-bold text-3x1">Patata</div>
                                    <div class="flex items-center justify-end">
                                        <label for="cantidad">Cantidad:</label>
                                        <input name="cantidad" class=" ml-5 mb-5 block w-2/5 bg-grey-lighter text-grey-darker border-t-0 border-r-0 border-l-0 border-b-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-500" type="text" >
                                    </div>
                                </header>

                                <footer class="flex items-center justify-center w-full  p-2 ">
                                    <button class="border-2 border-transparent bg-red-500 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-red-500 hover:bg-transparent hover:text-red-500">
                                        Borrar
                                    </button>
                                    <button class="border-2 border-transparent bg-yellow-500 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-yellow-500 hover:bg-transparent hover:text-yellow-500">
                                        <svg height="48" viewBox="0 0 48 48" width="48" class="w-8 h-8 fill-current hover:text-gray-300" xmlns="http://www.w3.org/2000/svg"><path d="M14 36c-2.21 0-3.98 1.79-3.98 4s1.77 4 3.98 4 4-1.79 4-4-1.79-4-4-4zM2 4v4h4l7.19 15.17-2.7 4.9c-.31.58-.49 1.23-.49 1.93 0 2.21 1.79 4 4 4h24v-4H14.85c-.28 0-.5-.22-.5-.5 0-.09.02-.17.06-.24L16.2 26h14.9c1.5 0 2.81-.83 3.5-2.06l7.15-12.98c.16-.28.25-.61.25-.96 0-1.11-.9-2-2-2H10.43l-1.9-4H2zm32 32c-2.21 0-3.98 1.79-3.98 4s1.77 4 3.98 4 4-1.79 4-4-1.79-4-4-4z"/><path d="M0 0h48v48H0z" fill="none"/></svg>
                                    </button>
                                    <button class="border-2 border-transparent bg-green-400 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-green-500 hover:bg-transparent hover:text-green-500">
                                        Añadir
                                    </button>
                                </footer>
                            </div>


                        </article>
                <!-- END Article -->
                    </div>


                                        <!-- Column -->
                    <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                        <!-- Article -->
                        <article class="overflow-hidden rounded-lg shadow-lg w-80 ">

                            <a href="#">
                                <img alt="Placeholder" class="block h-auto w-full" src="https://picsum.photos/600/400/?random">
                            </a>
                            <div class="flex-wrap mr-3">
                                <header class="flex items-center justify-center p-2 ml-4 ">
                                    <div class="text-gray-600 font-bold text-3x1">Patata</div>
                                    <div class="flex items-center justify-end">
                                        <label for="cantidad">Cantidad:</label>
                                        <input name="cantidad" class=" ml-5 mb-5 block w-2/5 bg-grey-lighter text-grey-darker border-t-0 border-r-0 border-l-0 border-b-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-500" type="text" >
                                    </div>
                                </header>

                                <footer class="flex items-center justify-center w-full  p-2 ">
                                    <button class="border-2 border-transparent bg-red-500 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-red-500 hover:bg-transparent hover:text-red-500">
                                        Borrar
                                    </button>
                                    <button class="border-2 border-transparent bg-yellow-500 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-yellow-500 hover:bg-transparent hover:text-yellow-500">
                                        <svg height="48" viewBox="0 0 48 48" width="48" class="w-8 h-8 fill-current hover:text-gray-300" xmlns="http://www.w3.org/2000/svg"><path d="M14 36c-2.21 0-3.98 1.79-3.98 4s1.77 4 3.98 4 4-1.79 4-4-1.79-4-4-4zM2 4v4h4l7.19 15.17-2.7 4.9c-.31.58-.49 1.23-.49 1.93 0 2.21 1.79 4 4 4h24v-4H14.85c-.28 0-.5-.22-.5-.5 0-.09.02-.17.06-.24L16.2 26h14.9c1.5 0 2.81-.83 3.5-2.06l7.15-12.98c.16-.28.25-.61.25-.96 0-1.11-.9-2-2-2H10.43l-1.9-4H2zm32 32c-2.21 0-3.98 1.79-3.98 4s1.77 4 3.98 4 4-1.79 4-4-1.79-4-4-4z"/><path d="M0 0h48v48H0z" fill="none"/></svg>
                                    </button>
                                    <button class="border-2 border-transparent bg-green-400 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-green-500 hover:bg-transparent hover:text-green-500">
                                        Añadir
                                    </button>
                                </footer>
                            </div>


                        </article>
                <!-- END Article -->
                    </div>


                                        <!-- Column -->
                    <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                        <!-- Article -->
                        <article class="overflow-hidden rounded-lg shadow-lg w-80 ">

                            <a href="#">
                                <img alt="Placeholder" class="block h-auto w-full" src="https://picsum.photos/600/400/?random">
                            </a>
                            <div class="flex-wrap mr-3">
                                <header class="flex items-center justify-center p-2 ml-4 ">
                                    <div class="text-gray-600 font-bold text-3x1">Patata</div>
                                    <div class="flex items-center justify-end">
                                        <label for="cantidad">Cantidad:</label>
                                        <input name="cantidad" class=" ml-5 mb-5 block w-2/5 bg-grey-lighter text-grey-darker border-t-0 border-r-0 border-l-0 border-b-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-500" type="text" >
                                    </div>
                                </header>

                                <footer class="flex items-center justify-center w-full  p-2 ">
                                    <button class="border-2 border-transparent bg-red-500 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-red-500 hover:bg-transparent hover:text-red-500">
                                        Borrar
                                    </button>
                                    <button class="border-2 border-transparent bg-yellow-500 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-yellow-500 hover:bg-transparent hover:text-yellow-500">
                                        <svg height="48" viewBox="0 0 48 48" width="48" class="w-8 h-8 fill-current hover:text-gray-300" xmlns="http://www.w3.org/2000/svg"><path d="M14 36c-2.21 0-3.98 1.79-3.98 4s1.77 4 3.98 4 4-1.79 4-4-1.79-4-4-4zM2 4v4h4l7.19 15.17-2.7 4.9c-.31.58-.49 1.23-.49 1.93 0 2.21 1.79 4 4 4h24v-4H14.85c-.28 0-.5-.22-.5-.5 0-.09.02-.17.06-.24L16.2 26h14.9c1.5 0 2.81-.83 3.5-2.06l7.15-12.98c.16-.28.25-.61.25-.96 0-1.11-.9-2-2-2H10.43l-1.9-4H2zm32 32c-2.21 0-3.98 1.79-3.98 4s1.77 4 3.98 4 4-1.79 4-4-1.79-4-4-4z"/><path d="M0 0h48v48H0z" fill="none"/></svg>
                                    </button>
                                    <button class="border-2 border-transparent bg-green-400 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-green-500 hover:bg-transparent hover:text-green-500">
                                        Añadir
                                    </button>
                                </footer>
                            </div>


                        </article>
                <!-- END Article -->
                    </div>


                                        <!-- Column -->
                    <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                        <!-- Article -->
                        <article class="overflow-hidden rounded-lg shadow-lg w-80 ">

                            <a href="#">
                                <img alt="Placeholder" class="block h-auto w-full" src="https://picsum.photos/600/400/?random">
                            </a>
                            <div class="flex-wrap mr-3">
                                <header class="flex items-center justify-center p-2 ml-4 ">
                                    <div class="text-gray-600 font-bold text-3x1">Patata</div>
                                    <div class="flex items-center justify-end">
                                        <label for="cantidad">Cantidad:</label>
                                        <input name="cantidad" class=" ml-5 mb-5 block w-2/5 bg-grey-lighter text-grey-darker border-t-0 border-r-0 border-l-0 border-b-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-500" type="text" >
                                    </div>
                                </header>

                                <footer class="flex items-center justify-center w-full  p-2 ">
                                    <button class="border-2 border-transparent bg-red-500 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-red-500 hover:bg-transparent hover:text-red-500">
                                        Borrar
                                    </button>
                                    <button class="border-2 border-transparent bg-yellow-500 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-yellow-500 hover:bg-transparent hover:text-yellow-500">
                                        <svg height="48" viewBox="0 0 48 48" width="48" class="w-8 h-8 fill-current hover:text-gray-300" xmlns="http://www.w3.org/2000/svg"><path d="M14 36c-2.21 0-3.98 1.79-3.98 4s1.77 4 3.98 4 4-1.79 4-4-1.79-4-4-4zM2 4v4h4l7.19 15.17-2.7 4.9c-.31.58-.49 1.23-.49 1.93 0 2.21 1.79 4 4 4h24v-4H14.85c-.28 0-.5-.22-.5-.5 0-.09.02-.17.06-.24L16.2 26h14.9c1.5 0 2.81-.83 3.5-2.06l7.15-12.98c.16-.28.25-.61.25-.96 0-1.11-.9-2-2-2H10.43l-1.9-4H2zm32 32c-2.21 0-3.98 1.79-3.98 4s1.77 4 3.98 4 4-1.79 4-4-1.79-4-4-4z"/><path d="M0 0h48v48H0z" fill="none"/></svg>
                                    </button>
                                    <button class="border-2 border-transparent bg-green-400 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-green-500 hover:bg-transparent hover:text-green-500">
                                        Añadir
                                    </button>
                                </footer>
                            </div>


                        </article>
                <!-- END Article -->
                    </div>


                                        <!-- Column -->
                    <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                        <!-- Article -->
                        <article class="overflow-hidden rounded-lg shadow-lg w-80 ">

                            <a href="#">
                                <img alt="Placeholder" class="block h-auto w-full" src="https://picsum.photos/600/400/?random">
                            </a>
                            <div class="flex-wrap mr-3">
                                <header class="flex items-center justify-center p-2 ml-4 ">
                                    <p class="text-gray-600">Patata</p>
                                    <div class="flex items-center justify-end">
                                        <label for="cantidad">Cantidad:</label>
                                        <input name="cantidad" class=" ml-5 mb-5 block w-2/5 bg-grey-lighter text-grey-darker border-t-0 border-r-0 border-l-0 border-b-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-500" type="text" >
                                    </div>
                                </header>

                                <footer class="flex items-center justify-center w-full  p-2 ">
                                    <button class="border-2 border-transparent bg-red-500 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-red-500 hover:bg-transparent hover:text-red-500">
                                        Borrar
                                    </button>
                                    <button class="border-2 border-transparent bg-yellow-500 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-yellow-500 hover:bg-transparent hover:text-yellow-500">
                                        <svg height="48" viewBox="0 0 48 48" width="48" class="w-8 h-8 fill-current hover:text-gray-300" xmlns="http://www.w3.org/2000/svg"><path d="M14 36c-2.21 0-3.98 1.79-3.98 4s1.77 4 3.98 4 4-1.79 4-4-1.79-4-4-4zM2 4v4h4l7.19 15.17-2.7 4.9c-.31.58-.49 1.23-.49 1.93 0 2.21 1.79 4 4 4h24v-4H14.85c-.28 0-.5-.22-.5-.5 0-.09.02-.17.06-.24L16.2 26h14.9c1.5 0 2.81-.83 3.5-2.06l7.15-12.98c.16-.28.25-.61.25-.96 0-1.11-.9-2-2-2H10.43l-1.9-4H2zm32 32c-2.21 0-3.98 1.79-3.98 4s1.77 4 3.98 4 4-1.79 4-4-1.79-4-4-4z"/><path d="M0 0h48v48H0z" fill="none"/></svg>
                                    </button>
                                    <button class="border-2 border-transparent bg-green-400 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-green-500 hover:bg-transparent hover:text-green-500">
                                        Añadir
                                    </button>
                                </footer>
                            </div>


                        </article>
                <!-- END Article -->
                    </div>

                                        <!-- Column -->
                    <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                        <!-- Article -->
                        <article class="overflow-hidden rounded-lg shadow-lg w-80 ">

                            <a href="#">
                                <img alt="Placeholder" class="block h-auto w-full" src="https://picsum.photos/600/400/?random">
                            </a>
                            <div class="flex-wrap mr-3">
                                <header class="flex items-center justify-center p-2 ml-4 ">
                                    <div class="text-gray-600 font-bold text-3x1">Patata</div>
                                    <div class="flex items-center justify-end">
                                        <label for="cantidad">Cantidad:</label>
                                        <input name="cantidad" class=" ml-5 mb-5 block w-2/5 bg-grey-lighter text-grey-darker border-t-0 border-r-0 border-l-0 border-b-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-500" type="text" >
                                    </div>
                                </header>

                                <footer class="flex items-center justify-center w-full  p-2 ">
                                    <button class="border-2 border-transparent bg-red-500 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-red-500 hover:bg-transparent hover:text-red-500">
                                        Borrar
                                    </button>
                                    <button class="border-2 border-transparent bg-yellow-500 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-yellow-500 hover:bg-transparent hover:text-yellow-500">
                                        <svg height="48" viewBox="0 0 48 48" width="48" class="w-8 h-8 fill-current hover:text-gray-300" xmlns="http://www.w3.org/2000/svg"><path d="M14 36c-2.21 0-3.98 1.79-3.98 4s1.77 4 3.98 4 4-1.79 4-4-1.79-4-4-4zM2 4v4h4l7.19 15.17-2.7 4.9c-.31.58-.49 1.23-.49 1.93 0 2.21 1.79 4 4 4h24v-4H14.85c-.28 0-.5-.22-.5-.5 0-.09.02-.17.06-.24L16.2 26h14.9c1.5 0 2.81-.83 3.5-2.06l7.15-12.98c.16-.28.25-.61.25-.96 0-1.11-.9-2-2-2H10.43l-1.9-4H2zm32 32c-2.21 0-3.98 1.79-3.98 4s1.77 4 3.98 4 4-1.79 4-4-1.79-4-4-4z"/><path d="M0 0h48v48H0z" fill="none"/></svg>
                                    </button>
                                    <button class="border-2 border-transparent bg-green-400 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-green-500 hover:bg-transparent hover:text-green-500">
                                        Añadir
                                    </button>
                                </footer>
                            </div>


                        </article>
                <!-- END Article -->
                    </div>


                </div>




            <!-- content footer, currently hidden -->
            <footer aria-label="content footer" class="flex p-3 bg-white border-t hidden">
              footer
            </footer>
        </section>
      </main>
    </template>
  </app-layout>
</template>

<script>
  import AppLayout from '@/Layouts/AppLayout'
  import NavTop from '@/Components/NavTop'
  import NavSide from '@/Components/NavSide'
  import CardProduct from '@/Components/CardProduct'


  export default {
      components: {
          AppLayout,
          NavTop,
          NavSide,
          CardProduct

      },

  }
</script>

<style>
    #grid{
        display: grid;
        grid-gap: 20px;
        grid-template-columns: repeat(auto-fill, 300px);
        justify-content: center

    }

    #grid>* {
        height: 350px;
    }
</style>

