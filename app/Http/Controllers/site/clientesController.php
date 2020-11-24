<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\clientesInicial;

class clientesController extends Controller
{
public function clientesView()
    {
        return view('admin.site.clientes.cadastrarClientes'); 
    }
        
    public function clientesCadastrar(request $request)
    {
        try{
            $db = New clientesInicial;

            $teste = $request->file('clientes');

            if( isset($teste)){

                $name_file = $teste->getClientOriginalName();

                $ext = pathinfo($name_file, PATHINFO_EXTENSION);

                $item = base64_encode(file_get_contents($request->file('clientes')));

                $db->ext_img = $ext;
                $db->name_img = $name_file;
                $db->clientes = $item;
            };
            
            $db->save();
            
            return redirect()->route('admin.site')->with('mensagem_clientes', 'O Cliente foi cadastrado com sucesso!');
        } catch (QueryException $ex) {

            if($ex->getCode() === "23000") {
                return redirect()->route('admin.site')->with('invalido_clientes', 'O Cliente já está cadastrado no sistema!');
            } else {
                return redirect()->route('admin.site')->with('invalido_clientes', 'Erro SQL ao cadastrar clientes!');
            }
        }
    }
    public function confirm(Request $request, $id)
    {
        $db = clientesInicial::find($id);
        return view('admin.site.clientes.confirmDelete', [
            'id' => $id,
        ]);
    }

    public function removerclientes(request $request)
    {
        $user = clientesInicial::find($request->id);
        $user->delete();

        return redirect()->route('admin.site')->with('invalido_clientes', 'O cliente foi deletado com sucesso!');
    }
}
