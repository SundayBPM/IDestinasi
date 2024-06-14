<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Tour4_Test extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group tour4
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/objek-wisata/1')
                    ->assertSee('Pilih Tanggal')
                    #->click('[dusk="btn-tgl-1"]') // Click the first date button
                   # ->pause(1000); // Add a brief pause to handle any UI transitions
                   ;

                });
            }
        }
        
