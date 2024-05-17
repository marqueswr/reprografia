@extends('layouts.default')
@section('content')
<x-alert />
<br>
<link href="public/css/style.css" rel="stylesheet">
<div style="float-right">
<a class="btn btn-primary float-end" href="{{ route('disciplina.create') }}">Criar nova Disciplina</a>
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