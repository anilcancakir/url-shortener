<?php

namespace Tests\Feature\Auth;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegisterTest extends TestCase
{
    use DatabaseMigrations;

    /** @test * */
    public function a_user_may_not_access() {
        $this->signIn();

        $this->get(route('register'))
            ->assertRedirect();
    }

    /** @test * */
    public function a_guest_can_access() {
        $this->get(route('register'))
            ->assertSuccessful();
    }

    /** @test * */
    public function a_guest_can_register() {
        $email = 'sample@domain.com';

        $this->post(route('register'), [
            'name' => 'Lorem Ipsum',
            'email' => $email,
            'password' => 's3cRetPassword',
            'password_confirmation' => 's3cRetPassword',
            'tos' => '1'
        ])->assertRedirect();

        $this->assertDatabaseHas('users', [
            'email' => $email
        ]);
    }
}
