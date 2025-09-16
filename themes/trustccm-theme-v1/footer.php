<footer class="bg-[#222] text-white pt-20 pb-8 px-4 md:px-16">
  <div class="max-w-7xl mx-auto grid gap-12 xl:grid-cols-4 lg:grid-cols-2">

    <!-- Logo + Newsletter -------------------------------------------------->
    <div>

      <div class="flex items-center space-x-1">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/logo2.png" class="h-20" alt="Trustcmm Logo" /></a>
        <h2 class="text-xl font-semibold"><?php bloginfo('name'); ?></h2>
      </div>


      <h3 class="font-semibold text-lg mb-4">Subscribe to newsletter</h3>

      <?php echo do_shortcode('[trccm_newsletter_form]'); ?>

      <!-- Partner badges --------------------------------------------------->
      <div class="flex flex-wrap gap-2 mt-6">
        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-[#a16207]">
          <!-- Google icon -->
          <svg class="w-4 h-4 mr-2 fill-current text-white" viewBox="0 0 488 512" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M488 261.8c0-17.8-1.5-35.2-4.4-52H249v98.5h134.1c-5.8 31.3-23.1 57.7-49.3 75.3v62h79.5c46.4-42.8 74.7-105.8 74.7-183.8zM249 492c66.8 0 122.9-22.1 163.8-60.2l-79.5-62c-22 15-50 24-84.3 24-64.8 0-119.6-43.8-139.2-102.5H27.1v64.3C67.9 442.2 151.5 492 249 492zM109.8 308.5C101.3 285.6 96.5 260.8 96.5 235.2s4.8-50.4 13.3-73.3v-64.3H27.1C9.7 142.5 0 187.5 0 235.2s9.7 92.7 27.1 137.6l82.7-64.3zM249 100c35.5 0 67.3 12.2 92.4 36l69.3-69.3C370.9 27.6 314.9 4 249 4 151.5 4 67.9 53.8 27.1 133.3l82.7 64.3C129.4 143.8 184.2 100 249 100z" />
          </svg>
          Google Partner
        </span>
        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-[#a16207]">
          <!-- Bing icon -->
          <svg class="w-4 h-4 mr-1" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M4 3v13l8 5 8-4.99v-2.51l-6 2.99-2-.99v-8z" />
          </svg>
          Bing Partner
        </span>
        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-[#a16207]">
          <!-- Analytics icon -->
          <svg class="w-4 h-4 mr-1" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M5 3v18h2V3zm6 6v12h2V9zm6 4v8h2v-8z" />
          </svg>
          Piano Analytics Partner
        </span>
      </div>
    </div>

    <!-- Pages Menu --------------------------------------------------------->
    <div>
      <h3 class="font-semibold text-lg mb-4">Pages</h3>
      <?php
      wp_nav_menu([
        'theme_location' => 'footer_pages',
        'menu_class'     => 'space-y-3',
        'container'      => false,
        'fallback_cb'    => false,
        'depth'          => 1,
        'link_before'    => '<span class="hover:underline">',
        'link_after'     => '</span>',
      ]);
      ?>
    </div>

    <!-- Case Studies Menu -------------------------------------------------->
    <div>
      <h3 class="font-semibold text-lg mb-4">Case Studies</h3>
      <?php
      wp_nav_menu([
        'theme_location' => 'footer_case_studies',
        'menu_class'     => 'space-y-3',
        'container'      => false,
        'fallback_cb'    => false,
        'depth'          => 1,
        'link_before'    => '<span class="hover:underline">',
        'link_after'     => '</span>',
      ]);
      ?>
    </div>

    <!-- Connect / Socials -------------------------------------------------->
    <?php
    // Set your WhatsApp number here (digits only, include country code, e.g., 639171234567)
    $whatsAppNumber = '+16175817790';
    $wa_link = 'https://wa.me/' . preg_replace('/\D+/', '', $whatsAppNumber);
    ?>
    <div>
      <h3 class="font-semibold text-lg mb-4">Connect with <?php bloginfo('name'); ?></h3>
      <p class="text-gray-400 mb-6 max-w-xs">Follow us on social media and stay up to date with our latest insights and growth strategies.</p>

      <div class="flex space-x-2">
        <!-- Instagram -->
        <a href="https://www.instagram.com/zak_tandoori" target="_blank" rel="noopener" aria-label="Instagram"
          class="p-2 rounded-full border border-gray-500 hover:bg-[#ca8a04] transition">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
            <path d="M7.5 2h9A5.5 5.5 0 0 1 22 7.5v9A5.5 5.5 0 0 1 16.5 22h-9A5.5 5.5 0 0 1 2 16.5v-9A5.5 5.5 0 0 1 7.5 2zm0 2A3.5 3.5 0 0 0 4 7.5v9A3.5 3.5 0 0 0 7.5 20h9a3.5 3.5 0 0 0 3.5-3.5v-9A3.5 3.5 0 0 0 16.5 4h-9zm9.25 1.5a1.25 1.25 0 1 1 0 2.5 1.25 1.25 0 0 1 0-2.5zM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm0 2a3 3 0 1 0 .002 6.002A3 3 0 0 0 12 9z" />
          </svg>
        </a>

        <!-- LinkedIn -->
        <a href="https://www.linkedin.com/in/zohar-ilinetsky-5768881bb/" target="_blank" rel="noopener" aria-label="LinkedIn"
          class="p-2 rounded-full border border-gray-500 hover:bg-[#ca8a04] transition">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
            <path d="M4.98 3.5c0 1.38-1.12 2.5-2.5 2.5S0 4.88 0 3.5 1.12 1 2.5 1 4.98 2.12 4.98 3.5zM.08 8.5h4.9V24H.08V8.5zM8.32 8.5h4.7v2.1h.07c.65-1.24 2.24-2.54 4.6-2.54 4.92 0 5.83 3.24 5.83 7.45V24h-4.88v-7.5c0-1.79-.03-4.1-2.5-4.1-2.5 0-2.88 1.95-2.88 3.97V24h-4.88V8.5z" />
          </svg>
        </a>

        <!-- WhatsApp -->
        <a href="<?php echo esc_url($wa_link); ?>" target="_blank" rel="noopener" aria-label="WhatsApp"
          class="p-2 rounded-full border border-gray-500 hover:bg-[#ca8a04] transition">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 32 32" fill="currentColor">
            <path d="M19.11 17.42c-.27-.14-1.59-.78-1.84-.87-.25-.09-.43-.14-.61.14-.18.27-.7.87-.86 1.05-.16.18-.32.2-.59.07-.27-.14-1.14-.42-2.17-1.34-.8-.71-1.34-1.59-1.5-1.86-.16-.27-.02-.42.12-.56.12-.12.27-.32.41-.48.14-.16.18-.27.27-.45.09-.18.05-.34-.02-.48-.07-.14-.61-1.47-.83-2.01-.22-.53-.44-.46-.61-.47h-.52c-.18 0-.48.07-.73.34-.25.27-.96.94-.96 2.29s.98 2.66 1.12 2.85c.14.18 1.93 2.95 4.67 4.13 2.75 1.18 2.75.78 3.24.75.5-.02 1.59-.64 1.81-1.26.23-.61.23-1.14.16-1.26-.07-.11-.25-.18-.52-.32z" />
            <path d="M16 3C9.38 3 4 8.38 4 15a11.9 11.9 0 0 0 1.64 6L4 29l8-1.6A12.92 12.92 0 0 0 16 27c6.62 0 12-5.38 12-12S22.62 3 16 3zm0 22.7c-1.97 0-3.8-.58-5.34-1.58l-.38-.24-4.24.85.87-4.13-.25-.42A9.7 9.7 0 1 1 25.7 15 9.7 9.7 0 0 1 16 25.7z" />
          </svg>
        </a>
      </div>
    </div>


  </div><!-- /grid -->

  <div class="mt-12 pt-6">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center text-sm">
      <p class="text-gray-500 mb-4 md:mb-0">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>

      <div class="flex space-x-6">
        <?php if (get_privacy_policy_url()) : ?>
          <a href="<?php echo esc_url(get_privacy_policy_url()); ?>" class="hover:underline">Privacy Policy</a>
        <?php endif; ?>
        <?php
        $tos_page = get_page_by_path('terms-of-service');
        if ($tos_page) : ?>
          <a href="<?php echo esc_url(get_permalink($tos_page)); ?>" class="hover:underline">Terms of Service</a>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <?php wp_footer(); ?>
</footer>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const items = document.querySelectorAll('.testimonial-item');
    const loadBtn = document.getElementById('load-more');
    let visible = 3;

    loadBtn.addEventListener('click', function() {
      let shown = 0;
      for (let i = visible; i < items.length && shown < 3; i++) {
        items[i].classList.remove('hidden');
        shown++;
      }
      visible += shown;

      if (visible >= items.length) {
        loadBtn.style.display = 'none';
      }
    });
  });
</script>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.group').forEach(el => {
      el.addEventListener('click', () => {
        const menu = el.querySelector('.group-hover\\:block');
        if (menu) {
          menu.classList.toggle('hidden');
        }
      });
    });
  });
</script>