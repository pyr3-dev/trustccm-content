 <?php get_header();

?>


<body <?php body_class(); ?>>
<?php require_once get_template_directory() . '/nav.php'; ?>

<section class="bg-white py-16 px-6 md:px-20 about-page">
  <div class="max-w-5xl mx-auto">

<div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
 
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
 
            /*
             * Include the post format-specific template for the content. If you want to
             * use this in a child theme, then include a file called called content-___.php
             * (where ___ is the post format) and that will be used instead.
             */

            
            


            //echo "<h3 class='custom-post-title'>" . get_the_title() . "</h3>";


             if ( has_post_thumbnail() ) {
                    the_post_thumbnail( array( 270, 270 ) );
               }


            the_content();
 
         
        // End the loop.
        endwhile;
        ?>
 
        </main><!-- .site-main -->

        <?php //require get_template_directory() . '/advert-sidebar.php'; ?>

    </div><!-- .content-area -->
</div>
</section>

    <?php get_footer(); ?>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
      AOS.init({
        once: false, // <-- allow animation to repeat
        duration: 800,
        offset: 100
      });
    </script>

</body>
</html>
