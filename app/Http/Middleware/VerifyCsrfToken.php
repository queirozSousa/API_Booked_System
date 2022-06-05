<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
        'http://localhost:8000/register',
        'http://localhost:8000/logout',
        'http://localhost:8000/login',
        'http://localhost:8000/pais',
        'http://localhost:8000/api/perfil/{user}',
    ];
}
