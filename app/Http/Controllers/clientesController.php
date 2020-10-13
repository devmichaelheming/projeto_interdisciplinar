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

            $db->name = $request->input('name');
            $db->email = $request->input('email');
            $db->phone = $request->input('phone');

            $db->password = bcrypt($request->input('password'));
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
                    'email' => $db['email'],
                    'phone' => $db['phone'],
                    'password' => $db['password'],
                ]); 
        //     }
        // }
        
    }

    public function editarSalvar(Request $request, $id)
    {

        $db = clientes::find($id);

        $dados = $request->all();

        $name = $dados['name'];
        $email = $dados['email'];
        $phone = $dados['phone'];
        $password = bcrypt($dados['password']);

        $db['name'] = $name;
        $db['phone'] = $phone;
        $db['email'] = $email;
        $db['password'] = $password;

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
