const fs = require('fs');

const phtml = fs.readFileSync('portfolio.html', 'utf8');

// Regex without backticks or shell escaping issues
const cards = [];
const cardBlocks = phtml.split('<a class="orp-card');

for (let i = 1; i < cardBlocks.length; i++) {
  const block = cardBlocks[i];
  const hrefMatch = block.match(/href="([^"]+)"/);
  const imgMatch = block.match(/src="([^"]+)"/);
  const altMatch = block.match(/alt="([^"]+)"/);
  const titleMatch = block.match(/<h3 class="orp-card-title">([^<]+)<\/h3>/);
  const locMatch = block.match(/<span class="orp-card-location">([^<]+)<\/span>/);

  if (hrefMatch && imgMatch && titleMatch) {
    cards.push({
      url: hrefMatch[1],
      img: imgMatch[1],
      alt: altMatch ? altMatch[1] : titleMatch[1].trim(),
      title: titleMatch[1].trim(),
      loc: locMatch ? locMatch[1].trim() : ''
    });
  }
}

console.log('Total extracted portfolio projects:', cards.length);
fs.writeFileSync('extracted-portfolio.json', JSON.stringify(cards, null, 2));
console.log('Saved to extracted-portfolio.json');
