@extends('layouts.websiteDolar')

@section('content')
<style>

  
.heading {
    font-family: 'Pacifico', cursive;
    margin: 35px auto 20px;
}
.form-group{
    padding-bottom:10px
}
#oamount{
    width: 100%;
}
/* CSS */
.button-9 {
  appearance: button;
  backface-visibility: hidden;
  background-color: #405cf5;
  border-radius: 6px;
  border-width: 0;
  box-shadow: rgba(50, 50, 93, .1) 0 0 0 1px inset,rgba(50, 50, 93, .1) 0 2px 5px 0,rgba(0, 0, 0, .07) 0 1px 1px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  font-family: -apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue",Ubuntu,sans-serif;
  font-size: 100%;
  height: 44px;
  line-height: 1.15;
  margin: 12px 0 0;
  outline: none;
  overflow: hidden;
  padding: 0 25px;
  position: relative;
  text-align: center;
  text-transform: none;
  transform: translateZ(0);
  transition: all .2s,box-shadow .08s ease-in;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: 100%;
}

.button-9:disabled {
  cursor: default;
}

.button-9:focus {
  box-shadow: rgba(50, 50, 93, .1) 0 0 0 1px inset, rgba(50, 50, 93, .2) 0 6px 15px 0, rgba(0, 0, 0, .1) 0 2px 2px 0, rgba(50, 151, 211, .3) 0 0 0 4px;
}

input,select {
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
  
.main {
    width: 50vw;
    margin: auto;
    padding: 30px;
    border-radius: 5px;
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
}
  
label {
    font-size: 20px;
}
  
.btn {
    width: 200px;
}
  
#finalAmount {
    font-family: 'Lobster', cursive;
    display: none;
    margin: 50px auto;
}
  
#finalAmount h2 {
    font-size: 50px;
}
  
.finalValue {
    font-family: 'Amiri', serif;
}
  
@media (max-width: 768px) {
    hr {
        width: 60%;
    }
    .main {
        width: 100%;
    }
}
  
@media (max-width: 400px) {
    .heading {
        font-size: 60px;
    }
    hr {
        width: 75%;
    }
    #finalAmount h2, .finalValue {
        font-size: 40px;
    }
}
</style>
        <div class="tcc_ctn tcc_left2">
   
            <div class="tcc_itm tcc_bc">
                <div id="fusion-static-enter:f0fHQXIOPxu6b5o" data-fusion-component="f0fHQXIOPxu6b5o"
                    style="display: none;"></div>
                    
                    <div class="cst_ctn"
