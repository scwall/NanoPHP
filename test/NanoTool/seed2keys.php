<?php

require __DIR__ . '/../autoload.php';

use MikeRow\NanoPHP\NanoTool;

list($seed) = NanoTool::keys();

var_dump($seed);

var_dump(NanoTool::seed2keys($seed, 0));

var_dump(NanoTool::seed2keys($seed, 0, true));
