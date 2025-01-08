<?php

namespace App\Http\Controllers\Website;

use App\Http\Requests;
use App\Models\News;
use App\Models\Article;
use App\Models\Evento;
use App\Models\cotizaciones;
use App\Models\Timeline;
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

        $album = PhotoAlbum::where('slug', "sliderhome-1")->first();
        $item = Article::with('photos')->where('slug', "el-show")->first();
        $eventos = Evento::get();
        $timeline = Timeline::orderBy('order','asc')->get();
        return $this->view('home')->with('slider', $album)->with('hidePageFooter', true)->with('articles', $item)->with('eventos', $eventos)->with('timeline', $timeline);
   
    }

    public function show()
    {

        $album = PhotoAlbum::where('slug', "slidershow")->first();
        $event = News::whereHas('photos')->with('photos')->active()->orderBy('active_from', 'DESC')->get();

        $item = Article::with('photos')->where('slug', "el-show")->first();
        $content1 = Article::where('slug', "el-show")->first()->content1;
        $content2 = Article::where('slug', "el-show")->first()->content2;
        $content3 = Article::where('slug', "el-show")->first()->content3;
        $content4 = Article::where('slug', "el-show")->first()->content4;
        $contentList = array($content1, $content2, $content3, $content4);

        $eventos = Evento::get();
        $timeline = Timeline::orderBy('order','asc')->get();
        return $this->view('show',['data'=> $item, 'contentList' => $contentList])->with('slider', $album)->with('event', $event)->with('hidePageFooter', true)->with('articles', $item)->with('eventos', $eventos)->with('timeline', $timeline);
    }

    public function cena_y_show()
    {

        $album = PhotoAlbum::where('slug', "slidercena")->first();
        $event = News::whereHas('photos')->with('photos')->active()->orderBy('active_from', 'DESC')->get();
        $item = Article::with('photos')->where('slug', "cena-y-show")->first();
        $eventos = Evento::get();
        $timeline = Timeline::orderBy('order','asc')->get();
        return $this->view('cena_show')->with('slider', $album)->with('hidePageFooter', true)->with('articles', $item)->with('eventos', $eventos)->with('timeline', $timeline);

    }

    public function informacion()
    {
        $album = PhotoAlbum::where('slug', "SliderInformacion")->first();
        $item = Article::with('photos')->where('slug', "informacion-practica")->first();
        $eventos = Evento::get();

        $article = Article::where('slug', "informacion-practica")->first()->content;

        $content1 = Article::where('slug', "informacion-practica")->first()->content1;
        $content2 = Article::where('slug', "informacion-practica")->first()->content2;
        $content3 = Article::where('slug', "informacion-practica")->first()->content3;
        $content4 = Article::where('slug', "informacion-practica")->first()->content4;
        $contentList = array($content1, $content2, $content3, $content4);

        $timeline = Timeline::orderBy('order','asc')->get();
        return $this->view('informacion', ['data'=> $article, 'contentList' => $contentList] )->with('slider', $album)->with('hidePageFooter', true)->with('articles', $item)->with('eventos', $eventos)->with('timeline', $timeline);
    }

    public function shop()
    {
        $items = News::active()->orderBy('created_at', 'DESC')->get()->take(6);
        $articles = Article::with('photos')->where('slug', "shop")->first();
        $eventos = Evento::get();

        $album = PhotoAlbum::where('slug', "slidershop")->first();
        $timeline = Timeline::orderBy('order','asc')->get();

        return $this->view('shop')->with('slider', $album)->with('news', $items)->with('hidePageFooter', true)->with('articles', $articles)->with('eventos', $eventos)->with('timeline', $timeline);
    }
    

}
