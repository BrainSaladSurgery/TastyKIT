<template>
    <div class="h-screen bg-gray-100" >
        <!--Añadimos barra de navegación  -->
        <nav-bar />
        <div class=" h-4/5 flex items-center justify-center w-full flex-col">
            <p class="p-8 text-gray-600">Haz tu reserva con nosotros desde aquí y te buscaremos el mejor sitio</p>
            <div class="w-9/12  p-8 border-t-8 border-b-8 border-yellow-600  shadow-xl rounded-lg">
                <h1 class="font-bold text-3xl text-gray-500 text-center mb-6">Reservas</h1>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                            Nombre
                        </label>
                        <input v-model="name" class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="name" type="text" placeholder="Nombre de la reserva" required>
                        <p v-if="errorName == true" class="text-red-500 text-xs italic">Este campo es necesario.</p>
                    </div>
                    <div class="w-full md:w-2/6 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="lastName">
                            Apellidos
                        </label>
                        <input v-model="lastName" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Apellidos">
                    </div>
                    <div class="w-full md:w-1/6 px-3 ">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="pax">
                            PAX
                        </label>
                        <input v-model="pax" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="pax" type="number" placeholder="Pax" required>
                        <p v-if="errorPax == true" class="text-red-500 text-xs italic">Este campo es necesario.</p>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="pax">
                            Hora de la reserva
                        </label>
                        <div v-if="hour == 'Almuerzo'" class="relative">
                            <select v-model="time" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" >
                                <option value="14:00">14:00</option>
                                <option value="14:30">14:30</option>
                                <option value="15:00">15:00</option>
                                <option value="15:30">15:30</option>
                                <option value="16:00">16:00</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>
                        <div v-if="hour == 'Cena'" class="relative">
                            <select v-model="time" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                <option value="20:00">20:00</option>
                                <option value="20:30">20:30</option>
                                <option value="21:00">21:00</option>
                                <option value="21:30">21:30</option>
                                <option value="22:00">22:00</option>
                                <option value="22:30">22:30</option>
                                <option value="23:00">23:00</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>
                        <p v-if="errorTime == true" class="text-red-500 text-xs italic">Este campo es necesario.</p>
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="hour">
                            Horario
                        </label>
                        <div class="relative">
                            <select v-model="hour" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
                                <option value="Almuerzo">Almuerzo</option>
                                <option value="Cena">Cena</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                        <p v-if="errorHour == true" class="text-red-500 text-xs italic">Este campo es necesario.</p>
                    </div>
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="day">
                            Día
                        </label>
                        <input v-model="day" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="day" type="date" required>
                        <p v-if="errorDay == true" class="text-red-500 text-xs italic">Este campo es necesario.</p>
                    </div>
                </div>
                <div class="flex  mt-6 mx-3 mb-3">
                    <div class="w-full flex justify-center px-3">
                        <button @click="checkForm()" class="inline-flex items-center px-4 py-4 bg-orange border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-800 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Reservar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <modal styles="width: 330px !important; margin-top: 10%" :show="showModale" @close="changeModal">
        <div class="bg-white rounded-lg w-96">
            <div class="w-96 border-t-8 border-yellow-600 rounded-lg flex">
                <div class="w-full pt-9 pr-4 text-center">
                    <h3 class="font-bold text-yellow-700">Realizar Reserva</h3>
                    <p class="py-4 text-sm text-gray-400">Se va a realizar una reserva el día <b>{{ daySee }}</b> a las <b>{{ time }}</b> a nombre de <b>{{ name }}</b> para <b>{{ pax }}</b> <b> personas</b></p>
                </div>
            </div>
            <div class="p-4 flex space-x-4">
                <button @click="changeModal()" class="w-1/2 px-4 py-3 text-center bg-gray-100 text-gray-400 hover:bg-gray-200 hover:text-black font-bold rounded-lg text-sm">Cancelar</button>
                <button @click="createRes(); changeModal()" class="w-1/2 px-4 py-3 text-center text-pink-100 bg-yellow-600 rounded-lg hover:bg-yellow-700 hover:text-white font-bold text-sm">Reservar</button>
            </div>
        </div>
    </modal>

</template>

<script>
    import NavBar from '@/Components/NavBar'
    import Modal from '@/Jetstream/Modal'
    import moment from 'moment'

    export default {
        data(){
            return {
                showModale: false,
                name: '',
                lastName: '',
                pax: '',
                hour: 'Almuerzo',
                time: '14:00',
                daySee: '',
                day:'',
                errorDay: false,
                errorTime: false,
                errorName: false,
                errorPax: false,
                error : false,

            }
        },
        components: {
            NavBar,
            Modal
        },

        methods: {

            changeModal(){

                this.showModale = !this.showModale
                this.daySee = moment(this.day).format('DD-MM-YYYY')
            },
            checkForm(){
                if(this.day == ''){
                    this.errorDay = true
                    setTimeout(() => this.errorDay = false ,2000)
                    this.error = true
                    setTimeout(() => this.error = false ,2000)
                }
                if(this.pax == ''){
                    this.errorPax = true
                    setTimeout(() => this.errorPax= false ,2000)
                    this.error = true
                    setTimeout(() => this.error = false ,2000)
                }
                if(this.time == ''){
                    this.errorTime = true
                    setTimeout(() => this.errorTime = false ,2000)
                    this.error = true
                    setTimeout(() => this.error = false ,2000)
                }
                if(this.name == ''){
                    this.errorName = true
                    setTimeout(() => this.errorName = false ,2000)
                    this.error = true
                    setTimeout(() => this.error = false ,2000)
                }

                if( this.error == false){
                    this.changeModal()
                }
            },
            async createRes(){


                    const formData = new FormData()
                    formData.append('firstName', this.name)
                    formData.append('lastName', this.lastName)
                    formData.append('description', '')
                    formData.append('pax', this.pax)
                    formData.append('hour', this.hour)
                    formData.append('time', this.time)
                    formData.append('day', this.day)
                    console.log(formData)

                    await axios.post('/create-reservation',formData)
                        .then((response) => {
                            console.log(response)
                            this.name = ''
                            this.lastName = ''
                            this.pax = ''
                            this.time = '14:00'
                            this.day = ''
                            this.hour = 'Almuerzo'

                        }).catch((err) => {
                            console.log(err)

                        })
                

            }
        },

    }

</script>

