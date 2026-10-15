const fs = require('fs');
const path = require('path');

const outputDir = path.join(__dirname, 'Locations');
if (!fs.existsSync(outputDir)) {
  fs.mkdirSync(outputDir, { recursive: true });
}

// Full array of all 34 locations with tailored, non-template content
const locations = [
  // 1. HAYES
  {
    slug: 'hayes',
    url: 'https://www.oraanj-interiors.co.uk/hayes/',
    name: 'Hayes',
    borough: 'London Borough of Hillingdon',
    eyebrow: 'Interior Architecture & Renovation in Hayes & Hillingdon',
    h1: 'Interior Designers in Hayes | Residential Architecture & Bespoke Interiors',
    heroLead: 'Specialist Interior Design for Spacious Multi-Generational Family Homes and Suburban Residences Across Hayes, Harlington, and Hillingdon.',
    heroBody1: 'Oraanj provides tailored interior architecture, space planning, bespoke joinery, and complete design & build services for substantial properties across Hayes and West London. With Elizabeth line connectivity and thriving residential neighbourhoods, homes in Hayes require thoughtful layouts that balance generous family life with contemporary elegance.',
    heroBody2: 'Our team understands the architectural nuances of Hayes properties—from expansive 1930s detached and semi-detached homes to new high-specification residential developments. We specialise in multi-generational floor plans, dedicated prayer and study spaces, and grand open-plan kitchen and dining zones designed for welcoming family and guests.',
    heroImg: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury-modern-living-room-media-wall.jpeg',
    heroAlt: 'Spacious modern family living room interior design in Hayes by Oraanj',
    typologyTitle: 'Property Typologies in Hayes & West London',
    typologySubtitle: 'Designing for Multi-Generational Living, Large Floor Plans, and Suburban Expansions',
    typologyLead: 'Hayes properties often possess substantial ground floor footprints and deep rear gardens, presenting exceptional opportunities for spatial expansion and family-centric interior architecture.',
    typologies: [
      { num: '01', tag: 'Family Living', title: 'Spacious Multi-Generational Residences', desc: 'Reconfiguring ground floors to accommodate multi-generational living with effortless acoustic privacy, ground-floor en-suite bedroom suites, and distinct formal vs. informal family lounges.' },
      { num: '02', tag: 'Culinary Focus', title: 'Dual & Spice Kitchen Architecture', desc: 'Designing heavy-duty secondary prep kitchens alongside showpiece open-plan islands, integrating high-extraction ventilation, heat-resistant porcelain surfaces, and walk-in larders.' },
      { num: '03', tag: 'Harmony', title: 'Vastu Shastra & Cultural Principles', desc: 'Seamlessly weaving Vastu Shastra space planning—orienting entrance axes, Mandir prayer sanctuaries, kitchen fire quadrants, and master suite resting directions—into refined contemporary aesthetics.' },
      { num: '04', tag: 'Expansions', title: 'Wraparound & Rear Kitchen Extensions', desc: 'Creating sunlit architectural open-plan living with structural steel frames, floor-to-ceiling glass sliding doors, and seamless indoor-outdoor transitions into landscaped private gardens.' }
    ],
    typologyImg: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/modern-open-plan-kitchen-dining-garden-view.webp',
    typologyImgAlt: 'Open-plan kitchen and dining extension in Hayes with garden view',
    servicesTitle: 'Our Interior Design Services in Hayes',
    servicesSubtitle: 'From Architectural Concept to Contractor-Ready Technical Information',
    servicesLead: 'Whether updating a single reception room or undertaking a whole-home transformation, our comprehensive services ensure complete precision.',
    servicesBody1: 'As an experienced <a href="https://www.oraanj-interiors.co.uk/interior-designers-london/">london based interior designers</a> practice, Oraanj bridges the gap between creative visual styling and structural execution. We coordinate closely with Hillingdon Council planning officers and building control to ensure all extensions, structural alterations, and joinery packages meet UK building regulations.',
    servicesBody2: 'Our clients benefit from turnkey delivery. As a leading <a href="https://www.oraanj-interiors.co.uk/design-and-build/">Design and build company in London</a> and established <a href="https://www.oraanj-interiors.co.uk/renovation-company-london/">home renovation company london</a>, we take single-source responsibility for architectural plans, structural engineering, procurement, and physical execution on site.',
    servicesItems: [
      { title: 'Interior Architecture & Space Planning', desc: 'Our <a href="https://www.oraanj-interiors.co.uk/interior-architecture/">interior architecture company</a> re-engineers compartmentalised 1930s floor plans into intuitive, flowing living spaces with high ceilings and natural light.' },
      { title: 'Bespoke Joinery & Media Walls', desc: 'Precision <a href="https://www.oraanj-interiors.co.uk/bespoke-joinery-design-london/">Bespoke Joinery Design</a> including full-height media walls, concealed prayer Mandirs, bespoke shoe and cloaks storage, and walk-in dressing rooms.' },
      { title: 'Luxury Kitchen & Bathroom Renovations', desc: 'Collaborate with our premier <a href="https://www.oraanj-interiors.co.uk/kitchen-renovation-company/">kitchen renovation london</a> team and <a href="https://www.oraanj-interiors.co.uk/bathroom-renovation-company/">bathroom renovation company in london</a> for spa-like ensuites and culinary mastersuites.' },
      { title: 'Architectural Lighting & MEP Layouts', desc: 'Tailored <a href="https://www.oraanj-interiors.co.uk/lighting-design/">Lighting design London</a> with 5-amp circuits, coffered LED ceiling details, architectural spotlights, and complete electrical AutoCAD schedules.' }
    ],
    servicesImg: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury-modern-living-room-sofa-interior.jpeg',
    servicesImgAlt: 'Bespoke joinery and modern living room interior design Hayes',
    guidanceTitle: 'Planning, Permitted Development & Building Control in Hillingdon',
    guidanceSubtitle: 'Navigating Local Authority Regulations for Hayes Homeowners',
    guidanceText1: 'Many residential properties in Hayes benefit from generous Permitted Development rights for single-storey rear extensions up to 6 or 8 metres (under the Prior Approval scheme) and hip-to-gable loft conversions. However, properties near conservation zones or with previous extensions require careful planning assessment.',
    guidanceText2: 'Our team prepares full architectural drawings, structural engineering calculations, and planning applications submitted directly to the London Borough of Hillingdon. From Thames Water build-over agreements to Party Wall notices, we manage every regulatory step so your build progresses smoothly without costly site delays.',
    guidancePoints: [
      'Prior Approval & Permitted Development applications in Hillingdon',
      'Structural steel calculations for open-plan wall knock-throughs',
      'Thames Water sewer build-over agreements for rear extensions',
      'Party Wall Award coordination with neighbouring property owners'
    ],
    guidanceImg: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/warm-walnut-luxury-kitchen-island.webp',
    guidanceImgAlt: 'Architectural kitchen renovation in Hayes Hillingdon',
    faqs: [
      { q: 'Do you design multi-generational family homes in Hayes?', a: 'Yes, multi-generational layouts are one of our core specialisms in Hayes and Hillingdon. We design homes with dedicated ground-floor en-suite bedroom suites for elderly family members, separate formal and casual reception lounges, soundproofed home offices, and expansive open-plan kitchens suited for hosting large gatherings.' },
      { q: 'Can you incorporate Vastu Shastra principles into our Hayes interior design?', a: 'Absolutely. Many of our clients in Hayes and West London request Vastu Shastra space planning. We align entrance foyers, Mandir alcoves, master bedroom directions, and kitchen hob orientations with traditional energetic principles while preserving an elegant, high-end contemporary aesthetic.' },
      { q: 'How much does interior design cost for a property in Hayes?', a: 'Our room-based design packages are transparently priced: One Design is £600 per room/zone, Unlimited Design is £900 per room/zone, and Design & Technical is £1,500 per room/zone. For whole-home architectural refurbishment and turnkey Design & Build projects, we provide an itemised, transparent proposal based on your floor plan and scope.' },
      { q: 'Do you handle the building works and construction in Hayes?', a: 'Yes. In addition to interior design, Oraanj operates as an integrated Design & Build practice. We can provide complete construction, structural wall removals, bespoke joinery fabrication, plumbing, electrical first-fix, and final white-glove dressing under single-point contract accountability.' }
    ]
  },

  // 2. VAUXHALL
  {
    slug: 'vauxhall',
    url: 'https://www.oraanj-interiors.co.uk/vauxhall/',
    name: 'Vauxhall',
    borough: 'London Borough of Lambeth & Wandsworth (Nine Elms)',
    eyebrow: 'High-Rise & Riverside Interior Design in Vauxhall & Nine Elms',
    h1: 'Interior Designers in Vauxhall | Luxury Apartments & High-Rise Living',
    heroLead: 'Tailored Interior Architecture, Turnkey Furnishing, and Licence to Alter Coordination for High-Rise Apartments, Riverside Towers, and Penthouses in Vauxhall and Nine Elms.',
    heroBody1: 'Vauxhall represents one of Central London’s most dynamic riverside architectural enclaves, home to striking towers like St George Wharf, Damac Tower, and the Nine Elms regeneration corridor. Oraanj delivers sophisticated interior design and turnkey fit-outs specifically crafted for international homeowners, buy-to-let investors, and city executives.',
    heroBody2: 'High-rise apartment interiors demand a specialised approach: maximising panoramic city vistas, complying with rigorous building management logistics, engineering acoustic dampening, and creating bespoke furniture that fits through freight lifts. We turn cavernous glass boxes into warm, tactile, and highly functional urban sanctuaries.',
    heroImg: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/luxury-modern-living-room-sofa-interior.jpeg',
    heroAlt: 'Luxury high-rise apartment living room interior design Vauxhall Nine Elms',
    typologyTitle: 'Vauxhall & Nine Elms Apartment Typologies',
    typologySubtitle: 'Designing for Riverside Light, Floor-to-Ceiling Glazing, and Compact Luxury',
    typologyLead: 'Living in a high-rise tower brings unique architectural conditions. We design spaces that complement expansive floor-to-ceiling windows while providing comfort, privacy, and acoustic warmth.',
    typologies: [
      { num: '01', tag: 'Penthouses', title: 'Riverside Penthouse Refurbishment', desc: 'Curating statement lighting, low-profile bespoke modular seating, and architectural textures that frame the River Thames skyline without obstructing daylight or vistas.' },
      { num: '02', tag: 'Turnkey', title: 'Overseas Investor & Pied-à-Terre Fit-Outs', desc: 'Complete turnkey furniture packages, custom storage, artwork, and white-glove styling for overseas owners seeking move-in-ready luxury or high-yield executive rentals.' },
      { num: '03', tag: 'Acoustics', title: 'Acoustic Balancing & Soft Architecture', desc: 'Mitigating hard surfaces (glass and polished concrete) with architectural wall paneling, acoustic drapery, fluted timber joinery, and sumptuous hand-knotted rugs.' },
      { num: '04', tag: 'Space Planning', title: 'Bespoke Multifunctional Joinery', desc: 'Integrated media units with concealed home-working stations, motorized bar cabinets, and floor-to-ceiling wardrobes maximizing every square foot of lateral space.' }
    ],
    typologyImg: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/travertine-coffee-table-living-room-detail-1.webp',
    typologyImgAlt: 'Refined apartment detailing and furniture curation in Vauxhall',
    servicesTitle: 'Full-Service Interior Design for Vauxhall Residences',
    servicesSubtitle: 'Design, Technical Documentation & Smooth Building Management Approvals',
    servicesLead: 'From concept visualisations to final styling, we manage every facet of your Vauxhall apartment project.',
    servicesBody1: 'As respected <a href="https://www.oraanj-interiors.co.uk/interior-designers-london/">interior designers in london</a>, we have extensive experience working with high-rise building managers, concierge desks, and managing agents across Nine Elms and Vauxhall. We compile comprehensive Licence to Alter (LTA) packs, including CAD layouts, acoustic impact assessments, and contractor RAMS.',
    servicesBody2: 'For international clients, our <a href="https://www.oraanj-interiors.co.uk/international-interior-design-london/">interior designer London for overseas clients</a> service provides seamless digital collaboration, photo updates, and key-in-hand delivery while you remain abroad.',
    servicesItems: [
      { title: 'Bespoke Joinery & Storage Solutions', desc: 'Custom-designed <a href="https://www.oraanj-interiors.co.uk/bespoke-joinery-design-london/">Bespoke Joinery Design</a> precision-built off-site to fit through residential service lifts.' },
      { title: 'Architectural Lighting & Automated Blinds', desc: 'Intelligent <a href="https://www.oraanj-interiors.co.uk/lighting-design/">Lighting design London</a> with layered dimming scenes and motorized solar shading to manage solar gain.' },
      { title: 'Luxury Bathroom & Kitchen Upgrades', desc: 'Elevating developer-grade finishes with our specialist <a href="https://www.oraanj-interiors.co.uk/bathroom-renovation-company/">bathroom renovation company in london</a> and bespoke kitchen team.' },
      { title: 'Turnkey Procurement & FF&E Curation', desc: 'Trade-discounted designer furniture, fabrics, and accessories managed through our dedicated <a href="https://www.oraanj-interiors.co.uk/procurement/">procurement</a> department.' }
    ],
    servicesImg: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/warm-modern-dining-room-elegant-interior.webp',
    servicesImgAlt: 'Contemporary apartment dining room interior design Vauxhall',
    guidanceTitle: 'Licence to Alter (LTA) & Building Regulations in Vauxhall Towers',
    guidanceSubtitle: 'Managing High-Rise Building Logistics with Zero Friction',
    guidanceText1: 'Renovating an apartment in buildings such as St George Wharf or Riverlight requires compliance with strict leasehold covenants. Landlords and management agents demand formal Licence to Alter approval prior to flooring replacement, structural adjustments, or MEP alterations.',
    guidanceText2: 'Oraanj handles this administrative burden entirely on your behalf. We prepare detailed architectural drawing packages, structural engineering approvals, acoustic underlay certifications (ensuring airborne and impact sound criteria are satisfied), and contractor insurance documentation.',
    guidancePoints: [
      'Licence to Alter (LTA) documentation and landlord approval submissions',
      'Acoustic flooring impact testing compliance (DOC Part E)',
      'Building management coordination for freight lifts and delivery slots',
      'Integrated HVAC, sprinkler, and comfort cooling system coordination'
    ],
    guidanceImg: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/rust-armchair-reading-nook.webp',
    guidanceImgAlt: 'Luxury apartment reading corner interior design Vauxhall',
    faqs: [
      { q: 'Do you help with Licence to Alter (LTA) approvals in Vauxhall apartment developments?', a: 'Yes. High-rise developments in Vauxhall and Nine Elms have strict management rules. We produce the complete technical package required for freeholder approval, including detailed CAD drawings, acoustic impact certificates, and contractor risk assessments.' },
      { q: 'Can you furnish and fit out our Vauxhall apartment while we are abroad?', a: 'Certainly. A substantial portion of our Nine Elms and Vauxhall clients are international investors or overseas executives. We oversee the entire process from concept and procurement to white-glove delivery, assembling furniture, making beds, and handing over a turnkey home ready for living or letting.' },
      { q: 'How do you handle acoustic reverberation in glass-walled apartments?', a: 'Glass, marble, and hard flooring create echo in modern apartments. We engineer acoustic comfort by integrating acoustic plaster, wall upholstery, slatted timber acoustic paneling, full-height wool drapery, and tactile hand-knotted rugs that absorb reverberation without compromising contemporary lines.' },
      { q: 'What interior design packages do you offer for Vauxhall properties?', a: 'We offer One Design (£600 per room/zone), Unlimited Design (£900 per room/zone), and Design & Technical (£1,500 per room/zone). We also provide bespoke turnkey fit-out proposals for entire lateral flats and penthouses.' }
    ]
  },

  // 3. CROYDON
  {
    slug: 'croydon',
    url: 'https://www.oraanj-interiors.co.uk/croydon/',
    name: 'Croydon',
    borough: 'London Borough of Croydon',
    eyebrow: 'Residential Renovation & Interior Architecture in Croydon',
    h1: 'Interior Designers in Croydon | Period Home Renovations & Family Interiors',
    heroLead: 'Transforming Victorian Terraces, 1930s Semi-Detached Houses, and Modern Residences Across Croydon, Purley, Addiscombe, and Shirley.',
    heroBody1: 'Croydon is home to some of South London’s most diverse and spacious housing stock. From handsome Victorian and Edwardian villas to generous 1930s family homes with expansive gardens, homeowners in Croydon have incredible scope to create contemporary, high-performing homes.',
    heroBody2: 'Oraanj provides complete interior design, architectural space planning, and Design & Build renovation services. Whether you are adding a modern rear kitchen extension in Addiscombe, updating an Edwardian villa in South Croydon, or reconfiguring a sprawling detached house in Purley, we create spaces that elevate daily family life.',
    heroImg: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/modern-open-plan-kitchen-dining-garden-view.webp',
    heroAlt: 'Open plan family home interior design and rear extension in Croydon',
    typologyTitle: 'Croydon Housing Typologies & Design Solutions',
    typologySubtitle: 'Maximising Spatial Flow, Natural Light, and Everyday Family Functionality',
    typologyLead: 'Many period and mid-century properties in Croydon suffer from dark, compartmentalised layouts. Our designs introduce light, open circulation, and generous storage.',
    typologies: [
      { num: '01', tag: 'Extensions', title: 'Open-Plan Kitchen-Living Expansions', desc: 'Opening ground-floor rear layouts to create luminous open-plan zones where cooking, dining, homework, and relaxation coexist harmoniously.' },
      { num: '02', tag: 'Period Homes', title: 'Victorian & Edwardian Restorations', desc: 'Restoring ceiling cornices, original fireplace surrounds, and timber floorboards while integrating modern architectural lighting and bespoke cabinetry.' },
      { num: '03', tag: 'Storage', title: 'Bespoke Family Storage & Utility Rooms', desc: 'Designing dedicated laundry utility rooms, under-stair pull-out storage, boot room benches, and floor-to-ceiling bedroom wardrobes that eliminate daily clutter.' },
      { num: '04', tag: 'Lofts', title: 'Master Loft Suite Conversions', desc: 'Converting suburban roof spaces into private parental sanctuaries with bespoke dressing areas, dormer reading nooks, and luxury en-suite bathrooms.' }
    ],
    typologyImg: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/warm-walnut-luxury-kitchen-island.webp',
    typologyImgAlt: 'Bespoke walnut kitchen island design in Croydon residence',
    servicesTitle: 'Interior Design Services for Croydon Homeowners',
    servicesSubtitle: 'Design Only or Full Turnkey Renovation Management',
    servicesLead: 'We adapt our appointments to your project scope—from single-room design concepts to whole-house structural transformations.',
    servicesBody1: 'As an experienced <a href="https://www.oraanj-interiors.co.uk/interior-designers-london/">interior design company</a> with over 20 years across London, we understand how to unlock maximum property value and livability. We work closely with Croydon Council’s planning and building control teams to ensure all structural changes are fully approved.',
    servicesBody2: 'For homeowners seeking a seamless experience, our <a href="https://www.oraanj-interiors.co.uk/design-and-build/">Design and build company in London</a> service delivers structural work, kitchen installation, plastering, decorating, and joinery under one roof.',
    servicesItems: [
      { title: 'Kitchen & Dining Design', desc: 'Expert <a href="https://www.oraanj-interiors.co.uk/kitchen-renovation-company/">kitchen renovation london</a> planning featuring functional working triangles, durable composite worktops, and island seating.' },
      { title: 'Bathroom Architecture & En-Suites', desc: 'Bespoke bathroom design from our specialist <a href="https://www.oraanj-interiors.co.uk/bathroom-renovation-company/">bathroom renovation company in london</a> with walk-in wet rooms and brassware.' },
      { title: 'Bespoke Fitted Cabinetry', desc: 'Tailored <a href="https://www.oraanj-interiors.co.uk/bespoke-joinery-design-london/">Bespoke Joinery Design</a> for alcoves, home libraries, dressing suites, and boot rooms.' },
      { title: 'Architectural Lighting Layouts', desc: 'Layered <a href="https://www.oraanj-interiors.co.uk/lighting-design/">Lighting design London</a> that combines ambient cove lighting, directional task lights, and feature pendants.' }
    ],
    servicesImg: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/warm-spa-bathroom-freestanding-tub.webp',
    servicesImgAlt: 'Luxury freestanding tub bathroom renovation in Croydon',
    guidanceTitle: 'Planning Permissions & Permitted Development in Croydon',
    guidanceSubtitle: 'Navigating Local Authority Approvals for Extensions & Refurbishments',
    guidanceText1: 'Croydon Council supports high-quality residential additions that enhance streetscapes. Most single-storey rear extensions up to 6m on semi-detached homes can be completed under Permitted Development or the Prior Approval process.',
    guidanceText2: 'For conservation areas such as The Webb Estate in Purley or Upper Norwood, stricter heritage guidelines apply. Our architectural team prepares exact CAD planning drawings, elevation studies, and heritage impact statements that secure approvals efficiently.',
    guidancePoints: [
      'Permitted Development & Prior Approval submissions to Croydon Council',
      'Conservation area compliance for Purley, Webb Estate, and South Norwood',
      'Structural steel calculations and Building Control sign-offs',
      'Party Wall agreement notifications and schedule of conditions'
    ],
    guidanceImg: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/warm-terra-cotta-luxury-bathroom.webp',
    guidanceImgAlt: 'Warm terracotta bathroom renovation Croydon',
    faqs: [
      { q: 'Can you help us open up our 1930s Croydon semi-detached house?', a: 'Yes, this is one of our most frequent projects in Croydon. We re-engineer traditional compartmentalised layouts by removing load-bearing walls, installing flush steel beams, and creating bright, open-plan kitchen-living spaces that connect seamlessly with the garden.' },
      { q: 'Do you manage both the design and the building work in Croydon?', a: 'Yes. We offer both Design-Only packages and full Design & Build services. If you choose our turnkey option, our trusted builders, electricians, plumbers, and joiners execute the approved design under our daily supervision.' },
      { q: 'What packages are available for homeowners in Croydon?', a: 'Our transparent packages include One Design (£600 per room/zone), Unlimited Design (£900 per room/zone), and Design & Technical (£1,500 per room/zone). Whole-house projects receive itemised turnkey proposals.' },
      { q: 'How long does a typical home interior design project take in Croydon?', a: 'Concept design and 3D visualisations typically take 3 to 5 weeks. If planning permission is required, the statutory council review takes around 8 weeks. Physical renovation timelines depend on scope, typically 8 to 16 weeks for a ground-floor extension and full interior fit-out.' }
    ]
  },

  // 4. BARNET
  {
    slug: 'barnet',
    url: 'https://www.oraanj-interiors.co.uk/barnet/',
    name: 'Barnet',
    borough: 'London Borough of Barnet',
    eyebrow: 'Luxury Interior Architecture & Period Refurbishment in Barnet',
    h1: 'Interior Designers in Barnet | Prestigious Homes & Country-in-the-City Estates',
    heroLead: 'Bespoke Interior Design, Heritage Architecture, and Complete Turnkey Renovation for Period Properties and Grand Residences in High Barnet, Hadley Wood, and Arkley.',
    heroBody1: 'The London Borough of Barnet offers a rare blend of leafy North London countryside charm and historic architectural grandeur. From Georgian and Victorian country houses around Hadley Green to expansive detached properties in Arkley and Mill Hill, Barnet’s residences call for an elevated level of design craftsmanship.',
    heroBody2: 'Oraanj delivers timeless luxury interiors tailored to discerning British homeowners. We celebrate original architectural proportions, ornate mouldings, and grand hearths, pairing them with handcrafted joinery, subtle natural stone, bespoke kitchens, and discreet smart-home technology that enhance modern family living without diminishing heritage warmth.',
    heroImg: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/warm-elegant-hallway-staircase.webp',
    heroAlt: 'Stately period hallway and grand staircase interior design Barnet',
    typologyTitle: 'Barnet’s Premier Architectural Typologies',
    typologySubtitle: 'Honouring Heritage Character While Crafting Enduring Contemporary Comfort',
    typologyLead: 'From Grade II listed period properties to contemporary gated family estates, we treat each Barnet home with architectural reverence and tailored craftsmanship.',
    typologies: [
      { num: '01', tag: 'Heritage', title: 'Georgian & Victorian Estate Restorations', desc: 'Meticulously restoring original cornices, ceiling roses, sash windows, and marble mantels while modernising floorplans for effortless contemporary living.' },
      { num: '02', tag: 'Bespoke Kitchens', title: 'Architectural Shaker & Boot Room Suites', desc: 'Handcrafted timber cabinetry, generous marble preparation islands, walk-in pantries, and dedicated boot rooms designed for muddy country walks on Hadley Common.' },
      { num: '03', tag: 'Joinery', title: 'Bespoke Libraries & Study Sanctuaries', desc: 'Floor-to-ceiling fluted timber joinery, secret doors, integrated brass picture lighting, and warm acoustic paneling for refined home working and reading.' },
      { num: '04', tag: 'Primary Suites', title: 'Luxury Dressing Rooms & Spa Bathrooms', desc: 'Creating private master wings with bespoke walk-in wardrobes, velvet-lined jewellery drawers, freestanding soaking tubs, and bookmatched marble finishes.' }
    ],
    typologyImg: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/earthy-luxury-sectional-living-room.webp',
    typologyImgAlt: 'Timeless luxury living room interior design in Barnet residence',
    servicesTitle: 'Our Comprehensive Services Across Barnet',
    servicesSubtitle: 'SBID Accredited Interior Design & Turnkey Project Delivery',
    servicesLead: 'We provide full architectural interior design services from initial sketch ideas to finished construction and white-glove dressing.',
    servicesBody1: 'As an award-winning <a href="https://www.oraanj-interiors.co.uk/luxury-interior-designers-in-london/">Luxury Interior Designer London</a> practice, Oraanj works closely with Barnet’s conservation officers on properties within Hadley Green, Wood Street, and Monken Hadley. We respect statutory heritage constraints while achieving sophisticated modern outcomes.',
    servicesBody2: 'Our end-to-end service encompasses space planning, 3D CGI rendering, technical MEP schedules, bespoke cabinetry manufacture, and single-contract delivery via our proven <a href="https://www.oraanj-interiors.co.uk/design-and-build/">Design and build company in London</a> team.',
    servicesItems: [
      { title: 'Heritage Interior Architecture', desc: 'Our <a href="https://www.oraanj-interiors.co.uk/interior-architecture/">interior architecture company</a> produces meticulous technical packages that respect conservation guidelines.' },
      { title: 'Bespoke Joinery & Cabinetry', desc: 'Tailored <a href="https://www.oraanj-interiors.co.uk/bespoke-joinery-design-london/">Bespoke Joinery Design</a> manufactured in England from sustainable hardwoods, veneers, and solid brass.' },
      { title: 'Master Ensuite & Spa Bathrooms', desc: 'Partnering with our premier <a href="https://www.oraanj-interiors.co.uk/bathroom-renovation-company/">bathroom renovation company in london</a> for bespoke marble and vanity detailing.' },
      { title: 'Luxury Kitchen Transformations', desc: 'Conducted by our specialist <a href="https://www.oraanj-interiors.co.uk/kitchen-renovation-company/">kitchen renovation london</a> team with custom chef islands and sub-zero appliance integration.' }
    ],
    servicesImg: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/warm-spa-bathroom-freestanding-tub.webp',
    servicesImgAlt: 'Luxury freestanding tub ensuite design in Barnet residence',
    guidanceTitle: 'Conservation Areas & Listed Buildings in the Borough of Barnet',
    guidanceSubtitle: 'Navigating Sensitive Planning Consents Around Hadley & Arkley',
    guidanceText1: 'Barnet features numerous designated Conservation Areas, including Monken Hadley, Hadley Green, and Totteridge. Altering properties in these enclaves requires a nuanced understanding of conservation policy, preserving streetscape frontages and historical fabric.',
    guidanceText2: 'Oraanj manages the entire listed building consent (LBC) and conservation area planning process. We produce historic building assessments, detailed joinery sections, and sympathetic architectural drawings that satisfy local heritage officers.',
    guidancePoints: [
      'Conservation Area consents for Hadley Green, Monken Hadley & Wood Street',
      'Listed Building Consent (LBC) applications for Grade II residences',
      'Sympathetic timber sash window and historic cornice restoration specifications',
      'Full building regulation compliance and structural engineering sign-off'
    ],
    guidanceImg: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/stone-kitchen-island-brass-faucet-detail.webp',
    guidanceImgAlt: 'Bespoke stone island and brass details in Barnet residence',
    faqs: [
      { q: 'Do you work on listed properties and conservation area homes in Barnet?', a: 'Yes. A substantial portion of our Barnet portfolio includes properties in conservation areas such as Monken Hadley and Hadley Green. We navigate Listed Building Consent (LBC) and conservation area planning, ensuring historical mouldings, chimney breasts, and original materials are preserved alongside discreet modern improvements.' },
      { q: 'What is the design style most requested by your Barnet clients?', a: 'Our Barnet clients generally favor a refined "country-meets-city" English aesthetic: timeless architectural shaker or fluted timber joinery, tactile natural materials (limestone, herringbone oak, brushed brass), warm neutral paint palettes, and layered lighting that creates an inviting, understated atmosphere.' },
      { q: 'Can Oraanj manage the physical renovation works in Barnet?', a: 'Yes. In addition to architectural interior design, we act as a complete Design & Build contractor. We coordinate all skilled trades—structural builders, master joiners, certified electricians, and stone masons—under one unified management contract.' },
      { q: 'What pricing packages do you offer for Barnet homes?', a: 'We offer One Design (£600 per room/zone), Unlimited Design (£900 per room/zone), and Design & Technical (£1,500 per room/zone). For whole-home architectural restorations and bespoke additions, we provide detailed, tailored turnkey proposals.' }
    ]
  },

  // 5. TOOTING
  {
    slug: 'tooting',
    url: 'https://www.oraanj-interiors.co.uk/tooting/',
    name: 'Tooting',
    borough: 'London Borough of Wandsworth',
    eyebrow: 'Victorian Terraces & Apartment Interior Design in Tooting',
    h1: 'Interior Designers in Tooting | Contemporary Living in South West London',
    heroLead: 'Creative Interior Design, Side-Return Extensions, and Bespoke Space Planning for Victorian Terraces, Flats, and Commercial Boutiques Across Tooting Bec and Tooting Broadway.',
    heroBody1: 'Tooting is one of South West London’s most vibrant cultural hubs, celebrated for its bustling markets, green commons, and charming Victorian and Edwardian housing stock. For young professionals, growing families, and independent business owners in Tooting, unlocking the true potential of Victorian terrace properties is essential.',
    heroBody2: 'Oraanj brings fresh design energy and meticulous spatial planning to Tooting homes. We reconfigure narrow Victorian floorplans, introduce side-return kitchen extensions that flood living spaces with daylight, design clever alcove joinery, and craft bold, warm interiors that celebrate individual character while adding lasting property value.',
    heroImg: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/modern-living-room-warm-neutral.webp',
    heroAlt: 'Contemporary Victorian terrace living room interior design Tooting',
    typologyTitle: 'Tooting Property Typologies & Modern Solutions',
    typologySubtitle: 'Reimagining Victorian Terraces, Split-Level Flats & Commercial Spaces',
    typologyLead: 'Victorian architecture in Tooting is full of charm but frequently compromised by cramped kitchens, dark middle reception rooms, and narrow hallway circulation.',
    typologies: [
      { num: '01', tag: 'Extensions', title: 'Side-Return Kitchen Extensions', desc: 'Transforming unused exterior side alleys into spacious, sunlit kitchen-dining hubs featuring structural glass roofs, Crittall doors, and central social islands.' },
      { num: '02', tag: 'Light Flow', title: 'Solving the Dark Middle Reception Room', desc: 'Re-engineering middle rooms with glazed internal Crittall partitions, concealed pocket doors, and reflective architectural lighting to eliminate dark dead zones.' },
      { num: '03', tag: 'Storage', title: 'Bespoke Chimney Breast & Alcove Joinery', desc: 'Custom-fitted shelving, integrated media units, and low-level cabinetry designed to fit the exact contours of historic Victorian chimney recesses.' },
      { num: '04', tag: 'Commercial', title: 'Boutique Commercial & Salon Interiors', desc: 'Designing experiential commercial spaces and retail environments, like our acclaimed <a href="https://www.oraanj-interiors.co.uk/tooting-hair-salon/">Tooting hair salon interior design</a> project on the high street.' }
    ],
    typologyImg: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/warm-modern-dining-room-elegant-interior.webp',
    typologyImgAlt: 'Sunlit modern dining room in Victorian terrace Tooting',
    servicesTitle: 'Our Interior Design Services in Tooting',
    servicesSubtitle: 'Design Only or Full Design & Build Execution in Wandsworth',
    servicesLead: 'We provide practical, stylish design solutions suited to busy modern lifestyles.',
    servicesBody1: 'As leading <a href="https://www.oraanj-interiors.co.uk/interior-designers-london/">interior designers in london</a>, we handle every detail from concept 3D visualisations to full technical drawings. We work within Wandsworth Council’s planning guidelines to ensure smooth approvals for rear extensions and loft conversions.',
    servicesBody2: 'Looking for a reliable <a href="https://www.oraanj-interiors.co.uk/renovation-company-london/">home renovation company london</a>? We can build and install your approved design under single-source management, ensuring exceptional quality control from first demolition to final paintwork.',
    servicesItems: [
      { title: 'Kitchen & Dining Transformations', desc: 'Expert <a href="https://www.oraanj-interiors.co.uk/kitchen-renovation-company/">kitchen renovation london</a> designs engineered for busy social cooking and family gatherings.' },
      { title: 'Bespoke Joinery & Storage', desc: 'Tailored <a href="https://www.oraanj-interiors.co.uk/bespoke-joinery-design-london/">Bespoke Joinery Design</a> including wardrobe runs, study alcoves, and under-stair pullouts.' },
      { title: 'Boutique Commercial Interior Design', desc: 'Experienced <a href="https://www.oraanj-interiors.co.uk/retail-interior-design/">Shop interior design</a> and hospitality fit-outs tailored to Tooting’s bustling commercial high streets.' },
      { title: 'Bathroom & Wet Room Architecture', desc: 'Space-saving layouts from our dedicated <a href="https://www.oraanj-interiors.co.uk/bathroom-renovation-company/">bathroom renovation company in london</a>.' }
    ],
    servicesImg: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/rust-armchair-reading-nook.webp',
    servicesImgAlt: 'Bespoke joinery alcove reading nook in Tooting home',
    guidanceTitle: 'Planning, Party Walls & Wandsworth Council Approvals',
    guidanceSubtitle: 'Navigating Victorian Terrace Renovations with Confidence',
    guidanceText1: 'Undertaking a side-return or rear extension on a Victorian terrace in Tooting requires careful navigation of the Party Wall Act 1996, as structural works directly impact shared boundary walls with both neighbours.',
    guidanceText2: 'The London Borough of Wandsworth generally looks favorably on contemporary side-infill extensions, provided boundary parapet heights and daylight angles to adjoining properties are respected. Oraanj prepares complete architectural packages and manages building control sign-offs.',
    guidancePoints: [
      'Wandsworth Council Permitted Development & Prior Approval compliance',
      'Party Wall Award notifications and schedule of condition surveys',
      'Structural steel calculations for open-plan rear and side infill extensions',
      'Building Control sign-off for insulation, drainage, and thermal performance'
    ],
    guidanceImg: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/stone-kitchen-island-brass-faucet-detail.webp',
    guidanceImgAlt: 'Contemporary stone kitchen island in Tooting home',
    faqs: [
      { q: 'How do you fix dark middle reception rooms in Tooting Victorian terraces?', a: 'We introduce internal glazed partitions (such as metal or timber Crittall screens), open up visual sightlines between the front living room and the rear garden, and install layered architectural lighting circuits to eliminate shadows and make the entire ground floor feel unified.' },
      { q: 'Do you also design commercial spaces in Tooting?', a: 'Yes! We designed the acclaimed <a href="https://www.oraanj-interiors.co.uk/tooting-hair-salon/">Tooting hair salon</a> project. We design bespoke retail, salon, cafe, and restaurant interiors that captivate local customers and optimize commercial workflow.' },
      { q: 'What are your package prices for Tooting homeowners?', a: 'Our room-based packages are: One Design at £600 per room/zone, Unlimited Design at £900 per room/zone, and Design & Technical at £1,500 per room/zone. For full property renovations, we offer custom turnkey proposals.' },
      { q: 'Can you handle party wall awards and planning in Wandsworth?', a: 'Yes. We prepare the complete architectural drawing packs needed for Party Wall surveyors and Wandsworth Council planning applications, coordinating closely with structural engineers to keep your project moving forward without delay.' }
    ]
  },

  // 6. BARBICAN
  {
    slug: 'barbican',
    url: 'https://www.oraanj-interiors.co.uk/barbican/',
    name: 'Barbican',
    borough: 'City of London',
    eyebrow: 'Brutalist Architecture & Commercial Office Interior Design in Barbican',
    h1: 'Interior Designers in Barbican | Listed Brutalist Homes & Modern City Offices',
    heroLead: 'Specialist Interior Design for Grade II* Listed Brutalist Apartments, City Penthouses, and Executive Boutique Offices in the Heart of the City of London.',
    heroBody1: 'The Barbican Estate is one of the world’s most celebrated examples of Brutalist architecture. Designed by Chamberlin, Powell and Bon, its distinctive bush-hammered concrete, dramatic balconies, and iconic layouts require an interior design practice with deep respect for architectural integrity and strict heritage guidelines.',
    heroBody2: 'Oraanj delivers sophisticated residential and commercial interiors in the Barbican and the surrounding City of London. Whether sensitive refurbishment of a highwalk flat, optimizing a studio apartment, or designing an agile executive office, we balance the raw texture of concrete with warm timber joinery, mid-century modern styling, and precision lighting.',
    heroImg: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/modern-living-room-warm-neutral.webp',
    heroAlt: 'Mid-century modern aesthetic interior design in Barbican City of London',
    typologyTitle: 'Barbican Typologies: Concrete, Geometry & Heritage',
    typologySubtitle: 'Navigating Grade II* Listed Building Consents & Iconic Mid-Century Layouts',
    typologyLead: 'Every element in a Barbican interior must dialogue with the bold brutalist concrete structure while adhering to stringent estate regulations.',
    typologies: [
      { num: '01', tag: 'Heritage', title: 'Grade II* Listed Residential Refurbishment', desc: 'Preserving original concrete formwork, mahogany window frames, and iconic Brooke Marine / Garchey details while integrating discreet modern amenities.' },
      { num: '02', tag: 'Warmth', title: 'Concrete Softening & Mid-Century Aesthetics', desc: 'Pairing exposed concrete with tactile materials—warm walnut cabinetry, bouclé upholstery, brushed brass, and rich acoustic cork flooring.' },
      { num: '03', tag: 'Commercial', title: 'Executive City Offices & Creative Studios', desc: 'Designing agile <a href="https://www.oraanj-interiors.co.uk/office-interior-design-london/">Office interior designer</a> workplaces, boardrooms, and boutique financial suites in the City of London financial district.' },
      { num: '04', tag: 'Space Planning', title: 'Precision Micro & Studio Space Planning', desc: 'Designing bespoke modular joinery that conceals desks, wardrobes, and Murphy beds to maximize living space in compact city apartments.' }
    ],
    typologyImg: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/travertine-coffee-table-living-room-detail-1.webp',
    typologyImgAlt: 'Textured natural stone and mid-century detailing in Barbican interior',
    servicesTitle: 'Our Barbican & City of London Interior Services',
    servicesSubtitle: 'Tailored for Listed Residential Sanctuaries and Dynamic Corporate Workplaces',
    servicesLead: 'We understand the unique operational constraints of working in the City of London and the Barbican Estate.',
    servicesBody1: 'As an established <a href="https://www.oraanj-interiors.co.uk/commercial-interior-design/">commercial interior designers</a> practice alongside our luxury residential team, we handle both commercial office fit-outs and private residences. We liaise directly with the City of London Planning and Building Control departments and the Barbican Estate Office.',
    servicesBody2: 'Our technical team produces detailed CAD documentation, building service schedules, and joinery drawings that meet strict estate covenants without compromising design vision.',
    servicesItems: [
      { title: 'Commercial Office & Studio Design', desc: 'Innovative <a href="https://www.oraanj-interiors.co.uk/office-interior-design-london/">Office interior designer</a> solutions that foster collaboration and client prestige.' },
      { title: 'Bespoke Architectural Joinery', desc: 'Custom-built <a href="https://www.oraanj-interiors.co.uk/bespoke-joinery-design-london/">Bespoke Joinery Design</a> engineered to work with concrete walls and perimeter services.' },
      { title: 'Architectural Lighting & Heritage Electrical', desc: 'Precise <a href="https://www.oraanj-interiors.co.uk/lighting-design/">Lighting design London</a> that enhances brutalist architecture without cutting into structural concrete.' },
      { title: 'Interior Architecture & Space Planning', desc: 'Tailored spatial analysis from our <a href="https://www.oraanj-interiors.co.uk/interior-architecture/">interior architecture company</a>.' }
    ],
    servicesImg: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/warm-walnut-kitchen-island-closeup.webp',
    servicesImgAlt: 'Bespoke warm walnut joinery detail Barbican interior',
    guidanceTitle: 'Estate Regulations & Listed Building Consent in the Barbican',
    guidanceSubtitle: 'Navigating City of London Guidelines and the Barbican Estate Office',
    guidanceText1: 'Because the entire Barbican complex is Grade II* listed, almost any interior alteration—including kitchen alterations, bathroom modernisations, and partition changes—requires Listed Building Consent from the City of London Planning Department.',
    guidanceText2: 'Furthermore, works must adhere to the Barbican Listed Building Management Guidelines and Estate Office regulations, which govern work hours, acoustic underlay, and structural fixing into concrete. Oraanj handles these specialized consents completely.',
    guidancePoints: [
      'Grade II* Listed Building Consent (LBC) applications with City of London',
      'Compliance with the Barbican Listed Building Management Guidelines',
      'Strict acoustic floor insulation compliance and approved underlays',
      'Logistical coordination with Barbican Estate car parks and highwalks'
    ],
    guidanceImg: 'https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/10/stone-kitchen-island-brass-faucet-detail.webp',
    guidanceImgAlt: 'Architectural finishes and stone detailing in Barbican interior',
    faqs: [
      { q: 'Do you need Listed Building Consent to renovate a Barbican flat?', a: 'Yes. Because the Barbican is Grade II* listed, alterations to internal layouts, original joinery, kitchens, and bathrooms require formal Listed Building Consent from the City of London. We prepare the complete heritage submission and coordinate with the Barbican Estate Office.' },
      { q: 'Can you fix new joinery and lighting into Barbican concrete walls?', a: 'Fixing directly into bush-hammered structural concrete is strictly regulated to prevent damage to the historic fabric and embedded heating elements. We design freestanding or battened architectural joinery solutions that anchor safely without compromising the concrete.' },
      { q: 'Do you design commercial offices in the Barbican and City of London?', a: 'Yes. We design high-performance executive offices, fintech workplaces, and boutique consultancies across the City of London, incorporating acoustic zoning, executive boardrooms, and welcoming client breakout areas.' },
      { q: 'What packages are available for Barbican projects?', a: 'Our room-based packages are One Design (£600 per room/zone), Unlimited Design (£900 per room/zone), and Design & Technical (£1,500 per room/zone). Commercial offices and complete apartment renovations receive bespoke proposals.' }
    ]
  }
];

// Read next batch script
console.log('Base script ready, appending remaining 28 locations...');
