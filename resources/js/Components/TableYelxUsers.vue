<template>
    <table aria-describedby="info-popup" aria-label="open tickets" class="border-t w-full min-h-0 h-full flex flex-col ">
        <thead class="flex w-full flex-col px-4">
            <tr class="border-b grid grid-cols-8 py-2 ">
                <th id="DNI" class="font-semibold text-center w-full col-span-1 hidden lg:block truncate">
                    DNI
                </th>
                <th id="Puesto" class="font-semibold text-center w-full col-span-1 truncate">
                    Puesto
                </th>
                <th id="Nombre" class="font-semibold text-left w-full col-span-1 truncate">
                    Nick
                </th>
                <th id="Telefono" class="font-semibold text-left w-full col-span-1 hidden lg:block truncate">
                    Teléfono
                </th>
                <th id="Email" class="font-semibold text-left w-full col-span-2 truncate">
                    Email
                </th>

                <th id="Red" class="font-semibold text-left w-full col-span-1 truncate">

                </th>

                <th id="Green" class="font-semibold text-left w-full col-span-1 truncate">

                </th>
            </tr>
        </thead>
        <tbody class="flex w-full flex-col flex-1 min-h-0  px-4">
            <tr v-for="(user,index) in users" @key="index"  role="row" class="hover:bg-blue-100 border-b grid grid-cols-8 py-2  cursor-pointer items-center ">
                <td role="cell" headers="Mesa" class="w-full col-span-1 text-center hidden lg:block">
                    <span class="text-center font-bold text-gray-500 ">{{ user.dni }}</span>
                </td>
                <td  headers="Puesto" class="w-full col-span-1 text-center">

                    <span v-if="user.rol == 'Admin'" style="
                            padding: 2px 5px;
                            font-size: 0.7rem;
                            position: relative;
                            bottom: 2px;
                            " class="font-mono rounded-sm bg-yellow-500 text-white leading-none">A</span>

                    <span v-if="user.rol == 'User'" style="
                            padding: 2px 5px;
                            font-size: 0.7rem;
                            position: relative;
                            bottom: 2px;
                            " class="font-mono rounded-sm bg-purple-500 text-white leading-none">U</span>

                    {{ user.rol }}
                </td>
                <td headers="Nombre" class="w-full col-span-1 max-w-xs xl:max-w-lg">
                    <div class="relative group w-full truncate">
                        {{ user.name }}
                    </div>
                </td>
                <td headers="Telefono" class="w-full col-span-1 truncate hidden lg:block">
                    {{ user.phone }}
                </td>
                <td  headers="Email" class="w-full col-span-2 truncate ">
                    {{ user.email }}
                </td>
                <td  headers="Email" class="w-full col-span-2  lg:col-span-1">
                    <button @click="deleteUser(user.id);showModalDel()" class="border-2 border-transparent bg-red-400 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-red-500 hover:bg-transparent hover:text-red-500">Borrar</button>
                </td>
                <td  headers="Email" class="w-full col-span-2 lg:col-span-1">
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

                this.$emit('ModalDelete', true)
            }


        },

        watch: {
            userDelete: function(val){

                if(this.userDelete == true){

                    this.getUsers()
                    this.$emit('changeBorrado',false)

                }
            },
            cupdate: function(val){

                if(this.cupdate == true){

                    this.getUsers()
                    this.$emit('changeUpdate',false)
                }
            }
        },

        mounted(){

            this.getUsers();
        }

    }
</script>

