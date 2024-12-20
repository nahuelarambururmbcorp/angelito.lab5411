<?php

namespace App\Http\Controllers\Website;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\FeedbackContactUs;
use App\Events\ContactUsFeedback;
use App\Models\Article;

class ConversorController extends WebsiteController
{


    public function index()
    {
        $items = Article::with('photos')->active()->orderBy('total_views', 'DESC')->limit(4)->get();

        return $this->view('conversor')->with('masvistas', $items);
    }

    public function ganancias()
    {
        $items = Article::with('photos')->active()->orderBy('total_views', 'DESC')->limit(4)->get();

        return $this->view('calculadoraganancias')->with('masvistas', $items);
    }

}