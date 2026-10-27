<?php
/* Template Name: Home */
get_header();
?>
<style>
.banner_bottom_section_list {
    margin-top: 25px;
}

.banner_bottom_section_list ul {
    padding: 0;
    margin: 0;
}

.banner_bottom_section_list li {
    list-style: none;
    display: flex;
    align-items: flex-start;
    gap: 12px;
    margin-bottom: 14px;
    color: #333;
    line-height: 1.5;
}

.banner_bottom_section_list li::before {
    content: "✓";
    min-width: 22px;
    height: 22px;
    background: #e67339;
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 13px;
    font-weight: 700;
    flex-shrink: 0;
    margin-top: 2px;
}

.banner_bottom_section_list li:hover {
    color: #000;
}
.home_banner_section_new {
	margin-top: 95px;
}
.home_banner_section_new_content {
	position: absolute;
	top: 50%;
	left: 0;
	width: 100%;
	transform: translate(0, -50%);
}


@media only screen and (min-width : 300px) and (max-width : 767px) {
.home_banner_section_new {
	margin-top: 60px;
}
.home_banner_section_new img {
  min-height: 360px;
  object-fit: cover;
}
}

@media only screen and (min-width : 768px) and (max-width : 1024px) and (orientation : portrait) {
.home_banner_section_new {
	margin-top: 60px;
}
.home_banner_section_new img {
  min-height: 380px;
  object-fit: cover;
}
}

@media only screen and (min-width : 768px) and (max-width : 1024px) and (orientation : landscape) {
.home_banner_section_new img {
  min-height: 420px;
  object-fit: cover;
}
.header_menu ul li {
  margin-left: 20px;
}
}

@media (max-width: 992px) {
    .banner_bottom_section_list li {
        font-size: 15px;
    }
}

@media (max-width: 576px) {
    .banner_bottom_section_list li {
        font-size: 14px;
        gap: 10px;
    }

    .banner_bottom_section_list li::before {
        min-width: 20px;
        height: 20px;
        font-size: 12px;
        margin-top: 3px;
    }
}




/*Asad Added these css*/

.img-container {
        position: relative;
        width: 100%; 
        height: 280px;
        margin-bottom: 25px;
        overflow: hidden;
        border-radius: 12px;
        display: block;
    }

    
    .hover-img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover;
        display: block;
        transition: transform 0.5s ease;
    }

   
    .img-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); 
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
        font-size: 20px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 2px;
        pointer-events: none;
    }

   
    .img-container:hover .img-overlay {
        opacity: 1;
    }

    .img-container:hover .hover-img {
        transform: scale(1.1); 
    }
</style>




<!--Luxury Interior Design In London , this was the previous heading-->



<!--<div class="home_banner_section_new position-relative text-center">-->
<!--  <img src="<?php echo site_url();?>/wp-content/uploads/2026/09/Interior-Designers-in-London-Creating-Bespoke-Design-Build-for-Beautiful-Living-1.png" alt="Luxury interior design project by Oraanj Interior Design London" class="w-100" fetchpriority="high">-->
<!--  <div class="home_banner_section_new_content">-->
<!--    <div class="container">-->
<!--		<div class="row justify-content-center">-->
<!--			<div class="col-xl-6 col-lg-8 col-md-7">-->
<!--				<div class="banner_content_box">-->
<!--					<h1 class="banner_heading">Interior Designers in London Creating Bespoke Design & Build for Beautiful Living </h1>-->
					<!--<h2 class="home_service_section_text font_style_Messiri">Designed, Planned & Built Right</h2>-->
<!--					<div class="banner_text">From concept to completion, we design, renovate and deliver beautiful interiors across London.</div>-->
<!--					<a href="https://brand.oraanj-interiors.co.uk/widget/booking/MdZ4TIbvCtyLERAN00H5" target="_blank" class="banner_btn">Discuss Your Interior Design & Build Project</a>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--  </div>-->
<!--</div>-->



<section class="hro-section">
<div class="hro-bg-frame">
<img class="hro-bg-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/Interior-Designers-in-London-Creating-Bespoke-Design-Build-for-Beautiful-Living-1.png" alt="Luxury London interior design and living space by Oraanj Interiors" loading="lazy">
</div>
<div class="hro-white-blur"></div>
<div class="hro-wrap">
<div class="hro-content-col">
<h1 class="hro-title">Interior Designers in London<br>Bespoke Residential &amp; Commercial Interior Design and Build</h1>
<p class="hro-lead">Oraanj designs exceptional interiors and manages the entire renovation and delivery process, from concept through to completion, for homes and commercial spaces across London.</p>
<div class="hro-actions">
<a class="hro-btn hro-btn-primary"
   href="https://brand.oraanj-interiors.co.uk/widget/booking/MdZ4TIbvCtyLERAN00H5"
   target="_blank"
   rel="noopener noreferrer"
   onclick="clarity('event', 'discuss_project')">
  <span>Discuss Your Project</span>
</a>
<!-- <a class="hro-btn hro-btn-secondary" href="https://www.oraanj-interiors.co.uk/portfolio/">
<span>View Portfolio</span>
</a>
</div> -->
</div>
</div>
</section>




<!--<div class="banner_bottom_section text-center">-->
<!--	<div class="container">-->
<!--		<div class="container_inner">-->
<!--		<div class="row   align-items-center">-->

<!--			<div class="col-lg-6 col-md-6 ">-->
<!--				<div class="banner_bottom_section_heading">Award-Winning Interior Design & Build Company in London</div>-->
<!--				<div class="banner_bottom_section_text">For more than 20 years, Oraanj has designed interiors around the people who use them.</div>-->
<!--				<div>Some clients come to us for interior design alone. Others want us to take responsibility for the wider renovation, procurement and project delivery.</div>-->
<!--				<div>Our approach brings creative design and practical planning together from the beginning, so the finished interior isn't considered separately from how it will actually be delivered.</div>-->
<!--				<div class="banner_bottom_section_text"><b>Winner: 2025 Best Interior Designer Award</b></div>-->
<!--				<div class="row">-->
<!--					<div class="col-lg-4 col-md-6">-->
<!--						<div class="home_counter_number"><span class="count-digit">180</span>+</div>-->
<!--						<div class="home_counter_text">Projects Delivered across London</div>-->
<!--					</div>-->
<!--					<div class="col-lg-5 col-md-6">-->
<!--						<div class="home_counter_number"><span class="count-digit">20</span>+</div>-->
<!--						<div class="home_counter_text">Years of Professional Design Experience</div>-->
<!--					</div>-->
<!--					<div class="col-lg-3 col-md-12">-->
<!--						<div class="home_counter_number"><span class="count-digit">98</span>%</div>-->
<!--						<div class="home_counter_text">On-Time Delivery & Project Management</div>-->
<!--					</div>-->
<!--				</div>-->
				<!-- <div class="banner_bottom_section_text">Let Oraanj bring your vision to life.</div> -->
				<!-- <a href="https://brand.oraanj-interiors.co.uk/widget/booking/MdZ4TIbvCtyLERAN00H5" target="_blank" class="banner_btn">Book Your Free Consultation Today</a> -->
<!--			</div>-->
<!--			<div class="col-lg-6 col-md-6 banner_bottom_section_img"><img  loading="lazy"  src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/Award-Winning-Interior-Design-Build-Company-in-London-1.jpeg" width="650" height="470" alt="Award-winning luxury interior design Chelsea London"></div>-->
<!--		</div>-->
<!--	</div>-->
<!--	</div>-->
<!--</div>-->



<section class="awc-section">
<div class="awc-wrap">
<div class="awc-card">
<div class="awc-col-content">
<h2 class="awc-title">Award-Winning Interior Design &amp; Build Company</h2>
<div class="awc-intro-block">
<p class="awc-intro-p">For more than 20 years, Oraanj has designed interiors around the people who use them.</p>
<p class="awc-intro-p">Some clients come to us for interior design alone. Others want us to take responsibility for the wider renovation, procurement and project delivery.</p>
<p class="awc-intro-p">Our approach brings creative design and practical planning together from the beginning, so the finished interior isn't considered separately from how it will actually be delivered.</p>
</div>
<div class="awc-badges-grid">
<div class="awc-badge-item">
<div class="awc-badge-val">Residential &amp; Commercial</div>
<div class="awc-badge-label">Projects Across London</div>
</div>
<div class="awc-badge-item">
<div class="awc-badge-val">SBID</div>
<div class="awc-badge-label">Accredited Practice</div>
</div>
<div class="awc-badge-item">
<div class="awc-badge-val">Award-Winning</div>
<div class="awc-badge-label">Interior Design</div>
</div>
</div>
<div class="awc-actions">
<a class="awc-btn" href="https://www.oraanj-interiors.co.uk/about/">Know More About Oraanj Interiors</a>
</div>
</div>
<div class="awc-col-media">
<div class="awc-img-frame">
<img class="awc-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury-dining-room-interior-design-by-oraanj-e1790962056553.jpeg" alt="Award-Winning Interior Design and Build Living Space in London" loading="lazy">
</div>
</div>
</div>
</div>
</section>




<section class="swp-section-wrap">
  <div class="swp-container">
    <div class="swp-header">
      <span class="swp-eyebrow">WHAT ARE YOU PLANNING?</span>
      <h2 class="swp-main-title">Start With Your Project</h2>
      <div class="swp-accent-line"></div>
    </div>
    <div class="swp-grid">
      <div class="swp-card">
        <div class="swp-img-wrap"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury_living_room_dining_area.jpeg" alt="Living room sofa interior design" class="swp-card-img" loading="lazy" /></div>
        <div class="swp-card-content">
          <h3 class="swp-card-title">I Want to Design My Home</h3>
          <p class="swp-card-desc">For clients who want help with layouts, materials, lighting, furniture, joinery and the overall interior.</p>
          <a href="https://www.oraanj-interiors.co.uk/residential-interior-design-london/" class="swp-card-link">EXPLORE RESIDENTIAL INTERIOR DESIGN </a>
        </div>
      </div>
      <div class="swp-card">
        <div class="swp-img-wrap"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury_dining_room.jpeg" alt="Modern kitchen renovation with island" class="swp-card-img" loading="lazy" /></div>
        <div class="swp-card-content">
          <h3 class="swp-card-title">I'm Renovating a Property</h3>
          <p class="swp-card-desc">For houses and apartments that need more substantial changes, from kitchens and bathrooms to complete interior refurbishment.</p>
          <a href="https://www.oraanj-interiors.co.uk/renovation-company-london/" class="swp-card-link">EXPLORE HOME RENOVATION </a>
        </div>
      </div>
      <div class="swp-card">
        <div class="swp-img-wrap"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/living-room-media-wall-closeup.jpeg" alt="Architectural drawings and material samples" class="swp-card-img" loading="lazy" /></div>
        <div class="swp-card-content">
          <h3 class="swp-card-title">I Want Design &amp; Build</h3>
          <p class="swp-card-desc">For clients who want Oraanj to design the interior and continue into technical planning, renovation and project delivery.</p>
          <a href="https://www.oraanj-interiors.co.uk/design-and-build/" class="swp-card-link">EXPLORE DESIGN &amp; BUILD </a>
        </div>
      </div>
      <div class="swp-card">
        <div class="swp-img-wrap"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/mayfords-capital-modern-office-lobby.jpeg" alt="Technical plans and construction documentation" class="swp-card-img" loading="lazy" /></div>
        <div class="swp-card-content">
          <h3 class="swp-card-title">I've Already Got the Design</h3>
          <p class="swp-card-desc">For projects where drawings and specifications are substantially developed and you need interior construction or refurbishment.</p>
          <a href="https://www.oraanj-interiors.co.uk/construction-company/" class="swp-card-link">EXPLORE CONSTRUCTION &amp; REFURBISHMENT</a>
        </div>
      </div>
      <div class="swp-card">
        <div class="swp-img-wrap"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury_bathroom_design_by_oraanj_interiors.jpeg" alt="Styled hallway console table with mirror" class="swp-card-img" loading="lazy" /></div>
        <div class="swp-card-content">
          <h3 class="swp-card-title">I Want Everything Managed</h3>
          <p class="swp-card-desc">For clients who want a more complete turnkey service extending into procurement, furniture, installation and final styling.</p>
          <a href="https://www.oraanj-interiors.co.uk/turnkey-interior-design-london/" class="swp-card-link GlobalFontFamily">EXPLORE TURNKEY INTERIOR DESIGN </a>
        </div>
      </div>
      <div class="swp-card">
        <div class="swp-img-wrap"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury-hotel-bar-lounge-wide-interior.jpeg" alt="Commercial restaurant interior" class="swp-card-img" loading="lazy" /></div>
        <div class="swp-card-content">
          <h3 class="swp-card-title">I'm Designing a Business</h3>
          <p class="swp-card-desc">For offices, restaurants, cafés and other commercial interiors.</p>
          <a href="https://www.oraanj-interiors.co.uk/commercial-interior-design/" class="swp-card-link">EXPLORE COMMERCIAL INTERIOR DESIGN </a>
        </div>
      </div>
    </div>
  </div>
