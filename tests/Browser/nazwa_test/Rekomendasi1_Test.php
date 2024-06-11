<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Rekomendasi1_Test extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group rekomen1
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->click('.recommended-tourist-spot:first-child')
            ->assertPathIs('/tourist-spot/detail');
        });
    }
}
