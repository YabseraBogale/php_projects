<?php
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open(__DIR__.'/database/git_Actions.db');
    }
}



?>