<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta property="og:locale" content="ja_JP">

    <!-- SEO Meta Tags -->
    <meta name="keywords" content="建物事例調査募集,建物事例,調査" />
    <meta name="description" content="私たちは、建物の見積もりや写真、図面など、建物に関する詳細な情報を提供していただける方々を募集しています。情報の提供者には、お礼としてAmazon商品券5000円から1万円程度の謝礼を進呈しています。" />

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:title" content="建物事例調査募集"/>
    <meta property="og:type" content="article" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="建物事例調査募集" />
    <meta property="og:description" content="私たちは、建物の見積もりや写真、図面など、建物に関する詳細な情報を提供していただける方々を募集しています。情報の提供者には、お礼としてAmazon商品券5000円から1万円程度の謝礼を進呈しています。" />
    
    <title>
      <?php
      if(is_front_page() || is_home()) {
        echo get_bloginfo('name');
      } else{
          wp_title('|',true,'right');
          echo bloginfo('name'); 
      }
      ?>      
    </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700;900&family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo T_DIRE_URI; ?>/favicon.svg">
    <link rel="icon" type="image/png" href="<?php echo T_DIRE_URI; ?>/favicon.svg">
    <link rel="apple-touch-icon" type="image/png" href="<?php echo T_DIRE_URI; ?>/favicon.svg">
    <?php wp_head(); ?>
</head>

<?php 
  global $post;
  
  if( $post->post_type != "page" ) {
    $post_slug = $post->post_type;
  } else {
    $post_slug = $post->post_name;
  }
  if( is_single() ) {
    $category_arr = get_the_category( $post->ID );
    $post_slug = $category_arr[0]->slug;
  }
?>

<?php
$path_parts = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
$path_parts = pathinfo($path_parts);
?>
<?php if(is_single()): ?>
<body <?php body_class();?> id="body<?php echo get_post_type(); ?>">
<?php else: ?>
<body <?php body_class();?> id="body<?php echo $path_parts['filename']; ?>">
<?php endif; ?>

    <div class="pageWrap">
		<div id="luxy">
			<header data-aos="fade-down">
				<div class="header-wrapper">
					<span class="logo"><a href="<?php echo HOME ; ?>"><img src="<?php echo T_DIRE_URI; ?>/assets/img/logo.svg" alt="NEXT STEP"></a></span>
					<nav class="globalmenu">
						<ul>
							<li><a href="./about/">建物事例調査募集について</a></li>
							<li><a href="./service/">Service</a></li>
							<li><a href="./recruit/">Recruit</a></li>
							<li class="contact-area">
								<span class="contact-btn">
								<a href="https://docs.google.com/forms/d/e/1FAIpQLScdtNRiJd2kM1AKmFp-QuGjPEoA-sVfZYWYwif4hCoWHC6swg/viewform?pli=1&pli=1" target="_blank">Contact</a>
								</span>
							</li>
						</ul>
					</nav>
					<div class="header-right">
						<span class="contact-btn">
						<a href="https://docs.google.com/forms/d/e/1FAIpQLScdtNRiJd2kM1AKmFp-QuGjPEoA-sVfZYWYwif4hCoWHC6swg/viewform?pli=1&pli=1" target="_blank">Contact</a>
						</span>
						<div class="trigger">
							<p class="menu-trigger">
								<span></span>
								<span></span>
								<span></span>
							</p>
						</div>
					</div>
				</div>
			</header>