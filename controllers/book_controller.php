<?php
    require_once 'models/database.php';
    function all_books() {
       return getResult("select * from books");
    }
?>