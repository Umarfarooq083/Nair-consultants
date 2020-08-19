<?php
/* Template Name: Home Page Template */
?>
<?php get_header(); ?>


<?php get_header(); ?>
<?php
    $args = array(
    'posts_per_page'    => -1,
    'post_type'     => 'banner_heading',  //choose post type here
    'order' => 'ASC',
);
// query
$the_query = new WP_Query( $args ); ?>

 <?php
if( $the_query->have_posts() ): ?>
<section>
<div id="carouselEnterpriseIndicators" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner">
        <?php
        $i=1;
    while( $the_query->have_posts() ) : $the_query->the_post(); 

          $title=$the_query->post->post_title;
            ?>
   <div class="carousel-item slides <?php if($i=="1") {echo "active";} ?>">
    <img class="img-fluid d-block w-100" src="<?php echo $featured_image = get_the_post_thumbnail($health_status->ID,'', array('title' => $title));?>
     <div class="col-md-10 col-lg-6 carousel-caption slides-content">

        
          </div>
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

 

<!-- first about us loop -->

      <?php
    $args = array(
    'posts_per_page'    => -1,
    'post_type'     => 'about_us_first',  //choose post type here
    'order' => 'ASC',
);
// query
$the_query = new WP_Query( $args ); ?>
 <?php
if( $the_query->have_posts() ): ?>
  <section class="ready pt-5 pb-5">
    <div class="container">
      <div class="row">
        <?php
        $i=1;
    while( $the_query->have_posts() ) : $the_query->the_post(); 
          $title=$the_query->post->post_title;
            ?>
<div class="col-md-4 right img_res">
<?php echo $featured_image = get_the_post_thumbnail($the_query->post->ID,'img-fluid', array('title' => $title)); ?>
        </div>
        <div class="col-md-8 safe-parking">
          <h3 class="down"><?php echo $the_query->post->post_title;?></h3>
          <p class="Up"><?php echo $the_query->post->post_content;?></p>
      </div>
     <?php //get_template_part('loop');
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
      'posts_per_page'    => -1,
      'post_type'     => 'about_us_second',  //choose post type here
      'order' => 'ASC',
);
// query
$the_query = new WP_Query( $args ); ?>
  <?php
  if( $the_query->have_posts() ): ?>
<section class="py-5 it-works py-5 bg-light">
  <div class="container">
     <h2> HOW IT WORKS </h2>
    <div class="row pb-5">
        <?php
        $i=1;
     while( $the_query->have_posts() ) : $the_query->the_post(); 
          $title=$the_query->post->post_title;
            ?>
      <div class="col-md-4 col-lg-4 text-center">
      <?php echo $featured_image = get_the_post_thumbnail($the_query->post->ID,'img-fluid', array('title' => $title)); ?>
         <p>
          "You may remember from your own school days how much students sometimes complain about teachers ("she gives so much busywork," "he gave me a D just because I turned it in a day late!")."
        </p>
      </div>
       <?php //get_template_part('loop');
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

					   
<!-- third about us loop -->

<?php
      $args = array(
      'posts_per_page'    => -1,
      'post_type'     => 'about_us_third',  //choose post type here
      'order' => 'ASC',
);
// query
$the_query = new WP_Query( $args ); ?>
  <?php
  if( $the_query->have_posts() ): ?>
<section>
  <div class="container">
   <div class="row">
        <?php
        $i=1;
     while( $the_query->have_posts() ) : $the_query->the_post(); 
          $title=$the_query->post->post_title;
            ?>
          <div class="col-sm-6 col-md-4 p-0">
              <div class="box19">
                <a href="#">
                <?php echo $featured_image = get_the_post_thumbnail($the_query->post->ID,'img-fluid w-100', array('title' => $title)); ?></a>
                  <div class="box-content">
                      <h3 class="title"><?php echo $the_query->post->post_title;?></h3>
                  </div>
              </div>
          </div>
       <?php //get_template_part('loop');
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

<!-- fourth about us loop -->

<!-- contact us form -->

<section class="faqs pt-5 pb-5">
    <div class="container">
      <div class="row">
            <div class="col-md-8 col-lg-8">
            <form  id="sendMessageForm" action="" method="post"  onsubmit="return false;">
                <h2 class="Up"> Contact us  </h2>
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
                full_name: "Full Name is required*",
                 email: {
                    required: "Email is required*",
                    email: "Invalid Email address*",
                },
                contact_number: "Contact Number is required*",
                subject: "Subject is required*",
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