<?php

namespace App\Http\Livewire\User\Auth;

use Livewire\Component;
use Livewire\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\Support\Renderable;

class Login extends Component
{
    public string $email = '';
    public string $password = '';
    public bool $remember = true;

    protected array $rules = ['email' => ['required', 'email'], 'password' => ['required'],];

    public function authenticate(): Redirector|RedirectResponse|null
    {
        $this->validate();
        if (!Auth::guard('user')->attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            $this->addError('email', trans('auth.failed'));
            return null;
        }
        return redirect()->intended()->route('user.home');
    }

    public function render(): Renderable
    {
        return view('livewire.user.auth.login')->layout('layout.auth', ['title'=>'User Login']);
    }
}
