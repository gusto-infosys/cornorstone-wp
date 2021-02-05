
<?php get_header(); ?>

<br> <br> <br>
<p  style="text-align:center;" class="heading_2 text-uppercase style="text-align:right>We Train For</p>






<section id="blog" class="blog">
      <div class="container">

        <div class="row">
          
<?php while ( have_posts() ) : the_post(); ?>
          <div class="col-lg-12 entries">

            <article class="entry">

              <div class="entry-img"><br><br>

              <?php the_post_thumbnail(); ?>
                <!-- <img src="<?php echo get_template_directory_uri() . '/assets/image/army 2.jpg'?>" alt="" class="img-fluid"> -->
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html"> <?php the_title(); ?></a>
              </h2>

              

              <div class="entry-content">
                <p>
                  <!-- <?php the_content(); ?> -->
                   <?php the_excerpt(); ?>
                </p>
                 <div class="read-more">
                  <a href="blog-single.html">Read More</a>
                </div>
              </div> 

            </article><!-- End blog entry -->

        </div>
    <?php endwhile; ?>
    </div>
</div>
</section>





<?php get_footer(); ?>
