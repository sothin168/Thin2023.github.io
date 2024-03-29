<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fashion Shop Storefront
*/

  global $post;
?>
<?php
  $archive_year  = get_the_time('Y');
  $archive_month = get_the_time('m');
  $archive_day   = get_the_time('d');
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('post-single mb-4'); ?>>
  <?php if ( has_post_thumbnail() ) { ?>
    <div class="post-thumbnail">
      <?php the_post_thumbnail(''); ?>
    </div>
  <?php }?>
  <div class="post-info my-2">
    <?php if( get_theme_mod( 'fashion_shop_storefront_date_hide',true)) : ?>
      <span class="entry-date"><i class="<?php echo esc_attr(get_theme_mod('fashion_shop_storefront_post_date_icon_changer','fa fa-calendar')); ?>"></i> <a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
    <?php endif; ?>
    <?php if( get_theme_mod( 'fashion_shop_storefront_author_hide',true)) : ?>
      <span class="entry-author"><i class="<?php echo esc_attr(get_theme_mod('fashion_shop_storefront_post_author_icon_changer','fa fa-user')); ?>"></i> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
    <?php endif; ?>
    <?php if( get_theme_mod( 'fashion_shop_storefront_comment_hide',true)) : ?>
      <i class="<?php echo esc_attr(get_theme_mod('fashion_shop_storefront_post_comment_icon_changer','fas fa-comments')); ?>"></i><span class="entry-comments ml-2"><?php comments_number( __('0 Comments','fashion-shop-storefront'), __('0 Comments','fashion-shop-storefront'), __('% Comments','fashion-shop-storefront') ); ?></span>
    <?php endif; ?>
	</div>
  <div class="post-content">
    <?php the_content(); ?>
    <?php if( get_theme_mod( 'fashion_shop_storefront_single_post_tag',true)) : ?>
      <?php the_tags('<div class="post-tags"><strong>'.esc_html__('Tags:','fashion-shop-storefront').'</strong> ', ', ', '</div>');?>
    <?php endif; ?>
    <?php if( get_theme_mod( 'fashion_shop_storefront_single_post_category',true)) : ?>
      <div class="single-post-category mt-3">
        <span class="category"><?php esc_html_e('Categories:','fashion-shop-storefront'); ?></span>
          <?php the_category(); ?>
      </div>
    <?php endif; ?>
  </div>
</div>
