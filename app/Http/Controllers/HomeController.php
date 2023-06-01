<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomeController extends Controller
{

    public function home(){
        $breadcrumbs = [
            ['link' => "/", 'name' => "Search"], ['name' => "Index"]
        ];
        $articles = Article::all();
        return view('/content/home', compact('breadcrumbs', 'articles'));
    }

    public function setTheme($theme){
        // available language in template array
        $availTheme=['dark'=>'dark', 'light' => 'light'];
        // check for existing language
        if(array_key_exists($theme,$availTheme)){
            session()->put('theme',$theme);
        }
        return redirect()->back();
    }
}
