<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight inline-block" >
            {{ __('patient.titles') }}

        </h2>
    </x-slot>
    <div class="py-10">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1> {{ __('label.new_record') }}</h1>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="POST" action="{{ route('patient.store') }}" enctype="multipart/form-data">
                    @csrf
                        <!-- First Name -->
                        <div>
                            <x-input-label for="first_name" :value="__('patient.first_name')" />
                            <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus/>
                            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                        </div>
                        <!-- Last Name -->
                        <div>
                            <x-input-label for="last_name" :value="__('patient.last_name')" />
                            <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus/>
                            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                        </div>
                        <!-- ID NUMBER -->
                        <div>
                            <x-input-label for="id_number" :value="__('patient.full_id_number')" />
                            <x-text-input id="id_number" class="block mt-1 w-full" type="number" name="id_number" :value="old('id_number')"/>
                            <x-input-error :messages="$errors->get('id_number')" class="mt-2" />
                        </div>
                        <!-- EMAIL -->
                        <div>
                            <x-input-label for="email" :value="__('patient.email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"/>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <!-- PHYSICAL ADDRESS -->
                        <div>
                            <x-input-label for="phone" :value="__('patient.physical_address')" />
                            <x-textarea-input id="phone" class="block mt-1 w-full" type="email" name="phone" :value="old('phone')"/>
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>
                        <!-- BILLING ADDRESS -->
                        <div>
                            <x-input-label for="whatsapp" :value="__('patient.billing_address')" />
                            <x-textarea-input id="whatsapp" class="block mt-1 w-full" type="email" name="whatsapp" :value="old('whatsapp')"/>
                            <x-input-error :messages="$errors->get('whatsapp')" class="mt-2" />
                        </div>
                        <!-- PHONE -->
                        <div>
                            <x-input-label for="phone" :value="__('patient.phone')" />
                            <x-text-input id="phone" class="block mt-1 w-full" type="email" name="phone" :value="old('phone')"/>
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>
                        <!-- WHATSAPP -->
                        <div>
                            <x-input-label for="whatsapp" :value="__('patient.whatsapp')" />
                            <x-text-input id="whatsapp" class="block mt-1 w-full" type="email" name="whatsapp" :value="old('whatsapp')"/>
                            <x-input-error :messages="$errors->get('whatsapp')" class="mt-2" />
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
