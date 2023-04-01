<link href="{{ asset('public/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">




<div class="container">


    <h4 align="center">  {{$plano->name}}</h4>
    <p></p>
    <hr>
@if ($plano->breakfast)
    <div class="col-md-4 breakfast">
    <h5 class="breakfast">
        Pequeno Almoço
    </h5>
</div>
<div class="modal-body breakfast">
    <div style="white-space: pre-line" class="modal-breakfast">
        {{$plano->breakfast}}
    </div>
</div>
    <hr>
@endif
@if ($plano->morning_snack)

<div class="col-md-4 morning_snack">
    <h5 class="morning_snack">
        Lanche da manha
    </h5>
</div>
<div class="modal-body morning_snack">
    <div style="white-space: pre-line" class="modal-morning_snack">
        {{$plano->morning_snack}}
    </div>
</div>
    <hr>
@endif

@if ($plano->morning_snack_one)
<div class="col-md-4 morning_snack_one">
    <h5 class="morning_snack_one">
        Segundo Lanche da manha
    </h5>
</div>
<div class="modal-body morning_snack_one">
    <div style="white-space: pre-line" class="modal-morning_snack_one">
        {{$plano->morning_snack_one}}
    </div>
</div>
    <hr>
@endif
    @if ($plano->lunch)

    <div class="col-md-4 lunch">
    <h5 class="lunch">
        Almoço
    </h5>
</div>
<div class="modal-body lunch">
    <div style="white-space: pre-line" class="modal-lunch">
        {{$plano->lunch}}
    </div>
</div>
    <hr>
    @endif
    @if ($plano->snack_one)

<div class="col-md-4 snack_one">
    <h5 class="snack_one">
        Lanche da tarde
    </h5>
</div>
<div class="modal-body snack_one">
    <div style="white-space: pre-line" class="modal-snack_one">
        {{$plano->snack_one}}
    </div>
</div>
    <hr>
    @endif
    @if ($plano->snack_two)

<div class="col-md-4 snack_two">
    <h5 class="snack_two">
        Segundo Lanche da tarde
    </h5>
</div>
<div class="modal-body snack_two">
    <div style="white-space: pre-line" class="modal-snack_two">
        {{$plano->snack_two}}
    </div>
</div>
    <hr>
    @endif
    @if ($plano->diner)


<div class="col-md-4 diner">
    <h5 class="diner">
        Jantar
    </h5>
</div>
<div class="modal-body diner">
    <div style="white-space: pre-line" class="modal-diner">
        {{$plano->diner}}
    </div>
</div>
    <hr>

    @endif
    @if ($plano->bedtime_snack)

<div class="col-md-4 bedtime_snack">
    <h5 class="bedtime_snack">
        Ceia
    </h5>
</div>
<div class="modal-body bedtime_snack">
    <div style="white-space: pre-line" class="modal-bedtime_snack">
        {{$plano->bedtime_snack}}
    </div>
</div>
    <hr>

    @endif
    @if ($plano->recomendations)


<div class="col-md-4 recomendations">
    <h5 class="recomendations">
        Recomendações
    </h5>
</div>
<div class="modal-body recomendations">
    <div style="white-space: pre-line" class="modal-recomendations">
        {{$plano->recomendations}}
    </div>
</div>
        @endif
</div>