<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

//Artisan::command('snapshot:create ' . time())->hourly();
//Artisan::command('snapshot:cleanup --keep=5')->hourly();
