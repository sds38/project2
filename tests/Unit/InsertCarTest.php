<?php
namespace Tests\Unit;
use App\Cars;
use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class InsertCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertCar()
    {
        $data =  [
            'make' => 'ford',
            'model' => 'Test Model',
            'year' => Carbon::now()->year,
        ];
        $car = Cars::create($data);
        $this->assertInstanceOf(Cars::class, $car);
        $this->assertEquals($data['make'], $car->make);
        $this->assertEquals($data['model'], $car->model);
        $this->assertEquals($data['year'], $car->year);
        $this->assertTrue(true);
    }
}