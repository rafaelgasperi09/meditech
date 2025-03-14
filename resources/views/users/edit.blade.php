<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight inline-block">
            {{ __('Editar Usuario') }}
        </h2>
    </x-slot>
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('user.update', $data->id) }}">
                        @csrf
                        @method('PUT')
                        <!-- ID -->
                        <div>
                            <x-input-label for="id" :value="__('ID')" />
                            <x-text-input id="id" class="block mt-1 w-full" type="text" name="id" :value="$data->id" readonly />
                        </div>
                        <div>
                            <x-input-label for="first_name" :value="__('Nombre')" />
                            <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="$data->first_name" required autofocus />
                            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                        </div>
                        <!-- Last Name -->
                        <div>
                            <x-input-label for="last_name" :value="__('Apellido')" />
                            <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="$data->last_name" required />
                            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                        </div>
                        <!-- Email -->
                        <div>
                            <x-input-label for="email" :value="__('Correo Electrónico')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="$data->email" required />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <!-- Email Verified At -->
                        <div>
                            <x-input-label for="email_verified_at" :value="__('Correo verificado el')" />
                            <x-text-input id="email_verified_at" class="block mt-1 w-full" type="text" name="email_verified_at" :value="$data->email_verified_at" readonly />
                        </div>
                        <!-- Password -->
                        <div>
                            <x-input-label for="password" :value="__('Contraseña')" />
                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <!-- Profile Picture -->
                        <div>
                            <x-input-label for="profile_picture" :value="__('Foto de perfil')" />
                            <x-text-input id="profile_picture" class="block mt-1 w-full" type="file" name="profile_picture" />
                            <x-input-error :messages="$errors->get('profile_picture')" class="mt-2" />
                        </div>
                        <!-- Remember Token -->
                        <div>
                            <x-input-label for="remember_token" :value="__('Token de recuerdo')" />
                            <x-text-input id="remember_token" class="block mt-1 w-full" type="text" name="remember_token" :value="$data->remember_token" readonly />
                        </div>
                        <!-- Created At -->
                        <div>
                            <x-input-label for="created_at" :value="__('Creado el')" />
                            <x-text-input id="created_at" class="block mt-1 w-full" type="text" name="created_at" :value="$data->created_at" readonly />
                        </div>
                        <!-- Updated At -->
                        <div>
                            <x-input-label for="updated_at" :value="__('Actualizado el')" />
                            <x-text-input id="updated_at" class="block mt-1 w-full" type="text" name="updated_at" :value="$data->updated_at" readonly />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('user.index') }}">
                                {{ __('Cancelar') }}
                            </a>
                            <x-primary-button class="ms-4">
                                {{ __('Actualizar') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
