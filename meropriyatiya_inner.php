<?php
/*
Template Name: Мероприятие
Template Post Type: post
*/
?>


<?php get_header(); ?>
<?php the_post(); ?>

<main class="main__mar__inner">
        <section class="section__mer__1">
            <!-- Наполнение 1-->
            <div class="container1">
                <div class="arrow__and__text__mar__inner">
                    <div class="row">
                        <div class="col">

                        </div>

                    </div>
                </div>

            </div>

        </section>

        <div class="container1">
            <!-- Кнопка назад -->
            <div class="arrow__button__back__mar__inner">
                <div class="row">
                    <div class="col">
                        <div class="arrow__and__text__mar__inner">
                            <a href="<?php echo get_permalink(33, false)?>"><img src="<?php bloginfo(template_url);?>/img/meropriyatia__inner/arrow__back.svg" alt="" id="arrow__img__back__mar__inner"> Мероприятия
                            </a>
                        </div>
                    </div>
                    <div class="col">
                    </div>
                </div>
            </div>
        </div>
        <!-- /Кнопка назад -->

        <!-- Наполнение 2-->
        <div class="container1">
            <!-- 1 -->
            <div class="wrapper__section__3__mar__inner">
                <div class="container1">
                    <div class="row">
                        <div class="col">
                            <div class="container__block__event__left__img__mar__inner">
                                <a href="<?php the_post_thumbnail_url( 'meropriyatiya_iner_main' );?>" data-lightbox="photo_3"><img src="" alt="" id="mini__img__s3__mar__inner"><?php the_post_thumbnail('meropriyatiya_iner_main');?></a>
                                
                            </div>
                        </div>
                        <!-- Надпись справа -->
                        <div class="col">
                            <div class="container__block__event__rigth__text__mar__inner">
                                <p id="text__event__right__mar__inner"><?php the_title();?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Текст -->
            <div class="container1">
                <div class="main__text__meropr__mar__inner">
                  <br>
                    <p>
                        <?php the_content();?>
                    </p>
                </div>

            </div>

        </div>
        <!-- /Наполнение 2-->

        





    </main>

<?php get_footer(); ?>