const fs = require('fs');
const path = require('path');

const outputDir = path.join(__dirname, 'Locations');
if (!fs.existsSync(outputDir)) {
  fs.mkdirSync(outputDir, { recursive: true });
}

// Load data modules
const dataPart1 = require('./locations-data-1.js');
const dataPart2 = require('./locations-data-2.js');
const commercialData = require('./locations-commercial-data.js');
const cats = JSON.parse(fs.readFileSync('categorized-images.json', 'utf8'));

const allLocations = [...dataPart1, ...dataPart2];

console.log(`Total locations to process: ${allLocations.length}`);

// Unique commercial images pool (63 images available)
const commercialImagesPool = [...new Set(cats.commercial)];

// Specific portfolio project mapping for locations with dedicated portfolio case studies
const portfolioMapping = {
  'canary-wharf': {
    url: 'https://www.oraanj-interiors.co.uk/canary-wharf-penthouse-interior-design/',
    img: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/stone-kitchen-island-brass-faucet-detail.webp',
    alt: 'Canary Wharf Penthouse bespoke stone island and brushed brass tapware by Oraanj',
    title: 'Canary Wharf Penthouse Interior Design',
    tag: 'Contemporary High-Rise Residence',
    desc: 'This Canary Wharf penthouse features a contemporary interior with warm, earthy colours and natural materials. Terracotta tones, walnut finishes, brushed brass and textured stone bring warmth and character to the open-plan living spaces, while floor-to-ceiling windows provide natural light and views across London.'
  },
  'richmond-upon-thames': {
    url: 'https://www.oraanj-interiors.co.uk/richmond-house-interior-design/',
    img: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/elegant-living-room-travertine-coffee-table.webp',
    alt: 'Richmond House period residence interior architecture by Oraanj',
    title: 'Richmond Period Residence',
    tag: 'Heritage Family Home',
    desc: 'A comprehensive interior architecture and refurbishment of a substantial Richmond family home, combining Edwardian proportions with bespoke walnut joinery, natural stone surfaces and carefully zoned living spaces.'
  },
  'mayfair': {
    url: 'https://www.oraanj-interiors.co.uk/mayfair-townhouse-residence/',
    img: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury-modern-living-room-media-wall.jpeg',
    alt: 'Mayfair Townhouse Residence bespoke interior design by Oraanj',
    title: 'Mayfair Townhouse Residence',
    tag: 'Conservation Townhouse',
    desc: 'An architectural refurbishment of a classic Mayfair residence, featuring bespoke marble chimneypieces, tailored bronze hardware, fluted timber joinery and turnkey furniture procurement.'
  },
  'hayes': {
    url: 'https://www.oraanj-interiors.co.uk/hayes-corporate/',
    img: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury-corporate-reception-interior.jpeg',
    alt: 'Hayes Corporate Headquarters reception and office fit-out by Oraanj',
    title: 'Hayes Corporate Headquarters',
    tag: 'Commercial Office Fit-Out',
    desc: 'Turnkey Cat B workplace fit-out in Hayes, incorporating acoustic meeting suites, ergonomic team zones, bespoke architectural reception joinery and high-performance commercial finishes.'
  },
  'chingford': {
    url: 'https://www.oraanj-interiors.co.uk/chingford-office/',
    img: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/Contemporary-Office-Design-with-Natural-Light-an.jpeg',
    alt: 'Chingford Office open-plan commercial interior design by Oraanj',
    title: 'Chingford Workplace Fit-Out',
    tag: 'Commercial Design & Build',
    desc: 'A flexible, modern commercial workspace designed for collaborative teams, featuring acoustic timber slat partitions, ergonomic workstation layouts and energy-efficient lighting schemes.'
  },
  'bromley': {
    url: 'https://www.oraanj-interiors.co.uk/bromley-restaurant/',
    img: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/modern-cafe-bar-and-dining-interior.jpeg',
    alt: 'Bromley Restaurant dining room and bar interior design by Oraanj',
    title: 'Bromley Restaurant & Dining',
    tag: 'Hospitality Interior Design',
    desc: 'Complete restaurant and bar fit-out in Bromley, featuring custom olive leather banquettes, fluted timber counter fronts, atmospheric pendant lighting and durable terrazzo finishes.'
  },
  'shoreditch': {
    url: 'https://www.oraanj-interiors.co.uk/shoreditch-bar/',
    img: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/bohemian-jungle-lounge-interior.jpeg',
    alt: 'Shoreditch Bar and cocktail lounge interior design by Oraanj',
    title: 'Shoreditch Cocktail Lounge & Bar',
    tag: 'Hospitality Bar Fit-Out',
    desc: 'An atmospheric hospitality interior in Shoreditch blending exposed architectural brickwork with bespoke velvet banquettes, a brass-topped cocktail counter and layered architectural lighting.'
  },
  'kensington-and-chelsea': {
    url: 'https://www.oraanj-interiors.co.uk/kensington-lounge-bar/',
    img: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury-cocktail-bar-interior-design.jpeg',
    alt: 'Kensington Lounge & Bar hospitality interior design by Oraanj',
    title: 'Kensington Cocktail Lounge & Bar',
    tag: 'Hospitality & Bar Design',
    desc: 'A bespoke hospitality scheme in prime Kensington featuring fluted timber bar fronts, antiqued brass gantries, deep velvet banquette seating and warm architectural lighting.'
  },
  'ilford': {
    url: 'https://www.oraanj-interiors.co.uk/ilford-wellness-retail-spa-boutique/',
    img: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury_curved_window_lounge_interior.jpeg',
    alt: 'Ilford Wellness Spa Boutique commercial interior design by Oraanj',
    title: 'Ilford Wellness Spa Boutique',
    tag: 'Commercial Wellness Fit-Out',
    desc: 'Bespoke reception joinery, acoustic treatment rooms and soothing earthy palettes planned for a calm, comfortable client journey in Ilford.'
  },
  'tooting': {
    url: 'https://www.oraanj-interiors.co.uk/tooting-hair-salon/',
    img: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/modern-salon-reception-entrance.jpeg',
    alt: 'Tooting Hair Salon interior design and commercial fit-out by Oraanj',
    title: 'Tooting Hair Salon & Boutique',
    tag: 'Commercial & Retail Fit-Out',
    desc: 'Turnkey interior architecture, custom styling stations, integrated task lighting and durable porcelain surfaces delivering a practical, contemporary salon in Tooting.'
  },
  'nottingham': {
    url: 'https://www.oraanj-interiors.co.uk/nottingham-restaurant-open-kitchen/',
    img: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/interior-design-of-a-restaurant.jpeg',
    alt: 'Nottingham open kitchen restaurant interior design by Oraanj',
    title: 'Nottingham Open-Kitchen Restaurant',
    tag: 'Commercial Hospitality Design',
    desc: 'Contemporary dining interior showcasing an open-kitchen layout, textured terracotta finishes, acoustic timber slatted ceilings and bespoke banquette seating.'
  }
};

