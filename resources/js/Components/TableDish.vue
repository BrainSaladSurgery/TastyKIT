<template>
    <table aria-describedby="info-popup" aria-label="open tickets" class="border-t w-full min-h-0 h-full flex flex-col ">
        <thead class="flex w-full flex-col px-4">
            <tr class="border-b grid grid-cols-7 py-3">

                <th id="Categoria" class="font-semibold text-center w-full col-span-1 truncate hidden md:block">
                    Categoría
                </th>
                <th id="Nombre" class="font-semibold text-left w-full col-span-1 truncate">
                    Nombre
                </th>
                <th id="Descripción" class="font-semibold text-left w-full col-span-2 truncate hidden lg:block">
                    Descripción
                </th>
                <th id="Precio" class="font-semibold text-center w-full col-span-1 truncate">
                    Precio
                </th>

                <th id="Red" class="font-semibold text-left  w-full col-span-1  lg:col-span-2 truncate">

                </th>

                <th id="Green" class="font-semibold text-left w-full col-span-1 lg:col-span-2 truncate">

                </th>
            </tr>
        </thead>
        <tbody class="flex w-full flex-col flex-1 min-h-0  px-4">
            <!-- low -->
            <tr class="border-b flex">
                <th class="bg-gray-100 text-center items-center  py-2 flex-1" colspan="7">

                    <div @click="hiddenEn()" class="font-bold mr-1 flex justify-center text-green-400 cursor-pointer">
                        ENTRANTES
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </th>
            </tr>
            <div v-for="(dish,index) in dishes" @key="index" :class="ocultoEn">
                <tr  v-if="dish.category == 'Entrantes' "  role="row" class="hover:bg-blue-100 border-b grid grid-cols-7 gap-2 cursor-pointer items-center py-3">
                    <td  headers="Puesto" class=" text-center w-full col-span-1 hidden md:block">
                        <!-- <div class="ml-auto relative group"> -->
                        <span style="
                                padding: 2px 5px;
                                font-size: 0.7rem;
                                position: relative;
                                bottom: 2px;
                                " class="font-mono rounded-sm bg-green-400 text-white leading-none">E</span>
                            <!-- </div> -->
                        <span class="pr-2"></span>{{ dish.category }}
                    </td>
                    <td headers="Nombre" class="w-full col-span-1">
                        <div class="relative group w-full truncate">
                            {{ dish.name }}
                        </div>
                    </td>
                    <td headers="Descripción" class="w-full col-span-2 truncate hidden lg:block">
                        {{ dish.description }}
                    </td>
                    <td  headers="Precio" class="text-center w-full col-span-1 truncate ">
                        {{ dish.price }}€
                    </td>
                    <td  headers="delete" class="w-full col-span-1 sm:col-span-2 md:col-span-1">
                        <button @click="deleteDish(dish.id);showModalDel()" class="border-2 border-transparent bg-red-400 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-red-500 hover:bg-transparent hover:text-red-500">Borrar</button>
                    </td>
                    <td  headers="edit" class="w-full col-span-1 sm:col-span-2 md:col-span-1">
                        <button @click="editDish(dish.id); showModal()" class="border-2 border-transparent bg-green-400  py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-green-500 hover:bg-transparent hover:text-green-500">Editar</button>
                    </td>
                </tr>
            </div>

            <!-- Segundos -->
            <tr class="border-b flex">
                <th class="bg-gray-100 text-center py-2 flex-1" colspan="7">
                    <div @click="hiddenPi()" class="font-bold mr-1 flex justify-center text-green-400 cursor-pointer">
                        PRIMEROS
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </th>
            </tr>
            <div v-for="(dish,index) in dishes" @key="index" :class="ocultoPi">
                <tr  v-if="dish.category == 'Primeros' "  role="row" class="hover:bg-blue-100 border-b grid grid-cols-7 gap-2 cursor-pointer items-center py-3">
                    <td  headers="Puesto" class="w-full col-span-1 text-center hidden md:block">
                        <!-- <div class="ml-auto relative group"> -->
                        <span style="
                                padding: 2px 5px;
                                font-size: 0.7rem;
                                position: relative;
                                bottom: 2px;
                                " class="font-mono rounded-sm bg-blue-400 text-white leading-none">P</span>
                            <!-- </div> -->
                        <span class="pr-2"></span>{{ dish.category }}
                    </td>
                    <td headers="Nombre" class="w-full col-span-1">
                        <div class="relative group w-full truncate">
                            {{ dish.name }}
                        </div>
                    </td>
                    <td headers="Descripción" class="w-full col-span-2 truncate hidden lg:block">
                        {{ dish.description }}
                    </td>
                    <td  headers="Precio" class="w-full text-center col-span-1 truncate ">
                        {{ dish.price }}€
                    </td>
                    <td  headers="delete" class="w-full col-span-1 sm:col-span-2 md:col-span-1">
                        <button @click="deleteDish(dish.id);showModalDel()" class="border-2 border-transparent bg-red-400  py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-red-500 hover:bg-transparent hover:text-red-500">Borrar</button>
                    </td>
                    <td  headers="edit" class="w-full col-span-1 sm:col-span-2 md:col-span-1">
                        <button @click="editDish(dish.id); showModal()" class="border-2 border-transparent bg-green-400  py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-green-500 hover:bg-transparent hover:text-green-500">Editar</button>
                    </td>
                </tr>
            </div>

            <!-- SEGUNDOS -->
            <tr class="border-b flex">
                <th class="bg-gray-100 text-center py-2 flex-1" colspan="7">
                    <div @click="hiddenSe()" class="font-bold mr-1 flex justify-center text-green-400 cursor-pointer">
                        SEGUNDOS
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </th>
            </tr>
            <div v-for="(dish,index) in dishes" @key="index" :class="ocultoSe">
                <tr  v-if="dish.category == 'Segundos' "  role="row" class="hover:bg-blue-100 border-b grid grid-cols-7 gap-2 cursor-pointer items-center py-3">
                    <td  headers="Puesto" class="w-full col-span-1 text-center hidden md:block">
                        <!-- <div class="ml-auto relative group"> -->
                        <span style="
                                padding: 2px 5px;
                                font-size: 0.7rem;
                                position: relative;
                                bottom: 2px;
                                " class="font-mono rounded-sm bg-red-400 text-white leading-none">S</span>
                            <!-- </div> -->
                        <span class="pr-2"></span>{{ dish.category }}
                    </td>
                    <td headers="Nombre" class="w-full col-span-1">
                        <div class="relative group w-full truncate">
                            {{ dish.name }}
                        </div>
                    </td>
                    <td headers="Descripción" class="w-full col-span-2 truncate hidden lg:block">
                        {{ dish.description }}
                    </td>
                    <td  headers="Precio" class="w-full text-center col-span-1 truncate ">
                        {{ dish.price }}€
                    </td>
                    <td  headers="delete" class="w-full col-span-1 sm:col-span-2 md:col-span-1">
                        <button @click="deleteDish(dish.id);showModalDel()" class="border-2 border-transparent bg-red-400  py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-red-500 hover:bg-transparent hover:text-red-500">Borrar</button>
                    </td>
                    <td  headers="edit" class="w-full col-span-1 sm:col-span-2 md:col-span-1">
                        <button @click="editDish(dish.id); showModal()" class="border-2 border-transparent bg-green-400  py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-green-500 hover:bg-transparent hover:text-green-500">Editar</button>
                    </td>
                </tr>
            </div>

            <!-- POSTRES -->
            <tr class="border-b flex">
                <th class="bg-gray-100 text-center py-2 flex-1" colspan="7">
                    <div @click="hiddenPo()" class="font-bold mr-1 flex justify-center text-green-400 cursor-pointer">
                        POSTRES
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </th>
            </tr>
            <div v-for="(dish,index) in dishes" @key="index" :class="ocultoPo">
                <tr  v-if="dish.category == 'Postres' "  role="row" class="hover:bg-blue-100 border-b grid grid-cols-7 cursor-pointer items-center py-3">
                    <td  headers="Puesto" class="w-full col-span-1 text-center hidden md:block">

                        <span style="
                                padding: 2px 5px;
                                font-size: 0.7rem;
                                position: relative;
                                bottom: 2px;
                                " class="font-mono rounded-sm bg-pink-400 text-white leading-none">P</span>

                        <span class="pr-2"></span>{{ dish.category }}
                    </td>
                    <td headers="Nombre" class="w-full col-span-1">
                        <div class="relative group w-full truncate">
                            {{ dish.name }}
                        </div>
                    </td>
                    <td headers="Descripción" class="w-full col-span-2 truncate hidden lg:block">
                        {{ dish.description }}
                    </td>
                    <td  headers="Precio" class="w-full col-span-1 truncate text-center">
                        {{ dish.price }}€
                    </td>
                    <td  headers="delete" class="w-full col-span-1 sm:col-span-2 md:col-span-1 ">
                        <button @click="deleteDish(dish.id);showModalDel()" class="border-2 border-transparent bg-red-400 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-red-500 hover:bg-transparent hover:text-red-500">Borrar</button>
                    </td>
                    <td  headers="edit" class="w-full col-span-1 sm:col-span-2 md:col-span-1">
                        <button @click="editDish(dish.id); showModal()" class="border-2 border-transparent bg-green-400  py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-green-500 hover:bg-transparent hover:text-green-500">Editar</button>
                    </td>
                </tr>
            </div>

            <!-- OTROS -->
            <tr class="border-b flex">
                <th class="bg-gray-100 text-center py-2 flex-1" colspan="7">
                    <div @click="hiddenOt()" class="font-bold mr-1 flex justify-center text-green-400 cursor-pointer">
                        OTROS
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </th>
            </tr>
            <div v-for="(dish,index) in dishes" @key="index" :class="ocultoOt">
                <tr  v-if="dish.category == 'Otros'"  role="row" class="hover:bg-blue-100 border-b grid grid-cols-7 cursor-pointer items-center py-3">
                    <td  headers="Puesto" class="w-full col-span-1 text-center hidden md:block">
                        <!-- <div class="ml-auto relative group"> -->
                        <span style="
                                padding: 2px 5px;
                                font-size: 0.7rem;
                                position: relative;
                                bottom: 2px;
                                " class="font-mono rounded-sm bg-purple-400 text-white leading-none">O</span>
                            <!-- </div> -->
                        <span class="pr-2"></span>{{ dish.category }}
                    </td>
                    <td headers="Nombre" class="w-full col-span-1">
                        <div class="relative group w-full truncate">
                            {{ dish.name }}
                        </div>
                    </td>
                    <td headers="Descripción" class="w-full col-span-2 truncate hidden lg:block">
                        {{ dish.description }}
                    </td>
                    <td  headers="Precio" class="w-full col-span-1 text-center truncate ">
                        {{ dish.price }}€
                    </td>
                    <td  headers="delete" class="w-full col-span-1 sm:col-span-2 md:col-span-1">
                        <button @click="deleteDish(dish.id);showModalDel()" class="border-2 border-transparent bg-red-400  py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-red-500 hover:bg-transparent hover:text-red-500">Borrar</button>
                    </td>
                    <td  headers="edit" class="w-full col-span-1 sm:col-span-2 md:col-span-1">
                        <button @click="editDish(dish.id); showModal()" class="border-2 border-transparent bg-green-400  py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-green-500 hover:bg-transparent hover:text-green-500">Editar</button>
                    </td>
                </tr>
            </div>
        </tbody>
    </table>
