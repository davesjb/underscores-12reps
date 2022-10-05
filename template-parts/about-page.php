<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

?>

<section class="section-no bg-light">
    <div class="container">
        <div class="content-flex">
            <div class="grid-row">
                <div class="grid-item grid-item-half image-bg flex-columns no-bg image-bg-loadtop img-dave-pray">
                    <!-- img-dave-beckett-trainer -->
                </div>
                <div class="grid-item grid-item-half bg-white">
                    <div class="entry-container">
                        <?php the_field('main_personal_trainers_copy'); ?>
                        
                        <div class="cta">
                            <?php the_field('cta_contact'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-no bg-secondary">
    <div class="container">
        <div class="content-flex">
            <div class="grid-row">
                <div class="grid-item grid-item-half">
                    <div class="entry-container">
                        <?php the_field('meet_your_personal_trainer'); ?>
                    </div> 
                </div>
                <div class="grid-item grid-item-half image-bg-center image-bg-load img-mud2">
                    <!-- img -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-no bg-light">
    <div class="container bg-white">
        <div class="content-flex">
            <div class="grid-row">
                <div class="grid-item grid-item-half">
                    <div class="entry-container">
                        <?php the_field('training_style'); ?>
                        <?php the_field('training_style_2'); ?>
                    </div>
                </div>
                <div class="grid-item grid-item-half image-bg-center image-bg-section-scroll-load img-sunrise hide-mobile-natural">
                    <!-- img -->
                </div>

                <div class="grid-item grid-item-half image-bg-center image-bg-section-scroll-load img-stretches hide-mobile-natural">

                </div>
                <div class="grid-item grid-item-half">
                    <div class="entry-container">
                        <div class="testimonial-quote">

                            <h2>Success Story</h2>
                            
                            <p>Starting off in bad shape and with low confidence Dave's been instrumental in boosting my confidence and bringing me to a point where I look and feel great.</p>
                            <p>Before I found it hard to stick to routines or have much fun with my workouts but thanks to Dave that's all changed, the enthusiasm and knowledge he brings to the gym is fantastic.</p>
                            <!-- <h2>"the enthusiasm and knowledge he brings to the gym is fantastic"</h2> -->
                            <p>Aside from the all the physical work that Dave has helped with he's also given me great advice on my diet and I am seeing major benefits because of this. I couldn't recommend Dave enough!</p>

                            <p class="t-name">Jon, Watford</p>
                            
                        </div>
                    </div>
                </div>
                <div class="grid-item grid-item-half">
                    <div class="entry-container">
                        <?php the_field('qualifications'); ?>
                        <a href="/get-in-touch" class="button center-div">Contact now</a>
                    </div>  
                </div>        
                <div class="grid-item grid-item-half image-bg-center image-bg-section-scroll-load hide-mobile-natural img-dave-beckett-trainer">

                </div>
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