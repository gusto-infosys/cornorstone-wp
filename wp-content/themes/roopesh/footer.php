
<section class="schedule_bg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="schedule">
          <ul>
            <li>6 am to 8 am Physical </li>
            <li>8:30 am to 9:15 am English </li>
            <li>10 am to 12 am Math </li>
            <li>10 am to 12 am Interview </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <div class="classes_button">
          <button onclick="location.href='about us.html'">Classes</button>
        </div>
      </div>
    </div>
  </div>
</section>





<section class="footer_back" style="background-image:url('image/hanging.png');">
  <div class="container footer">
    <div class="row">
      <div class="offset-md-1 col-md-6">
        <img class="footer_logo" src="<?php echo get_template_directory_uri() . '/assets/image/logo.png'?>" alt="">
        <ul class="footer_links">
          <li onclick="location.href='#'">home</li>
          <li onclick="location.href='#'">contact</li>
          <li onclick="location.href='#'">classes</li>
          <li onclick="location.href='#'">about us</li>
          <li onclick="location.href='#'">contact</li>
        </ul>
        <div class="footer_media">
          <i class="bi bi-facebook"></i>
          <i class="bi bi-twitter"></i>
          <i class="bi bi-instagram"></i>
        </div>
        <div class="footer_copyright">
          <span>@copyright</span>
        </div>
      </div>
      <div class="col-md-4">
        <p class="footer_contact">contact</p>
        <div class="footer_location">
          <div><i class="bi bi-geo-alt-fill"></i><span>Kavre, Kathmandu Nepal</span></div>
          <div><i class="bi bi-telephone"></i><span>+977-9800000000</span></div>
          <div><i class="bi bi-envelope"></i><span>example@email.com</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<a  href="#goTop" class="href_top" id="href_top"><i class="bi bi-arrow-up-short"></i></a>

<?php wp_footer(); ?>


<script>
  $('.owl-carousel').owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    margin: 10,
    autoplay:true,
    autoplayTimeout:1500,
    smartSpeed: 1000,
    autoplayHoverPause: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        767:{
            items:2
        },
        992:{
            items:2
        },
        1200:{
            items:3
        }
        
    }
});
$('.nav-prev').html('<i class="bi bi-chevron-left"></i>');
$('.nav-nest').html('<i class="bi bi-chevron-right"></i>');
</script>


</script>
</body>
</html>