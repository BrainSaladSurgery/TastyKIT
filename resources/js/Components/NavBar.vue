<template>
    <nav  class=" mt-0  shadow-xl items-center flex justify-between p-5 bg-orange" style="height:60px" >
        <ul class="flex items-center">
            <li @click="audio()" class="mr-6 ml-3 ">
                <inertia-link href="/" class="fontS text-white font-bold hover:text-gray-600" >
                    <hat class="w-12 rotate-45 h-16" />
                </inertia-link>
            </li>
            <li class="mr-6 ml-3 ">
                <inertia-link   class="fontS text-white font-bold hover:text-gray-600 focus:text-gray-300" href="/">Inicio</inertia-link>
            </li>
            <li class="mr-6">
                <inertia-link class="fontS text-white font-bold hover:text-gray-600 focus:text-gray-300" :href="route('images')">Conocenos</inertia-link>
            </li>
            <li class="mr-6">
                <inertia-link class="fontS text-white font-bold hover:text-gray-600 focus:text-gray-300" :href="route('reservations')">Reservas</inertia-link>
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
    import Hat from '@/Components/Hat'
    import * as Tone from 'tone';
    export default {
        components: {
            Letras,
            Hat
        },
        data(){
            return{
                synth: new Tone.Synth()
            }
        },
        methods: {
            
            audio(){

                var player = new Tone.Player("@/../audio/pop.mp3").toMaster();
        
                player.autostart = true;
                setTimeout(() => {
                    player.autostart = false
                }, 1000);

            }
        },

    }
</script>

<style>
    .fontS{
        font-size: 17px !important;
    }
</style>

