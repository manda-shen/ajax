<?php
//處理刪除資料的請求
include_once "db.php";
$id=$_POST['id'];

// 後端作法
// $row=$Stu->find($id);

$Stu->del($id);
// echo $Stu->del($id);

echo $_POST['classroom'];

// 後端作法
// echo $row['classroom'];


?>