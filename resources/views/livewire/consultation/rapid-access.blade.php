<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="mt-6 flex justify-end">
        <button class="btn btn-primary mt-2"
                type="button" data-bs-toggle="offcanvas" data-bs-target="#modal_{{$consultation_field_id}}"
                aria-controls="offcanvasTop">Listado de  {{ __('Acceso Rapido') }}
        </button>
    </div>
    <div class="offcanvas offcanvas-top quick-items quick-items-active" tabindex="-1" id="modal_{{$consultation_field_id}}" aria-labelledby="offcanvasTopLabel" style="height: 100vh;overflow-y: scroll;">
        <div class="offcanvas-body quick-items-content">
            <div  class="quick-items-close" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Cerrar">
                <img src="/images/close-floating.png" alt="">
            </div>
            <div class="sel-item-list-category">ACCESOS RAPIDOS</div>
            @foreach($items as $i)
            <div class="sel-list-item sel-code-{{$i->cpt->code}}" onclick="set_multivalue_item_value('field_681cd280962a8','{{$i->cpt->code}}','','','laboratory')">
                <div class="sel-list-item-code">{{$i->cpt->code}}</div>
                <div class="sel-list-item-content">{{$i->cpt->description_es}}</div>
                <div class="preloader-space"></div><div class="preloader-space-2">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
