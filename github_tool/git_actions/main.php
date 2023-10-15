<?php

$db=new POD("sqlite".__DIR__."database/word.db") or die("Error");
//$db=__DIR__;
echo $db;

?>