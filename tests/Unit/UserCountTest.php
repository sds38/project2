<?php
namespace Tests\Unit;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class UserCountTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserCount()
    {
        $userCount = 50;
        $users = factory(User::class, 50 )->create();
        $this->assertLessThanOrEqual( $userCount, \count( $users ) );
        $this->assertTrue(true);
    }
}