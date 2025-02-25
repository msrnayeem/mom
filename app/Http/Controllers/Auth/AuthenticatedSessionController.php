<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Authenticate the user
        $request->authenticate();

        // Regenerate session to prevent session fixation
        $request->session()->regenerate();

        // Redirect to the intended URL or to the role-specific dashboard
        if (auth()->user()->role === 'admin') {
            return redirect()->intended(route('admin.dashboard'));  // Admin's dashboard
        } elseif (auth()->user()->role === 'student') {
            return redirect(session('url.intended', route('student.dashboard')));
        } elseif (auth()->user()->role === 'teacher') {
            return redirect(session('url.intended', route('teacher.dashboard')));
        }

        // Default fallback if role is not matched
        return redirect()->intended('/');  // Home page or another default route
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
