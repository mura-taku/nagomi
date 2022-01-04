<?php get_header();the_post() ?>
  <div class="sub-mainvisual <?php echo esc_html(get_post(get_the_ID()) -> post_name); ?>">
    <div class="mainvisual-content">
      <h1><?php the_title(); ?></h1>
      <div class="breadcrumb">
        <?php if(is_page('fee')): ?>
          <span><a href="<?php echo esc_url(home_url()); ?>" alt="">ホーム</a></span><span>&#62;</span><span><a href="<?php echo esc_url(home_url('medical')); ?>" alt="">診療について</a></span><span>&#62;</span><span><?php the_title(); ?></span>
        <?php else: ?>
          <span><a href="<?php echo esc_url(home_url()); ?>" alt="">ホーム</a></span><span>&#62;</span><span><?php the_title(); ?></span>
        <?php endif; ?>
      </div>
    </div>
    <div class="wave"></div>
  </div>

  <?php get_template_part('content/content',get_post(get_the_ID()) -> post_name); ?>


<?php get_footer(); ?>