@extends('layouts.default')
@section('content')
<h5 class="alert alert-secondary">CRIAR SOLICITANTE</h5><br>
<form action="{{ route('solicitante.store') }}" method="POST">
    @csrf
   
    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome do Solicitante"
                        value="{{ old('nome') }}">

    {{-- Verificar se existe a sessão success e imprimir o valor --}}
    <x-alert />
<br>
    <button type="submit" class="btn btn-primary">Gravar</button>
    <a class="btn btn-success" href="{{ route('solicitante.index') }}">Voltar</a>
</form>
<x-alert />
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
                <span style="color: #f00;">Nenhum solicitante encontrado</span>
            @endforelse
        </tbody>
    </table>

    {{ $solicitantes->onEachSide(0)->links() }}
</div>
@endsection