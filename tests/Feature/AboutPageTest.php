<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AboutPageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAboutPage()
    {
        $user = User::first();
        $this->be($user); //You are now authenticated
        $response = $this->get('/about-us');
        $response->assertStatus(200);
    }
}
