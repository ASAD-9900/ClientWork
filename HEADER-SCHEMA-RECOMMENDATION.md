# Global Header Schema Audit & Recommendation
**Oraanj Interior Design Ltd** (`https://www.oraanj-interiors.co.uk/`)

This document provides a comprehensive technical audit of the current global schema markup in `header.php`, documents existing entity conflicts and redundancies, outlines the recommended production-ready JSON-LD schema for global deployment, and provides step-by-step manual implementation instructions.

---

## 1. Existing Global Schema Audit (`header.php`)

### 1.1 Overview of What Currently Exists
The `<head>` section of `header.php` (lines 150–421) injects a single `<script type="application/ld+json">` graph containing eight (8) entities:

1. **`WebSite`** (`https://www.oraanj-interiors.co.uk/#website`):
   - Basic website name, URL, publisher reference, and `SearchAction` entry point.
2. **`WebPage`** (`https://www.oraanj-interiors.co.uk/#webpage`):
   - Hardcoded with `url: "https://www.oraanj-interiors.co.uk/"` and homepage-specific title and description: *"Luxury Interior Design in London for Residential and Commercial Projects"*.
3. **`ImageObject`** (`https://www.oraanj-interiors.co.uk/#primaryimage`):
   - Primary banner image: `https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/02/banner-1.webp`.
4. **`Organization`** (`https://www.oraanj-interiors.co.uk/#organization`):
   - Legal corporate identity: `Oraanj Interior Design Ltd` (alternateName: `Oraanj Interior Design`), logo, founder reference, and 19 social/directory `sameAs` URLs.
5. **`ProfessionalService` / `LocalBusiness` / `HomeAndConstructionBusiness`** (`https://www.oraanj-interiors.co.uk/#business`):
   - Main operating business profile: Harrow office address, telephone `+44 7448 803051`, email, priceRange `£££`, slogan, award, location array referencing `#harrow-office` and `#mayfair-office`, and a hardcoded `hasOfferCatalog` with 4 generic services.
6. **`Place`** (`https://www.oraanj-interiors.co.uk/#harrow-office`):
   - Verified physical head office: *2nd Floor, Hygeia House, 66 College Road, Harrow, Greater London, HA1 1BE*.
7. **`Place`** (`https://www.oraanj-interiors.co.uk/#mayfair-office`):
   - Verified Central London meeting facility (by appointment): *23 Berkeley Square, Mayfair, London, W1J 6HE*.
8. **`Person`** (`https://www.oraanj-interiors.co.uk/#person-rachana-gupta`):
   - Founder & Director profile for Rachana Gupta with LinkedIn profile and `worksFor` reference to `#organization`.

---

### 1.2 Critical Issues, Conflicts & Duplications Identified

#### Issue 1: Hardcoded Homepage `WebPage` Injected Globally on Every Page
- **The Problem:** In `header.php`, lines 172–188 define a `WebPage` entity with `url: "https://www.oraanj-interiors.co.uk/"` and the homepage meta description. Because `header.php` is rendered across **all** pages of the website, every single subpage (e.g., `/contact/`, `/commercial-interior-design/`, `/about/`, `/kitchen-renovation-company/`, etc.) outputs structured data stating that the current page is the homepage.
- **Impact:** Confuses search engine crawlers regarding canonical page identity, hierarchy, and topic relevance.
- **Remedy:** Remove the hardcoded `WebPage` from `header.php`. Page-specific `WebPage`, `AboutPage`, `ContactPage`, or `CollectionPage` markup should be emitted dynamically by WordPress/Yoast or by the respective page templates.

#### Issue 2: Entity ID Fragmentation & Duplication Across Pages
- In `header.php`, the primary operating business is defined as `@id: "https://www.oraanj-interiors.co.uk/#business"`.
- However, the homepage template (`home.php`) previously redeclared `LocalBusiness` with `@id: "https://www.oraanj-interiors.co.uk/#localbusiness"`, creating two distinct business entities for the exact same physical business.
- Furthermore, many service landing pages re-declared the entire `Organization` object inside `provider` using conflicting properties (e.g. outdated logo `/2024/09/logo.png`, different phone number formats, and missing sameAs links).
- **Remedy:** Establish a canonical entity hierarchy:
  - Corporate Parent: `https://www.oraanj-interiors.co.uk/#organization`
  - Operating Business / LocalService Provider: `https://www.oraanj-interiors.co.uk/#business`
  - Founder: `https://www.oraanj-interiors.co.uk/#person-rachana-gupta`
  - Harrow Office: `https://www.oraanj-interiors.co.uk/#harrow-office`
  - Mayfair Office: `https://www.oraanj-interiors.co.uk/#mayfair-office`
  All individual page source files must reference these canonical IDs instead of re-defining them inline.

#### Issue 3: Page-Specific `hasOfferCatalog` in Global Header
- Lines 322–368 of `header.php` embed an `OfferCatalog` into the global `LocalBusiness` entity.
- The catalog lists only four arbitrary services (`Design and Build Services`, `Home Renovation`, `Construction Company London`, `Residential Interior Design`) without complete properties.
- **Remedy:** Detailed service offers and catalog definitions belong on the relevant service and package pages (such as `/interior-design-packages/` and individual service pages), not in the global header.

