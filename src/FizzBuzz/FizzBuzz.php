<?php
namespace App\FizzBuzz;

class Fizzbuzz{
    
    public function execute($num){

        /* if($num % 15 == 0 ){
            return 'FizzBuzz';
        }
        
        if($num % 3 == 0){
            return 'Fizz';
        }
        if($num % 5 == 0){
            return 'Buzz';
        }

        return $num; */

       /*  switch  ($num) {
            case ($num % 15 ===0):
                return 'FizzBuzz';
                break;
            case ($num % 5 ===0):
                return 'Buzz';
                break;
            case ($num % 3 ===0):
                return 'Fizz';
                break;
            default:
                return $num;

        } */

       return $num % 15 === 0 ? 'FizzBuzz' :( $num % 5 === 0 ? 'Buzz' : ($num % 3 === 0 ? 'Fizz' : $num));

        

    }
    
}
