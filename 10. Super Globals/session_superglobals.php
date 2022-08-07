<?php
    session_unset();
    session_destroy();
    session_start();

    $_SESSION['username'] = 'root';
