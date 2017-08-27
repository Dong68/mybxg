<?php
//后端路由
//路由：根据URL的不同导航到不同的页面
//include的作用就是获取指定文件的所有代码，也就是在当前页面嵌入另外一个页面
//    include('./views/main/login.html');

//$_SERVER:这个是全局变量
//print_r
//    var_dump($_SERVER);
//array_key_exists('PATH_INFO',$_SERVER)判断数组中是否包含指定属性

//explode()分割字符串

    $dir='main';//默认文件夹名称，这个文件夹名称是views文件夹里面的
    $filename='index';//默认文件名称
    //判断路径是否存在，存在的话就对路径进行解析
    if(array_key_exists('PATH_INFO',$_SERVER)){
    //获取URL中的路径
     $path=$_SERVER['PATH_INFO'];
    //这个路径的格式就是 /main/index
    //去掉第一个斜杠
    $str=substr($path,1);
    //按照斜杠分割目录名称和文件名称
    $arr=explode('/',$str);
    if(count($arr)==2){//count()这个是统计数量的
    //覆盖默认的目录名称
        $dir=$arr[0];
    //覆盖默认的文件名称
        $filename=$arr[1];
    }else{
    //跳转到登录页面
        $filename='login';
    }
    }
    //嵌入一个子页面
            include('./views/'.$dir.'/'.$filename.'.html');


?>