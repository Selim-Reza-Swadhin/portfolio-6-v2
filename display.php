<?php
$conn = mysqli_connect("localhost", "root", "", "portfolio-6");
$sql = "select * from messages order by id desc";
$res = mysqli_query($conn, $sql);

?>

<!doctype html>
<html lang="en">
<body style="text-align: center">
<button onclick="Print()">Print Page</button>
<script>
    function Print() {
        window.print();
    }
</script>
<br><br>


<!--Table part only read-->

<table border="1" width="800" height="80">
    <tr style="text-align: center">
        <td>Id</td>
        <td>Student Name</td>
        <td>Email</td>
        <td>Message</td>
        <td>Time</td>
        <td>Action</td>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($res)) { ?>
        <tr style="text-align: center">
            <td><?= $row['id']; ?></td>
            <td><?= $row['name']; ?></td>
            <td><?= $row['email']; ?></td>
            <td>
                <textarea name="" id="" cols="30" rows="10">
                    <?= $row['body']; ?>
                </textarea>
            </td>
            <td><?= $row['time']; ?></td>
            <td>
                <a href="displayshow.php?id=<?= $row['id'];?> &name= <?= $row['name'];?> &email= <?= $row['email'];?> &body= <?= $row['body'];?>">Show</a>
            </td>
        </tr>
    <?php } ?>
</table>
</body>
</html>


