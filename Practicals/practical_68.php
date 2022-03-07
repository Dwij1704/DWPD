<?php 
    $con = mysqli_connect('localhost','root');
    $db = mysqli_select_db($con,"practical");
    $query ="SELECT * FROM practical67";
    $res = mysqli_query($con ,$query);
    ?>
     <?php 
        $ans = mysqli_fetch_row($res);
        print_r($ans);
    ?>
    <table border="3" cellspacing="10px" cellpadding = "10px">
            <tr>
                <th>Name</th>
            </tr>
        <?php   while($row = mysqli_fetch_array($res))
        { ?>
            <tr>
                <td><?php echo $row['Name']; ?></td>
            </tr>
        <?php } ?>    
    </table>
   