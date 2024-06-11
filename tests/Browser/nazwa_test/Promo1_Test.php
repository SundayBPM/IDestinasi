<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Promo1_Test extends DuskTestCase
{
    /**
     * A Dusk test example.
     * group @promo1
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->assertSee('Banner Promo')
            ->assertSee('Temukan Promo dan Diskon');
        });
    }
}
