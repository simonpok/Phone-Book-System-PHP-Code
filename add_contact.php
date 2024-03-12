<?php
require ('./index.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
</head>
<body>
    <br>
    <hr>
    <h3>Enter The Information Below:</h3>
    <main>
        <section>

            <form action="add_contact.php" method="POST">
                <label for="">Name: </label>
                <input type="text" id="name" name="name" placeholder="Enter you name" required><br><br>
                <label for="">Phone: </label>
                <input type="text" id="number" name="number" placeholder="Enter your Phone Number" required><br><br>
                <button class="submit" type="submit">ADD</button>

            </form>
        </section>
    </main>
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $number = $_POST["number"];



  // Use prepared statement to avoid SQL injection
  $sql = "INSERT INTO contacts (first_name, phone_number) VALUES (?, ?)";
    
  $stmt = $conn->prepare($sql);

  // Bind parameters with correct types
  $stmt->bind_param("ss", $name, $number);

  if ($stmt->execute()) {
      echo "Record added successfully";
      header("Location: ./index.php");
        exit();
  } else {
      echo "Error: " . $sql . "<br>" . $stmt->error;
  }

  $stmt->close();
}

?>