<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta name="google-site-verification" content="scbof-MoThqNcAqx8SXl8R5NBtKEZ-Sxc18yJLSma6U" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/03/oraanj-logo-1.png?v=3" type="image/png">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
	<link href="<?php echo get_template_directory_uri(); ?>/css/style.css?v=3.7.2" rel="stylesheet" type="text/css">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	
	<!-- Form Script -->
	<script src="https://link.oraanj-interiors.co.uk/js/form_embed.js"></script>
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.min.css">
	<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>	
	<script>
		$(document).ready(function() {
		var owl = $('#testimonial_slide');
		owl.owlCarousel({
			loop: true,
			margin: 0,
			autoplay: true,
			autoplayTimeout: 4000,
			autoplayHoverPause: false,
			nav: true,
			autoHeight: false,
			transitionStyle : "fade",
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 2
				},
				1000: {
					items: 4
				}
			}
		  })
		})
	</script>

	<script>
	$(window).scroll(function() {    
		var scroll = $(window).scrollTop();

		if (scroll >= 50) {
			$(".header").addClass("darkHeader");
		} else {
			$(".header").removeClass("darkHeader");
		}
	});
	</script>
	
	
	
	<script>
		function visible(partial) {
		var $t = partial,
			$w = jQuery(window),
			viewTop = $w.scrollTop(),
			viewBottom = viewTop + $w.height(),
			_top = $t.offset().top,
			_bottom = _top + $t.height(),
			compareTop = partial === true ? _bottom : _top,
			compareBottom = partial === true ? _top : _bottom;

		return ((compareBottom <= viewBottom) && (compareTop >= viewTop) && $t.is(':visible'));

	}

	jQuery(window).scroll(function(){

	  if(visible($('.count-digit')))
		{
		  if(jQuery('.count-digit').hasClass('counter-loaded')) return;
		  jQuery('.count-digit').addClass('counter-loaded');

	jQuery('.count-digit').each(function () {
	  var $this = $(this);
	  jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
		duration: 1500,
		easing: 'swing',
		step: function () {
		  $this.text(Math.ceil(this.Counter));
		}
	  });
	});
		}
	})
	</script>
	<!-- GTM is managed by the existing WordPress integration -->
	<meta property="og:image" content="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury-dining-room-interior-design-by-oraanj-e1790962056553.jpeg" />
	<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
	<meta property="og:image:type" content="image/jpeg" />
	
	<?php wp_head(); ?>

	<meta name="geo.region" content="GB" />
