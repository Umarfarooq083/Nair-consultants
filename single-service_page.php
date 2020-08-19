<?php get_header(); ?>
<!-- banner -->
    <section class="strat-bg">
    <div class="container">
        <div class="col-md-12 startup">
        <h3> <?php the_title() ; ?> </h3>
        </div>
    </div>
    </section>
<!-- starting loop -->
  
<section class="pt-5 pb-5">
      <div class="container">
        <div class="row">
        <div class="col-md-6 col-lg-4 brief-categories">
          <h4> Services List Details </h4>
          <ul>

        <?php
      $args = array(
      'posts_per_page'    => -1,
      'post_type'     => 'service_page',  //choose post type here
      'order' => 'ASC',
);
// query
   $the_query = new WP_Query( $args ); 
    while( $the_query->have_posts() ) : $the_query->the_post(); 
     $title=$the_query->post->post_title;
      ?>
 <a href="<?php echo get_permalink($the_query->post->ID);?>"> <li> <?php echo $the_query->post->post_title;?> </li></a>

   <?php 
     $i++; endwhile;
  ?>
  </ul>
</div>
<?php
      $args = array(
      'posts_per_page'    => -1,
      'post_type'     => 'service_page',  //choose post type here
      'order' => 'ASC',
);
// query
$the_query = new WP_Query( $args ); ?>

<?php  
    while ( have_posts() ) : the_post(); ?>
         <div class="col-md-12 col-lg-8 take-startup">
             <h2 class="down"><?php echo the_title();  ?> </h2>
               <p><?php echo the_content();  ?></p>
            </div>
            </div>
          
              <?php endwhile; ?>
              
     </div>
    </div>
   </div>
  </section>

<?php get_footer(); ?> 