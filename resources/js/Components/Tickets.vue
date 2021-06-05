<template>
    <div id="tickets" class="px-4">
        <section class="flex flex-col p-5 bg-gray-100 " id="card" >
            <h1 class="font-extrabold mb-3 text-center">
                COMANDA
            </h1>
                <article class="w-full  cursor-pointer border rounded-md p-3 bg-white flex text-gray-700 mb-2 hover:border-blue-500 focus:outline-none focus:border-blue-500">
                    <ul class=" w-full flex flex-col overflow-auto h-full">
                        <li class="w-full flex items-center justify-center py-2">
                            <span class="pt-1 pr-2">
                                <svg data-name="Layer 1" id="Layer_1" viewBox="0 0 512 512" class="w-11 h-11 fill-current hover:text-gray-300" xmlns="http://www.w3.org/2000/svg"><path d="M206.32,292.76a51.69,51.69,0,0,0,23.28,7.4v4.72a7.22,7.22,0,0,0,2.46,5.76,7.63,7.63,0,0,0,4.89,1.79,8.19,8.19,0,0,0,4.92-1.69,7.11,7.11,0,0,0,2.75-5.86V300c8.56-1.22,15.12-4.28,19.5-9.12,4.91-5.42,7.63-11.41,8.08-17.74a37.48,37.48,0,0,0-.57-10.53,29.13,29.13,0,0,0-4.33-10.95,31.2,31.2,0,0,0-9.51-8.93,41.32,41.32,0,0,0-13.17-5.16V197.28a15.18,15.18,0,0,1,2.91,1.53,26.81,26.81,0,0,1,5.65,5.12,18.26,18.26,0,0,1,3.22,5.81,30.15,30.15,0,0,1,1.41,6.74c.51,4.53,3.78,6.29,6.92,5.92s5.5-2.73,6.34-7.24c-.24-9.17-3.21-16.66-8.84-22.22a34,34,0,0,0-17.61-9.14v-6.07a7.53,7.53,0,1,0-15.05,0V183a48.38,48.38,0,0,0-11.89,2.74,35.07,35.07,0,0,0-12.26,7.51,32,32,0,0,0-7.6,11.18,30,30,0,0,0-1.88,13.75,32.35,32.35,0,0,0,11,21.44c5.93,4.94,13.75,8,22.6,9l0,38.6c-6.87-.71-12.26-2.53-16.06-5.41a21.35,21.35,0,0,1-8.37-12c-.31-2.71-2.3-5.65-6.77-5.78a5.7,5.7,0,0,0-6.38,7.21A31.33,31.33,0,0,0,206.32,292.76Zm8-64.87a13.31,13.31,0,0,1-3.3-4.76,25.15,25.15,0,0,1-1.27-5.71,19.26,19.26,0,0,1,5.6-14.94c3.31-3.47,8.08-5.66,14.19-6.54v39.41a30.48,30.48,0,0,1-7.9-2.52A29.13,29.13,0,0,1,214.35,227.89Zm41.48,53a18.68,18.68,0,0,1-5.46,4.22,19.13,19.13,0,0,1-5.75,1.85V251.07c4.58,1.39,8,3.37,10.26,6,3,3.47,4.36,8.57,4.19,15.6v.1a12,12,0,0,1-.8,3.63A14.51,14.51,0,0,1,255.83,280.88Z"/><polygon points="330.58 146.35 372.73 146.35 330.58 104.22 330.58 146.35"/><path d="M311.47,155.91V90.69H77.94V466.34H386.25V165.47H321A9.56,9.56,0,0,1,311.47,155.91Zm-79.38,6a79.43,79.43,0,1,1-79.43,79.43A79.43,79.43,0,0,1,232.09,161.86Zm100,256.63H132a9.57,9.57,0,0,1,0-19.13h200.1a9.57,9.57,0,0,1,0,19.13Zm9.55-51.85a9.56,9.56,0,0,1-9.55,9.56H132a9.56,9.56,0,1,1,0-19.12h200.1A9.56,9.56,0,0,1,341.69,366.64Z"/><path d="M125.73,45.66v25.9H321a8.11,8.11,0,0,1,1.21.25,7.69,7.69,0,0,1,1.25.25,9.46,9.46,0,0,1,4.31,2.31l74.77,74.77a9.56,9.56,0,0,1,2.31,4.31,9.06,9.06,0,0,1,.25,1.26,9.44,9.44,0,0,1,.24,1.2V421h28.7V45.66Z"/></svg>
                            </span>
                            <span> <b>Nº Ticket:</b> #{{ numTicket }} </span> <span class="ml-5"><b>Mesa: </b> {{ table.padStart(3,0) }} </span>
                        </li>
                        <hr />
                        <div v-for="(item,index) in items" @key="index">
                            <li class="w-full flex items-center justify-center py-3 mt-1" v-if="item != ''">
                                <span   span class="w-1/3"> <b>- {{ item.name }}</b></span><span class="w-1/6 text-center">{{ item.ud }}Ud  </span><span class="w-1/6 text-center">{{ item.price }}€</span>
                            </li>
                        </div>
                        <hr />
                        <li class="w-full flex items-center justify-center pb-3 pt-5">
                            <span class="w-3/12 text-center"> <b>TOTAL</b></span><span class="w-1/6 text-center">{{ total }}€</span>
                        </li>
                    </ul>
                </article>
                <vue-pag :current="currentPage" :total="total" :perPage="perPage" @page-changed="current = $event"/>
                <button @click="changeModal()" class="w-full border-2 border-transparent bg-yellow-600  py-2  mt-4 font-bold uppercase text-white rounded transition-all hover:border-yellow-700 hover:bg-yellow-700">Generar Comanda</button>

                <modal styles="width: 330px !important; margin-top: 10%" :show="showModal" @close="changeModal">
                    <div class="bg-white rounded-lg w-96">
                        <div class="w-96 border-t-8 border-yellow-600 rounded-lg flex">
                            <div class="w-full pt-9 pr-4 text-center">
                                <h3 class="font-bold text-yellow-700">Generador de Ticket</h3>
                                <p v-if="table == 0 && items.length == 0 " class="py-4 text-sm text-gray-400">Debe seleccionar una mesa y añadir algún producto antes de continuar</p>
                                <div v-else>
                                    <p v-if="table == 0 " class="py-4 text-sm text-gray-400">Debe seleccionar una mesa antes de continuar</p>
                                    <p v-if="items.length == 0" class="py-4 text-sm text-gray-400">Debe añadir algún plato o bebida antes de continuar</p>
                                </div>
                                <p v-if="table != 0 && items.length > 0" class="py-4 text-sm text-gray-400">Se va a generar el Ticket <b>#{{ numTicket }}</b> ¿Estas seguro?</p>
                            </div>
                        </div>
                        <div class="p-4 flex space-x-4 justify-center">
                            <button @click="changeModal()" class="w-1/2 px-4 py-3 text-center bg-gray-100 text-gray-500 hover:bg-gray-200 hover:text-black font-bold rounded-lg text-sm">Cancelar</button>
                            <button v-if="table != 0 && items.length > 0" @click="createTicket(items, table, total, num); changeModal()" class="w-1/2 px-4 py-3 text-center text-pink-100 bg-yellow-600 rounded-lg hover:bg-yellow-700 hover:text-white font-bold text-sm">Crear</button>
                        </div>
                    </div>
                </modal>
        </section>
    </div>


