<?php

namespace App\Http\Controllers;

use App\Http\Requests\SerieRequest;
use App\Models\Serie;
use Illuminate\Http\Request;
use Exception;

class SerieController extends Controller
{
    public function index()
    {
       $series = Serie::orderBy('nome')->paginate(10);
       return view('series.index',['series'=>$series]);
    }
    public function create()
    {
        $series = Serie::orderBy('nome')->paginate(10);
        return view('series.create', ['series' => $series]);
    }

    public function store(SerieRequest $request)
    {
        
           // Validar o formulário
           $request->validated();

           try {
   
               // Cadastrar no banco de dados na tabela contas os valores de todos os campos
               $series = Serie::create([
                   'nome' => $request->nome
               ]);

               // Redirecionar o usuário, enviar a mensagem de sucesso
               return redirect()->route('serie.show', ['serie' => $series])->with('success', 'Série cadastrada com sucesso');
           } catch (Exception $e) {
   
               // Redirecionar o usuário, enviar a mensagem de erro
               return back()->withInput()->with('error', 'Série não cadastrada!');
           }
    }

    public function show(Serie $serie)
    {
        $series = Serie::orderBy('nome')->paginate(10);
        return view('series.show', ['series' => $series]);
    }

    public function destroy(Serie $serie)
    {   
        Serie::findOrFail($serie->id)->delete();
        return redirect()-> route('serie.index')-> with('success', 'Série excluída com sucesso');
    }

     // Carregar o formulário editar a conta
   public function edit(Serie $serie)
   {
       // Carregar a VIEW
       return view('series.edit', ['serie' => $serie]);
   }

   // Editar no banco de dados a conta
   public function update(SerieRequest $request, Serie $serie)
   {
       $request->validated();

       try {
           $serie->update([
               'nome' => $request->nome
           ]);
           return redirect()-> route('serie.index')-> with('success', 'Série alterada com sucesso');

       } catch (Exception $e) {
           return back()->withInput()->with('error', 'Série não alterada');
       }
   }

}
