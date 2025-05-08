<div>
    <div  class="selector-items">
        @foreach($items as $i)
        @php
            $pic = str_replace(' ','',$i->value);
            $pic = str_replace('(','',$pic);
            $pic = str_replace(')','',$pic);
            $pic = str_replace('/','',$pic);
             $pic = str_replace('-','',$pic);
        @endphp
        <div class="sel-list-item @if(in_array($i->id,$actives->pluck('record_id')->toArray())) location-active @endif">
            <div>
                <img src="/items/{{$pic}}.png" style="width:60px"></div>
            <span>{{$i->value}} | {{$i->value_esp}}</span>
        </div>
        @endforeach
    </div>
</div>
