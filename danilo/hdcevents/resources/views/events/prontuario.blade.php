@extends('layouts.main')

@section('title', 'Criar Prontuario')

@section('content')

<h1>Saúde Certa Sim</h1>

<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h3 class="mb-0">
      <a class="btn btn-primary" href="/events/usuarios" role="button">Prontuario</a>
      </h3>
    </div>

    <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Usuário</label>
    <input class="form-control form-control-sm" type="text" placeholder="id:">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input class="form-control form-control-sm" type="password" placeholder="senha">
   
  </div>
 
  <a class="btn btn-primary" href="/events/receita" role="button">Entrar</a>
</form>
    

@endsection