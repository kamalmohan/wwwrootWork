var http = require('http')
var dt = require('./dateTimeModule.js');

http.createServer(function(req, res){
    res.writeHead(200, {'Content-Type': 'text/html'});
    // res.write('The Current date and time is ' + dt.myDateTime());
    res.write(req.url);
    res.end();
}).listen(8080);