<?php

namespace Tests\Browser;

use App\Models\Pembelian_tiket;
use App\Models\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SistemUmpanBalikTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group feedback
     */
    public function test_user_can_open_the_feedback_form(): void
    {   
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/')
                    ->assertSee('Ulasan')
                    ->clickLink('Ulasan')
                    ->assertPathIs('/ulasan')
                    ->waitFor('.card_ulasan .btn')
                    ->pause(2000) // Tunggu 1 detik sebelum mengklik tombol
                    // ->click('.card_ulasan:first-child .btn')
                    ->clickLink('Buat Ulasan')
                    // ->assertUrlIs('http://localhost:8000/ulasan/form?id_destinasi=1');
                    ->assertPathIs('/ulasan/form')
                    ->waitFor('label[for="rate-5"]') // Menunggu label untuk rating 5
                    ->click('label[for="rate-5"]')
                    ->assertRadioSelected('rating', '5') // Memastikan radio button dengan nilai 5 terpilih
                    ->type('ulasan', 'Tes kolom Ulasan')
                    ->radio('penilaian_atraksi', '1')
                    ->radio('penilaian_aksesibilitas', '2')
                    ->radio('penilaian_amenitas', '3')
                    ->radio('penilaian_ansilari1', '4')
                    ->radio('penilaian_ansilari2', '5')
                    ->radio('penilaian_nps', '10');
                    
                    
        });
    }


    public function test_user_can_open_the_feedback_form2(): void
    {   
        #mengambil data dari database
        $destinasi = Pembelian_tiket::first();
         // Pastikan data yang diambil ada
        $this->assertNotNull($destinasi, 'Data destinasi tidak ditemukan di database.');
        
        $this->browse(function (Browser $browser) use ($destinasi) {
            $browser->loginAs(User::find(1));
            $browser->visit('/');
            $browser->assertPathIs('/');
            $browser->clickLink('Ulasan');
            $browser->visit('/ulasan');
            $browser->assertPathIs('/ulasan');
            $browser->clickLink('Buat Ulasan');
            $browser->visit('/ulasan/form?id_destinasi='. $destinasi->id);
            $browser->assertInputValue('id_pembelian_tiket', $destinasi->id);
            $browser->assertInputValue('id_objek_wisata', $destinasi->id_destinasi);
            // $browser->waitFor('label[for="rate-5"]', 20); // Tambah waktu tunggu menjadi 20 detik
            // $browser->click('label[for="rate-5"]');
            $browser->type('ulasan', 'Tes kolom Ulasan');
            $browser->radio('penilaian_atraksi', '1');
            $browser->radio('penilaian_aksesibilitas', '2');
            $browser->radio('penilaian_amenitas', '3');
            $browser->radio('penilaian_ansilari1', '4');
            $browser->radio('penilaian_ansilari2', '5');
            $browser->pause(1000);
            $browser->radio('penilaian_nps', '10');
            
                    
        });
    }


    /**
     * A Dusk test example.
     * @group feedback
     */
    public function test_user_cant_open_the_feedback_form(): void
    {   
        $this->browse(function (Browser $browser) {
            // $browser->visit('/')
            $browser->loginAs(User::find(1))
                    ->visit('/')
                    ->assertSee('Ulasan')
                    ->clickLink('Ulasan')
                    ->assertPathIs('/ulasan')
                    ->pause(2000) // Tunggu 1 detik sebelum mengklik tombol
                    ->assertDontSee('<div class="card_ulasan">', '.list-ulasan-destinasi');
        });
    }

    /**
     * A Dusk test example.
     * @group feedback
     */
    public function test_user_cant_send_feedback_form(): void
    {   
        #mengambil data dari database
        $destinasi = Pembelian_tiket::first();
         // Pastikan data yang diambil ada
        $this->assertNotNull($destinasi, 'Data destinasi tidak ditemukan di database.');
        
        $this->browse(function (Browser $browser) use ($destinasi) {
            $browser->loginAs(User::find(1));
            $browser->visit('/');
            $browser->assertPathIs('/');
            $browser->clickLink('Ulasan');
            $browser->visit('/ulasan');
            $browser->clickLink('Buat Ulasan');
            $browser->visit('/ulasan/form?id_destinasi='. $destinasi->id);
            $browser->assertInputValue('id_pembelian_tiket', $destinasi->id);
            $browser->assertInputValue('id_objek_wisata', $destinasi->id_destinasi);
            $browser->pause(1000);
            $browser->clickLink('Post');            
            // $browser->click('#first_button');            
            // $browser->press('#first_button');            
            // $browser->click('.btn-submit-ulasan button');
            // $browser->click('.btn btn-primary');
            // $browser->screenshot('before_clicking_post');
            // $browser->press('Post');
            // $browser->press('Kembali Ke Beranda');
            // $browser->assertPathIs('/ulasan/form');
            
        });
    }
    
    public function test_user_can_view_feedback_from_other_user(): void
    {   
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1));
            $browser->visit('/informasi-ulasan/{1}');
            $browser->assertPathIs('/informasi-ulasan/%7B1%7D');
            $browser->press('Lihat Semua Ulasan');
            $browser->pause(1000);
            $browser->clickLink(2);
            $browser->clickLink('3');
            $browser->press('Close');
            $browser->assertPathIs('/informasi-ulasan/%7B1%7D');
            
        });
    }
}
