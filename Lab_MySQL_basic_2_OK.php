<?php
header("content-type:text/html; charset=utf-8");

// 0. 請先建立 Class 資料庫 （SetupDB/setup_class.txt）


// 1. 連接資料庫伺服器  @代表暫時停用錯誤訊息
$link = @mysqli_connect("127.0.0.1", "root", "root",null,8889) or die(mysqli_connect_error());
$result = mysqli_query($link, "set names utf8");
mysqli_select_db($link, "class");

// 2. 執行 SQL 敘述
$commandText = "select * from students";
$result = mysqli_query($link, $commandText);
var_dump($result); //object
echo "<br>";
echo $result->num_rows;
echo "<br>";

$row = mysqli_fetch_assoc($result);
var_dump($row); //object
echo "<br>";

// 3. 處理查詢結果
while ($row = mysqli_fetch_assoc($result))
{
  //echo $row['cName'];
  //echo "ID：$row[cID]<br>";
  echo "ID：{$row['cID']}<br>";
  echo "Name：". $row['cName']."<br>";
  echo "Sex：{$row['cSex']}<br>";
  echo "Birthday：{$row['cBirthday']}<br>";
  echo "Email：{$row['cEmail']}<br>";
  echo "<HR>";
}
$row = mysqli_fetch_assoc($result);
var_dump($row); //object
echo "<br>";
// 4. 結束連線
mysqli_close($link);

echo "<br />-- Done --";
?>
