<?php
    include_once '../includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/profil.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
    <p>you are logd in</p>
    <?php 
        $sql = "SELECT * FROM users;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['uidUsers'];
            }
        }
    ?>
</body>
</html>