<?php

use App\Jasper\PHPJasper;

$input = storage_path('app/sample/Leaf_Grey.jasper');
$output = storage_path('app/sample/outputs');
$options = [
    'format' => ['pdf', 'rtf'],
    'db_connection' => [
        'driver' => 'mysql',
        'username' => 'root',
        // 'password' => '',
        'host' => '127.0.0.1',
        'database' => 'jasper',
        'port' => 3306,
        'jdbc_driver' => 'mysql',
        'jdbc_dir' => '/Users/nasrulhazim/Libraries/mysql-connector-j-8.0.31'
    ]
];

$jasper = new PHPJasper;

try {
    // $jasper->process($input, $output, $options)->execute();
    $x = $jasper->process($input, $output, $options)->output();
    dd($x);
} catch (\Throwable $th) {
    echo $th->getMessage().PHP_EOL;
}
