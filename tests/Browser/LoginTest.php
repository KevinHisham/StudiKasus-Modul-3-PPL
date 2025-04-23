<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group login
     */
    public function testLogin(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Enterprise Application Development')
                    ->clickLink('Log in')
                    ->waitForLocation('/login')
                    ->assertPathIs('/login')
                    ->type('email', 'johndoe@gmail.com')
                    ->type('password', 'user123')
                    ->press('LOG IN')
                    ->waitForLocation('/dashboard')
                    ->assertPathIs('/dashboard');
        });
    }
}
