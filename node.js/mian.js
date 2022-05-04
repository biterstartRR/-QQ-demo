// 导入http模块
var http = require('http');
// 创建服务器
http.createServer(function(req, res) {
    // 发送http头
    // http状态值：200：ok
    // 内容类型：text/plain
    res.writeHead(200, { 'Content-Type': 'text/plain' });
    // 发送响应hello word
    res.end('hello word');

}).listen(3000);
console.log("ok")