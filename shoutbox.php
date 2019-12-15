<?php
include('database.php');
if (isset($_POST['name']) && isset($_POST['shout'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $shout = mysqli_real_escape_string($conn, $_POST['shout']);
    echo $name . ' : ' . $shout . ' ' . date('d:m:Y H:m:i');
    $query = "insert into shouts (name,shout) values('$name','$shout')";
    $conn->query("INSERT INTO `shouts` (name,shout) VALUES ('$name','$shout')");
}
