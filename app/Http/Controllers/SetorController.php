<?php

namespace App\Http\Controllers;

use App\Http\Requests\SetorRequest;
use App\Models\Setor;
use Illuminate\Http\Request;
use Exception;

class SetorController extends Controller
{
    public function index()
    {
       $setores = Setor::orderBy('nome')->paginate(10);
       return view('setores.index',['setores'=>$setores]);
    }
    public function create()
    {
        $setores = Setor::orderBy('nome')->paginate(10);
        return view('setores.create', ['setores' => $setores]);
    }

    public function store(SetorRequest $request)
    {
           $request->validated();

           try {
               $setores = Setor::create([
                   'nome' => $request->nome
               ]);

               return redirect()->route('setores.show', ['setores' => $setores])->with('success', 'Setor cadastrado com sucesso');
           } catch (Exception $e) {

               return back()->withInput()->with('error', 'Setor não cadastrado');
           }
    }

    public function show(Setor $setor)
    {
        $setores = Setor::orderBy('nome')->paginate(10);
        return view('setores.show', ['setores' => $setores]);
    }

    public function destroy(Setor $setores)
    {   
        Setor::findOrFail($setores->id)->delete();
        return redirect()-> route('setores.index')-> with('success', 'Setor excluído com sucesso');
    }

     // Carregar o formulário editar a conta
   public function edit(Setor $setores)
   {
       // Carregar a VIEW
       return view('setores.edit', ['setores' => $setores]);
   }

   // Editar no banco de dados a conta
   public function update(SetorRequest $request, Setor $setores)
   {
       $request->validated();

       try {
           $setores->update([
               'nome' => $request->nome
           ]);
           return redirect()-> route('setores.index')-> with('success', 'Setor alterado com sucesso');

       } catch (Exception $e) {
           return back()->withInput()->with('error', 'Setor não alterado');
       }
   }

}
