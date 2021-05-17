<template>
  <app-layout>
    <template #navSide>
      <nav-side />
    </template>        
    <template #content>
      <nav-top />
      <!-- section body header -->
      <header aria-label="page caption" class="flex-none flex h-16 bg-gray-100 border-t px-4 items-center ">
          <h1 id="page-caption" class="font-semibold text-lg ">Products</h1>
      </header>

      <!-- main content -->
      <main class="flex-grow flex min-h-0 border-t">
        <!-- section Tickets-->
        <!-- <tickets-resume /> -->

        <!-- section content -->
        <section aria-label="main content" class="flex min-h-0 flex-col flex-auto border-l">
            <!-- content navigation -->
            <!-- <stats /> -->

            <!-- content caption -->
            <!-- <head-tab /> -->

            <div class="container my-12 mx-auto px-4 md:px-12">
                <div class="flex flex-wrap -mx-1 lg:-mx-4">

                    <!-- Column -->
                    <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                        <!-- Article -->
                        <article class="overflow-hidden rounded-lg shadow-lg">

                            <a href="#">
                                <img alt="Placeholder" class="block h-auto w-full" src="https://picsum.photos/600/400/?random">
                            </a>

                            <header class="flex items-center justify-around leading-tight p-2 md:p-4">
                                <h1 class="text-lg">
                                    <a class="no-underline hover:underline text-black" href="#">
                                        Patata
                                    </a>
                                </h1>
                                <div class="flex items-center justify-center">
                                  <label for="cantidad">Cantidad:</label>
                                  <input name="cantidad" class=" ml-3 block w-1/3 bg-grey-lighter text-grey-darker border-b-2 border-gray-300" type="text" placeholder="Cantidad">
                                </div>
                            </header>

                            <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                                <a class="flex items-center no-underline hover:underline text-black" href="#">
                                    <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
                                    <p class="ml-2 text-sm">
                                        Author Name
                                    </p>
                                </a>
                                <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                                    <span class="hidden">Like</span>
                                    <i class="fa fa-heart"></i>
                                </a>
                            </footer>

                        </article>
                        <!-- END Article -->

                    </div>
                    <!-- END Column -->

                    <!-- Column -->
                    <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                        <!-- Article -->
                        <article class="overflow-hidden rounded-lg shadow-lg">

                            <a href="#">
                                <img alt="Placeholder" class="block h-auto w-full" src="https://picsum.photos/600/400/?random">
                            </a>

                            <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                                <h1 class="text-lg">
                                    <a class="no-underline hover:underline text-black" href="#">
                                        Article Title
                                    </a>
                                </h1>
                                <p class="text-grey-darker text-sm">
                                    11/1/19
                                </p>
                            </header>

                            <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                                <a class="flex items-center no-underline hover:underline text-black" href="#">
                                    <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
                                    <p class="ml-2 text-sm">
                                        Author Name
                                    </p>
                                </a>
                                <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                                    <span class="hidden">Like</span>
                                    <i class="fa fa-heart"></i>
                                </a>
                            </footer>

                        </article>
                        <!-- END Article -->

                    </div>
                    <!-- END Column -->

                    <!-- Column -->
                    <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                        <!-- Article -->
                        <article class="overflow-hidden rounded-lg shadow-lg">

                            <a href="#">
                                <img alt="Placeholder" class="block h-auto w-full" src="https://picsum.photos/600/400/?random">
                            </a>

                            <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                                <h1 class="text-lg">
                                    <a class="no-underline hover:underline text-black" href="#">
                                        Article Title
                                    </a>
                                </h1>
                                <p class="text-grey-darker text-sm">
                                    11/1/19
                                </p>
                            </header>

                            <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                                <a class="flex items-center no-underline hover:underline text-black" href="#">
                                    <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
                                    <p class="ml-2 text-sm">
                                        Author Name
                                    </p>
                                </a>
                                <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                                    <span class="hidden">Like</span>
                                    <i class="fa fa-heart"></i>
                                </a>
                            </footer>

                        </article>
                        <!-- END Article -->

                    </div>
                    <!-- END Column -->

                    <!-- Column -->
                    <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                        <!-- Article -->
                        <article class="overflow-hidden rounded-lg shadow-lg">

                            <a href="#">
                                <img alt="Placeholder" class="block h-auto w-full" src="https://picsum.photos/600/400/?random">
                            </a>

                            <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                                <h1 class="text-lg">
                                    <a class="no-underline hover:underline text-black" href="#">
                                        Article Title
                                    </a>
                                </h1>
                                <p class="text-grey-darker text-sm">
                                    11/1/19
                                </p>
                            </header>

                            <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                                <a class="flex items-center no-underline hover:underline text-black" href="#">
                                    <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
                                    <p class="ml-2 text-sm">
                                        Author Name
                                    </p>
                                </a>
                                <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                                    <span class="hidden">Like</span>
                                    <i class="fa fa-heart"></i>
                                </a>
                            </footer>

                        </article>
                        <!-- END Article -->

                    </div>
                    <!-- END Column -->

                    <!-- Column -->
                    <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                        <!-- Article -->
                        <article class="overflow-hidden rounded-lg shadow-lg">

                            <a href="#">
                                <img alt="Placeholder" class="block h-auto w-full" src="https://picsum.photos/600/400/?random">
                            </a>

                            <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                                <h1 class="text-lg">
                                    <a class="no-underline hover:underline text-black" href="#">
                                        Article Title
                                    </a>
                                </h1>
                                <p class="text-grey-darker text-sm">
                                    11/1/19
                                </p>
                            </header>

                            <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                                <a class="flex items-center no-underline hover:underline text-black" href="#">
                                    <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
                                    <p class="ml-2 text-sm">
                                        Author Name
                                    </p>
                                </a>
                                <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                                    <span class="hidden">Like</span>
                                    <i class="fa fa-heart"></i>
                                </a>
                            </footer>

                        </article>
                        <!-- END Article -->

                    </div>
                    <!-- END Column -->

                    <!-- Column -->
                    <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                        <!-- Article -->
                        <article class="overflow-hidden rounded-lg shadow-lg">

                            <a href="#">
                                <img alt="Placeholder" class="block h-auto w-full" src="https://picsum.photos/600/400/?random">
                            </a>

                            <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                                <h1 class="text-lg">
                                    <a class="no-underline hover:underline text-black" href="#">
                                        Article Title
                                    </a>
                                </h1>
                                <p class="text-grey-darker text-sm">
                                    11/1/19
                                </p>
                            </header>

                            <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                                <a class="flex items-center no-underline hover:underline text-black" href="#">
                                    <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
                                    <p class="ml-2 text-sm">
                                        Author Name
                                    </p>
                                </a>
                                <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                                    <span class="hidden">Like</span>
                                    <i class="fa fa-heart"></i>
                                </a>
                            </footer>

                        </article>
                        <!-- END Article -->

                    </div>
                    <!-- END Column -->

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
  import Stats from '@/Components/Stats'
  import TicketsResume from '@/Components/TicketsResume'
  import HeadTab from '@/Components/HeadTab'
  import TableYelx from '@/Components/TableYelx'

  export default {
      components: {
          AppLayout,
          NavTop,
          NavSide,
          TicketsResume,
          Stats,
          HeadTab,
          TableYelx
      },

  }
</script>

