<?php
    require_once "./login_core.php";
?>
<?php if ( isset( $_SESSION['accessToken'] ) ): ?>
<a href="logout.php">LogOut</a>
<?php else: ?>
<a href="<?php echo $url; ?>">Login With Facebook</a>
<?php endif;?>


