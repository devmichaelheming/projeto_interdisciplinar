<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contatosinicial;
use App\User;
use Illuminate\Support\Facades\Auth;

class contatosController extends Controller
{
public function index()
    {
        // $user = user::all();

        // foreach ($user as $users) {
        //     if(Auth::user()->pvisualizar_contatos == 0){
        //         return redirect()->route('tip.home')->with('mensagem', 'Você não tem permissão para acessar esta página!');
        //     }else{
                $user = user::all();
                $contatos = contatosinicial::all();
        
                return view('admin.contatos.contatos', [
                    'contatos' => $contatos,
                ]);
        //     }
        // }   
    }
    public function vermais($id)
    {
        // $user = user::all();

        // foreach ($user as $users) {
        //     if(Auth::user()->pvermais_contatos == 0){
        //         return redirect()->route('tip.home')->with('mensagem', 'Você não tem permissão para acessar esta página!');
        //     }else{
                $users = contatosinicial::find($id);

                return view('admin.contatos.vermais', [
                    "id" => $id,
                    'name' => $users['name'],
                    'sobrenome' => $users['sobrenome'],
                    'email' => $users['email'],
                    'telefone' => $users['telefone'],
                    'assunto' => $users['assunto'],
                    'mensagem' => $users['mensagem'],
                ]);
        //     }
        // }  
    }
}
