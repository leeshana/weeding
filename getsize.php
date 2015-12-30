<!DOCTYPE html>
<html>
<head>
</head>
<body>


<?php
$q = intval($_GET['q']);
include_once 'config.php';



                       $str="SELECT 禮服尺寸 FROM 禮服尺寸 WHERE 禮服編號='".$q."'";
                    echo  $str;
                    $result =   mysql_query($str);

                      
                    $total=mysql_num_rows($result);
                   
                    if ($total>0) 
                   { 
                     for ($i=0; $i<$total; $i++)     
                     {  $row = mysql_fetch_array($result); 
                         echo "<option>"; 
                         echo $row['禮服尺寸']; 
                         echo "</option>"; 
                     }
                    } 

?>


</body>
</html>