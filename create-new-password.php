<?php 
 require "header.php";
?>

    <main>
        <div class="wrapper-main">
            <section class="section-default">

                <?php 
                    $selector = $_GET["selector"];
                    $validator = $_GET["validator"];

                    if (empty($selector) || empty($validator)) {
                            echo "validate non";
                    } else {
                        if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
                            ?>

                            <?php 
                                <form action="include/reset-password.inc.php" methid="post">;
                                    <input type="hidden" name="selector" value="<?php echo $selector ?>">;
                                    <input type="hidden" name="validator" value="<?php echo $validator ?>">;
                                    <input type="password" name="pwd" placeholder="enter a new password">;
                                    <input type="password" name="pwd-repeat" placeholder="repeat new password">;
                                    <button type="submit" name="Reset password submit">Button</button>
                            ?>
                        }
                    }
                ?>

            </section>
        </div>
    </main>


<?php 
require "footer.php";
?>