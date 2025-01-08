<?php

namespace App\Http\Controllers\Website;

use App\Models\Article;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\cotizaciones;
class BlogController extends WebsiteController
{
    public function index()
    {
        $perPage = 6;
        $page = input('page', 1);
        $baseUrl = config('app.url') . '/blog';
        $items = Article::with('photos')->active()->orderBy('active_from', 'DESC')->get();

        $total = $items->count();

        // paginator
        $paginator = new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(),
            $perPage, $page, ['path' => $baseUrl, 'originalEntries' => $total]);

        // if pagination ajax
        if (request()->ajax()) {
            return response()->json(view('website.blog.pagination')
                ->with('paginator', $paginator)
                ->render());
        }

        return $this->view('blog.blog')->with('paginator', $paginator);
    }

    public function show($newsSlug)
    {
        $item = Article::with('photos')->where('slug', $newsSlug)->first();
        if (!$item) {
            //return redirect('/blog');
        }

        $data['dolar']=cotizaciones::where('id_moneda',1)->orderBy('id', 'desc')->first();
        $data['dolar_b']=cotizaciones::where('id_moneda',2)->orderBy('id', 'desc')->first();
        $data['dolar_t']=cotizaciones::where('id_moneda',7)->orderBy('id', 'desc')->first();
        $data['dolar_cl']=cotizaciones::where('id_moneda',8)->orderBy('id', 'desc')->first();
        $data['euro']=cotizaciones::where('id_moneda',3)->orderBy('id', 'desc')->first();
        $data['mayorista']=cotizaciones::where('id_moneda',4)->orderBy('id', 'desc')->first();
        $data['merval']=cotizaciones::where('id_moneda',5)->orderBy('id', 'desc')->first();
        $data['mervalarg']=cotizaciones::where('id_moneda',6)->orderBy('id', 'desc')->first();

        
        $items = Article::with('photos')->active()->whereNotIn("slug",[$newsSlug])->orderBy('total_views', 'DESC')->limit(4)->get();
        $item->increment('total_views');
        $this->addBreadcrumbLink($item->title, false);
        
        return $this->view('blog.article_show2')->with('article', $item)->with('data', $data)
        ->with('title', $item->title)
        ->with('image', $item->cover_photo->thumbUrl)
        ->with('description', $item->summary)
        ->with('masvistas', $items);
    }
}
