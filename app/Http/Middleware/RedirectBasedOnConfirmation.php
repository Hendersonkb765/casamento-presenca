<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Guest;

class RedirectBasedOnConfirmation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->route('token');
        $guest = Guest::where('token',$token)->first();
        
        if($guest == null){
            abort(404);
        }
        
        if($guest->confirmed ==true){
           
            return redirect()->route('confirmed',['token'=>$token]);
        }
        else if(!is_null($guest->confirmed)){

            return redirect()->route('declined');
        }

        return $next($request);


    }
}
