@extends('layouts.default')
@section('content')
<x-alert />
<h5 class="alert alert-secondary">LISTA DE CÓPIAS LANÇADAS</h5><br>
  <div class="card mt-1 mb-3 border-light shadow">
    <div class="card-header d-flex justify-content-between">
     
      <div class="card-body">
        <form action="{{ route('copias.index') }}">
          <div clas="row">
            <div class="col-md-8 col-sm-6">
              <input type="text" name="solicitante" id="solicitante" class="form-control" value="{{ $solicitante }}"  placeholder="parte do nome do solicitante"/>
            </div>
  
            <div class="col-md-4 col-sm-6 mt-2 pt-3">
              <button type="submit"  class="btn btn-secondary btn-sm">PESQUISAR</button>
            </div>
          </div>
        </form>
      </div>
     
    </div>
  </div>

<link href="public/css/style.css" rel="stylesheet">
<div style="float-right">
<a class="btn btn-primary float-end" href="{{ route('copias.create') }}">Novo registro de cópia</a>
</div>
<br>
<div class="card-body">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Data</th>
                <th>Setor</th>
                <th>Solicitante</th>
                <th>Descrição</th>
              <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($copias as $copia)
                <tr>
                    <td>{{ \Carbon\Carbon::parse($copia->dtaSolicitacao)->format('d/m/Y') }}</td> 
                    <td>{{ $copia->setor }}</td>
                    <td>{{ $copia->solicitante }}</td>
                    <td>{{ $copia->descricao }}</td>
                    <td >
                        <td><a  class="btn btn-outline-secondary float-end ms-2 px-2" href="{{ route('copias.edit',['copia'=>$copia]) }}">Alterar</a>
                            <a  class="btn btn-outline-success float-end ms-2 px-2" href="{{ route('copias.show',['copia'=>$copia]) }}">Detalhes</a>
                            <span >                           
                            <a type="submit" class="btn btn-outline-danger float-end ms-2 px-3" href="{{ route('copias.destroy',['copia'=>$copia]) }}" >Excluir</a></span></td>
                </tr>
            @empty
                <span style="color: #f00;">Nenhum registro de cópias encontrado até o momento</span>
            @endforelse
        </tbody>
    </table>

    {{ $copias->onEachSide(0)->links() }}
</div>

@endsection