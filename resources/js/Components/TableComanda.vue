<template>
    <table aria-describedby="info-popup" aria-label="open tickets" class="border-t w-full min-h-0 h-full flex flex-col ">
        <thead class="flex w-full flex-col px-4 h-14">
            <tr class="flex text-center w-full h-full">
                <div id="Texto" class="font-bold py-3 w-full pl-32 uppercase text-gray-500">
                    Generador de Comandas
                </div>
                    <button class="border-2 border-transparent bg-yellow-400  px-4 mr-8 font-bold uppercase text-white rounded transition-all hover:border-yellow-500 hover:bg-transparent hover:text-yellow-500">Generar</button>
            </tr>
        </thead>
        <tbody class="flex w-full flex-col flex-1 min-h-0  px-4">
        <!-- SELECCIÓN MESA -->
            <tr class="border-b flex">
                <th class="bg-gray-100 text-center items-center  py-2 flex-1" colspan="7">

                    <div @click="hiddenSel()" class="font-bold mr-1 flex justify-center text-green-400 cursor-pointer">
                        SELECCIONAR MESA
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </th>
            </tr>
            <div v-for="(table,index) in tables" @key="index" :class="ocultoSel">
                <tr  v-if="table.type == 'Mesa' "  role="row" class="hover:bg-blue-100 border-b flex cursor-pointer items-center justify-center ">
                    <td  headers="Puesto" class="py-3 px-1 w-32">
                        <span style="
                                padding: 2px 5px;
                                font-size: 0.7rem;
                                position: relative;
                                bottom: 2px;
                                " class="font-mono rounded-sm bg-green-400 text-white leading-none">E</span>
                        <span class="pr-2"></span> {{ table.type }}
                    </td>
                    <td headers="Nombre" class="py-3 px-1 w-32 max-w-xs xl:max-w-lg">
                        <div class="relative group w-full truncate">
                            {{ table.name }}
                        </div>
                    </td>
                    <td headers="Descripción" class="py-3 px-1  w-32 truncate">
                        Pax: {{ table.min_pax }}-{{ table.max_pax }}
                    </td>
                    <td  headers="Precio" class="py-3 px-1 pl-8 w-32 truncate ">
                        <span v-if="table.status == false" class="font-bold uppercase text-green-400">Libre</span> <span v-else class="uppercase text-red-600">Ocupada</span>
                    </td>
                    <td  headers="Email" class="py-3 pl-6 w-32 ">
                        <button @click="deleteDish(dish.id);showModalDel()" class="border-2 border-transparent bg-red-400 ml-8 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-red-500 hover:bg-transparent hover:text-red-500">X</button>
                    </td>
                    <td  headers="Email" class="py-3 pl-8 w-32 ">
                        <button @click="editDish(dish.id); showModal()" class="border-2 border-transparent bg-blue-400 ml-8 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-green-500 hover:bg-transparent hover:text-green-500">Seleccionar</button>
                    </td>
                </tr>
            </div>

            <!-- BEBIDAS -->
            <tr class="border-b flex">
                <th class="bg-gray-100 text-center items-center  py-2 flex-1" colspan="7">

                    <div @click="hiddenBe()" class="font-bold mr-1 flex justify-center text-green-400 cursor-pointer">
                        BEBIDAS
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </th>
            </tr>
            <div v-for="(drink,index) in drinks" @key="index" :class="ocultoBe">
                <tr  v-if="drink.type == 'Bebida' "  role="row" class="hover:bg-blue-100 border-b flex cursor-pointer items-center justify-center">
                    <td  headers="Puesto" class="py-3 px-1 w-32">
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
                    <td headers="Nombre" class="py-3 pl-8 w-32 max-w-xs xl:max-w-lg">
                        <div class="relative group w-full truncate">
                            {{ drink.name }}
                        </div>
                    </td>
                    <td  headers="Precio" class="py-3 px-1 pl-8 w-32 truncate ">
                        {{ drink.price }}€
                    </td>
                    <td  headers="deseleccionar" class="py-3 pl-8 w-34 ">
                        <button @click="NoSelection()" class="border-2 border-transparent bg-red-400 ml-8 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-red-500 hover:bg-transparent hover:text-red-500">X</button>
                    </td>

                    <td  headers="menos" class="py-3 pl-8 ">
                        <button @click="resta()" class="border-2 border-transparent bg-gray-400 ml-8  font-bold uppercase text-white rounded transition-all hover:border-gray-500 hover:bg-transparent hover:text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </td>
                    <td  headers="add" class="py-3  w-16">
                        <input class="bg-white border border-gray-200 ml-1 py-2 px-4 rounded shadow-sm w-full focus:ring-0 focus:border-gray-500  " type="text" name="add"/>
                    </td>
                    <td  headers="mas" class="py-3 pl-1  ">
                        <button @click="suma()" class="border-2 border-transparent bg-gray-400 ml-1  font-bold uppercase text-white rounded transition-all hover:border-gray-500 hover:bg-transparent hover:text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        </button>
                    </td>
                    <td  headers="Email" class="py-3 pl-8 w-32 ">
                        <button @click="addAmount()" class="border-2 border-transparent bg-blue-400 ml-8 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-blue-500 hover:bg-transparent hover:text-blue-500">Añadir</button>
                    </td>
                </tr>
            </div>

            <!-- ENTRANTES -->
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
                <tr  v-if="dish.category == 'Entrantes' "  role="row" class="hover:bg-blue-100 border-b flex cursor-pointer items-center justify-center ">
                    <td  headers="Puesto" class="py-3 px-1 w-32">
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
                    <td headers="Nombre" class="py-3 px-1 w-60 max-w-xs xl:max-w-lg">
                        <div class="relative group w-full truncate">
                            {{ dish.name }}
                        </div>
                    </td>
                    <td headers="Descripción" class="py-3 px-1  w-80 truncate">
                        {{ dish.description }}
                    </td>
                    <td  headers="Precio" class="py-3 px-1 pl-8 w-32 truncate ">
                        {{ dish.price }}€
                    </td>
                    <td  headers="deseleccionar" class="py-3 pl-8 w-34 ">
                        <button @click="NoSelection()" class="border-2 border-transparent bg-red-400 ml-8 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-red-500 hover:bg-transparent hover:text-red-500">X</button>
                    </td>

                    <td  headers="menos" class="py-3 pl-8 ">
                        <button @click="resta()" class="border-2 border-transparent bg-gray-400 ml-8  font-bold uppercase text-white rounded transition-all hover:border-gray-500 hover:bg-transparent hover:text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </td>
                    <td  headers="add" class="py-3  w-16">
                        <input class="bg-white border border-gray-200 ml-1 py-2 px-4 rounded shadow-sm w-full focus:ring-0 focus:border-gray-500  " type="text" name="add"/>
                    </td>
                    <td  headers="mas" class="py-3 pl-1  ">
                        <button @click="suma()" class="border-2 border-transparent bg-gray-400 ml-1  font-bold uppercase text-white rounded transition-all hover:border-gray-500 hover:bg-transparent hover:text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        </button>
                    </td>
                    <td  headers="Email" class="py-3 pl-8 w-32 ">
                        <button @click="addAmount()" class="border-2 border-transparent bg-blue-400 ml-8 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-blue-500 hover:bg-transparent hover:text-blue-500">Añadir</button>
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
                <tr  v-if="dish.category == 'Primeros' "  role="row" class="hover:bg-blue-100 border-b flex cursor-pointer items-center justify-center">
                    <td  headers="Puesto" class="py-3 px-1 w-32">
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
                    <td headers="Nombre" class="py-3 px-1 w-60 max-w-xs xl:max-w-lg">
                        <div class="relative group w-full truncate">
                            {{ dish.name }}
                        </div>
                    </td>
                    <td headers="Descripción" class="py-3 px-1  w-80 truncate">
                        {{ dish.description }}
                    </td>
                    <td  headers="Precio" class="py-3 px-1  pl-8 w-32 truncate ">
                        {{ dish.price }}€
                    </td>
                    <td  headers="deseleccionar" class="py-3 pl-8 w-34 ">
                        <button @click="NoSelection()" class="border-2 border-transparent bg-red-400 ml-8 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-red-500 hover:bg-transparent hover:text-red-500">X</button>
                    </td>

                    <td  headers="menos" class="py-3 pl-8 ">
                        <button @click="resta()" class="border-2 border-transparent bg-gray-400 ml-8  font-bold uppercase text-white rounded transition-all hover:border-gray-500 hover:bg-transparent hover:text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </td>
                    <td  headers="add" class="py-3  w-16">
                        <input class="bg-white border border-gray-200 ml-1 py-2 px-4 rounded shadow-sm w-full focus:ring-0 focus:border-gray-500  " type="text" name="add"/>
                    </td>
                    <td  headers="mas" class="py-3 pl-1  ">
                        <button @click="suma()" class="border-2 border-transparent bg-gray-400 ml-1  font-bold uppercase text-white rounded transition-all hover:border-gray-500 hover:bg-transparent hover:text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        </button>
                    </td>
                    <td  headers="Email" class="py-3 pl-8 w-32 ">
                        <button @click="addAmount()" class="border-2 border-transparent bg-blue-400 ml-8 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-blue-500 hover:bg-transparent hover:text-blue-500">Añadir</button>
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
                <tr  v-if="dish.category == 'Segundos' "  role="row" class="hover:bg-blue-100 border-b flex cursor-pointer items-center justify-center ">
                    <td  headers="Puesto" class="py-3 px-1 w-32">
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
                    <td headers="Nombre" class="py-3 px-1 w-60 max-w-xs xl:max-w-lg">
                        <div class="relative group w-full truncate">
                            {{ dish.name }}
                        </div>
                    </td>
                    <td headers="Descripción" class="py-3 px-1  w-80 truncate">
                        {{ dish.description }}
                    </td>
                    <td  headers="Precio" class="py-3 px-1 pl-8 w-32 truncate ">
                        {{ dish.price }}€
                    </td>
                    <td  headers="deseleccionar" class="py-3 pl-8 w-34 ">
                        <button @click="NoSelection()" class="border-2 border-transparent bg-red-400 ml-8 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-red-500 hover:bg-transparent hover:text-red-500">X</button>
                    </td>

                    <td  headers="menos" class="py-3 pl-8 ">
                        <button @click="resta()" class="border-2 border-transparent bg-gray-400 ml-8  font-bold uppercase text-white rounded transition-all hover:border-gray-500 hover:bg-transparent hover:text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </td>
                    <td  headers="add" class="py-3  w-16">
                        <input class="bg-white border border-gray-200 ml-1 py-2 px-4 rounded shadow-sm w-full focus:ring-0 focus:border-gray-500  " type="text" name="add"/>
                    </td>
                    <td  headers="mas" class="py-3 pl-1  ">
                        <button @click="suma()" class="border-2 border-transparent bg-gray-400 ml-1  font-bold uppercase text-white rounded transition-all hover:border-gray-500 hover:bg-transparent hover:text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        </button>
                    </td>
                    <td  headers="Email" class="py-3 pl-8 w-32 ">
                        <button @click="addAmount()" class="border-2 border-transparent bg-blue-400 ml-8 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-blue-500 hover:bg-transparent hover:text-blue-500">Añadir</button>
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
                <tr  v-if="dish.category == 'Postres' "  role="row" class="hover:bg-blue-100 border-b flex cursor-pointer items-center justify-center ">
                    <td  headers="Puesto" class="py-3 px-1 w-32">
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
                    <td headers="Nombre" class="py-3 px-1 w-60 max-w-xs xl:max-w-lg">
                        <div class="relative group w-full truncate">
                            {{ dish.name }}
                        </div>
                    </td>
                    <td headers="Descripción" class="py-3 px-1  w-80 truncate">
                        {{ dish.description }}
                    </td>
                    <td  headers="Precio" class="py-3 px-1 pl-8 w-32 truncate ">
                        {{ dish.price }}€
                    </td>
                    <td  headers="deseleccionar" class="py-3 pl-8 w-34 ">
                        <button @click="NoSelection()" class="border-2 border-transparent bg-red-400 ml-8 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-red-500 hover:bg-transparent hover:text-red-500">X</button>
                    </td>

                    <td  headers="menos" class="py-3 pl-8 ">
                        <button @click="resta()" class="border-2 border-transparent bg-gray-400 ml-8  font-bold uppercase text-white rounded transition-all hover:border-gray-500 hover:bg-transparent hover:text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </td>
                    <td  headers="add" class="py-3  w-16">
                        <input class="bg-white border border-gray-200 ml-1 py-2 px-4 rounded shadow-sm w-full focus:ring-0 focus:border-gray-500  " type="text" name="add"/>
                    </td>
                    <td  headers="mas" class="py-3 pl-1  ">
                        <button @click="suma()" class="border-2 border-transparent bg-gray-400 ml-1  font-bold uppercase text-white rounded transition-all hover:border-gray-500 hover:bg-transparent hover:text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        </button>
                    </td>
                    <td  headers="Email" class="py-3 pl-8 w-32 ">
                        <button @click="addAmount()" class="border-2 border-transparent bg-blue-400 ml-8 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-blue-500 hover:bg-transparent hover:text-blue-500">Añadir</button>
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
                <tr  v-if="dish.category == 'Otros'"  role="row" class="hover:bg-blue-100 border-b flex cursor-pointer items-center justify-center ">
                    <td  headers="Puesto" class="py-3 px-1 w-32">
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
                    <td headers="Nombre" class="py-3 px-1 w-60 max-w-xs xl:max-w-lg">
                        <div class="relative group w-full truncate">
                            {{ dish.name }}
                        </div>
                    </td>
                    <td headers="Descripción" class="py-3 px-1  w-80 truncate">
                        {{ dish.description }}
                    </td>
                    <td  headers="Precio" class="py-3 px-1 pl-8 w-32 truncate ">
                        {{ dish.price }}€
                    </td>
                    <td  headers="deseleccionar" class="py-3 pl-8 w-34 ">
                        <button @click="NoSelection()" class="border-2 border-transparent bg-red-400 ml-8 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-red-500 hover:bg-transparent hover:text-red-500">X</button>
                    </td>

                    <td  headers="menos" class="py-3 pl-8 ">
                        <button @click="resta()" class="border-2 border-transparent bg-gray-400 ml-8  font-bold uppercase text-white rounded transition-all hover:border-gray-500 hover:bg-transparent hover:text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </td>
                    <td  headers="add" class="py-3  w-16">
                        <input class="bg-white border border-gray-200 ml-1 py-2 px-4 rounded shadow-sm w-full focus:ring-0 focus:border-gray-500  " type="text" name="add"/>
                    </td>
                    <td  headers="mas" class="py-3 pl-1  ">
                        <button @click="suma()" class="border-2 border-transparent bg-gray-400 ml-1  font-bold uppercase text-white rounded transition-all hover:border-gray-500 hover:bg-transparent hover:text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        </button>
                    </td>
                    <td  headers="Email" class="py-3 pl-8 w-32 ">
                        <button @click="addAmount()" class="border-2 border-transparent bg-blue-400 ml-8 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-blue-500 hover:bg-transparent hover:text-blue-500">Añadir</button>
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

            hiddenEn(){

                if(this.ocultoEn == ''){

                    this.ocultoEn = 'hidden'

                }else{

                    this.ocultoEn = ''
                }
            },

            hiddenBe(){

                if(this.ocultoBe == ''){

                    this.ocultoBe = 'hidden'

                }else{

                    this.ocultoBe = ''
                }
            },

            hiddenSel(){

                if(this.ocultoSel == ''){

                    this.ocultoSel = 'hidden'

                }else{

                    this.ocultoSel = ''
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
            this.getDrinks();
            this.getTables();
        }

    }
</script>

