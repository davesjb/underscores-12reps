<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

?>

<section class="section section-contact">

    <div class="container">

        <div class="content-flex flex">

            <div class="column col col-1">

              <div class="floating-box get-in-touch">
                  
                  <?php the_field('contact_form'); ?>

              </div>

                

            </div>

            <div class="column col col-2">

               <!-- <div class="floating-box stay-in-the-loop"> -->

                  <!-- <?php //the_field('contact_boxes'); ?> -->

               <!-- </div> -->


               <div class="floating-box opacitised london">
                   
                 <?php the_field('contact_location'); ?>

                 <a href="https://www.instagram.com/12reps.co.uk/" class="img-social-insta">

                   <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path fill="#FFFFFF" d="m75 512h362c41.355469 0 75-33.644531 75-75v-362c0-41.355469-33.644531-75-75-75h-362c-41.355469 0-75 33.644531-75 75v362c0 41.355469 33.644531 75 75 75zm-45-437c0-24.8125 20.1875-45 45-45h362c24.8125 0 45 20.1875 45 45v362c0 24.8125-20.1875 45-45 45h-362c-24.8125 0-45-20.1875-45-45zm0 0"/><path fill="#FFFFFF" d="m256 391c74.4375 0 135-60.5625 135-135s-60.5625-135-135-135-135 60.5625-135 135 60.5625 135 135 135zm0-240c57.898438 0 105 47.101562 105 105s-47.101562 105-105 105-105-47.101562-105-105 47.101562-105 105-105zm0 0"/><path fill="#FFFFFF" d="m406 151c24.8125 0 45-20.1875 45-45s-20.1875-45-45-45-45 20.1875-45 45 20.1875 45 45 45zm0-60c8.269531 0 15 6.730469 15 15s-6.730469 15-15 15-15-6.730469-15-15 6.730469-15 15-15zm0 0"/></svg>

                 </a>
                 <a href="https://www.facebook.com/12reps.co.uk/" class="img-social-fb">
                   
                   <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                   <g>
                       <g>
                           <path fill="#FFFFFF" d="M288,176v-64c0-17.664,14.336-32,32-32h32V0h-64c-53.024,0-96,42.976-96,96v80h-64v80h64v256h96V256h64l32-80H288z"/>
                       </g>
                   </g>
                   </svg>


                 </a>
               </div>

            </div>

        </div>

    </div>

</section>