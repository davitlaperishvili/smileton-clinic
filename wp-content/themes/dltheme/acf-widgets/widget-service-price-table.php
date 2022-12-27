
   <?php  
        $table_headers = get_sub_field('table_headers'); 
        $table = get_sub_field('table'); 
        $rowIndex = get_row_index();
    ?>
    <?php 
            if($table_headers['block_title']){
                ?>
                    <section class="price_table" id="content<?php echo $rowIndex ?>">
                        <div class="container">
                            <div class="sec-title ">
                                <h2 class="h2"><?php echo $table_headers['block_title'] ?></h2>
                            </div>
                            <div class="custom_table">
                                <div class="table_wrap">
                                    <div class="table_header">
                                        <div class="left"><?php echo $table_headers['left'] ?></div>
                                        <div class="right"><?php echo $table_headers['right'] ?></div>
                                    </div>
                                    <div class="table_values">
                                        <?php 
                                            foreach( $table as $item) {
                                                ?>
                                                    <div class="table_value">
                                                        <div class="value_header"><?php echo $item['row_title'] ?></div>
                                                        <div class="value_content">
                                                            <div class="title">
                                                                <span><?php echo $item['left'] ?></span>
                                                            </div>
                                                            <div class="price_value"><?php echo $item['right'] ?></div>
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

