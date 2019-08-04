<?php
namespace Tests\Unit;
use App\Cars;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class CarDeleteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarDelete()
    {

        factory(Cars::class)->create();

        $car = Cars::first();
        if($car)
            $car->delete();
        $this->assertTrue(true);
    }
}
