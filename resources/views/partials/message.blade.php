<div class="row" id="alert_messages">
    <div class="col-md-12">
        {{---}}
        @if (count($errors->all()) > 0)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <ul>
                    @foreach($errors->all() as $e)
                        <li/>{{ $e }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{--}}
        @if (session('message.error'))
            <p>&nbsp;</p>
            <div class="alert alert-danger ">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {!! nl2br(session('message.error')) !!}
            </div>
        @endif
        @if (session('message.warning'))
            <p>&nbsp;</p>
            <div class="alert alert-warning">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {!! nl2br(session('message.warning')) !!}
            </div>
        @endif
        @if (session('message.success'))
            <p>&nbsp;</p>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {!! nl2br(session('message.success')) !!}
            </div>
        @endif
    </div>
</div>
