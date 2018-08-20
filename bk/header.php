<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta content="Copyright (c) <?php echo get_option( 'gr_companyname' ); ?>. All rights reserved." name="copyright" />
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="/wp-content/themes/reform/css/top.css" />
<link rel="stylesheet" type="text/css" href="/wp-content/themes/reform/css/page.css" />
<link rel="stylesheet" type="text/css" href="/wp-content/themes/reform/css/orbit.css" />
<link rel="stylesheet" type="text/css" href="/wp-content/themes/reform/css/skin.css" />
<link rel="stylesheet" type="text/css" href="/wp-content/themes/reform/css/thickbox.css" media="all" />
<link rel="stylesheet" type="text/css" href="/wp-content/themes/reform/css/font_m.css" id="fontcs" />
<link rel="stylesheet" type="text/css" href="/wp-content/themes/reform/css/allpage.css" />
<link rel="stylesheet" type="text/css" href="/wp-content/themes/reform/css/nivo-slider.css" />
<link rel="stylesheet" type="text/css" href="/wp-content/themes/reform/css/nivoslider/default.css" />
<link rel="shortcut icon" href="/wp-content/themes/reform/images/favicon.ico">
<link rel="icon" href="/wp-content/themes/reform/images/favicon.ico">
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/flexibility.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/smartrollover.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/script.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/smoothScroll.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/rollover2.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/thickbox.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/heightLine.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/navi.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/top.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/jquery.orbit-1.2.3.min.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/jquery.wpcf7.confirm.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/jquery.nivo.slider.pack.js"></script>
<?php if(is_singular( 'event' )){
	echo '<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri().'/css/event.css" />';
}?>

<!-- スマホ固定メニュー -->
<script type="text/javascript">
  $(function(){
    if ((navigator.userAgent.indexOf('iPhone') > 0
      && navigator.userAgent.indexOf('iPad') == -1)
      || navigator.userAgent.indexOf('iPod') > 0
      || navigator.userAgent.indexOf('Android') > 0) {
      var bH = $('.bottom_area').height();
      $('body').css('margin-bottom',bH+'px');
    }else{
      $('.bottom_area').css('display','none');
    }
  });
</script>
<!-- スマホ固定メニュー -->

<script type="text/javascript">
<!--
$(document).ready(function() {
    $('#jisseki_box').jcarousel({
    	scroll: 1,
    	auto: 1,
    	animation: "slow",
    	wrap: 'circular',
    });
});
//-->
</script>

<link rel="shortcut icon" href="<?php echo site_url(); ?>/favicon.ico" />
<script type="text/javascript">
$(function(){
	$('#slider').orbit();
});
</script>

<?php if(is_page(21398) || is_page(27732)|| is_page(2645)|is_singular( 'event' )): ?>
<!-- ========================お問い合わせ -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/contact_n.css" />
<!-- 郵便番号 -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
	<script type="text/javascript">
$(function(){
  $('#zip').keyup(function(event){
    AjaxZip3.zip2addr(this,'','ken','address');
  })
})
</script><!-- /郵便番号 -->

<script>
jQuery(document).ready(function(){
	jQuery("#formID").validationEngine();
});
</script>
<script type="text/javascript">
jQuery(document).ready(function(){
 jQuery("#name").addClass("validate[required]");
 jQuery("#huri").addClass("validate[required]");
 jQuery("#ken").addClass("validate[required]");
 jQuery("#add").addClass("validate[required]");
 jQuery("#email").addClass("validate[required,custom[email]]");
  jQuery("#tel").addClass("validate[required,custom[phone]]");
 jQuery("#tel2").addClass("validate[required,custom[phone]]");
 jQuery("#url").addClass("validate[required,custom[url]]");
 jQuery("#radio01 input").addClass("validate[required]");
 jQuery("#radio02 input").addClass("validate[required]");
 jQuery("#message").addClass("validate[required]");
 jQuery("#kibou_day1_year").addClass("validate[required]");
 jQuery("#m1kibou").addClass("validate[required]");
 jQuery("#d1kibou").addClass("validate[required]");
 jQuery("#num").addClass("validate[required]");
});
</script>
<style type="text/css">
.wpcf7-not-valid-tip {
	display: none !important;
}
span.wpcf7-form-control-wrap {
		position: static !important;
}
.formError .formErrorContent {
	border: none !important;
	box-shadow: none !important;
}
.formError .formErrorArrow div {
	border-left: none !important;
	border-right: none !important;
	box-shadow: none !important;
}
#request_area table tr:hover {
background-color: #FEFBF3;
}
</style>
<!-- ======================== /お問い合わせ -->
<?php endif; ?>


<!--▼ありがとうの家アナリティクス：新-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-35404986-1', 'auto');
  ga('send', 'pageview');

</script>
<!--▲ありがとうの家アナリティクス-->

<?php wp_head(); ?>

<script type="text/javascript">
jQuery(window).load(function($) {
	jQuery('#slider').nivoSlider({
		effect:'random',
		captionOpacity:0.8,
		animSpeed:1500,
		pauseTime:5000,
		slices:6,
		directionNav:true,
		controlNav:true,
	});
});
</script>

<!-- スライダー -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
<link rel="stylesheet" href="/wp-content/themes/reform/css/slideshow.css">
<!-- //スライダー -->

</head>

<body>
<a name="top" id="top"></a>

