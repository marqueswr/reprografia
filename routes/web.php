<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CopiaController;
use App\Http\Controllers\SerieController;
use App\Http\Controllers\SetorController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\SolicitanteController;

Route::get('/', function () {
    return view('home');
})->name('home');

//disciplinas
route::get('/disciplinas',[DisciplinaController::class,'index'])->name('disciplina.index');
route::get('/disciplinas/create',[DisciplinaController::class,'create'])->name('disciplina.create');
route::post('/disciplinas/store',[DisciplinaController::class,'store'])->name('disciplina.store');
route::get('/disciplinas/show/{disciplina}',[DisciplinaController::class,'show'])->name('disciplina.show');
Route::get('/disciplinas/destroy/{disciplina}', [DisciplinaController::class,'destroy'])->name('disciplina.destroy');
route::get('/disciplinas/edit/{disciplina}',[DisciplinaController::class,'edit'])->name('disciplina.edit');
route::put('/disciplinas/update/{disciplina}',[DisciplinaController::class,'update'])->name('disciplina.update');

//séries
route::get('/series',[SerieController::class,'index'])->name('serie.index');
route::get('/series/create',[SerieController::class,'create'])->name('serie.create');
route::post('/series/store',[SerieController::class,'store'])->name('serie.store');
route::get('/series/show/{serie}',[SerieController::class,'show'])->name('serie.show');
Route::get('/series/destroy/{serie}', [SerieController::class,'destroy'])->name('serie.destroy');
route::get('/series/edit/{serie}',[SerieController::class,'edit'])->name('serie.edit');
route::put('/series/update/{serie}',[SerieController::class,'update'])->name('serie.update');

//setores
route::get('/setores',[SetorController::class,'index'])->name('setores.index');
route::get('/setores/create',[SetorController::class,'create'])->name('setores.create');
route::post('/setores/store',[SetorController::class,'store'])->name('setores.store');
route::get('/setores/show/{setores}',[SetorController::class,'show'])->name('setores.show');
route::get('/setores/destroy/{setores}', [SetorController::class,'destroy'])->name('setores.destroy');
route::get('/setores/edit/{setores}',[SetorController::class,'edit'])->name('setores.edit');
route::put('/setores/update/{setores}',[SetorController::class,'update'])->name('setores.update');

//solicitantes
route::get('/solicitantes',[SolicitanteController::class,'index'])->name('solicitante.index');
route::get('/solicitantes/create',[SolicitanteController::class,'create'])->name('solicitante.create');
route::post('/solicitantes/store',[SolicitanteController::class,'store'])->name('solicitante.store');
route::get('/solicitantes/show/{solicitante}',[SolicitanteController::class,'show'])->name('solicitante.show');
route::get('/solicitantes/destroy/{solicitante}', [SolicitanteController::class,'destroy'])->name('solicitante.destroy');
route::get('/solicitantes/edit/{solicitante}',[SolicitanteController::class,'edit'])->name('solicitante.edit');
route::put('/solicitantes/update/{solicitante}',[SolicitanteController::class,'update'])->name('solicitante.update');

//cópias
route::get('/copias',[CopiaController::class,'index'])->name('copias.index');
route::get('/copias/create',[CopiaController::class,'create'])->name('copias.create');
route::post('/copias/store',[CopiaController::class,'store'])->name('copias.store');
route::get('/copias/show/{copia}',[CopiaController::class,'show'])->name('copias.show');
route::get('/copias/destroy/{copia}', [CopiaController::class,'destroy'])->name('copias.destroy');
route::get('/copias/edit/{copia}',[CopiaController::class,'edit'])->name('copias.edit');
route::put('/copias/update/{copia}',[CopiaController::class,'update'])->name('copias.update');