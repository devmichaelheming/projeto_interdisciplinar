<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\banner;
use App\contatos_info;
use App\clientesInicial;
use App\info_sistema;

class siteController extends Controller
{
    public function index(){
        $banner = banner::all();
        $clientes = clientesInicial::all();
        $contatos_info = contatos_info::find(1);
        $info_sistema = info_sistema::all();

        return view('admin.site.site', [
            'banner' => $banner,
            'clientes' => $clientes,
            'contatos_info' => $contatos_info,
            'info_sistema' => $info_sistema
        ]);
    }
}