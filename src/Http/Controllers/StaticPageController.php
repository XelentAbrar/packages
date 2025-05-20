<?php

namespace XelentAbrar\Packages\Http\Controllers;

use Illuminate\Routing\Controller;
use XelentUmar\Packages\Models\StaticPage;

class StaticPageController extends Controller
{
    public function show($slug)
    {
        $page = StaticPage::where('slug', $slug)->firstOrFail();
        return view('staticpages::pages.show', compact('page'));
    }
}