function getExpandedFaqs(loc) {
  const baseFaqs = [...loc.faqs];

  const additionalFaqs = [
    {
      q: `Do you manage the entire planning permission and building regulations process in ${loc.name}?`,
      a: `Yes. Whether your project involves a ground-floor kitchen extension, commercial shopfront alteration, or internal structural modifications, our architectural team prepares all necessary technical drawings and submits applications directly to the local planning authority across ${loc.borough || 'London'}. We coordinate structural engineering calculations, Building Control inspections, Party Wall surveyor agreements, and Thames Water build-over notices to ensure total regulatory compliance.`
    },
    {
      q: `Can you source bespoke furniture, British fabrics, and trade-only finishes for our ${loc.name} project?`,
      a: `Absolutely. We maintain exclusive trade relationships with premier British fabric houses, bespoke joiners, artisan stonemasons, and European lighting manufacturers. From custom wool and linen upholstery to hand-finished brass hardware and bespoke fitted cabinetry, we handle the complete procurement, trade-discount negotiation, quality control, and on-site white-glove installation.`
    },
    {
      q: `How long does a typical interior design and refurbishment project take in ${loc.name}?`,
      a: `A single-room or concept design phase typically takes 2 to 4 weeks depending on revisions. Full technical packages and planning approvals usually require 6 to 10 weeks. For complete turnkey Design & Build renovations, including structural alterations, bespoke joinery, MEP first-fix, and final dressing, timelines generally range from 3 to 6 months, all managed under a transparent programme of works.`
    },
    {
      q: `Can we live or operate in the property during the renovation work in ${loc.name}?`,
      a: `For single-room projects or phased refurbishments, clients can often remain in residence while work is zoned off cleanly. However, for whole-property structural renovations involving wall removals, full re-wiring, re-plumbing, and commercial fit-outs, we generally advise vacating for key messy phases to ensure safety, minimize disruption, and accelerate contractor efficiency on site.`
    }
  ];

  return [...baseFaqs, ...additionalFaqs];
}