<meta name="geo.placename" content="London" />
<meta name="geo.position" content="51.510653;-0.145919" />
<meta name="ICBM" content="51.510653, -0.145919" />
	
	<!-- Hotjar Tracking Code for https://www.oraanj-interiors.co.uk/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:5246531,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebSite",
      "@id": "https://www.oraanj-interiors.co.uk/#website",
      "url": "https://www.oraanj-interiors.co.uk/",
      "name": "Oraanj Interior Design",
      "description": "Award-Winning Luxury Interior Design & Build Studio in London",
      "inLanguage": "en-GB",
      "publisher": {
        "@id": "https://www.oraanj-interiors.co.uk/#organization"
      },
      "potentialAction": {
        "@type": "SearchAction",
        "target": {
          "@type": "EntryPoint",
          "urlTemplate": "https://www.oraanj-interiors.co.uk/?s={search_term_string}"
        },
        "query-input": "required name=search_term_string"
      }
    },
    {
      "@type": "Organization",
      "@id": "https://www.oraanj-interiors.co.uk/#organization",
      "name": "Oraanj Interior Design Ltd",
      "alternateName": "Oraanj Interior Design",
      "url": "https://www.oraanj-interiors.co.uk/",
      "logo": {
        "@type": "ImageObject",
        "@id": "https://www.oraanj-interiors.co.uk/#logo",
        "url": "https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/03/oraanj-logo.webp",
        "contentUrl": "https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/03/oraanj-logo.webp",
        "caption": "Oraanj Interior Design Logo"
      },
      "image": "https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/02/banner-1.webp",
      "founder": {
        "@id": "https://www.oraanj-interiors.co.uk/#person-rachana-gupta"
      },
      "sameAs": [
        "https://www.instagram.com/oraanjinteriordesigns/",
        "https://www.linkedin.com/company/oraanj-interior-design/",
        "https://www.facebook.com/Oraanjinteriordesigns",
        "https://www.youtube.com/@oraanjinteriordesign7524",
        "https://www.tiktok.com/@oraanjinteriordesign",
        "https://www.pinterest.co.uk/OraanjInteriorDesign/",
        "https://twitter.com/oraanjinteriors",
        "https://www.linkedin.com/in/rachana-oraanj/",
        "https://www.houzz.co.uk/professionals/interior-designers/oraanj-interior-design-pfvwgb-pf~1103295791",
        "https://www.sbid.org/designer/oraanj-interior-design/",
        "https://find-and-update.company-information.service.gov.uk/company/14899672",
        "https://g.page/r/CX9w3xvAir8JEBM",
        "https://g.page/r/CcFsh73zpGpfEBM",
        "https://share.google/4MH8vrwCjPr183yq6"
      ],
      "memberOf": {
        "@type": "Organization",
        "name": "Society of British and International Interior Design",
        "alternateName": "SBID",
        "url": "https://www.sbid.org/designer/oraanj-interior-design/"
      }
    },
    {
      "@type": [
        "ProfessionalService",
        "LocalBusiness",
        "HomeAndConstructionBusiness"
      ],
      "@id": "https://www.oraanj-interiors.co.uk/#business",
      "name": "Oraanj Interior Design",
      "url": "https://www.oraanj-interiors.co.uk/",
      "description": "Award-winning interior architecture and interior design studio in London delivering luxury residential, commercial, restaurant, bar, and office projects with complete design and build project management.",
      "email": "info@oraanj-interiors.co.uk",
      "telephone": "+44 7448 803051",
      "priceRange": "£££",
      "logo": {
        "@id": "https://www.oraanj-interiors.co.uk/#logo"
      },
      "image": "https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/02/banner-1.webp",
      "parentOrganization": {
        "@id": "https://www.oraanj-interiors.co.uk/#organization"
      },
      "founder": {
        "@id": "https://www.oraanj-interiors.co.uk/#person-rachana-gupta"
      },
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "2nd Floor, Hygeia House, 66 College Road",
        "addressLocality": "Harrow",
        "addressRegion": "Greater London",
        "postalCode": "HA1 1BE",
        "addressCountry": "GB"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 51.5806,
        "longitude": -0.3379
      },
      "hasMap": "https://g.page/r/CX9w3xvAir8JEBM",
      "location": [
        {
          "@id": "https://www.oraanj-interiors.co.uk/#harrow-office"
        },
        {
          "@id": "https://www.oraanj-interiors.co.uk/#mayfair-office"
        }
      ],
      "areaServed": [
        {
          "@type": "AdministrativeArea",
          "name": "London"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Greater London"
        },
        {
          "@type": "Country",
          "name": "United Kingdom"
        }
      ],
      "contactPoint": [
        {
          "@type": "ContactPoint",
          "contactType": "customer service",
          "telephone": "+44 7448 803051",
          "email": "info@oraanj-interiors.co.uk",
          "availableLanguage": ["en-GB"],
          "areaServed": "GB"
        }
      ],
      "award": [
        "Interior Designer of the Year - Eastern Eye Property Awards 2025"
      ],
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.8",
        "reviewCount": "102",
        "bestRating": "5",
        "worstRating": "1"
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday"
          ],
          "opens": "09:00",
          "closes": "18:00"
        }
      ],
      "knowsAbout": [
        "Interior Architecture",
        "Residential Interior Design",
        "Commercial Interior Design",
        "Design and Build",
        "Turnkey Interior Refurbishment",
        "Space Planning",
        "Bespoke Joinery",
        "FF&E Procurement"
      ],
      "slogan": "Award-winning interior design studio delivering homes, offices and hospitality interiors in London."
    },
    {
      "@type": "Place",
      "@id": "https://www.oraanj-interiors.co.uk/#harrow-office",
      "name": "Oraanj Interior Design Harrow Head Office",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "2nd Floor, Hygeia House, 66 College Road",
        "addressLocality": "Harrow",
        "addressRegion": "Greater London",
        "postalCode": "HA1 1BE",
        "addressCountry": "GB"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 51.5806,
        "longitude": -0.3379
      },
      "telephone": "+44 7448 803051",
      "hasMap": "https://g.page/r/CX9w3xvAir8JEBM"
    },
    {
      "@type": "Place",
      "@id": "https://www.oraanj-interiors.co.uk/#mayfair-office",
      "name": "Oraanj Interior Design Mayfair Studio (By Appointment)",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "23 Berkeley Square",
        "addressLocality": "Mayfair",
        "addressRegion": "London",
        "postalCode": "W1J 6HE",
        "addressCountry": "GB"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 51.5099,
        "longitude": -0.1462
      },
      "telephone": "+44 7448 803051",
      "hasMap": "https://g.page/r/CcFsh73zpGpfEBM"
    },
    {
      "@type": "Person",
      "@id": "https://www.oraanj-interiors.co.uk/#person-rachana-gupta",
      "name": "Rachana Gupta",
      "jobTitle": "Founder & Creative Director",
      "url": "https://www.linkedin.com/in/rachana-oraanj/",
      "sameAs": [
        "https://www.linkedin.com/in/rachana-oraanj/"
      ],
      "award": "Interior Designer of the Year - Eastern Eye Property Awards 2025",
      "worksFor": {
        "@id": "https://www.oraanj-interiors.co.uk/#organization"
      }
    }
  ]
}
</script>