</template>

<script>
    import VuePag from '@ocrv/vue-tailwind-pagination';
    import Modal from '@/Jetstream/Modal';

    export default {
        components:{
            VuePag,
            Modal
        },
        data(){
            return {
                array:[],
                currentPage: 1,
                total: 4,
                perPage: 8,
                total: 0,
                elements: [],
                numTicket: '',
                num: 0,
                showModal: false
            }
        },
        props:['items','table', 'increments'],
        methods:{

            async getNumTicket(){

                await axios.get('/order-numticket')
                    .then(response =>{

                        if(response.data != ''){

                            this.num = response.data.ticket + 1
                            this.numTicket = this.num.toString().padStart(5,0)

                        }else{

                            this.numTicket = '1'.padStart(5,0)
                            this.num = 1
                        }

                    })
            },

            async createTicket(items, table, total, num){


                var datos = {

                    'items' : [items],
                    'table' : table ,
                    'total' : total,
                    'ticket' : num
                }
                await axios.post('/create-order',datos)
                    .then(response =>{

                    }).catch(error =>{

                        console.log(error)
                    })
            },

            changeModal(){

                this.showModal = !this.showModal
            },
        },



        watch: {
            increments: function(val){

                if(this.increments == true){

                    for(var i = 0; this.items.length > i ; i++){

                        if(this.items[i] != ''){
                            var price = this.items[i].price * this.items[i].ud
                            this.elements.push(price)
                            console.log(this.elements)
                        }

                    }
                    var price = 0
                    this.total = 0
                    for(var i = 0; this.elements.length > i; i++){

                        this.total = this.elements[i] + price
                        price = this.total
                    }

                    this.total = parseFloat(this.total).toFixed(2)
                    this.elements = []
                    this.$emit('incremento', false)
                }


            },

        },
        mounted: function(){
            this.getNumTicket()
        }
    }
</script>

<style>
    #tickets{
        position: fixed;
        width: 100%
    }

    #card{
        width: 30%;
        max-height: 40%
    }
</style>
