<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class MyController extends Controller
{
    public function getAll(){
        $art = Article::all();
        return view('home',['ar'=>$art]);
    }

    public function getById($id){
        $art = Article::find($id);
        return view('home_id',['ar'=>$art]);
    }
}
