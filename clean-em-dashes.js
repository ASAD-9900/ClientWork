const fs = require('fs');

function cleanEmDashes(filePath) {
  let content = fs.readFileSync(filePath, 'utf8');
  
  // Specific replacements
  content = content.replace(/BUILD — LONDON/g, 'BUILD, LONDON');
  content = content.replace(/BUILD &amp; LONDON/g, 'BUILD, LONDON');
  content = content.replace(/—including/g, ', including');
  content = content.replace(/—such as/g, ', such as');
  content = content.replace(/—from/g, ', from');
  content = content.replace(/—opening/g, ', opening');
  content = content.replace(/—restoring/g, ', restoring');
  content = content.replace(/—introducing/g, ', introducing');
  content = content.replace(/—maximising/g, ', maximising');
  content = content.replace(/—maximizing/g, ', maximizing');
  content = content.replace(/—orienting/g, ', orienting');
  content = content.replace(/—balancing/g, ', balancing');
  content = content.replace(/—designing/g, ', designing');
  content = content.replace(/—ensuring/g, ', ensuring');
  content = content.replace(/—while/g, ', while');
  content = content.replace(/—we/g, ', we');
  content = content.replace(/—to/g, ' to');
  content = content.replace(/—our/g, ', our');
  content = content.replace(/—timelines/g, ', timelines');
  content = content.replace(/—under/g, ' under');
  content = content.replace(/—as seen/g, ', as seen');
  content = content.replace(/—a trend-defining/g, ', a trend-defining');
  content = content.replace(/—acoustic/g, ', acoustic');
  content = content.replace(/—AutoCAD/g, ', AutoCAD');
  content = content.replace(/—required/g, ', required');
  content = content.replace(/—warm/g, ', warm');

  // Any remaining em dash replaced cleanly
  content = content.replace(/ — /g, ', ');
  content = content.replace(/—/g, ', ');
  content = content.replace(/&mdash;/gi, ', ');

  // Fix any accidental double commas
  content = content.replace(/,\s*,/g, ',');

  fs.writeFileSync(filePath, content, 'utf8');
}

cleanEmDashes('locations-data-1.js');
cleanEmDashes('locations-data-2.js');
cleanEmDashes('locations-commercial-data.js');
cleanEmDashes('generate-all-34-locations.js');

console.log('Cleaned all source data and generator files.');
