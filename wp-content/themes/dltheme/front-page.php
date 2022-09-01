<?php 
    //Template Name: Front Page
?>
<?php get_header(); ?>
<?php 
	$phoneVisible = get_field('phone_number', 'option');
	$phone = preg_replace("/[^0-9]/", "", $phoneVisible);
	$email = get_field('email', 'option');
?>

<div id="panel"></div>
<div class="burger">
    <figure></figure>
</div>
<section class="page">
    <aside class="page__aside">
        <div class="page__aside__scroller">
            <div class="aside">
            <a href="#s-intro" class="scrollto"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Логотип" class="aside__logo"></a>
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
                    <a href="https://wa.me/" class="aside__phone__wa blue-link" target="_blank">Спросить по WhatsApp</a>
                </div>
            </div>
            <div class="aside__address">
                <a href="https://yandex.by/map-widget/v1/-/CCQl6GVwxD" class="aside__address__map fancy-map">
                <img src="<?php echo get_template_directory_uri(); ?>/images/aside-map.jpg" alt="миникарта" class="">
                </a>
                <div class="aside__address__main">
                    <div class="aside__address__city">Москва</div>
                    <div class="aside__address__str">ул. Перерва 45, к. 1</div>
                    <div class="aside__address__metro"><mark>M</mark> Братиславская</div>
                </div>
            </div>
            <a href="yandexnavi://build_route_on_map?lat_to=55.660892&amp;lon_to=37.747065" class="aside__navigator">
            <img src="<?php echo get_template_directory_uri(); ?>/images/navigator.png" alt="Навигатор" width="30">
            <span>Путь в Яндекс.Навигаторе</span>
            </a>
            </div>
        </div>
    </aside>
    <main class="page__main">
        <section class="s-intro" id="s-intro">
            <div class="container">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Логотип" class="logo-mob">
            <h1 class="h1">
                Lorem ipsum dolor sit amet.		
            </h1>
            <div class="intro-mob">
                <div class="aside__phone">
                    <i class="i-phone"></i>
                    <div class="aside__phone__main">
                        <a href="tel:<?php echo $phone ?>" class="aside__phone__number"><?php echo $phoneVisible ?></a>
                        <a href="https://wa.me/79260222223" class="aside__phone__wa blue-link" target="_blank">Спросить по WhatsApp</a>
                    </div>
                </div>
                <button class="btn fancy-modal" data-src="#modal-order">Оставить заявку</button>
            </div>
            <div class="border-block">
                <div class="border-block__content">
                    <form class="ajax-form vertical-form form-steps" autocomplete="off">
                        <input type="hidden" value="Новая заявка" name="form_subject">
                        <div class="form-step-1">
                        <div class="form-header">
                            <div class="form-header__bubble">
                                Напишите, что вас беспокоит, и я вам обязательно помогу							
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/bubble-man.jpg" alt="man" class="form-header__man">
                        </div>
                        <textarea name="user_comment" placeholder="Опишите зубную боль" data-label="Комментарий" class="input-text" rows="5"></textarea>
                        <button class="btn js-form-step-next">Следующий шаг</button>
                        </div>
                        <div class="form-step-2">
                        <div class="form-header">
                            <div class="form-header__bubble">
                                Наш администратор перезвонит вам в течение 2 минут.							
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/bubble-man.jpg" alt="man" class="form-header__man">
                        </div>
                        <input type="text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя" class="input-text">
                        <input type="tel" name="user_tel" placeholder="Телефон*" data-label="Телефон" class="input-text" data-req="true" maxlength="18">
                        <button type="submit" class="btn">Отправить</button>
                        <div class="form-policy">Нажимая кнопку, вы соглашаетесь с <a href="/upload/uf/c9d/c9db88e2565f1244bcec2fc31c1dbd4e.pdf" target="_blank">политикой конфиденциальности</a>.</div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
            <a href="https://youtu.be/AtWFB2O8sT4" class="intro-video fancy-video">
            <img src="<?php echo get_template_directory_uri(); ?>/images/play-text.png" alt="text" class="intro-video__text">
            <span class="play-btn"><i class="i-play"></i></span>
            </a>
        </section>
        <section class="s-why">
            <div class="container">
            <div class="row">
                <div class="grid-4 grid-12_s">
                    <div class="why-left">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/man.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/man.jpg" alt="man" class="why-left__man lozad" data-loaded="true">
                        <q class="why-left__q">
                        Комфорт моих пациентов всегда на первом месте.					</q>
                        <div class="why-left__hwo">Магомед Алиевич Хасенов<br>главный врач, основатель клиники<br>ООО «Дентал Имплант»</div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/sign.png" alt="sign" class="why-left__sign">
                    </div>
                </div>
                <div class="grid-8 grid-12_s why-right">
                    <div class="sec-title sec-title--arrows">
                        <div class="h2">
                        Почему выбирают нас					
                        </div>
                    </div>
                    <div class="why-slider slider-top-arrows">
                    <div class="why-slider__slide">
                        <div class="why-panel">
                            <div class="h5 why-panel__title">Диагностика под микроскопом</div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/b81982da9465aa9612c8674e19828e60.jpg" alt="img" class="why-panel__img flickity-lazyloaded">
                        </div>
                        </div>
                        <div class="why-slider__slide">
                        <div class="why-panel">
                            <div class="h5 why-panel__title">Гарантия от 3 до 5 лет</div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/b1ed3067482423d02626c834ce843e44.jpg" alt="img" class="why-panel__img flickity-lazyloaded">
                        </div>
                        </div>
                        <div class="why-slider__slide">
                        <div class="why-panel">
                            <div class="h5 why-panel__title">Фиксированная стоимость</div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/17893ac512653c39448ba4788623d2aa.jpg" alt="img" class="why-panel__img flickity-lazyloaded">
                        </div>
                        </div>
                        <div class="why-slider__slide">
                        <div class="why-panel">
                            <div class="h5 why-panel__title">Помощь в сложных случаях</div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/00b300e7c34eefb3699926ab2e7bd5f4.jpg" alt="img" class="why-panel__img flickity-lazyloaded">
                        </div>
                        </div>
                        <div class="why-slider__slide">
                        <div class="why-panel">
                            <div class="h5 why-panel__title">Бесплатная консультация</div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/e05b46e360ff35d49fa353bceff67436.jpg" alt="img" class="why-panel__img flickity-lazyloaded">
                        </div>
                        </div>
                        <div class="why-slider__slide">
                        <div class="why-panel">
                            <div class="h5 why-panel__title">Удобная система оплаты</div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/fa1e08573136785c0e7d8fa534e2ab5e.jpg" alt="img" class="why-panel__img flickity-lazyloaded">
                        </div>
                        </div>
                        <div class="why-slider__slide">
                        <div class="why-panel">
                            <div class="h5 why-panel__title">Рентген прямо в кресле</div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/613f2fdc4d764769414e28c1c079971e.jpg" alt="img" class="why-panel__img flickity-lazyloaded">
                        </div>
                        </div>
                        <div class="why-slider__slide">
                        <div class="why-panel">
                            <div class="h5 why-panel__title">Всегда несколько вариантов решения</div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/43a669739da7d4c957861471bf911d99.jpg" alt="img" class="why-panel__img flickity-lazyloaded">
                        </div>
                        </div>
                        <!-- <button class="flickity-button flickity-prev-next-button previous" type="button" aria-label="Previous">
                        <svg class="flickity-button-icon" viewBox="0 0 100 100">
                            <path d="M45.7,36.2L32.1,49.7c-0.2,0.1-0.2,0.4,0,0.5l13.6,13.6c0.2,0.2,0.4,0.2,0.5,0l1.7-1.7L37.3,51.4h29.2 c0.8,0,1.5-0.7,1.5-1.5l0,0c0-0.8-0.7-1.5-1.5-1.5h-29L48,37.9l-1.7-1.7C46.1,36,45.8,36,45.7,36.2L45.7,36.2z" class="arrow"></path>
                        </svg>
                        </button>
                        <button class="flickity-button flickity-prev-next-button next" type="button" aria-label="Next">
                        <svg class="flickity-button-icon" viewBox="0 0 100 100">
                            <path d="M45.7,36.2L32.1,49.7c-0.2,0.1-0.2,0.4,0,0.5l13.6,13.6c0.2,0.2,0.4,0.2,0.5,0l1.7-1.7L37.3,51.4h29.2 c0.8,0,1.5-0.7,1.5-1.5l0,0c0-0.8-0.7-1.5-1.5-1.5h-29L48,37.9l-1.7-1.7C46.1,36,45.8,36,45.7,36.2L45.7,36.2z" class="arrow" transform="translate(100, 100) rotate(180) "></path>
                        </svg>
                        </button> -->
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section class="s-services is__nav-section" id="s-services">
            <div class="container">
            <div class="services-cat">
                <div class="sec-title sec-title--center">
                    <div class="h2">Lorem ipsum dolor sit amet.</div>
                </div>
                <div class="services-grid">
                    <a href="#" class="service-panel fancy-modal" data-src="#modal-service-11">
                        <div class="service-panel__header">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/02e467088e18fa520aec645e72395fba.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/02e467088e18fa520aec645e72395fba.jpg" alt="service" class="service-panel__img lozad" data-loaded="true">
                        </div>
                        <div class="service-panel__content">
                        <div class="h4 service-panel__title">Виниры</div>
                        <div class="service-panel__descr">Идеальный вариант, когда вы хотите поменять цвет или форму зубов надолго</div>
                        <span class="service-panel__link blue-link">Подробнее</span>
                        </div>
                    </a>
                    <div class="modal modal-service border-block" id="modal-service-11">
                        <div class="border-block__content">
                        <div class="modal-service__title">Виниры</div>
                        <div class="modal-service__row">
                            <div class="modal-service__content">
                                <img data-src="<?php echo get_template_directory_uri(); ?>/images/721bdfc8893612dbd5133e24a908b63b.png" alt="1" class="lozad modal-service__img">
                                <div class="user-content">
                                    Виниры, люминиры — это ультратонкие керамические пластинки, которые позволяют добиться желаемой формы,цвета и структуры зубов. Они увеличивают прочность зуба на 30% и могут служить вам 20 лет  и более  <br>
                                    <br>
                                    Изготовление виниров сегодня не требует излишней обработки зубов как раньше, доктор при необходимости обрабатывает зуб с использованием увеличения (бинокуляров или микроскопа) что позволяет максимально сохранить эмаль зуба.  <br>
                                    <br>
                                    Виниры бывают каркасными и более тонкими бескаркасными, их толщина составляет всего 0,1-0.2 мм, это тоньше глазных линз. 								
                                </div>
                            </div>
                            <div class="modal-service__order">
                                <form class="ajax-form vertical-form" autocomplete="off">
                                    <input type="hidden" value="Новая заявка" name="form_subject">
                                    <input type="hidden" value="Виниры" name="service" data-label="Услуга">
                                    <div class="form-header">
                                    <div class="form-header__bubble">Хотите записаться на прием? Оставьте заявку, и наш администратор свяжется с вами в течение 2 минут</div>
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/bubble-man.jpg" alt="man" class="form-header__man lozad">
                                    </div>
                                    <input type="text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя" class="input-text">
                                    <input type="tel" name="user_tel" placeholder="Телефон*" data-label="Телефон" class="input-text" data-req="true" maxlength="18">
                                    <button type="submit" class="btn">Отправить</button>
                                    <div class="form-policy">Нажимая кнопку, вы соглашаетесь с <a href="/upload/uf/c9d/c9db88e2565f1244bcec2fc31c1dbd4e.pdf" target="_blank">политикой конфиденциальности</a>.</div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                    <a href="#" class="service-panel fancy-modal" data-src="#modal-service-12">
                        <div class="service-panel__header">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/d1426f72e77cd7a7d43ef5ea0a02cd1e.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/d1426f72e77cd7a7d43ef5ea0a02cd1e.jpg" alt="service" class="service-panel__img lozad" data-loaded="true">
                        </div>
                        <div class="service-panel__content">
                        <div class="h4 service-panel__title">Люминиры</div>
                        <div class="service-panel__descr">Тончайшие плотно прилегающие пластинки, которые не потребуют обработки зубов</div>
                        <span class="service-panel__link blue-link">Подробнее</span>
                        </div>
                    </a>
                    <div class="modal modal-service border-block" id="modal-service-12">
                        <div class="border-block__content">
                        <div class="modal-service__title">Люминиры</div>
                        <div class="modal-service__row">
                            <div class="modal-service__content">
                                <img data-src="<?php echo get_template_directory_uri(); ?>/images/fca1ad278a832b58f5daccdebd23bde0.jpg" alt="1" class="lozad modal-service__img">
                                <div class="user-content">
                                    <p>
                                    Люминиры — тончайшие пластинки для коррекции цвета и формы ваших зубов. Материал, из которого они изготавливаются, прочный и не изменит цвет на всем протяжении эксплуатации. Для установки люминиров требуется только снять слепок или цифровой скан — обрабатывать поверхность зубов не придется.
                                    </p>
                                    <p>
                                    На всех этапах работа проводится контроль под высокоточным микроскопом.  Такой подход позволяет нам добиться максимальной точности прилегания люминиров и избежать возникновения кариеса под ними, что напрямую влияет на срок их службы.
                                    </p>
                                </div>
                            </div>
                            <div class="modal-service__order">
                                <form class="ajax-form vertical-form" autocomplete="off">
                                    <input type="hidden" value="Новая заявка" name="form_subject">
                                    <input type="hidden" value="Люминиры" name="service" data-label="Услуга">
                                    <div class="form-header">
                                    <div class="form-header__bubble">Хотите записаться на прием? Оставьте заявку, и наш администратор свяжется с вами в течение 2 минут</div>
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/bubble-man.jpg" alt="man" class="form-header__man lozad">
                                    </div>
                                    <input type="text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя" class="input-text">
                                    <input type="tel" name="user_tel" placeholder="Телефон*" data-label="Телефон" class="input-text" data-req="true" maxlength="18">
                                    <button type="submit" class="btn">Отправить</button>
                                    <div class="form-policy">Нажимая кнопку, вы соглашаетесь с <a href="/upload/uf/c9d/c9db88e2565f1244bcec2fc31c1dbd4e.pdf" target="_blank">политикой конфиденциальности</a>.</div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                    <a href="#" class="service-panel fancy-modal" data-src="#modal-service-13">
                        <div class="service-panel__header">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/97c2b498cbae3e82b184ce9db5fc9492.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/97c2b498cbae3e82b184ce9db5fc9492.jpg" alt="service" class="service-panel__img lozad" data-loaded="true">
                        </div>
                        <div class="service-panel__content">
                        <div class="h4 service-panel__title">Циркониевые коронки</div>
                        <div class="service-panel__descr">Выглядят абсолютно естественно и прослужат более 35 лет</div>
                        <span class="service-panel__link blue-link">Подробнее</span>
                        </div>
                    </a>
                    <div class="modal modal-service border-block" id="modal-service-13">
                        <div class="border-block__content">
                        <div class="modal-service__title">Циркониевые коронки</div>
                        <div class="modal-service__row">
                            <div class="modal-service__content">
                                <img data-src="<?php echo get_template_directory_uri(); ?>/images/bb118818706c706a977980c11b3e2567.png" alt="1" class="lozad modal-service__img">
                                <div class="user-content">
                                    Циркониевые коронки полностью имитируют форму и цвет зубов. Срок их службы не ограничен при условии соблюдения рекомендаций врача. <br>
                                    <br>
                                    Коронки изготавливаются по методу высокоточного трехмерного моделирования CAD/CAM из диоксида циркония. Это уникальный материал, который отличается особой прочностью, точностью прилегания и подходит для восстановления всех видов зубов. <br>								
                                </div>
                            </div>
                            <div class="modal-service__order">
                                <form class="ajax-form vertical-form" autocomplete="off">
                                    <input type="hidden" value="Новая заявка" name="form_subject">
                                    <input type="hidden" value="Циркониевые коронки" name="service" data-label="Услуга">
                                    <div class="form-header">
                                    <div class="form-header__bubble">Хотите записаться на прием? Оставьте заявку, и наш администратор свяжется с вами в течение 2 минут</div>
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/bubble-man.jpg" alt="man" class="form-header__man lozad">
                                    </div>
                                    <input type="text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя" class="input-text">
                                    <input type="tel" name="user_tel" placeholder="Телефон*" data-label="Телефон" class="input-text" data-req="true" maxlength="18">
                                    <button type="submit" class="btn">Отправить</button>
                                    <div class="form-policy">Нажимая кнопку, вы соглашаетесь с <a href="/upload/uf/c9d/c9db88e2565f1244bcec2fc31c1dbd4e.pdf" target="_blank">политикой конфиденциальности</a>.</div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                    <a href="#" class="service-panel fancy-modal" data-src="#modal-service-14">
                        <div class="service-panel__header">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/90de9e9be43ce91c5ae60b21a7fed883.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/90de9e9be43ce91c5ae60b21a7fed883.jpg" alt="service" class="service-panel__img lozad" data-loaded="true">
                        </div>
                        <div class="service-panel__content">
                        <div class="h4 service-panel__title">Отбеливание Zoom 4</div>
                        <div class="service-panel__descr">Быстрое и бережное отбеливание до 14 тонов за один сеанс</div>
                        <span class="service-panel__link blue-link">Подробнее</span>
                        </div>
                    </a>
                    <div class="modal modal-service border-block" id="modal-service-14">
                        <div class="border-block__content">
                        <div class="modal-service__title">Отбеливание Zoom 4</div>
                        <div class="modal-service__row">
                            <div class="modal-service__content">
                                <img data-src="<?php echo get_template_directory_uri(); ?>/images/1011003073704c63f413b9d9e5342722.png" alt="1" class="lozad modal-service__img">
                                <div class="user-content">
                                    Zoom 4 считается одной из самых эффективных, безопасных и безболезненных процедур для отбеливания зубов. <br>
                                    <br>
                                    Перед процедурой врач проводит реминерализующую терапию гелем Relief ACP, чтобы дополнительно защитить и насытить зубную эмаль всеми необходимыми минералами. <br>
                                    <br>
                                    Далее на зубы наносится отбеливающий состав с минимальным содержанием перекиси водорода. Он активируется лампой нового поколения с холодным свечением, благодаря которому не происходит перегрев зубов. <br>
                                    <br>
                                    Понадобится всего 1 час, чтобы ваша улыбка стала ослепительной. <br>								
                                </div>
                            </div>
                            <div class="modal-service__order">
                                <form class="ajax-form vertical-form" autocomplete="off">
                                    <input type="hidden" value="Новая заявка" name="form_subject">
                                    <input type="hidden" value="Отбеливание Zoom 4" name="service" data-label="Услуга">
                                    <div class="form-header">
                                    <div class="form-header__bubble">Хотите записаться на прием? Оставьте заявку, и наш администратор свяжется с вами в течение 2 минут</div>
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/bubble-man.jpg" alt="man" class="form-header__man lozad">
                                    </div>
                                    <input type="text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя" class="input-text">
                                    <input type="tel" name="user_tel" placeholder="Телефон*" data-label="Телефон" class="input-text" data-req="true" maxlength="18">
                                    <button type="submit" class="btn">Отправить</button>
                                    <div class="form-policy">Нажимая кнопку, вы соглашаетесь с <a href="/upload/uf/c9d/c9db88e2565f1244bcec2fc31c1dbd4e.pdf" target="_blank">политикой конфиденциальности</a>.</div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-cat">
                <div class="sec-title sec-title--center">
                    <div class="h2">Никто не угадает, сколько вам лет</div>
                </div>
                <div class="services-grid">
                    <a href="#" class="service-panel fancy-modal" data-src="#modal-service-15">
                        <div class="service-panel__header">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/74d689e2887c53d07df9278d22ee2f09.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/74d689e2887c53d07df9278d22ee2f09.jpg" alt="service" class="service-panel__img lozad" data-loaded="true">
                        </div>
                        <div class="service-panel__content">
                        <div class="h4 service-panel__title">Брекеты</div>
                        <div class="service-panel__descr">Эстетичная система для ровной улыбки, о которой вы мечтали, но не решались попробовать</div>
                        <span class="service-panel__link blue-link">Подробнее</span>
                        </div>
                    </a>
                    <div class="modal modal-service border-block" id="modal-service-15">
                        <div class="border-block__content">
                        <div class="modal-service__title">Брекеты</div>
                        <div class="modal-service__row">
                            <div class="modal-service__content">
                                <img data-src="<?php echo get_template_directory_uri(); ?>/images/f253918e7c0e8048df0398c302f4fc45.png" alt="1" class="lozad modal-service__img">
                                <div class="user-content">
                                    Из-за неправильного прикуса зубной ряд начинает деформироваться. Исправить проблему помогут современные эстетичные брекет-системы. <br>
                                    <br>
                                    Они бывают металлическими или керамическими, а также могут по-разному крепиться на зубы — снаружи или изнутри. Какой вариант подойдет именно вам, вы решите вместе с врачом. <br>
                                    <br>
                                    Перед установкой стоматолог-ортодонт выполнит все необходимые исследования и смоделирует правильный прикус, который будет учитывать анатомические особенности вашего челюстного сустава и мышц лица. <br>								
                                </div>
                            </div>
                            <div class="modal-service__order">
                                <form class="ajax-form vertical-form" autocomplete="off">
                                    <input type="hidden" value="Новая заявка" name="form_subject">
                                    <input type="hidden" value="Брекеты" name="service" data-label="Услуга">
                                    <div class="form-header">
                                    <div class="form-header__bubble">Хотите записаться на прием? Оставьте заявку, и наш администратор свяжется с вами в течение 2 минут</div>
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/bubble-man.jpg" alt="man" class="form-header__man lozad">
                                    </div>
                                    <input type="text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя" class="input-text">
                                    <input type="tel" name="user_tel" placeholder="Телефон*" data-label="Телефон" class="input-text" data-req="true" maxlength="18">
                                    <button type="submit" class="btn">Отправить</button>
                                    <div class="form-policy">Нажимая кнопку, вы соглашаетесь с <a href="/upload/uf/c9d/c9db88e2565f1244bcec2fc31c1dbd4e.pdf" target="_blank">политикой конфиденциальности</a>.</div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                    <a href="#" class="service-panel fancy-modal" data-src="#modal-service-16">
                        <div class="service-panel__header">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/13bf23b2ea16c68e7c932a81205ce84a.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/13bf23b2ea16c68e7c932a81205ce84a.jpg" alt="service" class="service-panel__img lozad" data-loaded="true">
                        </div>
                        <div class="service-panel__content">
                        <div class="h4 service-panel__title">Лечение под микроскопом</div>
                        <div class="service-panel__descr">Безболезненная помощь вашим зубам и деснам</div>
                        <span class="service-panel__link blue-link">Подробнее</span>
                        </div>
                    </a>
                    <div class="modal modal-service border-block" id="modal-service-16">
                        <div class="border-block__content">
                        <div class="modal-service__title">Лечение под микроскопом</div>
                        <div class="modal-service__row">
                            <div class="modal-service__content">
                                <img data-src="<?php echo get_template_directory_uri(); ?>/images/67d137c6acf50e32f9bd13a1917908dd.png" alt="1" class="lozad modal-service__img">
                                <div class="user-content">
                                    Кариес может не только разрушить зуб, но и привести к тяжелым заболеваниям десен и воспалению нерва. Лечение зубов под микроскопом Carl Zeiss —  современный способ сохранить максимальное количество здоровых тканей, увидеть сложную анатомию корневых каналов зуба и обеспечить пациенту качественное лечение. <br>
                                    <br>
                                    Современные биоинертные материалы, из которых будет изготовлена пломба, помогут сохранить зуб здоровым и избежать повторного воспаления.  <br>
                                    <br>								
                                </div>
                            </div>
                            <div class="modal-service__order">
                                <form class="ajax-form vertical-form" autocomplete="off">
                                    <input type="hidden" value="Новая заявка" name="form_subject">
                                    <input type="hidden" value="Лечение под микроскопом" name="service" data-label="Услуга">
                                    <div class="form-header">
                                    <div class="form-header__bubble">Хотите записаться на прием? Оставьте заявку, и наш администратор свяжется с вами в течение 2 минут</div>
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/bubble-man.jpg" alt="man" class="form-header__man lozad">
                                    </div>
                                    <input type="text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя" class="input-text">
                                    <input type="tel" name="user_tel" placeholder="Телефон*" data-label="Телефон" class="input-text" data-req="true" maxlength="18">
                                    <button type="submit" class="btn">Отправить</button>
                                    <div class="form-policy">Нажимая кнопку, вы соглашаетесь с <a href="/upload/uf/c9d/c9db88e2565f1244bcec2fc31c1dbd4e.pdf" target="_blank">политикой конфиденциальности</a>.</div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                    <a href="#" class="service-panel fancy-modal" data-src="#modal-service-17">
                        <div class="service-panel__header">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/9e98cbc1a21c49840ff9a068bdb3bd4a.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/9e98cbc1a21c49840ff9a068bdb3bd4a.jpg" alt="service" class="service-panel__img lozad" data-loaded="true">
                        </div>
                        <div class="service-panel__content">
                        <div class="h4 service-panel__title">Профессиональная гигиена</div>
                        <div class="service-panel__descr">Сияющая чистота вашей улыбки</div>
                        <span class="service-panel__link blue-link">Подробнее</span>
                        </div>
                    </a>
                    <div class="modal modal-service border-block" id="modal-service-17">
                        <div class="border-block__content">
                        <div class="modal-service__title">Профессиональная гигиена</div>
                        <div class="modal-service__row">
                            <div class="modal-service__content">
                                <img data-src="<?php echo get_template_directory_uri(); ?>/images/15ced85629bd91f2c7f91e19a463222e.png" alt="1" class="lozad modal-service__img">
                                <div class="user-content">
                                    Ежедневной гигиены бывает недостаточно, чтобы сохранить зубы чистыми и здоровыми. Комплексная чистка способна избавить зубы и межзубные пространства от налета и зубного камня даже в труднодоступных местах. Вместе с отложениями уйдут и проблемы, связанные с потемнением эмали или неприятным запахом изо рта.<br>
                                    <br>
                                    Чистка — безопасная и безболезненная процедура, которую мы советуем проводить каждые полгода.<br>								
                                </div>
                            </div>
                            <div class="modal-service__order">
                                <form class="ajax-form vertical-form" autocomplete="off">
                                    <input type="hidden" value="Новая заявка" name="form_subject">
                                    <input type="hidden" value="Профессиональная гигиена" name="service" data-label="Услуга">
                                    <div class="form-header">
                                    <div class="form-header__bubble">Хотите записаться на прием? Оставьте заявку, и наш администратор свяжется с вами в течение 2 минут</div>
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/bubble-man.jpg" alt="man" class="form-header__man lozad">
                                    </div>
                                    <input type="text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя" class="input-text">
                                    <input type="tel" name="user_tel" placeholder="Телефон*" data-label="Телефон" class="input-text" data-req="true" maxlength="18">
                                    <button type="submit" class="btn">Отправить</button>
                                    <div class="form-policy">Нажимая кнопку, вы соглашаетесь с <a href="/upload/uf/c9d/c9db88e2565f1244bcec2fc31c1dbd4e.pdf" target="_blank">политикой конфиденциальности</a>.</div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                    <a href="#" class="service-panel fancy-modal" data-src="#modal-service-18">
                        <div class="service-panel__header">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/b69438a4201531d91fd9cf12abd54431.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/b69438a4201531d91fd9cf12abd54431.jpg" alt="service" class="service-panel__img lozad" data-loaded="true">
                        </div>
                        <div class="service-panel__content">
                        <div class="h4 service-panel__title">Реставрация зубной эмали</div>
                        <div class="service-panel__descr">Идеальная поверхность зубов</div>
                        <span class="service-panel__link blue-link">Подробнее</span>
                        </div>
                    </a>
                    <div class="modal modal-service border-block" id="modal-service-18">
                        <div class="border-block__content">
                        <div class="modal-service__title">Реставрация зубной эмали</div>
                        <div class="modal-service__row">
                            <div class="modal-service__content">
                                <img data-src="<?php echo get_template_directory_uri(); ?>/images/62bc470c4d1a11b695915e6d8d4e050a.png" alt="1" class="lozad modal-service__img">
                                <div class="user-content">
                                    Зубы считаются одним из самых прочных органов человека, но из-за травм или повышенного давления даже они могут пострадать. Если площадь разрушения значительна, мы предлагаем нарастить зубную эмаль наногибридным материалом или керамической накладкой, цвет и структуру которых будет невозможно отличить от естественной эмали.								
                                </div>
                            </div>
                            <div class="modal-service__order">
                                <form class="ajax-form vertical-form" autocomplete="off">
                                    <input type="hidden" value="Новая заявка" name="form_subject">
                                    <input type="hidden" value="Реставрация зубной эмали" name="service" data-label="Услуга">
                                    <div class="form-header">
                                    <div class="form-header__bubble">Хотите записаться на прием? Оставьте заявку, и наш администратор свяжется с вами в течение 2 минут</div>
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/bubble-man.jpg" alt="man" class="form-header__man lozad">
                                    </div>
                                    <input type="text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя" class="input-text">
                                    <input type="tel" name="user_tel" placeholder="Телефон*" data-label="Телефон" class="input-text" data-req="true" maxlength="18">
                                    <button type="submit" class="btn">Отправить</button>
                                    <div class="form-policy">Нажимая кнопку, вы соглашаетесь с <a href="/upload/uf/c9d/c9db88e2565f1244bcec2fc31c1dbd4e.pdf" target="_blank">политикой конфиденциальности</a>.</div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-cat">
                <div class="sec-title sec-title--center">
                    <div class="h2">Возрождение вашей улыбки</div>
                </div>
                <div class="services-grid">
                    <a href="#" class="service-panel fancy-modal" data-src="#modal-service-19">
                        <div class="service-panel__header">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/65f5e911b2f9786abfd029c3e1461efd.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/65f5e911b2f9786abfd029c3e1461efd.jpg" alt="service" class="service-panel__img lozad" data-loaded="true">
                        </div>
                        <div class="service-panel__content">
                        <div class="h4 service-panel__title">Рецессия десны</div>
                        <div class="service-panel__descr">Остановим и повернем вспять процесс, вызывающий убыль десны</div>
                        <span class="service-panel__link blue-link">Подробнее</span>
                        </div>
                    </a>
                    <div class="modal modal-service border-block" id="modal-service-19">
                        <div class="border-block__content">
                        <div class="modal-service__title">Рецессия десны</div>
                        <div class="modal-service__row">
                            <div class="modal-service__content">
                                <img data-src="<?php echo get_template_directory_uri(); ?>/images/e093d07f50c8ef72991567a6032a3453.png" alt="1" class="lozad modal-service__img">
                                <div class="user-content">
                                    Рецессия — это убыль десны, к которой приводят грубая механическая чистка, кариес, отсутствие жевательных зубов и некорректное лечение. Она может оголить шейку зуба и вызвать чувствительность.<br>
                                    <br>
                                    Если проблему не решать, появляется подвижность зуба, которая со временем приведет к его удалению. <br>
                                    <br>
                                    Сохранению здоровья ваших десен поможет локальная пластика десны. Лечение рецессии проводится под местной анестезией в один прием. <br>								
                                </div>
                            </div>
                            <div class="modal-service__order">
                                <form class="ajax-form vertical-form" autocomplete="off">
                                    <input type="hidden" value="Новая заявка" name="form_subject">
                                    <input type="hidden" value="Рецессия десны" name="service" data-label="Услуга">
                                    <div class="form-header">
                                    <div class="form-header__bubble">Хотите записаться на прием? Оставьте заявку, и наш администратор свяжется с вами в течение 2 минут</div>
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/bubble-man.jpg" alt="man" class="form-header__man lozad">
                                    </div>
                                    <input type="text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя" class="input-text">
                                    <input type="tel" name="user_tel" placeholder="Телефон*" data-label="Телефон" class="input-text" data-req="true" maxlength="18">
                                    <button type="submit" class="btn">Отправить</button>
                                    <div class="form-policy">Нажимая кнопку, вы соглашаетесь с <a href="/upload/uf/c9d/c9db88e2565f1244bcec2fc31c1dbd4e.pdf" target="_blank">политикой конфиденциальности</a>.</div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                    <a href="#" class="service-panel fancy-modal" data-src="#modal-service-20">
                        <div class="service-panel__header">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/6fe3fd12a69e5fd1497d924d1a391d18.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/6fe3fd12a69e5fd1497d924d1a391d18.jpg" alt="service" class="service-panel__img lozad" data-loaded="true">
                        </div>
                        <div class="service-panel__content">
                        <div class="h4 service-panel__title">Нейромышечная стоматология</div>
                        <div class="service-panel__descr">Избавим от боли в голове и мышцах</div>
                        <span class="service-panel__link blue-link">Подробнее</span>
                        </div>
                    </a>
                    <div class="modal modal-service border-block" id="modal-service-20">
                        <div class="border-block__content">
                        <div class="modal-service__title">Нейромышечная стоматология</div>
                        <div class="modal-service__row">
                            <div class="modal-service__content">
                                <img data-src="<?php echo get_template_directory_uri(); ?>/images/ad3723470164a52ff0358aec805b7e47.png" alt="1" class="lozad modal-service__img">
                                <div class="user-content">
                                    Неточно поставленная пломба может привести к смещению челюсти и возникновению дисбаланса жевательных мышц. Без должного лечения разовьется гипертонус, который будет отдавать болью в голову, шею, плечи и спину. <br>
                                    <br>
                                    Специалисты нашего центра помогут определить состояние зубочелюстной системы на специальном оборудовании, которое даст полную информацию о вашем височно-нижнечелюстном суставе и позволит составить план лечения уже в день обращения. <br>								
                                </div>
                            </div>
                            <div class="modal-service__order">
                                <form class="ajax-form vertical-form" autocomplete="off">
                                    <input type="hidden" value="Новая заявка" name="form_subject">
                                    <input type="hidden" value="Нейромышечная стоматология" name="service" data-label="Услуга">
                                    <div class="form-header">
                                    <div class="form-header__bubble">Хотите записаться на прием? Оставьте заявку, и наш администратор свяжется с вами в течение 2 минут</div>
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/bubble-man.jpg" alt="man" class="form-header__man lozad">
                                    </div>
                                    <input type="text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя" class="input-text">
                                    <input type="tel" name="user_tel" placeholder="Телефон*" data-label="Телефон" class="input-text" data-req="true" maxlength="18">
                                    <button type="submit" class="btn">Отправить</button>
                                    <div class="form-policy">Нажимая кнопку, вы соглашаетесь с <a href="/upload/uf/c9d/c9db88e2565f1244bcec2fc31c1dbd4e.pdf" target="_blank">политикой конфиденциальности</a>.</div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                    <a href="#" class="service-panel fancy-modal" data-src="#modal-service-21">
                        <div class="service-panel__header">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/6df95fc983de582b1dd5ee78e7b39391.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/6df95fc983de582b1dd5ee78e7b39391.jpg" alt="service" class="service-panel__img lozad" data-loaded="true">
                        </div>
                        <div class="service-panel__content">
                        <div class="h4 service-panel__title">Комплексная имплантация</div>
                        <div class="service-panel__descr">Никто не поймет, что ваша улыбка выглядит так благодаря нам</div>
                        <span class="service-panel__link blue-link">Подробнее</span>
                        </div>
                    </a>
                    <div class="modal modal-service border-block" id="modal-service-21">
                        <div class="border-block__content">
                        <div class="modal-service__title">Комплексная имплантация</div>
                        <div class="modal-service__row">
                            <div class="modal-service__content">
                                <img data-src="<?php echo get_template_directory_uri(); ?>/images/37fcddb71f1237990a0a6e242cf2f7e2.png" alt="1" class="lozad modal-service__img">
                                <div class="user-content">
                                    Современные методы имплантации позволяют восстановить улыбку при полном или частичном отсутствии зубов всего за несколько дней. <br>
                                    <br>
                                    Для этого врачи нашей клиники планируют установку имплантов с помощью компьютерной томографии и 3D-моделирования.<br>
                                    <br>
                                    Специальная программа помогает нам с высокой точностью проработать все этапы от установки имплантов до фиксации зубов и провести реабилитацию с максимальным комфортом.								
                                </div>
                            </div>
                            <div class="modal-service__order">
                                <form class="ajax-form vertical-form" autocomplete="off">
                                    <input type="hidden" value="Новая заявка" name="form_subject">
                                    <input type="hidden" value="Комплексная имплантация" name="service" data-label="Услуга">
                                    <div class="form-header">
                                    <div class="form-header__bubble">Хотите записаться на прием? Оставьте заявку, и наш администратор свяжется с вами в течение 2 минут</div>
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/bubble-man.jpg" alt="man" class="form-header__man lozad">
                                    </div>
                                    <input type="text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя" class="input-text">
                                    <input type="tel" name="user_tel" placeholder="Телефон*" data-label="Телефон" class="input-text" data-req="true" maxlength="18">
                                    <button type="submit" class="btn">Отправить</button>
                                    <div class="form-policy">Нажимая кнопку, вы соглашаетесь с <a href="/upload/uf/c9d/c9db88e2565f1244bcec2fc31c1dbd4e.pdf" target="_blank">политикой конфиденциальности</a>.</div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                    <a href="#" class="service-panel fancy-modal" data-src="#modal-service-22">
                        <div class="service-panel__header">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/042c0e6c34f01e9268c8ad724c09c837.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/042c0e6c34f01e9268c8ad724c09c837.jpg" alt="service" class="service-panel__img lozad" data-loaded="true">
                        </div>
                        <div class="service-panel__content">
                        <div class="h4 service-panel__title">Костная пластика</div>
                        <div class="service-panel__descr">Беремся и решаем проблемы с костью, с которыми вам не смогли помочь в другой клинике</div>
                        <span class="service-panel__link blue-link">Подробнее</span>
                        </div>
                    </a>
                    <div class="modal modal-service border-block" id="modal-service-22">
                        <div class="border-block__content">
                        <div class="modal-service__title">Костная пластика</div>
                        <div class="modal-service__row">
                            <div class="modal-service__content">
                                <img data-src="<?php echo get_template_directory_uri(); ?>/images/c21771aed8cd880521a115c54f24ec35.png" alt="1" class="lozad modal-service__img">
                                <div class="user-content">
                                    Часто потеря зубов или долгое ношение зубных протезов приводят к  дефициту костной ткани. Важно восстановить костную ткань, чтобы предотвратить полную потерю зубов. <br>
                                    <br>
                                    Для этого мы прибегаем к костной пластике, увеличивающей объем кости, чтобы затем установить имплант. Современные технологии и мировой опыт наращивания костной ткани делают эту процедуру столь же доступной и предсказуемой, как лечение обычного кариеса.<br>								
                                </div>
                            </div>
                            <div class="modal-service__order">
                                <form class="ajax-form vertical-form" autocomplete="off">
                                    <input type="hidden" value="Новая заявка" name="form_subject">
                                    <input type="hidden" value="Костная пластика" name="service" data-label="Услуга">
                                    <div class="form-header">
                                    <div class="form-header__bubble">Хотите записаться на прием? Оставьте заявку, и наш администратор свяжется с вами в течение 2 минут</div>
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/bubble-man.jpg" alt="man" class="form-header__man lozad">
                                    </div>
                                    <input type="text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя" class="input-text">
                                    <input type="tel" name="user_tel" placeholder="Телефон*" data-label="Телефон" class="input-text" data-req="true" maxlength="18">
                                    <button type="submit" class="btn">Отправить</button>
                                    <div class="form-policy">Нажимая кнопку, вы соглашаетесь с <a href="/upload/uf/c9d/c9db88e2565f1244bcec2fc31c1dbd4e.pdf" target="_blank">политикой конфиденциальности</a>.</div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section class="s-expert lozad" data-background-image="<?php echo get_template_directory_uri(); ?>/images/bg.jpg" data-loaded="true" style="background-image: url(&quot;<?php echo get_template_directory_uri(); ?>/images/bg.jpg&quot;);">
            <div class="container">
            <div class="expert">
                <div class="expert__lead">
                    <p>Мне 55 лет, с 1992 года занимаюсь бизнесом.</p>
                    <p>Я здоровый человек, не бываю обычно у врачей — если только за справкой на права или лечить зубы. И зубы со временем износились.</p>
                </div>
                <div class="expert__main">
                    <p>Нужно уже было срочно что-то сделать. Сходил в несколько поликлиник, мне не понравились предложения сделать за несколько лет и много операций. Я знаю, что долго — не обязательно хорошо.</p>
                    <p>Старший сын Илья Кусакин порекомендовал обратиться к Магомеду. Сделали снимки и одну операцию под местной анестезией, через неделю вставили имплантаты на всю нижнюю челюсть и сделали удобный временный протез на верхнюю. За неделю и сравнительно небольшую сумму денег я решил проблему, которая мешала мне нормально жить несколько лет.</p>
                    <p>Я публичный человек и часто выступаю. Иногда приходилось есть аккуратно одной стороной рта, чтобы оставшиеся зубы случайно не выпали. Мясо приходилось резать на очень мелкие кусочки. Сейчас я, конечно, забыл об этих неудобствах. Новые зубы доставляют удовольствие при общении и еде и больше не болят.</p>
                </div>
                <div class="expert__mark">
                    Хочется сказать большое спасибо профессионализму Магомеда. Это большая редкость — встретить настоящего мастера, владеющего самыми современными и быстрыми технологиями. Я рад, что мне повезло.			
                </div>
                <div class="expert__bottom">
                    <a href="#" class="video-block">
                        <div class="video-block__img">
                        <img data-src="<?php echo get_template_directory_uri(); ?>/images/video.jpg" alt="1" class="lozad" src="<?php echo get_template_directory_uri(); ?>/images/video.jpg" data-loaded="true">
                        </div>
                        <i class="i-play video-block__icon video-block__icon--big video-block__icon--white"></i>
                    </a>
                    <div class="expert__hwo">
                        <div class="expert__hwo__name">Владимир Кусакин</div>
                        <div class="expert__hwo__descr">Эксперт по бизнесу, коуч, консультант</div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section class="s-cases is__nav-section" id="s-cases">
            <div class="container">
            <div class="sec-title sec-title--arrows">
                <div class="h2">
                    Lorem ipsum dolor sit amet.			
                </div>
            </div>
            <div class="cases-thumbs slider-top-arrows ">
                <div class="cases-thumbs__slide">
                    <div class="case-thumb active">
                        <img data-toggle-class="visible" data-src="<?php echo get_template_directory_uri(); ?>/images/de025f475a2e58395e1cdca784a52ba1.JPG" alt="1" class="lozad visible" src="<?php echo get_template_directory_uri(); ?>/images/de025f475a2e58395e1cdca784a52ba1.JPG" data-loaded="true">
                        <span>Королева Елена</span>
                    </div>
                    </div>
                    <div class="cases-thumbs__slide">
                    <div class="case-thumb ">
                        <img data-toggle-class="visible" data-src="<?php echo get_template_directory_uri(); ?>/images/e2a030551726a2c1d4cde79eec714be5.JPG" alt="1" class="lozad visible" src="<?php echo get_template_directory_uri(); ?>/images/e2a030551726a2c1d4cde79eec714be5.JPG" data-loaded="true">
                        <span>Островская Евгения</span>
                    </div>
                    </div>
                    <div class="cases-thumbs__slide">
                    <div class="case-thumb ">
                        <img data-toggle-class="visible" data-src="<?php echo get_template_directory_uri(); ?>/images/d395209337c694452e6de303fbbcb9a4.jpg" alt="1" class="lozad visible" src="<?php echo get_template_directory_uri(); ?>/images/d395209337c694452e6de303fbbcb9a4.jpg" data-loaded="true">
                        <span>Владимир Кусакин</span>
                    </div>
                    </div>
                    <div class="cases-thumbs__slide ">
                    <div class="case-thumb ">
                        <img data-toggle-class="visible" data-src="<?php echo get_template_directory_uri(); ?>/images/2ced88120bcd8301db49b305c7553cfb.jpg" alt="1" class="lozad visible" src="<?php echo get_template_directory_uri(); ?>/images/2ced88120bcd8301db49b305c7553cfb.jpg" data-loaded="true">
                        <span>Смелов Артем</span>
                    </div>
                    </div>
                    <div class="cases-thumbs__slide">
                    <div class="case-thumb ">
                        <img data-toggle-class="visible" data-src="<?php echo get_template_directory_uri(); ?>/images/f0e6fd06f4c5db3a9e58e70e472c50c2.jpg" alt="1" class="lozad visible" src="<?php echo get_template_directory_uri(); ?>/images/f0e6fd06f4c5db3a9e58e70e472c50c2.jpg" data-loaded="true">
                        <span>Ольга Максимова</span>
                    </div>
                    </div>
                    <div class="cases-thumbs__slide">
                    <div class="case-thumb ">
                        <img data-toggle-class="visible" data-src="<?php echo get_template_directory_uri(); ?>/images/80_80_240cd750bba9870f18aada2478b24840a/0d0cf3f8acc695de28b7bd12e0158a34.JPG" alt="1" class="lozad">
                        <span>Митрош Гера</span>
                    </div>
                    </div>
            </div>
            <div class="cases">
                <div class="case row active">
                    <div class="grid-6 grid-12_m">
                        <div class="twentytwenty-wrapper twentytwenty-horizontal">
                        <div class="case__ba twentytwenty-container" style="height: 500px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/e68bdcea71d4f09f1e5e2606f9966559.JPG" data-src="<?php echo get_template_directory_uri(); ?>/images/e68bdcea71d4f09f1e5e2606f9966559.JPG" alt="до" class="lozad twentytwenty-before" style="clip: rect(0px, 367.5px, 500px, 0px);" data-loaded="true">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/5833d3dd2fd4c193395913992dbd12c8.JPG" data-src="<?php echo get_template_directory_uri(); ?>/images/5833d3dd2fd4c193395913992dbd12c8.JPG" alt="псоле" class="lozad twentytwenty-after" style="clip: rect(0px, 735px, 500px, 367.5px);" data-loaded="true">
                            <div class="twentytwenty-handle" style="left: 367.5px;"><span class="twentytwenty-left-arrow"></span><span class="twentytwenty-right-arrow"></span></div>
                        </div>
                        </div>
                    </div>
                    <div class="grid-6 grid-12_m">
                        <div class="case__info">
                        <div class="case__title">Приобретение душевной молодости и уверенности через виниры</div>
                        <div class="user-content case__descr">
                            1. Профессиональная гигиена полости рта<br>
                            2. Лечение зубов и замена старых пломб.<br>
                            3. 3D диагностика<br>
                            4. Wax app (восковое моделирование)<br>
                            5. 28 керамический ультратонких виниров					
                        </div>
                        <div class="case__bottom">
                            <div class="case__process">
                                <div class="h4">Процесс работы</div>
                                <div class="case__process__wall">
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/8b72be17c839951f02f7b6f9e52c8079.JPG" class="fancy" data-fancybox="124">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/8b72be17c839951f02f7b6f9e52c8079.JPG" data-src="<?php echo get_template_directory_uri(); ?>/images/8b72be17c839951f02f7b6f9e52c8079.JPG" alt="процесс" class="lozad" data-loaded="true">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/c91478fa5fb489b3ac67d6573551fff0.JPG" class="fancy" data-fancybox="124">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/c91478fa5fb489b3ac67d6573551fff0.JPG" data-src="<?php echo get_template_directory_uri(); ?>/images/c91478fa5fb489b3ac67d6573551fff0.JPG" alt="процесс" class="lozad" data-loaded="true">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/481d3bae6b1a115ce416e7668863b98c.JPG" class="fancy" data-fancybox="124">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/481d3bae6b1a115ce416e7668863b98c.JPG" data-src="<?php echo get_template_directory_uri(); ?>/images/481d3bae6b1a115ce416e7668863b98c.JPG" alt="процесс" class="lozad" data-loaded="true">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/dcad099319e3f1f9872e2ab47ae673ba.JPG" class="fancy" data-fancybox="124">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/dcad099319e3f1f9872e2ab47ae673ba.JPG" data-src="<?php echo get_template_directory_uri(); ?>/images/dcad099319e3f1f9872e2ab47ae673ba.JPG" alt="процесс" class="lozad" data-loaded="true">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/486e8a4f0126b35e83929c4ada4296b6.JPG" class="fancy" data-fancybox="124">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/486e8a4f0126b35e83929c4ada4296b6.JPG" data-src="<?php echo get_template_directory_uri(); ?>/images/486e8a4f0126b35e83929c4ada4296b6.JPG" alt="процесс" class="lozad" data-loaded="true">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/b02c62eb462b751f26297a3ec4db8ce1.JPG" class="fancy" data-fancybox="124">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/b02c62eb462b751f26297a3ec4db8ce1.JPG" data-src="<?php echo get_template_directory_uri(); ?>/images/b02c62eb462b751f26297a3ec4db8ce1.JPG" alt="процесс" class="lozad" data-loaded="true">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/a294ca9cc9f18ce7734a035fe7e0c826.JPG" class="fancy" data-fancybox="124">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/a294ca9cc9f18ce7734a035fe7e0c826.JPG" data-src="<?php echo get_template_directory_uri(); ?>/images/a294ca9cc9f18ce7734a035fe7e0c826.JPG" alt="процесс" class="lozad" data-loaded="true">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/e9949278255490caaf138dec93e9f261.JPG" class="fancy" data-fancybox="124">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/e9949278255490caaf138dec93e9f261.JPG" data-src="<?php echo get_template_directory_uri(); ?>/images/e9949278255490caaf138dec93e9f261.JPG" alt="процесс" class="lozad" data-loaded="true">
                                    </a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="case row ">
                    <div class="grid-6 grid-12_m">
                        <div class="twentytwenty-wrapper twentytwenty-horizontal">
                        <div class="case__ba twentytwenty-container" style="height: 0px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/ba_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/735_500_240cd750bba9870f18aada2478b24840a/94b7112dcf87bd5399ed30c672a25930.JPG" alt="до" class="lozad twentytwenty-before" style="clip: rect(0px, 0px, 0px, 0px);">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/ba_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/735_500_240cd750bba9870f18aada2478b24840a/4df6c0c117dcb4ca5d3fcd3e5081fea1.JPG" alt="псоле" class="lozad twentytwenty-after" style="clip: rect(0px, 0px, 0px, 0px);">
                            <div class="twentytwenty-handle" style="left: 0px;"><span class="twentytwenty-left-arrow"></span><span class="twentytwenty-right-arrow"></span></div>
                        </div>
                        </div>
                    </div>
                    <div class="grid-6 grid-12_m">
                        <div class="case__info">
                        <div class="case__title">Виниры как машина времени </div>
                        <div class="user-content case__descr">
                            1. Профессиональная гигиена полости рта<br>
                            2. Санация полости рта<br>
                            3. Пластика мягких тканей<br>
                            4. 3D сканирование и виртуальное планирование будущей улыбки<br>
                            5. Изготовление 2 индивидуальных циркониевых абатмента<br>
                            6. 28 керамических виниров 					
                        </div>
                        <div class="case__bottom">
                            <div class="case__process">
                                <div class="h4">Процесс работы</div>
                                <div class="case__process__wall">
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/01dd580da9778e3d80c3809a5b0bef10.JPG" class="fancy" data-fancybox="125">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/01dd580da9778e3d80c3809a5b0bef10.JPG" alt="процесс" class="lozad">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/c20e07857d8c772ebac957bd1a2a310d.JPG" class="fancy" data-fancybox="125">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/c20e07857d8c772ebac957bd1a2a310d.JPG" alt="процесс" class="lozad">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/a25a7a2411c1b1ee6a2a8e720f2f9128.JPG" class="fancy" data-fancybox="125">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/a25a7a2411c1b1ee6a2a8e720f2f9128.JPG" alt="процесс" class="lozad">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/fbd4b8231594a122977e14c6c312d97e.JPG" class="fancy" data-fancybox="125">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/fbd4b8231594a122977e14c6c312d97e.JPG" alt="процесс" class="lozad">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/f4e76df453c67bd3ef4ad2fc34d08789.JPG" class="fancy" data-fancybox="125">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/f4e76df453c67bd3ef4ad2fc34d08789.JPG" alt="процесс" class="lozad">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/9d385a91133ba53f4520cce4b0299518.JPG" class="fancy" data-fancybox="125">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/9d385a91133ba53f4520cce4b0299518.JPG" alt="процесс" class="lozad">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/05597e51f923721b2afd38a7b616a2a4.JPG" class="fancy" data-fancybox="125">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/05597e51f923721b2afd38a7b616a2a4.JPG" alt="процесс" class="lozad">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/39e0f650e1b52511993baebe2c15e152.JPG" class="fancy" data-fancybox="125">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/39e0f650e1b52511993baebe2c15e152.JPG" alt="процесс" class="lozad">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/4426a264d6df96e9f5ad56ea2a64c86c.JPG" class="fancy" data-fancybox="125">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/4426a264d6df96e9f5ad56ea2a64c86c.JPG" alt="процесс" class="lozad">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/31b4eea1de054de965d10243b5b293b6.JPG" class="fancy" data-fancybox="125">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/31b4eea1de054de965d10243b5b293b6.JPG" alt="процесс" class="lozad">
                                    </a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="case row ">
                    <div class="grid-6 grid-12_m">
                        <div class="twentytwenty-wrapper twentytwenty-horizontal">
                        <div class="case__ba twentytwenty-container" style="height: 0px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/ba_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/47feb0e4dbf6bb8949969365b8ee636b.jpg" alt="до" class="lozad twentytwenty-before" style="clip: rect(0px, 0px, 0px, 0px);">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/ba_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/61762c843ddff5505b74ffbc68a357b4.jpg" alt="псоле" class="lozad twentytwenty-after" style="clip: rect(0px, 0px, 0px, 0px);">
                            <div class="twentytwenty-handle" style="left: 0px;"><span class="twentytwenty-left-arrow"></span><span class="twentytwenty-right-arrow"></span></div>
                        </div>
                        </div>
                    </div>
                    <div class="grid-6 grid-12_m">
                        <div class="case__info">
                        <div class="case__title">Новая жизнь за 10 дней</div>
                        <div class="case__services">
                            <span>Одномоментная Имплантация </span>
                        </div>
                        <div class="user-content case__descr">
                            1. Профессиональная гигиена полости рта <br>
                            2. Виртуальное (3D) планирование установки 6 имплантатов Straumann (Штрауман) <br>
                            3. Удаление 18 зубом за 20 минут<br>
                            4. Проведена имплантация 6 имплантов одномоментно на нижней челюсти<br>
                            5. Костная пластика   <br>
                            6. Мягкотканная пластика<br>
                            7. Коронки на имплантах через 10 дней 					
                        </div>
                        <div class="case__bottom">
                            <div class="case__process">
                                <div class="h4">Процесс работы</div>
                                <div class="case__process__wall">
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/137a5e9cf4085331385e9250870e2bcc.jpg" class="fancy" data-fancybox="43">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/137a5e9cf4085331385e9250870e2bcc.jpg" alt="процесс" class="lozad">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/6a86d7cddf01f3fbf55057c2c405101a.JPG" class="fancy" data-fancybox="43">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/6a86d7cddf01f3fbf55057c2c405101a.JPG" alt="процесс" class="lozad">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/09c6d804fffae5bfa65b0795cbae6d21.jpg" class="fancy" data-fancybox="43">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/09c6d804fffae5bfa65b0795cbae6d21.jpg" alt="процесс" class="lozad">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/e52bd1917965f4571a262b84bb355024.jpg" class="fancy" data-fancybox="43">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/e52bd1917965f4571a262b84bb355024.jpg" alt="процесс" class="lozad">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/05f42480a583bac508b3ba700c1cefb6.JPG" class="fancy" data-fancybox="43">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/05f42480a583bac508b3ba700c1cefb6.JPG" alt="процесс" class="lozad">
                                    </a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="case row ">
                    <div class="grid-6 grid-12_m">
                        <div class="twentytwenty-wrapper twentytwenty-horizontal">
                        <div class="case__ba twentytwenty-container" style="height: 0px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/ba_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/83fcb658a40b91a402d9cb1090ec2fa3.jpg" alt="до" class="lozad twentytwenty-before" style="clip: rect(0px, 0px, 0px, 0px);">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/ba_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/3c8ab8d52f5c5260775c86e2af43b5e5.jpg" alt="псоле" class="lozad twentytwenty-after" style="clip: rect(0px, 0px, 0px, 0px);">
                            <div class="twentytwenty-handle" style="left: 0px;"><span class="twentytwenty-left-arrow"></span><span class="twentytwenty-right-arrow"></span></div>
                        </div>
                        </div>
                    </div>
                    <div class="grid-6 grid-12_m">
                        <div class="case__info">
                        <div class="case__title">Сохранение зубов в здоровом состоянии</div>
                        <div class="case__services">
                            <span>Виниры Импланты</span>
                        </div>
                        <div class="user-content case__descr">
                            1. Профессиональное отбеливание полости рта<br>
                            2. 3D диагностика и планирование лечения<br>
                            3. Wax-up (Восковое моделирование) 28 зубов<br>
                            4. Установка 4 имплантатов Штрауман (Швейцария)<br>
                            5. Изготовление 24 керамических виниров и 4 циркониевых коронок на имплантах 					
                        </div>
                        <div class="case__bottom">
                            <div class="case__process">
                                <div class="h4">Процесс работы</div>
                                <div class="case__process__wall">
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/5233b00c635e81b803f13f7b0691e8f2.JPG" class="fancy" data-fancybox="10">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/5233b00c635e81b803f13f7b0691e8f2.JPG" alt="процесс" class="lozad">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/a4342bae360f9c9f13464bc79882ccab.JPG" class="fancy" data-fancybox="10">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/a4342bae360f9c9f13464bc79882ccab.JPG" alt="процесс" class="lozad">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/30bd375864e7611b98ee799034d10104.JPG" class="fancy" data-fancybox="10">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/30bd375864e7611b98ee799034d10104.JPG" alt="процесс" class="lozad">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/766a9c8a3254f89dc9b611b14812e361.JPG" class="fancy" data-fancybox="10">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/766a9c8a3254f89dc9b611b14812e361.JPG" alt="процесс" class="lozad">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/057a6e613998bdab832ca900dd564349.JPG" class="fancy" data-fancybox="10">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/057a6e613998bdab832ca900dd564349.JPG" alt="процесс" class="lozad">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/349706a2aca1de5c05c5629d8d2ca7df.JPG" class="fancy" data-fancybox="10">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/349706a2aca1de5c05c5629d8d2ca7df.JPG" alt="процесс" class="lozad">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/7eadf5eaa5833226ed6f50a918c8370a.JPG" class="fancy" data-fancybox="10">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/7eadf5eaa5833226ed6f50a918c8370a.JPG" alt="процесс" class="lozad">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/82cb69185766f94fa77326401f92c063.JPG" class="fancy" data-fancybox="10">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/82cb69185766f94fa77326401f92c063.JPG" alt="процесс" class="lozad">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/f17faa8c0f3659edf5f9e78e6fbc2e7c.JPG" class="fancy" data-fancybox="10">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/f17faa8c0f3659edf5f9e78e6fbc2e7c.JPG" alt="процесс" class="lozad">
                                    </a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="case row ">
                    <div class="grid-6 grid-12_m">
                        <div class="twentytwenty-wrapper twentytwenty-horizontal">
                        <div class="case__ba twentytwenty-container" style="height: 0px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/ba_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/c4ee4b9d2e0cf51076253c7c385d47fc.jpg" alt="до" class="lozad twentytwenty-before" style="clip: rect(0px, 0px, 0px, 0px);">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/ba_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/69e4c505eb51afa8144a87775e740c76.jpg" alt="псоле" class="lozad twentytwenty-after" style="clip: rect(0px, 0px, 0px, 0px);">
                            <div class="twentytwenty-handle" style="left: 0px;"><span class="twentytwenty-left-arrow"></span><span class="twentytwenty-right-arrow"></span></div>
                        </div>
                        </div>
                    </div>
                    <div class="grid-6 grid-12_m">
                        <div class="case__info">
                        <div class="case__title">Голливудская улыбка </div>
                        <div class="case__services">
                            <span>Виниры и импланты</span>
                        </div>
                        <div class="user-content case__descr">
                            1. Профессиональная гигиена полости рта<br>
                            2. Профессиональное отбеливание Zoom 4<br>
                            3. Wac-up 28 зубов (восковое моделирование)<br>
                            4. Тест-драйв голливудской улыьки<br>
                            5. Установка 2 имплантов Straumann (Швейцария)<br>
                            6. Изготовлен циркониевый абатмент на 2 имплантатах<br>
                            7. Изготовление 28 белоснежных виниров 					
                        </div>
                        <div class="case__bottom">
                            <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="video-block fancy-video">
                                <div class="video-block__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/video-thumb.jpg" alt="video">
                                </div>
                                <i class="i-play video-block__icon"></i>
                            </a>
                            <div class="case__process">
                                <div class="h4">Процесс работы</div>
                                <div class="case__process__wall">
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/b0e0024ad68c79f53dcd4a9a3f9e8ec1.JPG" class="fancy" data-fancybox="9">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/b0e0024ad68c79f53dcd4a9a3f9e8ec1.JPG" alt="процесс" class="lozad">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/1144ccde1a3181f4b40c676935811a18.JPG" class="fancy" data-fancybox="9">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/1144ccde1a3181f4b40c676935811a18.JPG" alt="процесс" class="lozad">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/f96075d92cec34f205cb1b6178d8c0c6.JPG" class="fancy" data-fancybox="9">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/f96075d92cec34f205cb1b6178d8c0c6.JPG" alt="процесс" class="lozad">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/9d7c32d042ca454993bae2e2f2a60d6e.JPG" class="fancy" data-fancybox="9">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/9d7c32d042ca454993bae2e2f2a60d6e.JPG" alt="процесс" class="lozad">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/d6a41ad8dc8e9d891e631415a2434679.JPG" class="fancy" data-fancybox="9">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/d6a41ad8dc8e9d891e631415a2434679.JPG" alt="процесс" class="lozad">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/6fd6629bbfc71d65a4ad4635cfa4e331.JPG" class="fancy" data-fancybox="9">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/6fd6629bbfc71d65a4ad4635cfa4e331.JPG" alt="процесс" class="lozad">
                                    </a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="case row ">
                    <div class="grid-6 grid-12_m">
                        <div class="twentytwenty-wrapper twentytwenty-horizontal">
                        <div class="case__ba twentytwenty-container" style="height: 0px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/ba_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/735_500_240cd750bba9870f18aada2478b24840a/9850f69b0755e60b530ccb8ebc1dd088.JPG" alt="до" class="lozad twentytwenty-before" style="clip: rect(0px, 0px, 0px, 0px);">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/ba_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/735_500_240cd750bba9870f18aada2478b24840a/825ef5c7a383a2135940e843c6f57a7b.JPG" alt="псоле" class="lozad twentytwenty-after" style="clip: rect(0px, 0px, 0px, 0px);">
                            <div class="twentytwenty-handle" style="left: 0px;"><span class="twentytwenty-left-arrow"></span><span class="twentytwenty-right-arrow"></span></div>
                        </div>
                        </div>
                    </div>
                    <div class="grid-6 grid-12_m">
                        <div class="case__info">
                        <div class="case__title">Минус 10 лет  за 1 год </div>
                        <div class="case__services">
                            <span>Естественная Голливудская улыбка </span>
                        </div>
                        <div class="user-content case__descr">
                            1. Профессиональная гигиена полости рта<br>
                            2. Санация полости рта<br>
                            3. Предварительное лечение на Элайнерах (выравнивание зубов)<br>
                            4. Wax-up (Восковое моделирование) голливудской улыбки<br>
                            5. Установлен 1 индивидуальный циркониевый абатмент на имплантате Straumann (Швейцария) <br>
                            6. 27 керамических виниров и 1 коронка на имплантате   					
                        </div>
                        <div class="case__bottom">
                            <div class="case__process">
                                <div class="h4">Процесс работы</div>
                                <div class="case__process__wall">
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/6653d32200a1f19c71ac1efdfac76fb9.JPG" class="fancy" data-fancybox="60">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/6653d32200a1f19c71ac1efdfac76fb9.JPG" alt="процесс" class="lozad">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/559363d2cc4fcdfd671153f00788eb50.JPG" class="fancy" data-fancybox="60">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/559363d2cc4fcdfd671153f00788eb50.JPG" alt="процесс" class="lozad">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/81904b1ffef42a6c231e6c33be359eeb.JPG" class="fancy" data-fancybox="60">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/81904b1ffef42a6c231e6c33be359eeb.JPG" alt="процесс" class="lozad">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/73a9abdf803ca6478d685ae690fc9c37.JPG" class="fancy" data-fancybox="60">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/73a9abdf803ca6478d685ae690fc9c37.JPG" alt="процесс" class="lozad">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/96e5c7fdfc7860749c4fb7e9e7fc025e.JPG" class="fancy" data-fancybox="60">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/96e5c7fdfc7860749c4fb7e9e7fc025e.JPG" alt="процесс" class="lozad">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/images/259effc96c6400111c85908033838f69.JPG" class="fancy" data-fancybox="60">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pr_thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/259effc96c6400111c85908033838f69.JPG" alt="процесс" class="lozad">
                                    </a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section class="s-promo is__nav-section" id="s-promo">
            <div class="container">
            <div class="sec-title sec-title--center">
                <div class="h2">
                    Lorem ipsum dolor sit amet.			
                </div>
            </div>
            <div class="border-block promo-block">
                <div class="border-block__content">
                    <div class="promo-slider slider-arrows-gold">
                    <div class="promo-slider__slide ">
                        <div class="promo">
                            <div class="promo__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/73ddc0980b66b4ff53353118a1a808f8.png" data-src="<?php echo get_template_directory_uri(); ?>/images/73ddc0980b66b4ff53353118a1a808f8.png" data-toggle-class="visible" alt="promo" class="lozad visible" data-loaded="true">
                            </div>
                            <div class="promo__content">
                                <div class="promo__title">Имплантация "Всё на 4-х" Straumann</div>
                                <div class="promo__list-title">В цену входят:</div>
                                <ul class="list-checked promo__list">
                                    <li>Установка 4-х имплантов</li>
                                    <li>Изготовление и установка протеза</li>
                                    <li>Работа хирурга-имплантолога и ортопеда</li>
                                    <li>Европейская анестезия и необходимые материалы</li>
                                </ul>
                                <a href="#" class="btn fancy-modal" data-src="#modal-promo-23">Участвовать в акции</a>
                            </div>
                        </div>
                        <div id="modal-promo-23" class="modal modal-order border-block">
                            <div class="border-block__content">
                                <form class="ajax-form vertical-form" autocomplete="off">
                                    <input type="hidden" value="Участие в акции" name="form_subject">
                                    <input type="hidden" value="Имплантация " Всё="" на="" 4-х"="" straumann"="" name="form_subject" data-label="Акция">
                                    <div class="form-header">
                                    <div class="form-header__bubble">Наш администратор перезвонит вам в течение 2 минут.</div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/bubble-man.jpg" alt="man" class="form-header__man">
                                    </div>
                                    <input type="text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя" class="input-text">
                                    <input type="tel" name="user_tel" placeholder="Телефон*" data-label="Телефон" class="input-text" data-req="true" autocomplete="off" maxlength="18">
                                    <button type="submit" class="btn">Отправить</button>
                                    <div class="form-policy">Нажимая кнопку, вы соглашаетесь с <a href="/upload/uf/c9d/c9db88e2565f1244bcec2fc31c1dbd4e.pdf" target="_blank">политикой конфиденциальности</a>.</div>
                                </form>
                            </div>
                        </div>
                        </div>
                        <div class="promo-slider__slide">
                        <div class="promo">
                            <div class="promo__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/5e519c30874aa106d4ae0cdc7f6eacad.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/5e519c30874aa106d4ae0cdc7f6eacad.jpg" data-toggle-class="visible" alt="promo" class="lozad visible" data-loaded="true">
                            </div>
                            <div class="promo__content">
                                <div class="promo__title">Имплантация "Всё на 4-х" Dentium SuperLine</div>
                                <div class="promo__list-title">В цену входит:</div>
                                <ul class="list-checked promo__list">
                                    <li>Установка 4-х имплантов</li>
                                    <li>Изготовление и установка протеза</li>
                                    <li>Работа хирурга-имплантолога и ортопеда</li>
                                    <li>Европейская анестезия и необходимые материалы</li>
                                </ul>
                                <a href="#" class="btn fancy-modal" data-src="#modal-promo-174">Участвовать в акции</a>
                            </div>
                        </div>
                        <div id="modal-promo-174" class="modal modal-order border-block">
                            <div class="border-block__content">
                                <form class="ajax-form vertical-form" autocomplete="off">
                                    <input type="hidden" value="Участие в акции" name="form_subject">
                                    <input type="hidden" value="Имплантация " Всё="" на="" 4-х"="" dentium="" superline"="" name="form_subject" data-label="Акция">
                                    <div class="form-header">
                                    <div class="form-header__bubble">Наш администратор перезвонит вам в течение 2 минут.</div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/bubble-man.jpg" alt="man" class="form-header__man">
                                    </div>
                                    <input type="text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя" class="input-text">
                                    <input type="tel" name="user_tel" placeholder="Телефон*" data-label="Телефон" class="input-text" data-req="true" autocomplete="off" maxlength="18">
                                    <button type="submit" class="btn">Отправить</button>
                                    <div class="form-policy">Нажимая кнопку, вы соглашаетесь с <a href="/upload/uf/c9d/c9db88e2565f1244bcec2fc31c1dbd4e.pdf" target="_blank">политикой конфиденциальности</a>.</div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section class="s-reviews is__nav-section" id="s-reviews">
            <div class="container">
            <div class="sec-title sec-title--center">
                <div class="h2">
                    Lorem ipsum dolor sit amet.			
                </div>
            </div>
            <div class="row">
                <div class="grid-3 grid-6_m">
                    <a href="<?php echo get_template_directory_uri(); ?>/images/58dadc9fed86aed566edea1b9787b068.jpeg" class="review review__insta fancy">
                        <div class="review__header">Елена Владимировна</div>
                        <div class="review__photo">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/58dadc9fed86aed566edea1b9787b068.jpeg" data-src="<?php echo get_template_directory_uri(); ?>/images/58dadc9fed86aed566edea1b9787b068.jpeg" alt="Елена Владимировна" class="lozad" data-loaded="true">
                        </div>
                        <span class="review__link blue-link">Подробнее</span>
                    </a>
                </div>
                <div class="grid-3 grid-6_m">
                    <a href="https://youtu.be/9JwCMeWNFSo" class="review review__insta fancy-video">
                        <div class="review__header">Екатерина </div>
                        <div class="video-block">
                        <div class="video-block__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/7bbdd61cfa2418c47a3f8ecf755d5d5d.jpeg" data-src="<?php echo get_template_directory_uri(); ?>/images/7bbdd61cfa2418c47a3f8ecf755d5d5d.jpeg" alt="Екатерина " class="lozad" data-loaded="true">
                        </div>
                        <i class="i-play video-block__icon video-block__icon--bottom"></i>
                        </div>
                        <span class="review__video-title"></span>
                        <span class="review__link blue-link">Подробнее</span>
                    </a>
                </div>
                <div class="grid-3 grid-6_m">
                    <a href="https://youtu.be/w3hqAkAzKhg" class="review review__insta fancy-video">
                        <div class="review__header">Наталья</div>
                        <div class="video-block">
                        <div class="video-block__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/a323d3db6eadde47bd1e6c4b58246e0d.jpeg" data-src="<?php echo get_template_directory_uri(); ?>/images/a323d3db6eadde47bd1e6c4b58246e0d.jpeg" alt="Наталья" class="lozad" data-loaded="true">
                        </div>
                        <i class="i-play video-block__icon video-block__icon--bottom"></i>
                        </div>
                        <span class="review__video-title"></span>
                        <span class="review__link blue-link">Подробнее</span>
                    </a>
                </div>
                <div class="grid-3 grid-6_m">
                    <a href="<?php echo get_template_directory_uri(); ?>/images/b77fc3491df8267c9cd4b97c2ad4dd75.jpeg" class="review review__insta fancy">
                        <div class="review__header"> Екатерина</div>
                        <div class="review__photo">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/b77fc3491df8267c9cd4b97c2ad4dd75.jpeg" data-src="<?php echo get_template_directory_uri(); ?>/images/b77fc3491df8267c9cd4b97c2ad4dd75.jpeg" alt=" Екатерина" class="lozad" data-loaded="true">
                        </div>
                        <span class="review__link blue-link">Подробнее</span>
                    </a>
                </div>
                <div class="grid-3 grid-6_m">
                    <a href="https://youtu.be/CmvgYHrD0uY" class="review review__insta fancy-video">
                        <div class="review__header">Илья Кусакин</div>
                        <div class="video-block">
                        <div class="video-block__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/2cb6941488b21f3fdd014cc9f6b91fd2.jpeg" data-src="<?php echo get_template_directory_uri(); ?>/images/2cb6941488b21f3fdd014cc9f6b91fd2.jpeg" alt="Илья Кусакин" class="lozad" data-loaded="true">
                        </div>
                        <i class="i-play video-block__icon video-block__icon--bottom"></i>
                        </div>
                        <span class="review__video-title"></span>
                        <span class="review__link blue-link">Подробнее</span>
                    </a>
                </div>
                <div class="grid-3 grid-6_m">
                    <a href="https://youtu.be/WbIOL0IlrvQ" class="review review__insta fancy-video">
                        <div class="review__header"> Алла Константиновна </div>
                        <div class="video-block">
                        <div class="video-block__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/8670dfeac0e75c174a52286ac4d63c36.jpeg" data-src="<?php echo get_template_directory_uri(); ?>/images/8670dfeac0e75c174a52286ac4d63c36.jpeg" alt=" Алла Константиновна " class="lozad" data-loaded="true">
                        </div>
                        <i class="i-play video-block__icon video-block__icon--bottom"></i>
                        </div>
                        <span class="review__video-title">Рассказ о том как меняется жизнь</span>
                        <span class="review__link blue-link">Подробнее</span>
                    </a>
                </div>
                <div class="grid-3 grid-6_m">
                    <a href="https://youtu.be/0zkuIVMz5es" class="review review__insta fancy-video">
                        <div class="review__header">Владимир Ильич Кусакин</div>
                        <div class="video-block">
                        <div class="video-block__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/1d2706b3f49ca48ddc2c311f16811704.jpeg" data-src="<?php echo get_template_directory_uri(); ?>/images/1d2706b3f49ca48ddc2c311f16811704.jpeg" alt="Владимир Ильич Кусакин" class="lozad" data-loaded="true">
                        </div>
                        <i class="i-play video-block__icon video-block__icon--bottom"></i>
                        </div>
                        <span class="review__video-title"></span>
                        <span class="review__link blue-link">Подробнее</span>
                    </a>
                </div>
                <div class="grid-3 grid-6_m">
                    <a href="https://youtu.be/8gyBcNHirdk" class="review review__insta fancy-video">
                        <div class="review__header">Катя </div>
                        <div class="video-block">
                        <div class="video-block__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/f84bdfe1f9a06c8fc680bd77783611b5.jpeg" data-src="<?php echo get_template_directory_uri(); ?>/images/f84bdfe1f9a06c8fc680bd77783611b5.jpeg" alt="Катя " class="lozad" data-loaded="true">
                        </div>
                        <i class="i-play video-block__icon video-block__icon--bottom"></i>
                        </div>
                        <span class="review__video-title"></span>
                        <span class="review__link blue-link">Подробнее</span>
                    </a>
                </div>
            </div>
            <div class="reviews-hidden">
                <div class="row">
                    <div class="grid-3 grid-6_m">
                        <a href="https://youtu.be/Gv3C5vDNfSw" class="review review__insta fancy-video">
                        <div class="review__header">Илья Кусакин </div>
                        <div class="video-block">
                            <div class="video-block__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/video-thumb.png" data-src="<?php echo get_template_directory_uri(); ?>/images/6c5569bc73ce30617c03e5631b925a31.jpeg" alt="Илья Кусакин " class="lozad">
                            </div>
                            <i class="i-play video-block__icon video-block__icon--bottom"></i>
                        </div>
                        <span class="review__video-title"></span>
                        <span class="review__link blue-link">Подробнее</span>
                        </a>
                    </div>
                    <div class="grid-3 grid-6_m">
                        <a href="#" class="review review__insta fancy-modal" data-src="#modal-review-113">
                        <div class="review__header">Ольга</div>
                        <div class="review__text">
                            В клинику обратилась впервые, попала сюда случайно и все получилось удачно. Мне ставили пломбу между зубами, все прошло хорошо. Врачи внимательные и доброжелательные, у меня было два доктора и обоими я осталась очень довольна. Оборудование кабинета в хорошем состоянии, в клинике чисто и, вообще, у ...								
                        </div>
                        <span class="review__link blue-link">Подробнее</span>
                        </a>
                        <div class="modal modal--review" id="modal-review-113">
                        <div class="review__header">Ольга</div>
                        <div class="review__text">
                            В клинику обратилась впервые, попала сюда случайно и все получилось удачно. Мне ставили пломбу между зубами, все прошло хорошо. Врачи внимательные и доброжелательные, у меня было два доктора и обоими я осталась очень довольна. Оборудование кабинета в хорошем состоянии, в клинике чисто и, вообще, у них все в порядке.								
                        </div>
                        </div>
                    </div>
                    <div class="grid-3 grid-6_m">
                        <a href="https://youtu.be/LFoJKKREj58" class="review review__insta fancy-video">
                        <div class="review__header">Никита</div>
                        <div class="video-block">
                            <div class="video-block__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/video-thumb.png" data-src="<?php echo get_template_directory_uri(); ?>/images/c5b2ab7d9235b5f4d5b7e441605699ed.jpeg" alt="Никита" class="lozad">
                            </div>
                            <i class="i-play video-block__icon video-block__icon--bottom"></i>
                        </div>
                        <span class="review__video-title"></span>
                        <span class="review__link blue-link">Подробнее</span>
                        </a>
                    </div>
                    <div class="grid-3 grid-6_m">
                        <a href="https://youtu.be/ih4RNpLq06s" class="review review__insta fancy-video">
                        <div class="review__header">Эдуард </div>
                        <div class="video-block">
                            <div class="video-block__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/video-thumb.png" data-src="<?php echo get_template_directory_uri(); ?>/images/3ac00c76a7dc91ff53ccb7019f583657.jpeg" alt="Эдуард " class="lozad">
                            </div>
                            <i class="i-play video-block__icon video-block__icon--bottom"></i>
                        </div>
                        <span class="review__video-title"></span>
                        <span class="review__link blue-link">Подробнее</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="reviews-more"><span>Смотреть еще отзывы</span> <i class="i-down"></i></div>
            </div>
        </section>
        <section class="s-team lozad is__nav-section" id="s-team" data-background-image="<?php echo get_template_directory_uri(); ?>/images/bg.jpg" data-loaded="true" style="background-image: url(&quot;<?php echo get_template_directory_uri(); ?>/images/bg-doctors.jpg&quot;);">
            <div class="container">
            <div class="sec-title sec-title--arrows">
                <div class="h2">
                    Lorem ipsum dolor sit amet.
                </div>
            </div>
            <div class="team-thumbs slider-top-arrows" >
                <div class="team-thumbs__slide">
                    <div class="team-thumb active">
                        <img data-toggle-class="visible" data-src="<?php echo get_template_directory_uri(); ?>/images/4e68481976d8698302f56d0edffc633e.jpg" alt="Магомед <br>Хасенов " class="lozad visible" src="<?php echo get_template_directory_uri(); ?>/images/4e68481976d8698302f56d0edffc633e.jpg" data-loaded="true">
                        <span>Магомед <br>Хасенов </span>
                    </div>
                    </div>
                    <div class="team-thumbs__slide">
                    <div class="team-thumb ">
                        <img data-toggle-class="visible" data-src="<?php echo get_template_directory_uri(); ?>/images/56ebeb25c1f25cfae1510df8fe74b9cd.jpg" alt="Ольга <br>Мустафаева" class="lozad visible" src="<?php echo get_template_directory_uri(); ?>/images/56ebeb25c1f25cfae1510df8fe74b9cd.jpg" data-loaded="true">
                        <span>Ольга <br>Мустафаева</span>
                    </div>
                    </div>
                    <div class="team-thumbs__slide">
                    <div class="team-thumb ">
                        <img data-toggle-class="visible" data-src="<?php echo get_template_directory_uri(); ?>/images/a2e5ac605a582803462fdc2b906a06a0.jpg" alt="Мурад  <br>Ахмедов" class="lozad visible" src="<?php echo get_template_directory_uri(); ?>/images/a2e5ac605a582803462fdc2b906a06a0.jpg" data-loaded="true">
                        <span>Мурад  <br>Ахмедов</span>
                    </div>
                    </div>
                    <div class="team-thumbs__slide">
                    <div class="team-thumb ">
                        <img data-toggle-class="visible" data-src="<?php echo get_template_directory_uri(); ?>/images/c2198e6368302845c48c9d7761628206.jpg" alt="Аминат <br>Хасенова" class="lozad visible" src="<?php echo get_template_directory_uri(); ?>/images/c2198e6368302845c48c9d7761628206.jpg" data-loaded="true">
                        <span>Аминат <br>Хасенова</span>
                    </div>
                    </div>
                    <div class="team-thumbs__slide" >
                    <div class="team-thumb ">
                        <img data-toggle-class="visible" data-src="<?php echo get_template_directory_uri(); ?>/images/a5d9e81835b98b524097e5b475ef7ca2.png" alt="Тигран <br> Симонян " class="lozad visible" src="<?php echo get_template_directory_uri(); ?>/images/a5d9e81835b98b524097e5b475ef7ca2.png" data-loaded="true">
                        <span>Тигран <br> Симонян </span>
                    </div>
                    </div>
            </div>
            <div class="heroes">
                <div class="hero active">
                    <div class="hero__content">
                        <div class="hero__name">Магомед <br>Алиевич Хасенов</div>
                        <div class="hero__spec">Основатель Smileton Clinik Врач-стоматолог, хирург-ортопед</div>
                        <div class="hero__descr">"Все началось в детстве, с огромного желания помогать и отсутствия слов НЕТ, не Могу перед поставленной задачей. 
                        Любовь с детства к точности и внимание к деталям, привела меня в стоматологию,
                        где я дарю надежду на новую жизнь и гарантию на желание улыбаться 24/7"
                        Стоматолог ортопед-хирург с опытом более 15 000 часов. Основная специализация-эстетическое протезирование и импланты.
                        Более 120 курсов повышения квалификации по всему миру. 
                        Лучший стоматолог страны 2019 году по Версии "Премия Человек Года 2019"
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/f2cffb88ec7004d781a8ba89ede5a759.png" alt="sign" class="hero__sign">
                    </div>
                    <div class="hero__photo">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/aa62267ee7608dc976b6ad736e23d5bf.png" data-src="<?php echo get_template_directory_uri(); ?>/images/aa62267ee7608dc976b6ad736e23d5bf.png" alt="Магомед <br>Хасенов " class="lozad visible" data-toggle-class="visible" data-loaded="true">
                    </div>
                </div>
                <div class="hero ">
                    <div class="hero__content">
                        <div class="hero__name">Ольга Батыровна <br>Мустафаева</div>
                        <div class="hero__spec">Врач-стоматолог, терапевт.</div>
                        <div class="hero__descr">Я с детства хотела быть врачом.  Люблю свою работу за знакомство с новыми людьми, за то, что всегда есть чему учиться и куда расти.Сегодня мне хочется, чтобы люди знали - лечение может быть без страха и боли. Наверное, поэтому она до сих пор для меня не стала рутиной.”
                        Специалист по лечению зубов с микроскопом. Более 10 лет практикую зубосохраняющие методики, успешно лечит кисты, извлекает отломки инструментов из корневых каналов.
                        </div>
                    </div>
                    <div class="hero__photo">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/big-thumb.png" data-src="<?php echo get_template_directory_uri(); ?>/images/80d922c73add3b40ef5b9e444c67c21b.png" alt="Ольга <br>Мустафаева" class="lozad" data-toggle-class="visible">
                    </div>
                </div>
                <div class="hero ">
                    <div class="hero__content">
                        <div class="hero__name">Мурад Нурулисланович <br>Ахмедов</div>
                        <div class="hero__spec">Врач-стоматолог, хирург-ортопед</div>
                        <div class="hero__descr">Наши врачи практикуют как традиционные технологии, так и самые современные методики. В нашей клинике вы всегда можете рассчитывать на теплый прием и качественное лечение даже в самых сложных случаях. Мы часто принимаем пациентов, от которых отказались другие стоматологи, и сохраняем им зубы!</div>
                    </div>
                    <div class="hero__photo">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/big-thumb.png" data-src="<?php echo get_template_directory_uri(); ?>/images/d2d0b5432a378dc0ae9b5eb64988754a.png" alt="Мурад  <br>Ахмедов" class="lozad" data-toggle-class="visible">
                    </div>
                </div>
                <div class="hero ">
                    <div class="hero__content">
                        <div class="hero__name">Аминат Алиевна  <br>Хасенова</div>
                        <div class="hero__spec">Врач-стоматолог, гигиенист-терапевт</div>
                        <div class="hero__descr">Наши врачи практикуют как традиционные технологии, так и самые современные методики. В нашей клинике вы всегда можете рассчитывать на теплый прием и качественное лечение даже в самых сложных случаях. Мы часто принимаем пациентов, от которых отказались другие стоматологи, и сохраняем им зубы!</div>
                    </div>
                    <div class="hero__photo">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/big-thumb.png" data-src="<?php echo get_template_directory_uri(); ?>/images/97f40b64960f743a27bfc187a7caad94.png" alt="Аминат <br>Хасенова" class="lozad" data-toggle-class="visible">
                    </div>
                </div>
                <div class="hero ">
                    <div class="hero__content">
                        <div class="hero__name">Тигран Федяевич <br> Симонян</div>
                        <div class="hero__spec">Врач-стоматолог, ортодонт.</div>
                        <div class="hero__descr">Наши врачи практикуют как традиционные технологии, так и самые современные методики. В нашей клинике вы всегда можете рассчитывать на теплый прием и качественное лечение даже в самых сложных случаях. Мы часто принимаем пациентов, от которых отказались другие стоматологи, и сохраняем им зубы!</div>
                    </div>
                    <div class="hero__photo">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/big-thumb.png" data-src="<?php echo get_template_directory_uri(); ?>/images/09c660e65d47f6e75ff4abbbd563b1c7.png" alt="Тигран <br> Симонян " class="lozad" data-toggle-class="visible">
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section class="s-serts is__nav-section" id="s-serts">
            <div class="container">
            <div class="sec-title sec-title--center">
                <div class="h2">
                    Lorem ipsum dolor sit amet.			
                </div>
                <div class="h4">
                    Lorem ipsum 			
                </div>
            </div>
            <div class="serts-slider">
                <div class="serts-slider__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/bg.jpg" alt="" class="serts-slider__item__bg">
                    <a href="<?php echo get_template_directory_uri(); ?>/images/5a6350e8e04d25624b53e400a278634d.jpg" data-fancybox="serts">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/5a6350e8e04d25624b53e400a278634d.jpg" alt="Сертификат" class="serts-slider__item__sert lozad" src="<?php echo get_template_directory_uri(); ?>/images/5a6350e8e04d25624b53e400a278634d.jpg" data-loaded="true">
                    </a>
                    </div>
                    <div class="serts-slider__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/bg.jpg" alt="" class="serts-slider__item__bg">
                    <a href="<?php echo get_template_directory_uri(); ?>/images/f8d8773b6914d1b1fcf40c75f373a6be.jpg" data-fancybox="serts">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/f8d8773b6914d1b1fcf40c75f373a6be.jpg" alt="Сертификат" class="serts-slider__item__sert lozad" src="<?php echo get_template_directory_uri(); ?>/images/f8d8773b6914d1b1fcf40c75f373a6be.jpg" data-loaded="true">
                    </a>
                    </div>
                    <div class="serts-slider__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/bg.jpg" alt="" class="serts-slider__item__bg">
                    <a href="<?php echo get_template_directory_uri(); ?>/images/dc912c4091a55c2559023f9d83228a4b.jpg" data-fancybox="serts">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/dc912c4091a55c2559023f9d83228a4b.jpg" alt="Сертификат" class="serts-slider__item__sert lozad" src="<?php echo get_template_directory_uri(); ?>/images/dc912c4091a55c2559023f9d83228a4b.jpg" data-loaded="true">
                    </a>
                    </div>
                    <div class="serts-slider__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/bg.jpg" alt="" class="serts-slider__item__bg">
                    <a href="<?php echo get_template_directory_uri(); ?>/images/66e984f230ffe01701cbf1d4aca02d42.jpg" data-fancybox="serts">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/66e984f230ffe01701cbf1d4aca02d42.jpg" alt="Сертификат" class="serts-slider__item__sert lozad" src="<?php echo get_template_directory_uri(); ?>/images/66e984f230ffe01701cbf1d4aca02d42.jpg" data-loaded="true">
                    </a>
                    </div>
                    <div class="serts-slider__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/bg.jpg" alt="" class="serts-slider__item__bg">
                    <a href="<?php echo get_template_directory_uri(); ?>/images/48944739580d151b9f6dfd310c3eecce.jpg" data-fancybox="serts">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/48944739580d151b9f6dfd310c3eecce.jpg" alt="Сертификат" class="serts-slider__item__sert lozad" src="<?php echo get_template_directory_uri(); ?>/images/48944739580d151b9f6dfd310c3eecce.jpg" data-loaded="true">
                    </a>
                    </div>
                    <div class="serts-slider__item serts-slider__item--big" >
                    <img src="<?php echo get_template_directory_uri(); ?>/images/bg-big.jpg" alt="" class="serts-slider__item__bg">
                    <a href="<?php echo get_template_directory_uri(); ?>/images/73e6b5529721d1e96c453a3db7507a61.jpg" data-fancybox="serts">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/73e6b5529721d1e96c453a3db7507a61.jpg" alt="Сертификат" class="serts-slider__item__sert lozad">
                    </a>
                    </div>
                <!-- <button class="flickity-button flickity-prev-next-button previous" type="button" disabled="" aria-label="Previous">
                    <svg class="flickity-button-icon" viewBox="0 0 100 100">
                        <path d="M45.7,36.2L32.1,49.7c-0.2,0.1-0.2,0.4,0,0.5l13.6,13.6c0.2,0.2,0.4,0.2,0.5,0l1.7-1.7L37.3,51.4h29.2 c0.8,0,1.5-0.7,1.5-1.5l0,0c0-0.8-0.7-1.5-1.5-1.5h-29L48,37.9l-1.7-1.7C46.1,36,45.8,36,45.7,36.2L45.7,36.2z" class="arrow"></path>
                    </svg>
                </button>
                <button class="flickity-button flickity-prev-next-button next" type="button" aria-label="Next">
                    <svg class="flickity-button-icon" viewBox="0 0 100 100">
                        <path d="M45.7,36.2L32.1,49.7c-0.2,0.1-0.2,0.4,0,0.5l13.6,13.6c0.2,0.2,0.4,0.2,0.5,0l1.7-1.7L37.3,51.4h29.2 c0.8,0,1.5-0.7,1.5-1.5l0,0c0-0.8-0.7-1.5-1.5-1.5h-29L48,37.9l-1.7-1.7C46.1,36,45.8,36,45.7,36.2L45.7,36.2z" class="arrow" transform="translate(100, 100) rotate(180) "></path>
                    </svg>
                </button> -->
            </div>
            </div>
        </section>
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
                                    <div class="form-policy">Нажимая кнопку, вы соглашаетесь с <a href="/upload/uf/c9d/c9db88e2565f1244bcec2fc31c1dbd4e.pdf" target="_blank">политикой конфиденциальности</a></div>
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
                                <div class="form-policy">Нажимая кнопку, вы соглашаетесь с <a href="/upload/uf/c9d/c9db88e2565f1244bcec2fc31c1dbd4e.pdf" target="_blank">политикой конфиденциальности</a></div>
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
                <div class="footer__copy">Все права защищены, 2022 <br>ООО «Дентал Имплант»</div>
                <div class="footer__policy">
                    <a href="/upload/uf/c9d/c9db88e2565f1244bcec2fc31c1dbd4e.pdf" class="blue-link" target="_blank">Политика конфиденциальности</a>
                </div>
                <div class="footer__social">
                    <span>Мы в социальных сетях</span>
                    <div class="footer__social__list">
                        <a href="#"><i class="i-vk"></i></a>
                    </div>
                </div>
                <a href="https://penbrain.ru" target="_blank" class="footer__pen">
                <span>Дизайн и разработка с любовью<br>к счастливым улыбкам</span>
                <img src="<?php echo get_template_directory_uri(); ?>/images/pen.svg" alt="Pen&amp;Brain">
                </a>
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
                <div class="form-policy">Нажимая кнопку, вы соглашаетесь с <a href="/upload/uf/c9d/c9db88e2565f1244bcec2fc31c1dbd4e.pdf" target="_blank">политикой конфиденциальности</a>.</div>
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
            <div class="form-policy">Нажимая кнопку, вы соглашаетесь с <a href="/upload/uf/c9d/c9db88e2565f1244bcec2fc31c1dbd4e.pdf" target="_blank">политикой конфиденциальности</a>.</div>
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