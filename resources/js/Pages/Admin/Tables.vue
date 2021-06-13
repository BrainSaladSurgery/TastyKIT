<template>
  <app-layout>
    <template #navSide>
        <div id="navSide">
            <nav-side />
        </div>
        <div style="width: 80.5px; heigth: auto;"></div>
    </template>
    <template #content class="h-screen bg-gray-100">
    <header-nav :pag="'Mesas'" :classe="'w-full flex-none flex h-16 bg-gray-100 border-t px-4 items-center justify-between'"/>

    <nav-top  @changeModalCreate="showModal = $event"  :tipo="'Mesa'" />


    <main class="flex-grow flex  border-t ">

        <section aria-label="main content" class="flex  flex-col flex-auto border-l ">

            <div v-if="mesas.length > 0" id="grid" >
                    <!-- Column -->
                    <div  v-for="(mesa,index) in mesas" @key="index" class=" w-full h-full">

                        <!-- Article -->
                        <card-table @changeModal="showModalMod = $event" @modalData="tableID = $event" :data="mesa" :categories="allCategories" @emitDelete="deletePro = $event" class="bg-white"/>
                <!-- END Article -->
                    </div>

                </div>
            <!-- START MODAL CREATE -->
                <modal class="flex flex-col w-11/12 sm:w-5/6 lg:w-1/2 max-w-2xl mx-auto rounded-lg border border-gray-300 shadow-xl" :show="showModal" @close="changeStateModal">
                    <div>
                        <div class="flex flex-row justify-between p-6 bg-white border-b border-gray-200 rounded-tl-lg rounded-tr-lg">
                            <p class="font-semibold text-gray-800">Alta Mesa</p>
                            <svg  @click="changeStateModal" class="w-6 h-6 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" ></path></svg>
                        </div>
                        <div class="flex flex-col m-5 sm:flex-row items-center mb-5 sm:space-x-5">
                            <div class="w-full sm:w-3/5">
                                <p class="mb-2 font-semibold text-gray-700">Número de la mesa</p>
                                <input v-model="name" class="bg-white border border-gray-200 rounded shadow-sm w-full focus:ring-0 focus:border-gray-500 " type="text" name="name">
                            </div>
                            <div class="w-full sm:w-1/3 mt-2 sm:mt-0">
                                <p class="mb-2 font-semibold text-gray-700">PAX máx</p>
                                <input  v-model="max_pax" class=" bg-white border border-gray-200 rounded shadow-sm  focus:ring-0 focus:border-gray-500" type="text" name="amount" >
                            </div>
                            <div class="w-full sm:w-1/3 mt-2 sm:mt-0">
                                <p class="mb-2 font-semibold text-gray-700">PAX min</p>
                                <input  v-model="min_pax" class=" bg-white border border-gray-200 rounded shadow-sm  focus:ring-0 focus:border-gray-500" type="text" name="amount" >
                            </div>
                        </div>
                        <hr />
                            <div class="flex flex-row items-center justify-between p-5 bg-white border-t border-gray-200 rounded-bl-lg rounded-br-lg">
                                <p @click="changeStateModal()" class="font-semibold text-blue-500 ml-5">Cancelar</p>
                                <button  @click="createMesa(); changeStateModal()" class="px-4 py-2 text-white font-semibold bg-yellow-600 rounded w-28">
                                    Guardar
                                </button>
                            </div>
                    </div>
                </modal>
                <!-- END MODAL CREATE -->

                <!-- START MODAL Modify -->
                <modal class="flex flex-col w-11/12 sm:w-5/6 lg:w-1/2 max-w-2xl mx-auto rounded-lg border border-gray-300 shadow-xl" :show="showModalMod" @close="changeStateModalMod">
                    <div>
                        <div class="flex flex-row justify-between p-6 bg-white border-b border-gray-200 rounded-tl-lg rounded-tr-lg">
                            <p class="font-semibold text-gray-800">Modificar Mesa</p>
                            <svg  @click="changeStateModalMod" class="w-6 h-6 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" ></path></svg>
                        </div>
                        <div class="flex flex-col m-5 sm:flex-row items-center mb-5 sm:space-x-5">
                            <div class="w-full sm:w-3/5">
                                <p class="mb-2 font-semibold text-gray-700">Número de la mesa</p>
                                <input v-model="table.name" class="bg-white border border-gray-200 rounded shadow-sm w-full focus:ring-0 focus:border-gray-500 " type="text" name="name">
                            </div>
                            <div class="w-full sm:w-1/3 mt-2 sm:mt-0">
                                <p class="mb-2 font-semibold text-gray-700">PAX máx</p>
                                <input  v-model="table.max_pax" class=" bg-white border border-gray-200 rounded shadow-sm  focus:ring-0 focus:border-gray-500" type="text" name="amount" >
                            </div>
                            <div class="w-full sm:w-1/3 mt-2 sm:mt-0">
                                <p class="mb-2 font-semibold text-gray-700">PAX min</p>
                                <input  v-model="table.min_pax" class=" bg-white border border-gray-200 rounded shadow-sm  focus:ring-0 focus:border-gray-500" type="text" name="amount" >
                            </div>
                        </div>
                        <hr />
                            <div class="flex flex-row items-center justify-between p-5 bg-white border-t border-gray-200 rounded-bl-lg rounded-br-lg">
                                <p @click="changeStateModalMod()" class="font-semibold text-blue-500 ml-5">Cancelar</p>
                                <button  @click="updateMesa(table);changeStateModalMod()" class="px-4 py-2 text-white font-semibold bg-yellow-600 rounded w-28">
                                    Guardar
                                </button>
                            </div>
                    </div>
                </modal>
                <!-- END MODAL Modify -->
            </section>
        </main>
    </template>
  </app-layout>
