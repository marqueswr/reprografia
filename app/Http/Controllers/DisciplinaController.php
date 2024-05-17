<?php

namespace App\Http\Controllers;

use App\Http\Requests\DisciplinaRequest;
use App\Models\Disciplina;
use Illuminate\Http\Request;
use Exception;

class DisciplinaController extends Controller
{
    public function index()
    {
       $disciplinas = Disciplina::orderBy('nome')->paginate(10);
       return view('disciplinas.index',['disciplinas'=>$disciplinas]);
    }
    
    public function create()
    {
        $disciplinas = Disciplina::orderBy('nome')->paginate(10);
        return view('disciplinas.create', ['disciplinas' => $disciplinas]);
    }

    public function store(DisciplinaRequest $request)
    {
        
           // Validar o formulário
           $request->validated();

           try {
   
               // Cadastrar no banco de dados na tabela contas os valores de todos os campos
               $disciplina = Disciplina::create([
                   'nome' => $request->nome
               ]);
   
               // Redirecionar o usuário, enviar a mensagem de sucesso
               return redirect()->route('disciplina.show', ['disciplina' => $disciplina->id])->with('success', 'Disciplina cadastrada com sucesso');
           } catch (Exception $e) {
   
               // Redirecionar o usuário, enviar a mensagem de erro
               return back()->withInput()->with('error', 'Conta não cadastrada!');
           }
    }

    public function show(Disciplina $disciplina)
    {
        $disciplinas = Disciplina::orderBy('nome')->paginate(10);
        return view('disciplinas.show', ['disciplinas' => $disciplinas]);
    }

    public function destroy(Disciplina $disciplina)
    {
       // $disciplina->delete();
    
        Disciplina::findOrFail($disciplina->id)->delete();
        return redirect()-> route('disciplina.index')-> with('success', 'Disciplina excluída com sucesso');
    }

     // Carregar o formulário editar a conta
   public function edit(Disciplina $disciplina)
   {
       // Carregar a VIEW
       return view('disciplinas.edit', ['disciplina' => $disciplina]);
   }

   // Editar no banco de dados a conta
   public function update(DisciplinaRequest $request, Disciplina $disciplina)
   {
       $request->validated();

       try {
           $disciplina->update([
               'nome' => $request->nome
           ]);
           return redirect()-> route('disciplina.index')-> with('success', 'Disciplina alterada com sucesso');

       } catch (Exception $e) {
           return back()->withInput()->with('error', 'Disciplina não alterada');
       }
   }

}
