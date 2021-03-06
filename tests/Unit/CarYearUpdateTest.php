<?php
namespace Tests\Unit;
use App\Cars;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class CarYearUpdateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarYearUpdate()
    {
        $data['year'] = '2000';

        factory(Cars::class)->create();

        $user = Cars::first();
        $user->update($data);
        $this->assertInstanceOf(Cars::class, $user);
        $this->assertEquals($data['year'], $user->year);
        $this->assertTrue(true);
    }
}