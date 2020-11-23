<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\contatos_info;

class contatos_infoController extends Controller
{
    public function salvar(Request $request)
    {
        $dados = $request->all();

        $db = contatos_info::find(1);

        $db->telefone = $dados['telefone'];
        $db->endereco = $dados['endereco'];
        $db->facebook = $dados['facebook'];
        $db->instagram = $dados['instagram'];
        $db->telefone_whatsapp = $dados['telefone_whatsapp'];
        $db->numero_whatsapp = $dados['numero_whatsapp'];
        $db->save();

        return redirect()->route('admin.site')->with('success', 'Os dados da página foram atualizados com sucesso!');
    }

    public function listar()
    {
        $dados = contatos_info::find(1);

        return response()->json(['dados' => $dados]);
    }
}
