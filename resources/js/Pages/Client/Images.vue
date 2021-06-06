<template>
    <div ref="container" class="h-screen bg-gray-100 w-full" >
        <nav-bar />
        <div class="w-full h-4/5 flex justify-center items-center">
            <video id="medio" width="600" class="hidden" ref="video" :src="getVideo()"></video>
            <div class="w-1/2 flex  justify-center items-center ">
                <div class="contenedor  rounded-lg">
                    <canvas id="lienzo" ref="lienzo" width="592" height="394.5" class="rounded-lg" ></canvas>
                        <div class="controls" >
                            <div class="progress pointer">
                                <div ref="bar" class="bar">
                                </div>
                            </div>
                            <div class="left">
                                <i  @click="presionar()" class="icons pointer h-6 w-6 mb-1">
                                    <svg v-if="pause == false " xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 30 42">
                                        <path class="a" d="M4.8.61l24,18a3,3,0,0,1,0,4.8l-24,18A3,3,0,0,1,0,39V3A3,3,0,0,1,4.8.61Z"/>
                                    </svg>

                                    <svg v-else xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 28 42">
                                        <g>
                                            <rect class="a" width="10" height="42" rx="3" ry="3"/>
                                            <rect class="a" x="18" width="10" height="42" rx="3" ry="3"/>
                                        </g>
                                    </svg>
                                </i>
                                <i @click="stopped()" class="icons pointer h-6 w-6 mb-1 ">
                                    <svg class="w-6 h-6" viewBox="0 0 12 12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Icons"  class="a">
                                            <g id="Rounded" transform="translate(-106.000000, -1044.000000)">
                                                <g id="AV" transform="translate(100.000000, 852.000000)">
                                                    <g id="-Round-/-AV-/-stop" transform="translate(0.000000, 186.000000)">
                                                        <g>
                                                            <rect  class="a" id="Rectangle-Copy-74" x="0" y="0" width="12" height="12"></rect>
                                                            <path  class="a" d="M8,6 L16,6 C17.1,6 18,6.9 18,8 L18,16 C18,17.1 17.1,18 16,18 L8,18 C6.9,18 6,17.1 6,16 L6,8 C6,6.9 6.9,6 8,6 Z" ></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </i>
                                <strong  class="ml-3" id="tiempo">{{ curTime }}</strong>/ <strong id="timeFin">{{ timeFin }}</strong>
                            </div>

                            <div class="rigth">
                                <i @click="mute()" class="icons mute h-6 w-6 mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.707.707L4.586 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.586l3.707-3.707a1 1 0 011.09-.217zM12.293 7.293a1 1 0 011.414 0L15 8.586l1.293-1.293a1 1 0 111.414 1.414L16.414 10l1.293 1.293a1 1 0 01-1.414 1.414L15 11.414l-1.293 1.293a1 1 0 01-1.414-1.414L13.586 10l-1.293-1.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </i>
                                <input v-model="slider"  @change="updateVolumen()"  class="slider pointer" type="range" max="1" min="0" step= "0.01">
                                <i ref="volumen" @click="upVolume()" class="icons pointer h-6 w-6" id ="volumen">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.707.707L4.586 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.586l3.707-3.707a1 1 0 011.09-.217zM14.657 2.929a1 1 0 011.414 0A9.972 9.972 0 0119 10a9.972 9.972 0 01-2.929 7.071 1 1 0 01-1.414-1.414A7.971 7.971 0 0017 10c0-2.21-.894-4.208-2.343-5.657a1 1 0 010-1.414zm-2.829 2.828a1 1 0 011.415 0A5.983 5.983 0 0115 10a5.984 5.984 0 01-1.757 4.243 1 1 0 01-1.415-1.415A3.984 3.984 0 0013 10a3.983 3.983 0 00-1.172-2.828 1 1 0 010-1.415z" clip-rule="evenodd" />
                                    </svg>
                                </i>
                            </div>
                        </div>
                </div>
            </div>
            <div class="w-1/2"></div>

        <div class="texto w-full flex flex-row">
                <div class="w-1/2"></div>
                <div class="w-1/2 flex flex-col items-center">
                    <p class="w-full text-center font-bold text-gray-500 py-6 text-3xl">Tastyer</p>

                    <p class="w-9/12 text-justify  text-gray-400">¿Aún no has probado la mejor comida de la ciudad? ¿Tienes hambre pero no tienes nada en la nevera y mucho menos ganas de cocinar? Este es tu sitio ven aquí y conviertete en un Tayster y difruta de los mejores sabores</p>
                    <p class="w-9/12 text-justify text-gray-400 py-5">Vas a probar la mejor comida de la zona, difrutar del mejor ambiente y en la mejor compañía, ven a visitarnos y descubre todo lo que tenemos para ti</p>
                    <p  class="w-9/12 text-justify text-gray-400 py-5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                </div>

            </div>
        </div>


    </div>
