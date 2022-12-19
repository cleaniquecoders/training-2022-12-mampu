<?php

use App\Jasper\PHPJasper;

$input = storage_path('app/sample/user.jrxml');

$jasper = new PHPJasper;
$jasper->compile($input)->execute();

echo "$input compiled.".PHP_EOL;
exit;
