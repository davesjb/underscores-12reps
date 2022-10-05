<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

?>

<section class="section bg-blue services-section">
    <div class="container services-container">
        <div class="content-flex">
            <div class="grid">
                <div class="grid-sizer"></div>
                <!-- ADVANCED CUSTOM FIELDS  -->
                <?php
                // check if the flexible content field has rows of data
                if( have_rows('grid') ):
                    // loop through the rows of data
                    while ( have_rows('grid') ) : the_row();

                        if( get_row_layout() == 'grid_block' ):
                            get_template_part( 'partials/acf','grid_block');
                        elseif( get_row_layout() == 'text_block' ):
                            get_template_part( 'partials/acf','text_block');
                        endif;
                    endwhile;
                else :
                    // no layouts found
                endif;
                ?>
            </div>
        </div>
    </div>
</section>

<section class="section section-contact">

    <div class="container">

        <div class="content-flex flex">

            <div class="column col col-1">

                <div class="floating-box stay-in-the-loop">

                   <?php the_field('contact_boxes_all'); ?>

                </div>


                <div class="floating-box opacitised london">
                    
                  <?php the_field('contact_location_all'); ?>

                </div>

            </div>

            <div class="column col col-2">

                <div class="floating-box get-in-touch">
                    
                    <?php the_field('contact_form_all'); ?>

                </div>

            </div>

        </div>

    </div>

</section>