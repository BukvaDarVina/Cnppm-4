<?php
/*
Template Name: О проекте - Интерактивная карта
Template Post Type: page
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'interactive_map_start' ); ?>
                <div class="block-2-staj">
                    <div class="menu-about-ploshadok">
                        <ul class="ul-ploshadok">
                            <li class="li-ploshadok active-ploshadka">
                                <a href="#">
                                    Информация о проекте
                                </a>
                            </li>
                            <li class="li-ploshadok">
                                <a href="#">
                                    График
                                    стажировок
                                </a>
                            </li>
                            <li class="li-ploshadok">
                                <a href="./index3AboutCityes.html">
                                    Список площадок
                                </a>
                            </li>
                            <li class="li-ploshadok">
                                <a href="#">
                                    Контакты
                                </a>
                            </li>
                        </ul>
                    </div>
                    <h3 class="title-ploshadki">О проекте</h3>
                    <p class="text-inner-main">
                        <?= the_content();?>
                    </p>
                </div>

<?php get_template_part( 'interactive_map_end' ); ?>
                