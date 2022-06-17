@extends('layouts.main')

@section('title', 'Criar Prontuario')

@section('content')

<h1>Agendar Exames</h1>

<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Especialidade</th>
      <th scope="col">Médico</th>
      <th scope="col">Data</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Pediatria</td>
      <td>Danilo Rodrigues</td>
      <td>20/06/2022</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Cardiologia</td>
      <td>Joelma Sousa</td>
      <td>30/06/2022</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Fisioterapia</td>
      <td>Rita Felix</td>
      <td>25/07/2022</td>
    </tr>
  </tbody>
</table>


@endsection