</section>











<section class="sdw-pro-wrap">
<div class="sdw-pro-container">
<div class="sdw-pro-top-row">
<div class="sdw-pro-intro-col">
<span class="sdw-pro-eyebrow">INTERIOR DESIGN</span>
<div class="sdw-pro-accent-line"></div>
<h2 class="sdw-pro-title">Spaces Designed Around the Way You Live</h2>
<p class="sdw-pro-lead">A good interior starts with understanding the property and the people using it.</p>
<p class="sdw-pro-body">We consider how rooms connect, where furniture should sit, how lighting will work, what storage is needed and how materials should come together.</p>
<p class="sdw-pro-list-label">Our interior design services can include:</p>
<div class="sdw-pro-icon-list">
<div class="sdw-pro-icon-item">
<div class="sdw-pro-icon-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="1"/><path d="M3 9h9v12"/><path d="M9 3v6"/></svg></div>
<span class="sdw-pro-icon-text">Space Planning</span>
</div>
<div class="sdw-pro-icon-item">
<div class="sdw-pro-icon-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M19 9V6a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v3"/><path d="M4 11a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-4z"/><path d="M6 17v4"/><path d="M18 17v4"/></svg></div>
<span class="sdw-pro-icon-text">Furniture &amp; FF&amp;E</span>
</div>
<div class="sdw-pro-icon-item">
<div class="sdw-pro-icon-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20 9V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v2"/><path d="M2 11a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5H2v-5z"/><path d="M4 16v4"/><path d="M20 16v4"/></svg></div>
<span class="sdw-pro-icon-text">Interior Design</span>
</div>
<div class="sdw-pro-icon-item">
<div class="sdw-pro-icon-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="3" width="16" height="18" rx="1"/><line x1="12" y1="3" x2="12" y2="21"/><line x1="9" y1="11" x2="9" y2="13"/><line x1="15" y1="11" x2="15" y2="13"/></svg></div>
<span class="sdw-pro-icon-text">Bespoke Joinery</span>
</div>
<div class="sdw-pro-icon-item">
<div class="sdw-pro-icon-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="m9 10 3-2 3 2v3l-3 2-3-2v-3z"/><path d="M8 21h8"/><path d="M12 17v4"/></svg></div>
<span class="sdw-pro-icon-text">3D Visualisation</span>
</div>
<div class="sdw-pro-icon-item">
<div class="sdw-pro-icon-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2z"/><path d="M7 21V9l10 12"/></svg></div>
<span class="sdw-pro-icon-text">Materials &amp; Finishes</span>
</div>
<div class="sdw-pro-icon-item">
<div class="sdw-pro-icon-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="2" x2="12" y2="9"/><path d="M6 15a6 6 0 0 1 12 0H6z"/><line x1="5" y1="15" x2="19" y2="15"/><line x1="12" y1="18" x2="12" y2="19"/></svg></div>
<span class="sdw-pro-icon-text">Lighting Design</span>
</div>
<div class="sdw-pro-icon-item">
<div class="sdw-pro-icon-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="8" y1="13" x2="16" y2="13"/><line x1="8" y1="17" x2="12" y2="17"/></svg></div>
<span class="sdw-pro-icon-text">Technical Design</span>
</div>
</div>
<div class="sdw-pro-btn-wrap"><a href="https://www.oraanj-interiors.co.uk/interior-designers-london/" class="sdw-pro-cta-btn GlobalFontFamily">Explore Interior Design </a></div>
</div>
<div class="sdw-pro-hero-col">
<div class="sdw-pro-hero-box">
<img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury_living_room_tv_wall_wide.jpeg" alt="Spaces designed around the way you live" class="sdw-pro-hero-img" loading="lazy" />
<div class="sdw-pro-hero-overlay">
<div class="sdw-pro-overlay-dash align-items-center"></div>
</div>
</div>
</div>
</div>
<!--<div class="sdw-pro-cards-section">-->
<!--<div class="sdw-pro-cards-grid">-->
<!--<div class="sdw-pro-card-box">-->
<!--<div class="sdw-pro-card-img-wrap"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/space-planning.jpeg" alt="Space Planning Blueprint" class="sdw-pro-card-img" loading="lazy" /></div>-->
<!--<a href="https://www.oraanj-interiors.co.uk/space-planning/" ><h3 class="sdw-pro-card-title">Space Planning</h3></a>-->
<!--</div>-->
<!--<div class="sdw-pro-card-box">-->
<!--<div class="sdw-pro-card-img-wrap"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/interior-design-according-to-your-taste.jpeg" alt="Interior Design Moodboard" class="sdw-pro-card-img" loading="lazy" /></div>-->
<!--<a href="https://www.oraanj-interiors.co.uk/" ><h3 class="sdw-pro-card-title">Interior Design</h3></a>-->
<!--</div>-->
<!--<div class="sdw-pro-card-box">-->
<!--<div class="sdw-pro-card-img-wrap"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/complete-3d-visualisation-of-the-design.jpeg" alt="3D Visualisation Render" class="sdw-pro-card-img" loading="lazy" /></div>-->
<!--<a href="https://www.oraanj-interiors.co.uk/3d-render-services/" ><h3 class="sdw-pro-card-title">3D Visualisation</h3></a>-->
<!--</div>-->
<!--<div class="sdw-pro-card-box">-->
<!--<div class="sdw-pro-card-img-wrap"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/lighting-design.jpeg" alt="Lighting Design Fixtures" class="sdw-pro-card-img" loading="lazy" /></div>-->
<!--<a href="https://www.oraanj-interiors.co.uk/lighting-design/" ><h3 class="sdw-pro-card-title">Lighting Design</h3></a>-->
<!--</div>-->
<!--<div class="sdw-pro-card-box">-->
<!--<div class="sdw-pro-card-img-wrap"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/furniture-and-ff-and-e.jpeg" alt="Furniture & FF&E" class="sdw-pro-card-img" loading="lazy" /></div>-->
<!--<a href="https://www.oraanj-interiors.co.uk/procurement/" ><h3 class="sdw-pro-card-title">Furniture &amp; FF&amp;E</h3></a>-->
<!--</div>-->
<!--<div class="sdw-pro-card-box">-->
<!--<div class="sdw-pro-card-img-wrap"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/bespoke-joinery-design.jpeg" alt="Bespoke Joinery Cabinetry" class="sdw-pro-card-img" loading="lazy" /></div>-->
<!--<a href="https://www.oraanj-interiors.co.uk/custom-furniture-design/" ><h3 class="sdw-pro-card-title">Bespoke Joinery</h3></a>-->
<!--</div>-->
<!--<div class="sdw-pro-card-box">-->
<!--<div class="sdw-pro-card-img-wrap"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/materials-and-finishes.jpeg" alt="Materials & Finishes" class="sdw-pro-card-img" loading="lazy" /></div>-->
<!--<a href="https://www.oraanj-interiors.co.uk/procurement/" ><h3 class="sdw-pro-card-title">Materials &amp; Finishes</h3></a>-->
<!--</div>-->
<!--<div class="sdw-pro-card-box">-->
<!--<div class="sdw-pro-card-img-wrap"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/complete-technical-design.jpeg" alt="Technical Design Blueprints" class="sdw-pro-card-img" loading="lazy" /></div>-->
<!--<a href="https://www.oraanj-interiors.co.uk/technical-cad-drawings/" ><h3 class="sdw-pro-card-title">Technical Design</h3></a>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
</div>
</section>










