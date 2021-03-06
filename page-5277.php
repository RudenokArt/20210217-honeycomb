


<?php get_header(); ?>


<div class="our_partners-image-wrapper">
  <div class="our_partners-image">
    <?php echo get_post()->post_content;?>
  </div>
  <div></div>
</div>


<div class="our_partners-title">
  <div>
    <?php echo get_post()->post_title; ?>         
  </div> 
</div>


<div id="invisible-node">
  <?php 
  $partnersQuery=get_posts([
    'category_name'=>'our_partners',
    'numberposts'=>-1,'post_type'=>'page',
    'orderby'=>'date',
    'order'=>'DESC'
  ]);
  $partnersArr='';
  for ($i=0; $i < sizeof($partnersQuery); $i++) { 
    $partnersArr=$partnersArr.htmlentities($partnersQuery[$i]->post_excerpt).'|' ;
    $partnersArr=$partnersArr.htmlentities(get_the_post_thumbnail($partnersQuery[$i]->ID)).'|';
    $partnersArr=$partnersArr.htmlentities($partnersQuery[$i]->guid).'||' ;
  }
  // print_r($partnersQuery);
  echo $partnersArr;
  ?>
</div>
<div id="image-node"></div>
<div class="comb-container_wrapper">
  <?php 
  for ($n=0; $n < 250 ; $n++) {   ?>
    <div class="comb-container">
      <?php for ($i=0; $i < 2; $i++) { ?>
        <div class="comb-double">
          <div class="comb-block">
            <a href="#" class="comb-tab_left comb-tab">
              <div class="comb-tab_border-1"></div>
              <div class="comb-tab_border-2"></div>
              <div class="comb-tab_content">
                <div class="comb-tab_content-overlay"></div>
                <div class="comb-tab_content-top"></div>
                <div class="comb-tab_content-bottom"></div>
                <div class="comb-tab_content-text"><div></div></div>
              </div>
            </a>
            <a href="#" class="comb-tab_right comb-tab">
              <div class="comb-tab_border-1"></div>
              <div class="comb-tab_border-2"></div>
              <div class="comb-tab_content">
                <div class="comb-tab_content-overlay"></div>
                <div class="comb-tab_content-top"></div>
                <div class="comb-tab_content-bottom"></div>
                <div class="comb-tab_content-text"><div></div></div>
              </div>
            </a>
          </div>
          <div class="comb-block">
            <a href="#" class="comb-tab_left comb-tab">
              <div class="comb-tab_border-1"></div>
              <div class="comb-tab_border-2"></div>
              <div class="comb-tab_content">
                <div class="comb-tab_content-overlay"></div>
                <div class="comb-tab_content-top"></div>
                <div class="comb-tab_content-bottom"></div>
                <div class="comb-tab_content-text"><div></div></div>
              </div>
            </a>
            <a href="#" class="comb-tab_right comb-tab">
              <div class="comb-tab_border-1"></div>
              <div class="comb-tab_border-2"></div>
              <div class="comb-tab_content">
                <div class="comb-tab_content-overlay"></div>
                <div class="comb-tab_content-top"></div>
                <div class="comb-tab_content-bottom"></div>
                <div class="comb-tab_content-text"><div></div></div>
              </div>
            </a>
          </div>
          </div><?}?>
          </div><?}?>

        </div>

        <script src="<?php echo get_template_directory_uri() ?>/js/honeycomb.js?v2"></script>

        <?php $menuitems=wp_get_nav_menu_items(2); ?>
        <div class="comb-footer">
          <div class="flex-wrapper">

            <div class="comb-footer_item">
              <div class="footer-logo">
                <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" 
                alt=" ">
              </div>
            </div>

            <div class="comb-footer_item">
              <div class="comb-footer_item-title">
                ABOUT
              </div>
              <div>
                <a href="<?php echo get_template_directory_uri(); ?>">
                 <span>&#187</span> HOME
               </a>
             </div>
             <div>
              <a href="<?php echo $menuitems[0]->url; ?>">
                <span>&#187</span> <?php echo $menuitems[0]->title; ?>
              </a>
            </div>
            <div>
              <a href="<?php echo $menuitems[1]->url; ?>">
                <span>&#187</span> <?php echo $menuitems[1]->title; ?>
              </a>
            </div>
          </div>
        </div>

        <div class="flex-wrapper">
          <div class="comb-footer_item">
            <div class="comb-footer_item-title">
              REGARDING
            </div>
            <div>
              <a href="<?php echo $menuitems[6]->url; ?>">
                <span>&#187</span> <?php echo $menuitems[6]->title; ?>
              </a>
            </div>
            <div>
              <a href="<?php echo $menuitems[7]->url; ?>">
                <span>&#187</span> <?php echo $menuitems[7]->title; ?>
              </a>
            </div>
            <div>
              <a href="<?php echo $menuitems[8]->url; ?>">
                <span>&#187</span> <?php echo $menuitems[8]->title; ?>
              </a>
            </div>
          </div>

          <div class="comb-footer_item">
            <div class="comb-footer_item-title">
              QUICK LINKS
            </div>
            <div>
              <a href="<?php echo $menuitems[2]->url; ?>">
                <span>&#187</span> <?php echo $menuitems[2]->title; ?>
              </a>
            </div>
            <div>
              <a href="<?php echo $menuitems[3]->url; ?>">
                <span>&#187</span> <?php echo $menuitems[3]->title; ?>
              </a>
            </div>
            <div>
              <a href="<?php echo $menuitems[4]->url; ?>">
                <span>&#187</span> <?php echo $menuitems[4]->title; ?>
              </a>
            </div>
            <div>
              <a href="<?php echo $menuitems[5]->url; ?>">
                <span>&#187</span> <?php echo $menuitems[5]->title; ?>
              </a>
            </div>
          </div>

        </div>
        
        
      </div>


      <?php get_footer(); ?>

