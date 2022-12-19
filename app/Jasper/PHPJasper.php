<?php

namespace App\Jasper;

use PHPJasper\PHPJasper as Jasper;

class PHPJasper extends Jasper
{
    /**
     * PHPJasper constructor
     */
    public function __construct()
    {
        parent::__construct();

        $this->executable = config('jasper-report.executable');
        $this->pathExecutable = config('jasper-report.path-executable');
    }
}
