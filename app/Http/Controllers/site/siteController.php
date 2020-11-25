<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\banner;
use App\contatos_info;
use App\clientesInicial;

class siteController extends Controller
{
    public function index(){
        $banner = banner::all();
        $clientes = clientesInicial::all();
        $contatos_info = contatos_info::find(1);

        return view('admin.site.site', [
            'banner' => $banner,
            'clientes' => $clientes,
            'contatos_info' => $contatos_info
        ]);
    }
}