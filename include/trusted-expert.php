
<section class="thing-simple">
 <div class="container">
  <div class="col-md-8 col-lg-7 trust-heading">
    <h3> WE ARE THE TRUSTED EXPERTS </h3>
    <h4> WE KEEP THINGS SIMPLE </h4>
  </div>
 </div>
 <div class="bg-blue"></div>


<?php
    $args = array(
    'posts_per_page'    => -1,
    'post_type'     => 'trusted_expart',  //choose post type here
    'order' => 'ASC',
);
// query
$the_query = new WP_Query( $args ); ?>


 <?php
if( $the_query->have_posts() ): ?>

 <div class="container">
  <div class="col-md-12 col-lg-7 trust-heading">
    <h2> <?php echo $the_query->post->post_title;?> </h2>
    <p> <?php echo $the_query->post->post_excerpt;?> </p>
      <div class="row">
        
        <?php
        $i=1;
    while( $the_query->have_posts() ) : $the_query->the_post(); 

          $title=$the_query->post->post_title;
            ?>
                   <div class="col-12 col-md-6 col-lg-6 funding">
          <h5> <img src="<?php echo get_bloginfo("template_url"); ?>/assets/images/keep.png" alt=""> EXTRAMURAL FUNDING </h5>
          <ul>


          <?php  $id = get_the_ID();
        
    $NairDetails = get_post_meta($id,'NairDetails',true);
    $c = 0;
   if ( count( $NairDetails ) > 0 && is_array($NairDetails)) {
	        foreach( $NairDetails as $NairDetail ) {?>
            	<li><a href="#"><?=$NairDetails[$c]['name'];?></a></li>
    <?php          $c = $c +1;  }
       }
    ?>

    
          </ul>
        </div>
        <div class="col-12 col-md-6 col-lg-6 funding">
          <h5> <img src="<?php echo get_bloginfo("template_url"); ?>/assets/images/keep1.png" alt=""> EXTRAMURAL FUNDING </h5>
          <ul>
          <?php $id = get_the_ID();
    $NairDetails = get_post_meta($id,'prefix-text_1',true);//print_r($NairDetails); exit;
    $c = 0;
   if ( count( $NairDetails ) > 0 && is_array($NairDetails)) {
	        foreach( $NairDetails as $NairDetail ) {?>
            	<li><a href="#"><?=$NairDetails[$c];?></a></li>
    <?php          $c = $c +1; }
     }
    ?>
     </div>

     <?php
     $i++;
      endwhile;
     ?>
     </div>
     </div>
     </div>
     </div>
    </section>
    <?php 
  else :

  endif;
 ?>