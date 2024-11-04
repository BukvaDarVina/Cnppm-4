<?php
/*
Template Name: Контакты - Интерактивная карта
Template Post Type: page
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'interactive_map_start' ); ?>

                <div class="block-2-staj">
                    <div class="menu-about-ploshadok">
                        <ul class="ul-ploshadok">
                            <li class="li-ploshadok ">
                                <a href="<?php echo get_permalink(2937, false)?>">
                                    Информация о проекте
                                </a>
                            </li>
                            <li class="li-ploshadok">
                                <a href="<?php echo get_permalink(2941, false)?>">
                                    График
                                    стажировок
                                </a>
                            </li>
                            <li class="li-ploshadok">
                                <a href="<?php echo get_permalink(2943, false)?>">
                                    Список площадок
                                </a>
                            </li>
                            <li class="li-ploshadok active-ploshadka">
                                <a href="<?php echo get_permalink(2945, false)?>">
                                    Контакты
                                </a>
                            </li>
                        </ul>
                    </div>

                    <?php

                        $loop1 = CFS()->get('inter_map_conts');
                            foreach ($loop1 as $row1) {
                            
                     ?>

                        <div class="block-contacts-1">
                            <a href="tel:<?= $row1['cont_tel']?>"><?= $row1['cont_tel']?></a> <br>
                            <a href="mailto:<?= $row1['cont_mail']?>"><?= $row1['cont_mail']?></a> <br>
                            <address>
                                <?= $row1['cont_text']?>
                            </address>
                        </div>
                    
                    <?php
                            }
                    ?>

                    <?php
                        the_content();
                    ?>

                </div>

<?php get_template_part( 'interactive_map_end' ); ?>
                