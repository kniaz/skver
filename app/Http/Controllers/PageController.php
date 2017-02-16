<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Page;

class PageController extends Controller
{
    public function show($alias, $alias2 = null, $alias3 = null)
    {

        $alias = $alias .
            ($alias2 ? "/" . $alias2 : "") .
            ($alias3 ? "/" . $alias3 : "");


        $page = Page::with('slides')->where('alias', '=', $alias)->get();
        if (isset($page[0])) {
            $page        = $page[0];
            $breadcrumbs = [];
            $this->generateBreadcrumbs($page->id, $breadcrumbs);

            return view('page', ['page' => $page, 'breadcrumbs' => $breadcrumbs]);
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

    public function pdfPage(Request $request){
        $uri = $request->path();
        $page=[
            'title'=>'Меню'
        ];

        switch ($uri) {
            case 'foodmenu':
                $page['src']= '/content/pdf/main-1.pdf';
                $page['title']= 'Основное меню';
                break;
            case 'cocktailmenu':
                $page['src']= '/content/pdf/kokteli.pdf';
                $page['title']= 'Меню коктейли';
                break;
        }
        return view('menupdf', [ 'page' => $page]);
    }

    private function generateBreadcrumbs($page_id, &$breadcrumbs)
    {
        $page = Page::where('id', '=', $page_id)->get();
        $page = isset($page[0]) ? $page[0] : null;
        if ($page) {
            array_unshift($breadcrumbs, [
                'title' => $page->breadcrumb_name,
                'alias' => $page->alias
            ]);
            if ($page->parent) {
                $this->generateBreadcrumbs($page->parent, $breadcrumbs);
            }
        }

    }
}
