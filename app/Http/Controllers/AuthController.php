<?php

    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use App\Services\AuthService;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class AuthController extends Controller
    {
        protected $authService;

        public function __construct(AuthService $authService)
        {
            $this->authService = $authService;
        }

        public function showRegisterForm()
        {
            return view('Auth.register');
        }


        public function showLoginForm()
        {
            return view('Auth.login');
        }


        public function register(Request $request)
    {
        $user = $this->authService->register($request->all());
        if ($user) {
            Auth::login($user);
            return redirect()->route('showLoginForm')->with('success', 'Registration successful. Please log in.');
        }
        return back()->withErrors([
            'email' => 'Registration failed.',
        ])->onlyInput('email');
    }

        public function login(Request $request)
        {
            $credentials = $request->only('email', 'password');
            $user = $this->authService->login($credentials);
            if ($user) {
                Auth::login($user);
                // $request->session()->regenerate();
                return redirect()->intended(route('showProfile', ['id' => $user->id]));
            }
            return back()->withErrors([
                'email' => 'Invalid credentials.',
            ])->onlyInput('email');
        }

        // public function logout(Request $request)
        // {
        //     $this->authService->logout();

        //     $request->session()->invalidate();
        //     $request->session()->regenerateToken();

        //     return redirect('/');
        // }$request)
        // {
        //     $credentials = $request->validated();

        //     if ($this->authService->attemptLogin($credentials)) {
        //         $request->session()->regenerate();

        //         return redirect()->intended(route('home'));
        //     }

        //     return back()->withErrors([
        //         'email' => 'Invalid credentials.',
        //     ])->onlyInput('email');
        // }

        // public function logout(Request $request)
        // {
        //     $this->authService->logout();

        //     $request->session()->invalidate();
        //     $request->session()->regenerateToken();

        //     return redirect('/');
        // }
    }
