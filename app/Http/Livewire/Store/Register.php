<?php

namespace App\Http\Livewire\Store;

use App\Models\Store;
use Livewire\Component;
use App\Models\Invitation;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Support\Renderable;

class Register extends Component
{
    public ?string $name = '';
    public ?string $email = '';
    public ?string $phone_number = '';
    public ?string $slug = '';
    public ?string $password = '';
    public ?string $passwordConfirmation = '';
    public ?string $invitationCode = '';
    public bool $invitationVerified = false;
    public bool $secondStepVerified = false;
    public string $step = 'Verify Invitation Code';

    protected $queryString = ['email'];

    public function verifyInvitation()
    {
        $this->validate($this->codeValidationRules(), $this->codeValidationMessages());
        $this->step = 'Proceed to next step';
        $this->invitationVerified = true;
    }

    public function updatedName($value): void
    {
        $this->slug = Str::slug($value);
    }

    public function verifySecondStep()
    {
        $this->validate($this->secondStepRules(), $this->secondStepMessages());
        $this->step = 'Register';
        $this->secondStepVerified = true;
    }

    public function register(): \Illuminate\Http\RedirectResponse
    {
        dd('Hit');
        $this->validate($this->registrationRules(), $this->registrationMessages());

        $store = Store::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone_number,
            'password' => Hash::make($this->password),
            'slug' => $this->slug
        ]);


        $this->deleteInvitation($this->invitationCode);

        session()->flash('registered', 'Registered, please log in.');

        return redirect()->intended(route('store.profile', $store->slug));
    }

    public function render(): Renderable
    {
        return view('livewire.store.register')->layout('layout.auth', ['title' => 'Store Registration']);
    }

    protected function deleteInvitation(string $code): void
    {
        Invitation::query()->where('code', $code)->delete();
    }

    protected function codeValidationRules(): array
    {
        return [
            'invitationCode' => ['required', 'exists:invitations,code'],
            'email' => [
                'required',
                'unique:stores',
                'email:rfc,dns,strict,spoof',
                'exists:invitations',
                Rule::exists('invitations')->where('code', $this->invitationCode),
            ],
        ];
    }

    protected function codeValidationMessages(): array
    {
        return [
            'invitationCode.exists' => 'Invalid code or email address.',
            'email.unique' => 'Invalid code or email address.',
            'email.exists' => 'Invalid code or email address.'
        ];
    }

    protected function secondStepRules(): array
    {
        return [
            'name' => ['required', 'regex:/^[\pL\s]+$/u'],
            'slug' => ['required', 'unique:stores,slug', 'alpha_dash'],
            'phone_number' => ['required', 'unique:stores,phone', 'numeric', 'digits:10'],
            'password' => ['required', 'min:8', 'same:passwordConfirmation'],
        ];
    }

    protected function secondStepMessages(): array
    {
        return [
            'name.regex' => 'The name may only contain letters and spaces.',
            'phone_number.unique' => 'Invalid phone number.',
        ];
    }
}
