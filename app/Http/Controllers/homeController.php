<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
	
	
	 function __construct()
    {
        
      /*  $this->middleware('permission:crear-compra', ['only' => ['create', 'store']]);
        $this->middleware('permission:mostrar-compra', ['only' => ['show']]);
        $this->middleware('permission:eliminar-compra', ['only' => ['destroy']]);*/
    }
    public function index(){		 
        if(!Auth::check()){
            return view('welcome');
        }

        return view('panel.index');
    }

}
