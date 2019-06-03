<?php 
// $share_url = 'https://theinitium.com/project/20190529-project-6430/sc.html';
// $lang_switch_url = 'https://theinitium.com/project/20190529-project-6430/tc.html';
// $og_lang = '-sc';
// $body_class = 'data-lang="sc"';

$share_url = 'https://theinitium.com/project/20190529-project-6430/tc.html';
$lang_switch_url = 'https://theinitium.com/project/20190529-project-6430/sc.html';
$og_lang = '';
$body_class = '';

$base_url = '';
if(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') {
  $scheme = 'https://';
} else {
  $scheme = 'http://';
}
if($_SERVER['HTTP_HOST'] == 'localhost') {
  $base_url = 'http://localhost/64-30/';
  $js_base_url = $base_url;
  } elseif(strpos($_SERVER['HTTP_HOST'], '192.168.') !== FALSE) {
    $base_url = $scheme.$_SERVER['HTTP_HOST'].'/64-30/';
    $js_base_url = $base_url;
} elseif(strpos($_SERVER['HTTP_HOST'], 'dev') !== FALSE) {
    $base_url = 'http://dev.do5.documentonready.com/project/20190529-project-6430/';
    $js_base_url = $base_url;
} else {
    $base_url = 'https://theinitium.com/project/20190529-project-6430/';
    $js_base_url = $base_url;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-65642613-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-65642613-1');
  </script>
  <title>六四・三十年：走進他們的記憶隧道 ｜ 端傳媒</title>
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no,shrink-to-fit=no">
  <meta name="description" content="個人的記憶或許並不全面，卻以無可取代的方式代表著六月四日的廣場。在一切變得模糊之前，端傳媒走訪多地，尋訪親歷者，以聲音、影像，留住一片記憶的虛擬場所。">
  <meta name="author" content="" />
  <link rel="stylesheet" media="screen" href="<?php echo $base_url;?>css/style.css?t=<?php echo time();?>">
  <script type="text/javascript">
    var base_url = '<?php echo $js_base_url;?>';
  </script>
  <script src="<?php echo $base_url;?>js/modernizr.min.js?a"></script>
  <link href="https://d32kak7w9u5ewj.cloudfront.net/static/bundles/0b9cf7fe9c518887768e6c485764cd12.ico" rel="shortcut icon" data-react-helmet="true">
  <meta property="og:title" content="六四・三十年：走進他們的記憶隧道 ｜ 端傳媒" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="<?php echo $base_url;?>" />
  <meta property="og:image" content="<?php echo $base_url;?>images/og-share-2.jpg" />
  <meta property="og:description" content="個人的記憶或許並不全面，卻以無可取代的方式代表著六月四日的廣場。在一切變得模糊之前，端傳媒走訪多地，尋訪親歷者，以聲音、影像，留住一片記憶的虛擬場所。" />
</head>
<body class="intro-state" <?php echo $body_class;?>>
<a href="https://theinitium.com" id="logo" target="_blank">
  <svg class="icon icon-initium " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 791 791"><g fill-rule="evenodd"><path class="character" fill-rule="nonzero" d="M403.1 87.9c0 18.6.8 32.9 0 52.8-.16 4.08-.36 6.63-2 8.2-2.4 2.33-8.82 1.96-16.05 1.96-20.4 0-30.97-.5-53.73-.5-16.67 0-35.46.5-53.7.5-7.7 0-13.22-.1-15.08-2.9-1.98-3.02-1-15.12-1-19.86V76.8c0-3.96-.4-8.13.5-9.7.6-1.03 3.33-2.16 5.03-2.42.32-.06.67.06 1 0 5.22-1 13.77-.96 16.07 2.4 1.73 2.58 1 9.16 1 14.55v30.98c0 4.86-.88 12.46.5 14.53 2.04 3.07 19.3 2.33 26.6 1.94 1.66-.1 2.67-.2 4.03-.48 1.45-.33 2.9-.38 3.5-.98 2.32-2.32 1.27-8.47 1-14.52-.58-13.53 0-18.77 0-31.96 0-5.85-.6-12 1.52-14.52 2.53-3.02 16.1-3.83 19.55-.5 4.33 4.22 1.68 22.38 1.52 30.04-.06 3.5 0 10.5 0 15.95 0 5.6-.87 12.63 1 15.02.62.8 2.24 1.13 3.5 1.47 4.78 1.2 16.6.8 23.12.48 3.46-.2 6.45-.33 7.5-1.46 1.9-2.05 1-8.12 1-15 0-12.18-.7-25.88 0-39.22.14-2.4.23-5.24.3-6.75.06-1.44 1.32-1.8 2.65-1.98 3.2-.4 6.4-.56 9.6-.47 2.53.03 4.65-.1 6.53.5 1.6.47 3.55 1.53 4.04 2.4 1.7 3.16.48 14.43.48 20.8h.02zm-219 285.13c6.93 0 11.5-1.83 13.25 3.9 1.26 4.04 1 14.08-1.47 16.52-3.7 3.7-19.92 1.96-28 1.96H108c-6.42 0-24.68 1.33-27.48-1.95-1.5-1.7-.73-11-.77-15.98 0-.7.04-1.87.76-2.73.5-.74 1.3-1.25 2.2-1.4 1.85-.44 6.27-.23 9.57-.3 3-.1 6.34.2 9.34-1 .38-.14 2.04-1.05 1.98-.97 1.18-1.67.86-10.4.98-15.1.77-32.32 0-62.78 0-96.32 0-5 .66-13.2-.98-15.08-3.05-3.5-18.48.6-22.1-2.95-1.58-1.5-1.52-4.6-1.48-8.73.02-2.6-.45-5.4.5-7.32.1-.22.35-.65.44-.84.08-.2.38-.45.54-.62 2.68-3 16.64-1.95 24.55-1.95h79.54c.33 0 .65.02 1 0 1.86-.1 7.97-.5 9.22 1.15.62.82.83 1.1 1.07 1.78 1.54 4.38 1.5 15.57-1.97 17.52-2.18 1.2-6.58.42-10.3.48-3.38.04-7.88-.5-9.82.96-3.23 2.44-1.98 16.86-1.98 26.77 0 28.72-.56 57.76.5 84.18.2 4.95-.96 13.54.98 16.07 1.74 2.28 5.73 1.96 9.82 1.96l-.01-.01zm-35.26-125.9c-2.08-2.3-15-1.17-17.43-1.1-1.22 0-2.56.18-3.04.65-.58.56-.95 1.28-1.2 2.66-.23 3.12-.17 7.84-.17 11.83v51.2c0 20.15-.08 32.1.45 50.7.23 7.45-.43 13.87 1.4 15.57 2.2 2.02 17.7 1.9 20-1 1.72-2.18 1.4-9 1.4-15.08v-83.32c0-6.63 1.62-28.86-1.4-32.12l-.01.01zm113.05 51.71c0-9.25-.98-22.94 3.76-28.48 2.5-2.9 7.73-2.02 26.94-2.1 5.82-.03 13.66.04 20.3.08 2.36 0 5.7-.12 6.88-1.06 2.2-1.74 2.77-12.37 2.02-17.95-.75-5.44-1.8-5.5-8.06-5.83-6.35-.33-15.97 0-22.13 0-10.17 0-24.5 1.76-28.18-1.48-1.83-1.58-1.68-4.84-1.5-9.2.1-2.04-.4-4.37 0-5.83.03-.15 1.94-3.06 2.5-3.4 2.43-1.56 9.07-.98 15.6-.98h98.63c5.83 0 11.08-.73 16.62-.5.6.05 3.36-.57 5.03.5 3.7 2.37 4.66 17.02.5 19.9-3 2.1-9.65.98-13.6.98-13.02 0-21.77-.4-35.72 0-6 .17-7.76.08-8.55 5.33-.68 4.4-.6 15.93 1.5 17.98 3 2.9 21.92 1.45 28.2 1.45 4.45 0 9.46.1 14.58 0 2.2-.03 5.4-.1 7.06-.1 9.06.02 8.6 4.05 8.6 15.06 0 31.65.44 63.74.44 95.25 0 6.32.1 13.84-1.1 15.28-1 1.23-3.5 1.7-6.37 1.85h-.1c-1.17.05-2.34.07-3.5.06l-.98.02c-4.6 0-5.6-.18-7.17-.85-.9-.4-1.6-.88-1.94-1.97-.38-1.16-.6-2.38-.66-3.6-.17-2.32-.24-13.4-.3-19.4-.2-23.93.15-42.2-.08-67.7-.03-3.46.16-6.7-.6-9.5-.9-3.24-4.47-3.6-7.6-3.64h-1.27c-3.4 0-6.26.2-7.6 1.53-2.13 2.15-1.47 20.86-1.47 25.78 0 14.82.4 43.38.4 58.8 0 8.37.35 16.44-.88 18.46-.84 1.37-3.06 1.45-10.6 1.42v-.03c-6.68 0-7.66.1-8.87-1.52-1.38-1.87-1.53-6.82-1.53-12.02.06-26.43.1-50.42-.1-78.14-.02-4.78.53-10.5-.55-12.15-1.34-1.98-14.35-2.55-15.9-.13-1.2 2.02-1.18 4.6-1.22 23.9-.06 23.5-.28 42.63 0 67 .06 4.54.47 8.82-1.45 11.27-1.73 2.2-5.77 1.85-10.12 1.83-5.13-.03-7.44-.15-8.94-2.35-1.5-2.16-.96-6.44-.96-12.3 0-13.03-.15-25.8-.12-38.85.03-9.56-.05-17.58-.05-26.6 0-16.45.25-21.33-1.42-24.05-1.07-1.74-3.1-1.9-11.67-1.68-3.3.08-3.92.96-3.92 3.5-.02 15.95.02 34.6.02 50.38 0 11.3-.26 27.06 0 39.63.04 2.94.1 6.68-1 9.23-1.76 4-10.74 4.8-17.23 3.1-1.15-.3-3.27-.94-4.04-1.96-1.58-2.15-1-8.94-.98-15.04.03-27.75.5-50.47.5-79.14l-.05-.04z"></path><path d="M134.89 158.78c-26.2 0-47.42-21.23-47.42-47.4 0-26.2 21.22-47.42 47.4-47.42 26.2 0 47.4 21.23 47.4 47.4 0 26.2-21.2 47.42-47.4 47.42h.02z"></path><path fill-rule="nonzero" d="M395.56 790.76c-218.161 0-395-176.853-395-395.02C.56 177.613 177.409.76 395.56.76c218.131-.01 395 176.843 395 394.98 0 218.167-176.869 395.02-395 395.02zm0-766.304c-205.064 0-371.294 166.235-371.294 371.294 0 205.069 166.23 371.314 371.294 371.314S766.844 600.809 766.844 395.74c0-205.049-166.23-371.284-371.284-371.284z"></path></g></svg>
</a>
<a href="#" id="grid-btn"><span class="sr-text">Grid View</span></a>
<a href="#" id="home-btn" target="_blank"><span class="sr-text">返回光點主頁</span></a>
<div id="links">
  <a href="#" id="credits-btn">製作團隊</a>
  <a href="<?php echo $lang_switch_url;?>" target="_blank" id="lang-btn">簡</a>
  <div id="share">
    <a href="https://www.facebook.com/sharer.php?u=<?php echo URLencode($share_url); ?>" target="_blank" id="fb-btn">
      <svg version="1.1"
         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
         x="0px" y="0px" width="14.3px" height="30.1px" viewBox="0 0 14.3 30.1" style="enable-background:new 0 0 14.3 30.1;"
         xml:space="preserve">
      <path fill="#bfbfbf" d="M14.3,10.4H9.1V6.6c0-1.2,1.2-1.4,1.8-1.4c0.6,0,3.4,0,3.4,0V0l-3.9,0C5.1,0,3.9,3.8,3.9,6.3v4.1H0v5.3h3.9
        c0,6.8,0,14.4,0,14.4h5.2c0,0,0-7.6,0-14.4h4.4L14.3,10.4z"/>
      </svg>

      <span class="sr-text">Facebook Share</span>
    </a>
    <a href="https://twitter.com/share?url=<?php echo URLencode($share_url); ?>" target="_blank" id="tt-btn">
      <svg version="1.1"
         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
         x="0px" y="0px" width="26.8px" height="23.5px" viewBox="0 0 26.8 23.5" style="enable-background:new 0 0 26.8 23.5;"
         xml:space="preserve">
      <path fill="#bfbfbf" d="M26.8,2.8c-0.5,0.3-1.8,0.8-3.1,0.9c0.8-0.5,2-2,2.3-3.2c-0.8,0.5-2.6,1.3-3.4,1.3c0,0,0,0,0,0
        c-1-1.1-2.4-1.8-4-1.8c-3.1,0-5.5,2.7-5.5,6c0,0.5,0.1,0.9,0.1,1.3h0c-4.1-0.1-9-2.4-11.7-6.2C-0.2,4.2,1.3,7.7,3.2,9
        C2.5,9.1,1.3,8.9,0.8,8.3c0,2.1,0.9,4.8,4.3,5.8c-0.7,0.4-1.8,0.3-2.3,0.2c0.2,1.8,2.5,4.1,4.9,4.1c-0.9,1.1-3.9,3.1-7.7,2.5
        c2.5,1.7,5.5,2.6,8.6,2.6c8.9,0,15.8-7.8,15.5-17.4c0,0,0,0,0,0c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1C24.9,5.3,26,4.2,26.8,2.8z"/>
      </svg>
      <span class="sr-text">Twitter Share</span>
    </a>
  </div>
</div>
<div id="touch-detect"></div>
<!-- count particles -->
<!-- <div class="count-particles">
  <span class="js-count-particles">--</span> particles
</div> -->

<!-- particles.js container -->
<!-- <div id="bg" class="active"></div> -->
<div id="particles-js"></div>
<div id="intro" class="page center">
  <div class="content">
    <h1 id="site-logo"><img src="<?php echo $base_url;?>images/6430-logo<?php echo $og_lang;?>.svg" alt="六四・三十年 | 走進他們的記憶隧道" /></h1>
    <div class="desc">
      <p>1989年，他們懷抱希望，與廣場連結。30年一眨眼，物是人非。他們有的身體抱恙，有的永別人世，有的背著記憶匍匐前進，也有人日漸淡忘，開始懷疑堅守的意義。</p>
      <p>端傳媒走訪世界多地，尋訪9名親歷者，重拾微小且重要的歷史碎片。個人的記憶或許並不全面，卻以無可取代的方式代表著六月四日的廣場。在一切變得模糊之前，我們以聲音、影像，留住一片記憶的虛擬場所。</p>
    </div>
    <!-- <h1>六四・三十年</h1>
    <p>走進他們的記憶隧道</p> -->
  </div>
  <div class="swipeup"><span></span></div>
</div>
<div id="landing2" class="page">
  <div id="tips"><span class='icon sound-icon'></span>戴上耳機<br/><span class='icon tip-icon'></span>點擊光點進入故事</div>
</div>
<div class="hidden">
  <!-- <img src="<?php echo $base_url;?>images/intro-img1-2.jpg" />
  <img src="<?php echo $base_url;?>images/intro-img2-2.jpg" />
  <img src="<?php echo $base_url;?>images/intro-img3.jpg" />
  <img src="<?php echo $base_url;?>images/2.png" />
  <img src="<?php echo $base_url;?>images/5.png" />
  <img src="<?php echo $base_url;?>images/intro-img4.png" /> -->
  <!-- <img src="<?php echo $base_url;?>images/blur3.png" /> -->
</div>
  <div id="story1" class="section">
    <div class="subpage detail-intro">
      <div class="content">
        <p class="first">「我很後悔我那句話，可能是我說不會開槍。他也許認為真的不會開槍了。唉。」</p>
      </div>
    </div>
    <div class="subpage detail-article">
      <div class="frame frame1" data-template="f">
        <div class="top content">
          <h2><a class="audio-btn" href="#"></a>張先玲</h2>
          <p>82歲，6月4日凌晨，她在家裡，<br class="desktop-only"/>不知道兒子王楠已經溜去天安門廣場。</p>
          <a href="#" class="next-btn">Next</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame2 center" data-template="a">
        <div class="content">
          <p>這是王楠的死亡證明，你看看，這裡有一個特點。</p>
          <a href="#" class="prev-btn">Previous</a>
          <a href="#" class="next-btn">Next</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame3 center" data-template="a">
        <div class="content">
          <p>由醫院蓋章的死亡報告單，王楠死於1989年6月3日，診斷為「槍傷在外死亡」。北京公安局發出的屍體火化證明，王楠「屍體業經我局檢驗，經查證系在外死亡」。</p>
          <a href="#" class="prev-btn">Previous</a>
          <a href="#" class="next-btn">Next</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame4 top" data-template="a">
        <div class="content">
          <p>我沒有見到兒子的最後一面。6月14號，接到電話說他可能在護國寺中醫院，我去了，但陪我去的學生不讓我看遺體，怕我難過。</p>
          <p>醫生告訴我，這屍體頭部有繃帶，最初被埋在天安門廣場前方第28中學的草坪，但開始有味道了，又被挖出來，估計王楠當時在軍訓身穿軍服，被誤以為是軍人，才送到醫院。</p>
          <a href="#" class="prev-btn">Previous</a>
          <a href="#" class="next-btn">Next</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>
      <div class="frame frame5 top" data-template="a">
        <div class="content">
          <p>王楠那時才19歲，是高中生，喜歡照相。有一次他跟我講，媽媽你多給我零用錢，我說你幹嘛，他說要買膠巻，到天安門去照相。剛開始他告訴我，他們講的，我不太懂，後來隔了一段時間，他跟我說，媽媽，我現在懂他們講的是什麼了，他們是對的，我們應該要多支持這個運動。</p>
          <p>王楠還說，他們是希望社會往好的方向轉化，希望我們的國家真正的好起來，不要誤解他們。</p>
          <a href="#" class="prev-btn">Previous</a>
          <a href="#" class="next-btn">Next</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>
      <div class="frame frame6 center" data-template="g">
        <div class="video-wrapper fs" data-video="https://initium-asset.s3.amazonaws.com/media/attachment/2019/05/95df27f1d4e8481f98b9d1c6ce485584.mp4" data-video-m="https://initium-asset.s3.amazonaws.com/media/attachment/2019/05/be2edc32d102473692fe814156dc36d7.mp4"></div>
        <a href="#" class="video-btn"><span class="sr-text">Play</span></a>
        <a href="#" class="prev-btn">Previous</a>
        <a href="#" class="next-btn">Next</a>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame7 center" data-template="d">
        <div class="content">
          <p>但我也千叮萬囑他不要出去。他答應了，還說：「媽，您放心，我不出去。您別忘了明天出太陽的話，替我把洗的衣服掛到陽臺上去！」想不到這就是我們最後的對話。</p>
          <a href="#" class="prev-btn">Previous</a>
          <a href="#" class="next-btn">Next</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame8 bottom" data-template="a">
        <div class="content">

          <p>兒子當時住在我們對面的一座樓。3號晚上10點多，我看到他房間還亮著燈，想他肯定在家，但第二天清晨6點，我看到他房間燈還是亮的，他肯定出去了。</p>
          <p>我趕緊過去，看到他留了一張紙條給我「我去找同學，六月三號晚上。」他的床也是沒睡過的樣子。我給學校打電話，問他有沒有到學校去，我找他的同學，問有沒有見過他，同學都說沒見到。我一直很希望他還活著的。</p>
          <a href="#" class="prev-btn">Previous</a>
          <a href="#" class="next-btn">Next</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame9 top" data-template="a">
        <div class="content">
          <p>我頭髮自六四以後開始白了，不能睡覺也不能吃飯，人就快死了。我本來是航天部的高級工程師，也沒有去工作了。孩子都被你們打死了，我還去上班？</p>
          <a href="#" class="prev-btn">Previous</a>
          <a href="#" class="next-btn">Next</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame10 center" data-template="a">
        <div class="content">
          <p>王楠被戒嚴部隊開槍擊中左上額，子彈從左上額射入，從左耳後穿出，頭盔後面留有彈痕。</p>
          <a href="#" class="prev-btn">Previous</a>
          <a href="#" class="next-btn">Next</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame11 center" data-template="d">
        <div class="content">
          <p>經過半年時間，我就慢慢恢復，應該是說比較理智吧。我就下定決心，要把這個事情搞清楚。為什麼王楠頭上包了繃帶、但不在醫院？為什麼屍體被埋起來了？但是什麼線索都沒有。</p>
          <p>我只好逢人就說，就像祥林嫂一樣。坐公車也好，買東西也好，任何場合任何地點，就是除了我以外，只要有兩、三個人，我就說這個事情。</p>
          <a href="#" class="prev-btn">Previous</a>
          <a href="#" class="next-btn">Next</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame12 center" data-template="a">
        <div class="content">
          <p>追尋真相期間，知道很多人遇難，認識了另一個母親丁子霖。政府一直沒有公佈死難者名單，還說是我們家屬覺得不好看不讓他講。我就跟丁子霖一齊商量去尋訪，想要揭穿這個謊言。</p>
          <p>丁是老師，認識很多學生，我也不停去問，去核對，也會有人上門提供線索，但即使知道一個難屬住在哪裏，去尋訪的時候也要很謹慎。</p>
          <a href="#" class="prev-btn">Previous</a>
          <a href="#" class="next-btn">Next</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame13 center" data-template="a">
        <div class="content">
          <p>我們慢慢找到更多人，在1995年還開始發公開信，要求政府交代真相，當時簽名的只有27人，後來高峰期有190多人，就成了「天安門母親」這個群體，其實裏頭不僅有母親，也有父親，有遇難者的兄弟姊妹和孩子，還有因六四而致殘的人。</p>
          <p>這些年來，我們主要的工作就是整理一份死難者名單，那上頭已有202人了。</p>
          <a href="#" class="prev-btn">Previous</a>
          <a href="#" class="next-btn">Next</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>
      
      <div class="frame frame14 center" data-template="a">
        <div class="content">
          <p>曾經有難屬說，把孩子的骨灰撒了在北海公園的湖裡，以後家人每次去公園，便是去看孩子。</p>
          <a href="#" class="prev-btn">Previous</a>
          <a href="#" class="next-btn">Next</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame15 bottom" data-template="a">
        <div class="content">
          <p>但看孩子也是不自由的，這些年，我們被看得越來越緊。兩會、清明、六四，電梯口和樓下都有人，買菜還跟著幫我拉東西，也會監視我們一切通訊工具。今年兩會，境外好像也打不進來了。這麼多年也不能公開悼念，還得乘搭他安排的專車前往墓園。</p>
          <a href="#" class="prev-btn">Previous</a>
          <a href="#" class="next-btn">Next</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame16 bottom" data-template="a">
        <div class="content">
          <p>30年過去了，我們年紀大了，56位難屬已經離世，現在還有126名成員。</p>
          <p>我的丈夫、孩子的父親王範地前年底去世了，我今年也82歲了，不希望走的時候，這事情還不解決；萬一還未解決，希望活著的人，繼續堅持，奮鬥一生。</p>
          <a href="#" class="prev-btn">Previous</a>
          <a href="#" class="next-btn">Next</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame17 center end" data-template="h">
        <div class="content">
          <p>你剛剛走完這位母親30年以來的道路，<br class="desktop-only"/>想走進其他親歷者的記憶隧道</p>
          <a href="#" class="prev-btn">Previous</a>
          <a href="#" class="home-btn"><span></span><span class="sr-text">返回光點主頁</span></a>
          <div class="more">
            <h3>「閱讀更多」:</h3>
            <ul>
            <li><a href="https://theinitium.com/article/20190603-hongkong-6430-interview-tiananmenmother/" target="_blank">天安門母親：「我在尋求證據，我在核對真相，總有一天有用。」</a></li>
            </ul>
          </div>
        </div>
        <!-- <div class="swipeup"><span></span></div> -->
      </div>
    </div> <!-- end of .detail-article -->
  </div>  <!-- end of #story2 -->
  <div id="story2" class="section">
    <div class="subpage detail-intro active">
      <div class="content">
        <p class="first">「民主運動不一定要在那個天安門廣場，不一定要在那個長安街，民主運動應該是在每一個有公權力的地方。」</p>
      </div>
    </div>
    <div class="subpage detail-article">
      <div class="frame frame1" data-template="f">
        <div class="top content">
          <h2><a class="audio-btn" href="#"></a>陳雲飛</h2>
          <p>52歲，6月3日深夜前往擋軍車，被警察打暈了，不知道廣場實況。</p>
          <a href="#" class="next-btn">Next</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame2 top" data-template="a">
        <div class="content">
          <p>我當年21歲，是北京農業大學的大三學生，參與過遊行、絕食；6月3日晚上，剛好在學校值班室接到高自聯的電話，說頤和園有裝甲部隊，要趕快增援。我空手就去了，也沒有害怕，因為沒有想到會這樣，人民警察、軍隊怎麼可能對付學生嘛？</p>
          <p>當時一片黑，防暴警察一手拿盾牌一手拿警棒，然後我頭就被打破了，打暈了。同學送我到醫院，縫了7針才醒過來，沒有看到開槍，也不知道死那麼多人。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame3 center" data-template="d">
        <div class="content">
          <p>我回到學校養傷，翌年畢業就回四川工作。一直到2005年趙紫陽去世，我的觸動很大，就趕去北京拜祭，在那裡看到天安門母親的留言，才知道有這樣的群體，也直接去拜訪他們了。因為消息封鎖，我之前沒懷疑過政府的說法，以為沒有死多少人，看到這些母親很艱苦追求真相，我很傷痛。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>
      <div class="frame frame4 center" data-template="d">
        <div class="content">
          <img src="<?php echo $base_url;?>images/2-img-1.png" alt="在《成都晚報》的刊登「向堅強的64遇難者母親致敬」廣告" />
          <p>我覺得母親都是沒錯的，包括戒嚴部隊那些軍人的母親都是沒錯的，真正錯的是下手屠殺學生、軍人的人，真正錯的是制度，是那些權力不受限的人。2007年，我就在《成都晚報》刊登「向堅強的64遇難者母親致敬」廣告，作為一種紀念，後來被指涉嫌「煽動顛覆國家政權」，處以監視居住半年。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>
      <div class="frame frame5 top" data-template="a">
        <div class="content">
          <p>從天安門母親得知，四川有死難者吳國鋒和肖傑，我開始每年去掃墓。我們本來不認識的，但都是同一個時間去北京讀書。他們為國家、為民主走了，我便親自上門看看他們的家人，中秋節買點月餅去，當他們是自己的親人，還成為了他們的義子。</p>
          <p>後來輾轉得到一名死難者的資料，我轉交至天安門母親，那就成了他們名冊上第202名死難者。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>
      <div class="frame frame6 top" data-template="a">
        <div class="content">
          <p>我開始維權了。公權力就是猛獸，我就是要把權力關進籠子內，我就是馴獸師。這些年，我去過各省市逾40個派出所協助，穿川過省的話會搭硬座，睡網吧，有需要的時候就從袋子裡拿出紙板來製作牌子。一、二百元的衣服我捨不得，東西能用就好，剩下來的錢就給良心犯做飯，例如六四酒案那幾位。有人從監獄出來也會發紅包，就是89.64元。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>
      <div class="frame frame7 top" data-template="a">
        <div class="content">
          <p>2015年清明前夕，我和朋友又去掃墓，結果被「尋釁滋事罪」起訴。我穿了一身灰白睡衣出席審訊，就是為了方便做「中國夢」，最終判刑4年。我快樂啊，我坐監獄，在裡面也是維權。剛剛3月底才出來，四川很多維權朋友都被抓了，我還是悄悄去拜祭了，沒有什麼害怕的，因為紀念自己的同胞。</p>
          <p>早陣子，我有事打110報警，對方問我的電話尾號是否8964，我說是啊，你知不知道8964什麼事情？你不知道的話，那我給你解釋一下。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>
      <div class="frame frame8 center end" data-template="h">
        <div class="content">
          <p>你看到這名學生怎樣成為「馴獸師」，<br class="desktop-only"/>想走進其他親歷者的記憶隧道</p>
          <a href="#" class="home-btn"><span></span><span class="sr-text">返回光點主頁</span></a>
          <div class="more">
            <h3>「閱讀更多」:</h3>
            <ul>
            <li><a href="https://theinitium.com/article/20190602-hongkong-6430-interview-chenyunfei/" target="_blank">「尋釁滋事」式紀念，陳雲飛「快樂抗爭」的心法</a></li>
            </ul>
          </div>
          <a href="#" class="prev-btn">Previous</a>
        </div>
      </div>
    </div>
  </div> <!-- end of #story2 -->
  <div id="story3" class="section">
    <div class="subpage detail-intro active">
      <div class="content">
        <p class="first">「也害怕，但是害怕也不能走。因為太多的民眾為了保護天安門廣場，保護我們這些堅持不走的人，付出了生命代價。」</p>
      </div>
    </div>
    <div class="subpage detail-article">
      <div class="frame frame1" data-template="f">
        <div class="top content">
          <h2><a class="audio-btn" href="#"></a>吳仁華</h2>
          <p>63歲，全程參與八九民運，6月4日凌晨，他在天安門的人民英雄紀念碑台階上想，死在這裡值了。</p>
          <a href="#" class="next-btn">Next</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame2 top" data-template="a">
        <div class="content">
          <p>由那日起，研究六四成了我一生的主題。30年過去了，但六四仍是現實，不是歷史。我親身經歷，寫了3本書，長年面對血淋淋的資料，令我悲傷、痛苦、憤怒。寫第一本書的時候，我常深更半夜寫著寫著，就趴在鍵盤上失聲痛哭。因為那些都是屠殺的場面啊。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame3 bottom" data-template="a">
        <div class="content">
          <p>胡耀邦去世後，我說必須做一個大花圈送去天安門。我是中國政法大學講師，從校門出發，一路呼喊著「耀邦千古、新聞自由、民主萬歲、自由萬歲、法治萬歲」的口號，遊行3個多小時到天安門。這是1989年4月17日，八九民運第一次有組織的遊行。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame4 bottom" data-template="a">
        <div class="content">
          <p>5月13日，我開始絕食，和學生共進退，之後3次被送到醫院急救。北京幾乎所有醫院都住滿了因絕食而送醫的學生，我甦醒後稍微調整體力，馬上就會回廣場。我在院內總覺得怎麼那麼好睡，睡得那麼香甜，後來才知道是醫生好意在輸液裡注入安眠成分，讓我們好好休息一下。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame5 center" data-template="a">
        <div class="content">
          <p>6月3日下午，我負責帶特別糾察隊到人民英雄紀念碑保護絕食的劉曉波等四人。戒嚴部隊的車子前一天就已開進北京。當天上午，又有千多名軍警在六部口發射催淚瓦斯，用警棍和木棍驅散民眾。我感覺鎮壓隨時會發生。</p>
          <img src="<?php echo $base_url;?>images/3-img-1.jpg" alt="六部口發射催淚彈照片" />
          <p>出發前我接到了弟弟從溫州打來的電話，我心裡清楚，是母親讓他問的，就請他轉告：我沒事，還是在學校讀書做研究，請她放心。校園內是一片生離死別的氛圍。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame6 bottom" data-template="a">
        <div class="content">
          <p>6月4日凌晨，天安門廣場氣氛非常恐怖，四周佈滿戒嚴部隊，全副武裝，頭戴鋼盔手持槍枝，還有很多裝甲車。廣場上空不斷有發射子彈劃出的彈道，就像節日放禮花一樣。</p>
          <p>我遇到一個老鄉，說幫我拍張照，我想那可能是我人生最後一張照片，請她一定幫我寄回溫州老家給我母親，至今也沒有收到，我擔心她已經遇難。許多遇難者因照相被射殺，是因為中國官方最不願意看到有人把屠殺紀錄留下來吧。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame7 center" data-template="g">
        <div class="video-wrapper fs" data-video="https://initium-asset.s3.amazonaws.com/media/attachment/2019/05/b5aac3eec61047c7a168a72d2e49fd74.mp4" data-video-m="https://initium-asset.s3.amazonaws.com/media/attachment/2019/05/49cdc6363bb946b088a99ee5e6fc1797.mp4"></div>
        <a href="#" class="video-btn"><span class="sr-text">Play</span></a>
        <a href="#" class="next-btn">Next</a>
        <a href="#" class="prev-btn">Previous</a>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame8 bottom" data-template="a">
        <div class="content">
          <p>我們和平理性非暴力，我們就讓你殺，殺完以後就讓世界可以看到這個政權的殘酷。實際上也害怕，但是害怕也不能走。因為太多民眾為保護天安門廣場上堅持不走的人，付出了生命的代價。</p>
          <p>清場了，最先衝上來的是27集團軍特勤先隊。他們端著槍喊：「走啊！往開走啊！」有的用槍托、木棍捅你，用腳踢你，逼你走。我們被推下去，又坐回去，又推下去，又坐回去。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame9 bottom" data-template="a">
        <div class="content">
          <p>清晨5點半，學生從天安門廣場撤出，走到六部口附近時，三輛坦克從後面追來，發射軍用毒氣彈，一些學生暈倒在地。其中一輛坦克編號106，突然轉彎從背後衝入隊伍，追軋學生。現場有5具遺體，看形狀就肯定已經沒救了，其中一具是自行車車把從後背刺進去，從前胸透出來。</p>
          <p>我在現場親眼目睹，只是我的隊伍位置靠前，撿回一條命。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame10 bottom" data-template="a">
        <div class="content">
          <p>我後來研究得知，當時死了11個學生，包括北京商學院的女學生龔紀芳，她吸入毒氣彈氣體過多，送到醫院時呼吸系統已經糜爛，當時只有19歲。北京科技大學的博士生林仁富半邊身子都被壓扁了。後來有個運輸個體戶開著小卡車把5具遺體送到中國政法大學，卡車到的時候，校門內外真是哭聲一片。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame11 center" data-template="a">
        <div class="content">
          <p>6月6日，我帶著同事逃離北京。屠殺發生之後，火車站根本不需要驗票上車，可能也同情學生，讓大家離開。我在溫州躲避到9月，悄悄回過北京一趟，和朋友討論後，終決定由我去海外為受難者發聲。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame12 bottom" data-template="a">
        <div class="content">
          <p>1990年冬天，我南下偷渡，先到佛山找蛇頭，哪知六四屠殺後，他們怕受牽連，等了很久都沒有人肯帶。後來有個蛇頭收了3倍價錢帶我到珠海，我再游泳去澳門。</p>
          <p>那天夜裡攝氏7度，風浪很大，茫茫的海灣，看不到燈光，我差不多要凍死在海裡。前後花了4個小時，終於游到澳門，再往香港，最後輾轉去了美國，開始以研究六四作為畢生志業。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame13 top" data-template="a">
        <div class="content">
          <p>研究20多年來，我一直沒有正常作息。因為我搜集資料的方法很特殊，經常通宵達旦地盯著電腦，追蹤戒嚴部隊退役軍人的聊天紀錄。研究佔據了我太多的時間，我的生活變得非常簡單，平日只會簡單為自己煮個麵。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame14 bottom" data-template="a">
        <div class="content">
          <p>我無法回溫州了。近年寄居台灣，這是我拍的照片。漫步街頭，車流人流交替，雨絲拂面，讓我彷彿置身於温州。 </p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame15 center" data-template="a">
        <div class="content">
          <p>2012年，我闖關成功，回到溫州，踏進22年沒進過的家門。那是我最後一次回家，待了45天。我本以為我母親對我的事一無所知，她從來不問。她是寡婦，一人養大5個子女。直到有天，她不在家，我在她枕頭邊發現我寫的兩本書。</p>
          <p>其中一本顯然翻得太多，損傷非常嚴重。大概是因為我把前言的最後一段寫給了母親，我說忠孝不能兩全，我是不孝子。你能原諒我這個不孝的兒子嗎？如果有來生，我一定做個孝子，其他都不做，就侍奉我母親。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame16 center end" data-template="h">
        <div class="content">
          <p>你看了這個學者為何畢生研究六四，<br class="desktop-only"/>想走進其他親歷者的記憶隧道</p>
          <a href="#" class="home-btn"><span></span><span class="sr-text">返回光點主頁</span></a>
          <div class="more">
            <h3>「閱讀更多」:</h3>
            <ul>
            <li><a href="https://theinitium.com/article/20190531-hongkong-6430-interview-wurenhua/" target="_blank">一個人的戰鬥，沒有退路的吳仁華</a></li>
            </ul>
          </div>
          <a href="#" class="prev-btn">Previous</a>
        </div>
      </div>
    </div>
  </div> <!-- end of #story3 -->
  <div id="story4" class="section">
    <div class="subpage detail-intro active">
      <div class="content">
        <p class="first">「六四一天不昭雪，我們都没有任何的理由進入這個廣場，這裏邊都是冤魂的，我們不能去踩。」</p>
      </div>
    </div>
    <div class="subpage detail-article">
      <div class="frame frame1" data-template="f">
        <div class="top content">
          <h2><a class="audio-btn" href="#"></a>孫立勇</h2>
          <p>58歲，曾在北京當過8年警察，八九學運時與市民圍著軍車，教育軍人不要傷害學生。</p>
          <a href="#" class="next-btn">Next</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame2 top" data-template="a">
        <div class="content">
          <p>我在2004年出逃到澳洲，曾以回收塑料瓶、當搬家工人維生，現在是一名推灰工。我還成立了中國政治與宗教受難者後援會，支援國內受難同道。</p>
          <p>我的女兒也在澳洲紮根，成了澳洲公民。她政治理念跟我一致，我們倆關係可親了。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame3 bottom" data-template="a">
        <div class="content">
          <p>89年6月3日晚，在家吃過晚飯後，我牽着兩歲多的女兒，往天安門廣場走去。</p>
          <p>走到燕京飯店附近，女兒遠遠看見正在焚燒的車輛，說：「爸爸，你看那邊那麼亮。」這時，我們身邊突然響起陣陣急促的子彈聲，孩子不懂危險，反而興奮起來：「爸爸，發炮了，過年了！」旁邊有人喊「快跑」，我本來揹着孩子，馬上轉而抱住她，往邊上的胡同裏飛奔逃命。</p>
          <p>那會兒年輕氣盛啊，現在想來真是害怕。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame4 top" data-template="a">
        <div class="content">
          <p>高考落榜之後，我進公安局做了8年警察，但在87年離開了。我不喜歡公安局裏的腐敗，領導互相拍馬屁，他們希望我是一隻綿羊，但我是一個愛頂牛的人。</p>
          <p>到了學運期間，我在離天安門廣場不遠的公司當保安。每天下班後就騎車到廣場，捐款、送物資，隔着糾察隊圍欄與學生對話：「北京市民支持你們！」</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame5 bottom" data-template="a">
        <div class="content">
          <p>89年5月20日，當局頒布戒嚴令。深夜，我跟一群北京市民在北京軍事博物館附近圍住30輛軍車，整夜教育軍人不要傷害學生。有人把一隻喇叭遞給了指揮車中的中校，要求他表態。</p>
          <p>「各位北京市民好。我是中校，我是副團長，但是你們放心，我們，絕不會鎮壓北京市民，更不會鎮壓我們的大學生。」</p>
          <p>「人民解放軍萬歲！」大夥兒齊呼。</p>
          <p>我不知道，這位中校和他手下的部隊最終有沒有參與六四鎮壓。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame6 center" data-template="d">
        <div class="content">
          <p>六四屠殺以後，我就思考，我作為一個北京市民，我現在應該幹什麼？我是像所有人一樣沉默嗎？我想我不是，我應該反抗。怎麼反抗呢？我沒有武器，我們只有筆和紙，就做刊物。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame7 bottom" data-template="a">
        <div class="content">
          <p>我當過警察嘛，反偵查能力可好了。我們在一座居民樓裏印刷民主刊物，專選在晚餐時間鄰居炒菜、電視新聞播放時打印，那樣鄰居就不會聞到油墨味、不會留意到印刷的噪音。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame8 center" data-template="d">
        <div class="content">
          <p>六四之後，我沒有再進過天安門廣場。在90年6月3日晚，我和一起做民主刊物的朋友坐在人民大會堂門口台階上，我們約定：一天六四不昭雪，一天不踏入這個廣場。這裏面都是冤魂啊，我們不能去踩他們。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame9 center" data-template="d">
        <div class="content">
          <p>92年，我因為製作民主刊物，被判反革命宣傳煽動罪，監禁7年。與女兒分離一年半後，我們第一次在獄中相見。</p>
          <p>她完全不認識我了。我穿着囚服，剃着小寸頭。我硬給她抱過來，她哇哇地哭。當時我眼淚嘩嘩地流，我覺得對不起孩子……真對不起……我不想想這些事了。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame10 bottom" data-template="a">
        <div class="content">
          <p>96年，女兒第二次來探監，我事先不知道，直到獄警隊長來跟我說：「孫哥，你女兒也來了。」我太激動了。</p>
          <p>我們隔着玻璃說話。我一看，孩子長高了，都長1米5了，四年級了。我問她，還認識爸爸嗎？</p>
          <p>她說，認識，老看你照片。她的眼淚在眼眶裏打轉，就是不下來。我說，你好好讀書，你不要再來了，爸爸還要一年多就回家了。</p>
          <p>我出獄的時候，女兒11歲，自此我們就像朋友一樣相處，無話不說。她喜歡哪個男生都告訴我。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame11 bottom" data-template="a">
        <div class="content">
          <p>出獄後，我先後開過兩家書店。2003年，第二家書店開在北京大紅門，租金很貴，我跟朋友借了好幾萬。但開店不到3個月，我參與組織了一個民運人士的私人聚會。第二天，兩輛警車直接開到我店門口了。</p>
          <p>我說，你們什麼意思？他們那帶頭的說：「孫大哥，沒事兒，想您了，看看您來了，想找您下盤棋。」結果他下完圍棋殺象棋，殺完象棋下跳棋，從早上8點下到晚上8點，我一天一單生意都沒做成。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame12 center" data-template="d">
        <div class="content">
          <p>他們跟我說，上級要切斷我的經濟來源，書店不關門的話，他們就天天來搗亂。一旦共產黨認定你是敵人，那麼你終生都是他的敵人。</p>
          <p>女兒當時跟我說，你戰略上要藐視敵人，戰術上要重視敵人，跟他們鬥智鬥勇！我女兒很聰明。</p>
          <p>讓我下定決心離開中國到澳洲去的，就是書店這件事。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame13 center end" data-template="h">
        <div class="content">
          <p>你看了一個由北京逃到海外的故事，<br class="desktop-only"/>想走進其他親歷者的記憶隧道：</p>
          <a href="#" class="home-btn"><span></span><span class="sr-text">返回光點主頁</span></a>
          <div class="more">
            <h3>「閱讀更多」:</h3>
            <ul>
            <li><a href="https://theinitium.com/article/20190603-hongkong-6430-hongkong-sun-li-yong/" target="_blank">從北京警察到六四抗暴者：他牽着兩歲女兒，目睹世界翻轉</a></li>
            </ul>
          </div>
          <a href="#" class="prev-btn">Previous</a>
        </div>
      </div>
    </div>
  </div> <!-- end of #story4 -->
  <div id="story5" class="section">
    <div class="subpage detail-intro active">
      <div class="content">
        <p class="first">「這麼多年，我們沒法和這件事和解的。是和解不了的，我跟朋友、同學、病人聊起天，要不沒話聊，要不無法做朋友。」</p>
      </div>
    </div>
    <div class="subpage detail-article">
      <div class="frame frame1" data-template="f">
        <div class="top content">
          <h2><a class="audio-btn" href="#"></a>林亦子</h2>
          <p>現為香港醫生，30年前曾赴京支援八九學運。<br class="desktop-only"/>1989年6月3日晚，她躲在西單的胡同裏，聽著外面的槍聲。</p>
          <a href="#" class="next-btn">Next</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame2 bottom" data-template="a">
        <div class="content">
          <p>89年5月，香港中文大學幾乎所有學生都在關心北京學運。我是社會學系四年級學生，也是中大「國是學會」的成員，平日十分關心中國事務，到了八九民運期間，更加整日討論學運。我幾乎無心考試，5月24日，我和同學一齊自費飛到北京，帶著香港市民的捐款和10部對講機，去支援北京學生。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame3 center" data-template="d">
        <div class="content">
          <p>學會中至少10個同學來北京了，和香港記者一起住在北京飯店，經常有記者來告訴我們，誰的父母又打電話來找你啦。我也收到家人電話，謊稱父親病重，催我回港。我一直拖著，沒有回去。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame4 bottom" data-template="d">
        <div class="content">
          <p>在天安門廣場，我發現北京學生的膳食由他們學校的食堂供應，但外地學生的膳食就沒有人理。我感覺外高連組織鬆散，似乎不理廣場上同學的死活。我有點不喜歡廣場上的指揮部，覺得他們把大家分了階級。</p>
          <p>我見過好幾個同學分一個饅頭，或者只食白飯。於是我與中大的同學用香港市民捐款，設立物資站，每日到天安門附近的民營工廠訂購食物給學生，包括麵包、蔬果、肉類和蛋，還有帳篷，我還保留了那些單據。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame5 center" data-template="e">
        <div class="content">
          <p>廣場上學生的情緒逐漸低落，局勢越來越緊張。這時，交通警開始截查人力板車。如此過了一兩天，開始有食品商不願賣食物給我們。</p>
          <p>我跑到一條胡同裏，找到一家麵包廠，我和負責的女士講明目前氣氛緊張，經過詳談後，有了共識，我們互相不問對方姓名，也不留下任何聯繫方式。她是小康之家，不想失去安穩生活，可又為國家前途擔憂，一直為我們供應麵包，直到6月3日。</p>
          <p>她有沒有因我們而惹上麻煩呢？多年以後，我仍牽掛著這位女士。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame6 center" data-template="e">
        <div class="content">
          <p>6月3日晚上，我與同學吃完晚飯，走到西單附近，只見約一百名學生，從廣場方向過來，神情嚴肅，看來只有十幾二十歲，手上只有口罩，沒有任何武器。我把我身上唯一的口罩給了隊伍後面一個沒有口罩的學生。後來我才明白，他們是去赴死的。</p>
          <p>午夜12點，槍聲響起，我們躲進胡同裏，感覺到有催淚氣體，眼見不斷有傷者被三輪車、摩托車抬走。身邊北京民眾叫我藏好自己，而他們則唱著《國際歌》衝向軍隊。那一晚，我努力在紙上記錄現場情況。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame7 center" data-template="d">
        <div class="content">
          <p>現在用我的專業知識判斷，那些傷者不少都處於休克狀態。不知道多少人後來死了。這些傷者大多不是學生，而是工人、普通市民。我努力記住他們的樣子，我想我永遠不會忘記他們的樣子。我永遠沒法和這個國家和解。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame8 bottom" data-template="a">
        <div class="content">
          <p>6月5日，我坐上了香港政府派來接記者和學生的包機。起飛前的海關檢查，感覺和平時很不一樣，行李根本沒有檢查。我背囊裏還有為學生買食物剩下的九千多元人民幣，根本沒人查問。我想檢查人員在暗中幫助我們逃亡。</p>
          <p>我感覺，我把整個北京都丟下了。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame9 bottom" data-template="a">
        <div class="content">
          <p>回港後，我天天到學聯整理六四報章，思緒混亂，茫茫不知所措。一齊幫忙的幾個中大同學，大家都不怎麼說話，氣氛沉鬱。後來，又有義務律師和法律學生來幫我們錄口供，記錄六四屠殺的見證。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame10 bottom" data-template="a">
        <div class="content">
          <p>後來，我便不再碰觸任何六四資料。直到25週年中大同學想集體出書，我才逼自己重新回憶一切。當年一齊上京的同學，不少漸行漸遠。他們很少談起六四，有人堅持做更多事情，比如潘毅；也有人漸漸淡忘，從未開過口。因為出書，大家才再次聚集。</p>
          <p>現在每年聖誕，國是學會的新舊同學都會到我家中小聚。我也有無力感。為什麼30年了，這個國家都沒給機會我們這些目睹的人釋懷？</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame11 center end" data-template="j">
        <div class="content">
          <p>你看到了一名香港學生怎樣支援北京學運，<br class="desktop-only"/>想走進其他親歷者的記憶隧道</p>
          <a href="#" class="home-btn"><span></span><span class="sr-text">返回光點主頁</span></a>
          <div class="more">
            <h3>「閱讀更多」:</h3>
            <ul>
            <li><a href="https://theinitium.com/article/20190603-hongkong-6430-hongkong-cuhk-students/" target="_blank">請回答1989：支援與裂縫，那一年，香港學生在北京</a></li>
            </ul>
          </div>
          <a href="#" class="prev-btn">Previous</a>
        </div>
      </div>
    </div>
  </div> <!-- end of #story5 -->
  <div id="story6" class="section">
    <div class="subpage detail-intro active">
      <div class="content">
        <p class="first">「六四可能要沉默很長一段時間。」</p>
      </div>
    </div>
    <div class="subpage detail-article">
      <div class="frame frame1" data-template="f">
        <div class="top content">
          <h2><a class="audio-btn" href="#"></a>陳哲（化名）</h2>
          <p>52歲，現為香港中學老師，1989年，他是香港中文大學「國是學會」成員，曾赴京支援北京學運。</p>
          <a href="#" class="next-btn">Next</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame2 center" data-template="a">
        <div class="content">
          <p>5月22日，我考試結束當晚就自己飛到北京，希望支援學運。我去了天安門廣場，參加過遊行。中大學生住在北京飯店的同一個房間，我也會去大學區認識朋友，在他們的宿舍過夜。6月3日晚上，大家都叫我離開，我找了個藉口，回到天安門廣場人民英雄紀念碑，想和學生們在一起。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame3 center" data-template="g">
        <div class="video-wrapper fs" data-video="https://initium-asset.s3.amazonaws.com/media/attachment/2019/05/f953013a9d924429b6837df433f2158a.mp4" data-video-m="https://initium-asset.s3.amazonaws.com/media/attachment/2019/05/2ea590283b624f389562ad3f28982eba.mp4"></div>
        <a href="#" class="video-btn"><span class="sr-text">Play</span></a>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame4 center" data-template="d">
        <div class="content">
          <p>後來平安回香港，我去了中學當老師，一直執教至今。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame5 center" data-template="g">
        <div class="video-wrapper fs" data-video="https://initium-asset.s3.amazonaws.com/media/attachment/2019/05/012e551a7c35483eb0f1d4fc55e720a0.mp4" data-video-m="https://initium-asset.s3.amazonaws.com/media/attachment/2019/05/987aaa9b73294151a0facc5eaa88647d.mp4"></div>
        <a href="#" class="video-btn"><span class="sr-text">Play</span></a>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame6 center" data-template="d">
        <div class="content">
          <p>我閱讀不少六四有關的文章，對當年親歷的事件漸漸有了不一樣的想法。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame7 center" data-template="g">
        <div class="video-wrapper fs" data-video="https://initium-asset.s3.amazonaws.com/media/attachment/2019/05/5ab0b428e6504e83adde07d860f8fc5b.mp4" data-video-m="https://initium-asset.s3.amazonaws.com/media/attachment/2019/05/7106d081f38748748aa84de0ccb676d0.mp4"></div>
        <a href="#" class="video-btn"><span class="sr-text">Play</span></a>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame8 center end" data-template="h">
        <div class="content">
          <p>你看到一名學生成了老師的變化。<br class="desktop-only"/>想走進其他親歷者的記憶隧道嗎？</p>
          <a href="#" class="home-btn"><span></span><span class="sr-text">返回光點主頁</span></a>
          <div class="more">
            <h3>「閱讀更多」:</h3>
            <ul>
            <li><a href="https://theinitium.com/article/20190603-hongkong-6430-hongkong-cuhk-students/" target="_blank">請回答1989：支援與裂縫，那一年，香港學生在北京</a></li>
            </ul>
          </div>
          <a href="#" class="prev-btn">Previous</a>
        </div>
      </div>
    </div>
  </div> <!-- end of #story6 -->
  <div id="story7" class="section">
    <div class="subpage detail-intro active">
      <div class="content">
        <p class="first">「千萬不要有一個想法，當一些事成為日常以後，你就覺得，是這樣的啦，沒眼看。那如果有一天，來到你面前，你怎辦？」</p>
      </div>
    </div>
    <div class="subpage detail-article">
      <div class="frame frame1" data-template="f">
        <div class="top content">
          <h2><a class="audio-btn" href="#"></a>陳潤芝</h2>
          <p>61歲，退休前為香港有線新聞直播新聞台台長。1989年5月51日到6月5日，30歲的她以香港亞洲電視台記者身份，到北京報道學運，目睹大型裝甲車衝進人群。</p>
          <a href="#" class="next-btn">Next</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame2" data-template="g">
        <div class="video-wrapper fs" data-video="https://initium-asset.s3.amazonaws.com/media/attachment/2019/05/1eff42f931a947929008fd2351a28890.mp4" data-video-m="https://initium-asset.s3.amazonaws.com/media/attachment/2019/05/734df212352d44388ecffec3c1b82f85.mp4"></div>
        <a href="#" class="video-btn"><span class="sr-text">Play</span></a>
        <a href="#" class="next-btn">Next</a>
        <a href="#" class="prev-btn">Previous</a>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame3" data-template="g">
        <div class="video-wrapper fs" data-video="https://initium-asset.s3.amazonaws.com/media/attachment/2019/05/1f927c7d450746c0a6b6507fe1a3e65e.mp4" data-video-m="https://initium-asset.s3.amazonaws.com/media/attachment/2019/05/08ab889f39bf48e584da8c6315145fe1.mp4"></div>
        <a href="#" class="video-btn"><span class="sr-text">Play</span></a>
        <a href="#" class="next-btn">Next</a>
        <a href="#" class="prev-btn">Previous</a>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame4" data-template="g">
        <div class="video-wrapper fs" data-video="https://initium-asset.s3.amazonaws.com/media/attachment/2019/05/82dad281fe2a4fcebe155c1dc0a857d4.mp4" data-video-m="https://initium-asset.s3.amazonaws.com/media/attachment/2019/05/2e707482df654b8fafbb55128759b6aa.mp4"></div>
        <a href="#" class="video-btn"><span class="sr-text">Play</span></a>
        <a href="#" class="next-btn">Next</a>
        <a href="#" class="prev-btn">Previous</a>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame5" data-template="g">
        <div class="video-wrapper fs" data-video="https://initium-asset.s3.amazonaws.com/media/attachment/2019/05/e49a130d778842d191e42c79e0f6393e.mp4" data-video-m="https://initium-asset.s3.amazonaws.com/media/attachment/2019/05/b50c6e1127394598af3ce14415a4843a.mp4"></div>
        <a href="#" class="video-btn"><span class="sr-text">Play</span></a>
        <a href="#" class="next-btn">Next</a>
        <a href="#" class="prev-btn">Previous</a>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame6 center end" data-template="h">
        <div class="content">
          <p>你看到了一名香港記者如何報導中國的故事，<br class="desktop-only"/>想走進其他親歷者的記憶隧道</p>
          <a href="#" class="prev-btn">Previous</a>
          <a href="#" class="home-btn"><span></span><span class="sr-text">返回光點主頁</span></a>
          <div class="more">
            <h3>「閱讀更多」:</h3>
            <ul>
            <li><a href="https://theinitium.com/article/20190521-hongkong-6430-hongkong-journalist-chan-yun-chi/" target="_blank">香港記者陳潤芝的六四記憶：「每隔二十分鐘，軍人就開槍，砰砰砰砰砰」</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- end of #story7 -->
  <div id="story8" class="section">
    <div class="subpage detail-intro active">
      <div class="content">
        <p class="first">「那時候北京幾乎失去秩序，路上也沒有人盤查，雖然沿路都是解放軍的車子。整條道路，我第一次看到那麼多的軍車。」</p>
      </div>
    </div>
    <div class="subpage detail-article">
      <div class="frame frame1" data-template="f">
        <div class="top content">
          <h2><a class="audio-btn" href="#"></a>高源流、<br class="mobile-only"/>王震邦、孫揚明</h2>
          <p>三名台灣《聯合報》記者，八九民運期間先後在北京現場採訪，有人搭過高喊「解放軍萬歲」的車子入城，有人看到「打來打去」的複雜真相。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame2" data-template="k">
        <a href="#" class="next-btn">Next</a>
        <a href="#" class="prev-btn">Previous</a>
        <div class="swipeup"><span></span></div>
      </div>

       <div class="frame frame3" data-template="k">
        <a href="#" class="next-btn">Next</a>
        <a href="#" class="prev-btn">Previous</a>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame4" data-template="k">
        <a href="#" class="next-btn">Next</a>
        <a href="#" class="prev-btn">Previous</a>
        <div class="swipeup"><span></span></div>
      </div>
      <div class="frame frame5" data-template="f">
        <div class="top content">
          <h2><a class="audio-btn" href="#"></a>高源流</h2>
          <p>北京情勢陷入緊張時報社指定我去支援採訪。6月3號深夜，我從首都機場僱車進城。 沿路都是解放軍的車子，軍車、裝甲運兵車，也有坦克。我們看到有些解放軍躺在軍車底盤下。兩個個體戶開車，把手伸出車窗，沿路就喊「解放軍萬歲！」「解放軍萬歲！」。我們問他為什麼要這麼喊，他們說：「這樣比較容易通過」。</p>
          
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>
      <div class="frame frame6" data-template="f">
        <div class="top content">
          <h2><a class="audio-btn" href="#"></a>孫揚明</h2>
          <p>6月3日晚上，我在長安大街上目睹解放軍進城，有民眾中槍，有屍體，也有解放軍受傷。我們走進民族飯店幫大家包紮，眼前八九個人都受傷了，印象中解放軍有四個，學生和民眾更多一些，他們人人臉色慘白。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>
      <div class="frame frame7" data-template="g">
        <div class="video-wrapper fs" data-video="https://initium-asset.s3.amazonaws.com/media/attachment/2019/05/7ea76ade22b54f01a7c1e11384c7dfa8.mp4" data-video-m="https://initium-asset.s3.amazonaws.com/media/attachment/2019/05/72c61efa4c1644d9802d1a778ebf85af.mp4"></div>
        <a href="#" class="video-btn"><span class="sr-text">Play</span></a>
        <a href="#" class="next-btn">Next</a>
        <a href="#" class="prev-btn">Previous</a>
        <div class="swipeup"><span></span></div>
      </div>
      <div class="frame frame8" data-template="f">
        <div class="top content">
          <h2><a class="audio-btn" href="#"></a>王震邦</h2>
          <p>我在5月中到北京採訪，從運動之初在校園爭取新聞自由，到絕食開始，最後經歷軍隊鎮壓，寫報導也兼攝影，這是我拍攝的照片。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>
      <div class="frame frame9" data-template="k">
        <a href="#" class="next-btn">Next</a>
        <a href="#" class="prev-btn">Previous</a>
        <div class="swipeup"><span></span></div>
      </div>
      <div class="frame frame10" data-template="k">
        <a href="#" class="next-btn">Next</a>
        <a href="#" class="prev-btn">Previous</a>
        <div class="swipeup"><span></span></div>
      </div>
      <div class="frame frame11" data-template="k">
        <a href="#" class="next-btn">Next</a>
        <a href="#" class="prev-btn">Previous</a>
        <div class="swipeup"><span></span></div>
      </div>
      <div class="frame frame12" data-template="g">
        <div class="video-wrapper fs" data-video="https://initium-asset.s3.amazonaws.com/media/attachment/2019/05/228d95664aca49d69b01b3232cae101b.mp4" data-video-m="https://initium-asset.s3.amazonaws.com/media/attachment/2019/05/02e383afb97d40859d5bc516395ae37d.mp4"></div>
        <a href="#" class="video-btn"><span class="sr-text">Play</span></a>
        <a href="#" class="next-btn">Next</a>
        <a href="#" class="prev-btn">Previous</a>
        <div class="swipeup"><span></span></div>
      </div>
      <div class="frame frame13 center" data-template="d">
        <div class="content">
          <p>我們採訪團的現場報導，後來得了獎，但我不願去領獎。這是場悲劇，別人坐牢、死亡，你去領獎這算什麼呢？</p>
          <p>我這麼多年不願受訪，當然有些人很樂意反覆訴說那樣的經歷，不過那種「樂意」對我來講，就像魯迅說的「吃人血饅頭」，「吃人血饅頭」做為一個悲劇來講，那就變成了殯葬業而已。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>
      <div class="frame frame14 center end" data-template="h">
        <div class="content">
          <p>你看了這一組由台灣到北京的記者故事，<br class="desktop-only"/>想走進其他親歷者的記憶隧道</p>
          <a href="#" class="home-btn"><span></span><span class="sr-text">返回光點主頁</span></a>
          <div class="more">
            <h3>「閱讀更多」:</h3>
            <ul>
            <li><a href="https://theinitium.com/article/20190525-taiwan-reporter-64tianmen-beijing/" target="_blank">「我當時，可能真是做對了一件事」——那個春夏之交，在「北平」的台灣記者們(上)</a></li>
            <li><a href="https://theinitium.com/article/20190530-taiwan-reporter-64tianmen-beijing2/" target="_blank">「記者在現場」的意義是什麼？——那個春夏之交，在「北平」的台灣記者們(中)</a></li>
            <li><a href="https://theinitium.com/article/20190602-taiwan-reporter-64tianmen-beijing3/" target="_blank">自認「逃兵」的謝三泰，30年後解封的民運照片——那個春夏之交，在「北平」的台灣記者們(下)</a></li>
            </ul>
          </div>
          <a href="#" class="prev-btn">Previous</a>
        </div>
      </div>
    </div>
  </div> <!-- end of #story8 -->

  <div id="story9" class="section">
    <div class="subpage detail-intro active">
      <div class="content">
        <p class="first">「一個人如果在自己的故土上都不能說話，我想那也是一種流亡吧。」</p>
      </div>
    </div>
    <div class="subpage detail-article">
      <div class="frame frame1" data-template="f">
        <div class="top content">
          <h2><a class="audio-btn" href="#"></a>張倫</h2>
          <p>1962年出生於瀋陽，1989年為中國地質大學政治系教師，學運期間擔任天安門廣場指揮部糾察總長，六四當天因病在郊區休養，逃過一劫。</p>
          <a href="#" class="next-btn">Next</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame2 bottom" data-template="a">
        <div class="content">
          <p>我流亡去了法國，當了大學教授。2017年，兩家出版社邀請我與記者、畫家合作，以親身經歷為藍本，製作了一本漫畫《天安門1989：我們被粉碎的希望》，獻給六四30年。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame3 bottom" data-template="a">
        <div class="content">
          <p>書中的我開首便說，「我離開中國已經30年，但是每天，我都會回到天安門廣場上。」這本連環畫並不完全是一部自傳，而是一個化身的陳述吧。這裡講述的故事，也並不僅僅屬於我自己，而是屬於數百萬在北京、在全世界經歷過這一事件的中國人。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame4 center" data-template="d">
        <div class="content">
          <p>1989年，我26歲，在中國地質大學政治系任教，同時也在陳子明、王軍濤創辦的北京社會經濟研究所工作，那時的我們，參與多項改革，推動研究、出版刊物、舉辦沙龍，期待在中國展開波瀾壯闊的「啟蒙時代」。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame5 bottom" data-template="a">
        <div class="content">
          <p>後來胡耀邦去世，學生遊行，還提出了七條要求，包括為知識分子平反、公開國家領導人收入，公開檢討政府失誤，解除報禁，取消遊行示威的規定等等。這條七點要求已經進入歷史，但在我看來，其中大多數並未過時，對當下中國仍有現實意義，中國遲早要做出回應。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame6" data-template="g">
        <div class="video-wrapper fs" data-video="https://initium-asset.s3.amazonaws.com/media/attachment/2019/05/cb80e59cba654bfcbaaf5c131cd823b8.mp4" data-video-m="https://initium-asset.s3.amazonaws.com/media/attachment/2019/05/4e5ce3a3774a414d8f4280abd85f4c81.mp4"></div>
        <a href="#" class="video-btn"><span class="sr-text">Play</span></a>
        <a href="#" class="next-btn">Next</a>
        <a href="#" class="prev-btn">Previous</a>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame7 center" data-template="a">
        <div class="content">
          <p>暴力清場時，我因病在北京郊區休養，沒有親身見證。而軍隊開槍之後，我已經無法回到廣場。曾經的戰友有些被捕，有些逃亡，我得到黃雀行動營救，經香港輾轉到法國。我將許多人親身經歷的恐怖，都濃縮到畫作裡。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame8" data-template="g">
        <div class="video-wrapper fs" data-video="https://initium-asset.s3.amazonaws.com/media/attachment/2019/05/3c9e61a9f5c640f0b38c12ddb178a164.mp4" data-video-m="https://initium-asset.s3.amazonaws.com/media/attachment/2019/05/7a82f46e4ca9466797274c64bec4d786.mp4"></div>
        <a href="#" class="video-btn"><span class="sr-text">Play</span></a>
        <a href="#" class="next-btn">Next</a>
        <a href="#" class="prev-btn">Previous</a>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame9 center" data-template="d">
        <div class="content">
          <p>我把學運領袖內部的爭論濃縮這樣一個片段，因為事後回頭來看，我越發意識到，大眾運動的一個弊端，就是它一定會走向激進化，溫和的聲音容易被激進的聲音超越。現時法國的黃馬甲運動是如此，六四也是如此。</p>
          <p>八九民運其實有它自己的問題，比如知識界的思考有很多不足，對許多問題有簡單化傾向。雖說這在當時背景是難免的，但反過來說，我們不能永遠用「難免」來給八九的一些缺失做藉口。三十年之後，我們總得深入下去，有更深的認識。</p>
          <a href="#" class="next-btn">Next</a>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <div class="swipeup"><span></span></div>
      </div>

      <div class="frame frame10 center end" data-template="h">
        <div class="content">
          <p>你看到了一個北京學生的反思，<br class="desktop-only"/>想走進其他親歷的記憶隧道</p>
          <a href="#" class="home-btn"><span></span><span class="sr-text">返回光點主頁</span></a>
          <div class="more">
            <h3>「閱讀更多」:</h3>
            <ul>
            <li><a href="https://theinitium.com/article/20190531-hongkong-6430-hongkong-zhang-lun/
" target="_blank">六四去國三十載，若在故土上不能說話，與流亡何異？——張倫專訪</a></li>
            </ul>
          </div>
          <a href="#" class="prev-btn">Previous</a>
        </div>
        <p class="remark">
          註：頁面內動畫影片以漫畫《天安門1989：我們被粉碎的希望》製作而成。
        </p>
      </div>
    </div>
  </div> <!-- end of #story9 -->
<div id="credits" class="page">
  <a href="#" class="close-btn">&#10005;</a>
  <div class="content">
    <div class="scroll">
      <h2>製作團隊</h2>
      <h3>記者</h3>
      鄭佩珊<span class="spacer"></span>
      楊子琪<span class="spacer"></span>
      雷隆<span class="spacer"></span>
      李志德<span class="spacer"></span>
      <br/><br/>
      <h3>特約記者、攝影</h3>
      楊平<span class="spacer"></span>
      Yuhong Pang<span class="spacer"></span>
      姚佳讖<span class="spacer"></span>
      Dan<span class="spacer"></span>
      <br/><br/>
      <h3>實習記者</h3>
      徐涵<span class="spacer"></span>
      郭芷甄<span class="spacer"></span>
      余美霞<span class="spacer"></span>
      梁敏琪<span class="spacer"></span>
      <br/><br/>
      <h3>攝影</h3>
      林振東<span class="spacer"></span>
      Stanley Leung<span class="spacer"></span>
      陳焯煇<span class="spacer"></span>
      <br/><br/>
      <h3>圖片</h3>
      Getty Images<span class="spacer"></span>
      學聯<span class="spacer"></span>
      陳清華<span class="spacer"></span>
      葉紹麒<span class="spacer"></span>
      Seuil及Delcourt出版社<span class="spacer"></span>
      《天安門一九八九》<span class="spacer"></span>
      《聯合報》<span class="spacer"></span>
      <br/><br/>
      <h3>圖片編輯</h3>
      林振東<br class="mobile-only"/>
      <br/><br/>
      <h3>影片製作</h3> 
      Stanley Leung<br class="mobile-only"/>
      <br/><br/>
      <h3>設計/插畫</h3>
      端傳媒設計部<br class="mobile-only"/>
      <br/><br/>
      <h3>網頁</h3>
      Document On Ready Ltd.<br class="mobile-only"/>
      <br/><br/>
      <h3>策劃統籌</h3>
      鄭佩珊<span class="spacer"></span>
      陳倩兒<span class="spacer"></span>
      <br/><br/>
      <h3>監製</h3>
      李志德<br class="mobile-only"/>
      <br/><br/>
      註：網頁內文按受訪者訪談及經歷，以第一人稱表述。

    </div>
  </div>
</div>

<!-- scripts -->
<script src="<?php echo $base_url;?>js/plugins.min.js"></script>
<script src="<?php echo $base_url;?>js/app.min.js?a"></script>
<!-- <script src="js/lib/stats.js"></script> -->
<script>
  /*var count_particles, stats, update;
  stats = new Stats;
  stats.setMode(0);
  stats.domElement.style.position = 'absolute';
  stats.domElement.style.left = '0px';
  stats.domElement.style.top = '0px';
  document.body.appendChild(stats.domElement);
  count_particles = document.querySelector('.js-count-particles');
  update = function() {
    stats.begin();
    stats.end();
    if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
      count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
    }
    requestAnimationFrame(update);
  };
  requestAnimationFrame(update);*/
</script>

</body>
</html>