<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset')?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
    <title>Династия</title>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(89714435, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/89714435" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    

  </head>
  <body>
    <header class="header">
      <nav class="nav">
        <div class="container1">
          <ul class="ul-nav list-reset">
            <li class="nav-top">
              <a href="<?= get_home_url(); ?>" class=""><img src="<?php bloginfo(template_url);?>/img/cnppm.svg" alt="" /></a>
            </li>
            <li class="nav-top " id="hidden">
              <a href="<?= get_home_url(); ?>" class="z-ind">О центре</a>
              <ul class="navigate list-reset p-t hidden">
                <li class="nav-bottom">
                  <a href="<?= get_home_url(); ?>" class="z-ind"> Образовательное пространство </a>
                </li>
                <li class="nav-bottom">
                  <a href="<?php echo get_permalink(13, false)?>" class="z-ind"> Сотрудники </a>
                </li>
                <li class="nav-bottom">
                  <a href="<?php echo get_permalink(16, false)?>" class="z-ind"> Нормативные документы </a>
                </li>
              </ul>
            </li>
            <li class="nav-top" id="hidden">
              <a href="<?php echo get_permalink(18, false)?>" class="text-20px z-ind"
                >Региональная система <br />
                научно-методического <br />
                сопровождения ПР</a
              >
              <ul class="navigate hidden ">
                <li class="nav-bottom">
                  <a href="<?php echo get_permalink(20, false)?>" class="z-ind">
                    Выявление профессиональных дефицитов
                  </a>
                </li>
                <li class="nav-bottom">
                  <a href="<?php echo get_permalink(22, false)?>" class="z-ind">
                    Региональный методический актив
                  </a>
                </li>
                <li class="nav-bottom">
                  <a href="<?php echo get_permalink(24, false)?>" class="z-ind"> Стажировочные площадки </a>
                </li>
                <li class="nav-bottom">
                  <a href="<?php echo get_permalink(2937, false)?>" class="z-ind"> 
                    Цифровая платформа<br/> 
                    информационных ресурсов<br />
                    «Приамурье – мой край родной» 
                  </a>
                </li>
                <li class="nav-bottom">
                  <a href="<?php echo get_permalink(27, false)?>" class="z-ind">
                    Муниципальные методические службы
                  </a>
                </li>
                <li class="nav-bottom">
                  <a href="<?php echo get_permalink(29, false)?>" class="z-ind"> Наставничество </a>
                </li>
                <li class="nav-bottom">
                  <a href="<?php echo get_permalink(31, false)?>" class="z-ind">
                    Поддержка педагогов образовательных центров "Точка роста",
                    "IT-Куб", "ДТ Кванториум"
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-top " id="hidden">
              <a href="<?php echo get_permalink(33, false)?>" class="z-ind"> Мероприятия </a>
            </li>
            <li class="nav-top " id="hidden">
              <a href="<?php echo get_permalink(37, false)?>" class="z-ind"> Медиатека </a>
            </li>
            <li class="nav-top" id="hidden">
              <a href="<?php echo get_permalink(1495, false)?>" class="text-20px z-ind">
                Педагогические <br />
                династии
              </a>
            </li>
            <li class="nav-top">
              <a href="https://национальныепроекты.рф/?special=y" class="z-ind" id="nacpro"
                ><img src="<?php bloginfo(template_url);?>/img/nacpro.svg" alt=""
              /></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>