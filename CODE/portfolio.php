<?php
/* Template Name: Portfolio */
get_header();
?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Inter:wght@300;400;500;600;700&display=swap');

/* ==========================================================================
   ORAANJ INTERIOR ARCHITECTURE & CONSTRUCTION - LONDON
   PORTFOLIO OVERVIEW PAGE (orp-)
   WordPress Template Integration: get_header() & get_footer()
   ========================================================================== */

/* -------------------------------------------------------------
   1. RESET & SAFETY
   ------------------------------------------------------------- */
.orp-hero,
.orp-hero *,
.orp-portfolio-section,
.orp-portfolio-section *,
.orp-cta,
.orp-cta * {
  box-sizing: border-box !important;
}

/* Anti-wpautop: Prevent WordPress Gutenberg empty tags from corrupting layout */
.orp-hero > p,
.orp-hero p:empty,
.orp-hero br,
.orp-category-section > p,
.orp-category-section p:empty,
.orp-category-section br,
.orp-grid > p,
.orp-grid p:empty,
.orp-grid br,
.orp-card > p:empty,
.orp-card br,
.orp-card-info > p:empty,
.orp-card-info br,
.orp-cta > p:empty,
.orp-cta br {
  display: none !important;
  margin: 0 !important;
  padding: 0 !important;
  width: 0 !important;
  height: 0 !important;
  font-size: 0 !important;
  line-height: 0 !important;
}

/* -------------------------------------------------------------
   2. CONTAINER
   ------------------------------------------------------------- */
.orp-container {
  width: 100% !important;
  max-width: 1400px !important;
  margin: 0 auto !important;
  padding-left: clamp(16px, 3.5vw, 40px) !important;
  padding-right: clamp(16px, 3.5vw, 40px) !important;
  box-sizing: border-box !important;
}

/* -------------------------------------------------------------
   3. HERO SECTION (Safely padded for fixed WordPress theme header)
   ------------------------------------------------------------- */
.orp-hero {
  position: relative !important;
  width: 100% !important;
  min-height: clamp(560px, 72vh, 760px) !important;
  display: flex !important;
  flex-direction: column !important;
  align-items: center !important;
  justify-content: center !important;
  background-position: center center !important;
  background-size: cover !important;
  background-repeat: no-repeat !important;
  background-color: #1A1816 !important;
  overflow: hidden !important;
  padding: clamp(120px, 14vw, 160px) 20px 44px 20px !important;
  margin: 0 !important;
  text-align: center !important;
}

.orp-hero-overlay {
  position: absolute !important;
  inset: 0 !important;
  background: linear-gradient(
    180deg,
    rgba(22, 20, 18, 0.55) 0%,
    rgba(22, 20, 18, 0.3) 40%,
    rgba(22, 20, 18, 0.42) 70%,
    rgba(22, 20, 18, 0.72) 100%
  ) !important;
  pointer-events: none !important;
  z-index: 1 !important;
}

.orp-hero-content {
  position: relative !important;
  z-index: 2 !important;
  max-width: 900px !important;
  margin: 0 auto !important;
  display: flex !important;
  flex-direction: column !important;
  align-items: center !important;
}

.orp-hero-eyebrow {
  display: inline-block !important;
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif !important;
  font-size: 11px !important;
  font-weight: 600 !important;
  letter-spacing: 0.35em !important;
  text-transform: uppercase !important;
  color: #FFFFFF !important;
  margin-bottom: 14px !important;
  text-shadow: 0 2px 10px rgba(0, 0, 0, 0.6) !important;
}

.orp-hero-title {
  font-family: 'Playfair Display', Georgia, serif !important;
  font-size: clamp(34px, 5.2vw, 64px) !important;
  font-weight: 400 !important;
  line-height: 1.15 !important;
  color: #FFFFFF !important;
  margin: 0 0 24px 0 !important;
  letter-spacing: 0.02em !important;
  text-shadow: 0 3px 18px rgba(0, 0, 0, 0.65) !important;
}

.orp-hero-btn {
  display: inline-flex !important;
  align-items: center !important;
  justify-content: center !important;
  padding: 12px 30px !important;
  border: 1px solid rgba(255, 255, 255, 0.55) !important;
  background: rgba(22, 20, 18, 0.25) !important;
  backdrop-filter: blur(8px) !important;
  -webkit-backdrop-filter: blur(8px) !important;
  color: #FFFFFF !important;
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif !important;
  font-size: 11px !important;
  font-weight: 600 !important;
  letter-spacing: 0.24em !important;
  text-transform: uppercase !important;
  text-decoration: none !important;
  border-radius: 9999px !important;
  transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1) !important;
}

.orp-hero-btn:hover {
  background: #FFFFFF !important;
  color: #1A1816 !important;
  border-color: #FFFFFF !important;
  transform: translateY(-2px) !important;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.35) !important;
}

.orp-scroll-down {
  position: absolute !important;
  bottom: 22px !important;
  left: 50% !important;
  transform: translateX(-50%) !important;
  z-index: 2 !important;
  display: flex !important;
  flex-direction: column !important;
  align-items: center !important;
  text-decoration: none !important;
  color: #FFFFFF !important;
  opacity: 0.8 !important;
  transition: opacity 0.25s ease !important;
}

