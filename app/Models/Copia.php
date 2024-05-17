<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Copia extends Model
{
    use HasFactory;
     // Indicar o nome da tabela
     protected $table = 'Copias';

     // Indicar quais colunas podem ser cadastrada
     protected $fillable = ['solicitante','disciplina','quantidade','serie','setor','dtaSolicitacao','tipoImpressao','descricao'];


     /*  public function solicitanteCopia()
      {
         return $this->belongsTo(Solicitante::class);
      }
      public function serieCopia()
      {
         return $this->belongsTo(Serie::class);
      }
      public function disciplinaCopia()
      {
         return $this->belongsTo(Disciplina::class);
      }
      public function setoresCopia()
      {
         return $this->belongsTo(Setor::class);
      } */
}
