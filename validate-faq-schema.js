const fs = require('fs');
const path = require('path');

const p1 = require('./locations-data-1.js');
const p2 = require('./locations-data-2.js');
const all = [...p1, ...p2];
const dir = path.join(__dirname, 'Locations');

let errs = [];
all.forEach(loc => {
  const filePath = path.join(dir, loc.slug + '.html');
  const content = fs.readFileSync(filePath, 'utf8');

  const schemaMatch = content.match(/<script type="application\/ld\+json">([\s\S]*?)<\/script>/);
  if (!schemaMatch) {
    errs.push(`${loc.slug} is missing JSON-LD schema tag`);
    return;
  }

  try {
    const parsed = JSON.parse(schemaMatch[1]);
    if (parsed['@context'] !== 'https://schema.org') {
      errs.push(`${loc.slug} schema @context is invalid`);
    }
    if (parsed['@type'] !== 'FAQPage') {
      errs.push(`${loc.slug} schema @type is not FAQPage`);
    }
    if (!parsed.mainEntity || parsed.mainEntity.length !== 8) {
      errs.push(`${loc.slug} mainEntity has ${parsed.mainEntity ? parsed.mainEntity.length : 0} items instead of 8`);
    }
    parsed.mainEntity.forEach((item, idx) => {
      if (item['@type'] !== 'Question' || !item.name) {
        errs.push(`${loc.slug} question ${idx + 1} is missing @type Question or name`);
      }
      if (!item.acceptedAnswer || item.acceptedAnswer['@type'] !== 'Answer' || !item.acceptedAnswer.text) {
        errs.push(`${loc.slug} answer ${idx + 1} is missing @type Answer or text`);
      }
    });
  } catch (e) {
    errs.push(`${loc.slug} JSON parse error: ${e.message}`);
  }
});

console.log(`Total errors found: ${errs.length}`);
if (errs.length > 0) {
  console.log(errs);
} else {
  console.log(`Verified successfully: All 34 location files contain valid FAQPage Schema JSON-LD with all 8 questions and answers!`);
}
