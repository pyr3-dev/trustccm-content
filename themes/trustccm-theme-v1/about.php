<?php

/**
 * Template Name: About Page
 */
?>

<?php get_header();

?>


<body <?php body_class(); ?>>



  <?php require_once get_template_directory() . '/nav.php'; ?>

  <!-- bg-[url('/path/to/banner.jpg')] -->
  <section class="w-full bg-gradient-to-r from-yellow-300 via-[#d8830a] to-yellow-300 py-16 px-6 text-white">
    <div class="max-w-7xl mx-auto text-center">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">Welcome to TRUSTCCM</h1>
      <p class="text-lg md:text-xl mb-6">We help companies scale with precision and strategy.</p>
      <a href="<?php echo home_url('/case-studies'); ?>" class="inline-block bg-white text-yellow-600 font-semibold px-6 py-3 rounded-full shadow hover:bg-yellow-100 transition">
        Learn More
      </a>
    </div>
  </section>


  <section class="bg-white py-16 px-6 md:px-20 about-page">
    <div class="max-w-5xl mx-auto">
      <h2 class="text-4xl font-bold text-gray-900 mb-6">Zohar’s Story</h2>
      <br>

      <div class="grid md:grid-cols-2 gap-8 items-center">
        <!-- Left Side: Zohar's Photo -->
        <div class="flex justify-center">

          <div class="relative w-64 h-64" data-aos="fade-right" data-aos-delay="100">
            <!-- Orange Circle -->
            <div class="absolute w-full h-full rounded-full bg-[#d8830a] scale-110 -top-3 -right-3 z-0"></div>

            <!-- Profile Image -->
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/video-poster.png"
              alt="Zohar Ilinetsky"
              class="relative z-10 w-full h-full rounded-full object-cover border-2 shadow-lg about-profile-pic">
          </div>
        </div>

        <!-- Right Side: Text Content -->
        <div>
          <p class="text-lg text-gray-700 mb-4" data-aos="fade-left" data-aos-delay="100">
            From humble beginnings in remodeling sales to building and scaling multiple businesses, Zohar's journey is grounded in hard work, grit, and a relentless pursuit of impact.
          </p>

          <p class="text-lg text-gray-700 mb-4" data-aos="fade-left" data-aos-delay="100">
            With a deep passion for scaling companies, building effective teams, and helping others achieve financial independence, Zohar’s mission goes beyond consulting — it’s about transformation.
          </p>
        </div>
      </div>

      <div class="mt-8" data-aos="fade-right" data-aos-delay="100">
        <h3 class="text-2xl font-semibold text-white mb-3">Mission Statement</h3>
        <blockquote class="border-l-4 border-white pl-4 italic text-white text-lg">
          "To help serious entrepreneurs grow companies that outlast trends, create real value, and inspire transformation—financially and operationally."
        </blockquote>
      </div>

      <div class="mt-10" data-aos="fade-right" data-aos-delay="100">
        <h3 class="text-2xl font-semibold text-gray-800 mb-3">What Makes Us Different</h3>
        <ul class="space-y-3 text-gray-700 text-lg list-disc list-inside">
          <li>We don’t give vague advice — we build real systems.</li>
          <li>Our founder has scaled multiple 7–8 figure businesses.</li>
          <li>Every consultant on our team is trained in Zohar’s methodology.</li>
        </ul>
      </div>
    </div>

    <br>
    <br>
    <div class="max-w-7xl mx-auto text-center">
      <!-- New line under CTA -->
      <p class="mb-3 text-sm text-gray-700">
        Tired of advice that isn’t actionable? We’ll give you a free, no-strings-attached course of action on your first call.
      </p>
      <a href="<?php echo home_url('/contact-us'); ?>" class="inline-block bg-white text-yellow-600 font-semibold px-6 py-3 rounded-full shadow hover:bg-yellow-100 transition">
        Contact Us to Get Started!
      </a>


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