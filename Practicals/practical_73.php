<html>
<body>    
<?php 
    $con = mysqli_connect('localhost','root');
    $db = mysqli_select_db($con,'mysql');
    $query = 'SELECT * FROM `student2` WHERE 1';
    $res = mysqli_query($con,$query);
    //$fetch = mysqli_fetch_array($res,'MYSQLI_ASSOC');
?>    
    <table border="1" cell-padding= "10px">
        <tr>
                <th>Name</th>
                <th>Rollno</th>
                <th>Standard</th>
                <th>division</th>
                <th>city</th>
                <th>marks</th>
        </tr>
<?php 
    while($row = mysqli_fetch_array($res))
        {
            $rollno = $row['rollno'];
            $name = $row['name'];
            $standard = $row['standard'];
            $division = $row['division'];
            $city = $row['city'];
            $result = $row['Result']; 
?>
                <tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $rollno ?></td>
                    <td><?php echo $standard ?></td>
                    <td><?php echo $division ?></td>
                    <td><?php echo $city ?></td>
                    <td><?php echo $result ?></td>
                    <td><a href="practical5_9_home.php?rollno=<?php echo $rollno ?>">Click here to get know your result</a>
                </tr>
   <?php } ?>
   </table>
</body>
</html>