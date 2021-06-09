<template>
  <table aria-describedby="info-popup" aria-label="open tickets" class="border-t w-full min-h-0 h-full flex flex-col">
    <thead class="flex w-full flex-col px-4">
        <tr class="border-b grid grid-cols-9 gap-2 w-full justify-start py-3">
            <th id="Mesa" class="font-semibold text-left  col-span-1 w-full truncate">
                Mesa
            </th>
            <th id="Comanda" class="font-semibold text-left col-span-1 w-full truncate">
                Nº Ticket
            </th>
            <th id="Ticket" class="font-semibold text-left col-span-3 w-full truncate">
                Comanda
            </th>
            <th id="Camarero" class="font-semibold text-center col-span-1 w-full items-center justify-center truncate">
                Camarero
            </th>
            <th id="Precio" class="font-semibold text-center  col-span-1 w-full items-center justify-centertruncate">
                Precio
            </th>
        </tr>
    </thead>

        <tbody  class="flex w-full flex-col min-h-0 overflow-hidden px-4 h-full">
            <tr v-for="(ticket,index) in tickets" @key="index" role="row" class="border-b grid grid-cols-9  gap-2  w-full h-15 justify-start items-center hover:bg-blue-100 cursor-pointer">
                <td role="cell" headers="Mesa" class="text-left col-span-1 flex items-center w-full ">
                    <div class="group ml-3 group relative">

                    <span >{{ ticket.table }}</span>

                    <!-- dropdown -->
                        <span class="hidden group-hover:block ml-4 mt-10 w-screen max-w-lg absolute top-0 border shadow-lg p-6 bg-white rounded-md z-50 text-gray-900">
                            <article>
                            <header>
                                <div>
                                <span v-if="ticket.status == 'open'" class="px-3 py-1 uppercase text-xs leading-none rounded-sm bg-blue-600 text-white">Abierto</span>
                                <span v-if="ticket.status == 'close'" class="px-3 py-1 uppercase text-xs leading-none rounded-sm bg-gray-600 text-white">Cerrado</span>
                                <span class="ml-2 text-gray-700">Ticket #00{{ ticket.ticket }}</span>
                                </div>
                            </header>
                            <section class="mt-5">
                                <h1 class="text-sm font-semibold mt-3">
                                Comanda listado
                                </h1>
                                <p class="mt-3 text-sm">
                                Consumiciones:
                                <br />
                                <span v-for="(item,index) in ticket.items" @key="index">{{ item.name }} - {{ item.ud }}ud - {{ item.price }}€, </span>
                                </p>
                            </section>
                            <footer class="mt-4">
                                <p class="text-gray-600">Creada por</p>
                                <hr class="mt-1" />
                                <div class="flex mt-3">
                                <p class="font-semibold">{{ ticket.user }}</p>

                                </div>
                                <p class="mt-2 text-md font-bold">
                                TOTAL: {{ ticket.total }}€
                                </p>
                            </footer>
                            </article>
                        </span>

                    </div>
                    <!-- end dropdown -->

                </td>
                <td  headers="Ticket" class="text-left col-span-1 flex items-center w-full">

                    <span v-if="ticket.status == 'open'" style="
                            padding: 2px 5px;
                            font-size: 0.7rem;
                            position: relative;
                            bottom: 2px;
                            " class="font-mono rounded-sm bg-green-500 text-white leading-none">O</span>

                    <span v-if="ticket.status == 'close'" style="
                            padding: 2px 5px;
                            font-size: 0.7rem;
                            position: relative;
                            bottom: 2px;
                            " class="font-mono rounded-sm bg-gray-500 text-white leading-none">C</span>

                    #{{ ticket.ticket }}
                </td>
                <td headers="Comanda" class="text-left col-span-3 flex items-center  w-full  truncate">
                    <span v-for="(item,index) in ticket.items" @key="index">{{ item.name }} - {{ item.ud }}ud - {{ item.price }}€, </span>
                </td>
                <td headers="Camarero" class="text-center col-span-1 flex items-center justify-center w-full truncate">
                    {{ ticket.user }}
                </td>
                <td  headers="Precio" class="text-center col-span-1 flex items-center justify-center  w-full truncate">
                    {{ ticket.total }}€
                </td>
                <td  headers="Precio" class="text-left col-span-1 flex items-center py-1  w-full truncate">
                    <button v-if="ticket.status == 'open'"  @click="changeModal()" class="border-2 border-transparent bg-orange  h-10 w-10/12 font-bold uppercase text-white rounded transition-all hover:border-red-blue hover:bg-yellow-700 hover:text-red-blue">Cerrar</button>
                    <button v-if="ticket.status == 'close'"  class="cursor-none border-2 border-transparent bg-gray-500 h-10 w-10/12 font-bold uppercase text-white rounded ">Cerrado</button>
                </td>

                <!-- START MODAL CLOSE -->
                <modal styles="width: 330px !important; margin-top: 10%" :show="showModal" @close="changeModal">
                    <div class="bg-white rounded-lg w-96">
                        <div class="w-96 border-t-8 border-yellow-600 rounded-lg flex">
                            <div class="w-full pt-9 pr-4 text-center">
                                <h3 class="font-bold text-yellow-700">Cerrar Ticket</h3>
                                <p class="py-4 text-sm text-gray-400">El Ticket <b>#00{{ ticket.ticket }}</b> se va a cobrar ¿Esta seguro?</p>
                            </div>
                        </div>
                        <div class="p-4 flex space-x-4">
                            <button @click="changeModal()" class="w-1/2 px-4 py-3 text-center bg-gray-100 text-gray-400 hover:bg-gray-200 hover:text-black font-bold rounded-lg text-sm">Cancelar</button>
                            <button @click="closeTicket(ticket.ticket); changeModal()" class="w-1/2 px-4 py-3 text-center text-pink-100 bg-yellow-700 rounded-lg hover:bg-yellow-800 ">Cobrar</button>
                        </div>
                    </div>
                </modal>
                <!-- END MODAL CLOSE -->
            </tr>
        <!-- END ROW -->
        </tbody>



    </table>
</template>

<script>
    import Modal from '@/Jetstream/Modal'
    export default {
        components: {
            Modal
        },

        data(){
            return{
                tickets: [],
                showModal: false,
                totalcount: 0

            }
        },

        methods:{

            changeModal(){

                this.showModal = !this.showModal
            },

            async getInvoices(){

                await axios.get('/invoices-list')
                    .then((response) =>{

                        this.tickets = response.data

                        var total = 0
                        this.tickets.forEach(item =>{

                            total = total + item.total
                        })
                        this.$emit('totalFac',total)

                        var open = 0
                        this.tickets.forEach(item =>{
                            if(item.status == 'open'){
                                open++
                            }
                        })
                        this.$emit('open',open)
                        var clos = 0
                        this.tickets.forEach(item =>{
                            if(item.status == 'close'){
                                clos++
                            }
                        })
                        this.$emit('clos',clos)
                    }).catch(err => {
                        console.log(err)
                    })
            },

            async closeTicket(ticket){

                await axios.put('/invoices-close/'+ ticket)
                    .then((response) =>{
                        this.getInvoices()
                        this.getTotal()
                    })
            },

            async getTotal(){

                await axios.get('/invoices-total')
                    .then((response) =>{
                        this.totalcount = response.data
                        this.$emit('totalcount',this.totalcount)
                    })
            }

        },
        mounted() {

            this.getInvoices()
            this.getTotal()
        }

    }
</script>

