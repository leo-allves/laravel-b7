<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| Este arquivo é onde você pode definir todos os seus consoles baseados em Closure
| comandos. Cada Fechamento está vinculado a uma instância de comando, permitindo um
| abordagem simples para interagir com os métodos de IO de cada comando.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
