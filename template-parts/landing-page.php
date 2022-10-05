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
                <div class="grid-item grid-item-half image-bg flex-columns no-bg image-bg-loadtop lazyload" style="background-image: url(<?php bloginfo('template_url') ?>/images/blank.gif )" data-src="<?php the_field('main_homepage_image'); ?>">
                    <!-- img -->
        
                </div>
                <div class="grid-item grid-item-half bg-white">
                    <div class="entry-container">
                        
                        <?php the_field('main_personal_trainers'); ?>
                        <div class="cta">
                            <?php the_field('cta_contact'); ?>
                            <div class="center-div animating-logos kettle-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 114.83 133.09"><title>Asset 3</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path id="Kettle" d="M101.52,92.26A46.73,46.73,0,0,0,96.21,70.5c10-7.85,16.12-12.63,16.12-24.63,0-23.95-24.57-43.37-54.91-43.37S2.5,21.92,2.5,45.87c0,12,6.16,16.78,16.14,24.63a46.61,46.61,0,0,0-5.31,21.76c0,45.49,19.74,37.85,44.09,37.85,21,0,38.62,4.85,43-22.37m-43-90.28c19.86,0,36,12.72,36,28.41s-17.32-.82-37.18-.82-34.75,16.52-34.75.82S37.55,17.46,57.42,17.46Z" fill="none" stroke="#000" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5"/></g></g></svg>
                            </div>
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
                        <?php the_field('main_personal'); ?>
                        <div class="center-div animating-logos clipboard-svg">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 154.25 208.21"><title>Asset 6</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M76.7,16.34A37.53,37.53,0,0,0,53,82.93C57.34,70.72,66.33,62.35,76.7,62.35s19.36,8.36,23.75,20.57A37.53,37.53,0,0,0,76.7,16.34ZM76.7,56A15.93,15.93,0,1,1,92.63,40,15.93,15.93,0,0,1,76.7,56Z" fill="none" stroke="#FFF" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5"/><path d="M92.63,40A15.94,15.94,0,1,1,76.7,24.1,15.93,15.93,0,0,1,92.63,40Z" fill="none" stroke="#FFF" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5"/><path d="M100.45,82.92a37.52,37.52,0,0,1-47.5,0C57.34,70.72,66.33,62.35,76.7,62.35S96.06,70.71,100.45,82.92Z" fill="none" stroke="#FFF" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5"/><path d="M151.75,65.4V189a16.7,16.7,0,0,1-16.69,16.7H19.2A16.7,16.7,0,0,1,2.5,189V19.2A16.69,16.69,0,0,1,19.2,2.5H135.06a16.69,16.69,0,0,1,16.69,16.7V36.35" fill="none" stroke="#FFF" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5"/><line x1="29.53" y1="114.54" x2="130.18" y2="114.54" fill="none" stroke="#FFF" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5"/><line x1="29.53" y1="128.35" x2="130.18" y2="128.35" fill="none" stroke="#FFF" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5"/><line x1="29.53" y1="142.15" x2="130.18" y2="142.15" fill="none" stroke="#FFF" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5"/><line x1="29.53" y1="155.96" x2="130.18" y2="155.96" fill="none" stroke="#FFF" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5"/><line x1="29.53" y1="169.76" x2="130.18" y2="169.76" fill="none" stroke="#FFF" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5"/></g></g></svg>
                        </div>
                    </div> 
                </div>
                <div class="grid-item grid-item-half image-bg-center image-bg-load lazyload" style="background-image: url(<?php bloginfo('template_url') ?>/images/blank.gif )" data-src="<?php the_field('main_personal_image'); ?>">
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
                <div class="grid-item image-bg-center image-bg-load lazyload" style="background-image: url(<?php bloginfo('template_url') ?>/images/blank.gif )" data-src="<?php bloginfo('template_url') ?>/images/sunrise-680.jpg">
                    <!-- img -->
                </div>
                <div class="grid-item">
                    <div class="entry-container">
                        <?php the_field('main_innovation'); ?>
                        <?php the_field('cta_innovation'); ?>
                        <div class="center-div animating-logos-2 hr-monitor-svg">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 180 161.65"><title>Asset 5</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M22.06,90.14C46.28,114.77,84.94,135,89.75,152.9c8.43-25.69,87.75-55.76,87.75-100.6A49.81,49.81,0,0,0,90,19.75,49.81,49.81,0,0,0,2.5,52.3c0,9,3.48,17.4,9.06,25.4H60.08l6.27-13.76,11.5,21.93L89,55.17l7.42,42L108.7,68.33l10,12.53,4.21-3.16h24.28" fill="none" stroke="#000" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5"/></g></g></svg>
                        </div>
                    </div>
                </div>
                <div class="grid-item image-bg-center hide-mobile hide-tablet image-bg-load lazyload" style="background-image: url(<?php bloginfo('template_url') ?>/images/blank.gif )" data-src="<?php bloginfo('template_url') ?>/images/deadliftk.jpg">
                    <!-- img -->
                </div>
                <div class="grid-item">
                    <div class="entry-container">
                        <?php the_field('main_commitment'); ?>
                        <div class="center-div animating-logos-2 handshake-svg">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 218.77 123.99"><title>Asset 4</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M174.91,74.79,185,67.16l3.91,14h27.35V3.45H161.9l5.83,18.06S123.46.26,108,2.69c-8.7,1.37-26.76,22.66-26.76,22.66s-13.3,15.3-10.64,20.88c2,4.18,15.07,5,18,4.46s12.7-10,12.7-10,9.87-8.94,13.43-7.48c15.62,6.41,52,38.37,57,52,1.67,4.57-8,12.64-12.16,15.2-2.08,1.28-9.54,2-9.54,2s-6.2,5.69-8.73,6.8c-1.88.82-8.09,1.34-8.09,1.34s-5.08,4.84-7.21,5.7c-1.83.74-7.82.78-7.82.78s-7.52,4.52-10.33,4.46c-4.82-.11-17.33-8.42-17.33-8.42l-52-45.91-2.24,14H2.5V3.45h47l-2.35,9.29s16.09,3.32,23.5,3.12C74,15.78,82.8,11.59,82.8,11.59" fill="none" stroke="#000" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5"/></g></g></svg>
                        </div>
                    </div>
                </div>
                <div class="grid-item image-bg-center hide-mobile hide-desktop image-bg-load lazyload" style="background-image: url(<?php bloginfo('template_url') ?>/images/blank.gif )" data-src="<?php bloginfo('template_url') ?>/images/deadliftk.jpg">
                    <!-- img -->
                </div>
                <div class="grid-item hide-mobile image-bg-center image-bg-load lazyload" style="background-image: url(<?php bloginfo('template_url') ?>/images/blank.gif )" data-src="<?php bloginfo('template_url') ?>/images/hanbacksquat.jpg">
                    <!-- img -->
                </div>
                <div class="grid-item">
                    <div class="entry-container">
                        <?php the_field('main_journey'); ?>
                       <!--  <a href="/get-in-touch" class="button center-div animating-logos">Get started</a> -->
                       <div class="center-div animating-logos clipboard-svg">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 134.07 204.79"><title>Asset 1</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><polyline points="39.64 18.56 42.84 2.5 50.8 2.5 18.96 202.29 3.05 202.29 36.3 35.35" fill="#fff" stroke="#231f20" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5"/><polygon points="75 202.29 59.08 202.29 63.06 154.51 71.02 154.51 75 202.29" fill="#fff" stroke="#231f20" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5"/><polygon points="71.95 139.83 62.12 139.83 64.58 110.3 69.5 110.3 71.95 139.83" fill="#fff" stroke="#231f20" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5"/><polygon points="70.09 53.72 63.98 53.72 65.51 35.35 68.56 35.35 70.09 53.72" fill="#fff" stroke="#231f20" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5"/><polygon points="70.5 91.03 63.58 91.03 65.31 70.25 68.77 70.25 70.5 91.03" fill="#fff" stroke="#231f20" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5"/><polygon points="69.19 23.77 64.89 23.77 65.96 10.86 68.11 10.86 69.19 23.77" fill="#fff" stroke="#231f20" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5"/><polyline points="110.18 171.36 115.11 202.29 131.03 202.29 91.23 2.5 83.27 2.5 106.09 145.69" fill="#fff" stroke="#231f20" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5"/></g></g></svg>
                       </div>
                    </div>
                </div>
                <div class="grid-item-full">
                    <div class="full-width-cta">
                        <a href="/get-in-touch">Start your journey to building life long habits and contact us now.</a>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-no bg-light">
    <div class="container bg-white">
        <div class="testimonial-quote">

            <h2>Google Reviews</h2>
            
           <!-- <p> Training with Dave is super fun and challenging! He tailors each session so I get the most out of it and I feel really positive. I play netball so he’s shaped some drills around agility, speed, and co-ordination. </p>

            <p class="t-name">Claire, Tower Bridge</p> -->

            <p>Dave is by far the best PT I’ve had! I’ve used a number of PT’s based in the City and further afield, but since lockdown I wanted one more local and after discovering 12reps and Dave I really can’t see myself looking for another PT!</p>

            <p>Dave is very knowledgable, works around you and understands your goals but above all makes the sessions so fun!! PT sessions used to be a chore but now it’s something I look forward to and with access to a private 1-1 gym, I feel safe knowing I’m in a secure environment (and the added bonus of not having to wait for equipment!)</p>

            <p>If you’re looking for a PT then I would confidently say you don’t need to look any further and Dave comes with my highest recommendation!</p>

            <p class="t-name">Shay</p>

            <p><a href="https://g.page/12reps-hertfordshire?gm" rel=”nofollow”>Click here</a> for all Reviews (10+ Reviews)</p>
        </div>
    </div>
</section>

<section class="section bg-blue">
    <div class="container">
        <?php the_field('main_instagram'); ?>
    </div>
</section>

<section class="section section-contact">

    <div class="container">

        <div class="content-flex flex">

            <div class="column col col-1">

                <div class="floating-box stay-in-the-loop">

                   <?php the_field('contact_boxes'); ?>

                </div>


                <div class="floating-box opacitised london">
                    
                  <?php the_field('contact_location'); ?>

                </div>

            </div>

            <div class="column col col-2">

                <div class="floating-box get-in-touch">
                    
                    <?php the_field('contact_form'); ?>

                </div>

            </div>
        </div>
    </div>

</section>