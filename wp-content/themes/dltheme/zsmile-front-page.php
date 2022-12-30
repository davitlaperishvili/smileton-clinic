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
        <?php $hero = get_field('hero') ?>
        <section class="s-intro" id="s-intro" style="background: url(<?php echo $hero['block_image']['url'] ?>) center center no-repeat">
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
                                                                                                        <p>    <img data-src="/wp-content/uploads/2022/09/-Надежда-1-770х954-2-e1662986682527.jpg" alt="man" class="form-header__man lozad" src="/wp-content/uploads/2022/09/-Надежда-1-770х954-2-e1662986682527.jpg" data-loaded="true">
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
                                                                            <p>    <img data-src="/wp-content/uploads/2022/09/-Надежда-1-770х954-2-e1662986682527.jpg" alt="man" class="form-header__man lozad" src="/wp-content/uploads/2022/09/-Надежда-1-770х954-2-e1662986682527.jpg" data-loaded="true">
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
        <?php $about_us = get_field('about_us') ?>
        <?php 
            if($about_us) {
                ?>
                <section class="s-about">
                    <div class="container">
                        <div class="row">
                            <div class="grid-6 grid-12_m">
                                <div class="about-cite">
                                    <div class="about-cite__text">
                                    <?php echo $about_us['quote'] ?>				
                                    </div>
                                    <div class="about-cite__hwo">
                                    <p><?php echo $about_us['author_name'] ?></p>
                                    <?php 
                                        if($about_us['author_sign']){
                                            ?>
                                                <img src="<?php echo $about_us['author_sign']['url'] ?>" alt="sign" class="about-cite__sign">
                                            <?php
                                        }
                                    ?>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-6 grid-12_m">
                                <div class="user-content about-right-text">
                                   <?php echo $about_us['about_us_text'] ?>
                                </div>
                            </div>
                        </div>
                        <div class="about-triggers row">
                            <?php 
                                foreach($about_us['why_us'] as $key => $item) {
                                    ?>
                                        <div class="<?php echo $key == 0 || $key == 1 ? "grid-6" : "grid-4" ?> grid-12_m">
                                            <div class="about-trigger about-trigger--big">
                                                <div class="about-trigger__content">
                                                <div class="h4">
                                                    <?php echo $item['title'] ?>
                                                </div>
                                                <div><?php echo $item['desc'] ?></div>
                                                </div>
                                                <img data-src="<?php echo $item['image']['url'] ?>" alt="<?php echo $item['image']['alt'] ?>" class="about-trigger__img lozad" src="<?php echo $item['image']['url'] ?>" data-loaded="true">
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
            $contacts = get_field('contacts')
        ?>
        <?php 
            if($contacts) {
                ?>  
                    <section class="s-contacts is__nav-section" id="s-contacts">
                        <div class="container">
                        <div class="sec-title sec-title--center">
                            <div class="h2">
                                <?php echo $contacts['block_title'] ?>			
                            </div>
                        </div>
                        <div class="border-block contacts">
                            <div class="border-block__content">
                                <div class="contacts__block">
                                    <?php $column_1 = $contacts['column_1'] ?>
                                    <div class="contacts__block__title"><?php echo $column_1['title'] ?></div>
                                    <div class="contacts__block__main"><?php echo $column_1['main_text'] ?></div>
                                    <div class="contacts__block__metro" style="display: flex;"><?php echo $column_1['metro'] ?></div>
                                    <?php 
                                        if($column_1['route']){
                                            ?>
                                            <a href="<?php echo $column_1['route'] ?>" class="contacts__block__navigator">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/navigator.png" alt="Навигатор" width="30">
                                                <span>Путь в Яндекс.Навигаторе</span>
                                            </a>
                                            <?php
                                        }
                                    ?>
                                </div>
                                <div class="contacts__block">
                                    <?php $column_2 = $contacts['column_2'] ?>
                                    <div class="contacts__block__title"><?php echo $column_2['title'] ?></div>
                                    <div class="contacts__block__main"><?php echo $column_2['main_text'] ?></div>
                                    <div class="contacts__block__blue"><?php echo $column_2['subtitle'] ?></div>
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
                <?php
            }
        ?>
        
        <?php $faq = get_field('faq') ?>
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

        <?php $delegate = get_field('deelgate') ?>
        <?php 
            if($delegate) {
                ?>
                    <section class="s-delegate is__nav-section" id="s-delegate">
                        <div class="container">
                        <div class="delegate lozad" data-background-image="<?php echo $delegate['block_bg']['url'] ?>" data-loaded="true" style="background-image: url(<?php echo $delegate['block_bg']['url'] ?>);">
                            <div class="delegate__left">
                                <div class="h2 delegate__title">
                                    <?php echo $delegate['block_title'] ?>				
                                </div>
                                <div class="delegate__descr">
                                    <?php echo $delegate['block_subtitle'] ?>				
                                </div>
                                <div class="ajax-form faq__order__form">
                                    <?php echo do_shortcode('[contact-form-7 id="943" title="Форма вопроса"]') ?>
                                </div>
                            </div>
                            <img data-src="<?php echo $delegate['person_image']['url'] ?>" alt="" class="lozad delegate__man" src="<?php echo $delegate['person_image']['url'] ?>" data-loaded="true">
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
                        <img data-src="/wp-content/uploads/2022/10/фотото.png" alt="man" class="form-header__man lozad">
                    </div>
                    <textarea name="user_comment" placeholder="Опишите зубную боль" data-label="Комментарий" class="input-text" rows="5"></textarea>
                    <button class="btn js-form-step-next">Следующий шаг</button>
                </div>
                <div class="form-step-2">
                    <div class="form-header">
                        <div class="form-header__bubble">Наш администратор перезвонит вам в течение 2 минут.</div>
                        <img src="/wp-content/uploads/2022/10/фотото.png" alt="man" class="form-header__man">
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
                    <img src="/wp-content/uploads/2022/10/фотото.png" alt="man" class="form-header__man">
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

