var express = require ('express');

app = express();
 
port = 3000;

app.get('/',function(request,response){
    response.send("<h1>I am here to save the world - Jesus</h1>")
})

app.listen(port);

console.log("Server running",port);
