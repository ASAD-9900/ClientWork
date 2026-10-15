const fs = require('fs');
const path = require('path');

const dir = path.join(__dirname, 'Locations');
const files = fs.readdirSync(dir).filter(f => f.endsWith('.html'));

console.log('Checking ' + files.length + ' files in Locations/...');
let allPassed = true;

files.forEach(f => {
  const content = fs.readFileSync(path.join(dir, f), 'utf8');
  
  // 1. Check style tag
  if (content.includes('<style')) {
    console.error('FAIL: ' + f + ' contains <style> tag!');
    allPassed = false;
  }
  
  // 2. Check first line comment
  const firstLine = content.split('\n')[0].trim();
  if (!firstLine.startsWith('<!-- Page URL:')) {
    console.error('FAIL: ' + f + ' missing Page URL comment at top! Found: ' + firstLine);
    allPassed = false;
  }
  
  // 3. Count H1
  const h1Matches = content.match(/<h1[^>]*>/gi) || [];
  if (h1Matches.length !== 1) {
    console.error('FAIL: ' + f + ' has ' + h1Matches.length + ' H1s (expected 1)');
    allPassed = false;
  }
  
  // 4. Count H2
  const h2Matches = content.match(/<h2[^>]*>/gi) || [];
  if (h2Matches.length !== 2) {
    console.error('FAIL: ' + f + ' has ' + h2Matches.length + ' H2s (expected 2)');
    allPassed = false;
  }
  
  // 5. Check Pricing Cards
  if (!content.includes('£600') || !content.includes('£900') || !content.includes('£1,500')) {
    console.error('FAIL: ' + f + ' missing pricing tiers!');
    allPassed = false;
  }
  
  // 6. Check internal links
  if (!content.includes('https://www.oraanj-interiors.co.uk/')) {
    console.error('FAIL: ' + f + ' missing internal links!');
    allPassed = false;
  }
});

if (allPassed) {
  console.log('SUCCESS: All ' + files.length + ' location pages passed 100% of validation checks!');
}
