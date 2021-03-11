<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RssController extends Controller
{
    public function show()
    {
        return view('form');
    }

    public function download(Request $request)
    {
        $rss = \FeedReader::read($request->rss_url);

        $pdf = \PDF::loadView('pdf', ['items' => $rss->get_items()]);

        return $pdf->download('rss.pdf');
    }
}
