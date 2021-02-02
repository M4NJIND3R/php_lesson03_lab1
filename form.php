<!DOCTYPE html>
  <head>
    <title>The Form</title>
  </head>

  <body>
    <!-- Step 1: Set the action and method attributes so the form data will be sent to the insert.php page -->
    <!-- form to add data -->
    <form action="insert.php" method="post">
      <div>
        <!-- feld to add product name -->
        <label>Product Name:</label><br>
        <!-- Step 2: Set the name attribute using the naming convention we discussed today -->
        <input type="text" name="name">
      </div>

      <div>
        <!-- field to add product price -->
        <label>Product Price:</label><br>
        <!-- Step 3: Set the name attribute using the naming convention we discussed today -->
        <input type="text" name="price">
      </div>
      <!-- nutton to submit results to server and add it to database -->
      <button type="submit">Submit</button>
    </form>
  </body>
</html>