</template>

<script>
    export default {

        data(){
            return{
                dishes: [],
                ocultoEn: '',
                ocultoPi: '',
                ocultoSe: '',
                ocultoPo: '',
                ocultoOt: ''
            }
        },
        props:['dishDelete','cupdate'],
        methods: {

            async getDishes(){

                await axios.get('/dishes-list')
                    .then(response =>{

                        this.dishes = response.data

                    })
            },

            hiddenEn(){

                if(this.ocultoEn == ''){

                    this.ocultoEn = 'hidden'

                }else{

                    this.ocultoEn = ''
                }
            },

            hiddenPi(){

                if(this.ocultoPi == ''){

                    this.ocultoPi = 'hidden'

                }else{

                    this.ocultoPi = ''
                }
            },

            hiddenSe(){

                if(this.ocultoSe == ''){

                    this.ocultoSe = 'hidden'

                }else{

                    this.ocultoSe = ''
                }
            },

            hiddenPo(){

                if(this.ocultoPo == ''){

                    this.ocultoPo = 'hidden'

                }else{

                    this.ocultoPo = ''
                }
            },

            hiddenOt(){

                if(this.ocultoOt == ''){

                    this.ocultoOt = 'hidden'

                }else{

                    this.ocultoOt = ''
                }
            },

            editDish(id){

                this.$emit('editDish', id)
            },

            deleteDish(id){

                this.$emit('deleteDish', id)
            },
            showModal(){

                this.$emit('showModal', true)
            },
            showModalDel(){

                this.$emit('ModalDelete', true)
            }


        },

        watch: {
            dishDelete: function(val){

                if(this.dishDelete == true){
                    console.log(val)
                    this.getDishes()
                    this.$emit('changeBorrado',false)

                }
            },
            cupdate: function(val){

                if(this.cupdate == true){

                    this.getDishes()
                    this.$emit('changeUpdate',false)
                }
            }
        },

        mounted(){

            this.getDishes();
        }

    }
</script>