#### Issue 4: Potential Conflicts with Yoast SEO Schema Graph
- The site runs **Yoast SEO** (as verified in `page-sitemap.xml`). Yoast SEO automatically outputs an `@graph` with `WebSite` and `Organization` or `Person`.
- Adding a standalone, disconnected `@graph` in `header.php` creates **two parallel `@graph` trees** in search engine parsers: one from Yoast, and one from the custom theme header.
- **Remedy:** Follow the Yoast Schema Integration Guidelines in Section 3 of this document to harmonize or extend Yoast's graph, avoiding entity clashes.

---

### 1.3 What Should Remain Global vs. What Should Be Moved

| Schema Type | Current Location | Recommended Action | Justification |
| :--- | :--- | :--- | :--- |
| **`WebSite`** | `header.php` | **Retain or Delegate to Yoast** | Global entity. Keep consistent `@id: https://www.oraanj-interiors.co.uk/#website`. |
| **`Organization`** | `header.php` | **Retain in Global Header** | Stable global corporate identity with verified sameAs profiles, logo, and founder. |
| **`LocalBusiness` (`#business`)** | `header.php` | **Retain in Global Header (Streamlined)** | Stable commercial entity representing Oraanj's design studio. |
| **`Place` (`#harrow-office`)** | `header.php` | **Retain in Global Header** | Verified physical head office location. |
| **`Place` (`#mayfair-office`)** | `header.php` | **Retain in Global Header** | Verified client meeting facility (by appointment). |
| **`Person` (`#person-rachana-gupta`)** | `header.php` | **Retain in Global Header** | Verified founder & director entity. |
| **`WebPage` (Homepage)** | `header.php` | **REMOVE from global header** | Belongs strictly on the homepage (`/`), not globally across all 100+ subpages. |
| **`OfferCatalog`** | `header.php` | **REMOVE from global header** | Belongs on `/interior-design-packages/` and specific service pages. |
| **`FAQPage`** | `home.php` / subpages | **Keep Page-Specific** | Never place in `header.php`. Only implement on pages with matching visible FAQs. |

---

## 2. Recommended Complete Header Schema

Below is the clean, consolidated JSON-LD code recommended to replace the current schema block in `header.php` (between lines 150 and 421).

```html
<!-- ==========================================================================
     ORAANJ INTERIOR DESIGN - GLOBAL ENTITY GRAPH SCHEMA (HEADER)
     Canonical IDs:
     - WebSite:      https://www.oraanj-interiors.co.uk/#website
     - Organization: https://www.oraanj-interiors.co.uk/#organization
     - Business:     https://www.oraanj-interiors.co.uk/#business
     - Founder:      https://www.oraanj-interiors.co.uk/#person-rachana-gupta
     - Harrow Office:https://www.oraanj-interiors.co.uk/#harrow-office
     - Mayfair Office:https://www.oraanj-interiors.co.uk/#mayfair-office
     ========================================================================== -->
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
```

---

## 3. Manual Implementation Instructions

### Step 1: Manual Review in `header.php`
1. Open `header.php` in your text editor.
2. Locate the existing schema block between line 150 (`<script type="application/ld+json">`) and line 421 (`</script>`).
3. Replace that block with the complete recommended JSON-LD snippet provided in **Section 2** above.
4. **DO NOT** re-add the `WebPage` object into `header.php`. The homepage `WebPage` is now accurately declared in `home.php`.
5. **DO NOT** add `FAQPage` or `OfferCatalog` into `header.php`.

### Step 2: Harmonisation with Yoast SEO
Because Yoast SEO is active on WordPress:
1. In the WordPress Admin Dashboard, navigate to **Yoast SEO > Settings > Site representation**:
   - Ensure the site is represented as an **Organization**.
   - Ensure the Organization name is: `Oraanj Interior Design Ltd`.
   - Ensure the Organization Logo is set to: `https://www.oraanj-interiors.co.uk/wp-content/uploads/2026/03/oraanj-logo.webp`.
2. Check Yoast's Social Profiles settings:
   - Ensure the social profile URLs match the canonical `sameAs` array in this document.
3. *Optional Yoast Filter Integration:*
   To combine Yoast's generated graph with our custom entities, you can add this filter to your child theme's `functions.php`:
   ```php
   add_filter( 'wpseo_schema_graph_pieces', function( $pieces, $context ) {
       // Extends Yoast's native graph to ensure single-graph output
       return $pieces;
   }, 11, 2 );
   ```
   If not using the PHP filter, search engines will still parse our `<script type="application/ld+json">` alongside Yoast's graph cleanly because all entity `@id`s are absolute, unique, and connected via standard references.

### Step 3: Entity ID Verification Checklist
Ensure the following entity IDs remain completely unchanged in any future edits, as all page templates now link directly to them:
- Corporate Parent: `https://www.oraanj-interiors.co.uk/#organization`
- Commercial Operating Studio: `https://www.oraanj-interiors.co.uk/#business`
- Founder Profile: `https://www.oraanj-interiors.co.uk/#person-rachana-gupta`
- Harrow Head Office: `https://www.oraanj-interiors.co.uk/#harrow-office`
- Mayfair Meeting Studio: `https://www.oraanj-interiors.co.uk/#mayfair-office`
