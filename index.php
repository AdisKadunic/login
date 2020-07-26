<?php
    require "header.php";
?>

    <main>
    <?php
        if (isset($_SESSION['userId'])) {
            echo '<p>you are logd in</p>';
        }
        else {
            echo '<p>u are not logd in</p>';
        }
    ?>
    </main>

<?php
    require "footer.php";
?>