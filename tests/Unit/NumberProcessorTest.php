<?php

namespace Tests\Unit;

use App\NumberProcessor;
use Faker\Factory;
use Tests\TestCase;

class NumberProcessorTest extends TestCase
{
    public function testBasicTest()
    {
        $faker = Factory::create();

        $number = $faker->numberBetween(0,100);

        $processor = new NumberProcessor($number);
        $processor->createArrayWithoutInputNum();
        $outputNumber = $processor->getNumberOutOfArray();

        $this->assertEquals($outputNumber, $number);
    }
}
