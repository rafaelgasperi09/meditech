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
                            <div class="row">
                                <!-- ID NUMBER -->
                                <div class="col-12 col-md-6 col-xl-4">
                                    <div class="input-block  local-forms">
                                        <x-input-label for="id_type" :value="__('patient.id_type')" required="true"/>
                                        <x-select-input name="id_type" :options="\App\Models\Lista::documentType()" :selected="['CC']" class="block mt-1 w-full"/>
                                        <x-input-error :messages="$errors->get('id_type')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-8">
                                    <div class=" input-block  local-forms ">
                                        <x-input-label for="id_number" :value="__('patient.full_id_number')" required="true"/>
                                        <x-text-input id="id_number" class="block mt-1 w-full" type="number" name="id_number" value="" autofocus/>
                                        <x-input-error :messages="$errors->get('id_number')" class="mt-2" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 col-xl-4">
                                    <!-- First Name -->
                                    <div class="input-block local-forms">
                                        <x-input-label for="first_name" :value="__('patient.first_name')" required="true"/>
                                        <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required />
                                        <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-4">
                                    <!-- Last Name -->
                                    <div class="input-block local-forms">
                                        <x-input-label for="last_name" :value="__('patient.last_name')" required="true"/>
                                        <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required/>
                                        <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-4">
                                    <!-- EMAIL -->
                                    <div class="input-block local-forms">
                                        <x-input-label for="email" value="{{__('patient.email').'/usuario'}}" required="true"/>
                                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"/>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- GENDER -->
                                <div class="col-12 col-md-6 col-xl-6">
                                    <div class="input-block local-forms ">
                                        <x-input-label for="gender" :value="__('patient.gender')" required="true"/>
                                        <x-select-input name="gender" :options="\App\Models\Lista::gender()" :selected="[null]" class="block w-full"/>
                                        <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                                    </div>
                                </div>
                                <!-- BIRTHDATE -->
                                <div class=" col-12 col-md-6 col-xl-6">
                                    <div class="input-block local-forms">
                                        <div class="form-group local-forms cal-icon">
                                            <x-input-label for="birthdate" :value="__('patient.birthdate')" required="true"/>
                                            <x-text-input id="birthdate" class="block mt-1 w-full datetimepicker" type="text" name="date" :value="old('birthdate')"/>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <!-- PHYSICAL ADDRESS -->
                                <div class=" col-12 col-md-6 col-xl-6">
                                    <div class="input-block local-forms">
                                        <x-input-label for="physical_address" :value="__('patient.physical_address')" />
                                        <x-textarea-input id="physical_address" class="block mt-1 w-full" type="email" name="physical_address" :value="old('physical_address')"/>
                                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                                    </div>
                                </div>
                                <!-- BILLING ADDRESS -->
                                <div class=" col-12 col-md-6 col-xl-6">
                                    <div class="input-block local-forms">
                                        <x-input-label for="billing_address" :value="__('patient.billing_address')" />
                                        <x-textarea-input id="billing_address" class="block mt-1 w-full" type="email" name="billing_address" :value="old('billing_address')"/>
                                        <x-input-error :messages="$errors->get('billing_address')" class="mt-2" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- PHONE -->
                                <div class=" col-12 col-md-6 col-xl-6">
                                    <div class="input-block local-forms">
                                        <x-input-label for="phone" :value="__('patient.phone')" />
                                        <x-text-input id="phone" class="block mt-1 w-full" type="email" name="phone" :value="old('phone')"/>
                                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                                    </div>
                                </div>
                                <!-- WHATSAPP -->
                                <div class=" col-12 col-md-6 col-xl-6">
                                    <div class="input-block local-forms">
                                        <x-input-label for="whatsapp" :value="__('patient.whatsapp')" />
                                        <x-text-input id="whatsapp" class="block mt-1 w-full" type="email" name="whatsapp" :value="old('whatsapp')"/>
                                        <x-input-error :messages="$errors->get('whatsapp')" class="mt-2" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- BLOOD TYPE -->
                                <div class=" col-12 col-md-6 col-xl-6">
                                    <div class="input-block local-forms">
                                        <x-input-label for="blood_type" :value="__('patient.blood_type')" class="local-top"/>
                                        <x-select-input name="blood_type" :options="\App\Models\Lista::bloodTypes()" :selected="[null]" class="block w-full"/>
                                        <x-input-error :messages="$errors->get('blood_type')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-6">
                                    <div class="form-group local-top-form">
                                        <label class="local-top">Avatar <span class="login-danger">*</span></label>
                                        <div class="settings-btn upload-files-avator">
                                            <input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" class="hide-input">
                                            <label for="file" class="upload">Choose File</label>
                                        </div>
                                    </div>
                                </div>
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
