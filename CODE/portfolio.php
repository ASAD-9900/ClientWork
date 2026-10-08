<?php
/* Template Name: Portfolio */
get_header();
?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Inter:wght@300;400;500;600;700&display=swap');

/* ==========================================================================
   ORAANJ INTERIOR ARCHITECTURE & CONSTRUCTION — LONDON
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
  max-width: 960px !important;
  margin: 0 auto !important;
  display: flex !important;
  flex-direction: column !important;
  align-items: center !important;
}

.orp-hero-eyebrow {
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif !important;
  font-size: clamp(10px, 1.1vw, 11.5px) !important;
  font-weight: 500 !important;
  letter-spacing: 0.3em !important;
  text-transform: uppercase !important;
  color: #FFFFFF !important;
  opacity: 0.95 !important;
  margin-bottom: 10px !important;
  text-shadow: 0 2px 10px rgba(0, 0, 0, 0.6) !important;
  display: inline-block !important;
}

.orp-hero-title {
  font-family: 'Playfair Display', Georgia, serif !important;
  font-size: clamp(30px, 4.8vw, 54px) !important;
  font-weight: 400 !important;
  line-height: 1.18 !important;
  letter-spacing: 0.03em !important;
  text-transform: uppercase !important;
  color: #FFFFFF !important;
  margin: 0 0 18px 0 !important;
  text-shadow: 0 4px 22px rgba(0, 0, 0, 0.65) !important;
  max-width: 900px !important;
}

.orp-hero-btn {
  display: inline-flex !important;
  align-items: center !important;
  justify-content: center !important;
  gap: 8px !important;
  padding: 11px 28px !important;
  background: rgba(38, 34, 30, 0.65) !important;
  border: 1px solid rgba(255, 255, 255, 0.45) !important;
  border-radius: 9999px !important;
  backdrop-filter: blur(8px) !important;
  -webkit-backdrop-filter: blur(8px) !important;
  color: #FFFFFF !important;
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif !important;
  font-size: 10.5px !important;
  font-weight: 500 !important;
  letter-spacing: 0.22em !important;
  text-transform: uppercase !important;
  text-decoration: none !important;
  transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1) !important;
  cursor: pointer !important;
  margin-bottom: 18px !important;
}

.orp-hero-btn:hover {
  background-color: #B94E1A !important;
  border-color: #B94E1A !important;
  color: #FFFFFF !important;
  transform: translateY(-2px) !important;
  box-shadow: 0 8px 24px rgba(185, 78, 26, 0.4) !important;
}

.orp-scroll-down {
  position: absolute !important;
  bottom: 16px !important;
  left: 50% !important;
  transform: translateX(-50%) !important;
  z-index: 2 !important;
  display: flex !important;
  flex-direction: column !important;
  align-items: center !important;
  color: #FFFFFF !important;
  text-decoration: none !important;
  transition: opacity 0.25s ease, transform 0.25s ease !important;
  cursor: pointer !important;
}

.orp-scroll-down:hover {
  opacity: 0.75 !important;
  transform: translateX(-50%) translateY(3px) !important;
}

.orp-scroll-arrow {
  width: 20px !important;
  height: 20px !important;
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
  animation: orpBounce 2.2s infinite ease-in-out !important;
}

.orp-scroll-arrow svg {
  width: 16px !important;
  height: 16px !important;
  stroke: #FFFFFF !important;
  stroke-width: 2 !important;
  fill: none !important;
}

@keyframes orpBounce {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(6px);
  }
}

/* -------------------------------------------------------------
   4. MAIN PORTFOLIO SECTIONS (Tightened Spacing)
   ------------------------------------------------------------- */
.orp-portfolio-section {
  position: relative !important;
  background-color: #FFFFFF !important;
  padding: clamp(30px, 3.8vw, 48px) 0 clamp(36px, 4.5vw, 56px) 0 !important;
}

.orp-category-section {
  margin-bottom: clamp(36px, 4.2vw, 56px) !important;
}

.orp-category-section:last-child {
  margin-bottom: 0 !important;
}

/* Category Header */
.orp-category-header {
  display: flex !important;
  flex-direction: column !important;
  align-items: center !important;
  text-align: center !important;
  margin-bottom: clamp(16px, 2.2vw, 26px) !important;
}

.orp-category-eyebrow {
  display: inline-flex !important;
  align-items: center !important;
  gap: 10px !important;
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif !important;
  font-size: 10.5px !important;
  font-weight: 600 !important;
  letter-spacing: 0.28em !important;
  text-transform: uppercase !important;
  color: #B94E1A !important;
  margin-bottom: 5px !important;
}