</head>

<body <?php body_class(); ?>>
	
<?php wp_body_open(); ?>
<div id="page">
	
	<!--<header class="header">-->
	<!--	<a href="https://wa.link/avpv8q" target="_blank" class="header_mobile_whatsapp d-lg-none" aria-label="Chat with us on WhatsApp"><img width="26px" height="26px" loading="lazy"  src="<?php echo site_url();?>/wp-content/uploads/2025/02/whatsapp.png" alt="WhatsApp Icon"></a>-->
	<!--	<div class="container">-->
	<!--		<div class="row align-items-center">-->
	<!--			<div class="col-lg-3 logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-label="Oraanj Interiors Home"><img src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a></div>-->
	<!--			<div class="col-lg-9 header_right text-end">-->
	<!--				<div class="header_right_top d-flex align-items-center justify-content-end">-->
	<!--					<a href="tel:4407448803051" class="header_phone">+44 (0) 7448 803051</a>-->
	<!--					<a href="https://wa.link/avpv8q" target="_blank" class="header_whatsapp" aria-label="Chat with us on WhatsApp"><img width="32px" height="32px" loading="lazy" src="<?php echo site_url();?>/wp-content/uploads/2025/02/whatsapp.png" alt="WhatsApp Icon"></a>-->
	<!--					<a href="https://www.oraanj-interiors.co.uk/contact/#inline-01KqafgEK4PM49xdmQ8M" class="header_btn">Discuss Your Project</a>-->
	<!--				</div>-->
	<!--				<div class="header_menu">-->
	<!--					<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">-->
	<!--						<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>-->
	<!--						<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>-->
	<!--						<?php-->
	<!--						wp_nav_menu(-->
	<!--							array(-->
	<!--								'theme_location' => 'primary',-->
	<!--								'menu_class'     => 'nav-menu',-->
	<!--								'menu_id'        => 'primary-menu',-->
	<!--							)-->
	<!--						);-->
	<!--						?>-->
	<!--					</nav>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</header>-->
	
	
	
	
	<header class="header"> <a href="https://wa.link/avpv8q" target="_blank" class="header_mobile_whatsapp d-lg-none"
        aria-label="Chat with us on WhatsApp"><img width="26px" height="26px" loading="lazy"
            src="<?php echo site_url();?>/wp-content/uploads/2025/02/whatsapp.png" alt="WhatsApp Icon"></a>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"
                    aria-label="Oraanj Interiors Home"><img src="<?php header_image(); ?>"
                        alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a></div>
            <div class="col-lg-9 header_right text-end">
                <div class="header_right_top d-flex align-items-center justify-content-end"> <a href="tel:4407448803051"
                        class="header_phone">+44 (0) 7448 803051</a> <a href="https://wa.link/avpv8q" target="_blank"
                        class="header_whatsapp" aria-label="Chat with us on WhatsApp"><img width="32px" height="32px"
                            loading="lazy" src="<?php echo site_url();?>/wp-content/uploads/2025/02/whatsapp.png"
                            alt="WhatsApp Icon"></a> <a
                        href="https://www.oraanj-interiors.co.uk/contact/#inline-01KqafgEK4PM49xdmQ8M"
                        class="header_btn">Discuss Your Project</a> </div>
                <div class="header_menu">
                    <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation"> <button
                            class="menu-toggle">
                            <?php _e( 'Primary Menu', 'twentyfourteen' ); ?>
                        </button> <a class="screen-reader-text skip-link" href="#content">
                            <?php _e( 'Skip to content', 'twentyfourteen' ); ?>
                        </a>
                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu', ) ); ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

	<!-- #masthead -->

	<main id="main" class="site-main">
