<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User; // Import the User model
use Session;

class AdminOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Session()->has('loginId') && 
           (url('/userList') == $request->url() || url('/tempUserList') == $request->url())) {
           
            $user = User::where('id', Session()->get('loginId'))->first();

            // Check if the user role is Staff or Student
            if ($user && (($user->role === 'Staff') || ($user->role === 'Student'))) {
                return back(); // Redirect back to the previous page
            }
        }
        return $next($request);
    }
}
