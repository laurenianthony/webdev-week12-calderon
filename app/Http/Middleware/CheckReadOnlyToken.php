<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckReadOnlyToken
{
    public function handle(Request $request, Closure $next): Response
    {
        // If the token has 'read' ability and the request is a write method (POST, PUT, PATCH, DELETE)
        if ($request->user() && $request->user()->tokenCan('read') && ! $request->isMethodSafe()) {
            return response()->json([
                'message' => 'This token is read-only and cannot perform write operations.',
            ], 403);
        }

        return $next($request);
    }
}