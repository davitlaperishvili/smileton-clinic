
   <?php  
        $section_text = get_sub_field('section_text'); 
        $rowIndex = get_row_index();
    ?>
    
    <section class="service_long_desc" id="content<?php echo $rowIndex ?>">
        <div class="container">
            <div class="section_text">
                <?php echo $section_text ?>
            </div>
        </div>
    </section>

