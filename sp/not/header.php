<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>;charset=<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<title><?php bloginfo('name'); ?></title>

<meta http-equiv="content-style-type" content="style/css">
<link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_directory'); ?>/css/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_directory'); ?>/css/page.css" rel="stylesheet" type="text/css" />

<!-- スライドショー2 -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/flexslider.css">
<!-- スライドショー2 -->

<!-- ドロワーメニュー -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/slidebars.css">
<!-- //ドロワーメニュー -->

<!-- スライドショー -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/flickity.css"/>
<!-- スライドショー -->

<!-- 郵便番号 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
	<script type="text/javascript">
$(function(){
  $('#zip').keyup(function(event){
    AjaxZip3.zip2addr(this,'','ken','address');
  })
})
</script><!-- /郵便番号 -->

<script>
$(document).ready(function(){
  $('.js-toggle-top-slidebar').click(function () {
    $('.wrap_drower_on').toggleClass('float_drower');
		$('.wrap').toggleClass('float_wrap');
  });
});

</script>


<!-- ありがとうのいえアナリティクス新 -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-35404986-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- /ありがとうのいえアナリティクス新 -->

<?php wp_head(); ?>

</head>

<body>


	<!-- ドロワーメニュー展開した中身 -->
	<div off-canvas="" class="wrap_drower_on">
	<ul class="drower_on">
	<li><a href="<?php bloginfo('url'); ?>">トップページ</a></li>
	<li><a href="<?php bloginfo('url'); ?>/seko">施工事例</a></li>
	<li><a href="<?php bloginfo('url'); ?>/company">会社概要</a></li>
	</ul>
	</div>
	<!-- //ドロワーメニュー展開した中身 -->

<div class="wrap"><!-- canvas ドロワーメニューでコンテンツごと下にずらすのに必要です　-->

<a id="top" name="top"></a>


<!-- ヘッダー　-->
<div id="header">

<h1><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/image/header/rogo.png" alt="ありがとうの家" width="170" height="90" /></a></h1>
<div class="box">
<div class="par31 f-l"><a href="<?php bloginfo('url'); ?>/contact"><img src="<?php bloginfo('template_directory'); ?>/image/header/mail.png" width="74" height="74" alt="無料見積り" /></a></div>
<div class="par31 f-l"><a href="tel:0120492713"><img src="<?php bloginfo('template_directory'); ?>/image/header/tel.png" width="74" height="74" alt="電話をかける" /></a></div>
<div class="js-toggle-top-slidebar par31 f-l"><img src="<?php bloginfo('template_directory'); ?>/image/header/menu.png" width="74" height="74" alt="MENU" /></div>
<!-- ドロワーメニュー展開した中身はfooter.phpに書いてあります -->
</div>
<br clear="all" />
</div>
<!-- //endヘッダー　-->
