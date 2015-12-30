<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
   <div id="CN">
        <?php
        include_once 'config.php';
        $會員帳號=$_POST['user'];
        $員工編號=$_POST["ower"];
        $禮服尺寸=$_POST['size'];
        $預約日期=$_POST['day'];
        $禮服編號=$_POST['siz'];
        if ($會員帳號!=""&&$預約日期!="")
            {
             $str="INSERT INTO 預約表(預約日期,會員帳號,員工編號,禮服編號,禮服尺寸) VALUES ('".$預約日期."','".$會員帳號."','".$員工編號."','".$禮服編號."','".$禮服尺寸."')";
             mysql_query($str)or die ('無法新增'.mysql_error());
             $sql="SELECT * FROM 預約表 WHERE 會員帳號='".$會員帳號."'";
             $result =   mysql_query($sql); //sql查詢結果  
             $total=mysql_num_rows($result);
            echo '<table class="table">';
            echo '<tr>';
            echo '<td>預約日期</td>';
            echo '<td>會員帳號</td>';
            echo '<td>員工編號</td>';
            echo '<td>禮服編號</td>';
            echo '<td>禮服尺寸</td>';
            echo '</tr>';
             for ($i=0;$i<$total;$i++) 
             {
               $row = mysql_fetch_array($result); //將陣列以欄位名索引
               echo "<tr>";
               echo '<td>'.$row["預約日期"].'</td>';
               echo '<td>'.$row["會員帳號"].'</td>';
               echo '<td>'.$row["員工編號"].'</td>';
               echo '<td>'.$row["禮服編號"].'</td>';
               echo '<td>'.$row["禮服尺寸"].'</td>';
               echo "</tr>";
             }
            
           }
        else 
            {
                echo '有東西忘記輸入囉~';
                echo '<meta http-equiv=REFRESH CONTENT=1;url=reservation.php>';
            }
            echo '</table>';
    ?>
         <button type="button" class="btn btn-primary" onclick="location.href='index.php'">首頁</button>
        <button type="button" class="btn btn-success" onclick="location.href='reservation.php'">繼續預約</button>
   </div>
    </body>
</html>
