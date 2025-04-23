<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testRegist(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Enterprise Application Development')
                    ->clickLink('Register')
                    ->waitForLocation('/register')
                    ->assertPathIs('/register')
                    ->type('name', 'John Doee')
                    ->type('email', 'johndoee@gmail.com')
                    ->type('password', 'user123')
                    ->type('password_confirmation', 'user123')
                    ->press('REGISTER')
                    ->waitForLocation('/dashboard')
                    ->assertPathIs('/dashboard');
        });
    }
    
}
