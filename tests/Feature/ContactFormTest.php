<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class ContactFormTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testContact()
    {
        //kept getting 404 error, had to change code
        $user = User::first();
        $this->be($user);
        $response = $this->get('/contact');
        $response->assertStatus(200);
    }
}
