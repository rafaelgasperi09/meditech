<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight inline-block" >
            {{ __('Clientes') }}

        </h2>
    </x-slot>
    <div class="py-10">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1> {{ __('label.new_record') }}</h1>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="POST" action="{{ route('client.store') }}" enctype="multipart/form-data">
                    @csrf
                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Nombre Corto')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus/>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <!-- RUC/DV -->
                        <div>
                            <x-input-label for="ruc" :value="__('Ruc')" />
                            <x-text-input id="ruc" class="mt-1 w-8/12 in" type="number" name="ruc" :value="old('ruc')" required/>
                            <x-text-input id="dv" class="mt-1 w-4/12" type="number" name="dv" :value="old('ruc')" required maxlength="2" placeholder="DV" min="1"/>
                            <x-input-error :messages="$errors->get('ruc')" class="mt-2" />
                        </div>
                        <!-- LONG NAME -->
                        <div>
                            <x-input-label for="long_name" :value="__('Nombre Completo')" />
                            <x-text-input id="long_name" class="block mt-1 w-full" type="text" name="long_name" :value="old('long_name')"/>
                            <x-input-error :messages="$errors->get('long_name')" class="mt-2" />
                        </div>
                        <!-- EMAIL -->
                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"/>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <!-- WHATSAPP -->
                        <div>
                            <x-input-label for="whatsapp" :value="__('Whatsapp')" />
                            <x-text-input id="whatsapp" class="block mt-1 w-full" type="email" name="whatsapp" :value="old('whatsapp')"/>
                            <x-input-error :messages="$errors->get('whatsapp')" class="mt-2" />
                        </div>
                        <!-- IMAGE -->
                        <div>
                            <x-input-label for="logo" :value="__('Logo')" />
                            <x-text-input id="logo" class="block mt-1 w-full" type="file" name="logo" value="" accept="image/*"/>
                            <x-input-error :messages="$errors->get('logo')" class="mt-2" />
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
