@extends('layouts.main')

@section('title', 'Usuarios')

@section('content')


<h1>Danilo Rodrigues Vieira</h1>


<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">CPF</th>
      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">Telefone</th>
    </tr>
  </thead>
  <tbody>
   
    <tr>
      <th scope="row">375.951.458-21</th>
      <td><a href="/events/cade">Danilo Rodrigues Vieira</a></td>
      <td>Rua Bentevi, N° 581, PQ Industrial</td>
      <td>(15)9 4365-9012</td>
    </tr>

    
  </tbody>
</table>
@endsection