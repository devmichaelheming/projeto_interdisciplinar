<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\user;
use App\contatosinicial;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
        return view('index');
    }

    public function erro(){
        return view('admin.erro');
    }

    public function erroRemover(){
        return view('admin.erroRemover');
    }
    public function contato(request $request){

        $dados = $request->all();
        
        $tabela = New contatosinicial;
        // $usuarios = user::all();
        // $emailes = DB::table('users')->where('preceberemail_contato', '=', 1)->get();

        // foreach ($emailes as $emailes2) {
           
        // }

        $tabela->name = $dados['name'];
        $tabela->sobrenome = $dados['sobrenome'];
        $tabela->email = $dados['email'];
        $tabela->telefone = $dados['telefone'];
        $tabela->assunto = $dados['assunto'];
        $tabela->mensagem = $dados['mensagem'];
        $tabela->save();

        // foreach ($emailes as $emailes2) {
        //     Mail::to($emailes2->email)->send(new enviarEmail($dados['email']));
        // }

        return 1;
    }
}
