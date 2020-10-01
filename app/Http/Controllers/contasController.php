<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\contas;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class contasController extends Controller
{
 public function index()
    {
        
        $janeiro = '01';
        $fevereiro = '02';
        $marco = '03';
        $abril = '04';
        $maio = '05';
        $junho = '06';
        $julho = '07';
        $agosto = '08';
        $setembro = '09';
        $outubro = '10';
        $novembro = '11';
        $dezembro = '12';

        $meses = [$janeiro, $fevereiro, $marco, $abril, $maio, $junho, $julho, $agosto, $setembro, $outubro, $novembro, $dezembro];

        $hoje = date('m/Y');
        
        $ext = explode('/', $hoje);

        switch ($ext[1]) {
            case '01':
                $ext[1] = 'janeiro';
                $meses[0] = 'ativo';
            break;
            case '02':
                $ext[1] = 'fevereiro';
                $meses[1] = 'ativo';
            break;
            case '03':
                $ext[1] = 'março';
                $meses[2] = 'ativo';
            break;
            case '04':
                $ext[1] = 'abril';
                $meses[3] = 'ativo';
            break;
            case '05':
                $ext[1] = 'maio';
                $meses[4] = 'ativo';
            break;
            case '06':
                $ext[1] = 'junho';
                $meses[5] = 'ativo';
            break;
            case '07':
                $ext[1] = 'julho';
                $meses[6] = 'ativo';
            break;
            case '08':
                $ext[1] = 'agosto';
                $meses[7] = 'ativo';
            break;
            case '09':
                $ext[1] = 'setembro';
                $meses[8] = 'ativo';
            break;
            case '10':
                $ext[1] = 'outubro';
                $meses[9] = 'ativo';
            break;
            case '11':
                $ext[1] = 'novembro';
                $meses[10] = 'ativo';
            break;
            case '12':
                $ext[1] = 'dezembro';
                $meses[11] = 'ativo';
            break;
        }

        $mesatual = $ext[1];
        
        $contas = contas::all();

        // foreach ($contas as $key => $value) {
        //     $test[]=$value['vencimento'];
        // }

        // exit;
        // dd($hoje);

        // $ext = explode('-', $contas[0]);

        // $sql = DB::table('contas')->select('vencimento')->where($contas['vencimento'], 'vencimento');

        // dd($sql);

        // SELECT * FROM `contas` WHERE vencimento BETWEEN '2020-01-01' AND '2020-09-31'

        $t2 = DB::table('contas')->select(DB::raw('sum(valor) as valor'))->first();

        $pago = DB::table('contas')->select(DB::raw('sum(valor) as valor'))->where('status', 1)->first();

        $aberto = DB::table('contas')->select(DB::raw('sum(valor) as valor'))->where('status', 0)->first();

        foreach ($contas as $conta) {
            if($conta->status == 1){
                $conta->status = 'Pago';
            }else{
                $conta->status = 'Aberto';
            }
        }

        // if ($pago->valor == null) {
        //     print_r('nulo');
        // }else{
        //     print_r('tem coisa');
        // }
        // exit;
        
        return view('admin.contas.contas', [
            "contas" => $contas,
            "soma" => $t2,
            "aberto" => $aberto,
            "pago" => $pago,
            "mes" => $mesatual,
            "meses" => $meses
        ]);
    }
    public function viewCadastro()
    {
        return view('admin.contas.registrarContas');
    }
    public function cadastrado(Request $request)
    {
        if($request['status'] == 'on'){
            $request['status'] = 0;
        }else{
            $request['status'] = 1;
        }

        dd($request->all());

        // $ext = explode('-', $request['competencia']);

        // try{
        $db = New contas();

            $db->valor = $request->input('valor');
            $db->competencia = $request->input('competencia');
            $db->vencimento = $request->input('vencimento');
            $db->descricao = $request->input('descricao');
            $db->tipo = $request->input('tipo');
            $db->status = $request->input('status');

            $db->save();

            return redirect()->route('admin.contas')->with('mensagem', 'A conta foi cadastrada com sucesso!');
        // } catch (QueryException $ex) {
            
        //     if($ex->getCode() === "23000") {
        //         return redirect()->route('admin.contas')->with('invalido', 'A conta já está cadastrada no sistema!');
        //     } else {
        //         return redirect()->route('admin.contas')->with('invalido', 'Erro SQL ao cadastrar a conta!');
        //     }
        // }
    }

    public function editarConta(Request $request, $id)
    {

        // $user = user::all();

        // foreach ($user as $users) {
        //     if(Auth::user()->peditar_usuario == 0){
        //         return redirect()->route('admin')->with('mensagem', 'Você não tem permissão para acessar esta página!');
        //     }else{
                $db = contas::find($id);
                return view('admin.contas.editarContas',[
                    'id' => $id,
                    'titulo_conta' => $db['titulo_conta'],
                    'descricao' => $db['descricao'],
                    'valor' => $db['valor'],
                    'parcelas' => $db['parcelas'],
                    'vencimento' => $db['vencimento'],
                    'status' => $db['status'],
                ]); 
        //    }
        // }
        
    }

    public function editarSalvar(Request $request, $id)
    {

        $db = contas::find($id);

        $dados = $request->all();

        $titulo_conta = $dados['titulo_conta'];
        $descricao = $dados['descricao'];
        $valor = $dados['valor'];
        $parcelas = $dados['parcelas'];
        $vencimento = $dados['vencimento'];
        $status = $dados['status'];

        $db['titulo_conta'] = $titulo_conta;
        $db['descricao'] = $descricao;
        $db['valor'] = $valor;
        $db['parcelas'] = $parcelas;
        $db['vencimento'] = $vencimento;
        $db['status'] = $status;

        $db->save();

        return redirect()->route('admin.contas')->with('mensagem', 'A conta foi atualizda com sucesso!');
        
    }

     public function removerConta(request $request)
    {
        
        $user = contas::all();

        // foreach ($user as $users) {
        //     if(Auth::user()->pdeletar_usuario == 0){
        //         return redirect()->route('admin')->with('mensagem', 'Você não tem permissão para acessar esta página!');
        //     }else{
                $user = contas::find($request->id);
                $user->delete();

                return redirect()->route('admin.contas')->with('invalido', 'A conta foi deletada com sucesso!');
        //     }
        // }
 
    }
    public function mes(request $request)
    {
        dd($request->all());
    }
}
