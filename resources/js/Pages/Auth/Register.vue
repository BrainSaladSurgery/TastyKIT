<template>
    <nav-bar />
    <authentication-card classesCard="w-3/4 h-1/4 mt-0 px-8 pt-5 bg-white shadow-xl overflow-hidden sm:rounded-lg border-t-8 border-b-8 border-yellow-600">
        <template #letras>
            <inertia-link href="/">
                <letras  width="450px" classes="p-5" box="0 0 99.928184 28.895552"/>
            </inertia-link>
        </template>

        <jet-validation-errors class="mb-4" />

        <!-- Formulario de registro, las validaciones y creacción del User se realizaran desde Actions/Fortify/CreateNewUser -->
        <form @submit.prevent="submit" class=" flex flex-col ">
            <h1 class="text-3xl font-bold text-gray-500 text-center pb-4">Registro</h1>
                <div class=" grid grid-flow-row grid-cols-2 grid-rows-4  gap-4">
                    <div >
                    <jet-label for="name" value="Nombre de Usuario" />
                    <jet-input id="name" type="text" class="mt-1 block w-full" v-model="form.name" required autofocus autocomplete="nick" />
                </div>

                <div >
                    <jet-label for="email" value="Email" />
                    <jet-input id="email" type="email" class="mt-1 block w-full" v-model="form.email" required />
                </div>

                <div >
                    <jet-label for="password" value="Contraseña" />
                    <jet-input id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="new-password" />
                </div>

                <div >
                    <jet-label for="dni" value="DNI" />
                    <jet-input id="dni" type="text" class="mt-1 block w-full" v-model="form.dni" required />
                </div>

                <div >
                    <jet-label for="password_confirmation" value="Confirmar Contraseña" />
                    <jet-input id="password_confirmation" type="password" class="mt-1 block w-full" v-model="form.password_confirmation" required autocomplete="new-password" />
                </div>

                <div >
                    <jet-label for="phone" value="Teléfono" />
                    <jet-input id="phone" type="text" class="mt-1 block w-full" v-model="form.phone" required />
                </div>

                <div class="mt-4" v-if="$page.props.jetstream.hasTermsAndPrivacyPolicyFeature">
                    <jet-label for="terms">
                        <div class="flex items-center">
                            <jet-checkbox name="terms" id="terms" v-model:checked="form.terms" />

                            <div class="ml-2">
                                I agree to the <a target="_blank" :href="route('terms.show')" class="underline text-sm text-gray-600 hover:text-gray-900">Terms of Service</a> and <a target="_blank" :href="route('policy.show')" class="underline text-sm text-gray-600 hover:text-gray-900">Privacy Policy</a>
                            </div>
                        </div>
                    </jet-label>
                </div>

                <div class="text-left col-start-1 ">
                    <h3 class="text-gray-400 "> Join Up Tastyer</h3>
                </div>

                <div class="text-right col-start-2 ">
                    <inertia-link :href="route('login')" class=" underline text-sm text-gray-600 hover:text-gray-900">
                        ¿Ya estas registrado?
                    </inertia-link>

                    <yelx-button class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Registrar
                    </yelx-button>
                </div>
            </div>

        </form>
    </authentication-card>
</template>

<script>
    import AuthenticationCard from '@/Components/AuthenticationCard'
    import Letras from '@/Components/Letras'
    import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo'
    import YelxButton from '@/Components/Button'
    import JetInput from '@/Jetstream/Input'
    import JetCheckbox from "@/Jetstream/Checkbox"
    import JetLabel from '@/Jetstream/Label'
    import JetValidationErrors from '@/Jetstream/ValidationErrors'
    import NavBar from '@/Components/NavBar'

    export default {
        components: {
            AuthenticationCard,
            JetAuthenticationCardLogo,
            YelxButton,
            JetInput,
            JetCheckbox,
            JetLabel,
            JetValidationErrors,
            Letras,
            NavBar
        },

        data() {
            return {
                form: this.$inertia.form({
                    email: '',
                    password: '',
                    name: '',
                    dni: '',
                    phone: '',
                    password_confirmation: '',
                    terms: false,
                })
            }
        },

        methods: {
            submit() {
                this.form.post(this.route('register'), {
                    onFinish: () => this.form.reset('password', 'password_confirmation'),
                })
            }
        }
    }
</script>
