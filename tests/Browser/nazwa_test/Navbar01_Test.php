<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;


class Navbar01_Test extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group navbar
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Sign Up')
                    ->assertSee('Login');
        });
    }
}
