<?php

use App\Jasper\PHPJasper;

$input = storage_path('app/sample/Leaf_Grey.jasper');
$output = storage_path('app/sample/outputs');
$options = [
    'format' => ['pdf', 'rtf'],
];

$jasper = new PHPJasper;

try {
    $jasper->process($input, $output, $options)->execute();
} catch (\Throwable $th) {
    echo $th->getMessage().PHP_EOL;
}
