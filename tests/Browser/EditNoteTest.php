<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group editnotes
     */
    public function testeditnote(): void
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
            ->clickLink('Edit')
            ->waitForLocation('/edit-note-page/3')
            ->assertPathIs('/edit-note-page/3')
            ->type('title', 'PPL')
            ->type('description', 'PPL modul 3 sulit ternyata')
            ->press('UPDATE')
            ->waitForLocation('/notes')
            ->assertPathIs('/notes');
        });
    }
}
