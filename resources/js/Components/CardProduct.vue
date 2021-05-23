<template>
    <!-- Start CARD -->
   <article  class="overflow-hidden rounded-lg shadow-lg w-80 h-120 ">
        <div  @click="changeStateModalModify(); getProducto(producto.description,producto.name,producto.amount,producto.image, producto.product_categories_id)" class="w-full h-60 flex justify-center hover:bg-gray-500 hover:object-cover">
            <img class="object-contain" :src="producto.image" alt="imagen del producto">
        </div>
        <div class="flex-wrap mr-3">
            <header class="flex items-center justify-center p-2 ml-4 ">
                <div class="text-gray-600 font-bold text-3x1">{{ producto.name }}</div>
                <div class="flex items-center justify-end">
                    <label for="cantidad" class="ml-10">Cantidad:</label>
                    <input name="cantidad" :value="producto.amount" class=" ml-5 mb-1 block w-14  h-5 bg-grey-lighter text-center text-gray-600 font-bold border-t-0 border-r-0 border-l-0 border-b-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-500" type="text" >
                </div>
            </header>

            <footer class="flex items-center justify-center w-full  p-2 ">
                <button @click="changeModal" class="border-2 border-transparent bg-red-500 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-red-500 hover:bg-transparent hover:text-red-500">
                    Borrar
                </button>
                <button class="border-2 border-transparent bg-yellow-500 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-yellow-500 hover:bg-transparent hover:text-yellow-500">
                    <svg height="48" viewBox="0 0 48 48" width="48" class="w-8 h-8 fill-current hover:text-gray-300" xmlns="http://www.w3.org/2000/svg"><path d="M14 36c-2.21 0-3.98 1.79-3.98 4s1.77 4 3.98 4 4-1.79 4-4-1.79-4-4-4zM2 4v4h4l7.19 15.17-2.7 4.9c-.31.58-.49 1.23-.49 1.93 0 2.21 1.79 4 4 4h24v-4H14.85c-.28 0-.5-.22-.5-.5 0-.09.02-.17.06-.24L16.2 26h14.9c1.5 0 2.81-.83 3.5-2.06l7.15-12.98c.16-.28.25-.61.25-.96 0-1.11-.9-2-2-2H10.43l-1.9-4H2zm32 32c-2.21 0-3.98 1.79-3.98 4s1.77 4 3.98 4 4-1.79 4-4-1.79-4-4-4z"/><path d="M0 0h48v48H0z" fill="none"/></svg>
                </button>
                <button @click="changeStateModalModify(); getProducto(producto.description,producto.name,producto.amount,producto.image, producto.product_categories_id)" class="border-2 border-transparent bg-green-400 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-green-500 hover:bg-transparent hover:text-green-500">
                    Editar
                </button>
            </footer>
        </div>
    </article>
    <!-- END CARD -->

    <!-- START MODAL MODIFY -->
    <modal class="flex flex-col w-11/12 sm:w-5/6 lg:w-1/2 max-w-2xl mx-auto rounded-lg border border-gray-300 shadow-xl" :show="showModalModify" @close="changeStateModalModify()">
        <div>
            <div class="flex flex-row justify-between p-6 bg-white border-b border-gray-200 rounded-tl-lg rounded-tr-lg">
                <p class="font-semibold text-gray-800">Modificación del Producto</p>
                <svg  @click="changeStateModalModify()" class="w-6 h-6 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" ></path></svg>
            </div>
            <div class="flex flex-col m-5 sm:flex-row items-center mb-5 sm:space-x-5">
                <div class="w-full sm:w-3/5">
                    <p class="mb-2 font-semibold text-gray-700">Nombre del producto</p>
                    <input class="bg-white border border-gray-200 rounded shadow-sm w-full focus:ring-0 focus:border-gray-500 " type="text" name="name"  v-model="prod.name">
                </div>
                <div class="w-full sm:w-1/3 mt-2 sm:mt-0">
                    <p class="mb-2 font-semibold text-gray-700">Cantidad</p>
                    <input class=" bg-white border border-gray-200 rounded shadow-sm focus:ring-0 focus:border-gray-500" type="text" name="amount" id="amount"
                    v-model="prod.amount" >
                </div>
                <div class="w-full sm:w-1/3 mt-2 sm:mt-0">
                    <p class="mb-2 font-semibold text-gray-700">Categoría</p>
                    <select  v-model="prod.product_categories_id" id="category" type="text" name="productCategory" class="w-full p-2 bg-white border border-gray-200 rounded shadow-sm appearance-none focus:ring-0 focus:border-gray-500">
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
                <textarea id="description" type="text" name="description" placeholder="Escribe aquí..." class="p-5 mb-5 bg-white border border-gray-200 rounded shadow-sm h-36 focus:ring-0 focus:border-gray-500" v-model="prod.description"></textarea>

                <hr />

                <div class="flex items-center mt-5 mb-3 space-x-4">
                    <input  class="inline-flex rounded-full" type="checkbox" id="imageDefault" name="imageDefault" />
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
                            <input id="image" @change="filechange" class="inputFile" type="file" name="productImage" accept="image/gif,image/jpeg,image/jpg,image/png" style="display: none;">
                            <p  class="ml-2 text-gray-500" for="image">Pulsar para cambiar imagen</p>
                        </div>
                    </div>
                </div>
            </div>
                <div class="flex flex-row items-center justify-between p-5 bg-white border-t border-gray-200 rounded-bl-lg rounded-br-lg">
                    <p  @click="changeStateModal" class="font-semibold text-blue-500 ml-5">Cancelar</p>
                    <button type="button" @click="updateProduct(producto.id);changeStateModalModify()" class="px-4 py-2 text-white font-semibold bg-yellow-600 rounded w-28">
                        Guardar
                    </button>
                </div>
        </div>
    </modal>
    <!-- END MODAL MODIFY -->

    <!-- START MODAL DELETE -->
    <modal styles="width: 330px !important; margin-top: 10%" :show="showModalDelete" @close="changeModal">
        <div class="bg-white rounded-lg w-96">
            <div class="w-96 border-t-8 border-yellow-600 rounded-lg flex">
                <div class="w-full pt-9 pr-4 text-center">
                    <h3 class="font-bold text-yellow-700">¿Estas seguro de borrar el producto?</h3>
                    <p class="py-4 text-sm text-gray-400">El producto con nombre <b>{{ producto.name }}</b> y cantidad <b>{{ producto.amount }}</b></p>
                </div>
            </div>
            <div class="p-4 flex space-x-4">
                <button @click="changeModal()" class="w-1/2 px-4 py-3 text-center bg-gray-100 text-gray-400 hover:bg-gray-200 hover:text-black font-bold rounded-lg text-sm">Cancelar</button>
                <button @click="deleteProduct(producto.id); changeModal()" class="w-1/2 px-4 py-3 text-center text-pink-100 bg-yellow-600 rounded-lg hover:bg-yellow-700 hover:text-white font-bold text-sm">Borrar</button>
            </div>
        </div>
    </modal>
    <!-- END MODAL DELETE -->
