<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balcao extends Model
{
    use HasFactory;

    protected $table = 'counter';
    protected $primaryKey = 'id';

    protected $fillable =
    [
        'name',
        'abreviatura',

    ];
}
