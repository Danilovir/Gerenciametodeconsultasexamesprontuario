<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consulta;

class ConsultaController extends Controller
{
    public function index(){

        $search = request('search');

        if($search){

            $consultas = Consulta::where([
                ['nome_consulta', 'like', '%' .$search.'%']
            ])->get();

        } else{
            $consultas = Consulta::all();
        }
       
      
          return view('welcome',[ 'consultas' => $consultas, 'search' => $search]);
      }
  
      public function create(){
          return view('events.create');
      }

      public function prontuario(){
          return view('events.prontuario');
      }

      public function receita(){
          return view('events.receita');
      }
      public function exame(){
        return view('events.exame');
    }

    public function usuarios(){
        return view('events.usuarios');
    }

    public function cade(){
        return view('events.cade');
    }


      

      public function store(Request $request){
          $consultas = new Consulta;
          $event = new Consulta;
           
          $consultas ->nome_consulta = $request->nome_consulta;
          $consultas ->nome_especialista = $request->nome_especialista;
          $consultas ->date = $request->date;
          $consultas ->private = $request->private;
          $consultas ->description = $request->description;
          $consultas ->items = $request->items;
          $user = auth()->user();
          $consultas->user_id = $user->id;

            $consultas->save();
            

            return redirect('/') ->with('msg', 'Consulta Criada com Sucesso!');
      }


      public function show($id) {
            $event =  Consulta::findOrFail($id);

            return view('events.show', ['event' => $event]);
      }


 

    

      public function dashboard() {
          $user = auth()->user();

          $consultas = $user->consultas;

          return view('events.dashboard', ['events' => $consultas]);
      }

      public function destroy($id) {
          Consulta::findOrFail($id)->delete();

          return redirect('/dashboard')->with('msg', 'Consulta Excluida com Sucesso!');
      }

      public function edit ($id) {

        $event = Consulta::findOrFail($id);

        return view('events.edit', ['event' => $event]); 
      }

      public function update(Request $request) {
            Consulta::findOrFail($request->id)->update($request->all());

            return redirect('/dashboard')->with('msg', 'Consulta Editada com Sucesso!');
      }

      public function joinEvent($id){
          $user = auth()->user();

          $user->eventsAsParticipant()->attach($id);

          $event = Consulta::findOrFail($id);

          return redirect('/dashboard')->with('msg', 'Sua consulta esta confirmada!' . $event->nome_consulta);
      }
}
