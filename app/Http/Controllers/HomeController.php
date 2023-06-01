<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home(){
        $breadcrumbs = [
            ['link' => "home", 'name' => "Home"], ['name' => "Index"]
        ];
        return view('/content/home', ['breadcrumbs' => $breadcrumbs]);
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
