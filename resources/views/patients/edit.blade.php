<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight inline-block" >
            {{ __('patient.titles') }}

        </h2>
    </x-slot>
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('client.update',$data->id) }}">
                    @csrf
                        <!-- ID NUMBER -->
                        <div>
                            <x-input-label for="id_number" :value="__('patient.full_id_number')" />
                            <x-select-input name="id_type" :options="\App\Models\Lista::documentType()" :selected="$data->id_type" class="block  inline-block"/>
                            <x-text-input id="id_number" class="block  inline-block" type="number" name="id_number" :value="$data->id_number"/>
                            <x-input-error :messages="$errors->get('id_number')" class="mt-2" />
                        </div>
                        <!-- First Name -->
                        <div>
                            <x-input-label for="first_name" :value="__('patient.first_name')" />
                            <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="$data->first_name" required autofocus/>
                            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                        </div>
                        <!-- Last Name -->
                        <div>
                            <x-input-label for="last_name" :value="__('patient.last_name')" />
                            <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="$data->last_name" required autofocus/>
                            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                        </div>
                        <!-- GENDER -->
                        <div>
                            <x-input-label for="gender" :value="__('patient.gender')" />
                            <x-select-input name="gender" :options="\App\Models\Lista::gender()" :selected="$data->gender" class="block w-full"/>
                            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                        </div>
                        <!-- BIRTHDATE -->
                        <div>
                            <x-input-label for="birthdate" :value="__('patient.birthdate')" />
                            <x-text-input id="birthdate" class="block mt-1 w-full" type="date" name="date" :value="$data->birthdate"/>
                            <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
                        </div>
                        <!-- EMAIL -->
                        <div>
                            <x-input-label for="email" :value="__('patient.email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="$data->email"/>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <!-- PHYSICAL ADDRESS -->
                        <div>
                            <x-input-label for="physical_address" :value="__('patient.physical_address')" />
                            <x-textarea-input id="physical_address" class="block mt-1 w-full"  name="physical_address">{{$data->physical_address}}</x-textarea-input>
                            <x-input-error :messages="$errors->get('physical_address')" class="mt-2" />
                        </div>
                        <!-- BILLING ADDRESS -->
                        <div>
                            <x-input-label for="billing_address" :value="__('patient.billing_address')" />
                            <x-textarea-input id="billing_address" class="block mt-1 w-full" name="billing_address">{{$data->billing_address}}</x-textarea-input>
                            <x-input-error :messages="$errors->get('billing_address')" class="mt-2" />
                        </div>
                        <!-- PHONE -->
                        <div>
                            <x-input-label for="phone" :value="__('patient.phone')" />
                            <x-text-input id="phone" class="block mt-1 w-full" type="email" name="phone" :value="$data->phone"/>
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>
                        <!-- WHATSAPP -->
                        <div>
                            <x-input-label for="whatsapp" :value="__('patient.whatsapp')" />
                            <x-text-input id="whatsapp" class="block mt-1 w-full" type="email" name="whatsapp" :value="$data->whatsapp"/>
                            <x-input-error :messages="$errors->get('whatsapp')" class="mt-2" />
                        </div>
                        <!-- BLOOD TYPE -->
                        <div>
                            <x-input-label for="gender" :value="__('patient.blood_type')" />
                            <x-select-input name="gender" :options="\App\Models\Lista::bloodTypes()" :selected="$data->blood_type" class="block w-full"/>
                            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('client.index') }}">
                                {{ __('button.cancel') }}
                            </a>
                            <x-primary-button class="ms-4">
                                {{ __('button.update') }}
                            </x-primary-button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
