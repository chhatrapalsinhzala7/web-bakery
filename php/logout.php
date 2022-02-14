<?php
    if (isset($_SESSION['userid']) && isset($_SESSION['card'])) {
        unset($_SESSION['userid']);
        unset($_SESSION['cart']);
        header('Location: ../index.html');
    }
?>