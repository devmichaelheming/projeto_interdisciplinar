<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class principalController extends Controller
{
    public function index(){
        return redirect()->route('admin.clientes');
    }
}
