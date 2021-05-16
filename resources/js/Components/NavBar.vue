<template>
    <nav class="bg-yellow-600 mt-0  shadow-xl items-center flex justify-between p-5" style="height:10%">
        <ul class="flex">
            <li class="mr-6 ml-3 ">
                <a class="text-white font-bold hover:text-gray-600" href="#">
                    <svg class="fill-current h-6 w-6 " width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
                </a>
            </li>
            <li class="mr-6 ml-3 ">
                <a class="text-white font-bold hover:text-gray-600" href="#">Home</a>
            </li>
            <li class="mr-6">
                <a class="text-white font-bold hover:text-gray-600" href="#">Images/Video</a>
            </li>
            <li class="mr-6">
                <a class="text-white font-bold hover:text-gray-600" href="#">About us</a>
            </li>
            <li class="mr-6">
                <a class="text-white font-bold hover:text-gray-600" href="#">Disabled</a>
            </li>
        </ul>
        <inertia-link href="/login" class="bg-gray-100 hover:bg-gray-100 text-gray-600 font-bold py-2 px-4 border border-gray-400 rounded-full shadow-lg">
            Login
        </inertia-link>
    </nav>
</template>

<script>
    export default {

    }
</script>

