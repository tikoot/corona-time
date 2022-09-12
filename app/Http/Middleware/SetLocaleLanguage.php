<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SetLocaleLanguage
{
	/**
	 * Handle an incoming request.
	 */
	public function handle(Request $request, Closure $next): Response|RedirectResponse
	{
		$lang = session('lang', 'en');
		app()->setLocale($lang);
		return $next($request);
	}
}
