<template>
    <app-layout>
        <template #navSide>
        <nav-side />
        </template>
        <template #content>

        <header-nav :pag="'Inicio'" :classe="'w-full flex-none flex h-16 bg-gray-100 border-t px-4 items-center justify-between'"/>
        <nav-top @changeModal="showModalMod = $event"  @changeModalCreate="showModalAdd = $event"  @modalData="ReservaId = $event" :tipo="'Reservation'" />

        <!-- main content -->
        <main class="flex-grow flex min-h-0 border-t">
            <!-- section Tickets-->
            <tickets-resume />

            <!-- section content -->
            <section aria-label="main content" class="flex min-h-0 flex-col flex-auto border-l">


                <!-- content caption -->
                <head-tab :data="total" />

                <table-reserva :createModal="createEv" :reservas="reservas" @updateReserv="ReservaId = $event" @updateList="upda = $event" @resetID="ReservaId = $event"/>

                <!-- Create Modal -->
                <modal class="flex flex-col w-11/12 sm:w-5/6 lg:w-1/2 max-w-2xl mx-auto rounded-lg border border-gray-300 shadow-xl" :show=" showModalAdd " @close="changeModalAdd">
                    <div>
                        <div class="flex flex-row justify-between p-6 bg-white border-b border-gray-200 rounded-tl-lg rounded-tr-lg">
                            <p class="font-semibold text-gray-800">Crear Reserva</p>
                            <svg  @click="changeModalAdd()" class="w-6 h-6 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" ></path></svg>
                        </div>
                        <div class="flex flex-col m-5 sm:flex-row items-center mb-5 sm:space-x-5">
                            <div class="w-full sm:w-3/5">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="time">
                                        Nombre de la Reserva
                                    </label>
                                <p v-if="errorName == true" class="text-red-500 text-xs italic">Obligatorio</p>
                                <input v-model="reserv.firstName" class="block appearance-none  text-gray-700 py-3 px-4 pr-8  leading-tight focus:outline-none focus:bg-white focus:border-gray-500 bg-white border border-gray-200 rounded shadow-sm w-full focus:ring-0  " type="text" name="name" required >
                            </div>
                            <div class="w-full sm:w-1/3 mt-2 sm:mt-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="time">
                                    Apellidos
                                </label>
                                <input  v-model="reserv.lastName" class="block appearance-none w-full  text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white bg-white border border-gray-200  shadow-sm  focus:ring-0 focus:border-gray-500" type="text" name="amount" required  >
                            </div>
                            <div class="w-full sm:w-1/3 mt-2 sm:mt-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="time">
                                    Horario
                                </label>
                                <p v-if="errorHour == true" class="text-red-500 text-xs italic">Obligatorio</p>
                                <select v-model="reserv.hour" type="text" name="category" class="block  text-gray-700 py-3 px-4 pr-8  leading-tight focus:outline-none focus:bg-white  w-full p-2 cursor-pointer bg-white border border-gray-200 rounded shadow-sm appearance-none focus:ring-0 focus:border-gray-500" required >
                                    <option value="1">Almuerzo</option>
                                    <option value="2">Cena</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-col px-6 py-5 bg-gray-50">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" >
                                Descripción
                            </label>
                            <textarea type="text" name="" placeholder="Escribe aquí..." class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8  leading-tight focus:outline-none focus:bg-white  p-5 mb-5   rounded shadow-sm h-24 focus:ring-0 focus:border-gray-500" ></textarea>

                            <hr />

                            <div>
                                <div class="w-full  justify-center flex flex-col px-6 py-4 bg-gray-50 sm:flex-row items-center mb-5 sm:space-x-5">
                                    <div class="w-full sm:w-1/3 mt-2 sm:mt-0">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="time">
                                            Pax
                                        </label>
                                        <p v-if="errorPax == true" class="text-red-500 text-xs italic">Obligatorio</p>
                                        <input  v-model="reserv.pax" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500  shadow-sm  focus:ring-0 " type="text" name="amount" required  >
                                    </div>
                                    <div class="w-full sm:w-2/5">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="day">
                                            Día
                                        </label>
                                        <p v-if="errorDay == true" class="text-red-500 text-xs italic">Obligatorio</p>
                                        <input v-model="reserv.day"  class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="date" name="name" required>
                                    </div>
                                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="time">
                                            Hora
                                        </label>
                                        <p v-if="errorTime == true" class="text-red-500 text-xs italic">Obligatorio</p>
                                        <div v-if="reserv.hour == 1" class="relative">
                                            <select v-model="reserv.time" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required >
                                                <option value="1">14:00</option>
                                                <option value="2">14:30</option>
                                                <option value="3">15:00</option>
                                                <option value="4">15:30</option>
                                                <option value="5">16:00</option>
                                            </select>
                                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                            </div>
                                        </div>
                                        <div v-if="reserv.hour == 2" class="relative">
                                            <select v-model="reserv.time" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  required>
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
                            <p @click="changeModalAdd()" class="cursor-pointer font-semibold text-blue-500 ml-5">Cancelar</p>
                            <button  @click="createReserv(reserv)" class="px-4 py-2 text-white font-semibold bg-yellow-600 rounded w-28">
                                Reservar
                            </button>
                        </div>
                    </div>
                </modal>
                <!-- END CREATE -->

                <!-- Modal Modify -->
                <modal class="flex flex-col w-11/12 sm:w-5/6 lg:w-1/2 max-w-2xl mx-auto rounded-lg border border-gray-300 shadow-xl" :show="showModal" @close="changeModal">
                    <div>
                        <div class="flex flex-row justify-between p-6 bg-white border-b border-gray-200 rounded-tl-lg rounded-tr-lg">
                            <p class="font-semibold text-gray-800">Modificar Reserva</p>
                            <svg  @click="changeModal()" class="w-6 h-6 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" ></path></svg>
                        </div>
                        <div class="flex flex-col m-5 sm:flex-row items-center mb-5 sm:space-x-5">
                            <div class="w-full sm:w-3/5">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="time">
                                    Nombre de la Reserva
                                </label>
                                <p v-if="errorName == true" class="text-red-500 text-xs italic">Obligatorio</p>
                                <input v-model="reserva.firstName" class="block appearance-none  text-gray-700 py-3 px-4 pr-8  leading-tight focus:outline-none focus:bg-white focus:border-gray-500 bg-white border border-gray-200 rounded shadow-sm w-full focus:ring-0  " type="text" name="name" required >
                            </div>
                            <div class="w-full sm:w-1/3 mt-2 sm:mt-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="time">
                                    Apellidos
                                </label>
                                <input v-model="reserva.lastName" class="block appearance-none w-full  text-gray-700 py-3 px-4 pr-8  leading-tight focus:outline-none focus:bg-white focus:border-gray-500 bg-white border border-gray-200 rounded shadow-sm  focus:ring-0 " type="text" name="amount" required  >
                            </div>
                            <div class="w-full sm:w-1/3 mt-2 sm:mt-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="time">
                                    Horario
                                </label>

                                <select v-model="reserva.hour" type="text" name="category" class="block  text-gray-700 py-3 px-4 pr-8  leading-tight focus:outline-none focus:bg-white  w-full p-2 cursor-pointer bg-white border border-gray-200 rounded shadow-sm appearance-none focus:ring-0 focus:border-gray-500" required >
                                    <option value="1">Almuerzo</option>
                                    <option value="2">Cena</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-col px-6 py-5 bg-gray-50">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="time">
                                Descripción
                            </label>
                            <textarea type="text" name="" placeholder="Escribe aquí..." class="block appearance-none w-full bg-gray-200  text-gray-700 py-3 px-4 pr-8  leading-tight focus:outline-none focus:bg-white f p-5 mb-5 border border-gray-200 rounded shadow-sm h-24 focus:ring-0 focus:border-gray-500" ></textarea>

                            <hr />

                            <div>
                                <div class="w-full  justify-center flex flex-col px-6 py-4 bg-gray-50 sm:flex-row items-center mb-5 sm:space-x-5">
                                    <div class="w-full sm:w-2/12 mt-2 sm:mt-0">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="time">
                                            Pax
                                        </label>
                                        <p v-if="errorPax == true" class="text-red-500 text-xs italic">Obligatorio</p>
                                        <input  v-model="reserva.pax" class="block appearance-none w-full  text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white  bg-white border border-gray-200  shadow-sm  focus:ring-0 focus:border-gray-500" type="text" name="amount" required  >
                                    </div>
                                    <div class="w-full sm:w-2/12 mt-2 sm:mt-0">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="time">
                                            Mesa
                                        </label>
                                        <input  v-model="reserva.table_id" class="block appearance-none w-full  text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white  bg-white border border-gray-200  shadow-sm  focus:ring-0 focus:border-gray-500" type="text" name="amount" required  >
                                    </div>
                                    <div class="w-full sm:w-1/3">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="day">
                                            Día
                                        </label>
                                        <p v-if="errorDay == true" class="text-red-500 text-xs italic">Obligatorio</p>
                                        <input v-model="reserva.day"  class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="date" name="name">
                                    </div>
                                    <div class="w-full md:w-auto px-3 mb-6 md:mb-0">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="time">
                                            Hora
                                        </label>
                                        <p v-if="errorTime == true" class="text-red-500 text-xs italic">Obligatorio</p>
                                        <div v-if="reserva.hour == 1" class="relative">
                                            <select v-model="reserva.time" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" >
                                                <option value="1">14:00</option>
                                                <option value="2">14:30</option>
                                                <option value="3">15:00</option>
                                                <option value="4">15:30</option>
                                                <option value="5">16:00</option>
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
                            <p @click="changeModal()" class="cursor-pointer font-semibold text-blue-500 ml-5">Cancelar</p>
                            <button @click="updateReserva(reserva,reserva.id)" class="px-4 py-2 text-white font-semibold bg-yellow-600 rounded w-28">
                                Guardar
                            </button>
                        </div>
                    </div>
                </modal>
                <!-- END MODIFY -->

            </section>
        </main>
        </template>
    </app-layout>
