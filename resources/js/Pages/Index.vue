
<template>
    <div class="h-screen bg-gray-100" >
        <!--Añadimos barra de navegación  -->
        <nav-bar />
        <div class=" h-4/5 flex items-center w-full">
            <div class="w-full flex-wrap text-center items-center justify-center" >
                <h1 class="font-bold text-gray-400 text-3xl">
                    Welcome Tastyer
                </h1>
                <!-- Letras del logo -->
                <div class="flex justify-center" @click="audio()" style="width: 100%;">
                    <letras  width="50%"/>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
    import Letras from '@/Components/Letras'
    import NavBar from '@/Components/NavBar'
    import anime from 'animejs'
    import * as Tone from 'tone'
    export default {
        components: {
            Letras,
            NavBar
        },
        methods: {

            audio(){

                var player = new Tone.Player("@/../audio/pop.mp3").toMaster();
        
                player.autostart = true;
                setTimeout(() => {
                    player.autostart = false
                }, 1000);

            }
        }
        
    }
</script>



