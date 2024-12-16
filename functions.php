<?php
function custom_inline_css() {
    ?>

<script>
	jQuery(window).load(function () {
		setTimeout(function(){ 
jQuery("body").append("<style type='text/css' nitro-exclude=''>@font-face {font-family: 'ubuntumedium'; src: url('/wp-content/themes/rize-reviews/fonts/ubuntu/ubuntu-medium-webfont.woff') format('woff'); font-weight: normal;font-style: normal; font-display:swap;}@font-face {font-family: 'ubunturegular';src: url('/wp-content/themes/rize-reviews/fonts/ubuntu/ubuntu-regular-webfont.woff') format('woff'); font-weight: normal;font-style: normal;font-display:swap;}@font-face {font-family: 'ubuntubold';src:url('/wp-content/themes/rize-reviews/fonts/ubuntu/ubuntu-bold-webfont.woff') format('woff'); font-weight: normal; font-style: normal; font-display:swap;}@font-face { font-family: 'rizereviews'; src:  url('/wp-content/themes/rize-reviews/fonts/rizereviews.eot?2toygq'); src:  url('/wp-content/themes/rize-reviews/fonts/rizereviews.eot?2toygq#iefix') format('embedded-opentype'), url('/wp-content/themes/rize-reviews/fonts/rizereviews.ttf?2toygq') format('truetype'), url('/wp-content/themes/rize-reviews/fonts/rizereviews.woff?2toygq') format('woff'), url('/wp-content/themes/rize-reviews/fonts/rizereviews.svg?2toygq#rizereviews') format('svg'); font-weight: normal; font-style: normal; font-display:swap; }@font-face { font-family: 'rizeiconnew'; src:  url('/wp-content/themes/rize-reviews/fonts/rizeiconnew.eot?9035ha'); src:  url('/wp-content/themes/rize-reviews/fonts/rizeiconnew.eot?9035ha#iefix') format('embedded-opentype'), url('/wp-content/themes/rize-reviews/fonts/rizeiconnew.ttf?9035ha') format('truetype'), url('/wp-content/themes/rize-reviews/fonts/rizeiconnew.woff?9035ha') format('woff'), url('/wp-content/themes/rize-reviews/fonts/rizeiconnew.svg?9035ha#rizeiconnew') format('svg'); font-weight: normal; font-style: normal; font-display:swap; }</style>"); 
		1000});		
	});	
</script>
<style type="text/css" nitro-exclude="" id="onload-customfont"> 
html body, html body *{font-family:arial!important;} 
</style>

<style type="text/css" nitro-exclude="">
.custom-show-design-ipad{display: none;}
.portfolio-item div.overlay h3.post-title a {font-size: 18px !important; padding: 0 10px !important;}
.social-groth-image img {height: 260px; width: 348px;}
.generation-success-image .fl-html img { width: 257px; height: 364px; }
.generation-banner .fl-html img {width: 377px; height: 313px;}
p{font-size: 18px;line-height: 28px;}
.home-svg-logo-back ul.five-logo-svg li:nth-child(1) {
    display: none;
}
.fab,.far{ font-family: 'ubunturegular';}
.lity-facebookvideo .lity-container, .lity-googlemaps .lity-container, .lity-iframe .lity-container, .lity-vimeo .lity-container, .lity-youtube .lity-container {
    width: 100%;
    max-width: 964px;
}
@media screen and (max-width:820px){
	.custom-show-design-ipad{display: block !important;}
	.custom-hide-design-ipad{display: none;}
	.portfolio-item div.overlay h3.post-title a {font-size: 16px !important;}
}
.custom-home-btn, a.call-btn.fl-button, .custom-btn .fl-button-wrap a.fl-button, .custom-btn .fl-button-wrap a.fl-button span {
    font-family: 'ubuntubold', Arial !important;
}
h4.fl-heading {
    font-family: 'ubunturegular', Arial !important;
}
body .reviewshakeWidget__carouselContainer{padding-top:10px;}
body .reviewshakeWidget__carouselContainer .reviewshakeWidget__sliderComponent[data-slides='1'][data-summary-header='true'] { width: calc(300px + 0px); }
body .reviewshakeWidget__carouselContainer .reviewshakeWidget__sliderComponent[data-slides='1'][data-summary-header='true'] .reviewshakeWidget__slider .reviewshakeWidget__review{flex: 0 0 300px;}

body {background-color: #fff;color: #1a3a6b;font-family: 'ubunturegular', Arial; font-display: swap; font-weight: 400;font-size: 18px;position: relative;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;margin:0px; overflow-x: hidden;}
ul li{list-style: none;}
/*Topbar CSS*/
html body img{max-width:100%;}
.custom-topbar-content{background-color:#1c3a6b; color: #fff; padding:10px 45px; height:auto; min-height:45px; text-align: center; font-size: 16px; font-weight:400; line-height: 24px; position:relative; top: 0; left: 0; width: 100%; z-index:9999; -webkit-transition: all 0.3s;  -moz-transition: all 0.3s; transition: all 0.3s;}
.custom-topbar-content a{color:#FFF; font-weight:600; border-bottom: 2px solid transparent;display: inline-block; text-decoration: none;}
.custom-topbar-content a:hover, .custom-topbar-content a:focus{border-bottom: 2px solid #FFF; color: #FFF;}
.custom-topbar-content button.topbar-close{background: none; font-size: 35px; color: #FFF; padding: 0; height: 45px; display: inline-block; position: absolute; right: 20px; top: 0; line-height: 45px; outline: none; font-weight: 600; border: none!important;}
body.remove-topbar .custom-topbar-content{height:0px; min-height: auto; padding:0px 60px; font-size:0;}
body.remove-topbar .custom-topbar-content button.topbar-close{height: 0; font-size: 0;}
header.site-header.shrink {position:absolute; background: #fff; -webkit-box-shadow: 0 0px 4px rgba(0, 0, 0, 0.3); -moz-box-shadow: 0 0px 4px rgba(0, 0, 0, 0.3); box-shadow: 0 0px 4px rgba(0, 0, 0, 0.3); transition:all .2s ease-in;}
    
html body.remove-topbar #shiftnav-toggle-main.shiftnav-toggle-edge-right{top:0!important;}	
@keyframes slide-down {0% {opacity: 0; transform: translateY(-100%);} 100% {opacity: 1;transform: translateY(0);}}
/* top header phone number */
.top-header { display: flex; justify-content: flex-end; max-height: 35px;align-items: center;}
.header-phone-number {padding: 1px 20px 0 0;}
.header-phone-number a { color: #1a3a6b; font-family: 'ubuntubold', Arial; display: flex; align-items: center; }
.header-phone-number .header-phn-icon {height: 17px; width: 17px; margin-right: 7px; background-position: center; }
.fa-phone-alt:before{display: none;}
.header-phone-number a img {margin: 7px 5px 0; float: left;}
.header-phone-number a svg.svg-inline--fa.header-phn-icon{height:17px; width:17px; margin: 5px 5px 0 0; overflow: hidden;}
.header-phone-number a svg.svg-inline--fa.header-phn-icon path{fill: #4ea26a;}
header.fl-builder-global-templates-locked.fl-theme-builder-header-sticky.fl-theme-builder-header-scrolled.shrink #client-header {display: none;}
.header-phone-number a:hover {color: #4ea26a;}
.header-phone-number a:focus{outline: none;}
.header-content .fl-button-wrap { max-height: 40px; overflow: hidden; }
body .site-container .fl-theme-builder-header-sticky .fl-module-icon .fl-icon-text a {color:#fff;text-decoration:none;}
body .site-container .fl-theme-builder-header-sticky .fl-module-icon .fl-icon-text a:hover { color:#fff;text-decoration:underline;}
div.shiftnav li.menu-item.shiftnav-sub-accordion.shiftnav-active>ul.sub-menu { overflow-y: auto; scrollbar-width: none;}
div.shiftnav li.menu-item.shiftnav-sub-accordion.shiftnav-active>ul.sub-menu::-webkit-scrollbar{width: 0px;background-color: #F5F5F5;}
body .site-container .fl-theme-builder-header-sticky .fl-module-menu {text-align: center;}
html body.topbarClass {padding-top: 150px !important;}
html body {padding-top: 96px !important;}
html body .full-width {margin-top: 0;}
body.topbarClass .site-container header.fl-builder-content {top: 45px !important;position: fixed;background-color: #fff;height: 105px!important}
a {font-weight: bold;}  
body .site-container .fl-theme-builder-header-sticky .secondary-header {color:#9b9b9b;}
header .fl-col.fl-node-5b5a1a8ab7937.fl-col-small {max-width: 18%;width: 100%;}
body .site-container .fl-theme-builder-header-sticky .fl-module-menu .menu > li.current-menu-item:first-child > a {background:none;}
#main-header .fl-menu .fl-menu-toggle::before {border-color: #FF7333;}
#main-header .fl-menu .sub-menu {margin-left: 0;}
.fl-theme-builder-header-sticky .home-header .fl-module-heading h1, .fl-theme-builder-header-sticky .home-header .fl-module-heading h2 {line-height: 18px;}
.fl-theme-builder-header-sticky .home-header .fl-module-heading h1 a, 
.fl-theme-builder-header-sticky .home-header .fl-module-heading h2 a ,
header.fl-builder-content.fl-builder-global-templates-locked .fl-module-heading h1 a,
header.fl-builder-content.fl-builder-global-templates-locked .fl-module-heading h2 a,
header.fl-builder-content .fl-module-content.fl-node-content h1.fl-heading a,  header.fl-builder-content .fl-module-content.fl-node-content h2.fl-heading a {width:162px;height:68px; display:inline-block; background-repeat: no-repeat !important;}
.fl-theme-builder-header-sticky .home-header .fl-module-heading h1 .fl-heading-text, 
.fl-theme-builder-header-sticky .home-header .fl-module-heading h2 .fl-heading-text,
header.fl-builder-content.fl-builder-global-templates-locked .fl-module-heading h1 a span,
 header.fl-builder-content.fl-builder-global-templates-locked .fl-module-heading h2 a span {display:none;}
header.fl-builder-content.fl-theme-builder-header-sticky.fl-theme-builder-header-scrolled.shrink.fl-theme-builder-header-shrink div#client-header {display: none !important;} 
.fl-theme-builder-header-scrolled.right-nav #client-header {display: block;}
.fl-theme-builder-header-sticky.fl-theme-builder-header-scrolled .home-header .fl-module-heading h1 a, 
.fl-theme-builder-header-sticky.fl-theme-builder-header-scrolled .home-header .fl-module-heading h2 a   {background: url(/wp-content/themes/rize-reviews/images/rize-sticky-logo.png) no-repeat;width: 75px;height: 40px;/* margin-top: 15px;*/}
.secondary-top-nav { display: inline-block;float: right;font-size: 11px; background: #98c3c9;padding: 9px 12px;color: #fff; -webkit-border-bottom-right-radius: 16px;-webkit-border-bottom-left-radius: 16px;-moz-border-radius-bottomright: 16px;-moz-border-radius-bottomleft: 16px;border-bottom-right-radius: 16px;border-bottom-left-radius: 16px;letter-spacing: 0.5px;font-family: 'ubuntumedium', Arial;}
.secondary-top-nav a {color:#fff;}
.secondary-top-nav a:hover { color:#fff; text-decoration:underline;}
.support-goat svg.rize-footergoat { height: 275px; position: relative; -webkit-transform: rotate(15deg); -moz-transform: rotate(15deg); transform: rotate(15deg); margin-bottom: 0; bottom: -20px; }
.industry-online-services .fl-col-small {width: 33.33%;}
.custom-restaurant-banner .fl-col-group {padding-top: 20px;}
.font-47 {font-size: 47px;color: #1a3a6b; font-family: "ubuntubold", Arial; margin-bottom: 0; line-height: 1.25em;margin-top: 0;}
body .fl-builder-content[data-type="header"].fl-theme-builder-header-sticky,
body.home .fl-builder-content[data-type="header"].fl-theme-builder-header-scrolled,
.home .fl-builder-content[data-type="header"].fl-builder-content {background: #fff !important;-webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.16);-moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.16);box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.16);}
.home-header .fl-row-content-wrap .fl-col-group {-ms-flex-wrap:nowrap;}
.home-header .fl-row-content-wrap {padding-top: 0px;padding-bottom: 0 !important;} 
body .shiftnav .shiftnav-nav{margin-top: 180px;}
body #shiftnav-toggle-main {background-color: #fff;height: 105px !important;}
body .shiftnav .shiftnav-menu-title { display: none;}
body .shiftnav li.menu-item .shiftnav-submenu-activation, body .shiftnav .shiftnav-panel-close {background-color: transparent !important;}
body .shiftnav li.menu-item a {text-transform:capitalize !important;text-align: right;color: #1c3b69;font-size: 18px; font-family: 'ubunturegular', Arial !important; -webkit-box-shadow: 0px 2px 5px 0px rgba(204,204,204,0.5); -moz-box-shadow: 0px 2px 5px 0px rgba(204,204,204,0.5);box-shadow: 0px 2px 5px 0px rgba(204,204,204,0.5);}
body .shiftnav ul.shiftnav-menu{-webkit-box-shadow: 0px 2px 5px 0px rgba(204,204,204,0.5);-moz-box-shadow: 0px 2px 5px 0px rgba(204,204,204,0.5);box-shadow: 0px 2px 5px 0px rgba(204,204,204,0.5);}
body .shiftnav-inner {border: 0px;position: relative;}
body .shiftnav-toggle-main-block a {width: 194px !important;height:75px !important;display: inline-block;
    text-indent: -999999px;float: left; background-repeat: no-repeat;}
body #shiftnav-toggle-main i.fa.fa-bars { width: 75px;height: 65px; display: block; background-repeat: no-repeat;}
body #shiftnav-toggle-main i.fa.fa-bars:before {display: none;}
.shiftnav-open #shiftnav-toggle-main i.fa.fa-bars {display: none;}
body #shiftnav-toggle-main.shiftnav-toggle-edge-right .shiftnav-toggle-burger {margin-top:14px;}
body.logged-in.admin-bar #shiftnav-toggle-main.shiftnav-toggle-edge-right .shiftnav-toggle-burger {margin-top:0;}
body .shiftnav li.menu-item .shiftnav-submenu-activation,
body .shiftnav .shiftnav-panel-close {background-color: transparent !important;}
body .shiftnav li.menu-item .shiftnav-submenu-activation:hover,
body .shiftnav li.menu-item .shiftnav-submenu-activation:active,
.shiftnav.shiftnav-shiftnav-main ul.shiftnav-menu li.menu-item > .shiftnav-target:hover,
.shiftnav.shiftnav-shiftnav-main ul.shiftnav-menu li.menu-item > .shiftnav-target:active{background-color: transparent !important;color: #4ea26a;}
body .shiftnav:after {box-shadow: none !important;}
body .shiftnav .shiftnav-panel-close {color: #1c3b69;width: 75px; height: 65px;margin-right: 15px; margin-top: 17px; top: 0; background-repeat: no-repeat;}
.shiftnav .shiftnav-nav{top:0;}
body .shiftnav .shiftnav-panel-close i{display: none;}
body .shiftnav.shiftnav-skin-standard-dark ul.shiftnav-menu li.menu-item .shiftnav-target{border-bottom: 0px;}
body .shiftnav.shiftnav-shiftnav-main ul.shiftnav-menu li.menu-item.shiftnav-active > .shiftnav-submenu-activation{color:#1c3b69;}
body .shiftnav.shiftnav-skin-standard-dark li.menu-item .shiftnav-submenu-activation {border-bottom: 0px !important; background: transparent;background-color:transparent !important;}
body .shiftnav.shiftnav-skin-standard-dark li.menu-item .shiftnav-submenu-activation:hover {background: none;background-color: transparent !important;}
body .shiftnav.shiftnav-shiftnav-main ul.shiftnav-menu li.menu-item.shiftnav-active > .shiftnav-target{ color: #4ea26a;}
body .shiftnav.shiftnav-shiftnav-main ul.shiftnav-menu li.menu-item.shiftnav-active > .shiftnav-target:hover{background: none;color: #4ea26a;}
body .shiftnav li.menu-item .shiftnav-submenu-activation{ -webkit-box-shadow: 2px 0px 5px 0px rgba(204,204,204,0.5); -moz-box-shadow: 2px 0px 5px 0px rgba(204,204,204,0.5);box-shadow: 2px 0px 5px 0px rgba(204,204,204,0.5);}
body .shiftnav .shiftnav-submenu-activation i.fa { margin-top: -12px;font-size: 20px; color: #1c3b69;}
body .shiftnav .shiftnav-submenu-activation:hover i.fa { color: #4ea26a;}
body .shiftnav.shiftnav-nojs.shiftnav-skin-standard-dark ul.shiftnav-menu li.menu-item>.shiftnav-target:hover,
body .shiftnav.shiftnav-skin-standard-dark ul.shiftnav-menu li.menu-item.shiftnav-in-transition>.shiftnav-target{ background: none;color: #4ea26a;}
body .shiftnav .shift-btn { background-color: #ffcc00 !important;border: none !important; box-shadow: none !important;border-radius: 32px !important;line-height: 24px !important;outline: none;padding: 12px 48px !important;transition: background-color 0.5s ease 0s; font-size: 22px;
    font-family: 'ubunturegular', Arial; !important; color: #1a3a6b;position: relative;top: 140px;left: 20px;}
body .shiftnav .shift-btn:hover {background-color: #1a3a6b !important;color: #fff !important;}
body .shiftnav ul.shiftnav-menu li.shiftnav-sub-accordion a {padding-right: 55px !important;}
body .shiftnav .shift-bottom {position: relative; bottom: 0px;top: 40px; right: 25px; text-align: right;}
body .shiftnav .shift-bottom a.shift-tell{ font-size: 24px;font-family: 'ubunturegular', Arial; }
body .shiftnav .shift-bottom a{font-size: 18px;font-family: 'ubunturegular', Arial; color: #1c3b69; display: block;}
 .header-contact { display: flex;display: -webkit-flex; justify-content: flex-end; font-size: 30px; font-family: 'ubuntubold', Arial; line-height: 30px;color: #4ea26a;}   
 .fl-builder-content[data-type="header"].fl-theme-builder-header-sticky{transform: none !important;}
.header-contact p {padding-left: 5px; margin: 0;}
body .header-contact p.phone-no a {text-decoration: none !important;color: #1a3a6b;}
body .header-contact p.phone-no a:focus{outline: none;}
.header-contact p.phone-no {color: #1a3a6b;}
.online-service-inner-wrapper .left-image svg {height: 50px;width: 50px;}
body > .site-container > header.fl-builder-content[data-type="header"] .fl-module-menu .menu>li.current-menu-item>a{background-color:transparent !important;}
 
@media screen and (min-width:961px){
	.home-header .fl-row-content-wrap .fl-col-group {height: auto;}
	.home-header .fl-col.fl-node-5b5aed1b242a6{padding-top:15px;}
	header.site-header .wrap .title-area p .main-logo img { display: block; width: 160px; height: 67px; }
	
}
span.thrive-logo-footer{display: inline-block;}
span.thrive-logo-footer svg {width: 55px;height: 27px; position:relative;top: 3px;}
span.thrive-logo-footer strong {padding-right: 0;}
.main-site-footer .fl-row-content-wrap > .fl-row-fixed-width,
.copyright-footer .fl-row-content-wrap > .fl-row-fixed-width {max-width: 1050px;}
.main-site-footer > .fl-row-content-wrap > .fl-row-content > .fl-col-group > .fl-col:last-of-type {border-right:none;}
.main-site-footer .footer-menus a {font-size:14px; font-family: 'ubuntubold', Arial;}
.main-site-footer .footer-menus a:hover {text-decoration:underline;}
.main-site-footer h4 {font-size: 14px;color: #ffd140 !important;font-family: 'ubuntubold', Arial;margin-bottom: 3px;}
#footer_badges {display: inline-block;}
.main-site-footer .foot-call-number {color: #ffd140 !important;font-size: 24px !important;font-family: 'ubuntubold', Arial;letter-spacing: 1.5px;}
.main-site-footer .foot-call-number:hover {color:#fff !important; text-decoration:none !important;}
.main-site-footer .first-para {margin-bottom: 20px;}
.main-site-footer .footer-support-links .fl-rich-text {text-align: right;}
.main-site-footer .footer-support-links .fl-rich-text a { font-size:16px; }
.main-site-footer .footer-support-links .fl-rich-text a:hover { text-decoration:underline; }
.main-site-footer .footer-icons .fl-icon .dashicons-facebook-alt::before {font-size: 22px;}
.main-site-footer .footer-icons .fl-icon .dashicons-twitter::before {font-size: 20px;}
.main-site-footer .footer-icons .fl-icon .fa-linkedin-in::before {font-size: 18px;}
.main-site-footer .footer-icons .fl-icon .dashicons-googleplus::before {font-size: 25px;}
.support-goat img {float:right;margin:0px;}
.main-site-footer .footer-icons .fl-icon-group {width: 106px;margin: 0 auto 6px;}
.main-site-footer .footer-icons .fl-icon-group .fl-icon {margin-bottom: 5px;}
.main-site-footer .footer-icons .fl-icon a .dashicons-facebook-alt {padding: 7px 0px;}
.main-site-footer .footer-icons .fl-icon a .dashicons-twitter {padding: 9px 0px;}
.main-site-footer .footer-icons .fl-icon a .fa-linkedin-in {padding: 0px 0px;}
.main-site-footer .footer-icons .fl-icon a .dashicons-googleplus {padding: 6px 0px;}
.main-site-footer .footer-icons .fl-icon a i {background-color: transparent;border: 2px solid #ffd140;border-radius: 100%;color: #ffd140 !important;display: inline-block;margin-right: 10px;opacity: 1;text-align: center;width: 40px;height: 40px;line-height: 34px;}
.main-site-footer .footer-icons .fl-icon a:hover i {background-color: #ffd140;color: #fff !important;}
.main-site-footer .footer-icons .fl-icon .fi-social-youtube:before {font-size: 27px;line-height: 37px;vertical-align: top;}
.footer-icons {border-left: 1px solid #ffd140;border-right: 1px solid #ffd140;}
.footer-links .fl-col-group.fl-node-5fc128a2d86b4 { display: flex; justify-content: center; align-items: center; }
.fl-col.fl-node-5fc128a2d8763.fl-col-small a { overflow: hidden; width: 138px; height: 68px; display: block; }
.fl-col.fl-node-5fc128a2d8766.fl-col-small a { width: 100px; height: 70px; display: block; }
.footer-social-icon-svg span.fl-icon a.facebook-icon { height: 40px; width: 40px; }
.footer-icons div#footer_badges .fl-photo-content.fl-photo-img-png a{overflow: hidden; width: 138px; height: 68px; display: block; }
.footer-social-icon-svg span.fl-icon a.twitter-icon { height: 40px; width: 40px; }
.footer-social-icon-svg span.fl-icon a.linkedin-icon { height: 40px; width: 40px;}
.footer-social-icon-svg span.fl-icon a.youtube-icon { height: 27px; width: 27px; position: relative; left: -2px; }
.footer-social-icon-svg span.fl-icon.youtube-icon { border: 2px solid #ffd13f; padding: 6px; height: 40px; width: 40px; border-radius: 100%; }
.home-industries-wrapper ul { display: flex; flex-wrap: wrap; justify-content: space-between; width: 100%; margin-bottom: 35px; overflow: hidden; }
.home-industries-wrapper ul li { max-height: 187px; padding: 22px 20px; background: #fff; overflow: hidden; -webkit-border-top-left-radius: 16px; -webkit-border-bottom-right-radius: 16px; -moz-border-radius-topleft: 16px; -moz-border-radius-bottomright: 16px; border-top-left-radius: 16px; border-bottom-right-radius: 16px; cursor: pointer; list-style: none; margin: 0 10px; text-align: center; border: 1px solid #d2dbe9; }
.home-svg-logo-back .five-logo-svg { justify-content: center; padding-left: 0; display: flex; display: -webkit-flex; flex-wrap: wrap; -webkit-flex-wrap: wrap; list-style-type: none; margin-bottom: 0; }
.home-svg-logo-back .five-logo-svg li { padding: 0 15px; width: 20%; list-style-type: none; }
.fl-node-5eb42b0da49a9.support-goat .fl-html {height: 275px;position: relative;-webkit-transform: rotate(15deg);-moz-transform: rotate(15deg);transform: rotate(15deg);margin-bottom: 0; bottom: -20px;}
.copyright-footer {font-size: 14px;line-height: 28px;}
.copyright-footer a:first-of-type { padding: 0px 10px 0px 0px;}
.copyright-footer a {padding: 0px 10px;text-decoration:none;}
.copyright-footer a:hover {text-decoration:underline;}
.copyright-footer strong { font-family: 'ubunturegular', Arial; margin-left: 10px;}
.svg {display: inline-block;margin-left: -4px; position: relative; top: -5px; vertical-align: bottom;}
div#footer_badges .fl-html {text-align: center;}
#footer_badges .fl-module-content.fl-node-content {margin-right: 0;}
.footer-menus {min-height: 279px;}
.fl-node-5b58c2b973d2f.footer-menus {min-height:auto;}
.main-site-footer .footer-icons .fl-icon .fi-social-youtube:before {margin-top: 0;}
.shrink div#client-header { display: none;}
li.menu-item.menu-item-has-children.fl-has-submenu  {position: relative;}
.home li.menu-item.menu-item-has-children.fl-has-submenu:before {background-size: 0;border-left: 6px solid transparent;border-right: 6px solid transparent;border-top: 6px solid #1a3a6b;position: absolute;content: "";top: 17px;right: 0;width: 0;height: 0;background-image: none;}
 li.menu-item.menu-item-has-children.fl-has-submenu:before {background-size: 0;border-left: 6px solid transparent;border-right: 6px solid transparent;border-top: 6px solid #1a3a6b;position: absolute;content: "";top: 22px;right: 0;width: 0;height: 0;background-image: none;} 
.home .home-header .fl-col.fl-node-5b5a1a8ab78fc {width: auto;} 
.fl-node-5b5a1a8ab787e > .fl-row-content-wrap{padding-top: 0 !important;padding-bottom: 0;}
.fl-col.fl-node-5ec4196241fc0, .fl-col.fl-node-5e7c672a5cb82.fl-col-small,
.fl-col.fl-node-5ed0ed1d7c908.fl-col-small, .fl-col.fl-node-5ec4196241fc0, .fl-col.fl-node-5f97e747bb4fc.fl-col-small, .fl-col.fl-node-5f91fde19a3c3.fl-col-small, .fl-col.fl-node-5b68c32fa727e.fl-col-small,
.fl-col.fl-node-5ed0ed1d7c90b.fl-col-small, body .sc-banner-image-wrap .fl-col.fl-node-600704a4e09b0.fl-col-small, body.page.page-id-118256 .fl-col-group.fl-node-5bbecd048dc54 .fl-col-small, body.page-id-118256 .gb-kiva.industry-intro-content .fl-col-group.fl-node-5bbe6fb9ed7e8.fl-col-group-nested .fl-col {float: left;max-width: 50%;width: 100%;}
.angies-top-image {display: none;}
.main-banner.review-response-banner .fl-col.fl-node-5ed0ed1d7c90b img{margin:auto!important; height: auto;}
.fl-module-content { margin: 20px; }
.fl-row.fl-row-full-width .custom-btn a.fl-button{font-size: 20px !important;}
h3.font-24 {font-size: 24px;}
.fl-row.fl-row-full-width.fl-row-bg-none.fl-node-5e569319e1b8e.main-banner.review-response-banner {padding-top: 0 !important;}
.custom-restaurant-banner .restaurant-top-banner-content {text-align: center !important; padding-bottom: 160px; }
.fl-module.fl-module-html.fl-node-5ed0ed712f862 .fl-html a { text-align: center; width: 100%; height: 100%; display: block; }
.fl-node-5e569959a94ab.banner-bottom-section .fl-col-small { float: left; max-width: 50%; width: 100%; }
.main-banner {padding: 25px 0 0;}
.fl-node-5f97e7b70f689 > .fl-module-content { margin-top: 0px; margin-bottom: 50px;}
.fl-node-5f97e6f36f37a.review-generation-banner-bg > .fl-row-content-wrap{padding-bottom: 400px;}
.custom-restaurant-banner .fl-col-group .fl-col.fl-col-has-cols .fl-col-small {width: 50%; float: left;}
.review-generation-banner-bg .fl-row-content-wrap {padding-bottom: 300px;}
.fl-col.fl-node-5fa5adeb3fd44 {text-align: center;margin: 0 auto; float: none;}
.industry-hero-desc {margin-bottom: 0;margin-top: 0;position: relative;top: -30px;}
body.single.single-portfolio.postid-125542 h1.entry-title {max-width: 500px;text-transform: inherit;font-size: 35px;}
.single .content .entry .three-fourths {margin: 0 auto;float: left;}
.single-post article .three-fourths.first { width: 70% !important; float: left; padding-right: 20px; }
.single-post article .one-fourth.sidebar { width: 30%; margin-left: 10px;float: left;  }
.single-post article .one-fourth.sidebar { width: 30%; margin-left: 0 !important; padding-left: 10px; }
.custom-restaurant-banner .custom-restaurant-top-wrapper {margin: 0 auto; display: block; float: none;}
.fl-node-5ecfe7c74fa56 > .fl-module-content { margin-top: 0px;margin-bottom: 50px;}
.page-id-120997 .site-inner, .page-id-120997 .site-inner .subpage-container {min-height: calc(90vh - 435px);}
.page-id-120997 main.content p#breadcrumbs {text-align: center;}
#breadcrumbs { margin-bottom: 0px; background: #459f65; border-top: 1px solid #98d2ad; text-align: center; padding: 10px; }
body.post-template-default.single.single-post article .author-box img {max-width: 70px !important;width: 70px !important;height: auto !important;}
.rize-work .fl-col-group.fl-node-5d0771658478a .fl-col.fl-node-5d077165847ca.fl-col-small { width: 22.67%; }
.rize-work .fl-col-group.fl-node-5d0771658478a .fl-col.fl-node-5d0771658480a { width: 77.33%; }
.rize-work .fl-col-group.fl-node-5d07716584846 .fl-col.fl-node-5d07716584881 { float: none; text-align: center; }
.rize-work .fl-col-group.fl-node-5d07750fa4417 .rize-work-line { margin: 0 auto; display: block; }
.rize-work .fl-col-group.fl-node-5d0771658496d .fl-col.fl-node-5d077165849a8 { width: 69.95%; }
.rize-work .fl-col-group.fl-node-5d0771658496d .fl-col.fl-node-5d077165849e2.fl-col-small { width: 30.05%; }
.fl-node-5d07716584746 > .fl-row-content-wrap { padding-top: 40px; padding-bottom: 60px; }
.fl-node-5d077165848bb > .fl-module-content { margin-bottom: 10px; }
.fl-node-5d07716584746 .fl-row-content { max-width: 950px; }
.fl-node-5d07716584b1b > .fl-module-content {margin-top: 10px;}
.fl-node-5d07716584b1b .fl-button-wrap {text-align: center;}
.rize-work a.fl-button {padding: 10px 35px !important; font-size: 18px;}
.rize-work h1 {font-size: 48px !important;}
.rize-work .features-header-subtext h2 {font-size: 37px;}
.fl-node-5ec5546805ec2 { margin-top: 50px; }
.rrw-txt-back > .fl-row-content-wrap .fl-row-content.fl-row-fixed-width.fl-node-content {margin-top: -180px;background: #fff;}
.fl-node-5ec41a74b03a6 > .fl-module-content {margin-bottom: 0px;}
.custom-restaurant-banner .restaurant-top-banner-content p {color: #1a3a6b;}
.fl-node-5ffef4e1d0839 .fl-col.fl-node-5ffef4e1d083e {width: 63.37%;float: left;}
.fl-node-5ffef4e1d0839 .fl-node-5ffef4e1d083f { width: 36.63%; float: left; }
.fl-node-5e5693269fc99 > .fl-module-content { margin-bottom: 5px;}
body.explore-template-default.single.single-explore .subpage-header header.entry-header p.single_meta_container {display: none;}
.custom-col-banner-width { width: 50%; }
.custom-col-banner-width-2 { width: 53%; }
.custom-col-banner-width-3 { width: 55%; }
body.page-id-124694 .custom-btn.demo.banner-demo-btn a.fl-button { display: inline-block; background: #fc0; color: #1a3a6b; text-transform: uppercase; border-radius: 15px !important; font-family: "ubuntubold", Arial;line-height: 2em !important;padding-left: 40px !important;padding-right: 40px !important; }
.sc-banner-image-wrap{margin-top: 40px;}
.fl-node-6005c01aae8d2 > .fl-module-content {margin-top: 0px; margin-bottom: 80px;}
body.page.page-id-118256 .fl-col.fl-node-5bbecd048dfd9.fl-col-small {padding-top: 30px;text-align: center;}
.smb-cloud-bg {position: relative;top: -130px; height: 100px;width: 100%;}
.smb-cloud-bg .fl-row-content-wrap {height: 130px;}
.fl-module.fl-module-photo.fl-node-5bc0a836c468d .fl-module-content.fl-node-content {margin-bottom: 0;}
body.page-id-118256 .fl-node-5bbec4a162a3a.industry-hero .fl-row-content-wrap {padding-bottom: 0;}
body.page-id-118256 .gb-kiva.industry-intro-content {padding-top: 50px;}
.fl-node-5bbec4a162a3a .fl-row-content {max-width: 1160px;}
.dpsp-column-4.dpsp-has-spacing .dpsp-networks-btns-wrapper li {width: 23.5%;}
html body article.portfolio-item:hover header {display: flex !important;}
a.dpsp-network-btn.dpsp-linkedin.dpsp-last span:before, a.dpsp-network-btn.dpsp-linkedin.dpsp-last span:after{width: auto;}
.single.single-post header.site-header {top: 0;}
.single.single-post .site-inner {padding-top: 15px !important; max-width: 100% !important;}
body .feature-box {margin: 0 15px !important; width: 21% !important;background:#fff;}


@media only screen and (max-width: 2400px){
	.industry-intro-content {margin-top: 0px;}
}
@media screen and (max-width: 1920px) and (min-width: 1199px){
.fl-builder-content.fl-builder-content-121047.fl-builder-content-primary {
    margin-top: 30px;}
}
@media screen and (min-width: 1367px){
.home-header .fl-col .fl-module-menu > .fl-module-content {margin: 0 -20px 0 0;}
}

@media screen and (min-width: 1199px){
    body > .site-container > header { left: 0; position: fixed; right: 0;  width: 100%; z-index: 100; background: #fff !important; -webkit-box-shadow: 0 2px 5px 0 rgba(0,0,0,.16); -moz-box-shadow: 0 2px 5px 0 rgba(0,0,0,.16); box-shadow: 0 2px 5px 0 rgba(0,0,0,.16); }
}
@media screen and (min-width: 1095px){ .fl-node-5bc0a836c468d .fl-photo { text-align: right; }}

@media (min-width: 1025px){
.industry-hero {padding-top: 80px;}
.industry-hero .fl-photo-img {top: 0;right: 30px;overflow: hidden;object-fit: cover;}
}

@media screen and (max-width: 1680px) and (min-width: 1366px){
.review-generation-banner-bg .fl-row-content-wrap {padding-bottom: 220px;}

}

@media screen and (max-width:1023px){
	body article.type-post { display: flex; flex-wrap: wrap; }
	body.single-post article .three-fourths.first{width:100% !important;padding-right:0 !important;}
	body.single-post article .one-fourth.sidebar{width:100% !important;height: auto !important;}
	body.single-post article .one-fourth.sidebar div#custom_gform_wrapper_back { position: relative !important; height: auto !important; }
}

@media screen and (min-width: 1024px){
.home-header .button-with-border a.fl-button {padding: 8px 10px !important;}
}

@media screen and (min-width:960px){	
body > .site-container > header{background:#FFF!important; -webkit-transform: initial!important; -moz-transform: initial!important; transform: initial!important;}
	#shiftnav-toggle-main, .shiftnav-toggle-mobile {display: none;}	
}
@media screen and (min-width:961px) and (max-width:1008px){
	body.topbarClass {padding-top: 150px !important;}
	html body { padding-top: 105px !important; }
}

@media screen and (max-width:960px){ 
  html body header.entry-header {display: block !important;}
	#shiftnav-toggle-main, .shiftnav-toggle-mobile{display: block !important;}
  html body.remove-topbar {padding-top: 95px !important;}
  body.topbarClass.shiftnav-disable-shift-body {padding-top: 150px !important;}
  body.shiftnav-disable-shift-body {padding-top: 105px !important;}
  body #shiftnav-toggle-main.shiftnav-toggle-edge-right .shiftnav-toggle-burger {margin-top: 0px;padding-top: 20px;padding-right: 0;}

}

@media screen and (max-width:768px){
	div#shiftnav-main.shiftnav  {max-height: 100vh !important; height:100%; }
	body.shiftnav-lock.shiftnav-open{position: fixed;}
  .fl-col.fl-node-5ec4196241fc0, .fl-col.fl-node-5e7c672a5cb82.fl-col-small,
.fl-col.fl-node-5ed0ed1d7c908.fl-col-small, .fl-col.fl-node-5ec4196241fc0, .fl-col.fl-node-5f97e747bb4fc.fl-col-small, .fl-col.fl-node-5f91fde19a3c3.fl-col-small, .fl-col.fl-node-5ed0ed1d7c90b.fl-col-small,body .sc-banner-image-wrap .fl-col.fl-node-600704a4e09b0.fl-col-small, body.page.page-id-118256 .fl-col-group.fl-node-5bbecd048dc54 .fl-col-small, body.page-id-118256 .gb-kiva.industry-intro-content .fl-col-group.fl-node-5bbe6fb9ed7e8.fl-col-group-nested .fl-col {float: none; text-align: center;max-width:100%;}
.custom-restaurant-banner .restaurant-top-banner-content {padding-bottom: 0 !important;}
.custom-restaurant-banner .restaurant-top-banner-content h1 {font-size: 30px;}
.custom-restaurant-banner .fl-col-group .fl-col.fl-col-has-cols .fl-col-small{width: 100%;}
.support-goat .fl-module-content.fl-node-content .fl-html { background-position: center; }
article.post-123817.page.type-page.status-publish.entry {padding: 0px !important;}
.custom-restaurant-banner .restaurant-top-banner-content p {color: #1a3a6b;}
body.post-template-default.single.single-post section.subpage-header, .page-template-default .subpage-header,
.page-template-rize-reviews-api-template section.subpage-header {padding-top: 50px;}
.fl-node-5c5b3c595fc93 iframe , .fl-node-5c756cd1ac439 iframe{ width: 100%; height: 300px; }
.rize-work .fl-col-group.fl-node-5d0771658478a .fl-col.fl-node-5d077165847ca.fl-col-small,.rize-work .fl-col-group.fl-node-5d0771658478a .fl-col.fl-node-5d0771658480a,.rize-work .fl-col-group.fl-node-5d07716584846 .fl-col.fl-node-5d07716584881,.rize-work .fl-col-group.fl-node-5d07750fa4417 .rize-work-line,.rize-work .fl-col-group.fl-node-5d0771658496d .fl-col.fl-node-5d077165849a8,.rize-work .fl-col-group.fl-node-5d0771658496d .fl-col.fl-node-5d077165849e2.fl-col-small { width: 100%; text-align: center; }
.fl-node-5ffef4e1d0839 .fl-col.fl-node-5ffef4e1d083e {width: 100%;float: none; text-align: center;}
.fl-node-5ffef4e1d0839 .fl-node-5ffef4e1d083f { width: 100%;float: none; text-align: center; }
.et_pb_section .et_pb_post_title h1{font-size: 28px !important;}
body.archive.tax-business-category .et_pb_section {margin-top: 65px;}
body.archive.tax-project_type.term-plumbing section.subpage-header {padding-top: 80px;}
.page-id-123547 .fl-node-5f97e6f36f37a.review-generation-banner-bg > .fl-row-content-wrap {padding-bottom: 300px; background-position: bottom;}
}

@media screen and (min-width:768px) and (max-width:768px){
  .scroll-svg-img .scrol-icon.scroll-down {margin-top: 90px;}
  .survey-compaign-services h4 { font-size: 20px;min-height: auto;}
  .main-site-footer .footer-icons .fl-col-small .review-rating a{display: block !important;}
  body .feature-box { margin: 0 15px !important; max-width: 21% !important; background: #fff; width: 100% !important; clear: initial !important; float: left; }
}

@media screen and (max-width:767px){
  .scrollTo { margin-top: 0 !important; } 
  html body header.entry-header { display: block !important;}
  .custom-topbar-content {padding: 10px 30px 10px 10px; font-size: 14px !important;word-break: break-word;}
  .custom-topbar-content button.topbar-close { right: 10px !important; font-size: 25px !important; }
  body.home .shiftnav .shift-btn {right: auto;left: 20px;}
  .homepage-banner .banner-text-wrapper p br{display: none;}
  section.homepage-banner:after{background-position: bottom;}
  .angies-top-image {display: block !important;}
  .fl-node-5e9739db6e77a .fl-button-wrap {text-align: center !important;}
  .custom-topbar-content button.topbar-close {right: 10px;font-size: 25px;}
  .font-47{font-size: 35px;}
  .main-banner { padding: 0; text-align: center; }
  .custom-col-banner-width { width:100%; }
.custom-col-banner-width-2 { width:100%; }
.custom-col-banner-width-3 { width:100%; }
.survey-compaign-services h4 {font-size: 20px;}
.home-industries-wrapper a.custom-home-btn { margin-bottom: 50px !important; }
body .feature-box { max-width: 90% !important; width: 100% !important; margin: 0 auto !important; }
}

@media screen and (min-width:501px) and (max-width:960px){
	body.topbarClass #shiftnav-toggle-main.shiftnav-toggle-edge-right{top: 45px !important}
	body #shiftnav-toggle-main.shiftnav-toggle-edge-right {top:0px!important;}
}
@media screen and (max-width:782px){
    html body.topbarClass #shiftnav-toggle-main.shiftnav-toggle-edge-right { top: 46px!important; height: 100px !important; }
    header.site-header .wrap{padding:20px !important;}
}
@media screen and (min-width:641px){
	div.ginput_complex.ginput_container.gf_name_has_2 span {width: 50%;}
}

@media screen and (max-width: 520px) and (min-width: 100px){
    body .shiftnav .shift-btn {top: 90px !important;}
    .homepage-banner .banner-text-wrapper h1 br{display: block !important;}
    .font-47 {font-size: 28px !important;}
    .fl-row.fl-row-full-width .custom-btn a.fl-button{font-size: 14px !important;}
    .support-goat .fl-module-content.fl-node-content { margin-bottom: 0; text-align: center; position: relative; overflow: hidden; } 
    body.topbarClass .custom-topbar-content{font-size: 14px !important;}
    body.topbarClass .custom-topbar-content button.topbar-close {display: inline-block;}
    html body.topbarClass {padding-top: 150px !important;}    
}

@media screen and (max-width:494px){
    html.topbarClass body #shiftnav-toggle-main.shiftnav-toggle-edge-right { top: 70px!important;}
      body.topbarClass.shiftnav-disable-shift-body #shiftnav-toggle-main.shiftnav-toggle-edge-right {top: 70px!important;}
      .dpsp-networks-btns-wrapper .dpsp-network-btn .dpsp-network-icon {width: 100% !important;}
      ul.dpsp-networks-btns-wrapper.dpsp-networks-btns-content.dpsp-has-button-icon-animation span.dpsp-network-label-wrapper {visibility: hidden !important;}
      body.topbarClass .custom-topbar-content{max-width: 480px !important;}
       html body.topbarClass #shiftnav-toggle-main.shiftnav-toggle-edge-right{top: 70px !important}
       .home-integrate ul li { display: block; margin: 0 auto 30px !important; }
       .home-integrate ul li.capterra-icon {margin-top: 70px !important;}
        .industry-we-serve-banner .fl-row-content-wrap .fl-rich-text p { margin-bottom: 0;font-size: 17px;max-height: 117px; min-height: 117px; overflow: hidden; }
}

@media screen and (max-width: 420px) and (min-width: 300px){
div.custom-topbar-content {padding: 10px 30px 10px 10px;overflow: hidden;}
header.site-header .wrap .title-area p .main-logo img{width: 130px; height: 55px;}
}

@media screen and (max-width: 375px){
    div.shiftnav ul.shiftnav-menu li.menu-item>.shiftnav-target {padding:15px 25px;}
    .banner-video a {height: 200px;}
    .homepage-banner .banner-text-wrapper a.custom-home-btn { font-size: 14px; max-width: 230px !important; height: 42px; padding: 10px 15px; min-width: 230px !important; }
    div.custom-topbar-content button.topbar-close {right: 10px;top: 12px;}
    body #shiftnav-toggle-main.shiftnav-toggle-edge-right .shiftnav-toggle-burger {margin-top: 0;}
   .single .subpage-header header h1 {font-size: 19px;line-height: 30px;}
   .site-header .wrap {padding: 20px 15px 20px !important;}
   header.site-header .menu-toggle-btn{height: 20px !important; width: 20px !important;}
   header.site-header .menu-toggle-btn span{margin:3px 0 !important;}
   .header-phone-number a {font-size: 16px !important;padding-left: 20px !important;}
   body.post-template-default.single.single-post section.subpage-header {padding-top: 0 !important;}
   .single .three-fourths .entry-content img { /*max-height: 197px; min-height: 197px; object-fit: cover;*/ width: 100%; height: 100%; overflow: hidden; }  
}

.fl-node-5b6a16e32f128 > .fl-module-content {margin-top: 20px; margin-bottom:0px;}
.rizeteam .fl-module-photo img {max-height: 320px; min-height: 320px; width: 290px;object-fit: cover;}
.restaurant-bottom-services-wrapper {background-position: center 102%;padding-bottom: 0px;}
.fl-module.fl-module-html.fl-node-5f9970ed69827 {margin-left: 25px;}
body .new-home-business.business-compare .inner-business-section #load-html-custom{height: 100%;overflow: auto;}
body .reviewmgr-lookup, .reviews-scanner-common .reviewmgr-lookup{max-height: 610px!important;height: 100%;overflow: auto !important;}

.home-reviews-wrapper .inner-reviews br,
.main-site-footer .fl-node-5b58c2b973d6c.footer-support-links p br,
.fl-node-5b6debf8ac8fc.rize-contact-page br {display: inline!important;}
@media screen and (max-width:767px) {
	body .reviewmgr-lookup, .reviews-scanner-common .reviewmgr-lookup { max-height: inherit !important; height: 100%; overflow: auto !important; min-height: inherit !important; }
}
.custom-btn .fl-button-wrap a.fl-button:hover span {
    color: #fff !important;
}
</style>

  <?php

   } 
add_action('wp_head', 'custom_inline_css');

add_filter( 'genesis_seo_title', 'rizereviews_remove_genesis_seo_title_text', 10, 3 );
/**
 * Remove the text from the title.
 */
function rizereviews_remove_genesis_seo_title_text( $title, $inside, $wrap ) {
	return genesis_markup( array(
		'open'    => sprintf( "<{$wrap} %s>", genesis_attr( 'site-title' ) ),
		'close'   => "</{$wrap}>",
		'content' => sprintf( '<a href="%s" class="main-logo"><img src="/wp-content/themes/rize-reviews/images/rize-logo-new2.svg" /></a>', trailingslashit( home_url() ) ),
		'context' => 'site-title',
		'echo'    => false,
		'params'  => array(
			'wrap' => $wrap,
		),
	) );
}

function my_logged_in_redirect() { 
     
	if (!is_user_logged_in() )
    {
		while ( have_posts() ) : the_post();  
		if ( get_the_ID()=='121390' )
		{
        wp_redirect( get_permalink( 121387 ) );
         exit;
		} 
		endwhile;
    }     
}
add_action( 'template_redirect', 'my_logged_in_redirect' ); 

//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Setup Theme
include_once( get_stylesheet_directory() . '/lib/theme-defaults.php' );

//* Reviews Post type
require_once('reviews-post-type.php');

//* Subpage Header Code
require_once('subpage-header.php');

//* Set Localization (do not remove)
load_child_theme_textdomain( 'parallax', apply_filters( 'child_theme_textdomain', get_stylesheet_directory() . '/languages', 'parallax' ) );

//* Add Image upload to WordPress Theme Customizer
add_action( 'customize_register', 'parallax_customizer' );
function parallax_customizer(){
	require_once( get_stylesheet_directory() . '/lib/customize.php' );
}

//* Include Section Image CSS
include_once( get_stylesheet_directory() . '/lib/output.php' );

// Load custom post types
include_once( get_stylesheet_directory() . '/lib/cpt-portfolio.php' );

global $blogurl;
$blogurl = get_stylesheet_directory_uri();

//* Enqueue scripts and styles
add_action( 'wp_enqueue_scripts', 'parallax_enqueue_scripts_styles' );
function parallax_enqueue_scripts_styles() {
	
	$stylesheet_dir_path = get_stylesheet_directory() . '/';

	// Styles

	wp_enqueue_style('common-css-new', '/wp-content/themes/rize-reviews/css/combine_custom_min_new_01_final.css?'.time() );
	// wp_enqueue_style( 'all-css-new', '/wp-content/themes/rize-reviews/css/allnew_style.css?'.time() );
	wp_enqueue_style( 'dashicons' );
	wp_enqueue_style( 'lity', get_stylesheet_directory_uri() . '/css/lity.css', array() );
	wp_enqueue_style( 'link-styles', get_stylesheet_directory_uri() . '/css/link-styles.css', array() );
	wp_enqueue_style( 'icomoon-fonts', get_stylesheet_directory_uri() . '/rize-icon.css', array() );
	wp_enqueue_script( 'scriptsnew', get_stylesheet_directory_uri() . '/js/scriptsnew.js', array() );
	wp_enqueue_script( 'validateJs', get_stylesheet_directory_uri() . '/js/jquery.validate.min.js', array() );
	wp_enqueue_script( 'lity', get_stylesheet_directory_uri() . '/js/lity.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'customjs', get_stylesheet_directory_uri() . '/js/custom.js?'.time(), array( 'jquery' ));


if ( is_page(array('120325')) ) { 
	wp_enqueue_style( '2week-trial', '/wp-content/uploads/bb-plugin/cache/120325-layout-draft.css?1639402623&ver=5.5.7?');
	
}

if ( is_page(array('121154','117323','121269','121047','121706','121809','122051','122131','119151','123547','117545','117473','118041','118024','118046','118032','117979','119911','119873','119899','119737','119787','119834','119691','119850','119858','119746','119932','119606')) ) { 
	  wp_dequeue_style( array('bcct_style','tm_clicktotweet','monsterinsights-popular-posts-style','tm_clicktotweet','rize-reviews','reviewstream-css','lity'));
}
if ( is_page('121269') ) { 
    wp_enqueue_style( 'reputation-css-new', get_stylesheet_directory_uri() . '/css/reputation-management.css?'.time() );
}

}

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

// Add Search to Primary Nav
//add_filter( 'genesis_header', 'genesis_search_primary_nav_menu', 10 );
function genesis_search_primary_nav_menu( $menu ){
    locate_template( array( 'searchform-header.php' ), true );
}

//* Add support for structural wraps
add_theme_support( 'genesis-structural-wraps', array(
	'header',
	'nav',
	'subnav',
	'breadcrumb',
	'footer-widgets',
	'footer',
) );

// Add Read More Link to Excerpts
add_filter('excerpt_more', 'get_read_more_link');
add_filter( 'the_content_more_link', 'get_read_more_link' );
function get_read_more_link() {
   return '...&nbsp;<a class="readmore" href="' . get_permalink() . '">Read&nbsp;More &raquo;</a>';
}

//* Add support for 4-column footer widgets
add_theme_support( 'genesis-footer-widgets', 0 );

//* Customize the entry meta in the entry header (requires HTML5 theme support)
add_filter( 'genesis_post_info', 'sp_post_info_filter' );
function sp_post_info_filter($post_info) {
	$post_info = '[post_date] [post_comments] [post_edit]';
	return $post_info;
}

//* Custom Breadcrumb Hook 
function breadcrumb_hook() {
	do_action('breadcrumb_hook');
}

//* Remove breadcrumbs and reposition them
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );
add_action( 'breadcrumb_hook', 'genesis_do_breadcrumbs', 12 );

// Modify Breadcrumbs Args
add_filter( 'genesis_breadcrumb_args', 'malcolm_breadcrumb_args' );
function malcolm_breadcrumb_args( $args ) {
	$args['prefix'] = '<div class="breadcrumbs"><div class="wrap">';
	$args['suffix'] = '</div></div>';
	$args['sep'] = ' <span class="bread-sep">></span> ';
	$args['heirarchial_attachments'] = true;
	$args['heirarchial_categories'] = true;
	$args['display'] = true;
	$args['labels']['prefix'] = '';
    return $args;
}

// Add Header Links Widget to Header
//add_action( 'genesis_before', 'header_widget', 1 );
	function header_widget() {
	if (is_active_sidebar( 'header-links' ) ) {
 	genesis_widget_area( 'header-links', array(
		'before' => '<div class="header-links">',
		'after'  => '</div>',
	) );
}}

// Unregister unused sidebar
//unregister_sidebar( 'header-right' );

// Previous / Next Post Navigation Filter For Genesis Pagination
add_filter( 'genesis_prev_link_text', 'gt_review_prev_link_text' );
function gt_review_prev_link_text() {
        $prevlink = '&laquo;';
        return $prevlink;
}
add_filter( 'genesis_next_link_text', 'gt_review_next_link_text' );
function gt_review_next_link_text() {
        $nextlink = '&raquo;';
        return $nextlink;
}

/* Changing the Copyright text */
function genesischild_footer_creds_text () {
	global $blogurl;
 	echo '<div class="clearboth copy-line">
 			<div class="copyright first">
 				<p><span id="copy">Copyright &copy; '. date("Y") .' - All rights reserved</span> <span class="format-pipe">&#124;</span>  
	 			<a href="/sitemap/">Site Map</a>  <span>&#124;</span>  
	 			<a href="/privacy-policy/">Privacy Policy</a>  
	 			</p>
 			</div>
 			<div class="credits">
 				<span>Site by</span>
 				<a target="_blank" href="https://thriveagency.com/">
 					<img class="svg" src="'.  $blogurl . '/images/thrive-logo.png" alt="Web Design by Thrive Internet Marketing">
 				</a>
 			</div>
 		  </div>';
}
add_filter( 'genesis_footer_creds_text', 'genesischild_footer_creds_text' );


//* Reposition the primary navigation menu
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_after_header', 'genesis_do_nav', 12 );

// Add Additional Image Sizes
add_image_size( 'genesis-post-thumbnail', 163, 108, true );
add_image_size( 'subpage-header', 1600, 162, true );
add_image_size( 'news-thumb', 260, 150, false );
add_image_size( 'news-full', 800, 300, false );
add_image_size( 'sidebar-thumb', 200, 150, false );
add_image_size( 'mailchimp', 564, 9999, false );
add_image_size( 'post-grid', 350, 9999, false );

// Gravity Forms confirmation anchor on all forms
add_filter( 'gform_confirmation_anchor', '__return_true' );
add_filter( 'gform_confirmation_anchor_3', '__return_false' );


// Button Shortcode
// Usage: [button url="https://www.google.com"] Button Shortcode [/button]
function button_shortcode($atts, $content = null) {
  extract( shortcode_atts( array(
	  'url' => '#',
	  'target' => '_self',
	  'onclick' => '',

  ), $atts ) 
);
return '<a target="' . $target . '" href="' . $url . '" class="button" onClick="' . $onclick . '"><span>' . do_shortcode($content) . '</span></a>';
}
add_shortcode('button', 'button_shortcode');

// Link Shortcode
// Usage: [link url=”tel:1-817-447-9194″ onClick=”onClick=”ga(‘send’, ‘event’, { eventCategory: ‘Click to Call’, eventAction: ‘Clicked Phone Number’, eventLabel: ‘Header Number’});”]
function link_shortcode($atts, $content = null) {
  extract( shortcode_atts( array(
	  'url' => '#',
	  'target' => '_self',
	  'onclick' => '',
  ), $atts ) 
);
return '<a target="' . $target . '" href="' . $url . '" onClick="' . $onclick . '">' . do_shortcode($content) . '</a>';
}
add_shortcode('link', 'link_shortcode');

//* Declare WooCommerce support
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

// Advance Custom field for Scheme Markups will be output under wphead tag
add_action('wp_head', 'add_scripts_to_wphead');
function add_scripts_to_wphead() {
	if( get_field('custom_javascript') ):	
		echo get_field('custom_javascript', 43);
	endif;
}

// Run shortcodes in Text Widgets
add_filter('widget_text', 'do_shortcode');

// Remove Assets from HOME page only
function remove_home_assets() {
  if (is_front_page()) {
      
	  wp_dequeue_style('font-awesome-5');
	  wp_dequeue_style('bb-builder-fa');
	  wp_dequeue_style('jetpack_css');
	  wp_dequeue_style('yoast-seo-adminbar');
	  wp_dequeue_style('ultralight_css');
	  wp_dequeue_style('gllr_stylesheet');
	  wp_dequeue_style('gllr_fancybox_stylesheet');
	  wp_dequeue_style('widgetopts-styles');
	  wp_dequeue_style('jetpack_likes');
	  wp_dequeue_style('portfolio');
	  wp_dequeue_style('all-css-new');	  
	  wp_dequeue_style('gforms_formsmain_css');
	  wp_dequeue_style('gforms_ready_class_css');
	  wp_dequeue_style('gravityformsmailchimp_form_settings');
	  wp_dequeue_style('rize-reviews');
	  wp_dequeue_style('mv-grow-frontend-style');
	  wp_dequeue_style('common-css-new');
	  wp_dequeue_style('icomoon-fonts');
	  wp_dequeue_style('reviewstream-css');
	  wp_dequeue_style('dashicons-css');
	  wp_dequeue_style('link-styles');
	  wp_dequeue_style('duplicate-post');
	  wp_dequeue_style('load-fa');
	  wp_dequeue_style('shiftnav');
	  wp_dequeue_style('pp-animate');
	  // wp_dequeue_style('fl-builder-layout-bundle-9c7be66b166271be2f736c414430c8a6');
	  wp_dequeue_style('monsterinsights-popular-posts-style');
	      // wp_dequeue_style('fl-builder-layout-bundle-9c7be66b166271be2f736c414430c8a6');
	  
	  //Popups and masanory
	  //wp_dequeue_script( 'spup-public' );
	  wp_dequeue_script( 'vimeo' );
      wp_dequeue_script( 'jquery-bind-first' );
      wp_dequeue_script( 'js-cookie' );
	  
	  //click to tweet
      wp_dequeue_style('bcct_style');
      wp_dequeue_style('tm_clicktotweet');

      //Popups plugin
      wp_dequeue_style('spu-public-css');
      wp_dequeue_style('spup-public-css');
	  
	  //Gravity Form
	  wp_dequeue_script( 'send_cookie_js' );
	  wp_deregister_script('gform_placeholder');
	  wp_dequeue_script('gform_placeholder');

  }

  if ( is_page('119128') ) {     
	  wp_dequeue_style('font-awesome-5');
	  wp_dequeue_style('bb-builder-fa');
	  wp_dequeue_style('jetpack_css');
	  wp_dequeue_style('yoast-seo-adminbar');
	  wp_dequeue_style('ultralight_css');
	  wp_dequeue_style('gllr_stylesheet');
	  wp_dequeue_style('gllr_fancybox_stylesheet');
	  wp_dequeue_style('widgetopts-styles');
	  wp_dequeue_style('jetpack_likes');
	  wp_dequeue_style('portfolio');
	  //wp_dequeue_style('rize-reviews');
	  // wp_dequeue_style('mv-grow-frontend-style');
	  wp_dequeue_style('common-css-new');
	  wp_dequeue_style('wp-notification-bars');
   	wp_dequeue_style('icomoon-fonts');
    wp_dequeue_style('reviewstream-css');
   wp_dequeue_style('dashicons-css');
    wp_dequeue_style('link-styles');
   wp_dequeue_style('duplicate-post');
    wp_dequeue_style('load-fa');
   wp_dequeue_style('shiftnav');
    wp_dequeue_style('pp-animate');
     wp_dequeue_style('reviewstream');
     wp_dequeue_style('dashicons');
     wp_dequeue_style('all-css-new');
	  wp_dequeue_style('customstylerzer');
	  wp_dequeue_style('googlefonts');
	  wp_dequeue_style('lity');
	  
	  //Popups and masanory
	  //wp_dequeue_script( 'spup-public' );
	  wp_dequeue_script( 'vimeo' );
      wp_dequeue_script( 'jquery-bind-first' );
      wp_dequeue_script( 'js-cookie' );
	  
	  //click to tweet
      wp_dequeue_style('bcct_style');
      wp_dequeue_style('tm_clicktotweet');

      //Popups plugin
      wp_dequeue_style('spu-public-css');
      wp_dequeue_style('spup-public-css');
	  
	  //Gravity Form
	  wp_dequeue_script( 'send_cookie_js' );
	  wp_deregister_script('gform_placeholder');
	  wp_dequeue_script('gform_placeholder');
	    wp_enqueue_style( 'home-page-new', '/wp-content/themes/rize-reviews/css/homepage.css?'.time());  
	    // wp_enqueue_style( 'home-header-new', '/wp-content/themes/rize-reviews/css/home-header-footer.css?'.time());  

	  wp_deregister_script('jquery');

 	 wp_enqueue_script( 'home-jquery-js', '/wp-content/themes/rize-reviews/js/home-jquery-file.js?'.time(), array());

	  wp_enqueue_script( 'common-js', '/wp-content/themes/rize-reviews/js/common-home.js?'.time(), array());

	  wp_dequeue_script( array('scriptsnew','validateJs','lity','customjs','getbrowser','unminify'));
   } 
 
};
add_action( 'wp_enqueue_scripts', 'remove_home_assets', 9999 );

add_action('wp_footer', function() {
      wp_dequeue_style( 'tt-global-styles' );
	  wp_dequeue_style( 'tt-normal-layout-style' );
	  wp_dequeue_style( 'tt-font-awesome' );
	  wp_dequeue_style( 'tt-bxslider' );
	  wp_dequeue_script('tt-shortcode');
	  wp_dequeue_style('gravityformsmailchimp_form_settings');
	
	// Pixel Your site - Excluded and added to scrtips-new.js  
	  wp_dequeue_script( 'vimeo' );
	  wp_dequeue_script( 'jquery-bind-first' );
	  wp_dequeue_script( 'js-cookie' );
	
	if ( !is_user_logged_in() ) {
	    //wp_dequeue_style('font-awesome-5');
	  }
	    
});

//Conatct page

if ( is_page('206') ) { 
wp_enqueue_style('font-awesome-5');
  wp_dequeue_style( array('portfolio','monsterinsights-popular-posts-style','mv-grow-frontend-style','tm_clicktotweet','bcct_style','rize-reviews',''));

 }
 
// Single blog page

//  if ( is_page('128326') ){
// 	wp_deregister_style( array('all-css-new','ppress-select2'));
// }


// Remove Assets Globally 
function wpfiles_dequeue() {
	if (current_user_can( 'update_core' )) {
		return;
	}
	//wp_deregister_style('dashicons');
	wp_deregister_script('wp-embed');
	wp_dequeue_style('wp-pagenavi');
	wp_dequeue_script( 'devicepx' );
	wp_dequeue_style('yoast-seo-adminbar');
	wp_dequeue_style('gravityformsmailchimp_form_settings');
	wp_dequeue_style('shiftnav-font-awesome');
	// wp_dequeue_style('rize-reviews');
  wp_dequeue_style('link-styles');
  wp_dequeue_style('lity');
  // wp_dequeue_style('reviewstream');
  wp_dequeue_style('dashicons');
  wp_dequeue_style('fl-builder-google-fonts-f38cd51ffa1cef5136b164fedf268eb4');

}
add_action( 'wp_enqueue_scripts', 'wpfiles_dequeue', 99 );

add_action('wp_footer', function() {
    wp_dequeue_style('gravityformsmailchimp_form_settings');
});

add_action( 'wp_enqueue_scripts', 'custom_blog_detail_enqueue_scripts_styles' );
function custom_blog_detail_enqueue_scripts_styles() {

if ( is_single() && is_singular(array('post')) ) {

wp_deregister_style( array('common-css-new','all-css-new','ppress-select2','global-styles-inline-css','tm_clicktotweet','bcct_style','ppress-flatpickr','reviewstream','dpsp-frontend-style-pro','gravity_forms_theme_reset', 'gravity_forms_theme_foundation' ,'gravity_forms_theme_framework' , 'gravity_forms_orbital_theme','lity'));
wp_deregister_script( array('ppress-flatpickr','lity'));
wp_enqueue_style( 'single-blog-css', '/wp-content/themes/rize-reviews/css/single-blog-page.css?'.time());
   
} 
}


// Remove jetpack.css from frontend
add_filter( 'jetpack_implode_frontend_css', '__return_false' );

// Removes Query Strings from scripts and styles
function remove_script_version( $src ){
  if ( strpos( $src, 'uploads/bb-plugin' ) !== false || strpos( $src, 'uploads/bb-theme' ) !== false ) {
    return $src;
  }
  else {
    $parts = explode( '?ver', $src );
    return $parts[0];
  }
}
add_filter( 'script_loader_src', 'remove_script_version', 15, 1 );
add_filter( 'style_loader_src', 'remove_script_version', 15, 1 );


//Removing unused Default Wordpress Emoji Script - Performance Enhancer
function disable_emoji_dequeue_script() {
    wp_dequeue_script( 'emoji' );
}
add_action( 'wp_print_scripts', 'disable_emoji_dequeue_script', 100 );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
remove_action( 'wp_print_styles', 'print_emoji_styles' );

// Removes Emoji Scripts 
add_action('init', 'remheadlink');
function remheadlink() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'feed_links', 2);
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'parent_post_rel_link', 10, 0);
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
	remove_action('wp_head', 'wp_shortlink_header', 10, 0);
	remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
}

// Add "nav-primary" class to Main Menu as this gets removed when we reposition the menu inside header/widget area
add_filter( 'genesis_attr_nav-header', 'thrive_custom_nav_id' );
function thrive_custom_nav_id( $attributes ) {
 	$attributes['class'] = 'nav-primary';
 	return $attributes;
}

//****** AMP Customizations ******/

//* Enqueue "stylesheet" for AMP */
add_action('amp_init','amp_css', 11);
function amp_css() { 
	require_once('css/amp.php');
}

//* Add Featured Images to AMP content
add_action( 'pre_amp_render_post', 'amp_add_custom_actions' );
function amp_add_custom_actions() {
    add_filter( 'the_content', 'amp_add_featured_image' );
}

function amp_add_featured_image( $content ) {
    if ( has_post_thumbnail() ) {
        // Just add the raw <img /> tag; our sanitizer will take care of it later.
        $image = sprintf( '<p class="featured-image">%s</p>', get_the_post_thumbnail($size = 'news-full') );
        $content = $image . $content;
    }
    return $content;
}

// Add Banner below content of AMP Pages
add_action('ampforwp_after_post_content','amp_custom_banner_extension_insert_banner');
function amp_custom_banner_extension_insert_banner() { ?>
	<div class="amp-custom-banner-after-post">
		<h2>CUSTOM AMP BANNER TEXT HERE IF NEEDED</h2>
		<a class="ampforwp-comment-button" href="/contact-us/">
			CONTACT US
		</a>
	</div>
<?php } 

//Sets the number of revisions for all post types
add_filter( 'wp_revisions_to_keep', 'revisions_count', 10, 2 );
function revisions_count( $num, $post ) {
	$num = 3;
    return $num;
}

// Enable Featured Images in RSS Feed and apply Custom image size so it doesn't generate large images in emails
function featuredtoRSS($content) {
global $post;
if ( has_post_thumbnail( $post->ID ) ){
$content = '<div>' . get_the_post_thumbnail( $post->ID, 'mailchimp', array( 'style' => 'margin-bottom: 15px;' ) ) . '</div>' . $content;
}
return $content;
}
 
add_filter('the_excerpt_rss', 'featuredtoRSS');
add_filter('the_content_feed', 'featuredtoRSS');

add_action('wp_head', 'add_json_ld_script');

function add_json_ld_script(){
    if ( is_single() && 'reviews' == get_post_type() ) 
    {     
        //do nothing//
    }else{

   ?>

   	<script type="application/ld+json">
		{
		"@context": "http://schema.org",
		"@type": "LocalBusiness", 
		"name": "Rize Reviews",
		"address": {
		"@type": "PostalAddress",
		"streetAddress": "700 Highlander Blvd Ste 180",
		"addressLocality": "Arlington",
		"addressRegion": "TX",
		"postalCode": "76105"
		},
		"telePhone": "+18663250303",
		"openingHours": "Mo,Tu,We,Th,Fr, 08:00-17:00",
		"geo": {
		"@type": "GeoCoordinates",
		"latitude": "32.6799496",
		"longitude": "-97.1211625"
		},
		"hasMap": "https://goo.gl/maps/shMVFMhMAaqvMLat6",
		"url": "https://rizereviews.com/",
		"logo": "https://rizereviews.com/wp-content/themes/rize-reviews/images/rize-reviews-logo.png",
		"image": "https://rizereviews.com/wp-content/themes/rize-reviews/images/rize-reviews-logo.png",
		"priceRange":"$$"
		}
	</script>

   <?php        
    } 
  
}

add_action('wp_head', 'add_json_ld_script_logo');

function add_json_ld_script_logo(){

    if ( is_single() && 'reviews' == get_post_type() ) 
    {     
        //do nothing//
    }else{
        $html='<script type="application/ld+json">';
              $html.='{';
              $html.='"@context": "http://schema.org/",';
              $html.='"@type": "Organization",';
              $html.='"url": "https://rizereviews.com/",';
              $html.='"logo": "https://rizereviews.com/wp-content/themes/rize-reviews/images/rize-reviews-logo.png"';
              $html.='}';
        $html.='</script>';
        echo $html;
    }
}

/* Code to Display Featured Image on top of the post */

add_action( 'genesis_entry_content', 'featured_post_image', 8 );
function featured_post_image() {
   if ( !is_singular('post'))  
    return;
    the_post_thumbnail('full'); /*you can use medium, large or a custom size*/
}

add_filter( 'genesis_pre_get_sitemap', 'thrive_genesis_pre_get_sitemap', 10 );
/**
 * Modifies the sitemap html to include a limit to the amount of pages, categories, authors, etc, that will be displayed.
 * @return string sitemap html
 */
function thrive_genesis_pre_get_sitemap() {

	$heading = 'h2';
	$sitemap  = sprintf( '<%2$s>%1$s</%2$s>', __( 'Pages:', 'genesis' ), $heading );
	$sitemap .= sprintf( '<ul>%s</ul>', wp_list_pages( array(
		'title_li' => null,
		'echo' => false,
		'depth' => 1,
		'sort_column' => 'post_title',
	)));

	$sitemap .= sprintf( '<%2$s>%1$s</%2$s>', __( 'Categories:', 'genesis' ), $heading );
	$sitemap .= sprintf( '<ul>%s</ul>', wp_list_categories( array(
		'sort_column' => 'name',
		'title_li' => null,
		'echo' => false,
		'depth' => 1,
	)));

	$users = get_users( array(
		'number' => 10,
		'who' => 'authors',
		'has_published_posts' => true,
	));

	ob_start();
	foreach ( $users as $user ) {
		$author_url = get_author_posts_url( $user->ID );
		?>
		<li>
			<a href="<?php echo esc_url( $author_url ); ?>"><?php echo esc_html( $user->display_name ); ?></a>
		</li>
		<?php
	}
	$user_li_html = ob_get_clean();

	$sitemap .= sprintf( '<%2$s>%1$s</%2$s>', __( 'Authors:', 'genesis' ), $heading );
	$sitemap .= sprintf( '<ul>%s</ul>', $user_li_html );

	$sitemap .= sprintf( '<%2$s>%1$s</%2$s>', __( 'Monthly:', 'genesis' ), $heading );
	$sitemap .= sprintf( '<ul>%s</ul>', wp_get_archives( array(
		'type' => 'monthly',
		'echo' => false,
		'limit' => 12,
	)));

	$sitemap .= sprintf( '<%2$s>%1$s</%2$s>', __( 'Recent Posts:', 'genesis' ), $heading );
	$sitemap .= sprintf( '<ul>%s</ul>', wp_get_archives( array(
		'type' => 'postbypost',
		'limit' => 10,
		'echo' => false,
	)));


	return $sitemap;
}

add_action( 'widgets_init', 'blog_sidebar_dynamic' );
function blog_sidebar_dynamic() {
    register_sidebar( array(
        'name' => __( 'Blog Sidebar' ),
        'id' => 'blog-single-sidebar',
        'description' => __( 'Widgets in this area will be shown on all posts.' ),
        'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
    ) );
}

genesis_register_sidebar( array(
	'id'		=> 'blog-filter',
	'name'		=> __( 'Blog Filters', 'nabm' ),
	'description'	=> __( 'This is the widget area for a blog and search pages.', 'nabm' ),
) );

//* Add the page widget in the content - HTML5
add_action( 'genesis_before_loop', 'nabm_add_page_content' );
function nabm_add_page_content() {
	global $wp;
	if ( is_search() || is_page(49) )
	genesis_widget_area ('blog-filter', array(
        'before' => '<div class="blog-filters"><div class="wrap">',
        'after' => '</div></div>',
	) );
}

function SearchFilter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}
add_filter('pre_get_posts','SearchFilter');

add_action( 'genesis_before_loop', 'sk_excerpts_search_page' );
function sk_excerpts_search_page() {
  if ( is_search() ) {
		add_filter( 'genesis_pre_get_option_content_archive', 'sk_show_excerpts' );
	}
}

function sk_show_excerpts() {
	return 'excerpts';
}


function SetBeaverSchemaLogoUrl( $image ) {
    // #todo: adjust the path to your logo url
    return site_url().'/wp-content/uploads/2019/08/logo.png';
}
add_filter( 'fl_schema_meta_publisher_image_url', 'SetBeaverSchemaLogoUrl', 10 ); 


function eln_add_img_title( $attr, $attachment = null ) {

    $img_title = get_the_title();
    $attr['title'] = $img_title;
    $attr['alt'] = $img_title;
    return $attr;
}
add_filter( 'wp_get_attachment_image_attributes','eln_add_img_title', 10, 2);

add_action( 'login_init', 'wpse8170_login_init' );
function wpse8170_login_init() {
    // do your stuff here
	echo "<link href='/wp-admin/css/login.min.css?ver=5.2.2' rel='stylesheet' type='text/css'>";
	echo "<link href='/wp-includes/css/buttons.min.css?ver=5.2.2' rel='stylesheet' type='text/css'>";
}

add_filter( 'comment_form_defaults', 'crunchify_custom_comment_form' );
function crunchify_custom_comment_form($defaults) {
    $defaults['comment_field'] = '<p class="comment-form-comment"><label for="comment">Comment *</label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required" spellcheck="false" class=""></textarea></p>';
    return $defaults;
}

function add_script_code() { ?>
	<script>
		jQuery("#submit").click(function() {
			jQuery('html, body').animate({
				scrollTop: jQuery("#reply-title").offset().top
			}, 500);
		});
	</script>

<?php } 

add_action('wp_footer', 'add_script_code');

//disable gform scroll
add_filter( 'gform_confirmation_anchor_5', '__return_true' );

add_action( 'genesis_entry_footer', 'wpsites_after_header' );
function wpsites_after_header() {
	$landing_page_id = get_the_ID();
	
	if($landing_page_id == 120413){
	
?>	

<script>
	jQuery(document).ready(function() {
		var current_details = jQuery(location).attr("href").split("?").pop().split("&"); 
		jQuery.each( current_details, function( key, value ) {
			var my_utm_value = value.split("=");			
			if(my_utm_value[0] == 'utm_source'){
				jQuery('#input_11_10').val(my_utm_value[1]);
			} else if(my_utm_value[0] == 'utm_medium'){
				jQuery('#input_11_11').val(my_utm_value[1]);
			}
		});	
	});

// 	jQuery(document).ready(function() {
//     jQuery("img").delay(500).fadeIn();
    
// });

</script>

<?php
	} else if($landing_page_id == 120325){
?>	

<script>
	jQuery(document).ready(function() {
		var current_details = jQuery(location).attr("href").split("?").pop().split("&"); 
		jQuery.each( current_details, function( key, value ) {
			var my_utm_value = value.split("=");			
			if(my_utm_value[0] == 'utm_source'){
				jQuery('#input_9_10').val(my_utm_value[1]);
			} else if(my_utm_value[0] == 'utm_medium'){
				jQuery('#input_9_11').val(my_utm_value[1]);
			} else if(my_utm_value[0] == 'utm_campaign'){
				jQuery('#input_9_12').val(my_utm_value[1]);
			} else if(my_utm_value[0] == 'utm_term'){
				jQuery('#input_9_13').val(my_utm_value[1]);
			} else if(my_utm_value[0] == 'utm_content'){
				jQuery('#input_9_14').val(my_utm_value[1]);
			}
		});	
	});

</script>

<?php
	}
}
 
  
/* Start Rize Link Building widget */

function widget_submit_form(){
	global $wpdb;
	$table_name = $wpdb->prefix . 'rize_link_building_widget';
	$user_id = get_current_user_id();
	$client_details = $wpdb->get_row( "SELECT * FROM $table_name where user_id=$user_id" );
	
	if(isset($_POST['widget_submit']) && $_POST ){
		$data = array(
				'logo_path' 				=> "https://rizereviews.com/rize_link_building_widget/images/powered-by-rize.svg",
				'logo_link'   				=> "https://rizereviews.com/",
				'seoblog_logo_url'			=> "https://rizereviews.com/rize_link_building_widget/images/powered-by-seoblog.svg",
				'seoblog_logo_link'			=> "https://www.seoblog.com/best-seo-companies",
				'buttoncolor' 				=> $_POST['buttoncolor'],
				'circlecolor'   			=> $_POST['circlecolor'],
				'widget_side'   			=> $_POST['widget_side'],
				'show_agrregate_rating'		=> $_POST['show_agrregate_rating'],
				'schema_business_name'   	=> $_POST['schema_business_name'],
				'schema_logo_url'   		=> $_POST['schema_logo_url'],
				'schema_telephone'   		=> $_POST['schema_telephone'],
				'schema_street'   			=> $_POST['schema_street'],
				'schema_locality'   		=> $_POST['schema_locality'],
				'schema_region'   			=> $_POST['schema_region'],
				'schema_postalCode'   		=> $_POST['schema_postalCode'],
				'facebook_url'				=> $_POST['facebook_url'],
				'bbb_url'					=> $_POST['bbb_url'],
				'ip_address'                => $_POST['ip_address'],
			);	
		
		if($client_details && $client_details->schema_business_name != $_POST['schema_business_name']) {
			$table1 = $wpdb->prefix . 'rize_link_building_review_scrapper';
			$table2 = $wpdb->prefix . 'rize_link_building_sources_data';
			
			$success = $wpdb->update($table_name, $data, array('user_id'=>$user_id));
			
			if($success) {
				
				$delete = $wpdb->delete($table1, array( 'user_id' => $user_id ));
				//echo '<pre>'; print_r($delete); echo '</pre>'; die;
				if($delete){
					$delete1 = $wpdb->delete($table2, array( 'user_id' => $user_id ));
					if($delete1) {
						$source_table = $wpdb->prefix . 'rize_link_building_sources_data';
			
						$query = $_POST['schema_business_name'] . " " . $_POST['schema_street'] . " " . $_POST['schema_locality'] . " " . $_POST['schema_region'] . " " . $_POST['schema_postalCode'];
						$job_id = add_jobs_to_reviews_scrapper($query, 'google');
						if($job_id){
							$wpdb->insert($source_table, array('user_id' => $user_id, 'source' => 'google', 'job_id' => $job_id));
						}
						
						if(!empty($_POST['facebook_url'])){
							$job_id = add_jobs_to_reviews_scrapper($_POST['facebook_url'], 'facebook');
							if($job_id){
								$wpdb->insert($source_table, array('user_id' => $user_id, 'source' => 'facebook', 'job_id' => $job_id));
							}
						}
					}
				}
			}
		} else if($client_details){
			$success = $wpdb->update($table_name, $data, array('user_id'=>$user_id));
		} else{		
			$data['user_id'] = $user_id;
			$success = $wpdb->insert($table_name, $data);
			if($success) {
				
				$source_table = $wpdb->prefix . 'rize_link_building_sources_data';
				
				$query = $_POST['schema_business_name'] . " " . $_POST['schema_street'] . " " . $_POST['schema_locality'] . " " . $_POST['schema_region'] . " " . $_POST['schema_postalCode'];
				$job_id = add_jobs_to_reviews_scrapper($query, 'google');
				if($job_id){
					$wpdb->insert($source_table, array('user_id' => $user_id, 'source' => 'google', 'job_id' => $job_id));
				}
				
				if(!empty($_POST['facebook_url'])){
					$job_id = add_jobs_to_reviews_scrapper($_POST['facebook_url'], 'facebook');
					
					if($job_id){
						$wpdb->insert($source_table, array('user_id' => $user_id, 'source' => 'facebook', 'job_id' => $job_id));
					}
					
				}
				
			}
		}
	
		if(false === $success) {		
			echo "<div class='error_message'><strong>Error!</strong> There is some error.</div>";
		} else {
			
			echo "<div class='success_message'><strong>Success!</strong> Widget has been Updated.</div>";
			$client_details = $wpdb->get_row( "SELECT * FROM $table_name where user_id=$user_id" );
		}
			
	}
	
	return $client_details;
}

function get_widget_reviews(){
	global $wpdb;
	$table_name = $wpdb->prefix . 'rize_link_building_review_scrapper';
	$user_id = get_current_user_id();
	$review_details = $wpdb->get_row( "SELECT * FROM $table_name where user_id=$user_id" );
	return $review_details;
	
}
 
add_action('template_redirect', 'redirect_to_specific_page' );
function redirect_to_specific_page() {
	if ( is_page('account-listing', 'account-info') && ! is_user_logged_in() ) {
		wp_redirect(site_url(), 301 ); 
		exit;
    }
	
	if(is_admin()){
	} else{
		if(is_page('login') && is_user_logged_in()){
			wp_redirect('account-listing'); 
			exit;
		}
	}
}

function add_jobs_to_reviews_scrapper($query, $source, $previous_job_id = NULL){
	
	if($source == 'google'){
		$url = "https://supervisor.reviewshake.com/api/v2/profiles/add?query=" . rawurlencode(str_replace("<br>", "", $query));
	} elseif($source == 'facebook') {
		$url = "https://supervisor.reviewshake.com/api/v2/profiles/add?url=". $query ."/reviews";
	}
	
	if($previous_job_id) {
		$url = $url ."&diff=" . $previous_job_id;
	}
	
	$data = "";
	
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'spiderman-token: dbc4bd35da420eee32e6c70b092a5184cf715c3e'));
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_VERBOSE, 0);
	curl_setopt($curl, CURLOPT_HEADER, 0);
	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	$response = curl_exec($curl);
	$err = curl_error($curl);
	
	curl_close($curl);
	
	if ($err) {
		echo "cURL Error #:" . $err;
	} else {
		$decode_response = json_decode($response);
		
		if($decode_response->status == 400 && ( strpos($decode_response->message, 'No diff job exists') !== false || strpos($decode_response->message, 'Diff job profile') !== false)) {
			add_jobs_to_reviews_scrapper($query, $source);
		} else {
			return $decode_response->job_id;
		}
	}
}


add_shortcode( 'custom_header_shortcode', 'custom_header_shortcode' );

function custom_header_shortcode($atts){
	
	if($atts['device'] == 'mobile'){
		if(is_user_logged_in()){
			return '<div class="shift-bottom"><a class="shift-tell" href="tel:866-325-0303">866-325-0303</a><a href="/widget-settings/">My Account</a><a href="/logout/">Logout</a></div>';
		} else{
			return '<div class="shift-bottom"><a class="shift-tell" href="tel:866-325-0303">866-325-0303</a><a href="https://www.rize.reviews/auth/login">Client Login</a><a href="https://rizereviews.com/contact/">Support</a></div>';
		}
	} else {
		if(is_user_logged_in()){
			return '<span class="header-phone-number"><a href="tel:8663250303"><div class="svg-inline--fa header-phn-icon"></div> 866.325.0303</a></span><span class="secondary-top-nav"><a href="/widget-settings/" >My Account</a> | <a href="/logout/">Logout</a></span>';
		} else{
			return '<span class="header-phone-number"><a href="tel:8663250303"><div class="svg-inline--fa header-phn-icon"></div> 866.325.0303</a></span><span class="secondary-top-nav"><a href="https://www.rize.reviews/auth/login">Client Login</a> | <a href="/contact/">Support</a></span>';
		}
	}
	
	
}


/* End Rize Link Building widget */


/*------- 13-04-2020 -----------------*/

add_shortcode("reviewmgr_sc","reviewmgr_fuc");
function reviewmgr_fuc() { 
return '<div class="reviewmgr-lookup" data-url="https://ureview.me" style="-webkit-overflow-scrolling: touch!important;" ></div><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.reviewmgr.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document, "script", "reviewmgr-wjs");</script>';
  }

function crunchify_print_scripts_styles() { 
    // Print all loaded Scripts
     echo "<div class='js-id-um' style='margin-top:40px; display:none; width:100%;'>";
    global $wp_scripts;
    foreach( $wp_scripts->queue as $script ) :
        echo $script . '  **  ';
    endforeach; 
 
    // // Print all loaded Styles (CSS)
    // global $wp_styles;
    // foreach( $wp_styles->queue as $style ) :
    //     echo $style . '  ||  ';
    // endforeach;
     echo "</div>"; 
} 
 
//add_action( 'wp_print_scripts', 'crunchify_print_scripts_styles' );

 
function wpfiles_dequeue_new() {  
if ( !is_user_logged_in() ) { 
	 // wp_dequeue_style('reviewstream');  
	 wp_dequeue_style('wp-block-library');  
	 wp_dequeue_style('icon'); 
	 wp_dequeue_style('shiftnav-font-awesome'); 
	 wp_dequeue_style('dashicons');  
	 // wp_dequeue_style('fl-builder-layout-bundle-7758fa59506d5f52fba33b32fe4ffb14');  
	 wp_dequeue_style('customstylerzer');  
	 wp_dequeue_style('googlefonts');  
	 wp_dequeue_style('lity');  
	 wp_dequeue_style('link-styles');  
	 wp_dequeue_style('icomoon-fonts');    
	 wp_dequeue_style('fl-builder-google-fonts-f38cd51ffa1cef5136b164fedf268eb4');  	 
	 // wp_dequeue_style('fl-builder-layout-119128');  	
	 wp_dequeue_script('fl-theme-builder-admin-bar'); 
	 wp_dequeue_style('select2');
	  
}	

if ( is_front_page() ) {
	
wp_dequeue_script('imagesloaded');
wp_dequeue_script('validateJs');   
wp_dequeue_script('spup-public');   
wp_dequeue_script('pys');   
wp_dequeue_script('scriptsnew');   
wp_dequeue_script('html5shiv'); 
wp_dequeue_script('mv-grow-frontend-js');

{ ?>  
 
 <style>.spu-box#spu-118135{display:none;}</style>
 
<?php }  

} 
 
}
add_action( 'wp_enqueue_scripts', 'wpfiles_dequeue_new', 99 );
 
add_action( 'wp_print_styles', 'deregister_my_styles', 100 );
function deregister_my_styles() { 
if ( !is_user_logged_in() ) {  
  wp_deregister_style('icon-1533676033' );
	wp_deregister_style('shiftnav');	
	wp_deregister_style('shiftnav-font-awesome');  
	wp_deregister_style('pp-animate');  
	// wp_deregister_style('font-awesome-5');  
wp_deregister_style('gforms_reset_css');
wp_deregister_style('gforms_formsmain_css');
wp_deregister_style('gforms_ready_class_css');
wp_deregister_style('gforms_browsers_css');
	
wp_deregister_style('select2'); 
wp_deregister_style('um_moda'); 
wp_deregister_style('um_fileupload'); 
wp_deregister_style('um_datetime'); 
wp_deregister_style('um_datetime_date'); 
wp_deregister_style('um_datetime_time'); 
wp_deregister_style('um_datetime_legacy'); 
wp_deregister_style('um_raty'); 
wp_deregister_style('um_crop'); 
wp_deregister_style('um_tipsy'); 
wp_deregister_style('um_functions'); 
wp_deregister_style('um-gdpr'); 
wp_deregister_style('um_responsive'); 
wp_deregister_style('um_conditional'); 
wp_deregister_style('um_scripts');
wp_deregister_style('um_profile');
wp_deregister_style('um_account');
wp_deregister_style('um_fonticons_ii');
wp_deregister_style('um_fonticons_fa');
wp_deregister_style('um_styles');
wp_deregister_style('um_misc');
wp_deregister_style('um_scrollbar');
wp_deregister_style('um_default_css');
wp_deregister_script('select2'); 
wp_deregister_script('um_modal'); 
wp_deregister_script('um_fileupload'); 
wp_deregister_script('um_datetime'); 
wp_deregister_script('um_datetime_date'); 
wp_deregister_script('um_datetime_time'); 
wp_deregister_script('um_datetime_legacy'); 
wp_deregister_script('um_raty'); 
wp_deregister_script('um_crop'); 
wp_deregister_script('um_tipsy'); 
wp_deregister_script('um_functions'); 
wp_deregister_script('um-gdpr'); 
wp_deregister_script('um_responsive'); 
wp_deregister_script('um_conditional'); 
wp_deregister_script('um_scripts');
wp_deregister_script('um_profile');
wp_deregister_script('um_account');
wp_dequeue_style('global-styles');
	 
  }
  
if ( is_front_page() ) {  
 
wp_deregister_style('mv-grow-frontend-style');   
wp_deregister_script('mv-grow-frontend-js'); 
	
}

}


function custom_javascript_hook() {
	if (is_singular( 'post' )){ ?>
     
	 <script>
	   
///sticky sidebar///

jQuery(document).ready(function ($) {

  var parentElement = $('.single-post .one-fourth.sidebar');
  var stickyElement = $('#custom_gform_wrapper_back');
  var container = $('.single-post .post');
  var header = $('.header');
  var containerHeight = container.height() + 'px';
  var mediaBreakPoint = '(max-width: 991px)';
  var height = stickyElement.height();
  var heightString = height + 'px';
  var widthString = stickyElement.width() + 'px';
  var headerHeight = header.height() + 'px';

  function scrollStickySidebar($) {
    jQuery(window).scroll(function () {
      var scroll = jQuery(this).scrollTop();

      setParentOrContainerHeight();
      setStickyElementScrollDefaultStyles();

      var length = parentElement.height() - stickyElement.height() + parentElement.offset().top-70;

      if (!window.matchMedia(mediaBreakPoint).matches) {
        if (scroll < parentElement.offset().top-140) {
          stickyElement.css({
            'position': 'relative',
            'top': '0',
            'bottom': 'auto'
          });
        }
        else if (scroll > length) {
          stickyElement.css({
            'position': 'absolute',
            'top': 'auto',
            'bottom': '0'
          });
        }
        else {
          stickyElement.css({
            'position': 'fixed',
            'top': '150px',
            'bottom': 'auto'
          });
        }
      }
      else {
        setStickyElementMobileDefaultStyles();
      }
    }
  )};


  function setStickyElementScrollDefaultStyles() {
    stickyElement.css({
      'height': heightString,
      'width': widthString,
      'max-width': widthString
    });
  }

  function setStickyElementMobileDefaultStyles() {
    setParentToAutoHeight();

    stickyElement.css({
      'position': 'relative',
      'top': 'auto',
      'bottom': 'auto',
      'height': 'auto',
      'width': '100%',
      'max-width': '16.688em'
    });
  }

  function setParentOrContainerHeight() {
    if (height < container.height()) {
      parentElement.css({
        'height': containerHeight
      });
    }
    else {
      parentElement.css({
        'height': heightString
      });
      container.css({
        'height': heightString
      });
    }
  }

  function setParentToAutoHeight() {
    parentElement.css({
      'height': 'auto'
    });
  }
  
  scrollStickySidebar($);
  
  $(window).resize(scrollStickySidebar);
    
});
	 </script>
	 
	<?php }
}
add_action( 'wp_footer', 'custom_javascript_hook' );

add_filter('body_class','browser_body_class');
function browser_body_class($classes) {
    global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
    if($is_lynx) $classes[] = 'lynx-browser';
    elseif($is_gecko) $classes[] = 'gecko-browser';
    elseif($is_opera) $classes[] = 'opera-browser';
    elseif($is_NS4) $classes[] = 'ns4-browser';
    elseif($is_safari) $classes[] = 'safari-browser';
    elseif($is_chrome) $classes[] = 'chrome-browser';
    elseif($is_IE) $classes[] = 'ie-browser';
    else $classes[] = 'unknown-browser';
    if($is_iphone) $classes[] = 'iphone-browser';
	
	 if($is_IE){  ?>
	
	<script src="/wp-content/themes/rize-reviews/js/getBrowser.js"></script>
<script src="/wp-content/themes/rize-reviews/js/unminify_1.js"></script>

	
	<?php } 
    return $classes;
}

// Show the deafult image on single blog post if not.
function bt_enable_single_featimg() {
	if( is_singular('post')) { 
		if ( has_post_thumbnail() ) {
		} else {
		  echo "<img src='".get_stylesheet_directory_uri()."/images/default_img.png' alt='".get_the_title()."'>";
		}
			// echo '<div class="imhere"></div>';
	}
}

add_action( 'genesis_entry_content', 'bt_enable_single_featimg', 8 );


function my_login_custom_css() { ?>
    <style type="text/css">
       #login #loginform div.anr_captcha_field{margin-bottom:15px!important;}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_custom_css' );



function single_blogpost_wpfiles_dequeue_new() {  
if ( is_single() && is_singular(array('post')) ) {
// wp_dequeue_style('rize-reviews');  
wp_dequeue_style('monsterinsights-vue-frontend-style');  
wp_dequeue_style('portfolio');  
wp_dequeue_style('lity');  
wp_dequeue_style('icomoon-fonts');  
wp_dequeue_style('pp-animate');   
wp_dequeue_style('dashicons');  
// wp_dequeue_style('reviewstream');  
wp_dequeue_style('portfolio'); 

} 
}

function gioga_add_async_attribute($tag) { 
	return str_replace( ' href', ' async href', $tag );
}
add_filter('style_loader_tag', 'gioga_add_async_attribute');


// ARW email template 
function email_template_arw($r8ng, $rating_vl,$comment, $date_, $name ,$imgSrc){
	$html = '<!DOCTYPE html>
			<html>
			<head>
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<link rel="preconnect" href="https://fonts.gstatic.com">
				<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
				<style type="text/css">
					body{
						font-family: "Open Sans", sans-serif;
						font-family: "Roboto" sans-serif;
						font-size: 18px;
						line-height: 26px;
						color: #222;
					}
					h1 {
					    line-height: 36px;
					}
					.author > span {
					    font-style: italic;
					}
					.outer-tabl{
						background: #E9ECEF;
						padding: 40px;
						width: 100%;
					}
					table#main {
					    max-width: 610px;
					    margin: 0 auto;
					    background: #fff;
					    padding: 30px;
					    border-top: 3px solid #d2d6d6;
					    width: 100%;
					}
					p{
						color: #141415e0;
			    		letter-spacing: 0.3px;
			    		font-size: 18px;
						line-height: 26px;
					}

					img.logo-top {
					    margin: 0 auto;
					    text-align: center;
					    float: none;
					    width: 17%;
					    margin-bottom: 25px;
					}

					td.toplogo-sect {
					    text-align: center;
					}
					img.source-logo{
						width: 160px;
					}
					.rating-starts > .rating{
					    background: url("'.get_stylesheet_directory_uri().'/images/start-ratings.jpg") -139px 135px;
					    width: 344px;
					    height: 80px;
					}
					.rating.one {
					    background-position: -144px -404px;
					}
					.rating.two {
					    background-position: -144px -320px;
					}
					.rating.three {
					    background-position: -144px -226px;
					}
					.rating.four {
					    background-position: -144px -136px;
					}
					.rating.five {
					    background-position: -144px -50px;
					}
				</style>
			</head>
			<body>
				<table class="outer-tabl">
					<tbody>
						<tr>
							<td class="toplogo-sect">
								<img class="logo-top" src="https://rsvp-prod.s3.amazonaws.com/rsvp/rizereviews/spree/logos/1799/medium/Unknown.jpg?1601308939" alt="logo">
							</td>
						</tr>
						<tr>
							<td>				
								<table id="main">
									<tbody>
										<tr>
											<td class="desc">
												<h1>New '.$r8ng.'-star review for American Residential Warranty</h1>';

							if($comment != ''){

								$html .= '<p>❝ '.$comment.' ❞</p>';
							}

												
							$html .= '<p class="author"><span>by</span> '.$name.' on '.$date_.'</p>
											</td>
										</tr>
										<tr>';

						if($imgSrc != ''){
							$html .= '<td><img src="'.$imgSrc.'" class="source-logo"></td>';
						}	
											
										
						$html .='</tr>
										<tr>
											<td class="rating-starts">
												<div class="rating '.$rating_vl.'"></div>
											</td>
										</tr>
										<tr>
											<td class="footer-text">
												<h2>Pro-tip:</h2>
												<p>Respond to this review to show current and future customers that you care!</p>
											</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</body>
		</html>';

	return $html;
}


//Write a review ajax function
function add_review_ajax_callback_function() {

    $params = array();

    parse_str($_POST['data'], $params);

    $date_ = date("D M d");

    $sourceImg = array(
    	'google' => get_stylesheet_directory_uri().'/images/google.png',
    	'consumeraffairs' => get_stylesheet_directory_uri().'/images/consumeraffairs_.png',
    	'bbb' => get_stylesheet_directory_uri().'/images/bbb_icon.png',
    	'trustpilot' => get_stylesheet_directory_uri().'/images/trustpilot_.png'
    );
    $ratingArray = array(1 => 'one', 2 => 'two', 3 => 'three', 4 => 'four', 5 => 'five');

    $to = array('josh@arwplans.com','gavin@americanrw.com','abeutel@americanrw.com','evan@arwplans.com','kpagel@americanrw.com','shiva@thriveagency.com');
    // $to = array('shiva@thriveagency.com');
    $subject = "ARW Survey Response";
    $headers = array('Content-Type: text/html; charset=UTF-8');

    global $wpdb;
    $tableName = $wpdb->prefix.'arw_reviews_meta';

    // Function to update the endpoint name
    if($_POST['funct'] == 'endpoint'){

        $id         = $_POST['data']['id'];
       	$source     = $_POST['data']['source'];


        $wpdb->get_var("UPDATE $tableName SET endpoint = '".$source."' WHERE id = $id");
        $response =  $wpdb->get_results("SELECT * FROM $tableName WHERE id = $id ");
        $response = current($response);
        $userName = $response->fname." ".$response->lname;
        $usr_email = $response->email;
        $r8ing = $response->rating_val;
        $comment = $response->message;
        $rating_vl = $ratingArray[$r8ing];
        $imgSrc =  $sourceImg[$source];	            
        $mesg = email_template_arw($r8ing, $rating_vl, $comment, $date_, $userName, $imgSrc);
        $message = $mesg;

        if($r8ing > 3) {
            wp_mail($to, $subject, $message, $headers, $attachments = array() );
        }
        
    }

    // Function to add reviews in dtaabase and send the response to ajax function

    if($params['email'] != '' && $params['rating'] != '') {
        $response_data = '';
        $emailAddress = "'".$params['email']."'";
        $rating_val = $params['rating'];
        $response =  $wpdb->get_results("SELECT * FROM wp_arw_reviews_meta WHERE email = $emailAddress AND rating_val = 0 ");
     
        $userID = $response[0]->id;

        // Check if table query return response the add the reviews.    
        if($response){
        	// $msg = $params['message'].'"';
            $data = array(
                'message' => $params['message'],
                'rating_val' => $params['rating']
            );

            $qry_status = $wpdb->update( $tableName, $data, array( 'email' => $params['email']));
            // $qry_status = 1;
             // echo $wpdb->last_query;

            if($qry_status){

                $response_data = array(
                    'rating' => $params['rating'],
                    'id' => $userID,
                    'message' => 'Your review added successfully!'
                );

                $userName = $response[0]->fname." ".$response[0]->lname;
	            $usr_email = $params['email'];
	            $r8ing = $params['rating'];
	            $comment = $params['message'];

                // Send email function
                // $to = 'lchilds@bmscat.com';
     
	            $rating_vl = $ratingArray[$r8ing];
	            $imgSrc = '';
	            
	            $mesg = email_template_arw($r8ing, $rating_vl, $comment, $date_, $userName, $imgSrc);

                $message = $mesg;

                if($r8ing < 4) {
	                wp_mail($to, $subject, $message, $headers, $attachments = array() );
                }
            } 

        } 
        else {
            $response_data = array(
                'rating' => $params['rating'],
                'id' => $userID,
                'error' => 'You have submitted rating already!'
            );
        }
    }

    $response_data = json_encode($response_data);

    echo  $response_data;
    wp_die();
}
add_action( 'wp_ajax_add_review', 'add_review_ajax_callback_function' );  
add_action( 'wp_ajax_nopriv_add_review', 'add_review_ajax_callback_function' );


//* Explore post type 18-05-2020
 
add_action( 'init', 'custom_post_type_explore', 2 );
function custom_post_type_explore() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Explore Listing', 'Post Type General Name', 'twentytwenty' ),
        'singular_name'       => _x( 'Explore Listing', 'Post Type Singular Name', 'twentytwenty' ),
        'menu_name'           => __( 'Explore Listing', 'twentytwenty' ),
        'parent_item_colon'   => __( 'Parent Explore', 'twentytwenty' ),
        'all_items'           => __( 'All Explore', 'twentytwenty' ),
        'view_item'           => __( 'View Explore', 'twentytwenty' ),
        'add_new_item'        => __( 'Add New Explore', 'twentytwenty' ),
        'add_new'             => __( 'Add New', 'twentytwenty' ),
        'edit_item'           => __( 'Edit Explore', 'twentytwenty' ),
        'update_item'         => __( 'Update Explore', 'twentytwenty' ),
        'search_items'        => __( 'Search Explore', 'twentytwenty' ),
        'not_found'           => __( 'Not Found', 'twentytwenty' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwenty' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Explore listing', 'twentytwenty' ),
        'description'         => __( 'Explore news and reviews', 'twentytwenty' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'explore-category' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
		'rewrite'             => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
		'rewrite' => array( 'slug' => 'explore' ),
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'explore', $args );
   
}

// Let us create Taxonomy for Custom Post Type
add_action( 'init', 'crunchify_create_explore_custom_taxonomy', 0 );
function crunchify_create_explore_custom_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Explore Category', 'taxonomy general name' ),
    'singular_name' => _x( 'Explore Category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Explore Category' ),
    'all_items' => __( 'All Explore Category' ),
    'parent_item' => __( 'Parent Explore Category' ),
    'parent_item_colon' => __( 'Parent Explore Category:' ),
    'edit_item' => __( 'Edit Explore Category' ), 
    'update_item' => __( 'Update Explore Category' ),
    'add_new_item' => __( 'Add New Explore Category' ),
    'new_item_name' => __( 'New Explore Category Name' ),
    'menu_name' => __( 'Explore Category' ),
  ); 	
 
  register_taxonomy('explore-category',array('explore'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'explore-category' ),
  )); 
  
}

function add_css_dataa() { ?>

<style type="text/css">
 #optimizations-widget #optimizations-purge-cache,  #optimizations-widget #optimizations-invalidate-cache{display: none;}
</style>

<?php } 

add_action('admin_head', 'add_css_dataa');

function append_rize_widget_shortcode( $atts ) {
    $atts = shortcode_atts(
        array(
            'path' => 'https://www.rize.reviews/widgets/carousel.js?client_id=16&org=1',
        ), $atts, 'path' );

    return '<script type="text/javascript" src="'.$atts['path'].'"></script>';
}
add_shortcode( 'append_rize_widget_shortcode', 'append_rize_widget_shortcode' );



/* --------------------------User Enumeration Code---------------------------- */
add_filter( 'request', 'wpse5742_request' );
function wpse5742_request( $query_vars )
{
    if ( array_key_exists( 'author_name', $query_vars ) ) {
        global $wpdb;
        $author_id = $wpdb->get_var( $wpdb->prepare( "SELECT user_id FROM {$wpdb->usermeta} WHERE meta_key='nickname' AND meta_value = %s", $query_vars['author_name'] ) );
        if ( $author_id ) {
            $query_vars['author'] = $author_id;
            unset( $query_vars['author_name'] );    
        }
    }
    return $query_vars;
}
add_filter( 'author_link', 'wpse5742_author_link', 10, 3 );
function wpse5742_author_link( $link, $author_id, $author_nicename )
{
    $author_nickname = get_user_meta( $author_id, 'nickname', true );
    if ( $author_nickname ) {
        $link = str_replace( $author_nicename, $author_nickname, $link );
    }
    return $link;
}
add_action( 'user_profile_update_errors', 'wpse5742_set_user_nicename_to_nickname', 10, 3 );
function wpse5742_set_user_nicename_to_nickname( &$errors, $update, &$user )
{
    if ( ! empty( $user->nickname ) ) {
        $user->user_nicename = sanitize_title( $user->nickname, $user->display_name );
    }
}  
