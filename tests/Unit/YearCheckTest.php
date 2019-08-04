<?php
namespace Tests\Unit;
use App\Cars;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class CheckCarYearTypeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testYearCheckTest()
    {

        factory(Cars::class)->create();
        $car =  Cars::first();
        $this->assertTrue(is_int($car->year));
    }
}
