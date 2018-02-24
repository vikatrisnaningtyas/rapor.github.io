<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Contracts\Auth\Factory as Auth;

class RoleEitherAuthentication
{
    protected $auth;
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        $this->authenticate($roles);
        return $next($request);
    }

    protected function authenticate(array $aliases)
    {
        $this->auth->authenticate();

        if(empty($aliases) || $this->auth->user()->roles()->whereIn('alias', $aliases)->count())
        {
            return;
        }

        throw new AuthenticationException();
    }
}
