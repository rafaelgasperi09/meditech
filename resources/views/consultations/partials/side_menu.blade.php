<div class="theme-settings22">
    <div class="patient-information-btn">
        <div class=""
             type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Ver Informacion del paciente
        </div>
    </div>
</div>
<div class="consultation-close-menu" onclick="change_menu_visibility()">
    CERRAR MENÚ
</div>
<div class="menu-right">

    @php $i=0; @endphp
    @foreach($listado as $k=>$v)
        @php $i++; @endphp
            <div id="menu-right-item-{{$i}}" class="menu-right-item menu-right-item-hiddable" onclick="scroll_to_marker (1)">
                <div id="mandatory-bullet-{{$i}}" class="mandatory-bullet-{{$i}} mandatory-bullet mandatory-bullet-on"></div>
                {{ $v }}
            </div>
    @endforeach
</div>
{{--}}
<script>
    $('.btnglobal').on('click',function(){
        $('.btnglobal').removeClass('btnselected');
        $('.btnglobal').addClass('buttons');
        $(this).removeClass('buttons');
        $(this).addClass('btnselected');
    });
</script>
{{--}}
<style>
    .theme-settings22 {
        top: 100px;
        right: 200px;
        transition:0.3s all;
        line-height: 26px;
        padding:0px;
        background:none;
    }

    .consultation-close-menu {
        background-color: #e67e22;
        color: #ededed;
        position: fixed;
        right: 0px;
        width: 200px;
        text-align: center;
        top: 138px;
        cursor: pointer;
        box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
    }
    .menu-right {
        position: fixed;
        right: 0px;
        top: 170px;
        width: 200px;
    }
    .menu-right-item {
        width: 80%;
        margin-left: 20%;
        color: #FFFFFF;
        background:
            #005dba;
        padding:
            5px;
        padding-left: 5px;
        margin-bottom: -4px;
        transition:
            0.3s all;
        cursor: pointer;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
        padding-left: 12px;
        position: relative;
        border:
            1px solid white;
        font-size: 11px;
        user-select: none;
    }
    .mandatory-bullet-on {
        background-color: #27ae60;
    }
    .mandatory-bullet {
        width: 20px;
        height: 27px;
        background-color: #e74c3c;
        border-radius:
            5px;
        position: absolute;
        left: -6px;
        top: 0px;
        z-index: -10;
        transition:
            1s all ease-in-out;
        opacity: 1;
    }
    .floatmenu{
        background: #2323ff;  /* Fondo, debe ser más claro que el borde */
        border: 5px outset #006dba;  /* Grosor del Borde */  /* Color del Borde */
        color: white;  /* Color del texto */
        text-align: center;  /* Alineación del texto */
        text-shadow: -1px -1px rgba(0,0,0,.2);
        width:10%;position:fixed;
        height:80vh;
        background:#005dba;
        top:140px;
        right:0px;
        border-radius:10px 0 0 25px
    }
    .buttons{
        border: 5px outset #006dba;  /* Grosor del Borde */  /* Color del Borde */
        text-shadow: -1px -1px rgba(0,0,0,.2);
        color: white;
        background:#2079d1;
        padding:4px;
        width: 100%;
        border-radius: 10px;
        margin-bottom: 1px;
    }
    .btnselected{
        background:rgb(231, 231, 231);
        color: #006dba;
    }
    html {
        scroll-behavior: smooth;
    }
    a:active
    {
        color:black;
        background: white;
    }

    .patient-information-btn {
        width: 250px;
        font-size: 12px;
        color: #FFFFFF;
        background:  #005dba;
        padding:       0px;
        margin-bottom: 0px;
        transition:   0.3s all;
        cursor: pointer;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }
</style>
<script>
    let menu_visibility = true;

    function change_menu_visibility() {
        if (menu_visibility) {
            menu_visibility = false;
            $('.menu-right').addClass('menu-right-off');
        } else {
            menu_visibility = true;
            $('.menu-right').removeClass('menu-right-off');
        }
    }
</script>
