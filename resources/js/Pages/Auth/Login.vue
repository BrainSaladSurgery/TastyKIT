<template>
    <nav-bar />

    <authentication-card>
        <!-- Letras del logo este nos redirige pulsandolo al Home -->
        <template #letras>
            <inertia-link href="/">
                <letras  width="450px" classes="p-5" box="0 0 99.928184 28.895552"/>
            </inertia-link>
        </template>

        <jet-validation-errors class="mb-4" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <!-- Formulario de inicio de sesión -->
        <form @submit.prevent="submit">
            <div>
                <jet-label for="email" value="Email" />
                <jet-input id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus />
            </div>

            <div class="mt-4">
                <jet-label for="password" value="Password" />
                <jet-input id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <jet-checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <inertia-link v-if="canResetPassword" :href="route('password.request')" class="underline text-sm text-gray-600 hover:text-gray-900">
                    Forgot your password?
                </inertia-link>

                <yelx-button class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Log in
                </yelx-button>
            </div>
        </form>

        <!-- Registrate -->
        <template #register>
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <div class="flex justify-center">
                    <span class="mr-4 text-gray-600">¿No tienes cuenta?</span>
                    <inertia-link :href="route('register')" class= "underline text-md text-gray-600 hover:text-gray-900">
                        Registrate
                    </inertia-link>
                </div>
            </div>
        </template>

    </authentication-card>



</template>

<script>
    import AuthenticationCard from '@/Components/AuthenticationCard'
    import Letras from '@/Components/Letras'
    import YelxButton from '@/Components/Button'
    import JetInput from '@/Jetstream/Input'
    import JetCheckbox from '@/Jetstream/Checkbox'
    import JetLabel from '@/Jetstream/Label'
    import JetValidationErrors from '@/Jetstream/ValidationErrors'
    import NavBar from '@/Components/NavBar'

    export default {
        components: {
            AuthenticationCard,
            Letras,
            YelxButton,
            JetInput,
            JetCheckbox,
            JetLabel,
            JetValidationErrors,
            NavBar
        },

        props: {
            canResetPassword: Boolean,
            status: String
        },

        data() {
            return {
                form: this.$inertia.form({
                    email: '',
                    password: '',
                    remember: false
                })
            }
        },

        methods: {
            submit() {
                this.form
                    .transform(data => ({
                        ... data,
                        remember: this.form.remember ? 'on' : ''
                    }))
                    .post(this.route('login'), {
                        onFinish: () => this.form.reset('password'),
                    })
            }
        }
    }
</script>
