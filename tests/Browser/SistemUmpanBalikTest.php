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
                    ->clickLink('Buat Ulasan')
                    ->assertPathIs('/ulasan/form?id_destinasi=1');
                    
                    
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
                    ->waitFor('.card_ulasan .btn')
                    ->pause(2000) // Tunggu 1 detik sebelum mengklik tombol
                    ->clickLink('Buat Ulasan')
                    ->assertPathIs('/ulasan/form?id_destinasi=1');
                    
                    
        });
    }
}