<!-- ======================ヘッダーここから======================= -->
<div class="header">
<h1 class="header_message">リフォームを豊橋市,豊川市でするなら、ありがとうの家にお任せください！</h1>

<div class="search_header"><?php get_search_form(); ?></div>

<div class="bt_font">
	<h2><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/moji.gif" width="57" height="15" alt="文字サイズ" /></h2>
	<ul>
		<li id="font_m"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/bt_m_on.gif" width="35" height="17" alt="標準" /></li>
		<li id="font_l"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/bt_l.gif" width="35" height="17" alt="拡大" /></li>
	</ul>
</div>

<h1 class="logo_n">
	<a href="<?php echo site_url(); ?>">
	<img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/logo_n.gif" width="168" height="90" alt="お客様の不安と不満を解消する「ありがとうの家」" />
	</a>
</h1>

<div class="tel_n">
<img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/tel_n.gif" width="480" height="90" alt="お気軽にご相談からどうぞ。" />
</div>

<div class="toi_n">
<a href="<?php echo site_url(); ?>/raiten"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/btn_raiten_rollout.png" width="200" alt="お問い合わせ" /></a>
<a href="<?php echo site_url(); ?>/contact/#toi"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/btn_contact_rollout.png" width="200" alt="お問い合わせ" /></a>
</div>

</div>
<!-- ======================ヘッダーここまで======================= -->

<!-- ======================グローバルナビここから======================= -->
<ul class="menu" id="menu">
	<li><a href="<?php echo site_url(); ?>/" class="menulink"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/menu_01_off.png" width="119" height="60" alt="Home" /></a></li>
	<li><a href="/company/" class="menulink"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/menu_02_off.png" width="119" height="60" alt="初めての方へ・会社概要" class="menulink2" /></a>
	<ul class="sub">
		<li><a href="/company/">会社案内</a></li>
		<li><a href="/company/history/">創業物語</a></li>
		<li><a href="/company/mission/">お客様へのお約束</a></li>
		<li><a href="/company/promise/">失敗しないリフォームをする方法とは？</a></li>
		<li><a href="/craftsman/">スタッフ＆職人紹介</a></li>
		<li><a href="/contact/">お問い合わせ後の流れ</a></li>
		<li><a href="/voice/">お客様の声</a></li>
		<li><a href="/faq/">よくあるご質問</a></li>
	</ul></li>
		<li><a href="<?php echo site_url(); ?>/seko/" class="menulink"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/menu_03_off.png" width="119" height="60" alt="施工事例" /></a>
	<ul class="sub">

		<li><a href="/seko">リフォーム</a></li>
		<li><a href="/seko_cat/sintiku/">新築</a></li>
		<li><a href="/genbanikki/">現場日記</a></li>
	</ul>
	</li>
	<li><a href="<?php echo site_url(); ?>/special/" class="menulink"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/menu_04_off.png" width="119" height="60" alt="増改築・大型リフォーム" /></a>
	<ul class="sub">
		<li><a href="<?php echo site_url(); ?>/special/case21/">豊橋市上野町 S様</a></li>
		<li><a href="<?php echo site_url(); ?>/special/case20/">豊川市御油町 Ｔ様</a></li>
        <li><a href="<?php echo site_url(); ?>/special/case19/">豊橋市下五井 S様</a></li>
        <li><a href="<?php echo site_url(); ?>/special/case18/">豊川市蔵子 S様</a></li>
        <li><a href="<?php echo site_url(); ?>/special/case17/">豊橋市神野新田町 Y様</a></li>
        <li><a href="<?php echo site_url(); ?>/oogataseko/">一覧を見る</a></li>
	</ul>
	</li>
	<li><a href="#" class="menulink"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/menu_05_off.png" width="119" height="60" alt="水まわり" /></a>
		<ul class="sub">
		<li><a href="<?php echo site_url(); ?>/reformmenu/kitchen/">キッチン</a></li>
		<li><a href="<?php echo site_url(); ?>/reformmenu/ohuro/">お風呂</a></li>
		<li><a href="<?php echo site_url(); ?>/reformmenu/toilet/">トイレ</a></li>
	</ul>
	</li>
	<li><a href="#" class="menulink"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/menu_06_off.png" width="119" height="60" alt="内装・インテリア" /></a>
	<ul class="sub">
		<li><a href="<?php echo site_url(); ?>/reformmenu/kabegami/">クロス張替え</a></li>
		<li><a href="<?php echo site_url(); ?>/reformmenu/yuka/">床・フローリング</a></li>
						<li><a href="<?php echo site_url(); ?>/reformmenu/j2w/">和室から洋室に変更</a></li>

	</ul></li>
	<li><a href="<?php echo site_url(); ?>/gaiheki_1/" class="menulink"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/menu_07_off.png" width="119" height="60" alt="外壁・屋根" /></a></li>
	<li><a href="#" class="menulink"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/menu_08_off.png" width="119" height="60" alt="その他" /></a>
	<ul class="sub">
		<li><a href="<?php echo site_url(); ?>/reformmenu/kyuto/">給湯器</a></li>
		<!--<li><a href="/other/taishin/">耐震リフォーム</a></li> -->
		<li><a href="<?php echo site_url(); ?>/loan/">リフォームローン</a></li>
	</ul></li>
</ul>

<script type="text/javascript">
	var menu=new menu.dd("menu");
	menu.init("menu","menuhover");
</script>
<!-- ======================グローバルナビここまで======================= -->
