<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\News;
use App\Models\Article;
use App\Models\cotizaciones;
use Response;

class SitemapController extends WebsiteController
{
    public function index()
    {
        $items = News::active()
            ->orderBy('created_at', 'DESC')
            ->take(6)
            ->get();

        $articles = Article::active()
            ->orderBy('created_at', 'DESC')
            ->get();

        return response()->view('sitemap.index', compact('items', 'articles'))
            ->header('Content-Type', 'text/xml');
    }

    public function googleNew()
    {
        $items = News::active()
            ->orderBy('created_at', 'DESC')
            ->take(6)
            ->get();

        $articles = Article::active()
            ->orderBy('created_at', 'DESC')
            ->get();

        return response()->view('sitemap.googleNew', compact('items', 'articles'))
            ->header('Content-Type', 'text/xml');
    }
}
