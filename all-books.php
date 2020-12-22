<?php require_once 'controller/book_controller.php' ?>
<html>
<head>
	<title>All books</title>
</head>
<body>
    <input type="text" id="search" name="search" placeholder="search.." onkeyup="show_suggestions(this)" size="100">
    <div id="books-table"> 
    <?php
     echo "
        <table>
            <tr>
                <td><b> ID </b></td>
                <td><b> Name </b></td>
                <td><b> Author </b></td>
                <td><b> Edition </b></td>
                <td><b> Image </b></td>
            </tr>
        ";
        $books = all_books();
        foreach ($books as $i) {
          echo "<tr> <td> ".$i["id"]." </td> <td> ".$i["name"]." </td> <td> ".$i["author"]." </td> 
          <td> ".$i["edition"]." </td> <td> <img src=' ".$i["image"]."' height='50' width='50'> </td> </tr>";
        }
        echo "</table>";
    ?>
    </div>
    <script>
        function show_suggestions(typed_book) {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
               if (xhr.readyState == 4 && xhr.status == 200) {
                  document.getElementById("books-table").innerHTML = xhr.responseText;
               }
            }
            xhr.open("GET", "controller/searchBook.php? book="+typed_book.value, true);
            xhr.send();
        }
    </script>
</body>
</html>