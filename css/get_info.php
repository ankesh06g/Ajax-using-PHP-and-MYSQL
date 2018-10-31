<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'csm';
    $conn = new mysqli($host, $user, $pass, $db);

    if(isset($_POST['roll_no']))
    {
        $roll = $_POST['roll_no'];
        $sql = "select * from stud WHERE roll = '$roll';";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result))
        {
            $name = $row['name'];
            $branch = $row['branch'];
        }
    }   
?>
<table>
    <tr>
        <th>Name</th>
        <th>Branch</th>
    </tr>
    <tr>
        <td><?php echo $name ?></td>
        <td><?php echo $branch ?></td>
    </tr>
</table>