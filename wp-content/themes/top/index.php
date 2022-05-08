<?php get_header() ?>

<?php
$args = array(
  'posts_per_page' => 4,
  'post_type' => [
    'custom_type' => 'price',
  ],

);

$query = new WP_Query($args); ?>

<section>
  <div class="">
    <div id="carouselExampleCaptions" class="main carousel slide" data-bs-ride="carousel">
      <button type="button" class="call btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></button>
      <div class="carousel-indicators dot-block">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="dot active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="dot" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class="dot" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/wp-content/themes/top/assets/img/bg.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block container">
            <h1><?php the_field('title_main'); ?></h1>
            <p>call us: +00 0 1234 5678 </p>
            <div class="btn-item">
              <a href="<?php the_field('button_link_main'); ?>"><?php the_field('button_text_main'); ?></a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/wp-content/themes/top/assets/img/bg.png" class="d-block w-100" alt="...">
          <div class="container carousel-caption d-none d-md-block">
            <h1><?php the_field('title_main'); ?></h1>
            <p>call us: +00 0 1234 5678 </p>
            <div class="btn-item">
              <a href="<?php the_field('button_link_main'); ?>"><?php the_field('button_text_main'); ?></a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/wp-content/themes/top/assets/img/bg.png" class="d-block w-100" alt="...">
          <div class="container carousel-caption d-none d-md-block">
            <h1><?php the_field('title_main'); ?></h1>
            <p>call us: +00 0 1234 5678 </p>
            <div class="btn-item">
              <a href="<?php the_field('button_link_main'); ?>"><?php the_field('button_text_main'); ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="about">
  <div class="container">
    <h2 class="title"><?php the_field('title_about'); ?></h2>
    <h4 class="subtitle"><?php the_field('subtitle_about'); ?></h4>
    <div class="about__body container__body">
      <div class="about__text-left">
        <p>
          <?php the_field('text_about'); ?>
        </p>
        <div class="btn-item">
          <a href="<?php the_field('button_link_about'); ?>"><?php the_field('button_text_about'); ?></a>
        </div>
      </div>
      <div class="about__img-right">
        <div class="video"><img src="wp-content/themes/top/assets/img/video.jpg" alt=""></div>
      </div>
    </div>
  </div>
</section>

<section class="pricing">
  <div class="container">
    <h2 class="title"><?php the_field('title_pricing'); ?></h2>
    <h4 class="subtitle"><?php the_field('subtitle_pricing'); ?></h4>
    <div class="pricing__body container__body">
      <?php if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post(); ?>

          <div class="pricing__item">
            <div class="name"><?php the_field('card_title'); ?></div>
            <div class="price"><?php the_field('card_price'); ?></div>
            <div class="date"><?php the_field('card_date'); ?></div>
            <?php the_field('card_list'); ?>
            <div class="btn-item">
              <a href="<?php the_field('card_link'); ?>">Choose</a>
            </div>
          </div>

      <?php  }
      } ?>
      <?php wp_reset_postdata();
      ?>
    </div>
  </div>
</section>
<section class="form">
  <div class="container">
    <h2 class="title">Contact us</h2>
    <h4 class="subtitle">Our agency located in Melbourne, Australia</h4>
    <div class="form__body container__body">
      <?php the_field('form'); ?>
    </div>
  </div>
</section>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
        <div class="form__body container__body">
          <?php the_field('form'); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer() ?>