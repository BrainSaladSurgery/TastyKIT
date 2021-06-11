<template>
    <!-- Start CARD -->
    <div class="w-full h-full flex flex-col justify-center items-center">
        <article  :class="ocupated == true ? 'rounded-lg transform rotate-45 shadow-lg w-32 h-32  bg-red-400 border-2 border-gray-400': 'rounded-lg transform rotate-45 shadow-lg w-32 h-32  bg-blue-400 border-2 border-gray-400' ">
            <div  @click="modalModify();modalData(data.id)" class="w-full h-full flex justify-center items-center hover:bg-gray-500 hover:object-cover">
                <h1 class="transform -rotate-45 text-white font-bold uppercase">{{ data.name }}</h1>
            </div>
        </article>
        <div class="mt-10 w-full  text-center">
            <p class="text-gray-400"> Pax: <span class="text-gray-800">{{ data.min_pax }}-{{ data.max_pax }}</span></p>

        </div>
    </div>

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
                ocupated: false
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

