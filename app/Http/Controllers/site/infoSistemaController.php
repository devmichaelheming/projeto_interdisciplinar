<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\info_sistema;

class infoSistemaController extends Controller
{
       public function info_sistemaView()
    {
        return view('admin.site.info_sistema.cadastrarInfo'); 
    }
        
    public function info_sistemaCadastrar(request $request)
    {

        try{
            $db = New info_sistema;

            $teste = $request->file('img');

            if( isset($teste)){

                $name_file = $teste->getClientOriginalName();

                $ext = pathinfo($name_file, PATHINFO_EXTENSION);

                $item = base64_encode(file_get_contents($request->file('img')));

                $db->ext_img = $ext;
                $db->name_file = $name_file;
                $db->img = $item;
            };

            $db->title = $request->input('title');
            $db->legenda = $request->input('legenda');
            $db->save();
            
            return redirect()->route('admin.site')->with('mensagem_infoSistema', 'A informação foi cadastrada com sucesso!');
        } catch (QueryException $ex) {

            if($ex->getCode() === "23000") {
                return redirect()->route('admin.site')->with('invalido_infoSistema', 'A informação já está cadastrada no sistema!');
            } else {
                return redirect()->route('admin.site')->with('invalido_infoSistema', 'Erro SQL ao cadastrar a informação!');
            }
        }
    }

    public function editarInfo_sistema(Request $request, $id)
    {

        // foreach ($user as $users) {
        //     if(Auth::user()->peditar_usuario == 0){
        //         return redirect()->route('admin')->with('mensagem', 'Você não tem permissão para acessar esta página!');
        //     }else{
                $db = info_sistema::find($id);
                // dd($db);
                return view('admin.site.info_sistema.editarInfo',[
                    'id' => $id,
                    'title' => $db['title'],
                    'legenda' => $db['legenda'],
                    'ext_img' => $db['ext_img'],
                    'name_file' => $db['name_file'],
                    'img' => $db['img'],
                ]);
        //     }
        // }

    }

    public function editarSalvar(Request $request, $id)
    {
        $db = info_sistema::find($id);

        $dados = $request->all();
        
        $teste = $request->file('logo');

        $teste1 = $request->file('logo');

        if( isset($teste1)){

            $name_file = $teste1->getClientOriginalName();

            $ext1 = pathinfo($name_file, PATHINFO_EXTENSION);

            $item = base64_encode(file_get_contents($request->file('logo')));

            $db['logo'] = $item;
        };
        $name_img = $name_file;
        $ext = $ext1;
        $link = $dados['link'];

        $db['link'] = $link;
        $db['ext'] = $ext;
        $db['name_img'] = $name_img;
        
        $db->save();

        return redirect()->route('tip.marcas')->with('mensagem', 'A Marca foi atualizada com sucesso!');
    }

    public function confirm(Request $request, $id)
    {
        $db = info_sistema::find($id);
        return view('admin.site.info_sistema.confirmDelete', [
            'id' => $id,
        ]);
    }

    public function removerInfo_sistema(request $request)
    {
        $user = info_sistema::find($request->id);
        $user->delete();

        return redirect()->route('admin.site')->with('invalido_infoSistema', 'A informação foi deletada com sucesso!');
    }

}
