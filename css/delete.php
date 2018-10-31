<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'csm';
    $conn = new mysqli($host, $user, $pass, $db);

    if(isset($_POST['roll_no']))
    {
    $roll = $_POST['roll_no'];
    $sql = "DELETE FROM `stud` WHERE roll = '$roll';";
    mysqli_query($conn, $sql);
    }
?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<h2>Delete Record</h2>
<form action="delete.php" method="post" >
<table>
    <tr>
        <td>Roll no.</td>
        <td><input type="text" name="roll_no"></td>
    </tr>
</table>
    <br>
    <center><input type="submit" value="submit" name="submit"></center>
</form>
