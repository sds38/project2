
<?php
namespace Tests\Unit;
use App\Car;
use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class CarInsertTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarInsert()
    {
        $data =  [
            'make' => 'honda',
            'model' => 'Test Model',
            'year' => Carbon::now()->year,
        ];
        $car = Car::create($data);
        $this->assertInstanceOf(Car::class, $car);
        $this->assertEquals($data['make'], $car->make);
        $this->assertEquals($data['model'], $car->model);
        $this->assertEquals($data['year'], $car->year);
        $this->assertTrue(true);
    }
}