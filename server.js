var static = require('node-static');
var file = new static.Server('./site');
var port = process.env.PORT || 8080;

require('http').createServer(function (request, response) {
    request.addListener('end', function () {
        //
        // Serve files!
        //
        file.serve(request, response);
    }).resume();
}).listen(port, () => {
    console.log("Server started on port: ", port);
});