<?php
    session_start();
    require_once("config.php");
    $timeoutcode = $_SESSION['timeoutcode'];

    $sql = "SELECT firstname FROM information WHERE id = '$timeoutcode'";
    $temp = mysqli_query($GLOBALS['conn'], $sql);
    $row = mysqli_fetch_array($temp);
    $firstname = $row['firstname'];

    ?>
    <style>
        <?php include("showCode.css");?>
    </style>
<html> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>
<body>

    <main>
        <div class = "modal-dialog text-center">
            <div class = "col-sm-12 main-section">
                <div class = "modal-content">
                    <br>
                    <div class="row">
                        <div class="span2">
                            <strong><h1><div id="txt"> </div><h1></strong>
                        </div>
                        <center>
                            <div class="span">
                                <strong><h1>TIME OUT CODE</h1></strong>
                                
                                    <h2>
                                    Thank you for visiting us <?php echo $firstname ?>! Come Again!
                                    </h2>
                                

                                <h5>*Stay Safe! Godbless!*</h5>
                            </div>
                        </center>
                    </div>
                        
                </div>
            </div>
        </div>
       
</body> 
</main>

</html>
