<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PromoTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function test_Promo_Page(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/');
            $browser->visit('/promo/');
            $browser->assertPathIs('/promo/');
        });
    }
}
