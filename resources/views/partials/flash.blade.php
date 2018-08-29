@if ($flash = session('message'))
    @if (session('type') === 'sucesso')
        <div id="flash-message" class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Sucesso: </strong>{{$flash}}
        </div>
    @elseif (session('type') === 'erro')
        <div id="flash-message" class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Aviso: </strong>{{$flash}}
        </div>
    @else
        <div id="flash-message" class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Informação: </strong>{{$flash}}
        </div>
     @endif
@endif
