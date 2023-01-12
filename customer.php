<?php include 'header.php' ?>
<?php include 'banner.php' ?>
<?php include 'navigator.php' ?>
<?php include 'connect.php' ?>

<div class="container mt-5">
<h1>ข้อมูลลูกค้า</h1>
    <table class = "table table-bordered" >
        <tr>
            <th>รหัสลูกค้า</th>
            <th>ชื่อ-นามสกุล</th>
            <th>ที่อยู่</th>
            <th>ตำแหน่ง</th>
            <th>เงินเดือน</th>
        </tr>
    
<?php
    $sql = "SELECT * FROM customer";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       ?>
       <tr>
        <td><?php echo $row['cus_id']?></td>
        <td><?php echo $row['cus_name']?></td>
        <td><?php echo $row['cus_address']?></td>
        <td><?php echo $row['cus_position']?></td>
        <td><?php echo $row['cus_salary']?></td>
       </tr>
       <?php

        /*echo $row['student_id']. " - " . $row['name'];
        echo  "<br>";*/
    }
    } else {
    echo "0 results";
    }

    mysqli_close($conn);
?>
 </table>
</div>

<?php include 'footer.php' ?>
</div>
</body>
</html>