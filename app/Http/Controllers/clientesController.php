<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clientes;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;

class clientesController extends Controller
{
    public function index()
    {
        $clientes = clientes::all();

        foreach ($clientes as $cliente) {
            if($cliente->status == 1){
                $cliente->status = 'Ativado';
            }else{
                $cliente->status = 'Desativado';
            }
        }

        return view('admin.clientes.clientes', [
            "clientes" => $clientes
        ]);
    }

    public function viewCadastro()
    {
        return view('admin.clientes.cadastrarClientes');
    }

    public function cadastrado(Request $request)
    {
        try{
        $db = New clientes();

            $db->status = $request->input('status');
            $db->name = $request->input('name');
            $db->email = $request->input('email');
            $db->phone = $request->input('phone');
            $db->cidade = $request->input('cidade');
            $db->nascimento = $request->input('nascimento');
            $db->cpf = $request->input('cpf');
            $db->endereco = $request->input('endereco');
            $db->save();

            return redirect()->route('admin.clientes')->with('mensagem', 'O cliente foi cadastrado com sucesso!');
        } catch (QueryException $ex) {
            
            if($ex->getCode() === "23000") {
                return redirect()->route('admin.clientes')->with('invalido', 'O cliente já está cadastrado no sistema!');
            } else {
                return redirect()->route('admin.clientes')->with('invalido', 'Erro SQL ao cadastrar o cliente!');
            }
        }
    }

    public function editarCliente(Request $request, $id)
    {

        $user = clientes::all();

        // foreach ($user as $users) {
        //     if(Auth::user()->peditar_usuario == 0){
        //         return redirect()->route('admin')->with('mensagem', 'Você não tem permissão para acessar esta página!');
        //     }else{
                $db = clientes::find($id);
                return view('admin.clientes.editarClientes',[
                    'id' => $id,
                    'name' => $db['name'],
                    'status' => $db['status'],
                    'email' => $db['email'],
                    'phone' => $db['phone'],
                    'cidade' => $db['cidade'],
                    'nascimento' => $db['nascimento'],
                    'endereco' => $db['endereco'],
                    'cpf' => $db['cpf'],
                ]); 
        //     }
        // }
        
    }

    public function editarSalvar(Request $request, $id)
    {

        $db = clientes::find($id);

        $dados = $request->all();

        $name = $dados['name'];
        $status = $dados['status'];
        $email = $dados['email'];
        $phone = $dados['phone'];
        $cpf = $dados['cpf'];
        $endereco = $dados['endereco'];
        $nascimento = $dados['nascimento'];
        $cidade = $dados['cidade'];

        $db['name'] = $name;
        $db['status'] = $status;
        $db['phone'] = $phone;
        $db['email'] = $email;
        $db['cpf'] = $cpf;
        $db['endereco'] = $endereco;
        $db['nascimento'] = $nascimento;
        $db['cidade'] = $cidade;

        $db->save();

        return redirect()->route('admin.clientes')->with('mensagem', 'O cliente foi atualizdo com sucesso!');
        
    }

    public function confirm(Request $request, $id)
    {
        $db = clientes::find($id);
        return view('admin.clientes.confirmDelete', [
            'id' => $id,
        ]);
    }

    public function removerCliente(request $request)
    {
        
        // $user = clientes::all();

        // foreach ($user as $users) {
        //     if(Auth::user()->pdeletar_usuario == 0){
        //         return redirect()->route('admin')->with('mensagem', 'Você não tem permissão para acessar esta página!');
        //     }else{
                $user = clientes::find($request->id);
                $user->delete();

                return redirect()->route('admin.clientes')->with('invalido', 'O cliente foi deletado com sucesso!');
        //     }
        // }
 
    }
}
