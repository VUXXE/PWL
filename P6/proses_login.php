<html>
<head>
    <title>Proses Input</title>
</head>
<body>
    <?php
        // Mengambil data dari method POST
        $username = $_POST["username"];
        $password = $_POST["password"];
    ?>

    Username : <?php echo $username; ?>
    <br>
    Password : <?php echo $password; ?>
</body>
</html>