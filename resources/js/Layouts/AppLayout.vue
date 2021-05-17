<template>

        <!-- you can clone or fork the repo if you want -->
        <!-- https://github.com/bluebrown/tailwind-zendesk-clone   -->

        <div class="h-full w-full flex overflow-hidden antialiased text-gray-800 bg-white">
        <!-- section body side nav -->
        <nav aria-label="side bar" aria-orientation="vertical" class="flex-none flex flex-col items-center text-center bg-yellow-700 text-gray-100 border-r">
            <div class="h-16 flex items-center justify-center w-full">
            <!-- <img class="h-6 w-6 mx-auto" src="https://raw.githubusercontent.com/bluebrown/tailwind-zendesk-clone/master/public/assets/leaves.png" /> -->
                <svg data-name="Layer 1" id="Layer_1" viewBox="0 0 128 128" class="w-12 h-12" xmlns="http://www.w3.org/2000/svg"><defs></defs><title/><circle class="cls-1" cx="64" cy="64" r="60"/><circle class="cls-2" cx="64" cy="64" r="48"/><path class="cls-3" d="M110.08,80.5l-.88-2.69c-2.89-7.83-17.3-46.91-17.78-48l-.5-1.29H90.8a30,30,0,0,0-53.6,0h-.13l-.52,1.36C35.51,32.44,19.07,77.1,19,77.42a47.49,47.49,0,0,0-1.54,24.39,60,60,0,0,0,93.16,0,49.66,49.66,0,0,0-.5-21.31Z"/><path class="cls-4" d="M23.45,108.21a60,60,0,0,0,81.1,0,43.38,43.38,0,0,0,.84-29.09l-.14-.46c-4.87-13.2-16.91-45.81-17.49-47.22l-.05-.1a26,26,0,0,0-47.42,0l0,.08c-.57,1.38-16.82,45.28-17.5,47.26a43.4,43.4,0,0,0,.7,29.52Z"/><path class="cls-5" d="M99.57,80.59C93.23,63.4,83,35.81,82.23,33.78a20,20,0,0,0-36.46,0C44.63,36.72,29.1,78.67,28.44,80.59a37.42,37.42,0,0,0,7,36.2,60.05,60.05,0,0,0,57.06,0A37.41,37.41,0,0,0,99.66,80.9Z"/><path class="cls-2" d="M99.57,80.59C93.23,63.4,83,35.81,82.23,33.78a20,20,0,0,0-36.46,0C44.63,36.72,29.1,78.67,28.44,80.59a37.42,37.42,0,0,0,7,36.2,60.05,60.05,0,0,0,57.06,0A37.41,37.41,0,0,0,99.66,80.9Z"/><path class="cls-6" d="M64,122A29.49,29.49,0,0,1,36,83.13c.67-1.93,15.5-42,17.11-46.24a12,12,0,0,1,21.72,0c1.07,2.79,9.4,25.32,17.13,46.26l0,.12A29.49,29.49,0,0,1,64,122Z"/><circle class="cls-7" cx="64" cy="92.5" r="20.5"/><circle class="cls-8" cx="64" cy="92.5" r="11"/><circle class="cls-9" cx="79.66" cy="56.5" r="7.49"/><path class="cls-10" d="M48.34,68a11.46,11.46,0,0,1-9.1-4.48"/><path class="cls-10" d="M79.84,68a11.52,11.52,0,0,0,9.85-5.56"/><circle class="cls-9" cx="48.34" cy="56.5" r="7.49"/><path class="cls-11" d="M64,113A20.49,20.49,0,0,0,84.13,96.3,22.3,22.3,0,0,0,72,93.17c-.54,0-1.08,0-1.63.11A2.07,2.07,0,0,0,68.63,95a1.2,1.2,0,0,1-1.81.67A3.12,3.12,0,0,0,63.87,95a22.58,22.58,0,0,0-12.49,13.66A20.36,20.36,0,0,0,64,113Z"/><circle class="cls-8" cx="79.66" cy="56.5" r="4.09"/><circle class="cls-8" cx="48.34" cy="56.5" r="4.09"/><path class="cls-12" d="M68.29,95.5a1.16,1.16,0,0,1-1.47.13,4.87,4.87,0,0,0-.59-.36c.43,3.56,1.66,9.24,5.21,13.08a1,1,0,0,0,.73.32,1,1,0,0,0,.68-.27,1,1,0,0,0,.06-1.41C69.91,103.75,68.74,98.81,68.29,95.5Z"/><path class="cls-4" d="M61.68,59.51,60,64.28A2,2,0,0,0,61.93,67h4.19a2,2,0,0,0,1.93-2.72l-1.67-4.77A2.49,2.49,0,0,0,61.68,59.51Z"/><path class="cls-3" d="M61.68,59.51,60,64.28A2,2,0,0,0,61.93,67h4.19a2,2,0,0,0,1.93-2.72l-1.67-4.77A2.49,2.49,0,0,0,61.68,59.51Z"/></svg>
            </div>

            <ul>
            <li>
                <a title="Home" href="#home" class="h-16 px-6 flex items-center text-white w-full">
                    <svg data-name="Layer 1" id="Layer_1" viewBox="0 0 100 100" class="w-10 h-10 fill-current" xmlns="http://www.w3.org/2000/svg"><title/><path d="M81.49,21.21V32.35a6.48,6.48,0,0,1-6.11,6.56,6.19,6.19,0,0,1-4.57-1.76,6.26,6.26,0,0,1-1.91-4.53,6.3,6.3,0,0,1-12.6,0,6.3,6.3,0,1,1-12.6,0,6.3,6.3,0,0,1-12.6,0,6.27,6.27,0,0,1-6.48,6.29,6.48,6.48,0,0,1-6.11-6.56V21.21A3.21,3.21,0,0,1,21.72,18H78.28A3.21,3.21,0,0,1,81.49,21.21ZM75.12,42.92a10.16,10.16,0,0,1-6.23-2.15,10.29,10.29,0,0,1-12.59,0,10.31,10.31,0,0,1-12.6,0,10.29,10.29,0,0,1-12.59,0,10.25,10.25,0,0,1-6.27,2.14h-.47V79.18A2.83,2.83,0,0,0,27.2,82h8.61V52.33H64.19V82h8.62a2.83,2.83,0,0,0,2.83-2.82V42.9h-.52ZM58.27,58.29a.54.54,0,0,0-.54.53v4.5a.48.48,0,1,1-1,0v-4.5a.54.54,0,0,0-.54-.53h-.16a.54.54,0,0,0-.54.53v4.5a.49.49,0,0,1-1,0v-4.5a.53.53,0,0,0-.53-.53h-.17a.53.53,0,0,0-.53.53v4.5a.49.49,0,0,1-1,0v-4.5a.54.54,0,0,0-1.08,0v6.64A3.85,3.85,0,0,0,54,69.15l-.51,11.26a1.54,1.54,0,1,0,3.08,0l-.51-11.25a3.74,3.74,0,0,0,2.73-3.57V58.82A.54.54,0,0,0,58.27,58.29ZM45,58.29c-2.08,0-3.77,2.52-3.77,5.63,0,2.57,1.16,4.73,2.73,5.4l-.5,11.09a1.54,1.54,0,1,0,3.08,0L46,69.32c1.58-.67,2.73-2.83,2.73-5.4C48.72,60.81,47,58.29,45,58.29Z"/></svg>

                </a>
            </li>
            <li>
                <a title="Views" href="#views" class="h-16 px-6 flex items-center hover:text-white w-full">
                <i class="mx-auto">
                    <svg class="fill-current h-5 w-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M18.546 3h-13.069l-5.477 8.986v9.014h24v-9.014l-5.454-8.986zm-3.796 12h-5.5l-2.25-3h-4.666l4.266-7h10.82l4.249 7h-4.669l-2.25 3zm-9.75-4l.607-1h12.787l.606 1h-14zm12.18-3l.607 1h-11.573l.607-1h10.359zm-1.214-2l.606 1h-9.144l.607-1h7.931z" />
                    </svg>
                </i>
                </a>
            </li>
            <li>
                <a title="Customer Lists" href="#customer-lists" class="h-16 px-6 flex items-center hover:text-white w-full">
                <i class="mx-auto">
                    <svg class="fill-current h-5 w-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M19 7.001c0 3.865-3.134 7-7 7s-7-3.135-7-7c0-3.867 3.134-7.001 7-7.001s7 3.134 7 7.001zm-1.598 7.18c-1.506 1.137-3.374 1.82-5.402 1.82-2.03 0-3.899-.685-5.407-1.822-4.072 1.793-6.593 7.376-6.593 9.821h24c0-2.423-2.6-8.006-6.598-9.819z" />
                    </svg>
                </i>
                </a>
            </li>
            <li>
                <a title="Reporting" href="#reporting" class="h-16 px-6 flex items-center hover:text-white w-full">
                <i class="mx-auto">
                    <svg data-name="Layer 1" id="Layer_1" viewBox="0 0 64 64" class="w-10 h-10 fill-current" xmlns="http://www.w3.org/2000/svg"><path d="M56.4336.0986a1.0015,1.0015,0,0,0-1.0586.12L51,3.72,46.625.2188a1.0038,1.0038,0,0,0-1.25,0L41,3.72,36.625.2188a1.0038,1.0038,0,0,0-1.25,0L31,3.72,26.625.2188a1.0038,1.0038,0,0,0-1.25,0L21,3.72,16.625.2188A.9281.9281,0,0,0,16.51.16.96.96,0,0,0,16.3275.066a.9623.9623,0,0,0-.1986-.04A.946.946,0,0,0,16,0c-.02,0-.0362.01-.0557.0112a.9934.9934,0,0,0-.1936.039.99.99,0,0,0-.1831.0573.9859.9859,0,0,0-.1443.0972A.9816.9816,0,0,0,15.2609.34c-.0126.014-.03.02-.0421.0352a.9277.9277,0,0,0-.06.116.9636.9636,0,0,0-.0929.1807.959.959,0,0,0-.0409.2031A.941.941,0,0,0,15,1V59a3,3,0,0,1-6,0V47a1,1,0,0,0-2,0V59a5.0059,5.0059,0,0,0,5,5H52a5.0059,5.0059,0,0,0,5-5V1A1.0012,1.0012,0,0,0,56.4336.0986ZM55,59a3.0033,3.0033,0,0,1-3,3H15.9744A4.9514,4.9514,0,0,0,17,59V3.0812l3.375,2.7a1.004,1.004,0,0,0,1.25,0L26,2.28l4.375,3.501a1.004,1.004,0,0,0,1.25,0L36,2.28l4.375,3.501a1.004,1.004,0,0,0,1.25,0L46,2.28l4.375,3.501a1.004,1.004,0,0,0,1.25,0L55,3.0811ZM30,31a1,1,0,0,0,0,2h5v2a1,1,0,0,0,2,0V33h2a4,4,0,0,0,0-8H37V21h5a1,1,0,0,0,0-2H37V17a1,1,0,0,0-2,0v2H33a4,4,0,0,0,0,8h2v4Zm3-6a2,2,0,0,1,0-4h2v4Zm4,2h2a2,2,0,0,1,0,4H37ZM51,44a1,1,0,0,1-1,1H22a1,1,0,0,1,0-2H50A1,1,0,0,1,51,44Zm0,6a1,1,0,0,1-1,1H22a1,1,0,0,1,0-2H50A1,1,0,0,1,51,50Zm0,6a1,1,0,0,1-1,1H22a1,1,0,0,1,0-2H50A1,1,0,0,1,51,56Z"/></svg>
                </i>
                </a>
            </li>
            <li>
                <a title="Admin" href="#admin" class="h-16 px-6 flex items-center hover:text-white w-full">
                <i class="mx-auto">
                    <svg class="fill-current h-5 w-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M24 13.616v-3.232c-1.651-.587-2.694-.752-3.219-2.019v-.001c-.527-1.271.1-2.134.847-3.707l-2.285-2.285c-1.561.742-2.433 1.375-3.707.847h-.001c-1.269-.526-1.435-1.576-2.019-3.219h-3.232c-.582 1.635-.749 2.692-2.019 3.219h-.001c-1.271.528-2.132-.098-3.707-.847l-2.285 2.285c.745 1.568 1.375 2.434.847 3.707-.527 1.271-1.584 1.438-3.219 2.02v3.232c1.632.58 2.692.749 3.219 2.019.53 1.282-.114 2.166-.847 3.707l2.285 2.286c1.562-.743 2.434-1.375 3.707-.847h.001c1.27.526 1.436 1.579 2.019 3.219h3.232c.582-1.636.75-2.69 2.027-3.222h.001c1.262-.524 2.12.101 3.698.851l2.285-2.286c-.744-1.563-1.375-2.433-.848-3.706.527-1.271 1.588-1.44 3.221-2.021zm-12 2.384c-2.209 0-4-1.791-4-4s1.791-4 4-4 4 1.791 4 4-1.791 4-4 4z" />
                    </svg>
                </i>
                </a>
            </li>
            </ul>

            <div class="mt-auto h-16 flex items-center w-full">
            <img style="filter: invert(85%);" class="h-8 w-10 mx-auto" src="https://raw.githubusercontent.com/bluebrown/tailwind-zendesk-clone/master/public/assets/chi.png" />
            </div>
        </nav>

        <div class="flex-1 flex flex-col">
            <!-- section body top nav -->
            <nav aria-label="top bar" class="flex-none flex justify-between bg-white h-16">
            <!-- top bar left -->
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
                    <ul id="add" role="listbox" class="outline-none py-2 bg-white border rounded-md w-screen max-w-md w-dropdown-large shadow-lg focus:outline-none leading-relaxed">
                    <li role="separator" class="mb-2">
                        <label class="block px-4 py-3 font-semibold">
                        New
                        </label>
                        <hr />
                    </li>
                    <li role="option" class="px-6 py-1 my-1 focus:outline-none focus:bg-blue-100 hover:bg-blue-100 cursor-pointer">
                        Ticket
                    </li>
                    <li role="option" class="px-6 py-1 my-1 focus:outline-none focus:bg-blue-100 hover:bg-blue-100 cursor-pointer">
                        User
                    </li>
                    <li role="option" class="px-6 py-1 my-1 focus:outline-none focus:bg-blue-100 hover:bg-blue-100 cursor-pointer">
                        Organization
                    </li>
                    <li role="option" class="px-6 py-1 my-1 focus:outline-none focus:bg-blue-100 hover:bg-blue-100 cursor-pointer">
                        Search
                    </li>
                    <li role="separator" class="mb-2">
                        <label class="block px-4 py-3 font-semibold">Recently Viewed</label>
                        <hr />
                    </li>
                    <li role="option" class="px-6 py-1 my-1 focus:outline-none focus:bg-blue-100 hover:bg-blue-100 cursor-pointer">
                        <div class="flex">
                        <div class="pr-2">
                            <span style="padding: 2px 5px; font-size: 0.7rem;" class="font-mono rounded-sm bg-red-600 text-white leading-none">O</span>
                        </div>
                        <div class="flex-1">
                            <p>Vertias - ams opps issue</p>
                            <p class="text-gray-600">
                            <span>#ticket/14352</span>
                            <span class="mx-1 font-black">&#183;</span>
                            <span>Nico Braun</span>
                            </p>
                        </div>
                        </div>
                    </li>
                    <li role="option" class="px-6 py-1 my-1 focus:outline-none focus:bg-blue-100 hover:bg-blue-100 cursor-pointer">
                        <div class="flex">
                        <div class="pr-2">
                            <span style="padding: 2px 5px; font-size: 0.7rem;" class="font-mono rounded-sm bg-yellow-400 text-black leading-none">N</span>
                        </div>
                        <div class="flex-1">
                            <p>Vertias - ams opps issue</p>
                            <p class="text-gray-600">
                            <span>#ticket/14352</span>
                            <span class="mx-1 font-black">&#183;</span>
                            <span>Nico Braun</span>
                            </p>
                        </div>
                        </div>
                    </li>
                    <li role="option" class="px-6 py-1 my-1 focus:outline-none focus:bg-blue-100 hover:bg-blue-100 cursor-pointer">
                        <div class="flex">
                        <div class="pr-2">
                            <span style="padding: 2px 5px; font-size: 0.7rem;" class="font-mono rounded-sm bg-gray-500 text-white leading-none">S</span>
                        </div>
                        <div class="flex-1">
                            <p>Vertias - ams opps issue</p>
                            <p class="text-gray-600">
                            <span>#ticket/14352</span>
                            <span class="mx-1 font-black">&#183;</span>
                            <span>Nico Braun</span>
                            </p>
                        </div>
                        </div>
                    </li>
                    <li role="option" class="px-6 py-1 my-1 focus:outline-none focus:bg-blue-100 hover:bg-blue-100 cursor-pointer">
                        <div class="flex">
                        <div class="pr-2">
                            <span style="padding: 2px 5px; font-size: 0.7rem;" class="font-mono rounded-sm bg-blue-600 text-white leading-none">P</span>
                        </div>
                        <div class="flex-1">
                            <p>Vertias - ams opps issue</p>
                            <p class="text-gray-600">
                            <span>#ticket/14352</span>
                            <span class="mx-1 font-black">&#183;</span>
                            <span>Nico Braun</span>
                            </p>
                        </div>
                        </div>
                    </li>

                    <li role="option" class="px-6 py-1 my-1 focus:outline-none focus:bg-blue-100 hover:bg-blue-100 cursor-pointer">
                        <div class="flex">
                        <div class="pr-2">
                            <span style="padding: 2px 5px; font-size: 0.7rem;" class="font-mono rounded-sm bg-gray-800 text-white leading-none">H</span>
                        </div>
                        <div class="flex-1">
                            <p>Vertias - ams opps issue</p>
                            <p class="text-gray-600">
                            <span>#ticket/14352</span>
                            <span class="mx-1 font-black">&#183;</span>
                            <span>Nico Braun</span>
                            </p>
                        </div>
                        </div>
                    </li>
                    </ul>
                </span>
                </li>
            </ul>

            <!-- to bar right  -->
            <ul aria-label="top bar right" aria-orientation="horizontal" class="px-8 flex items-center">
                <li class="relative">
                <input title="Search Bar" aria-label="search bar" role="search" class="pr-8 pl-4 py-2 rounded-md cursor-pointer transition-all duration-300 ease-in-out focus:border-black focus:cursor-text w-4 focus:w-64 placeholder-transparent focus:placeholder-gray-500" type="text" placeholder="Search Chi Desk Support" />
                <i class="pointer-events-none absolute top-0 right-0 h-full flex items-center pr-3">
                    <svg class="fill-current w-4 h-4 mx-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M21.172 24l-7.387-7.387c-1.388.874-3.024 1.387-4.785 1.387-4.971 0-9-4.029-9-9s4.029-9 9-9 9 4.029 9 9c0 1.761-.514 3.398-1.387 4.785l7.387 7.387-2.828 2.828zm-12.172-8c3.859 0 7-3.14 7-7s-3.141-7-7-7-7 3.14-7 7 3.141 7 7 7z" />
                    </svg>
                </i>
                </li>

                <li class="h-8 w-8 ml-3">
                <button title="Notifications" aria-label="notifications" class="w-full h-full text-white bg-gray-600 rounded-md focus:outline-none focus:shadow-outline">
                    <i>
                    <svg class="fill-current w-4 h-4 mx-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M15.137 3.945c-.644-.374-1.042-1.07-1.041-1.82v-.003c.001-1.172-.938-2.122-2.096-2.122s-2.097.95-2.097 2.122v.003c.001.751-.396 1.446-1.041 1.82-4.667 2.712-1.985 11.715-6.862 13.306v1.749h20v-1.749c-4.877-1.591-2.195-10.594-6.863-13.306zm-3.137-2.945c.552 0 1 .449 1 1 0 .552-.448 1-1 1s-1-.448-1-1c0-.551.448-1 1-1zm3 20c0 1.598-1.392 3-2.971 3s-3.029-1.402-3.029-3h6z" />
                    </svg>
                    </i>
                </button>
                </li>

                <li class="h-8 w-8 ml-3">
                <button title="v2 REPL" aria-label="repl" class="w-full h-full text-white bg-gray-600 rounded-md focus:outline-none focus:shadow-outline">
                    <i>
                    <svg class="fill-current w-4 h-4 mx-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M22 6v16h-20v-16h20zm2-6h-24v24h24v-24zm-11 11v1.649l3.229 1.351-3.229 1.347v1.653l5-2.201v-1.599l-5-2.2zm-7 2.201v1.599l5 2.2v-1.653l-3.229-1.347 3.229-1.351v-1.649l-5 2.201z" />
                    </svg>
                    </i>
                </button>
                </li>

                <li class="h-8 w-8 ml-3">
                <button title="Products" aria-label="chi desk products" class="w-full h-full rounded-md focus:outline-none focus:shadow-outline">
                    <i class="text-gray-600">
                    <svg class="fill-current w-5 h-5 mx-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M11 11h-11v-11h11v11zm13 0h-11v-11h11v11zm-13 13h-11v-11h11v11zm13 0h-11v-11h11v11z" />
                    </svg>
                    </i>
                </button>
                </li>

                <li class="h-10 w-10 ml-3">
                <button title="Page Menu" aria-label="page menu" class="h-full w-full rounded-full border focus:outline-none focus:shadow-outline">
                    <img class="h-full w-full rounded-full mx-auto" src="https://raw.githubusercontent.com/bluebrown/tailwind-zendesk-clone/master/public/assets/me.jpg" />
                </button>
                </li>
            </ul>
            </nav>

            <!-- section body header -->
            <header aria-label="page caption" class="flex-none flex h-16 bg-gray-100 border-t px-4 items-center">
            <h1 id="page-caption" class="font-semibold text-lg">Dashboard</h1>
            </header>

            <!-- main content -->
            <main class="flex-grow flex min-h-0 border-t">
            <!-- section update to tickets -->
            <section class="flex flex-col p-4 w-full max-w-sm flex-none bg-gray-100 min-h-0 overflow-auto">
                <h1 class="font-semibold mb-3">
                Updates to your tickets
                </h1>
                <ul>
                <li>
                    <article tabindex="0" class="cursor-pointer border rounded-md p-3 bg-white flex text-gray-700 mb-2 hover:border-green-500 focus:outline-none focus:border-green-500">
                    <span class="flex-none pt-1 pr-2">
                        <img class="h-8 w-8 rounded-md" src="https://raw.githubusercontent.com/bluebrown/tailwind-zendesk-clone/master/public/assets/avatar.png" />
                    </span>
                    <div class="flex-1">
                        <header class="mb-1">
                        Tarun T <span class="font-semibold">commented</span> on
                        <h1 class="inline">"RE: WPMS issue".</h1>
                        </header>
                        <p class="text-gray-600">
                        Hi Mazhar, Please note this issue comes when user is not
                        closing or logout sy…
                        </p>
                        <footer class="text-gray-500 mt-2 text-sm">
                        Friday 22:16
                        </footer>
                    </div>
                    </article>
                </li>
                <li>
                    <article tabindex="0" class="cursor-pointer border rounded-md p-3 bg-white flex text-gray-700 mb-2 hover:border-green-500 focus:outline-none focus:border-green-500">
                    <span class="flex-none pt-1 pr-2">
                        <img class="h-8 w-8 rounded-md" src="https://raw.githubusercontent.com/bluebrown/tailwind-zendesk-clone/master/public/assets/avatar.png" />
                    </span>
                    <div class="flex-1">
                        <header class="mb-1">
                        Tarun T <span class="font-semibold">commented</span> on
                        <h1 class="inline">"RE: WPMS issue".</h1>
                        </header>
                        <p class="text-gray-600">
                        Hi Mazhar, Please note this issue comes when user is not
                        closing or logout sy…
                        </p>
                        <footer class="text-gray-500 mt-2 text-sm">
                        Friday 22:16
                        </footer>
                    </div>
                    </article>
                </li>
                <li>
                    <article tabindex="0" class="cursor-pointer border rounded-md p-3 bg-white flex text-gray-700 mb-2 hover:border-green-500 focus:outline-none focus:border-green-500">
                    <span class="flex-none pt-1 pr-2">
                        <img class="h-8 w-8 rounded-md" src="https://raw.githubusercontent.com/bluebrown/tailwind-zendesk-clone/master/public/assets/avatar.png" />
                    </span>
                    <div class="flex-1">
                        <header class="mb-1">
                        Tarun T <span class="font-semibold">commented</span> on
                        <h1 class="inline">"RE: WPMS issue".</h1>
                        </header>
                        <p class="text-gray-600">
                        Hi Mazhar, Please note this issue comes when user is not
                        closing or logout sy…
                        </p>
                        <footer class="text-gray-500 mt-2 text-sm">
                        Friday 22:16
                        </footer>
                    </div>
                    </article>
                </li>
                <li>
                    <article tabindex="0" class="cursor-pointer border rounded-md p-3 bg-white flex text-gray-700 mb-2 hover:border-green-500 focus:outline-none focus:border-green-500">
                    <span class="flex-none pt-1 pr-2">
                        <img class="h-8 w-8 rounded-md" src="https://raw.githubusercontent.com/bluebrown/tailwind-zendesk-clone/master/public/assets/avatar.png" />
                    </span>
                    <div class="flex-1">
                        <header class="mb-1">
                        Tarun T <span class="font-semibold">commented</span> on
                        <h1 class="inline">"RE: WPMS issue".</h1>
                        </header>
                        <p class="text-gray-600">
                        Hi Mazhar, Please note this issue comes when user is not
                        closing or logout sy…
                        </p>
                        <footer class="text-gray-500 mt-2 text-sm">
                        Friday 22:16
                        </footer>
                    </div>
                    </article>
                </li>
                <li>
                    <article tabindex="0" class="cursor-pointer border rounded-md p-3 bg-white flex text-gray-700 mb-2 hover:border-green-500 focus:outline-none focus:border-green-500">
                    <span class="flex-none pt-1 pr-2">
                        <img class="h-8 w-8 rounded-md" src="https://raw.githubusercontent.com/bluebrown/tailwind-zendesk-clone/master/public/assets/avatar.png" />
                    </span>
                    <div class="flex-1">
                        <header class="mb-1">
                        Tarun T <span class="font-semibold">commented</span> on
                        <h1 class="inline">"RE: WPMS issue".</h1>
                        </header>
                        <p class="text-gray-600">
                        Hi Mazhar, Please note this issue comes when user is not
                        closing or logout sy…
                        </p>
                        <footer class="text-gray-500 mt-2 text-sm">
                        Friday 22:16
                        </footer>
                    </div>
                    </article>
                </li>
                <li>
                    <article tabindex="0" class="cursor-pointer border rounded-md p-3 bg-white flex text-gray-700 mb-2 hover:border-green-500 focus:outline-none focus:border-green-500">
                    <span class="flex-none pt-1 pr-2">
                        <img class="h-8 w-8 rounded-md" src="https://raw.githubusercontent.com/bluebrown/tailwind-zendesk-clone/master/public/assets/avatar.png" />
                    </span>
                    <div class="flex-1">
                        <header class="mb-1">
                        Tarun T <span class="font-semibold">commented</span> on
                        <h1 class="inline">"RE: WPMS issue".</h1>
                        </header>
                        <p class="text-gray-600">
                        Hi Mazhar, Please note this issue comes when user is not
                        closing or logout sy…
                        </p>
                        <footer class="text-gray-500 mt-2 text-sm">
                        Friday 22:16
                        </footer>
                    </div>
                    </article>
                </li>
                <li>
                    <article tabindex="0" class="cursor-pointer border rounded-md p-3 bg-white flex text-gray-700 mb-2 hover:border-green-500 focus:outline-none focus:border-green-500">
                    <span class="flex-none pt-1 pr-2">
                        <img class="h-8 w-8 rounded-md" src="https://raw.githubusercontent.com/bluebrown/tailwind-zendesk-clone/master/public/assets/avatar.png" />
                    </span>
                    <div class="flex-1">
                        <header class="mb-1">
                        Tarun T <span class="font-semibold">commented</span> on
                        <h1 class="inline">"RE: WPMS issue".</h1>
                        </header>
                        <p class="text-gray-600">
                        Hi Mazhar, Please note this issue comes when user is not
                        closing or logout sy…
                        </p>
                        <footer class="text-gray-500 mt-2 text-sm">
                        Friday 22:16
                        </footer>
                    </div>
                    </article>
                </li>
                <li>
                    <article tabindex="0" class="cursor-pointer border rounded-md p-3 bg-white flex text-gray-700 mb-2 hover:border-green-500 focus:outline-none focus:border-green-500">
                    <span class="flex-none pt-1 pr-2">
                        <img class="h-8 w-8 rounded-md" src="https://raw.githubusercontent.com/bluebrown/tailwind-zendesk-clone/master/public/assets/avatar.png" />
                    </span>
                    <div class="flex-1">
                        <header class="mb-1">
                        Tarun T <span class="font-semibold">commented</span> on
                        <h1 class="inline">"RE: WPMS issue".</h1>
                        </header>
                        <p class="text-gray-600">
                        Hi Mazhar, Please note this issue comes when user is not
                        closing or logout sy…
                        </p>
                        <footer class="text-gray-500 mt-2 text-sm">
                        Friday 22:16
                        </footer>
                    </div>
                    </article>
                </li>
                <li>
                    <article tabindex="0" class="cursor-pointer border rounded-md p-3 bg-white flex text-gray-700 mb-2 hover:border-green-500 focus:outline-none focus:border-green-500">
                    <span class="flex-none pt-1 pr-2">
                        <img class="h-8 w-8 rounded-md" src="https://raw.githubusercontent.com/bluebrown/tailwind-zendesk-clone/master/public/assets/avatar.png" />
                    </span>
                    <div class="flex-1">
                        <header class="mb-1">
                        Tarun T <span class="font-semibold">commented</span> on
                        <h1 class="inline">"RE: WPMS issue".</h1>
                        </header>
                        <p class="text-gray-600">
                        Hi Mazhar, Please note this issue comes when user is not
                        closing or logout sy…
                        </p>
                        <footer class="text-gray-500 mt-2 text-sm">
                        Friday 22:16
                        </footer>
                    </div>
                    </article>
                </li>
                <li>
                    <article tabindex="0" class="cursor-pointer border rounded-md p-3 bg-white flex text-gray-700 mb-2 hover:border-green-500 focus:outline-none focus:border-green-500">
                    <span class="flex-none pt-1 pr-2">
                        <img class="h-8 w-8 rounded-md" src="https://raw.githubusercontent.com/bluebrown/tailwind-zendesk-clone/master/public/assets/avatar.png" />
                    </span>
                    <div class="flex-1">
                        <header class="mb-1">
                        Tarun T <span class="font-semibold">commented</span> on
                        <h1 class="inline">"RE: WPMS issue".</h1>
                        </header>
                        <p class="text-gray-600">
                        Hi Mazhar, Please note this issue comes when user is not
                        closing or logout sy…
                        </p>
                        <footer class="text-gray-500 mt-2 text-sm">
                        Friday 22:16
                        </footer>
                    </div>
                    </article>
                </li>
                <li>
                    <article tabindex="0" class="cursor-pointer border rounded-md p-3 bg-white flex text-gray-700 mb-2 hover:border-green-500 focus:outline-none focus:border-green-500">
                    <span class="flex-none pt-1 pr-2">
                        <img class="h-8 w-8 rounded-md" src="https://raw.githubusercontent.com/bluebrown/tailwind-zendesk-clone/master/public/assets/avatar.png" />
                    </span>
                    <div class="flex-1">
                        <header class="mb-1">
                        Tarun T <span class="font-semibold">commented</span> on
                        <h1 class="inline">"RE: WPMS issue".</h1>
                        </header>
                        <p class="text-gray-600">
                        Hi Mazhar, Please note this issue comes when user is not
                        closing or logout sy…
                        </p>
                        <footer class="text-gray-500 mt-2 text-sm">
                        Friday 22:16
                        </footer>
                    </div>
                    </article>
                </li>
                <li>
                    <article tabindex="0" class="cursor-pointer border rounded-md p-3 bg-white flex text-gray-700 mb-2 hover:border-green-500 focus:outline-none focus:border-green-500">
                    <span class="flex-none pt-1 pr-2">
                        <img class="h-8 w-8 rounded-md" src="https://raw.githubusercontent.com/bluebrown/tailwind-zendesk-clone/master/public/assets/avatar.png" />
                    </span>
                    <div class="flex-1">
                        <header class="mb-1">
                        Tarun T <span class="font-semibold">commented</span> on
                        <h1 class="inline">"RE: WPMS issue".</h1>
                        </header>
                        <p class="text-gray-600">
                        Hi Mazhar, Please note this issue comes when user is not
                        closing or logout sy…
                        </p>
                        <footer class="text-gray-500 mt-2 text-sm">
                        Friday 22:16
                        </footer>
                    </div>
                    </article>
                </li>
                </ul>
            </section>

            <!-- section content -->
            <section aria-label="main content" class="flex min-h-0 flex-col flex-auto border-l">
                <!-- content navigation -->
                <nav class="bg-gray-100 flex p-4">
                <!-- open tickets nav -->
                <section aria-labelledby="open-tickets-tabs-label" class="mr-4 focus:outline-none">
                    <label id="open-tickets-tabs-label" class="font-semibold block mb-1 text-sm">Open Tickets
                    <span class="font-normal text-gray-700">(current)</span>
                    </label>
                    <ul class="flex">
                    <li>
                        <button class="focus:outline-none focus:bg-yellow-200 p-2 rounded-l-md border border-r-0 bg-white flex flex-col items-center w-24">
                        <p class="font-semibold text-lg">6</p>
                        <p class="text-sm uppercase text-gray-600">
                            You
                        </p>
                        </button>
                    </li>
                    <li>
                        <button class="focus:outline-none focus:bg-yellow-200 p-2 border rounded-r-md bg-white flex flex-col items-center w-24 cursor-pointer">
                        <p class="font-semibold text-lg">23</p>
                        <p class="text-sm uppercase text-gray-600">
                            Groups
                        </p>
                        </button>
                    </li>
                    </ul>
                </section>
                <!-- stats nav -->
                <section aria-labelledby="ticket-statistics-tabs-label" class="pb-2">
                    <label id="ticket-statistics-tabs-label" class="font-semibold block mb-1 text-sm">Ticket Statistics
                    <span class="font-normal text-gray-700">(this week)</span></label>
                    <ul class="flex">
                    <li>
                        <button class="focus:outline-none focus:bg-yellow-200 p-2 rounded-l-md border border-r-0 bg-white flex flex-col items-center w-24">
                        <p class="font-semibold text-lg">16</p>
                        <p class="uppercase text-gray-600 text-sm">
                            good
                        </p>
                        </button>
                    </li>
                    <li>
                        <button class="focus:outline-none focus:bg-yellow-200 p-2 border border-r-0 bg-white flex flex-col items-center w-24">
                        <p class="font-semibold text-lg">2</p>
                        <p class="uppercase text-gray-600 text-sm">
                            bad
                        </p>
                        </button>
                    </li>

                    <li>
                        <button class="focus:outline-none focus:bg-yellow-200 p-2 border rounded-r-md bg-white flex flex-col items-center w-24">
                        <p class="font-semibold text-lg">32</p>
                        <p class="uppercase text-gray-600 text-sm">
                            solved
                        </p>
                        </button>
                    </li>
                    </ul>
                </section>
                </nav>

                <!-- content caption -->
                <header class="bg-white border-t flex items-center py-1 px-4">
                <div class="flex">
                    <h2 id="content-caption" class="font-semibold">
                    Tickets requiring your attention (6)
                    </h2>
                    <span class="ml-3 group relative">
                    <button role="details" aria-controls="info-popup" class="text-blue-700 border-b border-dotted border-blue-700 focus:outline-none text-sm">
                        What is this?
                    </button>
                    <div role="tooltip" id="info-popup" class="absolute pt-1 rounded-md rounded-t-lg right-0 transform translate-x-40 mx-auto hidden group-hover:block z-50">
                        <div class="border rounded-md rounded-t-lg shadow-lg bg-white w-full max-w-xs w-screen">
                        <header class="font-semibold rounded-t-lg bg-gray-300 px-4 py-2">
                            People are waiting for replies!
                        </header>
                        <div class="p-4 border-t">
                            <p class="mb-4">
                            These are new or open tickets that are assigned to
                            you, unassinged in your group(s) or not assigned to
                            any group.
                            </p>
                            <p class="mb-1">
                            They are ordered by priority and requester update date
                            (oldest first).
                            </p>
                        </div>
                        </div>
                    </div>
                    </span>
                </div>
                <div class="ml-auto">
                    <button title="See available tickets in this view" aria-label="play" class="border rounded-md px-3 py-2 leading-none">
                    Play
                    </button>
                </div>
                </header>

                <!-- content overflow section
                        remove table and thead but keep tbody and change tbody to section, in order
                        to have scrollable overflow section -->
                <table aria-describedby="info-popup" aria-label="open tickets" class="border-t w-full min-h-0 h-full flex flex-col">
                <thead class="flex w-full flex-col px-4">
                    <tr class="border-b flex">
                    <th class="font-semibold text-left py-3 pl-3 pr-1 w-24">
                        <input type="checkbox" name="" id="" />
                    </th>
                    <th class="font-semibold text-left py-3 px-1 w-24 truncate">
                        ID
                    </th>
                    <th class="font-semibold text-left py-3 px-1 w-full max-w-xs xl:max-w-lg truncate">
                        Subject
                    </th>
                    <th class="font-semibold text-left py-3 px-1 flex-1 truncate">
                        Requester
                    </th>
                    <th class="font-semibold text-left py-3 px-1 flex-1 truncate">
                        Requester updated
                    </th>
                    <th class="font-semibold text-left py-3 px-1 flex-1 truncate">
                        Group
                    </th>
                    <th class="font-semibold text-left py-3 px-1 flex-1 truncate">
                        Assignee
                    </th>
                    </tr>
                </thead>
                <tbody class="flex w-full flex-col flex-1 min-h-0 overflow-hidden px-4">
                    <!-- low -->
                    <tr class="border-b flex">
                    <th class="bg-gray-100 text-left px-3 py-2 flex-1" colspan="7">
                        <h2 class="text-sm">
                        <span class="font-normal mr-1">Priority</span><span>Low</span>
                        </h2>
                    </th>
                    </tr>
                    <tr role="row" class="hover:bg-blue-100 border-b flex cursor-pointer">
                    <td role="cell" headers="select" class="py-3 pl-3 pr-1 w-24 flex items-start">
                        <input class="mt-1" type="checkbox" />
                        <div class="ml-auto relative group">
                        <span style="
                                padding: 2px 5px;
                                font-size: 0.7rem;
                                position: relative;
                                bottom: 2px;
                                " class="font-mono rounded-sm bg-red-600 text-white leading-none">O</span>
                        <!-- dropdown -->
                        <span class="hidden group-hover:block ml-4 mt-10 w-screen max-w-lg absolute top-0 border shadow-lg p-6 bg-white rounded-md z-50 text-gray-900">
                            <article>
                            <header>
                                <div>
                                <span class="px-3 py-1 uppercase text-xs leading-none rounded-sm bg-red-600 text-white">Open</span>
                                <span class="ml-2 text-gray-700">Incident #12534</span>
                                <span class="ml-1">(Low)</span>
                                </div>
                            </header>
                            <section class="mt-5">
                                <h1 class="text-sm font-semibold mt-3">
                                Quo laudantium error corporis accusamus unde,
                                labore quidem non officiis.
                                </h1>
                                <p class="mt-3">
                                Hi Team,
                                <br />
                                Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Error accusantium molestias fugit commodi
                                doloremque. <br /><br />
                                Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit? ...
                                </p>
                            </section>
                            <footer class="mt-4">
                                <p class="text-gray-600">Latest Comments</p>
                                <hr class="mt-1" />
                                <div class="flex mt-3">
                                <p class="font-semibold">Nico Braun</p>
                                <p class="ml-auto text-gray-700 text-sm">
                                    Yesterday 10:33
                                </p>
                                </div>
                                <p class="mt-2">
                                Dolore odio error inventore sint et dolorum
                                asperiores exercitationem, quisquam esse.
                                </p>
                            </footer>
                            </article>
                        </span>
                        <!-- end dropdown -->
                        </div>
                    </td>
                    <td class="py-3 px-1 w-24">
                        #12534
                    </td>
                    <td class="py-3 px-1 w-full max-w-xs xl:max-w-lg">
                        <div class="relative group w-full">
                        <p class="w-full truncate">
                            Quo laudantium error corporis accusamus unde, labore
                            quidem non officiis.
                        </p>
                        <!-- dropdown -->
                        <span class="hidden group-hover:block ml-4 mt-10 w-screen max-w-lg absolute top-0 border shadow-lg p-6 bg-white rounded-md z-50 text-gray-900">
                            <article>
                            <header>
                                <div>
                                <span class="px-3 py-1 uppercase text-xs leading-none rounded-sm bg-red-600 text-white">Open</span>
                                <span class="ml-2 text-gray-700">Incident #12534</span>
                                <span class="ml-1">(Low)</span>
                                </div>
                            </header>
                            <section class="mt-5">
                                <h1 class="text-sm font-semibold mt-3">
                                Quo laudantium error corporis accusamus unde,
                                labore quidem non officiis.
                                </h1>
                                <p class="mt-3">
                                Hi Team,
                                <br />
                                Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Error accusantium molestias fugit commodi
                                doloremque. <br /><br />
                                Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit? ...
                                </p>
                            </section>
                            <footer class="mt-4">
                                <p class="text-gray-600">Latest Comments</p>
                                <hr class="mt-1" />
                                <div class="flex mt-3">
                                <p class="font-semibold">Nico Braun</p>
                                <p class="ml-auto text-gray-700 text-sm">
                                    Yesterday 10:33
                                </p>
                                </div>
                                <p class="mt-2">
                                Dolore odio error inventore sint et dolorum
                                asperiores exercitationem, quisquam esse.
                                </p>
                            </footer>
                            </article>
                        </span>
                        <!-- end dropdown -->
                        </div>
                    </td>
                    <td class="py-3 px-1 flex-1 truncate">
                        Marla Darsuz
                    </td>
                    <td class="py-3 px-1 flex-1 truncate">
                        Tuesday 09:56
                    </td>
                    <td class="py-3 px-1 flex-1 truncate">
                        UK Support
                    </td>
                    <td class="py-3 px-1 flex-1 truncate">
                        Nico Braun
                    </td>
                    </tr>
                    <tr role="row" class="hover:bg-blue-100 border-b flex cursor-pointer">
                    <td role="cell" headers="select" class="py-3 pl-3 pr-1 w-24 flex items-start">
                        <input class="mt-1" type="checkbox" />
                        <div class="ml-auto relative group">
                        <span style="
                                padding: 2px 5px;
                                font-size: 0.7rem;
                                position: relative;
                                bottom: 2px;
                                " class="font-mono rounded-sm bg-red-600 text-white leading-none">O</span>
                        <!-- dropdown -->
                        <span class="hidden group-hover:block ml-4 mt-10 w-screen max-w-lg absolute top-0 border shadow-lg p-6 bg-white rounded-md z-50 text-gray-900">
                            <article>
                            <header>
                                <div>
                                <span class="px-3 py-1 uppercase text-xs leading-none rounded-sm bg-red-600 text-white">Open</span>
                                <span class="ml-2 text-gray-700">Incident #12534</span>
                                <span class="ml-1">(Low)</span>
                                </div>
                            </header>
                            <section class="mt-5">
                                <h1 class="text-sm font-semibold mt-3">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit.
                                </h1>
                                <p class="mt-3">
                                Hi, <br />
                                <br />
                                Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Error accusantium molestias fugit commodi
                                doloremque. <br /><br />
                                Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit. Odit consequatur natus aut
                                reiciendis nisi sed! Temporibus, quibusdam
                                voluptates? ...
                                </p>
                            </section>
                            <footer class="mt-4">
                                <p class="text-gray-600">Latest Comments</p>
                                <hr class="mt-1" />
                                <div class="flex mt-3">
                                <p class="font-semibold">Nico Braun</p>
                                <p class="ml-auto text-gray-700 text-sm">
                                    Today 13:30
                                </p>
                                </div>
                                <p class="mt-2">
                                Dolore odio error inventore sint et dolorum
                                asperiores exercitationem, quisquam esse tempora
                                aliquam voluptates quibusdam quae debitis
                                laboriosam iure ea quos.
                                </p>
                            </footer>
                            </article>
                        </span>
                        <!-- end dropdown -->
                        </div>
                    </td>
                    <td class="py-3 px-1 w-24">
                        #12534
                    </td>
                    <td class="py-3 px-1 w-full max-w-xs xl:max-w-lg">
                        <div class="relative group w-full">
                        <p class="w-full truncate">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit.
                        </p>
                        <!-- dropdown -->
                        <span class="hidden group-hover:block ml-4 mt-10 w-screen max-w-lg absolute top-0 border shadow-lg p-6 bg-white rounded-md z-50 text-gray-900">
                            <article>
                            <header>
                                <div>
                                <span class="px-3 py-1 uppercase text-xs leading-none rounded-sm bg-red-600 text-white">Open</span>
                                <span class="ml-2 text-gray-700">Incident #12534</span>
                                <span class="ml-1">(Low)</span>
                                </div>
                            </header>
                            <section class="mt-5">
                                <h1 class="text-sm font-semibold mt-3">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit.
                                </h1>
                                <p class="mt-3">
                                Hi, <br />
                                <br />
                                Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Error accusantium molestias fugit commodi
                                doloremque. <br /><br />
                                Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit. Odit consequatur natus aut
                                reiciendis nisi sed! Temporibus, quibusdam
                                voluptates? ...
                                </p>
                            </section>
                            <footer class="mt-4">
                                <p class="text-gray-600">Latest Comments</p>
                                <hr class="mt-1" />
                                <div class="flex mt-3">
                                <p class="font-semibold">Nico Braun</p>
                                <p class="ml-auto text-gray-700 text-sm">
                                    Today 13:30
                                </p>
                                </div>
                                <p class="mt-2">
                                Dolore odio error inventore sint et dolorum
                                asperiores exercitationem, quisquam esse tempora
                                aliquam voluptates quibusdam quae debitis
                                laboriosam iure ea quos.
                                </p>
                            </footer>
                            </article>
                        </span>
                        <!-- end dropdown -->
                        </div>
                    </td>
                    <td class="py-3 px-1 flex-1 truncate">
                        Jim Beam
                    </td>
                    <td class="py-3 px-1 flex-1 truncate">
                        Friday 10:29
                    </td>
                    <td class="py-3 px-1 flex-1 truncate">
                        UK Support
                    </td>
                    <td class="py-3 px-1 flex-1 truncate">
                        Nico Braun
                    </td>
                    </tr>
                    <tr role="row" class="hover:bg-blue-100 border-b flex cursor-pointer">
                    <td role="cell" headers="select" class="py-3 pl-3 pr-1 w-24 flex items-start">
                        <input class="mt-1" type="checkbox" />
                        <div class="ml-auto relative group">
                        <span style="
                                padding: 2px 5px;
                                font-size: 0.7rem;
                                position: relative;
                                bottom: 2px;
                                " class="font-mono rounded-sm bg-yellow-400 text-black leading-none">N</span>
                        <!-- dropdown -->
                        <span class="hidden group-hover:block ml-4 mt-10 w-screen max-w-lg absolute top-0 border shadow-lg p-6 bg-white rounded-md z-50 text-gray-900">
                            <article>
                            <header>
                                <div>
                                <span class="px-3 py-1 uppercase text-xs leading-none rounded-sm bg-yellow-400 text-black">New</span>
                                <span class="ml-2 text-gray-700">Incident #12534</span>
                                <span class="ml-1">(Low)</span>
                                </div>
                            </header>
                            <section class="mt-5">
                                <h1 class="text-sm font-semibold mt-3">
                                Excepturi at labore vel accusamus exercitationem
                                quam, amet provident!
                                </h1>
                                <p class="mt-3">
                                Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit. Odit consequatur natus aut
                                reiciendis nisi sed! Temporibus, quibusdam
                                voluptates? ...
                                </p>
                            </section>
                            <footer class="mt-4 hidden">
                                <p class="text-gray-600">Latest Comments</p>
                                <hr class="mt-1" />
                                <div class="flex mt-3">
                                <p class="font-semibold"></p>
                                <p class="ml-auto text-gray-700 text-sm"></p>
                                </div>
                                <p class="mt-2"></p>
                            </footer>
                            </article>
                        </span>
                        <!-- end dropdown -->
                        </div>
                    </td>
                    <td class="py-3 px-1 w-24">
                        #12534
                    </td>
                    <td class="py-3 px-1 w-full max-w-xs xl:max-w-lg">
                        <div class="relative group w-full">
                        <p class="w-full truncate">
                            Excepturi at labore vel accusamus exercitationem quam,
                            amet provident!
                        </p>
                        <!-- dropdown -->
                        <span class="hidden group-hover:block ml-4 mt-10 w-screen max-w-lg absolute top-0 border shadow-lg p-6 bg-white rounded-md z-50 text-gray-900">
                            <article>
                            <header>
                                <div>
                                <span class="px-3 py-1 uppercase text-xs leading-none rounded-sm bg-yellow-400 text-black">New</span>
                                <span class="ml-2 text-gray-700">Incident #12534</span>
                                <span class="ml-1">(Low)</span>
                                </div>
                            </header>
                            <section class="mt-5">
                                <h1 class="text-sm font-semibold mt-3">
                                Excepturi at labore vel accusamus exercitationem
                                quam, amet provident!
                                </h1>
                                <p class="mt-3">
                                Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit. Odit consequatur natus aut
                                reiciendis nisi sed! Temporibus, quibusdam
                                voluptates? ...
                                </p>
                            </section>
                            <footer class="mt-4 hidden">
                                <p class="text-gray-600">Latest Comments</p>
                                <hr class="mt-1" />
                                <div class="flex mt-3">
                                <p class="font-semibold"></p>
                                <p class="ml-auto text-gray-700 text-sm"></p>
                                </div>
                                <p class="mt-2"></p>
                            </footer>
                            </article>
                        </span>
                        <!-- end dropdown -->
                        </div>
                    </td>
                    <td class="py-3 px-1 flex-1 truncate">
                        Paul Ferrez
                    </td>
                    <td class="py-3 px-1 flex-1 truncate">
                        Today 13:45
                    </td>
                    <td class="py-3 px-1 flex-1 truncate">
                        -
                    </td>
                    <td class="py-3 px-1 flex-1 truncate">
                        -
                    </td>
                    </tr>
                    <tr role="row" class="hover:bg-blue-100 border-b flex cursor-pointer">
                    <td role="cell" headers="select" class="py-3 pl-3 pr-1 w-24 flex items-start">
                        <input class="mt-1" type="checkbox" />
                        <div class="ml-auto relative group">
                        <span style="
                                padding: 2px 5px;
                                font-size: 0.7rem;
                                position: relative;
                                bottom: 2px;
                                " class="font-mono rounded-sm bg-red-600 text-white leading-none">O</span>
                        <!-- dropdown -->
                        <span class="hidden group-hover:block ml-4 mt-10 w-screen max-w-lg absolute top-0 border shadow-lg p-6 bg-white rounded-md z-50 text-gray-900">
                            <article>
                            <header>
                                <div>
                                <span class="px-3 py-1 uppercase text-xs leading-none rounded-sm bg-red-600 text-white">Open</span>
                                <span class="ml-2 text-gray-700">Incident #12534</span>
                                <span class="ml-1">(Low)</span>
                                </div>
                            </header>
                            <section class="mt-5">
                                <h1 class="text-sm font-semibold mt-3">
                                impedit possimus praesentium voluptatum omnis
                                assumenda rem autem magni consequatur nostrum
                                distinctio unde.
                                </h1>
                                <p class="mt-3">
                                Hi Team,
                                <br />
                                Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Error accusantium molestias fugit commodi
                                doloremque. <br /><br />
                                Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit? ...
                                </p>
                            </section>
                            <footer class="mt-4">
                                <p class="text-gray-600">Latest Comments</p>
                                <hr class="mt-1" />
                                <div class="flex mt-3">
                                <p class="font-semibold">Nico Braun</p>
                                <p class="ml-auto text-gray-700 text-sm">
                                    Yesterday 10:33
                                </p>
                                </div>
                                <p class="mt-2">
                                Dolore odio error inventore sint et dolorum
                                asperiores exercitationem, quisquam esse.
                                </p>
                            </footer>
                            </article>
                        </span>
                        <!-- end dropdown -->
                        </div>
                    </td>
                    <td class="py-3 px-1 w-24">
                        #12534
                    </td>
                    <td class="py-3 px-1 w-full max-w-xs xl:max-w-lg">
                        <div class="relative group w-full">
                        <p class="w-full truncate">
                            impedit possimus praesentium voluptatum omnis assumenda
                            rem autem magni consequatur nostrum distinctio unde.
                        </p>
                        <!-- dropdown -->
                        <span class="hidden group-hover:block ml-4 mt-10 w-screen max-w-lg absolute top-0 border shadow-lg p-6 bg-white rounded-md z-50 text-gray-900">
                            <article>
                            <header>
                                <div>
                                <span class="px-3 py-1 uppercase text-xs leading-none rounded-sm bg-red-600 text-white">Open</span>
                                <span class="ml-2 text-gray-700">Incident #12534</span>
                                <span class="ml-1">(Low)</span>
                                </div>
                            </header>
                            <section class="mt-5">
                                <h1 class="text-sm font-semibold mt-3">
                                impedit possimus praesentium voluptatum omnis
                                assumenda rem autem magni consequatur nostrum
                                distinctio unde.
                                </h1>
                                <p class="mt-3">
                                Hi Team,
                                <br />
                                Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Error accusantium molestias fugit commodi
                                doloremque. <br /><br />
                                Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit? ...
                                </p>
                            </section>
                            <footer class="mt-4">
                                <p class="text-gray-600">Latest Comments</p>
                                <hr class="mt-1" />
                                <div class="flex mt-3">
                                <p class="font-semibold">Nico Braun</p>
                                <p class="ml-auto text-gray-700 text-sm">
                                    Yesterday 10:33
                                </p>
                                </div>
                                <p class="mt-2">
                                Dolore odio error inventore sint et dolorum
                                asperiores exercitationem, quisquam esse.
                                </p>
                            </footer>
                            </article>
                        </span>
                        <!-- end dropdown -->
                        </div>
                    </td>
                    <td class="py-3 px-1 flex-1 truncate">
                        Sara Dechicco
                    </td>
                    <td class="py-3 px-1 flex-1 truncate">
                        Thursday 09:22
                    </td>
                    <td class="py-3 px-1 flex-1 truncate">
                        UK Support
                    </td>
                    <td class="py-3 px-1 flex-1 truncate">
                        Nico Braun
                    </td>
                    </tr>
                    <!-- medium -->
                    <tr class="border-b flex">
                    <th class="bg-gray-100 text-left px-3 py-2 flex-1" colspan="7">
                        <h2 class="text-sm">
                        <span class="font-normal mr-1">Priority</span>
                        <span>Medium</span>
                        </h2>
                    </th>
                    </tr>
                    <tr role="row" class="hover:bg-blue-100 border-b flex cursor-pointer">
                    <td role="cell" headers="select" class="py-3 pl-3 pr-1 w-24 flex items-start">
                        <input class="mt-1" type="checkbox" />
                        <div class="ml-auto relative group">
                        <span style="
                                padding: 2px 5px;
                                font-size: 0.7rem;
                                position: relative;
                                bottom: 2px;
                                " class="font-mono rounded-sm bg-yellow-400 text-black leading-none">N</span>
                        <!-- dropdown -->
                        <span class="hidden group-hover:block ml-4 mt-10 w-screen max-w-lg absolute top-0 border shadow-lg p-6 bg-white rounded-md z-50 text-gray-900">
                            <article>
                            <header>
                                <div>
                                <span class="px-3 py-1 uppercase text-xs leading-none rounded-sm bg-yellow-400 text-black">New</span>
                                <span class="ml-2 text-gray-700">Incident #12534</span>
                                <span class="ml-1">(Medium)</span>
                                </div>
                            </header>
                            <section class="mt-5">
                                <h1 class="text-sm font-semibold mt-3">
                                Excepturi at labore vel accusamus exercitationem
                                assumenda ex incidunt eum quam, amet provident!
                                </h1>
                                <p class="mt-3">
                                Hi, <br />
                                <br />
                                Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Error accusantium molestias fugit commodi
                                doloremque. <br /><br />
                                Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit. Odit consequatur natus aut
                                reiciendis nisi sed! Temporibus, quibusdam
                                voluptates? ...
                                </p>
                            </section>
                            <footer class="mt-4 hidden">
                                <p class="text-gray-600">Latest Comments</p>
                                <hr class="mt-1" />
                                <div class="flex mt-3">
                                <p class="font-semibold"></p>
                                <p class="ml-auto text-gray-700 text-sm"></p>
                                </div>
                                <p class="mt-2"></p>
                            </footer>
                            </article>
                        </span>
                        <!-- end dropdown -->
                        </div>
                    </td>
                    <td class="py-3 px-1 w-24">
                        #12534
                    </td>
                    <td class="py-3 px-1 w-full max-w-xs xl:max-w-lg">
                        <div class="relative group w-full">
                        <p class="w-full truncate">
                            Excepturi at labore vel accusamus exercitationem
                            assumenda ex incidunt eum quam, amet provident!
                        </p>
                        <!-- dropdown -->
                        <span class="hidden group-hover:block ml-4 mt-10 w-screen max-w-lg absolute top-0 border shadow-lg p-6 bg-white rounded-md z-50 text-gray-900">
                            <article>
                            <header>
                                <div>
                                <span class="px-3 py-1 uppercase text-xs leading-none rounded-sm bg-yellow-400 text-black">New</span>
                                <span class="ml-2 text-gray-700">Incident #12534</span>
                                <span class="ml-1">(Medium)</span>
                                </div>
                            </header>
                            <section class="mt-5">
                                <h1 class="text-sm font-semibold mt-3">
                                Excepturi at labore vel accusamus exercitationem
                                assumenda ex incidunt eum quam, amet provident!
                                </h1>
                                <p class="mt-3">
                                Hi, <br />
                                <br />
                                Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Error accusantium molestias fugit commodi
                                doloremque. <br /><br />
                                Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit. Odit consequatur natus aut
                                reiciendis nisi sed! Temporibus, quibusdam
                                voluptates? ...
                                </p>
                            </section>
                            <footer class="mt-4 hidden">
                                <p class="text-gray-600"></p>
                                <hr class="mt-1" />
                                <div class="flex mt-3">
                                <p class="font-semibold"></p>
                                <p class="ml-auto text-gray-700 text-sm"></p>
                                </div>
                                <p class="mt-2">
                                Dolore odio error inventore sint et dolorum
                                asperiores exercitationem, quisquam esse tempora
                                aliquam voluptates quibusdam quae debitis
                                laboriosam iure ea quos.
                                </p>
                            </footer>
                            </article>
                        </span>
                        <!-- end dropdown -->
                        </div>
                    </td>
                    <td class="py-3 px-1 flex-1 truncate">
                        Freddy Murro
                    </td>
                    <td class="py-3 px-1 flex-1 truncate">
                        Today 12:13
                    </td>
                    <td class="py-3 px-1 flex-1 truncate">
                        -
                    </td>
                    <td class="py-3 px-1 flex-1 truncate">
                        -
                    </td>
                    </tr>
                    <tr role="row" class="hover:bg-blue-100 border-b flex cursor-pointer">
                    <td role="cell" headers="select" class="py-3 pl-3 pr-1 w-24 flex items-start">
                        <input class="mt-1" type="checkbox" />
                        <div class="ml-auto relative group">
                        <span style="
                                padding: 2px 5px;
                                font-size: 0.7rem;
                                position: relative;
                                bottom: 2px;
                                " class="font-mono rounded-sm bg-red-600 text-white leading-none">O</span>
                        <!-- dropdown -->
                        <span class="hidden group-hover:block ml-4 mt-10 w-screen max-w-lg absolute top-0 border shadow-lg p-6 bg-white rounded-md z-50 text-gray-900">
                            <article>
                            <header>
                                <div>
                                <span class="px-3 py-1 uppercase text-xs leading-none rounded-sm bg-red-600 text-white">Open</span>
                                <span class="ml-2 text-gray-700">Incident #12534</span>
                                <span class="ml-1">(Medium)</span>
                                </div>
                            </header>
                            <section class="mt-5">
                                <h1 class="text-sm font-semibold mt-3">
                                Odit consequatur natus aut reiciendis nisi sed!
                                </h1>
                                <p class="mt-3">
                                Hi, <br />
                                <br />
                                Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Error accusantium molestias fugit commodi
                                doloremque. <br /><br />
                                Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit. Temporibus, quibusdam
                                voluptates? ...
                                </p>
                            </section>
                            <footer class="mt-4">
                                <p class="text-gray-600">Latest Comments</p>
                                <hr class="mt-1" />
                                <div class="flex mt-3">
                                <p aria-label="commenter" class="font-semibold">
                                    Nico Braun
                                </p>
                                <p aria-label="time" class="ml-auto text-gray-700 text-sm">
                                    Today 06:34
                                </p>
                                </div>
                                <p aria-label="comment" class="mt-2">
                                Quos explicabo sed nisi totam dolores deleniti
                                blanditiis culpa dolor provident perferendis
                                sapiente corrupti repudiandae ea dolore.
                                </p>
                            </footer>
                            </article>
                        </span>
                        <!-- end dropdown -->
                        </div>
                    </td>
                    <td class="py-3 px-1 w-24">
                        #12534
                    </td>
                    <td class="py-3 px-1 w-full max-w-xs xl:max-w-lg">
                        <div class="relative group w-full">
                        <p class="w-full truncate">
                            Odit consequatur natus aut reiciendis nisi sed!
                        </p>
                        <!-- dropdown -->
                        <span class="hidden group-hover:block ml-4 mt-10 w-screen max-w-lg absolute top-0 border shadow-lg p-6 bg-white rounded-md z-50 text-gray-900">
                            <article>
                            <header>
                                <div>
                                <span class="px-3 py-1 uppercase text-xs leading-none rounded-sm bg-red-600 text-white">Open</span>
                                <span class="ml-2 text-gray-700">Incident #12534</span>
                                <span class="ml-1">(Medium)</span>
                                </div>
                            </header>
                            <section class="mt-5">
                                <h1 class="text-sm font-semibold mt-3">
                                Odit consequatur natus aut reiciendis nisi sed!
                                </h1>
                                <p class="mt-3">
                                Hi, <br />
                                <br />
                                Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Error accusantium molestias fugit commodi
                                doloremque. <br /><br />
                                Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit. Temporibus, quibusdam
                                voluptates? ...
                                </p>
                            </section>
                            <footer class="mt-4">
                                <p class="text-gray-600">Latest Comments</p>
                                <hr class="mt-1" />
                                <div class="flex mt-3">
                                <p aria-label="commenter" class="font-semibold">
                                    Nico Braun
                                </p>
                                <p aria-label="time" class="ml-auto text-gray-700 text-sm">
                                    Today 06:34
                                </p>
                                </div>
                                <p aria-label="comment" class="mt-2">
                                Quos explicabo sed nisi totam dolores deleniti
                                blanditiis culpa dolor provident perferendis
                                sapiente corrupti repudiandae ea dolore.
                                </p>
                            </footer>
                            </article>
                        </span>
                        <!-- end dropdown -->
                        </div>
                    </td>
                    <td class="py-3 px-1 flex-1 truncate">
                        Carla Sandaers
                    </td>
                    <td class="py-3 px-1 flex-1 truncate">
                        Today 08:13
                    </td>
                    <td class="py-3 px-1 flex-1 truncate">
                        -
                    </td>
                    <td class="py-3 px-1 flex-1 truncate">
                        -
                    </td>
                    </tr>
                    <!-- high -->
                    <tr class="border-b flex hidden">
                    <th class="bg-gray-100 text-left px-3 py-2 flex-1" colspan="7">
                        <h2 class="text-sm">
                        <span class="font-normal mr-1">Priority</span>
                        <span>High</span>
                        </h2>
                    </th>
                    </tr>
                </tbody>
                </table>

                <!-- content footer, currently hidden -->
                <footer aria-label="content footer" class="flex p-3 bg-white border-t hidden">
                footer
                </footer>
            </section>
            </main>
        </div>
        </div>