.orp-category-title {
  font-family: 'Playfair Display', Georgia, serif !important;
  font-size: clamp(22px, 3vw, 34px) !important;
  font-weight: 400 !important;
  letter-spacing: 0.025em !important;
  color: #1A1816 !important;
  margin: 0 0 10px 0 !important;
}

.orp-category-rule {
  width: 40px !important;
  height: 2px !important;
  background-color: #B94E1A !important;
  margin: 0 auto !important;
}

/* -------------------------------------------------------------
   5. 3-COLUMN CARDS GRID (Tailored for Bento Tall Photography)
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
  pointer-events: none !important;
  z-index: 2 !important;
}

.orp-card:hover .orp-card-overlay,
.orp-card:focus-visible .orp-card-overlay {
  opacity: 1 !important;
  visibility: visible !important;
}

/* Inner Frame inside the Card */
.orp-card-frame {
  position: absolute !important;
  inset: 16px !important;
  border: 1px solid rgba(255, 255, 255, 0.78) !important;
  border-radius: 2px !important;
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
  pointer-events: none !important;
  box-sizing: border-box !important;
  transform: scale(0.96) !important;
  opacity: 0 !important;
  transition: transform 0.42s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.35s ease, border-color 0.35s ease !important;
}

.orp-card:hover .orp-card-frame,
.orp-card:focus-visible .orp-card-frame {
  transform: scale(1) !important;
  opacity: 1 !important;
  border-color: rgba(255, 255, 255, 0.95) !important;
}

