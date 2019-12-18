exports.myDateTime = function () {
  return Date();
};

var http = require('http');
var dt = exports.myDateTime = function () {
  return Date();
};

http.createServer(function (req, res) {
  res.writeHead(200, {'Content-Type': 'text/html'});
  res.end('Hello World!'+ dt.myDateTime());
}).listen(8080);