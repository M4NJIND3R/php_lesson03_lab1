<?php

  // Step 1: In the string provided below, write your SQL insert statement to create a new product
  // queery which we will run to add row in our roduct table in database
  $sql = 
  "
    INSERT INTO products (
      name,
      price
    ) VALUES (
      '{$_POST['name']}',
      {$_POST['price']}
    );
  ";

  // Step 2: Replace the value "null" with a MySQLi connection to your database (make sure you've run the SQL file in Workbench before testing!)
  // creates connection to out database
  $conn = mysqli_connect("localhost","root",null,"lesson_03");

  // Step 3: Execute the SQL statement ($sql) using the MySQLi query function (replace the null value)
  // executes the query to add the row in table 
  $res = mysqli_query($conn,$sql);

  // If everything is working we should see the success message, otherwise we may get an error
  if ($res) {
    echo "The new product was created successfully.";
  } else {
    echo "There was an error creating the new product: " . mysqli_error($conn);
  }

?>