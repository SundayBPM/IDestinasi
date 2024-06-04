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
    public function test_Pengelola_Can_View_InformasiStatistik(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1));
            $browser->visit('/');
            $browser->click('.profile-dropdown-btn');
            $browser->pause(1000);
            $browser->assertSee('Statistik Wisata');
            $browser->clickLink('Statistik Wisata');
            $browser->visit('/informasi-statistik');
            $browser->assertPathIs('/informasi-statistik');
        });
        
    }
    
    public function test_Wisatawan_cant_View_InformasiStatistik(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(2));
            $browser->visit('/');
            $browser->click('.profile-dropdown-btn');
            $browser->pause(1000);
            $browser->assertDontSee('Statistik Wisata');
            $browser->assertPathIs('/');
        });
    }
}   

