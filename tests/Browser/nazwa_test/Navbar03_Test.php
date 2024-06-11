<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Navbar03_Test extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group navbar3
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->clickLink('Login')
            ->type('email', 'nazwatk99@gmail.com')
            ->type('password', '1202213069') 
            ->press('Login')
            ->assertSee('Pengelola')
            ->assertDontSee('Login')
            ->assertDontSee('Sign Up');
        });
    }
}
