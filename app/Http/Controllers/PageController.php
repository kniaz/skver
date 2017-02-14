<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;

class PageController extends Controller
{
    public function show($alias)
    {

        $page = Page::with('slides')->where('alias', '=', $alias)->get()[0];

        return view('page',['page'=>$page]);
    }
}
