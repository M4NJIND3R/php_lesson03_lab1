<?php
  // creating a connection to our database 
  $conn = mysqli_connect("localhost", "root", null, "lesson_03");

  // getting all the rows from the table 
  $result = mysqli_query($conn, "SELECT * FROM products");

  // Step 1: Using the correct MySQLi function, fetch all the rows as associative arrays (replace the null value with the expression)
  //reformatting the rows from the table into a multidimentional array
  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
  <head>
    <title>Document</title>
  </head>

  <body>
    <table>
      <thead>
        <tr>
          <th>Product Name</th>
          <th>Product Price</th>
        </tr>
      </thead>

      <tbody>
        <?php 
          //loop to print each row from the product table in our database into the html page
          foreach ($rows as $row)
          {
            // Step 2: Using a foreach loop, iterate over the rows and display the product name and price in the provided cells (<td></td>)
            // HINT: Wrap the lines below with the foreach block
            echo "<tr>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['price']}</td>";
            echo "</tr>";
          }
        ?>
      </tbody>
    </table>
  </body>
</html>