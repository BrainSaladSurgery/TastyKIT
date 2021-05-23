<template>
    <nav aria-label="top bar" class="flex-none flex justify-between bg-white h-16">

        <ul aria-label="top bar left" aria-orientation="horizontal" class="flex">
            <!-- add button -->
            <li class="group relative">
            <button aria-controls="add" aria-expanded="false" aria-haspopup="listbox" class="flex items-center h-full px-4 text-sm">
                <i>
                <svg class="fill-current w-3 h-3 mx-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M24 10h-10v-10h-2v10h-10v2h10v10h2v-10h10z" />
                </svg>
                </i>
                <span class="ml-2">Add</span>
            </button>
            <span class="absolute p-1 hidden group-hover:block">
                <slot />
            </span>
            </li>
        </ul>

        <!-- to bar right  -->
        <ul aria-label="top bar right" aria-orientation="horizontal" class="px-8 flex items-center">
            <dropdown>
                <template #trigger>
                    <li class="relative">
                    <input title="Search Bar" v-model="search" @keyup="productSearch" aria-label="search bar" role="search" class="pr-8 pl-4 py-2 rounded-md cursor-pointer focus:border-black focus:cursor-text w-48 placeholder-gray-500" type="text" placeholder="Buscar producto..." />
                    <i class="pointer-events-none absolute top-0 right-0 h-full flex items-center pr-3">
                        <svg class="fill-current w-4 h-4 mx-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M21.172 24l-7.387-7.387c-1.388.874-3.024 1.387-4.785 1.387-4.971 0-9-4.029-9-9s4.029-9 9-9 9 4.029 9 9c0 1.761-.514 3.398-1.387 4.785l7.387 7.387-2.828 2.828zm-12.172-8c3.859 0 7-3.14 7-7s-3.141-7-7-7-7 3.14-7 7 3.141 7 7 7z" />
                        </svg>
                    </i>
                    </li>
                </template>

                <template #content>
                    <div v-if="products.length > 0">
                        <div   v-for="(product,index) in products" :key="index"  class="block flex items-center py-2 px-3 hover:bg-gray-100">
                            <div @click=" modalModify();modalData(product.id)" class="ml-2">
                                <span  class="block font-bold text-gray-700 text-sm">{{ product.name }}</span>
                            </div>
                        </div>
                    </div>
                    <div v-if="search == ''" class="py-2 px-3 flex items-center w-full">
                        <span class="text-sm font-light text-gray-400 ">Busca el producto...</span>
                    </div>
                    <div v-if="!productExists" class="py-2 px-3 flex items-center w-full">
                        <span class="text-sm font-light text-gray-400 ">No existe el producto...</span>
                    </div>
                </template>

            </dropdown>
        </ul>

    </nav>
</template>

<script>
    import Dropdown from '@/Components/Dropdown'
    export default {
        data(){
            return {
                search: '',
                productExists: true,
                products: [],
                showModal: false,

            }
        },
        components:{
            Dropdown,
        },

        methods:{
            async productSearch(){
                if(this.search != ''){

                    await axios.get('/search/'+ this.search)
                        .then(response =>{
                            if(response.data.length > 0 && Array.isArray(response.data)){
                                this.productExists = true
                                this.products = response.data
                            }else{
                                this.productExists = false
                                this.products = []
                            }

                        })

                }else{

                    this.product = []
                }

            },

            modalModify(){

                this.$emit('changeModal', true)

            },

            modalData(id){

                this.$emit('productData', id)
            }

        }
    }
</script>

