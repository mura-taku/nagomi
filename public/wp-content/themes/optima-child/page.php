<?php get_header();the_post() ?>
  <div class="sub-mainvisual <?php echo esc_html(get_post(get_the_ID()) -> post_name); ?>">
    <div class="mainvisual-content">
      <h1><?php the_title(); ?></h1>
      <div class="breadcrumb">
        <span><a href="<?php echo esc_url(home_url()); ?>" alt="">ホーム</a></span><span>&#62;</span><span><?php the_title(); ?></span>
      </div>
    </div>
    <div class="wave"></div>
  </div>


<?php get_footer(); ?>