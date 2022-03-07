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
            $roll = $_GET['rollno'];
        ?>
        <?php 
            $con = mysqli_connect('localhost','root');
            $db = mysqli_select_db($con, 'mysql');
            $query = "Select * from student2 where rollno=$roll";
            echo mysqli_error($con);
            $res = mysqli_query($con, $query);
        ?>
        <?php 
            while($row = mysqli_fetch_array($res))
            {
                $roll_no = $row['rollno'];
                $result = $row['Result'];
            }
        ?>
        <tr>
            <th>Roll</th>
            <th>Result</th>
        </tr>
        <tr>
            <td><?php echo $roll_no ?></td>
            <td><?php echo $result ?></td>
        </tr>
    </table>
</body>
</html>