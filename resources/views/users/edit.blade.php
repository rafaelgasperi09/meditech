<x-app-layout>
    <div class="page-wrapper">
        <div class="content">
            <!-- Page Header -->
            @component('components.page-header')
                @slot('title')
                    {{ __('user.title') }}
                @endslot
                @slot('li_1')
                    {{ __('generic.edit') }} {{ __('user.titles') }}
                @endslot
            @endcomponent
            <!-- /Page Header -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-12">
                                <div class="form-heading">
                                    <h4>  {{ __('generic.edit') }} {{ __('user.title') }}</h4>
                                </div>
                            </div>
                            <form method="POST" action="{{ route('user.update',$data->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-md-6 col-xl-4">
                                    <!-- Email -->
                                    <div class="input-block local-forms">
                                        <x-input-label for="email" :value="__('Correo Electrónico')" required/>
                                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="$data->email" required autofocus />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-4">
                                    <!-- First Name -->
                                    <div class="input-block local-forms">
                                        <x-input-label for="first_name" :value="__('user.first_name')" required/>
                                        <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="$data->first_name" required />
                                        <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-4">
                                    <!-- Last Name -->
                                    <div class="input-block local-forms">
                                        <x-input-label for="last_name" :value="__('user.last_name')" required/>
                                        <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="$data->last_name" required />
                                        <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 col-xl-6">
                                    <!-- Client -->
                                    <div class="input-block local-forms">
                                        <x-input-label for="client" :value="__('client.title')" />
                                        <x-select-input name="clients" :options="\App\Models\Client::pluck('name','id')->toArray()" :selected="$data->clients()->pluck('client_id')->toArray()" class="block w-full"/>
                                        <x-input-error :messages="$errors->get('clients')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-6">
                                    <!-- Rol -->
                                    <div class="input-block local-forms">
                                        <x-input-label for="rol" :value="__('user.rol')" />
                                        <x-select-input name="rol" :options="\App\Models\Rol::pluck('name','id')->toArray()" :selected="$data->roles()->pluck('id')->toArray()" class="block w-full"/>
                                        <x-input-error :messages="$errors->get('rol')" class="mt-2" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- PICTURE -->
                                <div class="col-12 col-md-6 col-xl-12">
                                    <div class="form-group local-top-form">
                                        <label class="local-top">Avatar <span class="login-danger">*</span></label>
                                        <div class="settings-btn upload-files-avator">
                                            <input type="file" accept="image/*" name="avatar" id="file"    onchange="loadFile(event)" class="hide-input">
                                            <label for="file" class="upload">Buscar Archivo</label>
                                        </div>
                                    </div>
                                </div>
                            </div><p>&nbsp;</p><p>&nbsp;</p>
                            <div class="row">
                                <div class="col-12 col-md-6 col-xl-6">
                                    <!-- Password -->
                                    <div class="input-block local-forms">
                                        <x-input-label for="update_password_password" :value="__('user.new_password')" />
                                        <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-6">
                                    <!-- confirm Password -->
                                    <div class="input-block local-forms">
                                        <x-input-label for="update_password_password_confirmation" :value="__('user.confirm_password')" />
                                        <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <div class="doctor-submit text-end">
                                    <button type="submit" class="btn btn-primary submit-form me-2">  {{ __('button.edit') }}</button>
                                    <a href="{{route('user.index')}}" class="btn btn-primary cancel-form">  {{ __('button.cancel') }}</a>
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
