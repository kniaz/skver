<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;

class PageController extends Controller
{
    public function show($alias, $alias2 = null, $alias3 = null)
    {

        $alias = $alias .
            ($alias2 ? "/" . $alias2 : "").
            ($alias3 ? "/" . $alias3 : "");


        $page = Page::with('slides')->where('alias', '=', $alias)->get();
        if (isset($page[0])) {
            $page = $page[0];
            return view('page', ['page' => $page]);
        } else {
            abort(404);
        }
        // return 404;
    }

    public function gallery()
    {
        $page = Page::with('slides')->where('alias', '=', 'gallery')->get();

        $page = isset($page[0]) ? $page[0] : null;

        $galleries = Page::with('slides')->where('is_gallery', '=', 1)->get();
        return view('gallery', ['galleries' => $galleries, 'page' => $page]);
    }
}
