<template>
    <!-- Start CARD -->
   <article  class="overflow-hidden rounded-lg shadow-lg w-80 h-120 ">
        <div  @click="modalModify();modalData(data.id)" class="w-full h-60 flex justify-center hover:bg-gray-500 hover:object-cover">
            <img class="object-contain" :src="data.image" alt="imagen del producto">
        </div>
        <div class="flex-wrap mr-3">
            <header class="flex items-center justify-center p-2 ml-4 w-full ">
                <div class="text-gray-600 font-bold cursor-default w-1/2 h-8 mt-3">{{ data.name }}</div>
                <div class="flex items-center justify-center w-1/2">
                    <p class="cursor-default">Cantidad:</p>
                    <div name="cantidad" class=" ml-5 mb-1  text-center text-gray-600 font-bold cursor-default" >{{ data.amount }}</div>
                </div>
            </header>

            <footer class="flex items-center justify-center w-full  p-2 ">
                <button @click="changeModal" class="border-2 border-transparent bg-red-500 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-red-500 hover:bg-transparent hover:text-red-500">
                    Borrar
                </button>
                <button class="border-2 border-transparent bg-yellow-500 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-yellow-500 hover:bg-transparent hover:text-yellow-500">
                    <svg height="48" viewBox="0 0 48 48" width="48" class="w-8 h-8 fill-current hover:text-gray-300" xmlns="http://www.w3.org/2000/svg"><path d="M14 36c-2.21 0-3.98 1.79-3.98 4s1.77 4 3.98 4 4-1.79 4-4-1.79-4-4-4zM2 4v4h4l7.19 15.17-2.7 4.9c-.31.58-.49 1.23-.49 1.93 0 2.21 1.79 4 4 4h24v-4H14.85c-.28 0-.5-.22-.5-.5 0-.09.02-.17.06-.24L16.2 26h14.9c1.5 0 2.81-.83 3.5-2.06l7.15-12.98c.16-.28.25-.61.25-.96 0-1.11-.9-2-2-2H10.43l-1.9-4H2zm32 32c-2.21 0-3.98 1.79-3.98 4s1.77 4 3.98 4 4-1.79 4-4-1.79-4-4-4z"/><path d="M0 0h48v48H0z" fill="none"/></svg>
                </button>
                <button @click="modalModify();modalData(data.id)" class="border-2 border-transparent bg-green-400 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-green-500 hover:bg-transparent hover:text-green-500">
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

