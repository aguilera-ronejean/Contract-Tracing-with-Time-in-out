<?php
    include("header.php");  
    include("homepageOp.php");
    ?>
    <style>
        <?php include("homepage.css");?>
    </style>

<html>
<body>
    

    <main>
        <div class="container">
            <form action = "homepageOp.php" method = "post">
                <div class="form-group">
                    <label for="exampleInputEmail1"><b>Last Name</b></label>
                    <input type="text" class="form-control" name = "lastname" id="lastname" aria-describedby="emailHelp" placeholder="Enter your last name" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><b>First Name</b></label>
                    <input type="text" class="form-control" name = "firstname" id="firstname" placeholder="Enter your first name" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><b>Middle Name</b></label>
                    <input type="text" class="form-control" name = "middlename" id="middlename" placeholder="Enter your middle name" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><b>Address</b></label>
                    <input type="text" class="form-control" name = "address" id="address" placeholder="Enter your complete addresss" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><b>Phone Number</b></label>
                    <input type="text" class="form-control" name = "phonenumber" id="phonenumber" placeholder="Enter your 11 Digit Phone Number" maxlength="11" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><b>Email Address</b></label>
                    <input type="email" class="form-control" name = "email" id="email" placeholder="Enter your email address" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><b>Temperature</b></label>
                    <input type="number" class="form-control" name = "temperature" id="temperature" placeholder="Enter your temperature" step ="any" required>
                </div>
                <br>

                    <label><b>Do you have any of the following symptoms?:</b></label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="symptoms[]" id="symptoms" value="New and Persistent Cough">
                            <label class="form-check-label" for="symptoms">
                                New and Persistent Cough
                            </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="symptoms[]" id="symptoms" value="Shortness of Breath and Difficulty of Breathing">
                            <label class="form-check-label" for="symptoms">
                                Shortness of Breath and Difficulty of Breathing
                            </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="symptoms[]" id="symptoms" value="Fever">
                            <label class="form-check-label" for="symptoms">
                                Fever
                            </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="symptoms[]" id="symptoms" value="No Symptoms">
                            <label class="form-check-label" for="symptoms">
                                No Symptoms
                            </label>
                    </div>

                    <br>
                    <label><b>Have you been in contact with anyone in the last 14 days who is experiencing these symptoms?:</b></label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="sympcontact" id="sympcontact" value="Yes">
                            <label class="form-check-label" for="sympcontact">
                                Yes
                            </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="sympcontact" id="sympcontact" value="No">
                            <label class="form-check-label" for="sympcontact">
                                No
                            </label>
                    </div>

                    <br>
                    <label><b>Have you been in contact with anyone who has since tested positive for Covid-19?:</b></label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="contact" id="contact" value="Yes">
                            <label class="form-check-label" for="contact">
                                Yes
                            </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="contact" id="contact" value="No">
                            <label class="form-check-label" for="contact">
                                No
                            </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="contact" id="contact" value="Not Sure">
                            <label class="form-check-label" for="contact">
                                Not Sure
                            </label>
                    </div>
                    <br>

                    <div class="form-group">
                    <label for="exampleInputPassword1"><b>Have you travelled abroad in the last 1-2 months? Where did you go?</b></label>
                    <input type="text" class="form-control" name ="travel" id="travel" required>
                    </div>

                    
                
                
                <center><button type="submit" id = "submit" name = "submit" class="btn">Submit</button></center>
                
            </form>
        </div>
    </main>
</body>
</html>