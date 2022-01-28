<?php

namespace App\Http\Controllers;

use App\Imports\CardsImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CardController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function upload()
    {
        return view('uploadcards');
    }
     public function uploadCards(Request $request){
       Excel::import(new CardsImport,request()->file('file'));
       return "records imported successfully";
     }

}

