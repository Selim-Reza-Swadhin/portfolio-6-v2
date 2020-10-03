<?php
$conn = mysqli_connect('localhost', 'root', '', 'portfolio-6');

function validation($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = validation($_POST['name']);
    $email = validation($_POST['email']);
    $body = validation($_POST['body']);

    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $body = mysqli_real_escape_string($conn, $body);

    $error = "";

    if (empty($name)) {

        $error = "First name must not be empty";

    } elseif (empty($email)) {

        $error = "Email field must not be empty";

    } elseif (file_exists($email)) {

        $error = "Email already exists.";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $error = "Invalid email address";

    } elseif (empty($body)) {
        $error = "Message field must not be empty";

    } else {
        $query = "INSERT INTO messages(name, email, body) VALUES ('$name', '$email', '$body')";
        $inserted_rows = mysqli_query($conn, $query);
        if ($inserted_rows) {
            $msg = "Message Sent Successfully.";
        } else {
            $msg = "Message Sent Not Successfully.";
        }
        header("location:index.php");
    }

}


if (isset($error)) {
    echo "<span style='color:red'>$error</span>";
}

if (isset($msg)) {
    echo "<span style='color:green'>$msg</span>";
}
?>

