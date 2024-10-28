<?php
/*
Template Name: Пед. династия
Template Post Type: post, page
*/
?>
<?php 
  get_header('custom'); 
  global $post;
  $postid = $post->ID;
?>
    <main class="main">
      <section class="section-5">
        <div class="block-s5-wrapper">
          <div class="container1">
            <div class="block-s5">
              <div class="block-s5-left">
                <a href="https://dinastii.mpcenter.ru/">
                  <img src="<?php bloginfo(template_url);?>/img/pdr-s5.svg" alt="" />
                </a>
              </div>
              <div class="block-s5-right">
                <div class="block-s5-wrapper-1">
                  <p class="text-s5-impue-22px">
                    <?= CFS()->get('dinastiya_main_textarea',$postid)?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-6">
        <div class="block-s6-wrapper">
          <div class="container1">
            <button class="btn btn-reset">
              <a href="<?php echo get_permalink(1495, false)?>"><img src="<?php bloginfo(template_url);?>/img/arrow-back.svg" alt="" /></a>
            </button>
            <div class="block-s6">
              <div class="block-s6-text">
                <h2 class="zagolovok-big" id="blue">
                  <?php the_title(); ?>
                </h2>
                <p class="zagolovok-middle" id="blue">
                  <?= CFS()->get('dinastiya_ped_stag',$postid)?>
                </p>
                <p class="zagolovok-middle-imbue">
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
                  <?php the_content(); ?>
                </p>
              </div>

              <div class="block-s6-citata">
                <div class="block-s6-citata-text">
                  <div class="block-s6-citata-text-1">
                    <p class="imbue-32px-nonColor">
                      <?= CFS()->get('dinastiya_citata',$postid)?>
                    </p>
                  </div>
                  <div class="block-s6-citata-text-2">
                    <p class="imbue-24px-nonColor">
                      <?= CFS()->get('dinastiya_podpis',$postid)?>
                    </p>
                  </div>
                </div>
                <div class="block-s6-citata-img">
                  <img src="<?= CFS()->get('dinastiya_foto',$postid)?>" alt="">
                </div>
                <div class="pop-up">
                  <span>&times;</span>
                </div>
              </div>
            </div>
          </div>
        </div>
       
      </section>
    </main>

<?php get_footer(); ?>