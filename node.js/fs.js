var fs = require("fs");
var data = fs.readFileSync('./data.txt')
console.log(data.toString())

// var fs = require("fs");
// fs.readFileSync('./data.txt', function(err, data) {
//     if (err) return console.error(err);
//     console.log(data.toString())
// });
// console.log(fs.readFileSync('./data.txt').toString())