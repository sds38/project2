<?php
namespace Tests\Unit;
use App\Cars;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class CheckCarsMakeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarsMakeType()
    {
        $makeArray = ['ford','honda' ,'toyota'];
        //just creating a new car or we can get from database too
        factory(Cars::class)->create();
        $car =  Cars::first();
        $this->assertContains( $car->make, $makeArray );
        $this->assertTrue(true);
    }
}
