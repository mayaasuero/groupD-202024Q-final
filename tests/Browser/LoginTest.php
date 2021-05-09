<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class LoginTest extends DuskTestCase
{
    // use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertOk();
        });

        // $user = User::factory()->create([
        //     'email' => 'taylor@laravel.com',
        // ]);

        // $this->browse(function ($browser) use ($user) {
        //     $browser->visit('/')
        //             ->type('email', $user->email)
        //             ->type('password', 'password')
        //             ->press('Login')
        //             ->assertPathIs('/students');
        // });
    }
}