<section class="dnb-section-wrap">
<div class="dnb-container">
<div class="dnb-top-row">
<div class="dnb-col-left">
<span class="dnb-eyebrow">DESIGN &amp; BUILD</span>
<div class="dnb-gold-line"></div>
<h2 class="dnb-main-title">One Team From Design to Completion</h2>
<p class="dnb-lead-p">If you don’t want to coordinate designers, contractors, suppliers and trades separately, Oraanj can take the project further.</p>
<p class="dnb-sub-label">Our Design &amp; Build service connects:</p>
<div class="dnb-process-flow">
<div class="dnb-flow-step">
<div class="dnb-step-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg></div>
<span class="dnb-step-label">INTERIOR DESIGN</span>
</div>
<div class="dnb-flow-arrow">&darr;</div>
<div class="dnb-flow-step">
<div class="dnb-step-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"/><line x1="8" y1="2" x2="8" y2="18"/><line x1="16" y1="6" x2="16" y2="22"/></svg></div>
<span class="dnb-step-label">TECHNICAL PLANNING</span>
</div>
<div class="dnb-flow-arrow">&darr;</div>
<div class="dnb-flow-step">
<div class="dnb-step-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="8.01" y2="10"/><line x1="12" y1="10" x2="12.01" y2="10"/><line x1="16" y1="10" x2="16.01" y2="10"/><line x1="8" y1="14" x2="8.01" y2="14"/><line x1="12" y1="14" x2="12.01" y2="14"/><line x1="16" y1="14" x2="16.01" y2="14"/><line x1="8" y1="18" x2="8.01" y2="18"/><line x1="12" y1="18" x2="12.01" y2="18"/><line x1="16" y1="18" x2="16.01" y2="18"/></svg></div>
<span class="dnb-step-label">COSTING</span>
</div>
<div class="dnb-flow-arrow">&darr;</div>
<div class="dnb-flow-step">
<div class="dnb-step-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg></div>
<span class="dnb-step-label">PROCUREMENT</span>
</div>
<div class="dnb-flow-arrow">&darr;</div>
<div class="dnb-flow-step">
<div class="dnb-step-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="m15 12-8.5 8.5a2.12 2.12 0 1 1-3-3L12 9"/><path d="M17.64 4.36 20.47 7.2a2 2 0 0 1 0 2.83l-2.12 2.12-5.66-5.66 2.12-2.12a2 2 0 0 1 2.83 0z"/></svg></div>
<span class="dnb-step-label">RENOVATION</span>
</div>
<div class="dnb-flow-arrow">&darr;</div>
<div class="dnb-flow-step">
<div class="dnb-step-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
<span class="dnb-step-label">PROJECT MANAGEMENT</span>
</div>
<div class="dnb-flow-arrow">&darr;</div>
<div class="dnb-flow-step">
<div class="dnb-step-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M19 9V6a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v3"/><path d="M3 11v5a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3v-5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2z"/><line x1="6" y1="19" x2="6" y2="21"/><line x1="18" y1="19" x2="18" y2="21"/></svg></div>
<span class="dnb-step-label">INSTALLATION</span>
</div>
<div class="dnb-flow-arrow">&darr;</div>
<div class="dnb-flow-step">
<div class="dnb-step-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"/></svg></div>
<span class="dnb-step-label">HANDOVER</span>
</div>
</div>
<p class="dnb-closing-p">The objective is simple: keep the design and delivery connected as the project moves towards completion.</p>
</div>
<div class="dnb-col-center">
<div class="dnb-hero-box">
<img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury-hotel-lounge-arched-entrance.jpeg" alt="Luxury modern kitchen island and dining area" class="dnb-hero-img" loading="lazy" />
</div>
</div>
<div class="dnb-col-right">
<div class="dnb-step-card">
<div class="dnb-step-img-box"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury-hotel-lounge-seating-area.jpeg" alt="Design material moodboard" class="dnb-step-img" loading="lazy" /></div>
<span class="dnb-step-title">1. DESIGN</span>
</div>
<div class="dnb-step-card">
<div class="dnb-step-img-box"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/complete-architectural-plan.jpeg" alt="Architectural planning and blueprint" class="dnb-step-img" loading="lazy" /></div>
<span class="dnb-step-title">2. PLAN</span>
</div>
<div class="dnb-step-card">
<div class="dnb-step-img-box"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury-hotel-lounge-bar-interior.jpeg" alt="Construction and building in progress" class="dnb-step-img" loading="lazy" /></div>
<span class="dnb-step-title">3. BUILD</span>
</div>
<div class="dnb-step-card">
<div class="dnb-step-img-box"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury-hotel-bar-lounge-wide-interior.jpeg" alt="Completed luxury interior space" class="dnb-step-img" loading="lazy" /></div>
<span class="dnb-step-title">4. COMPLETE</span>
</div>
</div>
</div>
<div class="dnb-bottom-row">
<div class="dnb-cta-cell"><a href="https://www.oraanj-interiors.co.uk/design-and-build/" class="dnb-btn GlobalFontFamily">Explore Design &amp; Build <span>&rarr;</span></a></div>
<div class="dnb-pillars-grid">
<div class="dnb-pillar-item">
<div class="dnb-pillar-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
<span class="dnb-pillar-text">A SINGLE,<br>EXPERIENCED TEAM</span>
</div>
<div class="dnb-pillar-item">
<div class="dnb-pillar-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9.5L12 3l9 6.5V20a1 1 0 0 1-1 1h-5v-6h-6v6H4a1 1 0 0 1-1-1V9.5z"/></svg></div>
<span class="dnb-pillar-text">CLEAR PROCESS<br>FROM START TO FINISH</span>
</div>
<div class="dnb-pillar-item">
<div class="dnb-pillar-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
<span class="dnb-pillar-text">ON-TIME DELIVERY</span>
</div>
<div class="dnb-pillar-item">
<div class="dnb-pillar-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M6 3h12l4 6-10 12L2 9z"/><path d="M2 9h20"/><path d="M10 3v6l-4 12"/><path d="M14 3v6l4 12"/></svg></div>
<span class="dnb-pillar-text">INTERIORS THAT<br>WORK IN REAL LIFE</span>
</div>
</div>
</div>
</div>
</section>













<section class="pib-section-wrap">
<div class="pib-container">
<div class="pib-top-row">
<div class="pib-col-intro">
<span class="pib-eyebrow">RENOVATING A LONDON PROPERTY?</span>
<div class="pib-accent-line"></div>
<h2 class="pib-main-title">Plan the Interior Before the Main Works Begin</h2>
<p class="pib-lead-p">Renovation decisions are connected.</p>
<p class="pib-body-p">Changing a wall affects the layout. The layout affects furniture, lighting, electrical positions, joinery and how the space is used.</p>
	<p class="pib-body-p">Kitchens, bathrooms and bespoke joinery also need early coordination with plumbing, ventilation and finishes.</p>
	<p class="pib-body-p">By resolving these details before work begins, Oraanj helps protect the design and reduce rushed decisions on site.</p>
<p class="pib-works-label">Oraanj works on:</p>
<div class="pib-services-grid">
<div class="pib-services-item">
<div class="pib-service-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9.5L12 3l9 6.5V20a1 1 0 0 1-1 1h-5v-6h-6v6H4a1 1 0 0 1-1-1V9.5z"/></svg></div>
<span class="pib-service-text">Whole-Home Renovations</span>
</div>
<div class="pib-services-item">
<div class="pib-service-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8" cy="8" r="2"/><circle cx="16" cy="8" r="2"/><circle cx="8" cy="16" r="2"/><circle cx="16" cy="16" r="2"/></svg></div>
<span class="pib-service-text">Kitchen Renovations</span>
</div>
<div class="pib-services-item">
<div class="pib-service-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="2" width="16" height="20" rx="1"/><line x1="9" y1="6" x2="10" y2="6"/><line x1="14" y1="6" x2="15" y2="6"/><line x1="9" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="15" y2="10"/><line x1="9" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="15" y2="14"/><line x1="9" y1="18" x2="15" y2="18"/></svg></div>
<span class="pib-service-text">Apartment Refurbishments</span>
</div>
<div class="pib-services-item">
<div class="pib-service-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12h18v3a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5v-3z"/><path d="M6 12V5a2 2 0 0 1 2-2h1"/><line x1="6" y1="20" x2="6" y2="22"/><line x1="18" y1="20" x2="18" y2="22"/></svg></div>
<span class="pib-service-text">Bathroom Renovations</span>
</div>
<div class="pib-services-item">
<div class="pib-service-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M2 20h20"/><path d="M3 20V9h18v11"/><path d="M12 3L2 9h20L12 3z"/><line x1="7" y1="9" x2="7" y2="20"/><line x1="12" y1="9" x2="12" y2="20"/><line x1="17" y1="9" x2="17" y2="20"/></svg></div>
<span class="pib-service-text">Period Properties</span>
</div>
<div class="pib-services-item">
<div class="pib-service-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="14" height="6" rx="1.5"/><path d="M17 6h2a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-9v8a1.5 1.5 0 0 1-3 0v-8"/></svg></div>
<span class="pib-service-text">Interior Refurbishments</span>
</div>
</div>
</div>
<div class="pib-col-visual">
<div class="pib-compare-box" style="--pib-pos: 50%;">
<img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury_open_plan_living_dining_room.jpeg" alt="Completed luxury living interior" class="pib-compare-img" loading="lazy" />
<div class="pib-before-wrap">
<img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/open_plan_living_dining_room_renovation_before.jpeg" alt="Living room interior before renovation" class="pib-before-img pib-compare-img" loading="lazy" />
</div>
<div class="pib-compare-divider"><div class="pib-compare-handle">&lsaquo;&rsaquo;</div></div>
<input type="range" min="0" max="100" value="50" class="pib-compare-range" aria-label="Before and after comparison slider" oninput="this.parentNode.style.setProperty('--pib-pos', this.value + '%')" />
<span class="pib-badge-before">BEFORE</span>
<span class="pib-badge-after">AFTER</span>
<div class="pib-quote-overlay">
</div>
</div>
</div>
</div>
<div class="pib-gallery-row">
<div class="pib-gallery-card">
<a href="https://www.oraanj-interiors.co.uk/kitchen-renovation-company/"><div class="pib-gallery-img-box"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury_kitchen_marble_backsplash_island.webp" alt="Kitchen Renovations" class="pib-gallery-img" loading="lazy" /></div></a>
<h3 class="pib-gallery-title">Kitchen Renovation</h3>
</div>
<div class="pib-gallery-card">
<a href="https://www.oraanj-interiors.co.uk/bathroom-renovation-company/"><div class="pib-gallery-img-box"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury_bathroom_freestanding_tub_closeup.jpeg" alt="Bathroom Renovations" class="pib-gallery-img" loading="lazy" /></div></a>
<h3 class="pib-gallery-title">Bathroom Renovations</h3>
</div>
<div class="pib-gallery-card">
<a href="https://www.oraanj-interiors.co.uk/turnkey-interior-design-london/"><div class="pib-gallery-img-box"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/open_plan_kitchen_dining_garden_view.jpeg" alt="Whole-Home Renovations" class="pib-gallery-img" loading="lazy" /></div></a>
<h3 class="pib-gallery-title">Whole-Home Renovations</h3>
</div>
<div class="pib-gallery-card">
<a href="https://www.oraanj-interiors.co.uk/interior-designers-london/"><div class="pib-gallery-img-box"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/apartment-refurbishment.jpeg" alt="Apartment Refurbishments" class="pib-gallery-img" loading="lazy" /></div></a>
<h3 class="pib-gallery-title">Apartment Refurbishments</h3>
</div>
<div class="pib-gallery-card">
<a href="https://www.oraanj-interiors.co.uk/construction-company/"><div class="pib-gallery-img-box"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/period-properties-renovation.jpeg" alt="Period Properties" class="pib-gallery-img" loading="lazy" /></div></a>
<h3 class="pib-gallery-title">Period Properties</h3>
</div>
<div class="pib-gallery-card">
<a href="https://www.oraanj-interiors.co.uk/renovation-company-london/"><div class="pib-gallery-img-box"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/full-interior-renovation.jpeg" alt="Interior Refurbishments" class="pib-gallery-img" loading="lazy" /></div></a>
<h3 class="pib-gallery-title">Interior Refurbishments</h3>
</div>
</div>
<div class="pib-bottom-row">
<div class="pib-cta-cell"><a href="https://www.oraanj-interiors.co.uk/renovation-company-london/" class="pib-cta-btn GlobalFontFamily">Explore Home Renovation <span>&rarr;</span></a></div>
<div class="pib-pillars-wrap">
<div class="pib-pillar-item">
<div class="pib-pillar-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M6 3h12l4 6-10 12L2 9z"/><path d="M2 9h20"/><path d="M10 3v6l-4 12"/><path d="M14 3v6l4 12"/></svg></div>
<span class="pib-pillar-text">THOUGHTFUL PLANNING</span>
</div>
<div class="pib-pillar-item">
<div class="pib-pillar-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="7" r="3.5"/><path d="M5.5 20v-1.5a5.5 5.5 0 0 1 11 0V20"/><circle cx="19" cy="9" r="2.5"/><path d="M17 19.5v-1a4 4 0 0 1 5 0v1"/><circle cx="5" cy="9" r="2.5"/><path d="M7 19.5v-1a4 4 0 0 0-5 0v1"/></svg></div>
<span class="pib-pillar-text">EXPERIENCED DELIVERY TEAM</span>
</div>
<div class="pib-pillar-item">
<div class="pib-pillar-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="m8 16 8-8"/><path d="M12 16h4v-4"/></svg></div>
<span class="pib-pillar-text">INTERIORS THAT WORK IN REAL LIFE</span>
</div>
<div class="pib-pillar-item">
<div class="pib-pillar-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 10L12 3l9 7v11H3V10z"/><line x1="9" y1="21" x2="9" y2="14"/><line x1="15" y1="21" x2="15" y2="14"/><line x1="9" y1="14" x2="15" y2="14"/></svg></div>
<span class="pib-pillar-text">LONDON HOMES OUR SPECIALISM</span>
</div>
</div>
</div>
</div>
</section>





