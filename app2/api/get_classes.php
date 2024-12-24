<?php
include_once "db.php";
// $classes=$Stu->all(" group by `classroom`");
$classes=q("select `classroom` from `students`  group by `classroom`");

echo json_encode($classes);
?>