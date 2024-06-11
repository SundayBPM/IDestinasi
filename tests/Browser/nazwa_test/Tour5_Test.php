<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Tour5_Test extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group tour5
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Login')
                    ->type('email', 'nazwatk99@gmail.com')
                    ->type('password', '1202213069')
                    ->press('Login')
                    ->visit('/objek-wisata/1')
                    ->clickLink('Beli Paket Tour')
                    ->assertPathIs('/objek-wisata/1/pembelian-tiket?date=2024-06-03');
        });
    }
}