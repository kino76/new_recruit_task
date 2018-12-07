<?php
require_once 'fetchTester.php';

$fetchtester = new FetchTester();
$fetchtester->fetch("testtable"); // 引数：テーブル名
echo "hello World";

?>