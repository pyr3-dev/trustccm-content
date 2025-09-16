<?php

/**
 * Template Name: Advisory Page
 */
?>

<?php get_header();

?>


<body <?php body_class(); ?>>



    <?php require_once get_template_directory() . '/nav.php'; ?>

    <!-- bg-[url('/path/to/banner.jpg')] -->
    <main id="primary" class="site-main">
        <!-- SEO Meta Description -->
        <?php add_action('wp_head', function () { ?>
            <meta name="description" content="Small business advisory services | TrustCCM helps businesses scale revenue through audits, marketing, content, and lead generation.">
        <?php }, 1); ?>

        <!-- Hero / Header -->
        <section class="relative py-12 md:py-16 bg-white">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <header class="max-w-3xl" data-aos="fade-up" data-aos-duration="700" data-aos-once="true">
                    <span class="inline-block text-xs font-semibold bg-[#a78bfa]/20 text-[#a78bfa] px-3 py-1 rounded-full mb-3">Advisory</span>
                    <h1 class="text-3xl md:text-5xl font-semibold tracking-tight text-slate-900">
                        Advisory Services
                    </h1>
                    <p class="mt-3 text-lg text-slate-600">
                        From audit to growth — complete business development and marketing support.
                    </p>

                    <div class="mt-6 flex flex-col sm:flex-row gap-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="700" data-aos-once="true">
                        <!-- PRIMARY CTA (gold) -->
                        <a href="/contact-us"
                            class="inline-flex items-center justify-center rounded-xl bg-[#ca8a04] px-6 py-3 text-white font-medium shadow hover:bg-[#a16207] focus:outline-none focus:ring-2 focus:ring-[#ca8a04]/40">
                            Book Your Free Audit
                        </a>
                        <!-- Secondary CTA (neutral) -->
                        <a href="#details"
                            class="inline-flex items-center justify-center rounded-xl border border-slate-300 px-6 py-3 text-slate-900 font-medium hover:bg-slate-50 focus:outline-none focus:ring-2 focus:ring-slate-200">
                            Learn More About Advisory
                        </a>
                    </div>
                </header>
            </div>
        </section>

        <!-- Details -->
        <section id="details" class="py-10 md:py-16 bg-slate-50">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 space-y-10">

                <!-- Subsection: Business Audit -->
                <article class="relative rounded-2xl bg-white p-6 md:p-8 shadow-sm ring-1 ring-slate-200"
                    data-aos="fade-up" data-aos-duration="700" data-aos-once="true">
                    <div class="absolute inset-x-0 -top-px h-px bg-gradient-to-r from-transparent via-[#a78bfa]/45 to-transparent"></div>
                    <div class="flex items-start gap-3">
                        <div class="grid h-10 w-10 place-items-center rounded-lg bg-[#a78bfa]/10 text-[#a78bfa] ring-1 ring-[#a78bfa]/30">
                            <!-- Icon -->
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <rect x="5" y="3" width="14" height="18" rx="2"></rect>
                                <path d="M9 7h6M8 11h8M8 15h5" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-semibold text-slate-900">Business Audit</h2>
                            <p class="mt-3 text-slate-700">We evaluate your financial metrics, unit economics, and cash flow alongside your digital presence. The outcome is a clear picture of current performance and prioritized recommendations.</p>
                            <p class="mt-2 text-slate-700">Example/Case study: <em>(Placeholder for now)</em></p>
                        </div>
                    </div>
                </article>

                <!-- Subsection: Content & Engagement -->
                <article class="relative rounded-2xl bg-white p-6 md:p-8 shadow-sm ring-1 ring-slate-200"
                    data-aos="fade-up" data-aos-delay="60" data-aos-duration="700" data-aos-once="true">
                    <div class="absolute inset-x-0 -top-px h-px bg-gradient-to-r from-transparent via-[#a78bfa]/45 to-transparent"></div>
                    <div class="flex items-start gap-3">
                        <div class="grid h-10 w-10 place-items-center rounded-lg bg-[#a78bfa]/10 text-[#a78bfa] ring-1 ring-[#a78bfa]/30">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <path d="M12 19l9-9-3-3-9 9-3 1 1-3 9-9" />
                                <path d="M16 5l3 3" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-semibold text-slate-900">Content &amp; Engagement</h2>
                            <p class="mt-3 text-slate-700">We develop a content strategy aligned with your positioning and audience behavior. Expect editorial calendars, tone-of-voice guidelines, and engagement playbooks.</p>
                            <p class="mt-2 text-slate-700">Example/Case study: <em>(Placeholder for now)</em></p>
                        </div>
                    </div>
                </article>

                <!-- Subsection: Digital Marketing & Social Media -->
                <article class="relative rounded-2xl bg-white p-6 md:p-8 shadow-sm ring-1 ring-slate-200"
                    data-aos="fade-up" data-aos-delay="120" data-aos-duration="700" data-aos-once="true">
                    <div class="absolute inset-x-0 -top-px h-px bg-gradient-to-r from-transparent via-[#a78bfa]/45 to-transparent"></div>
                    <div class="flex items-start gap-3">
                        <div class="grid h-10 w-10 place-items-center rounded-lg bg-[#a78bfa]/10 text-[#a78bfa] ring-1 ring-[#a78bfa]/30">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <path d="M3 11l12-5v12L3 13v-2z" />
                                <path d="M15 8a4 4 0 0 0 0 8" />
                                <path d="M6 14l1.5 4.5a2 2 0 0 0 2.5 1.3L12 19" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-semibold text-slate-900">Digital Marketing &amp; Social Media</h2>
                            <p class="mt-3 text-slate-700">We balance paid and organic efforts with channel-specific tactics. We test creatives, iterate on offers, and monitor ROI to scale what works.</p>
                            <p class="mt-2 text-slate-700">Example/Case study: <em>(Placeholder for now)</em></p>
                        </div>
                    </div>
                </article>

                <!-- Subsection: Website & SEO Optimization -->
                <article class="relative rounded-2xl bg-white p-6 md:p-8 shadow-sm ring-1 ring-slate-200"
                    data-aos="fade-up" data-aos-delay="180" data-aos-duration="700" data-aos-once="true">
                    <div class="absolute inset-x-0 -top-px h-px bg-gradient-to-r from-transparent via-[#a78bfa]/45 to-transparent"></div>
                    <div class="flex items-start gap-3">
                        <div class="grid h-10 w-10 place-items-center rounded-lg bg-[#a78bfa]/10 text-[#a78bfa] ring-1 ring-[#a78bfa]/30">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <path d="M12 21a9 9 0 1 1 9-9" />
                                <path d="M12 12l5-2" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-semibold text-slate-900">Website &amp; SEO Optimization</h2>
                            <p class="mt-3 text-slate-700">We improve site speed, UX, and search visibility. Clearer paths to value and refined CTAs increase conversion and reduce friction.</p>
                            <p class="mt-2 text-slate-700">Example/Case study: <em>(Placeholder for now)</em></p>
                        </div>
                    </div>
                </article>

                <!-- Subsection: Lead Generation & Growth Strategy -->
                <article class="relative rounded-2xl bg-white p-6 md:p-8 shadow-sm ring-1 ring-slate-200"
                    data-aos="fade-up" data-aos-delay="240" data-aos-duration="700" data-aos-once="true">
                    <div class="absolute inset-x-0 -top-px h-px bg-gradient-to-r from-transparent via-[#a78bfa]/45 to-transparent"></div>
                    <div class="flex items-start gap-3">
                        <div class="grid h-10 w-10 place-items-center rounded-lg bg-[#a78bfa]/10 text-[#a78bfa] ring-1 ring-[#a78bfa]/30">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <circle cx="12" cy="12" r="8" />
                                <circle cx="12" cy="12" r="3" />
                                <path d="M12 2v3M12 19v3M2 12h3M19 12h3" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-semibold text-slate-900">Lead Generation &amp; Growth Strategy</h2>
                            <p class="mt-3 text-slate-700">We architect funnels from awareness to sale, add sales enablement, and map a roadmap for the next 6–12 months with milestones and KPIs.</p>
                            <p class="mt-2 text-slate-700">Example/Case study: <em>(Placeholder for now)</em></p>
                        </div>
                    </div>
                </article>

                <!-- Repeated CTAs -->
                <div class="flex flex-col sm:flex-row gap-3 pt-2" data-aos="fade-up" data-aos-delay="300" data-aos-duration="700" data-aos-once="true">
                    <a href="/contact-us"
                        class="inline-flex items-center justify-center rounded-xl bg-[#ca8a04] px-6 py-3 text-white font-medium shadow hover:bg-[#a16207] focus:outline-none focus:ring-2 focus:ring-[#ca8a04]/40">
                        Book Your Free Audit
                    </a>
                    <a href="/contact"
                        class="inline-flex items-center justify-center rounded-xl border border-slate-300 px-6 py-3 text-slate-900 font-medium hover:bg-slate-50 focus:outline-none focus:ring-2 focus:ring-slate-200">
                        Talk to Our Team
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- AOS init (place once per page, ideally in footer or after AOS script load) -->
    <script>
        window.addEventListener('load', function() {
            if (window.AOS) {
                AOS.init({
                    once: true,
                    duration: 700,
                    easing: 'ease-out-cubic'
                });
            }
        });
    </script>






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