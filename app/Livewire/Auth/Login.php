<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class Login extends Component
{
       public string $email = '';
    public string $password = '';
    public bool $remember = false;

    public function authenticate(){

          $this->validate([
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);

         $throttleKey = Str::lower($this->email) . '|' . request()->ip();

         if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
            $seconds = RateLimiter::availableIn($throttleKey);
            throw ValidationException::withMessages([
                'email' => __("Too many login attempts. Please try again in :seconds seconds.", ['seconds' => $seconds]),
            ]);
        }

         RateLimiter::hit($throttleKey, 60);

             if (!Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            Log::warning('Failed Admin login attempt', [
                'email' => $this->email,
                'ip' => request()->ip(),
                'user_agent' => request()->userAgent(),
            ]);

            throw ValidationException::withMessages([
                'email' => __('The provided credentials are incorrect.'),
            ]);
        }

           RateLimiter::clear($throttleKey);

           
        Log::info('Successful Admin login', [
            'user_id' => Auth::id(),
            'ip' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);

        session()->regenerate();
        
        return redirect(route('home'));
        // dd($this->email, $this->password, $this);
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
