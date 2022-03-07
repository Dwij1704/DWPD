<html>
<body>    
<?php 
    $con = mysqli_connect('localhost','root');
    $db = mysqli_select_db($con,'mysql');
    $query = 'SELECT * FROM `tour package` WHERE 1';
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
            $packagecode = $row['PackageCode'];
            $packagename = $row['PackageName'];
            $totaldays = $row['TotalDays'];
            $packagecost = $row['PackageCost'];
            $discount = $row['Discount'];
?>
                <tr>
                    <td><?php echo $packagecode ?></td>
                    <td><?php echo $packagename ?></td>
                    <td><?php echo $totaldays ?></td>
                    <td><?php echo $packagecost ?></td>
                    <td><?php echo $discount ?></td>
                    <td><a href="practical5_10_home.php?totaldays=<?php echo $totaldays ?>& packagecode=<?php echo $packagecode?>">Details</a></td>
                </tr>
   <?php } ?>
   </table>
</body>
</html>