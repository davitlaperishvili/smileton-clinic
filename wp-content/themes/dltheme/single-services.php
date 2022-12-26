<?php 
    //Template Name: Front Page Test
?>
<?php get_header(); ?>
<?php 
	$phoneVisible = get_field('phone_number', 'option');
	$phone = preg_replace("/[^0-9]/", "", $phoneVisible);
	$email = get_field('email', 'option');
	$whatsapp = get_field('whatsapp', 'option');
	$adress = get_field('adress', 'option');
	$site_logo = get_field('site_logo', 'option');
	$footer = get_field('footer', 'option');
	$site_menu = get_field('site_menu', 'option');
?>
<div id="panel"></div>
<div class="burger">
    <figure></figure>
</div>
<section class="page">
    <aside class="page__aside">
        <div class="page__aside__scroller">
            <div class="aside">
            <a href="#s-intro" class="scrollto"><img src="<?php echo $site_logo['url'] ?>" alt="<?php echo $site_logo['alt'] ?>" class="aside__logo"></a>
            <nav class="aside__nav">
                <?php 
                    foreach( $site_menu as $item ){
                        ?>
                            <a href="<?php echo $item['url'] ?>" class="aside__nav__link scrollto">
                                <i class="<?php echo $item['icon_class'] ?>"></i>
                                <span><?php echo $item['title'] ?></span>
                            </a>
                        <?php
                    }
                ?>
            </nav>
            <div class="aside__phone">
                <i class="i-phone"></i>
                <div class="aside__phone__main">
                    <a href="tel:<?php echo $phone ?>" class="aside__phone__number"><?php echo $phoneVisible ?></a>
                    <?php 
                        if($whatsapp){
                            ?>
                                <a href="<?php echo $whatsapp ?>" class="aside__phone__wa blue-link" target="_blank">Спросить по WhatsApp</a>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class="aside__address">
                <a href="https://yandex.by/map-widget/v1/-/CCQl6GVwxD" class="aside__address__map fancy-map">
                <img src="<?php echo get_template_directory_uri(); ?>/images/aside-map.jpg" alt="миникарта" class="">
                </a>
                <div class="aside__address__main">
                    <?php 
                        if($adress['city']){
                            ?> 
                                <div class="aside__address__city"><?php echo $adress['city'] ?></div>
                            <?php
                        }
                    ?>
                    <?php 
                        if($adress['street']){
                            ?> 
                                <div class="aside__address__str"><?php echo $adress['street'] ?></div>
                            <?php
                        }
                    ?>
                    <?php 
                        if($adress['metro']){
                            ?> 
                                <div class="aside__address__metro"><mark>M</mark> <?php echo $adress['metro'] ?></div>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <!-- <a href="yandexnavi://build_route_on_map?lat_to=55.660892&amp;lon_to=37.747065" class="aside__navigator">
            <img src="<?php echo get_template_directory_uri(); ?>/images/navigator.png" alt="Навигатор" width="30">
            <span>Путь в Яндекс.Навигаторе</span> -->
            </a>
            </div>
        </div>
    </aside>
    <main class="page__main">
        <section class="custom_breadcrumbs">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="<?php echo home_url(); ?>">Главная</a>
                        </li>
                        <li>
                            <span>Услуги</span>
                        </li>
                        <li>
                            <div><?php echo the_title() ?></div>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
        <section class="service_hero">
            <div class="container">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service_hero.jpg" alt="">
                </figure>
                <div class="hero_content">
                    <h1 class="service_title">Имплантация зубов под ключ</h1>
                    <div class="service_hero_nav">
                        <ul>
                            <li>
                                <a href="">О процедуре</a>
                            </li>
                            <li>
                                <a href="">Цены</a>
                            </li>
                            <li>
                                <a href="">Врачи</a>
                            </li>
                            <li>
                                <a href="">Акции</a>
                            </li>
                            <li>
                                <a href="">Наши работы</a>
                            </li>
                        </ul>
                    </div>
                    <div class="service_desc">Акция на имплантацию зубов <br> Имплант Osstem + формирователь десны + работа</div>
                    <div class="service_hero_buttons">
                        <div class="theme_button">
                            <a href="">Записаться</a>
                        </div>
                        <div class="sale">
                            <span class="text">Успейте по старой цене</span>
                            <span class="price">50 000 ₽</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about_service">
            <div class="container">
                <div class="sec-title ">
                    <h2 class="h2">Что такое имплантация зубов под ключ?</h2>
                </div>
                <div class="about_wrap">
                    <div class="about_text">
                        <p>Это комплекс подготовительных, хирургических и ортопедических мероприятий по восстановлению одного, нескольких или всех утраченных зубов методом установки имплантантов с последующим протезированием за фиксированную цену.</p>
                        <p>Таким образом, до начала лечения вы узнаете точную цену всех манипуляций, необходимых для восстановления целостности зубного ряда.</p>
                    </div>
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/about_service.jpg" alt="">
                    </figure>
                </div>
            </div>
        </section>
        <section class="service_long_desc">
            <div class="container">
                <h2>Что влияет на стоимость зубного импланта под ключ?</h2>
                <div class="section_text">
                    <h3>1. Бренд имплантата</h3>
                    <p>В нашей стоматологии применяются имплантаты эконом (OSSTEM, DENTIUM) и премиум класса (ASTRA TECH, NOBEL). Каждый из брендов отличается высоким показателем приживаемости и подходит под большинство клинических случаев. <br> Выбор оптимальной системы имплантации обсуждается с пациентом во время планирования лечения с учетом:</p>
                    <ul>
                        <li>особенностей клинической картины (например, структуры и плотности костной ткани);</li>
                        <li>планируемого протокола имплантации (одноэтапная, одномоментная, All-on-4 или All-on-6);</li>
                        <li>бюджета.</li>
                    </ul>
                    <h3>2. Материал коронки</h3>
                    <p>Металлокерамическая коронка стоит в 2 раза дешевле, чем циркониевая.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pretium sit amet quam sed imperdiet. Donec      sit amet consectetur leo, non mollis ipsum. Vivamus facilisis tellus vitae magna pharetra ullamcorper non et leo. Quisque in volutpat justo. Nam maximus neque vitae risus fermentum, quis ultrices tellus porttitor. Sed porttitor nibh vel nibh dignissim, ac pretium dolor feugiat. Quisque in tortor sed risus faucibus condimentum. Nam quis mauris et odio eleifend convallis id pellentesque ex. Donec rhoncus enim in arcu rhoncus accumsan. Fusce mattis, dui sit amet lacinia lacinia, est turpis auctor purus, tristique ullamcorper mauris dui convallis lectus. Cras cursus eros non accumsan euismod.</p>
                    <h3>3. Количество восстанавливаемых единиц</h3>
                    <p>Конечно же, полная имплантация всех зубов под ключ обойдется дороже, чем восстановление одной единицы.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pretium sit amet quam sed imperdiet. Donec sit amet consectetur leo, non mollis ipsum. Vivamus facilisis tellus vitae magna pharetra ullamcorper non et leo. Quisque in volutpat justo. Nam maximus neque vitae risus fermentum, quis ultrices tellus porttitor. Sed porttitor nibh vel nibh dignissim, ac pretium dolor feugiat. Quisque in tortor sed risus faucibus condimentum. Nam quis mauris et odio eleifend convallis id pellentesque ex. Donec rhoncus enim in arcu rhoncus accumsan. Fusce mattis, dui sit amet lacinia lacinia, est turpis auctor purus, tristique ullamcorper mauris dui convallis lectus. Cras cursus eros non accumsan euismod.</p>
                    <h2>Что включает в себя имплантация под ключ?</h2>
                    <ol>
                        <li>
                            <b>Консультация, первичный осмотр</b>
                            <p>ороже, чем восстановление одной единицы.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pretium sit amet quam sed imperdiet. Donec sit amet consectetur leo, non mollis ipsum. Vivamus facilisis tellus vitae magna pharetra ullamcorper non et leo.</p>
                        </li>
                        <li>
                            <b>Диагностика</b>
                            <p>ороже, чем восстановление одной единицы.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pretium sit amet quam sed imperdiet. Donec sit amet consectetur leo, non mollis ipsum. Vivamus facilisis tellus vitae magna pharetra ullamcorper non et leo.</p>
                        </li>
                        <li>
                            <b>План лечения</b>
                            <p>ороже, чем восстановление одной единицы.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pretium sit amet quam sed imperdiet. Donec sit amet consectetur leo, non mollis ipsum. Vivamus facilisis tellus vitae magna pharetra ullamcorper non et leo.</p>
                        </li>
                        <li>
                            <b>Санация полости рта</b>
                            <p>ороже, чем восстановление одной единицы.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pretium sit amet quam sed imperdiet. Donec sit amet consectetur leo, non mollis ipsum. Vivamus facilisis tellus vitae magna pharetra ullamcorper non et leo.</p>
                        </li>
                        <li>
                            <b>Хирургия</b>
                            <p>ороже, чем восстановление одной единицы.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pretium sit amet quam sed imperdiet. Donec sit amet consectetur leo, non mollis ipsum. Vivamus facilisis tellus vitae magna pharetra ullamcorper non et leo.</p>
                        </li>  
                        <li>
                            <b>Ортопедия</b>
                            <p>ороже, чем восстановление одной единицы.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pretium sit amet quam sed imperdiet. Donec sit amet consectetur leo, non mollis ipsum. Vivamus facilisis tellus vitae magna pharetra ullamcorper non et leo.</p>
                        </li>   
                    </ol>
                </div>
            </div>
        </section>
        <section class="price_table">
            <div class="container">
                <div class="sec-title ">
                    <h2 class="h2">Цены на имплантацию под ключ</h2>
                </div>
                <div class="custom_table">
                    <div class="table_wrap">
                        <div class="table_header">
                            <div class="left">Перечень услуг по имплантации зубов под ключ</div>
                            <div class="right">Цена</div>
                        </div>
                        <div class="table_values">
                            <div class="table_value">
                                <div class="value_header">Имплантация под ключ</div>
                                <div class="value_content">
                                    <div class="title">
                                        <span>Имплант OSSTEM + операция + формирователь + коронка.</span>
                                    </div>
                                    <div class="price_value">50 000 ₽</div>
                                </div>
                            </div>
                            <div class="table_value">
                                <div class="value_header">Имплантация под ключ</div>
                                <div class="value_content">
                                    <div class="title">
                                        <span>Имплант OSSTEM + операция + формирователь + коронка.</span>
                                    </div>
                                    <div class="price_value">50 000 ₽</div>
                                </div>
                            </div>
                            <div class="table_value">
                                <div class="value_header">Имплантация под ключ</div>
                                <div class="value_content">
                                    <div class="title">
                                        <span>Имплант OSSTEM + операция + формирователь + коронка.</span>
                                    </div>
                                    <div class="price_value">100 700 ₽</div>
                                </div>
                            </div>
                            <div class="table_value">
                                <div class="value_header">Имплантация под ключ</div>
                                <div class="value_content">
                                    <div class="title">
                                        <span>Имплант OSSTEM + операция + формирователь + коронка.</span>
                                    </div>
                                    <div class="price_value">50 000 ₽</div>
                                </div>
                            </div>
                            <div class="table_value">
                                <div class="value_header">Имплантация под ключ</div>
                                <div class="value_content">
                                    <div class="title">
                                        <span>Имплант OSSTEM + операция + формирователь + коронка.</span>
                                    </div>
                                    <div class="price_value">1 100 700 ₽</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php $cases = get_field('cases',734) ?>
        <?php 
            if($cases) {
                ?>
                    <section class="s-cases is__nav-section" id="s-cases">
                        <div class="container">
                            <div class="sec-title sec-title--arrows">
                                <div class="h2">
                                    <?php echo $cases['block_title'] ?>			
                                </div>
                            </div>
                            <div class="cases-thumbs slider-top-arrows ">
                                <?php 
                                    foreach ( $cases['cases_list'] as $key => $case){
                                        ?>
                                            <div class="cases-thumbs__slide">
                                                <div class="case-thumb <?php echo  $key == 0 ? 'active' : '' ?>">
                                                    <img data-toggle-class="visible" data-src="<?php echo $case['case_tab']['image']['url'] ?>" alt="<?php echo $case['case_tab']['image']['alt'] ?>" class="lozad visible" src="<?php echo $case['case_tab']['image']['url'] ?>" data-loaded="true">
                                                    <span><?php echo $case['case_tab']['name'] ?></span>
                                                </div>
                                            </div>
                                        <?php
                                    }
                                ?>
                            </div>
                            <div class="cases">
                                <?php 
                                    foreach( $cases['cases_list'] as $key => $case ){
                                        ?>
                                            <div class="case row <?php echo $key == 0 ?  'active' : '' ?>">
                                                <div class="grid-6 grid-12_m">
                                                    <div class="twentytwenty-wrapper twentytwenty-horizontal">
                                                        <div class="case__ba twentytwenty-container" style="height: 500px;">
                                                            <img src="<?php echo $case['case_content']['image_before']['url'] ?>" data-src="<?php echo $case['case_content']['image_before']['url'] ?>" alt="до" class="lozad twentytwenty-before" style="clip: rect(0px, 367.5px, 500px, 0px);" data-loaded="true">
                                                            <img src="<?php echo $case['case_content']['image_after']['url'] ?>" data-src="<?php echo $case['case_content']['image_after']['url'] ?>" alt="псоле" class="lozad twentytwenty-after" style="clip: rect(0px, 735px, 500px, 367.5px);" data-loaded="true">
                                                            <div class="twentytwenty-handle" style="left: 367.5px;"><span class="twentytwenty-left-arrow"></span><span class="twentytwenty-right-arrow"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="grid-6 grid-12_m">
                                                    <div class="case__info">
                                                    <div class="case__title"><?php echo $case['case_content']['content_title'] ?></div>
                                                    <div class="user-content case__descr">
                                                        <?php echo $case['case_content']['content_text'] ?>				
                                                    </div>
                                                    <div class="case__bottom">
                                                        <div class="case__process">
                                                            <div class="h4">Процесс работы</div>
                                                            <div class="case__process__wall">
                                                                <?php 
                                                                    foreach($case['case_content']['work_proccess'] as $item) {
                                                                        ?>
                                                                        <a href="<?php echo $item['step_image']['url'] ?>" class="fancy" data-fancybox="124">
                                                                            <img src="<?php echo $item['step_image']['url'] ?>" data-src="<?php echo $item['step_image']['url'] ?>" alt="<?php echo $item['step_image']['alt'] ?>" class="lozad" data-loaded="true">
                                                                        </a>
                                                                        <?php
                                                                    }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </section>
                <?php
            }
        ?>
        <?php 
            $team = get_field('team',734);
        ?>
        <?php 
            if($team){
                ?>
                    <section class="s-team lozad is__nav-section" id="s-team" style="background-image: url(<?php echo $team['block_bg']['url'] ?>);">
                        <div class="container">
                            <div class="sec-title sec-title--arrows">
                                <div class="h2">
                                    <?php echo $team['block_title'] ?>
                                </div>
                            </div>
                            <div class="team-thumbs slider-top-arrows" >
                                <?php 
                                    foreach($team['team_tabs'] as $key => $item) {
                                        ?>
                                            <div class="team-thumbs__slide">
                                                <div class="team-thumb <?php echo  $key == 0 ? 'active' : '' ?>">
                                                    <img data-toggle-class="visible" data-src="<?php echo $item['team_tab']['image']['url'] ?>" alt="<?php echo $item['team_tab']['name'] ?>" class="lozad visible" src="<?php echo $item['team_tab']['image']['url'] ?>" data-loaded="true">
                                                    <span><?php echo $item['team_tab']['name'] ?></span>
                                                </div>
                                            </div>
                                        <?php
                                    }
                                ?>
                            </div>
                            <div class="heroes">
                                <?php 
                                    foreach($team['team_tabs'] as $key => $item) {
                                        ?>
                                            <div class="hero <?php echo  $key == 0 ? 'active' : '' ?>">
                                                <div class="hero__content">
                                                    <div class="hero__name"><?php echo $item['tab_content']['full_name'] ?></div>
                                                    <div class="hero__spec"><?php echo $item['tab_content']['spec'] ?></div>
                                                    <div class="hero__descr"><?php echo $item['tab_content']['desc'] ?></div>
                                                    <?php 
                                                        if($item['tab_content']['sign_img']){
                                                            ?>
                                                                <img src="<?php echo $item['tab_content']['sign_img']['url'] ?>" alt="sign" class="hero__sign">
                                                            <?php
                                                        }
                                                    ?>
                                                </div>
                                                <?php 
                                                    if($item['tab_content']['team_member_image']){
                                                        ?>
                                                            <div class="hero__photo">
                                                                <img src="<?php echo $item['tab_content']['team_member_image']['url'] ?>" data-src="<?php echo $item['tab_content']['team_member_image']['url'] ?>" alt="<?php echo $item['tab_content']['full_name'] ?>" class="lozad visible" data-toggle-class="visible" data-loaded="true">
                                                            </div>
                                                        <?php
                                                    }
                                                ?>
                                            </div>
                                        <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </section>
                <?php
            }
        ?>
        
        <?php $promo = get_field('promo',734) ?>
        <?php 
            if($promo) {
                ?>
                    <section class="s-promo is__nav-section" id="s-promo">
                        <div class="container">
                        <div class="sec-title sec-title--center">
                            <div class="h2">
                                <?php echo $promo['block_title'] ?>			
                            </div>
                        </div>
                        <div class="border-block promo-block">
                            <div class="border-block__content">
                                <div class="promo-slider slider-arrows-gold">
                                    <?php 
                                        foreach($promo['promo_list'] as $key => $promoItem) {
                                            ?>
                                                <div class="promo-slider__slide ">
                                                    <div class="promo">
                                                        <div class="promo__img">
                                                            <img src="<?php echo $promoItem['promo_image']['url'] ?>" data-src="<?php echo $promoItem['promo_image']['url'] ?>" data-toggle-class="visible" alt="<?php echo $promoItem['promo_image']['alt'] ?>" class="lozad visible" data-loaded="true">
                                                        </div>
                                                        <div class="promo__content">
                                                            <div class="promo__title"><?php echo $promoItem['promo_title'] ?></div>
                                                            <div class="promo__list-title">В цену входят:</div>
                                                            <ul class="list-checked promo__list">
                                                                <?php 
                                                                    foreach( $promoItem['promo_text'] as $item){
                                                                        ?>
                                                                            <li><?php echo $item['mark'] ?></li>
                                                                        <?php
                                                                    }
                                                                ?>
                                                            </ul>
                                                            <a href="#" class="btn fancy-modal" data-src="#modal-promo-<?php echo $key ?>">Участвовать в акции</a>
                                                        </div>
                                                    </div>
                                                    <div id="modal-promo-<?php echo $key ?>" class="modal modal-order border-block">
                                                        <div class="border-block__content">
                                                            <div class="ajax-form vertical-form">
                                                                <div role="form" class="wpcf7" id="wpcf7-f786-o3" lang="ru-RU" dir="ltr">
                                                                    <div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
                                                                    <form action="/#wpcf7-f786-o3" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                                                                        <div style="display: none;">
                                                                            <input type="hidden" name="_wpcf7" value="786">
                                                                            <input type="hidden" name="_wpcf7_version" value="5.6.3">
                                                                            <input type="hidden" name="_wpcf7_locale" value="ru_RU">
                                                                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f786-o3">
                                                                            <input type="hidden" name="_wpcf7_container_post" value="0">
                                                                            <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                                                                        </div>
                                                                        <input type="hidden" name="your-subject" value="Участие в акции" class="wpcf7-form-control wpcf7-hidden">
                                                                        <input type="hidden" name="your-service" value="<?php echo $promoItem['promo_title'] ?>" class="wpcf7-form-control wpcf7-hidden">
                                                                        <div class="form-header">
                                                                            <div class="form-header__bubble">Хотите записаться на прием? Оставьте заявку, и наш администратор свяжется с вами в течение 2 минут</div>
                                                                            <p>    <img data-src="http://test.tryhardagency.ru/wp-content/themes/dltheme/images/bubble-man.jpg" alt="man" class="form-header__man lozad" src="http://test.tryhardagency.ru/wp-content/themes/dltheme/images/bubble-man.jpg" data-loaded="true">
                                                                            </p>
                                                                        </div>
                                                                        <p>
                                                                            <span class="wpcf7-form-control-wrap" data-name="your-name">
                                                                                <input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text input-text" aria-invalid="false" placeholder="Ваше имя">
                                                                            </span>
                                                                            <br>
                                                                            <span class="wpcf7-form-control-wrap" data-name="your-tel">
                                                                                <input type="tel" name="your-tel" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel input-text" aria-required="true" aria-invalid="false" placeholder="Телефон*" maxlength="18">
                                                                            </span>
                                                                            <br>
                                                                            <button type="submit" class="btn">Отправить</button>
                                                                        </p>
                                                                        <div class="form-policy">Нажимая кнопку, вы соглашаетесь с <a href="#" target="_blank">политикой конфиденциальности</a>.</div>
                                                                        <div class="wpcf7-response-output" aria-hidden="true">
                        
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                        </div>
                    </section>
                <?php
            }
        ?>
        <?php $serts = get_field('serts',734) ?>
        <?php 
            if($serts) {
                ?>
                    <section class="s-serts is__nav-section" id="s-serts">
                        <div class="container">
                            <div class="sec-title sec-title--center">
                                <div class="h2">
                                    <?php echo $serts['block_title'] ?>		
                                </div>
                                <div class="h4">
                                    <?php echo $serts['block_subtitle'] ?> 			
                                </div>
                            </div>
                            <div class="serts-slider">
                                <?php 
                                    foreach( $serts['serts_list'] as $sert){
                                        ?>
                                            <div class="serts-slider__item">
                                                <?php 
                                                    if($sert['sert_bg']){
                                                        ?>
                                                            <img src="<?php echo $sert['sert_bg']['url'] ?>" alt="<?php echo $sert['sert_bg']['alt'] ?>" class="serts-slider__item__bg">
                                                        <?php
                                                    }
                                                ?>
                                                <?php
                                                    if($sert['sert_image']){
                                                        ?>
                                                            <a href="<?php echo $sert['sert_image']['url'] ?>" data-fancybox="serts">
                                                                <img data-src="<?php echo $sert['sert_image']['url'] ?>" alt="<?php echo $sert['sert_image']['alt'] ?>" class="serts-slider__item__sert lozad" src="<?php echo $sert['sert_image']['url'] ?>" data-loaded="true">
                                                            </a>
                                                        <?php
                                                    }
                                                ?>
                                            </div>
                                        <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </section>
                <?php
            }
        ?>
        
        <?php $services = get_field('services',734) ?>
        <?php 
            if($services){
                ?>
                    <section class="s-services is__nav-section" id="s-services">
                        <div class="container">
                            <?php 
                                if($services['services_cat']){
                                    ?>
                                        <?php 
                                            foreach($services['services_cat'] as  $key => $services_cat){
                                                ?>
                                                    <div class="services-cat">
                                                        <div class="sec-title sec-title--center">
                                                            <div class="h2"><?php echo $services_cat['cat_title'] ?></div>
                                                        </div>
                                                        <div class="services-grid">
                                                            <?php 
                                                                if($services_cat['cat_services']){
                                                                    foreach($services_cat['cat_services'] as $serviceKey => $service) {
                                                                        ?>
                                                                            <a href="#" class="service-panel fancy-modal" data-src="#modal-service-<?php echo $key; echo $serviceKey ?>">
                                                                                <span class="service-panel__header">
                                                                                    <img src="<?php echo $service['service_small_image']['url'] ?>" data-src="<?php echo $service['service_small_image']['url'] ?>" alt="<?php echo $service['service_small_image']['alt'] ?>" class="service-panel__img lozad" data-loaded="true">
                                                                                </span>
                                                                                <span class="service-panel__content">
                                                                                <span class="h4 service-panel__title"><?php echo $service['service_title'] ?></span>
                                                                                <span class="service-panel__descr"><?php echo $service['short_desc'] ?></span>
                                                                                    <span class="service-panel__link blue-link">Подробнее</span>
                                                                                </span>
                                                                            </a>
                                                                            <div class="modal modal-service border-block" id="modal-service-<?php echo $key; echo $serviceKey ?>">
                                                                                <div class="border-block__content">
                                                                                <div class="modal-service__title"><?php echo $service['service_title'] ?></div>
                                                                                <div class="modal-service__row">
                                                                                    <div class="modal-service__content">
                                                                                        <img data-src="<?php echo $service['service_image']['url'] ?>" alt="<?php echo $service['service_image']['alt'] ?>" class="lozad modal-service__img">
                                                                                        <div class="user-content">
                                                                                            <?php echo $service['full_desc'] ?> 								
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-service__order">
                                                                                        <div class="ajax-form vertical-form">
                                                                                            <div role="form" class="wpcf7" id="wpcf7-f786-o3" lang="ru-RU" dir="ltr">
                                                                                                <div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
                                                                                                <form action="/#wpcf7-f786-o3" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                                                                                                    <div style="display: none;">
                                                                                                        <input type="hidden" name="_wpcf7" value="786">
                                                                                                        <input type="hidden" name="_wpcf7_version" value="5.6.3">
                                                                                                        <input type="hidden" name="_wpcf7_locale" value="ru_RU">
                                                                                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f786-o3">
                                                                                                        <input type="hidden" name="_wpcf7_container_post" value="0">
                                                                                                        <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                                                                                                    </div>
                                                                                                    <input type="hidden" name="your-subject" value="Новая заявка" class="wpcf7-form-control wpcf7-hidden">
                                                                                                    <input type="hidden" name="your-service" value="<?php echo $service['service_title'] ?>" class="wpcf7-form-control wpcf7-hidden">
                                                                                                    <div class="form-header">
                                                                                                        <div class="form-header__bubble">Хотите записаться на прием? Оставьте заявку, и наш администратор свяжется с вами в течение 2 минут</div>
                                                                                                        <p>    <img data-src="http://test.tryhardagency.ru/wp-content/themes/dltheme/images/bubble-man.jpg" alt="man" class="form-header__man lozad" src="http://test.tryhardagency.ru/wp-content/themes/dltheme/images/bubble-man.jpg" data-loaded="true">
                                                                                                        </p>
                                                                                                    </div>
                                                                                                    <p>
                                                                                                        <span class="wpcf7-form-control-wrap" data-name="your-name">
                                                                                                            <input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text input-text" aria-invalid="false" placeholder="Ваше имя">
                                                                                                        </span>
                                                                                                        <br>
                                                                                                        <span class="wpcf7-form-control-wrap" data-name="your-tel">
                                                                                                            <input type="tel" name="your-tel" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel input-text" aria-required="true" aria-invalid="false" placeholder="Телефон*" maxlength="18">
                                                                                                        </span>
                                                                                                        <br>
                                                                                                        <button type="submit" class="btn">Отправить</button>
                                                                                                    </p>
                                                                                                    <div class="form-policy">Нажимая кнопку, вы соглашаетесь с <a href="#" target="_blank">политикой конфиденциальности</a>.</div>
                                                                                                    <div class="wpcf7-response-output" aria-hidden="true">

                                                                                                    </div>
                                                                                                </form>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                </div>
                                                                            </div>
                                                                        <?php
                                                                    }
                                                                }
                                                            ?>
                                                            
                                                        </div>
                                                    </div>
                                                <?php
                                            }
                                        ?>
                                    <?php
                                }
                            ?>
                        </div>
                    </section>
                <?php
            }
        ?>
        <?php $faq = get_field('faq',734) ?>
        <?php 
            if($faq) {
                ?>
                    <section class="s-faq is__nav-section" id="s-faq">
                        <div class="container">
                        <div class="sec-title sec-title--center">
                            <div class="h2">
                                <?php echo $faq['block_title'] ?>			
                            </div>
                        </div>
                        <div class="faq">
                            <div class="faq__left">
                                <div class="faq__questions">
                                    <?php 
                                        foreach ($faq['faq_list'] as $key => $value) {
                                            ?>
                                                <div class="faq__q <?php echo  $key == 0 ? 'active' : '' ?>">
                                                    <span><?php echo $value['question'] ?></span>
                                                </div>
                                            <?php
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="faq__right">
                                <div class="faq__answers">
                                    <?php 
                                        foreach ($faq['faq_list'] as $key => $value) {
                                            ?>
                                                <div class="faq__a <?php echo  $key == 0 ? 'active' : '' ?>">
                                                    <div class="faq__a__title"><?php echo $value['question'] ?></div>
                                                    <div class="user-content faq__a__text"><?php echo $value['answer'] ?>
                                                    </div>
                                                </div>
                                            <?php
                                        }
                                    ?>
                                </div>
                                <div class="faq__order">
                                    <div class="ajax-form faq__order__form">
                                        <div class="faq__order__title">Нужна детальная консультация?</div>
                                        <div class="faq__order__subtitle">Оставьте заявку и мы свяжемся с вами в ближайшее время</div>
                                        <?php echo do_shortcode('[contact-form-7 id="943" title="Форма вопроса"]') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </section>
                <?php
            }
        ?>

        <footer class="s-footer">
            <div class="container">
            <div class="footer">
                <div class="footer__copy"><?php echo $footer['copyright'] ?></div>
                <div class="footer__policy">
                    <?php echo $footer['text'] ?>
                </div>
                <div class="footer__social">
                    <span>Мы в социальных сетях</span>
                    <div class="footer__social__list">
                        <?php 
                            foreach( $footer['socials_list'] as $social){
                                ?>
                                    <a href="<?php echo $social['url'] ?>"><i class="<?php echo $social['icon_class'] ?>"></i></a>
                                <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
            </div>
        </footer>
    </main>
</section>
<!-- Модальные окна -->
<div class="modals-sec">
    <div id="modal-order" class="modal modal-order border-block">
        <div class="border-block__content">
            <form class="ajax-form vertical-form form-steps" autocomplete="off">
                <input type="hidden" value="Новая заявка" name="form_subject">
                <div class="form-step-1">
                    <div class="form-header">
                        <div class="form-header__bubble">Напишите, что вас беспокоит, и я вам обязательно помогу</div>
                        <img data-src="<?php echo get_template_directory_uri(); ?>/images/bubble-man.jpg" alt="man" class="form-header__man lozad">
                    </div>
                    <textarea name="user_comment" placeholder="Опишите зубную боль" data-label="Комментарий" class="input-text" rows="5"></textarea>
                    <button class="btn js-form-step-next">Следующий шаг</button>
                </div>
                <div class="form-step-2">
                    <div class="form-header">
                        <div class="form-header__bubble">Наш администратор перезвонит вам в течение 2 минут.</div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/bubble-man.jpg" alt="man" class="form-header__man">
                    </div>
                    <input type="text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя" class="input-text">
                    <input type="tel" name="user_tel" placeholder="Телефон*" data-label="Телефон" class="input-text" data-req="true" maxlength="18">
                    <button type="submit" class="btn">Отправить</button>
                    <div class="form-policy">Нажимая кнопку, вы соглашаетесь с <a href="#" target="_blank">политикой конфиденциальности</a>.</div>
                </div>
            </form>
        </div>
    </div>
    <div id="modal-callback" class="modal modal-order border-block">
        <div class="border-block__content">
            <form class="ajax-form vertical-form" autocomplete="off">
                <input type="hidden" value="Заказ обратного звонка" name="form_subject">
                <div class="form-header">
                    <div class="form-header__bubble">Наш администратор перезвонит вам в течение 2 минут.</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/bubble-man.jpg" alt="man" class="form-header__man">
                </div>
                <input type="text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя" class="input-text">
                <input type="tel" name="user_tel" placeholder="Телефон*" data-label="Телефон" class="input-text" data-req="true" maxlength="18">
                <button type="submit" class="btn">Отправить</button>
                <div class="form-policy">Нажимая кнопку, вы соглашаетесь с <a href="#" target="_blank">политикой конфиденциальности</a>.</div>
            </form>
        </div>
    </div>
    <div id="modal-thanks" class="modal modal-thanks border-block">
        <div class="border-block__content">
            <div class="form-header">
            <div class="form-header__bubble">Спасибо за заявку!</div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/bubble-man.jpg" alt="man" class="form-header__man">
            </div>
        </div>
    </div>
    <div id="modal-error" class="modal">
        <p>Что-то пошло не так.</p>
        <p>Попробуйте еще раз.</p>
        <p>Если постоянно видите эту ошибку, пожалуйста, обратитесь к администратору сайта. Мы будем очень благодарны.</p>
    </div>
</div>

<?php get_footer(); ?>

