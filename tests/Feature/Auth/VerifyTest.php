<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Tests\TestCase;
use Livewire\Livewire;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\URL;

class VerifyTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_view_verification_page()
    {
        $user = User::factory()->create([
            'email_verified_at' => null,
        ]);

        auth()->guard('user')->login($user);

        $this->get(route('verification.notice'))
            ->assertSuccessful()
            ->assertSeeLivewire('user.auth.verify');
    }

    /** @test */
    public function verified_user_cannot_visit_verify_route()
    {
        $user = User::factory()->create();
        auth()->guard('user')->login($user);
        $this->get(route('verification.notice'))
            ->assertRedirect(route('home'));
    }

    /** @test */
    public function can_resend_verification_email()
    {
        $user = User::factory()->create(
            ['email_verified_at' => null]
        );

        auth()->guard('user')->login($user);

        Livewire::test('user.auth.verify')
            ->call('resend')
            ->assertEmitted('resent')
            ->assertSet('resent', null);
    }

    /** @test */
    public function can_verify()
    {
        $user = User::factory()->create([
            'email_verified_at' => null,
        ]);

        Auth::guard('user')->login($user);

        $url = URL::temporarySignedRoute('verification.verify', Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)), [
            'id' => $user->getKey(),
            'hash' => sha1($user->getEmailForVerification()),
        ]);

        $this->get($url)
            ->assertRedirect(route('user.home', $user));

        $this->assertTrue($user->hasVerifiedEmail());
    }
}
