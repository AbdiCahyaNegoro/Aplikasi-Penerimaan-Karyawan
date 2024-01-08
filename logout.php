<?php
    session_start();
    session_destroy();
    echo "<script>alert('Anda Sudah Logout');window.location='login.php';</script>";
?>