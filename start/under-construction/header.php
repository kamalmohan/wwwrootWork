<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
                
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
        
        <?php wp_enqueue_script("jquery"); ?>

        
		<?php wp_head(); ?>
        
        
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
        
        
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
                
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.pack.js"></script>
        <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery.countdown.js"></script>
        <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jcarousellite1.0.1_min.js"></script>
        
        
<!-- jquery countdown-->
<script type="text/javascript">
var $j = jQuery.noConflict();
$j(function () {
var austDay = new Date("<?php echo get_option('month'); ?> <?php echo get_option('day'); ?>, <?php echo get_option('year'); ?> 00:00:00");
	$j('#defaultCountdown').countdown({until: austDay, layout: '{dn} {dl}, {hn} {hl}, {mn} {ml}, and {sn} {sl}'});
	$j('#year').text(austDay.getFullYear());
	});
</script>


<!-- jquery slider -->
<script type="text/javascript">
var $j = jQuery.noConflict();
$j(function() {
    $j("#slidertext").jCarouselLite({
        btnNext: ".next",
        btnPrev: ".prev"
    });
});

</script>

<!--script for IE6-image transparency recover-->
<!--[if IE 6]>
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/DD_belatedPNG_0.0.7a-min.js"></script>
<script>
  /* EXAMPLE */
  DD_belatedPNG.fix('#logo img,#main,.counter,.twitter,.flickr,.facebook,.youtube,#submit_button,.prev img,.next img,#email_input');
  
</script>
<![endif]--> 



        
        
        
        

	</head>
	
	<body <?php body_class(); ?>>
		
	<div class="container">
	
    <div id="header">
    
    	<div id="logo">
        	<a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_option('logo_url'); ?>" alt="logo"/></a>
        </div><!--end logo-->
            
        <div id="contact_details">
        	<p><?php echo get_option('email_contact'); ?></p>
			<p>phone : <?php echo get_option('phone_contact'); ?></p>
		</div><!--end contact details-->     
                
	</div><!--end header-->
              <div style="clear:both"></div> 
              
<div id="main">

		 <div id="content">
                    