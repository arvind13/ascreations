<?php
define('root','');
$title = 'Signup';
include root.'layout/header.php';
?>

<div id="body-holder">

    <form class="lsform" id="signup" name="signup" target="inc/php/login.php" method="post">
        <h2>Login</h2>
        
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="●●●●●●" required>
        
        <input type="button" name="btn" value="Login">
    </form>
</div>

<?php
include root.'layout/footer.php';
?>