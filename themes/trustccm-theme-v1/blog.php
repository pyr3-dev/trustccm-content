<?php
/**
 * Template Name: Blog Page
 */
?>

<?php get_header();

?>


<body <?php body_class(); ?>>



<?php require_once get_template_directory() . '/nav.php'; ?>

<div class="container mx-auto px-4 py-10">
  <h2 class="text-3xl font-bold mb-8">Latest Posts</h2>
  <div class="grid md:grid-cols-3 gap-6">

    <?php
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 6
    );
    $blog_query = new WP_Query($args);

    if ($blog_query->have_posts()) :
      while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
        
        <div class="bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-2xl transition duration-300">
          <?php if (has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>">
              <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="w-full h-48 object-cover">
            </a>
          <?php endif; ?>
          
          <div class="p-5">
            <h3 class="text-xl font-semibold mb-2">
              <a href="<?php the_permalink(); ?>" class="hover:text-blue-600 transition"><?php the_title(); ?></a>
            </h3>
            <p class="text-gray-600 text-sm"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
            <a href="<?php the_permalink(); ?>" class="mt-4 inline-block text-blue-500 hover:underline text-sm">Read More</a>
          </div>
        </div>

      <?php endwhile;
      wp_reset_postdata();
    else : ?>
      <p>No blog posts found.</p>
    <?php endif; ?>

  </div>
</div>




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

