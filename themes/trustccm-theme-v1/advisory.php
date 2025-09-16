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
            <meta name="description" content="Small business advisory services | TrustCCM helps businesses scale revenue through customised sales training, audits, content, marketing, brand building, and growth strategies.">
        <?php }, 1); ?>

        <!-- Hero / Header -->
        <section class="relative py-12 md:py-16 bg-white">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <header class="max-w-3xl" data-aos="fade-up">
                    <span class="inline-block text-xs font-semibold bg-[#a78bfa]/20 text-[#a78bfa] px-3 py-1 rounded-full mb-3">Advisory</span>
                    <h1 class="text-3xl md:text-5xl font-semibold tracking-tight text-slate-900">
                        Advisory Services
                    </h1>
                    <p class="mt-3 text-lg text-slate-600">
                        From customised sales training to marketing and growth — complete business development and scaling support.
                    </p>

                    <div class="mt-6 flex flex-col sm:flex-row gap-3">
                        <a href="/contact-us"
                            class="inline-flex items-center justify-center rounded-xl bg-[#ca8a04] px-6 py-3 text-white font-medium shadow hover:bg-[#a16207]">
                            Book Your Free Audit
                        </a>
                        <a href="#details"
                            class="inline-flex items-center justify-center rounded-xl border border-slate-300 px-6 py-3 text-slate-900 font-medium hover:bg-slate-50">
                            Learn More About Advisory
                        </a>
                    </div>
                </header>
            </div>
        </section>

        <!-- Details -->
        <section id="details" class="py-10 md:py-16 bg-slate-50">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 space-y-10">

                <!-- Business Audit -->
                <article class="relative rounded-2xl bg-white p-6 md:p-8 shadow-sm ring-1 ring-slate-200" data-aos="fade-up">
                    <div class="absolute inset-x-0 -top-px h-px bg-gradient-to-r from-transparent via-[#a78bfa]/45 to-transparent"></div>
                    <div class="flex items-start gap-3">
                        <div class="grid h-10 w-10 place-items-center rounded-lg bg-[#a78bfa]/10 text-[#a78bfa] ring-1 ring-[#a78bfa]/30">
                            <!-- Clipboard Icon -->
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <rect x="5" y="3" width="14" height="18" rx="2"></rect>
                                <path d="M9 7h6M8 11h8M8 15h5" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-semibold text-slate-900">Business Audit</h2>
                            <p class="mt-3 text-slate-700">
                                We analyse your financials, operational processes, and digital footprint to highlight gaps and opportunities.
                                Includes <strong>financial efficiency reviews</strong> and renegotiating vendor contracts for better margins.
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Sales Training -->
                <article class="relative rounded-2xl bg-white p-6 md:p-8 shadow-sm ring-1 ring-slate-200" data-aos="fade-up" data-aos-delay="60">
                    <div class="absolute inset-x-0 -top-px h-px bg-gradient-to-r from-transparent via-[#a78bfa]/45 to-transparent"></div>
                    <div class="flex items-start gap-3">
                        <div class="grid h-10 w-10 place-items-center rounded-lg bg-[#a78bfa]/10 text-[#a78bfa] ring-1 ring-[#a78bfa]/30">
                            <!-- Users Icon -->
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="M17 20h5V4H2v16h5m10 0V10l-4 4-4-4v10h8z" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-semibold text-slate-900">Customised Sales Training</h2>
                            <p class="mt-3 text-slate-700">
                                Tailored programs to scale your sales teams and managers, including structured processes for prospecting, nurturing, and closing.
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Software Optimisation -->
                <article class="relative rounded-2xl bg-white p-6 md:p-8 shadow-sm ring-1 ring-slate-200" data-aos="fade-up" data-aos-delay="120">
                    <div class="absolute inset-x-0 -top-px h-px bg-gradient-to-r from-transparent via-[#a78bfa]/45 to-transparent"></div>
                    <div class="flex items-start gap-3">
                        <div class="grid h-10 w-10 place-items-center rounded-lg bg-[#a78bfa]/10 text-[#a78bfa] ring-1 ring-[#a78bfa]/30">
                            <!-- Cog Icon -->
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <circle cx="12" cy="12" r="3" />
                                <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-semibold text-slate-900">Infrastructure &amp; Software Optimisation</h2>
                            <p class="mt-3 text-slate-700">
                                Optimise your CRM, ERP, and project tools for maximum efficiency. Add automation to reduce overheads and improve workflow.
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Content Strategy -->
                <article class="relative rounded-2xl bg-white p-6 md:p-8 shadow-sm ring-1 ring-slate-200" data-aos="fade-up" data-aos-delay="180">
                    <div class="absolute inset-x-0 -top-px h-px bg-gradient-to-r from-transparent via-[#a78bfa]/45 to-transparent"></div>
                    <div class="flex items-start gap-3">
                        <div class="grid h-10 w-10 place-items-center rounded-lg bg-[#a78bfa]/10 text-[#a78bfa] ring-1 ring-[#a78bfa]/30">
                            <!-- Pencil Icon -->
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="M12 20h9" />
                                <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4 12.5-12.5z" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-semibold text-slate-900">Content Planning &amp; Execution</h2>
                            <p class="mt-3 text-slate-700">
                                Step-by-step content planning, creation, editing, and publishing to grow your reach with consistent brand voice and visuals.
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Marketing -->
                <article class="relative rounded-2xl bg-white p-6 md:p-8 shadow-sm ring-1 ring-slate-200" data-aos="fade-up" data-aos-delay="240">
                    <div class="absolute inset-x-0 -top-px h-px bg-gradient-to-r from-transparent via-[#a78bfa]/45 to-transparent"></div>
                    <div class="flex items-start gap-3">
                        <div class="grid h-10 w-10 place-items-center rounded-lg bg-[#a78bfa]/10 text-[#a78bfa] ring-1 ring-[#a78bfa]/30">
                            <!-- Megaphone Icon -->
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="M3 11l18-5v12l-18-5v-2z" />
                                <path d="M11 19a3 3 0 0 1-6 0v-4" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-semibold text-slate-900">Marketing, SEO &amp; Growth</h2>
                            <p class="mt-3 text-slate-700">
                                Full-funnel strategies built from scratch — SEO/SEM, social media restructuring, paid campaigns, and AI-driven optimisation.
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Brand -->
                <article class="relative rounded-2xl bg-white p-6 md:p-8 shadow-sm ring-1 ring-slate-200" data-aos="fade-up" data-aos-delay="300">
                    <div class="absolute inset-x-0 -top-px h-px bg-gradient-to-r from-transparent via-[#a78bfa]/45 to-transparent"></div>
                    <div class="flex items-start gap-3">
                        <div class="grid h-10 w-10 place-items-center rounded-lg bg-[#a78bfa]/10 text-[#a78bfa] ring-1 ring-[#a78bfa]/30">
                            <!-- Star Icon -->
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 22 12 18.77 5.82 22 7 14.14l-5-4.87 6.91-1.01z" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-semibold text-slate-900">Brand Building &amp; Influencers</h2>
                            <p class="mt-3 text-slate-700">
                                Build consistent brand identity and connect with influencers and partners to grow reach, credibility, and long-term equity.
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Web Development -->
                <article class="relative rounded-2xl bg-white p-6 md:p-8 shadow-sm ring-1 ring-slate-200" data-aos="fade-up" data-aos-delay="360">
                    <div class="absolute inset-x-0 -top-px h-px bg-gradient-to-r from-transparent via-[#a78bfa]/45 to-transparent"></div>
                    <div class="flex items-start gap-3">
                        <div class="grid h-10 w-10 place-items-center rounded-lg bg-[#a78bfa]/10 text-[#a78bfa] ring-1 ring-[#a78bfa]/30">
                            <!-- Globe Icon -->
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M2 12h20M12 2a15 15 0 010 20a15 15 0 010-20" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-semibold text-slate-900">Web Development &amp; Business Development</h2>
                            <p class="mt-3 text-slate-700">
                                Design or rebuild websites for better UX and conversions, while supporting business development — scaling, partnerships, and new markets.
                            </p>
                        </div>
                    </div>
                </article>

                <!-- CTAs -->
                <div class="flex justify-center pt-2" data-aos="fade-up" data-aos-delay="400">
                    <a href="/contact-us"
                        class="inline-flex items-center justify-center rounded-xl bg-[#ca8a04] px-8 py-4 text-white text-lg font-semibold shadow hover:bg-[#a16207] focus:outline-none focus:ring-2 focus:ring-[#ca8a04]/40">
                        🚀 Ready to Make Millions?
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