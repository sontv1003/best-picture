<?php
    if (isset($_SESSION) == false){
        session_start();
    }

    $id = isset($_POST['id']) ? $_POST['id'] : FALSE;
    if ($id) {
        $_SESSION['upload_category'] = $id;
        echo 1;
    } else {
        echo 0;
    }
?>