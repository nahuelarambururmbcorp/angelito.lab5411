@extends('layouts.websiteDolar')

@section('content')
<style>
.monto {
  border: none;
  -webkit-appearance: none;
  -ms-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background: #f2f2f2;
  padding: 12px;
  border-radius: 3px;
  width: 250px;
  font-size: 14px;
}
span{font-weight:500!important}.subtitle{border-bottom:1px solid rgba(0,0,0,.2)}.title{width:100%;padding-bottom:3%}h2{margin-bottom:2%!important;font-size:1.5rem!important}.fab{color:rgba(0,0,0,.2)}form{width:100%}section{width:100%;border-bottom:1px solid rgba(0,0,0,.2);padding-top:2%;padding-bottom:2%}.boxes{display:flex;justify-items:center}.check{width:34%;text-align:center}.question{width:100%}.form-check-input:checked{background:blue}.hijos{width:100%;display:flex}.number{text-align:center}.correccion{height:fit-content}.suma{margin-bottom:1%!important;cursor:pointer}.resta{margin-bottom:1%!important;cursor:pointer}.row{margin:0!important}.domestica{margin:0% .5%;width:100%}.extra{color:rgba(71,71,73,.61)}.button{display:flex;justify-content:center}button{border-radius:1.3rem!important;width:35%}.final{padding-bottom:0%}.calc{display:flex;flex-wrap:wrap;margin-top:4%;padding-left:1%}.line{width:100%;display:flex;align-items:center}.info{width:50%}.tax{width:50%;font-size:2rem;font-weight:320;align-self:flex-start}.red{color:red}.green{color:#09a009}.hide{display:none}.total{padding-top:1%}.sueldo{border-top:1px solid rgba(0,0,0,.2)}.llave{width:50%;margin-left:50%}footer{width:100%;display:flex;justify-items:center}.foot{padding-top:2%;text-align:center!important;margin-bottom:0%}@media(max-width:1000px){.correccion{margin-bottom:0%!important}}@media(max-width:900px){body{width:80%}}@media(max-width:850px){.hijos{display:block}.hide{display:none}.row{display:block!important}.col-md-6{max-width:100%!important;padding-left:0%!important}.col-lg-6{padding-left:0%!important}.col-lg-4{padding-left:0%!important}.info{font-size:1.3rem}.h4{margin-top:3%}}@media(max-width:800px){.tax{padding-left:5%}}@media(max-width:700px){.info{font-size:1.1rem}.tax{font-size:1.7rem;padding-left:5%}button{width:90%}.llave{width:100%;margin-left:0}}@media(max-width:600px){body{width:90%}.boxes{display:block}.check{width:100%;margin-bottom:5%;text-align:left}.question{width:75%}.info{font-size:1rem}}@media(max-width:550px){.question{width:70%}.result{padding-top:2%}.line{flex-wrap:wrap}.info{font-size:1rem;width:100%}.tax{width:100%}}@media(max-width:450px){.input-group-text{padding:.37rem .4rem!important}.question{width:65%}}@media(max-width:450px){.question{width:60%}}@media(max-width:350px){.question{width:100%}.check{text-align:center}.text{padding-bottom:4%}.line{display:block}}
</style>
        <div class="tcc_ctn tcc_left2">
   
            <div class="tcc_itm tcc_bc">
                <div id="fusion-static-enter:f0fHQXIOPxu6b5o" data-fusion-component="f0fHQXIOPxu6b5o"
                    style="display: none;"></div>
                    
                    <div class="cst_ctn"
>
                    <h1 class="cst_hl dkt_fs_38"><span>Conversor de Peso Argentino a Dólar</span></h1>
                    

                    <div class="cst_img_ctn cst_img_ctn_16_9">
                        

                    <form action="" method="GET">

<section>

<label for="">Ingresá tu sueldo bruto</label>
<div class="input-group mb-3">
<span class="input-group-text">$</span>
<input type="text" class="form-control monto" aria-label="Amount (to the nearest dollar)">
<span class="input-group-text">.00</span>
</div>

<div class="boxes">
<div class="check">
<label for="" class="question">¿Tenés cónyuge a cargo?</label>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="conyuge" value="no">
<label class="form-check-label" for="">No</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="conyuge" value="si">
<label class="form-check-label" for="">Si</label>
</div>
</div>
<div class="check">
<label for="jubilado" class="question">¿Sos jubilado?</label>
<div class="form-check form-check-inline jubilado">
<input class="form-check-input" type="radio" name="jubilado" value="no">
<label class="form-check-label" for="">No</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="jubilado" value="si">
<label class="form-check-label" for="">Si</label>
</div>
</div>
<div class="check">
<label for="" class="question">¿Vivís en zona patagónica?</label>
<div class="form-check form-check-inline patNo">
<input class="form-check-input" type="radio" name="patagonia" value="no">
<label class="form-check-label" for="">No</label>
</div>
<div class="form-check form-check-inline patSi">
<input class="form-check-input" type="radio" name="patagonia" value="si">
<label class="form-check-label" for="">Si</label>
</div>
</div>
</div>
</section>

<section class="input-group">

<label for="" class="col-lg-6">¿Cuántos hijos menores de 18 años tenés?</label>
<div class="input-group mb-3 col-lg-4 correccion">
<span class="input-group-text suma">+</span>
<input type="text" class="form-control number" value=0>
<span class="input-group-text resta">-</span>
</div>

<div class="hijos">
<label for="" class=" col-md-6">¿Cómo los deducís?</label>
<div class="col-md-6">
<div class="form-check">
<input class="form-check-input" type="radio" name="options" value=0>
<label class="form-check-label" for="">0% Si los deduce tu cónyuge</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="options" value=0.5>
<label class="form-check-label" for="">50% Si los deducen mitad cada uno</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="options" value=1>
<label class="form-check-label" for="">100% Si los deducís solo vos</label>
</div>
</div>
</div>
</section>

<section class="row">

<div class="col-md-6">
<label for="">¿Alquilás?</label>
<div class="input-group mb-3 inputAlq">
<span class="input-group-text">$</span>
<input type="text" class="form-control alquiler" aria-label="Amount (to the nearest dollar)">
<span class="input-group-text">.00</span>
</div>

<div class="extra"><p>Ingresá el importe mensual. Podés deducir el 40% con topes.</p></div>
</div>
<div class="col-md-6">

<label for="">¿Tenés un crédito hipotecario?</label>
<div class="input-group mb-3 inputCred">
<span class="input-group-text">$</span>
<input type="text" class="form-control credito" aria-label="Amount (to the nearest dollar)">
<span class="input-group-text">.00</span>
</div>

<div class="extra"><p>Ingresá lo que pagás cada mes en intereses</p></div>
</div>
<div class="domestica">

<label for="">¿Tenés empleada doméstica?</label>
<div class="input-group mb-3">
<span class="input-group-text">$</span>
<input type="text" class="form-control empleada" aria-label="Amount (to the nearest dollar)">
<span class="input-group-text">.00</span>
</div>

<div class="extra"><p>Ingresá lo que pagás cada mes en remuneración y contribuciones</p></div>
</div>
</section>

<section class="button">
<button type="submit" class="btn btn-primary btn-lg">Calcular</button>
</section>

<section class="final">
<h4 class="result">Resultados:</h4>

<div class="calc">
<div class="line">
<p class="info">Impuesto anual:</p>
<div style="width: 60%;">
<p class="tax red" id="impAnual" style="width: 100%;">$0,00</p>
<p class="tax" id="impAnualViejo" style="display: none; font-size: large; width: 100%;">$0,00</p>
</div>
</div>
<div class="line">
<p class="info">Impuesto mensual:</p>
<div style="width: 60%;">
<p class="tax red" id="impMensual" style="width: 100%;">$0,00</p>
<p class="tax" id="impMensualViejo" style="display: none; font-size: large; width: 100%;">$0,00</p>
</div>
</div>
<div class="line">
<p class="info">Alícuota:</p>
<div style="width: 60%;">
<p class="tax green" id="alicuota" style="width: 100%;">0,00%</p >
<p class="tax" id="alicuotaVieja" style="display: none; font-size: large; width: 100%;">0,00%</p >
</div>
</div>
<div class="line">
<p class="info">Alícuota marginal que aplica:</p>
<div style="width: 60%;">
<p class="tax green" id="aliMarginal" style="width: 100%;">0,00%</p>
<p class="tax" id="aliMarginalVieja" style="display: none; font-size: large; width: 100%;">0,00%</p>
</div>
</div>
</div>

<div class="line sueldo" style="flex-wrap: wrap;">
<div class="line">
<h4 class="info h4">Sueldo en mano:</h4>
<p class="tax total">$0,00</p>
</div>
<p class="llave" style="display: none; font-size: small; text-align: left;">* La reglamentación del Poder Ejecutivo definirá la alícuota que pagarán los sueldos brutos de entre $150.000 y $173.000</p>
</div>
</section>
</form>

                    </div>
                        
         
                </div>
                
                <div id="fusion-static-exit:f0fHQXIOPxu6b5o" data-fusion-component="f0fHQXIOPxu6b5o"
                    style="display: none;"></div>
                    
            </div>
        </div>


<br>
<br>
        <div class="nd-titleBar" style="color:black"><a href="#">ÚLTIMAS NOTICIAS</a></div>

        <div class="ndc_ctn ndc_sc4">
        @foreach($masvistas as $masvista)
            <div id="fusion-static-enter:f0fwcrwwAG0t7wV" data-fusion-component="f0fwcrwwAG0t7wV"
                style="display: none;"></div>
            <a class="cst_ctn"
                href="/{{ $masvista->slug }}"
                rel="canonical" aria-label="infobae story">
                <h2 class="cst_hl dkt_fs_22"><span>{{$masvista->title}}</span></h2>
                <div class="cst_img_ctn cst_img_ctn_16_9">
                @if($masvista->cover_photo)
                                   
                                   <amp-img alt="{{$masvista->title}}"
                                   src="{{ $masvista->cover_photo->thumbUrl }}"
                                   srcset="{{ $masvista->cover_photo->thumbUrl }} 640w"
                                   width="16" height="9" layout="responsive">
                                   </amp-img>
                              
                 @endif
                </div>
            </a>
            <div id="fusion-static-exit:f0fwcrwwAG0t7wV" data-fusion-component="f0fwcrwwAG0t7wV" style="display: none;">
            </div>
        @endforeach
        </div>



<script>
    // include api for currency change
const api = "https://api.exchangerate-api.com/v4/latest/USD";
  
  // for selecting different controls
  var search = document.querySelector(".searchBox");
  var convert = document.querySelector(".convert");
  var fromCurrecy = document.querySelector(".from");
  var toCurrecy = document.querySelector(".to");
  var finalValue = document.querySelector(".finalValue");
  var finalAmount = document.getElementById("finalAmount");
  var resultFrom;
  var resultTo;
  var searchValue;
    
  // Event when currency is changed
  fromCurrecy.addEventListener('change', (event) => {
      resultFrom = `${event.target.value}`;
  });
    
  // Event when currency is changed
  toCurrecy.addEventListener('change', (event) => {
      resultTo = `${event.target.value}`;
  });
    
  search.addEventListener('input', updateValue);
    
  // function for updating value
  function updateValue(e) {
      searchValue = e.target.value;
  }
    
  // when user clicks, it calls function getresults 
  convert.addEventListener("click", getResults);
    
  // function getresults
  function getResults() {
      fetch(`${api}`)
          .then(currency => {
              return currency.json();
          }).then(displayResults);
  }
    
  // display results after convertion
  function displayResults(currency) {
      let fromRate = currency.rates[resultFrom];
      let toRate = currency.rates[resultTo];
      finalValue.innerHTML = 
         ((toRate / fromRate) * searchValue).toFixed(2);
      finalAmount.style.display = "block";
  }
    
  // when user click on reset button
  function clearVal() {
      window.location.reload();
      document.getElementsByClassName("finalValue").innerHTML = "";
  };
</script>


@endsection