</template>

<script>

    import Letras from '@/Components/Letras'
    import NavBar from '@/Components/NavBar'
    import Hat from '@/Components/Hat'

    export default {
        components: {
            Letras,
            NavBar,
            Hat
        },
    }
</script>

<style>
    html {
        font-size: 14px;
        line-height: 1.285;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
        Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Arial,
        sans-serif;
    }
    html, body {
        width: 100%;
        height: 100%;
    }

    /* can be configured in tailwind.config.js */
    .group:hover .group-hover\:block {
        display: block;
    }

    .focus\:cursor-text:focus {
        cursor: text;
    }

    .focus\:w-64:focus {
        width: 16rem;
    }

    /* zendesk styles */
    .h-16 {
        height: 50px;
    }
    .bg-teal-900 {
        background: #03363d;
    }
    .bg-gray-100 {
        background: #f8f9f9;
    }
    .hover\:border-green-500:hover {
        border-color: #78a300;
    }

    /* SVG aguacate */
    .cls-1{fill:#a7aece;}
    .cls-12,.cls-2,.cls-6,.cls-9{fill:#fff;}
    .cls-2{opacity:0.3;}
    .cls-3{fill:#8f5653;}
    .cls-4{fill:#4bc190;}
    .cls-5{fill:#f8dc25;}
    .cls-5,.cls-6{opacity:0.5;}
    .cls-7{fill:#515570;}
    .cls-8{fill:#393c54;}
    .cls-10{fill:none;stroke:#515570;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}
    .cls-10,.cls-12{opacity:0.2;}
    .cls-11{fill:#f85565;}


    </style>
