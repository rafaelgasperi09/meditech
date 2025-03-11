<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight inline-block" >
            {{ __('user.titles') }}

        </h2>
    </x-slot>
    <div class="py-10">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1> {{ __('label.new_record') }}</h1>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
                    @csrf
                        <!-- First Name -->
                        <div>
                            <x-input-label for="first_name" :value="__('user.first_name')" />
                            <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus/>
                            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                        </div>
                        <!-- Last Name -->
                        <div>
                            <x-input-label for="last_name" :value="__('user.last_name')"/>
                            <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required/>
                            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                        </div>
                        <!-- EMAIL -->
                        <div>
                            <x-input-label for="email" :value="__('user.email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"/>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <!-- PICTURE -->
                        <div>
                            <x-input-label for="profile_picture" :value="__('user.profile_picture')" />
                            <x-text-input id="profile_picture" class="block mt-1 w-full" type="file" name="profile_picture" :value="old('profile_picture')"/>
                            <x-input-error :messages="$errors->get('profile_picture')" class="mt-2" />
                        </div>
                        <!-- CLIENTS -->
                        <div>
                            <x-input-label for="client" :value="__('user.client')" />
                            <x-select-input name="clients[]" :options="$clients" :selected="$selected_clients" class="block  w-full" multiple="multiple"/>
                            <x-input-error class="mt-2" :messages="$errors->get('last_name')" />
                        </div>
                        <div>
                            <x-input-label for="update_password_password" :value="__('user.new_password')" />
                            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="update_password_password_confirmation" :value="__('user.confirm_password')" />
                            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('client.index') }}">
                                {{ __('button.cancel') }}
                            </a>
                            <x-primary-button class="ms-4">
                                {{ __('button.register') }}
                            </x-primary-button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
