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

        <section class="relative py-12 md:py-16 bg-white">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <header class="max-w-3xl">
                    <h1 class="text-3xl md:5xl font-semibold tracking-tight text-slate-900">Advisory Services</h1>
                    <p class="mt-3 text-lg text-slate-600">From audit to growth — complete business development and marketing support.</p>
                    <div class="mt-6 flex flex-col sm:flex-row gap-3">
                        <a href="/book-audit" class="inline-flex items-center justify-center rounded-xl bg-blue-600 px-6 py-3 text-white font-medium shadow hover:bg-blue-700">Book Your Free Audit</a>
                        <a href="#details" class="inline-flex items-center justify-center rounded-xl border border-slate-300 px-6 py-3 text-slate-900 font-medium hover:bg-slate-50">Learn More About Advisory</a>
                    </div>
                </header>
            </div>
        </section>

        <section id="details" class="py-10 md:py-16 bg-slate-50">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 space-y-10">

                <!-- Subsection: Business Audit -->
                <article class="rounded-2xl bg-white p-6 md:p-8 shadow-sm ring-1 ring-slate-200">
                    <h2 class="text-2xl font-semibold text-slate-900">Business Audit</h2>
                    <p class="mt-3 text-slate-700">We evaluate your financial metrics, unit economics, and cash flow alongside your digital presence. The outcome is a clear picture of current performance and prioritized recommendations.</p>
                    <p class="mt-2 text-slate-700">Example/Case study: <em>(Placeholder for now)</em></p>
                </article>

                <!-- Subsection: Content & Engagement -->
                <article class="rounded-2xl bg-white p-6 md:p-8 shadow-sm ring-1 ring-slate-200">
                    <h2 class="text-2xl font-semibold text-slate-900">Content & Engagement</h2>
                    <p class="mt-3 text-slate-700">We develop a content strategy aligned with your positioning and audience behavior. Expect editorial calendars, tone-of-voice guidelines, and engagement playbooks.</p>
                    <p class="mt-2 text-slate-700">Example/Case study: <em>(Placeholder for now)</em></p>
                </article>

                <!-- Subsection: Digital Marketing & Social Media -->
                <article class="rounded-2xl bg-white p-6 md:p-8 shadow-sm ring-1 ring-slate-200">
                    <h2 class="text-2xl font-semibold text-slate-900">Digital Marketing & Social Media</h2>
                    <p class="mt-3 text-slate-700">We balance paid and organic efforts with channel-specific tactics. We test creatives, iterate on offers, and monitor ROI to scale what works.</p>
                    <p class="mt-2 text-slate-700">Example/Case study: <em>(Placeholder for now)</em></p>
                </article>

                <!-- Subsection: Website & SEO Optimization -->
                <article class="rounded-2xl bg-white p-6 md:p-8 shadow-sm ring-1 ring-slate-200">
                    <h2 class="text-2xl font-semibold text-slate-900">Website & SEO Optimization</h2>
                    <p class="mt-3 text-slate-700">We improve site speed, UX, and search visibility. Clearer paths to value and refined CTAs increase conversion and reduce friction.</p>
                    <p class="mt-2 text-slate-700">Example/Case study: <em>(Placeholder for now)</em></p>
                </article>

                <!-- Subsection: Lead Generation & Growth Strategy -->
                <article class="rounded-2xl bg-white p-6 md:p-8 shadow-sm ring-1 ring-slate-200">
                    <h2 class="text-2xl font-semibold text-slate-900">Lead Generation & Growth Strategy</h2>
                    <p class="mt-3 text-slate-700">We architect funnels from awareness to sale, add sales enablement, and map a roadmap for the next 6–12 months with milestones and KPIs.</p>
                    <p class="mt-2 text-slate-700">Example/Case study: <em>(Placeholder for now)</em></p>
                </article>

                <!-- Repeated CTAs -->
                <div class="flex flex-col sm:flex-row gap-3 pt-2">
                    <a href="/book-audit" class="inline-flex items-center justify-center rounded-xl bg-blue-600 px-6 py-3 text-white font-medium shadow hover:bg-blue-700">Book Your Free Audit</a>
                    <a href="/contact" class="inline-flex items-center justify-center rounded-xl border border-slate-300 px-6 py-3 text-slate-900 font-medium hover:bg-slate-50">Talk to Our Team</a>
                </div>
            </div>
        </section>
    </main>





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