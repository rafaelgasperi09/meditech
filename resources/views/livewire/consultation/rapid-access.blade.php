<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}

    <x-primary-button class="float-right inline-block p-2" style="float:right;margin-bottom: 20px;"
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'rapid_acess_{{$consultation_field_id}}')"
    >  {{ __('Acceso Rapido') }}
    </x-primary-button>

    <x-modal name="rapid_acess_{{$consultation_field_id}}" maxWidth="full_w" class="quick-items quick-items-active">
        <div class="" style="max-height: 700px;width: 85%;font-size: 12px;margin:0 auto;overflow-y: scroll;text-align: left">
            <table class="w-full border-collapse border border-gray-300 mt-3 p-2" >
                @foreach($items as $i)
                    <tr>
                        <th class="border p-2">{{$i->cpt->code}}</th>
                        <th class="border p-2">{{$i->cpt->description}}</th>
                        <th class="border p-2">{{$i->cpt->description_es}}</th>
                    </tr>

                @endforeach
            </table>
        </div>


            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>
            </div>

    </x-modal>

</div>
