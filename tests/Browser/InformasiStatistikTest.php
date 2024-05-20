<?php

namespace Tests\Browser;

use App\Models\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class InformasiStatistikTest extends DuskTestCase
{
   /**
     * A Dusk test example.
     * @group statistik
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(2))
                    ->visit('/')
                    ->click('.profile-dropdown')
                    ->clickLink('Statistik Wisata')
                    ->assertPathIs('/informasi-statistik');
        });
    }
}
