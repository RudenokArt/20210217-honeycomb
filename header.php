<?php

/**

 * The Header for our theme.

 *

 * Displays all of the <head> section and everything up till <div class="container">

 *

 * @package IT Solutions

 */

?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div class="page-preloader"><img src="/image/732.gif" alt=""></div>
<?php do_action( 'wp_body_open' ); ?>

<!--HEADER STARTS-->

<?php 

	$contact_no = get_theme_mod('contact_no'); 

	$contact_mail = get_theme_mod('contact_mail');

	$top_tagline = get_theme_mod('top_tagline');

	$fb_link = get_theme_mod('fb_link'); 

	$twitt_link = get_theme_mod('twitt_link');

	$gplus_link = get_theme_mod('gplus_link');

	$linked_link = get_theme_mod('linked_link');

	$hidetopbar = get_theme_mod('hide_header_topbar', 1);

if( $hidetopbar == '') { ?>

<div class="head-info-area">

<div class="center">

<div class="left">

		<?php if(!empty($top_tagline)){?>

		 <span class="taglinetp">  

          <?php echo esc_html($top_tagline); ?>

        </span>

        <?php 

		if(!empty($contact_mail)){?>     

        <span class="emltp">

        <a href="mailto:<?php echo esc_attr( antispambot(sanitize_email( $contact_mail ) )); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icon-email.png" alt="" /><?php echo esc_html( antispambot( $contact_mail ) ); ?></a></span>

        <?php } ?> 

</div> 

		<div class="right">

        <?php } if(!empty($contact_no)){?>

		 <span class="phntp">

          <span class="phoneno"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icon-phone.png" alt="" /> 

          <strong><?php echo esc_html($contact_no); ?></strong></span>

        </span>

        <?php } ?>

        

        <div class="social-icons">

		<?php 

		if (!empty($fb_link)) { ?>

        <a title="<?php echo esc_attr__('facebook','it-solutions'); ?>" class="fb" target="_blank" href="<?php echo esc_url($fb_link); ?>"></a> 

        <?php } 		

		if (!empty($twitt_link)) { ?>

        <a title="<?php echo esc_attr__('twitter','it-solutions'); ?>" class="tw" target="_blank" href="<?php echo esc_url($twitt_link); ?>"></a>

        <?php } 

		if (!empty($gplus_link)) { ?>

        <a title="<?php echo esc_attr__('google-plus','it-solutions'); ?>" class="gp" target="_blank" href="<?php echo esc_url($gplus_link); ?>"></a>

        <?php } 

		 if (!empty($linked_link)) { ?> 

        <a title="<?php echo esc_attr__('linkedin','it-solutions'); ?>" class="in" target="_blank" href="<?php echo esc_url($linked_link); ?>"></a>

        <?php } ?>                   

      </div>

</div>

<div class="clear"></div>                

</div>

</div>

<?php } ?>

<!--HEADER ENDS-->
<div class="stick-padding"></div>
<div class="header">
  <div class="menu-bg"></div>
  <div class="container">

    <div class="logo">

		<?php it_solutions_the_custom_logo(); ?>

        <div class="clear"></div>

		<?php	

        $description = get_bloginfo( 'description', 'display' );

        ?>

        <a href="/">

        <img src="/image/logo.png" alt="">

        </a>

    </div>
    <?php dynamic_sidebar( 'header_contact' ); ?>  
         <div class="toggle"><a class="toggleMenu" href="#" style="display:none;"><?php esc_html_e('Menu','it-solutions'); ?></a></div> 

        <div class="sitenav">

          <?php wp_nav_menu( array('theme_location' => 'primary') ); ?>         

        </div><!-- .sitenav--> 

        <div class="clear"></div> 

  </div> <!-- container -->
  <?
  $pf = '';
  if(strpos(' '.$_SERVER['REQUEST_URI'],'/alarita/')){
    $pf = '/alarita';
  }

  $file = $_SERVER['DOCUMENT_ROOT'].$pf.'/sections.ini';
  $sections_config = parse_ini_file( $file, true );
  $path = explode('/',$_SERVER['REQUEST_URI']);  
  $i = 1;
  if($pf != ''){
    $i = 2;
  }
  ?>
  <?if(isset($path[$i]) && $path[$i]!='' && isset($sections_config[$path[$i]])):?>
    <?if(count($sections_config[$path[$i]])):?>
    <div class="wrap-filter">
      <div class="inner-filter">
      <div class="section-filter">
      <div class="current"><a href="javascript:void(0)"><span>All</span><i>▾</i></a></div>
      <ul>
        <li><a href="javascript:void(0)" data-href="all">All</a></li>
        <?foreach ($sections_config[$path[$i]] as $key => $value):?>
          <li><a href="javascript:void(0)" data-href="<?=$key;?>"><?=$value;?></a></li>
        <?endforeach;?>
      </ul>
      </div>
      </div>
      </div>
      <script>
        jQuery(document).ready(function($){
            if($('.items-row').length){
                console.log($('.items-row').length);
                $('.items-row').hide();
                $('.items-row').each(function(index,elem){            
                  if(index!=0){
                    $(this).find('.elementor-col-25').each(function(){
                      $('.items-row:first').find('.elementor-row').append($(this).clone());
                    });
                  }
                });
                $('.items-row:first').show();
                $('.items-row:first').css({'min-height':$('.items-row:first').height()});
                if($('.section-filter').length){
                  $('.items-row:first').prepend($('.wrap-filter').html());
                  $('.wrap-filter').remove();
                  //actions
                  var a = $('.section-filter .current a');
                  var ul = $('.section-filter ul');
                  var a2 = $('.section-filter ul a');
                  a.click(function(){
                    if(!ul.hasClass('active')){
                      ul.addClass('active');
                      ul.slideDown(100);                      
                    }
                    else{
                      ul.removeClass('active');
                      ul.slideUp(100);   
                    }
                  });
                  if($(window).width()>=768){
                    $('.section-filter').hover(function(){
                      //if(ul.hasClass('active')){
                        ul.addClass('active');
                        ul.slideDown(100);                      
                      //}
                      },
                      function(){
                        ul.removeClass('active');
                        ul.slideUp(100);                      
                      }
                    );
                  }
                  $(document).mouseup(function (e){
                    var div = $(".section-filter");
                    if (!div.is(e.target)
                        && div.has(e.target).length === 0) {
                          if(ul.hasClass('active')){
                            ul.removeClass('active');
                            ul.slideUp(100);
                          }
                    }
                  });
                  a2.click(function(){
                    a.find('span').text($(this).text());
                    ul.removeClass('active');
                    ul.slideUp(100);
                    let cl = $(this).attr('data-href');
                    console.log(cl);
                    if(cl=='all'){
                      $('.items-row:first').find('.elementor-col-25:hidden').show(400);
                    }
                    else{
                      $('.items-row:first').find('.elementor-col-25:not(.' + cl + ')').hide(400);
                      $('.items-row:first').find('.' + cl).show(400);
                    }
                  });
                }
            }
        });  
        </script>      
    <?endif;?>
  <?endif;?>

</div><!--.header -->