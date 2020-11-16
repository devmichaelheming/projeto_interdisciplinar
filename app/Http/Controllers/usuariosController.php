<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;

class usuariosController extends Controller
{
    public function index()
    {
        $users = user::all();

        return view('admin.usuarios.usuarios', [
            "users" => $users
        ]);
    }

    public function viewCadastro()
    {
        return view('admin.usuarios.cadastrarUsuario');
    }

    public function cadastrado(Request $request)
    {
        try{
        $db = New user();

            $db->name = $request->input('name');
            $db->email = $request->input('email');
            $db->phone = $request->input('phone');

            $db->password = bcrypt($request->input('password'));
            $db->save();

            return redirect()->route('admin.usuarios')->with('mensagem', 'O usuário foi cadastrado com sucesso!');
        } catch (QueryException $ex) {
            
            if($ex->getCode() === "23000") {
                return redirect()->route('admin.usuarios')->with('invalido', 'O usuário já está cadastrado no sistema!');
            } else {
                return redirect()->route('admin.usuarios')->with('invalido', 'Erro SQL ao cadastrar usuário!');
            }
        }
    }

    public function editarUsuario(Request $request, $id)
    {

        $user = user::all();

        // foreach ($user as $users) {
        //     if(Auth::user()->peditar_usuario == 0){
        //         return redirect()->route('admin')->with('mensagem', 'Você não tem permissão para acessar esta página!');
        //     }else{
                $db = user::find($id);
                return view('admin.usuarios.editarUsuarios',[
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

        $db = user::find($id);

        $dados = $request->all();

        $name = $dados['name'];
        $email = $dados['email'];
        $phone = $dados['phone'];
        if ($db['password'] == $dados['password']) {
           $password = $dados['password'];
        }else{
            $password = bcrypt($dados['password']);
        }

        $db['name'] = $name;
        $db['phone'] = $phone;
        $db['email'] = $email;
        $db['password'] = $password;

        $db->save();

        return redirect()->route('admin.usuarios')->with('mensagem', 'O usuário foi atualizdo com sucesso!');
        
    }

    public function confirm(Request $request, $id)
    {
        $db = user::find($id);
        return view('admin.usuarios.confirmDelete', [
            'id' => $id,
        ]);
    }

    public function removerUsuario(request $request)
    {
        
        // $user = user::all();

        // foreach ($user as $users) {
        //     if(Auth::user()->pdeletar_usuario == 0){
        //         return redirect()->route('admin')->with('mensagem', 'Você não tem permissão para acessar esta página!');
        //     }else{
                $user = user::find($request->id);
                $user->delete();

                return redirect()->route('admin.usuarios')->with('invalido', 'O usuário foi deletado com sucesso!');
        //     }
        // }
 
    }
}
