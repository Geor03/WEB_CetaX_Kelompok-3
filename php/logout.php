<?php
    session_start();
    session_destroy();
    echo "<script>alert('');window.location.href='../home.php';</script>";
