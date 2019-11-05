<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Imports\ItemImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class ImportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function import() 
    {
        Excel::import(new ItemImport, request()->file('file'));
        
        return redirect('itemcadastro')->with('success', 'Arquivo importado com sucesso!');
    }
}
