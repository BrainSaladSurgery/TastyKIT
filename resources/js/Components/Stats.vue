<template>
    <nav class="bg-gray-100 flex p-4">
        <!-- open tickets nav -->
        <section aria-labelledby="open-tickets-tabs-label" class="flex flex-col mr-4 focus:outline-none">
            <label id="open-tickets-tabs-label" class="font-semibold block mb-1 text-sm text-center">Abiertos / Cerrados

            </label>
            <ul class="flex justify-center">
            <li>
                <button class="focus:outline-none focus:bg-yellow-200 p-2 rounded-l-md border border-r-0 bg-white flex flex-col items-center w-24">
                    <p class="font-semibold text-lg">{{ open }}</p>
                    <p class="text-sm uppercase text-gray-600">
                        Abiertos
                    </p>
                </button>
            </li>
            <li>
                <button class="focus:outline-none focus:bg-yellow-200 p-2 border rounded-r-md bg-white flex flex-col items-center w-24 cursor-pointer">
                    <p class="font-semibold text-lg">{{ clos }}</p>
                    <p class="text-sm uppercase text-gray-600">
                        Cerrados
                    </p>
                </button>
            </li>
            </ul>
        </section>
        <!-- stats nav -->
        <section aria-labelledby="ticket-statistics-tabs-label" class="flex flex-col ml-5 pb-2">
            <label id="ticket-statistics-tabs-label" class="font-semibold block mb-1 text-sm">Total ganado en caja</label>
            <ul class="flex justify-center">
                <li>
                    <button class="focus:outline-none focus:bg-yellow-200 p-2 rounded-l-md border  bg-white flex flex-col items-center w-60">
                    <p class="font-semibold text-lg">{{ changeTotal(total) }}€</p>
                    <p class="uppercase text-gray-600 text-sm">
                        Total
                    </p>
                    </button>
                </li>
            </ul>
        </section>
    </nav>
</template>

<script>
export default {
    props:['total','clos','open'],
    methods: {
        changeTotal(total){
            return parseFloat(total).toFixed(2)
        }
    }
}

</script>
