<?php
/*
Template Name: Поддержка педагогов образовательных центров «Точка роста», «IT-куб», ДТ«Кванториум
Template Post Type: post, page, product
*/
?>


<?php get_header(); ?>

<main class="main__contnent__rp6">
        <!-- 1 Блок -->
        <div class="container1">
            <div class="main__img__with__logo__rp6">
                <img src="<?php echo CFS()->get('pod_main_img')?>" alt="" id="main__img__1__rp6">
                <div class="text__in__logo__rp6">
                    <a href="#" id="ssylka__rp6"><img src="<?php bloginfo(template_url);?>/img/white__rectangle.png" alt="" id="rectangle__top__1__rp6">
                        <p id="text__in__slider__1__rp6">Поддержка педагогов образовательных центров<br> «Точка роста», «IT-куб», ДТ«Кванториум
                        </p>
                    </a>
                </div>
            </div>
        </div>

        <?php

        $loop = CFS()->get('pod_state');
            foreach ($loop as $row) {
                
        ?>

        <!-- 2. Блок -->
        <div class="bg__blue__red__rp6">
            <div class="container1">
                <div class="row">
                    <div class="centrovka__block__rp6">
                        <div class="col">
                            <div class="block__info__1__rp6">
                                <div class="img__info__rp6">
                                    <img src="<?php bloginfo(template_url);?>/img/regional/page__2/white__rectangle.png" alt="">
                                    <img src="<?= $row['pod_state_img']?>" alt="" id="text__in__block__img__rp6">
                                </div>
                            </div>
                        </div>
                        <div class="col">

                            <p id="text__in__block__2__rp6"><?= $row['pod_state_title']?></p>
                        </div>
                        <!-- <div class="col">

                        </div> -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Содержание статьи -->
        <div class="container1">
            <div class="napolnenie__rp6">
                <p id="text__napolneniya__rp6"><?= $row['pod_state_text']?></p>
            </div>
        </div>

        <?php
                    }
        ?>


        <?php

        $loop1 = CFS()->get('pod_docs');
            foreach ($loop1 as $row1) {
                
        ?>

            <div class="bg__blue__red__rp1">
                <div class="container1">
                    <div class="row">
                        <div class="centrovka__block__rp1">
                            <div class="col">
                                <div class="block__info__1__rp1">
                                    <div class="img__info__rp1__norm__docs">
                                        <a href="<?= $row1['pod_docs_file']?>" download="">
                                            <img src="<?php echo CFS()->get('pod_docs_img')?>" alt="" id="normativnye__docs__img">
                                        </a>
                                        <a href="<?= $row1['pod_docs_file']?>" id="text__in__block__2__norm__docs__a" download="">
                                            <p  id="text__in__block__2__norm__docs"><?= $row1['pod_docs_name']?>
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php
        }
        ?>
        
    </main>

<?php get_footer(); ?>