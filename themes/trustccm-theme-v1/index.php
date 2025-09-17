<?php get_header();

?>


<body <?php body_class(); ?>>



  <section class="hero-video-wrapper">


    <?php require_once get_template_directory() . '/nav.php'; ?>


    <video autoplay muted loop playsinline class="hero-video">
      <source src="<?php echo get_template_directory_uri(); ?>/assets/background.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>

    <!-- Overlay image that stays on top of video -->
    <div class="video-cover-overlay">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/video-poster.png" alt="Video Cover">
    </div>

    <div class="hero-overlay">
      <div class="container-video">
        <div class="grid gap-4 md:grid-cols-2">
          <!-- Left Content -->
          <div class="hero-text">
            <div class="hero-meta" data-aos="fade-right" data-aos-delay="100">500+ million in revenue generated for businesses</div>
            <h1 data-aos="fade-down" data-aos-delay="100">We Build Growth Machines.</h1>
            <p data-aos="fade-down" data-aos-delay="100">Led by Zohar Ilinetsky, TRUSTCCM helps founders scale their business, increase sales,
              and build bulletproof infrastructure.</p>
            <div class="hero-buttons">
              <a href="<?php echo home_url('/contact-us'); ?>" class="btn btn-light book-a-discovery-btn" data-aos="fade-right" data-aos-delay="100">Book a Discovery Call →</a>
              <!-- <a href="#" class="btn btn-dark">get your growth scorecard →</a> -->
            </div>
          </div>

          <!-- Right Stats -->
          <div class="hero-stats" data-aos="fade-left" data-aos-delay="100">
            <div class="stat-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/s1.png" alt="">
              <div><strong>3500%</strong> →<br>Raise in sales for construction companies</div>
            </div>

            <div class="stat-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/s2.png" alt="">
              <div><strong>500%</strong> →<br>Scaling growth for the art industry</div>
            </div>

            <div class="stat-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/s3.png" alt="">
              <div><strong>25M</strong> →<br>Raises for startups in South East Asia</div>
            </div>

            <div class="stat-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/s4.png" alt="">
              <div><strong>5x</strong> →<br>Revenue for jewelry businesses</div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="text-center py-16 black-bg">
    <h2 class="text-sm tracking-widest text-gray-400 uppercase">Globally Recognized</h2>
    <h1 class="text-3xl md:text-4xl font-bold mt-2">
      Working With Renowned Brands <br class="hidden sm:block"> as well as Local Businesses
    </h1>
  </section>


  <section class="bg-[#686868] text-white py-20 px-4 md:px-16">
    <div class="max-w-[90vw] mx-auto grid md:grid-cols-2 gap-10 items-start">
      <!-- <div data-aos="fade-up"> -->
      <div data-aos="fade-right">
        <span class="inline-block text-sm font-semibold bg-[#a16207] text-white px-3 py-1 rounded-full mb-4">Our Process</span>
        <h2 class="text-4xl md:text-5xl font-bold mb-8">Core Offerings:</h2>
        <div class="flex flex-wrap gap-4">
          <a href="<?php echo home_url('/contact-us'); ?>" class="bg-[#ca8a04] text-white px-6 py-3 rounded-md font-semibold">Get Started</a>
          <a href="<?php echo home_url('/case-studies'); ?>" class="border border-[#f1b73d] text-[#f1b73d] px-6 py-3 rounded-md font-semibold">See Case Studies</a>
        </div>
      </div>

      <div class="space-y-12">
        <div class="flex gap-6 items-start" data-aos="fade-up" data-aos-delay="100">
          <div class="flex flex-col items-center">
            <span class="text-4xl font-bold text-white">01</span>
            <div class="w-1 h-24 bg-yellow mt-2" data-aos="grow-vert"></div>
          </div>
          <div>
            <h3 class="text-xl font-semibold mb-2">Sales Training &amp; Development</h3>
            <p class="text-gray-300 mb-4">
              We'll get to know you, your goals, and business. We’ll provide quick wins to help you accelerate growth and outline next steps.
              In addition, we will create a structured sales process that allows you to scale both your sales teams and their managers effectively.
            </p>
            <a href="<?php echo home_url('/contact-us'); ?>" class="hover:underline font-medium inline-flex items-center gap-1 color-yellow">
              Meet with Us <span>→</span>
            </a>
          </div>
        </div>



        <div class="flex gap-6 items-start" data-aos="fade-up">
          <div class="flex flex-col items-center">
            <span class="text-4xl font-bold text-white">02</span>
            <div class="w-1 h-24 bg-yellow mt-2" data-aos="grow-vert"></div>
          </div>
          <div>
            <h3 class="text-xl font-semibold mb-2">Business Infrastructure &amp; Systems</h3>
            <p class="text-gray-300 mb-4">
              We can provide one-time consultation or an ongoing process that’ll help you grow your business.
              If ongoing, we’ll build a go-to-market strategy to hit your goals.
            </p>
            <a href="<?php echo home_url('/contact-us'); ?>" class="hover:underline font-medium inline-flex items-center gap-1 color-yellow">
              Get Your Plan <span>→</span>
            </a>
          </div>
        </div>


        <!-- Step 3 -->
        <div class="flex gap-6 items-start" data-aos="fade-up">
          <div class="flex flex-col items-center">
            <span class="text-4xl font-bold text-white">03</span>
            <div class="w-1 h-24 bg-yellow mt-2" data-aos="grow-vert"></div>
          </div>
          <div>
            <h3 class="text-xl font-semibold mb-2">Market Expansion & Strategic Partnerships</h3>
            <p class="text-gray-300 mb-4">Where other agencies say you’ll start to see results months from now, our clients often generate net new leads within the first two weeks.</p>
            <a href="<?php echo home_url('/contact-us'); ?>" class="hover:underline font-medium inline-flex items-center gap-1 color-yellow">Start Growth Marketing <span>→</span></a>
          </div>
        </div>


        <div class="flex gap-6 items-start" data-aos="fade-up">
          <div class="flex flex-col items-center">
            <span class="text-4xl font-bold text-white">04</span>
            <div class="w-1 h-48 bg-yellow mt-2" data-aos="grow-vert"></div>
          </div>
          <div>
            <h3 class="text-xl font-semibold mb-2">Brand Positioning &amp; Social Growth</h3>

            <p class="text-gray-300 mb-3">
              Content planning with an editorial calendar and clear guardrails for voice, visuals, and cadence—so every post reinforces your brand.
            </p>

            <ul class="text-gray-300 mb-4 list-decimal list-inside space-y-1">
              <li>Define goals &amp; audience</li>
              <li>Map topics &amp; keywords</li>
              <li>Create outlines &amp; assign owners</li>
              <li>Produce assets (copy, design, video)</li>
              <li>Edit &amp; QA against brand guidelines</li>
              <li>Publish &amp; schedule across channels</li>
              <li>Repurpose, distribute, engage</li>
              <li>Measure &amp; iterate (CTR, reach, leads)</li>
            </ul>

            <a href="<?php echo home_url('/contact-us'); ?>" class="hover:underline font-medium inline-flex items-center gap-1 color-yellow">
              Let's Go <span>→</span>
            </a>
          </div>
        </div>
        <div class="flex gap-6 items-start" data-aos="fade-up">
          <div class="flex flex-col items-center">
            <span class="text-4xl font-bold text-white">05</span>
            <div class="w-1 h-24 bg-yellow mt-2" data-aos="grow-vert"></div>
          </div>
          <div>
            <h3 class="text-xl font-semibold mb-2">Marketing Strategy Built From Scratch</h3>

            <p class="text-gray-300 mb-3">
              A complete marketing strategy designed from the ground up, tailored to your goals and industry.
            </p>

            <ul class="text-gray-300 mb-4 list-disc list-inside space-y-1">
              <li>Restructure social media accounts to attract more followers and generate leads</li>
              <li>Design or rebuild your website for stronger positioning and higher conversions</li>
              <li>Create an integrated plan connecting brand, channels, and campaigns</li>
            </ul>

            <a href="<?php echo home_url('/contact-us'); ?>" class="hover:underline font-medium inline-flex items-center gap-1 color-yellow">
              Start Strategy <span>→</span>
            </a>
          </div>
        </div>












      </div>




    </div>
  </section>
  <section id="advisory" class="relative overflow-hidden py-20 md:py-28 bg-slate-50 text-slate-900">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <!-- Headline -->
      <header class="max-w-3xl" data-aos="fade-up" data-aos-duration="700">
        <span class="inline-block text-xs font-semibold bg-[#a78bfa]/20 text-[#a78bfa] px-3 py-1 rounded-full mb-3">
          Advisory
        </span>
        <h2 class="text-3xl md:text-5xl font-bold tracking-tight">Advisory Services: Helping Small Businesses Scale</h2>
        <p class="mt-3 text-lg text-slate-600">From audit to growth — complete business development and marketing support.</p>
      </header>

      <!-- Intro -->
      <p class="mt-6 max-w-3xl text-slate-700 leading-relaxed" data-aos="fade-up" data-aos-delay="100" data-aos-duration="700">
        At TrustCCM, we help small businesses unlock growth by combining financial and online presence audits with tailored business development strategies. Our end-to-end advisory solutions are designed to increase revenue, boost engagement, and position your brand for long-term success.
      </p>

      <!-- Content Cards -->
      <div class="mt-12 grid gap-6 sm:gap-8 sm:grid-cols-2 lg:grid-cols-3">
        <!-- Card 1 -->
        <div class="group relative rounded-2xl bg-white p-6 shadow-md ring-1 ring-slate-200 hover:shadow-lg transition"
          data-aos="fade-up" data-aos-delay="0">
          <div class="absolute inset-x-0 -top-px h-px bg-gradient-to-r from-transparent via-[#a78bfa]/40 to-transparent"></div>
          <div class="flex items-center gap-3">
            <div class="grid h-11 w-11 place-items-center rounded-lg bg-[#a78bfa]/10 text-[#a78bfa] ring-1 ring-[#a78bfa]/30">
              <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                <rect x="5" y="3" width="14" height="18" rx="2" />
                <path d="M9 7h6M8 11h8M8 15h5" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold">Business Audit</h3>
          </div>
          <p class="mt-3 text-slate-600">We review financial performance, online presence, and brand positioning, then benchmark you against competitors.</p>
        </div>

        <!-- Card 2 -->
        <div class="group relative rounded-2xl bg-white p-6 shadow-md ring-1 ring-slate-200 hover:shadow-lg transition"
          data-aos="fade-up" data-aos-delay="75">
          <div class="absolute inset-x-0 -top-px h-px bg-gradient-to-r from-transparent via-[#a78bfa]/40 to-transparent"></div>
          <div class="flex items-center gap-3">
            <div class="grid h-11 w-11 place-items-center rounded-lg bg-[#a78bfa]/10 text-[#a78bfa] ring-1 ring-[#a78bfa]/30">
              <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                <path d="M12 19l9-9-3-3-9 9-3 1 1-3 9-9" />
                <path d="M16 5l3 3" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold">Content & Engagement</h3>
          </div>
          <p class="mt-3 text-slate-600">Plan content that matches your brand voice and turn casual visitors into active followers.</p>
        </div>

        <!-- Card 3 -->
        <div class="group relative rounded-2xl bg-white p-6 shadow-md ring-1 ring-slate-200 hover:shadow-lg transition"
          data-aos="fade-up" data-aos-delay="150">
          <div class="absolute inset-x-0 -top-px h-px bg-gradient-to-r from-transparent via-[#a78bfa]/40 to-transparent"></div>
          <div class="flex items-center gap-3">
            <div class="grid h-11 w-11 place-items-center rounded-lg bg-[#a78bfa]/10 text-[#a78bfa] ring-1 ring-[#a78bfa]/30">
              <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                <path d="M3 11l12-5v12L3 13v-2z" />
                <path d="M15 8a4 4 0 0 0 0 8" />
                <path d="M6 14l1.5 4.5a2 2 0 0 0 2.5 1.3L12 19" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold">Digital Marketing & Social Media</h3>
          </div>
          <p class="mt-3 text-slate-600">We combine organic and paid strategies to expand your reach and optimize ROI.</p>
        </div>

        <!-- Card 4 -->
        <div class="group relative rounded-2xl bg-white p-6 shadow-md ring-1 ring-slate-200 hover:shadow-lg transition"
          data-aos="fade-up" data-aos-delay="225">
          <div class="absolute inset-x-0 -top-px h-px bg-gradient-to-r from-transparent via-[#a78bfa]/40 to-transparent"></div>
          <div class="flex items-center gap-3">
            <div class="grid h-11 w-11 place-items-center rounded-lg bg-[#a78bfa]/10 text-[#a78bfa] ring-1 ring-[#a78bfa]/30">
              <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                <path d="M12 21a9 9 0 1 1 9-9" />
                <path d="M12 12l5-2" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold">Website & SEO Optimization</h3>
          </div>
          <p class="mt-3 text-slate-600">We improve site speed, SEO, and conversion paths to maximize business growth.</p>
        </div>

        <!-- Card 5 -->
        <div class="group relative rounded-2xl bg-white p-6 shadow-md ring-1 ring-slate-200 hover:shadow-lg transition lg:col-span-2"
          data-aos="fade-up" data-aos-delay="300">
          <div class="absolute inset-x-0 -top-px h-px bg-gradient-to-r from-transparent via-[#a78bfa]/40 to-transparent"></div>
          <div class="flex items-center gap-3">
            <div class="grid h-11 w-11 place-items-center rounded-lg bg-[#a78bfa]/10 text-[#a78bfa] ring-1 ring-[#a78bfa]/30">
              <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="8" />
                <circle cx="12" cy="12" r="3" />
                <path d="M12 2v3M12 19v3M2 12h3M19 12h3" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold">Lead Generation &amp; Growth Strategy</h3>
          </div>
          <p class="mt-3 text-slate-600">
            We design scalable funnels and a roadmap for long-term sustainable growth.
            And utilise AI tools as well as SEO and other techniques to grow your brand.
          </p>
        </div>
      </div>

      <!-- Process Flow -->
      <div class="mt-14" data-aos="fade-up" data-aos-delay="120">
        <h4 class="text-sm font-semibold uppercase tracking-wider text-[#a78bfa]">How We Work</h4>
        <div class="mt-4">
          <div class="flex flex-col xl:flex-row items-stretch gap-3 py-3 px-2 rounded-2xl bg-white ring-1 ring-slate-200 shadow-sm">
            <!-- Step 1 -->
            <div class="w-full xl:min-w-[190px] xl:flex-1 rounded-xl border border-slate-300 bg-slate-50 p-4">
              <div class="text-xs font-semibold text-[#a78bfa] tracking-wide uppercase">Step 1</div>
              <div class="mt-1 text-base font-semibold text-slate-900">Audit</div>
              <p class="mt-1 text-sm text-slate-600">Baseline review and priorities.</p>
            </div>
            <!-- Arrow -->
            <div class="grid place-items-center xl:px-1">
              <svg class="h-6 w-6 text-slate-500 xl:hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M12 5v14" />
                <path d="M5 13l7 7 7-7" />
              </svg>
              <svg class="h-6 w-6 text-slate-500 hidden xl:block" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M5 12h14" />
                <path d="M13 5l7 7-7 7" />
              </svg>
            </div>
            <!-- Step 2 -->
            <div class="w-full xl:min-w-[190px] xl:flex-1 rounded-xl border border-slate-300 bg-slate-50 p-4">
              <div class="text-xs font-semibold text-[#a78bfa] tracking-wide uppercase">Step 2</div>
              <div class="mt-1 text-base font-semibold text-slate-900">Content</div>
              <p class="mt-1 text-sm text-slate-600">Messaging & assets plan.</p>
            </div>
            <!-- Arrow -->
            <div class="grid place-items-center xl:px-1">
              <svg class="h-6 w-6 text-slate-500 xl:hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M12 5v14" />
                <path d="M5 13l7 7 7-7" />
              </svg>
              <svg class="h-6 w-6 text-slate-500 hidden xl:block" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M5 12h14" />
                <path d="M13 5l7 7-7 7" />
              </svg>
            </div>
            <!-- Step 3 -->
            <div class="w-full xl:min-w-[190px] xl:flex-1 rounded-xl border border-slate-300 bg-slate-50 p-4">
              <div class="text-xs font-semibold text-[#a78bfa] tracking-wide uppercase">Step 3</div>
              <div class="mt-1 text-base font-semibold text-slate-900">Marketing</div>
              <p class="mt-1 text-sm text-slate-600">Organic + paid rollout.</p>
            </div>
            <!-- Arrow -->
            <div class="grid place-items-center xl:px-1">
              <svg class="h-6 w-6 text-slate-500 xl:hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M12 5v14" />
                <path d="M5 13l7 7 7-7" />
              </svg>
              <svg class="h-6 w-6 text-slate-500 hidden xl:block" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M5 12h14" />
                <path d="M13 5l7 7-7 7" />
              </svg>
            </div>
            <!-- Step 4 -->
            <div class="w-full xl:min-w-[190px] xl:flex-1 rounded-xl border border-slate-300 bg-slate-50 p-4">
              <div class="text-xs font-semibold text-[#a78bfa] tracking-wide uppercase">Step 4</div>
              <div class="mt-1 text-base font-semibold text-slate-900">Optimization</div>
              <p class="mt-1 text-sm text-slate-600">SEO, CRO & speed.</p>
            </div>
            <!-- Arrow -->
            <div class="grid place-items-center xl:px-1">
              <svg class="h-6 w-6 text-slate-500 xl:hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M12 5v14" />
                <path d="M5 13l7 7 7-7" />
              </svg>
              <svg class="h-6 w-6 text-slate-500 hidden xl:block" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M5 12h14" />
                <path d="M13 5l7 7-7 7" />
              </svg>
            </div>
            <!-- Step 5 -->
            <div class="w-full xl:min-w-[190px] xl:flex-1 rounded-xl border border-slate-300 bg-slate-50 p-4">
              <div class="text-xs font-semibold text-[#a78bfa] tracking-wide uppercase">Step 5</div>
              <div class="mt-1 text-base font-semibold text-slate-900">Lead Gen</div>
              <p class="mt-1 text-sm text-slate-600">Funnels & scale.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- CTAs -->
      <div class="mt-12 flex flex-col sm:flex-row gap-3" data-aos="fade-up" data-aos-delay="150">
        <a href="<?php echo home_url('/contact-us'); ?>" class="inline-flex items-center justify-center rounded-md bg-[#ca8a04] px-6 py-3 text-white font-semibold shadow hover:bg-[#a16207]">
          Book Your Free Audit
        </a>
        <a href="<?php echo home_url('/advisory'); ?>" class="inline-flex items-center justify-center rounded-md border border-slate-300 text-slate-700 px-6 py-3 font-semibold hover:bg-slate-100">
          Learn More About Advisory
        </a>
      </div>
    </div>
  </section>




  <section class="bg-gray-100 py-20 px-4">
    <div class="max-w-6xl mx-auto text-center">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-12">
        What Our Clients Say
      </h2>

      <div id="testimonial-wrapper" class="grid md:grid-cols-3 gap-8" data-aos="fade-up">
        <!-- Each card needs class "testimonial-item" -->
        <?php
        $testimonials = [
          ["Sophia Martinez", "Founder, Elevate Homes", "avatar1.jpg", "Working with Zohar and the GrowthMethod team gave us clarity and systems we never knew we needed. Revenue grew and stress dropped."],
          ["Darren Cole", "CEO, Apex Interiors", "avatar2.jpg", "GrowthMethod didn’t just consult—they rebuilt our sales process, trained our team, and gave us tools that actually worked."],
          ["Alina Kwan", "Managing Director, Kwan Logistics", "avatar3.jpg", "Zohar’s team helped us automate operations that used to take 3 people. It’s a game-changer."],
          ["Marcus Lee", "CMO, NextPhase Solutions", "avatar4.jpg", "We saw our sales cycle shorten and our close rates increase within the first month."],
          ["Lana Brooks", "Operations Lead, ThriveCare Clinics", "avatar5.jpg", "The structure and clarity they brought to our hiring process was exactly what we needed to scale."],
          ["Jamal Rivera", "Founder, NovaTech Ventures", "avatar6.jpg", "With GrowthMethod, I finally stepped out of daily firefighting and into real CEO leadership."],
          ["Emily Zhang", "Creative Director, Frame & Form", "avatar7.jpg", "Their branding strategy not only grew our following—it attracted serious clients who aligned with our vision."],
          ["Carlos Navarro", "Head of Sales, Beacon Energy", "avatar8.jpg", "Our outbound systems were built from scratch, and now our pipeline is more predictable than ever."],
          ["Tasha Miller", "Founder, StoryHaus Media", "avatar9.jpg", "Zohar’s frameworks helped me productize my offers and finally grow beyond referrals."]


        ];
        foreach ($testimonials as $i => $t): ?>
          <div class="testimonial-item bg-white shadow-lg rounded-xl p-6 <?php echo $i >= 3 ? 'hidden' : ''; ?>">
            <div class="text-gray-600 italic mb-4">"<?php echo $t[3]; ?>"</div>
            <div class="flex items-center gap-4">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/avatar/<?php echo $t[2]; ?>" class="h-12 w-12 rounded-full object-cover" alt="<?php echo $t[0]; ?>">
              <div>
                <p class="text-sm font-semibold text-gray-800"><?php echo $t[0]; ?></p>
                <p class="text-xs text-gray-500"><?php echo $t[1]; ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <button id="load-more" class="mt-8 bg-yellow-600 hover:bg-yellow-700 text-white font-semibold px-6 py-3 rounded-md">
        Load More
      </button>
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