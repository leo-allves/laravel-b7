<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //no laravel preciso definir quem vai ser a index usamos o __invoke()
    //controller quem apenas uma action ou seja uma ação carrega apaenas uma pagina essa e unica situação
    public function __invoke() {
        return view('welcome');
    }
}
