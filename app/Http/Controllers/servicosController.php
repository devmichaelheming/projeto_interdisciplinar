<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\clientes;
use App\servicos;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class servicosController extends Controller
{

    public function index()
    {
        $servicos = servicos::all();

        $ativo = DB::table('servicos')->select(DB::raw('count(*) status'))->where('status', '=', 1)->get();
        $inativo = DB::table('servicos')->select(DB::raw('count(*) status'))->where('status', '=', 0)->get();

        foreach ($servicos as $servico) {
            if($servico->status == 1){
                $servico->status = 'Finalizado';
            }else{
                $servico->status = 'Andamento';
            }
        }

        $sep = [];

        foreach ($servicos as $key => $servico) {
            $sep[] = str_replace('.', ',', $servico['valor']);
        }
        
        $total = array_sum($sep);
        
        return view('admin.servicos.servicos', [
            "servicos" => $servicos,
            "total" => $total,
            "ativo" => json_decode($ativo[0]->status),
            "inativo" => json_decode($inativo[0]->status),
        ]);
    }

    public function viewCadastro()
    {
         $clientes = clientes::all();

        return view('admin.servicos.registrarServicos',[
            'clientes' => $clientes
        ]);
    }

    public function cadastrado(Request $request)
    {

        try{
        $db = New servicos();

            $db->cliente = $request->input('cliente');
            // $db->email = $request->input('email');
            // $db->cpf = $request->input('cpf');
            // $db->telefone = $request->input('telefone');
            // $db->endereco = $request->input('endereco');
            // $db->cidade = $request->input('cidade');
            // $db->bairro = $request->input('bairro');
            $db->status = $request->input('status');
            $db->ano = $request->input('ano');
            $db->marca = $request->input('marca');
            $db->modelo = $request->input('modelo');
            $db->placa = $request->input('placa');
            $db->valor = $request->input('valor');
            $db->relatorio = $request->input('relatorio');

            $db->save();

            return redirect()->route('admin.servicos')->with('mensagem', 'O  serviço foi cadastrado com sucesso!');
        } catch (QueryException $ex) {

            if($ex->getCode() === "23000") {
                return redirect()->route('admin.servicos')->with('invalido', 'O serviço já está cadastrado no sistema!');
            } else {
                return redirect()->route('admin.servicos')->with('invalido', 'Erro SQL ao cadastrar o serviço!');
            }
        }
    }

    public function relatorio(Request $request, $id){

        $db = servicos::find($id);

        return view('admin.servicos.relatorio',[
            'id' => $id,
            'nome' => $db['nome'],
            'relatorio' => $db['relatorio']
        ]);
        
    }

    public function editarServicos(Request $request, $id)
    {
        $user = user::all();

        foreach ($user as $users) {
            if(Auth::user()->peditar_usuario == 0){
                return redirect()->route('admin')->with('mensagem', 'Você não tem permissão para acessar esta página!');
            }else{
                $db = servicos::find($id);

                return view('admin.servicos.editarServicos',[
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
        $db = servicos::find($id);

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

        return redirect()->route('admin.servicos')->with('mensagem', 'Os dados do serviço foram atualizados com sucesso!');
    }

    public function confirm(Request $request, $id)
    {
        $db = user::find($id);
        return view('admin.servicos.confirmDelete', [
            'id' => $id,
        ]);
    }

    public function removerServicos(request $request)
    {
        $user = servicos::all();

        // foreach ($user as $users) {
        //     if(Auth::user()->pdeletar_usuario == 0){
        //         return redirect()->route('admin')->with('mensagem', 'Você não tem permissão para acessar esta página!');
        //     }else{
                $user = servicos::find($request->id);
                $user->delete();

                return redirect()->route('admin.servicos')->with('invalido', 'O serviço foi deletado com sucesso!');
        //     }
        // }
    }

    public function mes(request $request)
    {
        dd($request->all());
    }
}
