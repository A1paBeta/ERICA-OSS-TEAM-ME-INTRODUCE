<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="./Styles/common.css">
    <link rel="stylesheet" href="./Styles/index.css">
    <script   src="https://code.jquery.com/jquery-3.4.1.js"   integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="   crossorigin="anonymous"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $('#index_li').click(function(){
          var offset = $("#index-section").offset();
          $('html, body').animate({scrollTop : offset.top}, 400);
        });
        $('#intro_li').click(function(){
          var offset = $("#intro-section").offset();
          $('html, body').animate({scrollTop : offset.top}, 400);
        });
        $('#contact_li').click(function(){
          var offset = $("#contact-section").offset();
          $('html, body').animate({scrollTop : offset.top}, 400);
        });
        $('#facebook_li').hover(function(){
          $('#facebook_li > a > img').attr('src','./Assets/Images/facebook_hover.png');
        },function(){
          $('#facebook_li > a > img').attr('src','./Assets/Images/facebook.png');
        });
        $('#github_li').hover(function(){
          $('#github_li > a > img').attr('src','./Assets/Images/github_hover.png');
        },function(){
          $('#github_li > a > img').attr('src','./Assets/Images/github.png');
        });
      });
    </script>
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li id="github_li"><a href="https://github.com/A1paBeta" target="_blank"><img src="./Assets/Images/github.png" width="30px"></a></li>
          <li id="facebook_li"><a href="https://www.facebook.com/A1paBeta" target="_blank"><img src="./Assets/Images/facebook.png" width="30px"></a></li>
          <li id="contact_li">연락</li>
          <li id="intro_li">자기소개</li>
          <li id="index_li">홈</li>
        </ul>
      </nav>
    </header>
    <article class="">
      <div id="index-section" class="section">

      </div>
      <div id="intro-section" class="section">

      </div>
      <div id="intro-section2" class="section">

      </div>
      <div id="intro-section3" class="section">
        <h1>팀원 페이지</h1>

        <h2>이형우 : <a href='https://github.com/hyoungWoo-lee/hyoungWoo-lee.github.io'>Github</a></h2>
        <h2>홍시영 : <a href='https://github.com/mushbaur/oss-dev-2020'>Github</a></h2>
        <h2>김동현 : <a href='#'>미제출</a></h2>
      </div>
      <div id="contact-section" class="section">

      </div>
    </article>
    <footer>
    </footer>
  </body>
</html>
