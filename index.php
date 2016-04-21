<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>



  <div id="page_align">
    <div id="header">
      <div id="author"><br><i>John R. Doe / Designer & Developer</i></div>
    </div>
    <div id="photo">
      <div id="border"></div>
      <img src="images/sun.png"></div>
      <div id="content">
        <div id="cont_head">~ Welcome to my portfolio ~<br><span id="b_things">I make beautiful things happen</span></div>
        <div id="box1">
          <div class="b_head"><span>
               <i class="fa fa-user fa-lg" aria-hidden="true"></i>

          </span><a href="#">A little about me...</a></div>
          <div class="b_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse laudantium minus iste quibusdam reiciendis architecto inventore, quae qui exercitationem expedita assumenda voluptate perferendis eaque porro dicta. Doloremque vero recusandae sed...</div>
        </div>
        <div id="box2">
          <div class="b_head"><span>
            <i class="fa fa-comment fa-lg" aria-hidden="true"></i>

          </span><a href="#">I'm really good at...</a></div>
          <div class="b_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse laudantium minus iste quibusdam reiciendis architecto inventore, quae qui exercitationem expedita assumenda voluptate perferendis eaque porro dicta. Doloremque vero recusandae sed...</div>
        </div>
        <div id="box3">
          <div class="b_head"><span>
            <i class="fa fa-cog fa-lg" aria-hidden="true"></i>

          </span><a href="#">Services I provide...</a></div>
          <div class="b_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse laudantium minus iste quibusdam reiciendis architecto inventore, quae qui exercitationem expedita assumenda voluptate perferendis eaque porro dicta. Doloremque vero recusandae sed...</div>
        </div>
      </div>
      <div id="portfolio">
        

<div id="carousel" class="carousel slide">
     <!--  Индикаторы слайдов -->
     <ol class="carousel-indicators">
      <li class="active" data-target="#carousel" data-slide-to="0"></li>
      <li data-target="#carousel" data-slide-to="1"></li>
      <li data-target="#carousel" data-slide-to="2"></li>
      <li data-target="#carousel" data-slide-to="3"></li>
      <li data-target="#carousel" data-slide-to="4"></li>
      <li data-target="#carousel" data-slide-to="5"></li>
    </ol>
    <!-- Сами слайды -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/port1.jpg" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="images/port2.jpg" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="images/port3.jpg" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="images/port4.jpg" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="images/port5.jpg" alt="">
        <div class="carousel-caption">
        </div>
      </div>
    </div>
    <!-- Стрелки перключения слайдов -->
    <a href="#carousel" class="left carousel-control" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a href="#carousel" class="right carousel-control" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>



      </div>
      <div id="security">
        <div id="contact">
          <form method="POST" action="send.php" autocomplete="on">

            <input type="text" class="c_line" required name="name" placeholder="     Enter your name" maxlength="15"><br>
            <input type="email" class="c_line" required name="email" placeholder="     Enter your email address"><br>
            <input type="url" class="c_line" name="url" placeholder="     Enter your website url"><br>
            <textarea cols="44" rows="10" name="message"></textarea>
            <input type="submit" name="submit" value="Submit" id="button">
          </form>
        </div>
        <div id="about_me"><img src="images/author.png">
          <div id="about_text"><span id="john">John Doe / Designer & Developer<br><br></span>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ea nulla eligendi distinctio ratione error nostrum voluptatum voluptatem est mollitia, veritatis consequatur quidem doloremque laudantium, inventore perferendis aliquam natus cumque?
          </div>
          <div id="numbers"><br><i>Contact me: 123.456.789<br>Email me: johndoe@gmail.com</i>
            <br><br><i>Follow me: </i><a href="#" target="_blank"><i>Twitter</i></a> / <a href="#" target="_blank"><i>Facebook</i></a> / <a href="#" target="_blank"><i>Dribbble</i></a> / <a href="#" target="_blank"><i>Flickr</i></a>
          </div>
        </div>
      </div>
      <div id="rights">Copyright © 2015 John Doe. All rights reserved.</div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>