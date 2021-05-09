<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class RouteTest extends TestCase
{
    // use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_home()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_login()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_register()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_homepage()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
                        ->get('students');

        $response->assertStatus(200);
    }

    public function test_create_student_page()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
                        ->get('students/create');

        $response->assertStatus(200);
    }

}
