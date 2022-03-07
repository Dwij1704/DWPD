<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="3" cellspacing="5px">
        <?php 
            $totdays = $_GET['totaldays'];
            $packcode = $_GET['packagecode'];
        ?>
        <?php 
            $con = mysqli_connect('localhost','root');
            $db = mysqli_select_db($con, 'mysql');
            $query = "Select * from tourpackage where TotalDays=$totdays AND PackageCode =$packcode";
            echo mysqli_error($con);
            $res = mysqli_query($con, $query);
        ?>
        <tr>
            <th>TotalDays</th>
            <th colspan="3">Destinations</th>
        </tr>
        <?php 
            while($row = mysqli_fetch_array($res))
            {
                $days = $row['TotalDays'];
                $place1 = $row['place1'];
                $place2 = $row['place2'];
                $place3 = $row['place3'];
        ?>
            <tr>
                <td><?php echo $days ?></td>
                <td><?php echo $place1 ?></td>
                <td><?php echo $place2 ?></td>
                <td><?php echo $place3 ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>