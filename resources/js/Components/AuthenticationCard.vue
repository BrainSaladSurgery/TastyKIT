<template>
    <div class="min-h-screen w-full flex flex-col sm:justify-center items-center bg-gray-200" >
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
            default: 'w-full sm:max-w-md mt-0 px-8 py-7 bg-white shadow-xl overflow-hidden sm:rounded-lg'
        }
    }
}
</script>
