<template>
    <app-layout>
        <template #navSide>
            <div id="navSide">
                <nav-side />
            </div>
            <div style="width: 80.5px; heigth: auto;"></div>
        </template>
        <template #content>

        <header aria-label="page caption" class="flex-none flex h-16 bg-gray-100 border-t px-4 items-center ">
            <h1 id="page-caption" class="font-bold text-lg text-gray-500">Comandas</h1>
        </header>

        <!-- <nav-top  @changeModalCreate="showModalDish = $event" :tipo ="type" @modalData="dishID = $event"  @changeModal="showModalDishMod = $event"/> -->
        <!-- main content -->
        <main class=" flex min-h-0 border-t w-full  bg-gray-100">
            <section aria-label="main content" class="flex min-h-0 w-2/3 bg-white ">


                <table-comanda  @addTable="mesa = $event" @addItem="item = $event" @increments="incremento = $event" @resta="resta = $event" @ModalDelete="showDele = $event"  @deleteDish="deleteDish = $event"  :dishDelete="borrado"  @changeBorrado="borrado = $event" :cupdate="change" @changeUpdate="change = $event" @editDish="dishID = $event"  @showModal="showModalDishMod = $event"/>
            </section>

            <!-- section Tickets-->
            <div class="w-auto bg-gray-100 ">
                <ultimos-users :items="item" :table="mesa" :increments="incremento" @incremento="incremento = $event" />
            </div>




        </main>

            <modal-alert :data="dato" @changeStatusDelete="borrado = $event" :showDele="showDele" @changeModalStatus="showDele = $event" />
        </template>
    </app-layout>
</template>

<script>

    import AppLayout from '@/Layouts/AppLayout'
    import NavSide from '@/Components/NavSide'
    import Stats from '@/Components/Stats'
    import TicketsResume from '@/Components/TicketsResume'
    import HeadTab from '@/Components/HeadTab'
    import TableComanda from '@/Components/TableComanda'
    import NavTop from '@/Components/NavTop'
    import Modal from '@/Jetstream/Modal'
    import ModalAlert from '@/Components/ModalAlert'
    import UltimosUsers from '@/Components/UltimosUsers'

    export default {
        components: {
            AppLayout,
            NavSide,
            TicketsResume,
            Stats,
            HeadTab,
            TableComanda,
            NavTop,
            Modal,
            ModalAlert,
            UltimosUsers
        },

        data(){
            return {

                deleteDish: '',
                editDish: '',
                dish:[],
                showModalDish: false,
                showModalDishMod: false,
                showDele: false,
                dato: [],
                borrado: false,
                change: false,
                dishID:'',
                type: 'Plato',
                item: [],
                mesa: '',
                incremento: false,
                resta: 0


            }

        },
        methods: {
            async sendData(id){

                await axios.get('/dish/'+id).
                    then((response) =>{

                        this.dato = response.data
                    })
            },

            async getDish(id){

                await axios.get('/dish/'+id).
                    then((response) =>{
                        this.dish = response.data
                        console.log(this.dish)
                        this.dishID = ''

                    })
            },

            changeStateModal(){

                this.showModalDish = !this.showModalDish
            },

            changeStateModalMod(){

                this.showModalDishMod = !this.showModalDishMod
            },

            async createDish(dish){

                const formData = new FormData()
                formData.append('name', dish.name)
                formData.append('price', dish.price)
                formData.append('description', dish.description)
                formData.append('cat_id', dish.cat_id)


                await axios.post('/create-dish', formData).
                    then((response) =>{

                        this.change = true
                        this.resetDataUp()

                    }).catch(error =>{

                        console.log(error)
                    })
            },

            async updateDish(data){
                await axios.put('/update-dish/'+ data.id, this.dish).
                    then((response) =>{

                        this.change = true
                        this.resetDataUp()

                    }).catch(error =>{

                        console.log(error)
                    })
            },

            resetDataUp(){

                this.showModalDishMod = false
                this.dish = []

            },

        },

        watch: {

            // Reset de la modal
            borrado: function(val){
                if(this.borrado == true){

                    this.dato = []
                    this.showDele = false

                }
            },

            //MODIFY
            dishID: function(val){
                if(this.dishID != ''){

                    this.getDish(val)
                }
            },



        }



    }
</script>

<style>
    #navSide{
        position: fixed;
    }


</style>
