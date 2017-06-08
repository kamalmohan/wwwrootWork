var fs = require('fs');

fs.unlink('unLink.txt', function (err) {
  if (err) throw err;
  console.log('File deleted!');
});