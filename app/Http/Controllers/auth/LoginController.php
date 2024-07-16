<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();

        Log::info('Login attempt with credentials: ', $credentials);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            Log::info('Login successful for user: ', ['id' => Auth::id(), 'role' => Auth::user()->role]);

            return $this->authenticated($request, Auth::user());
        }

        Log::warning('Login failed for email: ' . $credentials['email']);

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(LoginRequest $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    protected function authenticated(LoginRequest $request, $user)
    {
        if ($user->role === 'admin') {
            return redirect()->route('admin.adminDashboard');
        } else {
            return redirect()->route('layouts.userHomePage');
        }
    }
}
