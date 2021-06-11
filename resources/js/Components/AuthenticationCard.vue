<template>
    <div class="min-h-screen w-full flex flex-col items-center  bg-gray-200" >
        <div class="w-90 flex justify-center ml-8">
            <slot name="letras"/>
        </div>

        <div :class="classesCard">
            <slot />
        </div>
        <slot name="register" />
    </div>

</template>

<script>
export default {

    props: {
        classesCard: {
            default: 'w-full sm:max-w-md mt-0 px-8 py-7 bg-white shadow-xl overflow-hidden sm:rounded-lg border-t-8 border-b-8 border-yellow-600'
        }
    }
}
</script>
