<?php

namespace App\Http\Controllers\Website;

use App\Http\Requests;
use App\Models\News;
use App\Models\Article;
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

class HomeController extends WebsiteController
{
    /**
     * Show the home page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = News::active()->orderBy('created_at', 'DESC')->get()->take(6);
        $articles = Article::active()->orderBy('created_at', 'DESC');

        setlocale(LC_TIME, 'es_ES');

        $data['dolar']=cotizaciones::where('id_moneda',1)->orderBy('id', 'desc')->first();
        $data['dolar_b']=cotizaciones::where('id_moneda',2)->orderBy('id', 'desc')->first();
        $data['dolar_t']=cotizaciones::where('id_moneda',7)->orderBy('id', 'desc')->first();
        $data['dolar_cl']=cotizaciones::where('id_moneda',8)->orderBy('id', 'desc')->first();
        $data['euro']=cotizaciones::where('id_moneda',3)->orderBy('id', 'desc')->first();
        $data['mayorista']=cotizaciones::where('id_moneda',4)->orderBy('id', 'desc')->first();
        $data['merval']=cotizaciones::where('id_moneda',5)->orderBy('id', 'desc')->first();
        $data['mervalarg']=cotizaciones::where('id_moneda',6)->orderBy('id', 'desc')->first();
        $title = "Cotización de  Dólar Blue y Dólar oficial";

        return $this->view('home')->with('news', $items)->with('hidePageFooter', true)->with('articles', $articles)->with('title', $title)->with('data', $data);
    }


    public function obtenerCotizaciones()
    {
        setlocale(LC_TIME, 'es_ES');

        $data['dolar']=cotizaciones::where('id_moneda',1)->orderBy('id', 'desc')->first();
        $data['dolar_b']=cotizaciones::where('id_moneda',2)->orderBy('id', 'desc')->first();
        $data['dolar_t']=cotizaciones::where('id_moneda',7)->orderBy('id', 'desc')->first();
        $data['dolar_cl']=cotizaciones::where('id_moneda',8)->orderBy('id', 'desc')->first();
        $data['euro']=cotizaciones::where('id_moneda',3)->orderBy('id', 'desc')->first();
        $data['mayorista']=cotizaciones::where('id_moneda',4)->orderBy('id', 'desc')->first();
        $data['merval']=cotizaciones::where('id_moneda',5)->orderBy('id', 'desc')->first();
        $data['mervalarg']=cotizaciones::where('id_moneda',6)->orderBy('id', 'desc')->first();
        $title = "Precio dolar blue ,Valor dolar oficial y blue";

        // Crear un array para almacenar los resultados
        $result = [];

        foreach ($data as $key => $value) {
            if ($value) {
                $result[$key] = [
                    'compra' => $value->compra,
                    'venta' => $value->venta,
                ];
            }
        }

        return response()->json($result);
    }


    public function cron()
    {
        


    //DOLAR OFICIAL
    $oficial = json_decode(file_get_contents("https://mercados.ambito.com//dolar/oficial/variacion"), true);

    //print_r($json);

    //echo $json["compra"];

    $resultados =  $this->actualizar(1,date('Y-m-d'),$oficial);



    //DOLAR BLUE
    $informal = json_decode(file_get_contents("https://mercados.ambito.com//dolar/informal/variacion"), true);


    $resultados2 =  $this->actualizar(2,date('Y-m-d'),$informal);



    //DOLAR MAYORISTA
    $mayorista = json_decode(file_get_contents("https://mercados.ambito.com//dolar/mayorista/variacion"), true);


    $resultados3 =  $this->actualizar(4,date('Y-m-d'),$mayorista);


   //DOLAR TURISTA
   $turista = json_decode(file_get_contents("https://mercados.ambito.com//dolarturista/variacion"), true);


   $turista2 =  $this->actualizar(7,date('Y-m-d'),$turista);


   //DOLAR CONTADO LIQUIDACION
   $dolar_cl = json_decode(file_get_contents("https://mercados.ambito.com//dolar/cl/variacion"), true);


   $dolar_cl2 =  $this->actualizar(8,date('Y-m-d'),$dolar_cl);



    

    //EURO
    $euro = json_decode(file_get_contents("https://mercados.ambito.com//euro/variacion"), true);


    $resultados4 =  $this->actualizar(3,date('Y-m-d'),$euro);


    $meval = json_decode(file_get_contents("https://mercados.ambito.com//indice/.merv/variacion-ultimo"), true);


    $resultados5 =  $this->actualizar(5,date('Y-m-d'),$meval);


    $mevalar = json_decode(file_get_contents("https://mercados.ambito.com//indice/.mar/variacion-ultimo"), true);


    $resultados6 =  $this->actualizar(6,date('Y-m-d'),$mevalar);


    $this->cronrNoticias();





    }


    

    public function actualizar($id,$fecha,$cotiza)
    {
      
      $dolar=cotizaciones::where('id_moneda',$id)->where('fecha',$fecha)->first();


        if (empty($dolar->fecha)) {
//inserto

          if ($id==5 or $id==6) {
           

        $nuevo = new cotizaciones;
        $nuevo->compra = $cotiza['ultimo'] ;
        //$nuevo->venta = $cotiza['venta'];
        $nuevo->variacion = $cotiza['variacion'] ;
        $nuevo->fecha = $fecha ;  
        $nuevo->id_moneda = $id ;  
        $nuevo->save();

         echo 'Nuevo';


          }else{

        $nuevo = new cotizaciones;
        $nuevo->compra = $cotiza['compra'] ;
        $nuevo->venta = $cotiza['venta'];
        $nuevo->variacion = $cotiza['variacion'] ;
        $nuevo->fecha = $fecha ;  
        $nuevo->id_moneda = $id ;  
        $nuevo->save();

echo 'Nuevo';



          }

           
           


     


          


          }else{

//actualizo

if ($id==5 or $id==6) {


        $actu = cotizaciones::find($dolar->id);
      

        $actu->compra = $cotiza['ultimo'] ;
        //$actu->venta = $cotiza['venta'];
        $actu->variacion = $cotiza['variacion'] ;
        $actu->fecha = $fecha ;  
        $actu->save();



echo 'actualizo';


}else{


        $actu = cotizaciones::find($dolar->id);
      

        $actu->compra = $cotiza['compra'] ;
        $actu->venta = $cotiza['venta'];
        $actu->variacion = $cotiza['variacion'] ;
        $actu->fecha = $fecha ;  
        $actu->save();



echo 'actualizo';


}



      }


//         setlocale(LC_TIME, "spanish");
//         $fecha_string = utf8_encode(strftime("%A, %d de %B de %Y"));
//         $titulo = "Dolar hoy: a cuánto cotiza el oficial y el dolar blue hoy ".$fecha_string;
//         $descripcion = "Cotizacion del dolar hoy minuto a minuto en el mercado informal y banco nacion del dia ".$fecha_string;

//         $venta = $cotiza['venta'];
//         $compra = $cotiza['compra'];
        
//         $data['dolar']=cotizaciones::where('id_moneda',1)->orderBy('id', 'desc')->first();
//         $data['dolar_b']=cotizaciones::where('id_moneda',2)->orderBy('id', 'desc')->first();
//         $data['dolar_t']=cotizaciones::where('id_moneda',7)->orderBy('id', 'desc')->first();
//         $data['dolar_cl']=cotizaciones::where('id_moneda',8)->orderBy('id', 'desc')->first();

//         $curepo = '<p><span style="font-family: Georgia, serif; font-size: 19px;">Hoy '.$fecha_string.', el&nbsp;</span><span style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 800; font-stretch: inherit; font-size: 19px; line-height: inherit; font-family: Georgia, serif; vertical-align: baseline;">dólar blue&nbsp;</span><span style="font-family: Georgia, serif; font-size: 19px;">cotiza en promedio a&nbsp;</span><span style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 800; font-stretch: inherit; font-size: 19px; line-height: inherit; font-family: Georgia, serif; vertical-align: baseline;">$'.$venta.' para la venta&nbsp;</span><span style="font-family: Georgia, serif; font-size: 19px;">. Este valor surge en el mercado informal al precio de la moneda estadounidense que en el mercado oficial, que ronda los&nbsp;</span><span style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 800; font-stretch: inherit; font-size: 19px; line-height: inherit; font-family: Georgia, serif; vertical-align: baseline;">$'.$compra.'</span> en el Banco Nacion<br></p>';
        
//         $cuer='<p><span style="font-family: Georgia, serif; font-size: 19px;">Hoy '.$fecha_string.', el&nbsp;</span><span style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 800; font-stretch: inherit; font-size: 19px; line-height: inherit; font-family: Georgia, serif; vertical-align: baseline;">dólar blue&nbsp;</span><span style="font-family: Georgia, serif; font-size: 19px;">cotiza en promedio a&nbsp;</span><span style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 800; font-stretch: inherit; font-size: 19px; line-height: inherit; font-family: Georgia, serif; vertical-align: baseline;">$'.$data['dolar_b']->venta.' para la venta&nbsp;</span><span style="font-family: Georgia, serif; font-size: 19px;">. Este valor surge en el mercado informal al precio de la moneda estadounidense que en el mercado oficial, que ronda los&nbsp;</span><span style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 800; font-stretch: inherit; font-size: 19px; line-height: inherit; font-family: Georgia, serif; vertical-align: baseline;">$'.$data['dolar']->venta.'</span>&nbsp;.</p><p><br></p><h2 style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-weight: inherit; font-size: inherit; font-family: Arial, sans-serif; vertical-align: baseline; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; color: rgb(0, 0, 0);"><span style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 800; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline;">Dólar Banco Nación</span></h2><p><span style="font-family: Arial, sans-serif; font-size: 16px;">En el Banco Nación, el dólar oficial cotiza a&nbsp;</span><span style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 800; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Arial, sans-serif; vertical-align: baseline;">$71,40</span><span style="font-family: Arial, sans-serif; font-size: 16px;">&nbsp;para la compra y&nbsp;</span><span style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 800; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Arial, sans-serif; vertical-align: baseline;">$76.40</span><span style="font-family: Arial, sans-serif; font-size: 16px;">&nbsp;para la venta.</span></p><p><span style="font-family: Arial, sans-serif; font-size: 16px;"><br></span></p><h2 style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-weight: inherit; font-size: inherit; font-family: Arial, sans-serif; vertical-align: baseline; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; color: rgb(0, 0, 0);"><span style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 800; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline;">Cotización del dólar turista</span></h2><p><span style="font-family: Arial, sans-serif; font-size: 16px;">El dólar&nbsp;</span><span style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 800; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Arial, sans-serif; vertical-align: baseline;">blue cotiza este 31 de julio</span><span style="font-family: Arial, sans-serif; font-size: 16px;">&nbsp;a&nbsp;</span><span style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 800; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Arial, sans-serif; vertical-align: baseline;">$131,00</span><span style="font-family: Arial, sans-serif; font-size: 16px;">&nbsp;para la compra y&nbsp;</span><span style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 800; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Arial, sans-serif; vertical-align: baseline;">$136,00</span><span style="font-family: Arial, sans-serif; font-size: 16px;">&nbsp;para la venta.</span></p><p><span style="font-family: Arial, sans-serif; font-size: 16px;"><br></span></p><h2 style="font-family: Arial, sans-serif; font-weight: inherit; line-height: inherit; color: rgb(0, 0, 0); margin: 0px; font-size: inherit; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit;"><span style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 800; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline;">Cotización del dólar contado con liqui</span></h2><p><span style="font-family: Arial, sans-serif; font-size: 16px;">El dólar&nbsp;</span><span style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 800; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Arial, sans-serif; vertical-align: baseline;">contado con liqui cotiza este 31 de julio</span><span style="font-family: Arial, sans-serif; font-size: 16px;">&nbsp;a&nbsp;</span><span style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 800; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Arial, sans-serif; vertical-align: baseline;">$131,00</span><span style="font-family: Arial, sans-serif; font-size: 16px;">&nbsp;para la compra y&nbsp;</span><span style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 800; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Arial, sans-serif; vertical-align: baseline;">$136,00</span><span style="font-family: Arial, sans-serif; font-size: 16px;">&nbsp;para la venta.</span></p><p><span style="font-family: Arial, sans-serif; font-size: 16px;"><br></span></p><p><span style="font-family: Georgia, serif; font-size: 19px;">Cabe destacar que el dólar blue no tiene una cotización oficial, sino que su valor sale del promedio de cotización en lugares de cambio. El cepo cambiario, medida instrumentada para controlar la cotización de la moneda y cuidar las reservas del Banco Central, reactivó la operaciones en el mercado paralelos, donde los usuarios buscan eludir el tope de 200 dólares mensuales para el ahorro.</span><span style="font-family: Arial, sans-serif; font-size: 16px;"><br></span></p><p><span style="font-family: Arial, sans-serif; font-size: 16px;"><br></span><br></p>';


//      $noticia_d=Noticias::where('slug',str_slug($titulo))->first();
//      if ($id==2) {
//      	# code...
     
//      if (empty($noticia_d)) {
//      	// Creación del noticias
//         $noticia = Noticias::create([
//             'titulo' => $titulo,
//             'epigrafe' => NULL,
//             'copete' => $descripcion,
//             'curepo' => $curepo,
//             'estado' => 1,
//             'img' => "38190_LUuH1T3bzCCHZ6fr.jpg",
//             'slug' => str_slug($titulo),
//             'rss' => 0,
//             'cotizacion' => 1,
//             'cat' => 3,
            
//         ]);
        
//      }else{


//      	  $noticia_d->update([

//  			'titulo' => $titulo,
//             'epigrafe' => NULL,
//             'copete' => $descripcion,
//             'curepo' => $curepo,
//             'estado' => 1,
//             'img' => "38190_LUuH1T3bzCCHZ6fr.jpg",
//             'slug' => str_slug($titulo),
//             'rss' => 0,
//             'cotizacion' => 1,
//             'cat' => 3,



//           ]);


//      }

// }
}

public function cronrNoticias()
{

     $client = new Client;

     $url = 'https://dolarhoy.com/seccion/dolar';

     $request = $client->get($url);
     $html = (string) $request->getBody();

    // Crear un Crawler para el análisis del HTML
    $crawler = new Crawler($html);

    // Obtener todos los enlaces de noticias
    $enlacesNoticias = $crawler->filter('.nota__titulo > h2 > a')->each(function (Crawler $node, $i) {
        return $node->attr('href');
    });

    //print_r($enlacesNoticias);


        // Imprimir los enlaces de las noticias
        foreach ($enlacesNoticias as $enlace) {
            echo "Enlace: https://dolarhoy.com$enlace <br>";
            
            $article = Article::where('ref_url', "https://dolarhoy.com".$enlace)->first();

            if (!$article) {
                // El artículo con la ref_url proporcionada ha sido encontrado

                $html = file_get_contents("https://dolarhoy.com".$enlace);
                $this->extraerContenido($html,"https://dolarhoy.com".$enlace);
                sleep(10); // Sleep for 1 second

            }




        }

        Storage::deleteDirectory("images/");

    // // Cargar el contenido del XML como un objeto SimpleXMLElement
    // $xml = new SimpleXMLElement($response);

    // // Acceder a los elementos del XML
    // foreach ($xml->url as $url) {
    //     echo 'URL: ' . $url->loc . '<br>';
    //     // Puedes acceder a otros elementos dentro de cada URL aquí
    //     $html = file_get_contents($url->loc);

    //     $this->extraerContenido($html);

    // }

   // $html = '<div class="grid"><div class="item is-12 cabecera"><div class="volanta"><a href="/dolar"><span>Dólar</span></a>|<span class="date">Hace 21 horas</span></div><h1 class="titulo">Dólar Hoy: A cuánto cotiza en el cierre del viernes 10 de noviembre</h1><h2 class="articulo--intro">Conocé a cuánto cotizan todos los tipos de cambio.</h2><div class="cont-p"><div class="item clear info_fecha"><div class="autor"><p class="autor__firma">Por <span class="name">redacción</span></p></div></div></div></div><div class="item body"><div class="compartir_redes"><button id="compartir-desplegable" class="boton_compartir" on="tap:compartir-desplegable.toggleClass(class=expandir)"><amp-img alt="boton-compartir" width="51" height="51" src="/amp-svg/compartir.svg" data-amp-auto-lightbox-disable="" class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" i-amphtml-layout="fixed" style="width: 51px; height: 51px; --loader-delay-offset: 43ms !important;"><img decoding="async" alt="boton-compartir" src="/amp-svg/compartir.svg" data-amp-auto-lightbox-disable="" class="i-amphtml-fill-content i-amphtml-replaced-content"></amp-img><ul><li><amp-social-share class="notapage_social i-amphtml-element i-amphtml-layout-container amp-social-share-email i-amphtml-built i-amphtml-layout" type="email" layout="container" width="20" height="20" i-amphtml-layout="container" role="button" tabindex="0" aria-label="Share by email"><amp-img class="icon-big icon_email i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" alt="email" width="20" height="20" src="/amp-svg/sobre.svg" data-amp-auto-lightbox-disable="" i-amphtml-layout="fixed" style="width: 20px; height: 20px;"><img decoding="async" alt="email" src="/amp-svg/sobre.svg" data-amp-auto-lightbox-disable="" class="i-amphtml-fill-content i-amphtml-replaced-content"></amp-img></amp-social-share></li><li><amp-social-share class="notapage_social i-amphtml-element i-amphtml-layout-container amp-social-share-telegram i-amphtml-built i-amphtml-layout" type="telegram" layout="container" width="20" height="20" data-share-endpoint="tg://msg?text=D%C3%B3lar%20Hoy%3A%20A%20cu%C3%A1nto%20cotiza%20en%20el%20cierre%20del%20viernes%2010%20de%20noviembre - https://dolarhoy.com/dolar/dolar-hoy-a-cuanto-cotiza-en-el-cierre-del-viernes-10-de-noviembre-202311101710&amp;url=https://dolarhoy.com/dolar/dolar-hoy-a-cuanto-cotiza-en-el-cierre-del-viernes-10-de-noviembre-202311101710" data-target="_blank" i-amphtml-layout="container" role="button" tabindex="0" aria-label="Share by telegram"><amp-img class="icon-big icon_telegram i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" alt="telegram" width="20" height="20" src="/amp-svg/telegram.svg" data-amp-auto-lightbox-disable="" i-amphtml-layout="fixed" style="width: 20px; height: 20px;"><img decoding="async" alt="telegram" src="/amp-svg/telegram.svg" data-amp-auto-lightbox-disable="" class="i-amphtml-fill-content i-amphtml-replaced-content"></amp-img></amp-social-share></li><li><amp-social-share class="notapage_social i-amphtml-element i-amphtml-layout-container amp-social-share-twitter i-amphtml-built i-amphtml-layout" type="twitter" layout="container" width="20" height="20" i-amphtml-layout="container" role="button" tabindex="0" aria-label="Share by twitter"><amp-img class="icon-big icon_twitter i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" alt="twitter" width="20" height="20" src="/amp-svg/twitter.svg" data-amp-auto-lightbox-disable="" i-amphtml-layout="fixed" style="width: 20px; height: 20px;"><img decoding="async" alt="twitter" src="/amp-svg/twitter.svg" data-amp-auto-lightbox-disable="" class="i-amphtml-fill-content i-amphtml-replaced-content"></amp-img></amp-social-share></li><li><amp-social-share class="notapage_social i-amphtml-element i-amphtml-layout-container amp-social-share-whatsapp i-amphtml-built i-amphtml-layout" type="whatsapp" layout="container" width="20" height="20" i-amphtml-layout="container" role="button" tabindex="0" aria-label="Share by whatsapp"><amp-img class="icon-big icon-whatsapp i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" alt="whatsapp" width="20" height="20" src="/amp-svg/whatsapp.svg" data-amp-auto-lightbox-disable="" i-amphtml-layout="fixed" style="width: 20px; height: 20px;"><img decoding="async" alt="whatsapp" src="/amp-svg/whatsapp.svg" data-amp-auto-lightbox-disable="" class="i-amphtml-fill-content i-amphtml-replaced-content"></amp-img></amp-social-share></li><li><amp-social-share class="notapage_social i-amphtml-element i-amphtml-layout-container amp-social-share-facebook i-amphtml-built i-amphtml-layout" type="facebook" layout="container" width="20" height="20" data-param-app_id="208735172470952" i-amphtml-layout="container" role="button" tabindex="0" aria-label="Share by facebook"><amp-img class="icon-big icon_facebook i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" alt="facebook" width="20" height="20" src="/amp-svg/facebook.svg" data-amp-auto-lightbox-disable="" i-amphtml-layout="fixed" style="width: 20px; height: 20px;"><img decoding="async" alt="facebook" src="/amp-svg/facebook.svg" data-amp-auto-lightbox-disable="" class="i-amphtml-fill-content i-amphtml-replaced-content"></amp-img></amp-social-share></li></ul></button></div><div class="media"><amp-img class="i-amphtml-element i-amphtml-layout-responsive i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" alt="Dólar Hoy: A cuánto cotiza en el cierre del viernes 10 de noviembre" title="Dólar Hoy: A cuánto cotiza en el cierre del viernes 10 de noviembre" width="770" height="440" layout="responsive" src="https://px.cdn.dolarhoy.com/112023/1699646543597.webp?cw=770&amp;ch=440&amp;extw=jpg" srcset="https://px.cdn.dolarhoy.com/112023/1699646543597.webp?cw=262&amp;ch=147&amp;extw=jpg 262w,https://px.cdn.dolarhoy.com/112023/1699646543597.webp?cw=360&amp;ch=202&amp;extw=jpg 360w,https://px.cdn.dolarhoy.com/112023/1699646543597.webp?cw=807&amp;ch=454&amp;extw=jpg 807w" data-amp-auto-lightbox-disable="" i-amphtml-layout="responsive"><i-amphtml-sizer slot="i-amphtml-svc" style="padding-top: 57.1429%;"></i-amphtml-sizer><amp-img class="i-amphtml-element i-amphtml-layout-responsive i-amphtml-layout-size-defined i-amphtml-built" alt="Dólar Hoy: A cuánto cotiza en el cierre del viernes 10 de noviembre" title="Dólar Hoy: A cuánto cotiza en el cierre del viernes 10 de noviembre" fallback="" width="770" height="440" layout="responsive" src="https://px.cdn.dolarhoy.com/112023/1699646543597.jpg?cw=770&amp;ch=440" srcset="https://px.cdn.dolarhoy.com/112023/1699646543597.jpg?cw=262&amp;ch=147 262w,https://px.cdn.dolarhoy.com/112023/1699646543597.jpg?cw=360&amp;ch=202 360w,https://px.cdn.dolarhoy.com/112023/1699646543597.jpg?cw=807&amp;ch=454 807w" data-amp-auto-lightbox-disable="" i-amphtml-layout="responsive"><i-amphtml-sizer slot="i-amphtml-svc" style="padding-top: 57.1429%;"></i-amphtml-sizer></amp-img><img decoding="async" sizes="(max-width: 1366px) 1074px, 100vw" alt="Dólar Hoy: A cuánto cotiza en el cierre del viernes 10 de noviembre" title="Dólar Hoy: A cuánto cotiza en el cierre del viernes 10 de noviembre" srcset="https://px.cdn.dolarhoy.com/112023/1699646543597.webp?cw=262&amp;ch=147&amp;extw=jpg 262w,https://px.cdn.dolarhoy.com/112023/1699646543597.webp?cw=360&amp;ch=202&amp;extw=jpg 360w,https://px.cdn.dolarhoy.com/112023/1699646543597.webp?cw=807&amp;ch=454&amp;extw=jpg 807w" src="https://px.cdn.dolarhoy.com/112023/1699646543597.webp?cw=770&amp;ch=440&amp;extw=jpg" data-amp-auto-lightbox-disable="" class="i-amphtml-fill-content i-amphtml-replaced-content"></amp-img><span class="epigrafe_mustang"></span></div><div class="cuerpo"><p class="h2">Dólar Oficial</p><p>Por otro lado, el&nbsp;<a target="_blank" href="https://dolarhoy.com/cotizacion-dolar-oficial" class="link"><strong>Dólar oficial</strong></a>&nbsp;aumenta de a pocos centavos día tras día y se encuentra en $368,60&nbsp;en promedio.</p><p>&nbsp;</p><p>Por su parte, el&nbsp;<strong>Dólar solidario</strong>, el cual surge de sumarle al oficial un 30% de impuesto solidario y un 35% de retención de ganancias,&nbsp;se encuentra en $639,63. Dependiendo del banco en donde se lo consulte, el precio puede variar levemente.</p><p>&nbsp;</p><p class="h2">Dólar MEP</p></div></div></div>';
    
    //$this->extraerContenido($html);


}

public function extraerContenido($html,$enlace)
{
    // Tu HTML
    //$html = '<div class="grid"><div class="item is-12 cabecera"><div class="volanta"><a href="/dolar"><span>Dólar</span></a>|<span class="date">Hace 21 horas</span></div><h1 class="titulo">Dólar Hoy: A cuánto cotiza en el cierre del viernes 10 de noviembre</h1><h2 class="articulo--intro">Conocé a cuánto cotizan todos los tipos de cambio.</h2><div class="cont-p"><div class="item clear info_fecha"><div class="autor"><p class="autor__firma">Por <span class="name">redacción</span></p></div></div></div></div><div class="item body"><div class="compartir_redes"><button id="compartir-desplegable" class="boton_compartir" on="tap:compartir-desplegable.toggleClass(class=expandir)"><amp-img alt="boton-compartir" width="51" height="51" src="/amp-svg/compartir.svg" data-amp-auto-lightbox-disable="" class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" i-amphtml-layout="fixed" style="width: 51px; height: 51px; --loader-delay-offset: 43ms !important;"><img decoding="async" alt="boton-compartir" src="/amp-svg/compartir.svg" data-amp-auto-lightbox-disable="" class="i-amphtml-fill-content i-amphtml-replaced-content"></amp-img><ul><li><amp-social-share class="notapage_social i-amphtml-element i-amphtml-layout-container amp-social-share-email i-amphtml-built i-amphtml-layout" type="email" layout="container" width="20" height="20" i-amphtml-layout="container" role="button" tabindex="0" aria-label="Share by email"><amp-img class="icon-big icon_email i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" alt="email" width="20" height="20" src="/amp-svg/sobre.svg" data-amp-auto-lightbox-disable="" i-amphtml-layout="fixed" style="width: 20px; height: 20px;"><img decoding="async" alt="email" src="/amp-svg/sobre.svg" data-amp-auto-lightbox-disable="" class="i-amphtml-fill-content i-amphtml-replaced-content"></amp-img></amp-social-share></li><li><amp-social-share class="notapage_social i-amphtml-element i-amphtml-layout-container amp-social-share-telegram i-amphtml-built i-amphtml-layout" type="telegram" layout="container" width="20" height="20" data-share-endpoint="tg://msg?text=D%C3%B3lar%20Hoy%3A%20A%20cu%C3%A1nto%20cotiza%20en%20el%20cierre%20del%20viernes%2010%20de%20noviembre - https://dolarhoy.com/dolar/dolar-hoy-a-cuanto-cotiza-en-el-cierre-del-viernes-10-de-noviembre-202311101710&amp;url=https://dolarhoy.com/dolar/dolar-hoy-a-cuanto-cotiza-en-el-cierre-del-viernes-10-de-noviembre-202311101710" data-target="_blank" i-amphtml-layout="container" role="button" tabindex="0" aria-label="Share by telegram"><amp-img class="icon-big icon_telegram i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" alt="telegram" width="20" height="20" src="/amp-svg/telegram.svg" data-amp-auto-lightbox-disable="" i-amphtml-layout="fixed" style="width: 20px; height: 20px;"><img decoding="async" alt="telegram" src="/amp-svg/telegram.svg" data-amp-auto-lightbox-disable="" class="i-amphtml-fill-content i-amphtml-replaced-content"></amp-img></amp-social-share></li><li><amp-social-share class="notapage_social i-amphtml-element i-amphtml-layout-container amp-social-share-twitter i-amphtml-built i-amphtml-layout" type="twitter" layout="container" width="20" height="20" i-amphtml-layout="container" role="button" tabindex="0" aria-label="Share by twitter"><amp-img class="icon-big icon_twitter i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" alt="twitter" width="20" height="20" src="/amp-svg/twitter.svg" data-amp-auto-lightbox-disable="" i-amphtml-layout="fixed" style="width: 20px; height: 20px;"><img decoding="async" alt="twitter" src="/amp-svg/twitter.svg" data-amp-auto-lightbox-disable="" class="i-amphtml-fill-content i-amphtml-replaced-content"></amp-img></amp-social-share></li><li><amp-social-share class="notapage_social i-amphtml-element i-amphtml-layout-container amp-social-share-whatsapp i-amphtml-built i-amphtml-layout" type="whatsapp" layout="container" width="20" height="20" i-amphtml-layout="container" role="button" tabindex="0" aria-label="Share by whatsapp"><amp-img class="icon-big icon-whatsapp i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" alt="whatsapp" width="20" height="20" src="/amp-svg/whatsapp.svg" data-amp-auto-lightbox-disable="" i-amphtml-layout="fixed" style="width: 20px; height: 20px;"><img decoding="async" alt="whatsapp" src="/amp-svg/whatsapp.svg" data-amp-auto-lightbox-disable="" class="i-amphtml-fill-content i-amphtml-replaced-content"></amp-img></amp-social-share></li><li><amp-social-share class="notapage_social i-amphtml-element i-amphtml-layout-container amp-social-share-facebook i-amphtml-built i-amphtml-layout" type="facebook" layout="container" width="20" height="20" data-param-app_id="208735172470952" i-amphtml-layout="container" role="button" tabindex="0" aria-label="Share by facebook"><amp-img class="icon-big icon_facebook i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" alt="facebook" width="20" height="20" src="/amp-svg/facebook.svg" data-amp-auto-lightbox-disable="" i-amphtml-layout="fixed" style="width: 20px; height: 20px;"><img decoding="async" alt="facebook" src="/amp-svg/facebook.svg" data-amp-auto-lightbox-disable="" class="i-amphtml-fill-content i-amphtml-replaced-content"></amp-img></amp-social-share></li></ul></button></div><div class="media"><amp-img class="i-amphtml-element i-amphtml-layout-responsive i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" alt="Dólar Hoy: A cuánto cotiza en el cierre del viernes 10 de noviembre" title="Dólar Hoy: A cuánto cotiza en el cierre del viernes 10 de noviembre" width="770" height="440" layout="responsive" src="https://px.cdn.dolarhoy.com/112023/1699646543597.webp?cw=770&amp;ch=440&amp;extw=jpg" srcset="https://px.cdn.dolarhoy.com/112023/1699646543597.webp?cw=262&amp;ch=147&amp;extw=jpg 262w,https://px.cdn.dolarhoy.com/112023/1699646543597.webp?cw=360&amp;ch=202&amp;extw=jpg 360w,https://px.cdn.dolarhoy.com/112023/1699646543597.webp?cw=807&amp;ch=454&amp;extw=jpg 807w" data-amp-auto-lightbox-disable="" i-amphtml-layout="responsive"><i-amphtml-sizer slot="i-amphtml-svc" style="padding-top: 57.1429%;"></i-amphtml-sizer><amp-img class="i-amphtml-element i-amphtml-layout-responsive i-amphtml-layout-size-defined i-amphtml-built" alt="Dólar Hoy: A cuánto cotiza en el cierre del viernes 10 de noviembre" title="Dólar Hoy: A cuánto cotiza en el cierre del viernes 10 de noviembre" fallback="" width="770" height="440" layout="responsive" src="https://px.cdn.dolarhoy.com/112023/1699646543597.jpg?cw=770&amp;ch=440" srcset="https://px.cdn.dolarhoy.com/112023/1699646543597.jpg?cw=262&amp;ch=147 262w,https://px.cdn.dolarhoy.com/112023/1699646543597.jpg?cw=360&amp;ch=202 360w,https://px.cdn.dolarhoy.com/112023/1699646543597.jpg?cw=807&amp;ch=454 807w" data-amp-auto-lightbox-disable="" i-amphtml-layout="responsive"><i-amphtml-sizer slot="i-amphtml-svc" style="padding-top: 57.1429%;"></i-amphtml-sizer></amp-img><img decoding="async" sizes="(max-width: 1366px) 1074px, 100vw" alt="Dólar Hoy: A cuánto cotiza en el cierre del viernes 10 de noviembre" title="Dólar Hoy: A cuánto cotiza en el cierre del viernes 10 de noviembre" srcset="https://px.cdn.dolarhoy.com/112023/1699646543597.webp?cw=262&amp;ch=147&amp;extw=jpg 262w,https://px.cdn.dolarhoy.com/112023/1699646543597.webp?cw=360&amp;ch=202&amp;extw=jpg 360w,https://px.cdn.dolarhoy.com/112023/1699646543597.webp?cw=807&amp;ch=454&amp;extw=jpg 807w" src="https://px.cdn.dolarhoy.com/112023/1699646543597.webp?cw=770&amp;ch=440&amp;extw=jpg" data-amp-auto-lightbox-disable="" class="i-amphtml-fill-content i-amphtml-replaced-content"></amp-img><span class="epigrafe_mustang"></span></div><div class="cuerpo"><p class="h2">Dólar Oficial</p><p>Por otro lado, el&nbsp;<a target="_blank" href="https://dolarhoy.com/cotizacion-dolar-oficial" class="link"><strong>Dólar oficial</strong></a>&nbsp;aumenta de a pocos centavos día tras día y se encuentra en $368,60&nbsp;en promedio.</p><p>&nbsp;</p><p>Por su parte, el&nbsp;<strong>Dólar solidario</strong>, el cual surge de sumarle al oficial un 30% de impuesto solidario y un 35% de retención de ganancias,&nbsp;se encuentra en $639,63. Dependiendo del banco en donde se lo consulte, el precio puede variar levemente.</p><p>&nbsp;</p><p class="h2">Dólar MEP</p></div></div></div>';

    // Parsea el HTML
    $dom = HtmlDomParser::str_get_html($html);

    // Encuentra y extrae los elementos deseados
    $titulo = $dom->find('h1.titulo', 0)->plaintext;
    $volanta = $dom->find('.volanta', 0)->plaintext;
    $bigPhoneDiv = $dom->find('.bigPhone', 0); // Cambia el índice si hay más de un elemento
    $ampImg = $bigPhoneDiv->find('amp-img', 0);
    $imageUrl = $ampImg->getAttribute('src');


    // Encuentra y extrae el cuerpo del artículo
    $cuerpo = '';
    $cuerpoElementos = $dom->find('.cuerpo p');
    foreach ($cuerpoElementos as $parrafo) {
        $cuerpo .= $parrafo->plaintext . "\n";
    }

    echo 'titulo: ' . $titulo . '<br>';
    echo 'volanta: ' . $volanta . '<br>';
    echo 'cuerpo: ' . $cuerpo . '<br>';
    echo '========================================0';
    echo "<br>";
    $nota = $cuerpo;
    $notaseo=$this->analyzeAndOptimize($nota);
    //$notaseo="fffffff";
    echo '###########################################################3<br>';

    echo $notaseo;
    // Puedes retornar los resultados o hacer lo que necesites con ellos

    echo $imageUrl;
    
    
    $notas = Article::create([
        'title' => $titulo,
        'summary' => $volanta,
        'content' => $notaseo,
        'ref_url' => $enlace,
        'category_id'=> "1",
    ]);
    
    
    // Obtener la imagen desde la URL
    $imageContents = @file_get_contents($imageUrl);


    $photosUpload = new PhotosController();



    $imgphoto = $photosUpload->uploadPhotosCron($imageContents,$notas->id);








}



public function analyzeAndOptimize($nota)
{

        $prompt='Quiero que actúes como un redactor de noticias profesional y generes un artículo de noticias de alta calidad con un título, resumen y contenido. Por favor, devuélvelo en formato JSON con las claves "titulo" para el título, "resumen" para el resumen y "contenido" para el contenido. Además, utiliza etiquetas HTML en negrita para resaltar palabras clave relevantes para SEO, solo retornar el json no agregues comentarios.';
        $chatGPTController = new ChatGPTController();
        $response = $chatGPTController->sendMessageToChatGPT($prompt,$nota);


        // Configurar y utilizar el cliente de OpenAI con la clave de API
        //$openai = new OpenAIApi("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");

        // Realizar una solicitud para completar el texto
        // $respuesta = $openai->complete([
        //     'prompt' => 'Como experto en optimización de contenidos para SEO en Google, tu tarea consiste en optimizar una noticia para que aparezca en los resultados de búsqueda de Google. Debes devolver la respuesta en un formato JSON con los campos "titulo" y "noticia". 

        //     Por favor, sé lo más específico y detallado posible sobre el contexto, el resultado deseado, la extensión, el formato y el estilo de la noticia optimizada. Recuerda incluir las mejores prácticas de SEO, como palabras clave relevantes, metaetiquetas adecuadas y estructura de URL amigable para el SEO. :'.$nota,
        //     'model' => 'text-davinci-003', // Modelo de OpenAI a utilizar
        //     'temperature' => 0.5,
        //     'max_tokens' => 100,
        // ]);

        // Obtener el texto completado de la respuesta de OpenAI
        //$textoCompletado = $respuesta['choices'][0]['text'] ?? '';

        return $response;

}

}
