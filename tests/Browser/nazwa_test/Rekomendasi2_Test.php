<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Rekomendasi2_Test extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group rekomen2
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->waitFor('.card-container', 5)
                    ->scrollTo('[dusk="objek-wisata-1"]')
                    ->waitFor('[dusk="objek-wisata-1"]', 5)
                    ->assertPresent('[dusk="objek-wisata-1"]')
                    ->pause(1000)
                    ->click('[dusk="objek-wisata-1"]')
                    ->assertPathIs('/objek-wisata/1');
        });
    }
}
