<?php

/**
 * Template Name: Services Page
 */
get_header();
?>

<body <?php body_class(); ?>>

  <?php require_once get_template_directory() . '/nav.php'; ?>

  <!-- HERO -->
  <section class="w-full bg-[url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/services-banner.jpg')] bg-no-repeat bg-cover bg-bottom py-16 px-6 text-white" data-aos="fade-left" data-aos-delay="100">
    <div class="max-w-7xl mx-auto text-center">
      <p class="inline-block text-xs tracking-widest uppercase bg-white/10 px-3 py-1 rounded-full mb-5">B2B Growth • Ops • Brand</p>
      <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-[0_4px_6px_rgba(0,0,0,0.7)]">
        Structure → Systems → Scale
      </h1>
      <p class="text-lg md:text-xl mb-8 drop-shadow-[0_4px_6px_rgba(0,0,0,0.7)]">
        For founders who want predictable pipeline, cleaner ops, and a brand that attracts both clients and talent.
      </p>
      <div class="flex flex-col sm:flex-row gap-3 justify-center">
        <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="inline-block bg-white text-gray-900 font-semibold px-6 py-3 rounded-full shadow hover:bg-yellow-100 transition">Get a Free 20-min Audit</a>
        <a href="#packages" class="inline-block border border-white/60 text-white font-semibold px-6 py-3 rounded-full hover:bg-white/10 transition">See Packages</a>
      </div>
      <div class="mt-8 text-sm opacity-90">
        <span class="mr-3">Average client lift in 90 days:</span>
        <span class="font-semibold">+38% SQL • −27% CAC • +2.1× close rate</span>
      </div>
    </div>
  </section>

  <!-- SERVICES -->
  <section class="bg-gray-50 py-20 px-6 md:px-8 services-page">
    <div class="max-w-7xl mx-auto">
      <h2 class="text-4xl font-bold text-center text-gray-900 mb-3" data-aos="fade-up">What We Do</h2>
      <p class="text-center text-gray-600 max-w-2xl mx-auto mb-16" data-aos="fade-up" data-aos-delay="75">
        We don’t sell “ad management.” We design the machine that creates demand on repeat.
      </p>

      <div class="grid md:grid-cols-2 gap-10 text-gray-700 text-base leading-relaxed">

        <!-- Sales Training & Infrastructure -->
        <article class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300" data-aos="fade-up" data-aos-delay="100">
          <div class="flex items-center gap-4 mb-5">
            <div class="bg-blue-100 p-3 rounded-full">
              <svg class="w-6 h-6 text-blue-800" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M3 4a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v13a2 2 0 0 1-2 2H7l-4 4V4z" />
              </svg>
            </div>
            <h3 class="text-2xl font-semibold text-blue-800">Sales Training & Infrastructure</h3>
          </div>

          <p class="mb-4">Turn reps into closers and calls into systems. Your pipeline gets cleaner; your dashboards tell the truth.</p>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
              <h4 class="text-sm font-semibold text-gray-900 mb-2">Deliverables</h4>
              <ul class="space-y-2 list-disc list-inside">
                <li>CRM architecture & automations</li>
                <li>Call review & coaching frameworks</li>
                <li>Sales playbooks & objection trees</li>
                <li>Performance dashboards (SQL → Close)</li>
              </ul>
            </div>
            <div>
              <h4 class="text-sm font-semibold text-gray-900 mb-2">Expected Outcomes</h4>
              <ul class="space-y-2 list-disc list-inside">
                <li>Shorter sales cycles</li>
                <li>Higher show & close rates</li>
                <li>Forecasts that match reality</li>
                <li>Training that compounds</li>
              </ul>
            </div>
          </div>

          <div class="mt-6 text-sm text-gray-600">
            <span class="font-medium">Mini-win in 14 days:</span> implement 3 call heuristics → +15–20% show rate.
          </div>
        </article>

        <!-- Business Development Consulting -->
        <article class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300" data-aos="fade-up" data-aos-delay="200">
          <div class="flex items-center gap-4 mb-5">
            <div class="bg-green-100 p-3 rounded-full">
              <svg class="w-6 h-6 text-green-800" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M20 6a2 2 0 0 1-2 2H6a2 2 0 0 1 0-4h12a2 2 0 0 1 2 2zm-2 5H6a2 2 0 0 0 0 4h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-1zm0 5H6a2 2 0 0 0 0 4h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-1z" />
              </svg>
            </div>
            <h3 class="text-2xl font-semibold text-green-800">Business Development Consulting</h3>
          </div>

          <p class="mb-4">Deals often come from the rooms you’re not in. We engineer those rooms—then get you invited.</p>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
              <h4 class="text-sm font-semibold text-gray-900 mb-2">Deliverables</h4>
              <ul class="space-y-2 list-disc list-inside">
                <li>Co-branded partnerships map</li>
                <li>Licensing/affiliate models</li>
                <li>Outbound + event playbooks</li>
                <li>Intro asset kit (1-pager, deck)</li>
              </ul>
            </div>
            <div>
              <h4 class="text-sm font-semibold text-gray-900 mb-2">Expected Outcomes</h4>
              <ul class="space-y-2 list-disc list-inside">
                <li>Warm doors that stay warm</li>
                <li>LTV from strategic channels</li>
                <li>Less ad spend dependency</li>
                <li>Faster trust creation</li>
              </ul>
            </div>
          </div>

          <div class="mt-6 text-sm text-gray-600">
            <span class="font-medium">Proof:</span> 6 new partner channels → +31% qualified pipeline in 60 days.
          </div>
        </article>

        <!-- Operations & Scaling Support -->
        <article class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300" data-aos="fade-up" data-aos-delay="300">
          <div class="flex items-center gap-4 mb-5">
            <div class="bg-yellow-100 p-3 rounded-full">
              <svg class="w-6 h-6 text-yellow-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M9 17v-6h13v6m-2 4H4a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h1" />
              </svg>
            </div>
            <h3 class="text-2xl font-semibold text-yellow-700">Operations & Scaling Support</h3>
          </div>

          <p class="mb-4">Scale without chaos. We implement operating cadence, automation, and dashboards that make growth boring—in a good way.</p>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
              <h4 class="text-sm font-semibold text-gray-900 mb-2">Deliverables</h4>
              <ul class="space-y-2 list-disc list-inside">
                <li>RevOps & project systems</li>
                <li>Automation (quotes → invoices)</li>
                <li>Weekly ops scorecards</li>
                <li>Hiring profiles & onboarding</li>
              </ul>
            </div>
            <div>
              <h4 class="text-sm font-semibold text-gray-900 mb-2">Expected Outcomes</h4>
              <ul class="space-y-2 list-disc list-inside">
                <li>Less headcount for same output</li>
                <li>Visibility across teams</li>
                <li>Avoid “hero culture” risk</li>
                <li>Repeatable sprints</li>
              </ul>
            </div>
          </div>
        </article>

        <!-- Brand Building -->
        <article class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300" data-aos="fade-up" data-aos-delay="400">
          <div class="flex items-center gap-4 mb-5">
            <div class="bg-pink-100 p-3 rounded-full">
              <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M12 20h9M4.2 4.2l15.6 15.6M6 12h.01M6 16h.01M6 8h.01M10 12h.01M10 16h.01M10 8h.01" />
              </svg>
            </div>
            <h3 class="text-2xl font-semibold text-pink-600">Brand Building</h3>
          </div>

          <p class="mb-4">Position the brand to pull, not push. Become the obvious choice in your category.</p>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
              <h4 class="text-sm font-semibold text-gray-900 mb-2">Deliverables</h4>
              <ul class="space-y-2 list-disc list-inside">
                <li>Messaging & POV development</li>
                <li>Content pillars & calendar</li>
                <li>Design system guidelines</li>
                <li>Talent brand assets</li>
              </ul>
            </div>
            <div>
              <h4 class="text-sm font-semibold text-gray-900 mb-2">Expected Outcomes</h4>
              <ul class="space-y-2 list-disc list-inside">
                <li>Inbound that compounds</li>
                <li>Premium positioning</li>
                <li>Better candidates, faster</li>
                <li>Higher win rate at list price</li>
              </ul>
            </div>
          </div>
        </article>

      </div>

      <!-- PROCESS -->
      <div class="mt-20" data-aos="fade-up">
        <h3 class="text-2xl font-bold text-gray-900 text-center mb-8">How Engagements Work</h3>
        <ol class="max-w-4xl mx-auto grid md:grid-cols-4 gap-6 text-sm">
          <li class="bg-white p-5 rounded-xl shadow">
            <p class="text-xs uppercase tracking-widest text-gray-500">Step 1</p>
            <p class="font-semibold mt-1">Discovery & Audit</p>
            <p class="mt-2 text-gray-600">90-minute deep-dive + quick-wins map.</p>
          </li>
          <li class="bg-white p-5 rounded-xl shadow">
            <p class="text-xs uppercase tracking-widest text-gray-500">Step 2</p>
            <p class="font-semibold mt-1">Design the System</p>
            <p class="mt-2 text-gray-600">Playbooks, automations, dashboards.</p>
          </li>
          <li class="bg-white p-5 rounded-xl shadow">
            <p class="text-xs uppercase tracking-widest text-gray-500">Step 3</p>
            <p class="font-semibold mt-1">Implement & Coach</p>
            <p class="mt-2 text-gray-600">Training + live call reviews.</p>
          </li>
          <li class="bg-white p-5 rounded-xl shadow">
            <p class="text-xs uppercase tracking-widest text-gray-500">Step 4</p>
            <p class="font-semibold mt-1">Run & Scale</p>
            <p class="mt-2 text-gray-600">Weekly scorecards and iteration.</p>
          </li>
        </ol>
      </div>

      <!-- PACKAGES -->
      <div id="packages" class="mt-20" data-aos="fade-up">
        <h3 class="text-2xl font-bold text-gray-900 text-center mb-8">Engagement Models</h3>
        <div class="grid md:grid-cols-3 gap-6">
          <div class="bg-white p-6 rounded-xl shadow border">
            <p class="text-sm font-semibold text-gray-900">Starter Sprint</p>
            <p class="text-3xl font-bold mt-2">30 days</p>
            <ul class="mt-4 space-y-2 text-gray-700 text-sm">
              <li>Audit + quick-wins</li>
              <li>1 system implemented</li>
              <li>Weekly check-ins</li>
            </ul>
            <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="mt-6 inline-block w-full text-center bg-gray-900 text-white py-2 rounded-lg hover:bg-gray-800">Request scope</a>
          </div>
          <div class="bg-white p-6 rounded-xl shadow border ring-2 ring-yellow-400">
            <p class="text-sm font-semibold text-gray-900">Growth Engine</p>
            <p class="text-3xl font-bold mt-2">90 days</p>
            <ul class="mt-4 space-y-2 text-gray-700 text-sm">
              <li>Sales + Ops stack</li>
              <li>Playbooks + coaching</li>
              <li>Scorecards + reviews</li>
            </ul>
            <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="mt-6 inline-block w-full text-center bg-yellow-500 text-gray-900 py-2 rounded-lg hover:bg-yellow-400">Get proposal</a>
          </div>
          <div class="bg-white p-6 rounded-xl shadow border">
            <p class="text-sm font-semibold text-gray-900">RevOps Advisory</p>
            <p class="text-3xl font-bold mt-2">Ongoing</p>
            <ul class="mt-4 space-y-2 text-gray-700 text-sm">
              <li>Fractional leadership</li>
              <li>Quarterly planning</li>
              <li>On-call support</li>
            </ul>
            <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="mt-6 inline-block w-full text-center bg-gray-900 text-white py-2 rounded-lg hover:bg-gray-800">Book intro call</a>
          </div>
        </div>
      </div>

      <!-- FAQ -->
      <div class="mt-20 max-w-3xl mx-auto" data-aos="fade-up">
        <h3 class="text-2xl font-bold text-gray-900 text-center mb-6">FAQs</h3>
        <div class="divide-y divide-gray-200 bg-white rounded-2xl shadow">
          <?php
          // Basic static FAQ; you can swap with ACF repeater later.
          $faqs = [
            ["What sizes of companies do you work with?", "Seed to Series B, and established SMEs. If you have a sales motion and want predictability, we can help."],
            ["How fast do we see results?", "We aim for one measurable win in the first 14 days, with compounding gains across 30–90 days."],
            ["Do you work remotely or on-site?", "Primarily remote with structured live sessions. On-site available for kickoffs and trainings."],
          ];
          foreach ($faqs as $i => $faq): ?>
            <details class="p-6 group">
              <summary class="flex items-center justify-between cursor-pointer text-gray-900 font-medium">
                <?php echo esc_html($faq[0]); ?>
                <span class="transition-transform group-open:rotate-45 text-gray-500">+</span>
              </summary>
              <p class="mt-3 text-gray-600"><?php echo esc_html($faq[1]); ?></p>
            </details>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Closing CTA -->
      <div class="mt-16 max-w-4xl mx-auto text-center" data-aos="fade-up" data-aos-delay="100">
        <p class="text-xl font-medium text-gray-900">
          If growth feels random, the system is missing. Let’s build it.
        </p>
        <div class="mt-6">
          <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="inline-block bg-gray-900 text-white font-semibold px-6 py-3 rounded-full shadow hover:bg-gray-800 transition">
            Contact Us to Get Started
          </a>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>

  <!-- AOS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      once: false,
      duration: 800,
      offset: 100
    });
  </script>

  <!-- FAQ Schema (SEO) -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
          "@type": "Question",
          "name": "What sizes of companies do you work with?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Seed to Series B, and established SMEs. If you have a sales motion and want predictability, we can help."
          }
        },
        {
          "@type": "Question",
          "name": "How fast do we see results?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We aim for one measurable win in the first 14 days, with compounding gains across 30–90 days."
          }
        },
        {
          "@type": "Question",
          "name": "Do you work remotely or on-site?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Primarily remote with structured live sessions. On-site available for kickoffs and trainings."
          }
        }
      ]
    }
  </script>

</body>

</html>