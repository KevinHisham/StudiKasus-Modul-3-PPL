<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DeleteNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group aaa
     */
    public function testExample(): void
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
            ->assertPathIs('/dashboard')
            ->assertSee('Dashboard')
            ->clickLink('Notes')
            ->waitForLocation('/notes')
            ->assertPathIs('/notes')
            ->press('Delete');
        });
    }
}
