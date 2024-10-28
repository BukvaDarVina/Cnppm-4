<?php
/*
Template Name: Региональный методический актив
Template Post Type: page
*/
?>


<?php get_header(); ?>

<main class="main__contnent">
        <!-- 1 Блок -->
        <div class="container1">
            <div class="main__img__with__logo__rp2">
                <img src="<?php echo CFS()->get('rma_main_foto')?>" alt="" id="main__img__1__rp2">
                <div class="text__in__logo__rp2">
                    <a href="#" id="ssylka__rp2"><img src="<?php bloginfo(template_url);?>/img/white__rectangle.png" alt="" id="rectangle__top__1__rp2">
                        <p id="text__in__slider__1__rp2">Региональный<br> методический актив

                        </p>
                    </a>
                </div>
            </div>
        </div>

        <!-- 2. Блок -->
        <div class="bg__blue__red__rp2">
            <div class="container1">
                <div class="row">
                    <div class="centrovka__block__rp2">
                        <div class="col">
                            <div class="block__info__1__rp2">
                                <div class="img__info__rp2">
                                    <img src="<?php bloginfo(template_url);?>/img/regional/page__2/white__rectangle.png" alt="">
                                    <img src="<?php echo CFS()->get('rma_main_state_img')?>" alt="" id="text__in__block__img__rp2">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <p id="text__in__block__2__rp2"><?php echo CFS()->get('rma_main_state_title')?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Содержание статьи -->
        <div class="container1">
            <div class="napolnenie__rp3">
                <p id="text__napolneniya__rp3"><?php echo CFS()->get('rma_main_state_text')?></p>
            </div>
        </div>
        <br>


        <?php

            $loop = CFS()->get('rma_card');
                foreach ($loop as $row) {
                    
        ?>
            <div class="main__container__sotrudniki">
                <div class="container1">
                    <div class="row">
                        <!-- img -->
                        <div class="col-2">
                            <div class="img__sotrudniki__container">
                                <img src="<?= $row['rma_card_foto']?>" alt="" id="img__sotrudniki">
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="opisanie__sotrudniki">
                                <p id="text__opisanie__sotrudniki">
                                    <?= $row['rma_card_fio']?>
                                </p>
                            </div>
                            <div class="opisanie__sotrudniki__2">
                                <p id="text__opisanie__sotrudniki__2">
                                    <a><?= $row['rma_card_doljnost']?></a><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>

                    <?php

                    $loop1 = CFS()->get('rma_docs_loop');
                        foreach ($loop1 as $row1) {
                            
                    ?>

                        <div class="bg__blue__red__rp1">
                            <div class="container1">
                                <div class="row">
                                    <div class="centrovka__block__rp1">
                                        <div class="col">
                                            <div class="block__info__1__rp1">
                                                <div class="img__info__rp1__norm__docs">
                                                    <a href="<?= $row1['rma_docs_dnwld']?>" download="">
                                                        <img src="<?php echo CFS()->get('rma_docs_img')?>" alt="" id="normativnye__docs__img">
                                                    </a>
                                                    <a href="<?= $row1['rma_docs_dnwld']?>" id="text__in__block__2__norm__docs__a" download="">
                                                        <p  id="text__in__block__2__norm__docs"><?= $row1['rma_docs_name']?>
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