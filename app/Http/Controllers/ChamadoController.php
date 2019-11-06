<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chamado;
use App\Item;
use Illuminate\Support\Facades\Auth;

class ChamadoController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $chamado = Chamado::all();

        return view('chamado.index',['chamado' => $chamado]);
    }

    public function create(){

        //

    }

    public function store(Request $request){

        $tombamento = $request->get("tombamento");
        $item = Item::where('numero_tombamento', $request->tombamento)->first();

        if($item){
            $chamado = new Chamado;
            $chamado->descricao = $request->descricao;
            $chamado->fk_users_id = Auth::user()->id;
            $chamado->fk_item_id = $item->id;
            $chamado->save();
            return redirect()->route('chamado.index')->with('message','Chamado criado com sucesso');
        }else{
            return redirect()->route('chamado.index')->with('message','errou, infiliz');
        }    

    }
    public function show($id){

        //
    }
  
    public function edit(){

        //
    }
  
    public function update(){

        //
    }

    public function destroy($id){

        //
    }
}
