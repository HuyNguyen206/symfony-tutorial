<?php

namespace App\Service;

class Test extends  AnotherGift
{
    private $age = 12;

    public array $another = [1,2,3];

    public function getAge()
    {
        return $this->age;
    }

//    public function GETANOTHEr()
//    {
//        return 'test';
//    }

}