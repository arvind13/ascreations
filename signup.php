<?php
define('root','');
$title = 'Signup';
include root.'layout/header.php';
?>

<div id="body-holder">

    <form class="lsform" id="signup" name="signup" target="inc/php/signup.php" method="post">
        <h2>Sign Up</h2>
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="●●●●●●" required>
        
        <input type="button" name="btn" value="SignUp">
    </form>
</div>

<?php
include root.'layout/footer.php';
?>