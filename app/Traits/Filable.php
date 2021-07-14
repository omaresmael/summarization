<?php


namespace App\Traits;


trait Filable
{
    function createFile($name, $address){
        return $createFile = fopen($address.'/'.$name, 'x');
    }
    function writeInFile($file, $text){
         fwrite($file, $text);
    }
}
