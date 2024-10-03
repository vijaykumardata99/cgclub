<?php

namespace App\Http\Middleware;

use App\Models\MasterUser;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class attachRoleData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $role_id = session('role_id');
        $roleData = $role_id ? MasterUser::find($role_id) : null;
        $request->merge(['roleData' => $roleData]);
        return $next($request);
    }
}
