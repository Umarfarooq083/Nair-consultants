<?php 
      /*
      Template Name: Lab setup page
      */ 
      ?>
      <?php get_header(); ?>
<!-- banner -->
      <section class="strat-bg">
        <div class="container">
          <div class="col-md-12 startup">
            
          </div>
        </div>
      </section>
<!-- starting loop -->

      <?php
            $health_status_arg=array(
            'post_type' => "lab_setup",
            'posts_per_page' => -1,
            'orderby' => 'ASC',
            );

            $j=0;

            $new_array = array();
            $title_array = array();

            $health_statuses=get_posts($health_status_arg);
           foreach($health_statuses as $health_status){ $j++; 
         
           if($j=="1"){
             $new_array['title'] =$health_status->post_title;
             $new_array['content'] =$health_status->post_content;
           }else{
            $title_array[$j] =  array('title'=>$health_status->post_title,'slug'=>get_permalink($health_status->ID));
           }
           
           } ?>

      <section class="pt-5 pb-5">
        <div class="container">
          <div class="row">
             <div class="col-md-12 col-lg-8 take-startup">
               <h2> <?=$new_array['title']?></h2><?=$new_array['content']?>
				 


          </div>
       <div class="col-md-6 col-lg-4 brief-categories">
         <h4> Setup services </h4>
              <ul style="margin: 0px;">
              <?php foreach($title_array as $title) {  ?>
              <li> <a href=<?=$title['slug'];?> ><?=$title['title'];?></a> </li>
            <?php  }?>
                <!-- <li> Coding, Billing, and Collections </li>

                <li> Laboratory Instruments </li> -->

              </ul>
        </div>
      </div>
    </div>
  </section>

 <?php get_footer(); ?>