function renderLocationHtml(loc, locIndex) {
  const typologiesHtml = loc.typologies.map(t =>
`<div class="orc-split-card">
<div class="orc-split-card-header">
<span class="orc-split-card-num">${t.num}</span>
<span class="orc-split-card-tag">${t.tag}</span>
</div>
<h4 class="orc-split-card-title">${t.title}</h4>
<p class="orc-split-card-desc">${t.desc}</p>
</div>`).join('');

  const servicesHtml = loc.servicesItems.map(s =>
`<div class="orc-property-item">
<h4 class="orc-property-item-title">${s.title}</h4>
<p class="orc-property-item-desc">${s.desc}</p>
</div>`).join('');

  const guidanceTagsHtml = loc.guidancePoints.map(p =>
`<div class="orc-feature-tag">
<svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="#B94E1A" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
<span>${p}</span>
</div>`).join('');

  const allFaqs = getExpandedFaqs(loc);
  const faqsHtml = allFaqs.map((f, idx) =>
`[toggle title="${f.q}" state="${idx === 0 ? 'opened' : 'closed'}"]
${f.a}
[/toggle]`).join('\n');

  const faqSchemaObj = {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": `${loc.url}#faq`,
    "mainEntity": allFaqs.map(f => ({
      "@type": "Question",
      "name": f.q,
      "acceptedAnswer": {
        "@type": "Answer",
        "text": f.a
      }
    }))
  };
  const faqSchemaJson = JSON.stringify(faqSchemaObj, null, 2);

  // Check if this location has a specific portfolio project
  const matchedPortfolio = portfolioMapping[loc.slug];

  let portfolioSectionHtml = '';
  if (matchedPortfolio) {
    portfolioSectionHtml = `<!-- PORTFOLIO SPOTLIGHT: ${matchedPortfolio.title.toUpperCase()} -->
<section class="orc-section orc-bg-tint orc-border-top" style="margin:0 !important;padding:50px 24px !important;">
<div class="orc-container">
<div class="orc-split orc-split-reverse">
<div class="orc-col-media">
<div class="orc-media-frame orc-media-frame-sq" style="aspect-ratio:1/1 !important;width:100% !important;height:auto !important;">
<a href="${matchedPortfolio.url}" style="display:block;width:100%;height:100%;text-decoration:none;overflow:hidden;">
<img class="orc-split-img" src="${matchedPortfolio.img}" alt="${matchedPortfolio.alt}" loading="lazy" style="aspect-ratio:1/1 !important;width:100% !important;height:100% !important;object-fit:cover !important;object-position:center !important;" />
</a>
</div>
</div>
<div class="orc-col-content">
<div class="orc-eyebrow-wrap"><span class="orc-eyebrow">Local Project Showcase</span></div>
<div class="orc-rule"></div>
<h3 class="orc-title">${matchedPortfolio.title}</h3>
<p class="orc-subtitle">${matchedPortfolio.tag}</p>
<p class="orc-lead">${matchedPortfolio.desc}</p>
<p class="orc-body">This signature scheme highlights Oraanj's ability to combine architectural rigour with bespoke craftsmanship. From initial concept drawings and layout planning through to full procurement and site handover, each element was tailored precisely to our client's brief.</p>
<div class="orc-hero-actions orc-mt-24">
<a class="orc-btn orc-btn-primary" href="${matchedPortfolio.url}">
<span class="orc-btn-label">View Project Details</span>
<span class="orc-btn-arrow">→</span>
</a>
<a class="orc-btn orc-btn-outline" href="https://www.oraanj-interiors.co.uk/portfolio">
<span class="orc-btn-label">Explore Full Portfolio</span>
</a>
</div>
</div>
</div>
</div>
</section>`;
  }

  // Commercial Profile Data for this Location
  const comm = commercialData[loc.slug] || {
    eyebrow: 'Commercial Fit-Outs & Business Interiors',
    title: `Commercial Interior Design & Office Fit-Outs in ${loc.name}`,
    subtitle: `Boutique Workplaces, Dining Concepts & Retail Spaces Across ${loc.name}`,
    lead: `Commercial spaces in ${loc.name} require captivating aesthetics, intelligent spatial planning, and high-performance durability to maximize commercial return and client engagement.`,
    body: `From boutique offices and executive suites to vibrant cafés, restaurants, and retail spaces, our dedicated design and build in ${loc.name} team manages structural alterations, building control compliance, M&E services, and bespoke trade joinery under single-point contract accountability.`,
    points: [
      { num: '01', tag: 'Workplace', title: 'Executive Offices & Studios', desc: 'Acoustic meeting pods, ergonomic workstations, and refined reception branding.' },
      { num: '02', tag: 'Hospitality', title: 'Restaurants, Cafés & Bars', desc: 'Front-of-house flow, custom bar counters, and durable luxury banquette seating.' },
      { num: '03', tag: 'Retail', title: 'Boutiques & Clinics', desc: 'Architectural display shelving, client waiting lounges, and high-impact lighting.' },
      { num: '04', tag: 'Turnkey', title: `Design & Build ${loc.name} Delivery`, desc: 'Full contractor management, licensing drawings, and rapid commercial fit-outs.' }
    ]
  };

  const commImg = comm.commImg || commercialImagesPool[locIndex % commercialImagesPool.length];
  const commPointsHtml = comm.points.map(p =>
`<div class="orc-split-card">
<div class="orc-split-card-header">
<span class="orc-split-card-num">${p.num}</span>
<span class="orc-split-card-tag">${p.tag}</span>
</div>
<h4 class="orc-split-card-title">${p.title}</h4>
<p class="orc-split-card-desc">${p.desc}</p>
</div>`).join('');

  const seoTitle = loc.seoTitle || (loc.slug === 'canary-wharf' ? 'Canary Wharf Penthouse Interior Design | Oraanj' : `${loc.name} Interior Design & Architecture | Oraanj`);
  const metaDesc = loc.metaDesc || (loc.slug === 'canary-wharf' ? 'Explore a contemporary Canary Wharf penthouse design by Oraanj, featuring warm terracotta tones, walnut finishes, bespoke interiors and London skyline views.' : loc.heroLead);

  return `<!-- Page URL: ${loc.url} -->
<!-- SEO Title: ${seoTitle} -->
<!-- Meta Description: ${metaDesc} -->
<!-- ==========================================================================
     ORAANJ INTERIOR DESIGN & BUILD, LONDON
     PAGE: ${loc.name.toUpperCase()} INTERIOR DESIGN
     STYLES: style.css (scoped with .orc- prefix, zero global interference)
     ========================================================================== -->
<!-- 1. HERO SECTION -->
<section class="orc-hero-wrap" style="margin:0 !important;padding:55px 24px !important;">
<div class="orc-container">
<div class="orc-hero-content">
<div class="orc-eyebrow-wrap">
<span class="orc-eyebrow">${loc.eyebrow}</span>
</div>
<div class="orc-rule"></div>
<h1 class="orc-hero-heading">${loc.h1}</h1>
<p class="orc-hero-lead">${loc.heroLead}</p>
<p class="orc-hero-body">${loc.heroBody1}</p>
<p class="orc-hero-body">${loc.heroBody2}</p>
<div class="orc-hero-actions">
<a class="orc-btn orc-btn-primary" href="https://brand.oraanj-interiors.co.uk/widget/form/TN1pXOQSDmeYSychF8Ni?notrack=true">
<span class="orc-btn-label">Discuss Your ${loc.name} Project</span>
<span class="orc-btn-arrow">→</span>
</a>
</div>
<div class="orc-hero-trust-bar">
<div class="orc-trust-item">
<svg class="orc-trust-icon" viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="#B94E1A" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
<span>SBID Accredited Practice</span>
</div>
<div class="orc-trust-item">
<svg class="orc-trust-icon" viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="#B94E1A" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
<span>20+ Years London Experience</span>
</div>
<div class="orc-trust-item">
<svg class="orc-trust-icon" viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="#B94E1A" stroke-width="2"><path d="M12 2a8 8 0 0 0-8 8c0 5.25 8 12 8 12s8-6.75 8-12a8 8 0 0 0-8-8zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path></svg>
<span>${loc.borough}</span>
</div>
</div>
</div>
<div class="orc-hero-visual-col">
<div class="orc-hero-image-frame orc-media-frame-sq" style="aspect-ratio:1/1 !important;width:100% !important;height:auto !important;">
<img class="orc-hero-img" src="${loc.heroImg}" alt="${loc.heroAlt || loc.heroImgAlt}" loading="eager" style="aspect-ratio:1/1 !important;width:100% !important;height:100% !important;object-fit:cover !important;object-position:center !important;" />
</div>
</div>
</div>
</section>
<!-- 2. SPLIT: Local Property Typologies & Architectural Insights (Media LEFT, White) -->
<section class="orc-section orc-bg-white orc-border-top" style="margin:0 !important;padding:50px 24px !important;">
<div class="orc-container">
<div class="orc-split">
<div class="orc-col-media">
<div class="orc-media-frame orc-media-frame-sq" style="aspect-ratio:1/1 !important;width:100% !important;height:auto !important;">
<img class="orc-split-img" src="${loc.typologyImg}" alt="${loc.typologyImgAlt}" loading="lazy" style="aspect-ratio:1/1 !important;width:100% !important;height:100% !important;object-fit:cover !important;object-position:center !important;" />
</div>
</div>
<div class="orc-col-content">
<div class="orc-eyebrow-wrap"><span class="orc-eyebrow">Local Architectural Insights</span></div>
<div class="orc-rule"></div>
<h2 class="orc-title">${loc.typologyTitle}</h2>
<p class="orc-subtitle">${loc.typologySubtitle}</p>
<p class="orc-lead">${loc.typologyLead}</p>
<div class="orc-split-grid-2 orc-mt-20">
${typologiesHtml}
</div>
<div class="orc-hero-actions orc-mt-24">
<a class="orc-btn orc-btn-primary" href="https://brand.oraanj-interiors.co.uk/widget/form/TN1pXOQSDmeYSychF8Ni?notrack=true">
<span class="orc-btn-label">Share Your Property Details</span>
<span class="orc-btn-arrow">→</span>
</a>
</div>
</div>
</div>
</div>
</section>
<!-- 3. SPLIT: Interior Design Services Across Location (Media RIGHT, Tint) -->
<section class="orc-section orc-bg-tint orc-border-top" style="margin:0 !important;padding:50px 24px !important;">
<div class="orc-container">
<div class="orc-split orc-split-reverse">
<div class="orc-col-media">
<div class="orc-media-frame orc-media-frame-sq" style="aspect-ratio:1/1 !important;width:100% !important;height:auto !important;">
<img class="orc-split-img" src="${loc.servicesImg}" alt="${loc.servicesImgAlt}" loading="lazy" style="aspect-ratio:1/1 !important;width:100% !important;height:100% !important;object-fit:cover !important;object-position:center !important;" />
</div>
</div>
<div class="orc-col-content">
<div class="orc-eyebrow-wrap"><span class="orc-eyebrow">Comprehensive Design &amp; Build</span></div>
<div class="orc-rule"></div>
<h2 class="orc-title">${loc.servicesTitle}</h2>
<p class="orc-subtitle">${loc.servicesSubtitle}</p>
<p class="orc-lead">${loc.servicesLead}</p>
<p class="orc-body">${loc.servicesBody1}</p>
<p class="orc-body">${loc.servicesBody2}</p>
<div class="orc-property-list orc-mt-20">
${servicesHtml}
</div>
<div class="orc-hero-actions orc-mt-24">
<a class="orc-btn orc-btn-primary" href="https://brand.oraanj-interiors.co.uk/widget/form/TN1pXOQSDmeYSychF8Ni?notrack=true">
<span class="orc-btn-label">Discuss Your Requirements</span>
<span class="orc-btn-arrow">→</span>
</a>
</div>
</div>
</div>
</div>
</section>
<!-- 4. COMMERCIAL INTERIOR DESIGN & HOSPITALITY / DESIGN AND BUILD [LOCATION] (Media LEFT, White) -->
<section class="orc-section orc-bg-white orc-border-top" style="margin:0 !important;padding:50px 24px !important;">
<div class="orc-container">
<div class="orc-split">
<div class="orc-col-media">
<div class="orc-media-frame orc-media-frame-sq" style="aspect-ratio:1/1 !important;width:100% !important;height:auto !important;">
<img class="orc-split-img" src="${commImg}" alt="${comm.title} by Oraanj Interior Design" loading="lazy" style="aspect-ratio:1/1 !important;width:100% !important;height:100% !important;object-fit:cover !important;object-position:center !important;" />
</div>
</div>
<div class="orc-col-content">
<div class="orc-eyebrow-wrap"><span class="orc-eyebrow">${comm.eyebrow}</span></div>
<div class="orc-rule"></div>
<h3 class="orc-title">${comm.title}</h3>
<p class="orc-subtitle">${comm.subtitle}</p>
<p class="orc-lead">${comm.lead}</p>
<p class="orc-body">${comm.body}</p>
<div class="orc-split-grid-2 orc-mt-20">
${commPointsHtml}
</div>
<div class="orc-hero-actions orc-mt-24">
<a class="orc-btn orc-btn-primary" href="https://brand.oraanj-interiors.co.uk/widget/form/TN1pXOQSDmeYSychF8Ni?notrack=true">
<span class="orc-btn-label">Enquire About Commercial Fit-Outs</span>
<span class="orc-btn-arrow">→</span>
</a>
<a class="orc-btn orc-btn-outline" href="https://www.oraanj-interiors.co.uk/commercial-interior-design/">
<span class="orc-btn-label">Explore Commercial Services</span>
</a>
</div>
</div>
</div>
</div>
</section>
<!-- 5. STUDIO LEADERSHIP: MEET RACHANA GUPTA (Media RIGHT, Tint) -->
<section class="orc-section orc-bg-tint orc-border-top" style="margin:0 !important;padding:50px 24px !important;">
<div class="orc-container">
<div class="orc-split orc-split-reverse">
<div class="orc-col-media">
<div class="orc-media-frame orc-media-frame-sq" style="aspect-ratio:1/1 !important;width:100% !important;height:auto !important;">
<img class="orc-split-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/Rachana-Gupta-Founder-of-Oraanj-Interiors.jpeg" alt="Rachana Gupta, Creative Director and Founder of Oraanj Interior Design London" loading="lazy" style="aspect-ratio:1/1 !important;width:100% !important;height:100% !important;object-fit:cover !important;object-position:center !important;" />
</div>
</div>
<div class="orc-col-content">
<div class="orc-eyebrow-wrap"><span class="orc-eyebrow">Studio Leadership &amp; Direction</span></div>
<div class="orc-rule"></div>
<h3 class="orc-title">Led by Director Rachana Gupta</h3>
<p class="orc-subtitle">Founder &amp; Creative Director, Oraanj Interior Design</p>
<p class="orc-lead">Rachana Gupta founded Oraanj Interior Design in 2004, establishing the studio as one of London's premier architectural interior design and turnkey design-and-build practices.</p>
<p class="orc-body">With over two decades of experience transforming distinguished private residences, luxury apartments, and commercial venues across ${loc.name} and Greater London, Rachana personally oversees the creative vision, architectural layout rigor, and material curation of every project.</p>
<p class="orc-body">Recognised as an SBID Accredited practitioner and awarded Interior Designer of the Year (Eastern Eye 2025), Rachana blends intuitive space planning with technical execution, ensuring every home and business premises in ${loc.name} achieves lasting character, functional balance, and meticulous turnkey craftsmanship.</p>
<div class="orc-hero-trust-bar orc-mt-20">
<div class="orc-trust-item">
<svg class="orc-trust-icon" viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="#B94E1A" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
<span><strong>SBID Accredited Practice</strong></span>
</div>
<div class="orc-trust-item">
<svg class="orc-trust-icon" viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="#B94E1A" stroke-width="2"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
<span><strong>Interior Designer of the Year</strong> (Eastern Eye 2025)</span>
</div>
</div>
<div class="orc-hero-actions orc-mt-24">
<a class="orc-btn orc-btn-primary" href="https://brand.oraanj-interiors.co.uk/widget/form/TN1pXOQSDmeYSychF8Ni?notrack=true">
<span class="orc-btn-label">Book an Initial Consultation</span>
<span class="orc-btn-arrow">→</span>
</a>
</div>
</div>
</div>
</div>
</section>
${portfolioSectionHtml}
<!-- 6. CHOOSE THE RIGHT LEVEL OF INTERIOR DESIGN (EXACT INTERIOR DESIGNERS PAGE DESIGN & PRICING) -->
<section class="cld-wrap" style="margin:0 !important;padding:55px 24px 60px 24px !important;">
<div class="cld-container">
<div class="cld-header">
<div class="cld-eyebrow-wrap"><span class="cld-eyebrow">Choose the Right Level of Interior Design</span></div>
<div class="cld-rule"></div>
<h3 class="cld-title">From One Room to Detailed Technical Design</h3>
<p class="cld-subtext">Not every project requires the same level of design. Clear, structured design packages tailored to your property in ${loc.name}.</p>
</div>
<div class="cld-grid">
<!-- Tier 1: One Design -->
<div class="cld-card">
<div class="cld-card-top">
<div class="cld-img-frame">
<a href="https://oraanj-interiors.co.uk/projects/portfolios/stylish-study-in-kensington/">
<img class="cld-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/travertine-coffee-table-living-room-detail-1.webp" alt="One Design interior setting styling detail by Oraanj" loading="lazy"></a>
<span class="cld-tag">Tier 01</span>
</div>
<h3 class="cld-tier-name">One Design</h3>
<div class="cld-price-wrap"><span class="cld-price">&pound;600</span><span class="cld-price-unit">per room / zone</span></div>
<p class="cld-desc">For clients who need a clear design direction for a smaller or more straightforward space.</p>
<div class="cld-divider"></div>
<div class="cld-includes-label">Includes:</div>
<ul class="cld-list">
<li class="cld-list-item"><span class="cld-check-icon"><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#B94E1A" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="cld-list-text">One final 3D design</span></li>
<li class="cld-list-item"><span class="cld-check-icon"><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#B94E1A" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="cld-list-text">Basic furniture layout</span></li>
<li class="cld-list-item"><span class="cld-check-icon"><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#B94E1A" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="cld-list-text">One round of revisions</span></li>
<li class="cld-list-item"><span class="cld-check-icon"><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#B94E1A" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="cld-list-text">Overall visual direction</span></li>
</ul>
</div>
<div class="cld-card-bottom">
<a class="cld-btn cld-btn-outline" href="https://brand.oraanj-interiors.co.uk/widget/form/TN1pXOQSDmeYSychF8Ni?notrack=true">
<span class="cld-btn-label">Choose One Design</span>
<span class="cld-btn-arrow">→</span>
</a>
</div>
</div>
<!-- Tier 2: Unlimited Design -->
<div class="cld-card">
<div class="cld-card-top">
<div class="cld-img-frame">
<a href="https://oraanj-interiors.co.uk/projects/portfolios/elegant-living-room-interior-design-cedar-house-project-london/"><img class="cld-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/rust-armchair-reading-nook.webp" alt="Unlimited Design refined room interior by Oraanj" loading="lazy"></a>
<span class="cld-tag">Tier 02</span>
</div>
<h3 class="cld-tier-name">Unlimited Design</h3>
<div class="cld-price-wrap"><span class="cld-price">&pound;900</span><span class="cld-price-unit">per room / zone</span></div>
<p class="cld-desc">For clients who want to explore and refine the room in more detail before making final decisions.</p>
<div class="cld-divider"></div>
<div class="cld-includes-label">Includes:</div>
<ul class="cld-list">
<li class="cld-list-item"><span class="cld-check-icon"><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#B94E1A" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="cld-list-text">3D visualisation</span></li>
<li class="cld-list-item"><span class="cld-check-icon"><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#B94E1A" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="cld-list-text">Unlimited design revisions</span></li>
<li class="cld-list-item"><span class="cld-check-icon"><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#B94E1A" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="cld-list-text">Refined furniture layout</span></li>
<li class="cld-list-item"><span class="cld-check-icon"><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#B94E1A" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="cld-list-text">Furniture and styling guidance</span></li>
<li class="cld-list-item"><span class="cld-check-icon"><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#B94E1A" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="cld-list-text">Colour, material and finish direction</span></li>
</ul>
</div>
<div class="cld-card-bottom">
<a class="cld-btn cld-btn-outline" href="https://brand.oraanj-interiors.co.uk/widget/form/TN1pXOQSDmeYSychF8Ni?notrack=true">
<span class="cld-btn-label">Choose Unlimited Design</span>
<span class="cld-btn-arrow">→</span>
</a>
</div>
</div>
<!-- Tier 3: Design & Technical (Featured) -->
<div class="cld-card cld-card-featured">
<div class="cld-card-top">
<div class="cld-img-frame">
<a href="https://oraanj-interiors.co.uk/projects/portfolios/sleek-modern-kitchen-with-timeless-appeal-in-reigate/"><img class="cld-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/warm-walnut-kitchen-island-closeup.webp" alt="Design and Technical interior execution by Oraanj" loading="lazy"></a>
<span class="cld-tag cld-tag-featured">Most Popular</span>
</div>
<h3 class="cld-tier-name">Design &amp; Technical</h3>
<div class="cld-price-wrap"><span class="cld-price">&pound;1,500</span><span class="cld-price-unit">per room / zone</span></div>
<p class="cld-desc">For projects requiring more detailed planning before renovation or implementation.</p>
<div class="cld-divider"></div>
<div class="cld-includes-label">Depending on the room and agreed scope, this can include:</div>
<ul class="cld-list">
<li class="cld-list-item"><span class="cld-check-icon"><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#B94E1A" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="cld-list-text">3D design</span></li>
<li class="cld-list-item"><span class="cld-check-icon"><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#B94E1A" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="cld-list-text">Detailed space planning</span></li>
<li class="cld-list-item"><span class="cld-check-icon"><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#B94E1A" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="cld-list-text">Wall elevations</span></li>
<li class="cld-list-item"><span class="cld-check-icon"><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#B94E1A" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="cld-list-text">Lighting layout</span></li>
<li class="cld-list-item"><span class="cld-check-icon"><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#B94E1A" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="cld-list-text">Electrical layout</span></li>
<li class="cld-list-item"><span class="cld-check-icon"><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#B94E1A" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="cld-list-text">Bespoke joinery design</span></li>
<li class="cld-list-item"><span class="cld-check-icon"><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#B94E1A" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="cld-list-text">Technical design information</span></li>
</ul>
</div>
<div class="cld-card-bottom">
<a class="cld-btn cld-btn-primary" href="https://brand.oraanj-interiors.co.uk/widget/form/TN1pXOQSDmeYSychF8Ni?notrack=true">
<span class="cld-btn-label">Choose Design &amp; Technical</span>
<span class="cld-btn-arrow">→</span>
</a>
</div>
</div>
</div>
<!-- Whole-Home Callout -->
<div class="orc-container orc-mt-40">
<div class="orc-split-grid-2">
<div class="orc-split-card">
<div class="orc-split-card-header">
<span class="orc-split-card-num">Whole Property</span>
<span class="orc-split-card-tag">Turnkey Refurbishment</span>
</div>
<h4 class="orc-split-card-title">Design &amp; Build in ${loc.name}</h4>
<p class="orc-split-card-desc">For complete residential transformations and commercial premises, our integrated <a href="https://www.oraanj-interiors.co.uk/design-and-build/">Design and build company in London</a> service delivers structural alterations, building control, bespoke joinery, and site management under single-point contract accountability.</p>
</div>
<div class="orc-split-card">
<div class="orc-split-card-header">
<span class="orc-split-card-num">Clarity</span>
<span class="orc-split-card-tag">Zone Counting</span>
</div>
<h4 class="orc-split-card-title">How Zones Are Defined</h4>
<p class="orc-split-card-desc">Packages are priced per functional zone. In open-plan living arrangements, the kitchen, dining, and lounge constitute three distinct functional zones. Zone counts are verified upfront from your floor plan before work commences.</p>
</div>
</div>
</div>
</div>
</section>
<!-- 7. SPLIT: Planning, Conservation & Building Regulations (Media RIGHT, White) -->
<section class="orc-section orc-bg-white orc-border-top" style="margin:0 !important;padding:50px 24px !important;">
<div class="orc-container">
<div class="orc-split orc-split-reverse">
<div class="orc-col-media">
<div class="orc-media-frame orc-media-frame-sq" style="aspect-ratio:1/1 !important;width:100% !important;height:auto !important;">
<img class="orc-split-img" src="${loc.guidanceImg}" alt="${loc.guidanceImgAlt}" loading="lazy" style="aspect-ratio:1/1 !important;width:100% !important;height:100% !important;object-fit:cover !important;object-position:center !important;" />
</div>
</div>
<div class="orc-col-content">
<div class="orc-eyebrow-wrap"><span class="orc-eyebrow">Local Authority Expertise</span></div>
<div class="orc-rule"></div>
<h3 class="orc-title">${loc.guidanceTitle}</h3>
<p class="orc-subtitle">${loc.guidanceSubtitle}</p>
<p class="orc-lead">${loc.guidanceText1}</p>
<p class="orc-body">${loc.guidanceText2}</p>
<div class="orc-feature-checklist orc-grid-2col orc-mt-20">
${guidanceTagsHtml}
</div>
<div class="orc-hero-actions orc-mt-24">
<a class="orc-btn orc-btn-primary" href="https://brand.oraanj-interiors.co.uk/widget/form/TN1pXOQSDmeYSychF8Ni?notrack=true">
<span class="orc-btn-label">Book a Local Consultation</span>
<span class="orc-btn-arrow">→</span>
</a>
</div>
</div>
</div>
</div>
</section>
<!-- 8. CONTACT FORM & ACCORDION SECTION -->
<div class="home_form_section" style="margin:0 !important;padding:55px 0 !important;">
<div class="container">
<div class="container_inner container_inner_white">
<div class="row">
<div class="col-lg-5 col-md-6 text-center">
<h3 class="banner_bottom_section_heading">Ready to Discuss Your ${loc.name} Project?</h3>
<div class="home_form_section_text">
<p>From single-room design concepts to full architectural renovation, commercial fit-outs, and turnkey delivery, Oraanj brings 20+ years of London expertise to your project in ${loc.name}.</p>
<p>Share your floor plan, property address, and project aspirations with our team for an initial design review and package recommendation.</p>
<p><strong>Speak directly with our senior designers today:</strong></p>
<a href="tel:+447448803051">+44 (0) 7448 803051</a>
</div>
</div>
<div class="col-lg-5 col-md-6 offset-lg-2 home_form">[common_section]</div>
</div>
</div>
</div>
</div>
<div class="home_faq_section" style="margin:0 !important;padding:55px 0 !important;">
<div class="container">
<h4 class="about_common_section_heading text-white text-center">Frequently Asked Questions</h4>
<div class="row justify-content-center mt-4">
<div class="col-lg-7 home_faq_right">
[accordion]
${faqsHtml}
[/accordion]
</div>
</div>
</div>
</div>
<!-- 9. FAQ SCHEMA (JSON-LD) -->
<script type="application/ld+json">
${faqSchemaJson}
</script>
`;
}

let count = 0;
allLocations.forEach((loc, idx) => {
  const htmlContent = renderLocationHtml(loc, idx);
  const filePath = path.join(outputDir, `${loc.slug}.html`);
  fs.writeFileSync(filePath, htmlContent, 'utf8');
  count++;
  console.log(`[${count}/${allLocations.length}] Generated ${loc.slug}.html`);
});

console.log(`\nSuccessfully regenerated all ${count} location pages with 1:1 image ratios, curated portfolios, and British English copywriting!`);
