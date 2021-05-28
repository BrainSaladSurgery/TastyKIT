<template>
    <table aria-describedby="info-popup" aria-label="open tickets" class="border-t w-full min-h-0 h-full flex flex-col ">
        <thead class="flex w-full flex-col px-4">
            <tr class="border-b flex ">
                <th id="DNI" class="font-semibold text-left py-3 px-1  ml-4 w-28 truncate">
                    DNI
                </th>
                <th id="Puesto" class="font-semibold text-left py-3 px-1 w-24 truncate">
                    Puesto
                </th>
                <th id="Nombre" class="font-semibold text-left py-3 px-1 w-60 truncate">
                    Nombre
                </th>
                <th id="Telefono" class="font-semibold text-left py-3 px-1 w-32 truncate">
                    Teléfono
                </th>
                <th id="Email" class="font-semibold text-left py-3 px-1 w-32 truncate">
                    Email
                </th>

                <th id="Red" class="font-semibold text-left py-3 px-28  w-34 truncate">

                </th>

                <th id="Green" class="font-semibold text-left py-3  w-32 truncate">

                </th>
            </tr>
        </thead>
        <tbody class="flex w-full flex-col flex-1 min-h-0  px-4">
            <tr v-for="(user,index) in users" @key="index"  role="row" class="hover:bg-blue-100 border-b flex cursor-pointer items-center ">
                <td role="cell" headers="Mesa" class="py-3 pl-3 pr-1 w-32 flex items-start">
                    <span>{{ user.dni }}</span>
                </td>
                <td  headers="Puesto" class="py-3 px-1 w-24">
                    <!-- <div class="ml-auto relative group"> -->
                    <span style="
                            padding: 2px 5px;
                            font-size: 0.7rem;
                            position: relative;
                            bottom: 2px;
                            " class="font-mono rounded-sm bg-red-600 text-white leading-none">O</span>
                        <!-- </div> -->
                    rol
                </td>
                <td headers="Nombre" class="py-3 px-1 w-60 max-w-xs xl:max-w-lg">
                    <div class="relative group w-full truncate">
                        {{ user.firstName }} {{ user.lastName }}
                    </div>
                </td>
                <td headers="Telefono" class="py-3 px-1 w-32 truncate">
                    {{ user.phone }}
                </td>
                <td  headers="Email" class="py-3 px-1 w-32 truncate ">
                    {{ user.email }}
                </td>
                <td  headers="Email" class="py-3 pl-28 w-34 ">
                    <button @click="deleteUser(user.id);showModalDel()" class="border-2 border-transparent bg-red-400 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-red-500 hover:bg-transparent hover:text-red-500">Borrar</button>
                </td>
                <td  headers="Email" class="py-3 pl-8 w-32 ">
                    <button @click="editUser(user.id); showModal()" class="border-2 border-transparent bg-green-400 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-green-500 hover:bg-transparent hover:text-green-500">Editar</button>
                </td>
            </tr>
            <!-- END ROW -->

        </tbody>
    </table>
</template>

<script>
    export default {

        data(){
            return{
                users: []
            }
        },
        props:['userDelete','cupdate'],
        methods: {

            async getUsers(){

                await axios.get('/users-list')
                    .then(response =>{

                        this.users = response.data

                    })
            },

            editUser(id){

                this.$emit('editUser', id)
            },

            deleteUser(id){

                this.$emit('deleteUser', id)
            },
            showModal(){

                this.$emit('showModal', true)
            },
            showModalDel(){
                console.log('EMITO')
                this.$emit('patata', true)
            }


        },

        watch: {
            userDelete: function(val){

                if(this.userDelete == true){
                    console.log(this.userDelete)
                    this.getUsers()
                }
            },
            cupdate: function(val){

                if(this.cupdate == true){

                    this.getUsers()
                }
            }
        },

        mounted(){

            this.getUsers();
        }

    }
</script>

