<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('copias', function (Blueprint $table) {
            $table->id();
            $table->string('solicitante');
            $table->string('disciplina');
            $table->integer('quantidade');
            $table->string('serie');
            $table->string('setor');
            $table->date('dtaSolicitacao');
            $table->string('tipoImpressao');
            $table->text('descricao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('copias');
       /*  Schema::table('copias',function(Blueprint $table){
            $table->foreignId('solicitanteId')->constrained()->onDelete('cascade');
            $table->foreignId('disciplinaId')->constrained()->onDelete('cascade');
            $table->foreignId('setorId')->constrained()->onDelete('cascade');
            $table->foreignId('serieId')->constrained()->onDelete('cascade');
        }); */
        
    }
};
