<?php include 'header.php' ?>
<?php include 'banner.php' ?>
<?php include 'navigator.php' ?>
<?php include 'connect.php' ?>

<div class="container mt-5">
<h1>Minor_depart</h1>
    <table class = "table table-bordered" >
        <tr>
            <th>รหัสแผนก</th>
            <th>ชื่อรอง</th>
            <th>ชื่อแผนก</th>
        </tr>
    
<?php
    $sql = "SELECT * FROM minor_depart";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       ?>
       <tr>
        <td><?php echo $row['minor_id']?></td>
        <td><?php echo $row['minor_name']?></td>
        <td><?php echo $row['depart_name']?></td>
       </tr>
       <?php


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