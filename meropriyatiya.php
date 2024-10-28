<?php
/*
Template Name: Мероприятия
Template Post Type: page
*/
?>


<?php get_header(); ?>
<main>
        <!-- Первый блок -->
        <section class="section__1__mer__main" id="back__bg__mer__main">
            <div class="slider__block__mer__main">
                
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                    <? $carousel_posts = get_posts([
                        'posts_per_page' => 3,
                        'category_name' => 'events',
                        'post_type' => 'post'
                    ]);
                        if (sizeof($carousel_posts) > 0){
                            $count = 0;
                            foreach ($carousel_posts as $post) :
                                setup_postdata($post);?>
                                <?php if ($count != 0){
                                    echo '<div class="carousel-item">';
                                }else{
                                    echo '<div class="carousel-item active">';
                                    $count++;
                                } ?>
                                    
                                        <div class="logo__with__text__main__1">
                                            <div class="text__in__logo__main__1">
                    
                                                <p href="<?php the_permalink();?>" id="text__in__rectangle__main__1">
                                                    <?php the_title();?>
                                                </p>
                                            </div>
                                        </div>
                                        <a href="<?php the_permalink();?>"><img/><?php the_post_thumbnail('main_slider');?> 
                                    </div>

                                <?php endforeach; 
                            } ?>
                        
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span> 
                      <span class="visually-hidden">Предыдущий</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Следующий</span>
                    </button>
                </div>

            </div>
            <!-- /Первый блок -->
        </section>
        
        <section class="section__2__mer__main">

        <?php
        // указываем категорию 9 и выключаем разбиение на страницы (пагинацию)
        $query = new WP_Query([
            'posts_per_page' => -1,
            'category_name' => 'events',
            'post_type' => 'post'
        ]);
        if( $query->have_posts() ){
            while( $query->have_posts() ){
                $query->the_post();
                ?>

                    <!-- 1 -->
                    <article class="wrapper__section__2__mer__main">
                        <div class="container1">
                            <div class="row">
                                <div class="col-4">
                                    <!-- Артиклы Пост -->
                                    <article class="img__post">
                                        <section class="container__block__event__left__mer__main">
                                        <a href="<?php the_permalink(); ?>" >
                                            <img src="" alt="" id="mini__img__s2__mer__main"><?php the_post_thumbnail('meropriyatiya');?>
                                        </a>
                                        </section>
                                    </article>
                                    <!-- /Артиклы  -->
                                </div>
                                <div class="col-8">
                                    <!-- Артиклы  текст-->
                                    <article class="text__posts">
                                        <section>
                                            <div class="container__block__event__rigth__mer__main">
                                                <a href="<?php the_permalink(); ?>" id="section__2__text__mer__main">
                                                    <?php the_title();?>
                                                </a>
                                            </div>
                                        </section>
                                    </article>
                                    <!-- /Артиклы  -->
                                </div>
                            </div>
                        </div>
                    </article>
                    <?php
                }
	        wp_reset_postdata(); // сбрасываем переменную $post
        }
        else
            echo 'Записей нет.';
        ?>


        </section>
        
    </main>



<?php get_footer(); ?>
