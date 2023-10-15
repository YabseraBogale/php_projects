<?php
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open(__DIR__.'/database/word.db');
    }
}

$db = new MyDB();
$result = $db->query('SELECT Pword FROM Python');

while($row =$result->fetchArray()){
    var_dump($row['Pword']);
    echo '<br>';
}

?>