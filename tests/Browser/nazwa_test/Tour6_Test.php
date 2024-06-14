<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Tour6_Test extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group tour6
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/objek-wisata/1/pembelian-tiket?date=2024-06-06') // Change the URL to the tour package page
                    ->type('nama[]', 'John Doe') // Fill in the name field for the first tourist
                    ->type('email[]', 'johndoe@example.com') // Fill in the email field for the first tourist
                    ->type('no_hp[]', '08123456789') // Fill in the phone number field for the first tourist
                    ->type('nama[]', 'John Doe') // Fill in the name field for the first tourist
                    ->type('email[]', 'johndoe@example.com') // Fill in the email field for the first tourist
                    ->type('no_hp[]', '08123456789') // Fill in the phone number field for the first tourist->type('nama[]', 'John Doe') // Fill in the name field for the first tourist
                    ->type('email[]', 'johndoe@example.com') // Fill in the email field for the first tourist
                    ->type('no_hp[]', '08123456789') // Fill in the phone number field for the first tourist
                    ->press('Beli') // Submit the form
                    ->assertPathIs('/'); // Ensure the correct path after submission
        });
    }
}
