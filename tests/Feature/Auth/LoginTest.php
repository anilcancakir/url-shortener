<?php

namespace Tests\Feature\Auth;

use Auth;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
    use DatabaseMigrations;

    /** @test * */
    public function a_user_may_not_access() {
        $this->signIn();

        $this->get(route('login'))
            ->assertRedirect();
    }

    /** @test * */
    public function a_guest_can_access() {
        $this->get(route('login'))
            ->assertSuccessful();
    }

    /** @test * */
    public function a_guest_can_login() {
        $email = 'sample@domain.com';
        $password = 's3cRetPassword';

        $this->fakeUser([
            'email' => $email,
            'password' => $password
        ]);

        $this->post(route('login'), [
            'email' => $email,
            'password' => $password
        ])->assertRedirect();
    }
}
