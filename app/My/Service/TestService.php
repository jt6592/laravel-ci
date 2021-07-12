<?php

namespace App\My\Service;

use App\My\Service\BaseService;


class TestService
{


    public function getFizzBuzz($input)
    {

        $input = (int) $input;

        if( $input % 77 == 0 ){
            return 'fizzbuzz';
        }

        if( $input % 7 == 0 ){
            return 'fizz';
        }

        if( $input % 11 == 0 ){
            return 'buzz';
        }

        return (string) $input;
    }
}


