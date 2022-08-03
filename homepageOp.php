<?php
session_start();
require_once("config.php");

if(isset($_POST['submit'])){
    createData();
}

function createData(){
    $id = uniqid();
    $lastname = textboxValue("lastname");
    $firstname = textboxValue("firstname"); 
    $middlename = textboxValue("middlename"); 
    $address = textboxValue("address");
    $phonenumber = textboxValue("phonenumber");
    $email = textboxValue("email");
    $temperature = textboxValue("temperature");
    $sympcontact = textboxValue("sympcontact");
    $travel = textboxValue("travel");
    date_default_timezone_set('Asia/Manila');
    $date = date('Y-m-d H:i');
    $status = 1;
    
    if($lastname && $firstname && $middlename && $address && $phonenumber && $email && $sympcontact && $travel && $temperature){

        $symp=$_POST['symptoms']; 
                $chk=""; 

                foreach($symp as $chk1)  
                {  
                    $chk .= $chk1.",";  
                }  

        $sql = "insert into information(id, lastname, firstname, middlename, address, phonenumber, email, temperature, symptoms, sympcontact, travel, time_in, time_out, status) 
                values('$id','$lastname','$firstname','$middlename','$address','$phonenumber','$email', '$temperature', '$chk','$sympcontact','$travel','$date', '', $status)";    
                
        if($temperature >= 37.1){
            $temp = "Your temperature is ".$temperature."! You can't enter the premises!";
            echo '<script type="text/javascript">alert("'.$temp.'");</script>';
            header("Refresh:0; url=index.php"); 
        }
        else{
            if(mysqli_query($GLOBALS['conn'], $sql) or die( mysqli_error($GLOBALS['conn']))){
                
                $success = "Welcome ".$firstname."! Keep Safe and Practice Social Distancing! Enjoy your Stay!";
                echo '<script type="text/javascript">alert("'.$success.'");</script>';

                $sql2 = "SELECT id FROM information WHERE lastname = '$lastname' AND firstname = '$firstname' AND middlename = '$middlename' AND email = '$email'"; 
                $result = mysqli_query($GLOBALS['conn'], $sql2);
                $row = mysqli_fetch_assoc($result);
                $id2 = $row['id'];  
                $_SESSION['id'] = $id2;
                
                

                header("Refresh:0; url=showCode.php");            
                    
            }
            else
            {
                echo "Error: " . $sql . $GLOBALS['conn']->error;
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