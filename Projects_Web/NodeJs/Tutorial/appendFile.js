var fs = require('fs');

fs.appendFile('appendFile.txt', 'Hello content!', function(err){
    if (err) {
        throw err;
    }
    console.log('Saved!');
});