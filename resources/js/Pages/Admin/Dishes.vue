
<template>
    <app-layout>
        <template #navSide>
            <div id="navSide">
                <nav-side />
            </div>
            <div style="width: 80.5px; heigth: auto;"></div>
        </template>
        <template #content>

        <header-nav :pag="'Platos'" :classe="'w-full flex-none flex h-16 bg-gray-100 border-t px-4 items-center justify-between'"/>

        <nav-top  @changeModalCreate="showModalDish = $event" :tipo ="type" @modalData="dishID = $event"  @changeModal="showModalDishMod = $event"/>
        <!-- main content -->
        <main class="flex-grow flex min-h-0 border-t w-full justify-center bg-gray-100">
            <section aria-label="main content" class="flex min-h-0  container  w-full bg-white ">

                <!-- content caption -->
                <!-- <head-tab /> -->

                <table-dish @ModalDelete="showDele = $event"  @deleteDish="deleteDish = $event"  :dishDelete="borrado"  @changeBorrado="borrado = $event" :cupdate="change" @changeUpdate="change = $event" @editDish="dishID = $event"  @showModal="showModalDishMod = $event"/>
            </section>

            <!-- section content -->

            <!-- START MODAL CREATE -->
            <modal class="flex flex-col w-11/12 sm:w-5/6 lg:w-1/2 max-w-2xl mx-auto rounded-lg border border-gray-300 shadow-xl" :show="showModalDish" @close="changeStateModal">
                <div >
                    <div class="flex flex-row justify-between p-6 bg-white border-b border-gray-200 rounded-tl-lg rounded-tr-lg">
                        <p class="font-semibold text-gray-800">Alta Plato</p>
                        <svg  @click="changeStateModal" class="w-6 h-6 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" ></path></svg>
                    </div>
                    <div class="flex flex-col  sm:flex-row items-center mb-5 py-8 px-6 sm:space-x-5">
                        <div class="w-full sm:w-2/5">
                            <p class="mb-2 font-semibold text-gray-700">Nombre</p>
                            <input v-model="dish.name" class="bg-white border border-gray-200 rounded shadow-sm w-full focus:ring-0 focus:border-gray-500 " type="text" name="name">
                        </div>
                        <div class="w-full sm:w-1/3 mt-2  sm:mt-0">
                            <p class="mb-2 font-semibold pl-2 text-gray-700">Categoría</p>
                            <select v-model="dish.cat_id" type="text" name="category" class="w-full  cursor-pointer bg-white border border-gray-200 rounded shadow-sm appearance-none focus:ring-0 focus:border-gray-500">
                                <option value="2">Entrantes</option>
                                <option value="3">Primeros</option>
                                <option value="4">Segundos</option>
                                <option value="5">Postres</option>
                                <option value="1">Otros</option>
                            </select>
                        </div>
                        <div class="w-full sm:w-2/12 mt-2 sm:mt-0">
                            <p class="mb-2 font-semibold text-gray-700">Precio</p>
                            <input  v-model="dish.price" class=" bg-white border border-gray-200 rounded shadow-sm w-full focus:ring-0 focus:border-gray-500" type="text" name="amount" >
                        </div>

                    </div>
                    <div class="flex flex-col px-6 py-5 bg-gray-50">
                        <p class="mb-2 font-semibold text-gray-700">Descripción</p>
                                <textarea v-model="dish.description" type="text" name="" placeholder="Escribe aquí..." class=" mb-5 bg-white border border-gray-200 rounded shadow-sm h-36 focus:ring-0 focus:border-gray-500" ></textarea>
                    </div>
                    <hr />
                        <div class="flex flex-row items-center justify-between p-5 bg-white border-t border-gray-200 rounded-bl-lg rounded-br-lg">
                            <p @click="changeStateModal" class="font-semibold text-blue-500 ml-5 cursor-pointer">Cancelar</p>
                            <button  @click="createDish(dish)" class="px-4 py-2 text-white font-semibold bg-yellow-600 rounded w-28">
                                Guardar
                            </button>
                        </div>
                </div>
            </modal>
            <!-- END MODAL CREATE -->

            <!-- START MODAL MODIFY -->
            <modal class="flex flex-col w-11/12 sm:w-5/6 lg:w-1/2 max-w-2xl mx-auto rounded-lg border border-gray-300 shadow-xl" :show="showModalDishMod" @close="changeStateModalMod">
                <div >
                    <div class="flex flex-row justify-between p-6 bg-white border-b border-gray-200 rounded-tl-lg rounded-tr-lg">
                        <p class="font-semibold text-gray-800">Modificar Plato</p>
                        <svg  @click="changeStateModalMod" class="w-6 h-6 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" ></path></svg>
                    </div>
                    <div class="flex flex-col  sm:flex-row items-center mb-5 py-8 px-6 sm:space-x-5">
                        <div class="w-full sm:w-2/5">
                            <p class="mb-2 font-semibold text-gray-700">Nombre</p>
                            <input v-model="dish.name" class="bg-white border border-gray-200 rounded shadow-sm w-full focus:ring-0 focus:border-gray-500 " type="text" name="name">
                        </div>
                        <div class="w-full sm:w-1/3 mt-2  sm:mt-0">
                            <p class="mb-2 font-semibold pl-2 text-gray-700">Categoría</p>
                            <select v-model="dish.cat_id" type="text" name="category" class="w-full  cursor-pointer bg-white border border-gray-200 rounded shadow-sm appearance-none focus:ring-0 focus:border-gray-500">
                                <option value="2">Entrantes</option>
                                <option value="3">Primeros</option>
                                <option value="4">Segundos</option>
                                <option value="5">Postres</option>
                                <option value="1">Otros</option>
                            </select>
                        </div>
                        <div class="w-full sm:w-2/12 mt-2 sm:mt-0">
                            <p class="mb-2 font-semibold text-gray-700">Precio</p>
                            <input  v-model="dish.price" class=" bg-white border border-gray-200 rounded shadow-sm w-full focus:ring-0 focus:border-gray-500" type="text" name="amount" >
                        </div>

                    </div>
                    <div class="flex flex-col px-6 py-5 bg-gray-50">
                        <p class="mb-2 font-semibold text-gray-700">Descripción</p>
                                <textarea v-model="dish.description" type="text" name="" placeholder="Escribe aquí..." class=" mb-5 bg-white border border-gray-200 rounded shadow-sm h-36 focus:ring-0 focus:border-gray-500" ></textarea>
                    </div>
                    <hr />
                        <div class="flex flex-row items-center justify-between p-5 bg-white border-t border-gray-200 rounded-bl-lg rounded-br-lg">
                            <p @click="changeStateModal" class="font-semibold text-blue-500 ml-5 cursor-pointer">Cancelar</p>
                            <button  @click="updateDish(dish)" class="px-4 py-2 text-white font-semibold bg-yellow-600 rounded w-28">
                                Guardar
                            </button>
                        </div>
                </div>
            </modal>
            <!-- END MODAL MODIFY -->

            <modal-alert :data="dato" @changeStatusDelete="borrado = $event" :showDele="showDele" @changeModalStatus="showDele = $event" />

        </main>
        </template>
    </app-layout>
