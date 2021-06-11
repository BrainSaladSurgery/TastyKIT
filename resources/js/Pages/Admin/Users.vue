<template>
    <app-layout>
        <template #navSide>
            <div id="navSide">
                <nav-side />
            </div>
            <div style="width: 80.5px; heigth: auto;"></div>
        </template>
        <template #content>
        <header-nav :pag="'Usuarios'" :classe="'w-full flex-none flex h-16 bg-gray-100 border-t px-4 items-center justify-between'"/>

        <nav-top  @changeModal="showModalUser = $event" :tipo ="type" @modalData="userID = $event"/>
        <!-- main content -->
        <main class="flex-grow flex min-h-0 border-t">
            <section aria-label="main content" class="flex min-h-0 flex-col flex-auto border-l container">

                <table-yelx-users @ModalDelete="showDele = $event"  @deleteUser="deleteUsuario = $event" :userDelete="borrado" @changeBorrado="borrado = $event" :cupdate="change" @changeUpdate="change = $event" @editUser="editUsuario = $event"  @showModal="showModalUser = $event"/>
            </section>

            <!-- section Tickets-->
            <div class="w-3/12 bg-gray-100 flex justify-center">
                <tickets-resume />
            </div>


            <!-- section content -->

            <!-- START MODAL CREATE -->
            <modal class="flex flex-col w-11/12 sm:w-5/6 lg:w-1/2 max-w-2xl mx-auto rounded-lg border border-gray-300 shadow-xl" :show="showModalUser" @close="changeStateModal">
                <div >
                    <div class="flex flex-row justify-between p-6 bg-white border-b border-gray-200 rounded-tl-lg rounded-tr-lg">
                        <p class="font-semibold text-gray-800">Modificar Usuario</p>
                        <svg  @click="changeStateModal" class="w-6 h-6 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" ></path></svg>
                    </div>
                    <div class="flex flex-col  sm:flex-row items-center mb-5 py-8 px-6 bg-gray-50 sm:space-x-5">
                        <div class="w-full sm:w-2/5">
                            <p class="mb-2 font-semibold text-gray-700">Nombre</p>
                            <input v-model="user.firstName" class="bg-white border border-gray-200 rounded shadow-sm w-full focus:ring-0 focus:border-gray-500 " type="text" name="name">
                        </div>
                        <div class="w-full sm:w-1/4 mt-2 sm:mt-0">
                            <p class="mb-2 font-semibold text-gray-700">Apellidos</p>
                            <input  v-model="user.lastName" class=" bg-white border border-gray-200 rounded shadow-sm w-full focus:ring-0 focus:border-gray-500" type="text" name="amount" >
                        </div>
                        <div class="w-full sm:w-1/4 mt-2  sm:mt-0">
                            <p class="mb-2 font-semibold pl-2 text-gray-700">Rol</p>
                            <select v-model="user.rol" type="text" name="category" class="w-full  cursor-pointer bg-white border border-gray-200 rounded shadow-sm appearance-none focus:ring-0 focus:border-gray-500">
                                <option value="User">Usuario</option>
                                <option value="Admin">Admin</option>
                            </select>
                        </div>

                    </div>
                    <div class="flex flex-col  px-6  sm:flex-row items-center  mb-5 sm:space-x-5">
                        <div class="w-full sm:w-3/5 sm:mt-0">
                            <p class="mb-2 font-semibold text-gray-700">Email</p>
                            <input v-model="user.email" class="bg-white border border-gray-200 rounded shadow-sm w-full focus:ring-0 focus:border-gray-500 " type="text" name="name">
                        </div>
                        <div class="w-full sm:w-1/3 sm:mt-0">
                            <p class="mb-2 font-semibold text-gray-700">Teléfono</p>
                            <input  v-model="user.phone" class=" bg-white border border-gray-200 rounded shadow-sm w-full focus:ring-0 focus:border-gray-500" type="text" name="amount" >
                        </div>
                    </div>
                    <div>
                        <div class="flex flex-col px-6 py-8 bg-gray-50 sm:flex-row items-center mb-5 sm:space-x-5">
                            <div class="w-full sm:w-1/3">
                                <p class="mb-2 font-semibold text-gray-700">Nick</p>
                                <input v-model="user.name" class="bg-white border border-gray-200 rounded shadow-sm w-full focus:ring-0 focus:border-gray-500 " type="text" name="name">
                            </div>
                            <div class="w-full sm:w-3/5 mt-2 sm:mt-0">
                                <p class="mb-2 font-semibold text-gray-700">Dirección</p>
                                <input  v-model="user.address" class=" bg-white border border-gray-200 rounded shadow-sm  w-full focus:ring-0 focus:border-gray-500" type="text" name="amount" >
                            </div>
                        </div>
                        <hr />
                    </div>
                        <div class="flex flex-row items-center justify-between p-5 bg-white border-t border-gray-200 rounded-bl-lg rounded-br-lg">
                            <p @click="changeStateModal" class="font-semibold text-blue-500 ml-5 cursor-pointer">Cancelar</p>
                            <button  @click="modifyUser(user.id)" class="px-4 py-2 text-white font-semibold bg-yellow-600 rounded w-28">
                                Guardar
                            </button>
                        </div>
                </div>
            </modal>
            <!-- END MODAL CREATE -->

            <modal-alert :data="dato" @changeStatusDelete="borrado = $event" :showDele="showDele" @changeModalStatus="showDele = $event" />

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
    import HeaderNav from '@/Components/HeaderNav'
    import Modal from '@/Jetstream/Modal'
    import ModalAlert from '@/Components/ModalAlert'

    export default {
        components: {
            AppLayout,
            NavSide,
            TicketsResume,
            Stats,
            HeadTab,
            TableYelxUsers,
            NavTop,
            Modal,
            ModalAlert,
            HeaderNav
        },

        data(){
            return {

                deleteUsuario: '',
                editUsuario: '',
                user:[],
                showModalUser: false,
                showModalUserMod: false,
                showDele: false,
                dato: [],
                borrado: false,
                change: false,
                userID:'',
                type: 'Usuario'


            }

        },
        methods: {
            async sendData(id){

                await axios.get('/user/'+id).
                    then((response) =>{

                        this.dato = response.data
                    })
            },

            async getUser(id){

                await axios.get('/user/'+id).
                    then((response) =>{
                        this.user = response.data
                    })
            },

            changeStateModal(){

                this.showModalUser = !this.showModalUser

            },

            async modifyUser(id){
                await axios.put('/update-user/'+ id, this.user).
                    then((response) =>{

                        this.change = true
                        this.resetDataUp()

                    }).catch(error =>{

                        console.log(error)
                    })
            },

            resetDataUp(){

                this.showModalUser = false
                this.user = []

            },


        },

        watch: {
            deleteUsuario: function (val){
                if(this.deleteUsuario != ''){

                    this.sendData(this.deleteUsuario)
                }
            },

            // Reset de la modal
            borrado: function(val){
                if(this.borrado == true){

                    this.dato = []
                    this.showDele = false

                }
            },

            //MODIFY
            editUsuario: function(val){
                if(this.editUsuario != ''){

                    this.getUser(val)
                }
            },

            userID: function(val){

                this.getUser(val)
            }


        }



    }
</script>