/* Inner View Project Text */
.orp-card-view-text {
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif !important;
  font-size: clamp(11.5px, 1.1vw, 13px) !important;
  font-weight: 600 !important;
  letter-spacing: 0.2em !important;
  text-transform: uppercase !important;
  color: #FFFFFF !important;
  text-shadow: 0 2px 10px rgba(0, 0, 0, 0.6) !important;
  display: inline-flex !important;
  align-items: center !important;
  justify-content: center !important;
  padding: 6px 14px !important;
  border-bottom: 1px solid transparent !important;
  transform: translateY(6px) !important;
  opacity: 0 !important;
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
    <h1 class="orp-hero-title">Architectural Interiors & Tailored Luxury</h1>
    <a class="orp-hero-btn" href="#residential">
      <span>— Explore Projects —</span>
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
        <h2 class="orp-category-title">Private Residences & Penthouses</h2>
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

        <!-- 2. Hampstead Apartment -->
        <a class="orp-card" href="https://www.oraanj-interiors.co.uk/hampstead-apartment-interior-design/">
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

        <!-- 3. Richmond House -->
        <a class="orp-card" href="https://www.oraanj-interiors.co.uk/richmond-house-interior-design/">
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

        <!-- 4. Marylebone Full House (Hidden Initially) -->
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

        <!-- 5. Wimbledon Townhouse Residence (Hidden Initially) -->
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

        <!-- 6. Knightsbridge Residence (Hidden Initially) -->
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
        <h2 class="orp-category-title">Luxury Bars & Cocktail Lounges</h2>
        <div class="orp-category-rule"></div>
      </div>
      <div class="orp-grid">
        <!-- 1. Hampstead Lounge & Bar -->
        <a class="orp-card" href="https://www.oraanj-interiors.co.uk/hampstead-lounge-bar/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/bohemian-luxury-restaurant-lounge.jpeg" alt="Hampstead Lounge & Bar" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Hampstead Lounge & Bar</h3>
            <span class="orp-card-location">Hampstead, London</span>
          </div>
        </a>

        <!-- 2. Covent Garden Bar & Lounge -->
        <a class="orp-card" href="https://www.oraanj-interiors.co.uk/covent-garden-bar-lounge/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury-hotel-bar-lounge-wide-interior.jpeg" alt="Covent Garden Bar & Lounge" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Covent Garden Bar & Lounge</h3>
            <span class="orp-card-location">Covent Garden, London</span>
          </div>
        </a>

        <!-- 3. Kensington Lounge & Bar -->
        <a class="orp-card" href="https://www.oraanj-interiors.co.uk/kensington-lounge-bar/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury-cocktail-bar-interior-design.jpeg" alt="Kensington Lounge & Bar" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Kensington Lounge & Bar</h3>
            <span class="orp-card-location">Kensington, London</span>
          </div>
        </a>
      </div>
    </section>

    <!-- CATEGORY: RETAIL -->
    <section id="retail" class="orp-category-section" data-category="retail">
      <div class="orp-category-header">
        <span class="orp-category-eyebrow">03 / Retail</span>
        <h2 class="orp-category-title">Boutiques, Salons & Wellness Clinics</h2>
        <div class="orp-category-rule"></div>
      </div>
      <div class="orp-grid">
        <!-- 1. Tooting Hair Salon -->
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

        <!-- 2. Westminster Dental Clinic -->
        <a class="orp-card" href="https://www.oraanj-interiors.co.uk/westminster-dental-clinic/">
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

        <!-- 3. Fitzrovia Retail Boutique & Salon -->
        <a class="orp-card" href="https://www.oraanj-interiors.co.uk/fitzrovia-retail-boutique-salon/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury_salon_full_interior_design.jpeg" alt="Fitzrovia Retail Boutique & Salon" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Fitzrovia Retail Boutique & Salon</h3>
            <span class="orp-card-location">Fitzrovia, London</span>
          </div>
        </a>

        <!-- 4. Ilford Wellness Spa Boutique (Hidden Initially) -->
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
        <h2 class="orp-category-title">Fine Dining & Culinary Spaces</h2>
        <div class="orp-category-rule"></div>
      </div>
      <div class="orp-grid">
        <!-- 1. Notting Hill Restaurant -->
        <a class="orp-card" href="https://www.oraanj-interiors.co.uk/notting-hill-restaurant/">
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

        <!-- 2. Marylebone Open Kitchen Restaurant -->
        <a class="orp-card" href="https://www.oraanj-interiors.co.uk/nottingham-restaurant-open-kitchen/">
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

        <!-- 3. Angel Restaurant & Café Bar -->
        <a class="orp-card" href="https://www.oraanj-interiors.co.uk/restaurant-design-in-angel/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/modern-restaurant-interior.jpeg" alt="Angel Restaurant & Café Bar" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">Angel Restaurant & Café Bar</h3>
            <span class="orp-card-location">Angel, London</span>
          </div>
        </a>
      </div>
    </section>

    <!-- CATEGORY: OFFICE -->
    <section id="office" class="orp-category-section" data-category="office">
      <div class="orp-category-header">
        <span class="orp-category-eyebrow">05 / Office</span>
        <h2 class="orp-category-title">Executive Workplaces & Headquarters</h2>
        <div class="orp-category-rule"></div>
      </div>
      <div class="orp-grid">
        <!-- 1. Holborn Corporate Headquarters -->
        <a class="orp-card" href="https://www.oraanj-interiors.co.uk/holborn-corporate-headquarters/">
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

        <!-- 2. Soho Executive Office -->
        <a class="orp-card" href="https://www.oraanj-interiors.co.uk/soho-executive-office/">
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

        <!-- 3. City of London Contemporary Workplace -->
        <a class="orp-card" href="https://www.oraanj-interiors.co.uk/contemporary-workplace-in-city-of-london/">
          <div class="orp-card-media">
            <img class="orp-card-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/Open-Plan-Office-Layout-with-Thoughtful-Zoning.jpeg" alt="City of London Contemporary Workplace" loading="lazy" />
            <div class="orp-card-overlay">
              <div class="orp-card-frame">
                <span class="orp-card-view-text">View Project</span>
              </div>
            </div>
          </div>
          <div class="orp-card-info">
            <h3 class="orp-card-title">City of London Contemporary Workplace</h3>
            <span class="orp-card-location">City of London</span>
          </div>
        </a>
      </div>
    </section>

  </div>
</main>

<!-- 3. CALL TO ACTION BANNER -->
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

<!-- 4. FOOLPROOF VIEW MORE JAVASCRIPT CONTROLLER -->
<script>
function orpLoadMore(category, btn) {
  try {
    var section = document.getElementById(category);
    if (!section) {
      section = document.querySelector('[data-category="' + category + '"]');
    }
    if (!section) return;

    var hiddenCards = section.querySelectorAll('.orp-card-hidden');
    for (var i = 0; i < hiddenCards.length; i++) {
      var card = hiddenCards[i];
      card.classList.remove('orp-card-hidden');
      card.classList.add('is-revealed');
      card.style.setProperty('display', 'flex', 'important');
      card.style.setProperty('visibility', 'visible', 'important');
      card.style.setProperty('opacity', '1', 'important');
    }

    var wrap = null;
    if (btn && typeof btn.closest === 'function') {
      wrap = btn.closest('.orp-load-more-wrap');
    }
    if (!wrap) {
      wrap = document.getElementById('wrap-' + category) || section.querySelector('.orp-load-more-wrap');
    }
    if (wrap) {
      wrap.style.setProperty('display', 'none', 'important');
    } else if (btn) {
      btn.style.setProperty('display', 'none', 'important');
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
