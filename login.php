<?php
                 if (isset($_SESSION['userId'])) {
                    echo '<form action="includes/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit">Log out</button>
                </form>';
                }
                else {
                    echo '<div id="login-form">
                    <form action="includes/login.inc.php" method="post">
                    <input type="text" name="mailuid" id="Uname" placeholder="Username/E-mail..."><br><br>
                    <input type="password" name="pwd" id="Upw" placeholder="password..."><br><br>
                    <button type="submit" name="login-submit" id="logbut">Login</button><br><br>
                    <a href="password/reset-password.php">Foragot your password</a>
                </form>
                </div>';
                
                }
            ?>