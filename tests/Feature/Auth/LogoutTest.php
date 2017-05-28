<?php

namespace Tests\Feature\Auth;

use Auth;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LogoutTest extends TestCase
{
    use DatabaseMigrations;

    /** @test * */
    public function a_guest_may_not_access() {
        $this->get(route('logout'))
            ->assertRedirect();
    }

    /** @test * */
    public function a_user_user_access() {
        $this->signIn();

        $this->get(route('logout'))
            ->assertRedirect();
    }

    /** @test * */
    public function a_user_can_logout() {
        $this->signIn();

        $this->get(route('logout'))
            ->assertRedirect();
    }
}
