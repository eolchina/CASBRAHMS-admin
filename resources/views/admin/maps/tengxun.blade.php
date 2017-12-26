<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>异步加载地图</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <style type="text/css">
    html,
    body {
        width: 100%;
        height: 100%;
    }

    * {
        margin: 0px;
        padding: 0px;
    }

    body,
    button,
    input,
    select,
    textarea {
        font: 12px/16px Verdana, Helvetica, Arial, sans-serif;
    }

    p {
        width: 603px;
        padding-top: 3px;
        overflow: hidden;
    }

    #container {
        min-width: 600px;
        min-height: 767px;
    }

    .btn {
        width: 142px;
    }
    </style>
    <script>
    function init() {
        //设置地图中心点
        var myLatlng = new qq.maps.LatLng(39.916527, 116.397128);
        //定义工厂模式函数
        var myOptions = {
            zoom: 8, //设置地图缩放级别
            center: myLatlng, //设置中心点样式
            mapTypeId: qq.maps.MapTypeId.ROADMAP //设置地图样式详情参见MapType
        }
        //获取dom元素添加地图信息
        var map = new qq.maps.Map(document.getElementById("container"), myOptions);
    }
    //异步加载地图库函数文件
    function loadScript() {
        //创建script标签
        var script = document.createElement("script");
        //设置标签的type属性
        script.type = "text/javascript";
        //设置标签的链接地址
        script.src = "http://map.qq.com/api/js?v=2.exp&callback=init";
        //添加标签到dom
        document.body.appendChild(script);
    }

    window.onload = loadScript; // dom文档加载结束开始加载 此段代码
    </script>
</head>

<body>
    <div id="container"></div>
</body>

</html>