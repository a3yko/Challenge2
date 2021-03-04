<?php
// Include the database configuration file
require_once 'dbconfig.php';

// Get image data from database
$result = $db->query("SELECT * FROM images WHERE ID = (SELECT MAX(ID) FROM images)");
?>

<?php if($result->num_rows > 0){ ?>
    <div class="gallery">
        <?php while($row = $result->fetch_assoc()){ ?>
            <img src="<?php echo $row['image']; ?>"/>
            <body>
            <p>
                Type: <?php echo $row['type']; ?> <br>
                Size: <?php echo $row['size']; ?> <br>
                Time: <?php echo $row['time']; ?> <br>
                Path: <?php echo $row['path']; ?> <br>
            </p>
            </body>
        <?php } ?>
    </div>
<?php }else{ ?>
    <p class="status error">Image(s) not found...</p>
<?php } ?>