<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Navbar02_Test extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group navbar2
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Login')
                    ->type('email', 'nazwatk99@gmail.com') #change email and pass
                    ->type('password', '1202213069') 
                    ->press('Login')
                    ->assertSee('Wisatawan')
                    ->assertDontSee('Login')
                    ->assertDontSee('Sign Up');
        });
    }
}
