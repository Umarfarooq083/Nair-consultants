<?php get_header(); ?>
<!-- banner -->
    <section class="strat-bg">
       <div class="container">
         <div class="col-md-12 startup">
          <h3> Lab Setup/Startup </h3>
        </div>
      </div>
    </section>

<!-- starting loop -->
    <section class="pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8 take-startup">
         <?php
        $args = array(
      'posts_per_page'    => -1,
      'post_type'     => 'lab_setup',  //choose post type here
      'order' => 'ASC',
);
// query
$the_query = new WP_Query( $args ); ?>
<?php  
    while ( have_posts() ) : the_post(); ?>
      <div class="blog-content">
         <h2 class="down"><?php echo the_title();  ?> </h2>
         <p><?php echo the_content();  ?></p>
      </div>
   </div>

    <div class="col-md-6 col-lg-4 brief-categories">
     <h4> E-Briefings Categories </h4>
      <ul>
        <?php endwhile; ?> 

          <?php
            $args = array(
            'posts_per_page'    => -1,
            'post_type'     => 'lab_setup',  //choose post type here
            'order' => 'ASC',
            );
             $the_query = new WP_Query( $args ); 
              while( $the_query->have_posts() ) : $the_query->the_post(); 
              $title=$the_query->post->post_title;
                ?>
 <li><a href="<?php echo get_permalink($the_query->post->ID);?>"> <?php echo $the_query->post->post_title;?> </li></a>
   <?php 
     $i++; endwhile; ?>
    </div>
   </div>
  </section>
<?php get_footer(); ?> 