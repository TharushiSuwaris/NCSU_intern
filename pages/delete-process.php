<?php
    include("../pages/config.php");

    $sql = "DELETE FROM user WHERE uno='" . $_GET["userid"] . "'";

    if (mysqli_query($db, $sql)) {
        echo '<script>alert("Record deleted successfully")</script>';
        header("location: dashboard_admin.php");
    } else {
        echo "Error deleting record: " . mysqli_error($db);
    }
?>