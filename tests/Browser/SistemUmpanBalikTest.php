<?php

namespace Tests\Browser;

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
            // $browser->visit('/')
            $browser->loginAs(User::find(1))
                    ->visit('/')
                    // ->assertSee('Login')
                    // ->clickLink('Login')
                    // ->assertPathIs('/login')
                    // ->type('email','adminwisatawan@example.com')
                    // ->type('password','123456789')
                    // ->press('Login')
                    // ->assertPathIs('/')
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
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/')
                    ->assertSee('Ulasan')
                    ->clickLink('Ulasan')
                    ->assertPathIs('/ulasan')
                    ->waitFor('.card_ulasan .btn')
                    ->pause(2000) // Tunggu 1 detik sebelum mengklik tombol
                    ->clickLink('Buat Ulasan')
                    ->assertPathIs('/ulasan/form')
                    ->click('#first_button');
                    // ->click('.btn.btn-primary');
            
        });
    }
}
