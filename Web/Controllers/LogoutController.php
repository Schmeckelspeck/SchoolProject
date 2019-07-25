<?php
    if(isset($_POST['btnLogout']))
    {
        unset($_SESSION['user_role']);
    }
?>