<section class="fep-case-study-wrap">
<div class="fep-container">
<header class="fep-header">
<span class="fep-eyebrow">SEE HOW AN ORAANJ PROJECT COMES TOGETHER</span>
<h2 class="fep-main-title">From Existing Property to Finished Interior</h2>
<div class="fep-accent-line"></div>
</header>
<div class="fep-steps-grid">
<article class="fep-step-card">
<div class="fep-card-top-tag">
<span class="fep-step-num">01</span>
<span class="fep-step-name">BEFORE</span>
</div>
<div class="fep-img-wrap"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/living_room_renovation_before_empty_site.jpeg" alt="Original property before renovation" class="fep-step-img" loading="lazy" /></div>
<h3 class="fep-card-title">The original property.</h3>
<p class="fep-card-desc">The layout felt closed off, the living and dining spaces were separate and the interiors were dated.</p>
</article>
<article class="fep-step-card">
<div class="fep-card-top-tag">
<span class="fep-step-num">02</span>
<span class="fep-step-name">SPACE PLANNING</span>
</div>
<div class="fep-img-wrap"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/living_dining_interior_floor_plan.jpeg" alt="Proposed architectural floor plan" class="fep-step-img" loading="lazy" /></div>
<h3 class="fep-card-title">Proposed floor plan.</h3>
<p class="fep-card-desc">We removed the dividing wall to create an open-plan living, dining and kitchen space with better flow and natural light.</p>
</article>
<article class="fep-step-card">
<div class="fep-card-top-tag">
<span class="fep-step-num">03</span>
<span class="fep-step-name">DESIGN</span>
</div>
<div class="fep-img-wrap"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/3d-render.jpeg" alt="Approved 3D CGI visual" class="fep-step-img" loading="lazy" /></div>
<h3 class="fep-card-title">Approved CGI.</h3>
<p class="fep-card-desc">We used warm, natural materials, a calm neutral palette and layered lighting to create a modern, welcoming space.</p>
</article>
<article class="fep-step-card">
<div class="fep-card-top-tag">
<span class="fep-step-num">04</span>
<span class="fep-step-name">TECHNICAL DEVELOPMENT</span>
</div>
<div class="fep-img-wrap"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/technical-joinery-design.jpeg" alt="Joinery elevation technical drawing" class="fep-step-img" loading="lazy" /></div>
<h3 class="fep-card-title">Joinery elevation.</h3>
<p class="fep-card-desc fep-desc-offset">Detailed drawings were produced for the media wall, including storage, shelving and lighting, to ensure accuracy on site.</p>
</article>
<article class="fep-step-card">
<div class="fep-card-top-tag">
<span class="fep-step-num">05</span>
<span class="fep-step-name">ON SITE</span>
</div>
<div class="fep-img-wrap"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/open_plan_living_dining_room_renovation_before.jpeg" alt="Renovation in progress on site" class="fep-step-img" loading="lazy" /></div>
<h3 class="fep-card-title">Renovation in progress.</h3>
<p class="fep-card-desc fep-desc-offset">The space was stripped back, structural works completed and new services, joinery and finishes installed in line with the design.</p>
</article>
<article class="fep-step-card">
<div class="fep-card-top-tag">
<span class="fep-step-num">06</span>
<span class="fep-step-name">FINISHED INTERIOR</span>
</div>
<div class="fep-img-wrap"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury_open_plan_living_dining_room.jpeg" alt="Finished interior home" class="fep-step-img" loading="lazy" /></div>
<h3 class="fep-card-title">A transformed home.</h3>
<p class="fep-card-desc fep-desc-offset">The result is a light, open and connected space designed for modern family living.</p>
</article>
</div>
<div class="fep-bottom-bar">
<div class="fep-meta-group">
<div class="fep-meta-item">
<div class="fep-meta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
<div class="fep-meta-text">
<span class="fep-meta-label">Project</span>
<span class="fep-meta-val">Family Home Renovation</span>
</div>
</div>
<div class="fep-meta-item">
<div class="fep-meta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"/><line x1="8" y1="2" x2="8" y2="18"/><line x1="16" y1="6" x2="16" y2="22"/></svg></div>
<div class="fep-meta-text">
<span class="fep-meta-label">Location</span>
<span class="fep-meta-val">Hampstead, London</span>
</div>
</div>
<div class="fep-meta-item">
<div class="fep-meta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9.5L12 3l9 6.5V20a1 1 0 0 1-1 1h-5v-6h-6v6H4a1 1 0 0 1-1-1V9.5z"/></svg></div>
<div class="fep-meta-text">
<span class="fep-meta-label">Property</span>
<span class="fep-meta-val">Period House</span>
</div>
</div>
<!--<div class="fep-meta-item fep-meta-scope">-->
<!--<div class="fep-meta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="m14.7 6.3 3 3-9.4 9.4H5.3v-3z"/><path d="m18 3 3 3-2 2-3-3z"/></svg></div>-->
<!--<div class="fep-meta-text">-->
<!--<span class="fep-meta-label">Oraanj Scope</span>-->
<!--<span class="fep-meta-val">Interior Design, Technical Design, Renovation, Bespoke Joinery, FF&amp;E, Project Management</span>-->
<!--</div>-->
<!--</div>-->
</div>
<div class="fep-btn-wrap"><a href="https://brand.oraanj-interiors.co.uk/widget/booking/MdZ4TIbvCtyLERAN00H5" target="_blank" rel="noopener noreferrer" class="fep-cta-btn GlobalFontFamily">Discuss Your Project</a></div>
</div>
</div>
</section>












<div class="oraanj-expertise-container">
  <div class="oraanj-expertise-header">
    <div class="oraanj-expertise-line"></div>
    <h3 class="oraanj-expertise-title">Interior Design Across Every Sector</h3>
    <div class="oraanj-expertise-line"></div>
  </div>
  <div class="oraanj-expertise-row">

    <!-- Item 1: Residential Interior -->
    <div class="oraanj-expertise-col">
      <a href="https://www.oraanj-interiors.co.uk/residential-interior-design-london/">
        <img class="oraanj-expertise-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury-neutral-living-room-interior.jpg-e1790961977640.jpeg" alt="Residential Interior" />
      </a>
      <h3 class="oraanj-expertise-heading">
        <a href="https://www.oraanj-interiors.co.uk/residential-interior-design-london/">Residential Interior</a>
      </h3>
      <p class="oraanj-expertise-text">We design bespoke residential interiors for homes across London. Our team combines space planning, materials, furniture and practical design to create comfortable, functional and beautifully finished homes.</p>
    </div>

    <!-- Item 2: Commercial Interior -->
    <div class="oraanj-expertise-col">
      <a href="https://www.oraanj-interiors.co.uk/commercial-interior-design/">
        <img class="oraanj-expertise-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/modern-salon-interior-greenery.jpeg" alt="Commercial Interior" />
      </a>
      <h3 class="oraanj-expertise-heading">
        <a href="https://www.oraanj-interiors.co.uk/commercial-interior-design/">Commercial Interior</a>
      </h3>
      <p class="oraanj-expertise-text">We design commercial interiors for businesses across London. Our team creates practical, well-planned spaces that reflect your brand, support daily operations and provide a positive experience for staff and customers.</p>
    </div>

    <!-- Item 3: Restaurant Interior -->
    <div class="oraanj-expertise-col">
      <a href="https://www.oraanj-interiors.co.uk/restaurant-interior-design-london/">
        <img class="oraanj-expertise-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/terracotta-arched-window-restaurant-interior.jpeg" alt="Restaurant Interior" />
      </a>
      <h3 class="oraanj-expertise-heading">
        <a href="https://www.oraanj-interiors.co.uk/restaurant-interior-design-london/">Restaurant Interior</a>
      </h3>
      <p class="oraanj-expertise-text">We design restaurant interiors that balance ambience, operational efficiency and memorable dining experiences. Our team plans seating layouts, lighting, acoustics and finishes to help maximise covers and support seamless service.</p>
    </div>

    <!-- Item 4: Cafe Interior -->
<div class="oraanj-expertise-col">
      <a href="https://www.oraanj-interiors.co.uk/cafe-interior-designer">
<img class="oraanj-expertise-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/modern-warm-wood-cafe-counter.webp" alt="Cafe Interior" />
</a>
<h3 class="oraanj-expertise-heading"><a href="https://www.oraanj-interiors.co.uk/cafe-interior-designer/">Cafe Interior</a></h3>
<p class="oraanj-expertise-text">We design café interiors that combine atmosphere, customer flow and everyday functionality. Our team plans layouts, materials, lighting and finishes to create welcoming spaces that customers enjoy spending time in.</p>

</div>

    <!-- Item 5: Office Interior -->
    <div class="oraanj-expertise-col">
      <a href="https://www.oraanj-interiors.co.uk/office-interior-design-london/">
        <img class="oraanj-expertise-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/modern-office-workstation-interior.jpeg" alt="Office Interior" />
      </a>
      <h3 class="oraanj-expertise-heading">
        <a href="https://www.oraanj-interiors.co.uk/office-interior-design-london/">Office Interior</a>
      </h3>
      <p class="oraanj-expertise-text">We design office interiors that support productivity, comfort and collaboration. Our team plans layouts, lighting, furniture and finishes to create professional workspaces suited to the needs of your business and team.</p>
    </div>

  </div>
</div>



<!--<div class="oraanj-expertise-container">-->
<!--  <div class="oraanj-expertise-header">-->
<!--    <div class="oraanj-expertise-line"></div>-->
<!--    <h2 class="oraanj-expertise-title">Our Specialist Services</h2>-->
<!--    <div class="oraanj-expertise-line"></div>-->
<!--  </div>-->
<!--  <div class="oraanj-expertise-row">-->

    <!-- Item 1: Bespoke Joinery -->
<!--    <div class="oraanj-expertise-col">-->
<!--      <a href="https://www.oraanj-interiors.co.uk/custom-furniture-design/">-->
<!--        <img class="oraanj-expertise-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/bespoke-joinery-design-london.webp" alt="Bespoke Joinery" />-->
<!--      </a>-->
<!--      <h3 class="oraanj-expertise-heading">-->
<!--        <a href="https://www.oraanj-interiors.co.uk/custom-furniture-design/">Bespoke Joinery</a>-->
<!--      </h3>-->
<!--      <p class="oraanj-expertise-text">We design bespoke joinery and custom furniture for homes and commercial interiors. Our team creates fitted storage, cabinetry and made-to-measure pieces that maximise space and suit the overall interior design.</p>-->
<!--    </div>-->

    <!-- Item 2: Lighting Design -->
