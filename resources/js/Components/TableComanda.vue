<template>
    <table aria-describedby="info-popup" aria-label="open tickets" class="border-t w-full min-h-0 h-full flex flex-col ">
        <thead class="flex w-full flex-col px-4 h-14">
            <tr class="flex text-center w-full h-full">
                <div id="Texto" class="font-bold py-3 w-full  uppercase text-gray-500">
                    Generador de Comandas
                </div>

            </tr>
        </thead>
        <tbody class="flex w-full flex-col flex-1 min-h-0  px-4">
        <!-- SELECCIÓN MESA -->
            <tr class="border-b flex">
                <th class="bg-gray-100 text-center items-center  py-2 flex-1" colspan="7">

                    <div @click="ocultoSel == '' ? ocultoSel = 'hidden' : ocultoSel = '' " class="font-bold mr-1 flex justify-center text-green-400 cursor-pointer">
                        SELECCIONAR MESA
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </th>
            </tr>
            <div v-for="(table,index) in tables" @key="index" :class="ocultoSel">
                <tr  v-if="table.type == 'Mesa' "  role="row" class="hover:bg-blue-100 border-b flex cursor-pointer w-full items-center justify-center ">
                    <td  headers="Puesto" class="py-3 w-32">
                        <span style="
                                padding: 2px 5px;
                                font-size: 0.7rem;
                                position: relative;
                                bottom: 2px;
                                " class="font-mono rounded-sm bg-green-400 text-white leading-none">E</span>
                        <span class="pr-2"></span> {{ table.type }}
                    </td>
                    <td headers="Nombre" class="py-3  w-32 ">
                        <div class="relative group w-full truncate">
                            {{ table.name }}
                        </div>
                    </td>
                    <td headers="Descripción" class="py-3  w-1/12 truncate">
                        Pax: {{ table.min_pax }}-{{ table.max_pax }}
                    </td>
                    <td  headers="Precio" class="py-3 ml-7 w-1/12 truncate ">
                        <span v-if="table.status == false" class="font-bold uppercase text-green-400">Libre</span> <span v-else class="uppercase font-bold text-red-600">Ocupada</span>
                    </td>
                    <!-- NO OCUPADA -->
                    <td  headers="des" class="py-3 w-1/12" v-if="table.status == false">
                        <button @click="NoSelection(table)"  :class="table.status == false && select == true ? 'opacity-50 cursor-not-allowed border-2 border-transparent bg-red-400 ml-8 py-2 px-4 font-bold uppercase text-white rounded' : 'border-2 border-transparent bg-red-400 ml-8 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:bg-red-500'">X</button>
                    </td>
                    <td  headers="sel" class="py-3 " v-if="table.status == false && select == false">
                        <button @click="selection(table)" class="border-2 border-transparent bg-blue-400 ml-8 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-blue-500 hover:bg-blue-600" >Seleccionar</button>
                    </td>
                    <td  headers="sel" class="py-3 " v-if="table.status == false && select == true ">
                        <button  class="opacity-50 cursor-not-allowed border-2 border-transparent bg-blue-400 ml-8 py-2 px-4 font-bold uppercase text-white rounded'" >Seleccionar</button>
                    </td>

                    <!-- OCUPADA -->
                    <td  headers="des" class="py-3 w-1/12" v-if="table.status == true && select == true && table.origin == true">
                    <!-- ORIGINALMENTE OCUPADA -->
                        <button  class="opacity-50 cursor-not-allowed border-2 border-transparent bg-red-400 ml-8 py-2 px-4 font-bold uppercase text-white rounded" >X</button>
                    </td>
                    <td  headers="des" class="py-3 w-1/12" v-if="table.status == true && select == true && table.origin == false">
                    <!-- ORIGINALMENTE NO OCUPADA -->
                        <button @click="NoSelection(table)"  class="border-2 border-transparent bg-red-400 ml-8 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:bg-red-500" >X</button>
                    </td>
                    <td  headers="des" class="py-3 w-1/12" v-if="table.status == true && select == false ">
                        <button  class="opacity-50 cursor-not-allowed border-2 border-transparent bg-red-400 ml-8 py-2 px-4 font-bold uppercase text-white rounded" >X</button>
                    </td>
                    <td  headers="sel" class="py-3" v-if="table.status == true ">
                        <button class="opacity-50 cursor-not-allowed border-2 border-transparent bg-blue-400 ml-8 py-2 px-4 font-bold uppercase text-white rounded">Seleccionar</button>
                    </td>
                </tr>
            </div>

            <!-- BEBIDAS -->
            <tr class="border-b flex">
                <th class="bg-gray-100 text-center items-center  py-2 flex-1" colspan="7">

                    <div @click="ocultoBe == '' ? ocultoBe = 'hidden' : ocultoBe = '' " class="font-bold mr-1 flex justify-center text-green-400 cursor-pointer">
                        BEBIDAS
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </th>
            </tr>
            <div v-for="(drink,index) in drinks" @key="index" :class="ocultoBe">
                <tr  v-if="drink.type == 'Bebida' "  role="row" class="hover:bg-blue-100 border-b flex cursor-pointer w-full items-center justify-center">
                    <td  headers="Puesto" class="py-3 w-2/12">
                        <span v-if="drink.category =='Con Alcohol'" style="
                                padding: 2px 5px;
                                font-size: 0.7rem;
                                position: relative;
                                bottom: 2px;
                                " class="font-mono rounded-sm bg-purple-400 text-white leading-none">A</span>

                        <span v-if="drink.category =='Refrescos'" style="
                                padding: 2px 5px;
                                font-size: 0.7rem;
                                position: relative;
                                bottom: 2px;
                                " class="font-mono rounded-sm bg-red-300 text-white leading-none">R</span>

                        <span  v-if="drink.category =='Cocteles'" style="
                                padding: 2px 5px;
                                font-size: 0.7rem;
                                position: relative;
                                bottom: 2px;
                                " class="font-mono rounded-sm bg-yellow-400 text-white leading-none">C</span>

                        <span  v-if="drink.category =='Otros'" style="
                                padding: 2px 5px;
                                font-size: 0.7rem;
                                position: relative;
                                bottom: 2px;
                                " class="font-mono rounded-sm bg-green-400 text-white leading-none">O</span>
                        <span class="pr-2"></span>{{ drink.category }}
                    </td>
                    <td headers="Nombre" class="py-3  px-1 w-2/12 ">
                        <div class="relative group w-full ">
                            {{ drink.name }}
                        </div>
                    </td>
                    <td  headers="Precio" class="py-3  w-16 truncate ">
                        {{ drink.price }}€
                    </td>
                    <td  headers="deseleccionar" class="py-3 ml-8 w-16">
                        <button @click="NoSelection(drink)" class="border-2 border-transparent bg-red-400  py-2 px-4 font-bold uppercase text-white rounded transition-all hover:bg-red-500 hover:border-red-500 ">X</button>
                    </td>

                    <td  headers="menos" class="py-3 ">
                        <button @click="drink.ud > 0 ? drink.ud -- : '0' " class="border-2 border-transparent bg-gray-400  font-bold uppercase text-white rounded transition-all hover:border-gray-500 hover:bg-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </td>
                    <td  headers="add" class="py-3 mx-1 w-16">
                        <input v-model="drink.ud"  class="bg-white text-center border border-gray-200 py-2 px-4 rounded shadow-sm w-full focus:ring-0 focus:border-gray-500  " type="text" name="amountTable"/>
                    </td>
                    <td  headers="mas" class="py-3 ">
                        <button @click="drink.ud ++" class="border-2 border-transparent bg-gray-400  font-bold uppercase text-white rounded transition-all hover:border-gray-500 hover:bg-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        </button>
                    </td>
                    <td  headers="sel" class="py-3 w-max ">
                        <button @click="selection(drink, drink.ud)" class="border-2 border-transparent bg-blue-400 ml-4 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-blue-500 hover:bg-blue-600 ">Añadir</button>
                    </td>
                </tr>
            </div>

            <!-- ENTRANTES -->
            <tr class="border-b flex">
                <th class="bg-gray-100 text-center items-center  py-2 flex-1" colspan="7">

                    <div @click="ocultoEn == '' ? ocultoEn = 'hidden' : ocultoEn = '' " class="font-bold mr-1 flex justify-center text-green-400 cursor-pointer">
                        ENTRANTES
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </th>
            </tr>
            <div v-for="(dish,index) in dishes" @key="index" :class="ocultoEn">
                <tr  v-if="dish.category == 'Entrantes' "  role="row" class="w-full items-center justify-center hover:bg-blue-100 border-b flex cursor-pointer  ">
                    <td  headers="Puesto" class="py-3 w-2/12">
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
                    <td headers="Nombre" class="py-3 px-1 w-2/12">
                        <div class="relative group w-full">
                            {{ dish.name }}
                        </div>
                    </td>
                    <!-- <td headers="Descripción" class="py-3 px-1  w-1/12 truncate">
                        {{ dish.description }}
                    </td> -->
                    <td  headers="Precio" class="py-3 w-16  truncate ">
                        {{ dish.price }}€
                    </td>
                    <td  headers="deseleccionar" class="py-3 ml-8 w-16">
                        <button @click="NoSelection(dish)" class="border-2 border-transparent bg-red-400  py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-red-500 hover:bg-red-600">X</button>
                    </td>

                    <td  headers="menos" class="py-3 ">
                        <button @click="resta()" class="border-2 border-transparent bg-gray-400  font-bold uppercase text-white rounded transition-all hover:border-gray-500 hover:bg-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </td>
                    <td  headers="add" class="py-3 mx-1 w-16">
                        <input v-model="dish.ud" class="text-center bg-white border border-gray-200 mx-1 py-2 px-4 rounded shadow-sm w-full focus:ring-0 focus:border-gray-500  " type="text" name="add"/>
                    </td>
                    <td  headers="mas" class="py-3  ">
                        <button @click="suma()" class="border-2 border-transparent bg-gray-400  font-bold uppercase text-white rounded transition-all hover:border-gray-500 hover:bg-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        </button>
                    </td>
                    <td  headers="Email" class="py-3  w-max">
                        <button @click="selection(dish)" class="border-2 border-transparent bg-blue-400 ml-4 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-blue-500 hover:bg-blue-600">Añadir</button>
                    </td>
                </tr>
            </div>

            <!-- Primeros -->
            <tr class="border-b flex">
                <th class="bg-gray-100 text-center py-2 flex-1" colspan="7">
                    <div @click="ocultoPi == '' ? ocultoPi = 'hidden' : ocultoPi = '' " class="font-bold mr-1 flex justify-center text-green-400 cursor-pointer">
                        PRIMEROS
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </th>
            </tr>
            <div v-for="(dish,index) in dishes" @key="index" :class="ocultoPi">
                <tr  v-if="dish.category == 'Primeros' "  role="row" class="w-full items-center justify-center hover:bg-blue-100 border-b flex cursor-pointer">
                    <td  headers="Puesto" class="py-3 w-2/12">

                        <span style="
                                padding: 2px 5px;
                                font-size: 0.7rem;
                                position: relative;
                                bottom: 2px;
                                " class="font-mono rounded-sm bg-blue-400 text-white leading-none">P</span>
                        <span class="pr-2"></span>{{ dish.category }}
                    </td>
                    <td headers="Nombre" class="py-3 px-1 w-2/12">
                        <div class="relative group w-full ">
                            {{ dish.name }}
                        </div>
                    </td>
                    <td  headers="Precio" class="py-3 w-16  truncate ">
                        {{ dish.price }}€
                    </td>
                    <td  headers="deseleccionar" class="py-3 ml-8 w-16 ">
                        <button @click="NoSelection(dish)" class=" text-center border-2 border-transparent bg-red-400 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-red-500 hover:bg-red-600">X</button>
                    </td>

                    <td  headers="menos" class="py-3 ">
                        <button @click="resta()" class="border-2 border-transparent bg-gray-400 font-bold uppercase text-white rounded transition-all hover:border-gray-500 hover:bg-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </td>
                    <td  headers="add" class="py-3 mx-1 w-16">
                        <input v-model="dish.ud" class="text-center bg-white border border-gray-200 mx-1 py-2 px-4 rounded shadow-sm w-full focus:ring-0 focus:border-gray-500  " type="text" name="add"/>
                    </td>
                    <td  headers="mas" class="py-3  ">
                        <button @click="suma()" class="border-2 border-transparent bg-gray-400 ml-1  font-bold uppercase text-white rounded transition-all hover:border-gray-500 hover:bg-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        </button>
                    </td>
                    <td  headers="Email" class="py-3  w-max">
                        <button @click="selection(dish)" class="border-2 border-transparent bg-blue-400 ml-4 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-blue-500 hover:bg-blue-600">Añadir</button>
                    </td>
                </tr>
            </div>

            <!-- SEGUNDOS -->
            <tr class="border-b flex">
                <th class="bg-gray-100 text-center py-2 flex-1" colspan="7">
                    <div @click="ocultoSe == '' ? ocultoSe = 'hidden' : ocultoSe = '' " class="font-bold mr-1 flex justify-center text-green-400 cursor-pointer">
                        SEGUNDOS
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </th>
            </tr>
            <div v-for="(dish,index) in dishes" @key="index" :class="ocultoSe">
                <tr  v-if="dish.category == 'Segundos' "  role="row" class="w-full hover:bg-blue-100 border-b flex cursor-pointer items-center justify-center ">
                    <td  headers="Puesto" class="py-3 w-2/12">
                        <span style="
                                padding: 2px 5px;
                                font-size: 0.7rem;
                                position: relative;
                                bottom: 2px;
                                " class="font-mono rounded-sm bg-red-400 text-white leading-none">S</span>
                            <!-- </div> -->
                        <span class="pr-2"></span>{{ dish.category }}
                    </td>
                    <td headers="Nombre" class="py-3 px-1 w-2/12">
                        <div class="relative group w-full ">
                            {{ dish.name }}
                        </div>
                    </td>
                    <td  headers="Precio" class="py-3 w-16  truncate">
                        {{ dish.price }}€
                    </td>
                    <td  headers="deseleccionar" class="py-3 ml-8 w-16">
                        <button @click="NoSelection(dish)" class="border-2 border-transparent bg-red-400  py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-red-500 hover:bg-red-600">X</button>
                    </td>

                    <td  headers="menos" class="py-3 ">
                        <button @click="resta()" class="border-2 border-transparent bg-gray-400   font-bold uppercase text-white rounded transition-all hover:border-gray-500 hover:bg-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </td>
                    <td  headers="add" class="py-3 mx-1 w-16">
                        <input v-model="dish.ud" class=" text-center bg-white border border-gray-200 mx-1 py-2 px-4 rounded shadow-sm w-full focus:ring-0 focus:border-gray-500  " type="text" name="add"/>
                    </td>
                    <td  headers="mas" class="py-3">
                        <button @click="suma()" class="border-2 border-transparent bg-gray-400  ml-1  font-bold uppercase text-white rounded transition-all hover:border-gray-500 hover:bg-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        </button>
                    </td>
                    <td  headers="Email" class="py-3 w-max">
                        <button @click="selection(dish)" class="border-2 border-transparent bg-blue-400 ml-4 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-blue-500 hover:bg-blue-600">Añadir</button>
                    </td>
                </tr>
            </div>

            <!-- POSTRES -->
            <tr class="border-b flex">
                <th class="bg-gray-100 text-center py-2 flex-1" colspan="7">
                    <div @click="ocultoPo == '' ? ocultoPo = 'hidden' : ocultoPo = '' " class="font-bold mr-1 flex justify-center text-green-400 cursor-pointer">
                        POSTRES
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </th>
            </tr>
            <div v-for="(dish,index) in dishes" @key="index" :class="ocultoPo">
                <tr  v-if="dish.category == 'Postres' "  role="row" class="hover:bg-blue-100 border-b flex cursor-pointer items-center justify-center ">
                    <td  headers="Puesto" class="py-3 w-2/12">
                        <!-- <div class="ml-auto relative group"> -->
                        <span style="
                                padding: 2px 5px;
                                font-size: 0.7rem;
                                position: relative;
                                bottom: 2px;
                                " class="font-mono rounded-sm bg-pink-400 text-white leading-none">P</span>
                            <!-- </div> -->
                        <span class="pr-2"></span>{{ dish.category }}
                    </td>
                    <td headers="Nombre" class="py-3 px-1 w-2/12">
                        <div class="relative group w-full truncate">
                            {{ dish.name }}
                        </div>
                    </td>
                    <!-- <td headers="Descripción" class="py-3 px-1  w-80 truncate">
                        {{ dish.description }}
                    </td> -->
                    <td  headers="Precio" class="py-3 w-16 truncate ">
                        {{ dish.price }}€
                    </td>
                    <td  headers="deseleccionar" class="py-3 w-16 ml-8 ">
                        <button @click="NoSelection(dish)" class="border-2 border-transparent bg-red-400  py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-red-500 hover:bg-red-600">X</button>
                    </td>

                    <td  headers="menos" class="py-3 ">
                        <button @click="resta()" class="border-2 border-transparent bg-gray-400   font-bold uppercase text-white rounded transition-all hover:border-gray-500 hover:bg-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </td>
                    <td  headers="add" class="py-3  mx-1 w-16">
                        <input v-model="dish.ud" class="text-center bg-white border border-gray-200 mx-1 py-2 px-4 rounded shadow-sm w-full focus:ring-0 focus:border-gray-500  " type="text" name="add"/>
                    </td>
                    <td  headers="mas" class="py-3  ">
                        <button @click="suma()" class="border-2 border-transparent bg-gray-400 ml-1  font-bold uppercase text-white rounded transition-all hover:border-gray-500 hover:bg-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        </button>
                    </td>
                    <td  headers="Email" class="py-3 w-max ">
                        <button @click="selection(dish)" class="border-2 border-transparent bg-blue-400 ml-4 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-blue-500 hover:bg-blue-600">Añadir</button>
                    </td>
                </tr>
            </div>

            <!-- OTROS -->
            <tr class="border-b flex">
                <th class="bg-gray-100 text-center py-2 flex-1" colspan="7">
                    <div @click="ocultoOt == '' ? ocultoOt = 'hidden' : ocultoOt = '' " class="font-bold mr-1 flex justify-center text-green-400 cursor-pointer">
                        OTROS
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </th>
            </tr>
            <div v-for="(dish,index) in dishes" @key="index" :class="ocultoOt">
                <tr  v-if="dish.category == 'Otros'"  role="row" class="w-full hover:bg-blue-100 border-b flex cursor-pointer items-center justify-center ">
                    <td  headers="Puesto" class="py-3 w-2/12">
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
                    <td headers="Nombre" class="py-3 px-1 w-2/12">
                        <div class="relative group w-full truncate">
                            {{ dish.name }}
                        </div>
                    </td>
                    <!-- <td headers="Descripción" class="py-3 px-1  w-80 truncate">
                        {{ dish.description }}
                    </td> -->
                    <td  headers="Precio" class="py-3 w-16  truncate  ">
                        {{ dish.price }}€
                    </td>
                    <td  headers="deseleccionar" class="py-3 ml-8 w-16 ">
                        <button @click="NoSelection(dish)" class="border-2 border-transparent bg-red-400  py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-red-500 hover:bg-red-600">X</button>
                    </td>

                    <td  headers="menos" class="py-3 ">
                        <button @click="resta()" class="border-2 border-transparent bg-gray-400  font-bold uppercase text-white rounded transition-all hover:border-gray-500 hover:bg-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </td>
                    <td  headers="add" class="py-3 mx-1 w-16 ">
                        <input v-model="dish.ud" class=" bg-white text-center border border-gray-200 mx-1 py-2 px-4 rounded shadow-sm w-full focus:ring-0 focus:border-gray-500  " type="text" name="add"/>
                    </td>
                    <td  headers="mas" class="py-3   ">
                        <button @click="suma()" class="border-2 border-transparent bg-gray-400 ml-1 font-bold uppercase text-white rounded transition-all hover:border-gray-500 hover:bg-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        </button>
                    </td>
                    <td  headers="Email" class="py-3 w-max ">
                        <button @click="selection(dish)" class="border-2 border-transparent bg-blue-400 ml-4 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-blue-500 hover:bg-blue-600">Añadir</button>
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
                tables: [],
                drinks: [],
                ticket: [],
                selecTable: false,
                select: false,
                ocultoEn: '',
                ocultoPi: '',
                ocultoSe: '',
                ocultoPo: '',
                ocultoOt: '',
                ocultoSel: '',
                ocultoBe: '',

            }
        },
        props:['dishDelete','cupdate'],
        methods: {
            // Traemos los objetos
            async getDishes(){

                await axios.get('/dishes-list')
                    .then(response =>{

                        this.dishes = response.data

                    })
            },

            async getTables(){

                await axios.get('/tables-list')
                    .then(response =>{

                        this.tables = response.data

                    })
            },

            async getDrinks(){

                await axios.get('/drinks-list')
                    .then(response =>{

                        this.drinks = response.data

                    })
            },

            selection(data, amount){

                if(data.type == 'Mesa'){

                    data.status = true
                    this.select = true
                    this.$emit('addTable', data.name)

                }else {

                    this.ticket.forEach(function(item, index, ticket){

                        if(item.name == data.name){

                            item.ud = amount + item.ud
                            data = ''
                        }
                    })
                    if(data != ''){
                        this.ticket.push(data)
                    }




                    this.$emit('addItem', this.ticket)
                    this.$emit('increments', true)
                }

            },

            NoSelection(data){

                if(data.type == 'Mesa'){

                    if(data.status == true){

                        data.status = false
                        this.select = false
                        this.$emit('addTable', '')
                    }

                }else{
                    var my = this
                    this.ticket.forEach(function(item, index, ticket){

                        if(item.name == data.name){

                            my.ticket.splice(index,1)
                        }
                    })

                    this.$emit('increments', true)
                }


            },

            closed(){

                this.status = true
            },
            showModal(){

                this.$emit('showModal', true)
            },
            showModalDel(){

                this.$emit('ModalDelete', true)
            }


        },

        watch: {

            selectTable: function(val){

                if(this.selecTable == true){


                }
            }
        },

        mounted(){

            this.getDishes();
            this.getDrinks();
            this.getTables();
        }

    }
</script>

