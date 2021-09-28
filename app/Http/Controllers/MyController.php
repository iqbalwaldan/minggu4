<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class MyController extends Controller
{
    public function getAll(){
        $art = Article::all();
        return view('Home',['ar'=>$art]);
    }
}
