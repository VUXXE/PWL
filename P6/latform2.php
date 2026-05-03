<html>
<head>
    <title>Contoh Form dengan POST</title>
</head>
<body>
    <h1>Only for authorized user</h1>
    <hr>
    <form action="proses_login.php" method="post">
        Username : <input type="text" name="username">
        <br>
        Password : <input type="password" name="password">
        <br>
        <input type="submit" value="login">
    </form>
</body>
</html>