<template>
    <app-layout>
        <template #navSide>
            <div id="navSide">
                <nav-side />
            </div>
            <div style="width: 80.5px; heigth: auto;"></div>
        </template>        
        <template #content>
        <header aria-label="page caption" class="flex-none flex h-16 bg-gray-100 border-t px-4 items-center ">
            <h1 id="page-caption" class="font-semibold text-lg ">Usuarios</h1>
        </header>
        
        <nav-top />
        <!-- main content -->
        <main class="flex-grow flex min-h-0 border-t">
            <section aria-label="main content" class="flex min-h-0 flex-col flex-auto border-l container">

                <!-- content caption -->
                <head-tab />

                <table-yelx-users @editUser="editUsuario = $event" @deleteUser="deleteUsuario = $event"/>
            </section>

            <!-- section Tickets-->
            <div class="w-3/12">
                <tickets-resume />
            </div>
            

            <!-- section content -->

            <!-- START MODAL CREATE -->
            <modal class="flex flex-col w-11/12 sm:w-5/6 lg:w-1/2 max-w-2xl mx-auto rounded-lg border border-gray-300 shadow-xl" :show="showModal" @close="changeStateModal">
                <div>
                    <div class="flex flex-row justify-between p-6 bg-white border-b border-gray-200 rounded-tl-lg rounded-tr-lg">
                        <p class="font-semibold text-gray-800">Alta Bebida</p>
                        <svg  @click="changeStateModal" class="w-6 h-6 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" ></path></svg>
                    </div>
                    <div class="flex flex-col m-5 sm:flex-row items-center mb-5 sm:space-x-5">
                        <div class="w-full sm:w-3/5">
                            <p class="mb-2 font-semibold text-gray-700">Nombre de la Bebida</p>
                            <input v-model="drinkName" class="bg-white border border-gray-200 rounded shadow-sm w-full focus:ring-0 focus:border-gray-500 " type="text" name="name">
                        </div>
                        <div class="w-full sm:w-1/3 mt-2 sm:mt-0">
                            <p class="mb-2 font-semibold text-gray-700">Cantidad</p>
                            <input  v-model="drinkAmount" class=" bg-white border border-gray-200 rounded shadow-sm  focus:ring-0 focus:border-gray-500" type="text" name="amount" >
                        </div>
                        <div class="w-full sm:w-1/3 mt-2 sm:mt-0">
                            <p class="mb-2 font-semibold text-gray-700">Categoría</p>
                        <select v-model="categoryCreate" type="text" name="category" class="w-full p-2 cursor-pointer bg-white border border-gray-200 rounded shadow-sm appearance-none focus:ring-0 focus:border-gray-500">
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
    import TableYelxUsers from '@/Components/TableYelxUsers'
    import NavTop from '@/Components/NavTop'

    export default {
        components: {
            AppLayout,
            NavSide,
            TicketsResume,
            Stats,
            HeadTab,
            TableYelxUsers,
            NavTop
        },

        data(){
            return {
                deleteUsario: '',
                editUsuario: '',
                user:[]
            }
            
        },
        methods: {
            deleteUsuario(id){
                
            },

            async getUser(id){

                await axios.get('/user/'+id).
                    then((response) =>{
                        this.user = response.data
                    })
            }

        },
        
        watch: {
            deleteUser: function (val){
                if(deleteUser != ''){

                    this.deleteUsuario(val)
                }
            },
            editUser: function(val){
                if(editUser != ''){

                    this.getUser(val)
                }
            }
        }



    }
</script>

<style>
    #navSide{
        position: fixed;
    }
</style>
