<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
  <html>
  <head>
  <meta charset="utf-8">
  <title>婚紗系統</title>
  	<script src="./js/jquery-2.1.4.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <style>
  	
			html, body{
				margin: 0;
				padding: 0;
				height: 100%;
				width: 100%;
				background-color:#000;
			}
			
		
                        #banner-box div{
				position: absolute;
				height: 100%;
				width: 100%;
				background-position: center center;
				background-repeat: no-repeat;
				background-size: 100% 100%;
				display: none;
			}
			#box{
					margin: 0;
					padding: 0;
					position: absolute;
					top: 50%;
					left: 45%;
					z-index: 0;
				}
		
  </style>
  <script>
			function loopBanner(index)
			{
				var arrImg = $("#banner-box").children("div");
				var total = arrImg.length;
				
				if( !total ) return false;
				if( index >= total ) index = 0;
				
				var next = index + 1;
				if( next > total-1 ) next = 0;

				$(arrImg[index]).show();
				$(arrImg[next]).show();
				$(arrImg[next]).css('opacity', '0');
				$(arrImg[next]).animate({opacity:'1'}, 4000);
				$(arrImg[index]).animate({opacity:'0'}, 6000, function(){
					$(arrImg[index]).hide();
					$(arrImg[next]).hide();
					loopBanner(index+1) }
				);
			}
			
			$(document).ready(function(){ 
				loopBanner(0);		// 从第 0 个开始播放
			}) 
		</script>
  </head>
  <body>
  <div id="banner-box">
    <div style=" background-image:url(./images/1.jpg)">
    </div>
    <div style=" background-image:url(./images/3.jpeg)">
    </div>
    <div style=" background-image:url(./images/2.jpg)">
    </div>
  </div>
  <div id="box">
  	<form  name="form" method="post" action="actionlogin.php"> 
      <label style="color:#EC4648; font-size:36px">登入：</label>
      <input type="text"  height="30px" name="user"><br>
    	<label style="color:#EC4648; font-size:36px">密碼：</label>
        <input type="text" height="30px" name="userpass">
		<button type="submit" class="btn btn-default">送出</button>
        <button type="button" class="btn btn-link" style="font-size:25px;">註冊</button>
   </form>
  </body>
</html>
