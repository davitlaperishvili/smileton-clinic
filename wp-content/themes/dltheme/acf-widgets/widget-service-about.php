
   <?php  
        $section_title = get_sub_field('section_title'); 
        $section_image = get_sub_field('section_image'); 
        $section_text = get_sub_field('section_text'); 
        $rowIndex = get_row_index();
    ?>
    
    <section class="about_service" id="content<?php echo $rowIndex ?>">
        <div class="container">
            <div class="sec-title ">
                <h2 class="h2"><?php echo $section_title ?></h2>
            </div>
            <div class="about_wrap">
                <div class="about_text">
                    <?php echo $section_text ?>
                </div>
                <figure>
                    <img src="<?php echo $section_image['url'] ?>" alt="<?php echo $section_image['alt'] ?>">
                </figure>
            </div>
        </div>
    </section>

