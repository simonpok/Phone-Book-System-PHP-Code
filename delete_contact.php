<?php
require ('./index.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
<br>
    <hr>
    <h3>Enter The Information Below:</h3>
    <main>
        <section>
            <form action="delete_contact.php" method="POST">
                <label for="">ID: </label>
                <input type="text" name="id" id="id" placeholder="Enter ID you wanna Drop" required><br>
                <label for="">Number: </label>
                <input type="text" name="number" id="number" placeholder="Enter Phn you wanna Drop" required><br>
                <button class="submit" type="submit">DELETE</button>
            </form>
        </section>
    </main>
    
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST["id"];
    $number = $_POST["number"];

    $sql = "DELETE FROM contacts WHERE id='$id' AND phone_number = '$number'";
    
$result = mysqli_query($conn, $sql);
}


?>