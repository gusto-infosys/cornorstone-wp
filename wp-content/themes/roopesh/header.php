<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

  <?php wp_head(); ?>

</head>
<body>


<section class="header2" id="navbar" >
  <div class="container">
    <div class="row">
      <div class="col-6">
        <img class="web_logo" src=" <?php echo get_template_directory_uri() . '/assets/image/logo.png'?>" alt=""> 
       


      </div>
      <div class="col-6">
        <div class="menu_box">
          <div class="menu">
            <div class="menu_lines1"></div>
            <div class="menu_lines2"></div>
            <div class="menu_lines3"></div>
            <p class="menu_name">menu</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="nav_bg" id="menu">
  <div class="container">
    <div class="row">
      <div class="col-md-6" id="web_logo">
        <img class="web_logo"  src="image\T-shirt Back copy.png" alt="">
      </div>
      <div class="col-md-6" >
        <div class="cancel_box" >
          <div class="cancel"  id="cancel">
            <div class="cancel_lines1"></div>
            <div class="cancel_lines2"></div>
          </div>
        </div>
      </div>
      <div class="offset-lg-2  col-md-10 pt-4" id="nav_menu">

        <?php 
        if(has_nav_menu('header')){
          wp_nav_menu([

            'theme_location' => 'header',
            'container'=>false,
            'menu_class'=>'nav_links',
            'fallback_cb' => false,
            'depth'=>10
           //  // 'link_before' => '<span class="screen-reader-text">',
           // 'link_after' => '<li class="nav_drop" id="drop_menu">',


            

          ]);

        }

        ?>

      
       <!-- <ul class="nav_links" >
          <li><a href="index.html">home</a></li>
          <li><a href="about us.html">about us</a></li>
          <li class="nav_drop" id="drop_menu"><div ><span>we train for</span> <i class="bi bi-caret-right-fill"></i></div>
            <ul class="nav_drop_links" class="drop_list">
              <li><a href="training desc.html">nepali Army</a></li>
              <li><a href="training desc.html">british army</a></li>
              <li><a href="training desc.html">singapoor army</a></li>
              <li><a href="training desc.html">indian army</a></li>
              <li><a href="training desc.html">french army</a></li>
            </ul>
          </li>
          <li><a href="cources.html">Cources</a></li>
          <li><a href="download.html">Downloads</a></li>
          <li><a href="schedules.html">schedules</a></li>
          <li><a href="contact us.html">contact us</a></li>
        </ul>   -->



      </div>
    </div>
  </div>
</section>