<?php 
 /* 
 Template Name: Contact Us
 */
?>
<?php get_header(); ?>

<section class="strat-bg">
        <div class="container">
          <div class="col-md-12 startup">
            <h3>  </h3>
          </div>
        </div>
      </section>


               
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