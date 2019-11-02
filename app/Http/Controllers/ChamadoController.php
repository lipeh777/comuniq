<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chamado;

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
        // $chamado = new Chamado;
        // $chamado->description = $request->descricao;
        // $chamado->user = $request->users;
        // $chamado->observadores = $request->observadores;
        // $chamado->status = $request->status;
        // $chamado->save();
        $chamado = Chamado::where('descricao');
            $this->validate($request,[
              'descricao'=>'string|max:255',
            ]);
            Chamado::create($request->all());
            return redirect()->route('chamado.index')->with('message','Chamado criado com sucesso');

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
