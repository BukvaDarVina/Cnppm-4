<?php
/*
Template Name: Список - Интерактивная карта
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
                            <li class="li-ploshadok  active-ploshadka">
                                <a href="<?php echo get_permalink(2943, false)?>">
                                    Список площадок
                                </a>
                            </li>
                            <li class="li-ploshadok">
                                <a href="<?php echo get_permalink(2945, false)?>">
                                    Контакты
                                </a>
                            </li>
                        </ul>
                    </div>
                    <h3 class="title-ploshadki">Города Амурской области</h3>
                    <div class="ploshadka-wrapper">
                        <?php
                            $cites_id = 7;

                            #получаем дочерние рубрики
                            $sub_cat_city = get_categories ( array(
                                'child_of' => $cites_id,
                                'hide_empty' => 0
                            ));

                            if(sub_cat_city){
                                foreach( sub_cat_city as $cat){
                                    ?>
                                    <div class="ploshadka">
                                        <h2 class="title-ploshadki-inner"><?php $cat->name; ?></h2>

                                        <ul class="names-ploshadki">
                                            <?php
                                                $cat_city_posts = get_posts( array(
                                                    'numberposts'   => 3,
                                                    'category'      => $cat->cat_ID,
                                                    'orderby'       => 'post_date',
                                                    'order'         => 'DESC',
                                                ));

                                                global $post;
                                                foreach($cat_city_posts as $post){
                                                    setup_postdata($post);?>
                                                    <li class="title-ploshadki-inner-inner"><a href="<?= get_permalink()?>"><?= get_the_title()?> </a></li>
                                                <?php    
                                                }?>
                                        </ul>

                                        <a href="<?php echo get_permalink(2948, false)?>">
                                            <button class="btn-ploshadka">
                                                Все площадки
                                            </button>
                                        </a>
                                 
                                <?php        
                                }

                                wp_reset_postdata();
                            }?>

                    </div>
                    <h3 class="title-ploshadki">Районы (округа) Амурской области</h3>
                    <div class="ploshadka-wrapper">
                        
                    <?php
                            $okr_id = 8;

                            #получаем дочерние рубрики
                            $sub_cat_okr = get_categories ( array(
                                'child_of' => $okr_id,
                                'hide_empty' => 0
                            ));

                            if(sub_cat_okr){
                                foreach( sub_cat_okr as $cat){
                                    ?>
                                    <div class="ploshadka">
                                        <h2 class="title-ploshadki-inner"><?php $cat->name; ?></h2>

                                        <ul class="names-ploshadki">
                                            <?php
                                                $cat_okr_posts = get_posts( array(
                                                    'numberposts'   => 3,
                                                    'category'      => $cat->cat_ID,
                                                    'orderby'       => 'post_date',
                                                    'order'         => 'DESC',
                                                ));

                                                global $post;
                                                foreach($cat_okr_posts as $post){
                                                    setup_postdata($post);?>
                                                    <li class="title-ploshadki-inner-inner"><a href="<?= get_permalink()?>"><?= get_the_title()?> </a></li>
                                                <?php    
                                                }?>
                                        </ul>

                                        <a href="<?php echo get_permalink(2948, false)?>">
                                            <button class="btn-ploshadka">
                                                Все площадки
                                            </button>
                                        </a>
                                 
                                <?php        
                                }

                                wp_reset_postdata();
                            }?>

                    </div>
                </div>

<?php get_template_part( 'interactive_map_end' ); ?>
                