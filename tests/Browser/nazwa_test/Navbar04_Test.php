<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Navbar04_Test extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group navbar4
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->assertSee('Destinasi')
            ->clickLink('Destinasi')
            ->assertPathIs('/')
            ->assertSee('Eksplor')
            ->clickLink('Eksplor')
            #->assertPathIs('/eksplor')
            ->visit('/')
            ->assertSee('Ulasan')
            ->clickLink('Ulasan')
           # ->assertPathIs('/ulasan')
            ->visit('/')
            ->assertSee('Artikel')
            ->clickLink('Artikel')
            ->assertPathIs('/artikel');
        });
    }
}
