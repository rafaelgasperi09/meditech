<x-app-layout>
    <div class="page-wrapper">
        <div class="content">
            <!-- Page Header -->
            @component('components.page-header')
                @slot('title')
                    {{ __('patient.title') }}
                @endslot
                @slot('li_1')
                      {{ __('generic.edit') }} {{ __('patient.titles') }}
                    @endslot
            @endcomponent
            <!-- /Page Header -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-12">
                                <div class="form-heading">
                                    <h4>  {{ __('generic.detail') }} {{ __('patient.title') }}</h4>
                                </div>
                            </div>
                            <form method="POST" action="{{ route('patient.update',$data->id) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <!-- ID NUMBER -->
                                    <div class="col-12 col-md-6 col-xl-4">
                                        <div class="input-block  local-forms">
                                            <x-input-label for="id_type" :value="__('patient.id_type')" required="true"/>
                                            <x-select-input name="id_type" :options="\App\Models\Lista::documentType()" :selected="[$data->id_type]" class="block mt-1 w-full"/>
                                            <x-input-error :messages="$errors->get('id_type')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-8">
                                        <div class=" input-block  local-forms ">
                                            <x-input-label for="id_number" :value="__('patient.full_id_number')" required="true"/>
                                            <x-text-input id="id_number" class="block mt-1 w-full" type="number" name="id_number" value="{{$data->id_number}}" autofocus/>
                                            <x-input-error :messages="$errors->get('id_number')" class="mt-2" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 col-xl-4">
                                        <!-- First Name -->
                                        <div class="input-block local-forms">
                                            <x-input-label for="first_name" :value="__('patient.first_name')" required="true"/>
                                            <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="$data->first_name" required />
                                            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-4">
                                        <!-- Last Name -->
                                        <div class="input-block local-forms">
                                            <x-input-label for="last_name" :value="__('patient.last_name')" required="true"/>
                                            <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="$data->last_name" required/>
                                            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-4">
                                        <!-- EMAIL -->
                                        <div class="input-block local-forms">
                                            <x-input-label for="email" value="{{__('patient.email').'/usuario'}}" required="true"/>
                                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="$data->email"/>
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- GENDER -->
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="input-block local-forms">
                                            <x-input-label for="gender" :value="__('patient.gender')" required="true"/>
                                            <x-select-input name="gender" :options="\App\Models\Lista::gender()" :selected="[$data->gender]" class="block w-full"/>
                                            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                                        </div>
                                    </div>
                                    <!-- BIRTHDATE -->
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="form-group local-forms cal-icon">
                                            <x-input-label for="birthdate" :value="__('patient.birthdate')" required="true"/>
                                            <x-text-input id="birthdate" type="text" name="text" :value="$data->birthdate" class="block mt-1 w-full datetimepicker" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- PHYSICAL ADDRESS -->
                                    <div class=" col-12 col-md-6 col-xl-6">
                                        <div class="input-block local-forms">
                                            <x-input-label for="physical_address" :value="__('patient.physical_address')" />
                                            <x-textarea-input id="physical_address" class="block mt-1 w-full" type="email" name="physical_address">{{$data->physical_address}}</x-textarea-input>
                                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <!-- BILLING ADDRESS -->
                                        <div class="input-block local-forms">
                                            <x-input-label for="billing_address" :value="__('patient.billing_address')" />
                                            <x-textarea-input id="billing_address" class="block mt-1 w-full" type="email" name="billing_address">{{$data->billing_address}}</x-textarea-input>
                                            <x-input-error :messages="$errors->get('billing_address')" class="mt-2" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <!-- PHONE -->
                                        <div class="input-block local-forms ">
                                            <x-input-label for="phone" :value="__('patient.phone')" />
                                            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="$data->phone"/>
                                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                                        </div>
                                    </div>
                                   <div class=" col-12 col-md-6 col-xl-6">
                                       <!-- WHATSAPP -->
                                       <div class="input-block local-forms">
                                           <x-input-label for="whatsapp" :value="__('patient.whatsapp')" />
                                           <x-text-input id="whatsapp" class="block mt-1 w-full" type="text" name="whatsapp" :value="$data->whatsapp"/>
                                           <x-input-error :messages="$errors->get('whatsapp')" class="mt-2" />
                                       </div>
                                   </div>
                                </div>
                                <div class="row">
                                    <div class=" col-12 col-md-6 col-xl-6">
                                        <!-- BLOOD TYPE -->
                                        <div class="input-block local-forms">
                                            <x-input-label for="blood_type" :value="__('patient.blood_type')" />
                                            <x-select-input name="blood_type" :options="\App\Models\Lista::bloodTypes()" :selected="[$data->blood_type]" class="block w-full"/>
                                            <x-input-error :messages="$errors->get('blood_type')" class="mt-2" />
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="form-group local-top-form">
                                            <label class="local-top">Avatar <span class="login-danger">*</span></label>
                                            <div class="settings-btn upload-files-avator">
                                                <input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" class="hide-input">
                                                <label for="file" class="upload">{{__('generic.Choose File')}}</label>
                                            </div>
                                            <div class="upload-images upload-size">
                                                @if($data->avatar())
                                                    <img src="{{ url('storage/'.$data->avatar()->path) }}" alt="Image" id="preview">
                                                @else
                                                    <img src="{{ URL::asset('/assets/img/favicon.png')  }}" alt="Image" id="preview">
                                                @endif
                                                <a href="javascript:void(0);" class="btn-icon logo-hide-btn">
                                                    <i class="feather-x-circle"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-end mt-4">
                                    <div class="doctor-submit text-end">
                                        <button type="submit" class="btn btn-primary submit-form me-2">  {{ __('button.update') }}</button>
                                        <a href="{{route('patient.index')}}" class="btn btn-primary cancel-form">  {{ __('button.cancel') }}</a>
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
