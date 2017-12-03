@if (Session::has('key'))

<div class="alert alert-success">
  Utente <strong> {{ Session::get('key')->name }}</strong> registado com sucesso! Insira os dados pessoais do utente!
</div>

@endif