<?php
    $con=mysqli_connect('localhost','root');
    $db=mysqli_select_db($con,'practical');

    $query="CREATE TABLE `practical`.`tour` ( `PackageCode` INT(10) NOT NULL , `PackageName` VARCHAR(10) NOT NULL ,
             `TotalDays` INT(1) NOT NULL , `PackageCost` INT(7) NOT NULL , `Discount` INT(2) NOT NULL ) ENGINE = MyISAM;";
    $res=mysqli_query($con,$query);

    $insert="INSERT INTO `tour` (`PackageCode`, `PackageName`, `TotalDays`, `PackageCost`, `Discount`) 
                VALUES ('1', 'delhi', '5', '30000', '5')";


    $res1=mysqli_query($con,$insert);

    $query2="SELECT * FROM `tour` ";
    $res2=mysqli_query($con,$query2);

    while($row = mysqli_fetch_array($res2))
    {
        $PackageCode = $row['PackageCode'];
        $PackageName = $row['PackageName'];
        $TotalDays = $row['TotalDays'];
        $PackageCost = $row['PackageCode'];
        $Discount = $row['Discount']; ?>
        <tr>
            <td> packagecode:</td>
            <td>packagename:</td>
            <td> totaldays:</td>
            <td> packagecost:</td>
            <td> discount:</td>
        </tr>
        <tr>
        <td> 
        <td><?php echo $PackageCode.'<br>'; ?></td>
            <td><?php echo $PackageName.'<br>'; ?></td>
            <td><?php echo $TotalDays.'<br>'; ?></td> 
            <td><?php echo $PackageCost.'<br>'; ?></td>
            <td><?php echo $Discount.'<br>'; ?></td>
  
<?php } ?>
