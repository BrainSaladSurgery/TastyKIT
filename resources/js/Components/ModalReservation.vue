<template>
    <modal class="flex flex-col w-11/12 sm:w-5/6 lg:w-1/2 max-w-2xl mx-auto rounded-lg border border-gray-300 shadow-xl" :show="showModalData" @close="changeModalData">
        <div>
            <div class="flex flex-row justify-between p-6 bg-white border-b border-gray-200 rounded-tl-lg rounded-tr-lg">
                <p class="font-semibold text-gray-800">Modificar Reserva</p>
                <svg  @click="changeModalData()" class="w-6 h-6 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" ></path></svg>
            </div>
            <div class="flex flex-col m-5 sm:flex-row items-center mb-5 sm:space-x-5">
                <div class="w-full sm:w-3/5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="time">
                            Nombre de la Reserva
                        </label>
                    <input v-if="create == true" v-model="reserv.firstName" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 bg-white border border-gray-200 rounded shadow-sm w-full focus:ring-0 focus:border-gray-500 " type="text" name="name" required >
                    <input v-else v-model="reserva.firstName" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 bg-white border border-gray-200 rounded shadow-sm w-full focus:ring-0 focus:border-gray-500 " type="text" name="name" required >
                </div>
                <div class="w-full sm:w-1/3 mt-2 sm:mt-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="time">
                        Pax
                    </label>
                    <input  v-if="create == true" v-model="reserv.pax" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 bg-white border border-gray-200 rounded shadow-sm  focus:ring-0 focus:border-gray-500" type="text" name="amount" required  >
                    <input  v-else v-model="reserva.pax" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 bg-white border border-gray-200 rounded shadow-sm  focus:ring-0 focus:border-gray-500" type="text" name="amount" required  >
                </div>
                <div class="w-full sm:w-1/3 mt-2 sm:mt-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="time">
                        Horario
                    </label>
                <select v-if="create == true" v-model="reserv.hour" type="text" name="category" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full p-2 cursor-pointer bg-white border border-gray-200 rounded shadow-sm appearance-none focus:ring-0 focus:border-gray-500" required >
                    <option value="1">Almuerzo</option>
                    <option value="2">Cena</option>
                </select>
                <select v-else v-model="reserva.hour" type="text" name="category" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full p-2 cursor-pointer bg-white border border-gray-200 rounded shadow-sm appearance-none focus:ring-0 focus:border-gray-500" required >
                    <option value="1">Almuerzo</option>
                    <option value="2">Cena</option>
                </select>
                </div>
            </div>
            <div class="flex flex-col px-6 py-5 bg-gray-50">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="time">
                    Descripción
                </label>
                <textarea type="text" name="" placeholder="Escribe aquí..." class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-5 mb-5 border border-gray-200 rounded shadow-sm h-24 focus:ring-0 focus:border-gray-500" ></textarea>

                <hr />

                <div>
                    <div class="w-full  justify-center flex flex-col px-6 py-4 bg-gray-50 sm:flex-row items-center mb-5 sm:space-x-5">
                        <div class="w-full sm:w-1/2">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="day">
                                Día
                            </label>
                            <input v-if="create == true" v-model="reserv.day"  class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="date" name="name">
                            <input v-else v-model="reserva.day"  class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="date" name="name">
                        </div>
                        <!-- <div class="w-full sm:w-1/3 mt-2 sm:mt-0">
                            <p class="mb-2 font-semibold text-gray-700">Hora</p>
                            <input v-model="reserva.time" class=" bg-white border border-gray-200 rounded shadow-sm  w-full focus:ring-0 focus:border-gray-500" type="text" name="amount" >
                        </div> -->
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="time">
                                Hora de la reserva
                            </label>
                            <div v-if="create == true && reserv.hour == 1" class="relative">
                                <select v-model="reserv.time" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" >
                                    <option value="1">14:00</option>
                                    <option value="1">14:30</option>
                                    <option value="1">15:00</option>
                                    <option value="1">15:30</option>
                                    <option value="1">16:00</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
                            <div v-if="reserva.hour == 1" class="relative">
                                <select v-model="reserva.time" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" >
                                    <option value="1">14:00</option>
                                    <option value="1">14:30</option>
                                    <option value="1">15:00</option>
                                    <option value="1">15:30</option>
                                    <option value="1">16:00</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
                            <div v-if="create == true && reserv.hour == 2" class="relative">
                                <select v-model="reserv.time" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                    <option value="1">20:00</option>
                                    <option value="2">20:30</option>
                                    <option value="3">21:00</option>
                                    <option value="4">21:30</option>
                                    <option value="5">22:00</option>
                                    <option value="6">22:30</option>
                                    <option value="7">23:00</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
                            <div v-if="reserva.hour == 2" class="relative">
                                <select v-model="reserva.time" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                    <option value="1">20:00</option>
                                    <option value="2">20:30</option>
                                    <option value="3">21:00</option>
                                    <option value="4">21:30</option>
                                    <option value="5">22:00</option>
                                    <option value="6">22:30</option>
                                    <option value="7">23:00</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr />
                </div>
            </div>
            <div class="flex flex-row items-center justify-between p-5 bg-white border-t border-gray-200 rounded-bl-lg rounded-br-lg">
                <p @click="changeModalData()" class="cursor-pointer font-semibold text-blue-500 ml-5">Cancelar</p>
                <button v-if="create == true" @click="createReserva(reserv);changeModalData()" class="px-4 py-2 text-white font-semibold bg-yellow-600 rounded w-28">
                    Reservar
                </button>
                <button v-else  @click="updateReserva(reserva,reserva.id);changeModalData()" class="px-4 py-2 text-white font-semibold bg-yellow-600 rounded w-28">
                    Guardar
                </button>
            </div>
        </div>
    </modal>
</template>

<script>
    import Modal from '@/Jetstream/Modal'
    export default {
        data(){

            return {
                reserv: {
                    firstName: '',
                    pax: '',
                },
                resetShowModal: false,
            }

        },

        components: {
            Modal
        },
        props:['reserva','showModalData','create'],
        methods: {

            changeModal(){

                this.showModal = !this.showModal
                this.$emit('changeModalData',this.resetShowModal)
            },

            createReserva(reserv){

                this.$emit('createReserva',reserv)
            },

            updateReserva(reserva,id){

                this.$emit('updateReserva',reserva);
                this.$emit('updateReservaID',id);
            }

        },
        watch: {

        }
    }
</script>