</template>

<script>
    import Modal from '@/Jetstream/Modal'

    export default {
        components: {
            Modal

        },
        data(){
            return {
                showModal: false,
                showModalDelete: false,
                showModalModify: false,
                prod: {
                    image: null,
                    name:'',
                    amount: '',
                    description: '',
                    imageDefault: false,
                    product_categories_id: ''

                }

            }
        },
        props: ['producto'],
        methods: {
            changeModal(){

                this.showModalDelete = !this.showModalDelete
            },

            changeStateModal(){

                this.showModal = !this.showModal

            },

            changeStateModalModify(){

                this.showModalModify = !this.showModalModify

            },

            getProducto(description,name,amount,image, category){

                this.prod.description = description
                this.prod.name = name
                this.prod.amount = amount
                this.prod.image = image
                this.prod.product_categories_id = category
            },

            selectImage(){

                document.getElementById('image').click()
            },

            filechange(e){

                let file = e.target.files[0]
                this.image = file
                this.url = URL.createObjectURL(file)
            },


            async updateProduct(idProduct){

                var url = '/update-product/' + idProduct

                await axios.put(url ,this.prod).
                    then((response) => {

                        console.log(response)
                        this.resetData()

                    }).catch(error =>{

                        console.log(error)

                    })
            },

            resetData(){

                this.showModal = false
                this.prod.image = null
                this.prod.name = ''
                this.prod.amount = ''
                this.prod.description = ''
                this.prod.imageDefault = false

            },

            async deleteProduct(id){

                await axios.delete('/delete-product/'+ id).
                    then((response) => {

                        console.log(response)

                    }).catch(error =>{

                        console.log(error)

                    })
            }

        }

    }
</script>

