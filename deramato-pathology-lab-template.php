<?php get_header(); 
/*
Template Name: Deramato Pathology Lab page
*/
?>

<section class="strat-bgg">
  <div class="container">
    <div class="col-md-12 startup">
      <h3> Deramato Pathology Lab</h3>
    </div>
  </div>
</section>



<?php
    $args = array(
    'posts_per_page'    => -1,
    'post_type'     => 'deramato_pathology_l',  //choose post type here
    'order' => 'ASC',
);
// query
$the_query = new WP_Query( $args ); ?>

 <?php
if( $the_query->have_posts() ): ?>

<section>                                
<div class="row home-01 light-blue services-top" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2018/03/uu.jpg);">
	<div class="container">
         
        <?php
        $i=1;
    while( $the_query->have_posts() ) : $the_query->the_post(); 

          $title=$the_query->post->post_title;
            ?>
            <div class="services-number"><?php echo $the_query->post->post_title; ?></div>
		<div class="services-text">
        <?php echo $the_query->post->post_content; ?>
      </div>

     <?php
     $i++;
      endwhile;
     ?>
     
     </div>
    </section>
    <?php 
  else :

  endif;
 ?>




<?php
    $args = array(
    'posts_per_page'    => -1,
    'post_type'     => 'deramato_pathology_l',  //choose post type here
    'order' => 'ASC',
);
// query
$the_query = new WP_Query( $args ); ?>
 <?php
if( $the_query->have_posts() ): ?>
<section> 
<div class="row services-columns">
  <div class="container">
   <h1>WHO ELITE WORKS WITH</h1>
	 <div class="cols cols-5">
        <?php
        $d=0;
    while( $the_query->have_posts() ) : $the_query->the_post(); 
          $title=$the_query->post->post_title;
   ?>
<?php   $id = get_the_ID();
    $vehilceDetails = get_post_meta($id,'vehicleDetails',true);
    $c = 0;
   if ( count( $vehilceDetails ) > 0 && is_array($vehilceDetails)) {
	        foreach( $vehilceDetails as $vehilceDetail ) {?>
              <div class="col my_class_width">
            	<img class="umarfar" style="height: 144px; width: 193px;" src="<?=$vehilceDetails[$c]['image'];?>" alt="">
            </div>
    <?php   $c = $c +1;  }
   }
    ?>
        
     <?php
     $d++;
      endwhile;
     ?>
     </div>
     </div>
     </div>
    </section>
    <?php 
  else :

  endif;
 ?>


<?php
      $args = array(
      'posts_per_page'    => -1,
      'post_type'     => 'deramato_pathology_l',  //choose post type here
      'order' => 'ASC',
);
// query
$the_query = new WP_Query( $args ); ?>
  <?php
  if( $the_query->have_posts() ): ?>
<section class="py-5 it-works py-5 bg-light">
  <div class="container">
     <h2> WHY CHOOSE ELITE OVER THE OTHER GUYS </h2>
    <div class="row pb-5">
        <?php
        $j=1;
     while( $the_query->have_posts() ) : $the_query->the_post(); 
          $title=$the_query->post->post_title;
          ?>



<?php   $id = get_the_ID();
    $labDetails = get_post_meta($id,'labDetails',true);
   
    $a = 0;
  //  print_r($labDetails); exit;
   if ( count( $labDetails ) > 0 && is_array($labDetails)) {
	        foreach( $labDetails as $labDetail ) {?>
              <div class="col-md-4 col-lg-4 text-center">
            	<img class="umarfar" style="height: 144px; width: 193px;" src="<?=$labDetail['second'];?>" alt="">
              <p><?=$labDetail['descps'];?></p>
            </div>
    <?php   $a = $a + 1; 
     }
   }
    ?>


      
       <?php //get_template_part('loop');
       $j++;
       endwhile;
       ?>
      </div>
     </div>
    </section>
    <?php 
   else :

   endif;
 ?>




<?php
    $args = array(
    'posts_per_page'    => -1,
    'post_type'     => 'deramato_pathology_l',  //choose post type here
    'order' => 'ASC',
);
// query
$the_query = new WP_Query( $args ); ?>

 <?php
if( $the_query->have_posts() ): ?>
<section class="py-5 it-works py-5 bg-light">
  <div class="container">
    <div class="row pb-5">
      
      
        <?php
        $i=1;
    while( $the_query->have_posts() ) : $the_query->the_post(); 

          $title=$the_query->post->post_title;
            ?>


