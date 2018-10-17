const fs = require('fs');
const assets =  '../assets/js/vendor/';


// Create ../assets and subdirectories if they're not there.
if (!fs.existsSync('../assets')) {
  fs.mkdirSync('../assets');
  if (!fs.existsSync('../assets/js')) {
    fs.mkdirSync('../assets/js');
  }
}

if (!fs.existsSync('../assets/fonts')) {
  fs.mkdirSync('../assets/fonts');
}

if (!fs.existsSync('../assets/css')) {
  fs.mkdirSync('../assets/css');
}

if (!fs.existsSync(assets)){
    fs.mkdirSync(assets);
}


// Copy Foundation JavaScript file.
fs.createReadStream('./node_modules/foundation-sites/dist/js/foundation.min.js')
  .pipe(fs.createWriteStream(assets + 'foundation.min.js'));


// Copy the Foundation Icon CSS and font files.
fs.createReadStream('./node_modules/foundation-icon-fonts/foundation-icons.css')
  .pipe(fs.createWriteStream('../assets/fonts/foundation-icons.css'));
fs.createReadStream('./node_modules/foundation-icon-fonts/foundation-icons.eot')
  .pipe(fs.createWriteStream('../assets/fonts/foundation-icons.eot'));
fs.createReadStream('./node_modules/foundation-icon-fonts/foundation-icons.woff')
  .pipe(fs.createWriteStream('../assets/fonts/foundation-icons.woff'));
fs.createReadStream('./node_modules/foundation-icon-fonts/foundation-icons.ttf')
  .pipe(fs.createWriteStream('../assets/fonts/foundation-icons.ttf'));
fs.createReadStream('./node_modules/foundation-icon-fonts/foundation-icons.svg')
  .pipe(fs.createWriteStream('../assets/fonts/foundation-icons.svg'));
