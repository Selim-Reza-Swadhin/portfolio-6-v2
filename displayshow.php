<?php
require_once 'header_link.php';
$conn = mysqli_connect("localhost", "root", "", "portfolio-6");
$id = $_GET['id'];
$sql = "select * from messages where id='$id'";
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

<style>
    .mystyle {
        border: 1px solid green;
        margin: 0px 100px 10px;
        padding: 10px;
        border-radius: 7px;
        background-image: url("assets/images/couteru.jpg");
        background-attachment: fixed;
        background-color: #3C3A3A;
    }
</style>

<div class="mystyle">
    <?php while ($row =mysqli_fetch_assoc($res)){?>
    <form action="">
        <div class="form-group form-group-lg">
            <div class="col-md-2">
                <input type="text" style="color: #fff;" class="form-control" value="<?= $row['id']; ?>">
            </div>
        </div>
        <div class="form-group form-group-lg">
            <div class="col-md-6">
                <input type="text" style="color: #fff;" class="form-control" value="<?= $row['name']; ?>">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6">
                <input type="email" style="color: #fff;" name="email" class="form-control" value="<?= $row['email']; ?>">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <textarea style="text-align: left; color: #fff;" class="form-control" name="body" rows="5">
                    <?= $row['body']; ?>
                </textarea>
            </div>
        </div>


        <div class="form-group">
            <div class="col-md-3">
                <input type="text" style="color: #fff;" class="form-control" value="<?= $row['time']; ?>">
            </div>
        </div>
    </form>
    <?php } ?>
</div>
</body>
</html>