<?php

namespace App\Http\Controllers;

use App\Http\Requests\SolicitanteRequest;
use App\Models\Solicitante;
use Illuminate\Http\Request;
use Exception;

class SolicitanteController extends Controller
{
    public function index()
    {
       $solicitantes = Solicitante::orderBy('nome')->paginate(10);
       return view('solicitantes.index',['solicitantes'=>$solicitantes]);
    }
    public function create()
    {
        $solicitantes = Solicitante::orderBy('nome')->paginate(10);
        return view('solicitantes.create', ['solicitantes' => $solicitantes]);
    }

    public function store(SolicitanteRequest $request)
    {
        
           // Validar o formulário
           $request->validated();

           try {
   
               // Cadastrar no banco de dados na tabela contas os valores de todos os campos
               $solicitante = Solicitante::create([
                   'nome' => $request->nome
               ]);
   
               // Redirecionar o usuário, enviar a mensagem de sucesso
               return redirect()->route('solicitante.show', ['solicitante' => $solicitante->id])->with('success', 'Solicitante cadastrada com sucesso');
           } catch (Exception $e) {
   
               // Redirecionar o usuário, enviar a mensagem de erro
               return back()->withInput()->with('error', 'Solicitante não cadastrado');
           }
    }

    public function show(Solicitante $solicitante)
    {
        $solicitantes = Solicitante::orderBy('nome')->paginate(10);
        return view('solicitantes.show', ['solicitantes' => $solicitantes]);
    }

    public function destroy(Solicitante $solicitante)
    {
       // $disciplina->delete();
    
        Solicitante::findOrFail($solicitante->id)->delete();
        return redirect()-> route('solicitante.index')-> with('success', 'Solicitante excluído com sucesso');
    }

     // Carregar o formulário editar a conta
   public function edit(Solicitante $solicitante)
   {
       // Carregar a VIEW
       return view('solicitantes.edit', ['solicitante' => $solicitante]);
   }

   // Editar no banco de dados a conta
   public function update(SolicitanteRequest $request, Solicitante $solicitante)
   {
       $request->validated();

       try {
           $solicitante->update([
               'nome' => $request->nome
           ]);
           return redirect()-> route('solicitante.index')-> with('success', 'Solicitante alterado com sucesso');

       } catch (Exception $e) {
           return back()->withInput()->with('error', 'Solicitante não alterado');
       }
   }

}
