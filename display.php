<link rel="stylesheet" type="text/css" href="css/style.css">
<?php 
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'csm';
    $conn = new mysqli($host, $user, $pass, $db);
?>
<h2>Display records</h2>
<table>
    <tr>
        <th>Roll no.</th>
        <th>Name</th>
        <th>Branch</th>
    </tr>
    <?php
        $sql = 'select * from stud;';
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result))
        {
            echo '<tr>
                    <td>';
            echo $row['roll'];
            echo '</td><td>';
            echo $row['name'];
            echo '</td><td>';
            echo $row['branch'];
            echo '</td>
                    </tr>';
        }
    ?>
</table>