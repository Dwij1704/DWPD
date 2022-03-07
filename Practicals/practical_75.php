<?php
    $con = mysqli_connect('localhost','root');
    $db = mysqli_select_db($con,'mysql');
    $query = "SELECT * FROM `employee` WHERE 1";
    $res = mysqli_query($con,$query);
?>    
    <table border="3" cellspacing="10px" cellpadding="10px">
        <tr>
            <th>Eid</th>
            <th>Ename</th>
            <th>Designation</th>
            <th>Salary</th>
        </tr>
        <?php 
            while ($row = mysqli_fetch_array($res)) 
                {
                    $Eid = $row['Eid'];
                    $Ename = $row['Ename'];
                    $Designation = $row['Designation'];
                    $Salary = $row['Salary'];
                    ?>
                <tr>
                    <td><?php echo $Eid; ?></td>
                    <td><?php echo $Ename; ?></td>
                    <td><?php echo $Designation; ?></td>
                    <td><?php echo $Salary; ?></td>
                </tr>
               <?php } ?>
    </table>