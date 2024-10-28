<?php
/*
Template Name: Медиатека
Template Post Type: page
*/
?>


<?php get_header(); ?>

<main class="main__contnent">

        <?php

        $loop = CFS()->get('media');
            foreach ($loop as $row) {
                
        ?>

        <!-- Основа -->
        <div class="bg__5050__med__main">
            <!-- 1.1 Блок -->
            <div class="bg__blue__red__1__med__main">
                <div class="container1">
                    <div class="row">
                        <div class="centrovka__block__med__main">
                            <div class="col">
                                <div class="block__info__1__med__main">
                                    <div class="img__info__med__main">
                                        <!-- Изображение -->
                                        <a href="#" id="main__img__a"><img alt="" id="main__img__med__main" src="<?= $row['media_img_video']?>"></a>

                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="block__info__1__med__main">
                                    <div class="img__info__med__main">
                                        <!-- Изображение -->
                                        <a href="#" id="main__img__a"><img alt="" id="main__img__med__main" src="<?= $row['media_img_foto']?>"></a>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Второй блок -->
            <div class="bg__blue__red__med__main">
                <div class="container1">
                    <div class="row">
                        <div class="centrovka__block__2__med__main">
                            <div class="col">
                                <div class="block__info__1__med__main">
                                    <div class="img__info__med__main">
                                        <img src="<?php bloginfo(template_url);?>/img/regional/page__1/red__rectangle.png" alt="" id="red__rect__med__main">
                                        <a id="a__text__med__main" href="<?= $row['media_link_video']?>">
                                            <p id="text__in__block__2__med__main"><?= $row['media_name']?>
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="block__info__1__med__main">
                                    <div class="img__info__med__main">
                                        <img src="<?php bloginfo(template_url);?>/img/regional/page__1/red__rectangle.png" alt="" id="red__rect__med__main">
                                        <a  id="a__text__med__main" href="<?= $row['media_link_foto']?>">
                                            <p id="text__in__block__2__med__main"><?= $row['media_name_r']?>
                                            </p>
                                        </a>
                                    </div>
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