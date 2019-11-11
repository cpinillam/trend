<?php

namespace App\Http\Middleware;

use Closure;
use App\Products;

class Points
{

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)

    {
        $product = $request->route('product');
        $product->pointsAdd($product);

        return $next($request);
    }
}
