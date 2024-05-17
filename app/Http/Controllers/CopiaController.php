<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Copia;
use App\Models\Serie;
use App\Models\Setor;
use App\Models\Disciplina;
use App\Models\Solicitante;
use Illuminate\Http\Request;
use App\Http\Requests\CopiaRequest;

class CopiaController extends Controller
{
    public function index(Request $request)
    {

        $copias = Copia::when ($request->has('solicitante'), function($whenQuery) use ($request){
            $whenQuery->where('solicitante', 'like','%' . $request->solicitante . '%');
        })
        ->orderByDesc('dtaSolicitacao')->paginate(10);
       
        return view('copias.index', [
            'copias'=> $copias,
            'solicitante'=> $request->solicitante,
        ]);
    }

    public function create(){
        $solicitantes = Solicitante::all();
        $setores = Setor::all();
        $disciplinas = Disciplina::all();
        $series = Serie::all();

        return view('copias.create',[
            'solicitantes'=>$solicitantes,
            'setores'=>$setores,
            'disciplinas'=>$disciplinas,
            'series'=>$series
        ]);
    }

    public function store(CopiaRequest $copia){
         // Validar o formulário
         $copia->validated();
       
         try {
             $copia = Copia::create([
                'solicitante' => $copia->solicitante,
                'disciplina' => $copia->disciplina,
                'quantidade' => $copia->quantidade,
                'serie' => $copia->serie,
                'setor' => $copia->setor,
                'dtaSolicitacao' => $copia->dtaSolicitacao,
                'tipoImpressao' => $copia->tipoImpressao,
                 'descricao' => $copia->descricao
             ]);
       
             // Redirecionar o usuário, enviar a mensagem de sucesso
             return redirect()->route('copias.create', ['copia' => $copia->id])->with('success', 'Cópia efetuada cadastrada com sucesso');
         } catch (Exception $e) {
 
             // Redirecionar o usuário, enviar a mensagem de erro
             return back()->withInput()->with('error', 'Cópia não cadastrada!');
         }
    }

    public function show(Copia $copia)
    {
        $solicitantes = Solicitante::all();
        $setores = Setor::all();
        $disciplinas = Disciplina::all();
        $series = Serie::all();
    
           return view('copias.show', [
                'copia'=>$copia,
                'solicitantes'=>$solicitantes,
                'setores'=>$setores,
                'disciplinas'=>$disciplinas,
                'series'=>$series
            ]);
    }

    public function destroy(Copia $copia)
    {
       // $disciplina->delete();

        Copia::findOrFail($copia->id)->delete();
        return redirect()-> route('copias.index')-> with('success', 'Registro de cópia excluído com sucesso');
    }

     // Carregar o formulário editar a conta
   public function edit(Copia $copia)
   {
    $solicitantes = Solicitante::all();
    $setores = Setor::all();
    $disciplinas = Disciplina::all();
    $series = Serie::all();

       return view('copias.edit', [
            'copia'=>$copia,
            'solicitantes'=>$solicitantes,
            'setores'=>$setores,
            'disciplinas'=>$disciplinas,
            'series'=>$series
        ]);
   }

   // Editar no banco de dados a conta
   public function update(CopiaRequest $request, Copia $copia)
   {
       $request->validated();

       try {
           $copia->update([
               'solicitante' => $request->solicitante,
               'disciplina' => $request->disciplina,
               'quantidade' => $request->quantidade,
               'serie' => $request->serie,
               'setor' => $request->setor,
               'dtaSolicitacao' => $request->dtaSolicitacao,
               'tipoImpressao' => $request->tipoImpressao,
               'descricao' => $request->descricao
           ]);
          
           return redirect()-> route('copias.index')-> with('success', 'Registro de cópia alterado com sucesso');

       } catch (Exception $e) {
           return back()->withInput()->with('error', 'O registro da cópia não foi alterado');
       }
   }
}
