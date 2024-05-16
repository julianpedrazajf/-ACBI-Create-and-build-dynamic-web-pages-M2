<?php
    $link = mysqli_connect("localhost", "root", "", "ticketstore");
    if ($link->connect_error) {
        die("Error:" . $link->connect_error);
    } else {
        echo ("Succesful");
    }
?>
<h3 class="text-center">Featured Products</h3>
<div class="container mb-4"></div>
