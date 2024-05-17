@extends('layouts.default')
@section('content')
<x-alert />
<br>
<h5 class="alert alert-secondary">LISTAR SETORES</h5><br>
<link href="public/css/style.css" rel="stylesheet">
<div style="float-right">
<a class="btn btn-primary float-end" href="{{ route('setores.create') }}">Criar novo Setor</a>
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
            @forelse ($setores as $setor)
            <tr>
                <td>{{ $setor->nome }}</td>
                <td ><a  class="btn btn-outline-secondary float-end ms-2 px-2" href="{{ route('setores.edit',['setores'=>$setor]) }}">Alterar</a>
                    <span >                           
                        <a type="submit" class="btn btn-outline-danger float-end ms-2 px-3" href="{{ route('setores.destroy',['setores'=>$setor->id]) }}" >Excluir</a></span></td>
            </tr>
            @empty
                <span style="color: #f00;">Nenhum setor encontrado</span>
            @endforelse
        </tbody>
    </table>

    {{ $setores->onEachSide(0)->links() }}
</div>

@endsection