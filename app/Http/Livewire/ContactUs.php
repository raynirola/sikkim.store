<?php

namespace App\Http\Livewire;

use App\Notifications\ContactMessageNotification;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;

class ContactUs extends Component
{
    public ?string $name = null;
    public ?string $email = null;
    public ?string $message = null;

    public function render(): View
    {
        return view('livewire.contact-us');
    }

    public function sendMessage()
    {
        Notification::route('mail', config('services.admin.email'))
            ->notify(new ContactMessageNotification($this->validate()));

        session()->flash('success', 'Message sent successfully.');

        $this->reset();

        $this->dispatchBrowserEvent('message-sent');
    }

    protected function getRules(): array
    {
        return [
            'name' => ['required', 'max:32', 'regex:/^[\pL\s]+$/u'],
            'email' => ['required', 'email', 'email:rfc,dns', 'max:32'],
            'message' => ['required', 'min:20', 'max:1000']
        ];
    }

    protected function getMessages(): array
    {
        return [
            'name.regex' => 'The name may only contain letters and spaces.',
        ];
    }
}
