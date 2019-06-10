<?php

namespace App\Http\Controllers;

use App\Modeles\DetailsDAO;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    function newDetail( Request $request){
        $Details=new DetailsDAO();
        $Details->ajoutDetail($request->input('id'), $request->input('Qte'));
        return view ('insertionOK');
    }
}
