var fs = require('fs');

fs.writeFile('writeFile.txt', 'Hello content!', function (err) {
  if (err) throw err;
  console.log('Saved!');
});