</template>

<script>
/**
 * write a component's description
 */
    import AppLayout from '@/Layouts/AppLayout'
    import NavTop from '@/Components/NavTop'
    import NavSide from '@/Components/NavSide'
    import CardTable from '@/Components/CardTable'
    import HeaderNav from '@/Components/HeaderNav'
    import Modal from '@/Jetstream/Modal'


    export default {
        /**
         * @description
         */
        /**
         * @description
         */
         */
        data(){
            return{
                showModal: false,
                showModalMod: false,
                mesas: [],
                table: [],
                error: '',
                tableID:''

            }
        },
        props:['allCategories', 'type'],
        components: {
            AppLayout,
            NavTop,
            NavSide,
            CardTable,
            Modal,
            HeaderNav

        },
        methods: {

            /**
             * @description change state modal
             */
            changeStateModal(){

                this.showModal = !this.showModal

            },

            /**
             * @description change state modal
             */
            changeStateModalMod(){

                this.showModalMod = !this.showModalMod

            },


            /**
             * @description
             */
            async getTables(){

                await axios.get('/tables-list')
                .then(response =>{

                    this.mesas = response.data
                    console.log(this.mesas)
                })
            },

            /**
             * @description send data for update specified resource
             * @param {table} id
             */
            async updateTable(id){

                var url = '/update-table/' + id

                await axios.put(url ,this.table).
                    then((response) => {

                        this.change = true
                        this.resetDataUp()

                    }).catch(error =>{

                        if(error.response.status == 422){
                            this.error = error.response.data.errors.image[0]
                            //DEJAMOS EL ERROR 5 sec y desaparece
                            setTimeout(() =>{
                                this.error = null
                            },5000)
                        }
                    })

            },

            /**
             * @description reset data
             */
            resetDataUp(){

                this.showModalMod = false
                this.table = []

            },

            /**
             * @description return specified resources
             * @param {table} id
             */
            async getTable(id){

                await axios.get('/table/'+id).
                    then((response) =>{
                        this.table = response.data
                        console.log(this.table)
                    })
            }
        },
        watch:{

            tableID: function(val){
                if(this.tableID !=  ''){
                    this.getTable(this.tableID)

                }
            }

        },

        mounted: function() {

            this.getTables()

        },
    }
</script>
