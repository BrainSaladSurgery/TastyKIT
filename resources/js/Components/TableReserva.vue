<template>
    <table aria-describedby="info-popup" aria-label="open tickets" class="border-t w-full min-h-0 h-full flex flex-col">
        <thead class="flex w-full flex-col px-4">
            <tr class="border-b flex w-full justify-start">
            <th id="Mesa" class="font-semibold text-left py-3 px-1 w-1/12 truncate">
                Mesa
            </th>
            <th id="Pax" class="font-semibold text-left py-3 px-1 w-1/12 truncate">
                PAX
            </th>
            <th id="Name" class="font-semibold text-left py-3 px-1 w-1/6 truncate">
                Nombre
            </th>
            <th id="Day" class="font-semibold text-left py-3 px-4 w-1/6 truncate">
                Día
            </th>
            <th id="Time" class="font-semibold text-left py-3 px-1 w-1/6 ">
                Hora
            </th>

            </tr>
        </thead>
        <tbody class="flex w-full flex-col  min-h-0 overflow-hidden px-4 ">
            <tr v-for="(reserva,index) in reservas" @key="index" role="row" class="border-b flex w-full justify-start hover:bg-blue-100 cursor-pointer">
                <td role="cell" headers="Mesa" class="text-left py-3 px-1 w-1/12 ">
                    <span v-if="reserva.table_id == null">S/N</span>
                    <span v-else>{{ reserva.table_id }}</span>
                </td>
                <td  headers="Pax" class="text-left py-3 px-1 w-1/12">

                    #{{ reserva.pax }}
                </td>
                <td headers="Name" class="text-left py-3 px-1 w-1/6  ">
                    <div class="relative group w-full truncate">
                        {{ reserva.firstName }}
                    </div>
                </td>
                <td headers="Day" class="text-left py-3 px-1  w-1/6 truncate">
                    {{ reserva.day }}
                </td>
                <td  headers="Time" class="text-left py-3 px-1 w-1/6">
                    {{ reserva.time }}
                </td>
                <td headers="delete" class="text-left py-3 px-1 mr-8 w-1/12 ">
                    <a @click="changeModal(reserva.pax, reserva.firstName,reserva.day,reserva.id)" class="cursor-pointer font-bold text-red-500" >Anular</a>
                </td>
                <td  headers="edit" class="text-left py-3 px-1 w-1/12 ">
                    <a @click="updateReserv(reserva.id)" class="cursor-pointer font-bold text-green-600">Cambiar</a>
                </td>

            </tr>
            <!-- END ROW -->

            <!-- START MODAL DELETE -->
            <modal styles="width: 330px !important; margin-top: 10%" :show="showModale" @close="changeModal">
                <div class="bg-white rounded-lg w-96">
                    <div class="w-96 border-t-8 border-yellow-600 rounded-lg flex">
                        <div class="w-full pt-9 pr-4 text-center">
                            <h3 class="font-bold text-yellow-700">¿Estas seguro de borrar la Reserva?</h3>
                            <p class="py-4 text-sm text-gray-400">La reserva a nombre de <b>{{ reser.firstName }}</b> para <b>{{ reser.pax }}pax</b> del día <b>{{ reser.day }}</b></p>
                        </div>
                    </div>
                    <div class="p-4 flex space-x-4">
                        <button @click="changeModal()" class="w-1/2 px-4 py-3 text-center bg-gray-100 text-gray-400 hover:bg-gray-200 hover:text-black font-bold rounded-lg text-sm">Cancelar</button>
                        <button @click="deleteData(reser.id); changeModal()" class="w-1/2 px-4 py-3 text-center text-pink-100 bg-yellow-600 rounded-lg hover:bg-yellow-700 hover:text-white font-bold text-sm">Borrar</button>
                    </div>
                </div>
            </modal>
            <!-- END MODAL DELETE -->

        </tbody>
    </table>


</template>

<script>
    import Modal from '@/Jetstream/Modal'


    export default {
        components: {
            Modal,
        },
        data(){
            return{
                showModale: false,
                reser : {


                    pax: '',
                    day: '',
                    id: '',
                    firstName: '',
                }
            }
        },
        props:['reservas'],

        methods:{

            changeModal(pax, firstName,day,id){

                this.showModale = !this.showModale

                this.reser.pax = pax
                this.reser.day = day
                this.reser.id = id
                this.reser.firstName = firstName
            },

            updateReserv(id){

                this.$emit('updateReserv', id)

            },

            async deleteData(id){

                await axios.delete('/delete-reservation/'+id)
                    .then(response=>{
                        console.log(response)
                        this.$emit('updateList',true)
                        this.reser.firstName = ''
                        this.reser.pax = ''
                        this.reser.day = ''
                        this.reser.id = ''
                    }).catch(err => {
                        console.log(err)
                    })
            }
        },



    }
</script>

