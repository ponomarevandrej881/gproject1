<?php

namespace Andrey\Courses\Clients;

class CBRClient
{
    public function getCourse(string $valute)
    {
            $homepage = file_get_contents('https://www.cbr-xml-daily.ru/latest.js');
            $json_str = json_decode($homepage, true);

            return $json_str['rates'][$valute];
    }
}