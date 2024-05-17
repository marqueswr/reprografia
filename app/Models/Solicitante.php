<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitante extends Model
{
    use HasFactory;
    // Indicar o nome da tabela
    protected $table = 'Solicitantes';

    // Indicar quais colunas podem ser cadastrada
    protected $fillable = ['nome'];

    public function copia(){
        return $this->hasMany(Copia::class);
    }
 
}
