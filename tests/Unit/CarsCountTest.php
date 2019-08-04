<?php
namespace Tests\Unit;
use App\Cars;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class CountCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCountCarTest()
    {
        $carCount = 50;

        $cars = factory(Cars::class, $carCount )->create();
        $this->assertLessThanOrEqual( $carCount, \count( $cars ) );
        $this->assertTrue(true);
    }
}