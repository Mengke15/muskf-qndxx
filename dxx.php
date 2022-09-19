<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
        img {
    max-width: 100%;
    height: auto;
}
</style>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <title>"青年大学习"2022年第20期</title> //标题同步暂时没写
        <script>
            window.onload = function(){
                //1、创建ajax对象
                let xhr = new XMLHttpRequest();
                //?????
                xhr.onreadystatechange = function(){
                    if(xhr.readyState == 4){
                        //判断本次下载的状态码都是多少
                        if(xhr.status == 200){
                            let mUrlPattern = "https://h5.cyol.com/special/daxuexi/{}/m.html"
                            let imgUrlPattern = "https://h5.cyol.com/special/daxuexi/{}/images/end.jpg"
                            let obj = JSON.parse(xhr.responseText);
                            let key;
                            for (let k in obj){
                                key = k;
                            }
                            let mUrl = mUrlPattern.replace(/{}/, key);
                            let imgUrl = imgUrlPattern.replace(/{}/, key);
                            //document.getElementById("mUrl").innerHTML = mUrl;
                            document.getElementById("end_img").setAttribute("src", imgUrl);
                        }else{
                            alert("获取失败:" + xhr.status);
                        }
                    }
                }
                //2、调用open
                xhr.open("get", "xxxx", true); //xxxx填代理后的接口
                //3、调用send
                xhr.send();
                //4、等待数据响应
            }
            </script>
            <script>
            document.setTitle = function(t) {
        document.title = "青年大学习"2022年第20期; //标题同步暂时没写
        var i = document.createElement('iframe');
        i.src = '/wechat/images/nopng.png';
        i.style.display = 'none';
        i.onload = function() {
            setTimeout(function(){
                i.remove();
            }, 9)
        }
        document.body.appendChild(i);
    }
        </script>
    </head>
    <body>
        <img id="end_img"></img>
    </body>
</html>