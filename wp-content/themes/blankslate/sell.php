<?php /* Template Name: Sell Template */ ?>
<?php
$path = $_SERVER['DOCUMENT_ROOT'];
  get_header();

  global $post;
  $post_slug=$post->post_name;
 ?>

  <?php include( 'header-top.php' ); ?>

<div id="sell" style="background: url('<?php echo the_post_thumbnail_url();?>') no-repeat;">
  <div class="overlay"></div>
  <div class="inner-content <?php echo $post_slug == 'buy-a-property' ? 'buy' : ' '  ?>">
      <?php if ($post_slug == 'sell-a-property'){ ?>
        <?php include( 'sell-inner.php' ); ?>
      <?php }else{?>
          <?php include( 'buy-inner.php' ); ?>
        <?php } ?>
  </div>
</div>

<?php include( 'contact.php' ); ?>
<?php get_footer(); ?>
