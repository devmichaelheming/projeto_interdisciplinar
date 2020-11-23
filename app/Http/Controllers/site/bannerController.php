<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\banner;

class bannerController extends Controller
{
    public function bannerView()
    {
        return view('admin.site.banner.cadastrarBanner'); 
    }
        
    public function bannerCadastrar(request $request)
    {
        try{
            $db = New banner;

            $teste = $request->file('banner');

            if( isset($teste)){

                $name_file = $teste->getClientOriginalName();

                $ext = pathinfo($name_file, PATHINFO_EXTENSION);

                $item = base64_encode(file_get_contents($request->file('banner')));

                $db->ext_img = $ext;
                $db->name_img = $name_file;
                $db->banner = $item;
            };
            
            $db->save();
            
            return redirect()->route('admin.site')->with('mensagem_banner', 'O Banner foi cadastrado com sucesso!');
        } catch (QueryException $ex) {

            if($ex->getCode() === "23000") {
                return redirect()->route('admin.site')->with('invalido_banner', 'O Banner já está cadastrado no sistema!');
            } else {
                return redirect()->route('admin.site')->with('invalido_banner', 'Erro SQL ao cadastrar banner!');
            }
        }
    }
    public function confirm(Request $request, $id)
    {
        $db = banner::find($id);
        return view('admin.site.banner.confirmDelete', [
            'id' => $id,
        ]);
    }

    public function removerBanner(request $request)
    {
        $user = banner::find($request->id);
        $user->delete();

        return redirect()->route('admin.site')->with('invalido_banner', 'O banner foi deletado com sucesso!');
    }

}
