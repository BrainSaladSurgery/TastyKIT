<template>
    <!-- Start CARD -->
   <article  class="overflow-hidden rounded-lg shadow-lg w-80 h-auto ">
        <div  @click="modalModify();modalData(data.id)" class="w-full h-4/5 flex justify-center hover:bg-gray-500 hover:object-cover">
            <img class="object-contain" :src="data.image" alt="imagen del producto">
        </div>
        <div class="flex-wrap mr-3">
            <header class="grid grid-cols-2 w-full items-center text-right">
                <div class="text-gray-600 font-bold cursor-default w-10/12 col-span-1 h-8 ">{{ data.name }}</div>
                <div class="col-span-1 flex w-full h-8">
                    <div class="cursor-default">Cantidad:</div>
                    <div name="cantidad" class=" ml-5 mb-1  text-center text-gray-600 font-bold cursor-default" >{{ data.amount }}</div>
                </div>
            </header>

            <footer class="flex items-center justify-center w-full  p-2 ">
                <button @click="changeModal" class="border-2 border-transparent bg-red-500 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-red-500 hover:bg-transparent hover:text-red-500">
                    Borrar
                </button>
                <button @click="modalModify();modalData(data.id)" class="border-2 border-transparent bg-green-400 ml-3 py-2  px-4 font-bold uppercase text-white rounded transition-all hover:border-green-500 hover:bg-transparent hover:text-green-500">
                    Editar
                </button>
            </footer>
        </div>
    </article>
    <!-- END CARD -->


    <!-- START MODAL DELETE -->
    <modal styles="width: 330px !important; margin-top: 10%" :show="showModalDelete" @close="changeModal">
        <div class="bg-white rounded-lg w-96">
            <div class="w-96 border-t-8 border-yellow-600 rounded-lg flex">
                <div class="w-full pt-9 pr-4 text-center">
                    <h3 class="font-bold text-yellow-700">¿Estas seguro de borrar el {{ data.type }}?</h3>
                    <p class="py-4 text-sm text-gray-400">El {{ data.type }} con nombre <b>{{ data.name }}</b> y cantidad <b>{{ data.amount }}</b></p>
                </div>
            </div>
            <div class="p-4 flex space-x-4">
                <button @click="changeModal()" class="w-1/2 px-4 py-3 text-center bg-gray-100 text-gray-400 hover:bg-gray-200 hover:text-black font-bold rounded-lg text-sm">Cancelar</button>
                <button @click="deleteData(data); changeModal()" class="w-1/2 px-4 py-3 text-center text-pink-100 bg-yellow-600 rounded-lg hover:bg-yellow-700 hover:text-white font-bold text-sm">Borrar</button>
            </div>
        </div>
    </modal>
    <!-- END MODAL DELETE -->
</template>

<script>
    import Modal from '@/Jetstream/Modal'

    export default {
        components: {
            Modal
        },

        data(){
            return {
                showModal: false,
                showModalDelete: false,
            }
        },

        props: ['data', 'categories'],

        methods: {
            changeModal(){

                this.showModalDelete = !this.showModalDelete
            },

            async deleteData(data){

                switch(data.type){
                    case 'Producto':

                        await axios.delete('/delete-product/'+ data.id).
                        then((response) => {

                            console.log(response)

                        }).catch(error =>{

                            console.log(error)
                        })

                        this.emitDelete()

                        break;

                    case 'Bebida':

                        await axios.delete('/delete-drink/'+ data.id).
                        then((response) => {

                            console.log(response)

                        }).catch(error =>{

                            console.log(error)
                        })

                        this.emitDelete()

                        break;
                }

            },

            emitDelete(){

                this.$emit('emitDelete', true)

            },

            modalModify(){

                this.$emit('changeModal', true)

            },

            modalData(id){

                this.$emit('modalData',id)
            }


        }

    }
</script>

