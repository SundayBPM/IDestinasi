<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Tour3_Test extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group tour3
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/objek-wisata/1')
                ->assertSee('Deskripsi')
                ->assertSee('Detail Perjalanan')
                ->assertSee('Pilih Tanggal')
                ->assertSee('Paket Tersedia');
        });
    }
}