.orp-scroll-down:hover {
  opacity: 1 !important;
}

.orp-scroll-arrow {
  width: 24px !important;
  height: 24px !important;
  animation: orpBounce 2s infinite !important;
}

.orp-scroll-arrow svg {
  width: 100% !important;
  height: 100% !important;
  stroke: #FFFFFF !important;
  stroke-width: 1.5 !important;
  fill: none !important;
}

@keyframes orpBounce {
  0%, 20%, 50%, 80%, 100% {
    transform: translateY(0);
  }
  40% {
    transform: translateY(6px);
  }
  60% {
    transform: translateY(3px);
  }
}

/* -------------------------------------------------------------
   4. PORTFOLIO MAIN BODY & CATEGORY SECTIONS
   ------------------------------------------------------------- */
.orp-portfolio-section {
  position: relative !important;
  background-color: #FFFFFF !important;
  padding: clamp(36px, 4.5vw, 60px) 0 clamp(48px, 6vw, 84px) 0 !important;
}

.orp-category-section {
  margin-bottom: clamp(48px, 6vw, 76px) !important;
}

.orp-category-section:last-of-type {
  margin-bottom: 0 !important;
}

.orp-category-header {
  text-align: center !important;
  max-width: 720px !important;
  margin: 0 auto clamp(24px, 3.2vw, 38px) auto !important;
}

.orp-category-eyebrow {
  display: block !important;
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif !important;
  font-size: 11px !important;
  font-weight: 600 !important;
  letter-spacing: 0.28em !important;
  text-transform: uppercase !important;
  color: #B94E1A !important;
  margin-bottom: 8px !important;
}

.orp-category-title {
  font-family: 'Playfair Display', Georgia, serif !important;
  font-size: clamp(24px, 3.2vw, 38px) !important;
  font-weight: 400 !important;
  line-height: 1.25 !important;
  color: #1A1816 !important;
  margin: 0 0 14px 0 !important;
  letter-spacing: 0.01em !important;
}

.orp-category-rule {
  width: 44px !important;
  height: 2px !important;
  background-color: #B94E1A !important;
  margin: 0 auto !important;
}

/* -------------------------------------------------------------
   5. THREE-COLUMN PORTFOLIO GRID & CARDS
   ------------------------------------------------------------- */
.orp-grid {
  display: grid !important;
  grid-template-columns: repeat(3, 1fr) !important;
  gap: clamp(16px, 2.2vw, 28px) !important;
  align-items: start !important;
}

/* Portfolio Card */
.orp-card {
  display: flex !important;
  flex-direction: column !important;
  text-decoration: none !important;
  color: inherit !important;
  cursor: pointer !important;
  position: relative !important;
  transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1) !important;
}

.orp-card:hover {
  transform: translateY(-4px) !important;
}

/* Hidden Cards (View More feature) */
.orp-card.orp-card-hidden {
  display: none !important;
}

/* Revealed Cards */
.orp-card.is-revealed {
  display: flex !important;
  visibility: visible !important;
  opacity: 1 !important;
  animation: orpFadeInUp 0.45s cubic-bezier(0.16, 1, 0.3, 1) forwards !important;
}

