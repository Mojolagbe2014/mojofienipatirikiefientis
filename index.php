<?php 
session_start();
define("CONST_FILE_PATH", "includes/constants.php");
define("CURRENT_PAGE", "home");
require('classes/WebPage.php'); //Set up page as a web page
$thisPage = new WebPage(); //Create new instance of webPage class

$dbObj = new Database();//Instantiate database
$thisPage->dbObj = $dbObj;
$calendar = new Calendar($dbObj);

include('includes/other-settings.php');
require('includes/page-properties.php');
?>
<!DOCTYPE html>
<html lang="en-US" class="scheme_original">
<head>
<?php include('includes/meta-tags.php'); ?>
<script type="text/javascript">
        window._wpemojiSettings = {"baseUrl":"http:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"http:\/\/unicaevents.ancorathemes.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.3.2"}};
        !function(a,b,c){function d(a){var c=b.createElement("canvas"),d=c.getContext&&c.getContext("2d");return d&&d.fillText?(d.textBaseline="top",d.font="600 32px Arial","flag"===a?(d.fillText(String.fromCharCode(55356,56812,55356,56807),0,0),c.toDataURL().length>3e3):(d.fillText(String.fromCharCode(55357,56835),0,0),0!==d.getImageData(16,16,1,1).data[0])):!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g;c.supports={simple:d("simple"),flag:d("flag")},c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.simple&&c.supports.flag||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
</script>
<style type="text/css"> img.wp-smiley, img.emoji { display: inline !important; border: none !important; box-shadow: none !important; height: 1em !important; width: 1em !important; margin: 0 .07em !important; vertical-align: -0.1em !important; background: none !important; padding: 0 !important; } </style>
<link rel='stylesheet' id='essential-grid-plugin-settings-css'  href='plugins/essential-grid/public/assets/css/settingsa7f4.css?ver=2.0.8' type='text/css' media='all' />
<link rel='stylesheet' id='tp-open-sans-css'  href='http://fonts.googleapis.com/css089f.css?family=Open+Sans%3A300%2C400%2C600%2C700%2C800&amp;ver=4.3.2' type='text/css' media='all' />
<link rel='stylesheet' id='tp-raleway-css'  href='http://fonts.googleapis.com/css66da.css?family=Raleway%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900&amp;ver=4.3.2' type='text/css' media='all' />
<link rel='stylesheet' id='tp-droid-serif-css'  href='http://fonts.googleapis.com/css6b4e.css?family=Droid+Serif%3A400%2C700&amp;ver=4.3.2' type='text/css' media='all' />
<link rel='stylesheet' id='sb_instagram_styles-css'  href='plugins/instagram-feed/css/sb-instagram6895.css?ver=1.3.11' type='text/css' media='all' />
<link rel='stylesheet' id='sb_instagram_icons-css'  href='http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min23c9.css?1&amp;ver=4.2.0' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='plugins/revslider/public/assets/css/settingsb97d.css?ver=5.0.8.5' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'> #rs-demo-id {} </style>
<link rel='stylesheet' id='select2-css'  href='plugins/woocommerce/assets/css/select2274c.css?ver=4.3.2' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-layout-css'  href='plugins/woocommerce/assets/css/woocommerce-layout18f6.css?ver=2.4.12' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-smallscreen-css'  href='plugins/woocommerce/assets/css/woocommerce-smallscreen18f6.css?ver=2.4.12' type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='woocommerce-general-css'  href='plugins/woocommerce/assets/css/woocommerce18f6.css?ver=2.4.12' type='text/css' media='all' />
<link rel='stylesheet' id='unicaevents-font-google_fonts-style-css'  href='../fonts.googleapis.com/css6646.css?family=Vidaloka:400|Open+Sans:300,300italic,400,400italic,700,700italic|Montserrat:300,300italic,400,400italic,700,700italic&amp;subset=latin,latin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='unicaevents-fontello-style-css'  href='themes/unicaevents/css/fontello/css/fontello.css' type='text/css' media='all' />
<link rel='stylesheet' id='unicaevents-main-style-css'  href='themes/unicaevents/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='unicaevents-animation-style-css'  href='themes/unicaevents/fw/css/core.animation.css' type='text/css' media='all' />
<link rel='stylesheet' id='unicaevents-shortcodes-style-css'  href='themes/unicaevents/shortcodes/theme.shortcodes.css' type='text/css' media='all' />
<link rel='stylesheet' id='unicaevents-skin-style-css'  href='themes/unicaevents/skins/default/skin.css' type='text/css' media='all' />
<link rel='stylesheet' id='unicaevents-custom-style-css'  href='themes/unicaevents/fw/css/custom-style.css' type='text/css' media='all' />
<style id='unicaevents-custom-style-inline-css' type='text/css'> .sidebar_outer_logo .logo_main,.top_panel_wrap .logo_main,.top_panel_wrap .logo_fixed{height:26px} .contacts_wrap .logo img{height:30px}</style>
<link rel='stylesheet' id='unicaevents-responsive-style-css'  href='themes/unicaevents/css/responsive.css' type='text/css' media='all' />
<link rel='stylesheet' id='theme-skin-responsive-style-css'  href='themes/unicaevents/skins/default/skin.responsive.css' type='text/css' media='all' />
<link rel='stylesheet' id='mediaelement-css'  href='js/mediaelement/mediaelementplayer.min0392.css?ver=2.17.0' type='text/css' media='all' />
<link rel='stylesheet' id='wp-mediaelement-css'  href='js/mediaelement/wp-mediaelement274c.css?ver=4.3.2' type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_front-css'  href='plugins/js_composer/assets/css/js_composer.mina288.css?ver=4.8.1' type='text/css' media='all' />
<script type='text/javascript' src='js/jquery/jqueryc1d8.js?ver=1.11.3'></script>
<script type='text/javascript' src='js/jquery/jquery-migrate.min1576.js?ver=1.2.1'></script>
<script type='text/javascript' src='plugins/essential-grid/public/assets/js/lightboxa7f4.js?ver=2.0.8'></script>
<script type='text/javascript' src='plugins/essential-grid/public/assets/js/jquery.themepunch.tools.mina7f4.js?ver=2.0.8'></script>
<script type='text/javascript' src='plugins/essential-grid/public/assets/js/jquery.themepunch.essential.mina7f4.js?ver=2.0.8'></script>
<script type='text/javascript' src='plugins/revslider/public/assets/js/jquery.themepunch.revolution.minb97d.js?ver=5.0.8.5'></script>
<script type='text/javascript'> /* <![CDATA[ */ var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View Cart","cart_url":"http:\/\/unicaevents.ancorathemes.com\/cart\/","is_cart":"","cart_redirect_after_add":"no"};/* ]]> */ </script>
<script type='text/javascript' src='plugins/woocommerce/assets/js/frontend/add-to-cart.min18f6.js?ver=2.4.12'></script>
<script type='text/javascript' src='plugins/js_composer/assets/js/vendors/woocommerce-add-to-carta288.js?ver=4.8.1'></script>
<script type='text/javascript' src='themes/unicaevents/fw/js/photostack/modernizr.min.js'></script>
<script type="text/javascript" src="plugins/revslider/public/assets/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="plugins/revslider/public/assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="plugins/revslider/public/assets/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="plugins/revslider/public/assets/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript">jQuery(document).ready(function(){var e=function(e){var a="";return data={},data.action="revslider_ajax_call_front",data.client_action="get_slider_html",data.token="5ce6c99929",data.type=e.type,data.id=e.id,data.aspectratio=e.aspectratio,jQuery.ajax({type:"post",url:"wp-admin/admin-ajax.php",dataType:"json",data:data,async:!1,success:function(e,t,n){1==e.success&&(a=e.data)},error:function(e){console.log(e)}}),a},a=function(e){return jQuery(e.selector+" .rev_slider").revkill()},t=setInterval(function(){void 0!=jQuery.fn.tpessential&&(clearInterval(t),"undefined"!=typeof jQuery.fn.tpessential.defaults&&jQuery.fn.tpessential.defaults.ajaxTypes.push({type:"revslider",func:e,killfunc:a,openAnimationSpeed:.3}))},30)});</script>
<style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1445946460653{background-color: rgba(242,242,244,0.8) !important;*background-color: rgb(242,242,244) !important;}.vc_custom_1446027109651{border-top-width: 4px !important;background-image: url(uploads/2015/10/Rectangle-6-copyf23d.jpg?id=199) !important;border-top-color: rgba(39,37,48,0.15) !important;border-top-style: solid !important;}.vc_custom_1446032902066{background-color: #f5f5f6 !important;}.vc_custom_1446813363327{background-image: url(http://unicaevents.ancorathemes.com/wp-content/uploads/2015/10/er1.jpg?id=954) !important;}.vc_custom_1446045661779{background-color: #f5f5f6 !important;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>
<link href="css/additional-style.css" rel="stylesheet" type="text/css"/>
</head>

<body class="home page page-id-133 page-template-default unicaevents_body body_style_wide body_filled theme_skin_default article_style_stretch layout_single-standard template_single-standard top_panel_show top_panel_above sidebar_hide sidebar_outer_hide wpb-js-composer js-comp-ver-4.8.1 vc_responsive">
<a id="toc_home" class="sc_anchor" title="Home" data-description="&lt;i&gt;Return to Home&lt;/i&gt; - &lt;br&gt;navigate to home page of the site" data-icon="icon-home" data-url="http://unicaevents.ancorathemes.com" data-separator="yes"></a><a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-double-up" data-url="" data-separator="yes"></a>
<div class="body_wrap" style="background-color: #CD714F;">
<div class="page_wrap">
<div class="top_panel_fixed_wrap"></div>

<?php include('includes/header.php'); ?>

<?php include('includes/homepage-slider.php'); ?>

<div class="page_content_wrap page_paddings_no">

<div class="content_wrap"><div class="content"><article class="itemscope post_item post_item_single post_featured_center post_format_standard post-133 page type-page status-publish hentry" itemscope itemtype="http://schema.org/Article"><section class="post_content" itemprop="articleBody"><div class="sc_reviews alignright"><!-- #TRX_REVIEWS_PLACEHOLDER# --></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1445946460653"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper"><div class="sc_content content_wrap"><h4 class="sc_title sc_title_underline sc_align_center margin_top_medium margin_bottom_tiny" style="text-align:center;font-size:2.143em;">It’s simple. You have an event to plan and<br />
we have <span style="color: #fcb41e;">the solutions</span></h4><h3 class="sc_title sc_title_style1 sc_align_center margin_top_medium margin_bottom_huge" style="text-align:center;"><span class="sc_title_style1_before"></span>Here is how we can help you<span class="sc_title_style1_after"></span></h3><div id="sc_services_1921332853_wrap" class="sc_services_wrap"><div id="sc_services_1921332853" class="sc_services sc_services_style_services-1 sc_services_type_icons  sc_slider_nopagination sc_slider_nocontrols margin_bottom_large" style="width:100%;" data-interval="6796" data-slides-per-view="4"><div class="sc_columns columns_wrap"><div class="column-1_4 column_padding_bottom">			<div id="sc_services_1921332853_1"				class="sc_services_item sc_services_item_1 odd first"
>
<div class="sc_services_item_content">
<a class="icon_link" href="services/anniversaries/index.html"><span class="sc_icon icon-page1_icon1"></span></a>					<h4 class="sc_services_item_title"><a href="services/anniversaries/index.html">Social</a></h4>
<div class="sc_services_item_description">
<div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">
<p>From a sweet 16 pary to a 50th birthday celebration&#8230;</p>

</div>
</div>					</div>
</div>
<a href="services/anniversaries/index.html" class="sc_services_item_readmore">more</a>			</div>
</div><div class="column-1_4 column_padding_bottom">			<div id="sc_services_1921332853_2"				class="sc_services_item sc_services_item_2 even"
>
<div class="sc_services_item_content">
<a class="icon_link" href="services/special-occasions/index.html"><span class="sc_icon icon-page1_icon2"></span></a>					<h4 class="sc_services_item_title"><a href="services/special-occasions/index.html">Weddings</a></h4>
<div class="sc_services_item_description">
<div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">
<p>From a sweet 16 pary to a 50th birthday celebration&#8230;</p>

</div>
</div>					</div>
</div>
<a href="services/special-occasions/index.html" class="sc_services_item_readmore">more</a>			</div>
</div><div class="column-1_4 column_padding_bottom">			<div id="sc_services_1921332853_3"				class="sc_services_item sc_services_item_3 odd"
>
<div class="sc_services_item_content">
<a class="icon_link" href="services/engagement-parties/index.html"><span class="sc_icon icon-page1_icon3"></span></a>					<h4 class="sc_services_item_title"><a href="services/engagement-parties/index.html">Proposals</a></h4>
<div class="sc_services_item_description">
<div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">
<p>From a sweet 16 pary to a 50th birthday celebration&#8230;</p>

</div>
</div>					</div>
</div>
<a href="services/engagement-parties/index.html" class="sc_services_item_readmore">more</a>			</div>
</div><div class="column-1_4 column_padding_bottom">			<div id="sc_services_1921332853_4"				class="sc_services_item sc_services_item_4 even"
>
<div class="sc_services_item_content">
<a class="icon_link" href="services/holiday-parties/index.html"><span class="sc_icon icon-page1_icon4"></span></a>					<h4 class="sc_services_item_title"><a href="services/holiday-parties/index.html">Corporate</a></h4>
<div class="sc_services_item_description">
<div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">
<p>From a sweet 16 pary to a 50th birthday celebration&#8230;</p>

</div>
</div>					</div>
</div>
<a href="services/holiday-parties/index.html" class="sc_services_item_readmore">more</a>			</div>
</div></div></div><!-- /.sc_services --></div><!-- /.sc_services_wrap --></div></div></div></div><div class="vc_row-full-width"></div><div id="homepage-hello" class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper"><div class="sc_content content_wrap" style=" padding-bottom: 1.15em;"><h3 class="sc_title sc_title_underline sc_align_center margin_bottom_tiny" style="text-align:center;font-size:3.929em;"><span style="color: #fcb41e;">Hello!</span> We Are an Event Planning Agency</h3><div class="columns_wrap sc_columns columns_nofluid sc_columns_count_1 margin_top_tiny- margin_bottom_huge" style="margin:0 auto;width:62%;"><div class="column-1_1 sc_column_item sc_column_item_1 odd first">
<div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">
<p style="text-align: center;">As the premier event planning company in the area, we know that it’s not “one size fits all”. Each event and client is unique and we believe our services should be as well. We know that it should be “Can I hire a planner?” not “Can I afford one?”.</p>

</div>
</div>
</div></div><div class="columns_wrap sc_columns columns_nofluid sc_columns_count_4 margin_bottom_huge"><div class="column-1_4 sc_column_item sc_column_item_1 odd first"><div class="sc_section" data-animation="animated fadeIn normal"><div class="sc_section_inner"><span class="sc_icon icon-page1_icon5 aligncenter"></span><h4 style="font-size: 1.214em;color: #272530;text-align: center" class="vc_custom_heading icon_title">Find the perfect venue for free</h4><span class="sc_icon none aligncenter number_icon "></span></div></div></div><div class="column-1_4 sc_column_item sc_column_item_2 even"><div class="sc_section" data-animation="animated fadeIn normal"><div class="sc_section_inner"><span class="sc_icon icon-page1_icon6 aligncenter"></span><h4 style="font-size: 1.214em;color: #272530;text-align: center" class="vc_custom_heading icon_title">Connect with the best vendor</h4><span class="sc_icon none aligncenter number_icon "></span></div></div></div><div class="column-1_4 sc_column_item sc_column_item_3 odd"><div class="sc_section"><div class="sc_section_inner"><span class="sc_icon icon-page1_icon7 aligncenter"></span><h4 style="font-size: 1.214em;color: #272530;text-align: center" class="vc_custom_heading icon_title">Let us help you with the event</h4><span class="sc_icon none aligncenter number_icon "></span></div></div></div><div class="column-1_4 sc_column_item sc_column_item_4 even"><div class="sc_section" data-animation="animated fadeIn normal"><div class="sc_section_inner"><span class="sc_icon icon-page1_icon8 aligncenter"></span><h4 style="font-size: 1.214em;color: #272530;text-align: center" class="vc_custom_heading icon_title">Enjoy the party with your friends</h4><span class="sc_icon none aligncenter number_icon "></span></div></div></div></div></div></div></div></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1446027109651"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper"><div class="sc_content content_wrap" style=" padding-top: 2.5em; padding-bottom: 2.7em;"><div id="sc_skills_diagram_66533309" class="sc_skills sc_skills_counter margin_top_huge margin_bottom_huge" data-type="counter" data-caption="Skills"><div class="columns_wrap sc_skills_columns sc_skills_columns_4"><div class="sc_skills_column column-1_4"><div class="sc_skills_item sc_skills_style_2 odd first"><div class="sc_skills_count"></div><div class="sc_skills_total" data-start="0" data-stop="67" data-step="1" data-max="100" data-speed="30" data-duration="2010" data-ed=""style="color:#ffffff; border-color:#d7d7d7">0</div><div class="sc_skills_info"><div class="sc_skills_label"
style="color:#ffffff; border-color:#d7d7d7"


>Projects</div></div></div></div><div class="sc_skills_column column-1_4"><div class="sc_skills_item sc_skills_style_2 even"><div class="sc_skills_count"></div><div class="sc_skills_total" data-start="0" data-stop="117" data-step="1" data-max="117" data-speed="19" data-duration="2223" data-ed=""style="color:#ffffff; border-color:#d7d7d7">0</div><div class="sc_skills_info"><div class="sc_skills_label"
style="color:#ffffff; border-color:#d7d7d7"


>Clients</div></div></div></div><div class="sc_skills_column column-1_4"><div class="sc_skills_item sc_skills_style_2 odd"><div class="sc_skills_count"></div><div class="sc_skills_total" data-start="0" data-stop="18" data-step="1" data-max="117" data-speed="29" data-duration="522" data-ed=""style="color:#ffffff; border-color:#d7d7d7">0</div><div class="sc_skills_info"><div class="sc_skills_label"
style="color:#ffffff; border-color:#d7d7d7"


>Members</div></div></div></div><div class="sc_skills_column column-1_4"><div class="sc_skills_item sc_skills_style_2 even"><div class="sc_skills_count"></div><div class="sc_skills_total" data-start="0" data-stop="12" data-step="1" data-max="117" data-speed="25" data-duration="300" data-ed=""style="color:#ffffff; border-color:#d7d7d7">0</div><div class="sc_skills_info"><div class="sc_skills_label"
style="color:#ffffff; border-color:#d7d7d7"


>Awards</div></div></div></div></div></div></div></div></div></div><div class="vc_row-full-width"></div><div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper"><h2 class="sc_title sc_title_underline sc_align_center margin_bottom_tiny" style="margin-top:1.5em;text-align:center;">Gallery</h2><h6 class="sc_title sc_title_style1 sc_align_center margin_top_medium margin_bottom_large" style="text-align:center;"><span class="sc_title_style1_before"></span>our recent projects<span class="sc_title_style1_after"></span></h6><div class="sc_section"><div class="sc_section_inner"><style type="text/css">a.eg-henryharrison-element-1,a.eg-henryharrison-element-2{-webkit-transition:all .4s linear;   -moz-transition:all .4s linear;   -o-transition:all .4s linear;   -ms-transition:all .4s linear;   transition:all .4s linear}.eg-jimmy-carter-element-11 i:before{margin-left:0px; margin-right:0px}.eg-harding-element-17{letter-spacing:1px}.eg-harding-wrapper .esg-entry-media{overflow:hidden; box-sizing:border-box;   -webkit-box-sizing:border-box;   -moz-box-sizing:border-box;   padding:30px 30px 0px 30px}.eg-harding-wrapper .esg-entry-media img{overflow:hidden; border-radius:50%;   -webkit-border-radius:50%;   -moz-border-radius:50%}.eg-ulysses-s-grant-wrapper .esg-entry-media{overflow:hidden; box-sizing:border-box;   -webkit-box-sizing:border-box;   -moz-box-sizing:border-box;   padding:30px 30px 0px 30px}.eg-ulysses-s-grant-wrapper .esg-entry-media img{overflow:hidden; border-radius:50%;   -webkit-border-radius:50%;   -moz-border-radius:50%}.eg-richard-nixon-wrapper .esg-entry-media{overflow:hidden; box-sizing:border-box;   -webkit-box-sizing:border-box;   -moz-box-sizing:border-box;   padding:30px 30px 0px 30px}.eg-richard-nixon-wrapper .esg-entry-media img{overflow:hidden; border-radius:50%;   -webkit-border-radius:50%;   -moz-border-radius:50%}.eg-herbert-hoover-wrapper .esg-entry-media img{filter:url("data:image/svg+xml;utf8,<svg xmlns='../www.w3.org/2000/svg.html'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");   filter:gray;   -webkit-filter:grayscale(100%)}.eg-herbert-hoover-wrapper:hover .esg-entry-media img{filter:url("data:image/svg+xml;utf8,<svg xmlns='../www.w3.org/2000/svg.html'><filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/></filter></svg>#grayscale");  -webkit-filter:grayscale(0%)}.eg-lyndon-johnson-wrapper .esg-entry-media img{filter:url("data:image/svg+xml;utf8,<svg xmlns='../www.w3.org/2000/svg.html'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");   filter:gray;   -webkit-filter:grayscale(100%)}.eg-lyndon-johnson-wrapper:hover .esg-entry-media img{filter:url("data:image/svg+xml;utf8,<svg xmlns='../www.w3.org/2000/svg.html'><filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/></filter></svg>#grayscale");  -webkit-filter:grayscale(0%)}.esg-overlay.eg-ronald-reagan-container{background:-moz-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-webkit-gradient(linear,left top,left bottom,color-stop(50%,rgba(0,0,0,0)),color-stop(99%,rgba(0,0,0,0.83)),color-stop(100%,rgba(0,0,0,0.85))); background:-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-o-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-ms-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:linear-gradient(to bottom,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000',endColorstr='#d9000000',GradientType=0 )}.eg-georgebush-wrapper .esg-entry-cover{background:-moz-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-webkit-gradient(linear,left top,left bottom,color-stop(50%,rgba(0,0,0,0)),color-stop(99%,rgba(0,0,0,0.83)),color-stop(100%,rgba(0,0,0,0.85))); background:-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-o-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-ms-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:linear-gradient(to bottom,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000',endColorstr='#d9000000',GradientType=0 )}.eg-jefferson-wrapper{-webkit-border-radius:5px !important; -moz-border-radius:5px !important; border-radius:5px !important; -webkit-mask-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAA5JREFUeNpiYGBgAAgwAAAEAAGbA+oJAAAAAElFTkSuQmCC) !important}.eg-monroe-element-1{text-shadow:0px 1px 3px rgba(0,0,0,0.1)}.eg-lyndon-johnson-wrapper .esg-entry-cover{background:-moz-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-webkit-gradient(radial,center center,0px,center center,100%,color-stop(0%,rgba(0,0,0,0.35)),color-stop(96%,rgba(18,18,18,0)),color-stop(100%,rgba(19,19,19,0))); background:-webkit-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-o-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-ms-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:radial-gradient(ellipse at center,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#59000000',endColorstr='#00131313',GradientType=1 )}.eg-wilbert-wrapper .esg-entry-cover{background:-moz-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-webkit-gradient(radial,center center,0px,center center,100%,color-stop(0%,rgba(0,0,0,0.35)),color-stop(96%,rgba(18,18,18,0)),color-stop(100%,rgba(19,19,19,0))); background:-webkit-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-o-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:-ms-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); background:radial-gradient(ellipse at center,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#59000000',endColorstr='#00131313',GradientType=1 )}.eg-wilbert-wrapper .esg-entry-media img{-webkit-transition:0.4s ease-in-out;  -moz-transition:0.4s ease-in-out;  -o-transition:0.4s ease-in-out;  transition:0.4s ease-in-out;  filter:url("data:image/svg+xml;utf8,<svg xmlns='../www.w3.org/2000/svg.html'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");   filter:gray;   -webkit-filter:grayscale(100%)}.eg-wilbert-wrapper:hover .esg-entry-media img{filter:url("data:image/svg+xml;utf8,<svg xmlns='../www.w3.org/2000/svg.html'><filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/></filter></svg>#grayscale");  -webkit-filter:grayscale(0%)}.eg-phillie-element-3:after{content:" ";width:0px;height:0px;border-style:solid;border-width:5px 5px 0 5px;border-color:#000 transparent transparent transparent;left:50%;margin-left:-5px; bottom:-5px; position:absolute}.eg-howardtaft-wrapper .esg-entry-media img,.eg-howardtaft-wrapper .esg-media-poster{filter:url("data:image/svg+xml;utf8,<svg xmlns='../www.w3.org/2000/svg.html'><filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/></filter></svg>#grayscale");  -webkit-filter:grayscale(0%)}.eg-howardtaft-wrapper:hover .esg-entry-media img,.eg-howardtaft-wrapper:hover .esg-media-poster{filter:url("data:image/svg+xml;utf8,<svg xmlns='../www.w3.org/2000/svg.html'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");   filter:gray;   -webkit-filter:grayscale(100%)}.myportfolio-container .added_to_cart.wc-forward{font-family:"Open Sans"; font-size:13px; color:#fff; margin-top:10px}.esgbox-title.esgbox-title-outside-wrap{font-size:15px; font-weight:700; text-align:center}.esgbox-title.esgbox-title-inside-wrap{padding-bottom:10px; font-size:15px; font-weight:700; text-align:center}</style>
<!-- CACHE FOUND FOR: 1 --><style type="text/css">.minimal-light .navigationbuttons,.minimal-light .esg-pagination,.minimal-light .esg-filters{text-align:center}.minimal-light .esg-filterbutton,.minimal-light .esg-navigationbutton,.minimal-light .esg-sortbutton,.minimal-light .esg-cartbutton a{color:#999; margin-right:5px; cursor:pointer; padding:0px 16px; border:1px solid #e5e5e5; line-height:38px; border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; font-size:12px; font-weight:700; font-family:"Open Sans",sans-serif; display:inline-block; background:#fff; margin-bottom:5px}.minimal-light .esg-navigationbutton *{color:#999}.minimal-light .esg-navigationbutton{padding:0px 16px}.minimal-light .esg-pagination-button:last-child{margin-right:0}.minimal-light .esg-left,.minimal-light .esg-right{padding:0px 11px}.minimal-light .esg-sortbutton-wrapper,.minimal-light .esg-cartbutton-wrapper{display:inline-block}.minimal-light .esg-sortbutton-order,.minimal-light .esg-cartbutton-order{display:inline-block;  vertical-align:top;  border:1px solid #e5e5e5;  width:40px;  line-height:38px;  border-radius:0px 5px 5px 0px;  -moz-border-radius:0px 5px 5px 0px;  -webkit-border-radius:0px 5px 5px 0px;  font-size:12px;  font-weight:700;  color:#999;  cursor:pointer;  background:#fff}.minimal-light .esg-cartbutton{color:#333; cursor:default !important}.minimal-light .esg-cartbutton .esgicon-basket{color:#333;   font-size:15px;   line-height:15px;   margin-right:10px}.minimal-light .esg-cartbutton-wrapper{cursor:default !important}.minimal-light .esg-sortbutton,.minimal-light .esg-cartbutton{display:inline-block; position:relative; cursor:pointer; margin-right:0px; border-right:none; border-radius:5px 0px 0px 5px; -moz-border-radius:5px 0px 0px 5px; -webkit-border-radius:5px 0px 0px 5px}.minimal-light .esg-navigationbutton:hover,.minimal-light .esg-filterbutton:hover,.minimal-light .esg-sortbutton:hover,.minimal-light .esg-sortbutton-order:hover,.minimal-light .esg-cartbutton a:hover,.minimal-light .esg-filterbutton.selected{background-color:#fff;   border-color:#bbb;   color:#333;   box-shadow:0px 3px 5px 0px rgba(0,0,0,0.13)}.minimal-light .esg-navigationbutton:hover *{color:#333}.minimal-light .esg-sortbutton-order.tp-desc:hover{border-color:#bbb; color:#333; box-shadow:0px -3px 5px 0px rgba(0,0,0,0.13) !important}.minimal-light .esg-filter-checked{padding:1px 3px;  color:#cbcbcb;  background:#cbcbcb;  margin-left:7px;  font-size:9px;  font-weight:300;  line-height:9px;  vertical-align:middle}.minimal-light .esg-filterbutton.selected .esg-filter-checked,.minimal-light .esg-filterbutton:hover .esg-filter-checked{padding:1px 3px 1px 3px;  color:#fff;  background:#000;  margin-left:7px;  font-size:9px;  font-weight:300;  line-height:9px;  vertical-align:middle}</style>
<!-- ESSENTIAL GRID SKIN CSS -->
<style type="text/css">.eg-personal1-element-10{font-size:16px !important; line-height:22px !important; color:#ffffff !important; font-weight:400 !important; padding:17px 17px 17px 17px !important; border-radius:60px 60px 60px 60px !important; background-color:rgba(255,255,255,0.15) !important; z-index:2 !important; display:block; font-family:"Open Sans" !important; border-top-width:0px !important; border-right-width:0px !important; border-bottom-width:0px !important; border-left-width:0px !important; border-color:#ffffff !important; border-style:solid !important}.eg-personal1-element-0{font-size:16px !important; line-height:22px !important; color:#fcb41e !important; font-weight:400 !important; padding:14px 14px 14px 14px !important; border-radius:60px 60px 60px 60px !important; background-color:rgba(255,255,255,1.00) !important; z-index:2 !important; display:block; font-family:"Open Sans" !important; border-top-width:0px !important; border-right-width:0px !important; border-bottom-width:0px !important; border-left-width:0px !important; border-color:#ffffff !important; border-style:solid !important}.eg-personal1-element-11{font-size:12px !important; line-height:16px !important; color:#ffffff !important; font-weight:400 !important; padding:17px 17px 17px 17px !important; border-radius:60px 60px 60px 60px !important; background-color:rgba(252,180,30,1.00) !important; z-index:2 !important; display:block; border-top-width:0px !important; border-right-width:0px !important; border-bottom-width:0px !important; border-left-width:0px !important; border-color:#ffffff !important; border-style:solid !important}.eg-personal1-element-1{font-size:16px !important; line-height:22px !important; color:#fcb41e !important; font-weight:400 !important; padding:14px 14px 14px 14px !important; border-radius:60px 60px 60px 60px !important; background-color:rgba(255,255,255,1.00) !important; z-index:2 !important; display:block; border-top-width:0px !important; border-right-width:0px !important; border-bottom-width:0px !important; border-left-width:0px !important; border-color:#ffffff !important; border-style:solid !important}</style>
<style type="text/css">.eg-personal1-element-10:hover{font-size:16px !important; line-height:22px !important; color:#ffffff !important; font-weight:400 !important; border-radius:60px 60px 60px 60px !important; background-color:rgba(0,0,0,0.50) !important; border-top-width:0px !important; border-right-width:0px !important; border-bottom-width:0px !important; border-left-width:0px !important; border-color:#ffffff !important; border-style:solid !important}.eg-personal1-element-0:hover{font-size:16px !important; line-height:22px !important; color:#ffffff !important; font-weight:400 !important; border-radius:60px 60px 60px 60px !important; background-color:rgba(252,180,30,1.00) !important; border-top-width:0px !important; border-right-width:0px !important; border-bottom-width:0px !important; border-left-width:0px !important; border-color:#ffffff !important; border-style:solid !important}.eg-personal1-element-11:hover{font-size:12px !important; line-height:16px !important; color:#ffffff !important; font-weight:400 !important; border-radius:60px 60px 60px 60px !important; background-color:rgba(252,180,30,1.00) !important; border-top-width:0px !important; border-right-width:0px !important; border-bottom-width:0px !important; border-left-width:0px !important; border-color:#ffffff !important; border-style:solid !important}.eg-personal1-element-1:hover{font-size:16px !important; line-height:22px !important; color:#ffffff !important; font-weight:400 !important; border-radius:60px 60px 60px 60px !important; background-color:rgba(252,180,30,1.00) !important; border-top-width:0px !important; border-right-width:0px !important; border-bottom-width:0px !important; border-left-width:0px !important; border-color:#ffffff !important; border-style:solid !important}</style>
<style type="text/css">.eg-personal1-element-10-a{display:inline-block !important; float:none !important; clear:none !important; margin:0px 10px 0px 0px !important; position:relative !important}</style>
<style type="text/css">.eg-personal1-element-0-a{display:inline-block !important; float:none !important; clear:none !important; margin:0px -20px 0px 0px !important; position:relative !important}</style>
<style type="text/css">.eg-personal1-element-11-a{display:inline-block !important; float:none !important; clear:none !important; margin:0px 0px 0px 0px !important; position:relative !important}</style>
<style type="text/css">.eg-personal1-element-1-a{display:inline-block !important; float:none !important; clear:none !important; margin:0px 0px 0px -20px !important; position:relative !important}</style>
<style type="text/css">.eg-personal1-container{background-color:rgba(0,0,0,0.30)}</style>
<style type="text/css">.eg-personal1-content{background-color:#ffffff; padding:0px 0px 0px 0px; border-width:0px 0px 0px 0px; border-radius:0px 0px 0px 0px; border-color:transparent; border-style:double; text-align:center}</style>
<style type="text/css">.esg-grid .mainul li.eg-personal1-wrapper{background-color:#3f424a; padding:0px 0px 0px 0px; border-width:0px 0px 0px 0px; border-radius:0px 0px 0px 0px; border-color:transparent; border-style:none}</style>
<!-- ESSENTIAL GRID END SKIN CSS -->

<!-- THE ESSENTIAL GRID 2.0.8 -->

<!-- GRID WRAPPER FOR CONTAINER SIZING - HERE YOU CAN SET THE CONTAINER SIZE AND CONTAINER SKIN -->
<article class="myportfolio-container minimal-light" id="esg-grid-1-1-wrap">

<!-- THE GRID ITSELF WITH FILTERS, PAGINATION, SORTING ETC... -->
<div id="esg-grid-1-1" class="esg-grid" style="background-color: transparent;padding: 0px 20px 0px 20px ; box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box;">
<!-- ############################ -->
<!-- THE GRID ITSELF WITH ENTRIES -->
<!-- ############################ -->
<ul>
<!-- PORTFOLIO ITEM 45 -->
<li class="filterall filter-home-gallery eg-personal1-wrapper eg-post-id-204" data-date="1446026885">
<!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
<div class="esg-media-cover-wrapper">
<!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="uploads/2015/10/gallery-7.jpg" alt=""></div>

<!-- THE CONTENT OF THE ENTRY -->
<div class="esg-entry-cover">

<!-- THE COLORED OVERLAY -->
<div class="esg-overlay esg-fadeout eg-personal1-container" data-delay="0"></div>

<div class="esg-center eg-personal1-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
<div class="esg-center eg-post-204 eg-personal1-element-0-a esg-fade" data-delay="0.2"><a class="eg-personal1-element-0 eg-post-204 esgbox" href="uploads/2015/10/gallery-7.jpg" lgtitle="Planning It All Ahead"><i class="eg-icon-search"></i></a></div>
<div class="esg-center eg-post-204 eg-personal1-element-11-a esg-falldownout" data-delay="0.1"><a class="eg-personal1-element-11 eg-post-204 esgbox" href="uploads/2015/10/gallery-7.jpg" lgtitle="Planning It All Ahead"><i class="eg-icon-plus"></i></a></div>
<div class="esg-center eg-post-204 eg-personal1-element-1-a esg-fade" data-delay="0.2"><a class="eg-personal1-element-1 eg-post-204" href="planning-it-all-ahead/index.html" target="_self"><i class="eg-icon-link"></i></a></div>
<div class="esg-center eg-personal1-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
</div><!-- END OF THE CONTENT IN THE ENTRY -->
</div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li><!-- END OF PORTFOLIO ITEM -->
<!-- PORTFOLIO ITEM 45 -->
<li class="filterall filter-home-gallery eg-personal1-wrapper eg-post-id-207" data-date="1446026907">
<!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
<div class="esg-media-cover-wrapper">
<!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="uploads/2015/10/Depositphotos_1713895.jpg" alt=""></div>

<!-- THE CONTENT OF THE ENTRY -->
<div class="esg-entry-cover">

<!-- THE COLORED OVERLAY -->
<div class="esg-overlay esg-fadeout eg-personal1-container" data-delay="0"></div>

<div class="esg-center eg-personal1-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
<div class="esg-center eg-post-207 eg-personal1-element-0-a esg-fade" data-delay="0.2"><a class="eg-personal1-element-0 eg-post-207 esgbox" href="uploads/2015/10/Depositphotos_1713895.jpg" lgtitle="Planning Kids' Birthday Parties"><i class="eg-icon-search"></i></a></div>
<div class="esg-center eg-post-207 eg-personal1-element-11-a esg-falldownout" data-delay="0.1"><a class="eg-personal1-element-11 eg-post-207 esgbox" href="uploads/2015/10/Depositphotos_1713895.jpg" lgtitle="Planning Kids' Birthday Parties"><i class="eg-icon-plus"></i></a></div>
<div class="esg-center eg-post-207 eg-personal1-element-1-a esg-fade" data-delay="0.2"><a class="eg-personal1-element-1 eg-post-207" href="planning-kids-birthday-parties/index.html" target="_self"><i class="eg-icon-link"></i></a></div>
<div class="esg-center eg-personal1-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
</div><!-- END OF THE CONTENT IN THE ENTRY -->
</div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li><!-- END OF PORTFOLIO ITEM -->
<!-- PORTFOLIO ITEM 45 -->
<li class="filterall filter-home-gallery eg-personal1-wrapper eg-post-id-211" data-date="1446026936">
<!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
<div class="esg-media-cover-wrapper">
<!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="uploads/2015/08/Depositphotos_11340870_original.jpg" alt=""></div>

<!-- THE CONTENT OF THE ENTRY -->
<div class="esg-entry-cover">

<!-- THE COLORED OVERLAY -->
<div class="esg-overlay esg-fadeout eg-personal1-container" data-delay="0"></div>

<div class="esg-center eg-personal1-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
<div class="esg-center eg-post-211 eg-personal1-element-0-a esg-fade" data-delay="0.2"><a class="eg-personal1-element-0 eg-post-211 esgbox" href="uploads/2015/08/Depositphotos_11340870_original.jpg" lgtitle="Planning Bachelor and Bachelorette Parties"><i class="eg-icon-search"></i></a></div>
<div class="esg-center eg-post-211 eg-personal1-element-11-a esg-falldownout" data-delay="0.1"><a class="eg-personal1-element-11 eg-post-211 esgbox" href="uploads/2015/08/Depositphotos_11340870_original.jpg" lgtitle="Planning Bachelor and Bachelorette Parties"><i class="eg-icon-plus"></i></a></div>
<div class="esg-center eg-post-211 eg-personal1-element-1-a esg-fade" data-delay="0.2"><a class="eg-personal1-element-1 eg-post-211" href="planning-bachelor-and-bachelorette-parties/index.html" target="_self"><i class="eg-icon-link"></i></a></div>
<div class="esg-center eg-personal1-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
</div><!-- END OF THE CONTENT IN THE ENTRY -->
</div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li><!-- END OF PORTFOLIO ITEM -->
<!-- PORTFOLIO ITEM 45 -->
<li class="filterall filter-home-gallery eg-personal1-wrapper eg-post-id-213" data-date="1446026953">
<!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
<div class="esg-media-cover-wrapper">
<!-- THE MEDIA OF THE ENTRY -->
<div class="esg-entry-media"><img src="uploads/2015/10/gallery-2.jpg" alt=""></div>

<!-- THE CONTENT OF THE ENTRY -->
<div class="esg-entry-cover">

<!-- THE COLORED OVERLAY -->
<div class="esg-overlay esg-fadeout eg-personal1-container" data-delay="0"></div>

<div class="esg-center eg-personal1-element-8 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
<div class="esg-center eg-post-213 eg-personal1-element-0-a esg-fade" data-delay="0.2"><a class="eg-personal1-element-0 eg-post-213 esgbox" href="uploads/2015/10/gallery-2.jpg" lgtitle="The Most Importand Days in Your Life"><i class="eg-icon-search"></i></a></div>
<div class="esg-center eg-post-213 eg-personal1-element-11-a esg-falldownout" data-delay="0.1"><a class="eg-personal1-element-11 eg-post-213 esgbox" href="uploads/2015/10/gallery-2.jpg" lgtitle="The Most Importand Days in Your Life"><i class="eg-icon-plus"></i></a></div>
<div class="esg-center eg-post-213 eg-personal1-element-1-a esg-fade" data-delay="0.2"><a class="eg-personal1-element-1 eg-post-213" href="the-most-importand-days-in-your-life/index.html" target="_self"><i class="eg-icon-link"></i></a></div>
<div class="esg-center eg-personal1-element-9 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
</div><!-- END OF THE CONTENT IN THE ENTRY -->
</div><!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

</li><!-- END OF PORTFOLIO ITEM -->
</ul>
<!-- ############################ -->
<!--      END OF THE GRID         -->
<!-- ############################ -->
</div><!-- END OF THE GRID -->

</article>
<!-- END OF THE GRID WRAPPER -->

<div class="clear"></div>
<script type="text/javascript">
function eggbfc(winw,resultoption) {
var lasttop = winw,
lastbottom = 0,
smallest =9999,
largest = 0,
samount = 0,
lamoung = 0,
lastamount = 0,
resultid = 0,
resultidb = 0,
responsiveEntries = [
{ width:1400,amount:4},
{ width:1170,amount:4},
{ width:1024,amount:4},
{ width:960,amount:3},
{ width:778,amount:3},
{ width:640,amount:3},
{ width:480,amount:1}
];
if (responsiveEntries!=undefined && responsiveEntries.length>0)
jQuery.each(responsiveEntries, function(index,obj) {
var curw = obj.width != undefined ? obj.width : 0,
cura = obj.amount != undefined ? obj.amount : 0;
if (smallest>curw) {
smallest = curw;
samount = cura;
resultidb = index;
}
if (largest<curw) {
largest = curw;
lamount = cura;
}
if (curw>lastbottom && curw<=lasttop) {
lastbottom = curw;
lastamount = cura;
resultid = index;
}
})
if (smallest>winw) {
lastamount = samount;
resultid = resultidb;
}
var obj = new Object;
obj.index = resultid;
obj.column = lastamount;
if (resultoption=="id")
return obj;
else
return lastamount;
}
if ("even"=="even") {
var coh=0,
container = jQuery("#esg-grid-1-1");
var	cwidth = container.width(),
ar = "1:1",
gbfc = eggbfc(jQuery(window).width(),"id"),
row = 1;
ar = ar.split(":");
aratio=parseInt(ar[0],0) / parseInt(ar[1],0);
coh = cwidth / aratio;
coh = coh/gbfc.column*row;
var ul = container.find("ul").first();
ul.css({display:"block",height:coh+"px"});
}
var essapi_1;
jQuery(document).ready(function() {
essapi_1 = jQuery("#esg-grid-1-1").tpessential({
gridID:1,
layout:"even",
forceFullWidth:"off",
lazyLoad:"off",
row:1,
loadMoreAjaxToken:"f60249297e",
loadMoreAjaxUrl:"http://unicaevents.ancorathemes.com/wp-admin/admin-ajax.php",
loadMoreAjaxAction:"Essential_Grid_Front_request_ajax",
ajaxContentTarget:"ess-grid-ajax-container-",
ajaxScrollToOffset:"0",
ajaxCloseButton:"off",
ajaxContentSliding:"on",
ajaxScrollToOnLoad:"on",
ajaxNavButton:"off",
ajaxCloseType:"type1",
ajaxCloseInner:"false",
ajaxCloseStyle:"light",
ajaxClosePosition:"tr",
space:20,
pageAnimation:"fade",
paginationScrollToTop:"off",
spinner:"spinner0",
evenGridMasonrySkinPusher:"off",
lightBoxMode:"single",
animSpeed:1000,
delayBasic:1,
mainhoverdelay:1,
filterType:"single",
showDropFilter:"hover",
filterGroupClass:"esg-fgc-1",
googleFonts:['Open+Sans:300,400,600,700,800','Raleway:100,200,300,400,500,600,700,800,900','Droid+Serif:400,700'],
aspectratio:"1:1",
responsiveEntries: [
{ width:1400,amount:4},
{ width:1170,amount:4},
{ width:1024,amount:4},
{ width:960,amount:3},
{ width:778,amount:3},
{ width:640,amount:3},
{ width:480,amount:1}
]
});

try{
jQuery("#esg-grid-1-1 .esgbox").esgbox({
padding : [0,0,0,0],
afterLoad:function() { 
if (this.element.hasClass("esgboxhtml5")) {
var mp = this.element.data("mp4"),
ogv = this.element.data("ogv"),
webm = this.element.data("webm");
this.content ='<div style="width:100%;height:100%;"><video autoplay="true" loop="" class="rowbgimage" poster="" width="100%" height="auto"><source src="'+mp+'" type="video/mp4"><source src="'+webm+'" type="video/webm"><source src="'+ogv+'" type="video/ogg"></video></div>';	
var riint = setInterval(function() {jQuery(window).trigger("resize");},100); setTimeout(function() {clearInterval(riint);},2500);
};
},
beforeShow : function () { 
this.title = jQuery(this.element).attr('lgtitle');
if (this.title) {
this.title="";
this.title =  '<div style="padding:0px 0px 0px 0px">'+this.title+'</div>';
}
},
afterShow : function() {
},
openEffect : 'fade',
closeEffect : 'fade',
nextEffect : 'fade',
prevEffect : 'fade',
openSpeed : 'normal',
closeSpeed : 'normal',
nextSpeed : 'normal',
prevSpeed : 'normal',
helpers : {
media : {},
title : {
type:""
}
}
});

} catch (e) {}

});
</script>
</div></div></div></div></div><div class="vc_row-full-width"></div><div id="call-to" class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper"><div class="sc_content content_wrap" style=" padding-top: 3.5em; padding-bottom: 1.85em;"><div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2"><div class="column-1_2 sc_column_item sc_column_item_1 odd first" style="width:55%"><h3 class="sc_title sc_title_regular sc_align_right" style="margin-top: 0.4em;text-align:right;">See Our <span style="color: #fcb41e;">Best Events</span> Gallery!</h3></div><div class="column-1_2 sc_column_item sc_column_item_2 even" style="width:45%"><a href="grid-gallery/index.html" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small">Visit Gallery</a></div></div></div></div></div></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1446032902066"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper"><div class="sc_content content_wrap" style="padding-bottom:1em;"><h2 class="sc_title sc_title_underline sc_align_center margin_top_small margin_bottom_tiny" style="text-align:center;">Testimonials</h2><h6 class="sc_title sc_title_style1 sc_align_center margin_bottom_large" style="text-align:center;"><span class="sc_title_style1_before"></span>Happy clients about us<span class="sc_title_style1_after"></span></h6><div id="sc_testimonials_1173590356" class="sc_testimonials sc_testimonials_style_testimonials-1  sc_slider_swiper swiper-slider-container sc_slider_nopagination sc_slider_controls sc_slider_controls_bottom margin_bottom_medium" data-interval="70000" data-slides-per-view="3" style="width:100%;"><div class="slides swiper-wrapper"><div class="swiper-slide" data-style="width:100%;" style="width:100%;">			<div id="sc_testimonials_1173590356_1" class="sc_testimonial_item">
<div class="sc_testimonial_content"><p>My family and I are beyond happy to have them plan our wedding day.</p></div>
<div class="sc_testimonial_avatar"><img class="wp-post-image" width="75" height="75" alt="Jessica Mann" src="uploads/2015/10/testimonial-1-150x150.jpg"></div>
                        <div class="sc_testimonial_author"><span class="sc_testimonial_author_name">Jessica Mann</span></div>
</div>
</div><div class="swiper-slide" data-style="width:100%;" style="width:100%;">			<div id="sc_testimonials_1173590356_2" class="sc_testimonial_item">
<div class="sc_testimonial_content"><p>Look no further! You are in the right place to plan your celebration.</p></div>
<div class="sc_testimonial_avatar"><img class="wp-post-image" width="75" height="75" alt="Linda Movrizza" src="uploads/2015/10/testimonial-2-150x150.jpg"></div>
                        <div class="sc_testimonial_author"><span class="sc_testimonial_author_name">Linda Movrizza</span></div>
</div>
</div><div class="swiper-slide" data-style="width:100%;" style="width:100%;">			<div id="sc_testimonials_1173590356_3" class="sc_testimonial_item">
<div class="sc_testimonial_content"><p>I invited these event planner to arrange a bachelor party for my best friend!</p></div>
<div class="sc_testimonial_avatar"><img class="wp-post-image" width="75" height="75" alt="John Snow" src="uploads/2015/10/testimonial-3-150x150.jpg"></div>
                        <div class="sc_testimonial_author"><span class="sc_testimonial_author_name">John Snow</span></div>
</div>
</div><div class="swiper-slide" data-style="width:100%;" style="width:100%;">			<div id="sc_testimonials_1173590356_4" class="sc_testimonial_item">
<div class="sc_testimonial_content"><p>Perfect decoration and perfect buffet for my little sister's birthday party!</p></div>
<div class="sc_testimonial_avatar"><img class="wp-post-image" width="75" height="75" alt="Jane Sanders" src="uploads/2015/10/testimonial-4-150x150.jpg"></div>
                        <div class="sc_testimonial_author"><span class="sc_testimonial_author_name">Jane Sanders</span></div>
</div>
</div></div><div class="sc_slider_controls_wrap"><a class="sc_slider_prev" href="#"></a><a class="sc_slider_next" href="#"></a></div><div class="sc_slider_pagination_wrap"></div></div></div></div></div></div><div class="vc_row-full-width"></div><div id="form-parallax" data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1446813363327 vc_row-no-padding"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper"><div class="sc_content content_wrap"><div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2"><div class="column-1_2 sc_column_item sc_column_item_1 odd first"></div><div class="column-1_2 sc_column_item sc_column_item_2 even"><h2 class="sc_title sc_title_underline sc_align_center margin_top_small margin_bottom_tiny" style="text-align:center;color:#ffffff;">Online Request</h2><h6 class="sc_title sc_title_style1 sc_align_center margin_top_small margin_bottom_large" style="text-align:center;color:#ffffff;"><span class="sc_title_style1_before" style="background-color: #ffffff"></span>Drop us a few lines<span class="sc_title_style1_after" style="background-color: #ffffff"></span></h6><div  id="sc_form_2139652142_wrap" class="sc_form_wrap"><div  id="sc_form_2139652142" class="sc_form sc_form_style_form_1 aligncenter margin_bottom_huge" style="width:88%;">		<form  id="sc_form_2139652142" data-formtype="form_1" method="post" action="http://unicaevents.ancorathemes.com/wp-admin/admin-ajax.php">
<div class="sc_form_info">
<div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">
<div class="column-1_2 sc_column_item sc_column_item_1"><div class="sc_form_item sc_form_field label_over"><label class="required" for="sc_form_username">Name:</label><input id="sc_form_username" type="text" name="username" placeholder="Name:"></div></div>
<div class="column-1_2 sc_column_item sc_column_item_2"><div class="sc_form_item sc_form_field label_over"><label class="required" for="sc_form_phone">Phone:</label><input id="sc_form_phone" type="text" name="phone" placeholder="Phone:"></div></div>
</div>
</div>
<div class="sc_form_item sc_form_message label_over"><label class="required" for="sc_form_message">Message</label><textarea id="sc_form_message" name="message" placeholder="Message:"></textarea></div>
<div class="sc_form_item sc_form_button"><button>send</button></div>
<div class="result sc_infobox"></div>
</form>
</div></div></div></div></div></div></div></div><div class="vc_row-full-width"></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1446045661779"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper"><div class="sc_content content_wrap margin_top_huge margin_bottom_large"><div class="columns_wrap sc_columns columns_nofluid sc_columns_count_4 contact-row "><div class="column-1_4 sc_column_item sc_column_item_1 odd first"><div class="sc_section"><div class="sc_section_inner"><span class="sc_icon icon-contacts_icon1 aligncenter" style="font-size:2.35em; line-height: 1em;color:#ff635c;"></span><h6 class="sc_title sc_title_regular sc_align_center" style="text-align:center;">Postal Address</h6>
<div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">
<p style="text-align: center;">Unica Event Agency<br />
85 Fentiman Ave<br />
Ottawa, ON K1S 0T7</p>

</div>
</div>
</div></div></div><div class="column-1_4 sc_column_item sc_column_item_2 even"><div class="sc_section"><div class="sc_section_inner"><span class="sc_icon icon-contacts_icon2 aligncenter" style="font-size:2.35em; line-height: 1em;color:#ff635c;"></span><h6 class="sc_title sc_title_regular sc_align_center" style="text-align:center;">Phone &amp; E-mail</h6>
<div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">
<p style="text-align: center;">Phone: 1-800-64-38<br />
Fax: 1-800-64-39<br />
<a href="cdn-cgi/l/email-protection.html#bfd0d9d9d6dcdaffd9deddd3da91dcd0d2"><span class="__cf_email__" data-cfemail="234c45454a4046634542414f460d404c4e">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">
/* <![CDATA[ */!function(){try{var t="currentScript"in document?document.currentScript:function(){for(var t=document.getElementsByTagName("script"),e=t.length;e--;)if(t[e].getAttribute("data-cfhash"))return t[e]}();if(t&&t.previousSibling){var e,r,n,i,c=t.previousSibling,a=c.getAttribute("data-cfemail");if(a){for(e="",r=parseInt(a.substr(0,2),16),n=2;a.length-n;n+=2)i=parseInt(a.substr(n,2),16)^r,e+=String.fromCharCode(i);e=document.createTextNode(e),c.parentNode.replaceChild(e,c)}t.parentNode.removeChild(t);}}catch(u){}}()/* ]]> */</script></a></p>

</div>
</div>
</div></div></div><div class="column-1_4 sc_column_item sc_column_item_3 odd"><div class="sc_section"><div class="sc_section_inner"><span class="sc_icon icon-contacts_icon3 aligncenter" style="font-size:2.35em; line-height: 1em;color:#ff635c;"></span><h6 class="sc_title sc_title_regular sc_align_center" style="text-align:center;">Open Hours</h6>
<div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">
<p style="text-align: center;">Monday – Friday<br />
8.00 am – 5.00 pm<br />
Weekend Closed</p>

</div>
</div>
</div></div></div><div class="column-1_4 sc_column_item sc_column_item_4 even"><div class="sc_section"><div class="sc_section_inner"><span class="sc_icon icon-contacts_icon4 aligncenter" style="font-size:2.35em; line-height: 1em;color:#ff635c;"></span><h6 class="sc_title sc_title_regular sc_align_center" style="text-align:center;">Sessions</h6>
<div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">
<p style="text-align: center;">Mornings, 8 am – 12 noon<br />
Afternoons, 1 pm – 5 pm<br />
Full Day, 8 am – 5 pm</p>

</div>
</div>
</div></div></div></div></div></div></div></div><div class="vc_row-full-width"></div></section> <!-- </section> class="post_content" itemprop="articleBody"> --></article> <!-- </article> class="itemscope post_item post_item_single post_featured_center post_format_standard post-133 page type-page status-publish hentry" itemscope itemtype="http://schema.org/Article"> -->	<section class="related_wrap related_wrap_empty"></section>
</div> <!-- </div> class="content"> --></div> <!-- </div> class="content_wrap"> -->			
</div>		<!-- </.page_content_wrap> -->

<div id="sc_googlemap_519873279" class="sc_googlemap" style="width:100%;height:243px;" data-zoom="10" data-style="style1"><div id="sc_googlemap_519873279_1" class="sc_googlemap_marker" data-title="" data-description="" data-address="123, New Lenox Chicago, IL 60606" data-latlng="" data-point="uploads/2015/11/ico.png"></div></div>				
<?php include('includes/footer.php'); ?>

</div>	<!-- /.page_wrap -->

</div>		<!-- /.body_wrap -->

<a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>
<div class="custom_html_section"></div>

<script type="text/javascript">if (typeof UNICAEVENTS_GLOBALS == 'undefined') var UNICAEVENTS_GLOBALS = {};if (UNICAEVENTS_GLOBALS['theme_font']=='') UNICAEVENTS_GLOBALS['theme_font'] = 'Open Sans';UNICAEVENTS_GLOBALS['theme_skin_color'] = '#272530';UNICAEVENTS_GLOBALS['theme_skin_bg_color'] = '#ffffff';</script><script type="text/javascript">if (typeof UNICAEVENTS_GLOBALS == 'undefined') var UNICAEVENTS_GLOBALS = {};UNICAEVENTS_GLOBALS["strings"] = {ajax_error: 			"Invalid server answer",bookmark_add: 		"Add the bookmark",bookmark_added:		"Current page has been successfully added to the bookmarks. You can see it in the right panel on the tab &#039;Bookmarks&#039;",bookmark_del: 		"Delete this bookmark",bookmark_title:		"Enter bookmark title",bookmark_exists:		"Current page already exists in the bookmarks list",search_error:		"Error occurs in AJAX search! Please, type your query and press search icon for the traditional search way.",email_confirm:		"On the e-mail address &quot;%s&quot; we sent a confirmation email. Please, open it and click on the link.",reviews_vote:		"Thanks for your vote! New average rating is:",reviews_error:		"Error saving your vote! Please, try again later.",error_like:			"Error saving your like! Please, try again later.",error_global:		"Global error text",name_empty:			"The name can&#039;t be empty",name_long:			"Too long name",email_empty:			"Too short (or empty) email address",email_long:			"Too long email address",email_not_valid:		"Invalid email address",subject_empty:		"The subject can&#039;t be empty",subject_long:		"Too long subject",text_empty:			"The message text can&#039;t be empty",text_long:			"Too long message text",send_complete:		"Send message complete!",send_error:			"Transmit failed!",login_empty:			"The Login field can&#039;t be empty",login_long:			"Too long login field",login_success:		"Login success! The page will be reloaded in 3 sec.",login_failed:		"Login failed!",password_empty:		"The password can&#039;t be empty and shorter then 4 characters",password_long:		"Too long password",password_not_equal:	"The passwords in both fields are not equal",registration_success:"Registration success! Please log in!",registration_failed:	"Registration failed!",geocode_error:		"Geocode was not successful for the following reason:",googlemap_not_avail:	"Google map API not available!",editor_save_success:	"Post content saved!",editor_save_error:	"Error saving post data!",editor_delete_post:	"You really want to delete the current post?",editor_delete_post_header:"Delete post",editor_delete_success:	"Post deleted!",editor_delete_error:		"Error deleting post!",editor_caption_cancel:	"Cancel",editor_caption_close:	"Close"};</script><script type="text/javascript">if (typeof UNICAEVENTS_GLOBALS == 'undefined') var UNICAEVENTS_GLOBALS = {};UNICAEVENTS_GLOBALS['ajax_url']			 = 'wp-admin/admin-ajax.html';UNICAEVENTS_GLOBALS['ajax_nonce']		 = 'ea383efd1e';UNICAEVENTS_GLOBALS['ajax_nonce_editor'] = 'e716c75e80';UNICAEVENTS_GLOBALS['site_url']			= 'index.html';UNICAEVENTS_GLOBALS['vc_edit_mode']		= false;UNICAEVENTS_GLOBALS['theme_font']		= 'Open Sans';UNICAEVENTS_GLOBALS['theme_skin']			= 'default';UNICAEVENTS_GLOBALS['theme_skin_color']		= '#272530';UNICAEVENTS_GLOBALS['theme_skin_bg_color']	= '#ffffff';UNICAEVENTS_GLOBALS['slider_height']	= 100;UNICAEVENTS_GLOBALS['system_message']	= {message: '',status: '',header: ''};UNICAEVENTS_GLOBALS['user_logged_in']	= false;UNICAEVENTS_GLOBALS['toc_menu']		= 'float';UNICAEVENTS_GLOBALS['toc_menu_home']	= true;UNICAEVENTS_GLOBALS['toc_menu_top']	= true;UNICAEVENTS_GLOBALS['menu_fixed']		= false;UNICAEVENTS_GLOBALS['menu_relayout']	= 960;UNICAEVENTS_GLOBALS['menu_responsive']	= 959;UNICAEVENTS_GLOBALS['menu_slider']     = true;UNICAEVENTS_GLOBALS['demo_time']		= 0;UNICAEVENTS_GLOBALS['media_elements_enabled'] = true;UNICAEVENTS_GLOBALS['ajax_search_enabled'] 	= true;UNICAEVENTS_GLOBALS['ajax_search_min_length']	= 3;UNICAEVENTS_GLOBALS['ajax_search_delay']		= 200;UNICAEVENTS_GLOBALS['css_animation']      = true;UNICAEVENTS_GLOBALS['menu_animation_in']  = 'fadeInUp';UNICAEVENTS_GLOBALS['menu_animation_out'] = 'fadeOutDown';UNICAEVENTS_GLOBALS['popup_engine']	= 'pretty';UNICAEVENTS_GLOBALS['email_mask']		= '^([a-zA-Z0-9_\-]+\.)*[a-zA-Z0-9_\-]+@[a-z0-9_\-]+(\.[a-z0-9_\-]+)*\.[a-z]{2,6}$';UNICAEVENTS_GLOBALS['contacts_maxlength']	= 1000;UNICAEVENTS_GLOBALS['comments_maxlength']	= 1000;UNICAEVENTS_GLOBALS['remember_visitors_settings']	= false;UNICAEVENTS_GLOBALS['admin_mode']			= false;UNICAEVENTS_GLOBALS['isotope_resize_delta']	= 0.3;UNICAEVENTS_GLOBALS['error_message_box']	= null;UNICAEVENTS_GLOBALS['viewmore_busy']		= false;UNICAEVENTS_GLOBALS['video_resize_inited']	= false;UNICAEVENTS_GLOBALS['top_panel_height']		= 0;</script><link rel='stylesheet' id='vc_google_fonts_abril_fatfaceregular-css'  href='../fonts.googleapis.com/cssac1c.css?family=Abril+Fatface%3Aregular&amp;ver=4.3.2' type='text/css' media='all' />
<link rel='stylesheet' id='themepunchboxextcss-css'  href='plugins/essential-grid/public/assets/css/lightboxa7f4.css?ver=2.0.8' type='text/css' media='all' />
<link rel='stylesheet' id='unicaevents-swiperslider-style-css'  href='themes/unicaevents/fw/js/swiper/swiper.css' type='text/css' media='all' />
<link rel='stylesheet' id='unicaevents-messages-style-css'  href='themes/unicaevents/fw/js/core.messages/core.messages.css' type='text/css' media='all' />
<script type='text/javascript'> /* <![CDATA[ */ var sb_instagram_js_options = {"sb_instagram_at":""}; /* ]]> */ </script>
<script type='text/javascript' src='plugins/instagram-feed/js/sb-instagram6895.js?ver=1.3.11'></script>
<script type='text/javascript' src='plugins/woocommerce/assets/js/select2/select2.min49eb.js?ver=3.5.2'></script>
<script type='text/javascript' src='plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70'></script>
<script type='text/javascript'> /* <![CDATA[ */ var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};/* ]]> */ </script>
<script type='text/javascript' src='plugins/woocommerce/assets/js/frontend/woocommerce.min18f6.js?ver=2.4.12'></script>
<script type='text/javascript' src='plugins/woocommerce/assets/js/jquery-cookie/jquery.cookie.min330a.js?ver=1.4.1'></script>
<script type='text/javascript'> /* <![CDATA[ */ var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","fragment_name":"wc_fragments"};/* ]]> */ </script>
<script type='text/javascript' src='plugins/woocommerce/assets/js/frontend/cart-fragments.min18f6.js?ver=2.4.12'></script>
<script type='text/javascript' src='themes/unicaevents/fw/js/superfish.min.js'></script>
<script type='text/javascript' src='themes/unicaevents/fw/js/jquery.slidemenu.js'></script>
<script type='text/javascript' src='themes/unicaevents/fw/js/core.utils.js'></script>
<script type='text/javascript' src='themes/unicaevents/fw/js/core.init.js'></script>
<script type='text/javascript' src='themes/unicaevents/js/theme.init.js'></script>
<script type='text/javascript'> /* <![CDATA[ */ var mejsL10n = {"language":"en-US","strings":{"Close":"Close","Fullscreen":"Fullscreen","Download File":"Download File","Download Video":"Download Video","Play\/Pause":"Play\/Pause","Mute Toggle":"Mute Toggle","None":"None","Turn off Fullscreen":"Turn off Fullscreen","Go Fullscreen":"Go Fullscreen","Unmute":"Unmute","Mute":"Mute","Captions\/Subtitles":"Captions\/Subtitles"}};var _wpmejsSettings = {"pluginPath":"\/wp-includes\/js\/mediaelement\/"};/* ]]> */ </script>
<script type='text/javascript' src='js/mediaelement/mediaelement-and-player.min0392.js?ver=2.17.0'></script>
<script type='text/javascript' src='js/mediaelement/wp-mediaelement274c.js?ver=4.3.2'></script>
<script type='text/javascript' src='http://maps.google.com/maps/api/jsee3a?sensor=false'></script>
<script type='text/javascript' src='themes/unicaevents/fw/js/core.googlemap.js'></script>
<script type='text/javascript' src='themes/unicaevents/fw/js/social/social-share.js'></script>
<script type='text/javascript' src='themes/unicaevents/fw/js/core.debug.js'></script>
<script type='text/javascript' src='themes/unicaevents/shortcodes/theme.shortcodes.js'></script>
<script type='text/javascript' src='plugins/js_composer/assets/js/js_composer_fronta288.js?ver=4.8.1'></script>
<script type='text/javascript' src='themes/unicaevents/fw/js/swiper/swiper.jquery.js'></script>
<script type='text/javascript' src='themes/unicaevents/fw/js/core.messages/core.messages.js'></script>
<script type="text/javascript"> /* <![CDATA[ */ (function(){try{var s,a,i,j,r,c,l=document.getElementsByTagName("a"),t=document.createElement("textarea");for(i=0;l.length-i;i++){try{a=l[i].getAttribute("href");if(a&&a.indexOf("/cdn-cgi/l/email-protection") > -1  && (a.length > 28)){s='';j=27+ 1 + a.indexOf("/cdn-cgi/l/email-protection");if (a.length > j) {r=parseInt(a.substr(j,2),16);for(j+=2;a.length>j&&a.substr(j,1)!='X';j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}j+=1;s+=a.substr(j,a.length-j);}t.innerHTML=s.replace(/</g,"&lt;").replace(/>/g,"&gt;");l[i].setAttribute("href","mailto:"+t.value);}}catch(e){}}}catch(e){}})();/* ]]> */ </script>
</body>
</html>