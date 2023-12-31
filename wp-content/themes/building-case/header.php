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
    <header data-aos="fade-down" class="<?php if(is_front_page()) { echo "top-header"; } else { echo "sub-header"; } ?>">
      <div class="header-wrapper">
        <span class="logo"><a href="<?php echo HOME ; ?>"><img src="<?php echo T_DIRE_URI; ?>/assets/img/logo.svg" alt="NEXT STEP"></a></span>
        <div class="nav-wrapper">
          <div class="top-bar">
            <div class="desc-16-normal f-applying">現在、応募を受け付けておりません。 応募開始日は<a href="<?php echo HOME . 'news/recuit-info10170047/'; ?>">こちら</a>からご確認ください。</div>
            <a class="yellow-btn nav-applying" href="<?php echo HOME; ?>#applying">
              <span>調査応募へ</span>
            </a>
          </div>
          <nav class="globalmenu" id="menu">
            <ul>
              <li><a href="<?php echo HOME . 'news'; ?>">新着情報</a></li>
              <li><a href="<?php echo HOME . 'about'; ?>">建物事例調査募集について</a></li>
              <li><a href="<?php echo HOME . 'incentive'; ?>">インセンティブ</a></li>
              <li><a href="<?php echo HOME . 'flow'; ?>">募集の流れ</a></li>
              <li><a href="<?php echo HOME . '#objects'; ?>" class="nav-objects">調査対象建物</a></li>
              <li><a class="prett">提出物について</a>
                <ul class='menus'>
                  <li>
                      <a class="nav-exterior-photo" href="<?php echo HOME; ?>submissions#exterior-photo">建物外観写真</a>
                  </li>
                  <li>
                      <a class="nav-drawings" href="<?php echo HOME; ?>submissions#drawings">図面</a>
                  </li>
                  <li>
                      <a class="nav-estimates" href="<?php echo HOME; ?>submissions#estimates">見積書（建物の見積書）</a>
                  </li>
                  <li>
                      <a class="nav-specifications" href="<?php echo HOME; ?>submissions#specifications">仕様書</a>
                  </li>
                </ul>
              </li>
              <li><a href="<?php echo HOME . 'case'; ?>">建物事例</a></li>
            </ul>
          </nav>
        </div>
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
    <div class="pageWrap">
		<div id="luxy">