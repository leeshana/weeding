<?php
        $server = "127.0.0.1";
        $username = "root";
        $password = "S07210212";
        $database_name = 'qqq';
        $link = mysql_connect($server, $username, $password);
        if(!$link) {
            die('連線失敗') ;
        }
        $db = mysql_selectdb($database_name, $link);
        mysql_query("SET NAMES 'utf8'");//資料庫可新增中文
        if(!$db) {
            die ('資料庫無法開啟');
        }
?>