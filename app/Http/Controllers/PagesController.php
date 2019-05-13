<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
$title = "wecom";
// return view('pages.index', compact('title') );
// return view('pages.forms')->with('title',$title);
return view ('pages.about');

    }

    public function about(){
        return view ('pages.about');
    }

    public function services(){
        $data = array(

            'title'=>'Service',
            'servlist'=>['web','android','ML']
        );
        return view ('pages.services')->with($data);
    }
}
