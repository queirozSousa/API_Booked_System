<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    use HasFactory;

    protected $table = 'attendence';
    protected $primaryKey = 'id';

    protected $fillable =
    [
        'name',
        'user_id',
        'date',
        'name_counter',
        'b_i',
        'assunto',
        'nuit',
        'numero_telefone',
        'email'

    ];
}
