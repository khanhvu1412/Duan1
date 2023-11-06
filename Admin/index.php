<?php


include("header.php");

// contronler
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case "":
            include("");
            break;




    }
} else {
    include("home.php");
}



include("footer.php");
?>