>
                    <h1 class="cst_hl dkt_fs_38"><span>Conversor de Peso Argentino a Dólar</span></h1>
                    

                    <div class="cst_img_ctn cst_img_ctn_16_9">

                    <div class="main">
  
  <div class="form-group">
      <label for="oamount">
          Amount to Convert : 
      </label>
      <input type="text" 
             class="form-control searchBox" 
             placeholder="0.00" 
             id="oamount">
  </div>

  <div class="row">
      <div class="form-group col-sm-6">
          <div class="input-group mb-3">
              <div class="input-group-prepend">
                  <span class="input-group-text">From</span>
              </div>
              <select class="form-control from" id="sel1">
                  <option value="">Select One …</option>
                  <option value="USD">USD</option>
                  <option value="AED">AED</option>
                  <option value="ARS">ARS</option>
                  <option value="AUD">AUD</option>
                  <option value="BGN">BGN</option>
                  <option value="BRL">BRL</option>
                  <option value="BSD">BSD</option>
                  <option value="CAD">CAD</option>
                  <option value="CHF">CHF</option>
                  <option value="CLP">CLP</option>
                  <option value="CNY">CNY</option>
                  <option value="COP">COP</option>
                  <option value="CZK">CZK</option>
                  <option value="DKK">DKK</option>
                  <option value="DOP">DOP</option>
                  <option value="EGP">EGP</option>
                  <option value="EUR">EUR</option>
                  <option value="FJD">FJD</option>
                  <option value="GBP">GBP</option>
                  <option value="GTQ">GTQ</option>
                  <option value="HKD">HKD</option>
                  <option value="HRK">HRK</option>
                  <option value="HUF">HUF</option>
                  <option value="IDR">IDR</option>
                  <option value="ILS">ILS</option>
                  <option value="INR">INR</option>
                  <option value="ISK">ISK</option>
                  <option value="JPY">JPY</option>
                  <option value="KRW">KRW</option>
                  <option value="KZT">KZT</option>
                  <option value="MVR">MVR</option>
                  <option value="MXN">MXN</option>
                  <option value="MYR">MYR</option>
                  <option value="NOK">NOK</option>
                  <option value="NZD">NZD</option>
                  <option value="PAB">PAB</option>
                  <option value="PEN">PEN</option>
                  <option value="PHP">PHP</option>
                  <option value="PKR">PKR</option>
                  <option value="PLN">PLN</option>
                  <option value="PYG">PYG</option>
                  <option value="RON">RON</option>
                  <option value="RUB">RUB</option>
                  <option value="SAR">SAR</option>
                  <option value="SEK">SEK</option>
                  <option value="SGD">SGD</option>
                  <option value="THB">THB</option>
                  <option value="TRY">TRY</option>
                  <option value="TWD">TWD</option>
                  <option value="UAH">UAH</option>
                  <option value="UYU">UYU</option>
                  <option value="ZAR">ZAR</option>
              </select>
          </div>
      </div>

      <div class="form-group col-sm-6">
          <div class="input-group mb-3">
              <div class="input-group-prepend">
                  <span class="input-group-text">To</span>
              </div>
              <select class="form-control to" id="sel2">
                  <option value="">Select One …</option>
                  <option value="USD">USD</option>
                  <option value="AED">AED</option>
                  <option value="ARS">ARS</option>
                  <option value="AUD">AUD</option>
                  <option value="BGN">BGN</option>
                  <option value="BRL">BRL</option>
                  <option value="BSD">BSD</option>
                  <option value="CAD">CAD</option>
                  <option value="CHF">CHF</option>
                  <option value="CLP">CLP</option>
                  <option value="CNY">CNY</option>
                  <option value="COP">COP</option>
                  <option value="CZK">CZK</option>
                  <option value="DKK">DKK</option>
                  <option value="DOP">DOP</option>
                  <option value="EGP">EGP</option>
                  <option value="EUR">EUR</option>
                  <option value="FJD">FJD</option>
                  <option value="GBP">GBP</option>
                  <option value="GTQ">GTQ</option>
                  <option value="HKD">HKD</option>
                  <option value="HRK">HRK</option>
                  <option value="HUF">HUF</option>
                  <option value="IDR">IDR</option>
                  <option value="ILS">ILS</option>
                  <option value="INR">INR</option>
                  <option value="ISK">ISK</option>
                  <option value="JPY">JPY</option>
                  <option value="KRW">KRW</option>
                  <option value="KZT">KZT</option>
                  <option value="MVR">MVR</option>
                  <option value="MXN">MXN</option>
                  <option value="MYR">MYR</option>
                  <option value="NOK">NOK</option>
                  <option value="NZD">NZD</option>
                  <option value="PAB">PAB</option>
                  <option value="PEN">PEN</option>
                  <option value="PHP">PHP</option>
                  <option value="PKR">PKR</option>
                  <option value="PLN">PLN</option>
                  <option value="PYG">PYG</option>
                  <option value="RON">RON</option>
                  <option value="RUB">RUB</option>
                  <option value="SAR">SAR</option>
                  <option value="SEK">SEK</option>
                  <option value="SGD">SGD</option>
                  <option value="THB">THB</option>
                  <option value="TRY">TRY</option>
                  <option value="TWD">TWD</option>
                  <option value="UAH">UAH</option>
                  <option value="UYU">UYU</option>
                  <option value="ZAR">ZAR</option>
              </select>
          </div>
      </div>
  </div>

  <div class="text-center">

      <!-- convert button -->
      <button class="button-9 btn btn-primary convert m-2" 
              type="submit">
           Convert
    </button>

      <!-- reset button -->
      <button class="button-9 btn btn-primary m-2" 
              onclick="clearVal()">
         Reset
    </button>
  </div>

</div>

<div id="finalAmount" class="text-center">

  <h2>Importe convertido :
      <span class="finalValue" 
            style="color:green;">
 </span>
  </h2>
</div>
                        
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