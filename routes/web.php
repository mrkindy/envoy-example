<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Process;

Route::get('/', function () {

    $result = Process::run('ssh mrkindy@157.173.101.221');
    return $result->output();

});
