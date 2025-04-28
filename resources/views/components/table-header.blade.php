<!-- Table Header -->
<div class="page-table-header mb-2">
    <div class="row align-items-center">
        <div class="col">
            <div class="doctor-table-blk">
                <h3>{{ $title }}</h3>
                <div class="doctor-search-blk">
                    <div class="top-nav-search table-search-blk">
                        <form action="javascript:;">

                            <input type="text" wire:model.live="search" placeholder="Buscar..." class="form-control" id="search">
                            <a class="btn"><img src="{{ URL::asset('/assets/img/icons/search-normal.svg') }}"  alt=""></a>
                        </form>
                    </div>
                    <div class="add-group">
                        <a href="{{ $li_1 }}" class="btn btn-primary add-pluss ms-2"><img src="{{ URL::asset('/assets/img/icons/plus.svg') }}" alt=""></a>
                        <a href="javascript:;" class="btn btn-primary doctor-refresh ms-2"><img src="{{ URL::asset('/assets/img/icons/re-fresh.svg') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-auto text-end float-end ms-auto download-grp">
            <a href="javascript:;" class=" me-2"><img src="{{ URL::asset('/assets/img/icons/pdf-icon-01.svg') }}"  alt=""></a>
            <a href="javascript:;" class=" me-2"><img src="{{ URL::asset('/assets/img/icons/pdf-icon-02.svg') }}"  alt=""></a>
            <a href="javascript:;" class=" me-2"><img src="{{ URL::asset('/assets/img/icons/pdf-icon-03.svg') }}"  alt=""></a>
            <a href="javascript:;"><img src="{{ URL::asset('/assets/img/icons/pdf-icon-04.svg') }}" alt=""></a>
        </div>
    </div>
</div>
<!-- /Table Header -->
