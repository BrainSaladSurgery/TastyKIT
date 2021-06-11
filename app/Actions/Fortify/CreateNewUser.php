<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'dni' => ['required', 'string', 'max:9','unique:users'],
            'phone' => ['required', 'string', 'max:9','unique:users'],
            'name' => ['required', 'string', 'max:20','unique:users'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();


        //Para la foto de perfil con letras igualamos el name al nick
        return User::create([
            'type' => 'Usuario',
            'name' => $input['name'],
            'email' => $input['email'],
            'dni' => $input['dni'],
            'phone' => $input['phone'],
            // Por defecto agrego que sea User y que no tenga dirección para rellenarla luego más tarde en el perfil
            'addresses_id' => '1',
            'password' => Hash::make($input['password']),
        ])->assignRole('User');
    }
}