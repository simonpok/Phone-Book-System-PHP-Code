<?php
$serverName="localhost";
$UserName="root";
$password="unlocked007";
$dbName="phone_book";

$conn = mysqli_connect($serverName,$UserName,$password,$dbName);

if(!$conn){
die("Connection Unsuccessfull 👎".mysqli_connect_errno());
}
else{
    echo "Connection Successfull 🍻 <br>";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <main>
        <section>
            <br><br><br>
            <form action="add_contact.php" method="POST">
                <button>ADD</button>&nbsp; &nbsp;
                </form>
                <form action="./edit_contact" method="POST">
                <button>EDIT</button>&nbsp; &nbsp;
                </form>
                <form action="delete_contact.php" method="POST">
                <button>DELELE</button>
                </form>
            
        </section>
    </main>
    <hr>
    <h3>Fetched Data from MySql:</h3>
</body>
</html>

<?php


$sql="SELECT * FROM contacts";
$result=$conn->query($sql);

if($result->num_rows>0){
    while($row = $result->fetch_assoc()) {
    echo "|| ID: ".$row["id"]." || "."First Name: ".$row["first_name"]." || ".
    "Middle Name: ".$row["middle_name"]." || "."Last Name: ".$row["last_name"]." || "."Phone Number: ".$row["phone_number"]."
    ||<br>";
    }
}else{
    echo "0 results";
}
 
?>