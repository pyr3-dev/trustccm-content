<?php
/**
 * Template Name: Case Studies Page
 */
?>

<?php get_header();

?>


<body <?php body_class(); ?>>



<?php require_once get_template_directory() . '/nav.php'; ?>


<section class="w-full bg-[url('<?php echo get_template_directory_uri(); ?>/assets/case-study.jpg')] bg-no-repeat bg-cover bg-bottom py-16 px-6 text-yellow-500 " data-aos="fade-right" data-aos-delay="100">
  <div class="max-w-7xl mx-auto text-center">
    <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-[0_4px_6px_rgba(0,0,0,0.7)]">Case Studies</h1>
    <p class="text-lg md:text-xl mb-6 drop-shadow-[0_4px_6px_rgba(0,0,0,0.7)]">We help companies scale with precision and strategy.</p>

  </div>
</section>


<section class="bg-gray-50 py-16 px-6 md:px-20">
  <div class="max-w-6xl mx-auto">
    <h2 class="text-4xl font-bold text-gray-800 mb-12 text-center" data-aos="fade-down" data-aos-delay="100">Case Studies</h2>

    <!-- Case Study Grid -->
    <div class="grid md:grid-cols-2 gap-10">

      <!-- Case Study: Green Bay Remodeling -->
      <div class="bg-white rounded-2xl shadow p-6" data-aos="fade-right" data-aos-delay="100">
        <h3 class="text-2xl font-semibold text-gray-800 mb-2">Green Bay Remodeling</h3>
        <p class="text-sm text-gray-500 italic mb-4">From $600k to $50M in revenue</p>
        <ul class="space-y-2 text-gray-700 text-base">
          <li><strong>Problem:</strong> Inconsistent sales process, limited scalability</li>
          <li><strong>Strategy:</strong> Revamped sales system with defined stages and KPIs</li>
          <li><strong>Execution:</strong> Hands-on training, CRM integration, weekly pipeline reviews</li>
          <li><strong>Result:</strong> Scaled from $600K to $50M with consistent monthly growth</li>
        </ul>
        <blockquote class="mt-4 pl-4 border-l-4 border-yellow-600 text-yellow-800 italic text-sm">
          "TRUSTCCM built the foundation of our sales machine." – Michael Johnson, CEO
        </blockquote>
      </div>

      <!-- Case Study: GBR Roofing -->
      <div class="bg-white rounded-2xl shadow p-6" data-aos="fade-left" data-aos-delay="100">
        <h3 class="text-2xl font-semibold text-gray-800 mb-2">GBR Roofing</h3>
        <p class="text-sm text-gray-500 italic mb-4">New division built and scaled</p>
        <ul class="space-y-2 text-gray-700 text-base">
          <li><strong>Problem:</strong> No roofing division, unclear market entry strategy</li>
          <li><strong>Strategy:</strong> Leverage existing sales team via cross-training</li>
          <li><strong>Execution:</strong> Roofing sales materials, tech stack, install team SOPs</li>
          <li><strong>Result:</strong> Division launched and scaled to consistent 7-figure revenue</li>
        </ul>
        <blockquote class="mt-4 pl-4 border-l-4 border-yellow-600 text-yellow-800 italic text-sm">
          "We didn’t need to hire – we maximized what we had." – Michael Johnson, CEO
        </blockquote>
      </div>

      <!-- Case Study: ILW -->
      <div class="bg-white rounded-2xl shadow p-6" data-aos="fade-right" data-aos-delay="100">
        <h3 class="text-2xl font-semibold text-gray-800 mb-2">ILW (I Luxe Works)</h3>
        <p class="text-sm text-gray-500 italic mb-4">Built a content machine + sourcing strategy</p>
        <ul class="space-y-2 text-gray-700 text-base">
          <li><strong>Problem:</strong> Unclear brand message, sourcing bottlenecks</li>
          <li><strong>Strategy:</strong> Define brand positioning and scalable factory sourcing plan</li>
          <li><strong>Execution:</strong> Content pipeline, influencer kits, backend ops design</li>
          <li><strong>Result:</strong> Influencer-ready brand with 3x faster sourcing & launch timelines</li>
        </ul>
        <blockquote class="mt-4 pl-4 border-l-4 border-yellow-600 text-yellow-800 italic text-sm">
          "They made our brand media-ready in weeks." – ILW Founder
        </blockquote>
      </div>

      <!-- Case Study: Moldovan Realty -->
      <div class="bg-white rounded-2xl shadow p-6" data-aos="fade-left" data-aos-delay="100">
        <h3 class="text-2xl font-semibold text-gray-800 mb-2">Moldovan Realty</h3>
        <p class="text-sm text-gray-500 italic mb-4">Structured real estate flips with SOPs</p>
        <ul class="space-y-2 text-gray-700 text-base">
          <li><strong>Problem:</strong> Chaotic project timelines, inconsistent vendor performance</li>
          <li><strong>Strategy:</strong> Build a system of checklists and timelines per flip</li>
          <li><strong>Execution:</strong> SOPs for acquisition, rehab, listing, and resale</li>
          <li><strong>Result:</strong> Reduced project delays by 40%, improved profit margins</li>
        </ul>
        <blockquote class="mt-4 pl-4 border-l-4 border-yellow-600 text-yellow-800 italic text-sm">
          "We flip with a system now, not just hustle." – Moldovan Realty Team
        </blockquote>
      </div>

      <!-- Case Study: Borderless Canvas -->
      <div class="bg-white rounded-2xl shadow p-6 md:col-span-2" data-aos="fade-right" data-aos-delay="100">
        <h3 class="text-2xl font-semibold text-gray-800 mb-2">Borderless Canvas</h3>
        <p class="text-sm text-gray-500 italic mb-4">Global artist platform built from scratch</p>
        <ul class="space-y-2 text-gray-700 text-base">
          <li><strong>Problem:</strong> Idea-stage platform, no tech or branding foundation</li>
          <li><strong>Strategy:</strong> Build MVP, sales funnel, and community infrastructure</li>
          <li><strong>Execution:</strong> Branding, email flows, partner onboarding pipeline</li>
          <li><strong>Result:</strong> Launched global platform with first 200+ artist partners</li>
        </ul>
        <blockquote class="mt-4 pl-4 border-l-4 border-yellow-600 text-yellow-800 italic text-sm">
          "We wouldn’t exist without TRUSTCCM’s launch plan." – Jane Lopez, Founder
        </blockquote>
      </div>

    </div>
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

