<template>
    <nav  class=" mt-0  shadow-xl items-center flex justify-between p-5" style="height:60px; background-color:#e6822eff" >
        <ul class="flex">
            <li class="mr-6 ml-3 ">
                <inertia-link href="/" class="fontS text-white font-bold hover:text-gray-600" >
                    <svg class="fill-current h-6 w-6  fontS" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
                </inertia-link>
            </li>
            <li class="mr-6 ml-3 ">
                <inertia-link   class="fontS text-white font-bold hover:text-gray-600" href="/">Home</inertia-link>
            </li>
            <li class="mr-6">
                <a class="fontS text-white font-bold hover:text-gray-600" href="#">Images/Video</a>
            </li>
            <li class="mr-6">
                <a class="fontS text-white font-bold hover:text-gray-600" href="#">About us</a>
            </li>
            <li class="mr-6">
                <a class="fontS text-white font-bold hover:text-gray-600" href="#">Contact</a>
            </li>
        </ul>
        <div>
            <inertia-link href="/register"  class=" hover:text-gray-600 text-white font-bold py-2 px-4">
                Registro
            </inertia-link>
            <inertia-link href="/login"  class="bg-gray-100 hover:bg-gray-100 text-gray-600 font-bold py-2 px-4 border border-gray-400 rounded-full shadow-lg">
                Login
            </inertia-link>

        </div>
    </nav>
</template>

<script>
    import Dropdown from '@/Components/Dropdown'
    export default {
        components: {
            Dropdown
        },
        methods:{
            logout() {
                this.$inertia.post(route('logout'));
            },
        }
    }
</script>

<style>
    .fontS{
        font-size: 17px !important;
    }
</style>

