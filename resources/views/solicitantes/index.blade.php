@extends('layouts.default')
@section('content')
<x-alert />
<br>
<h5 class="alert alert-secondary">LISTA DE SOLICITANTES</h5><br>
<link href="public/css/style.css" rel="stylesheet">
<div style="float-right">
<a class="btn btn-primary float-end" href="{{ route('solicitante.create') }}">Criar novo Solicitante</a>
</div>
<br>
<div class="card-body">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Nome</th>
              <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($solicitantes as $solicitante)
                <tr>
                    <td>{{ $solicitante->nome }}</td>
                    <td ><a  class="btn btn-outline-secondary float-end ms-2 px-2" href="{{ route('solicitante.edit',['solicitante'=>$solicitante]) }}">Alterar</a>
                        <span >                           
                            <a type="submit" class="btn btn-outline-danger float-end ms-2 px-3" href="{{ route('solicitante.destroy',['solicitante'=>$solicitante->id]) }}" >Excluir</a></span></td>
                </tr>
            @empty
                <span style="color: #f00;">Nenhum Solicitante encontrado</span>
            @endforelse
        </tbody>
    </table>

    {{ $solicitantes->onEachSide(0)->links() }}
</div>

@endsection