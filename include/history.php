<!-- 
<section>
<div class="online-course pt-5 pb-5">
 <div class="container">
   <div class="row">
      <div class="col-md-4 col-lg-3 right hidden-port visible animated slideInRight"> <img src="<?php echo get_bloginfo("template_url"); ?>/assets/images/lab.png" class="float-left" alt="bel">
        <div class="bel-contnt">
           <h2>History <br>
            Lab</h2>
            <a href="#"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> Read More </a> </div>
        </div>

    <div class="col-md-4 col-lg-3 down hidden-port visible animated slideInDown"> <img src="<?php echo get_bloginfo("template_url"); ?>/assets/images/lab1.png" class="float-left" alt="bel">
      <div class="bel-contnt">
         <h2>Deramato
          Pathology Lab </h2>
         <a href="#"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> Read More </a> </div>
     </div>

       <div class="col-md-4 col-lg-3 left hidden-port visible-1 animated slideInLeft"> <img src="<?php echo get_bloginfo("template_url"); ?>/assets/images/lab3.png" class="float-left" alt="bel">
          <div class="bel-contnt">
            <h2>Confocal <br>
             Lab </h2>
              <a href="#"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> Read More </a> </div>
          </div>

             <div class="col-md-4 col-lg-3 left hidden-port visible-1 animated slideInLeft"> <img src="<?php echo get_bloginfo("template_url"); ?>/assets/images/lab4.png" class="float-left" alt="bel">
                <div class="bel-contnt">
                  <h2> Quality System
                     Managment</h2>
                      <a href="#"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> Read More </a> </div>
                       </div>
                </div>
              </div>
    </div>
</section>
 -->


<section>
<div class="online-course pt-5 pb-5">
 <div class="container">
   <div class="row">

<?php
    $args = array(
    'posts_per_page'    => -1,
    'post_type'     => 'history',  //choose post type here
    'order' => 'ASC',
);
// query
$counter = get_the_ID();
$i=0;  
 $query = new WP_Query($args);
if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();  $i++;  
 ?>
 <?php  $title=$query->post->post_title; ?>

<?php if($i==1) { ?>
  <div class="col-md-4 col-lg-3 right hidden-port visible animated slideInRight">  <?php echo get_the_post_thumbnail( $query->post->ID, 'thumbnail', array( 'class' => 'float-left' ) ); ?>

<?php }?>

<?php if($i==1) { ?>

  <div class="bel-contnt">
           <h2><?php echo $query->post->post_title;?></h2>
            <a href="#"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> Read More </a> </div>
            </div>
<?php }?>



<?php if($i==2) { ?>
  <div class="col-md-4 col-lg-3 right hidden-port visible animated slideInRight "> <?php echo get_the_post_thumbnail( $query->post->ID, 'thumbnail', array( 'class' => 'alignleft' ) ); ?>

<?php }?>

<?php if($i==2) { ?>

  <div class="bel-contnt">
           <h2><?php echo $query->post->post_title;?></h2>
            <a href="#"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> Read More </a> </div>
            </div>
<?php }?>


<?php if($i==3) { ?>
  <div class="col-md-4 col-lg-3 right hidden-port visible animated slideInRight"> <?php echo get_the_post_thumbnail( $query->post->ID, 'thumbnail', array( 'class' => 'alignleft' ) ); ?>

<?php }?>

<?php if($i==3) { ?>

  <div class="bel-contnt">
           <h2><?php echo $query->post->post_title;?></h2>
            <a href="#"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> Read More </a> </div>
            </div>
<?php }?>


<?php if($i==4) { ?>
  <div class="col-md-4 col-lg-3 right hidden-port visible animated slideInRight "><?php echo get_the_post_thumbnail( $query->post->ID, 'thumbnail', array( 'class' => 'alignleft' ) ); ?>

<?php }?>

<?php if($i==4) { ?>

  <div class="bel-contnt">
           <h2><?php echo $query->post->post_title;?></h2>
            <a href="#"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> Read More </a> </div>
            </div>
<?php }?>

<?php  endwhile; wp_reset_postdata(); ?>
</div>
</div>
 </section>
<?php endif;?>