</template>

<script>
    import Letras from '@/Components/Letras'
    import NavBar from '@/Components/NavBar'

    export default {
        components: {
            Letras,
            NavBar,

        },

        data(){

            return{

                curTime: '00:00',
                timeFin: '00:00',
                pause: false,
                slider: 0.5
            }
        },

        methods: {

            getVideo(){
                return  '/video/video.mp4'
            },

            presionar(){
                if(!this.$refs.video.paused && !this.$refs.video.ended){
                    this.$refs.video.pause()
                    this.pause = true
                    // Dejamos de ejecutar la funcion procesarcuadros cada 0.033 segundos
                    window.clearInterval(bucle)
                }
                else{
                    this.$refs.video.play()
                    this.pause = false
                    //Activamos el intervalo de ejecución
                    var bucle=setInterval(this.procesarCuadros, 33)
                    var time =setInterval(this.time, 33)
                }
            },

            procesarCuadros(){

                var lienzo = this.$refs.lienzo
                var ctx = lienzo.getContext('2d');
                ctx.drawImage(this.$refs.video,0,0,600,344.5);

                var info= ctx.getImageData(0,0,600,344.5);
                var pos;
                //var gris;
                    for(var x = 0; x <= 600; x++){
                        for(var y = 0; y <= 344.5; y++){
                            pos = (info.width * 4 * y) + (x * 4);
                            // La función "parseInt() pasará el valor intrucido como parámetro string y devuelve un int
                            var gris = parseInt(info.data[pos] * 0.2989 + info.data[pos+1] * 0.5870 + info.data[pos+2] * 0.1140);
                            info.data[pos] = gris;
                            info.data[pos+1] = gris;
                            info.data[pos+2] = gris;

                            gris = (info.data[pos] + info.data[pos+1] + info.data[pos+2] )/ 3 ;
                            info.data[pos] += 100;
                            info.data[pos+1] += 100;
                            info.data[pos+2] += 100;




                        }
                    }
                    ctx.putImageData(info,0,0);
            },

            //STOP VIDEO
            stopped(){

                this.$refs.video.pause();
                this.$refs.video.currentTime = 0;
            },

            time(){
                 // Duración Total
                var duracion = this.$refs.video.duration;
                let minutos = parseInt( duracion / 60, 10);
                let segundos = parseInt( duracion % 60 );

                if(minutos < 10){
                    minutos  = "0" + minutos;
                }

                if(segundos < 10){
                    segundos = "0" + segundos;
                }

                this.timeFin = minutos + ":" + segundos;

                var current = this.$refs.video.currentTime;

                // Tiempo que transcurre
                let minutosCur = parseInt( current / 60, 10);
                let segundosCur = parseInt( current % 60 );

                if(minutosCur < 10){
                    minutosCur  = "0" + minutosCur;
                }

                if(segundosCur < 10){
                    segundosCur = "0" + segundosCur;
                }

                this.curTime =  minutosCur + ":" + segundosCur;
                this.barProgress()
            },


            //UP VOLUME
            updateVolumen(){

                this.$refs.video.volume = this.slider;
            },

            upVolume(){

                this.$refs.video.volume = 0.1 + this.slider
                this.slider = this.$refs.video.volume

            },

            mute(){

                this.$refs.video.volume = 0
                this.slider = 0

            },


            barProgress(){
                let curTime = this.$refs.video.currentTime;
                let durationTotal= this.$refs.video.duration;

                let porcentaje = (curTime * 100) / durationTotal;
                this.$refs.bar.style.width =  porcentaje + "%";

                this.time();

            },

        },

    }
</script>

