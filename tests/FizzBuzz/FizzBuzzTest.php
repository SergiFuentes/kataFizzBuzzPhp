<?php

namespace Tests;

use App\FizzBuzz\Fizzbuzz;
use PHPUnit\Framework\TestCase;


class FizzBuzzTest extends TestCase {

	public function test_example(
		) {
	
			$this->assertEquals(4, 4);
		}
	public function test_return_Fizz_if_divisible_by_3(){
		//GIVEN
		$fizzBuzz = new FizzBuzz();
		//WHEN
		$return = $fizzBuzz->execute(3);
		//THEN
		$this->assertEquals('Fizz',$return);
	}

	public function test_return_Buzz_if_divisible_by_5(){
		//GIVEN
		$fizzBuzz = new FizzBuzz();
		//WHEN
		$return = $fizzBuzz->execute(5);
		//THEN
		$this->assertEquals('Buzz',$return);
	}

	public function test_return_FizzBuzz_if_divisible_by_3_and_5(){
		//GIVEN
		$fizzBuzz = new FizzBuzz();
		//WHEN
		$return = $fizzBuzz->execute(15);
		//THEN
		$this->assertEquals('FizzBuzz',$return);
	}

	public function test_return_number_if_not_divisible_by_3_or_5(){
		//GIVEN
		$fizzBuzz = new FizzBuzz();
		//WHEN
		$return = $fizzBuzz->execute(4);
		//THEN
		$this->assertEquals(4,$return);
	}








}


