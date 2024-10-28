<?php
/*
Template Name: Стажировочные площадки
Template Post Type: post, page, product
*/
?>


<?php get_header(); ?>

<main class="main__contnent">
        <!-- 1 Блок -->
        <div class="container1">
            <div class="main__img__with__logo__rp3">
                <img src="<?php echo CFS()->get('sp_main_img')?>" alt="" id="main__img__1__rp3">
                <div class="text__in__logo__rp3">
                    <a href="meropriyatiya__inner.html" id="ssylka__rp3"><img src="<?php bloginfo(template_url);?>/img/white__rectangle.png" alt="" id="rectangle__top__1__rp3">
                        <p id="text__in__slider__1__rp3">Стажировочные<br> площадки


                        </p>
                    </a>
                </div>
            </div>
        </div>
        <?php

        $loop = CFS()->get('sp_place');
            foreach ($loop as $row) {
                
        ?>
        <!-- 2. Блок -->
        <div class="bg__blue__red__rp3">
            <div class="container1">
                <div class="row">
                    <div class="centrovka__block__rp3">
                        <div class="col">
                            <div class="block__info__1__rp3">
                                <div class="img__info__rp3">
                                    <img src="<?php bloginfo(template_url);?>/img/regional/page__2/white__rectangle.png" alt="">
                                    <img src="<?= $row['sp_place_foto']?>" alt="" id="text__in__block__img__rp3">
                                </div>
                            </div>
                        </div>
                        <div class="col">

                            <p id="text__in__block__2__rp3"><?= $row['sp_place_title']?></p>
                        </div>
                        <!-- <div class="col">

                        </div> -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Содержание статьи -->
        <div class="container1">
            <div class="napolnenie__rp3">
                <p id="text__napolneniya__rp3"><?= $row['sp_place_txt']?></p>
            </div>
        </div>
        <?php
                    }
        ?>

        <?php

        $loop1 = CFS()->get('sp_docs');
            foreach ($loop1 as $row1) {
                
        ?>

            <div class="bg__blue__red__rp1">
                <div class="container1">
                    <div class="row">
                        <div class="centrovka__block__rp1">
                            <div class="col">
                                <div class="block__info__1__rp1">
                                    <div class="img__info__rp1__norm__docs">
                                        <a href="<?= $row1['sp_docs_file']?>" download="">
                                            <img src="<?php echo CFS()->get('sp_docs_img')?>" alt="" id="normativnye__docs__img">
                                        </a>
                                        <a href="<?= $row1['sp_docs_file']?>" id="text__in__block__2__norm__docs__a" download="">
                                            <p  id="text__in__block__2__norm__docs"><?= $row1['sp_docs_name']?>
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
        <!-- 2я статья и тд -->



    </main>

<?php get_footer(); ?>