<!--    <div class="oraanj-expertise-col">-->
<!--      <a href="https://www.oraanj-interiors.co.uk/lighting-design/">-->
<!--        <img class="oraanj-expertise-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/lighting-design-london.webp" alt="Lighting Design" />-->
<!--      </a>-->
<!--      <h3 class="oraanj-expertise-heading">-->
<!--        <a href="https://www.oraanj-interiors.co.uk/lighting-design/">Lighting Design</a>-->
<!--      </h3>-->
<!--      <p class="oraanj-expertise-text">We create lighting designs that improve both the look and function of a space. Our team plans architectural and decorative lighting to support the layout, highlight key features and create the right atmosphere.</p>-->
<!--    </div>-->

    <!-- Item 3: FF&E and Procurement -->
<!--    <div class="oraanj-expertise-col">-->
<!--      <a href="https://www.oraanj-interiors.co.uk/procurement/">-->
<!--        <img class="oraanj-expertise-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/FFE-and-Procurement.webp" alt="FF&amp;E and Procurement" />-->
<!--      </a>-->
<!--      <h3 class="oraanj-expertise-heading">-->
<!--        <a href="https://www.oraanj-interiors.co.uk/procurement/">FF&amp;E and Procurement</a>-->
<!--      </h3>-->
<!--      <p class="oraanj-expertise-text">We manage furniture, fixtures, equipment and procurement for interior design projects. Our team sources suitable products, coordinates suppliers and manages orders to help keep the project organised, on time and within budget.</p>-->
<!--    </div>-->

    <!-- Item 4: Kitchen Renovation -->
<!--    <div class="oraanj-expertise-col">-->
<!--      <a href="https://www.oraanj-interiors.co.uk/kitchen-renovation-company/">-->
<!--        <img class="oraanj-expertise-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/kitchen-renovation-london.webp" alt="Kitchen Renovation" />-->
<!--      </a>-->
<!--      <h3 class="oraanj-expertise-heading">-->
<!--        <a href="https://www.oraanj-interiors.co.uk/kitchen-renovation-company/">Kitchen Renovation</a>-->
<!--      </h3>-->
<!--      <p class="oraanj-expertise-text">We design and renovate kitchens around practical layouts, quality materials and everyday living. From cabinetry and finishes to lighting, installation and project coordination, our team manages the transformation from design through to completion.</p>-->
<!--    </div>-->

    <!-- Item 5: Bathroom Renovation -->
<!--    <div class="oraanj-expertise-col">-->
<!--      <a href="https://www.oraanj-interiors.co.uk/bathroom-renovation-company/">-->
<!--        <img class="oraanj-expertise-img" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/bathroom-renovation-london.webp" alt="Bathroom Renovation" />-->
<!--      </a>-->
<!--      <h3 class="oraanj-expertise-heading">-->
<!--        <a href="https://www.oraanj-interiors.co.uk/bathroom-renovation-company/">Bathroom Renovation</a>-->
<!--      </h3>-->
<!--      <p class="oraanj-expertise-text">We design and renovate bathrooms with careful attention to layout, storage, sanitaryware, materials and lighting, managing the project from initial design through to installation and completion.</p>-->
<!--    </div>-->

<!--  </div>-->
<!--</div>-->



