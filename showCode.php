<?php
    session_start();
    $id2 = $_SESSION['id'];
    
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
                                    <input type="text" class="form-control" id="idcode" value="<?php echo $id2 ?>" style="text-align:center;" readonly >
                                    </h2>
                                <button onclick="copy()" class = "button">Copy Code</button>

                                <h5>*Code to be used before exiting the premises*</h5>
                            </div>
                        </center>
                    </div>
                        
                </div>
            </div>
        </div>
       
</body> 
</main>
<script>
    function copy() {
        /* Get the text field */
        var copyText = document.getElementById("idcode");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /*For mobile devices*/

        /* Copy the text inside the text field */
        document.execCommand("copy");

        /* Alert the copied text */
        alert("Copied the text: " + copyText.value);
    }
</script>
</html>
