<?php
/**
 * Template Name: Contact Page
 */
get_header();

global $wpdb;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['trccm_submit'])) {
  $table = $wpdb->prefix . 'trccm_contact_submissions';
  $wpdb->insert($table, [
    'name'          => sanitize_text_field($_POST['name']),
    'business_name' => sanitize_text_field($_POST['business_name']),
    'website'       => esc_url_raw($_POST['website']),
    'challenge'     => sanitize_textarea_field($_POST['challenge']),
    'budget'        => sanitize_text_field($_POST['budget']),
    'phone'         => sanitize_text_field($_POST['phone']),
  ]);
  $submitted = true;
}

ini_set('display_errors', 1);
error_reporting(E_ALL);
?>



<body <?php body_class(); ?>>



<?php require_once get_template_directory() . '/nav.php'; ?>
<!-- bg-[url('/path/to/banner.jpg')] -->
<section class="w-full bg-[url('<?php echo get_template_directory_uri(); ?>/assets/contact-main-banner.jpg')] bg-no-repeat bg-cover bg-bottom py-16 px-6 text-blue-500 " data-aos="fade-left">
  <div class="max-w-7xl mx-auto text-center"  >
    <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-[0_4px_6px_rgba(0,0,0,0.7)]">Contact Us to Get Started</h1>
    <p class="text-lg md:text-xl mb-6 drop-shadow-[0_4px_6px_rgba(0,0,0,0.7)]">We help companies scale with precision and strategy.</p>
  </div>
</section>


<section class="bg-gray-50 py-20 px-6 md:px-24 contact-page">
  <div class="max-w-6xl mx-auto bg-white rounded-2xl shadow overflow-hidden flex flex-col md:flex-row">
    
    <!-- Left Side Image -->
   <div class="md:w-1/2 " data-aos="fade-right" data-aos-delay="100">
  <img 
    src="<?php echo get_template_directory_uri(); ?>/assets/contact-banner.jpg" 
    alt="Contact Banner" 
    class="max-w-full h-auto"
  >
</div>
    <!-- Right Side Form -->
    <div class="md:w-1/2 p-8 md:p-12" data-aos="fade-left" data-aos-delay="100">
      <h2 class="text-4xl font-bold text-gray-900 mb-6">Let’s Grow Together</h2>
      <p class="text-gray-600 mb-10">
        Tell us more about your business goals and challenges. Whether you’re looking to scale, systemize, or build a brand that lasts — we’ll help you get there.
      </p>

      <?php if (!empty($submitted)): ?>
        <p class="text-green-600 font-medium text-center mb-6">Thank you! We'll be in touch soon.</p>
      <?php endif; ?>

      <form id="trccm-contact-form" class="grid gap-6">
        <input type="hidden" name="action" value="trccm_submit_contact_form">

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
          <input type="text" name="name" required class="w-full border border-gray-300 rounded px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Business Name</label>
          <input type="text" name="business_name" class="w-full border border-gray-300 rounded px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Website (if any)</label>
          <input type="url" name="website" class="w-full border border-gray-300 rounded px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">What’s Your Biggest Challenge?</label>
          <textarea name="challenge" rows="4" class="w-full border border-gray-300 rounded px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Budget Range</label>
          <select name="budget" class="w-full border border-gray-300 rounded px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:outline-none">
            <option value="">Select a range</option>
            <option>Below $5,000</option>
            <option>$5,000 – $15,000</option>
            <option>$15,000 – $50,000</option>
            <option>$50,000+</option>
          </select>
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
          <input type="tel" name="phone" class="w-full border border-gray-300 rounded px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <div class="flex flex-col md:flex-row items-center justify-center gap-4 mt-8">
          <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl text-sm font-semibold shadow w-full md:w-auto">
            Book Discovery Call
          </button>
          <button type="submit" class="bg-gray-800 hover:bg-gray-900 text-white px-6 py-3 rounded-xl text-sm font-semibold shadow w-full md:w-auto">
            Request Proposal
          </button>
        </div>
      </form>

      <div id="trccm-success-msg" class="hidden mt-6 text-green-700 font-semibold text-center">
        Thank you! Your message has been sent. Reloading...
      </div>
    </div>
  </div>
</section>



    <?php get_footer(); ?>


<script>
document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('trccm-contact-form');
  const successMsg = document.getElementById('trccm-success-msg');

  form.addEventListener('submit', async function(e) {
    e.preventDefault();

    try {
      const response = await fetch('<?php echo admin_url("admin-ajax.php"); ?>', {
        method: 'POST',
        body: new FormData(form)
      });

      const result = await response.json();
      console.log('Result:', result);

      if (result.success) {
        form.classList.add('hidden');
        successMsg.classList.remove('hidden');
        setTimeout(() => window.location.reload(), 3000);
      } else {
        console.log('Error data:', result);
        alert(result?.data?.message || 'There was an error saving your submission.');
      }
    } catch (err) {
      console.error('AJAX failed:', err);
      alert('AJAX error: ' + err.message);
    }
  });
});
</script>



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

