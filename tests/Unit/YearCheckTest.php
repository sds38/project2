<?php
namespace Tests\Unit;
use App\Cars;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class YearCheckTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarYearType()
    {

        factory(Cars::class)->create();
        $car =  Cars::first();
        $this->assertIsInt(($car->year));
    }
}