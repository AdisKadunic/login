

<link href="css/sing-up.css" rel="stylesheet" type="text/css">
<main>
   <?php
      if (isset($_GET['error'])) {
         if ($_GET['error'] == "emptyfields") {
            echo '<p>Fill in all fields</p>';
         }
         else if ($_GET['error'] == "invaliduidmail") {
            echo '<p>invalid username and e-mail</p>';
         }
         else if ($_GET['error'] == "invaliduid") {
            echo '<p>invalid username</p>';
         }
         else if ($_GET['error'] == "invalidmail") {
            echo '<p>invalid e-mail</p>';
         }
         else if ($_GET['error'] == "passwordchech") {
            echo '<p>your passwords dont match</p>';
         }
         else if ($_GET['error'] == "usertaken") {
            echo '<p>username is already taken</p>';
         }
      else if ($_GET["singup"] == "success") {
            echo '<p>singup successful</p>';
      }
   }
   ?>
   <div id="sing-up">
   <form action="includes/singup.inc.php" method="post">
   <input type="text" name="uid" class="inp" placeholder="Username"><br><br>
   <input type="text" name="mail" class="inp" placeholder="E-mail"><br><br>
   <input type="password" name="pwd" placeholder="Password" class="Password"><br><br>
   <input type="password" name="pwd-repeat" placeholder="Repeat Password" class="Password"><br><br>
   <button type="submit" name="singup-submit" id="sinbut">Singup</button><br><br>
   </div>
</main>

<?php
require "footer.php";
?>