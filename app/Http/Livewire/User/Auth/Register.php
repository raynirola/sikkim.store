<?php

namespace App\Http\Livewire\User\Auth;

use App\Models\User;
use Livewire\Redirector;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use Str;

class Register extends Component
{
    public ?string $name = '';
    public ?string $email = '';
    public ?string $password = '';
    public ?string $username = '';

    public function register(): Redirector|RedirectResponse
    {
        $this->validate();

        $user = User::create([
            'email' => $this->email,
            'name' => $this->name,
            'username' => Str::uuid(),
            'password' => Hash::make($this->password),
        ]);

        event(new Registered($user));

        session()->flash('registered', 'Registered, please log in.');

        return redirect()->intended(route('login'));
    }

    protected function getRules(): array
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8'],
        ];
    }

    protected function getMessages(): array
    {
        return [
            'email.unique' => 'The email is not valid.'
        ];
    }

    public function render(): View
    {
        return view('livewire.user.auth.register')
            ->layout('layout.auth', ['title' => 'Create free account, register now.']);
    }

}
