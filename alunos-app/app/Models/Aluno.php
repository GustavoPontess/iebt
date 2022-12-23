<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Importanto SoftDeletes

class Aluno extends Model
{
    use HasFactory;
    use SoftDeletes; // Usando SoftDeletes
    protected $table = 'alunos';

    protected $dates = ['deleted_at']; // Configurando a propriedade protegida data, fazemos isso para que nosso code saber
    // como deve tratar essa coluna de date e hora,
    // lembrando que a propriedade dates ja foi definida internamente pelo laravel


    //configurando mass assignment
    // definindo quais atributos podem ser atribuidos em massa usando a propriedade fillable
    protected $fillable = [
        'name', // desta forma estamos tornando o nosso name e matricula da nossa model Aluno atibuives em massa
        'matricula'
    ];
}
