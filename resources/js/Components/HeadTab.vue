<template>
    <header class="bg-white border-t flex items-center py-3 px-4">
        <div class="flex">
            <h2 id="content-caption" class="font-semibold">
            Listado de usuarios completo (6)
            </h2>
            <span class="ml-3 group relative">
            <button role="details" aria-controls="info-popup" class="text-blue-700 border-b border-dotted border-blue-700 focus:outline-none text-sm">
                ¡Mira esto!
            </button>
            <div role="tooltip" id="info-popup" class="absolute pt-1 rounded-md rounded-t-lg right-0 transform translate-x-40 mx-auto hidden group-hover:block z-50">
                <div class="border rounded-md rounded-t-lg shadow-lg bg-white w-full max-w-xs w-screen">
                <header class="font-semibold rounded-t-lg bg-gray-300 px-4 py-2">
                    Bienvenido a tastyKIT
                </header>
                <div class="p-4 border-t">
                    <p class="mb-4">
                        Señor usuario, para agradecerle todo tu esfuerzo queremos darle todos los días
                    </p>
                    <p class="mb-1 text-center">
                        GRACIAS
                    </p>
                </div>
                </div>
            </div>
            </span>
        </div>
    </header>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped></style>