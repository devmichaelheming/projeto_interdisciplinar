<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\clientes;
use App\servicos;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class relatoriosController extends Controller
{
    public function index()
    {
        return view('admin.relatorio.relatorios');
    }

    // CLIENTES
    public function clientes()
    {
        $clientes = clientes::all();

        return view('admin.relatorio.relatorio_clientes', [
             'clientes' => $clientes
        ]);
    }

    public function clientes_pdf(Request $request)
    {
        $dados_name = $request['id_cliente'];

        $clientes = clientes::all();

        $servicos = servicos::all();

        $dados = [];

        $name_cliente = '';
        $email_cliente = '';
        $phone_cliente = '';
        $nascimento_cliente = '';
        $cidade_cliente = '';
        $cpf_cliente = '';
        $endereco_cliente = '';
        $created_cliente = '';

        foreach ($clientes as $cliente) {
        
            $idcity = $cliente->id;
            $name = $cliente->name;
            $email = $cliente->email;
            $phone = $cliente->phone;
            $nascimento = $cliente->nascimento;
            $cidade = $cliente->cidade;
            $cpf = $cliente->cpf;
            $endereco = $cliente->endereco;
            $created_at = $cliente->created_at;

            if($dados_name == $idcity){
                $name_cliente = $name;
                $email_cliente = $email;
                $phone_cliente = $phone;
                $nascimento_cliente = $nascimento;
                $cidade_cliente = $cidade;
                $cpf_cliente = $cpf;
                $endereco_cliente = $endereco;
                $created_cliente = $created_at;
            } 

        }

        foreach ($servicos as $servico) {
            if($servico->status == 1){
                $servico->status = 'Finalizado';
            }elseif ($servico->status == 2) {
                $servico->status = 'Extornado';
            }else{
                $servico->status = 'Andamento';
            }
        }

         foreach ($clientes as $cliente) {
            $id_cliente =  $dados_name;

            $servicos_cliente = [];

            foreach ($servicos as $servico) {    
                if($id_cliente == $servico->id_cliente){

                    $arr = [];

                    $arr['status'] = $servico->status;
                    $arr['valor'] = $servico->valor;
                    $arr['descricao'] = $servico->descricao;
                    $arr['ano'] = $servico->ano;
                    $arr['marca'] = $servico->marca;
                    $arr['placa'] = $servico->placa;
                    $arr['created_at'] = $servico->created_at;
                    $arr['cliente'] = $id_cliente;

                    $servicos_cliente[] = $arr;

                }
            }
        }

        $dados[] = ['name'=>$name_cliente, 'email'=>$email_cliente, 'phone'=>$phone_cliente, 'nascimento'=>$nascimento_cliente, 'cidade'=>$cidade_cliente, 'cpf'=>$cpf_cliente, 'endereco'=>$endereco_cliente, 'created_at'=>$created_cliente];

        $dados = $dados[0];

        $pdf = PDF::loadView('admin.relatorio.pdf.clientes', compact('dados', 'servicos_cliente'));

        return $pdf->setPaper('a4')->stream('clientes.pdf');
    }

    // VENDAS
    public function vendas()
    {
        return view('admin.relatorio.relatorio_vendas');
    }
    public function vendas_pdf()
    {
        $pdf = PDF::loadView('admin.relatorio.pdf.vendas');

        return $pdf->setPaper('a4')->stream('vendas.pdf');
    }

    // CADASTROS
    public function cadastros()
    {
        return view('admin.relatorio.relatorio_cadastros');
    }
    public function cadastros_pdf()
    {
        $pdf = PDF::loadView('admin.relatorio.pdf.cadastros');

        return $pdf->setPaper('a4')->stream('cadastros.pdf');
    }

    // SERVICOS
    public function servicos()
    {
        $servicos = servicos::all();
        $clientes = clientes::all();

        return view('admin.relatorio.relatorio_servicos', [
            'servicos' => $servicos
        ]);
    }
    public function servicos_mensal_pdf(Request $request)
    {
        $mes = $request['mensal'];

        $convert_mes = explode('-', $mes);

        $request_ano = $convert_mes[0];

        $request_mes = $convert_mes[1];

         switch ($request_mes) {
            case '01':
                $mesgeral = 'janeiro';
            break;
            case '02':
                $mesgeral = 'fevereiro';
            break;
            case '03':
                $mesgeral = 'março';
            break;
            case '04':
                $mesgeral = 'abril';
            break;
            case '05':
                $mesgeral = 'maio';
            break;
            case '06':
                $mesgeral = 'junho';
            break;
            case '07':
                $mesgeral = 'julho';
            break;
            case '08':
                $mesgeral = 'agosto';
            break;
            case '09':
                $mesgeral = 'setembro';
            break;
            case '10':
                $mesgeral = 'outubro';
            break;
            case '11':
                $mesgeral = 'novembro';
            break;
            case '12':
                $mesgeral = 'dezembro';
            break;
        }

        $servico = servicos::where('date_mes', $request_mes)->get();

        if (empty($servico[0])) {
             return redirect()->route('admin.relatorios')->with('invalido', 'Não existe serviços cadastrados neste mês!');
        }

        $servicos_total = [];

        foreach ($servico as $value) {
            if ($request_ano == $value['date_ano']) {
                $servicos_total[] = $value;   
            }
        }

        $pdf = PDF::loadView('admin.relatorio.pdf.servicos', compact('servicos_total', 'mesgeral'));

        return $pdf->setPaper('a4')->stream('servicos.pdf');
        
    }
}