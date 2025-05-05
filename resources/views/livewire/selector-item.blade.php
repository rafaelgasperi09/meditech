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
        <div class="sel-list-item">
            <div>
                <img src="/items/{{$pic}}.png" style="width:60px"></div>
            <span>{{$i->value}} | {{$i->value_esp}}</span>
        </div>
        @endforeach
    </div>
</div>
