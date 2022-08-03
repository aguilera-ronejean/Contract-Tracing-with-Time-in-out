<?php 
    $conn = mysqli_connect('sql112.epizy.com', 'epiz_27402531', 'jqsHPatVOILdM', 'epiz_27402531_tracingform');
    
    if(!$conn)
    {
    die("Connection failed: " . mysqli_connect_error());
    }

?>