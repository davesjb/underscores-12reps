<section class="section banner home-banner">
    <div class="container-wide">
        <div class="hero-banner" style="background-image:url(<?php echo $image['url']; ?>);">
            <h1 class="title-debbie" data-aos="fade-in"><?php the_sub_field('title'); ?></h1>
            <p data-aos="fade-in"><?php the_sub_field('text'); ?></p>
            <a href="contact.php#book-here" class="read-more book-now"><?php the_sub_field('button_text'); ?></a>
        </div> 
    </div>
</section>