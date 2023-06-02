<?php
include "config.php";

try {

    // delete query
    $query = "DELETE FROM tb_kesmas WHERE no = ?";
    $stmt = $db->prepare($query);
    $stmt->bindParam(1, $_GET['no']);

    if ($stmt->execute()) {
        header("Location: kesmas.php");
    } else {
        die('Gagal menghapus data.');
    }
}

// to handle error
catch (PDOException $exception) {
    echo "Error: " . $exception->getMessage();
}
