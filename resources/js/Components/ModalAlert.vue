<template>
    <!-- START MODAL DELETE -->
    <modal styles="width: 330px !important; margin-top: 10%" :show="showModale" @close="changeModal">
        <div class="bg-white rounded-lg w-96">
            <div class="w-96 border-t-8 border-yellow-600 rounded-lg flex">
                <div class="w-full pt-9 pr-4 text-center">
                    <h3 class="font-bold text-yellow-700">¿Estas seguro de borrar el {{ data.type }}?</h3>
                    <p class="py-4 text-sm text-gray-400">El {{ data.type }} con nombre <b>{{ data.name }}</b><span v-if="data.type == 'Producto' && data.type == 'Bebida'">y cantidad <b>{{ data.email }}</b></span><span v-if="data.type == 'Usuario'"> y email <b>{{ data.email }}</b></span></p>
                </div>
            </div>
            <div class="p-4 flex space-x-4">
                <button @click="changeModal();changeModalStatus()" class="w-1/2 px-4 py-3 text-center bg-gray-100 text-gray-400 hover:bg-gray-200 hover:text-black font-bold rounded-lg text-sm">Cancelar</button>
                <button @click="deleteData(data); changeModal()" class="w-1/2 px-4 py-3 text-center text-pink-100 bg-yellow-600 rounded-lg hover:bg-yellow-700 hover:text-white font-bold text-sm">Borrar</button>
            </div>
        </div>
    </modal>
    <!-- END MODAL DELETE -->
</template>

<script>
    import Modal from '@/Jetstream/Modal'
    export default {
        data(){
            return{
                showModale: false
            }
        },
        components:{
            Modal
        },
        props: ['data', 'showDele'],
        methods: {
            changeModal(){

                this.showModale = !this.showModale
            },

            async deleteData(data){

                switch (data.type) {

                    case 'Usuario':
                        await axios.delete('/user-delete/'+data.id).
                            then((response) =>{
                                this.$emit('changeStatusDelete',true)
                            })
                        break;

                    case 'Plato':
                        await axios.delete('/delete-dish/'+data.id).
                            then((response) =>{
                                this.$emit('changeStatusDelete',true)
                            })
                        break;

                }

            },
            changeModalStatus(){

                this.$emit('changeModalStatus', false)
            }
        },
        watch:{
            showDele: function(val){
                if(this.showDele == true){
                    this.showModale = true
                }
            }
        }


    }
</script>

