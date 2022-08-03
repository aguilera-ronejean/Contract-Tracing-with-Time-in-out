    <style>
        <?php include("showCode.css");?>
    </style>
<?php
session_start();
require_once("config.php");

if(isset($_POST['submit'])){
    $timeoutcode = textboxValue("timeoutcode");
    $_SESSION['timeoutcode'] = $timeoutcode;
    date_default_timezone_set('Asia/Manila');
    $date = date('Y-m-d H:i');
    $status = 0;

    if($timeoutcode){   

        $sql3 = "SELECT id 
                FROM information
                WHERE id = '$timeoutcode'"; 
        $result3 = mysqli_query($GLOBALS['conn'], $sql3);
        $row = mysqli_fetch_assoc($result3);
        $id = $row['id'];

        if($id != $timeoutcode){
            ?> 
            <script> 
                alert("Time out code is invalid")
            </script>              
            <?php
        }
        else{
            $sql2 = "SELECT status FROM information WHERE id = '$timeoutcode'";
            $temp = mysqli_query($GLOBALS['conn'], $sql2);
            $row = mysqli_fetch_array($temp);
            $status = $row['status'];

            if($status == 0){
                ?> 
                <script> 
                    alert("User has already timed-out!")
                </script>              
                <?php
            }
            else{
                $sql4 = "UPDATE information 
                SET time_out = '$date'
                WHERE id = '$timeoutcode'"; 
                $result4 = mysqli_query($GLOBALS['conn'], $sql4);

                $sql = "UPDATE information 
                SET status = 0
                WHERE id = '$timeoutcode'"; 
                $result = mysqli_query($GLOBALS['conn'], $sql);
                header("Refresh:0; url=confirmation.php"); 
            }
                       
        }

        
        
    }
    else{
        ?> 
        <script> 
            alert("Fields can't be empty!")
        </script>              
        <?php
    }
}
    





function textboxValue($value){
    $textbox = mysqli_real_escape_string($GLOBALS['conn'], trim($_POST[$value]));

    if(empty($textbox)){
        return false;
    }
    else{
        return $textbox;
    }
}
    

?>
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
                                <strong><h1>ENTER TIME OUT CODE</h1></strong>
                                <form action = "timeout.php" method = "post">
                                <center>
                                    <h2>
                                    <input type="text" class="form-control" name="timeoutcode" placeholder="Time Out Code" style="text-align:center;">
                                    </h2>
                                    <button  type="submit" id = "submit" name = "submit" class="button">Submit</button>
                                    
                                </center>    

                                    <h5>*Enter the code given to you when you entered the premises*</h5>
                                </form>
                            </div>
                        </center>
                    </div>
                        
                </div>
            </div>
        </div>
       
</body> 
</main>

</html>
