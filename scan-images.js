const fs = require('fs');
const path = require('path');

function extractImagesFromText(txt) {
  const matches = txt.match(/https:\/\/www\.oraanj-interiors\.co\.uk\/wp-content\/uploads\/[^\s"'<>\)]+\.(?:jpg|jpeg|png|webp)/gi) || [];
  return matches;
}

const allImgs = new Set();
function scanDir(dir) {
  const files = fs.readdirSync(dir);
  for (const f of files) {
    const full = path.join(dir, f);
    if (f.startsWith('.') || f === 'node_modules' || f === 'Locations') continue;
    const stat = fs.statSync(full);
    if (stat.isDirectory()) {
      scanDir(full);
    } else if (f.endsWith('.html') || f.endsWith('.php') || f.endsWith('.js')) {
      const txt = fs.readFileSync(full, 'utf8');
      extractImagesFromText(txt).forEach(img => allImgs.add(img));
    }
  }
}

scanDir('.');
const imgList = [...allImgs].filter(url => {
  const lower = url.toLowerCase();
  return !lower.includes('logo') && !lower.includes('icon') && !lower.includes('avatar') && !lower.includes('favicon') && !lower.includes('flag');
});

console.log('Total unique genuine images found across site codebase:', imgList.length);
fs.writeFileSync('available-images.json', JSON.stringify(imgList, null, 2));
