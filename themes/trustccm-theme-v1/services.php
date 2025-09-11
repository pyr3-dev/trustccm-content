<?php
/**
 * Template Name: Services Page
 */
?>

<?php get_header();

?>


<body <?php body_class(); ?>>



<?php require_once get_template_directory() . '/nav.php'; ?>

<section class="w-full bg-[url('<?php echo get_template_directory_uri(); ?>/assets/services-banner.jpg')] bg-no-repeat bg-cover bg-bottom py-16 px-6 text-white " data-aos="fade-left" data-aos-delay="100">
  <div class="max-w-7xl mx-auto text-center" >
    <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-[0_4px_6px_rgba(0,0,0,0.7)]">Our Services</h1>
    <p class="text-lg md:text-xl mb-6 drop-shadow-[0_4px_6px_rgba(0,0,0,0.7)]">We help companies scale with precision and strategy.</p>

  </div>
</section>

<section class="bg-gray-50 py-20 px-6 md:px-24 services-page">
  <div class="max-w-7xl mx-auto">
    <h2 class="text-4xl font-bold text-center text-gray-900 mb-16" data-aos="fade-up">Our Services</h2>

    <div class="grid md:grid-cols-2 gap-10 text-gray-700 text-base leading-relaxed">

      <!-- Card: Sales Training & Infrastructure -->
      <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300" data-aos="fade-up" data-aos-delay="100">
        <div class="flex items-center gap-4 mb-5">
          <div class="bg-blue-100 p-3 rounded-full">
            <svg class="w-6 h-6 text-blue-800" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M3 4a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v13a2 2 0 0 1-2 2H7l-4 4V4z"/>
            </svg>
          </div>
          <h3 class="text-2xl font-semibold text-blue-800">Sales Training & Infrastructure</h3>
        </div>
        <p>
          Sales is the lifeblood of any business—and we don’t just train teams, we build entire infrastructures...
        </p>
        <p class="mt-3">
          CRM systems, call review frameworks, and team performance dashboards are built in...
        </p>
      </div>

      <!-- Card: Business Development Consulting -->
      <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300" data-aos="fade-up" data-aos-delay="200">
        <div class="flex items-center gap-4 mb-5">
          <div class="bg-green-100 p-3 rounded-full">
            <svg class="w-6 h-6 text-green-800" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M20 6a2 2 0 0 1-2 2H6a2 2 0 0 1 0-4h12a2 2 0 0 1 2 2zm-2 5H6a2 2 0 0 0 0 4h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-1zm0 5H6a2 2 0 0 0 0 4h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-1z"/>
            </svg>
          </div>
          <h3 class="text-2xl font-semibold text-green-800">Business Development Consulting</h3>
        </div>
        <p>
          Growth doesn’t just come from ads or cold calls—it often comes from building the right relationships...
        </p>
        <p class="mt-3">
          From co-branded partnerships to licensing opportunities...
        </p>
      </div>

      <!-- Card: Operations & Scaling Support -->
      <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300" data-aos="fade-up" data-aos-delay="300">
        <div class="flex items-center gap-4 mb-5">
          <div class="bg-yellow-100 p-3 rounded-full">
            <svg class="w-6 h-6 text-yellow-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M9 17v-6h13v6m-2 4H4a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h1"/>
            </svg>
          </div>
          <h3 class="text-2xl font-semibold text-yellow-700">Operations & Scaling Support</h3>
        </div>
        <p>
          Scaling a business without structure is a recipe for chaos. That’s why we bring in scalable operational systems...
        </p>
        <p class="mt-3">
          With automation tools, project management systems, and performance dashboards...
        </p>
      </div>

      <!-- Card: Brand Building -->
      <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300" data-aos="fade-up" data-aos-delay="400">
        <div class="flex items-center gap-4 mb-5">
          <div class="bg-pink-100 p-3 rounded-full">
            <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M12 20h9M4.2 4.2l15.6 15.6M6 12h.01M6 16h.01M6 8h.01M10 12h.01M10 16h.01M10 8h.01"/>
            </svg>
          </div>
          <h3 class="text-2xl font-semibold text-pink-600">Brand Building</h3>
        </div>
        <p>
          In today’s noisy marketplace, the most successful companies don’t just sell—they connect...
        </p>
        <p class="mt-3">
          We help you grow a brand that not only attracts clients—but also recruits talent...
        </p>
      </div>

    </div>

    <!-- Closing -->
    <div class="mt-20 max-w-4xl mx-auto text-center" data-aos="fade-up" data-aos-delay="500">
      <p class="text-xl font-medium text-white" style="color:#FFFFFF !important;">
        Every business challenge is solvable with the right structure, system, and strategy.
      </p>
    </div>
  </div>

    <br>
  <br>
  <div class="max-w-7xl mx-auto text-center">
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
