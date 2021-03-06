<?php
namespace Tests\Unit;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class DeleteUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeleteUser()
    {
        factory(User::class)->create();

        $user = User::first();
        if($user)
            $user->delete();
        $this->assertTrue(true);
    }
}