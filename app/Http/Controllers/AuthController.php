<?php

    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use App\Services\AuthService;
    use App\Services\StudiosService;
    use Illuminate\Http\Request;
    use Laravel\Socialite\Facades\Socialite;

    class AuthController extends Controller
    {
        protected $authService;
        public function __construct(AuthService $authService )
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
                return redirect()->route('showLoginForm')->with('success', 'Registration successful. Please log in.');
            }
            return back()->withErrors([
                'email' => 'Email already exists.',
            ])->onlyInput('email');
        }

        public function login(Request $request)
        {
            $credentials = $request->only('email', 'password');
            $login = $this->authService->login($credentials);
            $checkRole = $login->role->value;
            if($login && $checkRole == 'owner') {
                return redirect()->intended(route('dashboard'))->with('success', 'Logged in successfully.');
            }elseif($login && $checkRole == 'artist' ){
                return redirect()->intended(route('dashboard'))->with('success', 'Logged in successfully.');
            }elseif($login && $checkRole == 'admin'){
                return redirect()->intended(route('dashboard'))->with('success', 'Logged in successfully.');
            }

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

            if ($user->isOwner()) {
                return redirect()->intended(route('dashboard'))->with('success', 'Logged in successfully.');
            }
            return redirect()->intended('/dashboard');

        } catch (\Exception $e) {
            return redirect('/login')->withErrors(['error' => 'Unable to login using ' . ucfirst($provider)]);
        }
    }
}
