@extends('layouts.default')
@section('content')
<h5 class="alert alert-secondary">CRIAR DISCIPLINA</h5><br>
<form action="{{ route('disciplina.store') }}" method="POST">
    @csrf
   
    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome da disciplina"
                        value="{{ old('nome') }}">

    {{-- Verificar se existe a sessão success e imprimir o valor --}}
    <x-alert />
<br>
    <button type="submit" class="btn btn-primary">Gravar</button>
    <a class="btn btn-success" href="{{ route('disciplina.index') }}">Voltar</a>
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
            @forelse ($disciplinas as $disciplina)
            <tr>
                <td>{{ $disciplina->nome }}</td>
                <td ><a  class="btn btn-outline-secondary float-end ms-2 px-2" href="{{ route('disciplina.edit',['disciplina'=>$disciplina]) }}">Alterar</a>
                    <span >                           
                        <a type="submit" class="btn btn-outline-danger float-end ms-2 px-3" href="{{ route('disciplina.destroy',['disciplina'=>$disciplina->id]) }}" >Excluir</a></span></td>
            </tr>
            @empty
                <span style="color: #f00;">Nenhuma disciplina encontrada!</span>
            @endforelse
        </tbody>
    </table>

    {{ $disciplinas->onEachSide(0)->links() }}
</div>
@endsection