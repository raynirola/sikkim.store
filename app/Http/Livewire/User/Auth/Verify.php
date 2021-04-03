<?php

namespace App\Http\Livewire\User\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Jobs\SendVerificationEmailJob;
use Illuminate\Contracts\Support\Renderable;

class Verify extends Component
{
    public function resend()
    {
        if (Auth::user()->hasVerifiedEmail()) {
            return redirect(route('home'));
        }
        SendVerificationEmailJob::dispatch(auth()->guard('user')->user());

        $this->emit('resent');

        session()->flash('resent');
    }

    public function render(): Renderable
    {
        return view('livewire.user.auth.verify')->layout('layout.auth', ['title'=>'Email Verification']);
    }
}
