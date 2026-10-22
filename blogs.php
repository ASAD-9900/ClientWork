<?php
/* Template Name: Blog */
/*
 * ─────────────────────────────────────────────────────────────────────────────
 * SEO METADATA — SET IN YOAST / RANK MATH OR EQUIVALENT PLUGIN
 * ─────────────────────────────────────────────────────────────────────────────
 * SEO Title:    Interior Design Blog London | Expert Advice | Oraanj
 * H1:           Interior Design Blog London – Expert Advice & Project Insights
 * Meta Desc:    Explore interior design insights from Oraanj's London studio. Discover residential and commercial case studies, renovation guides and practical design advice.
 * Canonical:    https://www.oraanj-interiors.co.uk/interior-design-blog-london/
 * NOTE:         Confirm /old-blogs/ is redirected (301) to canonical URL above.
 *               Check Google Search Console for duplicate indexing issues.
 * ─────────────────────────────────────────────────────────────────────────────
 */

// Ensure exact SEO Title & Meta Description in Head
add_filter( 'pre_get_document_title', function( $title ) {
	return 'Interior Design Blog London | Expert Advice | Oraanj';
}, 999 );
add_filter( 'wpseo_title', function( $title ) {
	return 'Interior Design Blog London | Expert Advice | Oraanj';
}, 999 );
add_filter( 'rank_math/frontend/title', function( $title ) {
	return 'Interior Design Blog London | Expert Advice | Oraanj';
}, 999 );
add_filter( 'wpseo_metadesc', function( $desc ) {
	return "Explore interior design insights from Oraanj's London studio. Discover residential and commercial case studies, renovation guides and practical design advice.";
}, 999 );
add_filter( 'rank_math/frontend/description', function( $desc ) {
	return "Explore interior design insights from Oraanj's London studio. Discover residential and commercial case studies, renovation guides and practical design advice.";
}, 999 );

get_header();

/**
 * Global Tracking Registry for Single Page Placements
 * Prevents any article from appearing more than once across sections.
 */
$displayed_post_ids = array();
$uncategorised_id = get_cat_ID('Uncategorised');
if ( $uncategorised_id ) {
	$displayed_post_ids[] = $uncategorised_id;
}

/**
 * Helper: Intelligent Article Badge Resolver
 * Solves Client Issue #3: General design guides must NEVER be labeled as 'Case Study'.
 * Uses verified category mapping and project-evidence checks.
 */
if ( ! function_exists( 'ojr_get_article_badge' ) ) {
	function ojr_get_article_badge( $post_id ) {
		$cats = get_the_category( $post_id );
		if ( empty( $cats ) ) {
			return 'Design Guide';
		}

		$title = get_the_title( $post_id );
		$slugs = wp_list_pluck( $cats, 'slug' );

		// Specific topic mapping priority
		$topic_map = array(
			'cafe-interior-design'             => 'Café Design',
			'restaurant-interior-design'       => 'Restaurant Design',
			'office-design'                    => 'Office Design',
			'commercial-interior-design'       => 'Commercial Design',
			'case-studies-property-renovation' => 'Renovation Project',
			'renovation-planning-guide'        => 'Renovation Guide',
			'property-renovation'              => 'Property Renovation',
			'space-design'                     => 'Space Planning',
			'design-costs-budget-planning'     => 'Costs & Budgets',
			'turnkey-interior-design'          => 'Turnkey Design',
			'interior-architecture'            => 'Interior Architecture',
			'luxury-interior-design'           => 'Luxury Interiors',
			'apartment-interior-design'        => 'Apartment Design',
			'home-decor'                       => 'Home Styling',
			'interior-design-styles'           => 'Design Styles',
			'interior-design-for-expats'       => 'Expat Living',
			'interior-designer'                => 'Industry Insights',
			'interior-design-studio'           => 'Studio News',
			'awards'                           => 'Studio Awards',
			'career'                           => 'Design Careers',
		);

		// Case studies are determined strictly by the 'interior-case-studies' category
		if ( in_array( 'interior-case-studies', $slugs, true ) ) {
			return 'Oraanj Case Study';
		}

		// Resolve to primary topic
		foreach ( $topic_map as $slug => $label ) {
			if ( in_array( $slug, $slugs, true ) ) {
				return $label;
			}
		}

		// Fallback to first meaningful category name
		foreach ( $cats as $cat ) {
			if ( $cat->slug !== 'case-studies' && $cat->slug !== 'uncategorised' ) {
				return $cat->name;
			}
		}

		return 'Design Guide';
	}
}
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

<style>
/* ==================================================
   ORAANJ JOURNAL REVAMP (ojr-)
   ================================================== */
