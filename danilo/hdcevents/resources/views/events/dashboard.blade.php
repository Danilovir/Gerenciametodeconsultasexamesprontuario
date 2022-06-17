@extends('layouts.main')

@section('title', 'Dasboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Minhas Consultas</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($events) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Exames</th>
                <th scope="col">Receitas</th>
                
            </tr>
        </thead>
   
    <tbody>
        @foreach($events as $event)
            <tr>
                <td scropt="row">{{ $loop->index + 1}}</td>
                <td><a href="/events/{{ $event->id }}">{{ $event->nome_consulta }}</a></td>
                <td>0</td>
                <td>
                    <a href="/events/edit/{{ $event->id }}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon> Editar</a>
                   <form action="/events/{{ $event->id }}" method="POST">
                       @csrf 
                       @method('DELETE')
                       <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline">Deletar</ion-icon></button>
                   </form>
            </tr>
        @endforeach
    </tbody>
    </table>
    @else
            <p>Você ainda não tem Consultas, <a href="/events/create">Cria Consultas</a></p>
    @endif 
</div>          
@endsection