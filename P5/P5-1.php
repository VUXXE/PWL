<html>
<body>
    <Form action="#" method="get">
        Nama : <input type="text" name="tnama"/><br/>
        Umur : <input type="text" name="tumur"/><br/>
        <Input type="submit" name="bok" value="OK"/>
    </Form>
    <?php
    if (isset($_GET["bok"])) {
        echo"". $_GET["tnama"] ."<br/>";
        echo"". $_GET["tumur"] ."";
    }
    ?>
</body>
</html>