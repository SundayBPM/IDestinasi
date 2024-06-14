<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Artikel1_Test extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group artikel1
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Artikel')
                    ->assertPathIs('/artikel')
                    ->assertSee('Baca Postingan Lengkap');

        });
    }
}
