<?php

namespace App\Http\Controllers\Website;

use App\Http\Requests;
use App\Models\News;
use App\Models\Article;
use App\Models\Evento;
use App\Models\cotizaciones;
use Sunra\PhpSimple\HtmlDomParser;
use Illuminate\Http\Request;
use SimpleXMLElement;
use GuzzleHttp\Client;
use Pj8912\PhpBardApi\Bard;
use OpenAI\Api\OpenAIApi;
use Symfony\Component\DomCrawler\Crawler;
use App\Http\Controllers\ChatGPTController;
use App\Http\Controllers\Admin\Photos\PhotosController;
use App\Http\Controllers\FacebookController;
use Illuminate\Support\Facades\Storage;
use App\Models\PhotoAlbum;

class HomeController extends WebsiteController
{
    /**
     * Show the home page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $album = PhotoAlbum::where('slug', "eius-neque")->first();
        $item = Article::with('photos')->where('slug', "el-show")->first();
        $eventos = Evento::get();

        return $this->view('home')->with('slider', $album)->with('hidePageFooter', true)->with('articles', $item)->with('eventos', $eventos);
   
    }

    public function show()
    {

        $album = PhotoAlbum::where('slug', "slidershow")->first();
        $event = News::whereHas('photos')->with('photos')->active()->orderBy('active_from', 'DESC')->get();
        $item = Article::with('photos')->where('slug', "el-show")->first();
        $eventos = Evento::get();
        return $this->view('show')->with('slider', $album)->with('event', $event)->with('hidePageFooter', true)->with('articles', $item)->with('eventos', $eventos);
    }

    public function cena_y_show()
    {

        $album = PhotoAlbum::where('slug', "slidercena")->first();
        $event = News::whereHas('photos')->with('photos')->active()->orderBy('active_from', 'DESC')->get();
        $item = Article::with('photos')->where('slug', "cena-y-show")->first();
        $eventos = Evento::get();
        return $this->view('cena_show')->with('slider', $album)->with('hidePageFooter', true)->with('articles', $item)->with('eventos', $eventos);

    }

    public function informacion()
    {

        $album = PhotoAlbum::where('slug', "sliderinformacion")->first();
        $item = Article::with('photos')->where('slug', "informacion-practica")->first();
        $eventos = Evento::get();

        return $this->view('informacion')->with('slider', $album)->with('hidePageFooter', true)->with('articles', $item)->with('eventos', $eventos);
    }

    public function shop()
    {
        $items = News::active()->orderBy('created_at', 'DESC')->get()->take(6);
        $articles = Article::with('photos')->where('slug', "shop")->first();
        $eventos = Evento::get();

        $album = PhotoAlbum::where('slug', "slidershop")->first();

        return $this->view('shop')->with('slider', $album)->with('news', $items)->with('hidePageFooter', true)->with('articles', $articles)->with('eventos', $eventos);
    }
    

}