</template>

<script>

    import AppLayout from '@/Layouts/AppLayout'
    import NavSide from '@/Components/NavSide'
    import Stats from '@/Components/Stats'
    import TicketsResume from '@/Components/TicketsResume'
    import HeadTab from '@/Components/HeadTab'
    import HeaderNav from '@/Components/HeaderNav'
    import TableReserva from '@/Components/TableReserva'
    import NavTop from '@/Components/NavTop'
    import Modal from '@/Jetstream/Modal'

    export default {
        data(){
            return{
                total:0,
                reservas: [],
                ReservaId: '',
                reserva: [],
                showModal: false,
                createEv: false,
                upda: false,
                reserv: {

                    firstName: '',
                    pax: '',
                    lastName: '',
                    time:1,
                    day: '',
                    hour: 1
                },
                showModalAdd: false,
                errorDay: false,
                errorTime: false,
                errorName: false,
                errorPax: false,
                error : false,

            }
        },
        components: {
            AppLayout,
            NavSide,
            TicketsResume,
            Stats,
            HeadTab,
            TableReserva,
            HeaderNav,
            NavTop,
            Modal
        },
        methods: {

            changeModalAdd(){

                this.showModalAdd = !this.showModalAdd
            },

            changeModal(){

                this.showModal = !this.showModal
            },

            async getTotal(){

                await axios.get('/reservation-total')
                    .then(response =>{
                        this.total = response.data
                        console.log(this.total)
                    })
            },

            async getReservas(){

                await axios.get('/reservation-list')
                    .then(response =>{

                        this.reservas = response.data


                    }).catch(error =>{

                        console.log(error)
                    })
            },

            async getReserva(id){

                await axios.get('/reservation/'+id)
                    .then(response =>{

                        this.reserva = response.data
                        console.log(response.data)
                        this.assing()
                        this.ReservaId = ''
                    }).catch(error =>{

                        console.log(error)
                    })
            },

            assing(){

                var hora = ''
                if(this.reserva.hour == 'Almuerzo'){
                    this.reserva.hour = 1
                    console.log(this.reserva.time)
                    var arrayHourAlm = ['14:00:00','14:30:00','15:00:00','15:30:00','16:00:00']
                    for(var i = 0; arrayHourAlm.length > i; i++){
                        if(this.reserva.time == arrayHourAlm[i]){

                            this.reserva.time = i +1
                            console.log(this.reserva.time)
                        }
                    }


                }else{
                    this.reserva.hour = 2
                    console.log(this.reserva.time)
                    var arrayHourCena = ['20:00:00','20:30:00','21:00:00','21:30:00','22:00:00','22:30:00','23:00:00']
                    for(var i = 0; arrayHourCena.length > i; i++){
                        if(this.reserva.time == arrayHourCena[i]){

                            this.reserva.time = i + 1
                            console.log(this.reserva.time)
                        }
                    }

                }
            },

            async createReserv(reserv){
                if(this.reserv.day == ''){
                    this.errorDay = true
                    setTimeout(() => this.errorDay = false ,2000)
                    this.error = true
                }
                if(this.reserv.pax == ''){
                    this.errorPax = true
                    setTimeout(() => this.errorPax= false ,2000)
                    this.error = true
                }
                if(this.reserv.time == ''){
                    this.errorTime = true
                    setTimeout(() => this.errorTime = false ,2000)
                    this.error = true
                }
                if(this.reserv.firstName == ''){
                    this.errorName = true
                    setTimeout(() => this.errorName = false ,2000)
                    this.error = true
                }

                if(this.errorDay == false && this.errorPax == false && this.errorTime == false && this.errorName == false ){

                    var horario = ''
                    var hora = ''
                    if(reserv. hour == 1){
                        horario = 'Almuerzo'
                        var arrayHourAlm = ['14:00:00','14:30:00','15:00:00','15:30:00','16:00:00']
                        hora = arrayHourAlm[this.reserv.time - 1]

                    }else{
                        horario= 'Cena'
                        var arrayHourCena = ['20:00:00','20:30:00','21:00:00','21:30:00','22:00:00','22:30:00','23:00:00']
                        hora = arrayHourCena[this.reserv.time - 1]
                    }

                    const formData = new FormData()
                    formData.append('firstName', this.reserv.firstName)
                    formData.append('lastName', this.reserv.lastName)
                    formData.append('pax', this.reserv.pax)
                    formData.append('hour', horario)
                    formData.append('time', hora)
                    formData.append('day', this.reserv.day)
                    console.log(formData)

                    await axios.post('/create-reservation', formData)
                        .then(response =>{
                            this.resetData()

                        }).catch(err =>{
                            console.log(err)
                        })
                }
            },

            async updateReserva(reserva, id){
                if(this.reserva.day == ''){
                    this.errorDay = true
                    setTimeout(() => this.errorDay = false ,2000)
                    this.error = true
                }
                if(this.reserva.pax == ''){
                    this.errorPax = true
                    setTimeout(() => this.errorPax= false ,2000)
                    this.error = true
                }
                if(this.reserva.time == ''){
                    this.errorTime = true
                    setTimeout(() => this.errorTime = false ,2000)
                    this.error = true
                }
                if(this.reserva.firstName == ''){
                    this.errorName = true
                    setTimeout(() => this.errorName = false ,2000)
                    this.error = true
                }

                if(this.error == false && this.errorDay == false && this.errorPax == false && this.errorTime == false && this.errorName == false ){
                    var horario
                    var hora
                    if(reserva.hour == 1){
                        horario = 'Almuerzo'
                        var arrayHourAlm = ['14:00','14:30','15:00','15:30','16:00']
                        hora = arrayHourAlm[reserva.time - 1]
                        reserva.hour = horario
                        reserva.time = hora

                    }else{
                        horario= 'Cena'
                        var arrayHourCena = ['20:00','20:30','21:00','21:30','22:00','22:30','23:00']
                        hora = arrayHourCena[reserva.time - 1]
                        reserva.hour = horario
                        reserva.time = hora
                    }
                    console.log(JSON.stringify(reserva))

                    var url = '/reservation-update/' + id
                    await axios.put(url,reserva)
                        .then(response=>{

                            this.resetDataMod()
                        }).catch(error=>{

                            console.log(error)
                        })
                }
            },

            resetData(){
                this.changeModalAdd()
                this.getTotal()
                this.getReservas()
                this.reserv.pax =''
                this.reserv.firstName =''
                this.reserv.lastName =''
                this.reserv.hour = ''
                this.reserv.time = ''
                this.reserv.day = ''
                this.errorDay = false
                this.errorTime = false
                this.errorName = false
                this.errorPax = false
                this.error = false
            },

            resetDataMod(){
                this.changeModal()
                this.getReservas()
                this.getTotal()
                this.reserva = []
                this.ReservaId = ''
                this.errorDay = false
                this.errorTime = false
                this.errorName = false
                this.errorPax = false
                this.error = false
            }
        },

        watch:{

            ReservaId: function(val){

                if(this.ReservaId != ''){

                    this.getReserva(this.ReservaId)
                    this.changeModal()

                }
            },

            upda: function(val){

                if(this.upda == true){

                    this.getReservas()
                    this.getTotal()
                    this.upda = false
                }
            }
        },

        mounted(){
            this.getTotal()
            this.getReservas()
        },



    }
</script>

