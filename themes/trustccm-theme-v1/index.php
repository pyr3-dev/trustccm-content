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
        <div class="hero-grid">
          <!-- Left Content -->
          <div class="hero-text">
            <div class="hero-meta" data-aos="fade-right" data-aos-delay="100">50+ million in revenue generated for businesses</div>
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
              <div><strong>97%</strong> →<br>Increase in online revenue for Europ Assistance</div>
            </div>
            <div class="stat-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/s2.png" alt="">
              <div><strong>200%</strong> →<br>In qualitative leads for Sip well</div>
            </div>
            <div class="stat-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/s3.png" alt="">
              <div><strong>70%</strong> →<br>Increase in online market share for ISB</div>
            </div>
            <div class="stat-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/s4.png" alt="">
              <div><strong>210%</strong> →<br>Growth in leads and revenue for Edenred</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="text-center py-16 black-bg">
    <h2 class="text-sm tracking-widest text-gray-400 uppercase">Globally Recognized</h2>
    <h1 class="text-3xl md:text-4xl font-bold mt-2 mb-10">Working With Renowned Brands</h1>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 lg:grid-cols-5 gap-10 px-8 max-w-6xl mx-auto" data-aos="fade-left" data-aos-delay="100">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/logo/hp.png" alt="HP" class="h-20 mx-auto">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/logo/adobe.png" alt="Adobe" class="h-20 mx-auto">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/logo/western_union.png" alt="Western Union" class="h-20 mx-auto">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/logo/google.png" alt="Google" class="h-20 mx-auto">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/logo/linkedin.png" alt="LinkedIn" class="h-20 mx-auto">

    </div>
  </section>


  <section class="bg-[#686868] text-white py-20 px-4 md:px-16">
    <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-2 items-start">
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
            <h3 class="text-xl font-semibold mb-2"> Sales Training & Development</h3>
            <p class="text-gray-300 mb-4">We'll get to know you, your goals, and business. We’ll provide quick wins to help you accelerate growth and outline next steps</p>
            <a href="<?php echo home_url('/contact-us'); ?>" class=" hover:underline font-medium inline-flex items-center gap-1 color-yellow">Meet with Us <span>→</span></a>
          </div>
        </div>


        <div class="flex gap-6 items-start" data-aos="fade-up">
          <div class="flex flex-col items-center">
            <span class="text-4xl font-bold text-white">02</span>
            <div class="w-1 h-24 bg-yellow mt-2" data-aos="grow-vert"></div>
          </div>
          <div>
            <h3 class="text-xl font-semibold mb-2"> Business Infrastructure & Systems</h3>
            <p class="text-gray-300 mb-4">We can work together ongoing or as a one-time project. If ongoing, we’ll build a go-to-market strategy to hit your goals.</p>
            <a href="<?php echo home_url('/contact-us'); ?>" class="hover:underline font-medium inline-flex items-center gap-1 color-yellow">Get Your Plan <span>→</span></a>
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
            <div class="w-1 h-24 bg-yellow mt-2" data-aos="grow-vert"></div>
          </div>
          <div>
            <h3 class="text-xl font-semibold mb-2">Brand Positioning & Social Growth</h3>

            <a href="<?php echo home_url('/contact-us'); ?>" class="hover:underline font-medium inline-flex items-center gap-1 color-yellow">Let's Go<span>→</span></a>
          </div>
        </div>










      </div>




    </div>
  </section>
  <section id="advisory" class="relative overflow-hidden py-20 md:py-28 bg-slate-50">
    <!-- Decorative background -->
    <div aria-hidden="true" class="pointer-events-none absolute inset-0">
      <div class="absolute -top-40 -right-24 h-80 w-80 rounded-full bg-gradient-to-tr from-blue-500/10 via-indigo-500/10 to-purple-500/10 blur-3xl"></div>
      <div class="absolute -bottom-32 -left-24 h-72 w-72 rounded-full bg-gradient-to-br from-cyan-400/10 via-sky-500/10 to-blue-600/10 blur-3xl"></div>
    </div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <!-- Headline -->
      <header class="max-w-3xl" data-aos="fade-up" data-aos-duration="700">
        <span class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white/70 px-3 py-1 text-xs font-medium text-slate-700 shadow-sm backdrop-blur">
          <span class="h-1.5 w-1.5 rounded-full bg-blue-600"></span>
          Advisory & Growth
        </span>
        <h2 class="mt-4 text-3xl md:text-5xl font-semibold tracking-tight text-slate-900">
          Advisory Services: Helping Small Businesses Scale
        </h2>
        <p class="mt-3 text-lg text-slate-600">
          From audit to growth — complete business development and marketing support.
        </p>
      </header>

      <!-- Intro Paragraph -->
      <p class="mt-6 max-w-3xl text-slate-700 leading-relaxed" data-aos="fade-up" data-aos-delay="100" data-aos-duration="700">
        At TrustCCM, we help small businesses unlock growth by combining financial and online presence audits with tailored business development strategies. Our end-to-end advisory solutions are designed to increase revenue, boost engagement, and position your brand for long-term success.
      </p>

      <!-- Content Blocks -->
      <div class="mt-12 grid gap-6 sm:gap-8 sm:grid-cols-2 lg:grid-cols-3">
        <!-- 1. Business Audit -->
        <div class="group relative rounded-2xl bg-white/80 p-6 shadow-sm ring-1 ring-slate-200 backdrop-blur transition hover:shadow-lg hover:-translate-y-0.5"
          data-aos="fade-up" data-aos-delay="0" data-aos-duration="700">
          <div class="absolute inset-x-0 -top-px h-px bg-gradient-to-r from-transparent via-blue-500/40 to-transparent"></div>
          <div class="flex items-center gap-3">
            <?php // Clipboard/Audit icon 
            ?>
            <div class="grid h-12 w-12 place-items-center rounded-xl bg-blue-50 text-blue-700 ring-1 ring-blue-100 group-hover:bg-blue-100 transition">
              <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                <rect x="5" y="3" width="14" height="18" rx="2"></rect>
                <path d="M9 7h6M8 11h8M8 15h5" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold text-slate-900">Business Audit</h3>
          </div>
          <p class="mt-3 text-slate-600">We review financial performance, online presence, and brand positioning, then benchmark you against competitors to uncover quick wins and long-term opportunities.</p>
          <ul class="mt-4 space-y-1 text-slate-700">
            <li class="flex items-start gap-2"><span class="mt-1 h-1.5 w-1.5 rounded-full bg-blue-600"></span> Financial performance review</li>
            <li class="flex items-start gap-2"><span class="mt-1 h-1.5 w-1.5 rounded-full bg-blue-600"></span> Online presence & brand positioning check</li>
            <li class="flex items-start gap-2"><span class="mt-1 h-1.5 w-1.5 rounded-full bg-blue-600"></span> Competitor benchmarking</li>
          </ul>
        </div>

        <!-- 2. Content & Engagement -->
        <div class="group relative rounded-2xl bg-white/80 p-6 shadow-sm ring-1 ring-slate-200 backdrop-blur transition hover:shadow-lg hover:-translate-y-0.5"
          data-aos="fade-up" data-aos-delay="75" data-aos-duration="700">
          <div class="absolute inset-x-0 -top-px h-px bg-gradient-to-r from-transparent via-indigo-500/40 to-transparent"></div>
          <div class="flex items-center gap-3">
            <?php // Pen/Content icon 
            ?>
            <div class="grid h-12 w-12 place-items-center rounded-xl bg-indigo-50 text-indigo-700 ring-1 ring-indigo-100 group-hover:bg-indigo-100 transition">
              <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                <path d="M12 19l9-9-3-3-9 9-3 1 1-3 9-9" />
                <path d="M16 5l3 3" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold text-slate-900">Content & Engagement</h3>
          </div>
          <p class="mt-3 text-slate-600">Plan content that matches your brand voice and convert casual visitors into active followers through consistent messaging and community engagement.</p>
          <ul class="mt-4 space-y-1 text-slate-700">
            <li class="flex items-start gap-2"><span class="mt-1 h-1.5 w-1.5 rounded-full bg-indigo-600"></span> Content creation planning</li>
            <li class="flex items-start gap-2"><span class="mt-1 h-1.5 w-1.5 rounded-full bg-indigo-600"></span> Guidance for brand voice & messaging</li>
            <li class="flex items-start gap-2"><span class="mt-1 h-1.5 w-1.5 rounded-full bg-indigo-600"></span> Increasing audience engagement</li>
          </ul>
        </div>

        <!-- 3. Digital Marketing & Social Media -->
        <div class="group relative rounded-2xl bg-white/80 p-6 shadow-sm ring-1 ring-slate-200 backdrop-blur transition hover:shadow-lg hover:-translate-y-0.5"
          data-aos="fade-up" data-aos-delay="150" data-aos-duration="700">
          <div class="absolute inset-x-0 -top-px h-px bg-gradient-to-r from-transparent via-violet-500/40 to-transparent"></div>
          <div class="flex items-center gap-3">
            <?php // Megaphone/Marketing icon 
            ?>
            <div class="grid h-12 w-12 place-items-center rounded-xl bg-violet-50 text-violet-700 ring-1 ring-violet-100 group-hover:bg-violet-100 transition">
              <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                <path d="M3 11l12-5v12L3 13v-2z" />
                <path d="M15 8a4 4 0 0 0 0 8" />
                <path d="M6 14l1.5 4.5a2 2 0 0 0 2.5 1.3L12 19" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold text-slate-900">Digital Marketing & Social Media</h3>
          </div>
          <p class="mt-3 text-slate-600">Combine organic and paid strategies to reach your ideal audience. We manage channels, optimize ad spend, and explore partnerships to expand your reach.</p>
          <ul class="mt-4 space-y-1 text-slate-700">
            <li class="flex items-start gap-2"><span class="mt-1 h-1.5 w-1.5 rounded-full bg-violet-600"></span> Social media management</li>
            <li class="flex items-start gap-2"><span class="mt-1 h-1.5 w-1.5 rounded-full bg-violet-600"></span> Paid ads & organic growth strategy</li>
            <li class="flex items-start gap-2"><span class="mt-1 h-1.5 w-1.5 rounded-full bg-violet-600"></span> Influencer & collaboration opportunities</li>
          </ul>
        </div>

        <!-- 4. Website & SEO Optimization -->
        <div class="group relative rounded-2xl bg-white/80 p-6 shadow-sm ring-1 ring-slate-200 backdrop-blur transition hover:shadow-lg hover:-translate-y-0.5"
          data-aos="fade-up" data-aos-delay="225" data-aos-duration="700">
          <div class="absolute inset-x-0 -top-px h-px bg-gradient-to-r from-transparent via-sky-500/40 to-transparent"></div>
          <div class="flex items-center gap-3">
            <?php // Gauge/Optimization icon 
            ?>
            <div class="grid h-12 w-12 place-items-center rounded-xl bg-sky-50 text-sky-700 ring-1 ring-sky-100 group-hover:bg-sky-100 transition">
              <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                <path d="M12 21a9 9 0 1 1 9-9" />
                <path d="M12 12l5-2" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold text-slate-900">Website & SEO Optimization</h3>
          </div>
          <p class="mt-3 text-slate-600">Audit site performance, improve search visibility, and streamline conversion paths to turn more visitors into leads and customers.</p>
          <ul class="mt-4 space-y-1 text-slate-700">
            <li class="flex items-start gap-2"><span class="mt-1 h-1.5 w-1.5 rounded-full bg-sky-600"></span> Website performance audit</li>
            <li class="flex items-start gap-2"><span class="mt-1 h-1.5 w-1.5 rounded-full bg-sky-600"></span> SEO & keyword positioning</li>
            <li class="flex items-start gap-2"><span class="mt-1 h-1.5 w-1.5 rounded-full bg-sky-600"></span> Conversion optimization</li>
          </ul>
        </div>

        <!-- 5. Lead Generation & Growth Strategy -->
        <div class="group relative rounded-2xl bg-white/80 p-6 shadow-sm ring-1 ring-slate-200 backdrop-blur transition hover:shadow-lg hover:-translate-y-0.5 lg:col-span-2"
          data-aos="fade-up" data-aos-delay="300" data-aos-duration="700">
          <div class="absolute inset-x-0 -top-px h-px bg-gradient-to-r from-transparent via-fuchsia-500/40 to-transparent"></div>
          <div class="flex items-center gap-3">
            <?php // Target/Leads icon 
            ?>
            <div class="grid h-12 w-12 place-items-center rounded-xl bg-fuchsia-50 text-fuchsia-700 ring-1 ring-fuchsia-100 group-hover:bg-fuchsia-100 transition">
              <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                <circle cx="12" cy="12" r="8" />
                <circle cx="12" cy="12" r="3" />
                <path d="M12 2v3M12 19v3M2 12h3M19 12h3" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold text-slate-900">Lead Generation & Growth Strategy</h3>
          </div>
          <p class="mt-3 text-slate-600">Design end-to-end funnels and sales support that scale with you, culminating in a clear, actionable roadmap for sustainable growth.</p>
          <ul class="mt-4 space-y-1 text-slate-700">
            <li class="flex items-start gap-2"><span class="mt-1 h-1.5 w-1.5 rounded-full bg-fuchsia-600"></span> End-to-end marketing funnels</li>
            <li class="flex items-start gap-2"><span class="mt-1 h-1.5 w-1.5 rounded-full bg-fuchsia-600"></span> Sales strategy support</li>
            <li class="flex items-start gap-2"><span class="mt-1 h-1.5 w-1.5 rounded-full bg-fuchsia-600"></span> Long-term growth roadmap</li>
          </ul>
        </div>
      </div>

      <!-- Process Flow Diagram (HTML-only, column on mobile; row on md+) -->
      <div class="mt-14" data-aos="fade-up" data-aos-duration="700">
        <h4 class="text-sm font-semibold uppercase tracking-wider text-slate-700">How We Work</h4>

        <div class="mt-4">
          <!-- Column on mobile; row on md+ -->
          <div class="flex flex-col md:flex-row items-stretch gap-3 py-3 px-2 rounded-2xl bg-white/90 ring-1 ring-slate-200 shadow-sm md:overflow-x-auto">
            <!-- Step 1 -->
            <div class="w-full md:min-w-[190px] md:flex-1 rounded-xl border border-blue-200 bg-blue-50 p-4" data-aos="fade-up" data-aos-delay="0">
              <div class="text-xs font-semibold text-blue-700 tracking-wide uppercase">Step 1</div>
              <div class="mt-1 text-base font-semibold text-blue-900">Audit</div>
              <p class="mt-1 text-sm text-blue-800/80">Baseline review and priorities.</p>
            </div>

            <!-- Arrow: down on mobile, right on desktop -->
            <div class="grid place-items-center md:px-1" aria-hidden="true">
              <!-- Mobile (down) -->
              <svg class="h-6 w-6 text-slate-500 md:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 5v14" />
                <path d="M5 13l7 7 7-7" />
              </svg>
              <!-- Desktop (right) -->
              <svg class="h-6 w-6 text-slate-500 hidden md:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M5 12h14" />
                <path d="M13 5l7 7-7 7" />
              </svg>
            </div>

            <!-- Step 2 -->
            <div class="w-full md:min-w-[190px] md:flex-1 rounded-xl border border-indigo-200 bg-indigo-50 p-4" data-aos="fade-up" data-aos-delay="80">
              <div class="text-xs font-semibold text-indigo-700 tracking-wide uppercase">Step 2</div>
              <div class="mt-1 text-base font-semibold text-indigo-900">Content</div>
              <p class="mt-1 text-sm text-indigo-800/80">Messaging & assets plan.</p>
            </div>

            <!-- Arrow -->
            <div class="grid place-items-center md:px-1" aria-hidden="true">
              <svg class="h-6 w-6 text-slate-500 md:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 5v14" />
                <path d="M5 13l7 7 7-7" />
              </svg>
              <svg class="h-6 w-6 text-slate-500 hidden md:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M5 12h14" />
                <path d="M13 5l7 7-7 7" />
              </svg>
            </div>

            <!-- Step 3 -->
            <div class="w-full md:min-w-[190px] md:flex-1 rounded-xl border border-violet-200 bg-violet-50 p-4" data-aos="fade-up" data-aos-delay="160">
              <div class="text-xs font-semibold text-violet-700 tracking-wide uppercase">Step 3</div>
              <div class="mt-1 text-base font-semibold text-violet-900">Marketing</div>
              <p class="mt-1 text-sm text-violet-800/80">Organic + paid rollout.</p>
            </div>

            <!-- Arrow -->
            <div class="grid place-items-center md:px-1" aria-hidden="true">
              <svg class="h-6 w-6 text-slate-500 md:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 5v14" />
                <path d="M5 13l7 7 7-7" />
              </svg>
              <svg class="h-6 w-6 text-slate-500 hidden md:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M5 12h14" />
                <path d="M13 5l7 7-7 7" />
              </svg>
            </div>

            <!-- Step 4 -->
            <div class="w-full md:min-w-[190px] md:flex-1 rounded-xl border border-cyan-200 bg-cyan-50 p-4" data-aos="fade-up" data-aos-delay="240">
              <div class="text-xs font-semibold text-cyan-700 tracking-wide uppercase">Step 4</div>
              <div class="mt-1 text-base font-semibold text-cyan-900">Optimization</div>
              <p class="mt-1 text-sm text-cyan-800/80">SEO, CRO & speed.</p>
            </div>

            <!-- Arrow -->
            <div class="grid place-items-center md:px-1" aria-hidden="true">
              <svg class="h-6 w-6 text-slate-500 md:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 5v14" />
                <path d="M5 13l7 7 7-7" />
              </svg>
              <svg class="h-6 w-6 text-slate-500 hidden md:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M5 12h14" />
                <path d="M13 5l7 7-7 7" />
              </svg>
            </div>

            <!-- Step 5 -->
            <div class="w-full md:min-w-[190px] md:flex-1 rounded-xl border border-pink-200 bg-pink-50 p-4" data-aos="fade-up" data-aos-delay="320">
              <div class="text-xs font-semibold text-pink-700 tracking-wide uppercase">Step 5</div>
              <div class="mt-1 text-base font-semibold text-pink-900">Lead Gen</div>
              <p class="mt-1 text-sm text-pink-800/80">Funnels & scale.</p>
            </div>
          </div>
        </div>

        <!-- Mobile helper text -->
        <p class="mt-2 text-xs text-slate-500 md:hidden">Steps display vertically on mobile for easier reading.</p>
      </div>

      <!-- CTA Buttons -->
      <div class="mt-12 flex flex-col sm:flex-row gap-3" data-aos="fade-up" data-aos-delay="150" data-aos-duration="700">
        <a href="/book-audit" class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3 text-white font-medium shadow transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
          <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M8 12h8M12 8v8" />
            <circle cx="12" cy="12" r="9" />
          </svg>
          Book Your Free Audit
        </a>
        <a href="/advisory" class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-300 bg-white/70 px-6 py-3 text-slate-900 font-medium shadow-sm backdrop-blur transition hover:bg-white focus:outline-none focus:ring-2 focus:ring-slate-300 focus:ring-offset-2">
          <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M8 12h8" />
            <path d="M12 8v8" opacity=".35" />
            <circle cx="12" cy="12" r="9" />
          </svg>
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