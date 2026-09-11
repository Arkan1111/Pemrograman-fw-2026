<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next, string ...$roles): Response
    {
        if (! $request->user() || ! in_array($request->user()->role, $roles)) {
            return response(
                '<!DOCTYPE html>
                <html lang="id">
                <head>
                    <meta charset="UTF-8">
                    <title>403 - Akses Ditolak</title>
                    <style>
                        body {
                            font-family: system-ui, sans-serif;
                            background: #f8fafc;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            height: 100vh;
                            margin: 0;
                            text-align: center;
                            color: #1e293b;
                        }
                        .card {
                            background: #fff;
                            padding: 2rem;
                            border-radius: 8px;
                            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
                            max-width: 350px;
                        }
                        h1 { color: #ef4444; font-size: 2.5rem; margin: 0 0 10px; }
                        p { color: #64748b; font-size: 0.95rem; margin: 0; }
                    </style>
                </head>
                <body>
                    <div class="card">
                        <h1>403</h1>
                        <h3>Akses Ditolak</h3>
                        <p>Anda tidak memiliki izin untuk mengakses halaman ini.</p>
                    </div>
                </body>
                </html>',
                403
            );
        }

        return $next($request);
    }
}