@extends('layouts.main')

@section('title', 'Registro')

@section('content')

<h1>Danilo Rodrigues</h1>
<h2>Histórico do Paciente</h2>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Data</th>
      <th scope="col">Nome Médico</th>
      <th scope="col">Especialidade</th>
      <th scope="col">Ocorrência</th>
      <th scope="col">Exames Realizados</th>
      <th scope="col">Pedidos de Exame</th>
      <th scope="col">Medicamentos</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">14/06/2022</th>
      <td>Danilo Rodrigues</td>
      <td>Cardiologista</td>
      <td>Dores</td>
      <td>Não</td>
      <td>Sangue</td>
      <td>LNão</td>
    </tr>
    <tr>
      <th scope="row">21/06/2022</th>
      <td>Madalena Rosevelt</td>
      <td>Fisioterapia</td>
      <td>Dor nas costas</td>
      <td>Raio X</td>
      <td>Não</td>
      <td>Não</td>
    </tr>
    <tr>
      <th scope="row">28/06/2022</th>
      <td>Rita Félix</td>
      <td>Clinico Geral</td>
      <td>Dor de cabeça</td>
      <td>Não</td>
      <td>Não</td>
      <td>Não</td>
    </tr>
  </tbody>
</table>

@endsection