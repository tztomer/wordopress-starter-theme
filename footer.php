<footer class="main-footer"
 style="background-image:url('https://startertheme.local/wp-content/uploads/2022/11/bg-img.png')">

 <div class="inner-footer-container">

  <div class="slider">



   <div class="test-title">A word from our
    Students
   </div>
   <div class="carousel-wrapper">
    <div class="next"><img
      src="https://startertheme.local/wp-content/uploads/2022/11/vector-smart-object-copy-2@2x.png">
    </div>

    <div class="swiper mySwiper">
     <div class="swiper-wrapper">

      <?php $recoded = new WP_Query(
        array(
         "post_per_page" => 4,
         "post_type" => "recommend"
        )
        );



       while ($recoded->have_posts()) {
        $recoded->the_post();
       ?>

      <div class="swiper-slide">
       <div class="person-img">
        <?php the_post_thumbnail() ?>
       </div>
       <div class="person-content">
        <div class="person-title">
         <span class="big-txt">
          <?php the_title() ?>
         </span>
         <span class="small-txt">
          <?php echo get_field('date') ?>
          Graduate
         </span>
        </div>
        <div class="person-text">
         <p>
          <?php echo wp_trim_words(get_the_content(), 30) ?>
         </p>
        </div>

       </div>

      </div>
      <?php }
       ?>
     </div>

    </div>

    <div class="prev">
     <img
      src="https://startertheme.local/wp-content/uploads/2022/11/vector-smart-object-copy-2@2x.png">
    </div>

   </div>

  </div>

  <div class="footer-menu">
   <div class="top-footer-menu">

    <?php wp_nav_menu(
     array(
      "theme-location" => "strip",
     )


    );



    ?>

   </div>

   <div class="bottom-footer-menu">
    <div class="all-rights">© All Rights Reserved to Atrium Fund

    </div>
    <div class="center-strip">


     <?php
     wp_nav_menu(array('theme_location' => 'strip'));
     ?>
    </div>

    <div class="created-by">
     Crafted by: Layer.co.il
    </div>

   </div>
  </div>
 </div>
</footer>


<script defer
 src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<?php wp_footer() ?>
</body>

</html>