<?php   $id = get_the_ID();
    $assus = get_post_meta($id,'assus',true);
   
    $a = 0;
  //  print_r($labDetails); exit;
   if ( count( $assus ) > 0 && is_array($assus)) {
	        foreach( $assus as $assu ) {?>
              <div class="col-md-6 col-lg-6 text-center">
            	<img class="umarfar" style="height: 144px; width: 193px;" src="<?=$assu['third'];?>" alt="">
              <p><?=$assu['descpes'];?></p>
            </div>
    <?php   $a = $a + 1; 
     }
   }
    ?>

     <?php
     $i++;
      endwhile;
     ?>
     </div>
     </div>
    </section>
    <?php 
  else :

  endif;
 ?>


<?php
    $args = array(
    'posts_per_page'    => 1,
    'post_type'     => 'table',  //choose post type here
    'order' => 'ASC',
);
// query
$the_query = new WP_Query( $args ); ?>


 <?php
if( $the_query->have_posts() ): ?>

 
 <div class="row">
			<div class="container">
				<table class="services-table">
					<tbody>
                        <tr>
						<th colspan="2"><h1>ELITE’S TOXICOLOGY PROGRAM INCLUDES:</h1></th>
                       </tr>
        
        <?php
        $i=1;
    while( $the_query->have_posts() ) : $the_query->the_post(); 

          $title=$the_query->post->post_title;
            ?>



                      <?php $id = get_the_ID();
    $NairDetails = get_post_meta($id,'prefix-text_1',true);//print_r($NairDetails); exit;
    $c = 0;
   if ( count( $NairDetails ) > 0 && is_array($NairDetails)) {
	        foreach( $NairDetails as $NairDetail ) { ?>
                        
                        <?php if(($c % 2) == 0){ ; ?>
                        <tr>
                        <?php  } ?>                  
                       <td > <p><?=$NairDetails[$c];?> </p></td>
                       <?php if(($c % 2) == 1){ ?>
                       </tr>
                        <?php  } ?>  
    <?php          $c = $c +1; }
     }
    ?>
  

     <?php
     $i++;
      endwhile;
     ?>
               </tbody>
             </table>
			</div>
		</div>
        
    <?php 
  else :

  endif;
 ?>
<section class="faqs pt-5 pb-5">
    <div class="container">
      <div class="row">
            <div class="col-md-8 col-lg-8">
            <form  id="sendMessageForm" action="" method="post"  onsubmit="return false;">
                <h2 class="Up"> Get In Touch </h2>
                <p class="down"></p>
                
                <lable> Your name: </lable>
                <input type="text" name="full_name" id="full_name" style="padding: 7px; width: 100%"><br><br>

                <lable> Your Email: </lable>
                <input type="email" name="email" id="email" style="padding: 7px; width: 100%"><br><br>

                <lable> Phone Number: </lable>
                <input type="text" name="contact_number" id="contact_number" style="padding: 7px; width: 100%"><br><br>

                <h6>Subject:</h6>
                <input type="text" name="subject" id="subject" style="padding: 7px; width: 100%"><br><br>

                <lable> Your Message: </lable>
               <textarea type="message" id="message" cols="38" rows="10" height="200px"></textarea><br><br>
                <input type="submit" value="send message">
                </div>
              </form>
              <div class="col-md-4 col-lg-4 brief-categories contact-info">
            <?php dynamic_sidebar( 'sidebar-3' ); ?>
            </div>

          </div>
        </div>
</section>




 <?php get_footer(); ?>

 <script>
    $(document).ready(function () {
        add_validation();
    });
    function add_validation() {
        $("#sendMessageForm").validate({
            rules: {
                full_name: "required",
                email: {
                    required: true,
                    email: true,
                },
                contact_number: "required",
                subject: "required",
            },
            messages: {
                full_name: "Full Name is required",
                 email: {
                    required: "Email is required",
                    email: "Invalid Email address",
                },
                contact_number: "Contact Number is required",
                subject: "Subject is required",
            },
            submitHandler: function (form) {
              
                $.ajax({
                    type: "POST",
                    dataType: 'json',
                    url: "<?php echo admin_url('admin-ajax.php'); ?>",
                        data: {
                            action: 'contact_us_email',
                            full_name : $("#full_name").val(),
                            contact_number : $("#contact_number").val(),
                            subject : $("#subject").val(),
                            message : $("#message").val(),
                            email : $("#email").val(),
                        },
                                       
                        success: function (data)
                        {
                        if(data.email_sent=='1'){
                            $("#alert-succ").removeClass("hide");
                            $('#alert-succ').show();
                            setTimeout(function() { $('#alert-succ').hide(); }, 5000);
                            return false;
                        }else{
                            $("#alert-dan").removeClass("hide");
                            $('#alert-dan').show();
                            setTimeout(function() { $('#alert-dan').hide(); }, 5000);
                            }
                        }
                    });
                    return false;
                    }
                });
            };
    </script>