<?php
namespace Tests\Unit;
use App\Car;
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

        factory(Car::class)->create();

        $user = Car::first();
        $user->update($data);
        $this->assertInstanceOf(Car::class, $user);
        $this->assertEquals($data['year'], $user->year);
        $this->assertTrue(true);
    }
}