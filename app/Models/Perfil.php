<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

    protected $table = 'perfil';
    protected $primaryKey = 'id';

    protected $fillable =
    [
        'name',
        'date_of_birth',
        'adress',
        'user_id',
        'nationality',
        'b_i',
        'numero_de_conta',
        'nuit',
        'numero_telefone'
    ];

}