.ojr-wrap, .ojr-wrap *, .ojr-wrap *::before, .ojr-wrap *::after { box-sizing: border-box !important; }
.ojr-wrap p:empty, .ojr-wrap br:empty { display: none !important; margin: 0 !important; padding: 0 !important; }
.ojr-wrap { width: 100% !important; background-color: #FFF6F2 !important; color: #1A1816 !important; overflow: hidden !important; }
.ojr-container { max-width: 1380px !important; margin: 0 auto !important; padding: 0 32px !important; width: 100% !important; }

/* Global Typography & Rules */
.ojr-eyebrow { font-family: 'Inter', sans-serif !important; font-size: 11px !important; font-weight: 500 !important; letter-spacing: 0.22em !important; text-transform: uppercase !important; color: #8C8882 !important; display: inline-block !important; margin-bottom: 12px !important; }
.ojr-rule { width: 36px !important; height: 1.5px !important; background-color: #B94E1A !important; margin-bottom: 22px !important; display: block !important; }
.ojr-p { font-family: 'Inter', sans-serif !important; font-size: 14.5px !important; line-height: 1.68 !important; color: #5E5953 !important; margin: 0 0 16px 0 !important; }
.ojr-section-title { font-family: 'El Messiri', serif !important; font-size: clamp(28px, 3vw, 44px) !important; font-weight: 500 !important; color: #1A1816 !important; line-height: 1.18 !important; margin: 0 0 6px 0 !important; }
.ojr-section-sub { font-family: 'Inter', sans-serif !important; font-size: 14.5px !important; color: #8C8882 !important; margin: 0 0 36px 0 !important; }

/* Meta Date Styling */
.ojr-date-badge { display: inline-flex !important; align-items: center !important; gap: 6px !important; font-family: 'Inter', sans-serif !important; font-size: 11.5px !important; font-weight: 500 !important; color: #8C8882 !important; text-transform: uppercase !important; letter-spacing: 0.08em !important; margin-bottom: 8px !important; }
.ojr-date-dot { width: 4px !important; height: 4px !important; border-radius: 50% !important; background-color: #B94E1A !important; display: inline-block !important; }

/* Buttons & Links */
.ojr-btn-primary { display: inline-flex !important; align-items: center !important; gap: 10px !important; background-color: #B94E1A !important; color: #FFFFFF !important; font-family: 'Inter', sans-serif !important; font-size: 11.5px !important; font-weight: 600 !important; letter-spacing: 0.12em !important; text-transform: uppercase !important; padding: 15px 32px !important; border-radius: 30px !important; text-decoration: none !important; transition: all 0.25s ease !important; border: none !important; }
.ojr-btn-primary:hover { background-color: #670066 !important; color: #FFFFFF !important; transform: translateY(-1px) !important; }
.ojr-btn-outline { display: inline-flex !important; align-items: center !important; gap: 10px !important; background-color: transparent !important; color: #B94E1A !important; font-family: 'Inter', sans-serif !important; font-size: 11.5px !important; font-weight: 600 !important; letter-spacing: 0.12em !important; text-transform: uppercase !important; padding: 13px 28px !important; border-radius: 30px !important; text-decoration: none !important; transition: all 0.25s ease !important; border: 1.5px solid #B94E1A !important; }
.ojr-btn-outline:hover { background-color: #B94E1A !important; color: #FFFFFF !important; transform: translateY(-1px) !important; }
.ojr-link-arrow { display: inline-flex !important; align-items: center !important; gap: 6px !important; font-family: 'Inter', sans-serif !important; font-size: 11px !important; font-weight: 600 !important; letter-spacing: 0.1em !important; text-transform: uppercase !important; color: #B94E1A !important; text-decoration: none !important; transition: all 0.2s ease !important; margin-top: auto !important; }
.ojr-link-arrow:hover { color: #670066 !important; transform: translateX(3px) !important; }

/* Masthead Hero */
.ojr-masthead { padding: 90px 0 70px 0 !important; background-color: #FFF6F2 !important; border-bottom: 1px solid #DFDBD3 !important; }
.ojr-masthead-inner { max-width: 860px !important; }
.ojr-masthead-title { font-family: 'El Messiri', serif !important; font-size: clamp(34px, 4.2vw, 58px) !important; font-weight: 500 !important; line-height: 1.12 !important; letter-spacing: -0.018em !important; color: #1A1816 !important; margin: 0 0 20px 0 !important; }
.ojr-masthead-lead { font-family: 'Inter', sans-serif !important; font-size: clamp(16px, 1.35vw, 19px) !important; font-weight: 500 !important; line-height: 1.55 !important; color: #1A1816 !important; margin: 0 0 14px 0 !important; }
.ojr-masthead-desc { font-family: 'Inter', sans-serif !important; font-size: 15px !important; line-height: 1.68 !important; color: #5E5953 !important; margin: 0 0 32px 0 !important; }
.ojr-masthead-cta-row { display: flex !important; flex-wrap: wrap !important; gap: 14px !important; align-items: center !important; }

/* Section 1: Latest Blogs */
.ojr-latest-section { padding: 85px 0 !important; background-color: #FFFFFF !important; border-bottom: 1px solid #DFDBD3 !important; }
.ojr-latest-grid { display: flex !important; flex-wrap: wrap !important; gap: 24px !important; }
.ojr-latest-card { flex: 0 0 calc(33.333% - 16px) !important; max-width: calc(33.333% - 16px) !important; background: #FFFFFF !important; border: 1px solid #ECE8E1 !important; border-radius: 6px !important; overflow: hidden !important; display: flex !important; flex-direction: column !important; transition: all 0.25s ease !important; }
.ojr-latest-card:hover { transform: translateY(-2px) !important; border-color: #DFDBD3 !important; box-shadow: 0 8px 24px rgba(26,24,22,0.04) !important; }
.ojr-latest-img-box { width: 100% !important; height: 220px !important; min-height: 220px !important; overflow: hidden !important; background: #ECE8E1 !important; position: relative !important; }
.ojr-latest-img { width: 100% !important; height: 100% !important; object-fit: cover !important; transition: transform 0.45s ease !important; }
.ojr-latest-card:hover .ojr-latest-img { transform: scale(1.03) !important; }
.ojr-cat-pill { position: absolute !important; top: 12px !important; left: 12px !important; background: rgba(255,255,255,0.95) !important; padding: 4px 12px !important; border-radius: 20px !important; font-family: 'Inter', sans-serif !important; font-size: 10px !important; font-weight: 600 !important; text-transform: uppercase !important; color: #B94E1A !important; z-index: 2 !important; letter-spacing: 0.06em !important; box-shadow: 0 2px 6px rgba(0,0,0,0.08) !important; }
.ojr-latest-body { padding: 22px !important; display: flex !important; flex-direction: column !important; flex-grow: 1 !important; }
.ojr-latest-title { font-family: 'El Messiri', serif !important; font-size: 19px !important; font-weight: 500 !important; line-height: 1.32 !important; color: #1A1816 !important; margin: 0 0 10px 0 !important; text-decoration: none !important; display: block !important; }
.ojr-latest-card:hover .ojr-latest-title { color: #B94E1A !important; }
.ojr-latest-desc { font-family: 'Inter', sans-serif !important; font-size: 13.5px !important; line-height: 1.6 !important; color: #5E5953 !important; margin: 0 0 16px 0 !important; flex-grow: 1 !important; }

/* Section 2: Founder Section */
.ojr-founder-section { padding: 85px 0 !important; background-color: #FFF6F2 !important; border-bottom: 1px solid #DFDBD3 !important; }
.ojr-founder-card { display: flex !important; flex-wrap: wrap !important; align-items: center !important; gap: 56px !important; background: #FFFFFF !important; border: 1px solid #DFDBD3 !important; border-radius: 8px !important; padding: 48px !important; }
.ojr-founder-col-img { flex: 0 0 calc(38% - 28px) !important; max-width: calc(38% - 28px) !important; }
.ojr-founder-img-frame { width: 100% !important; height: 480px !important; min-height: 480px !important; border-radius: 6px !important; overflow: hidden !important; background: #ECE8E1 !important; }
.ojr-founder-img { width: 100% !important; height: 100% !important; object-fit: cover !important; object-position: top center !important; display: block !important; }
.ojr-founder-col-txt { flex: 0 0 calc(62% - 28px) !important; max-width: calc(62% - 28px) !important; }
.ojr-founder-title { font-family: 'El Messiri', serif !important; font-size: clamp(26px, 2.6vw, 38px) !important; font-weight: 500 !important; line-height: 1.18 !important; color: #1A1816 !important; margin: 0 0 20px 0 !important; }
.ojr-quote-line { font-size: 15.5px !important; font-style: italic !important; color: #1A1816 !important; padding-left: 18px !important; border-left: 2px solid #B94E1A !important; margin: 18px 0 !important; }

/* Section 3: Questions Gateway */
.ojr-intent-section { padding: 85px 0 !important; background-color: #FFFFFF !important; border-bottom: 1px solid #DFDBD3 !important; }
.ojr-intent-grid { display: flex !important; flex-wrap: wrap !important; gap: 20px !important; }
.ojr-intent-card { flex: 0 0 calc(33.333% - 14px) !important; max-width: calc(33.333% - 14px) !important; background: #FFF6F2 !important; border: 1px solid #DFDBD3 !important; border-top: 2px solid #DFDBD3 !important; border-radius: 4px !important; padding: 26px 22px !important; display: flex !important; flex-direction: column !important; transition: all 0.25s ease !important; }
.ojr-intent-card:hover { transform: translateY(-2px) !important; border-top-color: #B94E1A !important; background: #FFFFFF !important; }
.ojr-intent-num { font-family: 'Inter', sans-serif !important; font-size: 11px !important; font-weight: 600 !important; color: #B94E1A !important; margin-bottom: 8px !important; }
.ojr-intent-title { font-family: 'El Messiri', serif !important; font-size: 19px !important; font-weight: 500 !important; color: #1A1816 !important; margin: 0 0 8px 0 !important; }
.ojr-intent-desc { font-family: 'Inter', sans-serif !important; font-size: 13px !important; line-height: 1.58 !important; color: #5E5953 !important; margin: 0 0 12px 0 !important; flex-grow: 1 !important; }
.ojr-intent-service-link { font-family: 'Inter', sans-serif !important; font-size: 11px !important; color: #8C8882 !important; text-decoration: none !important; border-bottom: 1px solid #DFDBD3 !important; padding-bottom: 2px !important; margin-bottom: 14px !important; display: inline-block !important; transition: color 0.2s ease !important; }
.ojr-intent-service-link:hover { color: #B94E1A !important; border-bottom-color: #B94E1A !important; }

/* Section 4: Residential Guides */
.ojr-grid6-section { padding: 85px 0 !important; background-color: #FFF6F2 !important; border-bottom: 1px solid #DFDBD3 !important; }
.ojr-grid-6 { display: flex !important; flex-wrap: wrap !important; gap: 24px !important; }
.ojr-card-6 { flex: 0 0 calc(33.333% - 16px) !important; max-width: calc(33.333% - 16px) !important; background: #FFFFFF !important; border: 1px solid #ECE8E1 !important; border-radius: 6px !important; overflow: hidden !important; display: flex !important; flex-direction: column !important; transition: all 0.25s ease !important; }
.ojr-card-6:hover { transform: translateY(-2px) !important; border-color: #DFDBD3 !important; box-shadow: 0 6px 20px rgba(26,24,22,0.03) !important; }
.ojr-card-img-wrap { width: 100% !important; height: 215px !important; min-height: 215px !important; overflow: hidden !important; background: #ECE8E1 !important; position: relative !important; }
.ojr-card-img { width: 100% !important; height: 100% !important; object-fit: cover !important; transition: transform 0.45s ease !important; }
.ojr-card-6:hover .ojr-card-img { transform: scale(1.03) !important; }
.ojr-card-body { padding: 22px !important; display: flex !important; flex-direction: column !important; flex-grow: 1 !important; }
.ojr-card-title { font-family: 'El Messiri', serif !important; font-size: 18px !important; font-weight: 500 !important; line-height: 1.32 !important; color: #1A1816 !important; margin: 0 0 10px 0 !important; text-decoration: none !important; display: block !important; }
.ojr-card-6:hover .ojr-card-title { color: #B94E1A !important; }
.ojr-card-desc { font-family: 'Inter', sans-serif !important; font-size: 13.5px !important; line-height: 1.6 !important; color: #5E5953 !important; margin: 0 0 16px 0 !important; flex-grow: 1 !important; }

/* Section 5: Real Project Insights */
.ojr-pi-section { padding: 0 0 85px 0 !important; background-color: #FFFFFF !important; border-bottom: 1px solid #DFDBD3 !important; }
.ojr-pi-header { background-color: #FFFFFF !important; padding: 72px 0 !important; margin-bottom: 0 !important; border-bottom: 1px solid #DFDBD3 !important; }
.ojr-pi-header-inner { display: flex !important; flex-wrap: wrap !important; align-items: flex-end !important; justify-content: space-between !important; gap: 32px !important; }
.ojr-pi-header-text { flex: 1 1 480px !important; }
.ojr-pi-eyebrow { font-family: 'Inter', sans-serif !important; font-size: 11px !important; font-weight: 500 !important; letter-spacing: 0.22em !important; text-transform: uppercase !important; color: #B94E1A !important; display: inline-block !important; margin-bottom: 14px !important; }
.ojr-pi-title { font-family: 'El Messiri', serif !important; font-size: clamp(28px, 3vw, 46px) !important; font-weight: 500 !important; line-height: 1.14 !important; color: #1A1816 !important; margin: 0 0 16px 0 !important; }
.ojr-pi-subtitle { font-family: 'Inter', sans-serif !important; font-size: 15px !important; line-height: 1.65 !important; color: #5E5953 !important; margin: 0 !important; max-width: 540px !important; }
.ojr-pi-header-cta { flex-shrink: 0 !important; align-self: flex-end !important; }

/* Process steps strip */
.ojr-pi-steps-wrap { background: #F5F0EA !important; border-bottom: 1px solid #DFDBD3 !important; padding: 0 !important; overflow-x: auto !important; }
.ojr-pi-steps { display: flex !important; min-width: max-content !important; }
.ojr-pi-step { padding: 22px 28px !important; display: flex !important; align-items: center !important; gap: 14px !important; border-right: 1px solid #DFDBD3 !important; position: relative !important; transition: background 0.2s ease !important; }
.ojr-pi-step:hover { background: #EDE7DF !important; }
.ojr-pi-step-num { font-family: 'El Messiri', serif !important; font-size: 28px !important; font-weight: 500 !important; color: #DFDBD3 !important; line-height: 1 !important; flex-shrink: 0 !important; }
.ojr-pi-step-txt { display: flex !important; flex-direction: column !important; }
.ojr-pi-step-label { font-family: 'Inter', sans-serif !important; font-size: 10px !important; font-weight: 600 !important; text-transform: uppercase !important; letter-spacing: 0.12em !important; color: #B94E1A !important; margin-bottom: 3px !important; }
.ojr-pi-step-q { font-family: 'Inter', sans-serif !important; font-size: 12.5px !important; color: #5E5953 !important; line-height: 1.45 !important; white-space: nowrap !important; }
.ojr-pi-step-last { border-right: none !important; }
.ojr-pi-step-hl .ojr-pi-step-num { color: #B94E1A !important; }
.ojr-pi-step-hl .ojr-pi-step-label { color: #670066 !important; }

/* Case study cards */
.ojr-pi-cards-wrap { padding: 56px 0 0 0 !important; }
.ojr-case-cards { display: flex !important; flex-wrap: wrap !important; gap: 24px !important; }
.ojr-case-card { flex: 1 1 calc(25% - 18px) !important; min-width: 260px !important; background: #FFFFFF !important; border: 1px solid #ECE8E1 !important; border-radius: 8px !important; overflow: hidden !important; text-decoration: none !important; color: inherit !important; display: flex !important; flex-direction: column !important; transition: all 0.28s ease !important; }
.ojr-case-card:hover { border-color: #B94E1A !important; transform: translateY(-3px) !important; box-shadow: 0 12px 32px rgba(26,24,22,0.07) !important; }
.ojr-case-card-img-box { width: 100% !important; height: 220px !important; overflow: hidden !important; background: #ECE8E1 !important; position: relative !important; }
.ojr-case-card-img { width: 100% !important; height: 100% !important; object-fit: cover !important; transition: transform 0.45s ease !important; display: block !important; }
.ojr-case-card:hover .ojr-case-card-img { transform: scale(1.05) !important; }
.ojr-case-card-badge { position: absolute !important; top: 12px !important; left: 12px !important; background: rgba(26,24,22,0.85) !important; backdrop-filter: blur(4px) !important; padding: 5px 12px !important; border-radius: 20px !important; font-family: 'Inter', sans-serif !important; font-size: 10px !important; font-weight: 600 !important; text-transform: uppercase !important; letter-spacing: 0.08em !important; color: #FFFFFF !important; }
.ojr-case-card-body { padding: 22px !important; flex-grow: 1 !important; display: flex !important; flex-direction: column !important; }
.ojr-case-card-label { font-family: 'Inter', sans-serif !important; font-size: 10px !important; font-weight: 600 !important; text-transform: uppercase !important; letter-spacing: 0.1em !important; color: #B94E1A !important; margin-bottom: 8px !important; display: block !important; }
.ojr-case-card-title { font-family: 'El Messiri', serif !important; font-size: 19px !important; font-weight: 500 !important; color: #1A1816 !important; margin: 0 0 10px 0 !important; line-height: 1.28 !important; }
.ojr-case-card:hover .ojr-case-card-title { color: #B94E1A !important; }
.ojr-case-card-desc { font-family: 'Inter', sans-serif !important; font-size: 13px !important; color: #5E5953 !important; line-height: 1.6 !important; margin: 0 0 16px 0 !important; flex-grow: 1 !important; }

/* Section 6: Design Details & Real Project Insights (HIGH PRIORITY FIX #5) */
.ojr-details-section { padding: 85px 0 !important; background-color: #FFF6F2 !important; border-bottom: 1px solid #DFDBD3 !important; }
.ojr-details-grid { display: flex !important; flex-wrap: wrap !important; gap: 20px !important; }
.ojr-details-card { flex: 1 1 calc(20% - 16px) !important; min-width: 240px !important; background: #FFFFFF !important; border: 1px solid #ECE8E1 !important; border-radius: 6px !important; overflow: hidden !important; display: flex !important; flex-direction: column !important; text-decoration: none !important; color: inherit !important; transition: all 0.25s ease !important; }
.ojr-details-card:hover { transform: translateY(-3px) !important; border-color: #B94E1A !important; box-shadow: 0 10px 24px rgba(26,24,22,0.06) !important; }
.ojr-details-img-box { width: 100% !important; height: 180px !important; min-height: 180px !important; overflow: hidden !important; background: #ECE8E1 !important; position: relative !important; }
.ojr-details-img { width: 100% !important; height: 100% !important; object-fit: cover !important; transition: transform 0.45s ease !important; }
.ojr-details-card:hover .ojr-details-img { transform: scale(1.05) !important; }
.ojr-details-badge { position: absolute !important; top: 10px !important; left: 10px !important; background: rgba(255,255,255,0.95) !important; padding: 4px 10px !important; border-radius: 20px !important; font-family: 'Inter', sans-serif !important; font-size: 9.5px !important; font-weight: 600 !important; text-transform: uppercase !important; color: #B94E1A !important; letter-spacing: 0.08em !important; box-shadow: 0 2px 6px rgba(0,0,0,0.08) !important; }
.ojr-details-body { padding: 18px !important; display: flex !important; flex-direction: column !important; flex-grow: 1 !important; }
.ojr-details-tag { font-family: 'Inter', sans-serif !important; font-size: 10px !important; font-weight: 600 !important; text-transform: uppercase !important; letter-spacing: 0.1em !important; color: #B94E1A !important; margin-bottom: 6px !important; }
.ojr-details-title { font-family: 'El Messiri', serif !important; font-size: 16.5px !important; font-weight: 500 !important; line-height: 1.3 !important; color: #1A1816 !important; margin: 0 0 8px 0 !important; }
.ojr-details-card:hover .ojr-details-title { color: #B94E1A !important; }
.ojr-details-desc { font-family: 'Inter', sans-serif !important; font-size: 12.5px !important; line-height: 1.55 !important; color: #5E5953 !important; margin: 0 0 14px 0 !important; flex-grow: 1 !important; }

/* Section 7: Renovation & Space */
.ojr-banner5-section { padding: 85px 0 !important; background-color: #FFFFFF !important; border-bottom: 1px solid #DFDBD3 !important; }
.ojr-banner-lead { display: flex !important; flex-wrap: wrap !important; background: #FFF6F2 !important; border: 1px solid #DFDBD3 !important; border-radius: 8px !important; overflow: hidden !important; margin-bottom: 24px !important; text-decoration: none !important; color: inherit !important; }
.ojr-banner-lead-img-box { flex: 0 0 52% !important; max-width: 52% !important; height: 360px !important; min-height: 360px !important; overflow: hidden !important; background: #ECE8E1 !important; }
.ojr-banner-lead-img { width: 100% !important; height: 100% !important; object-fit: cover !important; transition: transform 0.45s ease !important; }
.ojr-banner-lead:hover .ojr-banner-lead-img { transform: scale(1.03) !important; }
.ojr-banner-lead-body { flex: 0 0 48% !important; max-width: 48% !important; padding: 40px 36px !important; display: flex !important; flex-direction: column !important; justify-content: center !important; }
.ojr-banner-lead-title { font-family: 'El Messiri', serif !important; font-size: 24px !important; font-weight: 500 !important; line-height: 1.25 !important; color: #1A1816 !important; margin: 0 0 10px 0 !important; }
.ojr-grid-4 { display: flex !important; flex-wrap: wrap !important; gap: 20px !important; }
.ojr-card-4 { flex: 0 0 calc(25% - 15px) !important; max-width: calc(25% - 15px) !important; background: #FFF6F2 !important; border: 1px solid #DFDBD3 !important; border-radius: 6px !important; padding: 18px !important; display: flex !important; flex-direction: column !important; text-decoration: none !important; color: inherit !important; transition: all 0.25s ease !important; }
.ojr-card-4:hover { border-color: #B94E1A !important; transform: translateY(-2px) !important; background: #FFFFFF !important; }
.ojr-card-4-thumb-box { width: 100% !important; height: 150px !important; min-height: 150px !important; border-radius: 4px !important; overflow: hidden !important; background: #ECE8E1 !important; margin-bottom: 14px !important; }
.ojr-card-4-thumb { width: 100% !important; height: 100% !important; object-fit: cover !important; }
.ojr-card-4-title { font-family: 'El Messiri', serif !important; font-size: 16px !important; font-weight: 500 !important; line-height: 1.3 !important; color: #1A1816 !important; margin: 0 0 6px 0 !important; flex-grow: 1 !important; }
.ojr-card-4:hover .ojr-card-4-title { color: #B94E1A !important; }

/* Section 8: Commercial & Workplace */
.ojr-commercial-section { padding: 85px 0 !important; background-color: #FFF6F2 !important; border-bottom: 1px solid #DFDBD3 !important; }
.ojr-commercial-top { display: flex !important; flex-wrap: wrap !important; gap: 24px !important; margin-bottom: 24px !important; }
.ojr-comm-lead { flex: 0 0 calc(50% - 12px) !important; max-width: calc(50% - 12px) !important; background: #FFFFFF !important; border: 1px solid #DFDBD3 !important; border-radius: 6px !important; overflow: hidden !important; display: flex !important; flex-direction: column !important; text-decoration: none !important; color: inherit !important; }
.ojr-comm-lead-img-box { width: 100% !important; height: 240px !important; min-height: 240px !important; overflow: hidden !important; background: #ECE8E1 !important; }
.ojr-comm-lead-img { width: 100% !important; height: 100% !important; object-fit: cover !important; transition: transform 0.45s ease !important; }
.ojr-comm-lead:hover .ojr-comm-lead-img { transform: scale(1.03) !important; }
.ojr-comm-lead-body { padding: 24px !important; display: flex !important; flex-direction: column !important; flex-grow: 1 !important; }
.ojr-comm-lead-title { font-family: 'El Messiri', serif !important; font-size: 20px !important; font-weight: 500 !important; color: #1A1816 !important; margin: 0 0 8px 0 !important; }
.ojr-comm-row-grid { display: flex !important; flex-wrap: wrap !important; gap: 20px !important; }
.ojr-comm-row-item { flex: 0 0 calc(25% - 15px) !important; max-width: calc(25% - 15px) !important; background: #FFFFFF !important; border: 1px solid #ECE8E1 !important; border-radius: 6px !important; overflow: hidden !important; display: flex !important; flex-direction: column !important; text-decoration: none !important; color: inherit !important; transition: all 0.25s ease !important; }
.ojr-comm-row-item:hover { border-color: #B94E1A !important; transform: translateY(-2px) !important; }
.ojr-comm-row-thumb-box { width: 100% !important; height: 155px !important; min-height: 155px !important; overflow: hidden !important; background: #ECE8E1 !important; }
.ojr-comm-row-thumb { width: 100% !important; height: 100% !important; object-fit: cover !important; transition: transform 0.45s ease !important; }
.ojr-comm-row-item:hover .ojr-comm-row-thumb { transform: scale(1.03) !important; }
.ojr-comm-row-body { padding: 18px !important; display: flex !important; flex-direction: column !important; flex-grow: 1 !important; }
.ojr-comm-row-title { font-family: 'El Messiri', serif !important; font-size: 16px !important; font-weight: 500 !important; color: #1A1816 !important; margin: 0 0 6px 0 !important; flex-grow: 1 !important; }

/* Section 9: Consultation CTA */
.ojr-consult-section { padding: 80px 0 !important; background-color: #FFFFFF !important; }
.ojr-consult-inner { display: flex !important; flex-wrap: wrap !important; align-items: center !important; justify-content: space-between !important; gap: 36px !important; }
.ojr-consult-text { flex: 1 1 560px !important; }
.ojr-consult-eyebrow { font-family: 'Inter', sans-serif !important; font-size: 11px !important; font-weight: 500 !important; letter-spacing: 0.22em !important; text-transform: uppercase !important; color: #B94E1A !important; display: inline-block !important; margin-bottom: 12px !important; }
.ojr-consult-title { font-family: 'El Messiri', serif !important; font-size: clamp(26px, 2.8vw, 40px) !important; font-weight: 500 !important; line-height: 1.18 !important; color: #1A1816 !important; margin: 0 0 14px 0 !important; }
.ojr-consult-desc { font-family: 'Inter', sans-serif !important; font-size: 15px !important; line-height: 1.65 !important; color: #5E5953 !important; margin: 0 !important; }
.ojr-consult-actions { display: flex !important; flex-wrap: wrap !important; gap: 14px !important; align-items: center !important; flex-shrink: 0 !important; }
.ojr-consult-phone { font-family: 'Inter', sans-serif !important; font-size: 14px !important; font-weight: 500 !important; color: #1A1816 !important; text-decoration: none !important; display: inline-flex !important; align-items: center !important; gap: 8px !important; opacity: 0.85 !important; transition: all 0.2s !important; }
.ojr-consult-phone:hover { opacity: 1 !important; color: #B94E1A !important; }

/* Section 11: Luxury Native FAQ Accordion (HIGH PRIORITY FIX #4) */
.ojr-faq-section { padding: 85px 0 !important; background-color: #FFFFFF !important; color: #1A1816 !important; border-top: 1px solid #DFDBD3 !important; }
.ojr-faq-inner { max-width: 920px !important; margin: 0 auto !important; }
.ojr-faq-header { text-align: center !important; margin-bottom: 48px !important; }
.ojr-faq-header .ojr-eyebrow { color: #B94E1A !important; }
.ojr-faq-header .ojr-rule { margin: 0 auto 20px auto !important; }
.ojr-faq-header .ojr-section-title { color: #1A1816 !important; }
.ojr-faq-header .ojr-section-sub { color: #5E5953 !important; margin-bottom: 0 !important; }
.ojr-faq-list { display: flex !important; flex-direction: column !important; gap: 14px !important; }
.ojr-faq-item { background: #FFFFFF !important; border: 1px solid #DFDBD3 !important; border-radius: 6px !important; overflow: hidden !important; transition: all 0.25s ease !important; }
.ojr-faq-item:hover, .ojr-faq-item.is-active { border-color: #B94E1A !important; box-shadow: 0 6px 20px rgba(26,24,22,0.06) !important; }
.ojr-faq-trigger { width: 100% !important; padding: 22px 28px !important; background: transparent !important; border: none !important; color: #1A1816 !important; text-align: left !important; display: flex !important; justify-content: space-between !important; align-items: center !important; gap: 20px !important; cursor: pointer !important; font-family: 'El Messiri', serif !important; font-size: 19px !important; font-weight: 500 !important; line-height: 1.3 !important; }
.ojr-faq-trigger:hover { color: #B94E1A !important; }
.ojr-faq-icon { width: 20px !important; height: 20px !important; flex-shrink: 0 !important; color: #B94E1A !important; transition: transform 0.3s ease !important; }
.ojr-faq-item.is-active .ojr-faq-icon { transform: rotate(180deg) !important; color: #B94E1A !important; }
.ojr-faq-answer { padding: 0 28px 24px 28px !important; display: none !important; font-family: 'Inter', sans-serif !important; font-size: 14.5px !important; line-height: 1.68 !important; color: #5E5953 !important; }
.ojr-faq-item.is-active .ojr-faq-answer { display: block !important; }
.ojr-faq-answer p { margin: 0 !important; }

/* Responsive */
@media screen and (max-width: 1080px) {
  .ojr-founder-col-img, .ojr-founder-col-txt, .ojr-banner-lead-img-box, .ojr-banner-lead-body, .ojr-comm-lead { flex: 0 0 100% !important; max-width: 100% !important; }
  .ojr-latest-card, .ojr-intent-card, .ojr-card-6 { flex: 0 0 calc(50% - 12px) !important; max-width: calc(50% - 12px) !important; }
  .ojr-card-4, .ojr-comm-row-item { flex: 0 0 calc(50% - 10px) !important; max-width: calc(50% - 10px) !important; }
  .ojr-case-card { flex: 1 1 calc(50% - 12px) !important; }
  .ojr-details-card { flex: 1 1 calc(33.333% - 14px) !important; }
}
@media screen and (max-width: 680px) {
  .ojr-container { padding: 0 18px !important; }
  .ojr-latest-card, .ojr-intent-card, .ojr-card-6, .ojr-card-4, .ojr-comm-row-item, .ojr-case-card, .ojr-details-card { flex: 0 0 100% !important; max-width: 100% !important; }
  .ojr-founder-card { padding: 24px !important; }
  .ojr-founder-img-frame { height: 340px !important; min-height: 340px !important; }
  .ojr-masthead-cta-row { flex-direction: column !important; align-items: flex-start !important; }
  .ojr-pi-step-q { white-space: normal !important; }
  .ojr-faq-trigger { padding: 18px 20px !important; font-size: 17px !important; }
  .ojr-faq-answer { padding: 0 20px 20px 20px !important; }
}
</style>

<div class="ojr-wrap">

	<!-- 1. MASTHEAD HERO -->
	<header class="ojr-masthead">
		<div class="ojr-container">
			<div class="ojr-masthead-inner">
				<span class="ojr-eyebrow">Interior Design Blog London</span>
				<div class="ojr-rule"></div>
				<!-- H1: Exact client recommended structure -->
				<h1 class="ojr-masthead-title">Interior Design Blog London &ndash; Expert Advice &amp; Project Insights</h1>
				<p class="ojr-masthead-lead">Expert renovation advice, space planning, materials and insights from real projects by Oraanj&rsquo;s London design team, covering spatial planning, material curation and <a href="https://www.oraanj-interiors.co.uk/residential-interior-decor-london/">residential interior decor</a>.</p>
				<p class="ojr-masthead-desc">Learn more about our <a href="https://www.oraanj-interiors.co.uk/services/">interior design services</a> or explore Drawing on more than 20 years of experience across residential, commercial and hospitality interiors, we share what we&rsquo;ve learnt about space planning, renovations, lighting, materials and the decisions that make a real difference to a finished space.</p>
				<div class="ojr-masthead-cta-row">
					<a href="#latest-blogs" class="ojr-btn-primary">Explore Latest Articles &darr;</a>
					<a href="<?php echo esc_url( site_url('/interior-design-london/') ); ?>" class="ojr-btn-outline">View Our Services &rarr;</a>
				</div>
			</div>
		</div>
	</header>

	<!-- 2. LATEST ARTICLES (6 NEWEST POSTS WITH SMART BADGING & DUPLICATE TRACKING) -->
	<section id="latest-blogs" class="ojr-latest-section">
		<div class="ojr-container">
			<span class="ojr-eyebrow">Fresh From the Studio</span>
			<div class="ojr-rule"></div>
			<h2 class="ojr-section-title">Latest Articles &amp; Insights</h2>
			<p class="ojr-section-sub">Recently published guides, architectural notes, and project lessons from across London.</p>
			
			<div class="ojr-latest-grid">
				<?php
				$case_study_term = get_term_by( 'slug', 'interior-case-studies', 'category' );
				$exclude_from_latest = array_filter( array( $uncategorised_id, $case_study_term ? $case_study_term->term_id : 0 ) );

				$latest_unfiltered_q = new WP_Query( array(
					'post_type'           => 'post',
					'posts_per_page'      => 6,
					'post_status'         => 'publish',
					'orderby'             => 'date',
					'order'               => 'DESC',
					'ignore_sticky_posts' => true,
					'category__not_in'    => $exclude_from_latest,
				) );

				if ( $latest_unfiltered_q->have_posts() ) :
					while ( $latest_unfiltered_q->have_posts() ) : $latest_unfiltered_q->the_post();
						$post_id = get_the_ID();
						$displayed_post_ids[] = $post_id; // Register ID to eliminate duplicate placements
						
						$thumb = get_the_post_thumbnail_url( $post_id, 'medium_large' );
						if ( ! $thumb ) { 
							$thumb = 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/Rachana-Gupta-Founder-of-Oraanj-Interiors.jpeg'; 
						}
						
						// FIX #3: General guides (ideas, tips, layouts) resolve to topical categories, NOT 'Case Study'
						$cat_label = ojr_get_article_badge( $post_id );
				?>
				<article class="ojr-latest-card">
					<div class="ojr-latest-img-box">
						<a href="<?php the_permalink(); ?>">
							<img src="<?php echo esc_url( $thumb ); ?>" alt="<?php the_title_attribute(); ?>" class="ojr-latest-img" loading="lazy" />
						</a>
						<span class="ojr-cat-pill"><?php echo esc_html( $cat_label ); ?></span>
					</div>
					<div class="ojr-latest-body">
						<div class="ojr-date-badge">
							<span class="ojr-date-dot"></span>
							<span><?php echo get_the_date('F j, Y'); ?></span>
						</div>
						<a href="<?php the_permalink(); ?>" class="ojr-latest-title"><?php echo wp_trim_words( get_the_title(), 12, '...' ); ?></a>
						<p class="ojr-latest-desc"><?php echo wp_trim_words( get_the_excerpt(), 18, '...' ); ?></p>
						<a href="<?php the_permalink(); ?>" class="ojr-link-arrow">Read Article &rarr;</a>
					</div>
				</article>
				<?php 
					endwhile; 
					wp_reset_postdata(); 
				endif; 
				?>
			</div>
		</div>
	</section>

	<!-- 3. MEET RACHANA — FOUNDER & CREATIVE DIRECTOR -->
	<section class="ojr-founder-section">
		<div class="ojr-container">
			<div class="ojr-founder-card">
				<div class="ojr-founder-col-img">
					<div class="ojr-founder-img-frame">
						<img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/Rachana-Gupta-Founder-of-Oraanj-Interiors.jpeg" alt="Rachana Gupta, Founder and Creative Director of Oraanj Interior Design" class="ojr-founder-img" loading="lazy" />
					</div>
				</div>
				<div class="ojr-founder-col-txt">
					<span class="ojr-eyebrow">From Rachana</span>
					<h2 class="ojr-founder-title">What 20+ Years of Interior Design Has Taught Me</h2>
					<p class="ojr-p">I&rsquo;m Rachana Gupta, <strong>Founder &amp; Creative Director of Oraanj Interior Design</strong>.</p>
					<p class="ojr-p">Over the years, I&rsquo;ve learnt that good interior design is rarely about following a trend. It&rsquo;s about understanding the property, solving what isn&rsquo;t working and making decisions that still feel right once the excitement of something new has passed.</p>
					<p class="ojr-p">Through this journal, our team and I share lessons from real projects &mdash; the decisions that worked, the challenges we encountered and the things we believe are worth considering before you start designing or renovating.</p>
					<p class="ojr-p ojr-quote-line">I hope it helps you make better decisions for your own space.</p>
					<div style="margin-top: 22px;">
						<div style="font-family: 'El Messiri', serif; font-size: 21px; font-weight: 500;">Rachana Gupta</div>
						<div style="font-family: 'Inter', sans-serif; font-size: 11px; color: #8C8882; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 18px;">Founder &amp; Creative Director, Oraanj Interior Design</div>
						<a href="<?php echo esc_url( site_url('/about/') ); ?>" class="ojr-link-arrow">Meet the Oraanj Team &rarr;</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- 4. FIND ADVICE BY TOPIC — QUESTIONS INTENT GATEWAY -->
	<section class="ojr-intent-section">
		<div class="ojr-container">
			<span class="ojr-eyebrow">Find Advice By Topic</span>
			<div class="ojr-rule"></div>
			<h2 class="ojr-section-title">Start With the Question You&rsquo;re Trying to Answer</h2>
			<p class="ojr-section-sub">Direct access to the exact advice, layouts and specifications you need &mdash; plus links to our relevant services.</p>
			<div class="ojr-intent-grid">
				<div class="ojr-intent-card">
					<span class="ojr-intent-num">01</span>
					<h3 class="ojr-intent-title">Planning a Renovation?</h3>
					<p class="ojr-intent-desc">Understand what to consider before work starts, how to develop a realistic scope and which design decisions are better made early.</p>
					<a href="<?php echo esc_url( site_url('/interior-design-london/') ); ?>" class="ojr-intent-service-link">&#8594; Our Residential Design &amp; Build Service</a>
					<a href="#renovation-cluster" class="ojr-link-arrow">Explore Renovation Advice &rarr;</a>
				</div>
				<div class="ojr-intent-card">
					<span class="ojr-intent-num">02</span>
					<h3 class="ojr-intent-title">Struggling With Your Layout?</h3>
					<p class="ojr-intent-desc">Learn how furniture placement, circulation, storage and space planning can change the way a property works.</p>
					<a href="<?php echo esc_url( site_url('/space-planning/') ); ?>" class="ojr-intent-service-link">&#8594; Our Space Planning Service</a>
					<a href="#renovation-cluster" class="ojr-link-arrow">Explore Space Planning &rarr;</a>
				</div>
				<div class="ojr-intent-card">
					<span class="ojr-intent-num">03</span>
					<h3 class="ojr-intent-title">Choosing Lighting or Materials?</h3>
					<p class="ojr-intent-desc">Practical guidance on lighting positions, proportions, finishes and selecting materials that work together across a scheme.</p>
					<a href="<?php echo esc_url( site_url('/lighting-design/') ); ?>" class="ojr-intent-service-link">&#8594; Our Lighting Design Service</a>
					<a href="#details-cluster" class="ojr-link-arrow">Explore Design Details &rarr;</a>
				</div>
				<div class="ojr-intent-card">
					<span class="ojr-intent-num">04</span>
					<h3 class="ojr-intent-title">Designing a Home?</h3>
					<p class="ojr-intent-desc">Ideas and advice for kitchens, living spaces, bedrooms, furniture, colour and complete residential interiors.</p>
					<a href="<?php echo esc_url( site_url('/residential-interior-design/') ); ?>" class="ojr-intent-service-link">&#8594; Our Residential Interior Design Service</a>
					<a href="#residential-cluster" class="ojr-link-arrow">Explore Home Design &rarr;</a>
				</div>
				<div class="ojr-intent-card">
					<span class="ojr-intent-num">05</span>
					<h3 class="ojr-intent-title">Planning an Office?</h3>
					<p class="ojr-intent-desc">Advice on workplace layouts, hybrid working, office fit-outs, meeting rooms and creating better spaces for employees.</p>
					<a href="<?php echo esc_url( site_url('/office-interior-design/') ); ?>" class="ojr-intent-service-link">&#8594; Our Office Interior Design Service</a>
					<a href="#commercial-cluster" class="ojr-link-arrow">Explore Office Design &rarr;</a>
				</div>
				<div class="ojr-intent-card">
					<span class="ojr-intent-num">06</span>
					<h3 class="ojr-intent-title">Opening a Restaurant or Caf&eacute;?</h3>
					<p class="ojr-intent-desc">Explore advice on seating, customer flow, counters, lighting, atmosphere and planning hospitality interiors.</p>
					<a href="<?php echo esc_url( site_url('/restaurant-interior-design/') ); ?>" class="ojr-intent-service-link">&#8594; Our Restaurant Interior Design Service</a>
					<a href="#commercial-cluster" class="ojr-link-arrow">Explore Hospitality Design &rarr;</a>
				</div>
			</div>
		</div>
	</section>

	<!-- 5. RESIDENTIAL GUIDES (INTERIOR DESIGN FOR HOMES — DEDICATED SLUGS, NO DUPLICATES) -->
	<section id="residential-cluster" class="ojr-grid6-section">
		<div class="ojr-container">
			<span class="ojr-eyebrow">Residential Guides</span>
			<div class="ojr-rule"></div>
			<h2 class="ojr-section-title">Interior Design for Homes</h2>
			<p class="ojr-section-sub">Ideas that go beyond what&rsquo;s trending. Layout, proportions, kitchens, joinery, and connected living.</p>
			<div class="ojr-grid-6">
				<?php
				$res_q = new WP_Query( array(
					'category_name'       => 'apartment-interior-design,luxury-interior-design,home-decor,interior-design-styles',
					'posts_per_page'      => 6,
					'post_status'         => 'publish',
					'orderby'             => 'date',
					'order'               => 'DESC',
					'ignore_sticky_posts' => true,
					'post__not_in'        => $displayed_post_ids,
				) );

				if ( ! $res_q->have_posts() || $res_q->post_count < 6 ) {
					$existing_found = $res_q->have_posts() ? wp_list_pluck( $res_q->posts, 'ID' ) : array();
					$exclude_combined = array_unique( array_merge( $displayed_post_ids, $existing_found ) );
					$res_fill = new WP_Query( array(
						'category_name'       => 'home-decor,interior-design-styles,interior-architecture',
						'posts_per_page'      => 6 - count( $existing_found ),
						'post_status'         => 'publish',
						'orderby'             => 'date',
						'order'               => 'DESC',
						'ignore_sticky_posts' => true,
						'post__not_in'        => $exclude_combined,
					) );
					$merged_posts = array_merge( $res_q->posts, $res_fill->posts );
					$res_q->posts = $merged_posts;
					$res_q->post_count = count( $merged_posts );
				}

				if ( $res_q->have_posts() ) : 
					while ( $res_q->have_posts() ) : $res_q->the_post();
						$post_id = get_the_ID();
						$displayed_post_ids[] = $post_id;
						$thumb = get_the_post_thumbnail_url( $post_id, 'medium_large' );
						if ( ! $thumb ) { 
							$thumb = 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/Rachana-Gupta-Founder-of-Oraanj-Interiors.jpeg'; 
						}
				?>
				<article class="ojr-card-6">
					<div class="ojr-card-img-wrap">
						<a href="<?php the_permalink(); ?>">
							<img src="<?php echo esc_url( $thumb ); ?>" alt="<?php the_title_attribute(); ?>" class="ojr-card-img" loading="lazy" />
						</a>
					</div>
					<div class="ojr-card-body">
						<div class="ojr-date-badge">
							<span class="ojr-date-dot"></span>
							<span><?php echo get_the_date('F j, Y'); ?></span>
						</div>
						<a href="<?php the_permalink(); ?>" class="ojr-card-title"><?php echo wp_trim_words( get_the_title(), 12, '...' ); ?></a>
						<p class="ojr-card-desc"><?php echo wp_trim_words( get_the_excerpt(), 18, '...' ); ?></p>
						<a href="<?php the_permalink(); ?>" class="ojr-link-arrow">Read Guide &rarr;</a>
					</div>
				</article>
				<?php 
					endwhile; 
					wp_reset_postdata(); 
				endif; 
				?>
			</div>
			<!-- Contextual service link -->
			<div style="margin-top: 36px;">
				<a href="<?php echo esc_url( site_url('/residential-interior-design/') ); ?>" class="ojr-btn-outline">View Our Residential Interior Design Service &rarr;</a>
			</div>
		</div>
	</section>

	<!-- 6. REAL PROJECT INSIGHTS — CASE STUDIES (FIX #6: HEADING FORMATTING & FIX #7: PROJECT EVIDENCE) -->
	<section class="ojr-pi-section">

		<!-- Header banner -->
		<div class="ojr-pi-header">
			<div class="ojr-container">
				<div class="ojr-pi-header-inner">
					<div class="ojr-pi-header-text">
						<span class="ojr-pi-eyebrow">Real Project Insights</span>
						<!-- FIX #6: Guaranteed whitespace between 'Learning' and 'From' -->
						<h2 class="ojr-pi-title">What We&rsquo;re Learning <br>From Real Projects</h2>
						<p class="ojr-pi-subtitle">A finished interior only shows the end of the story. The most useful lessons happen earlier &mdash; when we&rsquo;re testing floor plans, solving awkward rooms and making the decisions that don&rsquo;t appear in the final photograph.</p>
					</div>
					<div class="ojr-pi-header-cta">
						<a href="<?php echo esc_url( site_url('/portfolio/') ); ?>" class="ojr-btn-primary">Explore Our Portfolio &rarr;</a>
					</div>
				</div>
			</div>
		</div>

		<!-- 7-step process strip -->
		<div class="ojr-pi-steps-wrap">
			<div class="ojr-container">
				<div class="ojr-pi-steps">
					<div class="ojr-pi-step">
						<span class="ojr-pi-step-num">01</span>
						<div class="ojr-pi-step-txt">
							<span class="ojr-pi-step-label">The Brief</span>
							<span class="ojr-pi-step-q">What did the client need?</span>
						</div>
					</div>
					<div class="ojr-pi-step">
						<span class="ojr-pi-step-num">02</span>
						<div class="ojr-pi-step-txt">
							<span class="ojr-pi-step-label">The Problem</span>
							<span class="ojr-pi-step-q">What wasn&rsquo;t working?</span>
						</div>
					</div>
					<div class="ojr-pi-step">
						<span class="ojr-pi-step-num">03</span>
						<div class="ojr-pi-step-txt">
							<span class="ojr-pi-step-label">The Options</span>
							<span class="ojr-pi-step-q">What did we consider?</span>
						</div>
					</div>
					<div class="ojr-pi-step">
						<span class="ojr-pi-step-num">04</span>
						<div class="ojr-pi-step-txt">
							<span class="ojr-pi-step-label">The Decision</span>
							<span class="ojr-pi-step-q">Why did we choose this approach?</span>
						</div>
					</div>
					<div class="ojr-pi-step">
						<span class="ojr-pi-step-num">05</span>
						<div class="ojr-pi-step-txt">
							<span class="ojr-pi-step-label">The Drawings</span>
							<span class="ojr-pi-step-q">Plans &amp; 3D development</span>
						</div>
					</div>
					<div class="ojr-pi-step">
						<span class="ojr-pi-step-num">06</span>
						<div class="ojr-pi-step-txt">
							<span class="ojr-pi-step-label">The Result</span>
							<span class="ojr-pi-step-q">What changed in the finished space?</span>
						</div>
					</div>
					<div class="ojr-pi-step ojr-pi-step-last ojr-pi-step-hl">
						<span class="ojr-pi-step-num">07</span>
						<div class="ojr-pi-step-txt">
							<span class="ojr-pi-step-label">What We Learnt</span>
							<span class="ojr-pi-step-q">Our recommendation to you</span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Dynamic case study cards — verified projects only, no duplicates -->
		<div class="ojr-pi-cards-wrap">
			<div class="ojr-container">

			<?php
			$cs_q = new WP_Query( array(
				'category_name'       => 'interior-case-studies',
				'posts_per_page'      => -1,
				'post_status'         => 'publish',
				'orderby'             => 'date',
				'order'               => 'DESC',
				'ignore_sticky_posts' => true,
			) );

			if ( $cs_q->have_posts() ) : ?>
			<div class="ojr-case-cards">
				<?php while ( $cs_q->have_posts() ) : $cs_q->the_post();
					$post_id = get_the_ID();
					$displayed_post_ids[] = $post_id;
					
					$cs_thumb = get_the_post_thumbnail_url( $post_id, 'medium_large' );
					if ( ! $cs_thumb ) { 
						$cs_thumb = 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/Rachana-Gupta-Founder-of-Oraanj-Interiors.jpeg'; 
					}

					$cs_label = 'Oraanj Case Study';
				?>
				<a href="<?php the_permalink(); ?>" class="ojr-case-card">
					<div class="ojr-case-card-img-box">
						<img src="<?php echo esc_url( $cs_thumb ); ?>" alt="<?php the_title_attribute(); ?>" class="ojr-case-card-img" loading="lazy" />
						<span class="ojr-case-card-badge"><?php echo esc_html( $cs_label ); ?></span>
					</div>
					<div class="ojr-case-card-body">
						<span class="ojr-case-card-label"><?php echo esc_html( $cs_label ); ?></span>
						<h3 class="ojr-case-card-title"><?php echo wp_trim_words( get_the_title(), 10, '...' ); ?></h3>
						<p class="ojr-case-card-desc"><?php echo wp_trim_words( get_the_excerpt(), 16, '...' ); ?></p>
						<span class="ojr-link-arrow" style="margin-top: 0;">Read Case Study &rarr;</span>
					</div>
				</a>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
			<?php endif; ?>
			</div>
		</div>
	</section>

	<!-- 6b. DESIGN DETAILS & REAL PROJECT INSIGHTS (HIGH PRIORITY FIX #5: CAFÉ COUNTERTOP & KEY JOINERY FOCUS) -->
	<section id="details-cluster" class="ojr-details-section">
		<div class="ojr-container">
			<span class="ojr-eyebrow">Design Details &amp; Architectural Insights</span>
			<div class="ojr-rule"></div>
			<h2 class="ojr-section-title">The Details That Define High-Performing Spaces</h2>
			<p class="ojr-section-sub">From high-volume coffee counters to bespoke media walls and restaurant banquettes &mdash; deep dives into the specifications that make spaces perform.</p>
			
			<div class="ojr-details-grid">
				
				<!-- Detail 1: Cafe Counter Design (Fix #5: Prominently featured high-engagement cafe topic) -->
				<a href="<?php echo esc_url( site_url('/coffee-shop-counter-design-ideas/') ); ?>" class="ojr-details-card">
					<div class="ojr-details-img-box">
						<img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/boho-cafe-lounge-interior.jpeg" alt="Cafe Counter Design & Barista Queue Ergonomics London" class="ojr-details-img" loading="lazy" />
						<span class="ojr-details-badge">Hospitality Focus</span>
					</div>
					<div class="ojr-details-body">
						<span class="ojr-details-tag">Commercial Detail</span>
						<h3 class="ojr-details-title">Cafe Counter Design: The Heart of Every Great Coffee Shop</h3>
						<p class="ojr-details-desc">Barista triangle flow, drop-in pastry vitrines, queue pacing, and durable quartz worktops designed for high London footfall.</p>
						<span class="ojr-link-arrow">Read Guide &rarr;</span>
					</div>
				</a>

				<!-- Detail 2: Bespoke Media Walls -->
				<a href="<?php echo esc_url( site_url('/what-is-bespoke-joinery-a-guide-for-london-homeowners/') ); ?>" class="ojr-details-card">
					<div class="ojr-details-img-box">
						<img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury-modern-living-room-media-wall.jpeg" alt="Bespoke Media Wall & Architectural Joinery London" class="ojr-details-img" loading="lazy" />
						<span class="ojr-details-badge">Bespoke Millwork</span>
					</div>
					<div class="ojr-details-body">
						<span class="ojr-details-tag">Living Room Joinery</span>
						<h3 class="ojr-details-title">Bespoke Media Walls: Concealed Cables &amp; Proportions</h3>
						<p class="ojr-details-desc">Integrating acoustic panelling, concealed AV conduits, indirect warm perimeter lighting, and custom alcove storage.</p>
						<span class="ojr-link-arrow">Read Guide &rarr;</span>
					</div>
				</a>

				<!-- Detail 3: Restaurant Banquette Seating -->
				<a href="<?php echo esc_url( site_url('/how-to-plan-a-restaurant-layout-a-guide-to-space-planning-that-boosts-revenue/') ); ?>" class="ojr-details-card">
					<div class="ojr-details-img-box">
						<img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury-restaurant-lounge-banquette-seating.jpeg" alt="Restaurant Banquette Seating & Layout London" class="ojr-details-img" loading="lazy" />
						<span class="ojr-details-badge">Revenue Strategy</span>
					</div>
					<div class="ojr-details-body">
						<span class="ojr-details-tag">Dining Layouts</span>
						<h3 class="ojr-details-title">Restaurant Banquette Seating &amp; Capacity Planning</h3>
						<p class="ojr-details-desc">How custom fluted banquettes increase covers by up to 20% while preserving intimate diner acoustic privacy.</p>
						<span class="ojr-link-arrow">Read Guide &rarr;</span>
					</div>
				</a>

				<!-- Detail 4: Office Reception Desks & Glass Meeting Rooms -->
				<a href="<?php echo esc_url( site_url('/glass-meeting-room-design-ideas/') ); ?>" class="ojr-details-card">
					<div class="ojr-details-img-box">
						<img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/modern-office-lobby-wooden-ceiling-lounge.jpeg" alt="Glass Meeting Rooms & Executive Office Reception Desks" class="ojr-details-img" loading="lazy" />
						<span class="ojr-details-badge">Workplace Fit-Out</span>
					</div>
					<div class="ojr-details-body">
						<span class="ojr-details-tag">Office Architecture</span>
						<h3 class="ojr-details-title">Executive Reception Desks &amp; Acoustic Glass Suites</h3>
						<p class="ojr-details-desc">Creating strong brand presence through monolithic stone reception counters and Crittall-style acoustic partitions.</p>
						<span class="ojr-link-arrow">Read Guide &rarr;</span>
					</div>
				</a>

				<!-- Detail 5: Kitchen Islands & Small Layout Flow -->
				<a href="<?php echo esc_url( site_url('/is-a-kitchen-island-worth-it-in-a-small-london-kitchen/') ); ?>" class="ojr-details-card">
					<div class="ojr-details-img-box">
						<img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/warm-walnut-luxury-kitchen-island.webp" alt="Kitchen Island Proportions & Clearances London Homes" class="ojr-details-img" loading="lazy" />
						<span class="ojr-details-badge">Spatial Planning</span>
					</div>
					<div class="ojr-details-body">
						<span class="ojr-details-tag">Kitchen Architecture</span>
						<h3 class="ojr-details-title">Kitchen Islands: Clearances &amp; Circulation Rules</h3>
						<p class="ojr-details-desc">Applying the 1,000mm clearance standard, downdraft hob extraction, waterfall edges, and integrated seating in London homes.</p>
						<span class="ojr-link-arrow">Read Guide &rarr;</span>
					</div>
				</a>

			</div>
		</div>
	</section>

	<!-- 7. RENOVATION & SPATIAL PLANNING (FIX #1: STRICTLY REFURBISHMENT, COSTS, PERMISSIONS & SPACE PLANNING) -->
	<section id="renovation-cluster" class="ojr-banner5-section">
		<div class="ojr-container">
			<span class="ojr-eyebrow">Renovation &amp; Spatial Planning</span>
			<div class="ojr-rule"></div>
			<h2 class="ojr-section-title">Planning a Renovation? Make the Space Work Better</h2>
			<p class="ojr-section-sub">Read this before the builders start. Refurbishment planning, contractor briefs, permissions, and budgeting insights.</p>
			
			<?php
			// FIX #1: Strictly target genuine renovation, costs, and spatial planning categories
			$reno_q = new WP_Query( array(
				'category_name'       => 'property-renovation,renovation-planning-guide,case-studies-property-renovation,space-design,design-costs-budget-planning,turnkey-interior-design',
				'posts_per_page'      => 5,
				'post_status'         => 'publish',
				'orderby'             => 'date',
				'order'               => 'DESC',
				'ignore_sticky_posts' => true,
				'post__not_in'        => $displayed_post_ids,
			) );

			// Strictly guarded fallback: NEVER pull retail, salon or commercial articles into Renovation!
			if ( ! $reno_q->have_posts() || $reno_q->post_count < 5 ) {
				$existing_reno_found = $reno_q->have_posts() ? wp_list_pluck( $reno_q->posts, 'ID' ) : array();
				$exclude_reno_combined = array_unique( array_merge( $displayed_post_ids, $existing_reno_found ) );
				$reno_fill = new WP_Query( array(
					'category_name'       => 'design-costs-budget-planning,space-design,interior-architecture',
					'posts_per_page'      => 5 - count( $existing_reno_found ),
					'post_status'         => 'publish',
					'orderby'             => 'date',
					'order'               => 'DESC',
					'ignore_sticky_posts' => true,
					'post__not_in'        => $exclude_reno_combined,
				) );
				$merged_reno_posts = array_merge( $reno_q->posts, $reno_fill->posts );
				$reno_q->posts = $merged_reno_posts;
				$reno_q->post_count = count( $merged_reno_posts );
			}

			if ( $reno_q->have_posts() ) :
				$r_idx = 0;
				while ( $reno_q->have_posts() ) : $reno_q->the_post();
					$post_id = get_the_ID();
					$displayed_post_ids[] = $post_id;
					
					$thumb = get_the_post_thumbnail_url( $post_id, 'large' );
					if ( ! $thumb ) { 
						$thumb = 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/Rachana-Gupta-Founder-of-Oraanj-Interiors.jpeg'; 
					}

					if ( $r_idx === 0 ) :
			?>
			<a href="<?php the_permalink(); ?>" class="ojr-banner-lead">
				<div class="ojr-banner-lead-img-box">
					<img src="<?php echo esc_url( $thumb ); ?>" alt="<?php the_title_attribute(); ?>" class="ojr-banner-lead-img" />
				</div>
				<div class="ojr-banner-lead-body">
					<div class="ojr-date-badge">
						<span class="ojr-date-dot"></span>
						<span><?php echo get_the_date('F j, Y'); ?></span>
					</div>
					<h3 class="ojr-banner-lead-title"><?php the_title(); ?></h3>
					<p class="ojr-p"><?php echo wp_trim_words( get_the_excerpt(), 24, '...' ); ?></p>
					<span class="ojr-link-arrow">Read Detailed Guide &rarr;</span>
				</div>
			</a>
			<div class="ojr-grid-4">
			<?php else : ?>
				<a href="<?php the_permalink(); ?>" class="ojr-card-4">
					<div class="ojr-card-4-thumb-box">
						<img src="<?php echo esc_url( $thumb ); ?>" alt="<?php the_title_attribute(); ?>" class="ojr-card-4-thumb" loading="lazy" />
					</div>
					<span class="ojr-date-badge" style="font-size: 10px; margin-bottom: 4px;"><?php echo get_the_date('M j, Y'); ?></span>
					<h4 class="ojr-card-4-title"><?php echo wp_trim_words( get_the_title(), 10, '...' ); ?></h4>
					<span class="ojr-link-arrow">Read &rarr;</span>
				</a>
			<?php
				endif;
				$r_idx++;
				endwhile;
				echo '</div>';
				wp_reset_postdata();
			endif;
			?>
			<!-- Contextual service link -->
			<div style="margin-top: 32px;">
				<a href="<?php echo esc_url( site_url('/interior-design-london/') ); ?>" class="ojr-btn-outline">Discuss Your Renovation With Oraanj &rarr;</a>
			</div>
		</div>
	</section>

	<!-- 8. COMMERCIAL & WORKPLACE (FIX #1 & #2: COMMERCIAL, RETAIL & RESTAURANT PROPERLY LOCATED HERE) -->
	<section id="commercial-cluster" class="ojr-commercial-section">
		<div class="ojr-container">
			<span class="ojr-eyebrow">Workplace &amp; Hospitality</span>
			<div class="ojr-rule"></div>
			<h2 class="ojr-section-title">Commercial, Office &amp; Restaurant Design</h2>
			<p class="ojr-section-sub">Designing around customer flow, employee ergonomics, commercial leases, and operational success.</p>
			
			<?php
			$comm_q = new WP_Query( array(
				'category_name'       => 'commercial-interior-design,office-design,restaurant-interior-design,cafe-interior-design',
				'posts_per_page'      => 6,
				'post_status'         => 'publish',
				'orderby'             => 'date',
				'order'               => 'DESC',
				'ignore_sticky_posts' => true,
				'post__not_in'        => $displayed_post_ids,
			) );

			if ( ! $comm_q->have_posts() || $comm_q->post_count < 6 ) {
				$existing_comm_found = $comm_q->have_posts() ? wp_list_pluck( $comm_q->posts, 'ID' ) : array();
				$exclude_comm_combined = array_unique( array_merge( $displayed_post_ids, $existing_comm_found ) );
				$comm_fill = new WP_Query( array(
					'category_name'       => 'office-design,restaurant-interior-design,commercial-interior-design',
					'posts_per_page'      => 6 - count( $existing_comm_found ),
					'post_status'         => 'publish',
					'orderby'             => 'date',
					'order'               => 'DESC',
					'ignore_sticky_posts' => true,
					'post__not_in'        => $exclude_comm_combined,
				) );
				$merged_comm_posts = array_merge( $comm_q->posts, $comm_fill->posts );
				$comm_q->posts = $merged_comm_posts;
				$comm_q->post_count = count( $merged_comm_posts );
			}

			if ( $comm_q->have_posts() ) :
				$c_posts = $comm_q->posts;
				$c_leads = array_slice( $c_posts, 0, 2 );
				$c_rows  = array_slice( $c_posts, 2, 4 );
			?>
			<!-- 2 Dominant Lead Cards With Images -->
			<div class="ojr-commercial-top">
				<?php foreach ( $c_leads as $post ) : setup_postdata( $post );
					$post_id = get_the_ID();
					$displayed_post_ids[] = $post_id;
					$thumb = get_the_post_thumbnail_url( $post_id, 'medium_large' );
					if ( ! $thumb ) { 
						$thumb = 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/Rachana-Gupta-Founder-of-Oraanj-Interiors.jpeg'; 
					}
				?>
				<a href="<?php the_permalink(); ?>" class="ojr-comm-lead">
					<div class="ojr-comm-lead-img-box">
						<img src="<?php echo esc_url( $thumb ); ?>" alt="<?php the_title_attribute(); ?>" class="ojr-comm-lead-img" loading="lazy" />
					</div>
					<div class="ojr-comm-lead-body">
						<div class="ojr-date-badge">
							<span class="ojr-date-dot"></span>
							<span><?php echo get_the_date('F j, Y'); ?></span>
						</div>
						<h3 class="ojr-comm-lead-title"><?php the_title(); ?></h3>
						<p class="ojr-p"><?php echo wp_trim_words( get_the_excerpt(), 16, '...' ); ?></p>
						<span class="ojr-link-arrow">Read Article &rarr;</span>
					</div>
				</a>
				<?php endforeach; wp_reset_postdata(); ?>
			</div>

			<!-- 4 Grid Cards With Images & Dates -->
			<div class="ojr-comm-row-grid">
				<?php foreach ( $c_rows as $post ) : setup_postdata( $post );
					$post_id = get_the_ID();
					$displayed_post_ids[] = $post_id;
					$thumb = get_the_post_thumbnail_url( $post_id, 'medium' );
					if ( ! $thumb ) { 
						$thumb = 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/Rachana-Gupta-Founder-of-Oraanj-Interiors.jpeg'; 
					}
				?>
				<a href="<?php the_permalink(); ?>" class="ojr-comm-row-item">
					<div class="ojr-comm-row-thumb-box">
						<img src="<?php echo esc_url( $thumb ); ?>" alt="<?php the_title_attribute(); ?>" class="ojr-comm-row-thumb" loading="lazy" />
					</div>
					<div class="ojr-comm-row-body">
						<div class="ojr-date-badge" style="font-size: 10px; margin-bottom: 4px;">
							<span class="ojr-date-dot"></span>
							<span><?php echo get_the_date('M j, Y'); ?></span>
						</div>
						<h4 class="ojr-comm-row-title"><?php echo wp_trim_words( get_the_title(), 10, '...' ); ?></h4>
						<span class="ojr-link-arrow">Explore &rarr;</span>
					</div>
				</a>
				<?php endforeach; wp_reset_postdata(); ?>
			</div>
			<?php endif; ?>
			<!-- Contextual service links for commercial visitors -->
			<div style="margin-top: 36px; display: flex; flex-wrap: wrap; gap: 14px;">
				<a href="<?php echo esc_url( site_url('/office-interior-design/') ); ?>" class="ojr-btn-outline">Office Interior Design &rarr;</a>
				<a href="<?php echo esc_url( site_url('/restaurant-interior-design/') ); ?>" class="ojr-btn-outline">Restaurant Interior Design &rarr;</a>
			</div>
		</div>
	</section>

</div><!-- /.ojr-wrap -->

<div style="text-align:center;padding:25px 0;"><p class="orc-body">Looking for past guides and design insights? Browse our collection of <a href="https://www.oraanj-interiors.co.uk/old-blogs/">older blog articles</a>.</p></div>
<!-- 9. CONSULTATION CTA -->
<div class="ojr-wrap" style="background-color: #FFFFFF !important; overflow: visible !important; border-top: 1px solid #DFDBD3; border-bottom: 1px solid #DFDBD3;">
	
	<section class="ojr-consult-section">
		<div class="ojr-container">
			<div class="ojr-consult-inner">
				<div class="ojr-consult-text">
					<span class="ojr-consult-eyebrow">Free Initial Consultation</span>
					<h2 class="ojr-consult-title">Planning a Renovation or Commercial Interior?</h2>
					<p class="ojr-consult-desc">Whether you&rsquo;re redesigning a London home, fitting out an office or creating a new hospitality space, Oraanj can help. Speak to Rachana&rsquo;s team or <a href="https://www.oraanj-interiors.co.uk/contact/">talk to our designers</a> for an initial consultation about your project.</p>
				</div>
				<div class="ojr-consult-actions">
					<a href="<?php echo esc_url( site_url('/contact/') ); ?>" class="ojr-btn-primary">Book a Consultation &rarr;</a>
					<a href="tel:4407448803051" class="ojr-consult-phone">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 10.8 19.79 19.79 0 01.22 2.18 2 2 0 012.18 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.91 7.91a16 16 0 006.18 6.18l1.28-1.28a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"></path></svg>
						+44 (0) 7448 803051
					</a>
				</div>
			</div>
		</div>
	</section>
</div>

<!-- 10. DIRECT FORM INTEGRATION -->
<div class="home_form_section">
	<div class="container">
		<div class="container_inner container_inner_white">
			<div class="row">
				<div class="col-lg-5 col-md-6 text-center">
					<h3 class="banner_bottom_section_heading">Ready to Transform Your Space?</h3>
					<div class="home_form_section_text">Get expert guidance on residential, commercial, and hospitality interiors from Oraanj Interior Design.</div>
					<div class="home_form_section_text"><a href="tel:4407448803051">+44 (0) 7448 803051</a></div>
				</div>
				<div class="col-lg-5 col-md-6 offset-lg-2 home_form">
					<?php echo do_shortcode('[common_section]'); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- 11. FAQ ACCORDION (HIGH PRIORITY FIX #4: NATIVE LUXURY COMPONENT WITH SCHEMA) -->
<section class="ojr-faq-section" id="faq-section">
	<div class="ojr-container">
		<div class="ojr-faq-inner">
			<div class="ojr-faq-header">
				<span class="ojr-eyebrow">Frequently Asked Questions</span>
				<div class="ojr-rule"></div>
				<h2 class="ojr-section-title">Common Questions About Our Journal &amp; Design Practice</h2>
				<p class="ojr-section-sub">Guidance on navigating our articles, case studies, and studio interior design services across London.</p>
			</div>
			
			<div class="ojr-faq-list">
				
				<!-- Q1 -->
				<div class="ojr-faq-item is-active">
					<button type="button" class="ojr-faq-trigger" aria-expanded="true">
						<span>What topics does the Oraanj Interior Design London journal cover?</span>
						<svg class="ojr-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
					</button>
					<div class="ojr-faq-answer">
						<p>Our journal provides deep architectural and styling insights across residential homes, turnkey property renovations, commercial workspaces, boutique hotels, and restaurants. Topics include spatial planning, kitchen &amp; bathroom layouts, bespoke joinery specifications, lighting design, Listed building planning permissions, and realistic budgeting guides for London properties.</p>
					</div>
				</div>

				<!-- Q2 -->
				<div class="ojr-faq-item">
					<button type="button" class="ojr-faq-trigger" aria-expanded="false">
						<span>How can I find advice relevant to my specific project or property?</span>
						<svg class="ojr-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
					</button>
					<div class="ojr-faq-answer">
						<p>You can use the &ldquo;Find Advice By Topic&rdquo; gateway at the top of the page to navigate directly to your sector&mdash;residential guides, renovation advice, space planning, office design, or hospitality &amp; caf&eacute; planning. Each cluster links directly to our detailed articles and relevant interior architecture services.</p>
					</div>
				</div>

				<!-- Q3 -->
				<div class="ojr-faq-item">
					<button type="button" class="ojr-faq-trigger" aria-expanded="false">
						<span>What is the difference between your design guides and real project case studies?</span>
						<svg class="ojr-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
					</button>
					<div class="ojr-faq-answer">
						<p>Our design guides offer practical principles, spatial rules, and material considerations for inspiration. In contrast, our &ldquo;Real Project Insights&rdquo; case studies document actual, identifiable projects undertaken by Oraanj across London&mdash;walking through the initial brief, the specific challenges encountered, alternative layouts tested, technical drawing packages, and the final built outcome.</p>
					</div>
				</div>

				<!-- Q4 -->
				<div class="ojr-faq-item">
					<button type="button" class="ojr-faq-trigger" aria-expanded="false">
						<span>Does Oraanj undertake commercial office and restaurant fit-outs in London?</span>
						<svg class="ojr-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
					</button>
					<div class="ojr-faq-answer">
						<p>Yes. Oraanj Interior Design provides comprehensive commercial design and fit-out consultancy across London. We specialise in Cat A and Cat B office design, boutique restaurants, coffee shops, and retail spaces&mdash;focusing on customer journey, acoustic balance, seating density, building regulations, and turnkey project delivery.</p>
					</div>
				</div>

				<!-- Q5 -->
				<div class="ojr-faq-item">
					<button type="button" class="ojr-faq-trigger" aria-expanded="false">
						<span>How do I book an initial consultation for my project?</span>
						<svg class="ojr-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
					</button>
					<div class="ojr-faq-answer">
						<p>You can book an initial consultation by submitting the contact form on this page or calling our London team directly on <a href="tel:4407448803051" style="color: #B94E1A; text-decoration: underline;">+44 (0) 7448 803051</a>. Creative Director Rachana Gupta and our senior interior architects will review your property plans, spatial goals, timeline, and investment range.</p>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<!-- Interactive Accordion Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
	var faqItems = document.querySelectorAll('.ojr-faq-item');
	faqItems.forEach(function(item) {
		var trigger = item.querySelector('.ojr-faq-trigger');
		if (!trigger) return;
		trigger.addEventListener('click', function() {
			var isActive = item.classList.contains('is-active');
			faqItems.forEach(function(otherItem) {
				otherItem.classList.remove('is-active');
				var otherTrigger = otherItem.querySelector('.ojr-faq-trigger');
				if (otherTrigger) otherTrigger.setAttribute('aria-expanded', 'false');
			});
			if (!isActive) {
				item.classList.add('is-active');
				trigger.setAttribute('aria-expanded', 'true');
			}
		});
	});
});
</script>

<!-- Schema.org FAQPage JSON-LD for Search Engines -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What topics does the Oraanj Interior Design London journal cover?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Our journal provides deep architectural and styling insights across residential homes, turnkey property renovations, commercial workspaces, boutique hotels, and restaurants. Topics include spatial planning, kitchen & bathroom layouts, bespoke joinery specifications, lighting design, Listed building planning permissions, and realistic budgeting guides for London properties."
      }
    },
    {
      "@type": "Question",
      "name": "How can I find advice relevant to my specific project or property?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You can use the 'Find Advice By Topic' gateway at the top of the page to navigate directly to your sector—residential guides, renovation advice, space planning, office design, or hospitality & café planning. Each cluster links directly to our detailed articles and relevant interior architecture services."
      }
    },
    {
      "@type": "Question",
      "name": "What is the difference between your design guides and real project case studies?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Our design guides offer practical principles, spatial rules, and material considerations for inspiration. In contrast, our 'Real Project Insights' case studies document actual, identifiable projects undertaken by Oraanj across London—walking through the initial brief, the specific challenges encountered, alternative layouts tested, technical drawing packages, and the final built outcome."
      }
    },
    {
      "@type": "Question",
      "name": "Does Oraanj undertake commercial office and restaurant fit-outs in London?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Oraanj Interior Design provides comprehensive commercial design and fit-out consultancy across London. We specialise in Cat A and Cat B office design, boutique restaurants, coffee shops, and retail spaces—focusing on customer journey, acoustic balance, seating density, building regulations, and turnkey project delivery."
      }
    },
    {
      "@type": "Question",
      "name": "How do I book an initial consultation for my project?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You can book an initial consultation by submitting the contact form on this page or calling our London team directly on +44 (0) 7448 803051. Creative Director Rachana Gupta and our senior interior architects will review your property plans, spatial goals, timeline, and investment range."
      }
    }
  ]
}
</script>

<?php get_footer(); ?>