<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\user;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
        $users = user::all();

        return view('admin.index', [
            "users" => $users
        ]);
        
    }
    public function erro(){
        return view('admin.erro');
    }
    public function erroRemover(){
        return view('admin.erroRemover');
    }
}