<section class="oj-about-section">
    <div class="oj-about-container">
        
        <!-- Left: Dual Staggered Images (Right image up, Left image down) -->
        <div class="oj-about-images-wrap">
            <div class="oj-about-img-box oj-img-left">
                <img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/modern-classic-green-living-room.webp" 
                     alt="Luxury interior design by Oraanj Interiors London" 
                     loading="lazy">
            </div>
            <div class="oj-about-img-box oj-img-right">
                <img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/Rachana-Gupta-Founder-of-Oraanj-Interiors.jpeg" 
                     alt="Rachana Gupta - Founder of Oraanj Interiors London" 
                     loading="lazy">
            </div>
        </div>

        <!-- Right: Content Card (#FFF6F2) -->
        <div class="oj-about-content-card">
            
            <span class="oj-about-eyebrow">THE COMPANY</span>

            <h2 class="oj-about-heading">
                Meet Rachana Gupta <br>
                Founder & Creative Director
            </h2>

            <div class="oj-about-text">
                <p>
                    With over 20 years of experience, Rachana Gupta is the Founder and Creative Director of Oraanj Interiors. An award-winning interior designer in London, she was honoured with the prestigious <strong>Interior Designer of the Year - Eastern Eye Property Awards 2025</strong> for design excellence.
                </p>

                <p>
                    Leading a multidisciplinary team of designers and architects, Rachana crafts bespoke residential, workplace, and commercial spaces across London and the UK, delivering thoughtfully resolved interiors that blend timeless luxury with modern living.
                </p>
            </div>

            <!-- Button using El Messiri -->
            <div class="oj-about-btn-wrap">
                <a href="https://brand.oraanj-interiors.co.uk/widget/booking/MdZ4TIbvCtyLERAN00H5" 
                   target="_blank" 
                   rel="noopener noreferrer" 
                   class="banner_btn oj-about-btn">
                    Discuss Your Project with Our Team
                </a>
            </div>

        </div>

    </div>
</section>









<!-- <section class="ppa-section-wrap">
<div class="ppa-container">
<div class="ppa-inner-card">
<div class="ppa-row">
<div class="ppa-col-content">
<span class="ppa-eyebrow">CONFIDENTIAL COMMISSIONS</span>
<div class="ppa-accent-line"></div>
<h2 class="ppa-main-title">Private Residential &amp; International Projects</h2>
<p class="ppa-desc-p">Oraanj designs and delivers private residences, commercial spaces, and overseas properties across the UK and internationally. To protect our clients' privacy and architectural exclusivity, our most distinctive commissions are curated within a confidential archive.</p>
<p class="ppa-sub-p">We share select completed projects, joinery details, and technical drawings directly with prospective clients subject to appropriate confidentiality arrangements.</p>
<div class="ppa-btn-wrap">
<a href="https://brand.oraanj-interiors.co.uk/widget/form/zN8fjBGceiWPM6J5W60G" target="_blank" rel="noopener noreferrer" class="ppa-cta-btn">Request Private Portfolio Access </a>
</div>
</div>
<div class="ppa-col-visual">
<a href="https://brand.oraanj-interiors.co.uk/widget/form/zN8fjBGceiWPM6J5W60G" target="_blank" rel="noopener noreferrer" class="ppa-visual-link">
<img loading="lazy" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/06/Modern-luxury-apartment-with-city-view.webp" alt="View Exclusive Private Portfolios" class="ppa-hero-img" />
<div class="ppa-visual-badge">
<span class="ppa-badge-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg></span>
</div>
<div class="ppa-visual-overlay">
<h3 class="ppa-overlay-title GlobalFontFamily">View Exclusive Portfolios</h3>
<span class="ppa-overlay-sub">ACCESS BY INVITATION &rarr;</span>
</div>
</a>
</div>
</div>
</div>
</div>
</section>


 -->






<section class="ipo-section-wrap">
<div class="ipo-container">
<div class="ipo-row">
<div class="ipo-col-left">
<div class="ipo-eyebrow-wrap">
<span class="ipo-eyebrow">Your London Property. Managed While You're Away.</span>
<div class="ipo-gold-divider"></div>
</div>
<h2 class="ipo-main-title">Interior Design for International Property Owners</h2>
<p class="ipo-lead-p">Oraanj works with overseas clients who own homes and investment properties in London.</p>
<p class="ipo-sub-p">Depending on the project, we can coordinate:</p>
<div class="ipo-services-grid">
<div class="ipo-service-card">
<div class="ipo-service-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg></div>
<span class="ipo-service-text">Interior Design</span>
</div>
<div class="ipo-service-card">
<div class="ipo-service-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg></div>
<span class="ipo-service-text">Procurement</span>
</div>
<div class="ipo-service-card">
<div class="ipo-service-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg></div>
<span class="ipo-service-text">3D Visualisation</span>
</div>
<div class="ipo-service-card">
<div class="ipo-service-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="3" y1="15" x2="21" y2="15"/><line x1="11" y1="6" x2="13" y2="6"/><line x1="11" y1="12" x2="13" y2="12"/><line x1="11" y1="18" x2="13" y2="18"/></svg></div>
<span class="ipo-service-text">Bespoke Joinery</span>
</div>
<div class="ipo-service-card">
<div class="ipo-service-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="8.01" y2="10"/><line x1="12" y1="10" x2="12.01" y2="10"/><line x1="16" y1="10" x2="16.01" y2="10"/><line x1="8" y1="14" x2="8.01" y2="14"/><line x1="12" y1="14" x2="12.01" y2="14"/><line x1="16" y1="14" x2="16.01" y2="14"/><line x1="8" y1="18" x2="8.01" y2="18"/><line x1="12" y1="18" x2="12.01" y2="18"/><line x1="16" y1="18" x2="16.01" y2="18"/></svg></div>
<span class="ipo-service-text">Technical Design</span>
</div>
<div class="ipo-service-card">
<div class="ipo-service-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
<span class="ipo-service-text">Project Management</span>
</div>
<div class="ipo-service-card">
<div class="ipo-service-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="m15 12-8.5 8.5a2.12 2.12 0 1 1-3-3L12 9"/><path d="M17.64 4.36 20.47 7.2a2 2 0 0 1 0 2.83l-2.12 2.12-5.66-5.66 2.12-2.12a2 2 0 0 1 2.83 0z"/></svg></div>
<span class="ipo-service-text">Renovation</span>
</div>
<div class="ipo-service-card">
<div class="ipo-service-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M19 9V6a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v3"/><path d="M3 11v5a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3v-5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2z"/><line x1="6" y1="19" x2="6" y2="21"/><line x1="18" y1="19" x2="18" y2="21"/></svg></div>
<span class="ipo-service-text">Furniture Installation</span>
</div>
</div>
<div class="ipo-body-notes">
<p>Project communication can be managed remotely through agreed presentations, meetings, drawings and progress updates.</p>
<p>For clients who require a more complete service, our turnkey approach can continue through furnishing, installation and final handover.</p>
</div>
<div class="ipo-cta-wrap"><a href="https://www.oraanj-interiors.co.uk/international-interior-design-london/" class="ipo-btn GlobalFontFamily">Explore International Interior Design </a></div>
</div>
<div class="ipo-col-right">
<div class="ipo-hero-visual">
<img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/interior-design-for-international-clients.jpeg" alt="Client managing London property remotely" class="ipo-hero-img" loading="lazy" />
<div class="ipo-badge-overlay">
<!--<span class="ipo-badge-line"></span>-->
</div>
<div class="ipo-quote-overlay">
<!--<div class="ipo-quote-line"></div>-->
</div>
</div>
<div class="ipo-steps-grid">
<div class="ipo-step-card">
<div class="ipo-step-img-wrap"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/design-and-visualise.jpeg" alt="Design and Visualise" class="ipo-step-img" loading="lazy" /></div>
<h4 class="ipo-step-title">DESIGN &amp; VISUALISE</h4>
<p class="ipo-step-desc">Clear proposals and realistic visuals.</p>
</div>
<div class="ipo-step-card">
<div class="ipo-step-img-wrap"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/design-and-manage.jpeg" alt="Deliver and Manage" class="ipo-step-img" loading="lazy" /></div>
<h4 class="ipo-step-title">DELIVER &amp; MANAGE</h4>
<p class="ipo-step-desc">Trusted contractors and regular updates.</p>
</div>
<div class="ipo-step-card">
<div class="ipo-step-img-wrap"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/complete-home-designed.jpeg" alt="A Home Ready For You" class="ipo-step-img" loading="lazy" /></div>
<h4 class="ipo-step-title">A HOME READY FOR YOU</h4>
<p class="ipo-step-desc">Furnished, styled and ready to enjoy.</p>
</div>
</div>
<div class="ipo-bottom-tagline">
<div class="ipo-line"></div>
<span class="ipo-tagline-text">LONDON. FROM ANYWHERE.</span>
<div class="ipo-line"></div>
</div>
</div>
</div>
</div>
</section>








<section class="wcs-testimonials-section">
<div class="wcs-container">
<header class="wcs-header">
<span class="wcs-eyebrow">WHAT OUR CLIENTS SAY</span>
<h2 class="wcs-title">Real People. Real Experiences.</h2>
<div class="wcs-title-accent-line"></div>
<p class="wcs-lead-text">From homes to workplaces and hospitality spaces, our clients’ feedback reflects what it's like to work with Oraanj.</p>
</header>
<div class="wcs-reviews-grid">
<article class="wcs-card">
<div class="wcs-img-wrap"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury-dining-room-interior-design-by-oraanj-e1790962056553.jpeg" alt="Residential Living Room" class="wcs-img" loading="lazy" /></div>
<div class="wcs-card-body">
<span class="wcs-category">RESIDENTIAL</span>
<div class="wcs-quote-symbol">&ldquo;</div>
<p class="wcs-quote-text">Oraanj did a great job with our home. They listened to what we wanted and came back with ideas that were practical but still looked really good. We're very happy with the finished result.&rdquo;</p>
<div class="wcs-card-footer">
<div class="wcs-author-line"></div>
<h4 class="wcs-author-name">NIC SCLZUMAN</h4>
<span class="wcs-author-loc">BARNET, LONDON</span>
</div>
</div>
</article>
<article class="wcs-card">
<div class="wcs-img-wrap"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury-modern-salon-interior1.jpeg" alt="Commercial Meeting Office" class="wcs-img" loading="lazy" /></div>
<div class="wcs-card-body">
<span class="wcs-category">COMMERCIAL</span>
<div class="wcs-quote-symbol">&ldquo;</div>
<p class="wcs-quote-text">We worked with Oraanj on our office and had a really good experience. They coordinated everything well with the contractors and suppliers, kept things moving and delivered a space that works really well for us.&rdquo;</p>
<div class="wcs-card-footer">
<div class="wcs-author-line"></div>
<h4 class="wcs-author-name">ADITYA DUGAR</h4>
<span class="wcs-author-loc">HIGHBURY, LONDON</span>
</div>
</div>
</article>
<article class="wcs-card">
<div class="wcs-img-wrap"><img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury-hotel-lounge-seating.jpeg" alt="Hospitality Restaurant Interior" class="wcs-img" loading="lazy" /></div>
<div class="wcs-card-body">
<span class="wcs-category">HOSPITALITY</span>
<div class="wcs-quote-symbol">&ldquo;</div>
<p class="wcs-quote-text">The Oraanj team were hardworking and helpful throughout our restaurant project. They kept everything organised and made the whole process much easier for us.&rdquo;</p>
<div class="wcs-card-footer">
<div class="wcs-author-line"></div>
<h4 class="wcs-author-name">YUSIF KHAN</h4>
<span class="wcs-author-loc">ILFORD, LONDON</span>
</div>
</div>
</article>
</div>
<div class="wcs-cta-wrap"><a href="https://share.google/XSAzTSdud9gZsIUjU" class="wcs-btn GlobalFontFamily">Read More Client Reviews</a></div>
<div class="wcs-trust-bar">
<div class="wcs-bar-line"></div>
<span class="wcs-trust-text">TRUSTED BY CLIENTS ACROSS LONDON</span>
<div class="wcs-bar-line"></div>
</div>
<div class="wcs-pillars-row">
<div class="wcs-pillar-item">
<div class="wcs-pillar-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></div>
<span class="wcs-pillar-label">BEAUTIFUL HOMES</span>
</div>
<div class="wcs-pillar-item">
<div class="wcs-pillar-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></div>
<span class="wcs-pillar-label">BETTER WORKPLACES</span>
</div>
<div class="wcs-pillar-item">
<div class="wcs-pillar-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2v20"></path><path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7"></path><path d="M4 2v7c0 1.1.9 2 2 2h2c1.1 0 2-.9 2-2V2"></path><path d="M7 2v20"></path></svg></div>
<span class="wcs-pillar-label">MEMORABLE SPACES</span>
</div>
</div>
</div>
</section>







<section class="bws-section-wrap">
<div class="bws-container">
<header class="bws-header">
<span class="bws-eyebrow">BRANDS WE SPECIFY &amp; SOURCE</span>
<div class="bws-accent-line"></div>
<h2 class="bws-main-title">Exceptional Brands. Considered for Every Project.</h2>
<p class="bws-lead-text">For projects involving furniture and FF&amp;E, we source from established furniture, lighting and interior brands according to the design, budget and individual project requirements.</p>
</header>
<div class="bws-brand-grid">
<div class="bws-brand-card"><img loading="lazy" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/minotti.webp" alt="Minotti" class="bws-brand-img" /></div>
<div class="bws-brand-card"><img loading="lazy" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/poliform.webp" alt="Poliform" class="bws-brand-img" /></div>
<div class="bws-brand-card"><img loading="lazy" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/giorgetti.webp" alt="Giorgetti" class="bws-brand-img" /></div>
<div class="bws-brand-card"><img loading="lazy" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/moltenic-.webp" alt="Molteni &amp; C" class="bws-brand-img" /></div>
<div class="bws-brand-card"><img loading="lazy" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/bb-italia-.webp" alt="B&amp;B Italia" class="bws-brand-img" /></div>
<div class="bws-brand-card"><img loading="lazy" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/flexform-.webp" alt="Flexform" class="bws-brand-img" /></div>
<div class="bws-brand-card"><img loading="lazy" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/Cassina.webp" alt="Cassina" class="bws-brand-img" /></div>
<div class="bws-brand-card"><img loading="lazy" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/poltrona-frau-.webp" alt="Poltrona Frau" class="bws-brand-img" /></div>
<div class="bws-brand-card"><img loading="lazy" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/gallottiradice-.webp" alt="Gallotti &amp; Radice" class="bws-brand-img" /></div>
<div class="bws-brand-card"><img loading="lazy" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/promemoria-.webp" alt="Promemoria" class="bws-brand-img" /></div>
<div class="bws-brand-card"><img loading="lazy" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/baxter.webp" alt="Baxter" class="bws-brand-img" /></div>
<div class="bws-brand-card"><img loading="lazy" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/living-divani.webp" alt="Living Divani" class="bws-brand-img" /></div>
<div class="bws-brand-card"><img loading="lazy" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/rimadesio-.webp" alt="Rimadesio" class="bws-brand-img" /></div>
<div class="bws-brand-card"><img loading="lazy" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/edra.webp" alt="Edra" class="bws-brand-img" /></div>
<div class="bws-brand-card"><img loading="lazy" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/meriniani.webp" alt="Meridiani" class="bws-brand-img" /></div>
<div class="bws-brand-card"><img loading="lazy" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/liaigre.webp" alt="Liaigre" class="bws-brand-img" /></div>
</div>
<div class="bws-bottom-bar">
<div class="bws-bar-line"></div>
<span class="bws-tagline-text">QUALITY FURNITURE. TIMELESS INTERIORS.</span>
<div class="bws-bar-line"></div>
</div>
</div>
</section>





	

	



<section class="wco-section-wrap">
<div class="wco-container">
<div class="wco-main-row">
<div class="wco-col-left">
<div class="wco-image-box">
<img loading="lazy" src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury-walnut-built-in-display-shelving.jpeg" alt="Luxury London living interior" class="wco-hero-img" />
<div class="wco-image-overlay">
</div>
</div>
</div>
<div class="wco-col-right">
<div class="wco-header">
<span class="wco-eyebrow">WHY CLIENTS CHOOSE ORAANJ</span>
<div class="wco-accent-line"></div>
<h2 class="wco-main-title">Experience. Expertise. Real Results.</h2>
<p class="wco-subtitle">A trusted interior design studio delivering exceptional interiors across London for over 20 years.</p>
</div>
<div class="wco-features-grid">
<div class="wco-feature-item">
<div class="wco-feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M6 3h12l4 6-10 12L2 9z"/><path d="M2 9h20"/><path d="M10 3v6l-4 12"/><path d="M14 3v6l4 12"/></svg></div>
<div class="wco-feature-content">
<h3 class="wco-feature-title">More Than 20 Years of Experience</h3>
<p class="wco-feature-desc">Interior design experience across residential and commercial projects.</p>
</div>
</div>
<div class="wco-feature-item">
<div class="wco-feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9.5L12 3l9 6.5V20a1 1 0 0 1-1 1h-5v-6h-6v6H4a1 1 0 0 1-1-1V9.5z"/></svg></div>
<div class="wco-feature-content">
<h3 class="wco-feature-title">Design &amp; Delivery</h3>
<p class="wco-feature-desc">The option to continue from interior design into renovation and project delivery.</p>
</div>
</div>
<div class="wco-feature-item">
<div class="wco-feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
<div class="wco-feature-content">
<h3 class="wco-feature-title">London Property Experience</h3>
<p class="wco-feature-desc">Experience working with apartments, family homes, period properties and commercial premises.</p>
</div>
</div>
<div class="wco-feature-item">
<div class="wco-feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg></div>
<div class="wco-feature-content">
<h3 class="wco-feature-title">Bespoke Design</h3>
<p class="wco-feature-desc">Layouts, joinery, furniture and finishes developed around the individual property.</p>
</div>
</div>
<div class="wco-feature-item">
<div class="wco-feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="2" width="16" height="20" rx="1"/><line x1="9" y1="6" x2="10" y2="6"/><line x1="14" y1="6" x2="15" y2="6"/><line x1="9" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="15" y2="10"/><line x1="9" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="15" y2="14"/><line x1="9" y1="18" x2="15" y2="18"/></svg></div>
<div class="wco-feature-content">
<h3 class="wco-feature-title">Residential &amp; Commercial</h3>
<p class="wco-feature-desc">One studio working across homes, workplaces and hospitality interiors.</p>
</div>
</div>
<div class="wco-feature-item">
<div class="wco-feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"/></svg></div>
<div class="wco-feature-content">
<h3 class="wco-feature-title">Turnkey Project Delivery</h3>
<p class="wco-feature-desc">Complete coordination from initial space planning through to furnishing, styling and final handover.</p>
</div>
</div>
<div class="wco-feature-item">
<div class="wco-feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="8.01" y2="10"/><line x1="12" y1="10" x2="12.01" y2="10"/><line x1="16" y1="10" x2="16.01" y2="10"/><line x1="8" y1="14" x2="8.01" y2="14"/><line x1="12" y1="14" x2="12.01" y2="14"/><line x1="16" y1="14" x2="16.01" y2="14"/><line x1="8" y1="18" x2="8.01" y2="18"/><line x1="12" y1="18" x2="12.01" y2="18"/><line x1="16" y1="18" x2="16.01" y2="18"/></svg></div>
<div class="wco-feature-content">
<h3 class="wco-feature-title">Transparent Costing</h3>
<p class="wco-feature-desc">Detailed specifications, transparent procurement and clear cost reporting at every stage.</p>
</div>
</div>
<div class="wco-feature-item">
<div class="wco-feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
<div class="wco-feature-content">
<h3 class="wco-feature-title">Dedicated Director Oversight</h3>
<p class="wco-feature-desc">Direct leadership from an experienced director ensuring quality, consistency and personal attention.</p>
</div>
</div>
<div class="wco-feature-item">
<div class="wco-feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg></div>
<div class="wco-feature-content">
<h3 class="wco-feature-title">Curated Material Sourcing</h3>
<p class="wco-feature-desc">Privileged access to leading European design houses, bespoke fabricators and artisan makers.</p>
</div>
</div>
</div>
<div class="wco-award-banner">
<div class="wco-award-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.45 1-1 1H8c-.55 0-1 .45-1 1v1c0 .55.45 1 1 1h8c.55 0 1-.45 1-1v-1c0-.55-.45-1-1-1h-1c-.55 0-1-.45-1-1v-2.34"/><path d="M18 4H6v7a6 6 0 0 0 12 0V4z"/></svg></div>
<div class="wco-award-content">
<h4 class="wco-award-title">Award-Winning Design</h4>
<p class="wco-award-desc">Industry recognition including Interior Designer of the Year at the Eastern Eye Property Awards 2025.</p>
</div>
</div>
</div>
</div>
<div class="wco-footer-row">
<span class="wco-footer-tagline">INTERIORS THAT WORK IN REAL LIFE</span>
<div class="wco-footer-line"></div>
<a href="https://brand.oraanj-interiors.co.uk/widget/booking/MdZ4TIbvCtyLERAN00H5" target="_blank" rel="noopener noreferrer" class="wco-discuss-link">DISCUSS YOUR PROJECT <span>&rarr;</span></a>
</div>
</div>
</section>








<section class="tup-section-wrap">
<div class="tup-container">
<div class="tup-row">
<div class="tup-col-left">
<div>
<span class="tup-eyebrow">PLANNING AN INTERIOR DESIGN OR RENOVATION PROJECT?</span>
<div class="tup-accent-line"></div>
<h2 class="tup-main-title">Tell Us About Your Property</h2>
<p class="tup-lead-p">Whether you need interior design alone or want Oraanj to take the project through renovation and completion, start by telling us:</p>
<div class="tup-list">
<div class="tup-list-item">
<div class="tup-list-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
<span class="tup-list-text">Where the property is</span>
</div>
<div class="tup-list-item">
<div class="tup-list-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9.5L12 3l9 6.5V20a1 1 0 0 1-1 1h-5v-6h-6v6H4a1 1 0 0 1-1-1V9.5z"/></svg></div>
<span class="tup-list-text">What you would like to change</span>
</div>
<div class="tup-list-item">
<div class="tup-list-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/><path d="M9 21V9"/></svg></div>
<span class="tup-list-text">Approximate property size</span>
</div>
<div class="tup-list-item">
<div class="tup-list-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="8" cy="8" r="6"/><path d="M18.09 10.37A6 6 0 1 1 10.34 18"/><path d="M7 6h1v4"/><path d="m16.71 13.88.7.71-2.82 2.82"/></svg></div>
<span class="tup-list-text">Your expected budget</span>
</div>
<div class="tup-list-item">
<div class="tup-list-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
<span class="tup-list-text">Your target completion date</span>
</div>
<div class="tup-list-item">
<div class="tup-list-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="9" y1="13" x2="15" y2="13"/><line x1="9" y1="17" x2="13" y2="17"/></svg></div>
<span class="tup-list-text">Whether you already have plans or a contractor</span>
</div>
</div>
<p class="tup-closing-p">Our team can review your requirements and discuss the right way forward.</p>
<p class="tup-closing-p">Book a free consultation today and discuss your project with our construction team.</p>
<a class="tup-closing-p" href="tel:+447448803051">+44 (0) 7448 803051</a>
</div>
<div class="tup-left-tagline">BEAUTIFUL SPACES. WELL MANAGED.</div>
</div>
<div class="tup-col-mid">
<div class="tup-hero-box">
<img src="https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/09/luxury-living-room-interior-design.jpeg" alt="Luxury London residence hallway and interior" class="tup-hero-img" loading="lazy" />
</div>
</div>
<div class="tup-col-right">
<div class="tup-form-card">
<span class="tup-form-eyebrow">GET STARTED</span>
<div class="tup-form-accent"></div>
<h3 class="tup-form-title">Request Your Free Design Plan</h3>
<p class="tup-form-sub">Complete the form and our team will be in touch to discuss your project.</p>
<div class="tup-form-embed home_form"><?php echo do_shortcode('[common_section]'); ?></div>
<span class="tup-privacy-note">We respect your privacy. Your information will only be used to discuss your project.</span>
</div>
</div>
</div>
</div>
</section>






<div class="home_faq_section">
	<div class="container">
<div class="banner_bottom_section_heading text-center" style="color: #FFFFFF !important;">FAQs About Interior Design & Design and Build in London</div>		
		<div class="row justify-content-center mt-4">
			<div class="col-lg-7 home_faq_right">
                <?php echo do_shortcode('[accordion]

[toggle title="Do you provide both interior design and Design & Build services in London?" state="opened"]
Yes. Oraanj can manage your project from the initial interior design and space planning through to renovation, refurbishment, procurement, installation and final completion. Clients can appoint us for design services alone or for a complete Design & Build service where we coordinate the transformation from concept through to delivery.
[/toggle]

[toggle title="What is included in Oraanj\'s Design & Build service?"]
Our Design & Build service can include interior architecture, space planning, detailed design, lighting and electrical planning, bespoke joinery, material and finish selection, procurement, renovation and refurbishment works, contractor coordination, installation and project management. The exact scope is tailored to the property and the client\'s requirements.
[/toggle]

[toggle title="Do you manage the renovation and building work as well as the interior design?"]
Yes. This is an important part of Oraanj\'s service. We don\'t simply produce a design and leave the client to coordinate its implementation. Where appointed for the complete project, we manage the renovation and refurbishment process, coordinate the relevant trades and suppliers, oversee procurement and installation, and manage the project through to completion.
[/toggle]

[toggle title="What types of properties do you design and renovate in London?"]
We work across residential, commercial and hospitality interiors, including London apartments, houses and other existing properties requiring interior transformation. Our services can range from individual interior design requirements to substantial refurbishment and complete Design & Build projects.
[/toggle]

[toggle title="How much does an interior design or Design & Build project cost in London?"]
The cost depends on the size of the property, scope of design, level of specification and extent of renovation required. Design fees and full Design & Build budgets are therefore assessed according to the individual project. Following an initial discussion, we can advise on the most appropriate service and next steps for your property.
[/toggle]

[toggle title="Can you manage a London renovation for an overseas or international client?"]
Yes. Oraanj can act as the London-based design and project-delivery partner for clients who are overseas or unable to be present throughout the project. Depending on the agreed scope, we can coordinate design decisions, procurement, contractors, site progress, installation and project management through to completion.
[/toggle]

[toggle title="How do I start an interior design or Design & Build project with Oraanj?"]
Start by discussing your property, requirements, approximate scope and intended timescale with our team. If available, it is helpful to provide floor plans, photographs and information about the property before the initial discussion. We can then recommend the appropriate design or Design & Build route and explain the next stages.
[/toggle]

[/accordion]
');?>

			</div>
		</div>
	</div>
</div>



<!--<script type="application/ld+json">-->
<!--{-->
<!--  "@context": "https://schema.org",-->
<!--  "@graph": [-->
<!--    {-->
<!--      "@type": ["WebSite"],-->
<!--      "@id": "https://www.oraanj-interiors.co.uk/#website",-->
<!--      "url": "https://www.oraanj-interiors.co.uk/",-->
<!--      "name": "Oraanj Interior Design",-->
<!--      "inLanguage": "en-GB",-->
<!--      "publisher": {-->
<!--        "@id": "https://www.oraanj-interiors.co.uk/#organization"-->
<!--      },-->
<!--      "potentialAction": [-->
<!--        {-->
<!--          "@type": "SearchAction",-->
<!--          "target": {-->
<!--            "@type": "EntryPoint",-->
<!--            "urlTemplate": "https://www.oraanj-interiors.co.uk/?s={search_term_string}"-->
<!--          },-->
<!--          "query-input": "required name=search_term_string"-->
<!--        }-->
<!--      ]-->
<!--    },-->
<!--    {-->
<!--      "@type": ["WebPage"],-->
<!--      "@id": "https://www.oraanj-interiors.co.uk/#webpage",-->
<!--      "url": "https://www.oraanj-interiors.co.uk/",-->
<!--      "name": "Interior Designer London | Leading London Interior Design",-->
<!--      "description": "London interior design studio specialising in interior design, renovation, and full project management for homes, offices, and restaurants.",-->
<!--      "inLanguage": "en-GB",-->
<!--      "isPartOf": {-->
<!--        "@id": "https://www.oraanj-interiors.co.uk/#website"-->
<!--      },-->
<!--      "about": {-->
<!--        "@id": "https://www.oraanj-interiors.co.uk/#organization"-->
<!--      }-->
<!--    },-->
<!--    {-->
<!--      "@type": ["Organization"],-->
<!--      "@id": "https://www.oraanj-interiors.co.uk/#organization",-->
<!--      "name": "Oraanj Interior Design",-->
<!--      "url": "https://www.oraanj-interiors.co.uk/",-->
<!--      "email": "info@oraanj-interiors.co.uk",-->
<!--      "logo": {-->
<!--        "@type": "ImageObject",-->
<!--        "@id": "https://www.oraanj-interiors.co.uk/#logo",-->
<!--        "url": "https://www.oraanj-interiors.co.uk/wp-content/uploads/2024/09/logo.png",-->
<!--        "contentUrl": "https://www.oraanj-interiors.co.uk/wp-content/uploads/2024/09/logo.png"-->
<!--      },-->
<!--      "sameAs": [-->
<!--        "https://www.linkedin.com/company/oraanj-interior-design/",-->
<!--        "https://www.instagram.com/oraanjinteriordesigns/",-->
<!--        "https://www.facebook.com/Oraanjinteriordesigns",-->
<!--        "https://www.youtube.com/@oraanjinteriordesign7524",-->
<!--        "https://www.tiktok.com/@oraanjinteriordesign",-->
<!--        "https://www.pinterest.co.uk/OraanjInteriorDesign/",-->
<!--        "https://twitter.com/oraanjinteriors",-->
<!--        "https://www.linkedin.com/in/rachana-oraanj/"-->
<!--      ],-->
<!--      "contactPoint": [-->
<!--        {-->
<!--          "@type": "ContactPoint",-->
<!--          "contactType": "customer service",-->
<!--          "email": "info@oraanj-interiors.co.uk",-->
<!--          "availableLanguage": ["en-GB"],-->
<!--          "areaServed": ["GB"]-->
<!--        }-->
<!--      ]-->
<!--    },-->
<!--    {-->
<!--      "@type": ["LocalBusiness", "ProfessionalService"],-->
<!--      "@id": "https://www.oraanj-interiors.co.uk/#localbusiness",-->
<!--      "name": "Oraanj Interior Design",-->
<!--      "url": "https://www.oraanj-interiors.co.uk/",-->
<!--      "email": "info@oraanj-interiors.co.uk",-->
<!--      "telephone": "+44 7448 803051",-->
<!--      "image": "https://www.oraanj-interiors.co.uk/wp-content/uploads/2024/09/logo.png",-->
<!--      "address": {-->
<!--        "@type": "PostalAddress",-->
<!--        "streetAddress": "2nd Floor, Hygeia House, 66 College Road",-->
<!--        "addressLocality": "Harrow",-->
<!--        "postalCode": "HA1 1BE",-->
<!--        "addressCountry": "GB"-->
<!--      },-->
<!--      "areaServed": [-->
<!--        {-->
<!--          "@type": "AdministrativeArea",-->
<!--          "name": "London"-->
<!--        },-->
<!--        {-->
<!--          "@type": "Country",-->
<!--          "name": "United Kingdom"-->
<!--        }-->
<!--      ],-->
<!--      "sameAs": [-->
<!--        "https://www.linkedin.com/company/oraanj-interior-design/",-->
<!--        "https://www.instagram.com/oraanjinteriordesigns/",-->
<!--        "https://www.facebook.com/Oraanjinteriordesigns",-->
<!--        "https://www.youtube.com/@oraanjinteriordesign7524",-->
<!--        "https://www.tiktok.com/@oraanjinteriordesign",-->
<!--        "https://www.pinterest.co.uk/OraanjInteriorDesign/",-->
<!--        "https://twitter.com/oraanjinteriors",-->
<!--        "https://www.yelp.co.uk/biz/oraanj-interior-design-harrow-2"-->
<!--      ]-->
<!--    },-->
<!--    {-->
<!--      "@type": "Person",-->
<!--      "@id": "https://www.oraanj-interiors.co.uk/#person-rachana-gupta",-->
<!--      "name": "Rachana Gupta",-->
<!--      "url": "https://www.linkedin.com/in/rachana-oraanj/",-->
<!--      "sameAs": [-->
<!--        "https://www.linkedin.com/in/rachana-oraanj/"-->
<!--      ],-->
<!--      "worksFor": {-->
<!--        "@id": "https://www.oraanj-interiors.co.uk/#organization"-->
<!--      }-->
<!--    }-->
<!--  ]-->
<!--}-->
<!--</script>-->
<!--	<script type="application/ld+json">-->
<!--{-->
<!--  "@context": "https://schema.org",-->
<!--  "@type": "FAQPage",-->
<!--  "@id": "https://www.oraanj-interiors.co.uk/#faq",-->
<!--  "mainEntity": [-->
<!--    {-->
<!--      "@type": "Question",-->
<!--      "name": "How much does an Interior Designer in London cost?",-->
<!--      "acceptedAnswer": {-->
<!--        "@type": "Answer",-->
<!--        "text": "Interior design costs in London depend on the scope of work. At Oraanj Interior Design, design & planning services start from £600 per room, while full-service interior design is typically charged as a fixed fee or 10–15% of the overall project budget. Hourly interior design consultations are also available from £150–£300 per hour."-->
<!--      }-->
<!--    },-->
<!--    {-->
<!--      "@type": "Question",-->
<!--      "name": "What services does an Interior Design Company in London provide?",-->
<!--      "acceptedAnswer": {-->
<!--        "@type": "Answer",-->
<!--        "text": "A professional interior design company in London provides space planning, layout design, lighting design, material selection, bespoke furniture, procurement, and project coordination. Full-service studios also manage suppliers, contractors, and installations from concept to completion."-->
<!--      }-->
<!--    },-->
<!--    {-->
<!--      "@type": "Question",-->
<!--      "name": "What is the difference between an Interior Designer and an Interior Decorator?",-->
<!--      "acceptedAnswer": {-->
<!--        "@type": "Answer",-->
<!--        "text": "An Interior Decorator focuses on visual styling such as furniture, colour palettes, and soft furnishings. An Interior Designer handles both aesthetics and technical planning, including spatial layouts, lighting schemes, and renovation coordination. Oraanj offers both, depending on your project needs."-->
<!--      }-->
<!--    },-->
<!--    {-->
<!--      "@type": "Question",-->
<!--      "name": "Do you offer full-service interior design in London?",-->
<!--      "acceptedAnswer": {-->
<!--        "@type": "Answer",-->
<!--        "text": "Yes. We provide full-service interior design across London, covering design development, procurement, contractor coordination, and final installation. This service is ideal for home renovations, apartment refurbishments, offices, and hospitality projects."-->
<!--      }-->
<!--    },-->
<!--    {-->
<!--      "@type": "Question",-->
<!--      "name": "Do you work on residential and commercial interior design projects?",-->
<!--      "acceptedAnswer": {-->
<!--        "@type": "Answer",-->
<!--        "text": "Yes. We work on residential interior design for houses and apartments, as well as commercial interior design for offices, restaurants, and retail spaces across London and the surrounding areas."-->
<!--      }-->
<!--    },-->
<!--    {-->
<!--      "@type": "Question",-->
<!--      "name": "Can you manage my renovation project as well as the design?",-->
<!--      "acceptedAnswer": {-->
<!--        "@type": "Answer",-->
<!--        "text": "Yes. Our full-service interior design includes project coordination alongside trusted contractors, ensuring the design intent is delivered accurately on site. This is particularly valuable for London properties where access, planning, and sequencing are critical."-->
<!--      }-->
<!--    },-->
<!--    {-->
<!--      "@type": "Question",-->
<!--      "name": "Do you work with international clients buying property in London?",-->
<!--      "acceptedAnswer": {-->
<!--        "@type": "Answer",-->
<!--        "text": "Yes. We regularly support international and overseas clients purchasing property in London. Our remote service includes design development, procurement, renovation coordination, and installation, with progress shared through regular updates and video calls."-->
<!--      }-->
<!--    },-->
<!--    {-->
<!--      "@type": "Question",-->
<!--      "name": "How do I choose the best Interior Designer in London for my project?",-->
<!--      "acceptedAnswer": {-->
<!--        "@type": "Answer",-->
<!--        "text": "To choose the best interior designer in London, review real project portfolios, check for transparent pricing, and confirm whether the studio offers both design and procurement support. A clear process and proven experience with London properties are key indicators of quality."-->
<!--      }-->
<!--    }-->
<!--  ]-->
<!--}-->
<!--</script>-->

<!--<script type="application/ld+json">-->
<!--{-->
<!--  "@context": "https://schema.org",-->
<!--  "@type": "LocalBusiness",-->
<!--  "@id": "https://www.oraanj-interiors.co.uk/#business",-->
<!--  "name": "Oraanj Interior Design",-->
<!--  "url": "https://www.oraanj-interiors.co.uk/",-->
<!--  "image": "https://www.oraanj-interiors.co.uk/wp-content/uploads/logo.png",-->
<!--  "telephone": "+447448803051",-->
<!--  "address": {-->
<!--    "@type": "PostalAddress",-->
<!--    "streetAddress": "2nd Floor Hygeia House, 66 College Road",-->
<!--    "addressLocality": "Harrow",-->
<!--    "postalCode": "HA1 1BE",-->
<!--    "addressCountry": "GB"-->
<!--  },-->
<!--  "award": "Interior Designer of the Year - Eastern Eye Property Awards 2025",-->
<!--  "founder": {-->
<!--    "@type": "Person",-->
<!--    "name": "Rachana Gupta"-->
<!--  },-->
<!--  "description": "Award-winning interior design studio in London specializing in luxury residential, commercial, and hospitality spaces. Winner of the 2025 Eastern Eye Interior Designer of the Year award.",-->
<!--  "aggregateRating": {-->
<!--    "@type": "AggregateRating",-->
<!--    "ratingValue": "4.8",-->
<!--    "reviewCount": "99",-->
<!--    "bestRating": "5",-->
<!--    "worstRating": "1"-->
<!--  },-->
<!--  "review": [-->
<!--    {-->
<!--      "@type": "Review",-->
<!--      "reviewRating": {-->
<!--        "@type": "Rating",-->
<!--        "ratingValue": "5",-->
<!--        "bestRating": "5",-->
<!--        "worstRating": "1"-->
<!--      },-->
<!--      "author": {-->
<!--        "@type": "Organization",-->
<!--        "name": "Verified Customer"-->
<!--      }-->
<!--    }-->
<!--  ]-->
<!--}-->
<!--</script>-->



<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "@id": "https://www.oraanj-interiors.co.uk/#faq",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How much does it cost to hire an interior designer in London?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Interior design costs in London vary depending on the size and complexity of the project. At Oraanj Interior Design, design services typically start from £600 per room. Full-service interior design projects are commonly structured as a fixed fee or around 10–15% of the total project budget. Consultation sessions are also available for homeowners and businesses planning residential, office, or hospitality interior design projects in London."
      }
    },
    {
      "@type": "Question",
      "name": "What interior design services does Oraanj Interior Design provide in London?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Oraanj Interior Design provides luxury residential interior design, office interior design, restaurant and hospitality interior design, interior architecture, space planning, lighting design, technical drawings, procurement coordination, and turnkey interior design project management."
      }
    },
    {
      "@type": "Question",
      "name": "Which areas of London do you cover for interior design projects?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Oraanj Interior Design works across Greater London including Mayfair, Kensington, Chelsea, Richmond, Shoreditch, Canary Wharf, Highbury, Hampstead, and surrounding prime residential and commercial areas. The studio supports residential and commercial interior design projects throughout London."
      }
    },
    {
      "@type": "Question",
      "name": "Do you offer turnkey interior design services in London?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Oraanj Interior Design offers a comprehensive turnkey interior design service in London. This includes concept design, space planning, interior architecture, technical drawings, procurement of furniture and materials, contractor coordination, and project management to deliver completed residential or commercial interiors from concept to installation."
      }
    },
    {
      "@type": "Question",
      "name": "How long do interior design projects usually take in London?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Interior design timelines depend on the size and complexity of the project. A single room interior design project may take approximately 6–10 weeks, while larger residential interior design or commercial interior design projects in London can take several months including design development, procurement, and installation."
      }
    },
    {
      "@type": "Question",
      "name": "Do you work with international or overseas clients who own property in London?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Oraanj Interior Design regularly works with international homeowners and overseas property investors who own homes in London. The studio provides remote interior design planning, procurement coordination, and turnkey interior design services for London properties owned by clients based in the Middle East, Europe, Asia, and North America."
      }
    },
    {
      "@type": "Question",
      "name": "How do I choose the best interior designer in London?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "When choosing the best interior designer in London it is important to consider design experience, technical expertise, project management capability, and the ability to deliver build-ready drawings and procurement coordination. Working with an established London interior design studio helps ensure projects are professionally planned and delivered from concept to completion."
      }
    },
    {
      "@type": "Question",
      "name": "Why choose Oraanj Interior Design for a London interior design project?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Oraanj Interior Design is an award-winning London interior design studio recognised at the Eastern Eye Property Awards 2025. The studio specialises in luxury residential, office, and hospitality interiors and combines creative design, technical planning, procurement expertise, and structured project coordination to deliver refined spaces across London."
      }
    }
  ]
}
</script>

	
<?php get_footer();?>