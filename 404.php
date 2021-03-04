<!DOCTYPE html>
<?php require_once "dbconfig.php"?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404</title>
</head>
<body>
    <h1>404, Please Check yourself before you wreck yourself</h1>
    <?php $result = $db->query("SELECT * FROM images WHERE image = '404.gif'");
    ?>
    <?php if($result->num_rows > 0){ ?>
        <?php while($row = $result->fetch_assoc()){ ?>
        <img src="<?php echo $row['image']; ?>"/>
        <?php }}?>
</body>
</html>