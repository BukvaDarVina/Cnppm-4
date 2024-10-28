<?php
/*
Template Name: Нормативные документы
Template Post Type: post, page, product
*/
?>


<?php get_header(); ?>

<main class="main__contnent__sotrudniki__main">
        <!-- 1 Блок -->
        <div class="container1">
            <div class="main__img__with__logo__sotrudniki__main">
                <img src="<?= CFS()->get('norm_docs_main_img')?>" alt="" id="main__img__1__sotrudniki__main">
            </div>
        </div>

        <h2 id="title__sotrudniki">Нормативные документы</h2>

        <!-- Основное -->
        
        <?php

            $loop1 = CFS()->get('docs');
                foreach ($loop1 as $row1) {
                            
        ?>

                    <div class="bg__blue__red__rp1">
                        <div class="container1">
                            <div class="row">
                                <div class="centrovka__block__rp1">
                                   <div class="col">
                                        <div class="block__info__1__rp1">
                                            <div class="img__info__rp1__norm__docs">
                                                <a href="<?= $row1['norm_docs_dnwld']?>" download="">
                                                    <img src="<?php echo CFS()->get('norm_docs_img')?>" alt="" id="normativnye__docs__img">
                                                </a>
                                                <a href="<?= $row1['norm_docs_dnwld']?>" id="text__in__block__2__norm__docs__a" download="">
                                                    <p  id="text__in__block__2__norm__docs"><?= $row1['norm_docs_name']?>
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
