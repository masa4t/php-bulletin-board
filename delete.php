<?php
    require('library.php');
    session_start();

    if (isset($_SESSION['id']) && isset($_SESSION['name'])) {
        $name = $_SESSION['name'];
        $id = $_SESSION['id'];
    } else {
        header('Location: login.php');
        exit();
    }

    $post_id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    $db = dbconnect();
    $stmt = $db->prepare('delete from posts where id=? limit 1');
    $stmt->bind_param('i', $post_id);
    $stmt->execute();

header('Location: index.php'); exit();
?>
