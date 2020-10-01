<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\clientes;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class clientesController extends Controller
{

    public function index()
    {
        $clientes = clientes::all();

        $ativo = DB::table('clientes')->select(DB::raw('count(*) status'))->where('status', '=', 1)->get();
        $inativo = DB::table('clientes')->select(DB::raw('count(*) status'))->where('status', '=', 0)->get();

        foreach ($clientes as $cliente) {
            if($cliente->status == 1){
                $cliente->status = 'Finalizado';
            }else{
                $cliente->status = 'Andamento';
            }
        }

        foreach ($clientes as $key => $cliente) {
            $sep[] = str_replace('.', ',', $cliente['valor']);
        }
        $total = array_sum($sep);
        
        return view('admin.clientes.clientes', [
            "clientes" => $clientes,
            "total" => $total,
            "ativo" => json_decode($ativo[0]->status),
            "inativo" => json_decode($inativo[0]->status),
        ]);
    }

    public function viewCadastro()
    {
        return view('admin.clientes.registrarClientes');
    }

    public function cadastrado(Request $request)
    {

        try{
        $db = New clientes();

            $db->nome = $request->input('nome');
            $db->email = $request->input('email');
            $db->cpf = $request->input('cpf');
            $db->telefone = $request->input('telefone');
            $db->endereco = $request->input('endereco');
            $db->cidade = $request->input('cidade');
            $db->bairro = $request->input('bairro');
            $db->status = $request->input('status');
            $db->ano = $request->input('ano');
            $db->marca = $request->input('marca');
            $db->modelo = $request->input('modelo');
            $db->placa = $request->input('placa');
            $db->valor = $request->input('valor');
            $db->relatorio = $request->input('relatorio');

            $db->save();

            return redirect()->route('admin.clientes')->with('mensagem', 'A conta foi cadastrada com sucesso!');
        } catch (QueryException $ex) {

            if($ex->getCode() === "23000") {
                return redirect()->route('admin.contas')->with('invalido', 'A conta já está cadastrada no sistema!');
            } else {
                return redirect()->route('admin.contas')->with('invalido', 'Erro SQL ao cadastrar a conta!');
            }
        }
    }

    public function relatorio(Request $request, $id){

        $db = clientes::find($id);

        return view('admin.clientes.relatorio',[
            'id' => $id,
            'nome' => $db['nome'],
            'relatorio' => $db['relatorio']
        ]);
        
    }

    public function editarClientes(Request $request, $id)
    {
        $user = user::all();

        foreach ($user as $users) {
            if(Auth::user()->peditar_usuario == 0){
                return redirect()->route('admin')->with('mensagem', 'Você não tem permissão para acessar esta página!');
            }else{
                $db = clientes::find($id);

                return view('admin.clientes.editarClientes',[
                    'id' => $id,
                    'nome' => $db['nome'],
                    'email' => $db['email'],
                    'cpf' => $db['cpf'],
                    'endereco' => $db['endereco'],
                    'telefone' => $db['telefone'],
                    'cidade' => $db['cidade'],
                    'bairro' => $db['bairro'],
                    'status' => $db['status'],
                    'ano' => $db['ano'],
                    'marca' => $db['marca'],
                    'modelo' => $db['modelo'],
                    'placa' => $db['placa'],
                    'valor' => $db['valor'],
                    'relatorio' => $db['relatorio'],
                ]); 
           }
        }  
    }

    public function editarSalvar(Request $request, $id)
    {
        $db = clientes::find($id);

        $dados = $request->all();

        $nome = $dados['nome'];
        $email = $dados['email'];
        $cpf = $dados['cpf'];
        $endereco = $dados['endereco'];
        $telefone = $dados['telefone'];
        $bairro = $dados['bairro'];
        $cidade = $dados['cidade'];
        $status = $dados['status'];
        $ano = $dados['ano'];
        $placa = $dados['placa'];
        $modelo = $dados['modelo'];
        $marca = $dados['marca'];
        $valor = $dados['valor'];
        $relatorio = $dados['relatorio'];

        $db['nome'] = $nome;
        $db['email'] = $email;
        $db['cpf'] = $cpf;
        $db['endereco'] = $endereco;
        $db['telefone'] = $telefone;
        $db['bairro'] = $bairro;
        $db['cidade'] = $cidade;
        $db['status'] = $status;
        $db['ano'] = $ano;
        $db['placa'] = $placa;
        $db['modelo'] = $modelo;
        $db['marca'] = $marca;
        $db['valor'] = $valor;
        $db['relatorio'] = $relatorio;

        $db->save();

        return redirect()->route('admin.clientes')->with('mensagem', 'Os dados do cliente foram atualizados com sucesso!');
    }

     public function removerConta(request $request)
    {
        $user = clientes::all();

        foreach ($user as $users) {
            if(Auth::user()->pdeletar_usuario == 0){
                return redirect()->route('admin')->with('mensagem', 'Você não tem permissão para acessar esta página!');
            }else{
                $user = clientes::find($request->id);
                $user->delete();

                return redirect()->route('admin.clientes')->with('invalido', 'O cliente foi deletado com sucesso!');
            }
        }
    }
    public function mes(request $request)
    {
        dd($request->all());
    }
}