@keyframes orpFadeInUp {
  0% {
    opacity: 0;
    transform: translateY(20px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Media Box: Portrait aspect ratio (4:5) for bento tall photography */
.orp-card-media {
  position: relative !important;
  width: 100% !important;
  aspect-ratio: 4 / 5 !important;
  overflow: hidden !important;
  border-radius: 4px !important;
  background-color: #ECE8E1 !important;
  box-shadow: 0 4px 18px rgba(0, 0, 0, 0.06) !important;
}

.orp-card-img {
  width: 100% !important;
  height: 100% !important;
  object-fit: cover !important;
  object-position: center !important;
  display: block !important;
  transition: transform 0.65s cubic-bezier(0.16, 1, 0.3, 1), filter 0.65s ease !important;
}

/* Hover Zoom & Luster */
.orp-card:hover .orp-card-img {
  transform: scale(1.04) !important;
  filter: contrast(1.02) brightness(1.02) !important;
}

.orp-card-overlay {
  position: absolute !important;
  inset: 0 !important;
  background: rgba(18, 16, 14, 0.46) !important;
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
  opacity: 0 !important;
  visibility: hidden !important;
  transition: opacity 0.38s ease, visibility 0.38s ease !important;
}

.orp-card:hover .orp-card-overlay,
.orp-card:focus-visible .orp-card-overlay {
  opacity: 1 !important;
  visibility: visible !important;
}

.orp-card-frame {
  width: calc(100% - 32px) !important;
  height: calc(100% - 32px) !important;
  border: 1px solid rgba(255, 255, 255, 0.78) !important;
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
  box-sizing: border-box !important;
  transform: scale(0.96) !important;
  transition: transform 0.42s cubic-bezier(0.16, 1, 0.3, 1) !important;
}

.orp-card:hover .orp-card-frame,
.orp-card:focus-visible .orp-card-frame {
  transform: scale(1) !important;
}

.orp-card-view-text {
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif !important;
  font-size: 11.5px !important;
  font-weight: 600 !important;
  letter-spacing: 0.22em !important;
  text-transform: uppercase !important;
  color: #FFFFFF !important;
  text-shadow: 0 2px 10px rgba(0, 0, 0, 0.6) !important;
  border-bottom: 1px solid transparent !important;
  padding-bottom: 2px !important;
  transform: translateY(6px) !important;
  opacity: 0.85 !important;
  transition: transform 0.38s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.35s ease, border-color 0.25s ease !important;
}

.orp-card:hover .orp-card-view-text,
.orp-card:focus-visible .orp-card-view-text {
  transform: translateY(0) !important;
  opacity: 1 !important;
  border-bottom-color: rgba(255, 255, 255, 0.65) !important;
}

/* Fallback if overlay container is empty */
.orp-card-overlay:empty::before {
  content: "" !important;
  position: absolute !important;
  inset: 16px !important;
  border: 1px solid rgba(255, 255, 255, 0.78) !important;
  box-sizing: border-box !important;
  transform: scale(0.96) !important;
  transition: transform 0.42s ease !important;
}

.orp-card:hover .orp-card-overlay:empty::before {
  transform: scale(1) !important;
}

.orp-card-overlay:empty::after {
  content: "VIEW PROJECT" !important;
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif !important;
  font-size: 12.5px !important;
  font-weight: 600 !important;
  letter-spacing: 0.2em !important;
  text-transform: uppercase !important;
  color: #FFFFFF !important;
  text-shadow: 0 2px 10px rgba(0, 0, 0, 0.6) !important;
  border-bottom: 1px solid rgba(255, 255, 255, 0.65) !important;
  padding-bottom: 3px !important;
}

/* Info Below Media (Compact) */
.orp-card-info {
  display: flex !important;
  flex-direction: column !important;
  align-items: center !important;
  text-align: center !important;
  padding: 12px 4px 2px 4px !important;
}

.orp-card-title {
  font-family: 'Playfair Display', Georgia, serif !important;
  font-size: clamp(16px, 1.3vw, 20px) !important;
  font-weight: 400 !important;
  line-height: 1.3 !important;
  letter-spacing: 0.04em !important;
  text-transform: uppercase !important;
  color: #1A1816 !important;
  margin: 0 !important;
  transition: color 0.25s ease !important;
}

.orp-card:hover .orp-card-title {
  color: #B94E1A !important;
}

.orp-card-location {
  display: block !important;
  visibility: visible !important;
  opacity: 1 !important;
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif !important;
  font-size: 10.5px !important;
  font-weight: 500 !important;
  line-height: 1.35 !important;
  letter-spacing: 0.22em !important;
  text-transform: uppercase !important;
  color: #8C827A !important;
  margin: 4px 0 0 0 !important;
  transition: color 0.25s ease !important;
}

.orp-card:hover .orp-card-location {
  color: #4A4540 !important;
}

/* -------------------------------------------------------------
   6. VIEW MORE BUTTON
   ------------------------------------------------------------- */
.orp-load-more-wrap {
  display: flex !important;
  justify-content: center !important;
  align-items: center !important;
  margin-top: clamp(20px, 2.6vw, 32px) !important;
  width: 100% !important;
}

.orp-load-more-btn {
  display: inline-flex !important;
  align-items: center !important;
  justify-content: center !important;
  gap: 9px !important;
  padding: 11px 32px !important;
  background-color: transparent !important;
  border: 1px solid #B94E1A !important;
  border-radius: 9999px !important;
  color: #B94E1A !important;
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif !important;
  font-size: 11px !important;
  font-weight: 600 !important;
  letter-spacing: 0.2em !important;
  text-transform: uppercase !important;
  cursor: pointer !important;
  transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1) !important;
  user-select: none !important;
  outline: none !important;
  position: relative !important;
  z-index: 5 !important;
}

.orp-load-more-btn:hover {
  background-color: #B94E1A !important;
  color: #FFFFFF !important;
  transform: translateY(-2px) !important;
  box-shadow: 0 6px 20px rgba(185, 78, 26, 0.28) !important;
}

.orp-load-more-icon {
  width: 12px !important;
  height: 12px !important;
  stroke: currentColor !important;
  stroke-width: 2 !important;
  fill: none !important;
  transition: transform 0.25s ease !important;
}

.orp-load-more-btn:hover .orp-load-more-icon {
  transform: translateY(2px) !important;
}

/* -------------------------------------------------------------
   7. CALL TO ACTION BANNER (CONSULTATION)
   ------------------------------------------------------------- */
.orp-cta {
  position: relative !important;
  background-color: #1A1816 !important;
  color: #FFFFFF !important;
  padding: clamp(42px, 5.5vw, 68px) 20px !important;
  text-align: center !important;
  overflow: hidden !important;
}

.orp-cta-content {
  position: relative !important;
  z-index: 2 !important;
  max-width: 800px !important;
  margin: 0 auto !important;
  display: flex !important;
  flex-direction: column !important;
  align-items: center !important;
}

.orp-cta-eyebrow {
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif !important;
  font-size: 10.5px !important;
  font-weight: 600 !important;
  letter-spacing: 0.3em !important;
  text-transform: uppercase !important;
  color: #B94E1A !important;
  margin-bottom: 10px !important;
}

.orp-cta-title {
  font-family: 'Playfair Display', Georgia, serif !important;
  font-size: clamp(26px, 3.8vw, 44px) !important;
  font-weight: 400 !important;
  line-height: 1.2 !important;
  color: #FFFFFF !important;
  margin: 0 0 14px 0 !important;
  letter-spacing: 0.02em !important;
}

.orp-cta-desc {
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif !important;
  font-size: clamp(13.5px, 1.1vw, 15.5px) !important;
  line-height: 1.65 !important;
  color: rgba(255, 255, 255, 0.78) !important;
  margin: 0 0 24px 0 !important;
  max-width: 620px !important;
}

.orp-cta-actions {
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
  flex-wrap: wrap !important;
  gap: 14px !important;
}

.orp-cta-btn-primary {
  display: inline-flex !important;
  align-items: center !important;
  gap: 10px !important;
  background-color: #B94E1A !important;
  color: #FFFFFF !important;
  border: 1px solid #B94E1A !important;
  border-radius: 9999px !important;
  padding: 12px 28px !important;
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif !important;
  font-size: 11px !important;
  font-weight: 600 !important;
  letter-spacing: 0.16em !important;
  text-transform: uppercase !important;
  text-decoration: none !important;
  transition: all 0.25s ease !important;
}

.orp-cta-btn-primary:hover {
  background-color: #963D13 !important;
  border-color: #963D13 !important;
  color: #FFFFFF !important;
  transform: translateY(-2px) !important;
  box-shadow: 0 6px 20px rgba(185, 78, 26, 0.38) !important;
}

.orp-cta-btn-outline {
  display: inline-flex !important;
  align-items: center !important;
  gap: 10px !important;
  background: transparent !important;
  color: #FFFFFF !important;
  border: 1px solid rgba(255, 255, 255, 0.4) !important;
  border-radius: 9999px !important;
  padding: 12px 28px !important;
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif !important;
  font-size: 11px !important;
  font-weight: 600 !important;
  letter-spacing: 0.16em !important;
  text-transform: uppercase !important;
  text-decoration: none !important;
  transition: all 0.25s ease !important;
}

.orp-cta-btn-outline:hover {
  border-color: #FFFFFF !important;
  background: rgba(255, 255, 255, 0.1) !important;
  color: #FFFFFF !important;
  transform: translateY(-2px) !important;
}

/* -------------------------------------------------------------
   8. RESPONSIVE MEDIA QUERIES
   ------------------------------------------------------------- */
@media screen and (max-width: 992px) {
  .orp-grid {
    grid-template-columns: repeat(2, 1fr) !important;
    gap: 22px !important;
  }

  .orp-hero {
    min-height: 380px !important;
    padding-top: 80px !important;
  }
}

@media screen and (max-width: 767px) {
  .orp-hero {
    min-height: 340px !important;
    padding-top: 80px !important;
    padding-bottom: 24px !important;
  }
}

@media screen and (max-width: 600px) {
  .orp-portfolio-section {
    padding: 22px 0 32px 0 !important;
  }

  .orp-category-section {
    margin-bottom: 30px !important;
  }

  .orp-category-header {
    margin-bottom: 16px !important;
  }

  .orp-grid {
    grid-template-columns: 1fr !important;
    gap: 22px !important;
  }

  .orp-card-media {
    aspect-ratio: 4 / 4.8 !important;
  }

  .orp-hero-title {
    font-size: clamp(24px, 7vw, 34px) !important;
    margin-bottom: 14px !important;
  }

  .orp-load-more-wrap {
    margin-top: 18px !important;
  }

  .orp-cta {
    padding: 36px 16px !important;
  }

  .orp-cta-actions {
    flex-direction: column !important;
    width: 100% !important;
  }

  .orp-cta-btn-primary,
  .orp-cta-btn-outline {
    width: 100% !important;
    max-width: 320px !important;
    justify-content: center !important;
  }
}

/* -------------------------------------------------------------
   9. NITROPACK & CACHE IMMUNITY
   ------------------------------------------------------------- */
section.orp-hero.nitro-offscreen,
section.orp-portfolio-section.nitro-offscreen,
section.orp-cta.nitro-offscreen {
  display: block !important;
  visibility: visible !important;
  opacity: 1 !important;
}
</style>

<!-- 1. HERO SECTION -->
<section id="hero" class="orp-hero" style="background-image: url('https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/luxury_living_dining_open_plan_brass_screen.jpeg');">
  <div class="orp-hero-overlay"></div>
  <div class="orp-hero-content">
    <span class="orp-hero-eyebrow">Curated Portfolio</span>
    <h1 class="orp-hero-title">Architectural Interiors &amp; Tailored Luxury</h1>
    <a class="orp-hero-btn" href="#residential">
      <span>Explore Projects</span>
    </a>
  </div>
  <a class="orp-scroll-down" href="#residential" aria-label="Scroll to Projects">
    <div class="orp-scroll-arrow">
      <svg viewBox="0 0 24 24">
        <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>
  </a>
</section>

<!-- 2. MAIN PORTFOLIO SECTIONS (Residential, Bar, Retail, Restaurant, Office) -->
<main class="orp-portfolio-section">
  <div class="orp-container">

    <!-- CATEGORY: RESIDENTIAL -->
    <section id="residential" class="orp-category-section" data-category="residential">
      <div class="orp-category-header">
        <span class="orp-category-eyebrow">01 / Residential</span>
        <h2 class="orp-category-title">Private Residences &amp; Penthouses</h2>
        <div class="orp-category-rule"></div>
      </div>
      <div class="orp-grid">
        <!-- 1. Canary Wharf Penthouse -->
        <a class="orp-card" href="https://www.oraanj-interiors.co.uk/canary-wharf-penthouse-interior-design/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/modern-living-room-warm-neutral.webp" alt="Canary Wharf Penthouse" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Canary Wharf Penthouse</h3>
            <span class="orp-card-location">Canary Wharf, London</span>
          </div>
        </a>

        <!-- 2. Northwood Luxury Detached Residence (NEW) -->
        <a class="orp-card" href="https://www.oraanj-interiors.co.uk/northwood-residence-interior-design/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/northwood-north-west-london-modern-classic-luxury-living-room.webp" alt="Northwood Luxury Residence" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Northwood Residence</h3>
            <span class="orp-card-location">Northwood, North West London</span>
          </div>
        </a>

        <!-- 3. Barnet Family Residence (NEW) -->
        <a class="orp-card" href="https://www.oraanj-interiors.co.uk/barnet-residence-interior-design/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/barnet-london-modern-classic-living-room-fireplace-design.webp" alt="Barnet Family Residence" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Barnet Residence</h3>
            <span class="orp-card-location">Barnet, North London</span>
          </div>
        </a>

        <!-- 4. Barbican Family Residence (NEW - Hidden Initially) -->
        <a class="orp-card orp-card-hidden" href="https://www.oraanj-interiors.co.uk/barbican-residence-interior-design/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/barbican-london-open-plan-living-dining-room-interior.webp" alt="Barbican Family Residence" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Barbican Residence</h3>
            <span class="orp-card-location">Barbican, City of London</span>
          </div>
        </a>

                <!-- 4. Muswell Hill Edwardian Residence (NEW - Hidden Initially) -->
        <a class="orp-card orp-card-hidden" href="https://www.oraanj-interiors.co.uk/muswell-hill-residence-interior-design/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/muswell-hill-north-london-edwardian-living-room-interior-design.webp" alt="Muswell Hill Edwardian Residence" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Muswell Hill Residence</h3>
            <span class="orp-card-location">Muswell Hill, North London</span>
          </div>
        </a>

        <!-- 5. Hampstead Apartment (Hidden Initially) -->
        <a class="orp-card orp-card-hidden" href="https://www.oraanj-interiors.co.uk/hampstead-apartment-interior-design/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/warm-modern-living-room.webp" alt="Hampstead Apartment" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Hampstead Apartment</h3>
            <span class="orp-card-location">Hampstead, London</span>
          </div>
        </a>

        <!-- 6. Richmond House (Hidden Initially) -->
        <a class="orp-card orp-card-hidden" href="https://www.oraanj-interiors.co.uk/richmond-house-interior-design/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/elegant-earthy-living-room.webp" alt="Richmond House" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Richmond House</h3>
            <span class="orp-card-location">Richmond, London</span>
          </div>
        </a>

        <!-- 7. Marylebone Full House (Hidden Initially) -->
        <a class="orp-card orp-card-hidden" href="https://www.oraanj-interiors.co.uk/marylebone-full-house-interior/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/elegant_modern_classic_living_room_16x9.jpeg" alt="Marylebone Full House" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Marylebone Full House</h3>
            <span class="orp-card-location">Marylebone, London</span>
          </div>
        </a>

        <!-- 8. Wimbledon Townhouse Residence (Hidden Initially) -->
        <a class="orp-card orp-card-hidden" href="https://www.oraanj-interiors.co.uk/mayfair-townhouse-residence/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury-modern-living-room-sofa-interior.jpeg" alt="Wimbledon Townhouse Residence" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Wimbledon Townhouse Residence</h3>
            <span class="orp-card-location">Wimbledon, London</span>
          </div>
        </a>

        <!-- 9. Knightsbridge Residence (Hidden Initially) -->
        <a class="orp-card orp-card-hidden" href="https://www.oraanj-interiors.co.uk/knightsbridge-residence-interior-design/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/luxury_living_room_taupe_paneling_and_velvet_seating.jpeg" alt="Knightsbridge Residence" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Knightsbridge Residence</h3>
            <span class="orp-card-location">Knightsbridge, London</span>
          </div>
        </a>
      </div>

      <!-- View More Button for Residential -->
      <div class="orp-load-more-wrap" id="wrap-residential">
        <button type="button" class="orp-load-more-btn" data-target="residential" onclick="orpLoadMore('residential', this); return false;">
          <span>View More</span>
          <svg viewBox="0 0 24 24" class="orp-load-more-icon" aria-hidden="true">
            <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
      </div>
    </section>

    <!-- CATEGORY: BAR -->
    <section id="bar" class="orp-category-section" data-category="bar">
      <div class="orp-category-header">
        <span class="orp-category-eyebrow">02 / Bar</span>
        <h2 class="orp-category-title">Luxury Bars &amp; Cocktail Lounges</h2>
        <div class="orp-category-rule"></div>
      </div>
      <div class="orp-grid">
        <!-- 1. Hampstead Lounge & Bar -->
        <a class="orp-card" href="https://www.oraanj-interiors.co.uk/hampstead-lounge-bar/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/bohemian-luxury-restaurant-lounge.jpeg" alt="Hampstead Lounge &amp; Bar" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Hampstead Lounge &amp; Bar</h3>
            <span class="orp-card-location">Hampstead, London</span>
          </div>
        </a>

        <!-- 2. Covent Garden Bar & Lounge -->
        <a class="orp-card" href="https://www.oraanj-interiors.co.uk/covent-garden-bar-lounge/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury-hotel-bar-lounge-wide-interior.jpeg" alt="Covent Garden Bar &amp; Lounge" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Covent Garden Bar &amp; Lounge</h3>
            <span class="orp-card-location">Covent Garden, London</span>
          </div>
        </a>

        <!-- 3. Kensington Lounge & Bar -->
        <a class="orp-card" href="https://www.oraanj-interiors.co.uk/kensington-lounge-bar/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury-cocktail-bar-interior-design.jpeg" alt="Kensington Lounge &amp; Bar" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Kensington Lounge &amp; Bar</h3>
            <span class="orp-card-location">Kensington, London</span>
          </div>
        </a>
      </div>
    </section>

    <!-- CATEGORY: RETAIL -->
    <section id="retail" class="orp-category-section" data-category="retail">
      <div class="orp-category-header">
        <span class="orp-category-eyebrow">03 / Retail &amp; Healthcare</span>
        <h2 class="orp-category-title">Boutiques, Salons &amp; Wellness Clinics</h2>
        <div class="orp-category-rule"></div>
      </div>
      <div class="orp-grid">
        <!-- 1. Harrow Healthcare Clinic (NEW) -->
        <a class="orp-card" href="https://www.oraanj-interiors.co.uk/harrow-clinic-interior-design/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/harrow-london-private-healthcare-clinic-curved-reception-desk.webp" alt="Harrow Clinic Interior Design" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Harrow Clinic</h3>
            <span class="orp-card-location">Harrow, North West London</span>
          </div>
        </a>

        <!-- 2. Newham Private Healthcare Clinic (NEW) -->
        <a class="orp-card" href="https://www.oraanj-interiors.co.uk/newham-clinic-interior-design/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/newham-east-london-healthcare-clinic-reception.webp" alt="Newham Healthcare Clinic" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Newham Healthcare Clinic</h3>
            <span class="orp-card-location">Newham, East London</span>
          </div>
        </a>

        <!-- 2. Tooting Hair Salon -->
        <a class="orp-card" href="https://www.oraanj-interiors.co.uk/tooting-hair-salon/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury-modern-salon-interior1.jpeg" alt="Tooting Hair Salon" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Tooting Hair Salon</h3>
            <span class="orp-card-location">Tooting, London</span>
          </div>
        </a>

        <!-- 4. Westminster Dental Clinic (Hidden Initially) -->
        <a class="orp-card orp-card-hidden" href="https://www.oraanj-interiors.co.uk/westminster-dental-clinic/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/modern-dental-clinic-operatory.jpeg" alt="Westminster Dental Clinic" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Westminster Dental Clinic</h3>
            <span class="orp-card-location">Westminster, London</span>
          </div>
        </a>

        <!-- 4. Fitzrovia Retail Boutique & Salon (Hidden Initially) -->
        <a class="orp-card orp-card-hidden" href="https://www.oraanj-interiors.co.uk/fitzrovia-retail-boutique-salon/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury_salon_full_interior_design.jpeg" alt="Fitzrovia Retail Boutique &amp; Salon" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Fitzrovia Retail Boutique &amp; Salon</h3>
            <span class="orp-card-location">Fitzrovia, London</span>
          </div>
        </a>

        <!-- 5. Ilford Wellness Spa Boutique (Hidden Initially) -->
        <a class="orp-card orp-card-hidden" href="https://www.oraanj-interiors.co.uk/ilford-wellness-retail-spa-boutique/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/modern-salon-interior-greenery.jpeg" alt="Ilford Wellness Spa Boutique" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Ilford Wellness Spa Boutique</h3>
            <span class="orp-card-location">Ilford, London</span>
          </div>
        </a>
      </div>

      <!-- View More Button for Retail -->
      <div class="orp-load-more-wrap" id="wrap-retail">
        <button type="button" class="orp-load-more-btn" data-target="retail" onclick="orpLoadMore('retail', this); return false;">
          <span>View More</span>
          <svg viewBox="0 0 24 24" class="orp-load-more-icon" aria-hidden="true">
            <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
      </div>
    </section>

    <!-- CATEGORY: RESTAURANT -->
    <section id="restaurant" class="orp-category-section" data-category="restaurant">
      <div class="orp-category-header">
        <span class="orp-category-eyebrow">04 / Restaurant</span>
        <h2 class="orp-category-title">Fine Dining &amp; Culinary Spaces</h2>
        <div class="orp-category-rule"></div>
      </div>
      <div class="orp-grid">
        <!-- 1. Stanmore Contemporary Restaurant & Café (NEW) -->
        <a class="orp-card" href="https://www.oraanj-interiors.co.uk/stanmore-restaurant-interior-design/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/stanmore-north-west-london-restaurant-cafe-central-dining-aisle.webp" alt="Stanmore Restaurant &amp; Café" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Stanmore Restaurant &amp; Café</h3>
            <span class="orp-card-location">Stanmore, North West London</span>
          </div>
        </a>

        <!-- 1. Dalston Restaurant & Bar (NEW) -->
        <a class="orp-card" href="https://www.oraanj-interiors.co.uk/dalston-restaurant-interior-design/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/dalston-london-contemporary-restaurant-dining-area-terracotta-seating.webp" alt="Dalston Restaurant &amp; Bar" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Dalston Restaurant &amp; Bar</h3>
            <span class="orp-card-location">Dalston, East London</span>
          </div>
        </a>

        <!-- 2. Greenwich Riverside Restaurant (NEW) -->
        <a class="orp-card" href="https://www.oraanj-interiors.co.uk/greenwich-restaurant-interior-design/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/greenwich-london-riverside-restaurant-dining-area.webp" alt="Greenwich Restaurant Interior Design" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Greenwich Restaurant</h3>
            <span class="orp-card-location">Greenwich, South East London</span>
          </div>
        </a>

        <!-- 4. Kingston Riverside Restaurant & Bar (Hidden Initially) -->
        <a class="orp-card orp-card-hidden" href="https://www.oraanj-interiors.co.uk/kingston-restaurant-interior-design/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/kingston-upon-thames-london-riverside-restaurant-bar-stools-square.webp" alt="Kingston Restaurant Interior Design" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Kingston Restaurant</h3>
            <span class="orp-card-location">Kingston upon Thames, London</span>
          </div>
        </a>

        <!-- 4. Notting Hill Restaurant (Hidden Initially) -->
        <a class="orp-card orp-card-hidden" href="https://www.oraanj-interiors.co.uk/notting-hill-restaurant/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/arched-window-mediterranean-restaurant-wide.jpeg" alt="Notting Hill Restaurant" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Notting Hill Restaurant</h3>
            <span class="orp-card-location">Notting Hill, London</span>
          </div>
        </a>

        <!-- 5. Marylebone Open Kitchen Restaurant (Hidden Initially) -->
        <a class="orp-card orp-card-hidden" href="https://www.oraanj-interiors.co.uk/nottingham-restaurant-open-kitchen/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/warm-modern-restaurant-interior-open-kitchen.jpeg" alt="Marylebone Open Kitchen Restaurant" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Marylebone Open Kitchen Restaurant</h3>
            <span class="orp-card-location">Marylebone, London</span>
          </div>
        </a>

        <!-- 6. Angel Restaurant & Café Bar (Hidden Initially) -->
        <a class="orp-card orp-card-hidden" href="https://www.oraanj-interiors.co.uk/restaurant-design-in-angel/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/modern-restaurant-interior.jpeg" alt="Angel Restaurant &amp; Café Bar" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Angel Restaurant &amp; Café Bar</h3>
            <span class="orp-card-location">Angel, London</span>
          </div>
        </a>
      </div>

      <!-- View More Button for Restaurant -->
      <div class="orp-load-more-wrap" id="wrap-restaurant">
        <button type="button" class="orp-load-more-btn" data-target="restaurant" onclick="orpLoadMore('restaurant', this); return false;">
          <span>View More</span>
          <svg viewBox="0 0 24 24" class="orp-load-more-icon" aria-hidden="true">
            <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
      </div>
    </section>

    <!-- CATEGORY: OFFICE -->
    <section id="office" class="orp-category-section" data-category="office">
      <div class="orp-category-header">
        <span class="orp-category-eyebrow">05 / Office &amp; Commercial</span>
        <h2 class="orp-category-title">Executive Workplaces &amp; Headquarters</h2>
        <div class="orp-category-rule"></div>
      </div>
      <div class="orp-grid">
        <!-- 1. Whitechapel Creative Office (NEW) -->
        <a class="orp-card" href="https://www.oraanj-interiors.co.uk/whitechapel-office-interior-design/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/whitechapel-east-london-office-reception.webp" alt="Whitechapel Creative Office" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Whitechapel Creative Office</h3>
            <span class="orp-card-location">Whitechapel, East London</span>
          </div>
        </a>

        <!-- 1. London Bridge Commercial Workplace (NEW) -->
        <a class="orp-card" href="https://www.oraanj-interiors.co.uk/london-bridge-office-interior-design/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/london-bridge-central-london-premium-office-client-lounge.webp" alt="London Bridge Commercial Workplace" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">London Bridge Workplace</h3>
            <span class="orp-card-location">London Bridge, Central London</span>
          </div>
        </a>

        <!-- 2. Croydon Commercial Workplace (NEW) -->
        <a class="orp-card" href="https://www.oraanj-interiors.co.uk/croydon-commercial-interior-design/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/croydon-london-private-office-olive-green-joinery-and-display-shelving.webp" alt="Croydon Commercial Interior Design" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Croydon Workplace</h3>
            <span class="orp-card-location">Croydon, South London</span>
          </div>
        </a>

        <!-- 4. Holborn Corporate Headquarters (Hidden Initially) -->
        <a class="orp-card orp-card-hidden" href="https://www.oraanj-interiors.co.uk/holborn-corporate-headquarters/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/mayfords-capital-modern-office-lobby.jpeg" alt="Holborn Corporate Headquarters" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Holborn Corporate Headquarters</h3>
            <span class="orp-card-location">Holborn, London</span>
          </div>
        </a>

        <!-- 4. Soho Executive Office (Hidden Initially) -->
        <a class="orp-card orp-card-hidden" href="https://www.oraanj-interiors.co.uk/soho-executive-office/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/modern-luxury-office-lobby-green-wall.jpeg" alt="Soho Executive Office" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Soho Executive Office</h3>
            <span class="orp-card-location">Soho, London</span>
          </div>
        </a>

        <!-- 5. City of London Contemporary Workplace (Hidden Initially) -->
        <a class="orp-card orp-card-hidden" href="https://www.oraanj-interiors.co.uk/contemporary-workplace-in-city-of-london/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/Open-Plan-Office-Layout-with-Thoughtful-Zoning.jpeg" alt="City of London Contemporary Workplace" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">City of London Workplace</h3>
            <span class="orp-card-location">City of London</span>
          </div>
        </a>
      </div>

      <!-- View More Button for Office -->
      <div class="orp-load-more-wrap" id="wrap-office">
        <button type="button" class="orp-load-more-btn" data-target="office" onclick="orpLoadMore('office', this); return false;">
          <span>View More</span>
          <svg viewBox="0 0 24 24" class="orp-load-more-icon" aria-hidden="true">
            <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
      </div>
    </section>

  </div>
</main>

<!-- 3. CALL TO ACTION BANNER -->
  <!-- Portfolio Overview Cross-Links -->
  <div class="orp-container" style="padding: 30px 20px; text-align: center;">
    <p class="orc-body" style="margin: 0 auto; max-width: 820px; font-size: 13.5px; color: #5E5953; line-height: 1.6;">
      Explore our award-winning <a href="https://www.oraanj-interiors.co.uk/residential-interior-design-london/">residential interior design projects</a> and bespoke <a href="https://www.oraanj-interiors.co.uk/commercial-interior-design/">commercial interior design projects</a> across London, including our celebrated <a href="https://www.oraanj-interiors.co.uk/hampstead-apartment-interior-design/">Hampstead apartment project</a> and the distinguished <a href="https://www.oraanj-interiors.co.uk/wimbledon-residence-interior-design/">Wimbledon residence project</a>.
    </p>
  </div>

<section id="consultation" class="orp-cta">
  <div class="orp-container">
    <div class="orp-cta-content">
      <span class="orp-cta-eyebrow">Start Your Project</span>
      <h2 class="orp-cta-title">Ready to Transform Your Space?</h2>
      <p class="orp-cta-desc">Whether designing a private residence, luxury lounge, boutique salon, or corporate headquarters, our team brings exceptional vision and turnkey delivery to London's finest addresses.</p>
      <div class="orp-cta-actions">
        <a class="orp-cta-btn-primary" href="https://brand.oraanj-interiors.co.uk/widget/form/TN1pXOQSDmeYSychF8Ni?notrack=true">
          <span>Book A Free Consultation</span>
        </a>
        <a class="orp-cta-btn-outline" href="tel:+447448803051">
          <span>Call Us: +44 (0) 7448 803051</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- 4. FOOLPROOF BATCH VIEW MORE (3 CARDS PER CLICK) CONTROLLER -->
<script>
function orpLoadMore(category, btn) {
  try {
    var section = document.getElementById(category);
    if (!section) {
      section = document.querySelector('[data-category="' + category + '"]');
    }
    if (!section) return;

    var hiddenCards = section.querySelectorAll('.orp-card.orp-card-hidden');
    var batchSize = 3;
    var toShow = Math.min(batchSize, hiddenCards.length);

    for (var i = 0; i < toShow; i++) {
      var card = hiddenCards[i];
      card.classList.remove('orp-card-hidden');
      card.classList.add('is-revealed');
      card.style.setProperty('display', 'flex', 'important');
      card.style.setProperty('visibility', 'visible', 'important');
      card.style.setProperty('opacity', '1', 'important');
    }

    var remaining = section.querySelectorAll('.orp-card.orp-card-hidden').length;
    var wrap = null;
    if (btn && typeof btn.closest === 'function') {
      wrap = btn.closest('.orp-load-more-wrap');
    }
    if (!wrap) {
      wrap = document.getElementById('wrap-' + category) || section.querySelector('.orp-load-more-wrap');
    }

    if (remaining === 0) {
      if (wrap) {
        wrap.style.setProperty('display', 'none', 'important');
      } else if (btn) {
        btn.style.setProperty('display', 'none', 'important');
      }
    }
  } catch (err) {
    console.error('orpLoadMore error:', err);
  }
}

// Global exposure
window.orpLoadMore = orpLoadMore;

// Secondary event delegation backup
document.addEventListener('click', function(e) {
  var target = e.target;
  if (!target) return;
  var btn = (typeof target.closest === 'function') ? target.closest('.orp-load-more-btn') : null;
  if (btn) {
    e.preventDefault();
    var cat = btn.getAttribute('data-target');
    if (cat) {
      orpLoadMore(cat, btn);
    }
  }
});
</script>

<?php get_footer(); ?>
