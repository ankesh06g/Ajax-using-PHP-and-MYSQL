<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'csm';
    $conn = new mysqli($host, $user, $pass, $db);

    if(isset($_POST['roll_no']))
    {
    $roll = $_POST['roll_no'];
    $name = $_POST['name'];
    $branch = $_POST['branch'];

    $sql = "INSERT INTO `stud`(`roll`, `name`, `branch`) VALUES ('$roll', '$name', '$branch');";
    mysqli_query($conn, $sql);
    }
?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<h2>Add Record</h2>
<form action="add.php" method="post" >
<table>
    <tr>
        <td>Roll no.</td>
        <td><input type="text" name="roll_no"></td>
    </tr>
    <tr>
        <td>Name</td>
        <td><input type="text" name="name"></td>
    </tr>
    <tr>
        <td>Branch</td>
        <td><input type="text" name="branch"></td>
    </tr>
</table>
    <br>
    <center><input type="submit" value="submit" name="submit"></center>
</form>