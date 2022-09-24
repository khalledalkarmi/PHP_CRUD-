<?php
require("config.php");
try {
    $id = $_GET['id'];
    $query = "DELETE FROM patient WHERE id=$id";
    $pdo->exec($query);
    header("location:index.php");
} catch (Exception $e) {
    echo $e;
}
?>