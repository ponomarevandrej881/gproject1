<?php
require 'vendor\autoload.php';


$cbr = new \Andrey\Courses\Clients\CBRClient();

var_dump($cbr->getCourse('USD'));


