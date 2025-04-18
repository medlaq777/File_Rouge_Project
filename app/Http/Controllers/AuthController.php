<?php

    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use App\Services\AuthService;
    use Illuminate\Http\Request;
    use Laravel\Socialite\Facades\Socialite;

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
            $login = $this->authService->login($request->only('email', 'password'));
            if ($login) {
                $user = $this->authService->login($request->only('email', 'password'));
                return redirect()->route('showLoginForm')->with('success', 'Registration successful. Please log in.');
            }
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
                $user = $this->authService->login($credentials);
                if ($user->isOwner()) {
                    return redirect()->intended(route('dashboard'))->with('success', 'Logged in successfully.');
                }
                // if ($user->isAdmin()) {
                //     return redirect()->intended(route('dashboard'))->with('success', 'Logged in successfully.');
                // }
                // if ($user->isArtist()) {
                //     return redirect()->intended(route('dashboard'))->with('success', 'Logged in successfully.');
                // }
            }
            return back()->withErrors([
                'email' => 'Invalid credentials.',
            ])->onlyInput('email');
        }

        public function logout(Request $request)
        {
            $this->authService->logout();
            return redirect()->route('showLoginForm')->with('success', 'Logged out successfully.');
        }

        public function redirectToProvider($provider)
        {
            return Socialite::driver($provider)->redirect();
        }

        public function handleProviderCallback($provider)
        {
            try {
                $socialiteUser = Socialite::driver($provider)->user();
                $user = $this->authService->handleSocialiteUser($provider, $socialiteUser);

                return redirect()->intended('/dashboard');
            } catch (\Exception $e) {
                return redirect('/login')->withErrors(['error' => 'Unable to login using ' . ucfirst($provider)]);
            }
        }
}
