<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

# criando metodos especificos para cada uma das rotas
class ConfigController extends Controller
{
    public function index() {
        return view('config');
    }

    public function info() {
        echo 'Configurações INFO 3';
    }

    public function permissoes() {
        echo 'Configurações PERMISSÕES 3';
    }
}
