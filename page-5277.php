<?php get_header() ?>

      
      <div class="our_partners-image">
        <?php echo get_post()->post_content;?>
      </div>
      
      <div class="our_partners-title">
        <div>
          <?php echo get_post()->post_title; ?>         
        </div> 
      </div>
      

<div id="invisible-node">
  <?php 
  $partnersQuery=query_posts('category=our_partners');
  $partnersArr='';
  for ($i=0; $i < sizeof($partnersQuery)-1; $i++) { 
    $partnersArr=$partnersArr.htmlentities($partnersQuery[$i]->post_excerpt).'|' ;
    $partnersArr=$partnersArr.htmlentities(get_the_post_thumbnail($partnersQuery[$i]->ID)).'|';
    $partnersArr=$partnersArr.htmlentities($partnersQuery[$i]->guid).'||' ;
  }
  echo $partnersArr;
  ?>
</div>
<div id="image-node"></div>

<div class="comb-container">
  <?php for ($i=0; $i < 6; $i++) { ?>
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
    </div>

    <script src="<?php echo get_template_directory_uri() ?>/js/honeycomb.js"></script>

    <?php get_footer() ?>

