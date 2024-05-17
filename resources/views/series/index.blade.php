@extends('layouts.default')
@section('content')
<x-alert />
<br>
<h5 class="alert alert-secondary">LISTA DE SÉRIES</h5><br>
<link href="public/css/style.css" rel="stylesheet">
<div style="float-right">
<a class="btn btn-primary float-end" href="{{ route('serie.create') }}">Criar nova Série</a>
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
            @forelse ($series as $serie)
                <tr>
                    <td>{{ $serie->nome }}</td>
                    <td ><a  class="btn btn-outline-secondary float-end ms-2 px-2" href="{{ route('serie.edit',['serie'=>$serie]) }}">Alterar</a>
                        <span >                           
                            <a type="submit" class="btn btn-outline-danger float-end ms-2 px-3" href="{{ route('serie.destroy',['serie'=>$serie->id]) }}" >Excluir</a></span></td>
                </tr>
            @empty
                <span style="color: #f00;">Nenhuma série encontrada!</span>
            @endforelse
        </tbody>
    </table>

    {{ $series->onEachSide(0)->links() }}
</div>

@endsection