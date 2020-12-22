<html>
<head>
	<title>Book Detail</title>
</head>
<body>
    <table>
    	<tr>
    		<td> ID </td>
    		<td> Name </td>
    		<td> Author </td>
    		<td> Edition </td>
    		<td> Image </td>
    	</tr>
    	<tr>
    		<?php
    		   require_once 'models/database.php';
               $book = $_GET["book"];
               $book = getResult("select * from books where name = '$book'");
               foreach ($book as $i) 
               echo "
                  <td>".$i["id"]."</td>
                  <td>".$i["name"]."</td>
                  <td>".$i["author"]."</td>
                  <td>".$i["edition"]."</td>
                  <td> <img src='".$i["image"]."' height='60' width='60'></td>
               ";
    		?>
    	</tr>
    </table>
</body>
</html>