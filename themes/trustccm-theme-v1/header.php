<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.ico" sizes="32x32" type="image/x-icon">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "TrustCCM",
    "url": "https://trustccm.org",
    "logo": "https://trustccm.org/wp-content/themes/trustccm-theme-v1/assets/trustccm_logo.png",
    "sameAs": [
      "https://www.instagram.com/zak_tandoori",
      "https://www.linkedin.com/in/zohar-ilinetsky-5768881bb/"
    ],
    "description": "TrustCCM is a high-level business consulting firm helping entrepreneurs grow revenue, optimize operations, and scale their ventures.",
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+1-650-469-2919",
      "contactType": "Customer Support",
      "areaServed": "US",
      "availableLanguage": ["English"]
    }
  }
</script>


</head>








