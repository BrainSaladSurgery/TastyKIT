<template>
  <app-layout>
    <template #navSide>
        <div id="navSide">
            <nav-side />
        </div>
        <div style="width: 80.5px; heigth: auto;"></div>
    </template>
    <template #content>
    <header-nav :pag="'Productos'" :classe="'w-full flex-none flex h-16 bg-gray-100 border-t px-4 items-center justify-between'"/>

    <nav-top @changeModal="showModalMod = $event" @changeModalCreate="showModal = $event" @modalData="productID = $event" :tipo="type"/>

    <main class="flex-grow flex min-h-0 border-t">

        <section aria-label="main content" class="flex  flex-col flex-auto border-l bg-gray-100">

            <div v-if="productos.length > 0" id="grid" >
                    <!-- Column -->
                    <div  v-for="(product,index) in productos" @key="index" class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3 ">

                        <!-- Article -->
                        <card-data @changeModal="showModalMod = $event" @modalData="productID = $event" :data="product" :categories="allCategories" @emitDelete="deletePro = $event" class="bg-white"/>
                <!-- END Article -->
                    </div>

                </div>
                <!-- START MODAL CREATE -->
                    <modal class="flex flex-col w-11/12 sm:w-5/6 lg:w-1/2 max-w-2xl mx-auto rounded-lg border border-gray-300 shadow-xl" :show="showModal" @close="changeStateModal">
                        <div>
                            <div class="flex flex-row justify-between p-6 bg-white border-b border-gray-200 rounded-tl-lg rounded-tr-lg">
                                <p class="font-semibold text-gray-800">Alta Producto</p>
                                <svg  @click="changeStateModal" class="w-6 h-6 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" ></path></svg>
                            </div>
                            <div class="flex flex-col m-5 sm:flex-row items-center mb-5 sm:space-x-5">
                                <div class="w-full sm:w-3/5">
                                    <p class="mb-2 font-semibold text-gray-700">Nombre del producto</p>
                                    <input v-model="productName" class="bg-white border border-gray-200 rounded shadow-sm w-full focus:ring-0 focus:border-gray-500 " type="text" name="name">
                                </div>
                                <div class="w-full sm:w-1/3 mt-2 sm:mt-0">
                                    <p class="mb-2 font-semibold text-gray-700">Cantidad</p>
                                    <input  v-model="productAmount" class=" bg-white border border-gray-200 rounded shadow-sm  focus:ring-0 focus:border-gray-500" type="text" name="amount" >
                                </div>
                                <div class="w-full sm:w-1/3 mt-2 sm:mt-0">
                                    <p class="mb-2 font-semibold text-gray-700">Categoría</p>
                                    <select v-model="productCategory" type="text" name="categoryCreate" class="w-full p-2 bg-white border border-gray-200 rounded shadow-sm appearance-none focus:ring-0 focus:border-gray-500">
                                        <option value="2">Vegetales</option>
                                        <option value="3">Carnes</option>
                                        <option value="4">Frutas</option>
                                        <option value="5">Pescados</option>
                                        <option value="1">Otros</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex flex-col px-6 py-5 bg-gray-50">
                                <p class="mb-2 font-semibold text-gray-700">Descripción</p>
                                <textarea v-model="descriptionProduct" type="text" name="" placeholder="Escribe aquí..." class="p-5 mb-5 bg-white border border-gray-200 rounded shadow-sm h-36 focus:ring-0 focus:border-gray-500" id=""></textarea>

                                <hr />

                                <div class="flex items-center mt-5 mb-3 space-x-4">
                                    <input v-model="imageDefault" class="inline-flex rounded-full" type="checkbox" id="check1" name="check1" />
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
                                    <button  @click="createProduct()" class="px-4 py-2 text-white font-semibold bg-yellow-600 rounded w-28">
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
                                <p class="font-semibold text-gray-800">Modificar Producto</p>
                                <svg  @click="changeStateModalMod" class="w-6 h-6 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" ></path></svg>
                            </div>
                            <div class="flex flex-col m-5 sm:flex-row items-center mb-5 sm:space-x-5">
                                <div class="w-full sm:w-3/5">
                                    <p class="mb-2 font-semibold text-gray-700">Nombre del producto</p>
                                    <input v-model="produc.name" class="bg-white border border-gray-200 rounded shadow-sm w-full focus:ring-0 focus:border-gray-500 " type="text" name="name" required >
                                </div>
                                <div class="w-full sm:w-1/3 mt-2 sm:mt-0">
                                    <p class="mb-2 font-semibold text-gray-700">Cantidad</p>
                                    <input  v-model="produc.amount" class=" bg-white border border-gray-200 rounded shadow-sm  focus:ring-0 focus:border-gray-500" type="text" name="amount" required  >
                                </div>
                                <div class="w-full sm:w-1/3 mt-2 sm:mt-0">
                                    <p class="mb-2 font-semibold text-gray-700">Categoría</p>
                                <select v-model="produc.categories_id" type="text" name="category" class="w-full p-2 bg-white border border-gray-200 rounded shadow-sm appearance-none focus:ring-0 focus:border-gray-500" required >
                                        <option value="2">Vegetales</option>
                                        <option value="3">Carnes</option>
                                        <option value="4">Frutas</option>
                                        <option value="5">Pescados</option>
                                        <option value="1">Otros</option>
                                </select>
                                </div>
                            </div>
                            <div class="flex flex-col px-6 py-5 bg-gray-50">
                                <p class="mb-2 font-semibold text-gray-700">Descripción</p>
                                <textarea v-model="produc.description" type="text" name="" placeholder="Escribe aquí..." class="p-5 mb-5 bg-white border border-gray-200 rounded shadow-sm h-36 focus:ring-0 focus:border-gray-500" ></textarea>

                                <hr />

                                <div class="flex items-center mt-5 mb-3 space-x-4">
                                    <input v-model="imageDefault" class="inline-flex rounded-full" type="checkbox" id="check1" name="check1" />
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
                                            <input id="image" @change="filechange"  class="inputFile" type="file" name="image" accept="image/gif,image/jpeg,image/jpg,image/png" style="display: none;">
                                            <p  class="ml-2 text-gray-500" for="image">Pulsar para cambiar imagen</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="flex flex-row items-center justify-between p-5 bg-white border-t border-gray-200 rounded-bl-lg rounded-br-lg">
                                    <p class="font-semibold text-blue-500 ml-5">Cancelar</p>
                                    <button  @click="updateProduct(produc.id)" class="px-4 py-2 text-white font-semibold bg-yellow-600 rounded w-28">
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
    import AppLayout from '@/Layouts/AppLayout'
    import NavTop from '@/Components/NavTop'
    import NavSide from '@/Components/NavSide'
    import HeaderNav from '@/Components/HeaderNav'
    import CardData from '@/Components/CardData'
    import Modal from '@/Jetstream/Modal'


    export default {
        data(){
            return{
                showModal: false,
                showModalMod: false,
                image: null,
                productName:'',
                productAmount: '',
                descriptionProduct: '',
                imageDefault: false,
                url: null,
                productCategory: 1,
                productos : [],
                productID: '',
                produc: [],
                change: false,
                deletePro: false,
                error: ''

            }
        },
        props: ['allCategories','type'],
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
            changeStateModal(){

                this.showModal = !this.showModal

            },

            changeStateModalMod(){

                this.showModalMod = !this.showModalMod

            },

            //Take id image
            selectImage(){

                document.getElementById('image').click()
            },
            //create file in url
            filechange(e){

                let file = e.target.files[0]
                this.image = file
                this.url = URL.createObjectURL(file)
            },
            // Method create Product
            async createProduct(){

                const formData = new FormData()
                formData.append('image', this.image)
                formData.append('name', this.productName)
                formData.append('amount', this.productAmount)
                formData.append('description', this.descriptionProduct)
                formData.append('imageDefault', this.imageDefault)
                formData.append('categoryCreate', this.productCategory)

                await axios.post('/create-product',formData,{
                    headers:{
                        'Content-Type':'multipart/form-data'
                    }
                }).
                    then((response) => {

                        this.productos.unshift(response.data)
                        this.resetData()

                    }).catch(error =>{

                        console.log(error)
                    })
            },

            resetData(){

                this.showModal = false
                this.image = null
                this.productName =''
                this.productAmount = ''
                this.descriptionProduct = ''
                this.imageDefault = false
                this.url = null
                this.productCategory = ''
            },

            async getProducts(){

                await axios.get('/products-list')
                .then(response =>{

                    this.productos = response.data
                })
            },

            async updateProduct(idProduct){

                var url = '/update-product/' + idProduct

                await axios.put(url ,this.produc).
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

            resetDataUp(){

                this.showModalMod = false
                this.produc = []

            },

            async getProduct(id){

                await axios.get('/product/'+id).
                    then((response) =>{
                        this.produc = response.data
                    })
            }
        },


        mounted: function() {

            this.getProducts()

        },


        watch: {
            productID: function(val){
                this.getProduct(val)
            },
            change: function(val){

                if(val == true){
                    this.getProducts()
                }
            },
            deletePro: function(val){

                if(val == true){
                    this.getProducts()
                }
            }
        }
    }
</script>


