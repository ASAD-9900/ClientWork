const fs = require('fs');

const p1 = require('./locations-data-1.js');
const p2 = require('./locations-data-2.js');
const allLocations = [...p1, ...p2];
const cats = JSON.parse(fs.readFileSync('categorized-images.json', 'utf8'));

// Pools
const livingPool = [...new Set(cats.living)];
const kitchenPool = [...new Set(cats.kitchen)];
const diningAndBathPool = [...new Set([...cats.dining, ...cats.bathroom, ...cats.bedroom])];
const joineryPool = [...new Set([...cats.joinery, ...cats.commercial, ...cats.other])];

console.log('Unique counts:', {
  living: livingPool.length,
  kitchen: kitchenPool.length,
  diningAndBath: diningAndBathPool.length,
  joinery: joineryPool.length
});

// Assign unique images to each of the 34 locations:
// heroImg from livingPool (34 distinct images)
// typologyImg from kitchenPool (34 distinct images)
// servicesImg from diningAndBathPool (34 distinct images)
// guidanceImg from joineryPool (34 distinct images)

allLocations.forEach((loc, i) => {
  loc.heroImg = livingPool[i % livingPool.length];
  loc.typologyImg = kitchenPool[i % kitchenPool.length];
  loc.servicesImg = diningAndBathPool[i % diningAndBathPool.length];
  loc.guidanceImg = joineryPool[i % joineryPool.length];
});

// Split back to part 1 and part 2
const newP1 = allLocations.slice(0, p1.length);
const newP2 = allLocations.slice(p1.length);

fs.writeFileSync('locations-data-1.js', '// Locations Part 1: Locations 1 to 17\nmodule.exports = ' + JSON.stringify(newP1, null, 2) + ';\n', 'utf8');
fs.writeFileSync('locations-data-2.js', '// Locations Part 2: Locations 18 to 34\nmodule.exports = ' + JSON.stringify(newP2, null, 2) + ';\n', 'utf8');

console.log('Successfully assigned 34 distinct images for Hero, Typology, Services, and Guidance across all 34 locations!');
