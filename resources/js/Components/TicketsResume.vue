<template>
    <section class="flex flex-col p-4 w-full max-w-sm flex-none bg-gray-100 min-h-0 h-full overflow-auto">
        <h1 class="font-semibold mb-3">
        Tickets
        </h1>
        <ul>
            <li v-for="(ticket,index) in tickets" @key="index">
                <article tabindex="0" class="cursor-pointer border rounded-md p-3 bg-white flex text-gray-700 mb-2 hover:border-green-500 focus:outline-none focus:border-green-500">
                    <span class="flex-none pt-1 pr-2">
                        <img class="h-8 w-8 rounded-md" src="https://raw.githubusercontent.com/bluebrown/tailwind-zendesk-clone/master/public/assets/avatar.png" />
                    </span>
                <div class="flex-1">
                    <header class="mb-1">
                        Ticket #00{{ ticket.ticket }} <span class="font-semibold">creada</span> por
                        <h1 class="inline">"{{ ticket.user }}".</h1>
                    </header>
                    <p v-for="(item,index) in ticket.items" @key="index" class="text-gray-600">
                        {{ item.name }} - {{ item.ud }}ud - {{ item.price }}€,
                    </p>
                    <footer class="text-gray-500 mt-2 text-sm">
                        {{ ticket.created_at }}
                    </footer>
                </div>
                </article>
            </li>
        </ul>
    </section>
</template>

<script>
    export default {
        data(){
            return{
                tickets:[]
            }
        },

        methods: {
            async getInvoices(){

                await axios.get('/invoices-list')
                    .then((response) =>{
                        this.tickets = response.data
                    })
            }
        },
        mounted(){
            this.getInvoices();
        }

    }
</script>


