<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

use App\Imports\ItemImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    public function import() 
    {
        Excel::import(new ItemImport, request()->file('file'));
        
        return redirect('itemcadastro')->with('success', 'Arquivo importado com sucesso!');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $item = Item::all();
        return view('itemcadastro')->with(['item' => $item]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Item $item)
    {
        // $this->validate($request,[
        //       'title'=>'string',
        //     ]);
        $item->numero_tombamento = $request->title;
        $item->save();
        // Item::create($request->all());
        return redirect()->route('itemcadastro.index');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
