<?php

require('../vendor/autoload.php');

use App\Logger;
use App\Shit;


$shit = new Shit();

echo $shit->message();

(new Logger())->write('errouu');