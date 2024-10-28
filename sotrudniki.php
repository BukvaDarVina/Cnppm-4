<?php
/*
Template Name: Сотрудники
Template Post Type: post, page, product
*/
?>


<?php get_header(); ?>

<main class="main__contnent__sotrudniki__main">
        <!-- 1 Блок -->
        <div class="container1">
            <div class="main__img__with__logo__sotrudniki__main">
                <img src="<?php bloginfo(template_url);?>/img/Sotrudniki/main__1.png" alt="" id="main__img__1__sotrudniki__main">
            </div>
        </div>

        <h2 id="title__sotrudniki">Сотрудники</h2>

        <!-- Сотрудники -->
        
        <?php

            $loop = CFS()->get('sotrudniki');
                foreach ($loop as $row) {
                    
        ?>
            <div class="main__container__sotrudniki">
                <div class="container1">
                    <div class="row">
                        <!-- img -->
                        <div class="col-2">
                            <div class="img__sotrudniki__container">
                                <img src="<?= $row['sotrudnik_foto']?>" alt="" id="img__sotrudniki">
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="opisanie__sotrudniki">
                                <p id="text__opisanie__sotrudniki">
                                    <?= $row['sotrudnik_fio']?>
                                </p>
                            </div>
                            <div class="opisanie__sotrudniki__2">
                                <p id="text__opisanie__sotrudniki__2">
                                    <?= $row['sotrudnik_doljnost']?><br>
                                    <a href="mailto:<?= $row['sotrudnik_mail']?>"><?= $row['sotrudnik_mail']?></a><br>
                                    <a href="tel:<?= $row['sotrudnik_tel']?>"><?= $row['sotrudnik_tel']?></a><br>
                                </p>
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
