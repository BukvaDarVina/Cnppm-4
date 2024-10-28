<?php
/*
Template Name: Пед. династии
Template Post Type: page
*/
?>
<?php get_header('custom'); ?>
    <main class="main">
      <section class="section-1">
        <div class="block-s1-wrapper">
          <div class="container1">
            <div class="slider-s1">
            <?php
                global $post;
                $post_id = $post->ID;

                $myposts = get_posts([ 
                  'numberposts' => -1,
                  'cat'    => 6,
                  'orderby'   => 'date',
                  'order'     => 'DESC',
                  ]);

                if( $myposts ){
                  foreach( $myposts as $post ){
                    setup_postdata( $post );
                    $postid = $post->ID
              ?>

              <div class="slider-item">
                <div class="all-block-slider">
                  <div class="block-text-slider">
                    <h2 class="zagolovok-big" id="white"><?php the_title(); ?></h2>
                    <div class="text-inner-block zagolovok-middle white">
                      <p class="text-inner white">
                        <?= CFS()->get('dinastiya_ped_stag',$postid)?>
                      </p>
                    </div>
                    <button class="about-btn">
                      <a href="<?php the_permalink();?>" target="_blank"> Узнать больше </a>
                    </button>
                  </div>
                  <div class="block-img-slider">
                    <div class="block-img">
                      <a href="<?php the_permalink();?>">
                        <?php the_post_thumbnail(); ?>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <?php 
                    }
                  } 
                wp_reset_postdata(); // Сбрасываем $post
              ?>

            </div>
          </div>
        </div>
      </section>
      <section class="section-2">
        <div class="block-s2">
          <div class="container1">
            <div class="wrapper-cards">
              <div class="title-main-s2">
                <h2 class="zagolovok-imbue-big white">
                  <?php the_title(); ?>
                </h2>
              </div>

              <ul class="cards-ul">
                <!-- first -->
                <div class="slider-s2">
                  <div class="block-sliders-news">
                  <?php
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    $cards_posts = new WP_Query([ 
                    'cat'    => 6,
                    'posts_per_page' => 12,
                    'orderby'   => 'date',
                    'order'     => 'DESC',
                    'paged'=> $paged,
                    ]);
                     if( $cards_posts->have_posts() ) :
                      while ( $cards_posts->have_posts() ) : $cards_posts->the_post();
                        /* setup_postdata( $post ); */
                        /* $postid = $post->ID */
                  ?>
                    <li class="cards-all">
                      <div class="cards">
                        <div class="card-img">
                          <a href="<?php the_permalink();?>">
                            <?php the_post_thumbnail(); ?>
                          </a>
                        </div>
                        <div class="card-title zagolovok-middle white">
                          <a href="<?php the_permalink();?>" class="zagolovok-text impact-20px">
                            <?php the_title(); ?>
                          </a>
                        </div>
                      </div>
                    </li>
                    
                  <?php
                    endwhile;
                  ?>
                  
                </div>                
              </ul>
              <div class="pagination impact-40px">
                <?php
                    echo paginate_links( array(
                        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                        'total'        => $cards_posts->max_num_pages,
                        'current'      => max( 1, get_query_var( 'paged' ) ),
                        'format'       => '?paged=%#%',
                        'show_all'     => false,
                        'type'         => 'plain',
                        'end_size'     => 2,
                        'mid_size'     => 2,
                        'prev_next'    => true,
                        'prev_text'    => sprintf( '<i></i> %1$s', __( 'Назад', 'text-domain' ) ),
                        'next_text'    => sprintf( '%1$s <i></i>', __( 'Дальше', 'text-domain' ) ),
                        'add_args'     => false,
                        'add_fragment' => '',
                    ) );
                ?>
              </div>
              <?php 
                wp_reset_postdata(); 
                else : ?>
                <p><?php _e( 'Упс, ничего не нашлось. Но скоро все появится!' ); ?></p>
            <?php endif; ?>

            </div>
          </div>
        </div>
      </section>
      <section class="section-3">
        <div class="block-s3-wrapper">
          <div class="container1">
            <div class="block-s3-1">
              <div class="block-s3-text pr">
                <h2 class="zagolovok-imbue-big-white white left pb-50px">
                  <?= CFS()->get('dinastii_h',$post_id)?>
                </h2>
                <p class="imbue-36px white">
                  <?= CFS()->get('dinastii_text1',$post_id)?>
                </p>
                <p class="imbue-36px white right pt-80px">
                  <?= CFS()->get('dinastii_podpis1',$post_id)?>
                </p>
              </div>
              <div class="block-s3-img">
                <img src="<?= CFS()->get('dinastii_img1',$post_id)?>" alt="" />
              </div>
            </div>
            <div class="block-s3-1">
              <div class="block-s3-img">
                <img src="<?= CFS()->get('dinastii_img2',$post_id)?>" alt="" />
              </div>
              <div class="block-s3-text pl">
                <p class="imbue-36px white left">
                  <?= CFS()->get('dinastii_text2',$post_id)?>
                </p>
                <p class="imbue-36px white left pt-80px">
                  <?= CFS()->get('dinastii_podpis2',$post_id)?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-4">
        <div class="block-s4-wrapper">
          <div class="container1">
            <div class="block-s4">
              <div class="first-row">
                <a href="https://dinastii.mpcenter.ru/"><img src="<?php bloginfo(template_url);?>/img/pdr.svg" alt="" /></a>
                <a href="https://vk.com/gpn_2023"><img src="<?php bloginfo(template_url);?>/img/godpednast.svg" alt="" /></a>
                <a href="https://edu.gov.ru/"><img src="<?php bloginfo(template_url);?>/img/minpros.svg" alt="" /></a>
              </div>
              <div class="second-row">
                <a href="https://xn----7sbzomjcu.xn--p1ai/"><img src="<?php bloginfo(template_url);?>/img/amiro.svg" alt="" /></a>
                <a href="https://obr.amurobl.ru/"><img src="<?php bloginfo(template_url);?>/img/minobr.svg" alt="" /></a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php get_footer(); ?>
