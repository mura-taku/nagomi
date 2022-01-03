<?php get_header(); the_post(); ?>
  <div class="sub-mainvisual news">
    <div class="mainvisual-content">
      <h1><?php the_title(); ?></h1>
      <div class="breadcrumb">
        <span><a href="<?php echo esc_url(home_url()); ?>" alt="">ホーム</a></span><span>&#62;</span><span><a href="<?php echo esc_url(home_url('news')); ?>" alt="">お知らせ</a></span><span>&#62;</span><span><?php the_title(); ?></span>
      </div>
    </div>
    <div class="wave"></div>
  </div>

<?php get_footer(); ?>
