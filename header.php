<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
	<meta name="description" content="Mobile Journalism by the UCLA Daily Bruin">
	<meta name="author" content="UCLA Daily Bruin">
	
	<!-- Load Fonts
  ================================================== -->

	<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
	
	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/base.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/skeleton.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/layout.css">

	<link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.less">

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/img/apple-touch-icon-114x114.png">

	

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<script type="text/javascript">
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-28181852-3']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
	<meta property="fb:app_id" content="269701246422391">

	<?php wp_head(); ?>

</head>
<body>
<!-- Facebook Code -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=269701246422391";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- End Facebook Code -->
<!-- Twitter Code -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<!-- End Twitter Code -->
<!-- Google Plus Code -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<!-- End Google Plus Code -->
<!-- Facebook Commenting Code -->
<div id="fb-root"></div>
<script>(function facebookCommenting(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=72296391616";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- End Facebook Commenting Code -->

	<div class="db_refer">
		<div class="container">
			<span class="db_link four columns offset-by-three">more at <a href="http://dailybruin.com" class="hoverlink">dailybruin.com</a></span>
			<span class="db_section eight columns">
				<ul class="blank db_sections">
					<li><a href="http://www.dailybruin.com/index.php/section/news">News</a></li>
					<li><a href="http://www.dailybruin.com/index.php/section/sports">Sports</a></li>
					<li><a href="http://www.dailybruin.com/index.php/section/ae">A&amp;E</a></li>
					<li><a href="http://www.dailybruin.com/index.php/section/opinion">Opinion</a></li>
					<li><a href="http://www.dailybruin.com/index.php/multimedia/video">Video</a></li>
					<li><a href="http://www.dailybruin.com/index.php/section/radio">Radio</a></li>
				</ul>
			</span>
		</div>
	</div>
	
	<!-- Primary Page Layout
	================================================== -->
	<div class="container">
		<div id="left_sidebar_wrapper">
		<nav id="left_sidebar" class="three columns">
				<ul class="blank">
					<li <?php if(!is_category()){echo'class="current-cat"';} ?> ><a href="<?php bloginfo('url'); ?>">All Stories</a></li>
					<?php wp_list_categories('depth=1&title_li='); ?>
				</ul>
			<hr />
			<p class="socialmedia_recommend">
			Follow us on <a href="https://twitter.com/#!/dbmojo">twitter</a> or <a href="https://www.facebook.com/pages/Daily-Bruin-Mojo/202703606494373">facebook</a>.
			</p>
		</nav>
		</div>
		<div class="margin-by-three nine columns">
			<a href="<?php bloginfo('url'); ?>
"><img style="margin-top: 4px; margin-left: 10px; float:left;	" src="<?php bloginfo('template_directory'); ?>/img/logo.png" /></a>
			<span class="logo_desc"><a href="<?php echo bloginfo('url'); ?>/about">mobile journalism</a> by the <a href="http://dailybruin.com/">UCLA Daily Bruin</a></span>
			<nav id="pages" class="two columns">
				<ul class="blank">
					<?php wp_nav_menu('theme_location=primary&container=&items_wrap=%3$s'); ?>
				</ul>
			</nav>
		</div>
		<div class="three columns search">
			<form role="search" method="get" id="searchform" action="/">
		        <input id="searchbox" class="searchinput" type="text"  placeholder="Search..." value="" name="s" id="s" />
			</form>
		</div>
		
		
		<div class="margin-by-three twelve columns main">


<?php //bloginfo('url'); ?>
<?php //bloginfo('template_directory'); ?>
