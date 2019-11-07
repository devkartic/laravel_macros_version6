<?php


namespace App\maxins;


class StrMixins
{
    public function partNumber(){
        return function($part){
            return 'Others-'.substr($part, 0, 3).' '.substr($part, 3);
        };
    }

    public function prefix(){
        return function ($string, $prefix = 'AB-'){
            return $prefix . $string;
        };
    }
}