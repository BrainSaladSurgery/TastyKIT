<template>
  <app-layout>
    <template #navSide>
        <div id="navSide">
            <nav-side />
        </div>
        <div style="width: 80.5px; heigth: auto;"></div>
    </template>
    <template #content>

    <header-nav :pag="'Bebidas'" :classe="'w-full flex-none flex h-16 bg-gray-100 border-t px-4 items-center justify-between'"/>

    <nav-top @changeModal="showModalMod = $event"  @changeModalCreate="showModal = $event" @modalData="drinkID = $event" :tipo="type" />


    <main class="flex-grow flex min-h-0 border-t">

        <section aria-label="main content" class="flex  flex-col flex-auto border-l bg-gray-100">

            <div v-if="bebidas.length > 0" id="grid" >
                    <!-- Column -->
                    <div  v-for="(bebida,index) in bebidas" @key="index" class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3 ">

                        <!-- Article -->
                        <card-data @changeModal="showModalMod = $event" @modalData="drinkID = $event" :data="bebida" :categories="allCategories" @emitDelete="deletePro = $event" class="bg-white"/>
                <!-- END Article -->
                    </div>

                </div>
                <!-- START MODAL CREATE -->
                    <modal class="flex flex-col w-11/12 sm:w-5/6 lg:w-1/2 max-w-2xl mx-auto rounded-lg border border-gray-300 shadow-xl" :show="showModal" @close="changeStateModal">
                        <div>
                            <div class="flex flex-row justify-between p-6 bg-white border-b border-gray-200 rounded-tl-lg rounded-tr-lg">
                                <p class="font-semibold text-gray-800">Alta Bebida</p>
                                <svg  @click="changeStateModal" class="w-6 h-6 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" ></path></svg>
                            </div>
                            <div class="w-full justify-around flex text-start mt-5 pb-5">
                                <div class="flex-col w-1/3 col-1">
                                    <p class="mb-2 font-semibold text-gray-700">Nombre de la bebida</p>
                                    <input v-model="drinkName" class="bg-white border border-gray-200 rounded shadow-sm w-full focus:ring-0 focus:border-gray-500 " type="text" name="name" required >
                                </div>
                                <div class="flex-col  col-span-1 "  style="width:10%">
                                    <p class="mb-2 font-semibold text-gray-700">Cantidad</p>
                                    <input  v-model="drinkAmount" class=" w-full bg-white border border-gray-200 rounded shadow-sm  focus:ring-0 focus:border-gray-500" type="text" name="amount" required  >
                                </div>
                                <div class="flex-col  col-span-1 " style="width:10%">
                                    <p class="mb-2 font-semibold text-gray-700">Precio</p>
                                    <input  v-model="drinkPrice" class=" w-full bg-white border border-gray-200 rounded shadow-sm  focus:ring-0 focus:border-gray-500" type="text" name="amount" required  >
                                </div>
                                <div class="flex-col w-1/4 col-span-1 ">
                                    <p class="mb-2 font-semibold text-gray-700">Categoría</p>
                                <select v-model="categoryCreate" type="text" name="category" class="w-full p-2 cursor-pointer bg-white border border-gray-200 rounded shadow-sm appearance-none focus:ring-0 focus:border-gray-500" required >
                                    <option value="2">Refrescos</option>
                                    <option value="3">Con Alcohol</option>
                                    <option value="4">Cocteles</option>
                                    <option value="1">Otros</option>
                                </select>
                                </div>
                            </div>
                            <div class="flex flex-col px-6 py-5 bg-gray-50">
                                <p class="mb-2 font-semibold text-gray-700">Descripción</p>
                                <textarea v-model="descriptionDrink" type="text" name="" placeholder="Escribe aquí..." class="p-5 mb-5 bg-white border border-gray-200 rounded shadow-sm h-36 focus:ring-0 focus:border-gray-500" ></textarea>

                                <hr />

                                <div class="flex items-center mt-5 mb-3 space-x-4">
                                    <input v-model="imageDefault" class="inline-flex rounded-full cursor-pointer" type="checkbox" id="check1" name="check1" />
                                    <label class="inline-flex font-semibold text-gray-400" for="check1">Imagen por defecto</label>
                                </div>
                                <div class="flex flex-row items-center justify-between p-5 bg-white border border-gray-200 rounded shadow-sm">
                                    <div class="flex flex-row items-center">
                                        <button @click="selectImage" class="outline-none focus:outline-none inline-flex items-center rounded-full cursor-pointer bg-blue-500 p-2">
                                            <svg class="text-white h-7 w-7 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </button>
                                        <div class="flex flex-col">
                                            <input id="image" @change="filechange" class="inputFile" type="file" name="image" accept="image/gif,image/jpeg,image/jpg,image/png" style="display: none;">
                                            <p v-if="image != null" class="ml-2 text-gray-500" for="image">Imagen seleccionada</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="flex flex-row items-center justify-between p-5 bg-white border-t border-gray-200 rounded-bl-lg rounded-br-lg">
                                    <p class="font-semibold text-blue-500 ml-5">Cancelar</p>
                                    <button  @click="createDrink()" class="px-4 py-2 text-white font-semibold bg-yellow-600 rounded w-28">
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
                                <p class="font-semibold text-gray-800">Modificar Bebida</p>
                                <svg  @click="changeStateModalMod" class="w-6 h-6 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" ></path></svg>
                            </div>
                            <div class="w-full justify-around flex text-start mt-5 pb-5">
                                <div class="flex-col w-1/3 col-1">
                                    <p class="mb-2 font-semibold text-gray-700">Nombre de la bebida</p>
                                    <input v-model="drink.name" class="bg-white border border-gray-200 rounded shadow-sm w-full focus:ring-0 focus:border-gray-500 " type="text" name="name" required >
                                </div>
                                <div class="flex-col  col-span-1 "  style="width:10%">
                                    <p class="mb-2 font-semibold text-gray-700">Cantidad</p>
                                    <input  v-model="drink.amount" class=" w-full bg-white border border-gray-200 rounded shadow-sm  focus:ring-0 focus:border-gray-500" type="text" name="amount" required  >
                                </div>
                                <div class="flex-col  col-span-1 " style="width:10%">
                                    <p class="mb-2 font-semibold text-gray-700">Precio</p>
                                    <input  v-model="drink.price" class=" w-full bg-white border border-gray-200 rounded shadow-sm  focus:ring-0 focus:border-gray-500" type="text" name="amount" required  >
                                </div>
                                <div class="flex-col w-1/4 col-span-1 ">
                                    <p class="mb-2 font-semibold text-gray-700">Categoría</p>
                                <select v-model="drink.categories_id" type="text" name="category" class="w-full p-2 cursor-pointer bg-white border border-gray-200 rounded shadow-sm appearance-none focus:ring-0 focus:border-gray-500" required >
                                    <option value="2">Refrescos</option>
                                    <option value="3">Con Alcohol</option>
                                    <option value="4">Cocteles</option>
                                    <option value="1">Otros</option>
                                </select>
                                </div>
                            </div>
                            <div class="flex flex-col px-6 py-5 bg-gray-50">
                                <p class="mb-2 font-semibold text-gray-700">Descripción</p>
                                <textarea v-model="drink.description" type="text" name="" placeholder="Escribe aquí..." class="p-5 mb-5 bg-white border border-gray-200 rounded shadow-sm h-36 focus:ring-0 focus:border-gray-500" ></textarea>

                                <hr />

                            </div>
                                <div class="flex flex-row items-center justify-between p-5 bg-white border-t border-gray-200 rounded-bl-lg rounded-br-lg">
                                    <p class="font-semibold text-blue-500 ml-5">Cancelar</p>
                                    <button  @click="updateDrink(drink.id)" class="px-4 py-2 text-white font-semibold bg-yellow-600 rounded w-28">
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
    import CardData from '@/Components/CardData'
    import Modal from '@/Jetstream/Modal'
    import HeaderNav from '@/Components/HeaderNav'


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
                image: null,
                drinkName:'',
                drinkAmount: '',
                drinkPrice: '',
                descriptionDrink: '',
                imageDefault: false,
                url: null,
                categoryCreate: 1,
                bebidas : [],
                drinkID: '',
                drink: [],
                deletePro: false,
                error: ''

            }
        },
        props:['allCategories', 'type'],
        components: {
            AppLayout,
            NavTop,
            NavSide,
            CardData,
            Modal,
            HeaderNav

        },
        methods: {
            // Method change state modal
            /**
             * @description Change status modal
             */
            changeStateModal(){

                this.showModal = !this.showModal

            },

            /**
             * @description Change status modal
             */
            changeStateModalMod(){

                this.showModalMod = !this.showModalMod

            },

            /**
             * @description Take id image
             */
            selectImage(){

                document.getElementById('image').click()
            },

            /**
             * @description create file in url
             * @param {any} e
             */
            filechange(e){

                let file = e.target.files[0]
                this.image = file
                this.url = URL.createObjectURL(file)
            },

            /**
             * @description send data for create a new resource drink
             */
            async createDrink(){

                const formData = new FormData()
                formData.append('image', this.image)
                formData.append('name', this.drinkName)
                formData.append('amount', this.drinkAmount)
                formData.append('price', this.drinkPrice)
                formData.append('description', this.descriptionDrink)
                formData.append('imageDefault', this.imageDefault)
                formData.append('categoryCreate', this.categoryCreate)

                await axios.post('/create-drink',formData,{
                    headers:{
                        'Content-Type':'multipart/form-data'
                    }
                }).
                    then((response) => {

                        this.getDrinks()
                        this.resetData()

                    }).catch(error =>{

                        console.log(error)
                    })
            },

            /**
             * @description reset data
             */
            resetData(){

                this.showModal = false
                this.image = null
                this.drinkName =''
                this.drinkAmount = ''
                this.drinkPrice = ''
                this.descriptionDrink = ''
                this.imageDefault = false
                this.url = null
                this.drinkCategory = ''
            },

            /**
             * @description display list all drinks
             */
            async getDrinks(){

                await axios.get('/drinks-list')
                .then(response =>{

                    this.bebidas = response.data
                })
            },

            /**
             * @description send data for update specified resources drink
             * @param {any} idDrink
             */
            async updateDrink(idDrink){

                var url = '/update-drink/' + idDrink

                await axios.put(url ,this.drink).
                    then((response) => {

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
             * @description reset data and get all drinks
             */
            resetDataUp(){

                this.showModalMod = false
                this.drink = []
                this.getDrinks()

            },

            /**
             * @description Return specified resource
             * @param {drink} id
             */
            async getDrink(id){

                await axios.get('/drink/'+id).
                    then((response) =>{
                        this.drink = []
                        this.drink = response.data
                        this.drinkID = ''
                        console.log(this.drink)
                    })
            }
        },

        mounted: function() {

            this.getDrinks()

        },


        watch: {

            drinkID: function(val){

                if(this.drinkID != ''){
                    this.getDrink(val)

                }

            },

            deletePro: function(val){

                if(val == true){
                    this.getDrinks()
                    this.deletePro = false
                }
            }
        }
    }
</script>

