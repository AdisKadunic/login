<?php
require "../header.php";
?>


<main>
<h1>reser your password</h1>
<p>an email will be sent to you in how to reset your password</p>
<form action="../includes/reset-request.inc.php" method="post">
<input type="text" name="email" placeholder="enter your email adres....">
<button type="submit" name="reset-request-submit">Receve new password by mail</button>
</form>
<?php 
    if (isset($_GET["reset"])) {
        if ($_GET["reset"] == "success") {
            echo '<p class="signupsuccess>"Check your e-mail</p>';
        }
    }
?>
</main>

<?php
require "../footer.php";
?>