<?php
include('includes/config.php');

// Check Committees
echo "<h1>Committees</h1>";
$q = "SELECT * FROM `committees`"; 
$r = mysqli_query($connect, $q);
if ($r) {
    if (mysqli_num_rows($r) > 0) {
        while ($row = mysqli_fetch_assoc($r)) {
            print_r($row);
            echo "<br>";
        }
    } else {
        echo "No committees found.";
    }
} else {
    echo "Error querying committees: " . mysqli_error($connect);
}

// Check if NULL committee is allowed?
// We can't really check via query easily without try-insert.
?>
