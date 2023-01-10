<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
$conn=mysqli_connect("localhost","root","","crud")or die("Connection Failed");
$sql="SELECT * FROM `student` join studentclass where student.sclass=studentclass.cid";
$res=mysqli_query($conn,$sql)or die("query unsyccessful");

if(mysqli_num_rows($res)>0){


?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
while($row=mysqli_fetch_assoc($res)){


            ?>
            <tr>
                <td><?php echo $row['sid'] ?></td>
                <td><?php echo $row['sname'] ?></td>
                <td><?php echo $row['saddress'] ?></td>
                <td><?php echo $row['cname'] ?></td>
                <td><?php echo $row['sphone'] ?></td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <?php
}

?>
        </tbody>
    </table>
    <?php
}
    ?>
</div>
</div>
</body>
</html>
