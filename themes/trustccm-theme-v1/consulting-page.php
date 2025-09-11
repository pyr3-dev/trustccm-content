<?php
/**
 * Template Name: Consulting Page
 */
?>

<?php get_header();

?>


<body <?php body_class(); ?>>



<?php require_once get_template_directory() . '/nav.php'; ?>

<section class="w-full bg-[url('<?php echo get_template_directory_uri(); ?>/assets/testimonal.jpg')] bg-no-repeat bg-cover bg-bottom py-16 px-6 text-yellow-500 " data-aos="fade-right" data-aos-delay="100" >
  <div class="max-w-7xl mx-auto text-center" >
    <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-[0_4px_6px_rgba(0,0,0,0.7)]">Consultancy and Consulting </h1>
    <p class="text-lg md:text-xl mb-6 drop-shadow-[0_4px_6px_rgba(0,0,0,0.7)]">We help companies scale with precision and strategy.</p>

  </div>
</section>

<section class="bg-[#333] py-20 px-6 md:px-24  ">
  <div class="max-w-7xl mx-auto">
    <h2 class="text-4xl font-bold text-center text-gray-900 mb-16 text-white">Consultancy & Consulting </h2>

    <?php 
    $upload_dir = wp_upload_dir();
    $interview1 = $upload_dir['baseurl'] . '/trustccm_uploads/interview1.mp4';
    $interview2 = $upload_dir['baseurl'] . '/trustccm_uploads/interview2.mp4';
    ?>

    <!-- Video Testimonials -->
    <div class="grid md:grid-cols-2 gap-10 mb-20">
      <div>
        <div class="rounded-xl overflow-hidden shadow-lg" style="height: 350px;" data-aos="fade-right" data-aos-delay="100">
          <video controls class="w-full h-full rounded-xl shadow-lg" preload="metadata">
            <source src="<?php echo $interview1; ?>" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
        <p class="mt-4 text-white text-sm text-center ">Zohar Illnetskey – Founder Trustccm</p>
      </div>
      <div>
        <div class="rounded-xl overflow-hidden shadow-lg" style="height: 350px;" data-aos="fade-left" data-aos-delay="100">
        <video controls class="w-full h-full rounded-xl shadow-lg" preload="metadata">
            <source src="<?php echo $interview2; ?>" type="video/mp4">
            Your browser does not support the video tag.
          </video>
       
      </div>
       <p class="mt-4 text-white text-sm text-center">Zohar Illnetskey – Founder Trustccm</p>
      </div>
    </div>
    <div class="max-w-6xl mx-auto text-center" data-aos="fade-up">
    <h1 class="text-5xl font-bold mb-6">Business Consulting Services</h1>
    <p class="text-lg max-w-2xl mx-auto">
      Empowering businesses to scale with clarity, strategy, and execution. Led by <strong>Zohar Ilinetsky</strong>, TRUSTCCM provides transformative consulting rooted in proven growth results.
    </p>
  </div>
    
  </div>
</section>

<section class="bg-white py-16 px-6" data-aos="fade-up">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">
    <div>
      <h2 class="text-3xl font-bold mb-4 text-gray-800">What We Do</h2>
      <p class="text-gray-600 mb-4">
        TRUSTCCM offers strategic business consulting to help founders, executives, and teams overcome critical growth barriers. Whether you’re optimizing operations or preparing to scale, we provide custom roadmaps and expert guidance.
      </p>
      <ul class="list-disc list-inside text-gray-700 space-y-2">
        <li>Growth Strategy Development</li>
        <li>Operational & Financial Efficiency</li>
        <li>Marketing & Brand Positioning</li>
        <li>Team Structure Optimization</li>
        <li>Customer Experience & Retention</li>
      </ul>
    </div>
    <div data-aos="fade-left" data-aos-delay="100">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/companies-growth.jpg" alt="Consulting" class="rounded-2xl shadow-lg" />
    </div>
  </div>
</section>

<section class="bg-gray-100 py-20 px-6" data-aos="fade-up">
  <div class="max-w-6xl mx-auto">
    <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Why Choose TRUSTCCM?</h2>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-white p-6 rounded-xl shadow">
        <h3 class="text-xl font-semibold mb-2 text-[#ca8a04]">Proven Results</h3>
        <p class="text-gray-600">
          We've helped businesses increase revenue by 30%+ through custom growth frameworks.
        </p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow">
        <h3 class="text-xl font-semibold mb-2 text-[#ca8a04]">Founder-Led</h3>
        <p class="text-gray-600">
          Work directly with Zohar Ilinetsky — not a junior analyst — for tailored guidance.
        </p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow">
        <h3 class="text-xl font-semibold mb-2 text-[#ca8a04]">End-to-End Support</h3>
        <p class="text-gray-600">
          From discovery to execution, we stay by your side throughout the consulting lifecycle.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="bg-[#000] text-white py-20 px-6" data-aos="fade-up">
  <div class="max-w-4xl mx-auto text-center">
    <h2 class="text-4xl font-bold mb-6">Let’s Scale Your Business, Together</h2>
    <p class="text-lg mb-8">
      Book a discovery call today and let’s explore how TRUSTCCM can help you reach your next level of growth.
    </p>
    <a href="<?php echo home_url('/contact-us'); ?>" class="inline-block bg-[#ca8a04] hover:bg-[#b07804] text-white font-semibold py-3 px-8 rounded-full transition duration-300">
      Request a Consultation
    </a>
  </div>
</section>



    <?php get_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  const beforeCtx = document.getElementById('beforeChart').getContext('2d');
  const afterCtx = document.getElementById('afterChart').getContext('2d');

  const beforeChart = new Chart(beforeCtx, {
    type: 'bar',
    data: {
      labels: ['Jan', 'Feb', 'Mar'],
      datasets: [{
        label: 'Revenue ($)',
        data: [42000, 43000, 44000],
        backgroundColor: '#4B5563'
      }]
    },
    options: {
      plugins: {
        legend: { display: false }
      },
      scales: {
        y: { beginAtZero: true }
      }
    }
  });

  const afterChart = new Chart(afterCtx, {
    type: 'bar',
    data: {
      labels: ['Apr', 'May', 'Jun'],
      datasets: [{
        label: 'Revenue ($)',
        data: [92000, 115000, 135000],
        backgroundColor: '#db9a03'
      }]
    },
    options: {
      plugins: {
        legend: { display: false }
      },
      scales: {
        y: { beginAtZero: true }
      }
    }
  });
</script>



<script>
      AOS.init({
        once: false, // <-- allow animation to repeat
        duration: 800,
        offset: 100
      });
    </script>

</body>
</html>

