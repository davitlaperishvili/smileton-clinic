<?php 
    //Template Name: Front Page
?>
<?php get_header(); ?>
<?php 
	$phoneVisible = get_field('phone_number', 'option');
	$phone = preg_replace("/[^0-9]/", "", $phoneVisible);
	$email = get_field('email', 'option');
	$whatsapp = get_field('whatsapp', 'option');
	$adress = get_field('adress', 'option');
	$site_logo = get_field('site_logo', 'option');
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
                <a href="#s-serts" class="aside__nav__link scrollto">
                    <i class="i-nav-about"></i>
                    <span>О Клинке</span>
                </a>
                <a href="#s-cases" class="aside__nav__link scrollto">
                    <i class="i-nav-cases"></i>
                    <span>Наши работы</span>
                </a>
                <a href="#s-services" class="aside__nav__link scrollto">
                    <i class="i-nav-services"></i>
                    <span>Услуги</span>
                </a>
                <a href="#s-promo" class="aside__nav__link scrollto">
                    <i class="i-nav-promo"></i>
                    <span>Акции</span>
                </a>
                <a href="#s-reviews" class="aside__nav__link scrollto">
                    <i class="i-nav-reviews"></i>
                    <span>Отзывы</span>
                </a>
                <a href="#s-team" class="aside__nav__link scrollto">
                    <i class="i-nav-team"></i>
                    <span>Команда</span>
                </a>
                <!-- <a href="/price/" class="aside__nav__page ">
                    <i class="i-price"></i>
                    <span>Прайс-лист</span>
                </a> -->
                <a href="#s-contacts" class="aside__nav__link scrollto">
                    <i class="i-nav-contacts"></i>
                    <span>Контакты</span>
                </a>
                <a href="#s-faq" class="aside__nav__link scrollto">
                    <i class="i-nav-faq"></i>
                    <span>Вопрос–Ответ</span>
                </a>
                <a href="#s-delegate" class="aside__nav__link scrollto">
                    <i class="i-nav-stom"></i>
                    <span>Стоматологам</span>
                </a>
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
        <?php $hero = get_field('hero') ?>
        <section class="s-intro" id="s-intro" style="background: url(<?php echo $hero['block_image']['url'] ?>) center center no-repeat var(--sectionBG);">
            <div class="container">
            <img src="<?php echo $site_logo['url'] ?>" alt="<?php echo $site_logo['alt'] ?>" class="logo-mob">
            <h1 class="h1">
                <?php echo $hero['block_title'] ?>	
            </h1>
            <div class="intro-mob">
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
                <button class="btn fancy-modal" data-src="#modal-order">Оставить заявку</button>
            </div>
            <div class="border-block">
                <div class="border-block__content">
                    <div class="ajax-form vertical-form form-steps">
                        <?php echo do_shortcode('[contact-form-7 id="741" title="2 Steps Contact Form"]') ?>
                    </div>
                </div>
            </div>
            </div>
            <?php 
                if($hero['video_url']){
                    ?>
                        <a href="<?php echo $hero['video_url'] ?>" class="intro-video fancy-video">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/play-text.png" alt="text" class="intro-video__text">
                        <span class="play-btn"><i class="i-play"></i></span>
                        </a>
                    <?php
                }
            ?>
        </section>
        <?php $why_us = get_field('why_us') ?>
        <?php 
            if($why_us){
                ?>
                <section class="s-why">
                    <div class="container">
                    <div class="row">
                        <div class="grid-4 grid-12_s">
                            <div class="why-left">
                                <?php 
                                    if($why_us['block_image']){
                                        ?>
                                            <img src="<?php echo $why_us['block_image']['url'] ?>" data-src="<?php echo $why_us['block_image']['url'] ?>" alt="man" class="why-left__man lozad" data-loaded="true">
                                        <?php
                                    }
                                ?>
                                <?php 
                                    if($why_us['quote']){
                                        ?>
                                            <q class="why-left__q"><?php echo $why_us['quote'] ?></q>
                                        <?php
                                    }
                                ?>
                                <?php 
                                    if($why_us['quote_author']){
                                        ?>
                                            <div class="why-left__hwo"><?php echo $why_us['quote_author'] ?></div>
                                        <?php
                                    }
                                ?>
                                <?php 
                                    if($why_us['sign']['url']){
                                        ?>
                                            <img src="<?php echo $why_us['sign']['url'] ?>" alt="sign" class="why-left__sign">
                                        <?php
                                    }
                                ?>
                            </div>
                        </div>
                        <?php 
                            if($why_us['reasons']){
                                ?>
                                    <div class="grid-8 grid-12_s why-right">
                                        <div class="sec-title sec-title--arrows">
                                            <div class="h2">
                                            <?php echo $why_us['block_title'] ?>					
                                            </div>
                                        </div>
                                        <div class="why-slider slider-top-arrows">
                                            <?php 
                                                foreach($why_us['reasons'] as $item) {
                                                    ?>
                                                        <div class="why-slider__slide">
                                                            <div class="why-panel">
                                                                <div class="h5 why-panel__title"><?php echo $item['item_title'] ?></div>
                                                                <img src="<?php echo $item['item_image']['url'] ?>" alt="img" class="why-panel__img flickity-lazyloaded">
                                                            </div>
                                                        </div>
                                                    <?php
                                                }
                                            ?>
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
        <?php $services = get_field('services') ?>
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
        <?php $expert = get_field('expert') ?>
        <?php 
            if($expert){
                ?>
                <section class="s-expert lozad" data-background-image="<?php echo $expert['block_image']['url'] ?>" data-loaded="true" style="background-image: url(<?php echo $expert['block_image']['url'] ?>);">
                    <div class="container">
                    <div class="expert">
                        
                        <?php echo $expert['block_text'] ?>
                        <?php 
                            if($expert['video_url']){
                                ?>
                                    <div class="expert__bottom">
                                        <a href="<?php echo $expert['video_url'] ?>" class="video-block fancy-video">
                                            <div class="video-block__img">
                                            <img data-src="<?php echo $expert['video_image']['url'] ?>" alt="<?php echo $expert['video_image']['alt'] ?>" class="lozad" src="<?php echo $expert['video_image']['url'] ?>" data-loaded="true">
                                            </div>
                                            <i class="i-play video-block__icon video-block__icon--big video-block__icon--white"></i>
                                        </a>
                                        <div class="expert__hwo">
                                            <div class="expert__hwo__name"><?php echo $expert['expert_name'] ?></div>
                                            <div class="expert__hwo__descr"><?php echo $expert['expert_status'] ?></div>
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
        <?php $cases = get_field('cases') ?>
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
        <?php $promo = get_field('promo') ?>
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
        <?php 
            $reviews = get_field('reviews');
            $showNumber = 8;
        ?>
        <?php 
            if($reviews) {
                ?>
                    <section class="s-reviews is__nav-section" id="s-reviews">
                        <div class="container">
                            <div class="sec-title sec-title--center">
                                <div class="h2">
                                    <?php echo $reviews['block_title'] ?>		
                                </div>
                            </div>
                            <div class="row">
                                <?php 
                                    foreach($reviews['reviews_list'] as $key => $review) {
                                        if( $key + 1 <= $showNumber){
                                            if($review['review_type'] == "image"){
                                                ?>
                                                    <div class="grid-3 grid-6_m">
                                                        <a href="<?php echo $review['image']['url'] ?>" class="review review__insta fancy">
                                                            <div class="review__header"><?php echo $review['author_name'] ?></div>
                                                            <div class="review__photo">
                                                            <img src="<?php echo $review['image']['url'] ?>" data-src="<?php echo $review['image']['url'] ?>" alt="<?php echo $review['author_name'] ?>" class="lozad" data-loaded="true">
                                                            </div>
                                                            <span class="review__link blue-link">Подробнее</span>
                                                        </a>
                                                    </div>
                                                <?php
                                            }else if ($review['review_type'] == "video"){
                                                ?> 
                                                    <div class="grid-3 grid-6_m">
                                                        <a href="<?php echo $review['video']['video_url'] ?>" class="review review__insta fancy-video">
                                                            <div class="review__header"><?php echo $review['author_name'] ?> </div>
                                                            <div class="video-block">
                                                            <div class="video-block__img">
                                                                <img src="<?php echo $review['video']['video_image']['url'] ?>" data-src="<?php echo $review['video']['video_image']['url'] ?>" alt="<?php echo $review['author_name'] ?> " class="lozad" data-loaded="true">
                                                            </div>
                                                            <i class="i-play video-block__icon video-block__icon--bottom"></i>
                                                            </div>
                                                            <span class="review__video-title"></span>
                                                            <span class="review__link blue-link">Подробнее</span>
                                                        </a>
                                                    </div>
                                                <?php
                                            } else {
                                                ?>
                                                    <div class="grid-3 grid-6_m">
                                                        <a href="#" class="review review__insta fancy-modal" data-src="#modal-review-<?php echo $key ?>">
                                                        <div class="review__header"><?php echo $review['author_name'] ?></div>
                                                        <div class="review__text">
                                                            <?php echo $review['text'] ?>								
                                                        </div>
                                                        <span class="review__link blue-link">Подробнее</span>
                                                        </a>
                                                        <div class="modal modal--review" id="modal-review-<?php echo $key ?>">
                                                        <div class="review__header"><?php echo $review['author_name'] ?></div>
                                                            <div class="review__text">
                                                                <?php echo $review['text'] ?>								
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php
                                            }
                                        }
                                    }
                                ?> 
                            </div>
                            <?php 
                                if(count($reviews['reviews_list']) > 8 ) {
                                    ?>
                                        <div class="reviews-hidden">
                                            <div class="row">
                                                <?php 
                                                    foreach($reviews['reviews_list'] as $key => $review) {
                                                        if( $key + 1 > $showNumber){
                                                            if($review['review_type'] == "image"){
                                                                ?>
                                                                    <div class="grid-3 grid-6_m">
                                                                        <a href="<?php echo $review['image']['url'] ?>" class="review review__insta fancy">
                                                                            <div class="review__header"><?php echo $review['author_name'] ?></div>
                                                                            <div class="review__photo">
                                                                            <img src="<?php echo $review['image']['url'] ?>" data-src="<?php echo $review['image']['url'] ?>" alt="<?php echo $review['author_name'] ?>" class="lozad" data-loaded="true">
                                                                            </div>
                                                                            <span class="review__link blue-link">Подробнее</span>
                                                                        </a>
                                                                    </div>
                                                                <?php
                                                            }else if ($review['review_type'] == "video"){
                                                                ?> 
                                                                    <div class="grid-3 grid-6_m">
                                                                        <a href="<?php echo $review['video']['video_url'] ?>" class="review review__insta fancy-video">
                                                                            <div class="review__header"><?php echo $review['author_name'] ?> </div>
                                                                            <div class="video-block">
                                                                            <div class="video-block__img">
                                                                                <img src="<?php echo $review['video']['video_image']['url'] ?>" data-src="<?php echo $review['video']['video_image']['url'] ?>" alt="<?php echo $review['author_name'] ?> " class="lozad" data-loaded="true">
                                                                            </div>
                                                                            <i class="i-play video-block__icon video-block__icon--bottom"></i>
                                                                            </div>
                                                                            <span class="review__video-title"></span>
                                                                            <span class="review__link blue-link">Подробнее</span>
                                                                        </a>
                                                                    </div>
                                                                <?php
                                                            } else {
                                                                ?>
                                                                    <div class="grid-3 grid-6_m">
                                                                        <a href="#" class="review review__insta fancy-modal" data-src="#modal-review-<?php echo $key ?>">
                                                                        <div class="review__header"><?php echo $review['author_name'] ?></div>
                                                                        <div class="review__text">
                                                                            <?php echo $review['text'] ?>								
                                                                        </div>
                                                                        <span class="review__link blue-link">Подробнее</span>
                                                                        </a>
                                                                        <div class="modal modal--review" id="modal-review-<?php echo $key ?>">
                                                                        <div class="review__header"><?php echo $review['author_name'] ?></div>
                                                                            <div class="review__text">
                                                                                <?php echo $review['text'] ?>								
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php
                                                            }
                                                        }
                                                    }
                                                ?> 
                                            </div>
                                        </div>
                                    <?php
                                }
                            ?>
                            <?php 
                                if(count($reviews['reviews_list']) > 8 ) { 
                                    ?>
                                        <div class="reviews-more"><span>Смотреть еще отзывы</span> <i class="i-down"></i></div>
                                    <?php
                                }
                            ?>
                        </div>
                    </section>
                <?php
            }
        ?>
        <?php 
            $team = get_field('team');
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
        <?php $serts = get_field('serts') ?>
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

        <section class="s-about">
            <div class="container">
            <div class="row">
                <div class="grid-6 grid-12_m">
                    <div class="about-cite">
                        <div class="about-cite__text">
                        Мы оказываем качественные услуги в области ортодонтии, имплантологии, хирургии, терапии, а также эстетической стоматологии.					
                        </div>
                        <div class="about-cite__hwo">
                        <p>Магомед Алиевич Хасенов<br>главный врач, основатель клиники</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/sign.png" alt="sign" class="about-cite__sign">
                        </div>
                    </div>
                </div>
                <div class="grid-6 grid-12_m">
                    <div class="user-content about-right-text">
                        <p>
                        Наши врачи практикуют как традиционные технологии, так и самые современные методики. В нашей клинике ООО «Дентал Имплант» вы всегда можете рассчитывать на теплый прием и качественное лечение даже в самых сложных случаях. Мы часто принимаем пациентов, от которых отказались другие стоматологи, и сохраняем им зубы!
                        </p>
                        <p>
                        К нам можно приходить не только за экстренной помощью, но и на профилактические процедуры. Кроме чистки и отбеливания, мы проводим уроки гигиены каждому пациенту и рассказываем, как ему самостоятельно ухаживать за полостью рта, учитывая ее индивидуальные особенности. Все кабинеты «Центра» оснащены новейшим оборудованием, позволяющими безболезненно проводить даже сложные операции. Приходите к нам всей семьей — мы способны помочь вам в любой ситуации.
                        </p>
                    </div>
                </div>
            </div>
            <div class="about-triggers row">
                <div class="grid-6 grid-12_m">
                    <div class="about-trigger about-trigger--big">
                        <div class="about-trigger__content">
                        <div class="h4">Бесшумное лечение</div>
                        <div>Во время процедур мы предлагаем наушники для комфортного просмотра фильмов или сериалов. Вы можете выбрать любой в сервисе ivi.</div>
                        </div>
                        <img data-src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" alt="1" class="about-trigger__img lozad" src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" data-loaded="true">
                    </div>
                </div>
                <div class="grid-6 grid-12_m">
                    <div class="about-trigger about-trigger--big">
                        <div class="about-trigger__content">
                        <div class="h4">Гигиенические наборы</div>
                        <div>В нашей клинике всегда есть одноразовые щетки для чистки зубов и ополаскиватель, на тот случай, если после рабочего дня вы не успеваете подготовиться к визиту стоматолога.</div>
                        </div>
                        <img data-src="<?php echo get_template_directory_uri(); ?>/images/2.jpg" alt="1" class="about-trigger__img lozad" src="<?php echo get_template_directory_uri(); ?>/images/2.jpg" data-loaded="true">
                    </div>
                </div>
                <div class="grid-4 grid-12_m">
                    <div class="about-trigger">
                        <div class="about-trigger__content">
                        <div class="h4">Бесплатное такси</div>
                        <div>Если вы не можете к нам приехать, мы бесплатно привезем вас в клинику и увезем домой или на работу.</div>
                        </div>
                        <img data-src="<?php echo get_template_directory_uri(); ?>/images/3.jpg" alt="1" class="about-trigger__img lozad" src="<?php echo get_template_directory_uri(); ?>/images/3.jpg" data-loaded="true">
                    </div>
                </div>
                <div class="grid-4 grid-12_m">
                    <div class="about-trigger">
                        <div class="about-trigger__content">
                        <div class="h4">Бесплатный WI-FI</div>
                        <div>Во время ожидания приема вы можете бесплатно подключиться к нашему интернету, чтобы пообщаться с близкими или решить рабочие вопросы.</div>
                        </div>
                        <img data-src="<?php echo get_template_directory_uri(); ?>/images/4.jpg" alt="1" class="about-trigger__img lozad" src="<?php echo get_template_directory_uri(); ?>/images/4.jpg" data-loaded="true">
                    </div>
                </div>
                <div class="grid-4 grid-12_m">
                    <div class="about-trigger">
                        <div class="about-trigger__content">
                        <div class="h4">Кофе, чай и вода</div>
                        <div>Администратор клиники всегда предложит гостям чашку ароматного кофе или стакан воды.</div>
                        </div>
                        <img data-src="<?php echo get_template_directory_uri(); ?>/images/5.jpg" alt="1" class="about-trigger__img lozad" src="<?php echo get_template_directory_uri(); ?>/images/5.jpg" data-loaded="true">
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section class="s-contacts is__nav-section" id="s-contacts">
            <div class="container">
            <div class="sec-title sec-title--center">
                <div class="h2">
                    Lorem ipsum dolor sit amet.			
                </div>
            </div>
            <div class="border-block contacts">
                <div class="border-block__content">
                    <div class="contacts__block">
                        <div class="contacts__block__title">Как к нам добраться</div>
                        <div class="contacts__block__main">Москва, ул. Перерва 45, к. 1</div>
                        <div class="contacts__block__metro">Станция Братиславская (2 мин <i class="i-steps"></i>)</div>
                        <a href="yandexnavi://build_route_on_map?lat_to=55.660892&amp;lon_to=37.747065" class="contacts__block__navigator">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/navigator.png" alt="Навигатор" width="30">
                        <span>Путь в Яндекс.Навигаторе</span>
                        </a>
                    </div>
                    <div class="contacts__block">
                        <div class="contacts__block__title">Режим работы</div>
                        <div class="contacts__block__main">09:00 — 21:00</div>
                        <div class="contacts__block__blue">Без обеда и выходных</div>
                    </div>
                    <div class="contacts__block">
                        <div class="contacts__block__title">Звоните</div>
                        <a href="tel:<?php echo $phone ?>" class="contacts__block__main"><?php echo $phoneVisible ?></a>
                        <div class="contacts__block__blue fancy-modal" data-src="#modal-callback">Заказать обратный звонок</div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section class="s-faq is__nav-section" id="s-faq">
            <div class="container">
            <div class="sec-title sec-title--center">
                <div class="h2">
                    Lorem ipsum dolor sit amet.			
                </div>
            </div>
            <div class="faq">
                <div class="faq__left">
                    <div class="faq__questions">
                        <div class="faq__q active">
                        <span>Я слежу за зубами. Откуда кариес?</span>
                        </div>
                        <div class="faq__q ">
                        <span>Можно ли спасти зубы, приговоренные к удалению?</span>
                        </div>
                        <div class="faq__q ">
                        <span>Не поменяется ли цена в ходе лечения?</span>
                        </div>
                        <div class="faq__q ">
                        <span>Будет больно?</span>
                        </div>
                        <div class="faq__q ">
                        <span>Планирую поставить имплант, но боюсь, что не приживется.</span>
                        </div>
                    </div>
                </div>
                <div class="faq__right">
                    <div class="faq__answers">
                        <div class="faq__a active">
                        <div class="faq__a__title">Я слежу за зубами. Откуда кариес?</div>
                        <div class="user-content faq__a__text">
                            <p>Кариес образуется из остатков пищи, которые накапливаются в полости рта из-за неправильного или недостаточного ухода. И хотя многие пациенты уверены, что хорошо следят за гигиеной, часто это бывает не так. Кто-то не пользуется зубной нитью или ирригатором, кто-то пренебрегает вечерней чисткой зубов или просто делает это неправильно. В итоге накапливается налет. Микробы в налете активно размножаются и выделяют кислоту, которая постепенно разъедает эмаль. Так появляется кариес.  Для его профилактики мы предлагаем раз в полгода посещать стоматолога и проводить профессиональную гигиену полости рта. Процедура безопасная, она избавит зубы камней, подарит свежее дыхание и исключит саму причину возникновения кариеса.</p>
                        </div>
                        </div>
                        <div class="faq__a ">
                        <div class="faq__a__title">Можно ли спасти зубы, приговоренные к удалению?</div>
                        <div class="user-content faq__a__text">
                            Мы спасаем зубы в 90% случаях. В нашей клинике берутся за самые сложные ситуации и помогают пациентам сохранить зуб. Часто для этого необходимы знания сразу в нескольких областях: терапии, хирургии, ортопедии. Не во всех клиниках есть такие многопрофильные врачи. Наши специалисты владеют проверенными методиками, которые зарекомендовали себя в США, Германии, Японии, Швейцарии и позволяют сохранить, казалось бы, безнадежные зубы.				
                        </div>
                        </div>
                        <div class="faq__a ">
                        <div class="faq__a__title">Не поменяется ли цена в ходе лечения?</div>
                        <div class="user-content faq__a__text">
                            Многие пациенты задают нам этот вопрос. Во время первого приема врач вместе с вами составит план лечения, где укажет все необходимые процедуры. Они будут зафиксированы в договоре и не увеличатся, когда мы приступим к лечению.				
                        </div>
                        </div>
                        <div class="faq__a ">
                        <div class="faq__a__title">Будет больно?</div>
                        <div class="user-content faq__a__text">
                            Конечно, нет. Мы применяем новейшую методику компьютерной анестезии, благодаря которой анестетик в разогретом виде очень медленно вводится под контролем компьютера в рассчитанной дозировке. Это почти безболезненно и помогло не одному нашему пациенту избавиться от страха к анестезии.				
                        </div>
                        </div>
                        <div class="faq__a ">
                        <div class="faq__a__title">Планирую поставить имплант, но боюсь, что не приживется.</div>
                        <div class="user-content faq__a__text">
                            Ваши страхи напрасны. Благодаря постоянному обучению и совершенствованию имплантационной практики, применению современных методик и протоколов, а также использованию имплантационных систем, проверенных временем, мы сводим процент неудач к минимуму. В настоящее время для нас не существует абсолютных противопоказаний для имплантации. Наши врачи способны вернуть красивую улыбку пациентам с заболеваниями сердца, щитовидной железы, с сахарным диабетом, хотя еще пару лет назад это казалось достаточно сложной задачей.				
                        </div>
                        </div>
                    </div>
                    <div class="faq__order">
                        <div class="faq__order__title">Нужна детальная консультация?</div>
                        <div class="faq__order__subtitle">Оставьте заявку и мы свяжемся с вами в ближайшее время</div>
                        <form class="ajax-form faq__order__form">
                        <input type="hidden" value="Задали вопрос" name="form_subject">
                        <div class="row">
                            <div class="grid-6 grid-12_xs">
                                <input type="text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя" class="input-text">
                            </div>
                            <div class="grid-6 grid-12_xs">
                                <input type="tel" name="user_tel" placeholder="Телефон*" data-label="Телефон" class="input-text" data-req="true" maxlength="18">
                            </div>
                            <div class="grid-12">
                                <textarea name="user_comment" placeholder="Ваш вопрос" data-label="Вопрос" class="input-text" rows="2"></textarea>
                                <div class="form-bottom-row">
                                    <div class="form-policy">Нажимая кнопку, вы соглашаетесь с <a href="#" target="_blank">политикой конфиденциальности</a></div>
                                    <button type="submit" class="btn">Отправить вопрос</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section class="s-delegate is__nav-section" id="s-delegate">
            <div class="container">
            <div class="delegate lozad" data-background-image="<?php echo get_template_directory_uri(); ?>/images/bg.jpg" data-loaded="true" style="background-image: url(&quot;<?php echo get_template_directory_uri(); ?>/images/bg.jpg&quot;);">
                <div class="delegate__left">
                    <div class="h2 delegate__title">
                        Lorem ipsum dolor sit amet.				
                    </div>
                    <div class="delegate__descr">
                        Мы общаемся с большим количеством врачей, и часто коллеги направляют своих пациентом к нам. Если вы столкнулись с этим, мы с радостью вам поможем!				
                    </div>
                    <form class="ajax-form faq__order__form">
                        <input type="hidden" value="Делегирование пациента" name="form_subject">
                        <div class="row">
                        <div class="grid-6 grid-12_xs">
                            <input type="text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя" class="input-text">
                        </div>
                        <div class="grid-6 grid-12_xs">
                            <input type="tel" name="user_tel" placeholder="Телефон*" data-label="Телефон" class="input-text" data-req="true" maxlength="18">
                        </div>
                        <div class="grid-12">
                            <textarea name="user_comment" placeholder="Описание случая вашего пациента" data-label="Комментарий" class="input-text" rows="2"></textarea>
                            <div class="form-bottom-row">
                                <div class="form-policy">Нажимая кнопку, вы соглашаетесь с <a href="#" target="_blank">политикой конфиденциальности</a></div>
                                <button type="submit" class="btn">Отправить вопрос</button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
                <img data-src="<?php echo get_template_directory_uri(); ?>/images/man.png" alt="" class="lozad delegate__man" src="<?php echo get_template_directory_uri(); ?>/images/man.png" data-loaded="true">
            </div>
            </div>
        </section>
        <footer class="s-footer">
            <div class="container">
            <div class="footer">
                <div class="footer__copy">Все права защищены, 2022 </div>
                <div class="footer__policy">
                    <a href="#" class="blue-link" target="_blank">Политика конфиденциальности</a>
                </div>
                <div class="footer__social">
                    <span>Мы в социальных сетях</span>
                    <div class="footer__social__list">
                        <a href="#"><i class="i-vk"></i></a>
                    </div>
                </div>
                <!-- <a href="https://penbrain.ru" target="_blank" class="footer__pen">
                <span>Дизайн и разработка с любовью<br>к счастливым улыбкам</span>
                <img src="<?php echo get_template_directory_uri(); ?>/images/pen.svg" alt="Pen&amp;Brain">
                </a> -->
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