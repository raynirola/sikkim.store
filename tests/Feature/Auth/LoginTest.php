<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Livewire;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_view_login_page()
    {
        $this->get(route('login'))
            ->assertSuccessful()
            ->assertSeeLivewire('user.auth.login');
    }

    /** @test */
    public function is_redirected_to_user_profile_if_already_logged_in()
    {
        $user = User::factory()->create();

        auth()->guard('user')->login($user);

        $this->get(route('login'))
            ->assertRedirect(route('user.profile'));
    }

    /** @test */
    public function a_user_can_login()
    {
        $user = User::factory()->create(['password' => Hash::make('password')]);

        Livewire::test('user.auth.login')
            ->set('email', $user->email)
            ->set('password', 'password')
            ->call('authenticate');

        $this->assertAuthenticatedAs($user, 'user');
        $this->assertFalse(Auth::guard('store')->check());
    }

    /** @test */
    public function is_redirected_to_the_user_home_page_after_login()
    {
        $user = User::factory()->create(['password' => Hash::make('password')]);

        Livewire::test('user.auth.login')
            ->set('email', $user->email)
            ->set('password', 'password')
            ->call('authenticate')
            ->assertRedirect(route('user.home'));
    }

    /** @test */
    public function email_is_required()
    {
        Livewire::test('user.auth.login')
            ->set('password', 'password')
            ->call('authenticate')
            ->assertHasErrors(['email' => 'required']);
    }

    /** @test */
    public function email_must_be_valid_email()
    {

        Livewire::test('user.auth.login')
            ->set('email', 'invalid-email')
            ->set('password', 'password')
            ->call('authenticate')
            ->assertHasErrors(['email' => 'email']);
    }

    /** @test */
    public function password_is_required()
    {
        Livewire::test('user.auth.login')
            ->set('email', 'email@gmail.com')
            ->call('authenticate')
            ->assertHasErrors(['password' => 'required']);
    }

    /** @test */
    public function bad_login_attempt_shows_error_message()
    {
        $user = User::factory()->create();

        Livewire::test('user.auth.login')
            ->set('email', $user->email)
            ->set('password', 'bad-password')
            ->call('authenticate')
            ->assertHasErrors('email');
    }

    /** @test */
    public function wrong_credentials_doesnt_not_authenticate()
    {

        Livewire::test('user.auth.login')
            ->set('email', 'wrongemail@gmail.com')
            ->set('password', 'bad-password')
            ->call('authenticate');

        $this->assertFalse(Auth::guard('user')->check());

    }

    /** @test */
    public function only_proper_credentials_authenticates()
    {

        $user =  User::factory()->create(['password' => bcrypt('password')]);

        Livewire::test('user.auth.login')
            ->set('email', $user->email)
            ->set('password', 'password')
            ->call('authenticate');

        $this->assertTrue(Auth::guard('user')->check());

    }
}
