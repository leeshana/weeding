<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
session_start();
unset($_SESSION['ADMIN']);
 ?>
<html>
    <head>
       <title>無標題文件</title>
        <!-- 最新編譯和最佳化的 CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <!-- 選擇性佈景主題 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
        <!-- 最新編譯和最佳化的 JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <style type="text/css">
        body{
	margin:0px;
	padding:0px;
	background-color: rgba(0,0,0,1);
	background-image: url(images/123.png);
	background-repeat: no-repeat;
	background-size: cover;
}
#CN {
	position: absolute;
	height: 500px;
	width: 500px;
	top: 350px;
	right: 500px;
	color:rgba(229,81,84,1.00);
}
        </style>
    </head>
    <body>
        <?php
            include_once 'config.php';
        ?>
        <form action="Form.php" name="sort1" method="POST">
        <div id="CN"><h1>預約表
             <a href="#" style="color:rgba(70,199,161,1.00)"><h2>登出</a><a href="#">查詢</a>
             <input type="text" class="form-control" placeholder="會員帳號" name="user">
              <label for='massage'><h2>選擇日期（週日除外）：</label>
              <input type="date" id="massage" name="day"><br>
              <label>預約人員</label>
              <?php
              echo '<select id="idontfight" class="form-control" name="ower" >';
                $str="select * from 員工 order by 員工.員工編號";
                $result =   mysql_query($str); //sql查詢結果  
                $total=mysql_num_rows($result);
                 if ($total>0) 
                    {  
                         for ($i=0; $i<$total; $i++)     
                     {$row = mysql_fetch_array($result);
                        
                         echo "<option value=".$row["員工編號"].">"; 
                         echo $row['員工姓名']; 
                         echo "</option>"; 
                     }
                    } 
              echo '</select><br>';
             ?>
             <label for=""><h2>選擇婚紗</label>
                <?php
                   $str="select *from 禮服 order by 禮服.禮服編號"; 
//select 禮服.* ,禮服尺寸.禮服尺寸 from 禮服 inner join 禮服尺寸 where 禮服.禮服編號=禮服尺寸.禮服編號
                   
                   $result =   mysql_query($str); //sql查詢結果  
                   $total=mysql_num_rows($result);
                   //echo $total;
                  // echo  $str;                 
                   echo '<select id="idontfight" class="form-control" name="siz" onchange="foo(this.value)">';                                      
                
                  $row = mysql_fetch_array($result);    
                  if ($total>0) 
                    {  
                         for ($i=0; $i<$total; $i++)     
                     {$row = mysql_fetch_array($result);
                        
                         echo "<option value=".$row["禮服編號"].">"; 
                         echo $row['名稱']; 
                         echo "</option>"; 
                     }
                    } 
                    echo "</select>";
                   
                    echo '<label for="">選擇尺寸</label>'; 


                  echo '<select class="form-control" name="size" id="txtHint">'; 

                    echo "</select>"; 
                ?>
            <br>
            <script type="text/javascript">
            function foo(str)
            {
               alert(str);
                 if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","getsize.php?q="+str,true);
        xmlhttp.send();
    }
}
      
            </script>
            <button type="submit" class="btn btn-default" name="pous">送出</button><br>
           </form>
        </div>
    </body>
</html>
