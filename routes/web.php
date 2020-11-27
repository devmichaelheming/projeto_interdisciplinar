<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return redirect()->route('login');
// });

Route::get('/', 'Controller@index')->name('divulgacao');

Route::post('/contato', 'Controller@contato')->name('contato.salvar');

Auth::routes();

Route::prefix('/admin')->group(function () {

    Route::get('/', 'Auth\LoginController@showLoginForm')->name('admin');

    Route::get('/home', 'principalController@index')->name('admin.home');

    Route::post('/login', 'Auth\LoginController@login')->name('admin.acessar');
    Route::post('/logout', 'Auth\LoginController@logout')->name('sair');
    Route::get('/erro', 'Controller@erro')->name('erro');
    Route::get('/erroRemover', 'Controller@erroRemover')->name('erroRemover');

// CLIENTES
// visualizar clientes
Route::get('/clientes', 'clientesController@index')->name('admin.clientes');
Route::get('/clientes/listar', 'clientesController@listar')->name('clientes.listar');
// visualizar cadastro
Route::get('/clientes/viewCadastrar', 'clientesController@viewCadastro')->name('clientes.cadastrar');
// cadastrado
Route::post('/clientes/cadastrado', 'clientesController@cadastrado')->name('clientes.cadastrado');
//Editar clientes
Route::get('/clientes/editar/{id}', 'clientesController@editarCliente')->name('clientes.editar');
Route::post('/clientes/editar/salvar/{id}', 'clientesController@editarSalvar');
//Remover clientes
Route::get('/clientes/remover/{id}', 'clientesController@removerCliente')->name('clientes.remover');
Route::get('/clientes/confirm/{id}', 'clientesController@confirm')->name('clientes.confirm');

    // USUARIOS
    // visualizar usuarios
    Route::get('/usuarios', 'usuariosController@index')->name('admin.usuarios');
    Route::get('/usuarios/listar', 'usuariosController@listar')->name('usuario.listar');
    // visualizar cadastro
    Route::get('/usuarios/viewCadastrar', 'usuariosController@viewCadastro')->name('usuarios.cadastrar');
    // cadastrado
    Route::post('/usuarios/cadastrado', 'usuariosController@cadastrado')->name('usuario.cadastrado');
    //Editar usuarios
    Route::get('/usuarios/editar/{id}', 'usuariosController@editarUsuario')->name('usuario.editar');
    Route::post('/usuarios/editar/salvar/{id}', 'usuariosController@editarSalvar');
    //Remover usuarios
    Route::get('/usuarios/remover/{id}', 'usuariosController@removerUsuario')->name('usuario.remover');
    Route::get('/usuarios/confirm/{id}', 'usuariosController@confirm')->name('usuarios.confirm');

// CONTAS
// visualizar contas
Route::get('/contas', 'contasController@index')->name('admin.contas');
Route::get('/contas/listar', 'contasController@listar')->name('contas.listar');
// visualizar cadastro
Route::get('/contas/viewCadastrar', 'contasController@viewCadastro')->name('contas.cadastrar');
// cadastrado
Route::post('/usuario/cadastrado', 'contasController@cadastrado')->name('contas.cadastrado');
//Editar contas
Route::get('/contas/editar/{id}', 'contasController@editarConta')->name('contas.editar');
Route::post('/contas/editar/salvar/{id}', 'contasController@editarSalvar');
//Remover contas
Route::get('/contas/remover/{id}', 'contasController@removerConta')->name('contas.remover');

// MES
Route::get('/mes', 'contasController@mes')->name('admin.mes');

    // SERVIÇOS
    // visualizar contas
    Route::get('/servicos', 'servicosController@index')->name('admin.servicos');
    Route::get('/servicos/listar', 'servicosController@listar')->name('servicos.listar');
    // visualizar cadastro
    Route::get('/servicos/viewCadastrar', 'servicosController@viewCadastro')->name('servicos.cadastrar');
    // cadastrado
    Route::post('/usuario/cadastrado', 'servicosController@cadastrado')->name('servicos.cadastrado');
    //Editar servicos
    Route::get('/servicos/editar/{id}', 'servicosController@editarServicos')->name('servicos.editar');
    Route::get('/servicos/descricao/{id}', 'servicosController@descricao')->name('servicos.descricao');
    Route::post('/servicos/editar/salvar/{id}', 'servicosController@editarSalvar');
    //Remover servicos
    Route::get('/servicos/remover/{id}', 'servicosController@removerServicos')->name('servicos.remover');
    Route::get('/servicos/extornar/{id}', 'servicosController@extornarServicos')->name('servicos.extornar');
    Route::get('/servicos/confirm/{id}', 'servicosController@confirm')->name('servicos.confirm');

    // RELATORIOS
    // visualizar relatorios
    Route::get('/relatorios', 'relatoriosController@index')->name('admin.relatorios');

    Route::get('/relatorios/servicos', 'relatoriosController@servicos')->name('relatorios.servicos');
    Route::post('/relatorios/servicos/mensal/pdf', 'relatoriosController@servicos_mensal_pdf')->name('relatorios.servicos.mensal.pdf');
    Route::post('/relatorios/servicos/diario/pdf', 'relatoriosController@servicos_diario_pdf')->name('relatorios.servicos.diario.pdf');

    Route::get('/relatorios/cadastros', 'relatoriosController@cadastros')->name('relatorios.cadastros');
    Route::post('/relatorios/cadastros/pdf', 'relatoriosController@cadastros_pdf')->name('relatorios.cadastros.pdf');

    Route::get('/relatorios/clientes', 'relatoriosController@clientes')->name('relatorios.clientes');
    Route::post('/relatorios/clientes/pdf', 'relatoriosController@clientes_pdf')->name('relatorios.clientes.pdf');

    Route::get('/relatorios/vendas', 'relatoriosController@vendas')->name('relatorios.vendas');
    Route::post('/relatorios/vendas/pdf', 'relatoriosController@vendas_pdf')->name('relatorios.vendas.pdf');

    Route::get('/relatorios/listar', 'relatoriosController@listar')->name('relatorios.listar');
    // visualizar cadastro
    Route::get('/relatorios/viewCadastrar', 'relatoriosController@viewCadastro')->name('relatorios.cadastrar');
    // cadastrado
    Route::post('/relatorios/cadastrado', 'relatoriosController@cadastrado')->name('relatorios.cadastrado');
    //Editar relatorios
    Route::get('/relatorios/editar/{id}', 'relatoriosController@editarRelatorios')->name('relatorios.editar');
    Route::post('/relatorios/editar/salvar/{id}', 'relatoriosController@editarSalvar');
    //Remover relatorios
    Route::get('/relatorios/remover/{id}', 'relatoriosController@removerRelatorios')->name('relatorios.remover');

// CONTATOS CADASTRADOS
Route::get('/contatos', 'contatosController@index')->name('admin.contatos');
Route::get('/contatos/vermais/{id}', 'contatosController@vermais')->name('contatos.vermais');

    // INFORMAÇÕES DO SITE
    Route::get('/site', 'site\siteController@index')->name('admin.site');

    // INFORMAÇÕES DO SITE - BANNERS
    Route::get('/site/banner', 'site\bannerController@index')->name('admin.banner');
    Route::get('/site/banner/listar', 'site\bannerController@listar')->name('banner.listar');
    // visualizar banner
    Route::get('/site/banner/viewCadastrar', 'site\bannerController@bannerView')->name('banner.cadastrar');
    // cadastrado
    Route::post('/site/banner/cadastrado', 'site\bannerController@bannerCadastrar')->name('banner.cadastrado');
    //Editar banner
    Route::get('/site/banner/editar/{id}', 'site\bannerController@editarBanner')->name('banner.editar');
    Route::post('/site/banner/editar/salvar/{id}', 'site\bannerController@editarSalvar');
    //Remover banner
    Route::get('/site/banner/remover/{id}', 'site\bannerController@removerBanner')->name('banner.remover');
    Route::get('/site/banner/confirm/{id}', 'site\bannerController@confirm')->name('banner.confirm');

    Route::get('/site/contatos_info', 'site\contatos_infoController@index')->name('contatos_info.admin');
    Route::get('/site/contatos_info/listar', 'site\contatos_infoController@listar')->name('contatos_info.listar');
    Route::post('/site/contatos_info', 'site\contatos_infoController@salvar')->name('contatos_info.salvar');

// INFORMAÇÕES DO SITE - CLIENTES
Route::get('/site/clientes', 'site\clientesController@index')->name('site.clientes');
Route::get('/site/clientes/listar', 'site\clientesController@listar')->name('site.clientes.listar');
// visualizar clientes
Route::get('/site/clientes/viewCadastrar', 'site\clientesController@clientesView')->name('site.clientes.cadastrar');
// cadastrado
Route::post('/site/clientes/cadastrado', 'site\clientesController@clientesCadastrar')->name('site.clientes.cadastrado');
//Editar clientes
Route::get('/site/clientes/editar/{id}', 'site\clientesController@editarClientes')->name('site.clientes.editar');
Route::post('/site/clientes/editar/salvar/{id}', 'site\clientesController@editarSalvar');
//Remover clientes
Route::get('/site/clientes/remover/{id}', 'site\clientesController@removerClientes')->name('site.clientes.remover');
Route::get('/site/clientes/confirm/{id}', 'site\clientesController@confirm')->name('site.clientes.confirm');

    // INFORMAÇÕES DO SITE - BANNERS
    Route::get('/site/info_sistema', 'site\infoSistemaController@index')->name('admin.info_sistema');
    Route::get('/site/info_sistema/listar', 'site\infoSistemaController@listar')->name('info_sistema.listar');
    // visualizar info_sistema
    Route::get('/site/info_sistema/viewCadastrar', 'site\infoSistemaController@info_sistemaView')->name('info_sistema.cadastrar');
    // cadastrado
    Route::post('/site/info_sistema/cadastrado', 'site\infoSistemaController@info_sistemaCadastrar')->name('info_sistema.cadastrado');
    //Editar banner
    Route::get('/site/info_sistema/editar/{id}', 'site\infoSistemaController@editarInfo_sistema')->name('info_sistema.editar');
    Route::post('/site/info_sistema/editar/salvar/{id}', 'site\infoSistemaController@editarSalvar');
    //Remover info_sistema
    Route::get('/site/info_sistema/remover/{id}', 'site\infoSistemaController@removerInfo_sistema')->name('info_sistema.remover');
    Route::get('/site/info_sistema/confirm/{id}', 'site\infoSistemaController@confirm')->name('info_sistema.confirm');

});