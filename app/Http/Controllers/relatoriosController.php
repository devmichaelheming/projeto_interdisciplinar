<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\clientes;
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
        dd($request->all());
        $pdf = PDF::loadView('admin.relatorio.pdf.clientes');

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
        return view('admin.relatorio.relatorio_servicos');
    }
    public function servicos_pdf()
    {
        $pdf = PDF::loadView('admin.relatorio.pdf.servicos');

        return $pdf->setPaper('a4')->stream('servicos.pdf');
    }
}
