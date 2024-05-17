@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-3">
<div class="card" style="width: 18rem;">
    <img src="img/imgSolicitantes.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><a href="{{ route('solicitante.index') }}">Solicitantes</a></h5>
      
      <p class="card-text">Informações de todos os setores com autorização para emissão de cópias</p>
   
    </div>
  </div>
</div>
<div class="col-md-3">
    <div class="card" style="width: 18rem;">
        <img src="img/imgSeries.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><a href="{{ route('serie.index') }}">Séries</a></h5>
          <p class="card-text">Informações de todas as séries das respectivas células</p>
         
        </div>
      </div>
    </div>
    <div class="col-md-3">
        <div class="card" style="width: 18rem;">
            <img src="img/imgDisciplinas.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href="{{ route('disciplina.index') }}">Disciplinas</a></h5>
              <p class="card-text">Informações de todas as disciplinas disponíveis</p>
             
            </div>
          </div>
        </div>
        
<div class="col-md-3">
    <div class="card" style="width: 18rem;">
        <img src="img/imgSetores.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><a href="{{ route('setores.index') }}">Setores</a></h5>
          <p class="card-text">Informações de todos os setores com autorização para emissão de cópias</p>
        
        </div>
      </div>
    </div>
</div>
</div>
<br>
<div class="row">
    <div class="col-md-3">
<div class="card" style="width: 18rem;">
    <img src="img/imgCopias.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><a href="{{ route('copias.index') }}">Cópias</a></h5>
      <p class="card-text">Informações de todos os registros de cópias efetuadas</p>
 
    </div>
  </div>
</div>
<div class="col-md-3">
    <div class="card" style="width: 18rem;">
        <img src="img/imgConsultas.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Consultas</h5>
          <p class="card-text">Informações de todos os setores com autorização para emissão de cópias</p>
        
        </div>
      </div>
    </div>
    <div class="col-md-3">
        <div class="card" style="width: 18rem;">
            <img src="img/imgRelatorios.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Relatórios</h5>
              <p class="card-text">Informações de todos os setores com autorização para emissão de cópias</p>
           
            </div>
          </div>
        </div>
        
<div class="col-md-3">
    <div class="card" style="width: 18rem;">
        <img src="img/imgAdmin.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Administração</h5>
          <p class="card-text">Informações de todos os setores com autorização para emissão de cópias</p>
        
        </div>
      </div>
    </div>
</div>
</div>
</div>
@endsection