<?php include('database.php');

$query = "SELECT * FROM `shouts` order by id ASC";

$result = $conn->query($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    </link>
</head>


<body>
    <div id="container">
        <header>
            <h1>Js Shoutbox</h1>
        </header>
        <div id="shouts">
            <ul>
                <?php
                while ($row = $result->fetch_array()) {
                    ?>
                    <li><?php echo $row['name'] . ' :  ' . $row['shout'] . ' ' . $row['date'] ?></li>
                <?php
                }
                ?>
            </ul>
        </div>
        <footer>
            <form action="">
                <label for="name">Name: </label>
                <input type="text" id="name">
                <label for="text">Shot Text</label>
                <input type="text" id="shout">
                <input type="submit" id="submit" value="SHOUT!">

            </form>
        </footer>
    </div>
</body>

</html>