const fs = require('fs');

function cleanData(filename) {
  let content = fs.readFileSync(filename, 'utf8');

  // Replace Vastu, Mandir, spice kitchen
  content = content.replace(/Vastu Shastra & Cultural Principles/g, 'Architectural Flow & Aspect Planning');
  content = content.replace(/Vastu Shastra Space Planning/g, 'Natural Light & Aspect Planning');
  content = content.replace(/Vastu Shastra/g, 'architectural spatial planning');
  content = content.replace(/Vastu/g, 'spatial orientation');
  content = content.replace(/Mandir prayer sanctuaries, /g, '');
  content = content.replace(/Mandir alcoves, /g, '');
  content = content.replace(/Mandir/g, 'bespoke architectural joinery');
  content = content.replace(/spice kitchen[s]?/gi, 'walk-in pantry and prep kitchen');
  content = content.replace(/Spice Kitchen/g, 'Walk-in Pantry & Prep Kitchen');

  // Replace question
  content = content.replace(/Can you incorporate Vastu Shastra principles into our ([^?]+)\?/g, 'How do you optimise natural light and flow in our $1 home?');
  content = content.replace(/Many of our clients in ([^.]+) request Vastu Shastra space planning\.[^"]+/g, 'We carefully analyse natural daylight, aspect, and room circulation to ensure daily family life flows intuitively. From positioning morning breakfast nooks to capture sunrise to designing sightlines that connect seamlessly with the garden, every space is balanced and practical.');

  fs.writeFileSync(filename, content, 'utf8');
}

cleanData('locations-data-1.js');
cleanData('locations-data-2.js');

const c1 = fs.readFileSync('locations-data-1.js', 'utf8');
const c2 = fs.readFileSync('locations-data-2.js', 'utf8');
const m = (c1 + c2).match(/Vastu|Mandir|Indian|spice kitchen/gi) || [];
console.log('Remaining matches in data files:', m.length);
if (m.length > 0) console.log(m);
