<template>
    <inertia-link :href="'/'">
        <img class="w-60" :src="logo" alt="Logo" style="border-radius:50%;width:100%;">
    </inertia-link>
</template>

<script>
    import logo from '../../images/logo.jpg'
        export default {
            data(){
                logo: logo
            }
        }
</script>
