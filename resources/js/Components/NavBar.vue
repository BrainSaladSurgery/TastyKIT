<template>
    <nav  class=" mt-0  shadow-xl items-center flex justify-between p-5 bg-orange" style="height:60px" >
        <ul class="flex">
            <li class="mr-6 ml-3 ">
                <inertia-link href="/" class="fontS text-white font-bold hover:text-gray-600" >
                    <!-- <letras :width="'50%'" /> -->
                    <!-- <svg class="fill-current h-6 w-6  fontS" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg> -->
                </inertia-link>
            </li>
            <li class="mr-6 ml-3 ">
                <inertia-link   class="fontS text-white font-bold hover:text-gray-600 focus:text-gray-300" href="/">Inicio</inertia-link>
            </li>
            <li class="mr-6">
                <inertia-link class="fontS text-white font-bold hover:text-gray-600 focus:text-gray-300" :href="route('images')">Imagenes/Video</inertia-link>
            </li>
            <li class="mr-6">
                <inertia-link class="fontS text-white font-bold hover:text-gray-600 focus:text-gray-300" :href="route('reservations')">Reservas</inertia-link>
            </li>
            <li class="mr-6">
                <a class="fontS text-white font-bold hover:text-gray-600 focus:text-gray-300" href="#">Contact</a>
            </li>
        </ul>
        <div>
            <inertia-link href="/register"  class=" fontS hover:text-gray-600 focus:text-gray-300 text-white font-bold py-2 px-4">
                Registro
            </inertia-link>
            <inertia-link href="/login"  class="fontS bg-gray-100 hover:bg-gray-200 focus:ring-2 hover:border-gray-500 text-gray-600 font-bold py-2 px-4 border border-gray-400 rounded-full shadow-lg">
                Login
            </inertia-link>

        </div>
    </nav>
</template>

<script>

    import Letras from '@/Components/Letras'
    export default {
        components: {
            Letras
        },

    }
</script>

<style>
    .fontS{
        font-size: 17px !important;
    }
</style>

