<?php
/*
Template Name: Список всех стаж. площадок
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main>
    <div class="main-wrapper-map">
        <div class="container-map-2">
            <div class="logo-do-school-2">
                <img src="<?php bloginfo(template_url);?>/img/logo-do-school.png" alt="">
            </div>
            <a href="<?php echo get_permalink(2937, false)?>" class="back-btn">На главную</a>
            <div class="block-ploshadki-2">

                    <?php
                            $cites_id = 7;

                            #получаем дочерние рубрики
                            $sub_cat_city = get_categories ( array(
                                'child_of' => $cites_id,
                                'hide_empty' => 0
                            ));

                            if(sub_cat_city){
                                foreach( sub_cat_city as $cat){
                                    // $count_post = [cpc id=$cat->cat_ID]
                                    ?>
                                    <div class="ploshadka-spisok">
                                        <div class="block-title-ploshadki">
                                            <h3 class="title-big fw-extra">
                                                <?php $cat->name; ?>
                                            </h3>
                                            <p class="number-ploshadki">
                                                (<?php (string) $count_post?> п.)
                                            </p>
                                        </div>

                                        <a href="#" class="back-btn">
                                            Список площадок
                                        </a>
                                        <ul class="ul-spisok-ploshadok">
                                            <?php
                                                $cat_city_posts = get_posts( array(
                                                    'numberposts'   => -1,
                                                    'category'      => $cat->cat_ID,
                                                    'orderby'       => 'post_date',
                                                    'order'         => 'DESC',
                                                ));

                                                global $post;
                                                foreach($cat_city_posts as $post){
                                                    setup_postdata($post);?>
                                                    <li><a href="<?= get_permalink()?>"><?= get_the_title()?></a></li>
                                                <?php    
                                                }?>
                                        </ul>
                                 
                                <?php        
                                }

                                wp_reset_postdata();
                            }?>

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
                                    <div class="ploshadka-spisok">
                                        <div class="block-title-ploshadki">
                                            <h3 class="title-big fw-extra">
                                                <?php $cat->name; ?>
                                            </h3>
                                            <p class="number-ploshadki">
                                                <!-- (<?php// (string)([cpc id= ($cat->cat_ID)])?> п.) -->
                                            </p>
                                        </div>

                                        <a href="#" class="back-btn">
                                            Список площадок
                                        </a>
                                        <ul class="ul-spisok-ploshadok">
                                            <?php
                                                $cat_okr_posts = get_posts( array(
                                                    'numberposts'   => -1,
                                                    'category'      => $cat->cat_ID,
                                                    'orderby'       => 'post_date',
                                                    'order'         => 'DESC',
                                                ));

                                                global $post;
                                                foreach($cat_okr_posts as $post){
                                                    setup_postdata($post);?>
                                                    <li><a href="<?= get_permalink()?>"><?= get_the_title()?></a></li>
                                                <?php    
                                                }?>
                                        </ul>
                                 
                                <?php        
                                }

                                wp_reset_postdata();
                            }?>

                </div>
            </div>
        </div>
    </main>