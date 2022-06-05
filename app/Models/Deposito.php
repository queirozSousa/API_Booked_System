<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposito extends Model
{
    use HasFactory;

    protected $table = 'deposit';
    protected $primaryKey = 'id';

    protected $fillable =
    [
        'name',
        'user_id',
        'date',
        'name_counter',
        'b_i',
        'nuit',
        'number_cell',
        'name_of_recipient',
        'number_of_recipient',
        'amout'

    ];
}
