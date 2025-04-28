<x-app-layout>
    <div class="page-wrapper">
        <div class="content">
            <!-- Page Header -->
            @component('components.page-header')
                @slot('title')
                    {{ __('patient.title') }}
                @endslot
                @slot('li_1')
                    {{ __('generic.create') }} {{ __('patient.title') }}
                @endslot
            @endcomponent
            <!-- /Page Header -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-12">
                                <div class="form-heading">
                                    <h4>  {{ __('generic.create') }} {{ __('patient.title') }}</h4>
                                </div>
                            </div>
                            <form method="POST" action="{{ route('patient.store') }}" enctype="multipart/form-data">
                            @csrf
                            <!-- ID NUMBER -->
                            <div class="block mt-1 w-full">
                                <x-input-label for="id_number" :value="__('patient.full_id_number')" />
                                <x-select-input name="id_type" :options="\App\Models\Lista::documentType()" :selected="['CC']" class="inline-block"/>

                                <x-text-input id="id_number" class="block  inline-block" type="number" name="id_number" :value="old('id_number')"/>
                                <x-input-error :messages="$errors->get('id_number')" class="block  inline-block" />
                            </div>
                            <!-- First Name -->

                            <div>
                                <x-input-label for="first_name" :value="__('patient.first_name')" />
                                <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus/>
                                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                            </div>
                            <!-- Last Name -->
                            <div>
                                <x-input-label for="last_name" :value="__('patient.last_name')"/>
                                <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus/>
                                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                            </div>
                            <!-- GENDER -->
                            <div>
                                <x-input-label for="gender" :value="__('patient.gender')" />
                                <x-select-input name="gender" :options="\App\Models\Lista::gender()" :selected="[null]" class="block w-full"/>
                                <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                            </div>
                            <!-- BIRTHDATE -->
                            <div>
                                <x-input-label for="birthdate" :value="__('patient.birthdate')" />
                                <x-text-input id="birthdate" class="block mt-1 w-full" type="date" name="date" :value="old('birthdate')"/>
                                <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
                            </div>
                            <!-- EMAIL -->
                            <div>
                                <x-input-label for="email" :value="__('patient.email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"/>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <!-- PHYSICAL ADDRESS -->
                            <div>
                                <x-input-label for="physical_address" :value="__('patient.physical_address')" />
                                <x-textarea-input id="physical_address" class="block mt-1 w-full" type="email" name="physical_address" :value="old('physical_address')"/>
                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                            </div>
                            <!-- BILLING ADDRESS -->
                            <div>
                                <x-input-label for="billing_address" :value="__('patient.billing_address')" />
                                <x-textarea-input id="billing_address" class="block mt-1 w-full" type="email" name="billing_address" :value="old('billing_address')"/>
                                <x-input-error :messages="$errors->get('billing_address')" class="mt-2" />
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
                            <!-- BLOOD TYPE -->
                            <div>
                                <x-input-label for="gender" :value="__('patient.blood_type')" />
                                <x-select-input name="gender" :options="\App\Models\Lista::bloodTypes()" :selected="[null]" class="block w-full"/>
                                <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <div class="doctor-submit text-end">
                                    <button type="submit" class="btn btn-primary submit-form me-2">     {{ __('button.register') }} </button>
                                    <a class="btn btn-primary cancel-form" href="{{ route('patient.index') }}">  {{ __('button.cancel') }}</a>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
