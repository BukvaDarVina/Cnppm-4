<?php
/*
Template Name: О Центре
Template Post Type: page
*/
?>


<?php get_header(); ?>
    <div class="contant">
        <div class="container1">
            <div class="container2">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <?php $carousel_posts1 = get_posts([
                            'posts_per_page' => 3,
                            'category_name' => 'events',
                            'post_type' => 'post',
                            'suppress_filters' => true
                            ]);
                            if (sizeof($carousel_posts1) > 0){
                                $count1 = 0;
                                foreach ($carousel_posts1 as $post) :
                                    setup_postdata($post);?>
                                    <?php if ($count1 != 0){
                                        echo '<div class="carousel-item">';
                                        }
                                    else{
                                        echo '<div class="carousel-item active">';
                                        $count1++;
                                        } ?>
                                        
                                    <div class="logo__with__text__main__1">
                                        <div class="text__in__logo__main__1">
                                            <p href="<?php the_permalink();?>" id="text__in__rectangle__main__1">
                                                <?php the_title();?>
                                            </p>
                                        </div>
                                    </div>
                                    <a href="<?php the_permalink();?>" >
                                        <?php the_post_thumbnail('main_slider');?>
                                    </a>
                                </div>
                            <?php endforeach; 
                                wp_reset_postdata();
                                } ?>

                        
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span> 
                        <span class="visually-hidden">Предыдущий</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Следующий</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Первый блок -->
    <!-- Контент 2 -->
    <div class="contant2__main__1">
        <div class="container1">
            <img src="<?php bloginfo(template_url);?>/img/img__container2.png" alt="" /></img>
            <p id="text__in__container2__main__1">
                <?= CFS()->get('main_about_1_txt')?>
            </p>
        </div>
    </div>
    <!-- /Конетент 2 -->
    <!-- Контент 3 -->
    <div class="main__contant__back__main__1">
        <div class="contant3__main__1">
            <div class="conteiner">
                <div class="row">
                    <div class="col">
                        <div class="col-md-auto">
                            <p id="text__contant3__main__1">
                            <?= CFS()->get('main_about_2_txt')?>
                            </p>
                        </div>
                        <img src="<?php bloginfo(template_url);?>/img/img__container3.png" id="img__contant__1__main__1" alt="" /></img>
                    </div>
                    <div class="col-md-auto">
                        <img src="<?= CFS()->get('main_about_2_img_1')?>" alt="" /></img>
                        <img src="<?= CFS()->get('main_about_2_img_2')?>" alt="" /></img>
                        <img src="<?= CFS()->get('main_about_2_img_3')?>" alt="" /></img>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /Контент 3 -->
    <!-- /Контент 4 -->
    <div class="contant4__main__1">
        <div class="container1">
            <p id="text__in__container4_1__main__1">В круг основных задач Центра входят:</p>
            <p id="text__in__container4_2__main__1">
                Создание и развитие современной, насыщенной необходимыми кадровыми и техническими ресурсами базы, обеспечивающей непрерывный рост педагога.
            </p>
            <p id="text__in__container4_2__main__1">
                Внедрение инновационных форм и методов повышения профессионального мастерства педагогических работников в образовательный процесс.
            </p>
            <p id="text__in__container4_2__main__1">
                Организация стажировок, предполагающих приобретение педагогических, управленческих компетенций
            </p>
            <p id="text__in__container4_2__main__1">
                Поддержка «горизонтального обучения» в рамках функционирования системы «равный равному», которая активно задействует ресурс профессиональных сообществ педагогов и методических объединений учителей.
            </p>
            <p id="text__in__container4_2__main__1">
                Сопровождение внедряемой региональной целевой модели наставничества.
            </p>
            <p id="text__in__container4_2__main__1">
                Повышение престижа педагогической профессии, в том числе, через развитие конкурсов профессионально мастерства.
            </p>
            <img src="<?php bloginfo(template_url);?>/img/contant4.png" alt="" /></img>
        </div>
    </div>
    <!-- /Контент 4 -->
    <!-- Контент 5 -->
    <div class="main__contant__back">
        <div class="contant5__main__1">
            <div class="row">
                <div class="text__centr__cont5__main__1">
                    <p id="text__contant5__center__main__1">Образовательное пространство</p>
                </div>
                <div class="col">
                    <div class="sub__contant__5__left__main__1">
                        <p id="text__contant__left__main__1">
                            <?= CFS()->get('main_obr_space_txt')?>
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="sub__contant__5__right__main__1">
                        <!-- Карусель -->
                        <a href="<?php echo CFS()->get('main_obr_space_img_1')?>" data-lightbox="photo_2"><img src="<?php echo CFS()->get('main_obr_space_img_1')?>" alt="no_image"></a>
                        <div class="mini__images__bottom__main__1">
                            <a href="<?php echo CFS()->get('main_obr_space_img_1')?>" data-lightbox="photo_2"><img src="<?php echo CFS()->get('main_obr_space_img_1')?>" alt="no_image" id="mini__img__main__1"></a>
                            <a href="<?php echo CFS()->get('main_obr_space_img_2')?>" data-lightbox="photo_2"><img src="<?php echo CFS()->get('main_obr_space_img_2')?>" alt="no_image" id="mini__img__main__1"></a>
                            <a href="<?php echo CFS()->get('main_obr_space_img_3')?>" data-lightbox="photo_2"><img src="<?php echo CFS()->get('main_obr_space_img_3')?>" alt="no_image" id="mini__img__main__1"></a>
                            <a href="<?php echo CFS()->get('main_obr_space_img_4')?>" data-lightbox="photo_2"><img src="<?php echo CFS()->get('main_obr_space_img_4')?>" alt="no_image" id="mini__img__main__1"></a>
                            <a href="<?php echo CFS()->get('main_obr_space_img_5')?>" data-lightbox="photo_2"><img src="<?php echo CFS()->get('main_obr_space_img_5')?>" alt="no_image" id="mini__img__main__1"></a>
                            <a href="<?php echo CFS()->get('main_obr_space_img_6')?>" data-lightbox="photo_2"><img src="<?php echo CFS()->get('main_obr_space_img_6')?>" alt="no_image" id="mini__img__main__1"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /Контент 5 -->

        <!-- Контент 6 -->
        <div class="main__contant__back__blue__main__1">
            <div class="contant6__main__1">
                <div class="conteiner">
                    <div class="row">
                        <div class="col-6 col-md-4">
                            <!-- Картинка 1 -->
                            <div class="img__contant__6__main__1">
                                <img src="<?= CFS()->get('main_director_img')?>" alt="" id="img__content__6__left__main__1" /></img>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="class__text__cont__6__main__1">
                                <p id="text__contant__6__main__1">
                                <?= CFS()->get('main_director_txt')?>
                                </p>
                                <p id="fio__contant__6__main__1"><?= CFS()->get('main_director_fio')?></p>
                                <p id="doljnost__main__1">
                                    <?= CFS()->get('main_director_dojnost')?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Контент 6 -->
    </div>

<?php get_footer(); ?>