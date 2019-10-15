<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Chamado;

class ChamadoController extends Controller {
    public function index(){

        $products = Chamado::orderBy('created_at', 'description')->paginate(10);

        // return view('chamado.index',['chamado' => $chamado]);
    }

    public function create(){

    	return view('chamado.create');

    }

	public function store(ChamadoRequest $request){

	        $chamado = new Chamado;
	        $chamado->description = $request->descricao;
	        // $chamado->user = $request->users;
	        // $chamado->observadores = $request->observadores;
	        // $chamado->status = $request->status;
	        $chamado->save();
	        return redirect()->route('chamado.index')->with('message', 'Called created successfully!');

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
