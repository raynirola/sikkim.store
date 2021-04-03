<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Tests\TestCase;
use Livewire\Livewire;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;

class RegisterTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function registration_page_contains_livewire_component()
    {
        $this->get(route('register'))
            ->assertSuccessful()
            ->assertSeeLivewire('user.auth.register');
    }

    /** @test */
    public function is_redirected_to_user_profile_page_if_already_logged_in()
    {
        $user = User::factory()->create();

        auth('user')->login($user);

        $this->get(route('register'))
            ->assertRedirect(route('user.profile'));
    }

    /** @test */
    function a_user_can_register()
    {
        Event::fake();
        $this->assertDatabaseCount('users', 0);
        Livewire::test('user.auth.register')
            ->set('name', 'Test User')
            ->set('email', 'testuserone@sikkim.store')
            ->set('password', 'password')
            ->call('register')
            ->assertRedirect(route('login'));

        $this->assertEquals(true, session()->has('registered'));
        $this->assertTrue(User::whereEmail('testuserone@sikkim.store')->exists());
        $this->assertDatabaseCount('users', 1);
        $this->assertFalse(auth()->guard('user')->check());
        Event::assertDispatched(Registered::class);
    }

    /** @test */
    function name_is_required()
    {
        Livewire::test('user.auth.register')
            ->set('name', '')
            ->call('register')
            ->assertHasErrors(['name' => 'required']);
    }

    /** @test */
    function email_is_required()
    {
        Livewire::test('user.auth.register')
            ->set('email', '')
            ->call('register')
            ->assertHasErrors(['email' => 'required']);
    }

    /** @test */
    function email_is_valid_email()
    {
        Livewire::test('user.auth.register')
            ->set('email', 'invalidEmail')
            ->call('register')
            ->assertHasErrors(['email' => 'email']);
    }

    /** @test */
    function email_has_not_been_taken_already()
    {
        $user = User::factory()->create(['email' => 'testuser@sikkim.store']);

        Livewire::test('user.auth.register')
            ->set('email', $user->email)
            ->call('register')
            ->assertHasErrors(['email' => 'unique']);
    }


    /** @test */
    function password_is_required()
    {
        Livewire::test('user.auth.register')
            ->set('password', '')
            ->call('register')
            ->assertHasErrors(['password' => 'required']);
    }

    /** @test */
    function password_is_minimum_of_eight_characters()
    {
        Livewire::test('user.auth.register')
            ->set('password', 'secret')
            ->call('register')
            ->assertHasErrors(['password' => 'min']);
    }
}