</template>

<script>
/**
 * write a component's description
 */

    import AppLayout from '@/Layouts/AppLayout'
    import NavSide from '@/Components/NavSide'
    import Stats from '@/Components/Stats'
    import TicketsResume from '@/Components/TicketsResume'
    import HeadTab from '@/Components/HeadTab'
    import TableDish from '@/Components/TableDish'
    import NavTop from '@/Components/NavTop'
    import Modal from '@/Jetstream/Modal'
    import ModalAlert from '@/Components/ModalAlert'
    import HeaderNav from '@/Components/HeaderNav'

    export default {
        components: {
            AppLayout,
            NavSide,
            TicketsResume,
            Stats,
            HeadTab,
            TableDish,
            NavTop,
            Modal,
            ModalAlert,
            HeaderNav
        },

        /**
         * @description
         * @returns {any}
         */
        data(){
            return {

                deleteDish: '',
                editDish: '',
                dish:[],
                showModalDish: false,
                showModalDishMod: false,
                showDele: false,
                dato: [],
                borrado: false,
                change: false,
                dishID:'',
                type: 'Plato'


            }

        },
        methods: {

            /**
             * @description Send data specified dish
             * @param {dish} id
             */
            async sendData(id){

                await axios.get('/dish/'+id).
                    then((response) =>{

                        this.dato = response.data
                    })
            },

            /**
             * @description Get the resource specified dish
             * @param {dish} id
             */
            async getDish(id){

                await axios.get('/dish/'+id).
                    then((response) =>{
                        this.dish = response.data
                        console.log(this.dish)
                        this.dishID = ''

                    })
            },

            /**
             * @description Change Status modal
             */
            changeStateModal(){

                this.showModalDish = !this.showModalDish
            },

            /**
             * @description Change Status modal
             */
            changeStateModalMod(){

                this.showModalDishMod = !this.showModalDishMod
            },

            /**
             * @description Send data for create new resource dish
             * @param {dish} dish
             */
            async createDish(dish){

                const formData = new FormData()
                formData.append('name', dish.name)
                formData.append('price', dish.price)
                formData.append('description', dish.description)
                formData.append('cat_id', dish.cat_id)


                await axios.post('/create-dish', formData).
                    then((response) =>{

                        this.change = true
                        this.showModalDish = !this.showModalDish
                        this.resetDataUp()


                    }).catch(error =>{

                        console.log(error)
                    })
            },

            /**
             * @description Send data for update specified resource dish
             * @param {dish} data
             */
            async updateDish(data){
                await axios.put('/update-dish/'+ data.id, this.dish).
                    then((response) =>{

                        this.change = true
                        this.showModalDishMod = !this.showModalDishMod
                        this.resetDataUp()

                    }).catch(error =>{

                        console.log(error)
                    })
            },

            /**
             * @description reset data
             */
            resetDataUp(){

                this.dish = []

            },

        },

        watch: {

            deleteDish: function (val){
                if(this.deleteDish != ''){

                    this.sendData(this.deleteDish)
                }
            },


            /**
             * @description reset modal
             * @param {any} val
             */
            borrado: function(val){
                if(this.borrado == true){

                    this.dato = []
                    this.showDele = false

                }
            },

            /**
             * @description watch for modify
             * @param {any} val
             */
            dishID: function(val){
                if(this.dishID != ''){

                    this.getDish(val)
                }
            },


        }
    }
</script>
