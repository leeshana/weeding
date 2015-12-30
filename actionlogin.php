<?php 
	//初始化
	include_once 'config.php';//連結資料庫檔案
	$user=$_POST['user'];
	$userpass=$_POST['userpass'];
	//搜尋資料庫資料
	$sql= "SELECT * FROM 會員 where 會員帳號 = '$user'";
	$result = mysql_query($sql);
	$row = @mysql_fetch_row($result);
	//判斷帳號與密碼是否為空白
	//以及MySQL資料庫裡是否有這個會員
	if($user != null && $userpass != null)
	{
        $_SESSION['username'] = $user;
        echo '登入成功!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=reservation.php>';
	}
	else
	{
            echo '登入失敗!';
            echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
	}
?>