@extends('layouts.main')

@section('title', 'Dasboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Minhas Consultas</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($events) > 0)
    @else
            <p>Você ainda não tem Consultas, <a href="/consultas/create">Cria Consultas</a></p>
    @endif 
</div>          
@endsection