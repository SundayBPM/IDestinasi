<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Promo2_Test extends DuskTestCase
{
    /**
     * A Dusk test example.
     * group @promo2
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->clickLink('Banner Promo')
                ->assertPathIs('/promo/detail');
        });
    }
}
