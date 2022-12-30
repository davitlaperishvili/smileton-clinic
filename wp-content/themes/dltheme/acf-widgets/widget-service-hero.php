
   <?php  
        $service_hero_title = get_sub_field('service_hero_title'); 
        $service_hero_desc = get_sub_field('service_hero_desc'); 
        $service_hero_img = get_sub_field('service_hero_img'); 
        $service_hero_sale = get_sub_field('service_hero_sale'); 
        $service_hero_nav = get_sub_field('service_hero_nav'); 
        $rowIndex = get_row_index();
    ?>
    
    <section class="service_hero" id="content<?php echo $rowIndex ?>">
        <div class="container">
            <div class="hero_wrap">
                <figure>
                    <img src="<?php echo $service_hero_img['url'] ?>" alt="<?php echo $service_hero_img['alt'] ?>">
                </figure>
                <div class="hero_content">
                    <h1 class="service_title"><?php echo $service_hero_title ?></h1>
                    <div class="service_hero_nav">
                        <ul>
                            <?php 
                                foreach($service_hero_nav as $nav) {
                                    ?>
                                        <li>
                                            <a href="<?php echo $nav['nav_url'] ?>"><?php echo $nav['nav_text'] ?></a>
                                        </li>
                                    <?php
                                }
                            ?>
                        </ul>
                    </div>
                    <?php 
                        if($service_hero_desc){
                            ?>
                            <div class="service_desc"><?php echo $service_hero_desc ?></div>
                            <?php
                        }
                    ?>
                    <div class="service_hero_buttons">
                        <div class="theme_button">
                            <a href="javascript:void(0)" class="fancy-modal" data-src="#modal-callback">Записаться</a>
                        </div>
                        <?php 
                            if($service_hero_sale['text']){
                                ?>
                                    <div class="sale">
                                        <span class="text"><?php echo $service_hero_sale['text'] ?></span>
                                        <span class="price"><?php echo $service_hero_sale['price'] ?></span>
                                    </div>
                                <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

